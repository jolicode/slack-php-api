# Updating the SDK

## Fetch the latest version

Run the following command to retrieve the latest API spec:

```bash
curl https://api.slack.com/specs/openapi/v2/slack_web.json -o resources/slack-openapi.json
```

### Apply local modification

Sometime, the API spec is not complete. Slack is aware of this problem but we just can't wait months for an update.

Most of the times, examples inside the spec are correct and we just miss properties in the response's schema definition.

So we patch the schema with what we can see in the official documentation via the patch command.

```bash
rm resources/slack-openapi-patched.json
cp resources/slack-openapi.json resources/slack-openapi-patched.json
patch -p0 < resources/patches/*.patch
```

### Generating a new patch

Edit the `slack-openapi-patched.json` file as you wish and run this:


## Regenerate the SDk

When the versioned spec has been updated, we need to run Jane to regenerate the
SDK:

```bash
vendor/bin/jane-openapi generate -c .jane-openapi.php
```
