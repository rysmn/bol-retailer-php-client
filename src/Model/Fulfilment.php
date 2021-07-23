<?php

namespace Picqer\BolRetailer\Model;

// This class is auto generated by OpenApi\ModelGenerator
class Fulfilment extends AbstractModel
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
            'method' => [ 'model' => null, 'array' => false ],
            'deliveryCode' => [ 'model' => null, 'array' => false ],
        ];
    }

    /**
     * @var string Specifies whether this shipment has been fulfilled by the retailer (FBR) or fulfilled by bol.com
     * (FBB). Defaults to FBR.
     */
    public $method;

    /**
     * @var string The delivery promise that applies to this offer. This value will only be used in combination with
     * fulfilmentMethod 'FBR'.
     */
    public $deliveryCode;
}
