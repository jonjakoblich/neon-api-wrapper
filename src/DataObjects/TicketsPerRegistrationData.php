<?php

namespace TwoJays\NeonApiWrapper\DataObjects;

use TwoJays\NeonApiWrapper\Data;

class TicketsPerRegistrationData extends Data
{
    public function __construct(
        public ?int $number = null,
        public ?string $operator = null
    ) {}
}
