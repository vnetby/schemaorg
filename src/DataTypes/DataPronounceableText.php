<?php

/**
 * Data type: PronounceableText.
 */

namespace Vnetby\Schemaorg\DataTypes;

class DataPronounceableText extends DataText
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
