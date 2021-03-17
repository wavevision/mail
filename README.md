# Wavevision Mail

Customizable e-mail templates
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
