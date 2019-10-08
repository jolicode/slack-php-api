# Changes between versions

## 1.2.1 (2019-10-08)

* Limit jane-php/open-api-runtime under v4.5 version (signature of Endpoint::getBody() has changed)

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

