<?php

/**
 * Data type: Text.
 */

namespace Vnetby\Schemaorg\DataTypes;

class DataText extends DataType
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
