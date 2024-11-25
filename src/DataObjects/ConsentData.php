<?php

namespace TwoJays\NeonApiWrapper\DataObjects;

use TwoJays\NeonApiWrapper\Data;

class ConsentData extends Data
{
    public function __construct(
        public string $email,
        public string $phone,
        public string $mail,
        public string $sms,
        public string $dataSharing
    ) {}
}
