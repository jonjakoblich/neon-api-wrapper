<?php

use GuzzleHttp\Client;
use GuzzleHttp\Handler\MockHandler;
use GuzzleHttp\HandlerStack;
use GuzzleHttp\Psr7\Response;
use GuzzleHttp\Psr7\Utils;
use TwoJays\NeonApiWrapper\DataObjects\CalculateResultData;
use TwoJays\NeonApiWrapper\DataObjects\EmptyData;
use TwoJays\NeonApiWrapper\DataObjects\EventRegistrationData;
use TwoJays\NeonApiWrapper\DataObjects\EventRegistrationResponseData;
use TwoJays\NeonApiWrapper\DataObjects\PaymentData;
use TwoJays\NeonApiWrapper\DataObjects\PaymentResponseData;
use TwoJays\NeonApiWrapper\Factories\DataGeneratorFactory;
use TwoJays\NeonApiWrapper\Services\EventRegistrations\EventRegistrationsService;

uses()->group('services', 'eventRegistrations');

beforeEach(function () {
    $this->mockHandler = new MockHandler([]);

    $client = new Client(['handler' => HandlerStack::create($this->mockHandler)]);

    $this->service = new EventRegistrationsService($client);
});

it('creates an event registration', function () {
    $responseContent = DataGeneratorFactory::generate(EventRegistrationResponseData::class)->toArray();

    $this->mockHandler
        ->append(new Response(200, [], Utils::streamFor(json_encode($responseContent))));

    $registration = DataGeneratorFactory::generate(EventRegistrationData::class);
    $response = $this->service->createRegistration($registration);

    expect($response)
        ->toBeInstanceOf(EventRegistrationResponseData::class);
});

it('calculates the fee for an event registration', function () {
    $responseContent = DataGeneratorFactory::generate(CalculateResultData::class)->toArray();

    $this->mockHandler
        ->append(new Response(200, [], Utils::streamFor(json_encode($responseContent))));

    $registration = DataGeneratorFactory::generate(EventRegistrationData::class);
    $response = $this->service->calculateFee($registration);

    expect($response)
        ->toBeInstanceOf(CalculateResultData::class);
});

it('gets an event registration', function () {
    $responseContent = DataGeneratorFactory::generate(EventRegistrationData::class)->toArray();

    $this->mockHandler
        ->append(new Response(200, [], Utils::streamFor(json_encode($responseContent))));

    $response = $this->service->getRegistration('123');

    expect($response)
        ->toBeInstanceOf(EventRegistrationData::class);
});

it('updates an event registration', function () {
    $responseContent = DataGeneratorFactory::generate(EventRegistrationResponseData::class)->toArray();

    $this->mockHandler
        ->append(new Response(200, [], Utils::streamFor(json_encode($responseContent))));

    $registration = DataGeneratorFactory::generate(EventRegistrationData::class);
    $response = $this->service->updateRegistration('123', $registration);

    expect($response)
        ->toBeInstanceOf(EventRegistrationResponseData::class);
});

it('deletes an event registration', function () {
    $this->mockHandler
        ->append(new Response(200, [], Utils::streamFor(json_encode(new class {}))));

    $response = $this->service->deleteRegistration('123');

    expect($response)
        ->toBeInstanceOf(EmptyData::class);
});

it('patches an event registration', function () {
    $responseContent = DataGeneratorFactory::generate(EventRegistrationResponseData::class)->toArray();

    $this->mockHandler
        ->append(new Response(200, [], Utils::streamFor(json_encode($responseContent))));

    $registration = DataGeneratorFactory::generate(EventRegistrationData::class);
    $response = $this->service->patchRegistration('123', $registration);

    expect($response)
        ->toBeInstanceOf(EventRegistrationResponseData::class);
});

it('adds a payment to an event registration', function () {
    $responseContent = DataGeneratorFactory::generate(PaymentResponseData::class)->toArray();

    $this->mockHandler
        ->append(new Response(200, [], Utils::streamFor(json_encode($responseContent))));

    $payment = DataGeneratorFactory::generate(PaymentData::class);
    $response = $this->service->addPayment('123', $payment);

    expect($response)
        ->toBeInstanceOf(PaymentResponseData::class);
});
