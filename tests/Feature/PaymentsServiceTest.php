<?php

use GuzzleHttp\Client;
use GuzzleHttp\Handler\MockHandler;
use GuzzleHttp\HandlerStack;
use GuzzleHttp\Psr7\Response;
use GuzzleHttp\Psr7\Utils;
use TwoJays\NeonApiWrapper\DataObjects\AddPaymentRequestData;
use TwoJays\NeonApiWrapper\DataObjects\CodeNamePairData;
use TwoJays\NeonApiWrapper\DataObjects\DonorCoveredFeesData;
use TwoJays\NeonApiWrapper\DataObjects\EmptyData;
use TwoJays\NeonApiWrapper\DataObjects\IdNamePairData;
use TwoJays\NeonApiWrapper\DataObjects\ProcessorSettingsData;
use TwoJays\NeonApiWrapper\Factories\DataGeneratorFactory;
use TwoJays\NeonApiWrapper\Services\Payments\PaymentsService;

uses()->group('services', 'payments');

beforeEach(function () {
    $this->mockHandler = new MockHandler([]);

    $client = new Client(['handler' => HandlerStack::create($this->mockHandler)]);

    $this->service = new PaymentsService($client);
});

it('adds a payment', function () {
    $this->mockHandler
        ->append(new Response(200, [], Utils::streamFor(json_encode(new class {}))));

    $payment = DataGeneratorFactory::generate(AddPaymentRequestData::class);
    $response = $this->service->addPayment($payment);

    expect($response)
        ->toBeInstanceOf(EmptyData::class);
});

it('refunds a payment', function () {
    $this->mockHandler
        ->append(new Response(200, [], Utils::streamFor(json_encode(new class {}))));

    $response = $this->service->refundPayment('123');

    expect($response)
        ->toBeInstanceOf(EmptyData::class);
});

it('gets credit card types', function () {
    $responseContent = [
        DataGeneratorFactory::generate(CodeNamePairData::class)->toArray(),
        DataGeneratorFactory::generate(CodeNamePairData::class)->toArray(),
    ];

    $this->mockHandler
        ->append(new Response(200, [], Utils::streamFor(json_encode($responseContent))));

    $response = $this->service->getCreditCardTypes();

    expect($response)
        ->toBeArray();
});

it('gets donor covered fees', function () {
    $responseContent = DataGeneratorFactory::generate(DonorCoveredFeesData::class)->toArray();

    $this->mockHandler
        ->append(new Response(200, [], Utils::streamFor(json_encode($responseContent))));

    $response = $this->service->getDonorCoveredFees(100.00, 'donation');

    expect($response)
        ->toBeInstanceOf(DonorCoveredFeesData::class);
});

it('gets processor settings', function () {
    $responseContent = DataGeneratorFactory::generate(ProcessorSettingsData::class)->toArray();

    $this->mockHandler
        ->append(new Response(200, [], Utils::streamFor(json_encode($responseContent))));

    $response = $this->service->getProcessorSettings();

    expect($response)
        ->toBeInstanceOf(ProcessorSettingsData::class);
});

it('gets tenders', function () {
    $responseContent = [
        DataGeneratorFactory::generate(IdNamePairData::class)->toArray(),
        DataGeneratorFactory::generate(IdNamePairData::class)->toArray(),
    ];

    $this->mockHandler
        ->append(new Response(200, [], Utils::streamFor(json_encode($responseContent))));

    $response = $this->service->getTenders();

    expect($response)
        ->toBeArray();
});
