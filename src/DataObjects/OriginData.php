<?php

namespace TwoJays\NeonApiWrapper\DataObjects;

class OriginData
{
    public function __construct(
        public string $originDetail,
        public string $originCategory
    ) {}
}
