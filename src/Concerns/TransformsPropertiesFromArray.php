<?php

namespace TwoJays\NeonApiWrapper\Concerns;

use ReflectionClass;

trait TransformsPropertiesFromArray
{
    public static function fromArray(array $data): self
    {
        return self::instantiateObject(self::class, $data);
    }

    public static function instantiateObject(string $className, array $data)
    {
        $reflectionClass = new ReflectionClass($className);
        $constructor = $reflectionClass->getConstructor();
        $parameters = $constructor->getParameters();
        $args = [];
    
        foreach ($parameters as $parameter) {
            $paramName = $parameter->getName();

            if(!empty($data[$paramName])) {
                $paramType = $parameter->getType();
        
                if ($paramType && !$paramType->isBuiltin()) {
                    $paramClassName = $paramType->getName();
                    $args[] = self::instantiateObject($paramClassName, $data[$paramName]);
                } else {
                    $args[] = $data[$paramName];
                }
            } else {
                $args[] = null;
            }
        }
    
        return $reflectionClass->newInstanceArgs($args);
    }
}