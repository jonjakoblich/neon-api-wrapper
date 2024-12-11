<?php

namespace TwoJays\NeonApiWrapper\Services\Memberships;

use TwoJays\NeonApiWrapper\DataObjects\MembershipAutoRenewalData;
use TwoJays\NeonApiWrapper\DataObjects\MembershipLevelsResponseData;
use TwoJays\NeonApiWrapper\DataObjects\MembershipTermsResponseData;
use TwoJays\NeonApiWrapper\Services\BaseService;
use TwoJays\NeonApiWrapper\Services\Memberships\Requests\GetMembershipAutoRenewalRequest;
use TwoJays\NeonApiWrapper\Services\Memberships\Requests\GetMembershipLevelsRequest;
use TwoJays\NeonApiWrapper\Services\Memberships\Requests\GetMembershipTermsRequest;

class MembershipsService extends BaseService
{
    public function getMembershipAutoRenewal(
        string $membershipId
    ): MembershipAutoRenewalData
    {
        return $this->getResponse(
            new GetMembershipAutoRenewalRequest($membershipId),
            MembershipAutoRenewalData::class
        );
    }

    public function getLevels(
        string $status,
        int $currentPage = 0,
        int $pageSize = 20,
    ): MembershipLevelsResponseData
    {
        return $this->getResponse(
            new GetMembershipLevelsRequest(...func_get_args()),
            MembershipLevelsResponseData::class
        );
    }

    public function getTerms(
        string $levelId,
        int $currentPage = 0,
        int $pageSize = 20,
    ): MembershipTermsResponseData
    {
        return $this->getResponse(
            new GetMembershipTermsRequest(...func_get_args()),
            MembershipTermsResponseData::class
        );
    }

    /* public function getSubMembers(
        string $membershipId,
    ): SubMembershipListData
    {
        return $this->getResponse(
            new GetSubMembersRequest($membershipId),
            SubMembershipListData::class
        );
    } */
}