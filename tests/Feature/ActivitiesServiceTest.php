<?php

use GuzzleHttp\Client;
use GuzzleHttp\Handler\MockHandler;
use GuzzleHttp\HandlerStack;
use GuzzleHttp\Psr7\Response;
use GuzzleHttp\Psr7\Utils;
use TwoJays\NeonApiWrapper\DataObjects\ActivityData;
use TwoJays\NeonApiWrapper\DataObjects\IdResultData;
use TwoJays\NeonApiWrapper\DataObjects\OutputFieldsData;
use TwoJays\NeonApiWrapper\DataObjects\SearchFieldsData;
use TwoJays\NeonApiWrapper\DataObjects\SearchRequestData;
use TwoJays\NeonApiWrapper\DataObjects\SearchResponseData;
use TwoJays\NeonApiWrapper\Factories\DataGeneratorFactory;
use TwoJays\NeonApiWrapper\Services\Activities\ActivitiesService;

uses()->group('services', 'activities');

beforeEach(function () {
    $this->mockHandler = new MockHandler([]);

    $client = new Client(['handler' => HandlerStack::create($this->mockHandler)]);

    $this->service = new ActivitiesService($client);
});

it('creates an activity', function () {
    $responseContent = DataGeneratorFactory::generate(IdResultData::class)->toArray();

    $this->mockHandler
        ->append(new Response(200, [], Utils::streamFor(json_encode($responseContent))));

    $activity = DataGeneratorFactory::generate(ActivityData::class);
    $response = $this->service->createActivity($activity);

    expect($response)
        ->toBeInstanceOf(IdResultData::class);
});

it('gets an activity', function () {
    $responseContent = DataGeneratorFactory::generate(ActivityData::class)->toArray();

    $this->mockHandler
        ->append(new Response(200, [], Utils::streamFor(json_encode($responseContent))));

    $response = $this->service->getActivity('123');

    expect($response)
        ->toBeInstanceOf(ActivityData::class);
});

it('updates an activity', function () {
    $responseContent = DataGeneratorFactory::generate(IdResultData::class)->toArray();

    $this->mockHandler
        ->append(new Response(200, [], Utils::streamFor(json_encode($responseContent))));

    $activity = DataGeneratorFactory::generate(ActivityData::class);
    $response = $this->service->updateActivity('123', $activity);

    expect($response)
        ->toBeInstanceOf(IdResultData::class);
});

it('deletes an activity', function () {
    $responseContent = DataGeneratorFactory::generate(IdResultData::class)->toArray();

    $this->mockHandler
        ->append(new Response(200, [], Utils::streamFor(json_encode($responseContent))));

    $response = $this->service->deleteActivity('123');

    expect($response)
        ->toBeInstanceOf(IdResultData::class);
});

it('patches an activity', function () {
    $responseContent = DataGeneratorFactory::generate(IdResultData::class)->toArray();

    $this->mockHandler
        ->append(new Response(200, [], Utils::streamFor(json_encode($responseContent))));

    $activity = DataGeneratorFactory::generate(ActivityData::class);
    $response = $this->service->patchActivity('123', $activity);

    expect($response)
        ->toBeInstanceOf(IdResultData::class);
});

it('searches activities', function () {
    $responseContent = DataGeneratorFactory::generate(SearchResponseData::class)->toArray();

    $this->mockHandler
        ->append(new Response(200, [], Utils::streamFor(json_encode($responseContent))));

    $searchRequest = DataGeneratorFactory::generate(SearchRequestData::class);
    $response = $this->service->searchActivities($searchRequest);

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
