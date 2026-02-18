<?php

use TwoJays\NeonApiWrapper\NeonClient;
use TwoJays\NeonApiWrapper\Services\Accounts\AccountsService;
use TwoJays\NeonApiWrapper\Services\Activities\ActivitiesService;
use TwoJays\NeonApiWrapper\Services\Addresses\AddressesService;
use TwoJays\NeonApiWrapper\Services\Campaigns\CampaignsService;
use TwoJays\NeonApiWrapper\Services\Donations\DonationsService;
use TwoJays\NeonApiWrapper\Services\Grants\GrantsService;
use TwoJays\NeonApiWrapper\Services\EventRegistrations\EventRegistrationsService;
use TwoJays\NeonApiWrapper\Services\Events\EventsService;
use TwoJays\NeonApiWrapper\Services\Memberships\MembershipsService;
use TwoJays\NeonApiWrapper\Services\Orders\OrdersService;
use TwoJays\NeonApiWrapper\Services\Pledges\PledgesService;
use TwoJays\NeonApiWrapper\Services\RecurringDonations\RecurringDonationsService;
use TwoJays\NeonApiWrapper\Services\SoftCredits\SoftCreditsService;
use TwoJays\NeonApiWrapper\Services\Households\HouseholdsService;
use TwoJays\NeonApiWrapper\Services\Payments\PaymentsService;
use TwoJays\NeonApiWrapper\Services\ShippingAddresses\ShippingAddressesService;
use TwoJays\NeonApiWrapper\Services\Store\StoreService;
use TwoJays\NeonApiWrapper\Services\Groups\GroupsService;
use TwoJays\NeonApiWrapper\Services\Roles\RolesService;
use TwoJays\NeonApiWrapper\Services\TimeSheets\TimeSheetsService;
use TwoJays\NeonApiWrapper\Services\Volunteers\VolunteersService;
use TwoJays\NeonApiWrapper\Services\Webhooks\WebhooksService;
use TwoJays\NeonApiWrapper\Services\Windfall\WindfallService;

beforeEach(function(){
    $this->neon = new NeonClient('abc','123');
});

it('loads the accounts service', function () {
    expect($this->neon)
        ->accounts()->toBeInstanceOf(AccountsService::class);
});

it('loads the activities service', function () {
    expect($this->neon)
        ->activities()->toBeInstanceOf(ActivitiesService::class);
});

it('loads the addresses service', function () {
    expect($this->neon)
        ->addresses()->toBeInstanceOf(AddressesService::class);
});

it('loads the campaigns service', function () {
    expect($this->neon)
        ->campaigns()->toBeInstanceOf(CampaignsService::class);
});

it('loads the donations service', function () {
    expect($this->neon)
        ->donations()->toBeInstanceOf(DonationsService::class);
});

it('loads the event registrations service', function () {
    expect($this->neon)
        ->eventRegistrations()->toBeInstanceOf(EventRegistrationsService::class);
});

it('loads the events service', function () {
    expect($this->neon)
        ->events()->toBeInstanceOf(EventsService::class);
});

it('loads the grants service', function () {
    expect($this->neon)
        ->grants()->toBeInstanceOf(GrantsService::class);
});

it('loads the groups service', function () {
    expect($this->neon)
        ->groups()->toBeInstanceOf(GroupsService::class);
});

it('loads the memberships service', function () {
    expect($this->neon)
        ->memberships()->toBeInstanceOf(MembershipsService::class);
});

it('loads the orders service', function () {
    expect($this->neon)
        ->orders()->toBeInstanceOf(OrdersService::class);
});

it('loads the pledges service', function () {
    expect($this->neon)
        ->pledges()->toBeInstanceOf(PledgesService::class);
});

it('loads the recurring donations service', function () {
    expect($this->neon)
        ->recurringDonations()->toBeInstanceOf(RecurringDonationsService::class);
});

it('loads the roles service', function () {
    expect($this->neon)
        ->roles()->toBeInstanceOf(RolesService::class);
});

it('loads the soft credits service', function () {
    expect($this->neon)
        ->softCredits()->toBeInstanceOf(SoftCreditsService::class);
});

it('loads the households service', function () {
    expect($this->neon)
        ->households()->toBeInstanceOf(HouseholdsService::class);
});

it('loads the payments service', function () {
    expect($this->neon)
        ->payments()->toBeInstanceOf(PaymentsService::class);
});

it('loads the shipping addresses service', function () {
    expect($this->neon)
        ->shippingAddresses()->toBeInstanceOf(ShippingAddressesService::class);
});

it('loads the store service', function () {
    expect($this->neon)
        ->store()->toBeInstanceOf(StoreService::class);
});

it('loads the time sheets service', function () {
    expect($this->neon)
        ->timeSheets()->toBeInstanceOf(TimeSheetsService::class);
});

it('loads the volunteers service', function () {
    expect($this->neon)
        ->volunteers()->toBeInstanceOf(VolunteersService::class);
});

it('loads the webhooks service', function () {
    expect($this->neon)
        ->webhooks()->toBeInstanceOf(WebhooksService::class);
});

it('loads the windfall service', function () {
    expect($this->neon)
        ->windfall()->toBeInstanceOf(WindfallService::class);
});

it('creates a client', function () {
    expect($this->neon)
        ->toHaveProperty('client');
});
