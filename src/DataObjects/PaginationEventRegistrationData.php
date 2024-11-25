<?php

namespace TwoJays\NeonApiWrapper\DataObjects;

use TwoJays\NeonApiWrapper\Data;

class PaginationEventRegistrationData extends Data
{
    public function __construct(
        public string $accountId,
        public array $eventRegistrations,
        public PaginationData $pagination
    ) {}
}
