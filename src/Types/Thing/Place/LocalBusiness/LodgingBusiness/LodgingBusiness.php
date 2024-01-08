<?php

/**
 * @see https://schema.org/LodgingBusiness
 * A lodging business, such as a motel, hotel, or inn.
 */

namespace Vnetby\Schemaorg\Types\Thing\Place\LocalBusiness\LodgingBusiness;

class LodgingBusiness extends \Vnetby\Schemaorg\Types\Thing\Place\LocalBusiness\LocalBusiness
{
    const TYPE = 'LodgingBusiness';

    /**
     * An intended audience, i.e. a group for whom something was created.
     * @var \Vnetby\Schemaorg\Types\Thing\Intangible\Audience\Audience
     */
    public $audience;

    /**
     * An amenity feature (e.g. a characteristic or service) of the Accommodation. This generic property does not make a statement about whether
     * the feature is included in an offer for the main accommodation or available at extra costs.
     * @var \Vnetby\Schemaorg\Types\Thing\Intangible\StructuredValue\PropertyValue\LocationFeatureSpecification
     */
    public $amenityFeature;

    /**
     * A language someone may use with or at the item, service or place. Please use one of the language codes from
     * the [IETF BCP 47 standard](http://tools.ietf.org/html/bcp47). See also [[inLanguage]].
     * @var string|\Vnetby\Schemaorg\DataTypes\DataText|\Vnetby\Schemaorg\Types\Thing\Intangible\Language
     */
    public $availableLanguage;

    /**
     * The number of rooms (excluding bathrooms and closets) of the accommodation or lodging business. Typical unit code(s): ROM for room or
     * C62 for no unit. The type of room can be put in the unitText property of the QuantitativeValue.
     * @var string|int|float|\Vnetby\Schemaorg\DataTypes\DataNumber|\Vnetby\Schemaorg\Types\Thing\Intangible\StructuredValue\QuantitativeValue\QuantitativeValue
     */
    public $numberOfRooms;

    /**
     * The latest someone may check out of a lodging establishment.
     * @var string|\Vnetby\Schemaorg\DataTypes\DataDateTime|\Vnetby\Schemaorg\DataTypes\DataTime
     */
    public $checkoutTime;

    /**
     * The earliest someone may check into a lodging establishment.
     * @var string|\Vnetby\Schemaorg\DataTypes\DataDateTime|\Vnetby\Schemaorg\DataTypes\DataTime
     */
    public $checkinTime;

    /**
     * Indicates whether pets are allowed to enter the accommodation or lodging business. More detailed information can be put in a text
     * value.
     * @var bool|string|\Vnetby\Schemaorg\DataTypes\DataBoolean|\Vnetby\Schemaorg\DataTypes\DataText
     */
    public $petsAllowed;

    /**
     * An official rating for a lodging business or food establishment, e.g. from national associations or standards bodies. Use the author property
     * to indicate the rating organization, e.g. as an Organization with name such as (e.g. HOTREC, DEHOGA, WHR, or Hotelstars).
     * @var \Vnetby\Schemaorg\Types\Thing\Intangible\Rating\Rating
     */
    public $starRating;

    /**
     * An intended audience, i.e. a group for whom something was created.
     * @param \Vnetby\Schemaorg\Types\Thing\Intangible\Audience\Audience $value
     * @return static
     */
    function setAudience($value)
    {
        return $this->setProp('audience', $value);
    }

