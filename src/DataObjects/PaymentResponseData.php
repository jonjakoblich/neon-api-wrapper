<?php

namespace TwoJays\NeonApiWrapper\DataObjects;

class PaymentResponseData
{
    public function __construct(
        public string $id,
        public string $status,
        public string $statusMessage
    ) {}
}
