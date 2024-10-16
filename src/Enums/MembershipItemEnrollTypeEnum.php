<?php

namespace TwoJays\NeonApiWrapper\Enums;

enum MembershipItemEnrollTypeEnum: string {
    case JOIN = 'JOIN';
    case RENEW = 'RENEW';
    case REJOIN = 'REJOIN';
}
