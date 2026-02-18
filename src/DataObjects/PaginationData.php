<?php

namespace TwoJays\NeonApiWrapper\DataObjects;

use TwoJays\NeonApiWrapper\Data;

class PaginationData extends Data
{
    public function __construct(
        public ?int $currentPage = null,
        public ?int $pageSize = null,
        public ?string $sortColumn = null,
        public ?string $sortDirection = null,
        public ?int $totalPages = null,
        public ?int $totalResults = null
    ) {}
}
