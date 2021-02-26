<?php declare(strict_types = 1);

namespace Wavevision\Mail;

use Nette\SmartObject;

class Button
{

	use SmartObject;

	public const BUTTON_GREEN = 'button--green';

	public const BUTTON_RED = 'button--red';

	private string $label;

	private string $link;

	private string $class;

	public function __construct(string $label, string $link, string $class = '')
	{
		$this->label = $label;
		$this->link = $link;
		$this->class = $class;
	}

	public function getLabel(): string
	{
		return $this->label;
	}

	public function getLink(): string
	{
		return $this->link;
	}

	public function getClass(): string
	{
		return $this->class;
	}

}
