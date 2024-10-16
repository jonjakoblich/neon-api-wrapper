<?php

namespace TwoJays\NeonApiWrapper\DataObjects;

class CustomFieldDataData
{
    public function __construct(
        public string $groupId,
        public string $id,
        public string $displayType,
        public string $name,
        public string $dataType,
        public bool $constituentReadOnly,
        public string $component,
        public array $optionValues,
        public bool $isEventSpecificField,
        public string $eventId,
        public bool $attendeeQuestion,
        public string $constituentName,
        public string $publicName,
        public bool $constituentRequired,
        public bool $publicRequired,
        public bool $constituentVisible,
        public bool $publicVisible
    ) {}
}
