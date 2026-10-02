# Getting started

## Installation

This library is built on [Symfony HttpClient](https://symfony.com/doc/current/http_client.html)
(`HttpClientInterface`). Any HTTP client implementing that interface may be
provided to the `ClientFactory`.

If no HTTP client is available yet in your project or you don't know or don't
care which one to use, just install the default one:

```bash
composer require symfony/http-client
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

$user = $client->usersInfo(['user' => 'U123AZER'])->user;
```

***

Read more:
- Next page: [Usage](2-usage.md)
- Previous page: [Introduction](index.md)
