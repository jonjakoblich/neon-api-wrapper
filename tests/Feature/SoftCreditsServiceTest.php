<?php

use GuzzleHttp\Client;
use GuzzleHttp\Handler\MockHandler;
use GuzzleHttp\HandlerStack;
use GuzzleHttp\Psr7\Response;
use GuzzleHttp\Psr7\Utils;
use TwoJays\NeonApiWrapper\DataObjects\EmptyData;
use TwoJays\NeonApiWrapper\DataObjects\IdResultData;
use TwoJays\NeonApiWrapper\DataObjects\SoftCreditData;
use TwoJays\NeonApiWrapper\DataObjects\SoftCreditSearchResultData;
use TwoJays\NeonApiWrapper\Factories\DataGeneratorFactory;
use TwoJays\NeonApiWrapper\Services\SoftCredits\SoftCreditsService;

uses()->group('services', 'softCredits');

beforeEach(function () {
    $this->mockHandler = new MockHandler([]);

    $client = new Client(['handler' => HandlerStack::create($this->mockHandler)]);

    $this->service = new SoftCreditsService($client);
});

it('lists soft credits', function () {
    $responseContent = DataGeneratorFactory::generate(SoftCreditSearchResultData::class)->toArray();

    $this->mockHandler
        ->append(new Response(200, [], Utils::streamFor(json_encode($responseContent))));

    $response = $this->service->listSoftCredits();

    expect($response)
        ->toBeInstanceOf(SoftCreditSearchResultData::class);
});

it('creates a soft credit', function () {
    $responseContent = DataGeneratorFactory::generate(IdResultData::class)->toArray();

    $this->mockHandler
        ->append(new Response(200, [], Utils::streamFor(json_encode($responseContent))));

    $softCredit = DataGeneratorFactory::generate(SoftCreditData::class);
    $response = $this->service->createSoftCredit($softCredit);

    expect($response)
        ->toBeInstanceOf(IdResultData::class);
});

it('gets a soft credit', function () {
    $responseContent = DataGeneratorFactory::generate(SoftCreditData::class)->toArray();

    $this->mockHandler
        ->append(new Response(200, [], Utils::streamFor(json_encode($responseContent))));

    $response = $this->service->getSoftCredit('123');

    expect($response)
        ->toBeInstanceOf(SoftCreditData::class);
});

it('updates a soft credit', function () {
    $responseContent = DataGeneratorFactory::generate(IdResultData::class)->toArray();

    $this->mockHandler
        ->append(new Response(200, [], Utils::streamFor(json_encode($responseContent))));

    $softCredit = DataGeneratorFactory::generate(SoftCreditData::class);
    $response = $this->service->updateSoftCredit('123', $softCredit);

    expect($response)
        ->toBeInstanceOf(IdResultData::class);
});

it('deletes a soft credit', function () {
    $this->mockHandler
        ->append(new Response(200, [], Utils::streamFor(json_encode(new class {}))));

    $response = $this->service->deleteSoftCredit('123');

    expect($response)
        ->toBeInstanceOf(EmptyData::class);
});

it('patches a soft credit', function () {
    $responseContent = DataGeneratorFactory::generate(IdResultData::class)->toArray();

    $this->mockHandler
        ->append(new Response(200, [], Utils::streamFor(json_encode($responseContent))));

    $softCredit = DataGeneratorFactory::generate(SoftCreditData::class);
    $response = $this->service->patchSoftCredit('123', $softCredit);

    expect($response)
        ->toBeInstanceOf(IdResultData::class);
});
