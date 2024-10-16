<?php

namespace TwoJays\NeonApiWrapper\Requests;

use TwoJays\NeonApiWrapper\Concerns\AccountsEndpoint;
use TwoJays\NeonApiWrapper\Concerns\HasQueryParams;
use TwoJays\NeonApiWrapper\Contracts\GetRequest;
use TwoJays\NeonApiWrapper\Responses\GetAccountResponse;

class GetAccountRequest implements GetRequest
{
    use AccountsEndpoint, HasQueryParams;

    public function __construct(
    ){}

    public function successResponseType(): string
    {
        return GetAccountResponse::class;
    }

    public function getEndpoint(): string
    {
        return $this::ENDPOINT_BASE . '/{id}';
    }
}