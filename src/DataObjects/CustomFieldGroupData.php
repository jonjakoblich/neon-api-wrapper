<?php

namespace TwoJays\NeonApiWrapper\DataObjects;

class CustomFieldGroupData
{
    public function __construct(
        public string $component,
        public string $id,
        public string $displayName,
        public string $description
    ) {}
}
