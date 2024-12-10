<?php

namespace TwoJays\NeonApiWrapper\Services\Memberships;

use TwoJays\NeonApiWrapper\DataObjects\MembershipAutoRenewalData;
use TwoJays\NeonApiWrapper\Services\BaseService;
use TwoJays\NeonApiWrapper\Services\Memberships\Requests\GetMembershipAutoRenewalRequest;

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
}