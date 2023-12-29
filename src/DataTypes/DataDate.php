<?php

/**
 * A date value in [ISO 8601 date format](http://en.wikipedia.org/wiki/ISO_8601).
 */

namespace Vnetby\Schemaorg\DataTypes;

class DataDate extends DataType
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
        parent::__construct($value);
    }

    /**
     * @return string
     */
    function getValue()
    {
        return parent::getValue();
    }
}
