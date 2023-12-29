<?php

/**
 * The boolean value false.
 */

namespace Vnetby\Schemaorg\DataTypes;

class DataFalse extends DataBoolean
{

    /**
     * @var false
     */
    protected $value;


    /**
     * @param false $value
     */
    function __construct($value)
    {
        parent::__construct($value);
    }

    /**
     * @return false
     */
    function getValue()
    {
        return parent::getValue();
    }
}
