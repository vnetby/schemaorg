<?php

/**
 * @see https://schema.org/Schedule
 * A schedule defines a repeating time period used to describe a regularly occurring [[Event]]. At a minimum a schedule will specify
 * [[repeatFrequency]] which describes the interval between occurrences of the event. Additional information can be provided to specify the schedule more precisely.
 * This includes identifying the day(s) of the week or month when the recurring event will take place, in addition to its
 * start and end time. Schedules may also have start and end dates to indicate when they are active, e.g. to define
 * a limited calendar of events.
 */

namespace Vnetby\Schemaorg\Types\Thing\Intangible;

class Schedule extends \Vnetby\Schemaorg\Types\Thing\Intangible\Intangible
{
    const TYPE = 'Schedule';

    /**
     * Defines the day(s) of the month on which a recurring [[Event]] takes place. Specified as an [[Integer]] between 1-31.
     * @var \Vnetby\Schemaorg\DataTypes\DataInteger
     */
    protected $prop_byMonthDay;

    /**
     * Defines the frequency at which [[Event]]s will occur according to a schedule [[Schedule]]. The intervals between events should be defined as
     * a [[Duration]] of time.
     * @var \Vnetby\Schemaorg\DataTypes\DataText|\Vnetby\Schemaorg\Types\Thing\Intangible\Quantity\Duration
     */
    protected $prop_repeatFrequency;

    /**
     * Defines a [[Date]] or [[DateTime]] during which a scheduled [[Event]] will not take place. The property allows exceptions to a [[Schedule]]
     * to be specified. If an exception is specified as a [[DateTime]] then only the event that would have started at that
     * specific date and time should be excluded from the schedule. If an exception is specified as a [[Date]] then any event
     * that is scheduled for that 24 hour period should be excluded from the schedule. This allows a whole day to be
     * excluded from the schedule without having to itemise every scheduled event.
     * @var \Vnetby\Schemaorg\DataTypes\DataDateTime|\Vnetby\Schemaorg\DataTypes\DataDate
     */
    protected $prop_exceptDate;

    /**
     * Defines the day(s) of the week on which a recurring [[Event]] takes place. May be specified using either [[DayOfWeek]], or alternatively
     * [[Text]] conforming to iCal's syntax for byDay recurrence rules.
     * @var \Vnetby\Schemaorg\DataTypes\DataText|\Vnetby\Schemaorg\Types\Thing\Intangible\Enumeration\DayOfWeek\DayOfWeek
     */
    protected $prop_byDay;

    /**
     * Defines the week(s) of the month on which a recurring Event takes place. Specified as an Integer between 1-5. For clarity,
     * byMonthWeek is best used in conjunction with byDay to indicate concepts like the first and third Mondays of a month.
     * @var \Vnetby\Schemaorg\DataTypes\DataInteger
     */
    protected $prop_byMonthWeek;

    /**
     * The startTime of something. For a reserved event or service (e.g. FoodEstablishmentReservation), the time that it is expected to start. For
     * actions that span a period of time, when the action was performed. E.g. John wrote a book from *January* to December.
     * For media, including audio and video, it's the time offset of the start of a clip within a larger file.\n\nNote that
     * Event uses startDate/endDate instead of startTime/endTime, even when describing dates with times. This situation may be clarified in future revisions.
     * @var \Vnetby\Schemaorg\DataTypes\DataTime|\Vnetby\Schemaorg\DataTypes\DataDateTime
     */
    protected $prop_startTime;

    /**
     * The duration of the item (movie, audio recording, event, etc.) in [ISO 8601 date format](http://en.wikipedia.org/wiki/ISO_8601).
     * @var \Vnetby\Schemaorg\Types\Thing\Intangible\Quantity\Duration
     */
    protected $prop_duration;

    /**
     * The start date and time of the item (in [ISO 8601 date format](http://en.wikipedia.org/wiki/ISO_8601)).
     * @var \Vnetby\Schemaorg\DataTypes\DataDate|\Vnetby\Schemaorg\DataTypes\DataDateTime
     */
    protected $prop_startDate;

    /**
     * Defines the number of times a recurring [[Event]] will take place.
     * @var \Vnetby\Schemaorg\DataTypes\DataInteger
     */
    protected $prop_repeatCount;

