<?php

namespace TwoJays\NeonApiWrapper\Services\Accounts;

use TwoJays\NeonApiWrapper\DataObjects\AccountData;
use TwoJays\NeonApiWrapper\DataObjects\AccountDonationSearchResultData;
use TwoJays\NeonApiWrapper\DataObjects\AccountPledgeSearchResultData;
use TwoJays\NeonApiWrapper\DataObjects\AccountSearchResultData;
use TwoJays\NeonApiWrapper\DataObjects\MembershipListResponseData;
use TwoJays\NeonApiWrapper\Enums\PaginationSortDirectionEnum;
use TwoJays\NeonApiWrapper\Services\Accounts\Requests\GetAccountDonationsRequest;
use TwoJays\NeonApiWrapper\Services\Accounts\Requests\GetAccountMembershipsRequest;
use TwoJays\NeonApiWrapper\Services\Accounts\Requests\GetAccountPledgesRequest;
use TwoJays\NeonApiWrapper\Services\Accounts\Requests\GetAccountRequest;
use TwoJays\NeonApiWrapper\Services\Accounts\Requests\ListAccountsRequest;
use TwoJays\NeonApiWrapper\Services\BaseService;

/**
 * I decided to make separate clients for each main endpoint. 
 * 
 * Client classes have distinct methods to perform an action. Sometimes the method signature
 * will require a full request object and sometimes it won't. Either way, it will be typed.
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
    
    public function listAccountContacts()
    {

    }

    public function getAccountContact()
    {
    
    }

    public function getAccountDonations(
        string $accountId, 
        ?int $currentPage = 0, 
        ?string $sortColumn = 'date', 
        ?string $sortDirection = PaginationSortDirectionEnum::DESC->value
    ): AccountDonationSearchResultData 
    {
        $params = $this->prepareRequestParameters(
            [
                'id' => $accountId,
            ],
            compact('currentPage','sortColumn','sortDirection')
        );

        return $this->makeRequest(new GetAccountDonationsRequest(), $params);
    }

    public function getAccountEventRegistrations()
    {

    }

    public function getAccountMemberships(
        string $accountId, 
        ?int $currentPage = 0, 
        ?int $pageSize = 20, 
        ?string $sortColumn = 'date', 
        ?string $sortDirection = PaginationSortDirectionEnum::DESC->value
    ): MembershipListResponseData
    {
        $params = $this->prepareRequestParameters(
            [
                'id' => $accountId,
            ],
            compact('currentPage','pageSize','sortColumn','sortDirection')
        );

        return $this->makeRequest(new GetAccountMembershipsRequest(), $params);
    }

    public function getAccountOrders()
    {

    }

    public function getAccountPledges(
        string $accountId, 
        ?int $currentPage = 0, 
        ?string $sortColumn = 'date', 
        ?string $sortDirection = PaginationSortDirectionEnum::DESC->value
    ): AccountPledgeSearchResultData
    {
        $params = $this->prepareRequestParameters(
            [
                'id' => $accountId,
            ],
            compact('currentPage','sortColumn','sortDirection')
        );

        return $this->makeRequest(new GetAccountPledgesRequest(), $params);
    }
}