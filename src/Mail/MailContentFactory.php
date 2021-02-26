<?php declare(strict_types = 1);

namespace Wavevision\Mail;

use Nette\SmartObject;
use Nette\Utils\FileSystem;
use Wavevision\DIServiceAnnotation\DIService;
use function sprintf;

/**
 * @DIService(generateInject=true)
 */
class MailContentFactory
{

	use InjectMailPathManager;
	use SmartObject;
	use InjectButtonRenderer;

	public function create(): MailContent
	{
		return (new MailContent())
			->setStyle($this->style($this->mailPathManager->style()))
			->setMsoStyle($this->style($this->mailPathManager->msoStyle()))
			->setHeader('header')
			->setCustomStyle(/*'.email-body_inner{ background-color: red; }'*/ '')
			->setFooterItems([])
			->setBody(
				sprintf(
					'<h1>header</h1> <p>hello there</p> %s <p>text</p>',
					$this->buttonRenderer->render(new Button('Click me', '#'))
				)
			)
			->setPreheader('hello')
			->setFooterItems(['one', 'two']);
	}

	private function style(string $filePath): string
	{
		return FileSystem::read($filePath);
	}

}
