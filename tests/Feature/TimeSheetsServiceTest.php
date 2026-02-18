<?php

use GuzzleHttp\Client;
use GuzzleHttp\Handler\MockHandler;
use GuzzleHttp\HandlerStack;
use GuzzleHttp\Psr7\Response;
use GuzzleHttp\Psr7\Utils;
use TwoJays\NeonApiWrapper\DataObjects\EmptyData;
use TwoJays\NeonApiWrapper\DataObjects\IdResultData;
use TwoJays\NeonApiWrapper\DataObjects\TimeSheetData;
use TwoJays\NeonApiWrapper\DataObjects\TimeSheetSearchResultData;
use TwoJays\NeonApiWrapper\Factories\DataGeneratorFactory;
use TwoJays\NeonApiWrapper\Services\TimeSheets\TimeSheetsService;

uses()->group('services', 'timeSheets');

beforeEach(function () {
    $this->mockHandler = new MockHandler([]);

    $client = new Client(['handler' => HandlerStack::create($this->mockHandler)]);

    $this->service = new TimeSheetsService($client);
});

it('lists time sheets', function () {
    $responseContent = DataGeneratorFactory::generate(TimeSheetSearchResultData::class)->toArray();

    $this->mockHandler
        ->append(new Response(200, [], Utils::streamFor(json_encode($responseContent))));

    $response = $this->service->listTimeSheets();

    expect($response)
        ->toBeInstanceOf(TimeSheetSearchResultData::class);
});

it('creates a time sheet', function () {
    $responseContent = DataGeneratorFactory::generate(IdResultData::class)->toArray();

    $this->mockHandler
        ->append(new Response(200, [], Utils::streamFor(json_encode($responseContent))));

    $timeSheet = DataGeneratorFactory::generate(TimeSheetData::class);
    $response = $this->service->createTimeSheet($timeSheet);

    expect($response)
        ->toBeInstanceOf(IdResultData::class);
});

it('gets a time sheet', function () {
    $responseContent = DataGeneratorFactory::generate(TimeSheetData::class)->toArray();

    $this->mockHandler
        ->append(new Response(200, [], Utils::streamFor(json_encode($responseContent))));

    $response = $this->service->getTimeSheet('123');

    expect($response)
        ->toBeInstanceOf(TimeSheetData::class);
});

it('updates a time sheet', function () {
    $responseContent = DataGeneratorFactory::generate(IdResultData::class)->toArray();

    $this->mockHandler
        ->append(new Response(200, [], Utils::streamFor(json_encode($responseContent))));

    $timeSheet = DataGeneratorFactory::generate(TimeSheetData::class);
    $response = $this->service->updateTimeSheet('123', $timeSheet);

    expect($response)
        ->toBeInstanceOf(IdResultData::class);
});

it('deletes a time sheet', function () {
    $this->mockHandler
        ->append(new Response(200, [], Utils::streamFor(json_encode(new class {}))));

    $response = $this->service->deleteTimeSheet('123');

    expect($response)
        ->toBeInstanceOf(EmptyData::class);
});

it('patches a time sheet', function () {
    $responseContent = DataGeneratorFactory::generate(IdResultData::class)->toArray();

    $this->mockHandler
        ->append(new Response(200, [], Utils::streamFor(json_encode($responseContent))));

    $timeSheet = DataGeneratorFactory::generate(TimeSheetData::class);
    $response = $this->service->patchTimeSheet('123', $timeSheet);

    expect($response)
        ->toBeInstanceOf(IdResultData::class);
});
