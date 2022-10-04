<?php

namespace Picqer\BolRetailerV8\Model;

// This class is auto generated by OpenApi\ModelGenerator
class Pricing extends AbstractModel
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
            'bundlePrices' => [ 'model' => BundlePrice::class, 'array' => true ],
        ];
    }

    /**
     * @var BundlePrice[] A set of prices (containing a quantity and selling price) that apply to this offer.
     */
    public $bundlePrices = [];
}
