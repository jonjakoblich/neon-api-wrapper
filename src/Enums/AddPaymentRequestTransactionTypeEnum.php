<?php

namespace TwoJays\NeonApiWrapper\Enums;

enum AddPaymentRequestTransactionTypeEnum: string {
    case ORDER = 'ORDER';
    case DONATION = 'DONATION';
    case MEMBERSHIP = 'MEMBERSHIP';
    case EVENT_REGISTRATION = 'EVENT_REGISTRATION';
}
