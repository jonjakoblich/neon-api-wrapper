<?php

namespace TwoJays\NeonApiWrapper\Enums;

enum FinancialSettingsFeeTypeEnum: string {
    case FREE = 'Free';
    case SINGLEFEE = 'SingleFee';
    case MT_OA = 'MT_OA';
    case MT_MA = 'MT_MA';
}
