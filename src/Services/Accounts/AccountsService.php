<?php

namespace TwoJays\NeonApiWrapper\Services\Accounts;

use TwoJays\NeonApiWrapper\DataObjects;
use TwoJays\NeonApiWrapper\Enums\PaginationSortDirectionEnum;
use TwoJays\NeonApiWrapper\Services\BaseService;

class AccountsService extends BaseService
{   
    public function listAccounts(
        string $userType,
        int $currentPage = 1,
        string $email = '',
        string $firstName = '',
        string $lastName = '',
        int $pageSize = 10,
    ): DataObjects\AccountSearchResultData
    {
        return $this->getResponse(
            new Requests\ListAccountsRequest(...func_get_args()),
            DataObjects\AccountSearchResultData::class
        );
    }

    public function createAccount(
        DataObjects\AccountData $apiAccount,
    ): DataObjects\IdResultData
    {
        return $this->getResponse(
            new Requests\CreateAccountRequest($apiAccount),
            DataObjects\IdResultData::class
        );
    }

    public function getAccount(string $accountId): DataObjects\AccountData
    {        
        return $this->getResponse(
            new Requests\GetAccountRequest(id: $accountId),
            DataObjects\AccountData::class
        );
    }

    public function getAccountDonations(
        string $accountId, 
        ?int $currentPage = 0, 
        ?string $sortColumn = 'date', 
        ?string $sortDirection = PaginationSortDirectionEnum::DESC->value
    ): DataObjects\AccountDonationSearchResultData 
    {
        return $this->getResponse(
            new Requests\GetAccountDonationsRequest(...func_get_args()),
            DataObjects\AccountDonationSearchResultData::class
        );
    }

    public function getAccountMemberships(
        string $accountId, 
        ?int $currentPage = 0, 
        ?int $pageSize = 20, 
        ?string $sortColumn = 'date', 
        ?string $sortDirection = PaginationSortDirectionEnum::DESC->value
    ): DataObjects\MembershipListResponseData
    {
        return $this->getResponse(
            new Requests\GetAccountMembershipsRequest(...func_get_args()),
            DataObjects\MembershipListResponseData::class
        );
    }

    public function getAccountOrders(
       string $accountId, 
       ?int $currentPage = 0, 
       ?int $pageSize = 20, 
       ?string $sortColumn = 'date', 
       ?string $sortDirection = PaginationSortDirectionEnum::DESC->value,
       ?array $transactionTypes = [],
    ): DataObjects\OrderListResponseData
    {
        return $this->getResponse(
            new Requests\GetAccountOrdersRequest(...func_get_args()),
            DataObjects\OrderListResponseData::class
        );
    }

    public function getAccountPledges(
        string $accountId, 
        ?int $currentPage = 0, 
        ?string $sortColumn = 'date', 
        ?string $sortDirection = PaginationSortDirectionEnum::DESC->value
    ): DataObjects\AccountPledgeSearchResultData
    {
        return $this->getResponse(
            new Requests\GetAccountPledgesRequest(...func_get_args()),
            DataObjects\AccountPledgeSearchResultData::class
        );
    }

    public function listAccountContacts(
        string $accountId,
        ?int $currentPage = 0,
    ): DataObjects\AccountContactsData
    {
        return $this->getResponse(
            new Requests\ListAccountContactsRequest(...func_get_args()),
            DataObjects\AccountContactsData::class
        );
    }

    public function getAccountContact(
        string $accountId,
        string $contactId,
    ): DataObjects\ContactData
    {
        return $this->getResponse(
            new Requests\GetAccountContactRequest(...func_get_args()),
            DataObjects\ContactData::class,
        );
    }

    public function updateContact(
        string $contactId,
        string $accountId,
        DataObjects\ContactData $contact,
    ): DataObjects\AccountIdResultData
    {
        return $this->getResponse(
            new Requests\UpdateAccountContactRequest(...func_get_args()),
            DataObjects\AccountIdResultData::class
        );
    }

    public function deleteContact(
        string $contactId,
        string $accountId,
    ): DataObjects\AccountIdResultData
    {
        return $this->getResponse(
            new Requests\DeleteAccountContactRequest(...func_get_args()),
            DataObjects\AccountIdResultData::class
        );
    }

    public function createContact(
        string $accountId,
        DataObjects\ContactData $contact,
    ): DataObjects\AccountIdAndRefIdResultData
    {
        return $this->getResponse(
            new Requests\CreateAccountContactRequest(...func_get_args()),
            DataObjects\AccountIdAndRefIdResultData::class
        );
    }

    public function updateAccount(
        string $accountId,
        DataObjects\AccountData $apiAccount,
    ): DataObjects\AccountIdResultData
    {
        return $this->getResponse(
            new Requests\UpdateAccountRequest(...func_get_args()),
            DataObjects\AccountIdResultData::class
        );
    }

    public function patchAccount(
        string $accountId,
        DataObjects\AccountData $apiAccount,
    ): DataObjects\AccountIdResultData
    {
        return $this->getResponse(
            new Requests\PatchAccountRequest(...func_get_args()),
            DataObjects\AccountIdResultData::class
        );
    }

    public function searchAccounts(
        DataObjects\SearchRequestData $searchRequest
    ): DataObjects\SearchResponseData
    {
        return $this->getResponse(
            new Requests\SearchAccountsRequest($searchRequest),
            DataObjects\SearchResponseData::class
        );
    }

    public function getSearchOutputFields(
        ?string $searchKey = null
    ): DataObjects\OutputFieldsData
    {
        return $this->getResponse(
            new Requests\GetAccountSearchOutputFieldsRequest($searchKey),
            DataObjects\OutputFieldsData::class
        );
    }

    public function getSearchFields(
        ?string $searchKey = null
    ): DataObjects\SearchFieldsData
    {
        return $this->getResponse(
            new Requests\GetAccountSearchFieldsRequest($searchKey),
            DataObjects\SearchFieldsData::class
        );
    }

    public function patchContact(
        string $contactId,
        string $accountId,
        DataObjects\ContactData $contact,
    ): DataObjects\AccountIdResultData
    {
        return $this->getResponse(
            new Requests\PatchAccountContactRequest(...func_get_args()),
            DataObjects\AccountIdResultData::class
        );
    }

    public function getAccountEventRegistrations(
        string $accountId,
        ?int $currentPage = 0,
        ?string $eventId = null,
        ?string $sortColumn = 'registrationDateTime',
        ?string $sortDirection = PaginationSortDirectionEnum::DESC->value,
    ): DataObjects\PaginationEventRegistrationData
    {
        return $this->getResponse(
            new Requests\GetAccountEventRegistrationsRequest(...func_get_args()),
            DataObjects\PaginationEventRegistrationData::class
        );
    }

    public function linkIndividualToCompany(
        DataObjects\LinkIndividualToCompanyData $request,
    ): DataObjects\AccountIdResultData
    {
        return $this->getResponse(
            new Requests\LinkIndividualToCompanyAccountRequest($request),
            DataObjects\AccountIdResultData::class
        );
    }
    
    public function unlinkIndividualToCompany(
        DataObjects\IndividualToCompanyData $request,
    ): DataObjects\AccountIdResultData
    {
        return $this->getResponse(
            new Requests\UnlinkIndividualToCompanyAccountRequest($request),
            DataObjects\AccountIdResultData::class
        );
    }
}