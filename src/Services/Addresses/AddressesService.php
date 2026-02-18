<?php

namespace TwoJays\NeonApiWrapper\Services\Addresses;

use TwoJays\NeonApiWrapper\DataObjects;
use TwoJays\NeonApiWrapper\Services\BaseService;

class AddressesService extends BaseService
{
    public function getAddress(
        string $addressId,
    ): DataObjects\AddressData
    {
        return $this->getResponse(
            new Requests\GetAddressRequest($addressId),
            DataObjects\AddressData::class
        );
    }

    public function updateAddress(
        string $addressId,
        DataObjects\AddressData $address,
    ): DataObjects\EmptyData
    {
        return $this->getResponse(
            new Requests\UpdateAddressRequest(...func_get_args()),
            DataObjects\EmptyData::class,
        );
    }

    public function deleteAddress(
        string $addressId,
    ): DataObjects\DeletedEntityData
    {
        return $this->getResponse(
            new Requests\DeleteAddressRequest($addressId),
            DataObjects\DeletedEntityData::class
        );
    }

    public function patchAddress(
        string $addressId,
        DataObjects\AddressData $address,
    ): DataObjects\EmptyData
    {
        return $this->getResponse(
            new Requests\PatchAddressRequest(...func_get_args()),
            DataObjects\EmptyData::class,
        );
    }

    public function createAddress(
        DataObjects\AddressAddData $address,
    ): DataObjects\AccountIdAndRefIdResultData
    {
        return $this->getResponse(
            new Requests\CreateAddressRequest($address),
            DataObjects\AccountIdAndRefIdResultData::class
        );
    }
}