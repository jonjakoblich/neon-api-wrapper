<?php

namespace TwoJays\NeonApiWrapper\DataObjects;

class HttpBasicData
{
    public function __construct(
        public string $userName,
        public string $password
    ) {}
}
