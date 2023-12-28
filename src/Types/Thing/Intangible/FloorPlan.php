<?php

/**
 * @see https://schema.org/FloorPlan
 * A FloorPlan is an explicit representation of a collection of similar accommodations, allowing the provision of common information (room counts, sizes,
 * layout diagrams) and offers for rental or sale. In typical use, some [[ApartmentComplex]] has an [[accommodationFloorPlan]] which is a [[FloorPlan]]. A
 * FloorPlan is always in the context of a particular place, either a larger [[ApartmentComplex]] or a single [[Apartment]]. The visual/spatial aspects
 * of a floor plan (i.e. room layout, [see wikipedia](https://en.wikipedia.org/wiki/Floor_plan)) can be indicated using [[image]]. 
 */

namespace Vnetby\Schemaorg\Types\Thing\Intangible;

class FloorPlan extends \Vnetby\Schemaorg\Types\Thing\Intangible\Intangible
{
    const TYPE = 'FloorPlan';

    /**
     * A schematic image showing the floorplan layout.
     * @var \Vnetby\Schemaorg\Types\Thing\CreativeWork\MediaObject\ImageObject\ImageObject|\Vnetby\Schemaorg\DataTypes\DataURL
     */
    protected $prop_layoutImage;

    /**
     * The size of the accommodation, e.g. in square meter or squarefoot. Typical unit code(s): MTK for square meter, FTK for square
     * foot, or YDK for square yard.
     * @var \Vnetby\Schemaorg\Types\Thing\Intangible\StructuredValue\QuantitativeValue\QuantitativeValue
     */
    protected $prop_floorSize;

    /**
     * Indicates the number of available accommodation units in an [[ApartmentComplex]], or the number of accommodation units for a specific [[FloorPlan]] (within
     * its specific [[ApartmentComplex]]). See also [[numberOfAccommodationUnits]].
     * @var \Vnetby\Schemaorg\Types\Thing\Intangible\StructuredValue\QuantitativeValue\QuantitativeValue
     */
    protected $prop_numberOfAvailableAccommodationUnits;

    /**
     * Indicates some accommodation that this floor plan describes.
     * @var \Vnetby\Schemaorg\Types\Thing\Place\Accommodation\Accommodation
     */
    protected $prop_isPlanForApartment;

    /**
     * The total integer number of bathrooms in some [[Accommodation]], following real estate conventions as [documented in RESO](https://ddwiki.reso.org/display/DDW17/BathroomsTotalInteger+Field): "The simple sum of
     * the number of bathrooms. For example for a property with two Full Bathrooms and one Half Bathroom, the Bathrooms Total Integer
     * will be 3.". See also [[numberOfRooms]].
     * @var \Vnetby\Schemaorg\DataTypes\DataInteger
     */
    protected $prop_numberOfBathroomsTotal;

    /**
     * Indicates whether pets are allowed to enter the accommodation or lodging business. More detailed information can be put in a text
     * value.
     * @var \Vnetby\Schemaorg\DataTypes\DataBoolean|\Vnetby\Schemaorg\DataTypes\DataText
     */
    protected $prop_petsAllowed;

    /**
     * An amenity feature (e.g. a characteristic or service) of the Accommodation. This generic property does not make a statement about whether
     * the feature is included in an offer for the main accommodation or available at extra costs.
     * @var \Vnetby\Schemaorg\Types\Thing\Intangible\StructuredValue\PropertyValue\LocationFeatureSpecification
     */
    protected $prop_amenityFeature;

    /**
     * The total integer number of bedrooms in a some [[Accommodation]], [[ApartmentComplex]] or [[FloorPlan]].
     * @var \Vnetby\Schemaorg\DataTypes\DataNumber|\Vnetby\Schemaorg\Types\Thing\Intangible\StructuredValue\QuantitativeValue\QuantitativeValue
     */
    protected $prop_numberOfBedrooms;

    /**
     * Number of partial bathrooms - The total number of half and ¼ bathrooms in an [[Accommodation]]. This corresponds to the [BathroomsPartial
     * field in RESO](https://ddwiki.reso.org/display/DDW17/BathroomsPartial+Field). 
     * @var \Vnetby\Schemaorg\DataTypes\DataNumber
     */
    protected $prop_numberOfPartialBathrooms;

    /**
     * Number of full bathrooms - The total number of full and ¾ bathrooms in an [[Accommodation]]. This corresponds to the [BathroomsFull
     * field in RESO](https://ddwiki.reso.org/display/DDW17/BathroomsFull+Field).
     * @var \Vnetby\Schemaorg\DataTypes\DataNumber
     */
    protected $prop_numberOfFullBathrooms;

