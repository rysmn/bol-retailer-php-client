<?php

namespace Picqer\BolRetailerV8\Model;

// This class is auto generated by OpenApi\ModelGenerator
class Product extends AbstractModel
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
            'ean' => [ 'model' => null, 'array' => false ],
            'relevanceScores' => [ 'model' => RelevanceScore::class, 'array' => true ],
            'maximumPrice' => [ 'model' => null, 'array' => false ],
        ];
    }

    /**
     * @var string The EAN number associated with this product.
     */
    public $ean;

    /**
     * @var RelevanceScore[]
     */
    public $relevanceScores = [];

    /**
     * @var float The maximum price a product can have in order to be part of the promotion.
     */
    public $maximumPrice;
}
