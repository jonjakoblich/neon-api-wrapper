<?php

use GuzzleHttp\Client;
use GuzzleHttp\Handler\MockHandler;
use GuzzleHttp\HandlerStack;
use GuzzleHttp\Psr7\Response;
use GuzzleHttp\Psr7\Utils;
use TwoJays\NeonApiWrapper\DataObjects\EmptyData;
use TwoJays\NeonApiWrapper\DataObjects\EventAttendeesData;
use TwoJays\NeonApiWrapper\DataObjects\EventData;
use TwoJays\NeonApiWrapper\DataObjects\EventSearchResultData;
use TwoJays\NeonApiWrapper\DataObjects\EventTicketData;
use TwoJays\NeonApiWrapper\DataObjects\IdNamePairData;
use TwoJays\NeonApiWrapper\DataObjects\IdResultData;
use TwoJays\NeonApiWrapper\DataObjects\OutputFieldsData;
use TwoJays\NeonApiWrapper\DataObjects\SearchFieldsData;
use TwoJays\NeonApiWrapper\DataObjects\SearchRequestData;
use TwoJays\NeonApiWrapper\DataObjects\SearchResponseData;
use TwoJays\NeonApiWrapper\Factories\DataGeneratorFactory;
use TwoJays\NeonApiWrapper\Services\Events\EventsService;

uses()->group('services', 'events');

beforeEach(function () {
    $this->mockHandler = new MockHandler([]);

    $client = new Client(['handler' => HandlerStack::create($this->mockHandler)]);

    $this->service = new EventsService($client);
});

it('lists events', function () {
    $responseContent = DataGeneratorFactory::generate(EventSearchResultData::class)->toArray();

    $this->mockHandler
        ->append(new Response(200, [], Utils::streamFor(json_encode($responseContent))));

    $response = $this->service->listEvents();

    expect($response)
        ->toBeInstanceOf(EventSearchResultData::class);
});

it('creates an event', function () {
    $responseContent = DataGeneratorFactory::generate(IdResultData::class)->toArray();

    $this->mockHandler
        ->append(new Response(200, [], Utils::streamFor(json_encode($responseContent))));

    $event = DataGeneratorFactory::generate(EventData::class);
    $response = $this->service->createEvent($event);

    expect($response)
        ->toBeInstanceOf(IdResultData::class);
});

it('gets event categories', function () {
    $responseContent = [
        DataGeneratorFactory::generate(IdNamePairData::class)->toArray(),
        DataGeneratorFactory::generate(IdNamePairData::class)->toArray(),
    ];

    $this->mockHandler
        ->append(new Response(200, [], Utils::streamFor(json_encode($responseContent))));

    $response = $this->service->getCategories();

    expect($response)
        ->toBeArray();
});

it('searches events', function () {
    $responseContent = DataGeneratorFactory::generate(SearchResponseData::class)->toArray();

    $this->mockHandler
        ->append(new Response(200, [], Utils::streamFor(json_encode($responseContent))));

    $searchRequest = DataGeneratorFactory::generate(SearchRequestData::class);
    $response = $this->service->searchEvents($searchRequest);

    expect($response)
        ->toBeInstanceOf(SearchResponseData::class);
});

it('gets event search output fields', function () {
    $responseContent = DataGeneratorFactory::generate(OutputFieldsData::class)->toArray();

    $this->mockHandler
        ->append(new Response(200, [], Utils::streamFor(json_encode($responseContent))));

    $response = $this->service->getSearchOutputFields();

    expect($response)
        ->toBeInstanceOf(OutputFieldsData::class);
});

it('gets event search fields', function () {
    $responseContent = DataGeneratorFactory::generate(SearchFieldsData::class)->toArray();

    $this->mockHandler
        ->append(new Response(200, [], Utils::streamFor(json_encode($responseContent))));

    $response = $this->service->getSearchFields();

    expect($response)
        ->toBeInstanceOf(SearchFieldsData::class);
});

