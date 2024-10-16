<?php

namespace TwoJays\NeonApiWrapper;

use Exception;
use GuzzleHttp\Client;
use stdClass;
use TwoJays\NeonApiWrapper\Contracts\NeonApiRequest;
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

    protected function makeRequest(string $endpoint, NeonApiRequest $request): mixed {
        $options = [
            'auth' => [$this->organizationId, $this->apiKey],
        ];

        if($request::METHOD == 'GET')
            $options['query'] = $this->getRequestProperties($request);

        $response = $this->client->request($request::METHOD, $this->baseUrl . $endpoint, $options);

        // Add error handling

        if($response->getStatusCode() == 200) {
            $responseClass = $request->successResponseType();
    
            return new $responseClass(...json_decode($response->getBody()->getContents(), true));
        } else {
            throw new Exception($response->getBody(),$response->getStatusCode());
        }

    }

    private function getRequestProperties(NeonApiRequest $request): array
    {
        return array_filter(
            get_object_vars($request),
            fn($property) => !empty($property)
        );
    }
}
