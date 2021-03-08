<?php declare (strict_types = 1);

namespace Wavevision\Mail\Rendering\Partials;

trait InjectAttributesRenderer
{

	protected AttributesRenderer $attributesRenderer;

	public function injectAttributesRenderer(AttributesRenderer $attributesRenderer): void
	{
		$this->attributesRenderer = $attributesRenderer;
	}

}
