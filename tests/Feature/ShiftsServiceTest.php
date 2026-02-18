<?php

use GuzzleHttp\Client;
use GuzzleHttp\Handler\MockHandler;
use GuzzleHttp\HandlerStack;
use GuzzleHttp\Psr7\Response;
use GuzzleHttp\Psr7\Utils;
use TwoJays\NeonApiWrapper\DataObjects\AssignShiftVolunteerData;
use TwoJays\NeonApiWrapper\DataObjects\IdResultData;
use TwoJays\NeonApiWrapper\DataObjects\OpportunityShiftData;
use TwoJays\NeonApiWrapper\DataObjects\OpportunityShiftSearchResultData;
use TwoJays\NeonApiWrapper\DataObjects\VolunteerAccountIdsData;
use TwoJays\NeonApiWrapper\DataObjects\VolunteerSearchResultData;
use TwoJays\NeonApiWrapper\Factories\DataGeneratorFactory;
use TwoJays\NeonApiWrapper\Services\Shifts\ShiftsService;

uses()->group('services', 'shifts');

beforeEach(function () {
    $this->mockHandler = new MockHandler([]);

    $client = new Client(['handler' => HandlerStack::create($this->mockHandler)]);

    $this->service = new ShiftsService($client);
});

it('lists shifts', function () {
    $responseContent = DataGeneratorFactory::generate(OpportunityShiftSearchResultData::class)->toArray();

    $this->mockHandler
        ->append(new Response(200, [], Utils::streamFor(json_encode($responseContent))));

    $response = $this->service->listShifts('456');

    expect($response)
        ->toBeInstanceOf(OpportunityShiftSearchResultData::class);
});

it('creates a shift', function () {
    $responseContent = DataGeneratorFactory::generate(IdResultData::class)->toArray();

    $this->mockHandler
        ->append(new Response(200, [], Utils::streamFor(json_encode($responseContent))));

    $shift = DataGeneratorFactory::generate(OpportunityShiftData::class);
    $response = $this->service->createShift('456', $shift);

    expect($response)
        ->toBeInstanceOf(IdResultData::class);
});

it('gets a shift', function () {
    $responseContent = DataGeneratorFactory::generate(OpportunityShiftData::class)->toArray();

    $this->mockHandler
        ->append(new Response(200, [], Utils::streamFor(json_encode($responseContent))));

    $response = $this->service->getShift('456', '789');

    expect($response)
        ->toBeInstanceOf(OpportunityShiftData::class);
});

it('updates a shift', function () {
    $responseContent = DataGeneratorFactory::generate(IdResultData::class)->toArray();

    $this->mockHandler
        ->append(new Response(200, [], Utils::streamFor(json_encode($responseContent))));

    $shift = DataGeneratorFactory::generate(OpportunityShiftData::class);
    $response = $this->service->updateShift('456', '789', $shift);

    expect($response)
        ->toBeInstanceOf(IdResultData::class);
});

it('deletes a shift', function () {
    $responseContent = DataGeneratorFactory::generate(IdResultData::class)->toArray();

    $this->mockHandler
        ->append(new Response(200, [], Utils::streamFor(json_encode($responseContent))));

    $response = $this->service->deleteShift('456', '789');

    expect($response)
        ->toBeInstanceOf(IdResultData::class);
});

it('patches a shift', function () {
    $responseContent = DataGeneratorFactory::generate(IdResultData::class)->toArray();

    $this->mockHandler
        ->append(new Response(200, [], Utils::streamFor(json_encode($responseContent))));

    $shift = DataGeneratorFactory::generate(OpportunityShiftData::class);
    $response = $this->service->patchShift('456', '789', $shift);

    expect($response)
        ->toBeInstanceOf(IdResultData::class);
});

it('lists shift volunteers', function () {
    $responseContent = DataGeneratorFactory::generate(VolunteerSearchResultData::class)->toArray();

    $this->mockHandler
        ->append(new Response(200, [], Utils::streamFor(json_encode($responseContent))));

    $response = $this->service->listShiftVolunteers('456', '789');

    expect($response)
        ->toBeInstanceOf(VolunteerSearchResultData::class);
});

it('adds volunteers to a shift', function () {
    $responseContent = DataGeneratorFactory::generate(IdResultData::class)->toArray();

    $this->mockHandler
        ->append(new Response(200, [], Utils::streamFor(json_encode($responseContent))));

    $volunteers = DataGeneratorFactory::generate(AssignShiftVolunteerData::class);
    $response = $this->service->addShiftVolunteers('456', '789', $volunteers);

    expect($response)
        ->toBeInstanceOf(IdResultData::class);
});

it('removes volunteers from a shift', function () {
    $responseContent = DataGeneratorFactory::generate(IdResultData::class)->toArray();

    $this->mockHandler
        ->append(new Response(200, [], Utils::streamFor(json_encode($responseContent))));

    $volunteers = DataGeneratorFactory::generate(VolunteerAccountIdsData::class);
    $response = $this->service->removeShiftVolunteers('456', '789', $volunteers);

    expect($response)
        ->toBeInstanceOf(IdResultData::class);
});
