<?php

namespace TwoJays\NeonApiWrapper\Contracts;

interface WithRequestBodyParam
{
    public function getBody(): array;
}