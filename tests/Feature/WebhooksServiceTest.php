<?php

use GuzzleHttp\Client;
use GuzzleHttp\Handler\MockHandler;
use GuzzleHttp\HandlerStack;
use GuzzleHttp\Psr7\Response;
use GuzzleHttp\Psr7\Utils;
use TwoJays\NeonApiWrapper\DataObjects\EmptyData;
use TwoJays\NeonApiWrapper\DataObjects\IdResultData;
use TwoJays\NeonApiWrapper\DataObjects\WebhookData;
use TwoJays\NeonApiWrapper\Factories\DataGeneratorFactory;
use TwoJays\NeonApiWrapper\Services\Webhooks\WebhooksService;

uses()->group('services', 'webhooks');

beforeEach(function () {
    $this->mockHandler = new MockHandler([]);

    $client = new Client(['handler' => HandlerStack::create($this->mockHandler)]);

    $this->service = new WebhooksService($client);
});

it('lists webhooks', function () {
    $responseContent = [
        DataGeneratorFactory::generate(WebhookData::class)->toArray(),
        DataGeneratorFactory::generate(WebhookData::class)->toArray(),
    ];

    $this->mockHandler
        ->append(new Response(200, [], Utils::streamFor(json_encode($responseContent))));

    $response = $this->service->listWebhooks();

    expect($response)
        ->toBeArray();
});

it('creates a webhook', function () {
    $responseContent = DataGeneratorFactory::generate(IdResultData::class)->toArray();

    $this->mockHandler
        ->append(new Response(200, [], Utils::streamFor(json_encode($responseContent))));

    $webhook = DataGeneratorFactory::generate(WebhookData::class);
    $response = $this->service->createWebhook($webhook);

    expect($response)
        ->toBeInstanceOf(IdResultData::class);
});

it('gets a webhook', function () {
    $responseContent = DataGeneratorFactory::generate(WebhookData::class)->toArray();

    $this->mockHandler
        ->append(new Response(200, [], Utils::streamFor(json_encode($responseContent))));

    $response = $this->service->getWebhook('123');

    expect($response)
        ->toBeInstanceOf(WebhookData::class);
});

it('updates a webhook', function () {
    $this->mockHandler
        ->append(new Response(200, [], Utils::streamFor(json_encode(new class {}))));

    $webhook = DataGeneratorFactory::generate(WebhookData::class);
    $response = $this->service->updateWebhook('123', $webhook);

    expect($response)
        ->toBeInstanceOf(EmptyData::class);
});

it('deletes a webhook', function () {
    $this->mockHandler
        ->append(new Response(200, [], Utils::streamFor(json_encode(new class {}))));

    $response = $this->service->deleteWebhook('123');

    expect($response)
        ->toBeInstanceOf(EmptyData::class);
});

it('patches a webhook', function () {
    $this->mockHandler
        ->append(new Response(200, [], Utils::streamFor(json_encode(new class {}))));

    $webhook = DataGeneratorFactory::generate(WebhookData::class);
    $response = $this->service->patchWebhook('123', $webhook);

    expect($response)
        ->toBeInstanceOf(EmptyData::class);
});
