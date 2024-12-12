<?php

namespace TwoJays\NeonApiWrapper\Services\Accounts;

use TwoJays\NeonApiWrapper\DataObjects\AccountContactsData;
use TwoJays\NeonApiWrapper\DataObjects\AccountData;
use TwoJays\NeonApiWrapper\DataObjects\AccountDonationSearchResultData;
use TwoJays\NeonApiWrapper\DataObjects\AccountIdResultData;
use TwoJays\NeonApiWrapper\DataObjects\AccountPledgeSearchResultData;
use TwoJays\NeonApiWrapper\DataObjects\AccountSearchResultData;
use TwoJays\NeonApiWrapper\DataObjects\ContactData;
use TwoJays\NeonApiWrapper\DataObjects\MembershipListResponseData;
use TwoJays\NeonApiWrapper\DataObjects\OrderListResponseData;
use TwoJays\NeonApiWrapper\Enums\PaginationSortDirectionEnum;
use TwoJays\NeonApiWrapper\Services\Accounts\Requests\DeleteAccountContactRequest;
use TwoJays\NeonApiWrapper\Services\Accounts\Requests\GetAccountContactRequest;
use TwoJays\NeonApiWrapper\Services\Accounts\Requests\GetAccountDonationsRequest;
use TwoJays\NeonApiWrapper\Services\Accounts\Requests\GetAccountMembershipsRequest;
use TwoJays\NeonApiWrapper\Services\Accounts\Requests\GetAccountOrdersRequest;
use TwoJays\NeonApiWrapper\Services\Accounts\Requests\GetAccountPledgesRequest;
use TwoJays\NeonApiWrapper\Services\Accounts\Requests\GetAccountRequest;
use TwoJays\NeonApiWrapper\Services\Accounts\Requests\ListAccountContactsRequest;
use TwoJays\NeonApiWrapper\Services\Accounts\Requests\ListAccountsRequest;
use TwoJays\NeonApiWrapper\Services\Accounts\Requests\UpdateAccountContactRequest;
use TwoJays\NeonApiWrapper\Services\BaseService;

/**
 * I decided to make separate clients for each main endpoint. 
 * 
 * Client classes have distinct methods to perform an action.
 */

class AccountsService extends BaseService
{   
    public function listAccounts(
        string $userType,
        int $currentPage = 1,
        string $email = '',
        string $firstName = '',
        string $lastName = '',
        int $pageSize = 10,
    ): AccountSearchResultData
    {
        return $this->getResponse(
            new ListAccountsRequest(...func_get_args()),
            AccountSearchResultData::class
        );
    }

    public function getAccount(string $accountId): AccountData
    {        
        return $this->getResponse(
            new GetAccountRequest(id: $accountId),
            AccountData::class
        );
    }

    public function getAccountDonations(
        string $accountId, 
        ?int $currentPage = 0, 
        ?string $sortColumn = 'date', 
        ?string $sortDirection = PaginationSortDirectionEnum::DESC->value
    ): AccountDonationSearchResultData 
    {
        return $this->getResponse(
            new GetAccountDonationsRequest(...func_get_args()),
            AccountDonationSearchResultData::class
        );
    }

    public function getAccountMemberships(
        string $accountId, 
        ?int $currentPage = 0, 
        ?int $pageSize = 20, 
        ?string $sortColumn = 'date', 
        ?string $sortDirection = PaginationSortDirectionEnum::DESC->value
    ): MembershipListResponseData
    {
        return $this->getResponse(
            new GetAccountMembershipsRequest(...func_get_args()),
            MembershipListResponseData::class
        );
    }

    public function getAccountOrders(
       string $accountId, 
       ?int $currentPage = 0, 
       ?int $pageSize = 20, 
       ?string $sortColumn = 'date', 
       ?string $sortDirection = PaginationSortDirectionEnum::DESC->value,
       ?array $transactionTypes = [],
    ): OrderListResponseData
    {
        return $this->getResponse(
            new GetAccountOrdersRequest(...func_get_args()),
            OrderListResponseData::class
        );
    }

    public function getAccountPledges(
        string $accountId, 
        ?int $currentPage = 0, 
        ?string $sortColumn = 'date', 
        ?string $sortDirection = PaginationSortDirectionEnum::DESC->value
    ): AccountPledgeSearchResultData
    {
        return $this->getResponse(
            new GetAccountPledgesRequest(...func_get_args()),
            AccountPledgeSearchResultData::class
        );
    }

    public function listAccountContacts(
        string $accountId,
        ?int $currentPage = 0,
    ): AccountContactsData
    {
        return $this->getResponse(
            new ListAccountContactsRequest(...func_get_args()),
            AccountContactsData::class
        );
    }

    public function getAccountContact(
        string $accountId,
        string $contactId,
    ): ContactData
    {
        return $this->getResponse(
            new GetAccountContactRequest(...func_get_args()),
            ContactData::class,
        );
    }

    public function updateContact(
        string $contactId,
        string $accountId,
        ContactData $contact,
    ): AccountIdResultData
    {
        return $this->getResponse(
            new UpdateAccountContactRequest(...func_get_args()),
            AccountIdResultData::class
        );
    }

    public function deleteContact(
        string $contactId,
        string $accountId,
    ): AccountIdResultData
    {
        return $this->getResponse(
            new DeleteAccountContactRequest(...func_get_args()),
            AccountIdResultData::class
        );
    }
}