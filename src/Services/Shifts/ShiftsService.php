<?php

namespace TwoJays\NeonApiWrapper\Services\Shifts;

use TwoJays\NeonApiWrapper\DataObjects;
use TwoJays\NeonApiWrapper\Services\BaseService;

class ShiftsService extends BaseService
{
    public function listShifts(
        string $opportunityId,
        ?int $pageSize = null,
        ?int $currentPage = null,
        ?string $occurrenceId = null,
        ?string $ngOccurrenceId = null,
    ): DataObjects\OpportunityShiftSearchResultData
    {
        return $this->getResponse(
            new Requests\ListShiftsRequest(...func_get_args()),
            DataObjects\OpportunityShiftSearchResultData::class
        );
    }

    public function createShift(
        string $opportunityId,
        DataObjects\OpportunityShiftData $shift,
    ): DataObjects\IdResultData
    {
        return $this->getResponse(
            new Requests\CreateShiftRequest(...func_get_args()),
            DataObjects\IdResultData::class
        );
    }

    public function getShift(
        string $opportunityId,
        string $shiftId,
    ): DataObjects\OpportunityShiftData
    {
        return $this->getResponse(
            new Requests\GetShiftRequest(...func_get_args()),
            DataObjects\OpportunityShiftData::class
        );
    }

    public function updateShift(
        string $opportunityId,
        string $shiftId,
        DataObjects\OpportunityShiftData $shift,
    ): DataObjects\IdResultData
    {
        return $this->getResponse(
            new Requests\UpdateShiftRequest(...func_get_args()),
            DataObjects\IdResultData::class
        );
    }

    public function deleteShift(
        string $opportunityId,
        string $shiftId,
    ): DataObjects\IdResultData
    {
        return $this->getResponse(
            new Requests\DeleteShiftRequest(...func_get_args()),
            DataObjects\IdResultData::class
        );
    }

    public function patchShift(
        string $opportunityId,
        string $shiftId,
        DataObjects\OpportunityShiftData $shift,
    ): DataObjects\IdResultData
    {
        return $this->getResponse(
            new Requests\PatchShiftRequest(...func_get_args()),
            DataObjects\IdResultData::class
        );
    }

    public function listShiftVolunteers(
        string $opportunityId,
        string $id,
        ?int $pageSize = null,
        ?int $currentPage = null,
        ?array $groupIds = null,
        ?array $roleIds = null,
    ): DataObjects\VolunteerSearchResultData
    {
        return $this->getResponse(
            new Requests\ListShiftVolunteersRequest(...func_get_args()),
            DataObjects\VolunteerSearchResultData::class
        );
    }

    public function addShiftVolunteers(
        string $opportunityId,
        string $id,
        DataObjects\AssignShiftVolunteerData $volunteers,
    ): DataObjects\IdResultData
    {
        return $this->getResponse(
            new Requests\AddShiftVolunteersRequest(...func_get_args()),
            DataObjects\IdResultData::class
        );
    }

    public function removeShiftVolunteers(
        string $opportunityId,
        string $id,
        DataObjects\VolunteerAccountIdsData $accountIds,
    ): DataObjects\IdResultData
    {
        return $this->getResponse(
            new Requests\RemoveShiftVolunteersRequest(...func_get_args()),
            DataObjects\IdResultData::class
        );
    }
}
