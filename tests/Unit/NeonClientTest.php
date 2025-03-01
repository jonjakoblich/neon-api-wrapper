<?php

use TwoJays\NeonApiWrapper\NeonClient;
use TwoJays\NeonApiWrapper\Services\Accounts\AccountsService;
use TwoJays\NeonApiWrapper\Services\Addresses\AddressesService;
use TwoJays\NeonApiWrapper\Services\Memberships\MembershipsService;

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

it('loads the memberships service', function () {   
    expect($this->neon)
        ->memberships()->toBeInstanceOf(MembershipsService::class);
});

it('creates a client', function () {
    expect($this->neon)
        ->toHaveProperty('client');
});
