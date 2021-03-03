<?php declare(strict_types = 1);

namespace Wavevision\MailExamples;

use Nette\Mail\Message;
use Nette\SmartObject;
use Wavevision\DIServiceAnnotation\DIService;
use Wavevision\Mail\Sending\InjectSendMail;

/**
 * @DIService
 */
class Send
{

	use InjectMailTemplateFactory;
	use InjectSendMail;
	use SmartObject;

	public function process(): void
	{
		$this->sendMail->process(
			(new Message())
				->setSubject('test')
				->setFrom('noreply@wavevision.com')
				->addTo('jakub.filla@wavevision.com'),
			$this->mailTemplateFactory->create()
		);
	}

}
