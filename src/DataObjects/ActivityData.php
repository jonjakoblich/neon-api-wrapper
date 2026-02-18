<?php

namespace TwoJays\NeonApiWrapper\DataObjects;

use TwoJays\NeonApiWrapper\Attributes\ArrayOf;
use TwoJays\NeonApiWrapper\Data;

class ActivityData extends Data
{
    public function __construct(
        public ?string $id = null,
        public ?string $subject = null,
        public ?string $note = null,
        public ?ActivityDatesData $activityDates = null,
        #[ArrayOf(ClientAccountData::class)]
        public ?array $clientAccount = [],
        public ?array $systemUserId = [],
        public ?string $grantId = null,
        public ?IdNamePairData $status = null,
        public ?IdNamePairData $customStatus = null,
        public ?string $priority = null,
        #[ArrayOf(CustomFieldData::class)]
        public ?array $activityCustomFields = [],
        public ?TimestampsData $timestamps = null
    ) {}
}
