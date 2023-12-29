<?php

/**
 * Data type: Floating number.
 */

namespace Vnetby\Schemaorg\DataTypes;

class DataFloat extends DataNumber
{

    /**
     * @var string|float
     */
    protected $value;


    /**
     * @param string|float $value
     */
    function __construct($value)
    {
        parent::__construct($value);
    }

    /**
     * @return string|float
     */
    function getValue()
    {
        return parent::getValue();
    }
}
