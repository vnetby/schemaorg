<?php

/**
 * Базовый класс для типов данных
 */

namespace Vnetby\Schemaorg\DataTypes;

class DataType
{

    /**
     * @var string
     */
    protected $value;

    /**
     * @param string $value
     */
    function __construct($value)
    {
        $this->value = $value;
    }

    /**
     * @return mixed
     */
    function getValue()
    {
        return $this->value;
    }
}
