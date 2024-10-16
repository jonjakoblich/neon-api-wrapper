<?php

namespace TwoJays\NeonApiWrapper\Enums;

enum EventRegistrationResponseStatusEnum: string {
    case SUCCEEDED = 'SUCCEEDED';
    case FAILED = 'FAILED';
    case PENDING = 'PENDING';
    case CANCELED = 'CANCELED';
    case WAITINGLIST = 'WAITINGLIST';
    case CANCEL_PENDING = 'CANCEL_PENDING';
    case DEFERRED = 'DEFERRED';
    case REFUNDED = 'REFUNDED';
}
