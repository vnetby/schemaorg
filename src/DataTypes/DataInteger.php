<?php

/**
 * Data type: Integer.
 */

namespace Vnetby\Schemaorg\DataTypes;

class DataInteger extends DataNumber
{

    /**
     * @var string|int
     */
    protected $value;


    /**
     * @param string|int $value
     */
    function __construct($value)
    {
        parent::__construct($value);
    }

    /**
     * @return string|int
     */
    function getValue()
    {
        return parent::getValue();
    }
}
