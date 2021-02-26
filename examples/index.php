<?php declare(strict_types=1);


require __DIR__ . '/../vendor/autoload.php';


use Wavevision\Mail\MailContentRenderer;
use Wavevision\Mail\MailContentFactory;
use Nette\Bootstrap\Configurator;

$configurator = new Configurator();
$configurator
    ->setTempDirectory(__DIR__ . '/../temp')
    ->addConfig(__DIR__ . '/config.neon');


$container = $configurator->createContainer();

echo $container->getByType(MailContentRenderer::class)
    ->renderToString($container->getByType(MailContentFactory::class)->create());
