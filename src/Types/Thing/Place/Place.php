<?php

/**
* @see https://schema.org/Place
 * Entities that have a somewhat fixed, physical extension.
*/

namespace Vnetby\Schemaorg\Types\Thing\Place;

class Place extends \Vnetby\Schemaorg\Types\Thing\Thing
{
   const TYPE = 'Place';

   /**
     * Represents a relationship between two geometries (or the places they represent), relating a geometry to another that covers it. As defined
     * in [DE-9IM](https://en.wikipedia.org/wiki/DE-9IM).
    * @var \Vnetby\Schemaorg\Types\Thing\Intangible\GeospatialGeometry|\Vnetby\Schemaorg\Types\Thing\Place\Place
    */
   protected $prop_geoCoveredBy;

   /**
     * Represents a relationship between two geometries (or the places they represent), relating a containing geometry to a contained geometry. "a contains
     * b iff no points of b lie in the exterior of a, and at least one point of the interior of
     * b lies in the interior of a". As defined in [DE-9IM](https://en.wikipedia.org/wiki/DE-9IM).
    * @var \Vnetby\Schemaorg\Types\Thing\Place\Place|\Vnetby\Schemaorg\Types\Thing\Intangible\GeospatialGeometry
    */
   protected $prop_geoContains;

   /**
     * Upcoming or past event associated with this place, organization, or action.
    * @var \Vnetby\Schemaorg\Types\Thing\Event\Event
    */
   protected $prop_event;

   /**
     * A flag to signal that the item, event, or place is accessible for free.
    * @var \Vnetby\Schemaorg\DataTypes\DataBoolean
    */
   protected $prop_isAccessibleForFree;

   /**
     * The telephone number.
    * @var \Vnetby\Schemaorg\DataTypes\DataText
    */
   protected $prop_telephone;

   /**
     * The latitude of a location. For example ```37.42242``` ([WGS 84](https://en.wikipedia.org/wiki/World_Geodetic_System)).
    * @var \Vnetby\Schemaorg\DataTypes\DataNumber|\Vnetby\Schemaorg\DataTypes\DataText
    */
   protected $prop_latitude;

   /**
     * The basic containment relation between a place and one that contains it.
    * @var \Vnetby\Schemaorg\Types\Thing\Place\Place
    */
   protected $prop_containedInPlace;

   /**
     * Represents a relationship between two geometries (or the places they represent), relating a geometry to another that geospatially overlaps it, i.e.
     * they have some but not all points in common. As defined in [DE-9IM](https://en.wikipedia.org/wiki/DE-9IM).
    * @var \Vnetby\Schemaorg\Types\Thing\Place\Place|\Vnetby\Schemaorg\Types\Thing\Intangible\GeospatialGeometry
    */
   protected $prop_geoOverlaps;

   /**
     * The total number of individuals that may attend an event or venue.
    * @var \Vnetby\Schemaorg\DataTypes\DataInteger
    */
   protected $prop_maximumAttendeeCapacity;

   /**
     * Indicates whether some facility (e.g. [[FoodEstablishment]], [[CovidTestingFacility]]) offers a service that can be used by driving through in a car. In
     * the case of [[CovidTestingFacility]] such facilities could potentially help with social distancing from other potentially-infected users.
    * @var \Vnetby\Schemaorg\DataTypes\DataBoolean
    */
   protected $prop_hasDriveThroughService;

   /**
     * The [Global Location Number](http://www.gs1.org/gln) (GLN, sometimes also referred to as International Location Number or ILN) of the respective organization, person, or
     * place. The GLN is a 13-digit number used to identify parties and physical locations.
    * @var \Vnetby\Schemaorg\DataTypes\DataText
    */
   protected $prop_globalLocationNumber;

   /**
     * Represents a relationship between two geometries (or the places they represent), relating a geometry to another that crosses it: "a crosses
     * b: they have some but not all interior points in common, and the dimension of the intersection is less than that
     * of at least one of them". As defined in [DE-9IM](https://en.wikipedia.org/wiki/DE-9IM).
    * @var \Vnetby\Schemaorg\Types\Thing\Intangible\GeospatialGeometry|\Vnetby\Schemaorg\Types\Thing\Place\Place
    */
   protected $prop_geoCrosses;

   /**
     * Represents spatial relations in which two geometries (or the places they represent) have at least one point in common. As defined
     * in [DE-9IM](https://en.wikipedia.org/wiki/DE-9IM).
    * @var \Vnetby\Schemaorg\Types\Thing\Place\Place|\Vnetby\Schemaorg\Types\Thing\Intangible\GeospatialGeometry
    */
   protected $prop_geoIntersects;

   /**
     * The special opening hours of a certain place.\n\nUse this to explicitly override general opening hours brought in scope by [[openingHoursSpecification]] or
     * [[openingHours]]. 
    * @var \Vnetby\Schemaorg\Types\Thing\Intangible\StructuredValue\OpeningHoursSpecification
    */
   protected $prop_specialOpeningHoursSpecification;

   /**
     * The opening hours of a certain place.
    * @var \Vnetby\Schemaorg\Types\Thing\Intangible\StructuredValue\OpeningHoursSpecification
    */
   protected $prop_openingHoursSpecification;

