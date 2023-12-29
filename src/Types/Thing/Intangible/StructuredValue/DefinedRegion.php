<?php

/**
 * @see https://schema.org/DefinedRegion
 * A DefinedRegion is a geographic area defined by potentially arbitrary (rather than political, administrative or natural geographical) criteria. Properties are provided
 * for defining a region by reference to sets of postal codes. Examples: a delivery destination when shopping. Region where regional pricing
 * is configured. Requirement 1: Country: US States: "NY", "CA" Requirement 2: Country: US PostalCode Set: { [94000-94585], [97000, 97999], [13000, 13599]}
 * { [12345, 12345], [78945, 78945], } Region = state, canton, prefecture, autonomous community... 
 */

namespace Vnetby\Schemaorg\Types\Thing\Intangible\StructuredValue;

class DefinedRegion extends \Vnetby\Schemaorg\Types\Thing\Intangible\StructuredValue\StructuredValue
{
    const TYPE = 'DefinedRegion';

    /**
     * The country. For example, USA. You can also provide the two-letter [ISO 3166-1 alpha-2 country code](http://en.wikipedia.org/wiki/ISO_3166-1).
     * @var string|\Vnetby\Schemaorg\DataTypes\DataText|\Vnetby\Schemaorg\Types\Thing\Place\AdministrativeArea\Country
     */
    public $addressCountry;

    /**
     * A defined range of postal codes.
     * @var \Vnetby\Schemaorg\Types\Thing\Intangible\StructuredValue\PostalCodeRangeSpecification
     */
    public $postalCodeRange;

    /**
     * The region in which the locality is, and which is in the country. For example, California or another appropriate first-level [Administrative
     * division](https://en.wikipedia.org/wiki/List_of_administrative_divisions_by_country).
     * @var string|\Vnetby\Schemaorg\DataTypes\DataText
     */
    public $addressRegion;

    /**
     * A defined range of postal codes indicated by a common textual prefix. Used for non-numeric systems such as UK.
     * @var string|\Vnetby\Schemaorg\DataTypes\DataText
     */
    public $postalCodePrefix;

    /**
     * The postal code. For example, 94043.
     * @var string|\Vnetby\Schemaorg\DataTypes\DataText
     */
    public $postalCode;

    /**
     * The country. For example, USA. You can also provide the two-letter [ISO 3166-1 alpha-2 country code](http://en.wikipedia.org/wiki/ISO_3166-1).
     * @param string|\Vnetby\Schemaorg\DataTypes\DataText|\Vnetby\Schemaorg\Types\Thing\Place\AdministrativeArea\Country $value
     * @return static
     */
    function setAddressCountry($value)
    {
        return $this->setProp('addressCountry', $value);
    }

    /**
     * A defined range of postal codes.
     * @param \Vnetby\Schemaorg\Types\Thing\Intangible\StructuredValue\PostalCodeRangeSpecification $value
     * @return static
     */
    function setPostalCodeRange($value)
    {
        return $this->setProp('postalCodeRange', $value);
    }

    /**
     * The region in which the locality is, and which is in the country. For example, California or another appropriate first-level [Administrative
     * division](https://en.wikipedia.org/wiki/List_of_administrative_divisions_by_country).
     * @param string|\Vnetby\Schemaorg\DataTypes\DataText $value
     * @return static
     */
    function setAddressRegion($value)
    {
        return $this->setProp('addressRegion', $value);
    }

    /**
     * A defined range of postal codes indicated by a common textual prefix. Used for non-numeric systems such as UK.
     * @param string|\Vnetby\Schemaorg\DataTypes\DataText $value
     * @return static
     */
    function setPostalCodePrefix($value)
    {
        return $this->setProp('postalCodePrefix', $value);
    }

    /**
     * The postal code. For example, 94043.
     * @param string|\Vnetby\Schemaorg\DataTypes\DataText $value
     * @return static
     */
    function setPostalCode($value)
    {
        return $this->setProp('postalCode', $value);
    }

    /**
     * The country. For example, USA. You can also provide the two-letter [ISO 3166-1 alpha-2 country code](http://en.wikipedia.org/wiki/ISO_3166-1).
     * @return string|\Vnetby\Schemaorg\DataTypes\DataText|\Vnetby\Schemaorg\Types\Thing\Place\AdministrativeArea\Country|null
     */
    function getAddressCountry()
    {
        return $this->getProp('addressCountry');
    }

    /**
     * A defined range of postal codes.
     * @return \Vnetby\Schemaorg\Types\Thing\Intangible\StructuredValue\PostalCodeRangeSpecification|null
     */
    function getPostalCodeRange()
    {
        return $this->getProp('postalCodeRange');
    }

    /**
     * The region in which the locality is, and which is in the country. For example, California or another appropriate first-level [Administrative
     * division](https://en.wikipedia.org/wiki/List_of_administrative_divisions_by_country).
     * @return string|\Vnetby\Schemaorg\DataTypes\DataText|null
     */
    function getAddressRegion()
    {
        return $this->getProp('addressRegion');
    }

    /**
     * A defined range of postal codes indicated by a common textual prefix. Used for non-numeric systems such as UK.
     * @return string|\Vnetby\Schemaorg\DataTypes\DataText|null
     */
    function getPostalCodePrefix()
    {
        return $this->getProp('postalCodePrefix');
    }

    /**
     * The postal code. For example, 94043.
     * @return string|\Vnetby\Schemaorg\DataTypes\DataText|null
     */
    function getPostalCode()
    {
        return $this->getProp('postalCode');
    }
}
