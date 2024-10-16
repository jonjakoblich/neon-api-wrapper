<?php

namespace TwoJays\NeonApiWrapper;

use Exception;
use GuzzleHttp\Client;
use TwoJays\NeonApiWrapper\Contracts\GetRequest;
use TwoJays\NeonApiWrapper\Contracts\NeonApiRequest;

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

    protected function makeRequest(NeonApiRequest $apiRequest, array $pathParams = []): mixed {
        $options = [
            'auth' => [$this->organizationId, $this->apiKey],
        ];

        if($apiRequest instanceof GetRequest)
            $options['query'] = $apiRequest->getQueryParams($apiRequest);

        $response = $this->client->request($apiRequest::METHOD, $this->baseUrl . $apiRequest->getEndpoint(), $options);

        if($response->getStatusCode() == 200) {
            $responseClass = $apiRequest->successResponseType();
    
            return new $responseClass(...json_decode($response->getBody()->getContents(), true));
        } else {
            throw new Exception($response->getBody(),$response->getStatusCode());
        }

    }
}
