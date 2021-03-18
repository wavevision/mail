<p align="center"><a href="https://github.com/wavevision"><img alt="Wavevision s.r.o." src="https://wavevision.com/images/wavevision-logo.png" width="120" /></a></p>
<h1 align="center">Mail</h1>

Customizable e-mail templates for [nette](https://github.com/nette)
based on [wildbit / postmark-templates](https://github.com/wildbit/postmark-templates).

## Installation

Install via composer

```
composer require wavevision/mail
```

and register DI extension

```
extensions:
    wavevisionMail: Wavevision\Mail\DI\Extension
```

## Usage

See [examples](examples/src/MailExamples/MailTemplateFactory.php)
