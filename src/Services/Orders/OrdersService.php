<?php

namespace TwoJays\NeonApiWrapper\Services\Orders;

use TwoJays\NeonApiWrapper\DataObjects;
use TwoJays\NeonApiWrapper\Services\BaseService;

class OrdersService extends BaseService
{
    public function createOrder(
        DataObjects\OrderData $order
    ): DataObjects\OrderResponseData
    {
        return $this->getResponse(
            new Requests\CreateOrderRequest($order),
            DataObjects\OrderResponseData::class
        );
    }

    public function calculateOrder(
        DataObjects\OrderData $order
    ): DataObjects\OrderCalculationResultData
    {
        return $this->getResponse(
            new Requests\CalculateOrderRequest($order),
            DataObjects\OrderCalculationResultData::class
        );
    }

    public function searchOrders(
        DataObjects\SearchRequestData $searchRequest
    ): DataObjects\SearchResponseData
    {
        return $this->getResponse(
            new Requests\SearchOrdersRequest($searchRequest),
            DataObjects\SearchResponseData::class
        );
    }

    public function getSearchOutputFields(
        ?string $searchKey = null
    ): DataObjects\OutputFieldsData
    {
        return $this->getResponse(
            new Requests\GetOrderSearchOutputFieldsRequest($searchKey),
            DataObjects\OutputFieldsData::class
        );
    }

    public function getSearchFields(
        ?string $searchKey = null
    ): DataObjects\SearchFieldsData
    {
        return $this->getResponse(
            new Requests\GetOrderSearchFieldsRequest($searchKey),
            DataObjects\SearchFieldsData::class
        );
    }

    /**
     * This returns an array in order to match the API specification.
     */
    public function getShippingMethods(
        DataObjects\ShippingMethodRequestData $request
    ): array
    {
        return $this->getResponse(
            new Requests\GetShippingMethodsRequest($request),
            DataObjects\ShippingMethodResponseListData::class
        )->toArray();
    }

    public function getOrder(
        string $id
    ): DataObjects\OrderData
    {
        return $this->getResponse(
            new Requests\GetOrderRequest($id),
            DataObjects\OrderData::class
        );
    }

    public function deleteOrder(
        string $id
    ): DataObjects\EmptyData
    {
        return $this->getResponse(
            new Requests\DeleteOrderRequest($id),
            DataObjects\EmptyData::class
        );
    }

    public function addPayment(
        string $orderId,
        DataObjects\PaymentData $payment,
    ): DataObjects\PaymentResponseData
    {
        return $this->getResponse(
            new Requests\AddOrderPaymentRequest(...func_get_args()),
            DataObjects\PaymentResponseData::class
        );
    }
}
