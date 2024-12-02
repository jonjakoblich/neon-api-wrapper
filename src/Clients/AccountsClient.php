<?php

namespace TwoJays\NeonApiWrapper\Clients;

use TwoJays\NeonApiWrapper\DataObjects\AccountData;
use TwoJays\NeonApiWrapper\DataObjects\AccountDonationSearchResultData;
use TwoJays\NeonApiWrapper\DataObjects\AccountPledgeSearchResultData;
use TwoJays\NeonApiWrapper\DataObjects\AccountSearchResultData;
use TwoJays\NeonApiWrapper\DataObjects\MembershipListResponseData;
use TwoJays\NeonApiWrapper\Enums\PaginationSortDirectionEnum;
use TwoJays\NeonApiWrapper\Requests\GetAccountDonationsRequest;
use TwoJays\NeonApiWrapper\Requests\GetAccountMembershipsRequest;
use TwoJays\NeonApiWrapper\Requests\GetAccountPledgesRequest;
use TwoJays\NeonApiWrapper\Requests\GetAccountRequest;
use TwoJays\NeonApiWrapper\Requests\ListAccountsRequest;

/**
 * I decided to make separate clients for each main endpoint. 
 * 
 * Client classes have distinct methods to perform an action. Sometimes the method signature
 * will require a full request object and sometimes it won't. Either way, it will be typed.
 */

class AccountsClient extends NeonClient
{
    public function listAccounts(ListAccountsRequest $request): AccountSearchResultData
    {
        return $this->makeRequest($request);
    }

    public function getAccount(string $accountId): AccountData
    {
        return $this->makeRequest(new GetAccountRequest(), [
            'id' => $accountId,
        ]);
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