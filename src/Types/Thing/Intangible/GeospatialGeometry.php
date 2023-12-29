<?php

/**
 * @see https://schema.org/GeospatialGeometry
 * (Eventually to be defined as) a supertype of GeoShape designed to accommodate definitions from Geo-Spatial best practices.
 */

namespace Vnetby\Schemaorg\Types\Thing\Intangible;

class GeospatialGeometry extends \Vnetby\Schemaorg\Types\Thing\Intangible\Intangible
{
    const TYPE = 'GeospatialGeometry';

    /**
     * Represents a relationship between two geometries (or the places they represent), relating a geometry to another that covers it. As defined
     * in [DE-9IM](https://en.wikipedia.org/wiki/DE-9IM).
     * @var \Vnetby\Schemaorg\Types\Thing\Intangible\GeospatialGeometry|\Vnetby\Schemaorg\Types\Thing\Place\Place
     */
    public $geoCoveredBy;

    /**
     * Represents a relationship between two geometries (or the places they represent), relating a containing geometry to a contained geometry. "a contains
     * b iff no points of b lie in the exterior of a, and at least one point of the interior of
     * b lies in the interior of a". As defined in [DE-9IM](https://en.wikipedia.org/wiki/DE-9IM).
     * @var \Vnetby\Schemaorg\Types\Thing\Place\Place|\Vnetby\Schemaorg\Types\Thing\Intangible\GeospatialGeometry
     */
    public $geoContains;

    /**
     * Represents a relationship between two geometries (or the places they represent), relating a geometry to another that geospatially overlaps it, i.e.
     * they have some but not all points in common. As defined in [DE-9IM](https://en.wikipedia.org/wiki/DE-9IM).
     * @var \Vnetby\Schemaorg\Types\Thing\Place\Place|\Vnetby\Schemaorg\Types\Thing\Intangible\GeospatialGeometry
     */
    public $geoOverlaps;

    /**
     * Represents a relationship between two geometries (or the places they represent), relating a geometry to another that crosses it: "a crosses
     * b: they have some but not all interior points in common, and the dimension of the intersection is less than that
     * of at least one of them". As defined in [DE-9IM](https://en.wikipedia.org/wiki/DE-9IM).
     * @var \Vnetby\Schemaorg\Types\Thing\Intangible\GeospatialGeometry|\Vnetby\Schemaorg\Types\Thing\Place\Place
     */
    public $geoCrosses;

    /**
     * Represents spatial relations in which two geometries (or the places they represent) have at least one point in common. As defined
     * in [DE-9IM](https://en.wikipedia.org/wiki/DE-9IM).
     * @var \Vnetby\Schemaorg\Types\Thing\Place\Place|\Vnetby\Schemaorg\Types\Thing\Intangible\GeospatialGeometry
     */
    public $geoIntersects;

    /**
     * Represents a relationship between two geometries (or the places they represent), relating a geometry to one that contains it, i.e. it
     * is inside (i.e. within) its interior. As defined in [DE-9IM](https://en.wikipedia.org/wiki/DE-9IM).
     * @var \Vnetby\Schemaorg\Types\Thing\Place\Place|\Vnetby\Schemaorg\Types\Thing\Intangible\GeospatialGeometry
     */
    public $geoWithin;

    /**
     * Represents spatial relations in which two geometries (or the places they represent) are topologically disjoint: "they have no point in common.
     * They form a set of disconnected geometries." (A symmetric relationship, as defined in [DE-9IM](https://en.wikipedia.org/wiki/DE-9IM).)
     * @var \Vnetby\Schemaorg\Types\Thing\Place\Place|\Vnetby\Schemaorg\Types\Thing\Intangible\GeospatialGeometry
     */
    public $geoDisjoint;

    /**
     * Represents spatial relations in which two geometries (or the places they represent) are topologically equal, as defined in [DE-9IM](https://en.wikipedia.org/wiki/DE-9IM). "Two geometries
     * are topologically equal if their interiors intersect and no part of the interior or boundary of one geometry intersects the exterior
     * of the other" (a symmetric relationship).
     * @var \Vnetby\Schemaorg\Types\Thing\Intangible\GeospatialGeometry|\Vnetby\Schemaorg\Types\Thing\Place\Place
     */
    public $geoEquals;

    /**
     * Represents a relationship between two geometries (or the places they represent), relating a covering geometry to a covered geometry. "Every point
     * of b is a point of (the interior or boundary of) a". As defined in [DE-9IM](https://en.wikipedia.org/wiki/DE-9IM).
     * @var \Vnetby\Schemaorg\Types\Thing\Place\Place|\Vnetby\Schemaorg\Types\Thing\Intangible\GeospatialGeometry
     */
    public $geoCovers;

    /**
     * Represents spatial relations in which two geometries (or the places they represent) touch: "they have at least one boundary point in
     * common, but no interior points." (A symmetric relationship, as defined in [DE-9IM](https://en.wikipedia.org/wiki/DE-9IM).)
     * @var \Vnetby\Schemaorg\Types\Thing\Place\Place|\Vnetby\Schemaorg\Types\Thing\Intangible\GeospatialGeometry
     */
    public $geoTouches;

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
     * Represents a relationship between two geometries (or the places they represent), relating a geometry to another that geospatially overlaps it, i.e.
     * they have some but not all points in common. As defined in [DE-9IM](https://en.wikipedia.org/wiki/DE-9IM).
     * @return \Vnetby\Schemaorg\Types\Thing\Place\Place|\Vnetby\Schemaorg\Types\Thing\Intangible\GeospatialGeometry|null
     */
    function getGeoOverlaps()
    {
        return $this->getProp('geoOverlaps');
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
     * Represents a relationship between two geometries (or the places they represent), relating a geometry to one that contains it, i.e. it
     * is inside (i.e. within) its interior. As defined in [DE-9IM](https://en.wikipedia.org/wiki/DE-9IM).
     * @return \Vnetby\Schemaorg\Types\Thing\Place\Place|\Vnetby\Schemaorg\Types\Thing\Intangible\GeospatialGeometry|null
     */
    function getGeoWithin()
    {
        return $this->getProp('geoWithin');
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
     * Represents a relationship between two geometries (or the places they represent), relating a covering geometry to a covered geometry. "Every point
     * of b is a point of (the interior or boundary of) a". As defined in [DE-9IM](https://en.wikipedia.org/wiki/DE-9IM).
     * @return \Vnetby\Schemaorg\Types\Thing\Place\Place|\Vnetby\Schemaorg\Types\Thing\Intangible\GeospatialGeometry|null
     */
    function getGeoCovers()
    {
        return $this->getProp('geoCovers');
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
}
