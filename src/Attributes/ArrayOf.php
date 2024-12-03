<?php

namespace TwoJays\NeonApiWrapper\Attributes;

use Attribute;
use TwoJays\NeonApiWrapper\Contracts\PropertyTransformer;
use TwoJays\NeonApiWrapper\Factories\DtoFactory;

#[Attribute(Attribute::TARGET_PARAMETER)]
class ArrayOf implements PropertyTransformer
{
    public function __construct(
        public readonly string $className,
    ){}
    
    public function transform(mixed $data): mixed
    {
        return array_map(function(array $classParams){
            $instantiateDataObject = new DtoFactory($this->className, $classParams);
            return $instantiateDataObject();
        }, $data);
    }
}