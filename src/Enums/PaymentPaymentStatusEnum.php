<?php

namespace TwoJays\NeonApiWrapper\Enums;

enum PaymentPaymentStatusEnum: string {
    case PENDING = 'Pending';
    case PROCESSING = 'Processing';
    case SUCCEEDED = 'Succeeded';
    case FAILED = 'Failed';
    case ERROR = 'Error';
    case SCHEDULED = 'Scheduled';
    case CANCELED = 'Canceled';
    case DEFERRED = 'Deferred';
    case REFUNDED = 'Refunded';
    case PARTIALLY_REFUNDED = 'Partially_Refunded';
    case DISPUTE_LOST = 'Dispute_Lost';
    case HELD_FOR_REVIEW = 'Held_for_Review';
}
