<?php declare (strict_types = 1);

namespace Wavevision\MailExamples;

trait InjectMailTemplateFactory
{

	protected MailTemplateFactory $mailTemplateFactory;

	public function injectMailTemplateFactory(MailTemplateFactory $mailTemplateFactory): void
	{
		$this->mailTemplateFactory = $mailTemplateFactory;
	}

}
