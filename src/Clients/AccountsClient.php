<?php

namespace TwoJays\NeonApiWrapper\Clients;

use TwoJays\NeonApiWrapper\Requests\GetAccountRequest;
use TwoJays\NeonApiWrapper\Requests\ListAccountsRequest;
use TwoJays\NeonApiWrapper\Response;

class AccountsClient extends NeonClient
{
    public function listAccounts(ListAccountsRequest $request): Response
    {
        return $this->makeRequest($request);
    }

    public function getAccount(string $accountId): Response
    {
        return $this->makeRequest(new GetAccountRequest(), [
            'id' => $accountId,
        ]);
    }
}