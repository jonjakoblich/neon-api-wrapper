<?php

namespace TwoJays\NeonApiWrapper\DataObjects;

use TwoJays\NeonApiWrapper\Attributes\ArrayOf;
use TwoJays\NeonApiWrapper\Data;

class PaginationEventRegistrationData extends Data
{
    public function __construct(
        public ?string $accountId = null,
        #[ArrayOf(EventRegistrationData::class)]
        public ?array $eventRegistrations = [],
        public ?PaginationData $pagination = null
    ) {}
}
