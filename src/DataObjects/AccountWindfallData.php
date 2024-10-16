<?php

namespace TwoJays\NeonApiWrapper\DataObjects;

class AccountWindfallData
{
    public function __construct(
        public string $id,
        public string $windfall_id,
        public float $net_worth,
        public float $low_confidence_net_worth,
        public float $high_confidence_net_worth,
        public string $net_worth_last_calculated,
        public bool $recent_mover,
        public bool $recently_divorced,
        public bool $recent_death_in_family,
        public string $political_affiliation,
        public bool $political_donor,
        public bool $boat_owner,
        public bool $plane_owner,
        public bool $small_business_owner,
        public bool $philanthropic_giver,
        public array $philanthropic_cause,
        public array $philanthropic_focus,
        public bool $multi-property_owner,
        public bool $foundation_association,
        public bool $foundation_officer,
        public bool $trust_association,
        public bool $nonprofit_board_member,
        public bool $top_political_donor,
        public float $match_confidence,
        public bool $sec_money_in_motion,
        public bool $liquidity_trigger,
        public bool $luxury_car_owner,
        public bool $imported_car_owner,
        public bool $recent_mortgage,
        public bool $primary_address_incorrect
    ) {}
}
