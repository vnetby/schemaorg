<?php

/**
 * Text representing an XPath (typically but not necessarily version 1.0).
 */

namespace Vnetby\Schemaorg\DataTypes;

class DataXPathType extends DataText
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
