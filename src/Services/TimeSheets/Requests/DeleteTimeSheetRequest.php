<?php

namespace TwoJays\NeonApiWrapper\Services\TimeSheets\Requests;

use TwoJays\NeonApiWrapper\Attributes\PathParam;
use TwoJays\NeonApiWrapper\Concerns\ExecutesRequests;
use TwoJays\NeonApiWrapper\Concerns\HasPathParams;
use TwoJays\NeonApiWrapper\Concerns\TimeSheetsEndpoint;
use TwoJays\NeonApiWrapper\Contracts\DeleteRequest;
use TwoJays\NeonApiWrapper\Contracts\WithPathParams;

class DeleteTimeSheetRequest implements DeleteRequest, WithPathParams
{
    use TimeSheetsEndpoint, ExecutesRequests, HasPathParams;

    public function __construct(
        #[PathParam]
        public string $id,
    ){
        $this->setEndpoint();
    }

    public function setEndpoint(): void
    {
        $this->endpoint = $this::ENDPOINT_BASE . '/{id}';
    }
}
