# A PHP client for Slack's API

There is a bunch of PHP clients for Slack. But some are not up to date or miss
features, some only cover a small part of the API and most are simply no longer
maintained.

This SDK is generated automatically with [JanePHP](https://github.com/janephp/janephp)
from the [official Slack API specs](https://github.com/slackapi/slack-api-specs).

## Installation

This library is built atop of PHP-HTTP (read more about it [here](http://docs.php-http.org))
and PSR-7. So you will need to install some implementations for those interfaces.
If no PHP-HTTP adapter or PSR-7 message factory is available yet in your project
or you don't care which one to use, just install some default:

```bash
composer require php-http/curl-client guzzlehttp/psr7
```

You can now install the Slack client:

```bash
composer require jolicode/slack-php-api
```

## Usage

First, you need to retrieve a token - like an OAuth AccessToken or a legacy token.
Checkout Slack's documentation about [all differents kind of tokens](https://api.slack.com/docs/token-types).

Then, use the factory that is provided to create the client:

```php
$client = JoliCode\Slack\ClientFactory::create($yourToken);

$client->apiTest(); // $client contains all the methods to interact with the API
```

## Troubleshoots

Got some problems using this library? Need a missing feature? 
Do not hesitate to [open an issue](https://github.com/jolicode/slack-php-api/issues) and share it with us.

## Updating the SDK

Run the following command to retrieve the latest API spec (beware to not remove
local modifications):

```bash
curl https://api.slack.com/specs/openapi/v2/slack_web.json -o resources/slack-openapi.json
```

Then regenerate the SDK:

```bash
vendor/bin/jane-openapi generate -c .jane-openapi.php
```

## License

This library is licensed under the MIT License - see the [LICENSE](LICENSE.md) file for details.
