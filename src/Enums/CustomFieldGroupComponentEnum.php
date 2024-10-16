<?php

namespace TwoJays\NeonApiWrapper\Enums;

enum CustomFieldGroupComponentEnum: string {
    case ACCOUNT = 'Account';
    case DONATION = 'Donation';
    case EVENT = 'Event';
    case ATTENDEE = 'Attendee';
    case INDIVIDUAL = 'Individual';
    case COMPANY = 'Company';
    case ACTIVITY = 'Activity';
    case MEMBERSHIP = 'Membership';
    case PRODUCT = 'Product';
}
