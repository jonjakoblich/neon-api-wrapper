<?php

namespace TwoJays\NeonApiWrapper\DataObjects;

use TwoJays\NeonApiWrapper\Data;

class AccountWindfallData extends Data
{
    public function __construct(
        public ?string $id = null,
        public ?string $windfall_id = null,
        public ?float $net_worth = null,
        public ?float $low_confidence_net_worth = null,
        public ?float $high_confidence_net_worth = null,
        public ?string $net_worth_last_calculated = null,
        public ?bool $recent_mover = null,
        public ?bool $recently_divorced = null,
        public ?bool $recent_death_in_family = null,
        public ?string $political_affiliation = null,
        public ?bool $political_donor = null,
        public ?bool $boat_owner = null,
        public ?bool $plane_owner = null,
        public ?bool $small_business_owner = null,
        public ?bool $philanthropic_giver = null,
        public ?array $philanthropic_cause = null,
        public ?array $philanthropic_focus = null,
        public ?bool $multi_property_owner = null,
        public ?bool $foundation_association = null,
        public ?bool $foundation_officer = null,
        public ?bool $trust_association = null,
        public ?bool $nonprofit_board_member = null,
        public ?bool $top_political_donor = null,
        public ?float $match_confidence = null,
        public ?bool $sec_money_in_motion = null,
        public ?bool $liquidity_trigger = null,
        public ?bool $luxury_car_owner = null,
        public ?bool $imported_car_owner = null,
        public ?bool $recent_mortgage = null,
        public ?bool $primary_address_incorrect = null
    ) {}
}
