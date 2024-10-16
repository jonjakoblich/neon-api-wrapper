<?php

namespace TwoJays\NeonApiWrapper\Contracts;

interface GetRequest extends NeonApiRequest
{
    const METHOD = 'GET';

    public function getQueryParams(): array;
}