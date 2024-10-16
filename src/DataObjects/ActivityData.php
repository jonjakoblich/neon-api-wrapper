<?php

namespace TwoJays\NeonApiWrapper\DataObjects;

class ActivityData
{
    public function __construct(
        public string $id,
        public string $subject,
        public string $note,
        public ActivityDatesData $activityDates,
        public string $clientId,
        public string $systemUserId,
        public string $grantId,
        public IdNamePairData $status,
        public string $priority,
        public TimestampsData $timestamps
    ) {}
}
