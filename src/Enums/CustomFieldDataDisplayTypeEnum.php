<?php

namespace TwoJays\NeonApiWrapper\Enums;

enum CustomFieldDataDisplayTypeEnum: string {
    case CHECKBOX = 'Checkbox';
    case DROPDOWN = 'Dropdown';
    case ONELINETEXT = 'OneLineText';
    case MULTILINETEXT = 'MultiLineText';
    case PASSWORD = 'Password';
    case RADIO = 'Radio';
    case FILE = 'File';
    case ACCOUNT = 'Account';
}
