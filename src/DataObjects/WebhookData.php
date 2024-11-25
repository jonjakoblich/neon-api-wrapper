<?php

namespace TwoJays\NeonApiWrapper\DataObjects;

use TwoJays\NeonApiWrapper\Data;

class WebhookData extends Data
{
    public function __construct(
        public string $id,
        public string $name,
        public string $url,
        public string $trigger,
        public string $contentType,
        public HttpBasicData $httpBasic,
        public array $customParameters
    ) {}
}
