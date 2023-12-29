<?php

/**
 * @see https://schema.org/ContactPoint
 * A contact point&#x2014;for example, a Customer Complaints department.
 */

namespace Vnetby\Schemaorg\Types\Thing\Intangible\StructuredValue\ContactPoint;

class ContactPoint extends \Vnetby\Schemaorg\Types\Thing\Intangible\StructuredValue\StructuredValue
{
    const TYPE = 'ContactPoint';

    /**
     * A person or organization can have different contact points, for different purposes. For example, a sales contact point, a PR contact
     * point and so on. This property is used to specify the kind of contact point.
     * @var string|\Vnetby\Schemaorg\DataTypes\DataText
     */
    public $contactType;

    /**
     * The telephone number.
     * @var string|\Vnetby\Schemaorg\DataTypes\DataText
     */
    public $telephone;

    /**
     * An option available on this contact point (e.g. a toll-free number or support for hearing-impaired callers).
     * @var \Vnetby\Schemaorg\Types\Thing\Intangible\Enumeration\ContactPointOption\ContactPointOption
     */
    public $contactOption;

    /**
     * Email address.
     * @var string|\Vnetby\Schemaorg\DataTypes\DataText
     */
    public $email;

    /**
     * The product or service this support contact point is related to (such as product support for a particular product line). This
     * can be a specific product or product line (e.g. "iPhone") or a general category of products or services (e.g. "smartphones").
     * @var string|\Vnetby\Schemaorg\Types\Thing\Product\Product|\Vnetby\Schemaorg\DataTypes\DataText
     */
    public $productSupported;

    /**
     * The fax number.
     * @var string|\Vnetby\Schemaorg\DataTypes\DataText
     */
    public $faxNumber;

    /**
     * A language someone may use with or at the item, service or place. Please use one of the language codes from
     * the [IETF BCP 47 standard](http://tools.ietf.org/html/bcp47). See also [[inLanguage]].
     * @var string|\Vnetby\Schemaorg\DataTypes\DataText|\Vnetby\Schemaorg\Types\Thing\Intangible\Language
     */
    public $availableLanguage;

    /**
     * The hours during which this service or contact is available.
     * @var \Vnetby\Schemaorg\Types\Thing\Intangible\StructuredValue\OpeningHoursSpecification
     */
    public $hoursAvailable;

    /**
     * The geographic area where a service or offered item is provided.
     * @var string|\Vnetby\Schemaorg\Types\Thing\Intangible\StructuredValue\GeoShape\GeoShape|\Vnetby\Schemaorg\Types\Thing\Place\Place|\Vnetby\Schemaorg\Types\Thing\Place\AdministrativeArea\AdministrativeArea|\Vnetby\Schemaorg\DataTypes\DataText
     */
    public $areaServed;

    /**
     * A person or organization can have different contact points, for different purposes. For example, a sales contact point, a PR contact
     * point and so on. This property is used to specify the kind of contact point.
     * @param string|\Vnetby\Schemaorg\DataTypes\DataText $value
     * @return static
     */
    function setContactType($value)
    {
        return $this->setProp('contactType', $value);
    }

    /**
     * The telephone number.
     * @param string|\Vnetby\Schemaorg\DataTypes\DataText $value
     * @return static
     */
    function setTelephone($value)
    {
        return $this->setProp('telephone', $value);
    }

    /**
     * An option available on this contact point (e.g. a toll-free number or support for hearing-impaired callers).
     * @param \Vnetby\Schemaorg\Types\Thing\Intangible\Enumeration\ContactPointOption\ContactPointOption $value
     * @return static
     */
    function setContactOption($value)
    {
        return $this->setProp('contactOption', $value);
    }

    /**
     * Email address.
     * @param string|\Vnetby\Schemaorg\DataTypes\DataText $value
     * @return static
     */
    function setEmail($value)
    {
        return $this->setProp('email', $value);
    }

    /**
     * The product or service this support contact point is related to (such as product support for a particular product line). This
     * can be a specific product or product line (e.g. "iPhone") or a general category of products or services (e.g. "smartphones").
     * @param string|\Vnetby\Schemaorg\Types\Thing\Product\Product|\Vnetby\Schemaorg\DataTypes\DataText $value
     * @return static
     */
    function setProductSupported($value)
    {
        return $this->setProp('productSupported', $value);
    }

