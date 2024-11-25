<?php

namespace TwoJays\NeonApiWrapper\Requests;

use TwoJays\NeonApiWrapper\Concerns\AccountsEndpoint;
use TwoJays\NeonApiWrapper\Concerns\HasQueryParams;
use TwoJays\NeonApiWrapper\Contracts\GetRequest;
use TwoJays\NeonApiWrapper\DataObjects\AccountSearchResultData;
use TwoJays\NeonApiWrapper\Enums\AccountSearchResultItemUserTypeEnum;

class ListAccountsRequest implements GetRequest
{
    use AccountsEndpoint, HasQueryParams;

    /**
     * @todo Validate the input
     * - For instance, the property $userType should be one of the values
     *   of the AccountSearchResultItemUserTypeEnum
     */
    public function __construct(
        public ?int $currentPage = 1,
        public ?string $email = '',
        public ?string $firstName = '',
        public ?string $lastName = '',
        public ?int $pageSize = 10,
        public ?string $userType = AccountSearchResultItemUserTypeEnum::INDIVIDUAL->value,
    ){}

    public function responseDataType(): string
    {
        return AccountSearchResultData::class;
    }
}