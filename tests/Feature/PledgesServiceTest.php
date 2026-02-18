<?php

use GuzzleHttp\Client;
use GuzzleHttp\Handler\MockHandler;
use GuzzleHttp\HandlerStack;
use GuzzleHttp\Psr7\Response;
use GuzzleHttp\Psr7\Utils;
use TwoJays\NeonApiWrapper\DataObjects\AccountIdAndRefIdResultData;
use TwoJays\NeonApiWrapper\DataObjects\AccountIdResultData;
use TwoJays\NeonApiWrapper\DataObjects\EmptyData;
use TwoJays\NeonApiWrapper\DataObjects\InstallmentData;
use TwoJays\NeonApiWrapper\DataObjects\PledgeData;
use TwoJays\NeonApiWrapper\DataObjects\PledgePaymentData;
use TwoJays\NeonApiWrapper\DataObjects\PledgePaymentResponseData;
use TwoJays\NeonApiWrapper\Factories\DataGeneratorFactory;
use TwoJays\NeonApiWrapper\Services\Pledges\PledgesService;

uses()->group('services', 'pledges');

beforeEach(function () {
    $this->mockHandler = new MockHandler([]);

    $client = new Client(['handler' => HandlerStack::create($this->mockHandler)]);

    $this->service = new PledgesService($client);
});

it('creates a pledge', function () {
    $responseContent = DataGeneratorFactory::generate(AccountIdAndRefIdResultData::class)->toArray();

    $this->mockHandler
        ->append(new Response(200, [], Utils::streamFor(json_encode($responseContent))));

    $pledge = DataGeneratorFactory::generate(PledgeData::class);
    $response = $this->service->createPledge($pledge);

    expect($response)
        ->toBeInstanceOf(AccountIdAndRefIdResultData::class);
});

it('gets a pledge', function () {
    $responseContent = DataGeneratorFactory::generate(PledgeData::class)->toArray();

    $this->mockHandler
        ->append(new Response(200, [], Utils::streamFor(json_encode($responseContent))));

    $response = $this->service->getPledge('123');

    expect($response)
        ->toBeInstanceOf(PledgeData::class);
});

it('updates a pledge', function () {
    $responseContent = DataGeneratorFactory::generate(AccountIdResultData::class)->toArray();

    $this->mockHandler
        ->append(new Response(200, [], Utils::streamFor(json_encode($responseContent))));

    $pledge = DataGeneratorFactory::generate(PledgeData::class);
    $response = $this->service->updatePledge('123', $pledge);

    expect($response)
        ->toBeInstanceOf(AccountIdResultData::class);
});

it('deletes a pledge', function () {
    $this->mockHandler
        ->append(new Response(200, [], Utils::streamFor(json_encode(new class {}))));

    $response = $this->service->deletePledge('123');

    expect($response)
        ->toBeInstanceOf(EmptyData::class);
});

it('patches a pledge', function () {
    $responseContent = DataGeneratorFactory::generate(AccountIdResultData::class)->toArray();

    $this->mockHandler
        ->append(new Response(200, [], Utils::streamFor(json_encode($responseContent))));

    $pledge = DataGeneratorFactory::generate(PledgeData::class);
    $response = $this->service->patchPledge('123', $pledge);

    expect($response)
        ->toBeInstanceOf(AccountIdResultData::class);
});

it('lists pledge payments', function () {
    $responseContent = [
        DataGeneratorFactory::generate(PledgePaymentData::class)->toArray(),
        DataGeneratorFactory::generate(PledgePaymentData::class)->toArray(),
    ];

    $this->mockHandler
        ->append(new Response(200, [], Utils::streamFor(json_encode($responseContent))));

    $response = $this->service->listPledgePayments('123');

    expect($response)
        ->toBeArray();
});

it('creates a pledge payment', function () {
    $responseContent = DataGeneratorFactory::generate(PledgePaymentResponseData::class)->toArray();

    $this->mockHandler
        ->append(new Response(200, [], Utils::streamFor(json_encode($responseContent))));

    $payment = DataGeneratorFactory::generate(PledgePaymentData::class);
    $response = $this->service->createPledgePayment('123', $payment);

    expect($response)
        ->toBeInstanceOf(PledgePaymentResponseData::class);
});

it('gets a pledge payment', function () {
    $responseContent = DataGeneratorFactory::generate(PledgePaymentData::class)->toArray();

    $this->mockHandler
        ->append(new Response(200, [], Utils::streamFor(json_encode($responseContent))));

    $response = $this->service->getPledgePayment('123', '456');

    expect($response)
        ->toBeInstanceOf(PledgePaymentData::class);
});

it('deletes a pledge payment', function () {
    $this->mockHandler
        ->append(new Response(200, [], Utils::streamFor(json_encode(new class {}))));

    $response = $this->service->deletePledgePayment('123', '456');

    expect($response)
        ->toBeInstanceOf(EmptyData::class);
});

it('lists installments', function () {
    $responseContent = [
        DataGeneratorFactory::generate(InstallmentData::class)->toArray(),
        DataGeneratorFactory::generate(InstallmentData::class)->toArray(),
    ];

    $this->mockHandler
        ->append(new Response(200, [], Utils::streamFor(json_encode($responseContent))));

    $response = $this->service->listInstallments('123');

    expect($response)
        ->toBeArray();
});

it('creates an installment', function () {
    $responseContent = DataGeneratorFactory::generate(InstallmentData::class)->toArray();

    $this->mockHandler
        ->append(new Response(200, [], Utils::streamFor(json_encode($responseContent))));

    $installment = DataGeneratorFactory::generate(InstallmentData::class);
    $response = $this->service->createInstallment('123', $installment);

    expect($response)
        ->toBeInstanceOf(InstallmentData::class);
});

it('gets an installment', function () {
    $responseContent = DataGeneratorFactory::generate(InstallmentData::class)->toArray();

    $this->mockHandler
        ->append(new Response(200, [], Utils::streamFor(json_encode($responseContent))));

    $response = $this->service->getInstallment('123', '456');

    expect($response)
        ->toBeInstanceOf(InstallmentData::class);
});

it('updates an installment', function () {
    $responseContent = DataGeneratorFactory::generate(InstallmentData::class)->toArray();

    $this->mockHandler
        ->append(new Response(200, [], Utils::streamFor(json_encode($responseContent))));

    $installment = DataGeneratorFactory::generate(InstallmentData::class);
    $response = $this->service->updateInstallment('123', '456', $installment);

    expect($response)
        ->toBeInstanceOf(InstallmentData::class);
});

it('deletes an installment', function () {
    $this->mockHandler
        ->append(new Response(200, [], Utils::streamFor(json_encode(new class {}))));

    $response = $this->service->deleteInstallment('123', '456');

    expect($response)
        ->toBeInstanceOf(EmptyData::class);
});
