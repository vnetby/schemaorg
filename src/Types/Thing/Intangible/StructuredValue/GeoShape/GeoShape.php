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
     * A polygon is the area enclosed by a point-to-point path for which the starting and ending points are the same. A
     * polygon is expressed as a series of four or more space delimited points where the first and final points are identical.
     * @var string|\Vnetby\Schemaorg\DataTypes\DataText
     */
    public $polygon;

    /**
     * Physical address of the item.
     * @var string|\Vnetby\Schemaorg\Types\Thing\Intangible\StructuredValue\ContactPoint\PostalAddress|\Vnetby\Schemaorg\DataTypes\DataText
     */
    public $address;

    /**
     * A line is a point-to-point path consisting of two or more points. A line is expressed as a series of two
     * or more point objects separated by space.
     * @var string|\Vnetby\Schemaorg\DataTypes\DataText
     */
    public $line;

    /**
     * A circle is the circular region of a specified radius centered at a specified latitude and longitude. A circle is expressed
     * as a pair followed by a radius in meters.
     * @var string|\Vnetby\Schemaorg\DataTypes\DataText
     */
    public $circle;

    /**
     * The country. For example, USA. You can also provide the two-letter [ISO 3166-1 alpha-2 country code](http://en.wikipedia.org/wiki/ISO_3166-1).
     * @var string|\Vnetby\Schemaorg\Types\Thing\Place\AdministrativeArea\Country|\Vnetby\Schemaorg\DataTypes\DataText
     */
    public $addressCountry;

    /**
     * A box is the area enclosed by the rectangle formed by two points. The first point is the lower corner, the
     * second point is the upper corner. A box is expressed as two points separated by a space character.
     * @var string|\Vnetby\Schemaorg\DataTypes\DataText
     */
    public $box;

    /**
     * The postal code. For example, 94043.
     * @var string|\Vnetby\Schemaorg\DataTypes\DataText
     */
    public $postalCode;

    /**
     * The elevation of a location ([WGS 84](https://en.wikipedia.org/wiki/World_Geodetic_System)). Values may be of the form 'NUMBER UNIT\_OF\_MEASUREMENT' (e.g., '1,000 m', '3,200 ft') while
     * numbers alone should be assumed to be a value in meters.
     * @var string|int|float|\Vnetby\Schemaorg\DataTypes\DataNumber|\Vnetby\Schemaorg\DataTypes\DataText
     */
    public $elevation;

    /**
     * A polygon is the area enclosed by a point-to-point path for which the starting and ending points are the same. A
     * polygon is expressed as a series of four or more space delimited points where the first and final points are identical.
     * @param string|\Vnetby\Schemaorg\DataTypes\DataText $value
     * @return static
     */
    function setPolygon($value)
    {
        return $this->setProp('polygon', $value);
    }

    /**
     * Physical address of the item.
     * @param string|\Vnetby\Schemaorg\Types\Thing\Intangible\StructuredValue\ContactPoint\PostalAddress|\Vnetby\Schemaorg\DataTypes\DataText $value
     * @return static
     */
    function setAddress($value)
    {
        return $this->setProp('address', $value);
    }

    /**
     * A line is a point-to-point path consisting of two or more points. A line is expressed as a series of two
     * or more point objects separated by space.
     * @param string|\Vnetby\Schemaorg\DataTypes\DataText $value
     * @return static
     */
    function setLine($value)
    {
        return $this->setProp('line', $value);
    }

    /**
     * A circle is the circular region of a specified radius centered at a specified latitude and longitude. A circle is expressed
     * as a pair followed by a radius in meters.
     * @param string|\Vnetby\Schemaorg\DataTypes\DataText $value
     * @return static
     */
    function setCircle($value)
    {
        return $this->setProp('circle', $value);
    }

    /**
     * The country. For example, USA. You can also provide the two-letter [ISO 3166-1 alpha-2 country code](http://en.wikipedia.org/wiki/ISO_3166-1).
     * @param string|\Vnetby\Schemaorg\Types\Thing\Place\AdministrativeArea\Country|\Vnetby\Schemaorg\DataTypes\DataText $value
     * @return static
     */
    function setAddressCountry($value)
    {
        return $this->setProp('addressCountry', $value);
    }

    /**
     * A box is the area enclosed by the rectangle formed by two points. The first point is the lower corner, the
     * second point is the upper corner. A box is expressed as two points separated by a space character.
     * @param string|\Vnetby\Schemaorg\DataTypes\DataText $value
     * @return static
     */
    function setBox($value)
    {
        return $this->setProp('box', $value);
    }

    /**
     * The postal code. For example, 94043.
     * @param string|\Vnetby\Schemaorg\DataTypes\DataText $value
     * @return static
     */
    function setPostalCode($value)
    {
        return $this->setProp('postalCode', $value);
    }

    /**
     * The elevation of a location ([WGS 84](https://en.wikipedia.org/wiki/World_Geodetic_System)). Values may be of the form 'NUMBER UNIT\_OF\_MEASUREMENT' (e.g., '1,000 m', '3,200 ft') while
     * numbers alone should be assumed to be a value in meters.
     * @param string|int|float|\Vnetby\Schemaorg\DataTypes\DataNumber|\Vnetby\Schemaorg\DataTypes\DataText $value
     * @return static
     */
    function setElevation($value)
    {
        return $this->setProp('elevation', $value);
    }

    /**
     * A polygon is the area enclosed by a point-to-point path for which the starting and ending points are the same. A
     * polygon is expressed as a series of four or more space delimited points where the first and final points are identical.
     * @return string|\Vnetby\Schemaorg\DataTypes\DataText|null
     */
    function getPolygon()
    {
        return $this->getProp('polygon');
    }

    /**
     * Physical address of the item.
     * @return string|\Vnetby\Schemaorg\Types\Thing\Intangible\StructuredValue\ContactPoint\PostalAddress|\Vnetby\Schemaorg\DataTypes\DataText|null
     */
    function getAddress()
    {
        return $this->getProp('address');
    }

    /**
     * A line is a point-to-point path consisting of two or more points. A line is expressed as a series of two
     * or more point objects separated by space.
     * @return string|\Vnetby\Schemaorg\DataTypes\DataText|null
     */
    function getLine()
    {
        return $this->getProp('line');
    }

    /**
     * A circle is the circular region of a specified radius centered at a specified latitude and longitude. A circle is expressed
     * as a pair followed by a radius in meters.
     * @return string|\Vnetby\Schemaorg\DataTypes\DataText|null
     */
    function getCircle()
    {
        return $this->getProp('circle');
    }

    /**
     * The country. For example, USA. You can also provide the two-letter [ISO 3166-1 alpha-2 country code](http://en.wikipedia.org/wiki/ISO_3166-1).
     * @return string|\Vnetby\Schemaorg\Types\Thing\Place\AdministrativeArea\Country|\Vnetby\Schemaorg\DataTypes\DataText|null
     */
    function getAddressCountry()
    {
        return $this->getProp('addressCountry');
    }

    /**
     * A box is the area enclosed by the rectangle formed by two points. The first point is the lower corner, the
     * second point is the upper corner. A box is expressed as two points separated by a space character.
     * @return string|\Vnetby\Schemaorg\DataTypes\DataText|null
     */
    function getBox()
    {
        return $this->getProp('box');
    }

    /**
     * The postal code. For example, 94043.
     * @return string|\Vnetby\Schemaorg\DataTypes\DataText|null
     */
    function getPostalCode()
    {
        return $this->getProp('postalCode');
    }

    /**
     * The elevation of a location ([WGS 84](https://en.wikipedia.org/wiki/World_Geodetic_System)). Values may be of the form 'NUMBER UNIT\_OF\_MEASUREMENT' (e.g., '1,000 m', '3,200 ft') while
     * numbers alone should be assumed to be a value in meters.
     * @return string|int|float|\Vnetby\Schemaorg\DataTypes\DataNumber|\Vnetby\Schemaorg\DataTypes\DataText|null
     */
    function getElevation()
    {
        return $this->getProp('elevation');
    }
}
