<?php

namespace TwoJays\NeonApiWrapper\Enums;

enum ConsentEmailEnum: string {
    case GIVEN = 'GIVEN';
    case DECLINED = 'DECLINED';
    case NOT_ASKED = 'NOT_ASKED';
}
