<?php

use GuzzleHttp\Handler\MockHandler;
use GuzzleHttp\HandlerStack;
use GuzzleHttp\Psr7\Response;
use TwoJays\NeonApiWrapper\Endpoints\Accounts;
use TwoJays\NeonApiWrapper\Responses\AccountsListResponse;

uses()->group('endpoints','accounts');

/**
 * @todo Fake a dataset of accounts
 * @todo Create a set of error responses and test those
 * @todo Create a 200 response with accounts
 * @todo Create a 200 response without accounts
 */

it('gets a list of accounts', function () {

    $headers = [];
    $body = json_encode(new class{
        public $accounts = [];
        public $pagination = [];
    });
    
    $mock = new MockHandler([
        new Response(200, $headers, $body),
    ]);

    $handlerStack = HandlerStack::create($mock);

    $client = new Accounts('abc123','myOrgKey',['handler' => $handlerStack]);


    $response = $client->getAccounts([
        'userType' => 'INDIVIDUAL'
    ]);

    expect($response)
        ->toBeInstanceOf(AccountsListResponse::class)
        ->toHaveProperties(['accounts','pagination']);
});
