<?php

/**
 * @see https://schema.org/CategoryCodeSet
 * A set of Category Code values.
 */

namespace Vnetby\Schemaorg\Types\Thing\CreativeWork\DefinedTermSet;

class CategoryCodeSet extends \Vnetby\Schemaorg\Types\Thing\CreativeWork\DefinedTermSet\DefinedTermSet
{
    const TYPE = 'CategoryCodeSet';

    /**
     * A Category code contained in this code set.
     * @var \Vnetby\Schemaorg\Types\Thing\Intangible\DefinedTerm\CategoryCode\CategoryCode
     */
    public $hasCategoryCode;

    /**
     * A Category code contained in this code set.
     * @param \Vnetby\Schemaorg\Types\Thing\Intangible\DefinedTerm\CategoryCode\CategoryCode $value
     * @return static
     */
    function setHasCategoryCode($value)
    {
        return $this->setProp('hasCategoryCode', $value);
    }

    /**
     * A Category code contained in this code set.
     * @return \Vnetby\Schemaorg\Types\Thing\Intangible\DefinedTerm\CategoryCode\CategoryCode|null
     */
    function getHasCategoryCode()
    {
        return $this->getProp('hasCategoryCode');
    }
}
