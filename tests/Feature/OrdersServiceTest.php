<?php

use GuzzleHttp\Client;
use GuzzleHttp\Handler\MockHandler;
use GuzzleHttp\HandlerStack;
use GuzzleHttp\Psr7\Response;
use GuzzleHttp\Psr7\Utils;
use TwoJays\NeonApiWrapper\DataObjects\EmptyData;
use TwoJays\NeonApiWrapper\DataObjects\OrderCalculationResultData;
use TwoJays\NeonApiWrapper\DataObjects\OrderData;
use TwoJays\NeonApiWrapper\DataObjects\OrderResponseData;
use TwoJays\NeonApiWrapper\DataObjects\OutputFieldsData;
use TwoJays\NeonApiWrapper\DataObjects\PaymentData;
use TwoJays\NeonApiWrapper\DataObjects\PaymentResponseData;
use TwoJays\NeonApiWrapper\DataObjects\SearchFieldsData;
use TwoJays\NeonApiWrapper\DataObjects\SearchRequestData;
use TwoJays\NeonApiWrapper\DataObjects\SearchResponseData;
use TwoJays\NeonApiWrapper\DataObjects\ShippingMethodRequestData;
use TwoJays\NeonApiWrapper\DataObjects\ShippingMethodResponseData;
use TwoJays\NeonApiWrapper\Factories\DataGeneratorFactory;
use TwoJays\NeonApiWrapper\Services\Orders\OrdersService;

uses()->group('services', 'orders');

beforeEach(function () {
    $this->mockHandler = new MockHandler([]);

    $client = new Client(['handler' => HandlerStack::create($this->mockHandler)]);

    $this->service = new OrdersService($client);
});

it('creates an order', function () {
    $responseContent = DataGeneratorFactory::generate(OrderResponseData::class)->toArray();

    $this->mockHandler
        ->append(new Response(200, [], Utils::streamFor(json_encode($responseContent))));

    $order = DataGeneratorFactory::generate(OrderData::class);
    $response = $this->service->createOrder($order);

    expect($response)
        ->toBeInstanceOf(OrderResponseData::class);
});

it('calculates an order', function () {
    $responseContent = DataGeneratorFactory::generate(OrderCalculationResultData::class)->toArray();

    $this->mockHandler
        ->append(new Response(200, [], Utils::streamFor(json_encode($responseContent))));

    $order = DataGeneratorFactory::generate(OrderData::class);
    $response = $this->service->calculateOrder($order);

    expect($response)
        ->toBeInstanceOf(OrderCalculationResultData::class);
});

it('searches orders', function () {
    $responseContent = DataGeneratorFactory::generate(SearchResponseData::class)->toArray();

    $this->mockHandler
        ->append(new Response(200, [], Utils::streamFor(json_encode($responseContent))));

    $searchRequest = DataGeneratorFactory::generate(SearchRequestData::class);
    $response = $this->service->searchOrders($searchRequest);

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

it('gets shipping methods', function () {
    $responseContent = [
        DataGeneratorFactory::generate(ShippingMethodResponseData::class)->toArray(),
        DataGeneratorFactory::generate(ShippingMethodResponseData::class)->toArray(),
    ];

    $this->mockHandler
        ->append(new Response(200, [], Utils::streamFor(json_encode($responseContent))));

    $request = DataGeneratorFactory::generate(ShippingMethodRequestData::class);
    $response = $this->service->getShippingMethods($request);

    expect($response)
        ->toBeArray();
});

it('gets an order', function () {
    $responseContent = DataGeneratorFactory::generate(OrderData::class)->toArray();

    $this->mockHandler
        ->append(new Response(200, [], Utils::streamFor(json_encode($responseContent))));

    $response = $this->service->getOrder('123');

    expect($response)
        ->toBeInstanceOf(OrderData::class);
});

it('deletes an order', function () {
    $this->mockHandler
        ->append(new Response(200, [], Utils::streamFor(json_encode(new class {}))));

    $response = $this->service->deleteOrder('123');

    expect($response)
        ->toBeInstanceOf(EmptyData::class);
});

it('adds a payment to an order', function () {
    $responseContent = DataGeneratorFactory::generate(PaymentResponseData::class)->toArray();

    $this->mockHandler
        ->append(new Response(200, [], Utils::streamFor(json_encode($responseContent))));

    $payment = DataGeneratorFactory::generate(PaymentData::class);
    $response = $this->service->addPayment('123', $payment);

    expect($response)
        ->toBeInstanceOf(PaymentResponseData::class);
});
