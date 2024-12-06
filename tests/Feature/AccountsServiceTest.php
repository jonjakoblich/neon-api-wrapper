<?php

use GuzzleHttp\Client;
use GuzzleHttp\Handler\MockHandler;
use GuzzleHttp\HandlerStack;
use GuzzleHttp\Psr7\Response;
use GuzzleHttp\Psr7\Utils;
use TwoJays\NeonApiWrapper\DataObjects\AccountData;
use TwoJays\NeonApiWrapper\DataObjects\AccountDonationSearchResultData;
use TwoJays\NeonApiWrapper\DataObjects\AccountPledgeSearchResultData;
use TwoJays\NeonApiWrapper\DataObjects\AccountSearchResultData;
use TwoJays\NeonApiWrapper\DataObjects\AccountSearchResultItemData;
use TwoJays\NeonApiWrapper\DataObjects\MembershipListResponseData;
use TwoJays\NeonApiWrapper\DataObjects\PaginationData;
use TwoJays\NeonApiWrapper\Enums\AccountSearchResultItemUserTypeEnum;
use TwoJays\NeonApiWrapper\Exceptions\ForbiddenException;
use TwoJays\NeonApiWrapper\Exceptions\NotFoundException;
use TwoJays\NeonApiWrapper\Exceptions\UnauthorizedException;
use TwoJays\NeonApiWrapper\Factories\DataGeneratorFactory;
use TwoJays\NeonApiWrapper\Services\Accounts\AccountsService;

uses()->group('services');

beforeEach(function(){
    $this->mockHandler = new MockHandler([]);

    $client = new Client(['handler' => HandlerStack::create($this->mockHandler)]);

    $this->service = new AccountsService($client);
});

it('can list accounts', function () {
    $responseContent = DataGeneratorFactory::generate(AccountSearchResultData::class)->toArray();

    $this->mockHandler
        ->append(new Response(200, [], Utils::streamFor(json_encode($responseContent))));

    $response = $this->service->listAccounts(
        userType: AccountSearchResultItemUserTypeEnum::INDIVIDUAL->value
    );

    expect($response)
        ->toBeInstanceOf(AccountSearchResultData::class);
    
    expect($response->accounts)
            ->toHaveLength(count($responseContent['accounts']))
            ->each(
                function($account) use($responseContent) {
                    $account->toBeInstanceOf(AccountSearchResultItemData::class);
                    $account->toArray()->toBeIn($responseContent['accounts']);
                }
            );
    
    expect($response->pagination)
        ->toBeInstanceOf(PaginationData::class)
        ->toMatchObject($responseContent['pagination']);
});


it('gets a single account', function () {
    $responseContent = DataGeneratorFactory::generate(AccountData::class)->toArray();

    $this->mockHandler
        ->append(
            new Response(200, [], Utils::streamFor(json_encode($responseContent)))
        );

    $response = $this->service->getAccount('100');

    // Assertions
    expect($response)
        ->toBeInstanceOf(AccountData::class)
        ->individualAccount->toArray()->toMatchArray($responseContent['individualAccount'])
        ->companyAccount->toArray()->toMatchArray($responseContent['companyAccount']);
});


it('gets memberships for a single account', function () {
    $responseContent = DataGeneratorFactory::generate(MembershipListResponseData::class)->toArray();

    $this->mockHandler
        ->append(
            new Response(200, [], Utils::streamFor(json_encode($responseContent)))
        );

    $response = $this->service->getAccountMemberships('100');

    // Assertions
    expect($response)
        ->toBeInstanceOf(MembershipListResponseData::class);
});


it('gets pledges for a single account', function () {
    $responseContent = DataGeneratorFactory::generate(AccountPledgeSearchResultData::class)->toArray();

    $this->mockHandler
        ->append(
            new Response(200, [], Utils::streamFor(json_encode($responseContent)))
        );

    $response = $this->service->getAccountPledges('100');

    // Assertions
    expect($response)
        ->toBeInstanceOf(AccountPledgeSearchResultData::class);
});


it('gets donations for a single account', function () {
    $responseContent = DataGeneratorFactory::generate(AccountDonationSearchResultData::class)->toArray();

    $this->mockHandler
        ->append(
            new Response(200, [], Utils::streamFor(json_encode($responseContent)))
        );

    $response = $this->service->getAccountDonations('100');

    // Assertions
    expect($response)
        ->toBeInstanceOf(AccountDonationSearchResultData::class);
});


describe('handles error responses', function() {

    it('throws UnauthorizedException for code 401', function () {
        $this->mockHandler->append(new Response(401, [], Utils::streamFor(json_encode([]))));
    
        $this->service->listAccounts(
            userType: AccountSearchResultItemUserTypeEnum::INDIVIDUAL->value
        );
    })->throws(UnauthorizedException::class, 'Unauthorized access to API');
    
    it('throws ForbiddenException for code 403', function () {
        $this->mockHandler->append(new Response(403, [], Utils::streamFor(json_encode([]))));
    
        $this->service->listAccounts(
            userType: AccountSearchResultItemUserTypeEnum::INDIVIDUAL->value
        );
    })->throws(ForbiddenException::class, 'Forbidden');
    
    it('throws NotFoundException for code 404', function () {
        $this->mockHandler->append(new Response(404, [], Utils::streamFor(json_encode([]))));
    
        $this->service->listAccounts(
            userType: AccountSearchResultItemUserTypeEnum::INDIVIDUAL->value
        );
    })->throws(NotFoundException::class, 'The requested URL could not be found');

});
