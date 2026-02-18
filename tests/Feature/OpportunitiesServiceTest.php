<?php

use GuzzleHttp\Client;
use GuzzleHttp\Handler\MockHandler;
use GuzzleHttp\HandlerStack;
use GuzzleHttp\Psr7\Response;
use GuzzleHttp\Psr7\Utils;
use TwoJays\NeonApiWrapper\DataObjects\AssignmentVolunteersData;
use TwoJays\NeonApiWrapper\DataObjects\IdResultData;
use TwoJays\NeonApiWrapper\DataObjects\OpportunityData;
use TwoJays\NeonApiWrapper\DataObjects\OpportunitySearchResultData;
use TwoJays\NeonApiWrapper\DataObjects\VolunteerAccountIdsData;
use TwoJays\NeonApiWrapper\DataObjects\VolunteerSearchResultData;
use TwoJays\NeonApiWrapper\Factories\DataGeneratorFactory;
use TwoJays\NeonApiWrapper\Services\Opportunities\OpportunitiesService;

uses()->group('services', 'opportunities');

beforeEach(function () {
    $this->mockHandler = new MockHandler([]);

    $client = new Client(['handler' => HandlerStack::create($this->mockHandler)]);

    $this->service = new OpportunitiesService($client);
});

it('lists opportunities', function () {
    $responseContent = DataGeneratorFactory::generate(OpportunitySearchResultData::class)->toArray();

    $this->mockHandler
        ->append(new Response(200, [], Utils::streamFor(json_encode($responseContent))));

    $response = $this->service->listOpportunities();

    expect($response)
        ->toBeInstanceOf(OpportunitySearchResultData::class);
});

it('creates an opportunity', function () {
    $responseContent = DataGeneratorFactory::generate(IdResultData::class)->toArray();

    $this->mockHandler
        ->append(new Response(200, [], Utils::streamFor(json_encode($responseContent))));

    $opportunity = DataGeneratorFactory::generate(OpportunityData::class);
    $response = $this->service->createOpportunity($opportunity);

    expect($response)
        ->toBeInstanceOf(IdResultData::class);
});

it('gets an opportunity', function () {
    $responseContent = DataGeneratorFactory::generate(OpportunityData::class)->toArray();

    $this->mockHandler
        ->append(new Response(200, [], Utils::streamFor(json_encode($responseContent))));

    $response = $this->service->getOpportunity('123');

    expect($response)
        ->toBeInstanceOf(OpportunityData::class);
});

it('updates an opportunity', function () {
    $responseContent = DataGeneratorFactory::generate(IdResultData::class)->toArray();

    $this->mockHandler
        ->append(new Response(200, [], Utils::streamFor(json_encode($responseContent))));

    $opportunity = DataGeneratorFactory::generate(OpportunityData::class);
    $response = $this->service->updateOpportunity('123', $opportunity);

    expect($response)
        ->toBeInstanceOf(IdResultData::class);
});

it('deletes an opportunity', function () {
    $responseContent = DataGeneratorFactory::generate(IdResultData::class)->toArray();

    $this->mockHandler
        ->append(new Response(200, [], Utils::streamFor(json_encode($responseContent))));

    $response = $this->service->deleteOpportunity('123');

    expect($response)
        ->toBeInstanceOf(IdResultData::class);
});

it('patches an opportunity', function () {
    $responseContent = DataGeneratorFactory::generate(IdResultData::class)->toArray();

    $this->mockHandler
        ->append(new Response(200, [], Utils::streamFor(json_encode($responseContent))));

    $opportunity = DataGeneratorFactory::generate(OpportunityData::class);
    $response = $this->service->patchOpportunity('123', $opportunity);

    expect($response)
        ->toBeInstanceOf(IdResultData::class);
});

it('lists opportunity volunteers', function () {
    $responseContent = DataGeneratorFactory::generate(VolunteerSearchResultData::class)->toArray();

    $this->mockHandler
        ->append(new Response(200, [], Utils::streamFor(json_encode($responseContent))));

    $response = $this->service->listOpportunityVolunteers('123');

    expect($response)
        ->toBeInstanceOf(VolunteerSearchResultData::class);
});

it('adds volunteers to an opportunity', function () {
    $responseContent = DataGeneratorFactory::generate(IdResultData::class)->toArray();

    $this->mockHandler
        ->append(new Response(200, [], Utils::streamFor(json_encode($responseContent))));

    $volunteers = DataGeneratorFactory::generate(AssignmentVolunteersData::class);
    $response = $this->service->addOpportunityVolunteers('123', $volunteers);

    expect($response)
        ->toBeInstanceOf(IdResultData::class);
});

it('removes volunteers from an opportunity', function () {
    $responseContent = DataGeneratorFactory::generate(IdResultData::class)->toArray();

    $this->mockHandler
        ->append(new Response(200, [], Utils::streamFor(json_encode($responseContent))));

    $volunteers = DataGeneratorFactory::generate(VolunteerAccountIdsData::class);
    $response = $this->service->removeOpportunityVolunteers('123', $volunteers);

    expect($response)
        ->toBeInstanceOf(IdResultData::class);
});
