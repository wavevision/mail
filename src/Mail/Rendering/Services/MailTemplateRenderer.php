<?php declare(strict_types = 1);

namespace Wavevision\Mail\Rendering\Services;

use Nette\SmartObject;
use Nette\Utils\FileSystem;
use TijsVerkoyen\CssToInlineStyles\CssToInlineStyles;
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
		$renderedTemplate = $this->templateRenderer->renderToString(
			$this->mailPathManager->template(),
			[
				'mail' => $template,
			]
		);
		$cssToInlineStyles = new CssToInlineStyles();
		return $cssToInlineStyles->convert(
			$renderedTemplate,
			FileSystem::read($this->mailPathManager->style()) . (string)$template->getCustomStyle()
		);
	}

}
