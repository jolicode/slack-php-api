# A PHP client for Slack's API

There is a bunch of existing PHP clients for Slack. But some are not up to date
or miss features, some only cover a small part of the API and most are simply
no longer maintained.

This SDK is generated automatically with [JanePHP](https://github.com/janephp/janephp)
from the [official Slack API specs](https://github.com/slackapi/slack-api-specs). 

It also provides a **full object oriented interface** for all the endpoints,
requests and responses of the Slack Web API.

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

## Quick start

```php
// $client contains all the methods to interact with the API
$client = JoliCode\Slack\ClientFactory::create($yourSlackToken);

$user = $client->usersInfo(['user' => 'U123AZER'])->getUser();
```

## Documentation

Want more documentation or examples? See the [full documentation here](https://jolicode.github.io/slack-php-api/).

## Further documentation

You can see the current and past versions using one of the following:

* the `git tag` command
* the [releases page on Github](https://github.com/jolicode/slack-php-api/releases)
* the file listing the [changes between versions](CHANGELOG.md)

Finally, some meta documentation:

* [versioning and branching models](VERSIONING.md)
* [contribution instructions](CONTRIBUTING.md)

## License

This library is licensed under the MIT License - see the [LICENSE](LICENSE.md)
file for details.
