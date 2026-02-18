<?php

use TwoJays\NeonApiWrapper\Contracts\DataObject;
use TwoJays\NeonApiWrapper\Data;
use TwoJays\NeonApiWrapper\DataObjects\EventCategoryListData;
use TwoJays\NeonApiWrapper\DataObjects\EventTicketListData;
use TwoJays\NeonApiWrapper\DataObjects\CampaignListData;
use TwoJays\NeonApiWrapper\DataObjects\InstallmentListData;
use TwoJays\NeonApiWrapper\DataObjects\PledgePaymentListData;
use TwoJays\NeonApiWrapper\DataObjects\ShippingMethodResponseListData;
use TwoJays\NeonApiWrapper\DataObjects\SubMembershipListData;
use TwoJays\NeonApiWrapper\DataObjects\RelationTypeListData;
use TwoJays\NeonApiWrapper\DataObjects\ListHouseholdListData;
use TwoJays\NeonApiWrapper\DataObjects\CreditCardTypeListData;
use TwoJays\NeonApiWrapper\DataObjects\TenderListData;
use TwoJays\NeonApiWrapper\DataObjects\CatalogListData;
use TwoJays\NeonApiWrapper\DataObjects\StoreCategoryListData;

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
        ->ignoring(EventCategoryListData::class)
        ->ignoring(EventTicketListData::class)
        ->ignoring(ShippingMethodResponseListData::class)
        ->ignoring(PledgePaymentListData::class)
        ->ignoring(InstallmentListData::class)
        ->ignoring(CampaignListData::class)
        ->ignoring(\TwoJays\NeonApiWrapper\DataObjects\WebhookListData::class)
        ->ignoring(RelationTypeListData::class)
        ->ignoring(ListHouseholdListData::class)
        ->ignoring(CreditCardTypeListData::class)
        ->ignoring(TenderListData::class)
        ->ignoring(CatalogListData::class)
        ->ignoring(StoreCategoryListData::class)
    ->toImplement(DataObject::class);

arch()
    ->expect('TwoJays\NeonApiWrapper\Enums')
    ->toBeStringBackedEnums();

arch()
    ->expect('TwoJays\NeonApiWrapper\Exceptions')
    ->toBeClasses()
    ->toExtend(Exception::class);
