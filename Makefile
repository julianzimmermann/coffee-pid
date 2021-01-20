.PHONY: help
help: ## Show this help
	@egrep -h '\s##\s' $(MAKEFILE_LIST) | sort | awk 'BEGIN {FS = ":.*?## "}; {printf "\033[36m%-20s\033[0m %s\n", $$1, $$2}'

.PHONY: dev-docker-build-start
dev-docker-build-start: ## Build, start docker dev and docker-sync
	cd Docker && docker-sync start && docker-compose -f docker-compose.dev.yml up -d --build

.PHONY: dev-docker-start
dev-docker-start: ## Start docker dev and docker-sync
	cd Docker && docker-sync start && docker-compose -f docker-compose.dev.yml up -d

.PHONY: docker-build-start
docker-build-start: ## Build, start docker and docker-sync
	cd Docker && docker-compose up -d --build

.PHONY: docker-start
docker-start: ## Start docker and docker-sync
	cd Docker && docker-compose up -d
