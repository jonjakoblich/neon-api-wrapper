<?php

namespace TwoJays\NeonApiWrapper\DataObjects;

class SystemUserData
{
    public function __construct(
        public string $id,
        public string $firstName,
        public string $lastName,
        public string $middleName
    ) {}
}
