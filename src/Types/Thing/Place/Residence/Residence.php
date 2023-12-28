<?php

/**
 * @see https://schema.org/Residence
 * The place where a person lives.
 */

namespace Vnetby\Schemaorg\Types\Thing\Place\Residence;

class Residence extends \Vnetby\Schemaorg\Types\Thing\Place\Place
{
    const TYPE = 'Residence';

    /**
     * A floorplan of some [[Accommodation]].
     * @var \Vnetby\Schemaorg\Types\Thing\Intangible\FloorPlan
     */
    protected $prop_accommodationFloorPlan;

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
     * A floorplan of some [[Accommodation]].
     * @return \Vnetby\Schemaorg\Types\Thing\Intangible\FloorPlan|null
     */
    function getAccommodationFloorPlan()
    {
        return $this->getProp('accommodationFloorPlan');
    }
}
