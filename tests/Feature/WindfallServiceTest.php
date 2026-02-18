<?php

use GuzzleHttp\Client;
use GuzzleHttp\Handler\MockHandler;
use GuzzleHttp\HandlerStack;
use GuzzleHttp\Psr7\Response;
use GuzzleHttp\Psr7\Utils;
use TwoJays\NeonApiWrapper\DataObjects\AccountWindfallData;
use TwoJays\NeonApiWrapper\DataObjects\EmptyData;
use TwoJays\NeonApiWrapper\Factories\DataGeneratorFactory;
use TwoJays\NeonApiWrapper\Services\Windfall\WindfallService;

uses()->group('services', 'windfall');

beforeEach(function () {
    $this->mockHandler = new MockHandler([]);

    $client = new Client(['handler' => HandlerStack::create($this->mockHandler)]);

    $this->service = new WindfallService($client);
});

it('deletes all windfall', function () {
    $this->mockHandler
        ->append(new Response(200, [], Utils::streamFor(json_encode(new class {}))));

    $response = $this->service->deleteAllWindfall();

    expect($response)
        ->toBeInstanceOf(EmptyData::class);
});

it('gets account windfall', function () {
    $responseContent = DataGeneratorFactory::generate(AccountWindfallData::class)->toArray();

    $this->mockHandler
        ->append(new Response(200, [], Utils::streamFor(json_encode($responseContent))));

    $response = $this->service->getAccountWindfall('123');

    expect($response)
        ->toBeInstanceOf(AccountWindfallData::class);
});

it('adds account windfall', function () {
    $this->mockHandler
        ->append(new Response(200, [], Utils::streamFor(json_encode(new class {}))));

    $windfall = DataGeneratorFactory::generate(AccountWindfallData::class);
    $response = $this->service->addAccountWindfall('123', $windfall);

    expect($response)
        ->toBeInstanceOf(EmptyData::class);
});

it('deletes account windfall', function () {
    $this->mockHandler
        ->append(new Response(200, [], Utils::streamFor(json_encode(new class {}))));

    $response = $this->service->deleteAccountWindfall('123');

    expect($response)
        ->toBeInstanceOf(EmptyData::class);
});
