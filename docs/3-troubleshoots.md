# Troubleshoots

Got some problems using this library? Need a missing feature?
Here is some common troubleshoots.

## Bypassing the incomplete API specification

Slack's OpenAPI spec is not 100% complete yet, hence our generated client may
miss some features.

If you miss an option in a method, until Slack add it to their spec, we can
manually add it to our [versioned spec](https://github.com/jolicode/slack-php-api/tree/main/resources/slack-openapi-patched.json) then
[regenerate](4-updating-sdk.md) and release a new version of the library.

## Missing data in the DTO?

The Slack specification is not up to date and miss some critical parts. We do
build a [better one on top of the official](4-updating-sdk.md) but it can't
be perfect.

What's good is that some models use `\ArrayObject` as base classes so if the
API returns data we don't have in the OpenAPI mapping, you can still access it via
Array like syntax:

```php
$results = $client->searchMessages([
    'query' => 'test'
]);

var_dump($results->getOk()); // ok property is mapped
var_dump($results['messages']); // messages property is not mapped but still readable
```

Feel free to open issues if you think a model miss some fields.

## Other problems?

The above documentation did not answer your question? Do not hesitate to open
an issue and share your issue with us.

***

Read more:
- Next page: [Updating the SDK](4-updating-sdk.md)
- Previous page: [Usage](2-usage.md)
