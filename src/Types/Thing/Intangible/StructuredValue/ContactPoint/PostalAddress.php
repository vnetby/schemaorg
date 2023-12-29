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
     * @var string|\Vnetby\Schemaorg\DataTypes\DataText|\Vnetby\Schemaorg\Types\Thing\Place\AdministrativeArea\Country
     */
    public $addressCountry;

    /**
     * The post office box number for PO box addresses.
     * @var string|\Vnetby\Schemaorg\DataTypes\DataText
     */
    public $postOfficeBoxNumber;

    /**
     * The street address. For example, 1600 Amphitheatre Pkwy.
     * @var string|\Vnetby\Schemaorg\DataTypes\DataText
     */
    public $streetAddress;

    /**
     * The region in which the locality is, and which is in the country. For example, California or another appropriate first-level [Administrative
     * division](https://en.wikipedia.org/wiki/List_of_administrative_divisions_by_country).
     * @var string|\Vnetby\Schemaorg\DataTypes\DataText
     */
    public $addressRegion;

    /**
     * The locality in which the street address is, and which is in the region. For example, Mountain View.
     * @var string|\Vnetby\Schemaorg\DataTypes\DataText
     */
    public $addressLocality;

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
     * The post office box number for PO box addresses.
     * @param string|\Vnetby\Schemaorg\DataTypes\DataText $value
     * @return static
     */
    function setPostOfficeBoxNumber($value)
    {
        return $this->setProp('postOfficeBoxNumber', $value);
    }

    /**
     * The street address. For example, 1600 Amphitheatre Pkwy.
     * @param string|\Vnetby\Schemaorg\DataTypes\DataText $value
     * @return static
     */
    function setStreetAddress($value)
    {
        return $this->setProp('streetAddress', $value);
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
     * The locality in which the street address is, and which is in the region. For example, Mountain View.
     * @param string|\Vnetby\Schemaorg\DataTypes\DataText $value
     * @return static
     */
    function setAddressLocality($value)
    {
        return $this->setProp('addressLocality', $value);
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
     * The post office box number for PO box addresses.
     * @return string|\Vnetby\Schemaorg\DataTypes\DataText|null
     */
    function getPostOfficeBoxNumber()
    {
        return $this->getProp('postOfficeBoxNumber');
    }

    /**
     * The street address. For example, 1600 Amphitheatre Pkwy.
     * @return string|\Vnetby\Schemaorg\DataTypes\DataText|null
     */
    function getStreetAddress()
    {
        return $this->getProp('streetAddress');
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
     * The locality in which the street address is, and which is in the region. For example, Mountain View.
     * @return string|\Vnetby\Schemaorg\DataTypes\DataText|null
     */
    function getAddressLocality()
    {
        return $this->getProp('addressLocality');
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
