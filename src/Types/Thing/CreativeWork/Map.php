<?php

/**
 * @see https://schema.org/Map
 * A map.
 */

namespace Vnetby\Schemaorg\Types\Thing\CreativeWork;

class Map extends \Vnetby\Schemaorg\Types\Thing\CreativeWork\CreativeWork
{
    const TYPE = 'Map';

    /**
     * Indicates the kind of Map, from the MapCategoryType Enumeration.
     * @var \Vnetby\Schemaorg\Types\Thing\Intangible\Enumeration\MapCategoryType\MapCategoryType
     */
    protected $prop_mapType;

    /**
     * Indicates the kind of Map, from the MapCategoryType Enumeration.
     * @param \Vnetby\Schemaorg\Types\Thing\Intangible\Enumeration\MapCategoryType\MapCategoryType $value
     * @return static
     */
    function setMapType($value)
    {
        return $this->setProp('mapType', $value);
    }

    /**
     * Indicates the kind of Map, from the MapCategoryType Enumeration.
     * @return \Vnetby\Schemaorg\Types\Thing\Intangible\Enumeration\MapCategoryType\MapCategoryType|null
     */
    function getMapType()
    {
        return $this->getProp('mapType');
    }
}
