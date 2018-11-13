# Updating the SDK

## Fetch the latest version

Run the following command to retrieve the latest API spec (beware to not remove
local modifications):

```bash
curl https://api.slack.com/specs/openapi/v2/slack_web.json -o resources/slack-openapi.json
```

## Apply local modification

Sometime, the API spec is not complete.

Most of the times, examples inside the spec are correct and we just miss
properties in the response's schema definition.

So we can edit the [versionned spec](../resources/slack-openapi.json)
to add our own changes until Slack add it to their spec.


## Regenerate the SDk

When the versioned spec has been updated, we need to run Jane to regenerate the
SDK:

```bash
vendor/bin/jane-openapi generate -c .jane-openapi.php
```
