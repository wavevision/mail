<?php declare(strict_types = 1);

namespace Wavevision\Mail;

use Nette\SmartObject;
use Nette\Utils\Html;

class Header
{

	use SmartObject;

	/**
	 * @var Html<mixed>
	 */
	private Html $content;

	private string $link;

	/**
	 * @param Html<mixed> $content
	 */
	public function __construct(Html $content, string $link)
	{
		$this->content = $content;
		$this->link = $link;
	}

	/**
	 * @return Html<mixed>
	 */
	public function getContent(): Html
	{
		return $this->content;
	}

	public function getLink(): string
	{
		return $this->link;
	}

}
