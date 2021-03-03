<?php declare(strict_types = 1);

namespace Wavevision\Mail\Sending;

use Nette\Mail\Mailer;
use Nette\Mail\Message;
use Nette\SmartObject;
use Wavevision\DIServiceAnnotation\DIService;
use Wavevision\Mail\Rendering\MailTemplate;
use Wavevision\Mail\Rendering\Services\InjectMailTemplateRenderer;

/**
 * @DIService(generateInject=true)
 */
class SendMail
{

	use SmartObject;
	use InjectMailTemplateRenderer;

	private Mailer $mailer;

	public function __construct(Mailer $mailer)
	{
		$this->mailer = $mailer;
	}

	public function process(Message $message, MailTemplate $template): void
	{
		$message->setHtmlBody(
			$this->mailTemplateRenderer->renderToString($template),
			$template->getInlineResourcesPath()
		);
		$this->mailer->send($message);
	}

}
