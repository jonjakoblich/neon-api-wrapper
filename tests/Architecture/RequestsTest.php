<?php

use TwoJays\NeonApiWrapper\Contracts\NeonApiRequest;

uses()->group('arch','requests');


arch('src/Requests')
    ->expect('TwoJays\NeonApiWrapper\Requests')
    ->toBeClasses()
    ->toExtendNothing()
    ->toImplement(NeonApiRequest::class);
