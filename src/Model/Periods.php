<?php

namespace Picqer\BolRetailerV8\Model;

// This class is auto generated by OpenApi\ModelGenerator
class Periods extends AbstractModel
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
            'period' => [ 'model' => OfferInsightsPeriod::class, 'array' => false ],
            'total' => [ 'model' => null, 'array' => false ],
            'countries' => [ 'model' => OfferInsightsCountry::class, 'array' => true ],
        ];
    }

    /**
     * @var OfferInsightsPeriod
     */
    public $period;

    /**
     * @var float Total number of customer visits on the product page when the offer had the buy box over the requested
     * period (excluding the current day).
     */
    public $total;

    /**
     * @var OfferInsightsCountry[]
     */
    public $countries = [];
}
