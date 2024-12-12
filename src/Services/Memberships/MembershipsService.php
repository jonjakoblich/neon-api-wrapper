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

    public function updateMembership(
        string $membershipId,
        DataObjects\MembershipData $membership,
    ): DataObjects\MembershipResponseData
    {
        return $this->getResponse(
            new Requests\UpdateMembershipRequest(...func_get_args()),
            DataObjects\MembershipResponseData::class
        );
    }

    public function getAutoRenewal(
        string $membershipId
    ): DataObjects\MembershipAutoRenewalData
    {
        return $this->getResponse(
            new Requests\GetMembershipAutoRenewalRequest($membershipId),
            DataObjects\MembershipAutoRenewalData::class
        );
    }

    public function editAutoRenewal(
        string $membershipId,
        DataObjects\MembershipAutoRenewalData $autoRenewal,
    ): DataObjects\ResponseEntityData
    {
        return $this->getResponse(
            new Requests\EditAutoRenewalRequest(...func_get_args()),
            DataoBjects\ResponseEntityData::class
        );
    }

    public function renewMembership(
        string $membershipId,
        DataObjects\MembershipData $membership,
    ): DataObjects\MembershipResponseData
    {
        return $this->getResponse(
            new Requests\RenewMembershipRequest(...func_get_args()),
            DataObjects\MembershipResponseData::class
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

    public function calculateFee(
        DataObjects\MembershipData $membership
    ): DataObjects\MembershipCalculateResultData
    {
        return $this->getResponse(
            new Requests\CalculateMembershipFeeRequest(...func_get_args()),
            DataObjects\MembershipCalculateResultData::class
        );
    }
    
    public function calculateDates(
        DataObjects\MembershipData $membership
    ): DataObjects\MembershipCalculateDatesResultData
    {
        return $this->getResponse(
            new Requests\CalculateMembershipDatesRequest(...func_get_args()),
            DataObjects\MembershipCalculateDatesResultData::class
        );
    }

    public function addPayment(
        string $membershipId,
        DataObjects\PaymentData $payemnt,
    ): DataObjects\PaymentResponseData
    {
        return $this->getResponse(
            new Requests\AddMembershipPaymentRequest(...func_get_args()),
            DataObjects\PaymentResponseData::class
        );
    }

    /** 
     * Skipping this one for now. The return format is simply an array.
     */
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