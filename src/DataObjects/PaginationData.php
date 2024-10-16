<?php

namespace TwoJays\NeonApiWrapper\DataObjects;

class PaginationData
{
    public function __construct(
        public int $currentPage,
        public int $pageSize,
        public string $sortColumn,
        public string $sortDirection,
        public int $totalPages,
        public int $totalResults
    ) {}
}
