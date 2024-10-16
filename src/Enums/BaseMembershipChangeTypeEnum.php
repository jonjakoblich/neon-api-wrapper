<?php

namespace TwoJays\NeonApiWrapper\Enums;

enum BaseMembershipChangeTypeEnum: string {
    case UNCHANGED = 'UNCHANGED';
    case UPGRADED = 'UPGRADED';
    case DOWNGRADED = 'DOWNGRADED';
}
