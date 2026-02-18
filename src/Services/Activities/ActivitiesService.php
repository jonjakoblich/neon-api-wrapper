<?php

namespace TwoJays\NeonApiWrapper\Services\Activities;

use TwoJays\NeonApiWrapper\DataObjects;
use TwoJays\NeonApiWrapper\Services\BaseService;

class ActivitiesService extends BaseService
{
    public function createActivity(
        DataObjects\ActivityData $activity
    ): DataObjects\IdResultData
    {
        return $this->getResponse(
            new Requests\CreateActivityRequest($activity),
            DataObjects\IdResultData::class
        );
    }

    public function getActivity(
        string $id
    ): DataObjects\ActivityData
    {
        return $this->getResponse(
            new Requests\GetActivityRequest($id),
            DataObjects\ActivityData::class
        );
    }

    public function updateActivity(
        string $id,
        DataObjects\ActivityData $activity,
    ): DataObjects\IdResultData
    {
        return $this->getResponse(
            new Requests\UpdateActivityRequest(...func_get_args()),
            DataObjects\IdResultData::class
        );
    }

    public function deleteActivity(
        string $id
    ): DataObjects\IdResultData
    {
        return $this->getResponse(
            new Requests\DeleteActivityRequest($id),
            DataObjects\IdResultData::class
        );
    }

    public function patchActivity(
        string $id,
        DataObjects\ActivityData $activity,
    ): DataObjects\IdResultData
    {
        return $this->getResponse(
            new Requests\PatchActivityRequest(...func_get_args()),
            DataObjects\IdResultData::class
        );
    }

    public function searchActivities(
        DataObjects\SearchRequestData $searchRequest
    ): DataObjects\SearchResponseData
    {
        return $this->getResponse(
            new Requests\SearchActivitiesRequest($searchRequest),
            DataObjects\SearchResponseData::class
        );
    }

    public function getSearchOutputFields(
        ?string $searchKey = null
    ): DataObjects\OutputFieldsData
    {
        return $this->getResponse(
            new Requests\GetSearchOutputFieldsRequest($searchKey),
            DataObjects\OutputFieldsData::class
        );
    }

    public function getSearchFields(
        ?string $searchKey = null
    ): DataObjects\SearchFieldsData
    {
        return $this->getResponse(
            new Requests\GetSearchFieldsRequest($searchKey),
            DataObjects\SearchFieldsData::class
        );
    }
}
