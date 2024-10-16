<?php

namespace TwoJays\NeonApiWrapper\DataObjects;

class PaginationEventRegistrationData
{
    public function __construct(
        public string $accountId,
        public array $eventRegistrations,
        public PaginationData $pagination
    ) {}
}
