<?php

namespace TwoJays\NeonApiWrapper\Services\Grants;

use TwoJays\NeonApiWrapper\DataObjects;
use TwoJays\NeonApiWrapper\Services\BaseService;

class GrantsService extends BaseService
{
    public function createGrant(
        DataObjects\GrantData $grant
    ): DataObjects\IdResultData
    {
        return $this->getResponse(
            new Requests\CreateGrantRequest($grant),
            DataObjects\IdResultData::class
        );
    }

    public function getGrant(
        string $id
    ): DataObjects\GrantData
    {
        return $this->getResponse(
            new Requests\GetGrantRequest($id),
            DataObjects\GrantData::class
        );
    }

    public function updateGrant(
        string $id,
        DataObjects\GrantData $grant,
    ): DataObjects\IdResultData
    {
        return $this->getResponse(
            new Requests\UpdateGrantRequest(...func_get_args()),
            DataObjects\IdResultData::class
        );
    }

    public function deleteGrant(
        string $id
    ): DataObjects\EmptyData
    {
        return $this->getResponse(
            new Requests\DeleteGrantRequest($id),
            DataObjects\EmptyData::class
        );
    }

    public function patchGrant(
        string $id,
        DataObjects\GrantData $grant,
    ): DataObjects\IdResultData
    {
        return $this->getResponse(
            new Requests\PatchGrantRequest(...func_get_args()),
            DataObjects\IdResultData::class
        );
    }

    public function searchGrants(
        DataObjects\SearchRequestData $searchRequest
    ): DataObjects\SearchResponseData
    {
        return $this->getResponse(
            new Requests\SearchGrantsRequest($searchRequest),
            DataObjects\SearchResponseData::class
        );
    }

    public function getSearchOutputFields(
        ?string $searchKey = null
    ): DataObjects\OutputFieldsData
    {
        return $this->getResponse(
            new Requests\GetSearchOutputFieldsRequest($searchKey),
            DataObjects\OutputFieldsData::class
        );
    }

    public function getSearchFields(
        ?string $searchKey = null
    ): DataObjects\SearchFieldsData
    {
        return $this->getResponse(
            new Requests\GetSearchFieldsRequest($searchKey),
            DataObjects\SearchFieldsData::class
        );
    }
}
