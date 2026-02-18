<?php

namespace TwoJays\NeonApiWrapper\Services\SoftCredits;

use TwoJays\NeonApiWrapper\DataObjects;
use TwoJays\NeonApiWrapper\Services\BaseService;

class SoftCreditsService extends BaseService
{
    public function listSoftCredits(
        ?int $currentPage = null,
        ?int $pageSize = null,
    ): DataObjects\SoftCreditSearchResultData
    {
        return $this->getResponse(
            new Requests\ListSoftCreditsRequest(...func_get_args()),
            DataObjects\SoftCreditSearchResultData::class
        );
    }

    public function createSoftCredit(
        DataObjects\SoftCreditData $softCredit
    ): DataObjects\IdResultData
    {
        return $this->getResponse(
            new Requests\CreateSoftCreditRequest($softCredit),
            DataObjects\IdResultData::class
        );
    }

    public function getSoftCredit(
        string $id
    ): DataObjects\SoftCreditData
    {
        return $this->getResponse(
            new Requests\GetSoftCreditRequest($id),
            DataObjects\SoftCreditData::class
        );
    }

    public function updateSoftCredit(
        string $id,
        DataObjects\SoftCreditData $softCredit,
    ): DataObjects\IdResultData
    {
        return $this->getResponse(
            new Requests\UpdateSoftCreditRequest(...func_get_args()),
            DataObjects\IdResultData::class
        );
    }

    public function deleteSoftCredit(
        string $id
    ): DataObjects\EmptyData
    {
        return $this->getResponse(
            new Requests\DeleteSoftCreditRequest($id),
            DataObjects\EmptyData::class
        );
    }

    public function patchSoftCredit(
        string $id,
        DataObjects\SoftCreditData $softCredit,
    ): DataObjects\IdResultData
    {
        return $this->getResponse(
            new Requests\PatchSoftCreditRequest(...func_get_args()),
            DataObjects\IdResultData::class
        );
    }
}