    /**
     * The fax number.
     * @param string|\Vnetby\Schemaorg\DataTypes\DataText $value
     * @return static
     */
    function setFaxNumber($value)
    {
        return $this->setProp('faxNumber', $value);
    }

    /**
     * A language someone may use with or at the item, service or place. Please use one of the language codes from
     * the [IETF BCP 47 standard](http://tools.ietf.org/html/bcp47). See also [[inLanguage]].
     * @param string|\Vnetby\Schemaorg\DataTypes\DataText|\Vnetby\Schemaorg\Types\Thing\Intangible\Language $value
     * @return static
     */
    function setAvailableLanguage($value)
    {
        return $this->setProp('availableLanguage', $value);
    }

    /**
     * The hours during which this service or contact is available.
     * @param \Vnetby\Schemaorg\Types\Thing\Intangible\StructuredValue\OpeningHoursSpecification $value
     * @return static
     */
    function setHoursAvailable($value)
    {
        return $this->setProp('hoursAvailable', $value);
    }

    /**
     * The geographic area where a service or offered item is provided.
     * @param string|\Vnetby\Schemaorg\Types\Thing\Intangible\StructuredValue\GeoShape\GeoShape|\Vnetby\Schemaorg\Types\Thing\Place\Place|\Vnetby\Schemaorg\Types\Thing\Place\AdministrativeArea\AdministrativeArea|\Vnetby\Schemaorg\DataTypes\DataText $value
     * @return static
     */
    function setAreaServed($value)
    {
        return $this->setProp('areaServed', $value);
    }

    /**
     * A person or organization can have different contact points, for different purposes. For example, a sales contact point, a PR contact
     * point and so on. This property is used to specify the kind of contact point.
     * @return string|\Vnetby\Schemaorg\DataTypes\DataText|null
     */
    function getContactType()
    {
        return $this->getProp('contactType');
    }

    /**
     * The telephone number.
     * @return string|\Vnetby\Schemaorg\DataTypes\DataText|null
     */
    function getTelephone()
    {
        return $this->getProp('telephone');
    }

    /**
     * An option available on this contact point (e.g. a toll-free number or support for hearing-impaired callers).
     * @return \Vnetby\Schemaorg\Types\Thing\Intangible\Enumeration\ContactPointOption\ContactPointOption|null
     */
    function getContactOption()
    {
        return $this->getProp('contactOption');
    }

    /**
     * Email address.
     * @return string|\Vnetby\Schemaorg\DataTypes\DataText|null
     */
    function getEmail()
    {
        return $this->getProp('email');
    }

    /**
     * The product or service this support contact point is related to (such as product support for a particular product line). This
     * can be a specific product or product line (e.g. "iPhone") or a general category of products or services (e.g. "smartphones").
     * @return string|\Vnetby\Schemaorg\Types\Thing\Product\Product|\Vnetby\Schemaorg\DataTypes\DataText|null
     */
    function getProductSupported()
    {
        return $this->getProp('productSupported');
    }

    /**
     * The fax number.
     * @return string|\Vnetby\Schemaorg\DataTypes\DataText|null
     */
    function getFaxNumber()
    {
        return $this->getProp('faxNumber');
    }

    /**
     * A language someone may use with or at the item, service or place. Please use one of the language codes from
     * the [IETF BCP 47 standard](http://tools.ietf.org/html/bcp47). See also [[inLanguage]].
     * @return string|\Vnetby\Schemaorg\DataTypes\DataText|\Vnetby\Schemaorg\Types\Thing\Intangible\Language|null
     */
    function getAvailableLanguage()
    {
        return $this->getProp('availableLanguage');
    }

    /**
     * The hours during which this service or contact is available.
     * @return \Vnetby\Schemaorg\Types\Thing\Intangible\StructuredValue\OpeningHoursSpecification|null
     */
    function getHoursAvailable()
    {
        return $this->getProp('hoursAvailable');
    }

    /**
     * The geographic area where a service or offered item is provided.
     * @return string|\Vnetby\Schemaorg\Types\Thing\Intangible\StructuredValue\GeoShape\GeoShape|\Vnetby\Schemaorg\Types\Thing\Place\Place|\Vnetby\Schemaorg\Types\Thing\Place\AdministrativeArea\AdministrativeArea|\Vnetby\Schemaorg\DataTypes\DataText|null
     */
    function getAreaServed()
    {
        return $this->getProp('areaServed');
    }
}
