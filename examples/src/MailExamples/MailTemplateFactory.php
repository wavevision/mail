<?php declare(strict_types = 1);

namespace Wavevision\MailExamples;

use Nette\SmartObject;
use Nette\Utils\Html;
use Wavevision\DIServiceAnnotation\DIService;
use Wavevision\Mail\Rendering\Header;
use Wavevision\Mail\Rendering\MailTemplate;
use Wavevision\Mail\Rendering\Partials\Button;
use Wavevision\Mail\Rendering\Partials\InjectButtonRenderer;

/**
 * @DIService(generateInject=true)
 */
class MailTemplateFactory
{

	use SmartObject;
	use InjectButtonRenderer;

	public function create(): MailTemplate
	{
		return (new MailTemplate())
			->setHeader(new Header(Html::el('img')->addAttributes(['width' => 105])->src('logo.png'), '#'))
			->setCustomStyle(/*'.email-body_inner{ background-color: red; }'*/ '')
			->setBody(
				Html::el()
					->addHtml(Html::el('h1')->setText('Hello there,'))
					->addHtml(
						Html::el('p')->setHtml(
							'Lorem ipsum dolor sit <a href="#">amet</a>, 
								  consectetur adipiscing elit, 
                                  sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.'
						)
					)
					->addHtml($this->buttonRenderer->render(new Button('Click me', '#')))
					->addHtml(
						Html::el('p')->setText(
							'Lorem ipsum dolor sit amet, consectetur adipiscing elit,
							 sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.'
						)
					)
			)
			->setPreheader('Lorem ipsum dolor sit amet.')
			->setFooterItems(['© 2019 Wavevision', '1234 Street Rd.'])
			->setInlineResourcesPath(__DIR__ . '/../../resources');
	}

}
