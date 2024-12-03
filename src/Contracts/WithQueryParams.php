<?php

namespace TwoJays\NeonApiWrapper\Contracts;

interface WithQueryParams
{
    public function getQueryParams(): array;
}