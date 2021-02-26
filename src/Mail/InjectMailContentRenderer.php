<?php declare (strict_types = 1);

namespace Wavevision\Mail;

trait InjectMailContentRenderer
{

	protected MailContentRenderer $mailContentRenderer;

	public function injectMailContentRenderer(MailContentRenderer $mailContentRenderer): void
	{
		$this->mailContentRenderer = $mailContentRenderer;
	}

}
