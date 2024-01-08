<?php

/**
 * @see https://schema.org/PostalCodeRangeSpecification
 * Indicates a range of postal codes, usually defined as the set of valid codes between [[postalCodeBegin]] and [[postalCodeEnd]], inclusively.
 */

namespace Vnetby\Schemaorg\Types\Thing\Intangible\StructuredValue;

class PostalCodeRangeSpecification extends \Vnetby\Schemaorg\Types\Thing\Intangible\StructuredValue\StructuredValue
{
    const TYPE = 'PostalCodeRangeSpecification';

    /**
     * Last postal code in the range (included). Needs to be after [[postalCodeBegin]].
     * @var string|\Vnetby\Schemaorg\DataTypes\DataText
     */
    public $postalCodeEnd;

    /**
     * First postal code in a range (included).
     * @var string|\Vnetby\Schemaorg\DataTypes\DataText
     */
    public $postalCodeBegin;

    /**
     * Last postal code in the range (included). Needs to be after [[postalCodeBegin]].
     * @param string|\Vnetby\Schemaorg\DataTypes\DataText $value
     * @return static
     */
    function setPostalCodeEnd($value)
    {
        return $this->setProp('postalCodeEnd', $value);
    }

    /**
     * First postal code in a range (included).
     * @param string|\Vnetby\Schemaorg\DataTypes\DataText $value
     * @return static
     */
    function setPostalCodeBegin($value)
    {
        return $this->setProp('postalCodeBegin', $value);
    }

    /**
     * Last postal code in the range (included). Needs to be after [[postalCodeBegin]].
     * @return string|\Vnetby\Schemaorg\DataTypes\DataText|null
     */
    function getPostalCodeEnd()
    {
        return $this->getProp('postalCodeEnd');
    }

    /**
     * First postal code in a range (included).
     * @return string|\Vnetby\Schemaorg\DataTypes\DataText|null
     */
    function getPostalCodeBegin()
    {
        return $this->getProp('postalCodeBegin');
    }
}
