<?php

use GuzzleHttp\Client;
use GuzzleHttp\Handler\MockHandler;
use GuzzleHttp\HandlerStack;
use GuzzleHttp\Psr7\Response;
use GuzzleHttp\Psr7\Utils;
use TwoJays\NeonApiWrapper\DataObjects\VolunteerSearchResultData;
use TwoJays\NeonApiWrapper\Factories\DataGeneratorFactory;
use TwoJays\NeonApiWrapper\Services\Volunteers\VolunteersService;

uses()->group('services', 'volunteers');

beforeEach(function () {
    $this->mockHandler = new MockHandler([]);

    $client = new Client(['handler' => HandlerStack::create($this->mockHandler)]);

    $this->service = new VolunteersService($client);
});

it('lists volunteers', function () {
    $responseContent = DataGeneratorFactory::generate(VolunteerSearchResultData::class)->toArray();

    $this->mockHandler
        ->append(new Response(200, [], Utils::streamFor(json_encode($responseContent))));

    $response = $this->service->listVolunteers();

    expect($response)
        ->toBeInstanceOf(VolunteerSearchResultData::class);
});