   /**
     * Represents a relationship between two geometries (or the places they represent), relating a geometry to one that contains it, i.e. it
     * is inside (i.e. within) its interior. As defined in [DE-9IM](https://en.wikipedia.org/wiki/DE-9IM).
    * @var \Vnetby\Schemaorg\Types\Thing\Place\Place|\Vnetby\Schemaorg\Types\Thing\Intangible\GeospatialGeometry
    */
   protected $prop_geoWithin;

   /**
     * The fax number.
    * @var \Vnetby\Schemaorg\DataTypes\DataText
    */
   protected $prop_faxNumber;

   /**
     * The basic containment relation between a place and another that it contains.
    * @var \Vnetby\Schemaorg\Types\Thing\Place\Place
    */
   protected $prop_containsPlace;

   /**
     * Represents spatial relations in which two geometries (or the places they represent) are topologically disjoint: "they have no point in common.
     * They form a set of disconnected geometries." (A symmetric relationship, as defined in [DE-9IM](https://en.wikipedia.org/wiki/DE-9IM).)
    * @var \Vnetby\Schemaorg\Types\Thing\Place\Place|\Vnetby\Schemaorg\Types\Thing\Intangible\GeospatialGeometry
    */
   protected $prop_geoDisjoint;

   /**
     * A short textual code (also called "store code") that uniquely identifies a place of business. The code is typically assigned by
     * the parentOrganization and used in structured URLs.\n\nFor example, in the URL http://www.starbucks.co.uk/store-locator/etc/detail/3047 the code "3047" is a branchCode for a particular
     * branch. 
    * @var \Vnetby\Schemaorg\DataTypes\DataText
    */
   protected $prop_branchCode;

   /**
     * A URL to a map of the place.
    * @var \Vnetby\Schemaorg\Types\Thing\CreativeWork\Map|\Vnetby\Schemaorg\DataTypes\DataURL
    */
   protected $prop_hasMap;

   /**
     * The overall rating, based on a collection of reviews or ratings, of the item.
    * @var \Vnetby\Schemaorg\Types\Thing\Intangible\Rating\AggregateRating\AggregateRating
    */
   protected $prop_aggregateRating;

   /**
     * Represents spatial relations in which two geometries (or the places they represent) are topologically equal, as defined in [DE-9IM](https://en.wikipedia.org/wiki/DE-9IM). "Two geometries
     * are topologically equal if their interiors intersect and no part of the interior or boundary of one geometry intersects the exterior
     * of the other" (a symmetric relationship).
    * @var \Vnetby\Schemaorg\Types\Thing\Intangible\GeospatialGeometry|\Vnetby\Schemaorg\Types\Thing\Place\Place
    */
   protected $prop_geoEquals;

   /**
     * An amenity feature (e.g. a characteristic or service) of the Accommodation. This generic property does not make a statement about whether
     * the feature is included in an offer for the main accommodation or available at extra costs.
    * @var \Vnetby\Schemaorg\Types\Thing\Intangible\StructuredValue\PropertyValue\LocationFeatureSpecification
    */
   protected $prop_amenityFeature;

   /**
     * A property-value pair representing an additional characteristic of the entity, e.g. a product feature or another characteristic for which there is
     * no matching property in schema.org.\n\nNote: Publishers should be aware that applications designed to use specific schema.org properties (e.g. https://schema.org/width, https://schema.org/color, https://schema.org/gtin13,
     * ...) will typically expect such data to be provided using those properties, rather than using the generic property/value mechanism. 
    * @var \Vnetby\Schemaorg\Types\Thing\Intangible\StructuredValue\PropertyValue\PropertyValue
    */
   protected $prop_additionalProperty;

   /**
     * Keywords or tags used to describe some item. Multiple textual entries in a keywords list are typically delimited by commas, or
     * by repeating the property.
    * @var \Vnetby\Schemaorg\DataTypes\DataURL|\Vnetby\Schemaorg\DataTypes\DataText|\Vnetby\Schemaorg\Types\Thing\Intangible\DefinedTerm\DefinedTerm
    */
   protected $prop_keywords;

   /**
     * The longitude of a location. For example ```-122.08585``` ([WGS 84](https://en.wikipedia.org/wiki/World_Geodetic_System)).
    * @var \Vnetby\Schemaorg\DataTypes\DataNumber|\Vnetby\Schemaorg\DataTypes\DataText
    */
   protected $prop_longitude;

   /**
     * A page providing information on how to book a tour of some [[Place]], such as an [[Accommodation]] or [[ApartmentComplex]] in a
     * real estate setting, as well as other kinds of tours as appropriate.
    * @var \Vnetby\Schemaorg\DataTypes\DataURL
    */
   protected $prop_tourBookingPage;

   /**
     * A review of the item.
    * @var \Vnetby\Schemaorg\Types\Thing\CreativeWork\Review\Review
    */
   protected $prop_review;

   /**
     * Physical address of the item.
    * @var \Vnetby\Schemaorg\Types\Thing\Intangible\StructuredValue\ContactPoint\PostalAddress|\Vnetby\Schemaorg\DataTypes\DataText
    */
   protected $prop_address;

   /**
     * A flag to signal that the [[Place]] is open to public visitors. If this property is omitted there is no assumed
     * default boolean value.
    * @var \Vnetby\Schemaorg\DataTypes\DataBoolean
    */
   protected $prop_publicAccess;

