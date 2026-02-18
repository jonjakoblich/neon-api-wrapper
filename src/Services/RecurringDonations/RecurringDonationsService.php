<?php

namespace TwoJays\NeonApiWrapper\Services\RecurringDonations;

use TwoJays\NeonApiWrapper\DataObjects;
use TwoJays\NeonApiWrapper\Services\BaseService;

class RecurringDonationsService extends BaseService
{
    public function listRecurringDonations(
        ?int $currentPage = null,
        ?int $pageSize = null,
    ): DataObjects\RecurringDonationsResponseData
    {
        return $this->getResponse(
            new Requests\ListRecurringDonationsRequest(...func_get_args()),
            DataObjects\RecurringDonationsResponseData::class
        );
    }

    public function createRecurringDonation(
        DataObjects\RecurringDonationData $recurringDonation
    ): DataObjects\AccountIdAndRefIdResultData
    {
        return $this->getResponse(
            new Requests\CreateRecurringDonationRequest($recurringDonation),
            DataObjects\AccountIdAndRefIdResultData::class
        );
    }

    public function getRecurringDonation(
        string $id
    ): DataObjects\RecurringDonationData
    {
        return $this->getResponse(
            new Requests\GetRecurringDonationRequest($id),
            DataObjects\RecurringDonationData::class
        );
    }

    public function updateRecurringDonation(
        string $id,
        DataObjects\RecurringDonationData $recurringDonation,
    ): DataObjects\AccountIdResultData
    {
        return $this->getResponse(
            new Requests\UpdateRecurringDonationRequest(...func_get_args()),
            DataObjects\AccountIdResultData::class
        );
    }

    public function deleteRecurringDonation(
        string $id
    ): DataObjects\EmptyData
    {
        return $this->getResponse(
            new Requests\DeleteRecurringDonationRequest($id),
            DataObjects\EmptyData::class
        );
    }

    public function patchRecurringDonation(
        string $id,
        DataObjects\RecurringDonationData $recurringDonation,
    ): DataObjects\EmptyData
    {
        return $this->getResponse(
            new Requests\PatchRecurringDonationRequest(...func_get_args()),
            DataObjects\EmptyData::class
        );
    }
}
