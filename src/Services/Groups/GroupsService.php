<?php

namespace TwoJays\NeonApiWrapper\Services\Groups;

use TwoJays\NeonApiWrapper\DataObjects;
use TwoJays\NeonApiWrapper\Services\BaseService;

class GroupsService extends BaseService
{
    public function listGroups(
        ?int $pageSize = null,
        ?int $currentPage = null,
        ?string $groupIds = null,
        ?string $groupName = null,
    ): DataObjects\UserGroupSearchResultData
    {
        return $this->getResponse(
            new Requests\ListGroupsRequest(...func_get_args()),
            DataObjects\UserGroupSearchResultData::class
        );
    }

    public function createGroup(
        DataObjects\UserGroupData $group
    ): DataObjects\IdResultData
    {
        return $this->getResponse(
            new Requests\CreateGroupRequest($group),
            DataObjects\IdResultData::class
        );
    }

    public function getGroup(
        string $id
    ): DataObjects\UserGroupData
    {
        return $this->getResponse(
            new Requests\GetGroupRequest($id),
            DataObjects\UserGroupData::class
        );
    }

    public function updateGroup(
        string $id,
        DataObjects\UserGroupData $group,
    ): DataObjects\IdResultData
    {
        return $this->getResponse(
            new Requests\UpdateGroupRequest(...func_get_args()),
            DataObjects\IdResultData::class
        );
    }

    public function deleteGroup(
        string $id
    ): DataObjects\EmptyData
    {
        return $this->getResponse(
            new Requests\DeleteGroupRequest($id),
            DataObjects\EmptyData::class
        );
    }

    public function listGroupVolunteers(
        string $id,
        ?int $pageSize = null,
        ?int $currentPage = null,
        ?array $opportunityIds = null,
        ?array $shiftIds = null,
        ?array $roleIds = null,
    ): DataObjects\VolunteerSearchResultData
    {
        return $this->getResponse(
            new Requests\ListGroupVolunteersRequest(...func_get_args()),
            DataObjects\VolunteerSearchResultData::class
        );
    }

    public function addGroupVolunteers(
        string $id,
        DataObjects\VolunteerAccountIdsData $volunteers,
    ): DataObjects\IdResultData
    {
        return $this->getResponse(
            new Requests\AddGroupVolunteersRequest(...func_get_args()),
            DataObjects\IdResultData::class
        );
    }

    public function removeGroupVolunteers(
        string $id,
        DataObjects\VolunteerAccountIdsData $volunteers,
    ): DataObjects\IdResultData
    {
        return $this->getResponse(
            new Requests\RemoveGroupVolunteersRequest(...func_get_args()),
            DataObjects\IdResultData::class
        );
    }
}
