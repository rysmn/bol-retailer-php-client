<?php

namespace Picqer\BolRetailer\Model;

// This class is auto generated by OpenApi\ModelGenerator
class OrderOrderItem extends AbstractModel
{
    /**
     * Returns the definition of the model: an associative array with field names as key and
     * field definition as value. The field definition contains of
     * model: Model class or null if it is a scalar type
     * array: Boolean whether it is an array
     * @return array The model definition
     */
    public function getModelDefinition(): array
    {
        return [
            'orderItemId' => [ 'model' => null, 'array' => false ],
            'cancellationRequest' => [ 'model' => null, 'array' => false ],
            'fulfilment' => [ 'model' => OrderFulfilment::class, 'array' => false ],
            'offer' => [ 'model' => OrderOffer::class, 'array' => false ],
            'product' => [ 'model' => OrderProduct::class, 'array' => false ],
            'quantity' => [ 'model' => null, 'array' => false ],
            'quantityShipped' => [ 'model' => null, 'array' => false ],
            'quantityCancelled' => [ 'model' => null, 'array' => false ],
            'unitPrice' => [ 'model' => null, 'array' => false ],
            'commission' => [ 'model' => null, 'array' => false ],
            'additionalServices' => [ 'model' => AdditionalService::class, 'array' => true ],
        ];
    }

    /**
     * @var string The id for the order item (1 order can have multiple order items).
     */
    public $orderItemId;

    /**
     * @var bool Indicates whether the order was cancelled on request of the customer before the retailer has shipped
     * it.
     */
    public $cancellationRequest;

    /**
     * @var OrderFulfilment
     */
    public $fulfilment;

    /**
     * @var OrderOffer
     */
    public $offer;

    /**
     * @var OrderProduct
     */
    public $product;

    /**
     * @var int Amount of ordered products for this order item id.
     */
    public $quantity;

    /**
     * @var int Amount of shipped products for this order item id.
     */
    public $quantityShipped;

    /**
     * @var int Amount of cancelled products for this order item id.
     */
    public $quantityCancelled;

    /**
     * @var float The selling price to the customer of a single unit including VAT.
     */
    public $unitPrice;

    /**
     * @var float The commission for all quantities of this order item.
     */
    public $commission;

    /**
     * @var AdditionalService[]
     */
    public $additionalServices = [];

    /**
     * Returns an array with the serviceTypes from additionalServices.
     * @return string[] ServiceTypes from additionalServices.
     */
    public function getAdditionalServicesServiceTypes(): array
    {
        return array_map(function ($model) {
            return $model->serviceType;
        }, $this->additionalServices);
    }

    /**
     * Sets additionalServices by an array of serviceTypes.
     * @param string[] $serviceTypes ServiceTypes for additionalServices.
     */
    public function setAdditionalServicesServiceTypes(array $serviceTypes): void
    {
        $this->additionalServices = array_map(function ($serviceType) {
            return AdditionalService::constructFromArray(['serviceType' => $serviceType]);
        }, $serviceTypes);
    }

    /**
     * Adds a new AdditionalService to additionalServices by serviceType.
     * @param string $serviceType ServiceType for the AdditionalService to add.
     */
    public function addAdditionalServicesServiceType(string $serviceType): void
    {
        $this->additionalServices[] = AdditionalService::constructFromArray(['serviceType' => $serviceType]);
    }
}
