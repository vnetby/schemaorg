<?php

/**
 * A point in time recurring on multiple days in the form hh:mm:ss[Z|(+|-)hh:mm] (see [XML schema for details](http://www.w3.org/TR/xmlschema-2/#time)).
 */

namespace Vnetby\Schemaorg\DataTypes;

class DataTime extends DataType
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
