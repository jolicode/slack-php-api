# Slack PHP API documentation

## Under the hood

This library mostly contains automatically generated code from the official
[Slack OpenAPI spec](https://github.com/slackapi/slack-api-specs).

The library provides three kinds of PHP classes:
- [endpoints](../generated/Endpoint) represent requests to API methods
- [models](../generated/Model) represent data from the API
- [normalizers](../generated/Normalizer) transform JSON from the API to PHP models

If you use the provided [Client](../generated/Client.php), you don't have to
understand how the library works internally. Calling one of its method will
make the HTTP request to the API and return the corresponding PHP object.

## Using the client

Use the `ClientFactory` to generate a `Client` configured with your token:

```php
<?php

use JoliCode\Slack\Api\Client;
use JoliCode\Slack\ClientFactory;

/** @var Client $client */
$client = ClientFactory::create($yourToken);
```

The client contains all the methods to communicate with Slack API. Checkout its
PHP doc to know which option you can provide to each method:

```php
<?php
//...

$members = $client->usersList(['limit' => 100])->getMembers();
```

> 💡 If you need a Slack Token, please follow the instructions at https://api.slack.com/authentication/basics

## Concrete examples

Here are some examples of library's usages:

- [Posting a message in a Slack channel](examples/posting-message.php);
- [Retrieving the users in a Slack workspace](examples/retrieve-users.php);

## Bypassing the incomplete API specification

Slack's OpenAPI spec is not 100% complete yet, hence our generated client may
miss some features.

If you miss an option in a method, until Slack add it to their spec, we can
manually add it to our [versioned spec](../resources/slack-openapi.json) then
[regenerate](updating-sdk.md) and release a new version of the library.

### Missing data in the DTO?

The Slack specification is not up to date and miss some critical parts. We do
build a [better one on top of the official](doc/updating-sdk.md) but it can't
be perfect.

What's good is that some models use `\ArrayObject` as base classes so if the
API returns data we don't have in the mapping, you can still access it via
Array like syntax:

```php
$results = $client->searchMessages([
    'query' => 'test'
]);

var_dump($results->getOk()); // Mapped
var_dump($results['messages']); // Not mapped but still readable
```

Feel free to open issues for those missing fields.
