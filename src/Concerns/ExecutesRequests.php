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

        if($this instanceof WithQueryParams && method_exists($this, 'getQueryParams'))
            $options['query'] = $this->getQueryParams();

        if($this instanceof WithPathParams && method_exists($this, 'parameterizeEndpoint'))
            $this->parameterizeEndpoint();

        if($this instanceof WithRequestBodyParam && method_exists($this, 'getBody'))
            $options['json'] = $this->getBody();

        // dump($options);
        // die();

        try {
            $response = $client->request($this::METHOD, $this->getEndpoint(), $options);
        } catch (\Throwable $th) {
            $exception = match ($th->getCode()) {
                400 => Exceptions\BadRequestException::class,
                401 => Exceptions\UnauthorizedException::class,
                403 => Exceptions\ForbiddenException::class,
                404 => Exceptions\NotFoundException::class,
                415 => Exceptions\UnsupportedMediaTypeException::class,
            };

            throw new $exception($th);
        }

        $responseBodyContents = json_decode($response->getBody()->getContents(), true);

        return $responseBodyContents ?? [];
    }
}