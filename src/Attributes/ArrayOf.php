<?php

namespace TwoJays\NeonApiWrapper\Attributes;

use Attribute;
use TwoJays\NeonApiWrapper\Contracts\PropertyTransformer;

#[Attribute(Attribute::TARGET_PARAMETER)]
class ArrayOf implements PropertyTransformer
{
    public function __construct(
        public readonly string $className,
    ){}
    
    public function transform(mixed $data): mixed
    {
        return array_map(fn($item) => new $this->className(...$item), $data);
    }
}