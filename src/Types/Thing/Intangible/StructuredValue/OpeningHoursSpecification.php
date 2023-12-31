<?php

/**
 * @see https://schema.org/OpeningHoursSpecification
 * A structured value providing information about the opening hours of a place or a certain service inside a place.\n\n The place
 * is __open__ if the [[opens]] property is specified, and __closed__ otherwise.\n\nIf the value for the [[closes]] property is less than the
 * value for the [[opens]] property then the hour range is assumed to span over the next day. 
 */

namespace Vnetby\Schemaorg\Types\Thing\Intangible\StructuredValue;

class OpeningHoursSpecification extends \Vnetby\Schemaorg\Types\Thing\Intangible\StructuredValue\StructuredValue
{
    const TYPE = 'OpeningHoursSpecification';

    /**
     * The closing hour of the place or service on the given day(s) of the week.
     * @var string|\Vnetby\Schemaorg\DataTypes\DataTime
     */
    public $closes;

    /**
     * The day of the week for which these opening hours are valid.
     * @var \Vnetby\Schemaorg\Types\Thing\Intangible\Enumeration\DayOfWeek\DayOfWeek
     */
    public $dayOfWeek;

    /**
     * The date after when the item is not valid. For example the end of an offer, salary period, or a period
     * of opening hours.
     * @var string|\Vnetby\Schemaorg\DataTypes\DataDateTime|\Vnetby\Schemaorg\DataTypes\DataDate
     */
    public $validThrough;

    /**
     * The opening hour of the place or service on the given day(s) of the week.
     * @var string|\Vnetby\Schemaorg\DataTypes\DataTime
     */
    public $opens;

    /**
     * The date when the item becomes valid.
     * @var string|\Vnetby\Schemaorg\DataTypes\DataDateTime|\Vnetby\Schemaorg\DataTypes\DataDate
     */
    public $validFrom;

    /**
     * The closing hour of the place or service on the given day(s) of the week.
     * @param string|\Vnetby\Schemaorg\DataTypes\DataTime $value
     * @return static
     */
    function setCloses($value)
    {
        return $this->setProp('closes', $value);
    }

    /**
     * The day of the week for which these opening hours are valid.
     * @param \Vnetby\Schemaorg\Types\Thing\Intangible\Enumeration\DayOfWeek\DayOfWeek $value
     * @return static
     */
    function setDayOfWeek($value)
    {
        return $this->setProp('dayOfWeek', $value);
    }

    /**
     * The date after when the item is not valid. For example the end of an offer, salary period, or a period
     * of opening hours.
     * @param string|\Vnetby\Schemaorg\DataTypes\DataDateTime|\Vnetby\Schemaorg\DataTypes\DataDate $value
     * @return static
     */
    function setValidThrough($value)
    {
        return $this->setProp('validThrough', $value);
    }

    /**
     * The opening hour of the place or service on the given day(s) of the week.
     * @param string|\Vnetby\Schemaorg\DataTypes\DataTime $value
     * @return static
     */
    function setOpens($value)
    {
        return $this->setProp('opens', $value);
    }

    /**
     * The date when the item becomes valid.
     * @param string|\Vnetby\Schemaorg\DataTypes\DataDateTime|\Vnetby\Schemaorg\DataTypes\DataDate $value
     * @return static
     */
    function setValidFrom($value)
    {
        return $this->setProp('validFrom', $value);
    }

    /**
     * The closing hour of the place or service on the given day(s) of the week.
     * @return string|\Vnetby\Schemaorg\DataTypes\DataTime|null
     */
    function getCloses()
    {
        return $this->getProp('closes');
    }

    /**
     * The day of the week for which these opening hours are valid.
     * @return \Vnetby\Schemaorg\Types\Thing\Intangible\Enumeration\DayOfWeek\DayOfWeek|null
     */
    function getDayOfWeek()
    {
        return $this->getProp('dayOfWeek');
    }

    /**
     * The date after when the item is not valid. For example the end of an offer, salary period, or a period
     * of opening hours.
     * @return string|\Vnetby\Schemaorg\DataTypes\DataDateTime|\Vnetby\Schemaorg\DataTypes\DataDate|null
     */
    function getValidThrough()
    {
        return $this->getProp('validThrough');
    }

    /**
     * The opening hour of the place or service on the given day(s) of the week.
     * @return string|\Vnetby\Schemaorg\DataTypes\DataTime|null
     */
    function getOpens()
    {
        return $this->getProp('opens');
    }

    /**
     * The date when the item becomes valid.
     * @return string|\Vnetby\Schemaorg\DataTypes\DataDateTime|\Vnetby\Schemaorg\DataTypes\DataDate|null
     */
    function getValidFrom()
    {
        return $this->getProp('validFrom');
    }
}
