<?php

namespace TwoJays\NeonApiWrapper\Enums;

enum SubMembershipChangeTypeEnum: string {
    case UNCHANGED = 'UNCHANGED';
    case UPGRADED = 'UPGRADED';
    case DOWNGRADED = 'DOWNGRADED';
}
