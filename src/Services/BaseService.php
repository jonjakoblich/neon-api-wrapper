<?php

namespace TwoJays\NeonApiWrapper\Services;

use GuzzleHttp\ClientInterface;
use TwoJays\NeonApiWrapper\Contracts\DataObject;
use TwoJays\NeonApiWrapper\Contracts\NeonApiRequest;
use TwoJays\NeonApiWrapper\Contracts\ServiceProvider;
use TwoJays\NeonApiWrapper\Factories\DtoFactory;

abstract class BaseService implements ServiceProvider
{
    protected string $endpoint = '';

    public function __construct(
        private readonly ClientInterface $client,
    ){}

    protected function getResponse(NeonApiRequest $apiRequest, string $returnType): DataObject
    {
        $response = $apiRequest->execute($this->client);

        return DtoFactory::create($response, $returnType);
    }
}
