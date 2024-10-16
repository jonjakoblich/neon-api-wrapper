<?php

namespace TwoJays\NeonApiWrapper\Clients;

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
        $this->endpoint = $this->baseUrl . $apiRequest->getEndpoint();
        
        $options = [
            'auth' => [$this->organizationId, $this->apiKey],
        ];

        if($apiRequest instanceof GetRequest)
            $options['query'] = $apiRequest->getQueryParams($apiRequest);


        if(!empty($pathParams))
            $this->parameterizeEndpoint($pathParams);

        $response = $this->client->request($apiRequest::METHOD, $this->endpoint, $options);

        if($response->getStatusCode() == 200) {
            $responseClass = $apiRequest->successResponseType();
    
            return $responseClass::fromArray(json_decode($response->getBody()->getContents(), true));
        } else {
            throw new Exception($response->getBody(),$response->getStatusCode());
        }

    }

    /**
     * Replace curly brace notation with key matched parameters
     */
    private function parameterizeEndpoint(array $pathParams): void
    {
        foreach ($pathParams as $key => $value) {
            $this->endpoint = str_replace('{' . $key . '}', $value, $this->endpoint);
        }
    }
}
