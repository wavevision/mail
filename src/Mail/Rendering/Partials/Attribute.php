<?php declare(strict_types = 1);

namespace Wavevision\Mail\Rendering\Partials;

use Nette\SmartObject;

class Attribute
{

	use SmartObject;

	private string $label;

	private string $value;

	public function __construct(string $label, string $value)
	{
		$this->label = $label;
		$this->value = $value;
	}

	public function getLabel(): string
	{
		return $this->label;
	}

	public function getValue(): string
	{
		return $this->value;
	}

}
