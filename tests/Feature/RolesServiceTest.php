<?php

use GuzzleHttp\Client;
use GuzzleHttp\Handler\MockHandler;
use GuzzleHttp\HandlerStack;
use GuzzleHttp\Psr7\Response;
use GuzzleHttp\Psr7\Utils;
use TwoJays\NeonApiWrapper\DataObjects\EmptyData;
use TwoJays\NeonApiWrapper\DataObjects\IdResultData;
use TwoJays\NeonApiWrapper\DataObjects\VolunteerRoleData;
use TwoJays\NeonApiWrapper\DataObjects\VolunteerRoleSearchResultData;
use TwoJays\NeonApiWrapper\DataObjects\VolunteerSearchResultData;
use TwoJays\NeonApiWrapper\Factories\DataGeneratorFactory;
use TwoJays\NeonApiWrapper\Services\Roles\RolesService;

uses()->group('services', 'roles');

beforeEach(function () {
    $this->mockHandler = new MockHandler([]);

    $client = new Client(['handler' => HandlerStack::create($this->mockHandler)]);

    $this->service = new RolesService($client);
});

it('lists roles', function () {
    $responseContent = DataGeneratorFactory::generate(VolunteerRoleSearchResultData::class)->toArray();

    $this->mockHandler
        ->append(new Response(200, [], Utils::streamFor(json_encode($responseContent))));

    $response = $this->service->listRoles();

    expect($response)
        ->toBeInstanceOf(VolunteerRoleSearchResultData::class);
});

it('creates a role', function () {
    $responseContent = DataGeneratorFactory::generate(IdResultData::class)->toArray();

    $this->mockHandler
        ->append(new Response(200, [], Utils::streamFor(json_encode($responseContent))));

    $role = DataGeneratorFactory::generate(VolunteerRoleData::class);
    $response = $this->service->createRole($role);

    expect($response)
        ->toBeInstanceOf(IdResultData::class);
});

it('gets a role', function () {
    $responseContent = DataGeneratorFactory::generate(VolunteerRoleData::class)->toArray();

    $this->mockHandler
        ->append(new Response(200, [], Utils::streamFor(json_encode($responseContent))));

    $response = $this->service->getRole('123');

    expect($response)
        ->toBeInstanceOf(VolunteerRoleData::class);
});

it('updates a role', function () {
    $responseContent = DataGeneratorFactory::generate(IdResultData::class)->toArray();

    $this->mockHandler
        ->append(new Response(200, [], Utils::streamFor(json_encode($responseContent))));

    $role = DataGeneratorFactory::generate(VolunteerRoleData::class);
    $response = $this->service->updateRole('123', $role);

    expect($response)
        ->toBeInstanceOf(IdResultData::class);
});

it('deletes a role', function () {
    $this->mockHandler
        ->append(new Response(200, [], Utils::streamFor(json_encode(new class {}))));

    $response = $this->service->deleteRole('123');

    expect($response)
        ->toBeInstanceOf(EmptyData::class);
});

it('lists role volunteers', function () {
    $responseContent = DataGeneratorFactory::generate(VolunteerSearchResultData::class)->toArray();

    $this->mockHandler
        ->append(new Response(200, [], Utils::streamFor(json_encode($responseContent))));

    $response = $this->service->listRoleVolunteers('123');

    expect($response)
        ->toBeInstanceOf(VolunteerSearchResultData::class);
});
