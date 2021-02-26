<?php declare(strict_types = 1);
require __DIR__ . '/../vendor/autoload.php';

use Nette\Bootstrap\Configurator;
use Nette\Utils\Html;
use Wavevision\Mail\Rendering\Header;
use Wavevision\Mail\Rendering\MailTemplate;
use Wavevision\Mail\Rendering\Partials\Button;
use Wavevision\Mail\Rendering\Partials\ButtonRenderer;
use Wavevision\Mail\Rendering\Services\MailTemplateRenderer;

$configurator = new Configurator();
$configurator
	->setTempDirectory(__DIR__ . '/../temp')
	->addConfig(__DIR__ . '/config.neon')
	->enableDebugger(__DIR__ . '/../log');
$container = $configurator->createContainer();
$buttonRenderer = $container->getByType(ButtonRenderer::class);
echo $container->getByType(MailTemplateRenderer::class)
	->renderToString(
		(new MailTemplate())
			->setHeader(new Header(Html::el('img')->src('https://via.placeholder.com/300x45'), '#'))
			->setCustomStyle(/*'.email-body_inner{ background-color: red; }'*/ '')
			->setBody(
				Html::el()
					->addHtml(Html::el('h1')->setText('Hello there,'))
					->addHtml(
						Html::el('p')->setText(
							'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.'
						)
					)
					->addHtml($buttonRenderer->render(new Button('Click me', '#')))
					->addHtml(
						Html::el('p')->setText(
							'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.'
						)
					)
			)
			->setPreheader('Lorem ipsum dolor sit amet.')
			->setFooterItems(['© 2019 Wavevision', '1234 Street Rd.'])
	);