    /**
     * Indicates the timezone for which the time(s) indicated in the [[Schedule]] are given. The value provided should be among those listed
     * in the IANA Time Zone Database.
     * @var \Vnetby\Schemaorg\DataTypes\DataText
     */
    protected $prop_scheduleTimezone;

    /**
     * The end date and time of the item (in [ISO 8601 date format](http://en.wikipedia.org/wiki/ISO_8601)).
     * @var \Vnetby\Schemaorg\DataTypes\DataDateTime|\Vnetby\Schemaorg\DataTypes\DataDate
     */
    protected $prop_endDate;

    /**
     * The endTime of something. For a reserved event or service (e.g. FoodEstablishmentReservation), the time that it is expected to end. For
     * actions that span a period of time, when the action was performed. E.g. John wrote a book from January to *December*.
     * For media, including audio and video, it's the time offset of the end of a clip within a larger file.\n\nNote that
     * Event uses startDate/endDate instead of startTime/endTime, even when describing dates with times. This situation may be clarified in future revisions.
     * @var \Vnetby\Schemaorg\DataTypes\DataTime|\Vnetby\Schemaorg\DataTypes\DataDateTime
     */
    protected $prop_endTime;

    /**
     * Defines the month(s) of the year on which a recurring [[Event]] takes place. Specified as an [[Integer]] between 1-12. January is
     * 1.
     * @var \Vnetby\Schemaorg\DataTypes\DataInteger
     */
    protected $prop_byMonth;

    /**
     * Defines the day(s) of the month on which a recurring [[Event]] takes place. Specified as an [[Integer]] between 1-31.
     * @param \Vnetby\Schemaorg\DataTypes\DataInteger $value
     * @return static
     */
    function setByMonthDay($value)
    {
        return $this->setProp('byMonthDay', $value);
    }

    /**
     * Defines the frequency at which [[Event]]s will occur according to a schedule [[Schedule]]. The intervals between events should be defined as
     * a [[Duration]] of time.
     * @param \Vnetby\Schemaorg\DataTypes\DataText|\Vnetby\Schemaorg\Types\Thing\Intangible\Quantity\Duration $value
     * @return static
     */
    function setRepeatFrequency($value)
    {
        return $this->setProp('repeatFrequency', $value);
    }

    /**
     * Defines a [[Date]] or [[DateTime]] during which a scheduled [[Event]] will not take place. The property allows exceptions to a [[Schedule]]
     * to be specified. If an exception is specified as a [[DateTime]] then only the event that would have started at that
     * specific date and time should be excluded from the schedule. If an exception is specified as a [[Date]] then any event
     * that is scheduled for that 24 hour period should be excluded from the schedule. This allows a whole day to be
     * excluded from the schedule without having to itemise every scheduled event.
     * @param \Vnetby\Schemaorg\DataTypes\DataDateTime|\Vnetby\Schemaorg\DataTypes\DataDate $value
     * @return static
     */
    function setExceptDate($value)
    {
        return $this->setProp('exceptDate', $value);
    }

    /**
     * Defines the day(s) of the week on which a recurring [[Event]] takes place. May be specified using either [[DayOfWeek]], or alternatively
     * [[Text]] conforming to iCal's syntax for byDay recurrence rules.
     * @param \Vnetby\Schemaorg\DataTypes\DataText|\Vnetby\Schemaorg\Types\Thing\Intangible\Enumeration\DayOfWeek\DayOfWeek $value
     * @return static
     */
    function setByDay($value)
    {
        return $this->setProp('byDay', $value);
    }

    /**
     * Defines the week(s) of the month on which a recurring Event takes place. Specified as an Integer between 1-5. For clarity,
     * byMonthWeek is best used in conjunction with byDay to indicate concepts like the first and third Mondays of a month.
     * @param \Vnetby\Schemaorg\DataTypes\DataInteger $value
     * @return static
     */
    function setByMonthWeek($value)
    {
        return $this->setProp('byMonthWeek', $value);
    }

    /**
     * The startTime of something. For a reserved event or service (e.g. FoodEstablishmentReservation), the time that it is expected to start. For
     * actions that span a period of time, when the action was performed. E.g. John wrote a book from *January* to December.
     * For media, including audio and video, it's the time offset of the start of a clip within a larger file.\n\nNote that
     * Event uses startDate/endDate instead of startTime/endTime, even when describing dates with times. This situation may be clarified in future revisions.
     * @param \Vnetby\Schemaorg\DataTypes\DataTime|\Vnetby\Schemaorg\DataTypes\DataDateTime $value
     * @return static
     */
    function setStartTime($value)
    {
        return $this->setProp('startTime', $value);
    }

