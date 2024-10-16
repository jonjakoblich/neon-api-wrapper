<?php

namespace TwoJays\NeonApiWrapper\DataObjects;

class CustomFieldOptionData
{
    public function __construct(
        public string $code,
        public string $id,
        public string $name,
        public bool $visibleOnPublicForms,
        public bool $visibleOnConstituentForms
    ) {}
}
