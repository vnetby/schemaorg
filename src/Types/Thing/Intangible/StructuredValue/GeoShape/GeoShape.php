<?php

/**
 * @see https://schema.org/GeoShape
 * The geographic shape of a place. A GeoShape can be described using several properties whose values are based on latitude/longitude pairs.
 * Either whitespace or commas can be used to separate latitude and longitude; whitespace should be used when writing a list of
 * several such points.
 */

namespace Vnetby\Schemaorg\Types\Thing\Intangible\StructuredValue\GeoShape;

class GeoShape extends \Vnetby\Schemaorg\Types\Thing\Intangible\StructuredValue\StructuredValue
{
    const TYPE = 'GeoShape';

    /**
     * The country. For example, USA. You can also provide the two-letter [ISO 3166-1 alpha-2 country code](http://en.wikipedia.org/wiki/ISO_3166-1).
     * @var \Vnetby\Schemaorg\DataTypes\DataText|\Vnetby\Schemaorg\Types\Thing\Place\AdministrativeArea\Country
     */
    protected $prop_addressCountry;

    /**
     * The elevation of a location ([WGS 84](https://en.wikipedia.org/wiki/World_Geodetic_System)). Values may be of the form 'NUMBER UNIT\_OF\_MEASUREMENT' (e.g., '1,000 m', '3,200 ft') while
     * numbers alone should be assumed to be a value in meters.
     * @var \Vnetby\Schemaorg\DataTypes\DataNumber|\Vnetby\Schemaorg\DataTypes\DataText
     */
    protected $prop_elevation;

    /**
     * A line is a point-to-point path consisting of two or more points. A line is expressed as a series of two
     * or more point objects separated by space.
     * @var \Vnetby\Schemaorg\DataTypes\DataText
     */
    protected $prop_line;

    /**
     * A polygon is the area enclosed by a point-to-point path for which the starting and ending points are the same. A
     * polygon is expressed as a series of four or more space delimited points where the first and final points are identical.
     * @var \Vnetby\Schemaorg\DataTypes\DataText
     */
    protected $prop_polygon;

    /**
     * A box is the area enclosed by the rectangle formed by two points. The first point is the lower corner, the
     * second point is the upper corner. A box is expressed as two points separated by a space character.
     * @var \Vnetby\Schemaorg\DataTypes\DataText
     */
    protected $prop_box;

    /**
     * Physical address of the item.
     * @var \Vnetby\Schemaorg\Types\Thing\Intangible\StructuredValue\ContactPoint\PostalAddress|\Vnetby\Schemaorg\DataTypes\DataText
     */
    protected $prop_address;

    /**
     * A circle is the circular region of a specified radius centered at a specified latitude and longitude. A circle is expressed
     * as a pair followed by a radius in meters.
     * @var \Vnetby\Schemaorg\DataTypes\DataText
     */
    protected $prop_circle;

    /**
     * The postal code. For example, 94043.
     * @var \Vnetby\Schemaorg\DataTypes\DataText
     */
    protected $prop_postalCode;

    /**
     * The country. For example, USA. You can also provide the two-letter [ISO 3166-1 alpha-2 country code](http://en.wikipedia.org/wiki/ISO_3166-1).
     * @param \Vnetby\Schemaorg\DataTypes\DataText|\Vnetby\Schemaorg\Types\Thing\Place\AdministrativeArea\Country $value
     * @return static
     */
    function setAddressCountry($value)
    {
        return $this->setProp('addressCountry', $value);
    }

    /**
     * The elevation of a location ([WGS 84](https://en.wikipedia.org/wiki/World_Geodetic_System)). Values may be of the form 'NUMBER UNIT\_OF\_MEASUREMENT' (e.g., '1,000 m', '3,200 ft') while
     * numbers alone should be assumed to be a value in meters.
     * @param \Vnetby\Schemaorg\DataTypes\DataNumber|\Vnetby\Schemaorg\DataTypes\DataText $value
     * @return static
     */
    function setElevation($value)
    {
        return $this->setProp('elevation', $value);
    }

