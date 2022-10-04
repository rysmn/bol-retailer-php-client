<?php

namespace Picqer\BolRetailerV8\Model;

// This class is auto generated by OpenApi\ModelGenerator
class InboundRequest extends AbstractModel
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
            'reference' => [ 'model' => null, 'array' => false ],
            'timeSlot' => [ 'model' => TimeSlot::class, 'array' => false ],
            'inboundTransporter' => [ 'model' => Transporter::class, 'array' => false ],
            'labellingService' => [ 'model' => null, 'array' => false ],
            'products' => [ 'model' => InboundProductRequest::class, 'array' => true ],
        ];
    }

    /**
     * @var string A user defined reference to identify the inbound shipment.
     */
    public $reference;

    /**
     * @var TimeSlot The timeslot within which your shipment is expected to arrive at the warehouse.
     */
    public $timeSlot;

    /**
     * @var Transporter Transporter for the inbound shipment.
     */
    public $inboundTransporter;

    /**
     * @var bool Indicates whether the inbound will be labeled by bol.com or not.
     */
    public $labellingService;

    /**
     * @var InboundProductRequest[] List of products.
     */
    public $products = [];
}
