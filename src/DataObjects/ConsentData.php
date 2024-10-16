<?php

namespace TwoJays\NeonApiWrapper\DataObjects;

class ConsentData
{
    public function __construct(
        public string $email,
        public string $phone,
        public string $mail,
        public string $sms,
        public string $dataSharing
    ) {}
}
