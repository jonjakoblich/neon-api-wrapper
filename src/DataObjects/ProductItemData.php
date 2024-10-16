<?php

namespace TwoJays\NeonApiWrapper\DataObjects;

class ProductItemData
{
    public function __construct(
        public string $productId,
        public float $unitPrice,
        public array $optionSelections,
        public int $quantity,
        public bool $sendAcknowledgeEmail,
        public CraInfoData $craInfo,
        public TaxDeducibleInfoData $taxDeductibleInfo
    ) {}
}
