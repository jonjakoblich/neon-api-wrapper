<?php

namespace TwoJays\NeonApiWrapper\Concerns;

use GuzzleHttp\ClientInterface;
use TwoJays\NeonApiWrapper\Contracts\WithPathParams;
use TwoJays\NeonApiWrapper\Contracts\WithQueryParams;
use TwoJays\NeonApiWrapper\Contracts\WithRequestBodyParam;
use TwoJays\NeonApiWrapper\Exceptions;

trait ExecutesRequests
{
    public function execute(ClientInterface $client): array
    {
        $options = [];

        if($this instanceof WithQueryParams)
            $options['query'] = $this->getQueryParams();

        if($this instanceof WithPathParams)
            $this->parameterizeEndpoint();

        if($this instanceof WithRequestBodyParam)
            $options['body'] = json_encode($this->getBody());

        try {
            $response = $client->request($this::METHOD, $this->getEndpoint(), $options);
        } catch (\Throwable $th) {
            $exception = match ($th->getCode()) {
                401 => Exceptions\UnauthorizedException::class,
                403 => Exceptions\ForbiddenException::class,
                404 => Exceptions\NotFoundException::class,
            };

            throw new $exception;
        }

        $responseBodyContents = json_decode($response->getBody()->getContents(), true);

        return $responseBodyContents;
    }
}