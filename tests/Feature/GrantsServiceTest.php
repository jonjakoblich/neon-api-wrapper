<?php

use GuzzleHttp\Client;
use GuzzleHttp\Handler\MockHandler;
use GuzzleHttp\HandlerStack;
use GuzzleHttp\Psr7\Response;
use GuzzleHttp\Psr7\Utils;
use TwoJays\NeonApiWrapper\DataObjects\EmptyData;
use TwoJays\NeonApiWrapper\DataObjects\GrantData;
use TwoJays\NeonApiWrapper\DataObjects\IdResultData;
use TwoJays\NeonApiWrapper\DataObjects\OutputFieldsData;
use TwoJays\NeonApiWrapper\DataObjects\SearchFieldsData;
use TwoJays\NeonApiWrapper\DataObjects\SearchRequestData;
use TwoJays\NeonApiWrapper\DataObjects\SearchResponseData;
use TwoJays\NeonApiWrapper\Factories\DataGeneratorFactory;
use TwoJays\NeonApiWrapper\Services\Grants\GrantsService;

uses()->group('services', 'grants');

beforeEach(function () {
    $this->mockHandler = new MockHandler([]);

    $client = new Client(['handler' => HandlerStack::create($this->mockHandler)]);

    $this->service = new GrantsService($client);
});

it('creates a grant', function () {
    $responseContent = DataGeneratorFactory::generate(IdResultData::class)->toArray();

    $this->mockHandler
        ->append(new Response(200, [], Utils::streamFor(json_encode($responseContent))));

    $grant = DataGeneratorFactory::generate(GrantData::class);
    $response = $this->service->createGrant($grant);

    expect($response)
        ->toBeInstanceOf(IdResultData::class);
});

it('gets a grant', function () {
    $responseContent = DataGeneratorFactory::generate(GrantData::class)->toArray();

    $this->mockHandler
        ->append(new Response(200, [], Utils::streamFor(json_encode($responseContent))));

    $response = $this->service->getGrant('123');

    expect($response)
        ->toBeInstanceOf(GrantData::class);
});

it('updates a grant', function () {
    $responseContent = DataGeneratorFactory::generate(IdResultData::class)->toArray();

    $this->mockHandler
        ->append(new Response(200, [], Utils::streamFor(json_encode($responseContent))));

    $grant = DataGeneratorFactory::generate(GrantData::class);
    $response = $this->service->updateGrant('123', $grant);

    expect($response)
        ->toBeInstanceOf(IdResultData::class);
});

it('deletes a grant', function () {
    $this->mockHandler
        ->append(new Response(200, [], Utils::streamFor(json_encode(new class {}))));

    $response = $this->service->deleteGrant('123');

    expect($response)
        ->toBeInstanceOf(EmptyData::class);
});

it('patches a grant', function () {
    $responseContent = DataGeneratorFactory::generate(IdResultData::class)->toArray();

    $this->mockHandler
        ->append(new Response(200, [], Utils::streamFor(json_encode($responseContent))));

    $grant = DataGeneratorFactory::generate(GrantData::class);
    $response = $this->service->patchGrant('123', $grant);

    expect($response)
        ->toBeInstanceOf(IdResultData::class);
});

it('searches grants', function () {
    $responseContent = DataGeneratorFactory::generate(SearchResponseData::class)->toArray();

    $this->mockHandler
        ->append(new Response(200, [], Utils::streamFor(json_encode($responseContent))));

    $searchRequest = DataGeneratorFactory::generate(SearchRequestData::class);
    $response = $this->service->searchGrants($searchRequest);

    expect($response)
        ->toBeInstanceOf(SearchResponseData::class);
});

it('gets search output fields', function () {
    $responseContent = DataGeneratorFactory::generate(OutputFieldsData::class)->toArray();

    $this->mockHandler
        ->append(new Response(200, [], Utils::streamFor(json_encode($responseContent))));

    $response = $this->service->getSearchOutputFields();

    expect($response)
        ->toBeInstanceOf(OutputFieldsData::class);
});

it('gets search fields', function () {
    $responseContent = DataGeneratorFactory::generate(SearchFieldsData::class)->toArray();

    $this->mockHandler
        ->append(new Response(200, [], Utils::streamFor(json_encode($responseContent))));

    $response = $this->service->getSearchFields();

    expect($response)
        ->toBeInstanceOf(SearchFieldsData::class);
});
