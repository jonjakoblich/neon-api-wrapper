<?php

namespace TwoJays\NeonApiWrapper\Enums;

enum DonationAnonymousTypeEnum: string {
    case FALSE = 'False';
    case DONORNAMEANONYMOUS = 'DonorNameAnonymous';
    case DONATIONAMOUNTANONYMOUS = 'DonationAmountAnonymous';
}
