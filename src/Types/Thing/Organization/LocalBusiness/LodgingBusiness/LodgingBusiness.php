<?php

/**
* @see https://schema.org/LodgingBusiness
 * A lodging business, such as a motel, hotel, or inn.
*/

namespace Vnetby\Schemaorg\Types\Thing\Organization\LocalBusiness\LodgingBusiness;

class LodgingBusiness extends \Vnetby\Schemaorg\Types\Thing\Organization\LocalBusiness\LocalBusiness
{
   const TYPE = 'LodgingBusiness';

   /**
     * The earliest someone may check into a lodging establishment.
    * @var \Vnetby\Schemaorg\DataTypes\DataTime|\Vnetby\Schemaorg\DataTypes\DataDateTime
    */
   protected $prop_checkinTime;

   /**
     * The latest someone may check out of a lodging establishment.
    * @var \Vnetby\Schemaorg\DataTypes\DataTime|\Vnetby\Schemaorg\DataTypes\DataDateTime
    */
   protected $prop_checkoutTime;

   /**
     * An official rating for a lodging business or food establishment, e.g. from national associations or standards bodies. Use the author property
     * to indicate the rating organization, e.g. as an Organization with name such as (e.g. HOTREC, DEHOGA, WHR, or Hotelstars).
    * @var \Vnetby\Schemaorg\Types\Thing\Intangible\Rating\Rating
    */
   protected $prop_starRating;

   /**
     * An intended audience, i.e. a group for whom something was created.
    * @var \Vnetby\Schemaorg\Types\Thing\Intangible\Audience\Audience
    */
   protected $prop_audience;

   /**
     * Indicates whether pets are allowed to enter the accommodation or lodging business. More detailed information can be put in a text
     * value.
    * @var \Vnetby\Schemaorg\DataTypes\DataBoolean|\Vnetby\Schemaorg\DataTypes\DataText
    */
   protected $prop_petsAllowed;

   /**
     * A language someone may use with or at the item, service or place. Please use one of the language codes from
     * the [IETF BCP 47 standard](http://tools.ietf.org/html/bcp47). See also [[inLanguage]].
    * @var \Vnetby\Schemaorg\DataTypes\DataText|\Vnetby\Schemaorg\Types\Thing\Intangible\Language
    */
   protected $prop_availableLanguage;

   /**
     * An amenity feature (e.g. a characteristic or service) of the Accommodation. This generic property does not make a statement about whether
     * the feature is included in an offer for the main accommodation or available at extra costs.
    * @var \Vnetby\Schemaorg\Types\Thing\Intangible\StructuredValue\PropertyValue\LocationFeatureSpecification
    */
   protected $prop_amenityFeature;

   /**
     * The number of rooms (excluding bathrooms and closets) of the accommodation or lodging business. Typical unit code(s): ROM for room or
     * C62 for no unit. The type of room can be put in the unitText property of the QuantitativeValue.
    * @var \Vnetby\Schemaorg\Types\Thing\Intangible\StructuredValue\QuantitativeValue\QuantitativeValue|\Vnetby\Schemaorg\DataTypes\DataNumber
    */
   protected $prop_numberOfRooms;

   /**
     * The earliest someone may check into a lodging establishment.
    * @param \Vnetby\Schemaorg\DataTypes\DataTime|\Vnetby\Schemaorg\DataTypes\DataDateTime $value
    * @return static
    */
   function setCheckinTime($value)
   {
       return $this->setProp('checkinTime', $value);
   }

   /**
     * The latest someone may check out of a lodging establishment.
    * @param \Vnetby\Schemaorg\DataTypes\DataTime|\Vnetby\Schemaorg\DataTypes\DataDateTime $value
    * @return static
    */
   function setCheckoutTime($value)
   {
       return $this->setProp('checkoutTime', $value);
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
    * @param \Vnetby\Schemaorg\Types\Thing\Intangible\Audience\Audience $value
    * @return static
    */
   function setAudience($value)
   {
       return $this->setProp('audience', $value);
   }

   /**
     * Indicates whether pets are allowed to enter the accommodation or lodging business. More detailed information can be put in a text
     * value.
    * @param \Vnetby\Schemaorg\DataTypes\DataBoolean|\Vnetby\Schemaorg\DataTypes\DataText $value
    * @return static
    */
   function setPetsAllowed($value)
   {
       return $this->setProp('petsAllowed', $value);
   }

   /**
     * A language someone may use with or at the item, service or place. Please use one of the language codes from
     * the [IETF BCP 47 standard](http://tools.ietf.org/html/bcp47). See also [[inLanguage]].
    * @param \Vnetby\Schemaorg\DataTypes\DataText|\Vnetby\Schemaorg\Types\Thing\Intangible\Language $value
    * @return static
    */
   function setAvailableLanguage($value)
   {
       return $this->setProp('availableLanguage', $value);
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
     * The number of rooms (excluding bathrooms and closets) of the accommodation or lodging business. Typical unit code(s): ROM for room or
     * C62 for no unit. The type of room can be put in the unitText property of the QuantitativeValue.
    * @param \Vnetby\Schemaorg\Types\Thing\Intangible\StructuredValue\QuantitativeValue\QuantitativeValue|\Vnetby\Schemaorg\DataTypes\DataNumber $value
    * @return static
    */
   function setNumberOfRooms($value)
   {
       return $this->setProp('numberOfRooms', $value);
   }

   /**
     * The earliest someone may check into a lodging establishment.
    * @return \Vnetby\Schemaorg\DataTypes\DataTime|\Vnetby\Schemaorg\DataTypes\DataDateTime|null
    */
   function getCheckinTime()
   {
       return $this->getProp('checkinTime');
   }

   /**
     * The latest someone may check out of a lodging establishment.
    * @return \Vnetby\Schemaorg\DataTypes\DataTime|\Vnetby\Schemaorg\DataTypes\DataDateTime|null
    */
   function getCheckoutTime()
   {
       return $this->getProp('checkoutTime');
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

   /**
     * An intended audience, i.e. a group for whom something was created.
    * @return \Vnetby\Schemaorg\Types\Thing\Intangible\Audience\Audience|null
    */
   function getAudience()
   {
       return $this->getProp('audience');
   }

   /**
     * Indicates whether pets are allowed to enter the accommodation or lodging business. More detailed information can be put in a text
     * value.
    * @return \Vnetby\Schemaorg\DataTypes\DataBoolean|\Vnetby\Schemaorg\DataTypes\DataText|null
    */
   function getPetsAllowed()
   {
       return $this->getProp('petsAllowed');
   }

   /**
     * A language someone may use with or at the item, service or place. Please use one of the language codes from
     * the [IETF BCP 47 standard](http://tools.ietf.org/html/bcp47). See also [[inLanguage]].
    * @return \Vnetby\Schemaorg\DataTypes\DataText|\Vnetby\Schemaorg\Types\Thing\Intangible\Language|null
    */
   function getAvailableLanguage()
   {
       return $this->getProp('availableLanguage');
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
     * The number of rooms (excluding bathrooms and closets) of the accommodation or lodging business. Typical unit code(s): ROM for room or
     * C62 for no unit. The type of room can be put in the unitText property of the QuantitativeValue.
    * @return \Vnetby\Schemaorg\Types\Thing\Intangible\StructuredValue\QuantitativeValue\QuantitativeValue|\Vnetby\Schemaorg\DataTypes\DataNumber|null
    */
   function getNumberOfRooms()
   {
       return $this->getProp('numberOfRooms');
   }
}
