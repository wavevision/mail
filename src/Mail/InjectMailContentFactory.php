<?php declare (strict_types = 1);

namespace Wavevision\Mail;

trait InjectMailContentFactory
{

	protected MailContentFactory $mailContentFactory;

	public function injectMailContentFactory(MailContentFactory $mailContentFactory): void
	{
		$this->mailContentFactory = $mailContentFactory;
	}

}
