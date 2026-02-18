<?php

namespace TwoJays\NeonApiWrapper\DataObjects;

use TwoJays\NeonApiWrapper\Attributes\ArrayOf;
use TwoJays\NeonApiWrapper\Data;

class ProductData extends Data
{
    public function __construct(
        #[ArrayOf(CatalogData::class)]
        public ?array $catalogs = null,
        public ?string $id = null,
        public ?CategoryData $category = null,
        public ?string $name = null,
        public ?string $code = null,
        public ?string $status = null,
        public ?string $keyword = null,
        public ?string $description = null,
        public ?float $unitPrice = null,
        public ?string $downloadURL = null,
        public ?bool $isApplyOnSiteTax = null,
        public ?bool $isFrontEndDisplay = null,
        public ?ProductShippingData $shipping = null,
        public ?float $priceOffDiscount = null,
        public ?bool $isDiscountInPercentage = null,
        public ?bool $hasOptions = null,
        public ?string $priceOffDiscountStartDate = null,
        public ?string $priceOffDiscountEndDate = null,
        #[ArrayOf(ProductImageData::class)]
        public ?array $images = null,
        #[ArrayOf(ProductOptionData::class)]
        public ?array $options = null,
        #[ArrayOf(CustomFieldData::class)]
        public ?array $customFields = null,
        public ?CraInfoData $craInfo = null,
        public ?TaxDeducibleInfoData $taxDeductibleInfo = null
    ) {}
}
