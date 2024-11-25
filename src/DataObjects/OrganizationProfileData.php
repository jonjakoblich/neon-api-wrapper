<?php

namespace TwoJays\NeonApiWrapper\DataObjects;

use TwoJays\NeonApiWrapper\Data;

class OrganizationProfileData extends Data
{
    public function __construct(
        public string $name,
        public string $orgId,
        public string $appUrl
    ) {}
}
