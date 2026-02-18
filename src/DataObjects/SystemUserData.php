<?php

namespace TwoJays\NeonApiWrapper\DataObjects;

use TwoJays\NeonApiWrapper\Data;

class SystemUserData extends Data
{
    public function __construct(
        public ?string $id = null,
        public ?string $firstName = null,
        public ?string $lastName = null,
        public ?string $middleName = null
    ) {}
}
