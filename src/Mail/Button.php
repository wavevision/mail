<?php declare(strict_types = 1);

namespace Wavevision\Mail;

use Nette\SmartObject;

class Button
{

	use SmartObject;

	private string $label;

	private string $link;

	public function __construct(string $label, string $link)
	{
		$this->label = $label;
		$this->link = $link;
	}

	public function getLabel(): string
	{
		return $this->label;
	}

	public function getLink(): string
	{
		return $this->link;
	}

}
