# Neon CRM API SDK

A strongly typed SDK for the Neon CRM API in PHP.

This is an indepently built and maintained package. **This has no affiliation with NeonOne**

PROJECT CURRENTLY UNDER DEVELOPMENT. Contributions are welcome.

## About this SDK

* Strong focus on type safety
  * Service class methods correspond to API endpoints and are type-hinted.
  * Responses are type-hinted.
* Strong focus on smooth developer experience. (See examples below)
* Built on version 2.8 of the Neon CRM API specification (update to 2.9 forthcoming).

## Installation
`composer require jonjakoblich/neon-api-wrapper`

## Getting Started
There are many more methods available for each of the following services. You can see what is available by studying the code and your IDE will also hint at what is available.

### Initiate Neon Client
Load the Neon Client.

```PHP
use TwoJays\NeonApiWrapper\NeonClient;

$apiKey = 'abc123'; // Put your real API key
$organizationId = 'myOrg'; // Put your real organization ID

$neon = new NeonClient($apiKey, $organizationId);
```

From the NeonClient instance, several services are available with methods roughly corresponding to API endpoints.

### Accounts

Get a list of accounts.
```PHP
use TwoJays\NeonApiWrapper\Enums\AccountSearchResultItemUserTypeEnum;

$accountsList = $neon->accounts()->listAccounts(
    userType: AccountSearchResultItemUserTypeEnum::INDIVIDUAL->value
);
// returns an instance of TwoJays\NeonApiWrapper\DataObjects\AccountSearchResultData
```

Get an individual account.
```PHP
$account = $neon->accounts()->getAccount('123')->individualAccount;
// returns an instance of TwoJays\NeonApiWrapper\DataObjects\AccountData
```

Get a company account.
```PHP
$account = $neon->accounts()->getAccount('123')->companyAccount;
// returns an instance of TwoJays\NeonApiWrapper\DataObjects\AccountData
```

The accounts service has additional methods for interacting with the API.

### Addresses
Get an address.
```PHP
$address = $neon->addresses()->getAddress('543');
// returns an instance of TwoJays\NeonApiWrapper\DataObjects\AddressData
```

### Memberships
Get a membership's auto renewal
```PHP
$autoRenewal = $neon->memberships()->getMembershipAutoRenewal('5252');
// returns an instance of TwoJays\NeonApiWrapper\DataObjects\MembershipAutoRenewalData
```

## Contributing
As this package only contain what I need for my specific needs, it does have data transfer objects and enumerations available for things I have not needed. Contributions to build out the additional services are welcome.

Guidelines
1. Fork the respository, write your contributions, submit a pull request.
1. Study the existing code and write your code to match the same style.
1. WRITE TESTS using Pest style testing. Submissions without tests will not be incorporated.
1. I am not looking to make major changes to the architecture of this package, so please do not submit unsolicited pull requests that make major changes to architecture or existing parts. Those PRs will be closed without further review or discussion.

Thank you for taking a look!