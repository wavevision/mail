<?php declare(strict_types = 1);

namespace Wavevision\Mail;

use Nette\SmartObject;
use Nette\Utils\Html;
use Wavevision\DIServiceAnnotation\DIService;

/**
 * @DIService(generateInject=true)
 */
class ButtonRenderer
{

	use InjectMailPathManager;
	use InjectTemplateRenderer;
	use SmartObject;

	/**
	 * @return Html<mixed>
	 */
	public function render(Button $button): Html
	{
		return Html::fromHtml(
			$this->templateRenderer->renderToString($this->mailPathManager->button(), ['button' => $button])
		);
	}

}
