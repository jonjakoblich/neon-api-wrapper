<?php

namespace TwoJays\NeonApiWrapper\DataObjects;

use TwoJays\NeonApiWrapper\Data;

class ProductData extends Data
{
    public function __construct(
        public array $catalogs,
        public string $id,
        public CategoryData $category,
        public string $name,
        public string $code,
        public string $status,
        public string $keyword,
        public string $description,
        public float $unitPrice,
        public string $downloadURL,
        public bool $isApplyOnSiteTax,
        public bool $isFrontEndDisplay,
        public ProductShippingData $shipping,
        public float $priceOffDiscount,
        public bool $isDiscountInPercentage,
        public bool $hasOptions,
        public string $priceOffDiscountStartDate,
        public string $priceOffDiscountEndDate,
        public array $images,
        public array $options,
        public array $customFields,
        public CraInfoData $craInfo,
        public TaxDeducibleInfoData $taxDeductibleInfo
    ) {}
}
