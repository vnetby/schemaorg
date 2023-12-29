<?php

/**
 * Data type: Number.\n\nUsage guidelines:\n\n* Use values from 0123456789 (Unicode 'DIGIT ZERO' (U+0030) to 'DIGIT NINE' (U+0039)) rather than superficially similar Unicode
 * symbols.\n* Use '.' (Unicode 'FULL STOP' (U+002E)) rather than ',' to indicate a decimal point. Avoid using these symbols as a
 * readability separator.
 */

namespace Vnetby\Schemaorg\DataTypes;

class DataNumber extends DataType
{

    /**
     * @var string|int|float
     */
    protected $value;


    /**
     * @param string|int|float $value
     */
    function __construct($value)
    {
        parent::__construct($value);
    }

    /**
     * @return string|int|float
     */
    function getValue()
    {
        return parent::getValue();
    }
}
