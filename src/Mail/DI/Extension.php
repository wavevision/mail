<?php declare(strict_types = 1);

namespace Wavevision\Mail\DI;

use Nette\DI\CompilerExtension;

class Extension extends CompilerExtension
{

	public function loadConfiguration(): void
	{
		$this->compiler->loadDefinitionsFromConfig(
			$this->loadFromFile(__DIR__ . '/../../../config/services.neon')['services']
		);
	}

}
