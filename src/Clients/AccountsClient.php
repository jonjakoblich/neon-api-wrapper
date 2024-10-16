<?php

namespace TwoJays\NeonApiWrapper\Clients;

use TwoJays\NeonApiWrapper\Requests\GetAccountRequest;
use TwoJays\NeonApiWrapper\Requests\ListAccountsRequest;
use TwoJays\NeonApiWrapper\Responses\GetAccountResponse;
use TwoJays\NeonApiWrapper\Responses\ListAccountsResponse;

class AccountsClient extends NeonClient
{
    public function listAccounts(ListAccountsRequest $request): ListAccountsResponse
    {
        return $this->makeRequest($request);
    }

    public function getAccount(string $accountId): GetAccountResponse
    {
        return $this->makeRequest(new GetAccountRequest(), [
            'id' => $accountId,
        ]);
    }
}