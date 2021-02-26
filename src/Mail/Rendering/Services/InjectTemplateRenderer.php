<?php declare (strict_types = 1);

namespace Wavevision\Mail\Rendering\Services;

trait InjectTemplateRenderer
{

	protected TemplateRenderer $templateRenderer;

	public function injectTemplateRenderer(TemplateRenderer $templateRenderer): void
	{
		$this->templateRenderer = $templateRenderer;
	}

}
