<?php

/**
 * The boolean value true.
 */

namespace Vnetby\Schemaorg\DataTypes;

class DataTrue extends DataBoolean
{

    /**
     * @var true
     */
    protected $value;


    /**
     * @param true $value
     */
    function __construct($value)
    {
        parent::__construct($value);
    }

    /**
     * @return true
     */
    function getValue()
    {
        return parent::getValue();
    }
}
