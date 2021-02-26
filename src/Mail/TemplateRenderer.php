<?php declare(strict_types = 1);

namespace Wavevision\Mail;

use Latte\Engine;
use Nette\SmartObject;
use Wavevision\DIServiceAnnotation\DIService;

/**
 * @DIService(generateInject=true)
 */
class TemplateRenderer
{

	use SmartObject;

	private Engine $engine;

	public function __construct()
	{
		$this->engine = new Engine();
	}

	/**
	 * @param array<mixed> $parameters
	 */
	public function renderToString(string $templatePath, array $parameters): string
	{
		return $this->engine->renderToString($templatePath, $parameters);
	}

}
