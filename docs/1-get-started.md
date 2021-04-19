# Getting started

## Installation

This library is built atop of [PSR-7](https://www.php-fig.org/psr/psr-7/) and
[PSR-18](https://www.php-fig.org/psr/psr-18/). So you will need to install some
implementations for those standard interfaces.

If no PSR-18 client or PSR-7 message factory is available yet in your project
or you don't know or don't care which one to use, just install some default:

```bash
composer require symfony/http-client nyholm/psr7
```

You can now install the Slack client:

```bash
composer require jolicode/slack-php-api
```

## Slack token

Before you can use this client, you need to retrieve a token from Slack.

Checkout Slack's documentation about [all different kind of tokens](https://api.slack.com/authentication/token-types).
A good starting point is the [Authentication Basics documentation](https://api.slack.com/authentication/basics).

## Quick start

```php
// $client contains all the methods to interact with the API
$client = JoliCode\Slack\ClientFactory::create($yourSlackToken);

$user = $client->usersInfo(['user' => 'U123AZER'])->getUser();
```

***

Read more:
- Next page: [Usage](2-usage.md)
- Previous page: [Introduction](index.md)
