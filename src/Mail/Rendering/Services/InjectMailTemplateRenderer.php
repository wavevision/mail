<?php declare (strict_types = 1);

namespace Wavevision\Mail\Rendering\Services;

trait InjectMailTemplateRenderer
{

	protected MailTemplateRenderer $mailTemplateRenderer;

	public function injectMailTemplateRenderer(MailTemplateRenderer $mailTemplateRenderer): void
	{
		$this->mailTemplateRenderer = $mailTemplateRenderer;
	}

}
