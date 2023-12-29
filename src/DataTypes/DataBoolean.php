<?php

/**
 * Boolean: True or False.
 */

namespace Vnetby\Schemaorg\DataTypes;

class DataBoolean extends DataType
{

    /**
     * @var bool
     */
    protected $value;


    /**
     * @param bool $value
     */
    function __construct($value)
    {
        parent::__construct($value);
    }

    /**
     * @return bool
     */
    function getValue()
    {
        return parent::getValue();
    }
}
