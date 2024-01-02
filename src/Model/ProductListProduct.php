<?php

namespace Picqer\BolRetailerV10\Model;

use Picqer\BolRetailerV10\Enum;

// This class is auto generated by OpenApi\ModelGenerator
class ProductListProduct extends AbstractModel
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
            'title' => [ 'model' => null, 'enum' => null, 'array' => false ],
            'eans' => [ 'model' => ProductListProductEan::class, 'enum' => null, 'array' => true ],
        ];
    }

    /**
     * @var string The title of the product.
     */
    public $title;

    /**
     * @var ProductListProductEan[]
     */
    public $eans = [];

    /**
     * Returns an array with the eans from eans.
     * @return string[] Eans from eans.
     */
    public function getEans(): array
    {
        return array_map(function ($model) {
            return $model->ean;
        }, $this->eans);
    }

    /**
     * Sets eans by an array of eans.
     * @param string[] $eans Eans for eans.
     */
    public function setEans(array $eans): void
    {
        $this->eans = array_map(function ($ean) {
            return ProductListProductEan::constructFromArray(['ean' => $ean]);
        }, $eans);
    }

    /**
     * Adds a new ProductListProductEan to eans by ean.
     * @param string $ean Ean for the ProductListProductEan to add.
     */
    public function addEan(string $ean): void
    {
        $this->eans[] = ProductListProductEan::constructFromArray(['ean' => $ean]);
    }
}