it('gets an event', function () {
    $responseContent = DataGeneratorFactory::generate(EventData::class)->toArray();

    $this->mockHandler
        ->append(new Response(200, [], Utils::streamFor(json_encode($responseContent))));

    $response = $this->service->getEvent('123');

    expect($response)
        ->toBeInstanceOf(EventData::class);
});

it('updates an event', function () {
    $responseContent = DataGeneratorFactory::generate(IdResultData::class)->toArray();

    $this->mockHandler
        ->append(new Response(200, [], Utils::streamFor(json_encode($responseContent))));

    $event = DataGeneratorFactory::generate(EventData::class);
    $response = $this->service->updateEvent('123', $event);

    expect($response)
        ->toBeInstanceOf(IdResultData::class);
});

it('deletes an event', function () {
    $this->mockHandler
        ->append(new Response(200, [], Utils::streamFor(json_encode(new class {}))));

    $response = $this->service->deleteEvent('123');

    expect($response)
        ->toBeInstanceOf(EmptyData::class);
});

it('patches an event', function () {
    $responseContent = DataGeneratorFactory::generate(IdResultData::class)->toArray();

    $this->mockHandler
        ->append(new Response(200, [], Utils::streamFor(json_encode($responseContent))));

    $event = DataGeneratorFactory::generate(EventData::class);
    $response = $this->service->patchEvent('123', $event);

    expect($response)
        ->toBeInstanceOf(IdResultData::class);
});

it('gets event attendees', function () {
    $responseContent = DataGeneratorFactory::generate(EventAttendeesData::class)->toArray();

    $this->mockHandler
        ->append(new Response(200, [], Utils::streamFor(json_encode($responseContent))));

    $response = $this->service->getEventAttendees('123');

    expect($response)
        ->toBeInstanceOf(EventAttendeesData::class);
});

it('lists event tickets', function () {
    $responseContent = [
        DataGeneratorFactory::generate(EventTicketData::class)->toArray(),
        DataGeneratorFactory::generate(EventTicketData::class)->toArray(),
    ];

    $this->mockHandler
        ->append(new Response(200, [], Utils::streamFor(json_encode($responseContent))));

    $response = $this->service->listEventTickets('123');

    expect($response)
        ->toBeArray();
});

it('creates an event ticket', function () {
    $this->mockHandler
        ->append(new Response(200, [], Utils::streamFor(json_encode(new class {}))));

    $ticket = DataGeneratorFactory::generate(EventTicketData::class);
    $response = $this->service->createEventTicket('123', $ticket);

    expect($response)
        ->toBeInstanceOf(EmptyData::class);
});

it('gets an event ticket', function () {
    $responseContent = DataGeneratorFactory::generate(EventTicketData::class)->toArray();

    $this->mockHandler
        ->append(new Response(200, [], Utils::streamFor(json_encode($responseContent))));

    $response = $this->service->getEventTicket('123', '456');

    expect($response)
        ->toBeInstanceOf(EventTicketData::class);
});

it('updates an event ticket', function () {
    $this->mockHandler
        ->append(new Response(200, [], Utils::streamFor(json_encode(new class {}))));

    $ticket = DataGeneratorFactory::generate(EventTicketData::class);
    $response = $this->service->updateEventTicket('123', '456', $ticket);

    expect($response)
        ->toBeInstanceOf(EmptyData::class);
});

it('deletes an event ticket', function () {
    $this->mockHandler
        ->append(new Response(200, [], Utils::streamFor(json_encode(new class {}))));

    $response = $this->service->deleteEventTicket('123', '456');

    expect($response)
        ->toBeInstanceOf(EmptyData::class);
});

it('patches an event ticket', function () {
    $this->mockHandler
        ->append(new Response(200, [], Utils::streamFor(json_encode(new class {}))));

    $ticket = DataGeneratorFactory::generate(EventTicketData::class);
    $response = $this->service->patchEventTicket('123', '456', $ticket);

    expect($response)
        ->toBeInstanceOf(EmptyData::class);
});
