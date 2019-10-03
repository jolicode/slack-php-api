# Updating the SDK

## Fetch the latest version

Run the following command to retrieve the latest API spec:

```bash
curl https://api.slack.com/specs/openapi/v2/slack_web.json -o resources/slack-openapi.json
```

:warning: This may invalidate our versioned patches!

### Apply local modification

Sometime, the API spec is not complete. Slack is aware of this problem but we
just can't wait months for an update.

Most of the times, examples inside the spec are correct and we just miss
properties in the response's schema definition.

So we patch the schema with what we can see in the official documentation via
the patch command.

```bash
curl https://api.slack.com/specs/openapi/v2/slack_web.json -o resources/slack-openapi.json
rm resources/slack-openapi-patched.json
cp resources/slack-openapi.json resources/slack-openapi-patched.json
patch --verbose -p0 < resources/patches/*.patch
```

### Generating a new patch

Edit the `slack-openapi-patched.json` file as you wish and run this:

```bash
git diff resources/slack-openapi-patched.json > resources/patches/00-description.patch
```

Then make sure the patch headers are like this:

```plain
--- resources/slack-openapi-patched.json 2019-02-21 14:14:33.020307516 +0100
+++ resources/slack-openapi-patched.json 2019-02-21 14:14:56.296475732 +0100
```

## Regenerate the SDk

When the versioned spec has been updated, we need to run Jane to regenerate the
SDK:

```bash
vendor/bin/jane-openapi generate --config-file=.jane-openapi.php
```
