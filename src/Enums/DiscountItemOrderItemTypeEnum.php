<?php

namespace TwoJays\NeonApiWrapper\Enums;

enum DiscountItemOrderItemTypeEnum: string {
    case DONATION = 'DONATION';
    case MEMBERSHIP = 'MEMBERSHIP';
    case EVENT_REGISTRATION = 'EVENT_REGISTRATION';
    case PRODUCT = 'PRODUCT';
}
