<?php declare (strict_types = 1);

namespace Wavevision\Mail\Rendering\Partials;

trait InjectButtonRenderer
{

	protected ButtonRenderer $buttonRenderer;

	public function injectButtonRenderer(ButtonRenderer $buttonRenderer): void
	{
		$this->buttonRenderer = $buttonRenderer;
	}

}
