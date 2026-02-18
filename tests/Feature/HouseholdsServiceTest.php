<?php

use GuzzleHttp\Client;
use GuzzleHttp\Handler\MockHandler;
use GuzzleHttp\HandlerStack;
use GuzzleHttp\Psr7\Response;
use GuzzleHttp\Psr7\Utils;
use TwoJays\NeonApiWrapper\DataObjects\HouseholdData;
use TwoJays\NeonApiWrapper\DataObjects\IdResultData;
use TwoJays\NeonApiWrapper\DataObjects\ListHouseholdData;
use TwoJays\NeonApiWrapper\DataObjects\RelationTypeData;
use TwoJays\NeonApiWrapper\Factories\DataGeneratorFactory;
use TwoJays\NeonApiWrapper\Services\Households\HouseholdsService;

uses()->group('services', 'households');

beforeEach(function () {
    $this->mockHandler = new MockHandler([]);

    $client = new Client(['handler' => HandlerStack::create($this->mockHandler)]);

    $this->service = new HouseholdsService($client);
});

it('lists households', function () {
    $responseContent = [
        DataGeneratorFactory::generate(ListHouseholdData::class)->toArray(),
        DataGeneratorFactory::generate(ListHouseholdData::class)->toArray(),
    ];

    $this->mockHandler
        ->append(new Response(200, [], Utils::streamFor(json_encode($responseContent))));

    $response = $this->service->listHouseholds();

    expect($response)
        ->toBeArray();
});

it('lists relation types', function () {
    $responseContent = [
        DataGeneratorFactory::generate(RelationTypeData::class)->toArray(),
        DataGeneratorFactory::generate(RelationTypeData::class)->toArray(),
    ];

    $this->mockHandler
        ->append(new Response(200, [], Utils::streamFor(json_encode($responseContent))));

    $response = $this->service->listRelationTypes();

    expect($response)
        ->toBeArray();
});

it('creates a household', function () {
    $responseContent = DataGeneratorFactory::generate(IdResultData::class)->toArray();

    $this->mockHandler
        ->append(new Response(200, [], Utils::streamFor(json_encode($responseContent))));

    $household = DataGeneratorFactory::generate(HouseholdData::class);
    $response = $this->service->createHousehold($household);

    expect($response)
        ->toBeInstanceOf(IdResultData::class);
});

it('updates a household', function () {
    $responseContent = DataGeneratorFactory::generate(IdResultData::class)->toArray();

    $this->mockHandler
        ->append(new Response(200, [], Utils::streamFor(json_encode($responseContent))));

    $household = DataGeneratorFactory::generate(HouseholdData::class);
    $response = $this->service->updateHousehold('123', $household);

    expect($response)
        ->toBeInstanceOf(IdResultData::class);
});

it('deletes a household', function () {
    $responseContent = DataGeneratorFactory::generate(IdResultData::class)->toArray();

    $this->mockHandler
        ->append(new Response(200, [], Utils::streamFor(json_encode($responseContent))));

    $response = $this->service->deleteHousehold('123');

    expect($response)
        ->toBeInstanceOf(IdResultData::class);
});
