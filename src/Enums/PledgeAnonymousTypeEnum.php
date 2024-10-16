<?php

namespace TwoJays\NeonApiWrapper\Enums;

enum PledgeAnonymousTypeEnum: string {
    case FALSE = 'False';
    case DONORNAMEANONYMOUS = 'DonorNameAnonymous';
    case DONATIONAMOUNTANONYMOUS = 'DonationAmountAnonymous';
}