   /**
     * Represents a relationship between two geometries (or the places they represent), relating a covering geometry to a covered geometry. "Every point
     * of b is a point of (the interior or boundary of) a". As defined in [DE-9IM](https://en.wikipedia.org/wiki/DE-9IM).
    * @var \Vnetby\Schemaorg\Types\Thing\Place\Place|\Vnetby\Schemaorg\Types\Thing\Intangible\GeospatialGeometry
    */
   protected $prop_geoCovers;

   /**
     * The International Standard of Industrial Classification of All Economic Activities (ISIC), Revision 4 code for a particular organization, business person, or
     * place.
    * @var \Vnetby\Schemaorg\DataTypes\DataText
    */
   protected $prop_isicV4;

   /**
     * Indicates whether it is allowed to smoke in the place, e.g. in the restaurant, hotel or hotel room.
    * @var \Vnetby\Schemaorg\DataTypes\DataBoolean
    */
   protected $prop_smokingAllowed;

   /**
     * A photograph of this place.
    * @var \Vnetby\Schemaorg\Types\Thing\CreativeWork\Photograph|\Vnetby\Schemaorg\Types\Thing\CreativeWork\MediaObject\ImageObject\ImageObject
    */
   protected $prop_photo;

   /**
     * Represents spatial relations in which two geometries (or the places they represent) touch: "they have at least one boundary point in
     * common, but no interior points." (A symmetric relationship, as defined in [DE-9IM](https://en.wikipedia.org/wiki/DE-9IM).)
    * @var \Vnetby\Schemaorg\Types\Thing\Place\Place|\Vnetby\Schemaorg\Types\Thing\Intangible\GeospatialGeometry
    */
   protected $prop_geoTouches;

   /**
     * The geo coordinates of the place.
    * @var \Vnetby\Schemaorg\Types\Thing\Intangible\StructuredValue\GeoCoordinates|\Vnetby\Schemaorg\Types\Thing\Intangible\StructuredValue\GeoShape\GeoShape
    */
   protected $prop_geo;

   /**
     * A slogan or motto associated with the item.
    * @var \Vnetby\Schemaorg\DataTypes\DataText
    */
   protected $prop_slogan;

   /**
     * An associated logo.
    * @var \Vnetby\Schemaorg\Types\Thing\CreativeWork\MediaObject\ImageObject\ImageObject|\Vnetby\Schemaorg\DataTypes\DataURL
    */
   protected $prop_logo;

   /**
     * Represents a relationship between two geometries (or the places they represent), relating a geometry to another that covers it. As defined
     * in [DE-9IM](https://en.wikipedia.org/wiki/DE-9IM).
    * @param \Vnetby\Schemaorg\Types\Thing\Intangible\GeospatialGeometry|\Vnetby\Schemaorg\Types\Thing\Place\Place $value
    * @return static
    */
   function setGeoCoveredBy($value)
   {
       return $this->setProp('geoCoveredBy', $value);
   }

   /**
     * Represents a relationship between two geometries (or the places they represent), relating a containing geometry to a contained geometry. "a contains
     * b iff no points of b lie in the exterior of a, and at least one point of the interior of
     * b lies in the interior of a". As defined in [DE-9IM](https://en.wikipedia.org/wiki/DE-9IM).
    * @param \Vnetby\Schemaorg\Types\Thing\Place\Place|\Vnetby\Schemaorg\Types\Thing\Intangible\GeospatialGeometry $value
    * @return static
    */
   function setGeoContains($value)
   {
       return $this->setProp('geoContains', $value);
   }

   /**
     * Upcoming or past event associated with this place, organization, or action.
    * @param \Vnetby\Schemaorg\Types\Thing\Event\Event $value
    * @return static
    */
   function setEvent($value)
   {
       return $this->setProp('event', $value);
   }

   /**
     * A flag to signal that the item, event, or place is accessible for free.
    * @param \Vnetby\Schemaorg\DataTypes\DataBoolean $value
    * @return static
    */
   function setIsAccessibleForFree($value)
   {
       return $this->setProp('isAccessibleForFree', $value);
   }

   /**
     * The telephone number.
    * @param \Vnetby\Schemaorg\DataTypes\DataText $value
    * @return static
    */
   function setTelephone($value)
   {
       return $this->setProp('telephone', $value);
   }

   /**
     * The latitude of a location. For example ```37.42242``` ([WGS 84](https://en.wikipedia.org/wiki/World_Geodetic_System)).
    * @param \Vnetby\Schemaorg\DataTypes\DataNumber|\Vnetby\Schemaorg\DataTypes\DataText $value
    * @return static
    */
   function setLatitude($value)
   {
       return $this->setProp('latitude', $value);
   }

   /**
     * The basic containment relation between a place and one that contains it.
    * @param \Vnetby\Schemaorg\Types\Thing\Place\Place $value
    * @return static
    */
   function setContainedInPlace($value)
   {
       return $this->setProp('containedInPlace', $value);
   }

   /**
     * Represents a relationship between two geometries (or the places they represent), relating a geometry to another that geospatially overlaps it, i.e.
     * they have some but not all points in common. As defined in [DE-9IM](https://en.wikipedia.org/wiki/DE-9IM).
    * @param \Vnetby\Schemaorg\Types\Thing\Place\Place|\Vnetby\Schemaorg\Types\Thing\Intangible\GeospatialGeometry $value
    * @return static
    */
   function setGeoOverlaps($value)
   {
       return $this->setProp('geoOverlaps', $value);
   }

