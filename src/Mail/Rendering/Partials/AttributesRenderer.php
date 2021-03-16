<?php declare(strict_types = 1);

namespace Wavevision\Mail\Rendering\Partials;

use Nette\SmartObject;
use Nette\Utils\Html;
use Wavevision\DIServiceAnnotation\DIService;
use Wavevision\Mail\Rendering\Services\InjectMailPathManager;

/**
 * @DIService(generateInject=true)
 */
class AttributesRenderer
{

	use InjectMailPathManager;
	use InjectPartialRenderer;
	use SmartObject;

	/**
	 * @param Html<mixed>[] $attributes
	 * @return Html<mixed>
	 */
	public function render(array $attributes): Html
	{
		return $this->partialRenderer->render($this->mailPathManager->attributes(), ['attributes' => $attributes]);
	}

}
