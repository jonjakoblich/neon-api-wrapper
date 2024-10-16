<?php

namespace TwoJays\NeonApiWrapper\DataObjects;

class OrganizationProfileData
{
    public function __construct(
        public string $name,
        public string $orgId,
        public string $appUrl
    ) {}
}
