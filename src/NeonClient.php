<?php

namespace TwoJays\NeonApiWrapper;

use GuzzleHttp\Client;
use GuzzleHttp\ClientInterface;
use GuzzleHttp\Psr7\Uri;
use TwoJays\NeonApiWrapper\Services\Accounts\AccountsService;
use TwoJays\NeonApiWrapper\Services\Addresses\AddressesService;
use TwoJays\NeonApiWrapper\Services\Donations\DonationsService;
use TwoJays\NeonApiWrapper\Services\EventRegistrations\EventRegistrationsService;
use TwoJays\NeonApiWrapper\Services\Events\EventsService;
use TwoJays\NeonApiWrapper\Services\Memberships\MembershipsService;
use TwoJays\NeonApiWrapper\Services\Opportunities\OpportunitiesService;
use TwoJays\NeonApiWrapper\Services\Orders\OrdersService;
use TwoJays\NeonApiWrapper\Services\Pledges\PledgesService;
use TwoJays\NeonApiWrapper\Services\Activities\ActivitiesService;
use TwoJays\NeonApiWrapper\Services\Campaigns\CampaignsService;
use TwoJays\NeonApiWrapper\Services\Grants\GrantsService;
use TwoJays\NeonApiWrapper\Services\RecurringDonations\RecurringDonationsService;
use TwoJays\NeonApiWrapper\Services\SoftCredits\SoftCreditsService;
use TwoJays\NeonApiWrapper\Services\Groups\GroupsService;
use TwoJays\NeonApiWrapper\Services\Roles\RolesService;
use TwoJays\NeonApiWrapper\Services\Shifts\ShiftsService;
use TwoJays\NeonApiWrapper\Services\ShippingAddresses\ShippingAddressesService;
use TwoJays\NeonApiWrapper\Services\Store\StoreService;
use TwoJays\NeonApiWrapper\Services\TimeSheets\TimeSheetsService;
use TwoJays\NeonApiWrapper\Services\Volunteers\VolunteersService;
use TwoJays\NeonApiWrapper\Services\Webhooks\WebhooksService;
use TwoJays\NeonApiWrapper\Services\Households\HouseholdsService;
use TwoJays\NeonApiWrapper\Services\Payments\PaymentsService;
use TwoJays\NeonApiWrapper\Services\Windfall\WindfallService;

final class NeonClient
{
    private ClientInterface $client;

    private AccountsService $accounts;
    private ActivitiesService $activities;
    private AddressesService $addresses;
    private CampaignsService $campaigns;
    private DonationsService $donations;
    private EventRegistrationsService $eventRegistrations;
    private EventsService $events;
    private GrantsService $grants;
    private GroupsService $groups;
    private HouseholdsService $households;
    private MembershipsService $memberships;
    private OpportunitiesService $opportunities;
    private OrdersService $orders;
    private PaymentsService $payments;
    private PledgesService $pledges;
    private RecurringDonationsService $recurringDonations;
    private RolesService $roles;
    private ShiftsService $shifts;
    private ShippingAddressesService $shippingAddresses;
    private SoftCreditsService $softCredits;
    private StoreService $store;
    private TimeSheetsService $timeSheets;
    private VolunteersService $volunteers;
    private WebhooksService $webhooks;
    private WindfallService $windfall;

    public function __construct(
        private readonly string $apiKey,
        private readonly string $organizationId,
        public ?array $clientArgs = [],
    ) {
        $this->client = new Client(
            array_merge([
                'base_uri' => new Uri('https://api.neoncrm.com/v2/'),
                'auth' => [$this->organizationId, $this->apiKey],
            ], $clientArgs)
        );

        // Initialize services
        $this->accounts = new AccountsService($this->client);
        $this->activities = new ActivitiesService($this->client);
        $this->addresses = new AddressesService($this->client);
        $this->campaigns = new CampaignsService($this->client);
        $this->donations = new DonationsService($this->client);
        $this->eventRegistrations = new EventRegistrationsService($this->client);
        $this->events = new EventsService($this->client);
        $this->grants = new GrantsService($this->client);
        $this->groups = new GroupsService($this->client);
        $this->households = new HouseholdsService($this->client);
        $this->memberships = new MembershipsService($this->client);
        $this->opportunities = new OpportunitiesService($this->client);
        $this->orders = new OrdersService($this->client);
        $this->payments = new PaymentsService($this->client);
        $this->pledges = new PledgesService($this->client);
        $this->recurringDonations = new RecurringDonationsService($this->client);
        $this->roles = new RolesService($this->client);
        $this->shifts = new ShiftsService($this->client);
        $this->shippingAddresses = new ShippingAddressesService($this->client);
        $this->softCredits = new SoftCreditsService($this->client);
        $this->store = new StoreService($this->client);
        $this->timeSheets = new TimeSheetsService($this->client);
        $this->volunteers = new VolunteersService($this->client);
        $this->webhooks = new WebhooksService($this->client);
        $this->windfall = new WindfallService($this->client);
    }

    public function accounts(): AccountsService
    {
        return $this->accounts;
    }

    public function activities(): ActivitiesService
    {
        return $this->activities;
    }

    public function addresses(): AddressesService
    {
        return $this->addresses;
    }

    public function campaigns(): CampaignsService
    {
        return $this->campaigns;
    }

    public function donations(): DonationsService
    {
        return $this->donations;
    }

    public function eventRegistrations(): EventRegistrationsService
    {
        return $this->eventRegistrations;
    }

    public function events(): EventsService
    {
        return $this->events;
    }

    public function grants(): GrantsService
    {
        return $this->grants;
    }

    public function groups(): GroupsService
    {
        return $this->groups;
    }

    public function households(): HouseholdsService
    {
        return $this->households;
    }

    public function memberships(): MembershipsService
    {
        return $this->memberships;
    }

    public function opportunities(): OpportunitiesService
    {
        return $this->opportunities;
    }

    public function orders(): OrdersService
    {
        return $this->orders;
    }

    public function payments(): PaymentsService
    {
        return $this->payments;
    }

    public function pledges(): PledgesService
    {
        return $this->pledges;
    }

    public function recurringDonations(): RecurringDonationsService
    {
        return $this->recurringDonations;
    }

    public function roles(): RolesService
    {
        return $this->roles;
    }

    public function shifts(): ShiftsService
    {
        return $this->shifts;
    }

    public function shippingAddresses(): ShippingAddressesService
    {
        return $this->shippingAddresses;
    }

    public function softCredits(): SoftCreditsService
    {
        return $this->softCredits;
    }

    public function store(): StoreService
    {
        return $this->store;
    }

    public function timeSheets(): TimeSheetsService
    {
        return $this->timeSheets;
    }

    public function volunteers(): VolunteersService
    {
        return $this->volunteers;
    }

    public function webhooks(): WebhooksService
    {
        return $this->webhooks;
    }

    public function windfall(): WindfallService
    {
        return $this->windfall;
    }
}