    /**
     * Indicates the total (available plus unavailable) number of accommodation units in an [[ApartmentComplex]], or the number of accommodation units for a
     * specific [[FloorPlan]] (within its specific [[ApartmentComplex]]). See also [[numberOfAvailableAccommodationUnits]].
     * @var \Vnetby\Schemaorg\Types\Thing\Intangible\StructuredValue\QuantitativeValue\QuantitativeValue
     */
    protected $prop_numberOfAccommodationUnits;

    /**
     * The number of rooms (excluding bathrooms and closets) of the accommodation or lodging business. Typical unit code(s): ROM for room or
     * C62 for no unit. The type of room can be put in the unitText property of the QuantitativeValue.
     * @var \Vnetby\Schemaorg\Types\Thing\Intangible\StructuredValue\QuantitativeValue\QuantitativeValue|\Vnetby\Schemaorg\DataTypes\DataNumber
     */
    protected $prop_numberOfRooms;

    /**
     * A schematic image showing the floorplan layout.
     * @param \Vnetby\Schemaorg\Types\Thing\CreativeWork\MediaObject\ImageObject\ImageObject|\Vnetby\Schemaorg\DataTypes\DataURL $value
     * @return static
     */
    function setLayoutImage($value)
    {
        return $this->setProp('layoutImage', $value);
    }

    /**
     * The size of the accommodation, e.g. in square meter or squarefoot. Typical unit code(s): MTK for square meter, FTK for square
     * foot, or YDK for square yard.
     * @param \Vnetby\Schemaorg\Types\Thing\Intangible\StructuredValue\QuantitativeValue\QuantitativeValue $value
     * @return static
     */
    function setFloorSize($value)
    {
        return $this->setProp('floorSize', $value);
    }

    /**
     * Indicates the number of available accommodation units in an [[ApartmentComplex]], or the number of accommodation units for a specific [[FloorPlan]] (within
     * its specific [[ApartmentComplex]]). See also [[numberOfAccommodationUnits]].
     * @param \Vnetby\Schemaorg\Types\Thing\Intangible\StructuredValue\QuantitativeValue\QuantitativeValue $value
     * @return static
     */
    function setNumberOfAvailableAccommodationUnits($value)
    {
        return $this->setProp('numberOfAvailableAccommodationUnits', $value);
    }

    /**
     * Indicates some accommodation that this floor plan describes.
     * @param \Vnetby\Schemaorg\Types\Thing\Place\Accommodation\Accommodation $value
     * @return static
     */
    function setIsPlanForApartment($value)
    {
        return $this->setProp('isPlanForApartment', $value);
    }

