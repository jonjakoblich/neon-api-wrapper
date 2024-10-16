<?php

namespace TwoJays\NeonApiWrapper\Enums;

enum MembershipEnrollTypeEnum: string {
    case JOIN = 'JOIN';
    case RENEW = 'RENEW';
    case REJOIN = 'REJOIN';
}