    /**
     * The duration of the item (movie, audio recording, event, etc.) in [ISO 8601 date format](http://en.wikipedia.org/wiki/ISO_8601).
     * @param \Vnetby\Schemaorg\Types\Thing\Intangible\Quantity\Duration $value
     * @return static
     */
    function setDuration($value)
    {
        return $this->setProp('duration', $value);
    }

    /**
     * The start date and time of the item (in [ISO 8601 date format](http://en.wikipedia.org/wiki/ISO_8601)).
     * @param \Vnetby\Schemaorg\DataTypes\DataDate|\Vnetby\Schemaorg\DataTypes\DataDateTime $value
     * @return static
     */
    function setStartDate($value)
    {
        return $this->setProp('startDate', $value);
    }

    /**
     * Defines the number of times a recurring [[Event]] will take place.
     * @param \Vnetby\Schemaorg\DataTypes\DataInteger $value
     * @return static
     */
    function setRepeatCount($value)
    {
        return $this->setProp('repeatCount', $value);
    }

    /**
     * Indicates the timezone for which the time(s) indicated in the [[Schedule]] are given. The value provided should be among those listed
     * in the IANA Time Zone Database.
     * @param \Vnetby\Schemaorg\DataTypes\DataText $value
     * @return static
     */
    function setScheduleTimezone($value)
    {
        return $this->setProp('scheduleTimezone', $value);
    }

    /**
     * The end date and time of the item (in [ISO 8601 date format](http://en.wikipedia.org/wiki/ISO_8601)).
     * @param \Vnetby\Schemaorg\DataTypes\DataDateTime|\Vnetby\Schemaorg\DataTypes\DataDate $value
     * @return static
     */
    function setEndDate($value)
    {
        return $this->setProp('endDate', $value);
    }

    /**
     * The endTime of something. For a reserved event or service (e.g. FoodEstablishmentReservation), the time that it is expected to end. For
     * actions that span a period of time, when the action was performed. E.g. John wrote a book from January to *December*.
     * For media, including audio and video, it's the time offset of the end of a clip within a larger file.\n\nNote that
     * Event uses startDate/endDate instead of startTime/endTime, even when describing dates with times. This situation may be clarified in future revisions.
     * @param \Vnetby\Schemaorg\DataTypes\DataTime|\Vnetby\Schemaorg\DataTypes\DataDateTime $value
     * @return static
     */
    function setEndTime($value)
    {
        return $this->setProp('endTime', $value);
    }

    /**
     * Defines the month(s) of the year on which a recurring [[Event]] takes place. Specified as an [[Integer]] between 1-12. January is
     * 1.
     * @param \Vnetby\Schemaorg\DataTypes\DataInteger $value
     * @return static
     */
    function setByMonth($value)
    {
        return $this->setProp('byMonth', $value);
    }

    /**
     * Defines the day(s) of the month on which a recurring [[Event]] takes place. Specified as an [[Integer]] between 1-31.
     * @return \Vnetby\Schemaorg\DataTypes\DataInteger|null
     */
    function getByMonthDay()
    {
        return $this->getProp('byMonthDay');
    }

    /**
     * Defines the frequency at which [[Event]]s will occur according to a schedule [[Schedule]]. The intervals between events should be defined as
     * a [[Duration]] of time.
     * @return \Vnetby\Schemaorg\DataTypes\DataText|\Vnetby\Schemaorg\Types\Thing\Intangible\Quantity\Duration|null
     */
    function getRepeatFrequency()
    {
        return $this->getProp('repeatFrequency');
    }

    /**
     * Defines a [[Date]] or [[DateTime]] during which a scheduled [[Event]] will not take place. The property allows exceptions to a [[Schedule]]
     * to be specified. If an exception is specified as a [[DateTime]] then only the event that would have started at that
     * specific date and time should be excluded from the schedule. If an exception is specified as a [[Date]] then any event
     * that is scheduled for that 24 hour period should be excluded from the schedule. This allows a whole day to be
     * excluded from the schedule without having to itemise every scheduled event.
     * @return \Vnetby\Schemaorg\DataTypes\DataDateTime|\Vnetby\Schemaorg\DataTypes\DataDate|null
     */
    function getExceptDate()
    {
        return $this->getProp('exceptDate');
    }

