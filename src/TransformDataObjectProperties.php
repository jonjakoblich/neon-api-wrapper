<?php

namespace TwoJays\NeonApiWrapper;

use ReflectionClass;
use ReflectionParameter;

class TransformDataObjectProperties
{
    public function __construct(
        public readonly string $className,
        public readonly array $data,
    ){}

    public function __invoke()
    {        
        return $this->instantiateDataObject($this->className, $this->data);
    }

    private function instantiateDataObject(string $className, array $data)
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
                $paramData = $this->processAttributes($parameter, $data[$paramName]);
        
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

    private function processAttributes(ReflectionParameter $parameter, mixed $data): mixed
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