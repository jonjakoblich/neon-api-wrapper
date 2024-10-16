<?php

namespace TwoJays\NeonApiWrapper\DataObjects;

class TicketsPerRegistrationData
{
    public function __construct(
        public int $number,
        public string $operator
    ) {}
}
