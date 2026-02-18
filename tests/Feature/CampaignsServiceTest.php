<?php

use GuzzleHttp\Client;
use GuzzleHttp\Handler\MockHandler;
use GuzzleHttp\HandlerStack;
use GuzzleHttp\Psr7\Response;
use GuzzleHttp\Psr7\Utils;
use TwoJays\NeonApiWrapper\DataObjects\CampaignData;
use TwoJays\NeonApiWrapper\DataObjects\CampaignFundraiserData;
use TwoJays\NeonApiWrapper\DataObjects\EmptyData;
use TwoJays\NeonApiWrapper\DataObjects\IdCodeNameTriple2Data;
use TwoJays\NeonApiWrapper\DataObjects\IdResultData;
use TwoJays\NeonApiWrapper\Factories\DataGeneratorFactory;
use TwoJays\NeonApiWrapper\Services\Campaigns\CampaignsService;

uses()->group('services', 'campaigns');

beforeEach(function () {
    $this->mockHandler = new MockHandler([]);

    $client = new Client(['handler' => HandlerStack::create($this->mockHandler)]);

    $this->service = new CampaignsService($client);
});

it('lists campaigns', function () {
    $responseContent = [
        DataGeneratorFactory::generate(IdCodeNameTriple2Data::class)->toArray(),
        DataGeneratorFactory::generate(IdCodeNameTriple2Data::class)->toArray(),
    ];

    $this->mockHandler
        ->append(new Response(200, [], Utils::streamFor(json_encode($responseContent))));

    $response = $this->service->listCampaigns();

    expect($response)
        ->toBeArray();
});

it('creates a campaign', function () {
    $responseContent = DataGeneratorFactory::generate(IdResultData::class)->toArray();

    $this->mockHandler
        ->append(new Response(200, [], Utils::streamFor(json_encode($responseContent))));

    $campaign = DataGeneratorFactory::generate(CampaignData::class);
    $response = $this->service->createCampaign($campaign);

    expect($response)
        ->toBeInstanceOf(IdResultData::class);
});

it('gets a campaign', function () {
    $responseContent = DataGeneratorFactory::generate(CampaignData::class)->toArray();

    $this->mockHandler
        ->append(new Response(200, [], Utils::streamFor(json_encode($responseContent))));

    $response = $this->service->getCampaign('123');

    expect($response)
        ->toBeInstanceOf(CampaignData::class);
});

it('updates a campaign', function () {
    $this->mockHandler
        ->append(new Response(200, [], Utils::streamFor(json_encode(new class {}))));

    $campaign = DataGeneratorFactory::generate(CampaignData::class);
    $response = $this->service->updateCampaign('123', $campaign);

    expect($response)
        ->toBeInstanceOf(EmptyData::class);
});

it('deletes a campaign', function () {
    $this->mockHandler
        ->append(new Response(200, [], Utils::streamFor(json_encode(new class {}))));

    $response = $this->service->deleteCampaign('123');

    expect($response)
        ->toBeInstanceOf(EmptyData::class);
});

it('patches a campaign', function () {
    $this->mockHandler
        ->append(new Response(200, [], Utils::streamFor(json_encode(new class {}))));

    $campaign = DataGeneratorFactory::generate(CampaignData::class);
    $response = $this->service->patchCampaign('123', $campaign);

    expect($response)
        ->toBeInstanceOf(EmptyData::class);
});

it('gets p2p fundraisers', function () {
    $this->mockHandler
        ->append(new Response(200, [], Utils::streamFor(json_encode(new class {}))));

    $response = $this->service->getP2PFundraisers('123');

    expect($response)
        ->toBeInstanceOf(EmptyData::class);
});

it('adds a fundraiser to a campaign', function () {
    $this->mockHandler
        ->append(new Response(200, [], Utils::streamFor(json_encode(new class {}))));

    $fundraiser = DataGeneratorFactory::generate(CampaignFundraiserData::class);
    $response = $this->service->addFundraiser('123', $fundraiser);

    expect($response)
        ->toBeInstanceOf(EmptyData::class);
});
