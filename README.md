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
// $client contains all the methods to interact with the API
$client = JoliCode\Slack\ClientFactory::create($yourToken);

$user = $client->usersInfo()->getUser();

dump($user);
```

<p align="center">
  <img src="doc/images/model-sample.png" alt="Sample user object" />
<p>

Want more example or documentation? See the [documentation](doc/index.md).

## Troubleshoots

Got some problems using this library? Need a missing feature?
Do not hesitate to [open an issue](https://github.com/jolicode/slack-php-api/issues)
and share it with us.

## Further documentation

You can see the current and past versions using one of the following:

* the `git tag` command
* the [releases page on Github](https://github.com/jolicode/slack-php-api/releases)
* the file listing the [changes between versions](CHANGELOG.md)

And finally some meta documentation:

* [versioning and branching models](VERSIONING.md)
* [contribution instructions](CONTRIBUTING.md)

## License

This library is licensed under the MIT License - see the [LICENSE](LICENSE.md)
file for details.
