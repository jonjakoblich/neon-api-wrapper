<?php

use GuzzleHttp\Handler\MockHandler;
use GuzzleHttp\HandlerStack;
use GuzzleHttp\Psr7\Response;
use TwoJays\NeonApiWrapper\Clients\AccountsClient;
use TwoJays\NeonApiWrapper\DataObjects\AccountSearchResultItemData;
use TwoJays\NeonApiWrapper\DataObjects\PaginationData;
use TwoJays\NeonApiWrapper\Requests\ListAccountsRequest;
use TwoJays\NeonApiWrapper\Response as NeonApiWrapperResponse;

uses()->group('endpoints','accounts');

/**
 * @todo Fake a dataset of accounts
 * @todo Create a set of error responses and test those
 * @todo Create a 200 response with accounts
 * @todo Create a 200 response without accounts
 * @todo Create a query for individual accounts
 * @todo Create a query for company accounts
 */

it('gets a list of accounts', function () {
    $headers = [];
    $body = json_encode(new class{
        public array $accounts;
        public array $pagination;

        public function __construct(){
            $this->accounts = [
                [
                    "accountId" => (string) fake()->randomNumber(),
                    "firstName" => fake()->firstName(),
                    "lastName" => fake()->lastName(),
                    "companyName" => fake()->company(),
                    "email" => fake()->email(),
                    "userType" => "INDIVIDUAL",
                ]
            ];
            
            $this->pagination = [
                "currentPage" => 2,
                "pageSize" => 10,
                "sortColumn" => null,
                "sortDirection" => null,
                "totalPages" => 82,
                "totalResults" => 812,
            ];
        }
    });
    
    $mock = new MockHandler([
        new Response(200, $headers, $body),
    ]);

    $handlerStack = HandlerStack::create($mock);

    $client = new AccountsClient('abc123','myOrgKey',['handler' => $handlerStack]);

    $response = $client->listAccounts(new ListAccountsRequest(
        userType:'INDIVIDUAL'
    ));

    expect($response)
        ->toBeInstanceOf(NeonApiWrapperResponse::class)
        ->data->toHaveProperties(['accounts','pagination'])
        ->data->accounts->toBeArray()
        ->data->accounts->each->toBeInstanceOf(AccountSearchResultItemData::class)
        ->data->pagination->toBeInstanceOf(PaginationData::class);
});

it('mocks the client', function () {
    $request = new ListAccountsRequest(
        userType:'INDIVIDUAL'
    );

    $client = Mockery::mock(AccountsClient::class);
    $client->shouldReceive('listAccounts')
        ->with($request);

    dump($client->listAccounts($request));
});

