<?php

namespace TwoJays\NeonApiWrapper\DataObjects;

use TwoJays\NeonApiWrapper\Attributes\ArrayOf;
use TwoJays\NeonApiWrapper\Data;

class ProductItemData extends Data
{
    public function __construct(
        public ?string $productId = null,
        public ?float $unitPrice = null,
        #[ArrayOf(ProductOptionSelectionData::class)]
        public ?array $optionSelections = [],
        public ?int $quantity = null,
        public ?bool $sendAcknowledgeEmail = null,
        public ?CraInfoData $craInfo = null,
        public ?TaxDeducibleInfoData $taxDeductibleInfo = null
    ) {}
}
