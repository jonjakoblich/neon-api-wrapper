<?php

namespace TwoJays\NeonApiWrapper\DataObjects;

class OutputFieldsData
{
    public function __construct(
        public array $standardFields,
        public array $customFields
    ) {}
}
