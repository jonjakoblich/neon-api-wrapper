<?php

namespace TwoJays\NeonApiWrapper\Concerns;

use ReflectionProperty;
use TwoJays\NeonApiWrapper\Attributes\PathParam;

trait HasQueryParams
{
    /**
     * @return array Non empty object properties without the PathParam attribute
     */
    public function getQueryParams(): array
    {
        $properties = get_object_vars($this);

        return array_filter(
            array_keys($properties), 
            function (string $property) {
                $reflectionProperty = new ReflectionProperty($this, $property);
                return empty($reflectionProperty->getAttributes(PathParam::class));
            }
        );
    }
}