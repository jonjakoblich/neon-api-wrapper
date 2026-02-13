# CLAUDE.md

This file provides guidance to Claude Code (claude.ai/code) when working with code in this repository.

## Project Overview

A strongly-typed PHP SDK wrapper for the Neon CRM API v2.8 (`TwoJays\NeonApiWrapper`). Requires PHP >=8.3. Uses Guzzle for HTTP. This is an independently maintained package with no NeonOne affiliation.

**API Specification**: https://developer.neoncrm.com/api-v2/docs/v2.11.yaml

## Commands

```bash
composer install                        # Install dependencies
./vendor/bin/pest                       # Run all tests
./vendor/bin/pest tests/Feature         # Run feature tests only
./vendor/bin/pest tests/Unit            # Run unit tests only
./vendor/bin/pest --filter="test name"  # Run a single test by name
./vendor/bin/pest --group=arch          # Run architecture tests only
./vendor/bin/phpstan analyse src/       # Static analysis
```

## Architecture

**Entry point**: `NeonClient` authenticates via basic auth and exposes service accessors (`accounts()`, `addresses()`, `memberships()`).

**Request flow**: Service method → Request object → HTTP execution (via `ExecutesRequests` trait) → JSON response → `DtoFactory` converts to typed DataObject → returned to caller.

**Key layers**:

- **Services** (`src/Services/`): Each service groups related API endpoints. Methods are fully type-hinted. Each service has a `Requests/` subdirectory containing request classes.
- **Request classes**: Implement contracts (`GetRequest`, `PostRequest`, `PutRequest`, `DeleteRequest`) and compose traits (`HasPathParams`, `HasQueryParams`, `HasRequestBodyParam`). PHP 8 attributes (`#[PathParam]`, `#[RequestBodyParam]`) mark constructor params for routing.
- **DataObjects** (`src/DataObjects/`): ~143 DTOs extending `Data` class, implementing `DataObject` interface. All use readonly constructor promotion. The `#[ArrayOf(ClassName)]` attribute marks typed array properties.
- **Enums** (`src/Enums/`): ~87 string-backed enums for type-safe API values.
- **DtoFactory** (`src/Factories/DtoFactory.php`): Uses reflection to recursively instantiate DTOs from JSON arrays, respecting `#[ArrayOf]` attributes.
- **DataGeneratorFactory** (`src/Factories/DataGeneratorFactory.php`): Generates fake DTO instances using Faker for testing — eliminates need for static mock JSON fixtures.

**Trait composition** (`src/Concerns/`): Behaviors are mixed into request classes. `ExecutesRequests` handles HTTP execution and maps status codes to custom exceptions (400→`BadRequestException`, 401→`UnauthorizedException`, 403→`ForbiddenException`, 404→`NotFoundException`, 415→`UnsupportedMediaTypeException`). `TransformsPropertiesFromArray` handles recursive DTO instantiation in the base `Data` class.

## Architecture Constraints (enforced by tests)

- `Attributes/` → classes with `#[Attribute]`
- `Concerns/` → traits only
- `Contracts/` → interfaces only
- `DataObjects/` → must extend `Data` and implement `DataObject`
- `Enums/` → string-backed enums only
- `Exceptions/` → must extend `Exception`
- No `die()`, `dd()`, or `dump()` in codebase

## Testing Patterns

Tests use **Pest** style. Feature tests mock HTTP responses using Guzzle's `MockHandler`:

```php
beforeEach(function () {
    $this->mockHandler = new MockHandler([]);
    $client = new Client(['handler' => HandlerStack::create($this->mockHandler)]);
    $this->service = new AccountsService($client);
});

it('can get an account', function () {
    $responseContent = DataGeneratorFactory::generate(GetAccountResponseData::class)->toArray();
    $this->mockHandler->append(new Response(200, [], Utils::streamFor(json_encode($responseContent))));
    $response = $this->service->getAccount('123');
    expect($response)->toBeInstanceOf(GetAccountResponseData::class);
});
```

A global `fake()` helper (defined in `tests/Pest.php`) provides a Faker instance.

## Contributing Guidelines

- Match existing code style
- All contributions require Pest-style tests
- No unsolicited architectural changes
