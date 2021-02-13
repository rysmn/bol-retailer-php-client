<?php

namespace Picqer\BolRetailerV4\Model;

abstract class AbstractModel
{
    protected static $modelDefinition = [];

    /**
     * Creates an instance of the Model from an associative array with data. Any related models are also created.
     * @param array $data Associative array with field values
     * @return AbstractModel
     */
    public static function fromData(array $data): AbstractModel
    {
        $model = new static;

        // TODO validate that all fields are there
        foreach (static::$modelDefinition as $field => $definition) {
            if ($definition['model'] == null) {
                $model->$field = $data[$field];
            } elseif ($definition['array']) {
                $model->$field = array_map(function ($data) use ($definition) {
                    return $definition['model']::fromData($data);
                }, $data[$field]);
            } else {
                $model->$field = $definition[$model]::fromData($data[$field]);
            }
        }

        return $model;
    }
}
