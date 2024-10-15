<?php

namespace TwoJays\NeonApiWrapper;

use GuzzleHttp\Client;
use stdClass;
use TwoJays\NeonApiWrapper\Contracts\NeonApiResponse;

abstract class NeonClient
{
    protected string $baseUrl = 'https://api.neoncrm.com/v2';

    protected string $endpoint = '';
    
    private Client $client;

    public function __construct(
        public string $apiKey,
        public string $organizationId,
        public ?array $args = [],
    ) {
        $this->client = new Client($args);
    }

    protected function getRequest(string $endpoint, array $params): array
    {
        return $this->makeApiRequest($endpoint, 'GET', $params);
    }

    protected function postRequest(string $endpoint, array $params): NeonApiResponse
    {
        return $this->makeApiRequest($endpoint, 'POST', $params);
    }

    private function makeApiRequest(string $endpoint, string $type, array $params): mixed {
        $options = [
            'auth' => [$this->organizationId, $this->apiKey],
        ];

        if(isset($params))
            $options['query'] = $params;

        $response = $this->client->request($type, $this->baseUrl . $endpoint, $options);

        // Add error handling

        return json_decode($response->getBody()->getContents(), true);
    }
}
