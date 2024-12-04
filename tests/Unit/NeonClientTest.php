<?php

use TwoJays\NeonApiWrapper\NeonClient;
use TwoJays\NeonApiWrapper\Services\Accounts\AccountsService;

it('loads all services', function () {
    $neon = new NeonClient('abc','123');
    
    expect($neon)
        ->accounts()->toBeInstanceOf(AccountsService::class);
});

it('creates a client', function () {
    $neon = new NeonClient('abc','123');

    expect($neon)
        ->toHaveProperty('client');
});
