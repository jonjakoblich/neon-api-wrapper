<?php

namespace TwoJays\NeonApiWrapper\Requests;

use TwoJays\NeonApiWrapper\Contracts\GetRequest;
use TwoJays\NeonApiWrapper\Contracts\NeonApiResponse;
use TwoJays\NeonApiWrapper\Enums\AccountSearchResultItemUserTypeEnum;
use TwoJays\NeonApiWrapper\Responses\AccountsListResponse;

class ListAccountsRequest implements GetRequest
{
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

    public function successResponseType(): string
    {
        return AccountsListResponse::class;
    }

    public function successResponse(...$props): NeonApiResponse
    {
        $responseClass = $this->successResponseType();
        return new $responseClass($props);
    }
}