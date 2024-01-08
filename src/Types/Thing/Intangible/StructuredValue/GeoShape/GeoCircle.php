<?php

/**
 * @see https://schema.org/GeoCircle
 * A GeoCircle is a GeoShape representing a circular geographic area. As it is a GeoShape it provides the simple textual property
 * 'circle', but also allows the combination of postalCode alongside geoRadius. The center of the circle can be indicated via the 'geoMidpoint'
 * property, or more approximately using 'address', 'postalCode'. 
 */

namespace Vnetby\Schemaorg\Types\Thing\Intangible\StructuredValue\GeoShape;

class GeoCircle extends \Vnetby\Schemaorg\Types\Thing\Intangible\StructuredValue\GeoShape\GeoShape
{
    const TYPE = 'GeoCircle';

    /**
     * Indicates the GeoCoordinates at the centre of a GeoShape, e.g. GeoCircle.
     * @var \Vnetby\Schemaorg\Types\Thing\Intangible\StructuredValue\GeoCoordinates
     */
    public $geoMidpoint;

    /**
     * Indicates the approximate radius of a GeoCircle (metres unless indicated otherwise via Distance notation).
     * @var string|int|float|\Vnetby\Schemaorg\DataTypes\DataNumber|\Vnetby\Schemaorg\DataTypes\DataText|\Vnetby\Schemaorg\Types\Thing\Intangible\Quantity\Distance
     */
    public $geoRadius;

    /**
     * Indicates the GeoCoordinates at the centre of a GeoShape, e.g. GeoCircle.
     * @param \Vnetby\Schemaorg\Types\Thing\Intangible\StructuredValue\GeoCoordinates $value
     * @return static
     */
    function setGeoMidpoint($value)
    {
        return $this->setProp('geoMidpoint', $value);
    }

    /**
     * Indicates the approximate radius of a GeoCircle (metres unless indicated otherwise via Distance notation).
     * @param string|int|float|\Vnetby\Schemaorg\DataTypes\DataNumber|\Vnetby\Schemaorg\DataTypes\DataText|\Vnetby\Schemaorg\Types\Thing\Intangible\Quantity\Distance $value
     * @return static
     */
    function setGeoRadius($value)
    {
        return $this->setProp('geoRadius', $value);
    }

    /**
     * Indicates the GeoCoordinates at the centre of a GeoShape, e.g. GeoCircle.
     * @return \Vnetby\Schemaorg\Types\Thing\Intangible\StructuredValue\GeoCoordinates|null
     */
    function getGeoMidpoint()
    {
        return $this->getProp('geoMidpoint');
    }

    /**
     * Indicates the approximate radius of a GeoCircle (metres unless indicated otherwise via Distance notation).
     * @return string|int|float|\Vnetby\Schemaorg\DataTypes\DataNumber|\Vnetby\Schemaorg\DataTypes\DataText|\Vnetby\Schemaorg\Types\Thing\Intangible\Quantity\Distance|null
     */
    function getGeoRadius()
    {
        return $this->getProp('geoRadius');
    }
}
