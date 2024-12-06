<?php

use GuzzleHttp\Client;
use GuzzleHttp\Handler\MockHandler;
use GuzzleHttp\HandlerStack;
use GuzzleHttp\Psr7\Response;
use GuzzleHttp\Psr7\Utils;
use TwoJays\NeonApiWrapper\DataObjects\AccountSearchResultData;
use TwoJays\NeonApiWrapper\DataObjects\AccountSearchResultItemData;
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

    expect($response)->toBeInstanceOf(AccountSearchResultData::class);
    
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


it('can get a single account', function () {
    $responseContent = [
        'individualAccount' => [],
        'companyAccounts' => []
    ];

    $this->mockHandler->append(new Response(200, [], Utils::streamFor(json_encode($responseContent))));

    $response = $this->service->getAccount('100');

    // Assertions
})->todo();


describe('error response handling', function() {
    it('handles 401 response', function () {
        $this->mockHandler->append(new Response(401, [], Utils::streamFor(json_encode([]))));
        
        expect(fn() => $this->service->listAccounts(
            userType: AccountSearchResultItemUserTypeEnum::INDIVIDUAL->value
        ))->toThrow(UnauthorizedException::class, 'Unauthorized access to API');
    });
    
    it('handles 403 response', function () {
        $this->mockHandler->append(new Response(403, [], Utils::streamFor(json_encode([]))));
        
        expect(fn() => $this->service->listAccounts(
            userType: AccountSearchResultItemUserTypeEnum::INDIVIDUAL->value
        ))->toThrow(ForbiddenException::class, 'Forbidden');
    });
    
    it('handles 404 response', function () {
        $this->mockHandler->append(new Response(404, [], Utils::streamFor(json_encode([]))));
        
        expect(fn() => $this->service->listAccounts(
            userType: AccountSearchResultItemUserTypeEnum::INDIVIDUAL->value
        ))->toThrow(NotFoundException::class, 'The requested URL could not be found');
    });
});
