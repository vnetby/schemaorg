<?php

/**
 * Базовый класс для типов данных
 */

namespace Vnetby\Schemaorg\DataTypes;

class DataType
{
    protected $value;

    function __construct($value)
    {
        $this->value = $value;
    }

    function __toString()
    {
        return $this->value;
    }
}
