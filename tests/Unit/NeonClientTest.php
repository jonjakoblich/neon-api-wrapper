<?php

use TwoJays\NeonApiWrapper\NeonClient;
use TwoJays\NeonApiWrapper\Services\Accounts\AccountsService;
use TwoJays\NeonApiWrapper\Services\Addresses\AddressesService;

beforeEach(function(){
    $this->neon = new NeonClient('abc','123');
});

it('loads the accounts service', function () {   
    expect($this->neon)
        ->accounts()->toBeInstanceOf(AccountsService::class);
});

it('loads the addresses service', function () {   
    expect($this->neon)
        ->addresses()->toBeInstanceOf(AddressesService::class);
});

it('creates a client', function () {
    expect($this->neon)
        ->toHaveProperty('client');
});
