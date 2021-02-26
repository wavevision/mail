<?php declare(strict_types = 1);

require __DIR__ . '/../vendor/autoload.php';

use Nette\Bootstrap\Configurator;
use Wavevision\MailExamples\Render;
use Wavevision\MailExamples\Send;

$configurator = new Configurator();
$configurator
	->setTempDirectory(__DIR__ . '/../temp')
	->addConfig(__DIR__ . '/config/config.neon')
	->enableDebugger(__DIR__ . '/../log');
$container = $configurator->createContainer();
/** @var Send $send */
$send = $container->getByType(Send::class);
$send->process();
/** @var Render $render */
$render = $container->getByType(Render::class);
echo $render->process();