    /**
     * A line is a point-to-point path consisting of two or more points. A line is expressed as a series of two
     * or more point objects separated by space.
     * @param \Vnetby\Schemaorg\DataTypes\DataText $value
     * @return static
     */
    function setLine($value)
    {
        return $this->setProp('line', $value);
    }

    /**
     * A polygon is the area enclosed by a point-to-point path for which the starting and ending points are the same. A
     * polygon is expressed as a series of four or more space delimited points where the first and final points are identical.
     * @param \Vnetby\Schemaorg\DataTypes\DataText $value
     * @return static
     */
    function setPolygon($value)
    {
        return $this->setProp('polygon', $value);
    }

    /**
     * A box is the area enclosed by the rectangle formed by two points. The first point is the lower corner, the
     * second point is the upper corner. A box is expressed as two points separated by a space character.
     * @param \Vnetby\Schemaorg\DataTypes\DataText $value
     * @return static
     */
    function setBox($value)
    {
        return $this->setProp('box', $value);
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
     * A circle is the circular region of a specified radius centered at a specified latitude and longitude. A circle is expressed
     * as a pair followed by a radius in meters.
     * @param \Vnetby\Schemaorg\DataTypes\DataText $value
     * @return static
     */
    function setCircle($value)
    {
        return $this->setProp('circle', $value);
    }

    /**
     * The postal code. For example, 94043.
     * @param \Vnetby\Schemaorg\DataTypes\DataText $value
     * @return static
     */
    function setPostalCode($value)
    {
        return $this->setProp('postalCode', $value);
    }

    /**
     * The country. For example, USA. You can also provide the two-letter [ISO 3166-1 alpha-2 country code](http://en.wikipedia.org/wiki/ISO_3166-1).
     * @return \Vnetby\Schemaorg\DataTypes\DataText|\Vnetby\Schemaorg\Types\Thing\Place\AdministrativeArea\Country|null
     */
    function getAddressCountry()
    {
        return $this->getProp('addressCountry');
    }

    /**
     * The elevation of a location ([WGS 84](https://en.wikipedia.org/wiki/World_Geodetic_System)). Values may be of the form 'NUMBER UNIT\_OF\_MEASUREMENT' (e.g., '1,000 m', '3,200 ft') while
     * numbers alone should be assumed to be a value in meters.
     * @return \Vnetby\Schemaorg\DataTypes\DataNumber|\Vnetby\Schemaorg\DataTypes\DataText|null
     */
    function getElevation()
    {
        return $this->getProp('elevation');
    }

    /**
     * A line is a point-to-point path consisting of two or more points. A line is expressed as a series of two
     * or more point objects separated by space.
     * @return \Vnetby\Schemaorg\DataTypes\DataText|null
     */
    function getLine()
    {
        return $this->getProp('line');
    }

    /**
     * A polygon is the area enclosed by a point-to-point path for which the starting and ending points are the same. A
     * polygon is expressed as a series of four or more space delimited points where the first and final points are identical.
     * @return \Vnetby\Schemaorg\DataTypes\DataText|null
     */
    function getPolygon()
    {
        return $this->getProp('polygon');
    }

    /**
     * A box is the area enclosed by the rectangle formed by two points. The first point is the lower corner, the
     * second point is the upper corner. A box is expressed as two points separated by a space character.
     * @return \Vnetby\Schemaorg\DataTypes\DataText|null
     */
    function getBox()
    {
        return $this->getProp('box');
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
     * A circle is the circular region of a specified radius centered at a specified latitude and longitude. A circle is expressed
     * as a pair followed by a radius in meters.
     * @return \Vnetby\Schemaorg\DataTypes\DataText|null
     */
    function getCircle()
    {
        return $this->getProp('circle');
    }

    /**
     * The postal code. For example, 94043.
     * @return \Vnetby\Schemaorg\DataTypes\DataText|null
     */
    function getPostalCode()
    {
        return $this->getProp('postalCode');
    }
}
