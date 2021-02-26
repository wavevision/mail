<?php declare (strict_types = 1);

namespace Wavevision\Mail;

trait InjectMailPathManager
{

	protected MailPathManager $mailPathManager;

	public function injectMailPathManager(MailPathManager $mailPathManager): void
	{
		$this->mailPathManager = $mailPathManager;
	}

}
