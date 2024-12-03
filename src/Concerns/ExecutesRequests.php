<?php

namespace TwoJays\NeonApiWrapper\Concerns;

use Exception;
use GuzzleHttp\ClientInterface;
use TwoJays\NeonApiWrapper\Contracts\WithPathParams;
use TwoJays\NeonApiWrapper\Contracts\WithQueryParams;

trait ExecutesRequests
{
    public function execute(ClientInterface $client): array
    {
        $options = [];

        if($this instanceof WithQueryParams)
            $options['query'] = $this->getQueryParams();

        if($this instanceof WithPathParams)
            $this->parameterizeEndpoint();

        $response = $client->request($this::METHOD, $this->getEndpoint(), $options);

        $responseBodyContents = json_decode($response->getBody()->getContents(), true);

        if($response->getStatusCode() != 200)
            throw new Exception($responseBodyContents,$response->getStatusCode());

        return $responseBodyContents;
    }
}