<?php

namespace TwoJays\NeonApiWrapper\DataObjects;

class DobData
{
    public function __construct(
        public string $day,
        public string $month,
        public string $year
    ) {}
}
