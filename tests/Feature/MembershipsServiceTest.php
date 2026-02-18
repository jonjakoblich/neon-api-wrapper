<?php

use GuzzleHttp\Client;
use GuzzleHttp\Handler\MockHandler;
use GuzzleHttp\HandlerStack;
use GuzzleHttp\Psr7\Response;
use GuzzleHttp\Psr7\Utils;
use TwoJays\NeonApiWrapper\DataObjects\EmptyData;
use TwoJays\NeonApiWrapper\DataObjects\MembershipAutoRenewalData;
use TwoJays\NeonApiWrapper\DataObjects\MembershipCalculateDatesResultData;
use TwoJays\NeonApiWrapper\DataObjects\MembershipCalculateResultData;
use TwoJays\NeonApiWrapper\DataObjects\MembershipData;
use TwoJays\NeonApiWrapper\DataObjects\MembershipLevelsResponseData;
use TwoJays\NeonApiWrapper\DataObjects\MembershipResponseData;
use TwoJays\NeonApiWrapper\DataObjects\MembershipTermsResponseData;
use TwoJays\NeonApiWrapper\DataObjects\PaymentData;
use TwoJays\NeonApiWrapper\DataObjects\PaymentResponseData;
use TwoJays\NeonApiWrapper\DataObjects\ResponseEntityData;
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
    $responseContent = DataGeneratorFactory::generate(MembershipData::class)->toArray();

    $this->mockHandler 
        ->append(new Response(200, [], Utils::streamFor(json_encode($responseContent))));

    $response = $this->service->getMembership('123');

    expect($response)
        ->toBeInstanceOf(MembershipData::class);
});

it('creates a membership', function () {
    $responseContent = DataGeneratorFactory::generate(MembershipResponseData::class)->toArray();

    $this->mockHandler 
        ->append(new Response(200, [], Utils::streamFor(json_encode($responseContent))));

    $membership = DataGeneratorFactory::generate(MembershipData::class);
    $response = $this->service->createMembership($membership);

    expect($response)
        ->toBeInstanceOf(MembershipResponseData::class);
});

it('deletes a membership', function () {
    $this->mockHandler 
        ->append(new Response(200, [], Utils::streamFor(json_encode(new class {}))));

    $membership = DataGeneratorFactory::generate(MembershipData::class);
    $response = $this->service->deleteMembership($membership->accountId);

    expect($response)
        ->toBeInstanceOf(EmptyData::class);
});

it('patches a membership', function () {
    $responseContent = DataGeneratorFactory::generate(MembershipResponseData::class)->toArray();

    $this->mockHandler
        ->append(new Response(200, [], Utils::streamFor(json_encode($responseContent))));

    $response = $this->service->patchMembership('101', $this->membership);

    expect($response)
        ->toBeInstanceOf(MembershipResponseData::class);
});

it('gets a membership auto renewal', function () {
    $responseContent = DataGeneratorFactory::generate(MembershipAutoRenewalData::class)->toArray();
    
    $this->mockHandler
        ->append(new Response(200, [], Utils::streamFor(json_encode($responseContent))));

    $response = $this->service->getAutoRenewal('100');

    expect($response)
        ->toBeInstanceOf(MembershipAutoRenewalData::class);
});

it('edits a membership auto renewal', function () {
    $responseContent = DataGeneratorFactory::generate(ResponseEntityData::class)->toArray();

    $this->mockHandler
        ->append(new Response(200, [], Utils::streamFor(json_encode($responseContent))));

    $data = DataGeneratorFactory::generate(MembershipAutoRenewalData::class);
    $response = $this->service->editAutoRenewal('101', $data);

    expect($response)
        ->toBeInstanceOf(ResponseEntityData::class);
});

it('renews a membership', function () {
    $responseContent = DataGeneratorFactory::generate(MembershipResponseData::class)->toArray();

    $this->mockHandler
        ->append(new Response(200, [], Utils::streamFor(json_encode($responseContent))));

    $response = $this->service->renewMembership('101', $this->membership);

    expect($response)
        ->toBeInstanceOf(MembershipResponseData::class);
});

it('updates a membership', function () {
    $responseContent = DataGeneratorFactory::generate(MembershipResponseData::class)->toArray();

    $this->mockHandler
        ->append(new Response(200, [], Utils::streamFor(json_encode($responseContent))));

    $response = $this->service->updateMembership('101', $this->membership);

    expect($response)
        ->toBeInstanceOf(MembershipResponseData::class);
});

it('gets membership terms', function () {
    $responseContent = DataGeneratorFactory::generate(MembershipTermsResponseData::class)->toArray();

    $this->mockHandler
        ->append(new Response(200, [], Utils::streamFor(json_encode($responseContent))));

    $response = $this->service->getTerms(levelId: '1');

    expect($response)
        ->toBeInstanceOf(MembershipTermsResponseData::class);
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
    $responseContent = DataGeneratorFactory::generate(MembershipCalculateResultData::class)->toArray();

    $this->mockHandler
        ->append(new Response(200, [], Utils::streamFor(json_encode($responseContent))));

    $response = $this->service->calculateFee($this->membership);

    expect($response)
        ->toBeInstanceOf(MembershipCalculateResultData::class);
});

it('calculates the membership term start and end dates', function () {
    $responseContent = DataGeneratorFactory::generate(MembershipCalculateDatesResultData::class)->toArray();

    $this->mockHandler
        ->append(new Response(200, [], Utils::streamFor(json_encode($responseContent))));

    $response = $this->service->calculateDates($this->membership);

    expect($response)
        ->toBeInstanceOf(MembershipCalculateDatesResultData::class);
});

it('adds a payment for a membership', function () {
    $responseContent = DataGeneratorFactory::generate(PaymentResponseData::class)->toArray();

    $this->mockHandler
        ->append(new Response(200, [], Utils::streamFor(json_encode($responseContent))));

    $payment = DataGeneratorFactory::generate(PaymentData::class);
    $response = $this->service->addPayment($this->membership->id,$payment);

    expect($response)
        ->toBeInstanceOf(PaymentResponseData::class);
});

it('lists sub members of a membership', function () {
    $data = [DataGeneratorFactory::generate(SubMembershipData::class)];
    $responseContent = $data;

    $this->mockHandler
        ->append(new Response(200, [], Utils::streamFor(json_encode($responseContent))));

    $response = $this->service->getSubMembers('101');

    expect($response)
        ->toBeArray()
        ->each->toBeInstanceOf(SubMembershipData::class);
});
