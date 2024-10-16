<?php

namespace TwoJays\NeonApiWrapper\Enums;

enum SearchCriteriaOperatorEnum: string {
    case EQUAL = 'EQUAL';
    case NOT_EQUAL = 'NOT_EQUAL';
    case BLANK = 'BLANK';
    case NOT_BLANK = 'NOT_BLANK';
    case LESS_THAN = 'LESS_THAN';
    case GREATER_THAN = 'GREATER_THAN';
    case LESS_AND_EQUAL = 'LESS_AND_EQUAL';
    case GREATER_AND_EQUAL = 'GREATER_AND_EQUAL';
    case IN_RANGE = 'IN_RANGE';
    case NOT_IN_RANGE = 'NOT_IN_RANGE';
    case CONTAIN = 'CONTAIN';
    case NOT_CONTAIN = 'NOT_CONTAIN';
}