   /**
     * The total number of individuals that may attend an event or venue.
    * @param \Vnetby\Schemaorg\DataTypes\DataInteger $value
    * @return static
    */
   function setMaximumAttendeeCapacity($value)
   {
       return $this->setProp('maximumAttendeeCapacity', $value);
   }

   /**
     * Indicates whether some facility (e.g. [[FoodEstablishment]], [[CovidTestingFacility]]) offers a service that can be used by driving through in a car. In
     * the case of [[CovidTestingFacility]] such facilities could potentially help with social distancing from other potentially-infected users.
    * @param \Vnetby\Schemaorg\DataTypes\DataBoolean $value
    * @return static
    */
   function setHasDriveThroughService($value)
   {
       return $this->setProp('hasDriveThroughService', $value);
   }

   /**
     * The [Global Location Number](http://www.gs1.org/gln) (GLN, sometimes also referred to as International Location Number or ILN) of the respective organization, person, or
     * place. The GLN is a 13-digit number used to identify parties and physical locations.
    * @param \Vnetby\Schemaorg\DataTypes\DataText $value
    * @return static
    */
   function setGlobalLocationNumber($value)
   {
       return $this->setProp('globalLocationNumber', $value);
   }

   /**
     * Represents a relationship between two geometries (or the places they represent), relating a geometry to another that crosses it: "a crosses
     * b: they have some but not all interior points in common, and the dimension of the intersection is less than that
     * of at least one of them". As defined in [DE-9IM](https://en.wikipedia.org/wiki/DE-9IM).
    * @param \Vnetby\Schemaorg\Types\Thing\Intangible\GeospatialGeometry|\Vnetby\Schemaorg\Types\Thing\Place\Place $value
    * @return static
    */
   function setGeoCrosses($value)
   {
       return $this->setProp('geoCrosses', $value);
   }

   /**
     * Represents spatial relations in which two geometries (or the places they represent) have at least one point in common. As defined
     * in [DE-9IM](https://en.wikipedia.org/wiki/DE-9IM).
    * @param \Vnetby\Schemaorg\Types\Thing\Place\Place|\Vnetby\Schemaorg\Types\Thing\Intangible\GeospatialGeometry $value
    * @return static
    */
   function setGeoIntersects($value)
   {
       return $this->setProp('geoIntersects', $value);
   }

   /**
     * The special opening hours of a certain place.\n\nUse this to explicitly override general opening hours brought in scope by [[openingHoursSpecification]] or
     * [[openingHours]]. 
    * @param \Vnetby\Schemaorg\Types\Thing\Intangible\StructuredValue\OpeningHoursSpecification $value
    * @return static
    */
   function setSpecialOpeningHoursSpecification($value)
   {
       return $this->setProp('specialOpeningHoursSpecification', $value);
   }

   /**
     * The opening hours of a certain place.
    * @param \Vnetby\Schemaorg\Types\Thing\Intangible\StructuredValue\OpeningHoursSpecification $value
    * @return static
    */
   function setOpeningHoursSpecification($value)
   {
       return $this->setProp('openingHoursSpecification', $value);
   }

   /**
     * Represents a relationship between two geometries (or the places they represent), relating a geometry to one that contains it, i.e. it
     * is inside (i.e. within) its interior. As defined in [DE-9IM](https://en.wikipedia.org/wiki/DE-9IM).
    * @param \Vnetby\Schemaorg\Types\Thing\Place\Place|\Vnetby\Schemaorg\Types\Thing\Intangible\GeospatialGeometry $value
    * @return static
    */
   function setGeoWithin($value)
   {
       return $this->setProp('geoWithin', $value);
   }

   /**
     * The fax number.
    * @param \Vnetby\Schemaorg\DataTypes\DataText $value
    * @return static
    */
   function setFaxNumber($value)
   {
       return $this->setProp('faxNumber', $value);
   }

   /**
     * The basic containment relation between a place and another that it contains.
    * @param \Vnetby\Schemaorg\Types\Thing\Place\Place $value
    * @return static
    */
   function setContainsPlace($value)
   {
       return $this->setProp('containsPlace', $value);
   }

   /**
     * Represents spatial relations in which two geometries (or the places they represent) are topologically disjoint: "they have no point in common.
     * They form a set of disconnected geometries." (A symmetric relationship, as defined in [DE-9IM](https://en.wikipedia.org/wiki/DE-9IM).)
    * @param \Vnetby\Schemaorg\Types\Thing\Place\Place|\Vnetby\Schemaorg\Types\Thing\Intangible\GeospatialGeometry $value
    * @return static
    */
   function setGeoDisjoint($value)
   {
       return $this->setProp('geoDisjoint', $value);
   }

   /**
     * A short textual code (also called "store code") that uniquely identifies a place of business. The code is typically assigned by
     * the parentOrganization and used in structured URLs.\n\nFor example, in the URL http://www.starbucks.co.uk/store-locator/etc/detail/3047 the code "3047" is a branchCode for a particular
     * branch. 
    * @param \Vnetby\Schemaorg\DataTypes\DataText $value
    * @return static
    */
   function setBranchCode($value)
   {
       return $this->setProp('branchCode', $value);
   }

