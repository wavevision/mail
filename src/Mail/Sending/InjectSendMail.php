<?php declare (strict_types = 1);

namespace Wavevision\Mail\Sending;

trait InjectSendMail
{

	protected SendMail $sendMail;

	public function injectSendMail(SendMail $sendMail): void
	{
		$this->sendMail = $sendMail;
	}

}
