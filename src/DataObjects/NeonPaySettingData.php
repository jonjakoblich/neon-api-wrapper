<?php

namespace TwoJays\NeonApiWrapper\DataObjects;

class NeonPaySettingData
{
    public function __construct(
        public string $merchantId,
        public string $publicKey
    ) {}
}
