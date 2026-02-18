<?php

use GuzzleHttp\Client;
use GuzzleHttp\Handler\MockHandler;
use GuzzleHttp\HandlerStack;
use GuzzleHttp\Psr7\Response;
use GuzzleHttp\Psr7\Utils;
use TwoJays\NeonApiWrapper\DataObjects\AccountIdAndRefIdResultData;
use TwoJays\NeonApiWrapper\DataObjects\EmptyData;
use TwoJays\NeonApiWrapper\DataObjects\ShippingAddressAddData;
use TwoJays\NeonApiWrapper\DataObjects\ShippingAddressData;
use TwoJays\NeonApiWrapper\Factories\DataGeneratorFactory;
use TwoJays\NeonApiWrapper\Services\ShippingAddresses\ShippingAddressesService;

uses()->group('services', 'shippingAddresses');

beforeEach(function () {
    $this->mockHandler = new MockHandler([]);

    $client = new Client(['handler' => HandlerStack::create($this->mockHandler)]);

    $this->service = new ShippingAddressesService($client);
});

it('creates a shipping address', function () {
    $responseContent = DataGeneratorFactory::generate(AccountIdAndRefIdResultData::class)->toArray();

    $this->mockHandler
        ->append(new Response(200, [], Utils::streamFor(json_encode($responseContent))));

    $shippingAddress = DataGeneratorFactory::generate(ShippingAddressAddData::class);
    $response = $this->service->createShippingAddress($shippingAddress);

    expect($response)
        ->toBeInstanceOf(AccountIdAndRefIdResultData::class);
});

it('gets a shipping address', function () {
    $responseContent = DataGeneratorFactory::generate(ShippingAddressData::class)->toArray();

    $this->mockHandler
        ->append(new Response(200, [], Utils::streamFor(json_encode($responseContent))));

    $response = $this->service->getShippingAddress('123');

    expect($response)
        ->toBeInstanceOf(ShippingAddressData::class);
});

it('updates a shipping address', function () {
    $this->mockHandler
        ->append(new Response(200, [], Utils::streamFor(json_encode(new class {}))));

    $shippingAddress = DataGeneratorFactory::generate(ShippingAddressData::class);
    $response = $this->service->updateShippingAddress('123', $shippingAddress);

    expect($response)
        ->toBeInstanceOf(EmptyData::class);
});

it('deletes a shipping address', function () {
    $this->mockHandler
        ->append(new Response(200, [], Utils::streamFor(json_encode(new class {}))));

    $response = $this->service->deleteShippingAddress('123');

    expect($response)
        ->toBeInstanceOf(EmptyData::class);
});

it('patches a shipping address', function () {
    $this->mockHandler
        ->append(new Response(200, [], Utils::streamFor(json_encode(new class {}))));

    $shippingAddress = DataGeneratorFactory::generate(ShippingAddressData::class);
    $response = $this->service->patchShippingAddress('123', $shippingAddress);

    expect($response)
        ->toBeInstanceOf(EmptyData::class);
});
