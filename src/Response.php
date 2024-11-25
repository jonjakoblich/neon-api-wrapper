<?php

namespace TwoJays\NeonApiWrapper;

use TwoJays\NeonApiWrapper\Contracts\DataObject;
use TwoJays\NeonApiWrapper\Contracts\NeonApiRequest;
use TwoJays\NeonApiWrapper\Contracts\NeonApiResponse;

class Response implements NeonApiResponse
{
    public function __construct(
        public readonly DataObject $data,
        public readonly NeonApiRequest $request,
    ){}

    public function hasPages(): bool
    {
        return isset($this->data->pagination);
    }   
}