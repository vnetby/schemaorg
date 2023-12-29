<?php

/**
 * @see https://schema.org/Accommodation
 * An accommodation is a place that can accommodate human beings, e.g. a hotel room, a camping pitch, or a meeting room.
 * Many accommodations are for overnight stays, but this is not a mandatory requirement. For more specific types of accommodations not defined
 * in schema.org, one can use [[additionalType]] with external vocabularies. <br /><br /> See also the <a href="/docs/hotels.html">dedicated document on the use
 * of schema.org for marking up hotels and other forms of accommodations</a>. 
 */

namespace Vnetby\Schemaorg\Types\Thing\Place\Accommodation;

class Accommodation extends \Vnetby\Schemaorg\Types\Thing\Place\Place
{
    const TYPE = 'Accommodation';

    /**
     * Length of the lease for some [[Accommodation]], either particular to some [[Offer]] or in some cases intrinsic to the property.
     * @var \Vnetby\Schemaorg\Types\Thing\Intangible\Quantity\Duration|\Vnetby\Schemaorg\Types\Thing\Intangible\StructuredValue\QuantitativeValue\QuantitativeValue
     */
    public $leaseLength;

    /**
     * The type of bed or beds included in the accommodation. For the single case of just one bed of a certain
     * type, you use bed directly with a text. If you want to indicate the quantity of a certain kind of bed,
     * use an instance of BedDetails. For more detailed information, use the amenityFeature property.
     * @var string|\Vnetby\Schemaorg\DataTypes\DataText|\Vnetby\Schemaorg\Types\Thing\Intangible\Enumeration\QualitativeValue\BedType|\Vnetby\Schemaorg\Types\Thing\Intangible\BedDetails
     */
    public $bed;

    /**
     * The year an [[Accommodation]] was constructed. This corresponds to the [YearBuilt field in RESO](https://ddwiki.reso.org/display/DDW17/YearBuilt+Field). 
     * @var string|int|float|\Vnetby\Schemaorg\DataTypes\DataNumber
     */
    public $yearBuilt;

    /**
     * The size of the accommodation, e.g. in square meter or squarefoot. Typical unit code(s): MTK for square meter, FTK for square
     * foot, or YDK for square yard.
     * @var \Vnetby\Schemaorg\Types\Thing\Intangible\StructuredValue\QuantitativeValue\QuantitativeValue
     */
    public $floorSize;

    /**
     * Category of an [[Accommodation]], following real estate conventions, e.g. RESO (see [PropertySubType](https://ddwiki.reso.org/display/DDW17/PropertySubType+Field), and [PropertyType](https://ddwiki.reso.org/display/DDW17/PropertyType+Field) fields for suggested values).
     * @var string|\Vnetby\Schemaorg\DataTypes\DataText
     */
    public $accommodationCategory;

    /**
     * Indications regarding the permitted usage of the accommodation.
     * @var string|\Vnetby\Schemaorg\DataTypes\DataText
     */
    public $permittedUsage;

    /**
     * The total integer number of bathrooms in some [[Accommodation]], following real estate conventions as [documented in RESO](https://ddwiki.reso.org/display/DDW17/BathroomsTotalInteger+Field): "The simple sum of
     * the number of bathrooms. For example for a property with two Full Bathrooms and one Half Bathroom, the Bathrooms Total Integer
     * will be 3.". See also [[numberOfRooms]].
     * @var string|int|\Vnetby\Schemaorg\DataTypes\DataInteger
     */
    public $numberOfBathroomsTotal;

    /**
     * Indicates whether pets are allowed to enter the accommodation or lodging business. More detailed information can be put in a text
     * value.
     * @var bool|string|\Vnetby\Schemaorg\DataTypes\DataBoolean|\Vnetby\Schemaorg\DataTypes\DataText
     */
    public $petsAllowed;

    /**
     * An amenity feature (e.g. a characteristic or service) of the Accommodation. This generic property does not make a statement about whether
     * the feature is included in an offer for the main accommodation or available at extra costs.
     * @var \Vnetby\Schemaorg\Types\Thing\Intangible\StructuredValue\PropertyValue\LocationFeatureSpecification
     */
    public $amenityFeature;

