<?php declare(strict_types = 1);

namespace Wavevision\Mail\Rendering;

use Nette\SmartObject;
use Nette\Utils\Html;

class MailTemplate
{

	use SmartObject;

	private string $preheader;

	private Header $header;

	private string $customStyle;

	/**
	 * @var Html<mixed>
	 */
	private Html $body;

	/**
	 * @var array<string>
	 */
	private array $footerItems;

	private ?string $inlineResourcesPath = null;

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

	public function getInlineResourcesPath(): ?string
	{
		return $this->inlineResourcesPath;
	}

	/**
	 * @return static
	 */
	public function setInlineResourcesPath(?string $inlineResourcesPath)
	{
		$this->inlineResourcesPath = $inlineResourcesPath;
		return $this;
	}

}
