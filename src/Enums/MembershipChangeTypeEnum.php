<?php

namespace TwoJays\NeonApiWrapper\Enums;

enum MembershipChangeTypeEnum: string {
    case UNCHANGED = 'UNCHANGED';
    case UPGRADED = 'UPGRADED';
    case DOWNGRADED = 'DOWNGRADED';
}
