<?php

namespace TwoJays\NeonApiWrapper\Services\Windfall;

use TwoJays\NeonApiWrapper\DataObjects;
use TwoJays\NeonApiWrapper\Services\BaseService;

class WindfallService extends BaseService
{
    public function deleteAllWindfall(): DataObjects\EmptyData
    {
        return $this->getResponse(
            new Requests\DeleteAllWindfallRequest(),
            DataObjects\EmptyData::class
        );
    }

    public function getAccountWindfall(
        string $id
    ): DataObjects\AccountWindfallData
    {
        return $this->getResponse(
            new Requests\GetAccountWindfallRequest($id),
            DataObjects\AccountWindfallData::class
        );
    }

    public function addAccountWindfall(
        string $id,
        DataObjects\AccountWindfallData $windfall,
    ): DataObjects\EmptyData
    {
        return $this->getResponse(
            new Requests\AddAccountWindfallRequest(...func_get_args()),
            DataObjects\EmptyData::class
        );
    }

    public function deleteAccountWindfall(
        string $id
    ): DataObjects\EmptyData
    {
        return $this->getResponse(
            new Requests\DeleteAccountWindfallRequest($id),
            DataObjects\EmptyData::class
        );
    }
}
