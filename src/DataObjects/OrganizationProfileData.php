<?php

namespace TwoJays\NeonApiWrapper\DataObjects;

use TwoJays\NeonApiWrapper\Data;

class OrganizationProfileData extends Data
{
    public function __construct(
        public ?string $name = null,
        public ?string $orgId = null,
        public ?string $appUrl = null
    ) {}
}
