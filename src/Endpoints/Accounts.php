<?php

namespace TwoJays\NeonApiWrapper\Endpoints;

use TwoJays\NeonApiWrapper\NeonClient;
use TwoJays\NeonApiWrapper\Requests\ListAccountsRequest;
use TwoJays\NeonApiWrapper\Responses\ListAccountsResponse;

class Accounts extends NeonClient
{
    // protected string $endpoint = '/accounts';

    public function listAccounts(ListAccountsRequest $request): ListAccountsResponse
    {
        return $this->makeRequest($request);
    }
}