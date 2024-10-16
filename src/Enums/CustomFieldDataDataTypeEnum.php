<?php

namespace TwoJays\NeonApiWrapper\Enums;

enum CustomFieldDataDataTypeEnum: string {
    case INTEGER = 'Integer';
    case FLOAT = 'Float';
    case AMOUNT = 'Amount';
    case DATE = 'Date';
    case TIME = 'Time';
    case BOOLEAN = 'Boolean';
    case TEXT = 'Text';
    case EMAIL = 'Email';
    case PHONE = 'Phone';
    case AREA_CODE = 'Area_Code';
    case NAME = 'Name';
}
