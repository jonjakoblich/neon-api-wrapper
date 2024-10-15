<?php

namespace TwoJays\NeonApiWrapper\Endpoints;

use stdClass;
use TwoJays\NeonApiWrapper\NeonClient;

class Accounts extends NeonClient
{
    protected string $endpoint = '/accounts';

    public function getAccounts(array $params): stdClass
    {
        return $this->getRequest($this->endpoint, $params);
    }
}