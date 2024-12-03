<?php

namespace TwoJays\NeonApiWrapper;

use GuzzleHttp\Client;
use GuzzleHttp\ClientInterface;
use GuzzleHttp\Psr7\Uri;
use TwoJays\NeonApiWrapper\Services\Accounts\AccountsService;

final class NeonClient
{    
    private ClientInterface $client;

    private AccountsService $accounts;

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
    }

    public function accounts(): AccountsService
    {
        return $this->accounts;
    }    
}
