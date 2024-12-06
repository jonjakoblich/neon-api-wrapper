<?php

namespace TwoJays\NeonApiWrapper;

use TwoJays\NeonApiWrapper\Attributes\ArrayOf;
use TwoJays\NeonApiWrapper\Concerns\TransformsPropertiesFromArray;
use TwoJays\NeonApiWrapper\Contracts\Arrayable;
use TwoJays\NeonApiWrapper\Contracts\DataObject;

abstract class Data implements DataObject
{
    use TransformsPropertiesFromArray;

    public function toArray(): array {
        $array = [];
        foreach ($this as $key => $value) {
            if (is_subclass_of($value, Arrayable::class)) {
                $array[$key] = $value->toArray();
            } elseif (is_array($value)) {
                $array[$key] = $this->arrayToArray($value, $key);
            } else {
                $array[$key] = $value;
            }
        }
        return $array;
    }

    private function arrayToArray(array $array, string $property): array {
        $reflection = new \ReflectionClass($this);
        $constructor = $reflection->getConstructor();
        $parameters = $constructor->getParameters();

        foreach ($parameters as $parameter) {
            if ($parameter->getName() === $property) {
                $attributes = $parameter->getAttributes(ArrayOf::class);
                if (!empty($attributes)) {
                    $type = $attributes[0]->newInstance()->className;
                    return array_map(function ($item) use ($type) {
                        if (is_object($item) && $item instanceof $type) {
                            return $item->toArray();
                        }
                        return $item;
                    }, $array);
                }
            }
        }

        return $array;
    }
}