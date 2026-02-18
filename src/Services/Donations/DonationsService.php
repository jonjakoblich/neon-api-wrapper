<?php

namespace TwoJays\NeonApiWrapper\Services\Donations;

use TwoJays\NeonApiWrapper\DataObjects;
use TwoJays\NeonApiWrapper\Services\BaseService;

class DonationsService extends BaseService
{
    public function createDonation(
        DataObjects\DonationData $donation
    ): DataObjects\DonationResponseData
    {
        return $this->getResponse(
            new Requests\CreateDonationRequest($donation),
            DataObjects\DonationResponseData::class
        );
    }

    public function getDonation(
        string $id
    ): DataObjects\DonationData
    {
        return $this->getResponse(
            new Requests\GetDonationRequest($id),
            DataObjects\DonationData::class
        );
    }

    public function updateDonation(
        string $id,
        DataObjects\DonationData $donation,
    ): DataObjects\DonationResponseData
    {
        return $this->getResponse(
            new Requests\UpdateDonationRequest(...func_get_args()),
            DataObjects\DonationResponseData::class
        );
    }

    public function deleteDonation(
        string $id
    ): DataObjects\EmptyData
    {
        return $this->getResponse(
            new Requests\DeleteDonationRequest($id),
            DataObjects\EmptyData::class
        );
    }

    public function patchDonation(
        string $id,
        DataObjects\DonationData $donation,
    ): DataObjects\DonationResponseData
    {
        return $this->getResponse(
            new Requests\PatchDonationRequest(...func_get_args()),
            DataObjects\DonationResponseData::class
        );
    }

    public function searchDonations(
        DataObjects\SearchRequestData $searchRequest
    ): DataObjects\SearchResponseData
    {
        return $this->getResponse(
            new Requests\SearchDonationsRequest($searchRequest),
            DataObjects\SearchResponseData::class
        );
    }

    public function getSearchOutputFields(
        ?string $searchKey = null
    ): DataObjects\OutputFieldsData
    {
        return $this->getResponse(
            new Requests\GetSearchOutputFieldsRequest($searchKey),
            DataObjects\OutputFieldsData::class
        );
    }

    public function getSearchFields(
        ?string $searchKey = null
    ): DataObjects\SearchFieldsData
    {
        return $this->getResponse(
            new Requests\GetSearchFieldsRequest($searchKey),
            DataObjects\SearchFieldsData::class
        );
    }

    public function addPayment(
        string $donationId,
        DataObjects\PaymentData $payment,
    ): DataObjects\PaymentResponseData
    {
        return $this->getResponse(
            new Requests\AddDonationPaymentRequest(...func_get_args()),
            DataObjects\PaymentResponseData::class
        );
    }
}
