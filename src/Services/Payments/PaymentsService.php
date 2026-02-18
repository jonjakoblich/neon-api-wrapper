<?php

namespace TwoJays\NeonApiWrapper\Services\Payments;

use TwoJays\NeonApiWrapper\DataObjects;
use TwoJays\NeonApiWrapper\Services\BaseService;

class PaymentsService extends BaseService
{
    public function addPayment(
        DataObjects\AddPaymentRequestData $payment
    ): DataObjects\EmptyData
    {
        return $this->getResponse(
            new Requests\AddPaymentRequest($payment),
            DataObjects\EmptyData::class
        );
    }

    public function refundPayment(
        string $id
    ): DataObjects\EmptyData
    {
        return $this->getResponse(
            new Requests\RefundPaymentRequest($id),
            DataObjects\EmptyData::class
        );
    }

    /**
     * This returns an array in order to match the API specification.
     */
    public function getCreditCardTypes(): array
    {
        return $this->getResponse(
            new Requests\GetCreditCardTypesRequest(),
            DataObjects\CreditCardTypeListData::class
        )->toArray();
    }

    public function getDonorCoveredFees(
        float $transactionAmount,
        string $transactionType,
    ): DataObjects\DonorCoveredFeesData
    {
        return $this->getResponse(
            new Requests\GetDonorCoveredFeesRequest(...func_get_args()),
            DataObjects\DonorCoveredFeesData::class
        );
    }

    public function getProcessorSettings(): DataObjects\ProcessorSettingsData
    {
        return $this->getResponse(
            new Requests\GetProcessorSettingsRequest(),
            DataObjects\ProcessorSettingsData::class
        );
    }

    /**
     * This returns an array in order to match the API specification.
     */
    public function getTenders(): array
    {
        return $this->getResponse(
            new Requests\GetTendersRequest(),
            DataObjects\TenderListData::class
        )->toArray();
    }
}