    /**
     * An amenity feature (e.g. a characteristic or service) of the Accommodation. This generic property does not make a statement about whether
     * the feature is included in an offer for the main accommodation or available at extra costs.
     * @param \Vnetby\Schemaorg\Types\Thing\Intangible\StructuredValue\PropertyValue\LocationFeatureSpecification $value
     * @return static
     */
    function setAmenityFeature($value)
    {
        return $this->setProp('amenityFeature', $value);
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
     * The number of rooms (excluding bathrooms and closets) of the accommodation or lodging business. Typical unit code(s): ROM for room or
     * C62 for no unit. The type of room can be put in the unitText property of the QuantitativeValue.
     * @param string|int|float|\Vnetby\Schemaorg\DataTypes\DataNumber|\Vnetby\Schemaorg\Types\Thing\Intangible\StructuredValue\QuantitativeValue\QuantitativeValue $value
     * @return static
     */
    function setNumberOfRooms($value)
    {
        return $this->setProp('numberOfRooms', $value);
    }

    /**
     * The latest someone may check out of a lodging establishment.
     * @param string|\Vnetby\Schemaorg\DataTypes\DataDateTime|\Vnetby\Schemaorg\DataTypes\DataTime $value
     * @return static
     */
    function setCheckoutTime($value)
    {
        return $this->setProp('checkoutTime', $value);
    }

    /**
     * The earliest someone may check into a lodging establishment.
     * @param string|\Vnetby\Schemaorg\DataTypes\DataDateTime|\Vnetby\Schemaorg\DataTypes\DataTime $value
     * @return static
     */
    function setCheckinTime($value)
    {
        return $this->setProp('checkinTime', $value);
    }

    /**
     * Indicates whether pets are allowed to enter the accommodation or lodging business. More detailed information can be put in a text
     * value.
     * @param bool|string|\Vnetby\Schemaorg\DataTypes\DataBoolean|\Vnetby\Schemaorg\DataTypes\DataText $value
     * @return static
     */
    function setPetsAllowed($value)
    {
        return $this->setProp('petsAllowed', $value);
    }

    /**
     * An official rating for a lodging business or food establishment, e.g. from national associations or standards bodies. Use the author property
     * to indicate the rating organization, e.g. as an Organization with name such as (e.g. HOTREC, DEHOGA, WHR, or Hotelstars).
     * @param \Vnetby\Schemaorg\Types\Thing\Intangible\Rating\Rating $value
     * @return static
     */
    function setStarRating($value)
    {
        return $this->setProp('starRating', $value);
    }

    /**
     * An intended audience, i.e. a group for whom something was created.
     * @return \Vnetby\Schemaorg\Types\Thing\Intangible\Audience\Audience|null
     */
    function getAudience()
    {
        return $this->getProp('audience');
    }

    /**
     * An amenity feature (e.g. a characteristic or service) of the Accommodation. This generic property does not make a statement about whether
     * the feature is included in an offer for the main accommodation or available at extra costs.
     * @return \Vnetby\Schemaorg\Types\Thing\Intangible\StructuredValue\PropertyValue\LocationFeatureSpecification|null
     */
    function getAmenityFeature()
    {
        return $this->getProp('amenityFeature');
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
     * The number of rooms (excluding bathrooms and closets) of the accommodation or lodging business. Typical unit code(s): ROM for room or
     * C62 for no unit. The type of room can be put in the unitText property of the QuantitativeValue.
     * @return string|int|float|\Vnetby\Schemaorg\DataTypes\DataNumber|\Vnetby\Schemaorg\Types\Thing\Intangible\StructuredValue\QuantitativeValue\QuantitativeValue|null
     */
    function getNumberOfRooms()
    {
        return $this->getProp('numberOfRooms');
    }

    /**
     * The latest someone may check out of a lodging establishment.
     * @return string|\Vnetby\Schemaorg\DataTypes\DataDateTime|\Vnetby\Schemaorg\DataTypes\DataTime|null
     */
    function getCheckoutTime()
    {
        return $this->getProp('checkoutTime');
    }

    /**
     * The earliest someone may check into a lodging establishment.
     * @return string|\Vnetby\Schemaorg\DataTypes\DataDateTime|\Vnetby\Schemaorg\DataTypes\DataTime|null
     */
    function getCheckinTime()
    {
        return $this->getProp('checkinTime');
    }

    /**
     * Indicates whether pets are allowed to enter the accommodation or lodging business. More detailed information can be put in a text
     * value.
     * @return bool|string|\Vnetby\Schemaorg\DataTypes\DataBoolean|\Vnetby\Schemaorg\DataTypes\DataText|null
     */
    function getPetsAllowed()
    {
        return $this->getProp('petsAllowed');
    }

    /**
     * An official rating for a lodging business or food establishment, e.g. from national associations or standards bodies. Use the author property
     * to indicate the rating organization, e.g. as an Organization with name such as (e.g. HOTREC, DEHOGA, WHR, or Hotelstars).
     * @return \Vnetby\Schemaorg\Types\Thing\Intangible\Rating\Rating|null
     */
    function getStarRating()
    {
        return $this->getProp('starRating');
    }
}
