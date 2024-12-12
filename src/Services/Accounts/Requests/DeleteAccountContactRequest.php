<?php

namespace TwoJays\NeonApiWrapper\Services\Accounts\Requests;

use TwoJays\NeonApiWrapper\Attributes\PathParam;
use TwoJays\NeonApiWrapper\Concerns\AccountsEndpoint;
use TwoJays\NeonApiWrapper\Concerns\ExecutesRequests;
use TwoJays\NeonApiWrapper\Concerns\HasPathParams;
use TwoJays\NeonApiWrapper\Contracts\DeleteRequest;
use TwoJays\NeonApiWrapper\Contracts\WithPathParams;

class DeleteAccountContactRequest implements DeleteRequest, WithPathParams
{
    use AccountsEndpoint, ExecutesRequests, HasPathParams;

    public function __construct(
        #[PathParam]
        public string $contactId,
        #[PathParam]
        public string $id,
    )
    {
        $this->setEndpoint();
    }

    public function setEndpoint(): void
    {
        $this->endpoint = $this::ENDPOINT_BASE . '/{id}/contacts/{contactId}';
    }
}