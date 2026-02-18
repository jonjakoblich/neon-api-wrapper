<?php

namespace TwoJays\NeonApiWrapper\DataObjects;

use TwoJays\NeonApiWrapper\Data;

class FinancialSettingsData extends Data
{
    public function __construct(
        public ?string $feeType = null,
        public ?AdmissionFeeData $admissionFee = null,
        public ?TicketsPerRegistrationData $ticketsPerRegistration = null,
        public ?IdNamePairData $fund = null,
        public ?TaxDeductiblePortionData $taxDeductiblePortion = null,
        public ?FinancialSettingsDonationsData $donations = null
    ) {}
}
