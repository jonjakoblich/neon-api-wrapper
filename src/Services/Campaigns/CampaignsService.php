<?php

namespace TwoJays\NeonApiWrapper\Services\Campaigns;

use TwoJays\NeonApiWrapper\DataObjects;
use TwoJays\NeonApiWrapper\Services\BaseService;

class CampaignsService extends BaseService
{
    /**
     * This returns an array in order to match the API specification.
     */
    public function listCampaigns(): array
    {
        return $this->getResponse(
            new Requests\ListCampaignsRequest(),
            DataObjects\CampaignListData::class
        )->toArray();
    }

    public function createCampaign(
        DataObjects\CampaignData $campaign
    ): DataObjects\IdResultData
    {
        return $this->getResponse(
            new Requests\CreateCampaignRequest($campaign),
            DataObjects\IdResultData::class
        );
    }

    public function getCampaign(
        string $id
    ): DataObjects\CampaignData
    {
        return $this->getResponse(
            new Requests\GetCampaignRequest($id),
            DataObjects\CampaignData::class
        );
    }

    public function updateCampaign(
        string $id,
        DataObjects\CampaignData $campaign,
    ): DataObjects\EmptyData
    {
        return $this->getResponse(
            new Requests\UpdateCampaignRequest(...func_get_args()),
            DataObjects\EmptyData::class
        );
    }

    public function deleteCampaign(
        string $id
    ): DataObjects\EmptyData
    {
        return $this->getResponse(
            new Requests\DeleteCampaignRequest($id),
            DataObjects\EmptyData::class
        );
    }

    public function patchCampaign(
        string $id,
        DataObjects\CampaignData $campaign,
    ): DataObjects\EmptyData
    {
        return $this->getResponse(
            new Requests\PatchCampaignRequest(...func_get_args()),
            DataObjects\EmptyData::class
        );
    }

    public function getP2PFundraisers(
        string $id,
        ?int $currentPage = null,
        ?int $pageSize = null,
    ): DataObjects\EmptyData
    {
        return $this->getResponse(
            new Requests\GetP2PFundraisersRequest(...func_get_args()),
            DataObjects\EmptyData::class
        );
    }

    public function addFundraiser(
        string $id,
        DataObjects\CampaignFundraiserData $fundraiser,
    ): DataObjects\EmptyData
    {
        return $this->getResponse(
            new Requests\AddFundraiserRequest(...func_get_args()),
            DataObjects\EmptyData::class
        );
    }
}
