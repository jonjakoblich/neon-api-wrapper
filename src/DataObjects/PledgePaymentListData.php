<?php

namespace TwoJays\NeonApiWrapper\DataObjects;

use ArrayObject;
use TwoJays\NeonApiWrapper\Contracts\DataObject;
use TwoJays\NeonApiWrapper\Factories\DtoFactory;

class PledgePaymentListData extends ArrayObject implements DataObject
{
    public function toArray(): array
    {
        $array = [];

        foreach($this as $key => $value) {
            $array[$key] = DtoFactory::create($value, PledgePaymentData::class);
        }

        return $array;
    }
}
