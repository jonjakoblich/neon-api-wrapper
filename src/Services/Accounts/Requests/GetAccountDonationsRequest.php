<?php

namespace TwoJays\NeonApiWrapper\Services\Accounts\Requests;

use TwoJays\NeonApiWrapper\Concerns\AccountsEndpoint;
use TwoJays\NeonApiWrapper\Concerns\ExecutesRequests;
use TwoJays\NeonApiWrapper\Concerns\HasQueryParams;
use TwoJays\NeonApiWrapper\Contracts\GetRequest;
use TwoJays\NeonApiWrapper\DataObjects\AccountDonationSearchResultData;

class GetAccountDonationsRequest implements GetRequest
{
    use AccountsEndpoint, ExecutesRequests, HasQueryParams;

    public function __construct(
    ){}

    public function responseDataType(): string
    {
        return AccountDonationSearchResultData::class;
    }

    public function getEndpoint(): string
    {
        return $this::ENDPOINT_BASE . '/{id}/donations';
    }
}