<?php

namespace TwoJays\NeonApiWrapper\Contracts;

interface NeonApiRequest
{
    const METHOD = '';

    public function successResponseType(): string;
}