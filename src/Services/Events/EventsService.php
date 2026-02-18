<?php

namespace TwoJays\NeonApiWrapper\Services\Events;

use TwoJays\NeonApiWrapper\DataObjects;
use TwoJays\NeonApiWrapper\Services\BaseService;

class EventsService extends BaseService
{
    public function listEvents(
        ?bool $archived = null,
        ?int $currentPage = 0,
        ?string $endDateAfter = null,
        ?string $endDateBefore = null,
        ?string $eventCategory = null,
        ?string $eventId = null,
        ?string $eventName = null,
        ?int $pageSize = 20,
        ?bool $publishedEvent = null,
        ?string $startDateAfter = null,
        ?string $startDateBefore = null,
    ): DataObjects\EventSearchResultData
    {
        return $this->getResponse(
            new Requests\ListEventsRequest(...func_get_args()),
            DataObjects\EventSearchResultData::class
        );
    }

    public function createEvent(
        DataObjects\EventData $event
    ): DataObjects\IdResultData
    {
        return $this->getResponse(
            new Requests\CreateEventRequest($event),
            DataObjects\IdResultData::class
        );
    }

    /**
     * This returns an array in order to match the API specification.
     */
    public function getCategories(): array
    {
        return $this->getResponse(
            new Requests\GetEventCategoriesRequest(),
            DataObjects\EventCategoryListData::class
        )->toArray();
    }

    public function searchEvents(
        DataObjects\SearchRequestData $searchRequest
    ): DataObjects\SearchResponseData
    {
        return $this->getResponse(
            new Requests\SearchEventsRequest($searchRequest),
            DataObjects\SearchResponseData::class
        );
    }

    public function getSearchOutputFields(
        ?string $searchKey = null
    ): DataObjects\OutputFieldsData
    {
        return $this->getResponse(
            new Requests\GetEventSearchOutputFieldsRequest($searchKey),
            DataObjects\OutputFieldsData::class
        );
    }

    public function getSearchFields(
        ?string $searchKey = null
    ): DataObjects\SearchFieldsData
    {
        return $this->getResponse(
            new Requests\GetEventSearchFieldsRequest($searchKey),
            DataObjects\SearchFieldsData::class
        );
    }

    public function getEvent(
        string $id
    ): DataObjects\EventData
    {
        return $this->getResponse(
            new Requests\GetEventRequest($id),
            DataObjects\EventData::class
        );
    }

    public function updateEvent(
        string $id,
        DataObjects\EventData $event,
    ): DataObjects\IdResultData
    {
        return $this->getResponse(
            new Requests\UpdateEventRequest(...func_get_args()),
            DataObjects\IdResultData::class
        );
    }

    public function deleteEvent(
        string $id
    ): DataObjects\EmptyData
    {
        return $this->getResponse(
            new Requests\DeleteEventRequest($id),
            DataObjects\EmptyData::class
        );
    }

    public function patchEvent(
        string $id,
        DataObjects\EventData $event,
    ): DataObjects\IdResultData
    {
        return $this->getResponse(
            new Requests\PatchEventRequest(...func_get_args()),
            DataObjects\IdResultData::class
        );
    }

    public function getEventAttendees(
        string $id,
        ?int $currentPage = 0,
    ): DataObjects\EventAttendeesData
    {
        return $this->getResponse(
            new Requests\GetEventAttendeesRequest(...func_get_args()),
            DataObjects\EventAttendeesData::class
        );
    }

    /**
     * This returns an array in order to match the API specification.
     */
    public function listEventTickets(
        string $id
    ): array
    {
        return $this->getResponse(
            new Requests\ListEventTicketsRequest($id),
            DataObjects\EventTicketListData::class
        )->toArray();
    }

    public function createEventTicket(
        string $id,
        DataObjects\EventTicketData $ticket,
    ): DataObjects\EmptyData
    {
        return $this->getResponse(
            new Requests\CreateEventTicketRequest(...func_get_args()),
            DataObjects\EmptyData::class
        );
    }

    public function getEventTicket(
        string $id,
        string $ticketId,
    ): DataObjects\EventTicketData
    {
        return $this->getResponse(
            new Requests\GetEventTicketRequest(...func_get_args()),
            DataObjects\EventTicketData::class
        );
    }

    public function updateEventTicket(
        string $id,
        string $ticketId,
        DataObjects\EventTicketData $ticket,
    ): DataObjects\EmptyData
    {
        return $this->getResponse(
            new Requests\UpdateEventTicketRequest(...func_get_args()),
            DataObjects\EmptyData::class
        );
    }

    public function deleteEventTicket(
        string $id,
        string $ticketId,
    ): DataObjects\EmptyData
    {
        return $this->getResponse(
            new Requests\DeleteEventTicketRequest(...func_get_args()),
            DataObjects\EmptyData::class
        );
    }

    public function patchEventTicket(
        string $id,
        string $ticketId,
        DataObjects\EventTicketData $ticket,
    ): DataObjects\EmptyData
    {
        return $this->getResponse(
            new Requests\PatchEventTicketRequest(...func_get_args()),
            DataObjects\EmptyData::class
        );
    }
}
