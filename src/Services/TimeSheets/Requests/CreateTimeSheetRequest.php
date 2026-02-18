<?php

namespace TwoJays\NeonApiWrapper\Services\TimeSheets\Requests;

use TwoJays\NeonApiWrapper\Attributes\RequestBodyParam;
use TwoJays\NeonApiWrapper\Concerns\ExecutesRequests;
use TwoJays\NeonApiWrapper\Concerns\HasRequestBodyParam;
use TwoJays\NeonApiWrapper\Concerns\TimeSheetsEndpoint;
use TwoJays\NeonApiWrapper\Contracts\PostRequest;
use TwoJays\NeonApiWrapper\Contracts\WithRequestBodyParam;
use TwoJays\NeonApiWrapper\DataObjects\TimeSheetData;

class CreateTimeSheetRequest implements PostRequest, WithRequestBodyParam
{
    use TimeSheetsEndpoint, ExecutesRequests, HasRequestBodyParam;

    public function __construct(
        #[RequestBodyParam]
        public TimeSheetData $timeSheet,
    ){
        $this->setEndpoint();
    }
}
