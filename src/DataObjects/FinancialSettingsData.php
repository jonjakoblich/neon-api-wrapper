<?php

namespace TwoJays\NeonApiWrapper\DataObjects;

use TwoJays\NeonApiWrapper\Data;

class FinancialSettingsData extends Data
{
    public function __construct(
        public string $feeType,
        public AdmissionFeeData $admissionFee,
        public TicketsPerRegistrationData $ticketsPerRegistration,
        public IdNamePairData $fund,
        public TaxDeductiblePortionData $taxDeductiblePortion,
        public FinancialSettingsDonationsData $donations
    ) {}
}
