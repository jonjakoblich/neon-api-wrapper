<?php

namespace TwoJays\NeonApiWrapper\Attributes;

use Attribute;
use TwoJays\NeonApiWrapper\Contracts\PropertyTransformer;
use TwoJays\NeonApiWrapper\TransformToResponse;

#[Attribute(Attribute::TARGET_PARAMETER)]
class ArrayOf implements PropertyTransformer
{
    public function __construct(
        public readonly string $className,
    ){}
    
    public function transform(mixed $data): mixed
    {
        return array_map(function(array $classParams){
            $transformData = new TransformToResponse($this->className, $classParams);
            return $transformData();
        }, $data);
    }
}