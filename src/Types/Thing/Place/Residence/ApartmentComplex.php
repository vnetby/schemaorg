<?php

/**
 * @see https://schema.org/ApartmentComplex
 * Residence type: Apartment complex.
 */

namespace Vnetby\Schemaorg\Types\Thing\Place\Residence;

class ApartmentComplex extends \Vnetby\Schemaorg\Types\Thing\Place\Residence\Residence
{
    const TYPE = 'ApartmentComplex';

    /**
     * Indicates the number of available accommodation units in an [[ApartmentComplex]], or the number of accommodation units for a specific [[FloorPlan]] (within
     * its specific [[ApartmentComplex]]). See also [[numberOfAccommodationUnits]].
     * @var \Vnetby\Schemaorg\Types\Thing\Intangible\StructuredValue\QuantitativeValue\QuantitativeValue
     */
    protected $prop_numberOfAvailableAccommodationUnits;

    /**
     * Indicates whether pets are allowed to enter the accommodation or lodging business. More detailed information can be put in a text
     * value.
     * @var \Vnetby\Schemaorg\DataTypes\DataBoolean|\Vnetby\Schemaorg\DataTypes\DataText
     */
    protected $prop_petsAllowed;

    /**
     * A page providing information on how to book a tour of some [[Place]], such as an [[Accommodation]] or [[ApartmentComplex]] in a
     * real estate setting, as well as other kinds of tours as appropriate.
     * @var \Vnetby\Schemaorg\DataTypes\DataURL
     */
    protected $prop_tourBookingPage;

    /**
     * The total integer number of bedrooms in a some [[Accommodation]], [[ApartmentComplex]] or [[FloorPlan]].
     * @var \Vnetby\Schemaorg\DataTypes\DataNumber|\Vnetby\Schemaorg\Types\Thing\Intangible\StructuredValue\QuantitativeValue\QuantitativeValue
     */
    protected $prop_numberOfBedrooms;

    /**
     * Indicates the total (available plus unavailable) number of accommodation units in an [[ApartmentComplex]], or the number of accommodation units for a
     * specific [[FloorPlan]] (within its specific [[ApartmentComplex]]). See also [[numberOfAvailableAccommodationUnits]].
     * @var \Vnetby\Schemaorg\Types\Thing\Intangible\StructuredValue\QuantitativeValue\QuantitativeValue
     */
    protected $prop_numberOfAccommodationUnits;

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
     * The total integer number of bedrooms in a some [[Accommodation]], [[ApartmentComplex]] or [[FloorPlan]].
     * @param \Vnetby\Schemaorg\DataTypes\DataNumber|\Vnetby\Schemaorg\Types\Thing\Intangible\StructuredValue\QuantitativeValue\QuantitativeValue $value
     * @return static
     */
    function setNumberOfBedrooms($value)
    {
        return $this->setProp('numberOfBedrooms', $value);
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
     * Indicates the number of available accommodation units in an [[ApartmentComplex]], or the number of accommodation units for a specific [[FloorPlan]] (within
     * its specific [[ApartmentComplex]]). See also [[numberOfAccommodationUnits]].
     * @return \Vnetby\Schemaorg\Types\Thing\Intangible\StructuredValue\QuantitativeValue\QuantitativeValue|null
     */
    function getNumberOfAvailableAccommodationUnits()
    {
        return $this->getProp('numberOfAvailableAccommodationUnits');
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
     * A page providing information on how to book a tour of some [[Place]], such as an [[Accommodation]] or [[ApartmentComplex]] in a
     * real estate setting, as well as other kinds of tours as appropriate.
     * @return \Vnetby\Schemaorg\DataTypes\DataURL|null
     */
    function getTourBookingPage()
    {
        return $this->getProp('tourBookingPage');
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
     * Indicates the total (available plus unavailable) number of accommodation units in an [[ApartmentComplex]], or the number of accommodation units for a
     * specific [[FloorPlan]] (within its specific [[ApartmentComplex]]). See also [[numberOfAvailableAccommodationUnits]].
     * @return \Vnetby\Schemaorg\Types\Thing\Intangible\StructuredValue\QuantitativeValue\QuantitativeValue|null
     */
    function getNumberOfAccommodationUnits()
    {
        return $this->getProp('numberOfAccommodationUnits');
    }
}
