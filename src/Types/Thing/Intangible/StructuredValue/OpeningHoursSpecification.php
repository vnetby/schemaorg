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
     * The date when the item becomes valid.
     * @var \Vnetby\Schemaorg\DataTypes\DataDateTime|\Vnetby\Schemaorg\DataTypes\DataDate
     */
    protected $prop_validFrom;

    /**
     * The day of the week for which these opening hours are valid.
     * @var \Vnetby\Schemaorg\Types\Thing\Intangible\Enumeration\DayOfWeek\DayOfWeek
     */
    protected $prop_dayOfWeek;

    /**
     * The closing hour of the place or service on the given day(s) of the week.
     * @var \Vnetby\Schemaorg\DataTypes\DataTime
     */
    protected $prop_closes;

    /**
     * The opening hour of the place or service on the given day(s) of the week.
     * @var \Vnetby\Schemaorg\DataTypes\DataTime
     */
    protected $prop_opens;

    /**
     * The date after when the item is not valid. For example the end of an offer, salary period, or a period
     * of opening hours.
     * @var \Vnetby\Schemaorg\DataTypes\DataDateTime|\Vnetby\Schemaorg\DataTypes\DataDate
     */
    protected $prop_validThrough;

    /**
     * The date when the item becomes valid.
     * @param \Vnetby\Schemaorg\DataTypes\DataDateTime|\Vnetby\Schemaorg\DataTypes\DataDate $value
     * @return static
     */
    function setValidFrom($value)
    {
        return $this->setProp('validFrom', $value);
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
     * The closing hour of the place or service on the given day(s) of the week.
     * @param \Vnetby\Schemaorg\DataTypes\DataTime $value
     * @return static
     */
    function setCloses($value)
    {
        return $this->setProp('closes', $value);
    }

    /**
     * The opening hour of the place or service on the given day(s) of the week.
     * @param \Vnetby\Schemaorg\DataTypes\DataTime $value
     * @return static
     */
    function setOpens($value)
    {
        return $this->setProp('opens', $value);
    }

    /**
     * The date after when the item is not valid. For example the end of an offer, salary period, or a period
     * of opening hours.
     * @param \Vnetby\Schemaorg\DataTypes\DataDateTime|\Vnetby\Schemaorg\DataTypes\DataDate $value
     * @return static
     */
    function setValidThrough($value)
    {
        return $this->setProp('validThrough', $value);
    }

    /**
     * The date when the item becomes valid.
     * @return \Vnetby\Schemaorg\DataTypes\DataDateTime|\Vnetby\Schemaorg\DataTypes\DataDate|null
     */
    function getValidFrom()
    {
        return $this->getProp('validFrom');
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
     * The closing hour of the place or service on the given day(s) of the week.
     * @return \Vnetby\Schemaorg\DataTypes\DataTime|null
     */
    function getCloses()
    {
        return $this->getProp('closes');
    }

    /**
     * The opening hour of the place or service on the given day(s) of the week.
     * @return \Vnetby\Schemaorg\DataTypes\DataTime|null
     */
    function getOpens()
    {
        return $this->getProp('opens');
    }

    /**
     * The date after when the item is not valid. For example the end of an offer, salary period, or a period
     * of opening hours.
     * @return \Vnetby\Schemaorg\DataTypes\DataDateTime|\Vnetby\Schemaorg\DataTypes\DataDate|null
     */
    function getValidThrough()
    {
        return $this->getProp('validThrough');
    }
}
