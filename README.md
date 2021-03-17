# Wavevision Mail

Customizable e-mail templates
based on [wildbit / postmark-templates](https://github.com/wildbit/postmark-templates).

## Installation

Install via composer

```
composer require wavevision/mails
```

and register DI extension

```
extensions:
    wavevisionMail: Wavevision\Mail\DI\Extension
```

## Usage

See [examples](examples/MailExamples/MailTemplateFactory.php)
