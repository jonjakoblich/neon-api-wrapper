<?php

namespace TwoJays\NeonApiWrapper\Services\Addresses;

use TwoJays\NeonApiWrapper\DataObjects\AddressData;
use TwoJays\NeonApiWrapper\Services\Addresses\Requests\GetAddressRequest;
use TwoJays\NeonApiWrapper\Services\Addresses\Requests\UpdateAddressRequest;
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

    public function updateAddress(
        string $addressId,
        AddressData $address,
    ): AddressData
    {
        return $this->getResponse(
            new UpdateAddressRequest(...func_get_args()),
            AddressData::class,
        );
    }
}