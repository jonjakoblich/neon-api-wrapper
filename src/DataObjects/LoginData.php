<?php

namespace TwoJays\NeonApiWrapper\DataObjects;

use TwoJays\NeonApiWrapper\Data;

class LoginData extends Data
{
    public function __construct(
        public string $username,
        public string $password
    ) {}
}
