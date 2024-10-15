<?php

namespace TwoJays\NeonApiWrapper;

use GuzzleHttp\Client;
use stdClass;

abstract class NeonClient
{
    protected $baseUrl = 'https://api.neoncrm.com/v2';

    private $client;

    protected $endpoint = '';

    public function __construct(
        public string $apiKey,
        public string $organizationId
    ) {
        $this->client = new Client();
    }

    protected function getRequest(string $endpoint, array $params): stdClass
    {
        return $this->makeRequest($endpoint, 'GET', $params);
    }

    protected function postRequest(): array
    {
        return [];
    }

    private function makeRequest(string $endpoint, string $type, array $params): mixed {
        $response = $this->client->request($type, $this->baseUrl . $endpoint, [
            'auth' => [$this->organizationId, $this->apiKey],
            'query' => $params
        ]);

        // Add error handling

        return json_decode($response->getBody()->getContents());
    }
}
