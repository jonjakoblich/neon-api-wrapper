<?php

namespace TwoJays\NeonApiWrapper\Services\ShippingAddresses\Requests;

use TwoJays\NeonApiWrapper\Attributes\PathParam;
use TwoJays\NeonApiWrapper\Concerns\ShippingAddressesEndpoint;
use TwoJays\NeonApiWrapper\Concerns\ExecutesRequests;
use TwoJays\NeonApiWrapper\Concerns\HasPathParams;
use TwoJays\NeonApiWrapper\Contracts\DeleteRequest;
use TwoJays\NeonApiWrapper\Contracts\WithPathParams;

class DeleteShippingAddressRequest implements DeleteRequest, WithPathParams
{
    use ShippingAddressesEndpoint, ExecutesRequests, HasPathParams;

    public function __construct(
        #[PathParam]
        public readonly string $addressId,
    ){
        $this->setEndpoint();
    }

    private function setEndpoint(): void
    {
        $this->endpoint = $this::ENDPOINT_BASE . '/{addressId}';
    }
}
