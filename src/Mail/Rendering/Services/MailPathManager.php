<?php declare(strict_types = 1);

namespace Wavevision\Mail\Rendering\Services;

use Nette\SmartObject;
use Wavevision\DIServiceAnnotation\DIService;
use Wavevision\Utils\Path;

/**
 * @DIService(generateInject=true)
 */
class MailPathManager
{

	use SmartObject;

	public function template(): string
	{
		return Path::join($this->templatesDirectory(), 'template.latte');
	}

	public function button(): string
	{
		return $this->partialTemplate('button.latte');
	}

	public function attributes(): string
	{
		return $this->partialTemplate('attributes.latte');
	}

	public function msoStyle(): string
	{
		return $this->styles('mso.css');
	}

	public function style(): string
	{
		return $this->styles('style.css');
	}

	private function templatesDirectory(): string
	{
		return __DIR__ . '/../../../../templates/basic';
	}

	private function partialTemplate(string $name): string
	{
		return Path::join($this->templatesDirectory(), 'partials', $name);
	}

	private function styles(string $name): string
	{
		return Path::join($this->templatesDirectory(), 'styles', $name);
	}

}
