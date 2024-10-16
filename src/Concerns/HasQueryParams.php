<?php

namespace TwoJays\NeonApiWrapper\Concerns;

trait HasQueryParams
{
    /**
     * @return array Non empty object properties which serve as query vars
     */
    public function getQueryParams(): array
    {
        return array_filter(
            get_object_vars($this),
            fn($property) => !empty($property)
        );
    }
}