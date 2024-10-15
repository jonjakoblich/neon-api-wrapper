<?php

namespace TwoJays\NeonApiWrapper\Endpoints;

use TwoJays\NeonApiWrapper\NeonClient;
use TwoJays\NeonApiWrapper\Responses\AccountsListResponse;

class Accounts extends NeonClient
{
    protected string $endpoint = '/accounts';

    public function getAccounts(array $params): AccountsListResponse
    {
        return new AccountsListResponse(...$this->getRequest($this->endpoint, $params));
    }
}