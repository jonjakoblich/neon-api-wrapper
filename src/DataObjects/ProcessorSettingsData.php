<?php

namespace TwoJays\NeonApiWrapper\DataObjects;

use TwoJays\NeonApiWrapper\Data;

class ProcessorSettingsData extends Data
{
    public function __construct(
        public NeonPaySettingData $neonPaySetting
    ) {}
}