    /**
     * A page providing information on how to book a tour of some [[Place]], such as an [[Accommodation]] or [[ApartmentComplex]] in a
     * real estate setting, as well as other kinds of tours as appropriate.
     * @var string|\Vnetby\Schemaorg\DataTypes\DataURL
     */
    public $tourBookingPage;

    /**
     * The total integer number of bedrooms in a some [[Accommodation]], [[ApartmentComplex]] or [[FloorPlan]].
     * @var string|int|float|\Vnetby\Schemaorg\DataTypes\DataNumber|\Vnetby\Schemaorg\Types\Thing\Intangible\StructuredValue\QuantitativeValue\QuantitativeValue
     */
    public $numberOfBedrooms;

    /**
     * The floor level for an [[Accommodation]] in a multi-storey building. Since counting systems [vary internationally](https://en.wikipedia.org/wiki/Storey#Consecutive_number_floor_designations), the local system should be used
     * where possible.
     * @var string|\Vnetby\Schemaorg\DataTypes\DataText
     */
    public $floorLevel;

    /**
     * Number of partial bathrooms - The total number of half and ¼ bathrooms in an [[Accommodation]]. This corresponds to the [BathroomsPartial
     * field in RESO](https://ddwiki.reso.org/display/DDW17/BathroomsPartial+Field). 
     * @var string|int|float|\Vnetby\Schemaorg\DataTypes\DataNumber
     */
    public $numberOfPartialBathrooms;

    /**
     * Number of full bathrooms - The total number of full and ¾ bathrooms in an [[Accommodation]]. This corresponds to the [BathroomsFull
     * field in RESO](https://ddwiki.reso.org/display/DDW17/BathroomsFull+Field).
     * @var string|int|float|\Vnetby\Schemaorg\DataTypes\DataNumber
     */
    public $numberOfFullBathrooms;

    /**
     * A floorplan of some [[Accommodation]].
     * @var \Vnetby\Schemaorg\Types\Thing\Intangible\FloorPlan
     */
    public $accommodationFloorPlan;

    /**
     * The allowed total occupancy for the accommodation in persons (including infants etc). For individual accommodations, this is not necessarily the legal
     * maximum but defines the permitted usage as per the contractual agreement (e.g. a double room used by a single person). Typical
     * unit code(s): C62 for person.
     * @var \Vnetby\Schemaorg\Types\Thing\Intangible\StructuredValue\QuantitativeValue\QuantitativeValue
     */
    public $occupancy;

    /**
     * The number of rooms (excluding bathrooms and closets) of the accommodation or lodging business. Typical unit code(s): ROM for room or
     * C62 for no unit. The type of room can be put in the unitText property of the QuantitativeValue.
     * @var string|int|float|\Vnetby\Schemaorg\Types\Thing\Intangible\StructuredValue\QuantitativeValue\QuantitativeValue|\Vnetby\Schemaorg\DataTypes\DataNumber
     */
    public $numberOfRooms;

    /**
     * Length of the lease for some [[Accommodation]], either particular to some [[Offer]] or in some cases intrinsic to the property.
     * @param \Vnetby\Schemaorg\Types\Thing\Intangible\Quantity\Duration|\Vnetby\Schemaorg\Types\Thing\Intangible\StructuredValue\QuantitativeValue\QuantitativeValue $value
     * @return static
     */
    function setLeaseLength($value)
    {
        return $this->setProp('leaseLength', $value);
    }

    /**
     * The type of bed or beds included in the accommodation. For the single case of just one bed of a certain
     * type, you use bed directly with a text. If you want to indicate the quantity of a certain kind of bed,
     * use an instance of BedDetails. For more detailed information, use the amenityFeature property.
     * @param string|\Vnetby\Schemaorg\DataTypes\DataText|\Vnetby\Schemaorg\Types\Thing\Intangible\Enumeration\QualitativeValue\BedType|\Vnetby\Schemaorg\Types\Thing\Intangible\BedDetails $value
     * @return static
     */
    function setBed($value)
    {
        return $this->setProp('bed', $value);
    }

