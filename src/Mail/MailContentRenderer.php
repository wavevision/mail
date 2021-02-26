<?php declare(strict_types = 1);

namespace Wavevision\Mail;

use Nette\SmartObject;
use Wavevision\DIServiceAnnotation\DIService;

/**
 * @DIService(generateInject=true)
 */
class MailContentRenderer
{

	use InjectMailPathManager;
	use InjectTemplateRenderer;
	use SmartObject;

	public function renderToString(MailContent $mailContent): string
	{
		return $this->templateRenderer->renderToString(
			$this->mailPathManager->template(),
			['mail' => $mailContent]
		);
	}

}
