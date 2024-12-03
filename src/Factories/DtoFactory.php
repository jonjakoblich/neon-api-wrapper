<?php

namespace TwoJays\NeonApiWrapper\Factories;

use ReflectionClass;
use ReflectionParameter;
use TwoJays\NeonApiWrapper\Contracts\DataObject;
use TwoJays\NeonApiWrapper\Exceptions\InvalidReturnTypeException;

class DtoFactory
{
    public static function create(array $response, string $returnType): DataObject
    {
        if(!is_subclass_of($returnType, DataObject::class))
            throw new InvalidReturnTypeException;

        return self::instantiateDataObject($returnType, $response);
    }

    private static function instantiateDataObject(string $className, array $data)
    {
        $reflectionClass = new ReflectionClass($className);
        $constructor = $reflectionClass->getConstructor();
        $parameters = $constructor->getParameters();
        $args = [];
    
        foreach ($parameters as $parameter) {
            $paramName = $parameter->getName();

            if(!empty($data[$paramName])) {
                $paramType = $parameter->getType();
                
                /** @todo handle parameter attributes */
                $paramData = self::processAttributes($parameter, $data[$paramName]);
        
                if ($paramType && !$paramType->isBuiltin()) {
                    $paramClassName = $paramType->getName();
                    $args[] = self::instantiateDataObject($paramClassName, $paramData);
                } else {
                    $args[] = $paramData;
                }
            } else {
                $args[] = null;
            }
        }

        /** @todo handle class creation errors */
    
        return $reflectionClass->newInstanceArgs($args);
    }

    private static function processAttributes(ReflectionParameter $parameter, mixed $data): mixed
    {
        if(empty($parameter->getAttributes()))
            return $data;

        $transformedData = null;

        foreach($parameter->getAttributes() as $attribute) {
            $transformedData = $attribute->newInstance()->transform($data);
        }

        return $transformedData;
    }
}