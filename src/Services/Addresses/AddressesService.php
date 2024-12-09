<?php

namespace TwoJays\NeonApiWrapper\Services\Addresses;

use TwoJays\NeonApiWrapper\DataObjects\AddressData;
use TwoJays\NeonApiWrapper\Services\Addresses\Requests\GetAddressRequest;
use TwoJays\NeonApiWrapper\Services\BaseService;

class AddressesService extends BaseService
{
    public function getAddress(
        string $addressId,
    ): AddressData
    {
        return $this->getResponse(
            new GetAddressRequest(...func_get_args()),
            AddressData::class
        );
    }
}