   /**
     * A URL to a map of the place.
    * @param \Vnetby\Schemaorg\Types\Thing\CreativeWork\Map|\Vnetby\Schemaorg\DataTypes\DataURL $value
    * @return static
    */
   function setHasMap($value)
   {
       return $this->setProp('hasMap', $value);
   }

   /**
     * The overall rating, based on a collection of reviews or ratings, of the item.
    * @param \Vnetby\Schemaorg\Types\Thing\Intangible\Rating\AggregateRating\AggregateRating $value
    * @return static
    */
   function setAggregateRating($value)
   {
       return $this->setProp('aggregateRating', $value);
   }

   /**
     * Represents spatial relations in which two geometries (or the places they represent) are topologically equal, as defined in [DE-9IM](https://en.wikipedia.org/wiki/DE-9IM). "Two geometries
     * are topologically equal if their interiors intersect and no part of the interior or boundary of one geometry intersects the exterior
     * of the other" (a symmetric relationship).
    * @param \Vnetby\Schemaorg\Types\Thing\Intangible\GeospatialGeometry|\Vnetby\Schemaorg\Types\Thing\Place\Place $value
    * @return static
    */
   function setGeoEquals($value)
   {
       return $this->setProp('geoEquals', $value);
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
     * A property-value pair representing an additional characteristic of the entity, e.g. a product feature or another characteristic for which there is
     * no matching property in schema.org.\n\nNote: Publishers should be aware that applications designed to use specific schema.org properties (e.g. https://schema.org/width, https://schema.org/color, https://schema.org/gtin13,
     * ...) will typically expect such data to be provided using those properties, rather than using the generic property/value mechanism. 
    * @param \Vnetby\Schemaorg\Types\Thing\Intangible\StructuredValue\PropertyValue\PropertyValue $value
    * @return static
    */
   function setAdditionalProperty($value)
   {
       return $this->setProp('additionalProperty', $value);
   }

   /**
     * Keywords or tags used to describe some item. Multiple textual entries in a keywords list are typically delimited by commas, or
     * by repeating the property.
    * @param \Vnetby\Schemaorg\DataTypes\DataURL|\Vnetby\Schemaorg\DataTypes\DataText|\Vnetby\Schemaorg\Types\Thing\Intangible\DefinedTerm\DefinedTerm $value
    * @return static
    */
   function setKeywords($value)
   {
       return $this->setProp('keywords', $value);
   }

   /**
     * The longitude of a location. For example ```-122.08585``` ([WGS 84](https://en.wikipedia.org/wiki/World_Geodetic_System)).
    * @param \Vnetby\Schemaorg\DataTypes\DataNumber|\Vnetby\Schemaorg\DataTypes\DataText $value
    * @return static
    */
   function setLongitude($value)
   {
       return $this->setProp('longitude', $value);
   }

   /**
     * A page providing information on how to book a tour of some [[Place]], such as an [[Accommodation]] or [[ApartmentComplex]] in a
     * real estate setting, as well as other kinds of tours as appropriate.
    * @param \Vnetby\Schemaorg\DataTypes\DataURL $value
    * @return static
    */
   function setTourBookingPage($value)
   {
       return $this->setProp('tourBookingPage', $value);
   }

   /**
     * A review of the item.
    * @param \Vnetby\Schemaorg\Types\Thing\CreativeWork\Review\Review $value
    * @return static
    */
   function setReview($value)
   {
       return $this->setProp('review', $value);
   }

   /**
     * Physical address of the item.
    * @param \Vnetby\Schemaorg\Types\Thing\Intangible\StructuredValue\ContactPoint\PostalAddress|\Vnetby\Schemaorg\DataTypes\DataText $value
    * @return static
    */
   function setAddress($value)
   {
       return $this->setProp('address', $value);
   }

   /**
     * A flag to signal that the [[Place]] is open to public visitors. If this property is omitted there is no assumed
     * default boolean value.
    * @param \Vnetby\Schemaorg\DataTypes\DataBoolean $value
    * @return static
    */
   function setPublicAccess($value)
   {
       return $this->setProp('publicAccess', $value);
   }

   /**
     * Represents a relationship between two geometries (or the places they represent), relating a covering geometry to a covered geometry. "Every point
     * of b is a point of (the interior or boundary of) a". As defined in [DE-9IM](https://en.wikipedia.org/wiki/DE-9IM).
    * @param \Vnetby\Schemaorg\Types\Thing\Place\Place|\Vnetby\Schemaorg\Types\Thing\Intangible\GeospatialGeometry $value
    * @return static
    */
   function setGeoCovers($value)
   {
       return $this->setProp('geoCovers', $value);
   }

   /**
     * The International Standard of Industrial Classification of All Economic Activities (ISIC), Revision 4 code for a particular organization, business person, or
     * place.
    * @param \Vnetby\Schemaorg\DataTypes\DataText $value
    * @return static
    */
   function setIsicV4($value)
   {
       return $this->setProp('isicV4', $value);
   }

   /**
     * Indicates whether it is allowed to smoke in the place, e.g. in the restaurant, hotel or hotel room.
    * @param \Vnetby\Schemaorg\DataTypes\DataBoolean $value
    * @return static
    */
   function setSmokingAllowed($value)
   {
       return $this->setProp('smokingAllowed', $value);
   }

   /**
     * A photograph of this place.
    * @param \Vnetby\Schemaorg\Types\Thing\CreativeWork\Photograph|\Vnetby\Schemaorg\Types\Thing\CreativeWork\MediaObject\ImageObject\ImageObject $value
    * @return static
    */
   function setPhoto($value)
   {
       return $this->setProp('photo', $value);
   }

   /**
     * Represents spatial relations in which two geometries (or the places they represent) touch: "they have at least one boundary point in
     * common, but no interior points." (A symmetric relationship, as defined in [DE-9IM](https://en.wikipedia.org/wiki/DE-9IM).)
    * @param \Vnetby\Schemaorg\Types\Thing\Place\Place|\Vnetby\Schemaorg\Types\Thing\Intangible\GeospatialGeometry $value
    * @return static
    */
   function setGeoTouches($value)
   {
       return $this->setProp('geoTouches', $value);
   }

   /**
     * The geo coordinates of the place.
    * @param \Vnetby\Schemaorg\Types\Thing\Intangible\StructuredValue\GeoCoordinates|\Vnetby\Schemaorg\Types\Thing\Intangible\StructuredValue\GeoShape\GeoShape $value
    * @return static
    */
   function setGeo($value)
   {
       return $this->setProp('geo', $value);
   }

   /**
     * A slogan or motto associated with the item.
    * @param \Vnetby\Schemaorg\DataTypes\DataText $value
    * @return static
    */
   function setSlogan($value)
   {
       return $this->setProp('slogan', $value);
   }

   /**
     * An associated logo.
    * @param \Vnetby\Schemaorg\Types\Thing\CreativeWork\MediaObject\ImageObject\ImageObject|\Vnetby\Schemaorg\DataTypes\DataURL $value
    * @return static
    */
   function setLogo($value)
   {
       return $this->setProp('logo', $value);
   }

   /**
     * Represents a relationship between two geometries (or the places they represent), relating a geometry to another that covers it. As defined
     * in [DE-9IM](https://en.wikipedia.org/wiki/DE-9IM).
    * @return \Vnetby\Schemaorg\Types\Thing\Intangible\GeospatialGeometry|\Vnetby\Schemaorg\Types\Thing\Place\Place|null
    */
   function getGeoCoveredBy()
   {
       return $this->getProp('geoCoveredBy');
   }

   /**
     * Represents a relationship between two geometries (or the places they represent), relating a containing geometry to a contained geometry. "a contains
     * b iff no points of b lie in the exterior of a, and at least one point of the interior of
     * b lies in the interior of a". As defined in [DE-9IM](https://en.wikipedia.org/wiki/DE-9IM).
    * @return \Vnetby\Schemaorg\Types\Thing\Place\Place|\Vnetby\Schemaorg\Types\Thing\Intangible\GeospatialGeometry|null
    */
   function getGeoContains()
   {
       return $this->getProp('geoContains');
   }

   /**
     * Upcoming or past event associated with this place, organization, or action.
    * @return \Vnetby\Schemaorg\Types\Thing\Event\Event|null
    */
   function getEvent()
   {
       return $this->getProp('event');
   }

   /**
     * A flag to signal that the item, event, or place is accessible for free.
    * @return \Vnetby\Schemaorg\DataTypes\DataBoolean|null
    */
   function getIsAccessibleForFree()
   {
       return $this->getProp('isAccessibleForFree');
   }

   /**
     * The telephone number.
    * @return \Vnetby\Schemaorg\DataTypes\DataText|null
    */
   function getTelephone()
   {
       return $this->getProp('telephone');
   }

   /**
     * The latitude of a location. For example ```37.42242``` ([WGS 84](https://en.wikipedia.org/wiki/World_Geodetic_System)).
    * @return \Vnetby\Schemaorg\DataTypes\DataNumber|\Vnetby\Schemaorg\DataTypes\DataText|null
    */
   function getLatitude()
   {
       return $this->getProp('latitude');
   }

   /**
     * The basic containment relation between a place and one that contains it.
    * @return \Vnetby\Schemaorg\Types\Thing\Place\Place|null
    */
   function getContainedInPlace()
   {
       return $this->getProp('containedInPlace');
   }

   /**
     * Represents a relationship between two geometries (or the places they represent), relating a geometry to another that geospatially overlaps it, i.e.
     * they have some but not all points in common. As defined in [DE-9IM](https://en.wikipedia.org/wiki/DE-9IM).
    * @return \Vnetby\Schemaorg\Types\Thing\Place\Place|\Vnetby\Schemaorg\Types\Thing\Intangible\GeospatialGeometry|null
    */
   function getGeoOverlaps()
   {
       return $this->getProp('geoOverlaps');
   }

   /**
     * The total number of individuals that may attend an event or venue.
    * @return \Vnetby\Schemaorg\DataTypes\DataInteger|null
    */
   function getMaximumAttendeeCapacity()
   {
       return $this->getProp('maximumAttendeeCapacity');
   }

   /**
     * Indicates whether some facility (e.g. [[FoodEstablishment]], [[CovidTestingFacility]]) offers a service that can be used by driving through in a car. In
     * the case of [[CovidTestingFacility]] such facilities could potentially help with social distancing from other potentially-infected users.
    * @return \Vnetby\Schemaorg\DataTypes\DataBoolean|null
    */
   function getHasDriveThroughService()
   {
       return $this->getProp('hasDriveThroughService');
   }

   /**
     * The [Global Location Number](http://www.gs1.org/gln) (GLN, sometimes also referred to as International Location Number or ILN) of the respective organization, person, or
     * place. The GLN is a 13-digit number used to identify parties and physical locations.
    * @return \Vnetby\Schemaorg\DataTypes\DataText|null
    */
   function getGlobalLocationNumber()
   {
       return $this->getProp('globalLocationNumber');
   }

   /**
     * Represents a relationship between two geometries (or the places they represent), relating a geometry to another that crosses it: "a crosses
     * b: they have some but not all interior points in common, and the dimension of the intersection is less than that
     * of at least one of them". As defined in [DE-9IM](https://en.wikipedia.org/wiki/DE-9IM).
    * @return \Vnetby\Schemaorg\Types\Thing\Intangible\GeospatialGeometry|\Vnetby\Schemaorg\Types\Thing\Place\Place|null
    */
   function getGeoCrosses()
   {
       return $this->getProp('geoCrosses');
   }

   /**
     * Represents spatial relations in which two geometries (or the places they represent) have at least one point in common. As defined
     * in [DE-9IM](https://en.wikipedia.org/wiki/DE-9IM).
    * @return \Vnetby\Schemaorg\Types\Thing\Place\Place|\Vnetby\Schemaorg\Types\Thing\Intangible\GeospatialGeometry|null
    */
   function getGeoIntersects()
   {
       return $this->getProp('geoIntersects');
   }

   /**
     * The special opening hours of a certain place.\n\nUse this to explicitly override general opening hours brought in scope by [[openingHoursSpecification]] or
     * [[openingHours]]. 
    * @return \Vnetby\Schemaorg\Types\Thing\Intangible\StructuredValue\OpeningHoursSpecification|null
    */
   function getSpecialOpeningHoursSpecification()
   {
       return $this->getProp('specialOpeningHoursSpecification');
   }

   /**
     * The opening hours of a certain place.
    * @return \Vnetby\Schemaorg\Types\Thing\Intangible\StructuredValue\OpeningHoursSpecification|null
    */
   function getOpeningHoursSpecification()
   {
       return $this->getProp('openingHoursSpecification');
   }

   /**
     * Represents a relationship between two geometries (or the places they represent), relating a geometry to one that contains it, i.e. it
     * is inside (i.e. within) its interior. As defined in [DE-9IM](https://en.wikipedia.org/wiki/DE-9IM).
    * @return \Vnetby\Schemaorg\Types\Thing\Place\Place|\Vnetby\Schemaorg\Types\Thing\Intangible\GeospatialGeometry|null
    */
   function getGeoWithin()
   {
       return $this->getProp('geoWithin');
   }

   /**
     * The fax number.
    * @return \Vnetby\Schemaorg\DataTypes\DataText|null
    */
   function getFaxNumber()
   {
       return $this->getProp('faxNumber');
   }

   /**
     * The basic containment relation between a place and another that it contains.
    * @return \Vnetby\Schemaorg\Types\Thing\Place\Place|null
    */
   function getContainsPlace()
   {
       return $this->getProp('containsPlace');
   }

   /**
     * Represents spatial relations in which two geometries (or the places they represent) are topologically disjoint: "they have no point in common.
     * They form a set of disconnected geometries." (A symmetric relationship, as defined in [DE-9IM](https://en.wikipedia.org/wiki/DE-9IM).)
    * @return \Vnetby\Schemaorg\Types\Thing\Place\Place|\Vnetby\Schemaorg\Types\Thing\Intangible\GeospatialGeometry|null
    */
   function getGeoDisjoint()
   {
       return $this->getProp('geoDisjoint');
   }

   /**
     * A short textual code (also called "store code") that uniquely identifies a place of business. The code is typically assigned by
     * the parentOrganization and used in structured URLs.\n\nFor example, in the URL http://www.starbucks.co.uk/store-locator/etc/detail/3047 the code "3047" is a branchCode for a particular
     * branch. 
    * @return \Vnetby\Schemaorg\DataTypes\DataText|null
    */
   function getBranchCode()
   {
       return $this->getProp('branchCode');
   }

   /**
     * A URL to a map of the place.
    * @return \Vnetby\Schemaorg\Types\Thing\CreativeWork\Map|\Vnetby\Schemaorg\DataTypes\DataURL|null
    */
   function getHasMap()
   {
       return $this->getProp('hasMap');
   }

   /**
     * The overall rating, based on a collection of reviews or ratings, of the item.
    * @return \Vnetby\Schemaorg\Types\Thing\Intangible\Rating\AggregateRating\AggregateRating|null
    */
   function getAggregateRating()
   {
       return $this->getProp('aggregateRating');
   }

   /**
     * Represents spatial relations in which two geometries (or the places they represent) are topologically equal, as defined in [DE-9IM](https://en.wikipedia.org/wiki/DE-9IM). "Two geometries
     * are topologically equal if their interiors intersect and no part of the interior or boundary of one geometry intersects the exterior
     * of the other" (a symmetric relationship).
    * @return \Vnetby\Schemaorg\Types\Thing\Intangible\GeospatialGeometry|\Vnetby\Schemaorg\Types\Thing\Place\Place|null
    */
   function getGeoEquals()
   {
       return $this->getProp('geoEquals');
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
     * A property-value pair representing an additional characteristic of the entity, e.g. a product feature or another characteristic for which there is
     * no matching property in schema.org.\n\nNote: Publishers should be aware that applications designed to use specific schema.org properties (e.g. https://schema.org/width, https://schema.org/color, https://schema.org/gtin13,
     * ...) will typically expect such data to be provided using those properties, rather than using the generic property/value mechanism. 
    * @return \Vnetby\Schemaorg\Types\Thing\Intangible\StructuredValue\PropertyValue\PropertyValue|null
    */
   function getAdditionalProperty()
   {
       return $this->getProp('additionalProperty');
   }

   /**
     * Keywords or tags used to describe some item. Multiple textual entries in a keywords list are typically delimited by commas, or
     * by repeating the property.
    * @return \Vnetby\Schemaorg\DataTypes\DataURL|\Vnetby\Schemaorg\DataTypes\DataText|\Vnetby\Schemaorg\Types\Thing\Intangible\DefinedTerm\DefinedTerm|null
    */
   function getKeywords()
   {
       return $this->getProp('keywords');
   }

   /**
     * The longitude of a location. For example ```-122.08585``` ([WGS 84](https://en.wikipedia.org/wiki/World_Geodetic_System)).
    * @return \Vnetby\Schemaorg\DataTypes\DataNumber|\Vnetby\Schemaorg\DataTypes\DataText|null
    */
   function getLongitude()
   {
       return $this->getProp('longitude');
   }

   /**
     * A page providing information on how to book a tour of some [[Place]], such as an [[Accommodation]] or [[ApartmentComplex]] in a
     * real estate setting, as well as other kinds of tours as appropriate.
    * @return \Vnetby\Schemaorg\DataTypes\DataURL|null
    */
   function getTourBookingPage()
   {
       return $this->getProp('tourBookingPage');
   }

   /**
     * A review of the item.
    * @return \Vnetby\Schemaorg\Types\Thing\CreativeWork\Review\Review|null
    */
   function getReview()
   {
       return $this->getProp('review');
   }

   /**
     * Physical address of the item.
    * @return \Vnetby\Schemaorg\Types\Thing\Intangible\StructuredValue\ContactPoint\PostalAddress|\Vnetby\Schemaorg\DataTypes\DataText|null
    */
   function getAddress()
   {
       return $this->getProp('address');
   }

   /**
     * A flag to signal that the [[Place]] is open to public visitors. If this property is omitted there is no assumed
     * default boolean value.
    * @return \Vnetby\Schemaorg\DataTypes\DataBoolean|null
    */
   function getPublicAccess()
   {
       return $this->getProp('publicAccess');
   }

   /**
     * Represents a relationship between two geometries (or the places they represent), relating a covering geometry to a covered geometry. "Every point
     * of b is a point of (the interior or boundary of) a". As defined in [DE-9IM](https://en.wikipedia.org/wiki/DE-9IM).
    * @return \Vnetby\Schemaorg\Types\Thing\Place\Place|\Vnetby\Schemaorg\Types\Thing\Intangible\GeospatialGeometry|null
    */
   function getGeoCovers()
   {
       return $this->getProp('geoCovers');
   }

   /**
     * The International Standard of Industrial Classification of All Economic Activities (ISIC), Revision 4 code for a particular organization, business person, or
     * place.
    * @return \Vnetby\Schemaorg\DataTypes\DataText|null
    */
   function getIsicV4()
   {
       return $this->getProp('isicV4');
   }

   /**
     * Indicates whether it is allowed to smoke in the place, e.g. in the restaurant, hotel or hotel room.
    * @return \Vnetby\Schemaorg\DataTypes\DataBoolean|null
    */
   function getSmokingAllowed()
   {
       return $this->getProp('smokingAllowed');
   }

   /**
     * A photograph of this place.
    * @return \Vnetby\Schemaorg\Types\Thing\CreativeWork\Photograph|\Vnetby\Schemaorg\Types\Thing\CreativeWork\MediaObject\ImageObject\ImageObject|null
    */
   function getPhoto()
   {
       return $this->getProp('photo');
   }

   /**
     * Represents spatial relations in which two geometries (or the places they represent) touch: "they have at least one boundary point in
     * common, but no interior points." (A symmetric relationship, as defined in [DE-9IM](https://en.wikipedia.org/wiki/DE-9IM).)
    * @return \Vnetby\Schemaorg\Types\Thing\Place\Place|\Vnetby\Schemaorg\Types\Thing\Intangible\GeospatialGeometry|null
    */
   function getGeoTouches()
   {
       return $this->getProp('geoTouches');
   }

   /**
     * The geo coordinates of the place.
    * @return \Vnetby\Schemaorg\Types\Thing\Intangible\StructuredValue\GeoCoordinates|\Vnetby\Schemaorg\Types\Thing\Intangible\StructuredValue\GeoShape\GeoShape|null
    */
   function getGeo()
   {
       return $this->getProp('geo');
   }

   /**
     * A slogan or motto associated with the item.
    * @return \Vnetby\Schemaorg\DataTypes\DataText|null
    */
   function getSlogan()
   {
       return $this->getProp('slogan');
   }

   /**
     * An associated logo.
    * @return \Vnetby\Schemaorg\Types\Thing\CreativeWork\MediaObject\ImageObject\ImageObject|\Vnetby\Schemaorg\DataTypes\DataURL|null
    */
   function getLogo()
   {
       return $this->getProp('logo');
   }
}