    /**
     * The total integer number of bathrooms in some [[Accommodation]], following real estate conventions as [documented in RESO](https://ddwiki.reso.org/display/DDW17/BathroomsTotalInteger+Field): "The simple sum of
     * the number of bathrooms. For example for a property with two Full Bathrooms and one Half Bathroom, the Bathrooms Total Integer
     * will be 3.". See also [[numberOfRooms]].
     * @param \Vnetby\Schemaorg\DataTypes\DataInteger $value
     * @return static
     */
    function setNumberOfBathroomsTotal($value)
    {
        return $this->setProp('numberOfBathroomsTotal', $value);
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
     * The total integer number of bedrooms in a some [[Accommodation]], [[ApartmentComplex]] or [[FloorPlan]].
     * @param \Vnetby\Schemaorg\DataTypes\DataNumber|\Vnetby\Schemaorg\Types\Thing\Intangible\StructuredValue\QuantitativeValue\QuantitativeValue $value
     * @return static
     */
    function setNumberOfBedrooms($value)
    {
        return $this->setProp('numberOfBedrooms', $value);
    }

    /**
     * Number of partial bathrooms - The total number of half and ¼ bathrooms in an [[Accommodation]]. This corresponds to the [BathroomsPartial
     * field in RESO](https://ddwiki.reso.org/display/DDW17/BathroomsPartial+Field). 
     * @param \Vnetby\Schemaorg\DataTypes\DataNumber $value
     * @return static
     */
    function setNumberOfPartialBathrooms($value)
    {
        return $this->setProp('numberOfPartialBathrooms', $value);
    }

    /**
     * Number of full bathrooms - The total number of full and ¾ bathrooms in an [[Accommodation]]. This corresponds to the [BathroomsFull
     * field in RESO](https://ddwiki.reso.org/display/DDW17/BathroomsFull+Field).
     * @param \Vnetby\Schemaorg\DataTypes\DataNumber $value
     * @return static
     */
    function setNumberOfFullBathrooms($value)
    {
        return $this->setProp('numberOfFullBathrooms', $value);
    }

    /**
     * Indicates the total (available plus unavailable) number of accommodation units in an [[ApartmentComplex]], or the number of accommodation units for a
     * specific [[FloorPlan]] (within its specific [[ApartmentComplex]]). See also [[numberOfAvailableAccommodationUnits]].
     * @param \Vnetby\Schemaorg\Types\Thing\Intangible\StructuredValue\QuantitativeValue\QuantitativeValue $value
     * @return static
     */
    function setNumberOfAccommodationUnits($value)
    {
        return $this->setProp('numberOfAccommodationUnits', $value);
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
     * A schematic image showing the floorplan layout.
     * @return \Vnetby\Schemaorg\Types\Thing\CreativeWork\MediaObject\ImageObject\ImageObject|\Vnetby\Schemaorg\DataTypes\DataURL|null
     */
    function getLayoutImage()
    {
        return $this->getProp('layoutImage');
    }

    /**
     * The size of the accommodation, e.g. in square meter or squarefoot. Typical unit code(s): MTK for square meter, FTK for square
     * foot, or YDK for square yard.
     * @return \Vnetby\Schemaorg\Types\Thing\Intangible\StructuredValue\QuantitativeValue\QuantitativeValue|null
     */
    function getFloorSize()
    {
        return $this->getProp('floorSize');
    }

    /**
     * Indicates the number of available accommodation units in an [[ApartmentComplex]], or the number of accommodation units for a specific [[FloorPlan]] (within
     * its specific [[ApartmentComplex]]). See also [[numberOfAccommodationUnits]].
     * @return \Vnetby\Schemaorg\Types\Thing\Intangible\StructuredValue\QuantitativeValue\QuantitativeValue|null
     */
    function getNumberOfAvailableAccommodationUnits()
    {
        return $this->getProp('numberOfAvailableAccommodationUnits');
    }

    /**
     * Indicates some accommodation that this floor plan describes.
     * @return \Vnetby\Schemaorg\Types\Thing\Place\Accommodation\Accommodation|null
     */
    function getIsPlanForApartment()
    {
        return $this->getProp('isPlanForApartment');
    }

    /**
     * The total integer number of bathrooms in some [[Accommodation]], following real estate conventions as [documented in RESO](https://ddwiki.reso.org/display/DDW17/BathroomsTotalInteger+Field): "The simple sum of
     * the number of bathrooms. For example for a property with two Full Bathrooms and one Half Bathroom, the Bathrooms Total Integer
     * will be 3.". See also [[numberOfRooms]].
     * @return \Vnetby\Schemaorg\DataTypes\DataInteger|null
     */
    function getNumberOfBathroomsTotal()
    {
        return $this->getProp('numberOfBathroomsTotal');
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
     * An amenity feature (e.g. a characteristic or service) of the Accommodation. This generic property does not make a statement about whether
     * the feature is included in an offer for the main accommodation or available at extra costs.
     * @return \Vnetby\Schemaorg\Types\Thing\Intangible\StructuredValue\PropertyValue\LocationFeatureSpecification|null
     */
    function getAmenityFeature()
    {
        return $this->getProp('amenityFeature');
    }

    /**
     * The total integer number of bedrooms in a some [[Accommodation]], [[ApartmentComplex]] or [[FloorPlan]].
     * @return \Vnetby\Schemaorg\DataTypes\DataNumber|\Vnetby\Schemaorg\Types\Thing\Intangible\StructuredValue\QuantitativeValue\QuantitativeValue|null
     */
    function getNumberOfBedrooms()
    {
        return $this->getProp('numberOfBedrooms');
    }

    /**
     * Number of partial bathrooms - The total number of half and ¼ bathrooms in an [[Accommodation]]. This corresponds to the [BathroomsPartial
     * field in RESO](https://ddwiki.reso.org/display/DDW17/BathroomsPartial+Field). 
     * @return \Vnetby\Schemaorg\DataTypes\DataNumber|null
     */
    function getNumberOfPartialBathrooms()
    {
        return $this->getProp('numberOfPartialBathrooms');
    }

    /**
     * Number of full bathrooms - The total number of full and ¾ bathrooms in an [[Accommodation]]. This corresponds to the [BathroomsFull
     * field in RESO](https://ddwiki.reso.org/display/DDW17/BathroomsFull+Field).
     * @return \Vnetby\Schemaorg\DataTypes\DataNumber|null
     */
    function getNumberOfFullBathrooms()
    {
        return $this->getProp('numberOfFullBathrooms');
    }

    /**
     * Indicates the total (available plus unavailable) number of accommodation units in an [[ApartmentComplex]], or the number of accommodation units for a
     * specific [[FloorPlan]] (within its specific [[ApartmentComplex]]). See also [[numberOfAvailableAccommodationUnits]].
     * @return \Vnetby\Schemaorg\Types\Thing\Intangible\StructuredValue\QuantitativeValue\QuantitativeValue|null
     */
    function getNumberOfAccommodationUnits()
    {
        return $this->getProp('numberOfAccommodationUnits');
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
