<?php

namespace TwoJays\NeonApiWrapper\DataObjects;

class LoginData
{
    public function __construct(
        public string $username,
        public string $password
    ) {}
}
