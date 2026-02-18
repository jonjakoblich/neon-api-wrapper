<?php

namespace TwoJays\NeonApiWrapper\Services\Webhooks;

use TwoJays\NeonApiWrapper\DataObjects;
use TwoJays\NeonApiWrapper\Services\BaseService;

class WebhooksService extends BaseService
{
    /**
     * This returns an array in order to match the API specification.
     */
    public function listWebhooks(): array
    {
        return $this->getResponse(
            new Requests\ListWebhooksRequest(),
            DataObjects\WebhookListData::class
        )->toArray();
    }

    public function createWebhook(
        DataObjects\WebhookData $webhook
    ): DataObjects\IdResultData
    {
        return $this->getResponse(
            new Requests\CreateWebhookRequest($webhook),
            DataObjects\IdResultData::class
        );
    }

    public function getWebhook(
        string $id
    ): DataObjects\WebhookData
    {
        return $this->getResponse(
            new Requests\GetWebhookRequest($id),
            DataObjects\WebhookData::class
        );
    }

    public function updateWebhook(
        string $id,
        DataObjects\WebhookData $webhook,
    ): DataObjects\EmptyData
    {
        return $this->getResponse(
            new Requests\UpdateWebhookRequest(...func_get_args()),
            DataObjects\EmptyData::class
        );
    }

    public function deleteWebhook(
        string $id
    ): DataObjects\EmptyData
    {
        return $this->getResponse(
            new Requests\DeleteWebhookRequest($id),
            DataObjects\EmptyData::class
        );
    }

    public function patchWebhook(
        string $id,
        DataObjects\WebhookData $webhook,
    ): DataObjects\EmptyData
    {
        return $this->getResponse(
            new Requests\PatchWebhookRequest(...func_get_args()),
            DataObjects\EmptyData::class
        );
    }
}
