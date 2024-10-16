<?php

namespace TwoJays\NeonApiWrapper\Enums;

enum DonationStatusEnum: string {
    case PENDING = 'Pending';
    case SUCCEEDED = 'Succeeded';
    case FAILED = 'Failed';
    case CANCELED = 'Canceled';
    case DEFERRED = 'Deferred';
    case REFUNDED = 'Refunded';
}
