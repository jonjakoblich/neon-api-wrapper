<?php

namespace TwoJays\NeonApiWrapper\Services\Roles;

use TwoJays\NeonApiWrapper\DataObjects;
use TwoJays\NeonApiWrapper\Services\BaseService;

class RolesService extends BaseService
{
    public function listRoles(
        ?int $pageSize = null,
        ?int $currentPage = null,
    ): DataObjects\VolunteerRoleSearchResultData
    {
        return $this->getResponse(
            new Requests\ListRolesRequest(...func_get_args()),
            DataObjects\VolunteerRoleSearchResultData::class
        );
    }

    public function createRole(
        DataObjects\VolunteerRoleData $role
    ): DataObjects\IdResultData
    {
        return $this->getResponse(
            new Requests\CreateRoleRequest($role),
            DataObjects\IdResultData::class
        );
    }

    public function getRole(
        string $id
    ): DataObjects\VolunteerRoleData
    {
        return $this->getResponse(
            new Requests\GetRoleRequest($id),
            DataObjects\VolunteerRoleData::class
        );
    }

    public function updateRole(
        string $id,
        DataObjects\VolunteerRoleData $role,
    ): DataObjects\IdResultData
    {
        return $this->getResponse(
            new Requests\UpdateRoleRequest(...func_get_args()),
            DataObjects\IdResultData::class
        );
    }

    public function deleteRole(
        string $id
    ): DataObjects\EmptyData
    {
        return $this->getResponse(
            new Requests\DeleteRoleRequest($id),
            DataObjects\EmptyData::class
        );
    }

    public function listRoleVolunteers(
        string $id,
        ?int $pageSize = null,
        ?int $currentPage = null,
        ?array $opportunityIds = null,
        ?array $shiftIds = null,
        ?array $groupIds = null,
    ): DataObjects\VolunteerSearchResultData
    {
        return $this->getResponse(
            new Requests\ListRoleVolunteersRequest(...func_get_args()),
            DataObjects\VolunteerSearchResultData::class
        );
    }
}
