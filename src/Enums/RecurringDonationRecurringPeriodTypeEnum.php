<?php

namespace TwoJays\NeonApiWrapper\Enums;

enum RecurringDonationRecurringPeriodTypeEnum: string {
    case YEAR = 'YEAR';
    case MONTH = 'MONTH';
    case DAY = 'DAY';
    case LIFE = 'LIFE';
    case WEEK = 'WEEK';
}
