<?php

namespace TwoJays\NeonApiWrapper\Services\Households;

use TwoJays\NeonApiWrapper\DataObjects;
use TwoJays\NeonApiWrapper\Services\BaseService;

class HouseholdsService extends BaseService
{
    /**
     * This returns an array in order to match the API specification.
     */
    public function listHouseholds(
        ?string $householdId = null,
        ?string $accountId = null,
    ): array
    {
        return $this->getResponse(
            new Requests\ListHouseholdsRequest(...func_get_args()),
            DataObjects\ListHouseholdListData::class
        )->toArray();
    }

    /**
     * This returns an array in order to match the API specification.
     */
    public function listRelationTypes(
        ?string $relationTypeCategory = null,
    ): array
    {
        return $this->getResponse(
            new Requests\ListRelationTypesRequest($relationTypeCategory),
            DataObjects\RelationTypeListData::class
        )->toArray();
    }

    public function createHousehold(
        DataObjects\HouseholdData $household
    ): DataObjects\IdResultData
    {
        return $this->getResponse(
            new Requests\CreateHouseholdRequest($household),
            DataObjects\IdResultData::class
        );
    }

    public function updateHousehold(
        string $id,
        DataObjects\HouseholdData $household,
    ): DataObjects\IdResultData
    {
        return $this->getResponse(
            new Requests\UpdateHouseholdRequest(...func_get_args()),
            DataObjects\IdResultData::class
        );
    }

    public function deleteHousehold(
        string $id
    ): DataObjects\IdResultData
    {
        return $this->getResponse(
            new Requests\DeleteHouseholdRequest($id),
            DataObjects\IdResultData::class
        );
    }
}
