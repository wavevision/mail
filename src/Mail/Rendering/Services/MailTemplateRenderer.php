<?php declare(strict_types = 1);

namespace Wavevision\Mail\Rendering\Services;

use Nette\SmartObject;
use Nette\Utils\FileSystem;
use Nette\Utils\Html;
use Wavevision\DIServiceAnnotation\DIService;
use Wavevision\Mail\Rendering\MailTemplate;

/**
 * @DIService(generateInject=true)
 */
class MailTemplateRenderer
{

	use SmartObject;
	use InjectTemplateRenderer;
	use InjectMailPathManager;

	public function renderToString(MailTemplate $template): string
	{
		return $this->templateRenderer->renderToString(
			$this->mailPathManager->template(),
			[
				'mail' => $template,
				'style' => $this->attributes($this->styleFromFile($this->mailPathManager->style())),
				'msoStyle' => $this->styleFromFile($this->mailPathManager->msoStyle()),
				'customStyle' => $this->attributes($this->style($template->getCustomStyle())),
			]
		);
	}

	/**
	 * @return Html<mixed>
	 */
	private function styleFromFile(string $filePath): Html
	{
		return $this->style(FileSystem::read($filePath));
	}

	/**
	 * @return Html<mixed>
	 */
	private function style(string $content): Html
	{
		return Html::el('style')->setAttribute('type', 'text/css')
			->addHtml($content);
	}

	/**
	 * @param Html<mixed> $style
	 * @return Html<mixed>
	 */
	private function attributes(Html $style): Html
	{
		return $style->addAttributes(
			[
				'rel' => 'stylesheet',
				'media' => 'all',
			]
		);
	}

}
