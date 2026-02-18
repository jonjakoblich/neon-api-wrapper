<?php

use GuzzleHttp\Client;
use GuzzleHttp\Handler\MockHandler;
use GuzzleHttp\HandlerStack;
use GuzzleHttp\Psr7\Response;
use GuzzleHttp\Psr7\Utils;
use TwoJays\NeonApiWrapper\DataObjects\DonationData;
use TwoJays\NeonApiWrapper\DataObjects\DonationResponseData;
use TwoJays\NeonApiWrapper\DataObjects\EmptyData;
use TwoJays\NeonApiWrapper\DataObjects\OutputFieldsData;
use TwoJays\NeonApiWrapper\DataObjects\PaymentData;
use TwoJays\NeonApiWrapper\DataObjects\PaymentResponseData;
use TwoJays\NeonApiWrapper\DataObjects\SearchFieldsData;
use TwoJays\NeonApiWrapper\DataObjects\SearchRequestData;
use TwoJays\NeonApiWrapper\DataObjects\SearchResponseData;
use TwoJays\NeonApiWrapper\Factories\DataGeneratorFactory;
use TwoJays\NeonApiWrapper\Services\Donations\DonationsService;

uses()->group('services', 'donations');

beforeEach(function () {
    $this->mockHandler = new MockHandler([]);

    $client = new Client(['handler' => HandlerStack::create($this->mockHandler)]);

    $this->service = new DonationsService($client);
});

it('creates a donation', function () {
    $responseContent = DataGeneratorFactory::generate(DonationResponseData::class)->toArray();

    $this->mockHandler
        ->append(new Response(200, [], Utils::streamFor(json_encode($responseContent))));

    $donation = DataGeneratorFactory::generate(DonationData::class);
    $response = $this->service->createDonation($donation);

    expect($response)
        ->toBeInstanceOf(DonationResponseData::class);
});

it('gets a donation', function () {
    $responseContent = DataGeneratorFactory::generate(DonationData::class)->toArray();

    $this->mockHandler
        ->append(new Response(200, [], Utils::streamFor(json_encode($responseContent))));

    $response = $this->service->getDonation('123');

    expect($response)
        ->toBeInstanceOf(DonationData::class);
});

it('updates a donation', function () {
    $responseContent = DataGeneratorFactory::generate(DonationResponseData::class)->toArray();

    $this->mockHandler
        ->append(new Response(200, [], Utils::streamFor(json_encode($responseContent))));

    $donation = DataGeneratorFactory::generate(DonationData::class);
    $response = $this->service->updateDonation('123', $donation);

    expect($response)
        ->toBeInstanceOf(DonationResponseData::class);
});

it('deletes a donation', function () {
    $this->mockHandler
        ->append(new Response(200, [], Utils::streamFor(json_encode(new class {}))));

    $response = $this->service->deleteDonation('123');

    expect($response)
        ->toBeInstanceOf(EmptyData::class);
});

it('patches a donation', function () {
    $responseContent = DataGeneratorFactory::generate(DonationResponseData::class)->toArray();

    $this->mockHandler
        ->append(new Response(200, [], Utils::streamFor(json_encode($responseContent))));

    $donation = DataGeneratorFactory::generate(DonationData::class);
    $response = $this->service->patchDonation('123', $donation);

    expect($response)
        ->toBeInstanceOf(DonationResponseData::class);
});

it('searches donations', function () {
    $responseContent = DataGeneratorFactory::generate(SearchResponseData::class)->toArray();

    $this->mockHandler
        ->append(new Response(200, [], Utils::streamFor(json_encode($responseContent))));

    $searchRequest = DataGeneratorFactory::generate(SearchRequestData::class);
    $response = $this->service->searchDonations($searchRequest);

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

it('adds a payment to a donation', function () {
    $responseContent = DataGeneratorFactory::generate(PaymentResponseData::class)->toArray();

    $this->mockHandler
        ->append(new Response(200, [], Utils::streamFor(json_encode($responseContent))));

    $payment = DataGeneratorFactory::generate(PaymentData::class);
    $response = $this->service->addPayment('123', $payment);

    expect($response)
        ->toBeInstanceOf(PaymentResponseData::class);
});
