<?php

namespace TwoJays\NeonApiWrapper\DataObjects;

use TwoJays\NeonApiWrapper\Data;

class PaymentResponseData extends Data
{
    public function __construct(
        public string $id,
        public string $status,
        public ?string $statusMessage
    ) {}
}
