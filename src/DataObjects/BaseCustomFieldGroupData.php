<?php

namespace TwoJays\NeonApiWrapper\DataObjects;

class BaseCustomFieldGroupData
{
    public function __construct(
        public string $id,
        public string $displayName,
        public string $description
    ) {}
}
