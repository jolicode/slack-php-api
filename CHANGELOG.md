# Changes between versions

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

