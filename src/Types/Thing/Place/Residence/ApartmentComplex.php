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
     * A page providing information on how to book a tour of some [[Place]], such as an [[Accommodation]] or [[ApartmentComplex]] in a
     * real estate setting, as well as other kinds of tours as appropriate.
     * @var string|\Vnetby\Schemaorg\DataTypes\DataURL
     */
    public $tourBookingPage;

    /**
     * Indicates the total (available plus unavailable) number of accommodation units in an [[ApartmentComplex]], or the number of accommodation units for a
     * specific [[FloorPlan]] (within its specific [[ApartmentComplex]]). See also [[numberOfAvailableAccommodationUnits]].
     * @var \Vnetby\Schemaorg\Types\Thing\Intangible\StructuredValue\QuantitativeValue\QuantitativeValue
     */
    public $numberOfAccommodationUnits;

    /**
     * Indicates the number of available accommodation units in an [[ApartmentComplex]], or the number of accommodation units for a specific [[FloorPlan]] (within
     * its specific [[ApartmentComplex]]). See also [[numberOfAccommodationUnits]].
     * @var \Vnetby\Schemaorg\Types\Thing\Intangible\StructuredValue\QuantitativeValue\QuantitativeValue
     */
    public $numberOfAvailableAccommodationUnits;

    /**
     * The total integer number of bedrooms in a some [[Accommodation]], [[ApartmentComplex]] or [[FloorPlan]].
     * @var string|int|float|\Vnetby\Schemaorg\DataTypes\DataNumber|\Vnetby\Schemaorg\Types\Thing\Intangible\StructuredValue\QuantitativeValue\QuantitativeValue
     */
    public $numberOfBedrooms;

    /**
     * Indicates whether pets are allowed to enter the accommodation or lodging business. More detailed information can be put in a text
     * value.
     * @var bool|string|\Vnetby\Schemaorg\DataTypes\DataBoolean|\Vnetby\Schemaorg\DataTypes\DataText
     */
    public $petsAllowed;

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
     * @param \Vnetby\Schemaorg\Types\Thing\Intangible\StructuredValue\QuantitativeValue\QuantitativeValue $value
     * @return static
     */
    function setNumberOfAvailableAccommodationUnits($value)
    {
        return $this->setProp('numberOfAvailableAccommodationUnits', $value);
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
     * A page providing information on how to book a tour of some [[Place]], such as an [[Accommodation]] or [[ApartmentComplex]] in a
     * real estate setting, as well as other kinds of tours as appropriate.
     * @return string|\Vnetby\Schemaorg\DataTypes\DataURL|null
     */
    function getTourBookingPage()
    {
        return $this->getProp('tourBookingPage');
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
     * Indicates the number of available accommodation units in an [[ApartmentComplex]], or the number of accommodation units for a specific [[FloorPlan]] (within
     * its specific [[ApartmentComplex]]). See also [[numberOfAccommodationUnits]].
     * @return \Vnetby\Schemaorg\Types\Thing\Intangible\StructuredValue\QuantitativeValue\QuantitativeValue|null
     */
    function getNumberOfAvailableAccommodationUnits()
    {
        return $this->getProp('numberOfAvailableAccommodationUnits');
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
     * Indicates whether pets are allowed to enter the accommodation or lodging business. More detailed information can be put in a text
     * value.
     * @return bool|string|\Vnetby\Schemaorg\DataTypes\DataBoolean|\Vnetby\Schemaorg\DataTypes\DataText|null
     */
    function getPetsAllowed()
    {
        return $this->getProp('petsAllowed');
    }
}
