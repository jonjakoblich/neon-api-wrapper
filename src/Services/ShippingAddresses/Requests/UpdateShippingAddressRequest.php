<?php

namespace TwoJays\NeonApiWrapper\Services\ShippingAddresses\Requests;

use TwoJays\NeonApiWrapper\Attributes\PathParam;
use TwoJays\NeonApiWrapper\Attributes\RequestBodyParam;
use TwoJays\NeonApiWrapper\Concerns\ShippingAddressesEndpoint;
use TwoJays\NeonApiWrapper\Concerns\ExecutesRequests;
use TwoJays\NeonApiWrapper\Concerns\HasPathParams;
use TwoJays\NeonApiWrapper\Concerns\HasRequestBodyParam;
use TwoJays\NeonApiWrapper\Contracts\PutRequest;
use TwoJays\NeonApiWrapper\Contracts\WithPathParams;
use TwoJays\NeonApiWrapper\Contracts\WithRequestBodyParam;
use TwoJays\NeonApiWrapper\DataObjects\ShippingAddressData;

class UpdateShippingAddressRequest implements PutRequest, WithPathParams, WithRequestBodyParam
{
    use ShippingAddressesEndpoint, ExecutesRequests, HasPathParams, HasRequestBodyParam;

    public function __construct(
        #[PathParam]
        public readonly string $addressId,
        #[RequestBodyParam]
        public ShippingAddressData $shippingAddress,
    ){
        $this->setEndpoint();
    }

    private function setEndpoint(): void
    {
        $this->endpoint = $this::ENDPOINT_BASE . '/{addressId}';
    }
}
