<?php

namespace TwoJays\NeonApiWrapper\Services\EventRegistrations;

use TwoJays\NeonApiWrapper\DataObjects;
use TwoJays\NeonApiWrapper\Services\BaseService;

class EventRegistrationsService extends BaseService
{
    public function createRegistration(
        DataObjects\EventRegistrationData $registration
    ): DataObjects\EventRegistrationResponseData
    {
        return $this->getResponse(
            new Requests\CreateEventRegistrationRequest($registration),
            DataObjects\EventRegistrationResponseData::class
        );
    }

    public function calculateFee(
        DataObjects\EventRegistrationData $registration
    ): DataObjects\CalculateResultData
    {
        return $this->getResponse(
            new Requests\CalculateEventRegistrationRequest($registration),
            DataObjects\CalculateResultData::class
        );
    }

    public function getRegistration(
        string $registrationId
    ): DataObjects\EventRegistrationData
    {
        return $this->getResponse(
            new Requests\GetEventRegistrationRequest($registrationId),
            DataObjects\EventRegistrationData::class
        );
    }

    public function updateRegistration(
        string $registrationId,
        DataObjects\EventRegistrationData $registration,
    ): DataObjects\EventRegistrationResponseData
    {
        return $this->getResponse(
            new Requests\UpdateEventRegistrationRequest(...func_get_args()),
            DataObjects\EventRegistrationResponseData::class
        );
    }

    public function deleteRegistration(
        string $registrationId
    ): DataObjects\EmptyData
    {
        return $this->getResponse(
            new Requests\DeleteEventRegistrationRequest($registrationId),
            DataObjects\EmptyData::class
        );
    }

    public function patchRegistration(
        string $registrationId,
        DataObjects\EventRegistrationData $registration,
    ): DataObjects\EventRegistrationResponseData
    {
        return $this->getResponse(
            new Requests\PatchEventRegistrationRequest(...func_get_args()),
            DataObjects\EventRegistrationResponseData::class
        );
    }

    public function addPayment(
        string $registrationId,
        DataObjects\PaymentData $payment,
    ): DataObjects\PaymentResponseData
    {
        return $this->getResponse(
            new Requests\AddEventRegistrationPaymentRequest(...func_get_args()),
            DataObjects\PaymentResponseData::class
        );
    }
}
