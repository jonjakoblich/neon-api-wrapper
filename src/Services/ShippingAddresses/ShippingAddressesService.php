<?php

namespace TwoJays\NeonApiWrapper\Services\ShippingAddresses;

use TwoJays\NeonApiWrapper\DataObjects;
use TwoJays\NeonApiWrapper\Services\BaseService;

class ShippingAddressesService extends BaseService
{
    public function createShippingAddress(
        DataObjects\ShippingAddressAddData $shippingAddress
    ): DataObjects\AccountIdAndRefIdResultData
    {
        return $this->getResponse(
            new Requests\CreateShippingAddressRequest($shippingAddress),
            DataObjects\AccountIdAndRefIdResultData::class
        );
    }

    public function getShippingAddress(
        string $addressId
    ): DataObjects\ShippingAddressData
    {
        return $this->getResponse(
            new Requests\GetShippingAddressRequest($addressId),
            DataObjects\ShippingAddressData::class
        );
    }

    public function updateShippingAddress(
        string $addressId,
        DataObjects\ShippingAddressData $shippingAddress,
    ): DataObjects\EmptyData
    {
        return $this->getResponse(
            new Requests\UpdateShippingAddressRequest(...func_get_args()),
            DataObjects\EmptyData::class
        );
    }

    public function deleteShippingAddress(
        string $addressId
    ): DataObjects\EmptyData
    {
        return $this->getResponse(
            new Requests\DeleteShippingAddressRequest($addressId),
            DataObjects\EmptyData::class
        );
    }

    public function patchShippingAddress(
        string $id,
        DataObjects\ShippingAddressData $shippingAddress,
    ): DataObjects\EmptyData
    {
        return $this->getResponse(
            new Requests\PatchShippingAddressRequest(...func_get_args()),
            DataObjects\EmptyData::class
        );
    }
}
