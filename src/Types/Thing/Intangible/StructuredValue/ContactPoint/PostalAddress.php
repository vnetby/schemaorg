<?php

/**
 * @see https://schema.org/PostalAddress
 * The mailing address.
 */

namespace Vnetby\Schemaorg\Types\Thing\Intangible\StructuredValue\ContactPoint;

class PostalAddress extends \Vnetby\Schemaorg\Types\Thing\Intangible\StructuredValue\ContactPoint\ContactPoint
{
    const TYPE = 'PostalAddress';

    /**
     * The country. For example, USA. You can also provide the two-letter [ISO 3166-1 alpha-2 country code](http://en.wikipedia.org/wiki/ISO_3166-1).
     * @var \Vnetby\Schemaorg\DataTypes\DataText|\Vnetby\Schemaorg\Types\Thing\Place\AdministrativeArea\Country
     */
    protected $prop_addressCountry;

    /**
     * The post office box number for PO box addresses.
     * @var \Vnetby\Schemaorg\DataTypes\DataText
     */
    protected $prop_postOfficeBoxNumber;

    /**
     * The street address. For example, 1600 Amphitheatre Pkwy.
     * @var \Vnetby\Schemaorg\DataTypes\DataText
     */
    protected $prop_streetAddress;

    /**
     * The region in which the locality is, and which is in the country. For example, California or another appropriate first-level [Administrative
     * division](https://en.wikipedia.org/wiki/List_of_administrative_divisions_by_country).
     * @var \Vnetby\Schemaorg\DataTypes\DataText
     */
    protected $prop_addressRegion;

    /**
     * The locality in which the street address is, and which is in the region. For example, Mountain View.
     * @var \Vnetby\Schemaorg\DataTypes\DataText
     */
    protected $prop_addressLocality;

    /**
     * The postal code. For example, 94043.
     * @var \Vnetby\Schemaorg\DataTypes\DataText
     */
    protected $prop_postalCode;

    /**
     * The country. For example, USA. You can also provide the two-letter [ISO 3166-1 alpha-2 country code](http://en.wikipedia.org/wiki/ISO_3166-1).
     * @param \Vnetby\Schemaorg\DataTypes\DataText|\Vnetby\Schemaorg\Types\Thing\Place\AdministrativeArea\Country $value
     * @return static
     */
    function setAddressCountry($value)
    {
        return $this->setProp('addressCountry', $value);
    }

    /**
     * The post office box number for PO box addresses.
     * @param \Vnetby\Schemaorg\DataTypes\DataText $value
     * @return static
     */
    function setPostOfficeBoxNumber($value)
    {
        return $this->setProp('postOfficeBoxNumber', $value);
    }

    /**
     * The street address. For example, 1600 Amphitheatre Pkwy.
     * @param \Vnetby\Schemaorg\DataTypes\DataText $value
     * @return static
     */
    function setStreetAddress($value)
    {
        return $this->setProp('streetAddress', $value);
    }

    /**
     * The region in which the locality is, and which is in the country. For example, California or another appropriate first-level [Administrative
     * division](https://en.wikipedia.org/wiki/List_of_administrative_divisions_by_country).
     * @param \Vnetby\Schemaorg\DataTypes\DataText $value
     * @return static
     */
    function setAddressRegion($value)
    {
        return $this->setProp('addressRegion', $value);
    }

    /**
     * The locality in which the street address is, and which is in the region. For example, Mountain View.
     * @param \Vnetby\Schemaorg\DataTypes\DataText $value
     * @return static
     */
    function setAddressLocality($value)
    {
        return $this->setProp('addressLocality', $value);
    }

    /**
     * The postal code. For example, 94043.
     * @param \Vnetby\Schemaorg\DataTypes\DataText $value
     * @return static
     */
    function setPostalCode($value)
    {
        return $this->setProp('postalCode', $value);
    }

    /**
     * The country. For example, USA. You can also provide the two-letter [ISO 3166-1 alpha-2 country code](http://en.wikipedia.org/wiki/ISO_3166-1).
     * @return \Vnetby\Schemaorg\DataTypes\DataText|\Vnetby\Schemaorg\Types\Thing\Place\AdministrativeArea\Country|null
     */
    function getAddressCountry()
    {
        return $this->getProp('addressCountry');
    }

    /**
     * The post office box number for PO box addresses.
     * @return \Vnetby\Schemaorg\DataTypes\DataText|null
     */
    function getPostOfficeBoxNumber()
    {
        return $this->getProp('postOfficeBoxNumber');
    }

    /**
     * The street address. For example, 1600 Amphitheatre Pkwy.
     * @return \Vnetby\Schemaorg\DataTypes\DataText|null
     */
    function getStreetAddress()
    {
        return $this->getProp('streetAddress');
    }

    /**
     * The region in which the locality is, and which is in the country. For example, California or another appropriate first-level [Administrative
     * division](https://en.wikipedia.org/wiki/List_of_administrative_divisions_by_country).
     * @return \Vnetby\Schemaorg\DataTypes\DataText|null
     */
    function getAddressRegion()
    {
        return $this->getProp('addressRegion');
    }

    /**
     * The locality in which the street address is, and which is in the region. For example, Mountain View.
     * @return \Vnetby\Schemaorg\DataTypes\DataText|null
     */
    function getAddressLocality()
    {
        return $this->getProp('addressLocality');
    }

    /**
     * The postal code. For example, 94043.
     * @return \Vnetby\Schemaorg\DataTypes\DataText|null
     */
    function getPostalCode()
    {
        return $this->getProp('postalCode');
    }
}
