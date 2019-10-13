# Slack PHP API documentation

## Under the hood

This library mostly contains automatically generated code from the official
[Slack OpenAPI spec](https://github.com/slackapi/slack-api-specs).

The library provides three kinds of PHP classes:
- [endpoints](../generated/Endpoint/) represent requests to API methods
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

The client contains all the methods to communicate with Slack'API. Checkout its
PHP doc to know which option you can provide to each method:

```php
<?php
//...

$members = $client->usersList(['limit' => 100])->getMembers();
```

## Concrete examples

Here is some examples of library's usages:

- [Posting a message in a Slack channel](examples/posting-message.php);
- [Retrieving the users in a Slack workspace](examples/retrieve-users.php);

## Bypassing the incomplete API specification

Slack's OpenAPI spec is not 100% complete yet hence our generated client may
miss some features.

If you miss an option in a method, until Slack add it to their spec, we can
manually add it to our [versioned spec](../resources/slack-openapi.json) then
[regenerate](updating-sdk.md) and release a new version of the library.

If you miss a property in a model, you may still access it by yourself. Some
models extend the `ArrayObject` so you can access all its properties with the
array notation. For example - until mid-2019 - the `usergroupsList` response
did not contain the `usergroups` property but we could access it this way:

```php
$userGroupsResponse = $client->usergroupsList();

$groups = $userGroupsResponse['usergroups'];
```

