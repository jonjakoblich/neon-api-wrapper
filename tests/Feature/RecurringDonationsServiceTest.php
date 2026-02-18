<?php

use GuzzleHttp\Client;
use GuzzleHttp\Handler\MockHandler;
use GuzzleHttp\HandlerStack;
use GuzzleHttp\Psr7\Response;
use GuzzleHttp\Psr7\Utils;
use TwoJays\NeonApiWrapper\DataObjects\AccountIdAndRefIdResultData;
use TwoJays\NeonApiWrapper\DataObjects\AccountIdResultData;
use TwoJays\NeonApiWrapper\DataObjects\EmptyData;
use TwoJays\NeonApiWrapper\DataObjects\RecurringDonationData;
use TwoJays\NeonApiWrapper\DataObjects\RecurringDonationsResponseData;
use TwoJays\NeonApiWrapper\Factories\DataGeneratorFactory;
use TwoJays\NeonApiWrapper\Services\RecurringDonations\RecurringDonationsService;

uses()->group('services', 'recurringDonations');

beforeEach(function () {
    $this->mockHandler = new MockHandler([]);

    $client = new Client(['handler' => HandlerStack::create($this->mockHandler)]);

    $this->service = new RecurringDonationsService($client);
});

it('lists recurring donations', function () {
    $responseContent = DataGeneratorFactory::generate(RecurringDonationsResponseData::class)->toArray();

    $this->mockHandler
        ->append(new Response(200, [], Utils::streamFor(json_encode($responseContent))));

    $response = $this->service->listRecurringDonations();

    expect($response)
        ->toBeInstanceOf(RecurringDonationsResponseData::class);
});

it('creates a recurring donation', function () {
    $responseContent = DataGeneratorFactory::generate(AccountIdAndRefIdResultData::class)->toArray();

    $this->mockHandler
        ->append(new Response(200, [], Utils::streamFor(json_encode($responseContent))));

    $recurringDonation = DataGeneratorFactory::generate(RecurringDonationData::class);
    $response = $this->service->createRecurringDonation($recurringDonation);

    expect($response)
        ->toBeInstanceOf(AccountIdAndRefIdResultData::class);
});

it('gets a recurring donation', function () {
    $responseContent = DataGeneratorFactory::generate(RecurringDonationData::class)->toArray();

    $this->mockHandler
        ->append(new Response(200, [], Utils::streamFor(json_encode($responseContent))));

    $response = $this->service->getRecurringDonation('123');

    expect($response)
        ->toBeInstanceOf(RecurringDonationData::class);
});

it('updates a recurring donation', function () {
    $responseContent = DataGeneratorFactory::generate(AccountIdResultData::class)->toArray();

    $this->mockHandler
        ->append(new Response(200, [], Utils::streamFor(json_encode($responseContent))));

    $recurringDonation = DataGeneratorFactory::generate(RecurringDonationData::class);
    $response = $this->service->updateRecurringDonation('123', $recurringDonation);

    expect($response)
        ->toBeInstanceOf(AccountIdResultData::class);
});

it('deletes a recurring donation', function () {
    $this->mockHandler
        ->append(new Response(200, [], Utils::streamFor(json_encode(new class {}))));

    $response = $this->service->deleteRecurringDonation('123');

    expect($response)
        ->toBeInstanceOf(EmptyData::class);
});

it('patches a recurring donation', function () {
    $this->mockHandler
        ->append(new Response(200, [], Utils::streamFor(json_encode(new class {}))));

    $recurringDonation = DataGeneratorFactory::generate(RecurringDonationData::class);
    $response = $this->service->patchRecurringDonation('123', $recurringDonation);

    expect($response)
        ->toBeInstanceOf(EmptyData::class);
});
