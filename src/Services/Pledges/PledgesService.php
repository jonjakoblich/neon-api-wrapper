<?php

namespace TwoJays\NeonApiWrapper\Services\Pledges;

use TwoJays\NeonApiWrapper\DataObjects;
use TwoJays\NeonApiWrapper\Services\BaseService;

class PledgesService extends BaseService
{
    public function createPledge(
        DataObjects\PledgeData $pledge
    ): DataObjects\AccountIdAndRefIdResultData
    {
        return $this->getResponse(
            new Requests\CreatePledgeRequest($pledge),
            DataObjects\AccountIdAndRefIdResultData::class
        );
    }

    public function getPledge(
        string $id
    ): DataObjects\PledgeData
    {
        return $this->getResponse(
            new Requests\GetPledgeRequest($id),
            DataObjects\PledgeData::class
        );
    }

    public function updatePledge(
        string $id,
        DataObjects\PledgeData $pledge,
    ): DataObjects\AccountIdResultData
    {
        return $this->getResponse(
            new Requests\UpdatePledgeRequest(...func_get_args()),
            DataObjects\AccountIdResultData::class
        );
    }

    public function deletePledge(
        string $id
    ): DataObjects\EmptyData
    {
        return $this->getResponse(
            new Requests\DeletePledgeRequest($id),
            DataObjects\EmptyData::class
        );
    }

    public function patchPledge(
        string $id,
        DataObjects\PledgeData $pledge,
    ): DataObjects\AccountIdResultData
    {
        return $this->getResponse(
            new Requests\PatchPledgeRequest(...func_get_args()),
            DataObjects\AccountIdResultData::class
        );
    }

    /**
     * This returns an array in order to match the API specification.
     */
    public function listPledgePayments(
        string $id
    ): array
    {
        return $this->getResponse(
            new Requests\ListPledgePaymentsRequest($id),
            DataObjects\PledgePaymentListData::class
        )->toArray();
    }

    public function createPledgePayment(
        string $id,
        DataObjects\PledgePaymentData $pledgePayment,
    ): DataObjects\PledgePaymentResponseData
    {
        return $this->getResponse(
            new Requests\CreatePledgePaymentRequest(...func_get_args()),
            DataObjects\PledgePaymentResponseData::class
        );
    }

    public function getPledgePayment(
        string $id,
        string $paymentId,
    ): DataObjects\PledgePaymentData
    {
        return $this->getResponse(
            new Requests\GetPledgePaymentRequest(...func_get_args()),
            DataObjects\PledgePaymentData::class
        );
    }

    public function deletePledgePayment(
        string $id,
        string $paymentId,
    ): DataObjects\EmptyData
    {
        return $this->getResponse(
            new Requests\DeletePledgePaymentRequest(...func_get_args()),
            DataObjects\EmptyData::class
        );
    }

    /**
     * This returns an array in order to match the API specification.
     */
    public function listInstallments(
        string $pledgeId
    ): array
    {
        return $this->getResponse(
            new Requests\ListInstallmentsRequest($pledgeId),
            DataObjects\InstallmentListData::class
        )->toArray();
    }

    public function createInstallment(
        string $pledgeId,
        DataObjects\InstallmentData $installment,
    ): DataObjects\InstallmentData
    {
        return $this->getResponse(
            new Requests\CreateInstallmentRequest(...func_get_args()),
            DataObjects\InstallmentData::class
        );
    }

    public function getInstallment(
        string $pledgeId,
        string $id,
    ): DataObjects\InstallmentData
    {
        return $this->getResponse(
            new Requests\GetInstallmentRequest(...func_get_args()),
            DataObjects\InstallmentData::class
        );
    }

    public function updateInstallment(
        string $pledgeId,
        string $id,
        DataObjects\InstallmentData $installment,
    ): DataObjects\InstallmentData
    {
        return $this->getResponse(
            new Requests\UpdateInstallmentRequest(...func_get_args()),
            DataObjects\InstallmentData::class
        );
    }

    public function deleteInstallment(
        string $pledgeId,
        string $id,
    ): DataObjects\EmptyData
    {
        return $this->getResponse(
            new Requests\DeleteInstallmentRequest(...func_get_args()),
            DataObjects\EmptyData::class
        );
    }
}
