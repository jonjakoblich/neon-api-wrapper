<?php

namespace TwoJays\NeonApiWrapper\Services\RecurringDonations\Requests;

use TwoJays\NeonApiWrapper\Attributes\RequestBodyParam;
use TwoJays\NeonApiWrapper\Concerns\RecurringDonationsEndpoint;
use TwoJays\NeonApiWrapper\Concerns\ExecutesRequests;
use TwoJays\NeonApiWrapper\Concerns\HasRequestBodyParam;
use TwoJays\NeonApiWrapper\Contracts\PostRequest;
use TwoJays\NeonApiWrapper\Contracts\WithRequestBodyParam;
use TwoJays\NeonApiWrapper\DataObjects\RecurringDonationData;

class CreateRecurringDonationRequest implements PostRequest, WithRequestBodyParam
{
    use RecurringDonationsEndpoint, ExecutesRequests, HasRequestBodyParam;

    public function __construct(
        #[RequestBodyParam]
        public RecurringDonationData $recurringDonation,
    ){
        $this->setEndpoint();
    }
}
