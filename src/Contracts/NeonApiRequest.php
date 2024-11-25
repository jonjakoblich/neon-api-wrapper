<?php

namespace TwoJays\NeonApiWrapper\Contracts;

interface NeonApiRequest
{
    const METHOD = '';

    const ENDPOINT_BASE = '';

    public function getEndpoint(): string;

    public function responseDataType(): string;
}