<?php declare(strict_types = 1);

namespace Wavevision\Mail\Rendering\Partials;

use Nette\SmartObject;
use Nette\Utils\Html;
use Wavevision\DIServiceAnnotation\DIService;
use Wavevision\Mail\Rendering\Services\InjectTemplateRenderer;

/**
 * @DIService(generateInject=true)
 */
class PartialRenderer
{

	use InjectTemplateRenderer;
	use SmartObject;

	/**
	 * @param array<mixed> $parameters
	 * @return Html<mixed>
	 */
	public function render(string $template, array $parameters): Html
	{
		return Html::fromHtml(
			$this->templateRenderer->renderToString($template, $parameters)
		);
	}

}
