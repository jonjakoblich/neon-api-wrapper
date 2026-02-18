<?php

use GuzzleHttp\Client;
use GuzzleHttp\Handler\MockHandler;
use GuzzleHttp\HandlerStack;
use GuzzleHttp\Psr7\Response;
use GuzzleHttp\Psr7\Utils;
use TwoJays\NeonApiWrapper\DataObjects\CatalogData;
use TwoJays\NeonApiWrapper\DataObjects\CategoryData;
use TwoJays\NeonApiWrapper\DataObjects\ProductData;
use TwoJays\NeonApiWrapper\DataObjects\ProductSearchResponseData;
use TwoJays\NeonApiWrapper\Factories\DataGeneratorFactory;
use TwoJays\NeonApiWrapper\Services\Store\StoreService;

uses()->group('services', 'store');

beforeEach(function () {
    $this->mockHandler = new MockHandler([]);

    $client = new Client(['handler' => HandlerStack::create($this->mockHandler)]);

    $this->service = new StoreService($client);
});

it('gets catalogs', function () {
    $responseContent = [
        DataGeneratorFactory::generate(CatalogData::class)->toArray(),
        DataGeneratorFactory::generate(CatalogData::class)->toArray(),
    ];

    $this->mockHandler
        ->append(new Response(200, [], Utils::streamFor(json_encode($responseContent))));

    $response = $this->service->getCatalogs();

    expect($response)
        ->toBeArray();
});

it('gets categories', function () {
    $responseContent = [
        DataGeneratorFactory::generate(CategoryData::class)->toArray(),
        DataGeneratorFactory::generate(CategoryData::class)->toArray(),
    ];

    $this->mockHandler
        ->append(new Response(200, [], Utils::streamFor(json_encode($responseContent))));

    $response = $this->service->getCategories();

    expect($response)
        ->toBeArray();
});

it('gets products', function () {
    $responseContent = DataGeneratorFactory::generate(ProductSearchResponseData::class)->toArray();

    $this->mockHandler
        ->append(new Response(200, [], Utils::streamFor(json_encode($responseContent))));

    $response = $this->service->getProducts();

    expect($response)
        ->toBeInstanceOf(ProductSearchResponseData::class);
});

it('gets a product', function () {
    $responseContent = DataGeneratorFactory::generate(ProductData::class)->toArray();

    $this->mockHandler
        ->append(new Response(200, [], Utils::streamFor(json_encode($responseContent))));

    $response = $this->service->getProduct(123);

    expect($response)
        ->toBeInstanceOf(ProductData::class);
});
