<?php

namespace TwoJays\NeonApiWrapper\DataObjects;

class SearchFieldsData
{
    public function __construct(
        public array $standardFields,
        public array $customFields
    ) {}
}
