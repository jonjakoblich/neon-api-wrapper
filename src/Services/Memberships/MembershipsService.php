<?php

namespace TwoJays\NeonApiWrapper\Services\Memberships;

use TwoJays\NeonApiWrapper\DataObjects;
use TwoJays\NeonApiWrapper\Services\BaseService;

class MembershipsService extends BaseService
{
    public function getMembership(
        string $membershipId,
    ): DataObjects\MembershipData
    {
        return $this->getResponse(
            new Requests\GetMembershipRequest($membershipId),
            DataObjects\MembershipData::class
        );
    }

    public function createMembership(
        DataObjects\MembershipData $membership
    ): DataObjects\MembershipResponseData
    {
        return $this->getResponse(
            new Requests\CreateMembershipRequest($membership),
            DataObjects\MembershipResponseData::class
        );
    }

    public function getMembershipAutoRenewal(
        string $membershipId
    ): DataObjects\MembershipAutoRenewalData
    {
        return $this->getResponse(
            new Requests\GetMembershipAutoRenewalRequest($membershipId),
            DataObjects\MembershipAutoRenewalData::class
        );
    }

    public function getLevels(
        string $status,
        int $currentPage = 0,
        int $pageSize = 20,
    ): DataObjects\MembershipLevelsResponseData
    {
        return $this->getResponse(
            new Requests\GetMembershipLevelsRequest(...func_get_args()),
            DataObjects\MembershipLevelsResponseData::class
        );
    }

    public function getTerms(
        string $levelId,
        int $currentPage = 0,
        int $pageSize = 20,
    ): DataObjects\MembershipTermsResponseData
    {
        return $this->getResponse(
            new Requests\GetMembershipTermsRequest(...func_get_args()),
            DataObjects\MembershipTermsResponseData::class
        );
    }

    /* public function getSubMembers(
        string $membershipId,
    ): DataObjects\SubMembershipListData
    {
        return $this->getResponse(
            new Requests\GetSubMembersRequest($membershipId),
            DataObjects\SubMembershipListData::class
        );
    } */
}