<?php declare(strict_types = 1);

namespace Wavevision\Mail\Rendering\Services;

use Nette\SmartObject;
use Nette\Utils\FileSystem;
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
				'style' => $this->style($this->mailPathManager->style()),
				'msoStyle' => $this->style($this->mailPathManager->msoStyle()),
			]
		);
	}

	private function style(string $filePath): string
	{
		return FileSystem::read($filePath);
	}

}
