<?php

namespace TwoJays\NeonApiWrapper\Services\Volunteers;

use TwoJays\NeonApiWrapper\DataObjects;
use TwoJays\NeonApiWrapper\Services\BaseService;

class VolunteersService extends BaseService
{
    public function listVolunteers(
        ?int $pageSize = null,
        ?int $currentPage = null,
        ?array $opportunityIds = null,
        ?array $shiftIds = null,
        ?array $groupIds = null,
        ?array $roleIds = null,
    ): DataObjects\VolunteerSearchResultData
    {
        return $this->getResponse(
            new Requests\ListVolunteersRequest(...func_get_args()),
            DataObjects\VolunteerSearchResultData::class
        );
    }
}
