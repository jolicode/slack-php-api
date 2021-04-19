# Updating the SDK

## Fetch the latest version and build a patched version

Sometimes, the API specification is not complete or incorrect. Slack is aware of these problems,
but we just can't wait months for an update. Most of the time, examples inside the spec are
correct, and we just miss properties in the response's schema definition.

This is the reason why we maintain a patched version of the official schema, following both the documentation and PHP specific requirements.

In order to download the latest API specification and apply the patches, you may run this command:

```bash
./bin/slack-api-client-generator spec:update
```

This command sequentially runs the following operations:

1. Downloads and saves the current [official Slack OpenAPI specification file](https://api.slack.com/specs/openapi/v2/slack_web.json) in [resources/slack-openapi.json](https://github.com/jolicode/slack-php-api/blob/main/resources/slack-openapi.json)
2. Recursively sorts the JSON keys and saves this intermediate version in [resources/slack-openapi-sorted.json](https://github.com/jolicode/slack-php-api/blob/main/resources/slack-openapi-sorted.json)
3. Applies [our patches](https://github.com/jolicode/slack-php-api/blob/main/resources/slack-openapi-sorted.patch) and stores the resulting specification file in [resources/slack-openapi-patched.json](https://github.com/jolicode/slack-php-api/blob/main/resources/slack-openapi-patched.json)

You can now build a new SDK using this patched specification.

## Regenerate the SDk

If you suspect some endpoints or models have been removed, first remove all the content
of the `generated` directory:

```bash
rm -Rf generated/*
```

When the versioned specification has been updated, you can run Jane to regenerate the SDK:

```bash
vendor/bin/jane-openapi generate --config-file=.jane-openapi.php
```

## Generating a new patch

The patches in this repository may not fix all the specification issues. Should you discover
a new specification bug, here is the process to propose changes:

1. Edit the `resources/slack-openapi-patched.json` file as you wish
2. Update the SDK (see above) and test the resulting code
3. When satisfied with the result, run this command:

```bash
./bin/slack-api-client-generator spec:generate-patch
```

It will create a new version of the cumulative patch in the `resources` directory. Before pushing
changes, you can check that the patch is correctly re-applied:

```bash
./bin/slack-api-client-generator spec:update
```

***

Read more:
- Next page: [Changelog](/changelog)
- Previous page: [Troubleshoots](3-troubleshoots.md)
