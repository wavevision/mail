<?php declare(strict_types = 1);

namespace Wavevision\Mail;

use Nette\SmartObject;
use Nette\Utils\FileSystem;
use Nette\Utils\Html;
use Wavevision\DIServiceAnnotation\DIService;

/**
 * @DIService(generateInject=true)
 */
class MailContentFactory
{

	use InjectButtonRenderer;
	use InjectMailPathManager;
	use SmartObject;

	public function create(): MailContent
	{
		return (new MailContent())
			->setStyle($this->style($this->mailPathManager->style()))
			->setMsoStyle($this->style($this->mailPathManager->msoStyle()))
			->setHeader(new Header(Html::el('img')->src('https://via.placeholder.com/350x65'), '#'))
			->setCustomStyle(/*'.email-body_inner{ background-color: red; }'*/ '')
			->setBody(
				Html::el()
					->addHtml(Html::el('h1')->setText('Hello'))
					->addHtml(Html::el('p')->setText('there'))
					->addHtml($this->buttonRenderer->render(new Button('Click me', '#')))
					->addHtml(Html::el('p')->setText('bottom'))
			)
			->setPreheader('hello')
			->setFooterItems(['one', 'two']);
	}

	private function style(string $filePath): string
	{
		return FileSystem::read($filePath);
	}

}
