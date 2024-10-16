<?php

namespace TwoJays\NeonApiWrapper\DataObjects;

class CraInfoData
{
    public function __construct(
        public float $advantageAmount,
        public float $eligibleAmount,
        public string $advantageDescription
    ) {}
}
