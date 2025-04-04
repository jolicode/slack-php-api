# Changes between versions

## Unreleased

## 4.8.0 (2025-04-01)

* Upgrade JanePHP generated code
* Improve the Cursor paginated methods, add missing and remove obsoletes
* **Specification override** Add the new `files.getUploadURLExternal` and `files.completeUploadExternal` endpoints
* New `filesUploadV2` Client method to manipulate the new endpoints correctly

## 4.7.1 (2024-06-28)

* Upgrade JanePHP generated code
* Allow more version of `jane-php/open-api-runtime`

## 4.7.0 (2024-01-31)

* Upgrade JanePHP generated code
* Drop support for PHP 7 and Symfony 5

## 4.6.0 (2023-11-10)

* Upgrade JanePHP generated code
* **Specification override** `metadata` added on `chat.postMessage`

## 4.5.0 (2022-03-30)

* Fix `jane-php/open-api-2` version mismatch breaking the SDK generation
* **Specification override** `workflows.*` endpoints to use POST method instead of GET
* **Specification override** `views.*` endpoints to use POST method instead of GET

## 4.4.1 (2022-01-24)

* **Specification override** Add missing `team_id` for multiplme endpoints
* Fix deprecated usage of `php-http/discovery`

## 4.4.0 (2021-12-29)

* Drop support for PHP <7.4
* Add support for PHP 8.1
* Upgrade Jane from 6.3 to v7.1, add compatibility with Symfony v6

## 4.3.0 (2021-05-31)

* Add responseMetadata to `SlackErrorResponse` exception to ease debug

## 4.2.0 (2021-04-19)

* Add a new Client to ease iteration over Slack paginated endpoints thanks to `iterateXxxx` methods (where `xxxx` is the endpoint name to iterate over)
* **Specification override** Add missing `locale` for `objs_conversation` model
* Improve the documentation

## 4.1.1 (2021-03-16)

* Upgrade Jane from 6.3.3 to v6.3.5, fix an error with very long string / payload

## 4.1.0 (2021-02-26)

* **Specification override** Fix some `timestamp` from integer to mixed string and integer to support old messages
* **Specification override** Change some `latest` / `oldest` / `ts_from` / `ts_to` query parameters from integer to string
* Improve carbon footprint by removing unnecessary files from git export

## 4.0.0 (2020-12-28)

* **Breaking** Specification update to latest Slack official version - see slackapi/slack-api-specs#44
  * added methods:
    * `/admin.conversations.*`
    * `/admin.usergroups.*`
    * `/admin.users.session.invalidate`
    * `/apps.event.authorizations.list`
    * `/calls.*`
    * `/conversations.mark`
    * `/workflows.*`
  * removed methods:
    * `/im*`
    * `/mpim*`
    * `/channels*`
    * `/groups*`
* ease up the patching process:
  * in the patched json file, sort endpoint query parameters by their `name` attributes, to keep a consistent order
  * auto-merge `objs_user` and `objs_conversation` polymorphic properties in order to keep the patch hunks as small as possible
* Upgrade to JanePHP version 6.3
* Add support for PHP 8
* **Specification override** Fix some `ts` from float to string

## 3.0.2 (2020-10-20)

* **Specification override** Allow string and integer for the "post_at" field in chatScheduleMessage
* Upstream specification update (minor)
* **Specification override** Switch all `as_user` parameters as boolean to fix a breaking change introduced in 3.0.0

## 3.0.1 (2020-08-26)

* Use a fixed version of Jane to avoid BC Break

## 3.0.0 (2020-08-19)

* **Massive specification update** to latest Slack official version:
  * adds all the admin* endpoints
  * adds the fileRemote* endpoints
  * adds the views* endpoints
* Add a `bin/slack-api-client-generator` command to help further updates
* Upgrade to JanePHP version 6
* **Breaking** Some options have new types, for example ChatUpdate `as_user` option was a boolean and is now a string

Thanks [@xavierlacot](https://github.com/xavierlacot) for the huge work on those features.

## 2.5.0 (2020-04-29)

* Update specification to latest version (ids are now longer than 8 chars)
* **Specification override** Add missing description for `oauth.token` and `oauth.access`, fix #71
* **Specification override** Add missing `response_metadata` for `channels.list`
* **Specification override** Add a better description completeness of bunch of endpoints

## 2.4.0 (2020-02-24)

* Upgrade JanePHP to v5.3 and PHP 7.2

## 2.3.0 (2019-10-25) Forum PHP edition

* **Specification override** The `usergroups.users.list` was missing parameters, fix #57
* Upgrade JanePHP and add a **Specification override** for file uploads #58

## 2.2.0 (2019-10-09)

* Fix api.test endpoint
* Throw exception when Slack returns error code

## 2.1.1 (2019-10-05)

* Fix PSR-18 client discovery
* Avoid installing HTTPlug in version 1

## 2.1.0 (2019-10-03)

* Generate PSR-18 client instead of HttPlug client

## 2.0.0 (2019-09-16)

* Upgrade Jane to 4.4 https://github.com/janephp/janephp/releases/tag/v4.4.0, the new generated classes have better PHPDoc
* **Massive specification update** from Slack, all the patches have been rewritten and the API wins a lots of changes, new objects, new API. See #45 for more details. We had big issues with polymorphic responses.

## 1.2.0 (2019-04-23)

* **Specification override** Fix Timestamp type in all endpoints, allow string and number because of API inconsistency
* **Specification override** Fix "oldest" and "latest" parameters type, allow string
* **Specification override** Fix "priority" type from integer to float
* **Specification override** Add "id", "callback_id" and "actions" mapping to attachments (in Messages)
* **Specification override** Map the "files" key in Message objects
* **Specification override** Add "blocks" to all the messages API (updates, ephemeral)

## 1.1.3 (2019-03-21)

* **Specification override** Fix Message attachment data

## 1.1.2 (2019-03-21)

* **Specification override** Fix Timestamp type in Chat Update endpoint

## 1.1.1 (2019-03-10)

* Add support for HTTPlug 2

## 1.1 (2019-02-21)

* **Specification override** Add support for Slack Blocks in chat.postMessage and better patch support for specification

## 1.0 (2018-11-15)

* Initial release

