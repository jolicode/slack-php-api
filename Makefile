cs: ## Fix CS violations
	./vendor/bin/php-cs-fixer fix --verbose

cs_dry_run: ## Display CS violations without fixing it
	./vendor/bin/php-cs-fixer fix --verbose --dry-run

spec_diff: ## detect diff between spec and SDK
	CI_TEST=1 vendor/bin/jane-openapi generate --config-file=.jane-openapi.php && diff generated_ci generated

test: ## Run test suite
	./vendor/bin/simple-phpunit

jane: ## Generate the SDK
	./vendor/bin/jane-openapi generate --config-file=.jane-openapi.php

.PHONY: help

help: ## Display this help
	@grep -E '^[a-zA-Z_-]+:.*?## .*$$' $(MAKEFILE_LIST) | sort | awk 'BEGIN {FS = ":.*?## "}; {printf "\033[36m%-20s\033[0m %s\n", $$1, $$2}'

.DEFAULT_GOAL := help