    /**
     * Defines the day(s) of the week on which a recurring [[Event]] takes place. May be specified using either [[DayOfWeek]], or alternatively
     * [[Text]] conforming to iCal's syntax for byDay recurrence rules.
     * @return \Vnetby\Schemaorg\DataTypes\DataText|\Vnetby\Schemaorg\Types\Thing\Intangible\Enumeration\DayOfWeek\DayOfWeek|null
     */
    function getByDay()
    {
        return $this->getProp('byDay');
    }

    /**
     * Defines the week(s) of the month on which a recurring Event takes place. Specified as an Integer between 1-5. For clarity,
     * byMonthWeek is best used in conjunction with byDay to indicate concepts like the first and third Mondays of a month.
     * @return \Vnetby\Schemaorg\DataTypes\DataInteger|null
     */
    function getByMonthWeek()
    {
        return $this->getProp('byMonthWeek');
    }

    /**
     * The startTime of something. For a reserved event or service (e.g. FoodEstablishmentReservation), the time that it is expected to start. For
     * actions that span a period of time, when the action was performed. E.g. John wrote a book from *January* to December.
     * For media, including audio and video, it's the time offset of the start of a clip within a larger file.\n\nNote that
     * Event uses startDate/endDate instead of startTime/endTime, even when describing dates with times. This situation may be clarified in future revisions.
     * @return \Vnetby\Schemaorg\DataTypes\DataTime|\Vnetby\Schemaorg\DataTypes\DataDateTime|null
     */
    function getStartTime()
    {
        return $this->getProp('startTime');
    }

    /**
     * The duration of the item (movie, audio recording, event, etc.) in [ISO 8601 date format](http://en.wikipedia.org/wiki/ISO_8601).
     * @return \Vnetby\Schemaorg\Types\Thing\Intangible\Quantity\Duration|null
     */
    function getDuration()
    {
        return $this->getProp('duration');
    }

    /**
     * The start date and time of the item (in [ISO 8601 date format](http://en.wikipedia.org/wiki/ISO_8601)).
     * @return \Vnetby\Schemaorg\DataTypes\DataDate|\Vnetby\Schemaorg\DataTypes\DataDateTime|null
     */
    function getStartDate()
    {
        return $this->getProp('startDate');
    }

    /**
     * Defines the number of times a recurring [[Event]] will take place.
     * @return \Vnetby\Schemaorg\DataTypes\DataInteger|null
     */
    function getRepeatCount()
    {
        return $this->getProp('repeatCount');
    }

    /**
     * Indicates the timezone for which the time(s) indicated in the [[Schedule]] are given. The value provided should be among those listed
     * in the IANA Time Zone Database.
     * @return \Vnetby\Schemaorg\DataTypes\DataText|null
     */
    function getScheduleTimezone()
    {
        return $this->getProp('scheduleTimezone');
    }

    /**
     * The end date and time of the item (in [ISO 8601 date format](http://en.wikipedia.org/wiki/ISO_8601)).
     * @return \Vnetby\Schemaorg\DataTypes\DataDateTime|\Vnetby\Schemaorg\DataTypes\DataDate|null
     */
    function getEndDate()
    {
        return $this->getProp('endDate');
    }

    /**
     * The endTime of something. For a reserved event or service (e.g. FoodEstablishmentReservation), the time that it is expected to end. For
     * actions that span a period of time, when the action was performed. E.g. John wrote a book from January to *December*.
     * For media, including audio and video, it's the time offset of the end of a clip within a larger file.\n\nNote that
     * Event uses startDate/endDate instead of startTime/endTime, even when describing dates with times. This situation may be clarified in future revisions.
     * @return \Vnetby\Schemaorg\DataTypes\DataTime|\Vnetby\Schemaorg\DataTypes\DataDateTime|null
     */
    function getEndTime()
    {
        return $this->getProp('endTime');
    }

    /**
     * Defines the month(s) of the year on which a recurring [[Event]] takes place. Specified as an [[Integer]] between 1-12. January is
     * 1.
     * @return \Vnetby\Schemaorg\DataTypes\DataInteger|null
     */
    function getByMonth()
    {
        return $this->getProp('byMonth');
    }
}
