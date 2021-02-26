<?php declare(strict_types = 1);

namespace Wavevision\Mail;

use Nette\SmartObject;
use Wavevision\DIServiceAnnotation\DIService;

/**
 * @DIService(generateInject=true)
 */
class ButtonRenderer
{

	use SmartObject;
	use InjectMailPathManager;
	use InjectTemplateRenderer;

	public function render(Button $button): string
	{
		return $this->templateRenderer->renderToString($this->mailPathManager->button(), ['button' => $button]);
	}

}
