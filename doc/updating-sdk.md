# Updating the SDK

## Fetch the latest version and build a patched version

Sometimes, the API specification is not complete or incorrect. Slack is aware of these problems,
but we just can't wait months for an update. Most of the time, examples inside the spec are
correct, and we just miss properties in the response's schema definition.

This is the reason why we maintain a patch for the official schema, in order to reflect the
contents of the official documentation.

in order to download the latest API specification and apply the patches, you may run this command:

```bash
./bin/slack-api-client-generator spec:update
```

This command sequentially runs the following operations:

1. it downloads and saves the last [official Slack OpenAPI specification file](https://api.slack.com/specs/openapi/v2/slack_web.json) in [resources/slack-openapi.json](https://github.com/jolicode/slack-php-api/blob/master/resources/slack-openapi.json)
2. it recursively sorts the json keys and saves this intermediate version in [resources/slack-openapi-sorted.json](resources/slack-openapi-sorted.json)
3. it applies [our patches](https://github.com/jolicode/slack-php-api/blob/master/resources/slack-openapi-sorted.patch) and stores the resulting specification file in [resources/slack-openapi-patched.json](https://github.com/jolicode/slack-php-api/blob/master/resources/slack-openapi-patched.json)

You can now build a new SDK using this patched specification.

## Regenerate the SDk

When the versionned specification has been updated, you can run Jane to regenerate the
SDK:

```bash
vendor/bin/jane-openapi generate --config-file=.jane-openapi.php
```

## Generating a new patch

The patches in this repository may not fix all the specification issues. Should you discover
a new specification bug, here is the process to propose changes:

1. edit the `resources/slack-openapi-patched.json` file as you wish
2. test the updated SDK (see above)
3. when satisfied with the result, run this command:

```bash
./bin/slack-api-client-generator spec:generate-patch
```

It will create a new version of the cumulative patch in `resources`.
