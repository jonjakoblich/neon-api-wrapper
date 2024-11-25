<?php

namespace TwoJays\NeonApiWrapper\Contracts;

interface PropertyTransformer
{
    public function transform(mixed $data): mixed;
}