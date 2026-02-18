<?php

use GuzzleHttp\Client;
use GuzzleHttp\Handler\MockHandler;
use GuzzleHttp\HandlerStack;
use GuzzleHttp\Psr7\Response;
use GuzzleHttp\Psr7\Utils;
use TwoJays\NeonApiWrapper\DataObjects\EmptyData;
use TwoJays\NeonApiWrapper\DataObjects\IdResultData;
use TwoJays\NeonApiWrapper\DataObjects\UserGroupData;
use TwoJays\NeonApiWrapper\DataObjects\UserGroupSearchResultData;
use TwoJays\NeonApiWrapper\DataObjects\VolunteerAccountIdsData;
use TwoJays\NeonApiWrapper\DataObjects\VolunteerSearchResultData;
use TwoJays\NeonApiWrapper\Factories\DataGeneratorFactory;
use TwoJays\NeonApiWrapper\Services\Groups\GroupsService;

uses()->group('services', 'groups');

beforeEach(function () {
    $this->mockHandler = new MockHandler([]);

    $client = new Client(['handler' => HandlerStack::create($this->mockHandler)]);

    $this->service = new GroupsService($client);
});

it('lists groups', function () {
    $responseContent = DataGeneratorFactory::generate(UserGroupSearchResultData::class)->toArray();

    $this->mockHandler
        ->append(new Response(200, [], Utils::streamFor(json_encode($responseContent))));

    $response = $this->service->listGroups();

    expect($response)
        ->toBeInstanceOf(UserGroupSearchResultData::class);
});

it('creates a group', function () {
    $responseContent = DataGeneratorFactory::generate(IdResultData::class)->toArray();

    $this->mockHandler
        ->append(new Response(200, [], Utils::streamFor(json_encode($responseContent))));

    $group = DataGeneratorFactory::generate(UserGroupData::class);
    $response = $this->service->createGroup($group);

    expect($response)
        ->toBeInstanceOf(IdResultData::class);
});

it('gets a group', function () {
    $responseContent = DataGeneratorFactory::generate(UserGroupData::class)->toArray();

    $this->mockHandler
        ->append(new Response(200, [], Utils::streamFor(json_encode($responseContent))));

    $response = $this->service->getGroup('123');

    expect($response)
        ->toBeInstanceOf(UserGroupData::class);
});

it('updates a group', function () {
    $responseContent = DataGeneratorFactory::generate(IdResultData::class)->toArray();

    $this->mockHandler
        ->append(new Response(200, [], Utils::streamFor(json_encode($responseContent))));

    $group = DataGeneratorFactory::generate(UserGroupData::class);
    $response = $this->service->updateGroup('123', $group);

    expect($response)
        ->toBeInstanceOf(IdResultData::class);
});

it('deletes a group', function () {
    $this->mockHandler
        ->append(new Response(200, [], Utils::streamFor(json_encode(new class {}))));

    $response = $this->service->deleteGroup('123');

    expect($response)
        ->toBeInstanceOf(EmptyData::class);
});

it('lists group volunteers', function () {
    $responseContent = DataGeneratorFactory::generate(VolunteerSearchResultData::class)->toArray();

    $this->mockHandler
        ->append(new Response(200, [], Utils::streamFor(json_encode($responseContent))));

    $response = $this->service->listGroupVolunteers('123');

    expect($response)
        ->toBeInstanceOf(VolunteerSearchResultData::class);
});

it('adds volunteers to a group', function () {
    $responseContent = DataGeneratorFactory::generate(IdResultData::class)->toArray();

    $this->mockHandler
        ->append(new Response(200, [], Utils::streamFor(json_encode($responseContent))));

    $volunteers = DataGeneratorFactory::generate(VolunteerAccountIdsData::class);
    $response = $this->service->addGroupVolunteers('123', $volunteers);

    expect($response)
        ->toBeInstanceOf(IdResultData::class);
});

it('removes volunteers from a group', function () {
    $responseContent = DataGeneratorFactory::generate(IdResultData::class)->toArray();

    $this->mockHandler
        ->append(new Response(200, [], Utils::streamFor(json_encode($responseContent))));

    $volunteers = DataGeneratorFactory::generate(VolunteerAccountIdsData::class);
    $response = $this->service->removeGroupVolunteers('123', $volunteers);

    expect($response)
        ->toBeInstanceOf(IdResultData::class);
});
