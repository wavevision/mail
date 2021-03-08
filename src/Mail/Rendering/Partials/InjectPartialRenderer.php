<?php declare (strict_types = 1);

namespace Wavevision\Mail\Rendering\Partials;

trait InjectPartialRenderer
{

	protected PartialRenderer $partialRenderer;

	public function injectPartialRenderer(PartialRenderer $partialRenderer): void
	{
		$this->partialRenderer = $partialRenderer;
	}

}
