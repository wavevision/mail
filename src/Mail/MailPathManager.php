<?php declare(strict_types = 1);

namespace Wavevision\Mail;

use Nette\SmartObject;
use Wavevision\DIServiceAnnotation\DIService;

/**
 * @DIService(generateInject=true)
 */
class MailPathManager
{

	use SmartObject;

	public function template(): string
	{
		return $this->templatesDirectory() . '/template.latte';
	}

	public function button(): string
	{
		return $this->templatesDirectory() . '/button.latte';
	}

	public function msoStyle(): string
	{
		return $this->stylesDirectory() . '/mso.css';
	}

	public function style(): string
	{
		return $this->stylesDirectory() . '/style.css';
	}

	private function templatesDirectory(): string
	{
		return __DIR__ . '/../../templates/basic';
	}

	private function stylesDirectory(): string
	{
		return $this->templatesDirectory() . '/styles';
	}

}
