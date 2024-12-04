<?php

namespace TwoJays\NeonApiWrapper\Services\Accounts\Requests;

use TwoJays\NeonApiWrapper\Concerns\AccountsEndpoint;
use TwoJays\NeonApiWrapper\Concerns\ExecutesRequests;
use TwoJays\NeonApiWrapper\Concerns\HasQueryParams;
use TwoJays\NeonApiWrapper\Contracts\GetRequest;
use TwoJays\NeonApiWrapper\Contracts\WithQueryParams;
use TwoJays\NeonApiWrapper\Enums\AccountSearchResultItemUserTypeEnum;

class ListAccountsRequest implements GetRequest, WithQueryParams
{
    use AccountsEndpoint, ExecutesRequests, HasQueryParams;

    /**
     * @todo Validate the input
     * - For instance, the property $userType should be one of the values
     *   of the AccountSearchResultItemUserTypeEnum
     */
    public function __construct(
        public readonly string $userType = AccountSearchResultItemUserTypeEnum::INDIVIDUAL->value,
        public readonly ?int $currentPage = 1,
        public readonly ?string $email = '',
        public readonly ?string $firstName = '',
        public readonly ?string $lastName = '',
        public readonly ?int $pageSize = 10,
    ){
        $this->setEndpoint();
    }
}