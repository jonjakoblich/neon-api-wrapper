<?php

namespace TwoJays\NeonApiWrapper;

use TwoJays\NeonApiWrapper\Concerns\TransformsPropertiesFromArray;
use TwoJays\NeonApiWrapper\Contracts\DataObject;

abstract class Data implements DataObject
{
    use TransformsPropertiesFromArray;
}