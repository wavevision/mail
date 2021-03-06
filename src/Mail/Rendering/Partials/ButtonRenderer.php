<?php declare(strict_types = 1);

namespace Wavevision\Mail\Rendering\Partials;

use Nette\SmartObject;
use Nette\Utils\Html;
use Wavevision\DIServiceAnnotation\DIService;
use Wavevision\Mail\Rendering\Services\InjectMailPathManager;

/**
 * @DIService(generateInject=true)
 */
class ButtonRenderer
{

	use InjectMailPathManager;
	use InjectPartialRenderer;
	use SmartObject;

	/**
	 * @return Html<mixed>
	 */
	public function render(Button $button): Html
	{
		return $this->partialRenderer->render($this->mailPathManager->button(), ['button' => $button]);
	}

}
