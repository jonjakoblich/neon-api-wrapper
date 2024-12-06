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
            $properties, 
            function (string $key) {
                $reflectionProperty = new ReflectionProperty($this, $key);

                return empty($reflectionProperty->getAttributes(PathParam::class)) && $key != 'endpoint' && !empty($reflectionProperty->getValue($this)); 
            },
            ARRAY_FILTER_USE_KEY
        );
    }
}