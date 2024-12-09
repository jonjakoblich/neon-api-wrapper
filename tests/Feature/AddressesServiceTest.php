<?php

use GuzzleHttp\Client;
use GuzzleHttp\Handler\MockHandler;
use GuzzleHttp\HandlerStack;
use GuzzleHttp\Psr7\Response;
use GuzzleHttp\Psr7\Utils;
use TwoJays\NeonApiWrapper\DataObjects\AddressData;
use TwoJays\NeonApiWrapper\Exceptions\ForbiddenException;
use TwoJays\NeonApiWrapper\Exceptions\NotFoundException;
use TwoJays\NeonApiWrapper\Exceptions\UnauthorizedException;
use TwoJays\NeonApiWrapper\Factories\DataGeneratorFactory;
use TwoJays\NeonApiWrapper\Services\Addresses\AddressesService;

uses()->group('services','addresses');

beforeEach(function(){
    $this->mockHandler = new MockHandler([]);

    $client = new Client(['handler' => HandlerStack::create($this->mockHandler)]);

    $this->service = new AddressesService($client);
});

it('gets an address by id', function () {
    $responseContent = DataGeneratorFactory::generate(AddressData::class)->toArray();

    $this->mockHandler
        ->append(new Response(200, [], Utils::streamFor(json_encode($responseContent))));

    $response = $this->service->getAddress('100');

    expect($response)
        ->toBeInstanceOf(AddressData::class);
});

it('creates a new address', function () {
    //expect()->
})->todo();

it('updates an existing address', function () {
    //expect()->
})->todo();

it('deletes an existing address', function () {
    //expect()->
})->todo();

// Add error handling
describe('handles error responses', function() {

    it('throws UnauthorizedException for code 401', function () {
        $this->mockHandler->append(new Response(401, [], Utils::streamFor(json_encode([]))));
    
        $this->service->getAddress('101');
    })->throws(UnauthorizedException::class, 'Unauthorized access to API');
    
    it('throws ForbiddenException for code 403', function () {
        $this->mockHandler->append(new Response(403, [], Utils::streamFor(json_encode([]))));
    
        $this->service->getAddress('101');
    })->throws(ForbiddenException::class, 'Forbidden');
    
    it('throws NotFoundException for code 404', function () {
        $this->mockHandler->append(new Response(404, [], Utils::streamFor(json_encode([]))));
    
        $this->service->getAddress('101');
    })->throws(NotFoundException::class, 'The requested URL could not be found');

});