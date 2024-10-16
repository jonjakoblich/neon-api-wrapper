<?php

namespace TwoJays\NeonApiWrapper\DataObjects;

class ProcessorSettingsData
{
    public function __construct(
        public NeonPaySettingData $neonPaySetting
    ) {}
}
