<?php

namespace TwoJays\NeonApiWrapper\Contracts;

use GuzzleHttp\ClientInterface;

interface NeonApiRequest
{
    const METHOD = '';

    const ENDPOINT_BASE = '';

    public function getEndpoint(): string;

    public function execute(ClientInterface $client): array;
}