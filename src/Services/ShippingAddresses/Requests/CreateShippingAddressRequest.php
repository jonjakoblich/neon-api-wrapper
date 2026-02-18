<?php

namespace TwoJays\NeonApiWrapper\Services\ShippingAddresses\Requests;

use TwoJays\NeonApiWrapper\Attributes\RequestBodyParam;
use TwoJays\NeonApiWrapper\Concerns\ShippingAddressesEndpoint;
use TwoJays\NeonApiWrapper\Concerns\ExecutesRequests;
use TwoJays\NeonApiWrapper\Concerns\HasRequestBodyParam;
use TwoJays\NeonApiWrapper\Contracts\PostRequest;
use TwoJays\NeonApiWrapper\Contracts\WithRequestBodyParam;
use TwoJays\NeonApiWrapper\DataObjects\ShippingAddressAddData;

class CreateShippingAddressRequest implements PostRequest, WithRequestBodyParam
{
    use ShippingAddressesEndpoint, ExecutesRequests, HasRequestBodyParam;

    public function __construct(
        #[RequestBodyParam]
        public readonly ShippingAddressAddData $shippingAddress,
    ){
        $this->setEndpoint();
    }
}
