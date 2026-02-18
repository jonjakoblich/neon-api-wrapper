<?php

namespace TwoJays\NeonApiWrapper\Services\Opportunities;

use TwoJays\NeonApiWrapper\DataObjects;
use TwoJays\NeonApiWrapper\Services\BaseService;

class OpportunitiesService extends BaseService
{
    public function listOpportunities(
        ?int $pageSize = null,
        ?int $currentPage = null,
        ?string $eventId = null,
        ?string $ngEventId = null,
    ): DataObjects\OpportunitySearchResultData
    {
        return $this->getResponse(
            new Requests\ListOpportunitiesRequest(...func_get_args()),
            DataObjects\OpportunitySearchResultData::class
        );
    }

    public function createOpportunity(
        DataObjects\OpportunityData $opportunity
    ): DataObjects\IdResultData
    {
        return $this->getResponse(
            new Requests\CreateOpportunityRequest($opportunity),
            DataObjects\IdResultData::class
        );
    }

    public function getOpportunity(
        string $id
    ): DataObjects\OpportunityData
    {
        return $this->getResponse(
            new Requests\GetOpportunityRequest($id),
            DataObjects\OpportunityData::class
        );
    }

    public function updateOpportunity(
        string $id,
        DataObjects\OpportunityData $opportunity,
    ): DataObjects\IdResultData
    {
        return $this->getResponse(
            new Requests\UpdateOpportunityRequest(...func_get_args()),
            DataObjects\IdResultData::class
        );
    }

    public function deleteOpportunity(
        string $id
    ): DataObjects\IdResultData
    {
        return $this->getResponse(
            new Requests\DeleteOpportunityRequest($id),
            DataObjects\IdResultData::class
        );
    }

    public function patchOpportunity(
        string $id,
        DataObjects\OpportunityData $opportunity,
    ): DataObjects\IdResultData
    {
        return $this->getResponse(
            new Requests\PatchOpportunityRequest(...func_get_args()),
            DataObjects\IdResultData::class
        );
    }

    public function listOpportunityVolunteers(
        string $id,
        ?int $pageSize = null,
        ?int $currentPage = null,
        ?array $shiftIds = null,
        ?array $groupIds = null,
        ?array $roleIds = null,
    ): DataObjects\VolunteerSearchResultData
    {
        return $this->getResponse(
            new Requests\ListOpportunityVolunteersRequest(...func_get_args()),
            DataObjects\VolunteerSearchResultData::class
        );
    }

    public function addOpportunityVolunteers(
        string $id,
        DataObjects\AssignmentVolunteersData $volunteers,
    ): DataObjects\IdResultData
    {
        return $this->getResponse(
            new Requests\AddOpportunityVolunteersRequest(...func_get_args()),
            DataObjects\IdResultData::class
        );
    }

    public function removeOpportunityVolunteers(
        string $id,
        DataObjects\VolunteerAccountIdsData $volunteers,
    ): DataObjects\IdResultData
    {
        return $this->getResponse(
            new Requests\RemoveOpportunityVolunteersRequest(...func_get_args()),
            DataObjects\IdResultData::class
        );
    }
}
