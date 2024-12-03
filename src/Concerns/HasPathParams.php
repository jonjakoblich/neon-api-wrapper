<?php

namespace TwoJays\NeonApiWrapper\Concerns;

use ReflectionProperty;
use TwoJays\NeonApiWrapper\Attributes\PathParam;

trait HasPathParams
{
    /**
     * @return array Non empty object properties without the PathParam attribute
     */
    public function getPathParams(): array
    {
        $properties = get_object_vars($this);

        return array_filter(
            array_keys($properties), 
            function (string $property) {
                $reflectionProperty = new ReflectionProperty($this, $property);
                return !empty($reflectionProperty->getAttributes(PathParam::class));
            }
        );
    }

    /**
     * Replace curly brace notation with key matched parameters
     */
    private function parameterizeEndpoint(): void
    {
        $pathParams = $this->getPathParams();

        foreach ($pathParams as $param) {
            $this->endpoint = str_replace('{' . $param . '}', $this->$param, $this->getEndpoint());
        }
    }
}