<?php

namespace TwoJays\NeonApiWrapper\Concerns;

use ReflectionProperty;
use TwoJays\NeonApiWrapper\Attributes\RequestBodyParam;
use TwoJays\NeonApiWrapper\Contracts\DataObject;
use TwoJays\NeonApiWrapper\Exceptions\InvalidPropertyTypeException;

trait HasRequestBodyParam
{
    public function getBody(): array
    {
        $properties = get_object_vars($this);

        $properties = array_filter(
            array_keys($properties),
            function (string $property) {
                $reflectionProperty = new ReflectionProperty($this, $property);
                return !empty($reflectionProperty->getAttributes(RequestBodyParam::class));
            }
        );

        $bodyParam = array_shift($properties);

        if(is_subclass_of($bodyParam, DataObject::class)) {
            throw new InvalidPropertyTypeException($bodyParam, DataObject::class);
        }

        return [$bodyParam => $this->$bodyParam->toArray()];
    }
}