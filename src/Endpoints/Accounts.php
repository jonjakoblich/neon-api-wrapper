<?php

namespace TwoJays\NeonApiWrapper\Endpoints;

use TwoJays\NeonApiWrapper\NeonClient;
use TwoJays\NeonApiWrapper\Requests\ListAccountsRequest;
use TwoJays\NeonApiWrapper\Responses\AccountsListResponse;

class Accounts extends NeonClient
{
    protected string $endpoint = '/accounts';

    public function listAccounts(ListAccountsRequest $request): AccountsListResponse
    {
        return $this->makeRequest($this->endpoint, $request);
    }
}