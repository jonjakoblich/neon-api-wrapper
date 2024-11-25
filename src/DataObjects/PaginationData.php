<?php

namespace TwoJays\NeonApiWrapper\DataObjects;

use TwoJays\NeonApiWrapper\Data;

class PaginationData extends Data
{
    public function __construct(
        public int $currentPage,
        public int $pageSize,
        public ?string $sortColumn,
        public ?string $sortDirection,
        public int $totalPages,
        public int $totalResults
    ) {}
}
