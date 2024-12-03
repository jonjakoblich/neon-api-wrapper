<?php

namespace TwoJays\NeonApiWrapper\Contracts;

interface WithPathParams
{
    public function getPathParams(): array;
}