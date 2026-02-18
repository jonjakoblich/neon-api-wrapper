<?php

namespace TwoJays\NeonApiWrapper\DataObjects;

use TwoJays\NeonApiWrapper\Attributes\ArrayOf;
use TwoJays\NeonApiWrapper\Data;

class WebhookData extends Data
{
    public function __construct(
        public ?string $id = null,
        public ?string $name = null,
        public ?string $url = null,
        public ?string $trigger = null,
        public ?string $contentType = null,
        public ?bool $triggerSelfImport = null,
        public ?HttpBasicData $httpBasic = null,
        #[ArrayOf(NameValuePairData::class)]
        public ?array $customParameters = []
    ) {}
}
