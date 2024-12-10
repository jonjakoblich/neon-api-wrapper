<?php

namespace TwoJays\NeonApiWrapper\Services\Addresses;

use TwoJays\NeonApiWrapper\DataObjects\AccountIdAndRefIdResultData;
use TwoJays\NeonApiWrapper\DataObjects\AddressAddData;
use TwoJays\NeonApiWrapper\DataObjects\AddressData;
use TwoJays\NeonApiWrapper\DataObjects\DeletedEntityData;
use TwoJays\NeonApiWrapper\Services\Addresses\Requests\CreateAddressRequest;
use TwoJays\NeonApiWrapper\Services\Addresses\Requests\DeleteAddressRequest;
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
            new GetAddressRequest($addressId),
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

    public function deleteAddress(
        string $addressId,
    ): DeletedEntityData
    {
        return $this->getResponse(
            new DeleteAddressRequest($addressId),
            DeletedEntityData::class
        );
    }

    public function createAddress(
        AddressAddData $address,
    ): AccountIdAndRefIdResultData
    {
        return $this->getResponse(
            new CreateAddressRequest($address),
            AccountIdAndRefIdResultData::class
        );
    }
}