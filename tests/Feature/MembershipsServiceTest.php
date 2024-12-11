<?php

use GuzzleHttp\Client;
use GuzzleHttp\Handler\MockHandler;
use GuzzleHttp\HandlerStack;
use GuzzleHttp\Psr7\Response;
use GuzzleHttp\Psr7\Utils;
use TwoJays\NeonApiWrapper\DataObjects\MembershipAutoRenewalData;
use TwoJays\NeonApiWrapper\DataObjects\MembershipData;
use TwoJays\NeonApiWrapper\DataObjects\MembershipLevelsResponseData;
use TwoJays\NeonApiWrapper\DataObjects\SubMembershipData;
use TwoJays\NeonApiWrapper\Enums\MembershipLevelStatusEnum;
use TwoJays\NeonApiWrapper\Factories\DataGeneratorFactory;
use TwoJays\NeonApiWrapper\Services\Memberships\MembershipsService;

uses()->group('services','memberships');

beforeEach(function(){
    $this->mockHandler = new MockHandler([]);

    $client = new Client(['handler' => HandlerStack::create($this->mockHandler)]);

    $this->service = new MembershipsService($client);

    $this->membership = DataGeneratorFactory::generate(MembershipData::class);
});

it('gets a specific membership', function () {
    //expect()->
})->todo();

it('creates a membership', function () {
    //expect()->
})->todo();

it('gets a membership auto renewal', function () {
    $responseContent = DataGeneratorFactory::generate(MembershipAutoRenewalData::class)->toArray();
    
    $this->mockHandler
        ->append(new Response(200, [], Utils::streamFor(json_encode($responseContent))));

    $response = $this->service->getMembershipAutoRenewal('100');

    expect($response)
        ->toBeInstanceOf(MembershipAutoRenewalData::class);
});

it('edits a membership auto renewal', function () {
    //expect()->
})->todo();

it('updates a membership', function () {
    //expect()->
})->todo();

it('gets membership terms', function () {
    //expect()->
});

it('gets a list of membership Levels', function () {
    $responseContent = DataGeneratorFactory::generate(MembershipLevelsResponseData::class)->toArray();

    $this->mockHandler
        ->append(new Response(200, [], Utils::streamFor(json_encode($responseContent))));

    $response = $this->service->getLevels(
        status: MembershipLevelStatusEnum::ACTIVE->value
    );

    expect($response)
        ->toBeInstanceOf(MembershipLevelsResponseData::class);
});

it('calculates the cost of a membership', function () {
    //expect()->
})->todo();

it('calculates the membership term start and end dates', function () {
    //expect()->
})->todo();

it('adds a payment for a membership', function () {
    //expect()->
})->todo();

it('lists sub members of a membership', function () {
    $responseContent = DataGeneratorFactory::generate(SubMembershipData::class)->toArray();

    $this->mockHandler
        ->append(new Response(200, [], Utils::streamFor(json_encode($responseContent))));

    $response = $this->service->getSubMembers('101');

    expect($response)
        ->toBeArray();
})->skip('Needs better implementation from the Neon One team.');
