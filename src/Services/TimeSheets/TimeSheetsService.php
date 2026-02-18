<?php

namespace TwoJays\NeonApiWrapper\Services\TimeSheets;

use TwoJays\NeonApiWrapper\DataObjects;
use TwoJays\NeonApiWrapper\Services\BaseService;

class TimeSheetsService extends BaseService
{
    public function listTimeSheets(
        ?int $pageSize = null,
        ?int $currentPage = null,
        ?string $ids = null,
        ?string $accountIds = null,
        ?string $projectIds = null,
        ?string $volunteerGroups = null,
        ?string $roleIds = null,
        ?string $shiftIds = null,
        ?array $statusList = null,
    ): DataObjects\TimeSheetSearchResultData
    {
        return $this->getResponse(
            new Requests\ListTimeSheetsRequest(...func_get_args()),
            DataObjects\TimeSheetSearchResultData::class
        );
    }

    public function createTimeSheet(
        DataObjects\TimeSheetData $timeSheet
    ): DataObjects\IdResultData
    {
        return $this->getResponse(
            new Requests\CreateTimeSheetRequest($timeSheet),
            DataObjects\IdResultData::class
        );
    }

    public function getTimeSheet(
        string $id
    ): DataObjects\TimeSheetData
    {
        return $this->getResponse(
            new Requests\GetTimeSheetRequest($id),
            DataObjects\TimeSheetData::class
        );
    }

    public function updateTimeSheet(
        string $id,
        DataObjects\TimeSheetData $timeSheet,
    ): DataObjects\IdResultData
    {
        return $this->getResponse(
            new Requests\UpdateTimeSheetRequest(...func_get_args()),
            DataObjects\IdResultData::class
        );
    }

    public function deleteTimeSheet(
        string $id
    ): DataObjects\EmptyData
    {
        return $this->getResponse(
            new Requests\DeleteTimeSheetRequest($id),
            DataObjects\EmptyData::class
        );
    }

    public function patchTimeSheet(
        string $id,
        DataObjects\TimeSheetData $timeSheet,
    ): DataObjects\IdResultData
    {
        return $this->getResponse(
            new Requests\PatchTimeSheetRequest(...func_get_args()),
            DataObjects\IdResultData::class
        );
    }
}
