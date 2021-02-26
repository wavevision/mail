<?php declare(strict_types = 1);

namespace Wavevision\MailExamples;

use Nette\SmartObject;
use Wavevision\DIServiceAnnotation\DIService;
use Wavevision\Mail\Rendering\Services\InjectMailTemplateRenderer;

/**
 * @DIService
 */
class Render
{

	use InjectMailTemplateFactory;
	use InjectMailTemplateRenderer;
	use SmartObject;

	public function process(): string
	{
		return $this->mailTemplateRenderer->renderToString($this->mailTemplateFactory->create());
	}

}
