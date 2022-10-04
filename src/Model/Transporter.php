<?php

namespace Picqer\BolRetailerV8\Model;

// This class is auto generated by OpenApi\ModelGenerator
class Transporter extends AbstractModel
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
            'name' => [ 'model' => null, 'array' => false ],
            'code' => [ 'model' => null, 'array' => false ],
        ];
    }

    /**
     * @var string The transporter name.
     */
    public $name;

    /**
     * @var string The transporter code.
     */
    public $code;
}
