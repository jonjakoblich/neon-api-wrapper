<?php

namespace TwoJays\NeonApiWrapper\Enums;

enum MembershipItemChangeTypeEnum: string {
    case UNCHANGED = 'UNCHANGED';
    case UPGRADED = 'UPGRADED';
    case DOWNGRADED = 'DOWNGRADED';
}
