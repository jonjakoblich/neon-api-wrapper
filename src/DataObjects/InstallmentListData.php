<?php

namespace TwoJays\NeonApiWrapper\DataObjects;

use ArrayObject;
use TwoJays\NeonApiWrapper\Contracts\DataObject;
use TwoJays\NeonApiWrapper\Factories\DtoFactory;

class InstallmentListData extends ArrayObject implements DataObject
{
    public function toArray(): array
    {
        $array = [];

        foreach($this as $key => $value) {
            $array[$key] = DtoFactory::create($value, InstallmentData::class);
        }

        return $array;
    }
}
