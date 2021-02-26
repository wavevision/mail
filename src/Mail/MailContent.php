<?php declare(strict_types = 1);

namespace Wavevision\Mail;

use Nette\SmartObject;
use Nette\Utils\Html;

class MailContent
{

	use SmartObject;

	private string $preheader;

	private Header $header;

	private string $style;

	private string $msoStyle;

	private string $customStyle;

	/**
	 * @var Html<mixed>
	 */
	private Html $body;

	/**
	 * @var array<string>
	 */
	private array $footerItems;

	public function getPreheader(): string
	{
		return $this->preheader;
	}

	/**
	 * @return static
	 */
	public function setPreheader(string $preheader)
	{
		$this->preheader = $preheader;
		return $this;
	}

	public function getHeader(): Header
	{
		return $this->header;
	}

	/**
	 * @return static
	 */
	public function setHeader(Header $header)
	{
		$this->header = $header;
		return $this;
	}

	public function getStyle(): string
	{
		return $this->style;
	}

	/**
	 * @return static
	 */
	public function setStyle(string $style)
	{
		$this->style = $style;
		return $this;
	}

	public function getMsoStyle(): string
	{
		return $this->msoStyle;
	}

	/**
	 * @return static
	 */
	public function setMsoStyle(string $msoStyle)
	{
		$this->msoStyle = $msoStyle;
		return $this;
	}

	public function getCustomStyle(): string
	{
		return $this->customStyle;
	}

	/**
	 * @return static
	 */
	public function setCustomStyle(string $customStyle)
	{
		$this->customStyle = $customStyle;
		return $this;
	}

	/**
	 * @return Html<mixed>
	 */
	public function getBody(): Html
	{
		return $this->body;
	}

	/**
	 * @param Html<mixed> $body
	 * @return static
	 */
	public function setBody(Html $body)
	{
		$this->body = $body;
		return $this;
	}

	/**
	 * @return array<string>
	 */
	public function getFooterItems(): array
	{
		return $this->footerItems;
	}

	/**
	 * @param array<string> $footerItems
	 * @return static
	 */
	public function setFooterItems(array $footerItems)
	{
		$this->footerItems = $footerItems;
		return $this;
	}

}
