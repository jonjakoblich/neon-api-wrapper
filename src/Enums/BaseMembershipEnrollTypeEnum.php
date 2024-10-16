<?php

namespace TwoJays\NeonApiWrapper\Enums;

enum BaseMembershipEnrollTypeEnum: string {
    case JOIN = 'JOIN';
    case RENEW = 'RENEW';
    case REJOIN = 'REJOIN';
}