    /**
     * The year an [[Accommodation]] was constructed. This corresponds to the [YearBuilt field in RESO](https://ddwiki.reso.org/display/DDW17/YearBuilt+Field). 
     * @param string|int|float|\Vnetby\Schemaorg\DataTypes\DataNumber $value
     * @return static
     */
    function setYearBuilt($value)
    {
        return $this->setProp('yearBuilt', $value);
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
     * Category of an [[Accommodation]], following real estate conventions, e.g. RESO (see [PropertySubType](https://ddwiki.reso.org/display/DDW17/PropertySubType+Field), and [PropertyType](https://ddwiki.reso.org/display/DDW17/PropertyType+Field) fields for suggested values).
     * @param string|\Vnetby\Schemaorg\DataTypes\DataText $value
     * @return static
     */
    function setAccommodationCategory($value)
    {
        return $this->setProp('accommodationCategory', $value);
    }

    /**
     * Indications regarding the permitted usage of the accommodation.
     * @param string|\Vnetby\Schemaorg\DataTypes\DataText $value
     * @return static
     */
    function setPermittedUsage($value)
    {
        return $this->setProp('permittedUsage', $value);
    }

    /**
     * The total integer number of bathrooms in some [[Accommodation]], following real estate conventions as [documented in RESO](https://ddwiki.reso.org/display/DDW17/BathroomsTotalInteger+Field): "The simple sum of
     * the number of bathrooms. For example for a property with two Full Bathrooms and one Half Bathroom, the Bathrooms Total Integer
     * will be 3.". See also [[numberOfRooms]].
     * @param string|int|\Vnetby\Schemaorg\DataTypes\DataInteger $value
     * @return static
     */
    function setNumberOfBathroomsTotal($value)
    {
        return $this->setProp('numberOfBathroomsTotal', $value);
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
     * A page providing information on how to book a tour of some [[Place]], such as an [[Accommodation]] or [[ApartmentComplex]] in a
     * real estate setting, as well as other kinds of tours as appropriate.
     * @param string|\Vnetby\Schemaorg\DataTypes\DataURL $value
     * @return static
     */
    function setTourBookingPage($value)
    {
        return $this->setProp('tourBookingPage', $value);
    }

    /**
     * The total integer number of bedrooms in a some [[Accommodation]], [[ApartmentComplex]] or [[FloorPlan]].
     * @param string|int|float|\Vnetby\Schemaorg\DataTypes\DataNumber|\Vnetby\Schemaorg\Types\Thing\Intangible\StructuredValue\QuantitativeValue\QuantitativeValue $value
     * @return static
     */
    function setNumberOfBedrooms($value)
    {
        return $this->setProp('numberOfBedrooms', $value);
    }

    /**
     * The floor level for an [[Accommodation]] in a multi-storey building. Since counting systems [vary internationally](https://en.wikipedia.org/wiki/Storey#Consecutive_number_floor_designations), the local system should be used
     * where possible.
     * @param string|\Vnetby\Schemaorg\DataTypes\DataText $value
     * @return static
     */
    function setFloorLevel($value)
    {
        return $this->setProp('floorLevel', $value);
    }

    /**
     * Number of partial bathrooms - The total number of half and ¼ bathrooms in an [[Accommodation]]. This corresponds to the [BathroomsPartial
     * field in RESO](https://ddwiki.reso.org/display/DDW17/BathroomsPartial+Field). 
     * @param string|int|float|\Vnetby\Schemaorg\DataTypes\DataNumber $value
     * @return static
     */
    function setNumberOfPartialBathrooms($value)
    {
        return $this->setProp('numberOfPartialBathrooms', $value);
    }

    /**
     * Number of full bathrooms - The total number of full and ¾ bathrooms in an [[Accommodation]]. This corresponds to the [BathroomsFull
     * field in RESO](https://ddwiki.reso.org/display/DDW17/BathroomsFull+Field).
     * @param string|int|float|\Vnetby\Schemaorg\DataTypes\DataNumber $value
     * @return static
     */
    function setNumberOfFullBathrooms($value)
    {
        return $this->setProp('numberOfFullBathrooms', $value);
    }

    /**
     * A floorplan of some [[Accommodation]].
     * @param \Vnetby\Schemaorg\Types\Thing\Intangible\FloorPlan $value
     * @return static
     */
    function setAccommodationFloorPlan($value)
    {
        return $this->setProp('accommodationFloorPlan', $value);
    }

    /**
     * The allowed total occupancy for the accommodation in persons (including infants etc). For individual accommodations, this is not necessarily the legal
     * maximum but defines the permitted usage as per the contractual agreement (e.g. a double room used by a single person). Typical
     * unit code(s): C62 for person.
     * @param \Vnetby\Schemaorg\Types\Thing\Intangible\StructuredValue\QuantitativeValue\QuantitativeValue $value
     * @return static
     */
    function setOccupancy($value)
    {
        return $this->setProp('occupancy', $value);
    }

    /**
     * The number of rooms (excluding bathrooms and closets) of the accommodation or lodging business. Typical unit code(s): ROM for room or
     * C62 for no unit. The type of room can be put in the unitText property of the QuantitativeValue.
     * @param string|int|float|\Vnetby\Schemaorg\Types\Thing\Intangible\StructuredValue\QuantitativeValue\QuantitativeValue|\Vnetby\Schemaorg\DataTypes\DataNumber $value
     * @return static
     */
    function setNumberOfRooms($value)
    {
        return $this->setProp('numberOfRooms', $value);
    }

    /**
     * Length of the lease for some [[Accommodation]], either particular to some [[Offer]] or in some cases intrinsic to the property.
     * @return \Vnetby\Schemaorg\Types\Thing\Intangible\Quantity\Duration|\Vnetby\Schemaorg\Types\Thing\Intangible\StructuredValue\QuantitativeValue\QuantitativeValue|null
     */
    function getLeaseLength()
    {
        return $this->getProp('leaseLength');
    }

    /**
     * The type of bed or beds included in the accommodation. For the single case of just one bed of a certain
     * type, you use bed directly with a text. If you want to indicate the quantity of a certain kind of bed,
     * use an instance of BedDetails. For more detailed information, use the amenityFeature property.
     * @return string|\Vnetby\Schemaorg\DataTypes\DataText|\Vnetby\Schemaorg\Types\Thing\Intangible\Enumeration\QualitativeValue\BedType|\Vnetby\Schemaorg\Types\Thing\Intangible\BedDetails|null
     */
    function getBed()
    {
        return $this->getProp('bed');
    }

    /**
     * The year an [[Accommodation]] was constructed. This corresponds to the [YearBuilt field in RESO](https://ddwiki.reso.org/display/DDW17/YearBuilt+Field). 
     * @return string|int|float|\Vnetby\Schemaorg\DataTypes\DataNumber|null
     */
    function getYearBuilt()
    {
        return $this->getProp('yearBuilt');
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
     * Category of an [[Accommodation]], following real estate conventions, e.g. RESO (see [PropertySubType](https://ddwiki.reso.org/display/DDW17/PropertySubType+Field), and [PropertyType](https://ddwiki.reso.org/display/DDW17/PropertyType+Field) fields for suggested values).
     * @return string|\Vnetby\Schemaorg\DataTypes\DataText|null
     */
    function getAccommodationCategory()
    {
        return $this->getProp('accommodationCategory');
    }

    /**
     * Indications regarding the permitted usage of the accommodation.
     * @return string|\Vnetby\Schemaorg\DataTypes\DataText|null
     */
    function getPermittedUsage()
    {
        return $this->getProp('permittedUsage');
    }

    /**
     * The total integer number of bathrooms in some [[Accommodation]], following real estate conventions as [documented in RESO](https://ddwiki.reso.org/display/DDW17/BathroomsTotalInteger+Field): "The simple sum of
     * the number of bathrooms. For example for a property with two Full Bathrooms and one Half Bathroom, the Bathrooms Total Integer
     * will be 3.". See also [[numberOfRooms]].
     * @return string|int|\Vnetby\Schemaorg\DataTypes\DataInteger|null
     */
    function getNumberOfBathroomsTotal()
    {
        return $this->getProp('numberOfBathroomsTotal');
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
     * An amenity feature (e.g. a characteristic or service) of the Accommodation. This generic property does not make a statement about whether
     * the feature is included in an offer for the main accommodation or available at extra costs.
     * @return \Vnetby\Schemaorg\Types\Thing\Intangible\StructuredValue\PropertyValue\LocationFeatureSpecification|null
     */
    function getAmenityFeature()
    {
        return $this->getProp('amenityFeature');
    }

    /**
     * A page providing information on how to book a tour of some [[Place]], such as an [[Accommodation]] or [[ApartmentComplex]] in a
     * real estate setting, as well as other kinds of tours as appropriate.
     * @return string|\Vnetby\Schemaorg\DataTypes\DataURL|null
     */
    function getTourBookingPage()
    {
        return $this->getProp('tourBookingPage');
    }

    /**
     * The total integer number of bedrooms in a some [[Accommodation]], [[ApartmentComplex]] or [[FloorPlan]].
     * @return string|int|float|\Vnetby\Schemaorg\DataTypes\DataNumber|\Vnetby\Schemaorg\Types\Thing\Intangible\StructuredValue\QuantitativeValue\QuantitativeValue|null
     */
    function getNumberOfBedrooms()
    {
        return $this->getProp('numberOfBedrooms');
    }

    /**
     * The floor level for an [[Accommodation]] in a multi-storey building. Since counting systems [vary internationally](https://en.wikipedia.org/wiki/Storey#Consecutive_number_floor_designations), the local system should be used
     * where possible.
     * @return string|\Vnetby\Schemaorg\DataTypes\DataText|null
     */
    function getFloorLevel()
    {
        return $this->getProp('floorLevel');
    }

    /**
     * Number of partial bathrooms - The total number of half and ¼ bathrooms in an [[Accommodation]]. This corresponds to the [BathroomsPartial
     * field in RESO](https://ddwiki.reso.org/display/DDW17/BathroomsPartial+Field). 
     * @return string|int|float|\Vnetby\Schemaorg\DataTypes\DataNumber|null
     */
    function getNumberOfPartialBathrooms()
    {
        return $this->getProp('numberOfPartialBathrooms');
    }

    /**
     * Number of full bathrooms - The total number of full and ¾ bathrooms in an [[Accommodation]]. This corresponds to the [BathroomsFull
     * field in RESO](https://ddwiki.reso.org/display/DDW17/BathroomsFull+Field).
     * @return string|int|float|\Vnetby\Schemaorg\DataTypes\DataNumber|null
     */
    function getNumberOfFullBathrooms()
    {
        return $this->getProp('numberOfFullBathrooms');
    }

    /**
     * A floorplan of some [[Accommodation]].
     * @return \Vnetby\Schemaorg\Types\Thing\Intangible\FloorPlan|null
     */
    function getAccommodationFloorPlan()
    {
        return $this->getProp('accommodationFloorPlan');
    }

    /**
     * The allowed total occupancy for the accommodation in persons (including infants etc). For individual accommodations, this is not necessarily the legal
     * maximum but defines the permitted usage as per the contractual agreement (e.g. a double room used by a single person). Typical
     * unit code(s): C62 for person.
     * @return \Vnetby\Schemaorg\Types\Thing\Intangible\StructuredValue\QuantitativeValue\QuantitativeValue|null
     */
    function getOccupancy()
    {
        return $this->getProp('occupancy');
    }

    /**
     * The number of rooms (excluding bathrooms and closets) of the accommodation or lodging business. Typical unit code(s): ROM for room or
     * C62 for no unit. The type of room can be put in the unitText property of the QuantitativeValue.
     * @return string|int|float|\Vnetby\Schemaorg\Types\Thing\Intangible\StructuredValue\QuantitativeValue\QuantitativeValue|\Vnetby\Schemaorg\DataTypes\DataNumber|null
     */
    function getNumberOfRooms()
    {
        return $this->getProp('numberOfRooms');
    }
}
