<?php

use TwoJays\NeonApiWrapper\Contracts\DataObject;
use TwoJays\NeonApiWrapper\Data;
use TwoJays\NeonApiWrapper\DataObjects\SubMembershipListData;

uses()->group('arch');

arch()
    ->expect('App')
    ->not->toUse(['die', 'dd', 'dump']);

arch()
    ->expect('TwoJays\NeonApiWrapper\Attributes')
    ->toBeClasses()
    ->toHaveAttribute(Attribute::class);

arch()
    ->expect('TwoJays\NeonApiWrapper\Concerns')
    ->toBeTraits();

arch()
    ->expect('TwoJays\NeonApiWrapper\Contracts')
    ->toBeInterfaces();

arch()
    ->expect('TwoJays\NeonApiWrapper\DataObjects')
    ->toBeClasses()
    ->toExtend(Data::class)
        ->ignoring(SubMembershipListData::class)
    ->toImplement(DataObject::class);

arch()
    ->expect('TwoJays\NeonApiWrapper\Enums')
    ->toBeStringBackedEnums();

arch()
    ->expect('TwoJays\NeonApiWrapper\Exceptions')
    ->toBeClasses()
    ->toExtend(Exception::class);
