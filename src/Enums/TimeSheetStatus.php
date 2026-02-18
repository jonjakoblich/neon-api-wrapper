<?php

namespace TwoJays\NeonApiWrapper\Enums;

enum TimeSheetStatus: string {
    case StillWorking = 'StillWorking';
    case Pending = 'Pending';
    case Approved = 'Approved';
}
