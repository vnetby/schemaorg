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
     * @var string|int|\Vnetby\Schemaorg\DataTypes\DataInteger
     */
    public $byMonthDay;

    /**
     * The start date and time of the item (in [ISO 8601 date format](http://en.wikipedia.org/wiki/ISO_8601)).
     * @var string|\Vnetby\Schemaorg\DataTypes\DataDateTime|\Vnetby\Schemaorg\DataTypes\DataDate
     */
    public $startDate;

    /**
     * Defines the month(s) of the year on which a recurring [[Event]] takes place. Specified as an [[Integer]] between 1-12. January is
     * 1.
     * @var string|int|\Vnetby\Schemaorg\DataTypes\DataInteger
     */
    public $byMonth;

    /**
     * The duration of the item (movie, audio recording, event, etc.) in [ISO 8601 date format](http://en.wikipedia.org/wiki/ISO_8601).
     * @var \Vnetby\Schemaorg\Types\Thing\Intangible\Quantity\Duration
     */
    public $duration;

    /**
     * The startTime of something. For a reserved event or service (e.g. FoodEstablishmentReservation), the time that it is expected to start. For
     * actions that span a period of time, when the action was performed. E.g. John wrote a book from *January* to December.
     * For media, including audio and video, it's the time offset of the start of a clip within a larger file.\n\nNote that
     * Event uses startDate/endDate instead of startTime/endTime, even when describing dates with times. This situation may be clarified in future revisions.
     * @var string|\Vnetby\Schemaorg\DataTypes\DataDateTime|\Vnetby\Schemaorg\DataTypes\DataTime
     */
    public $startTime;

    /**
     * Indicates the timezone for which the time(s) indicated in the [[Schedule]] are given. The value provided should be among those listed
     * in the IANA Time Zone Database.
     * @var string|\Vnetby\Schemaorg\DataTypes\DataText
     */
    public $scheduleTimezone;

    /**
     * Defines the number of times a recurring [[Event]] will take place.
     * @var string|int|\Vnetby\Schemaorg\DataTypes\DataInteger
     */
    public $repeatCount;

    /**
     * Defines the frequency at which [[Event]]s will occur according to a schedule [[Schedule]]. The intervals between events should be defined as
     * a [[Duration]] of time.
     * @var string|\Vnetby\Schemaorg\Types\Thing\Intangible\Quantity\Duration|\Vnetby\Schemaorg\DataTypes\DataText
     */
    public $repeatFrequency;

    /**
     * Defines the week(s) of the month on which a recurring Event takes place. Specified as an Integer between 1-5. For clarity,
     * byMonthWeek is best used in conjunction with byDay to indicate concepts like the first and third Mondays of a month.
     * @var string|int|\Vnetby\Schemaorg\DataTypes\DataInteger
     */
    public $byMonthWeek;

    /**
     * Defines the day(s) of the week on which a recurring [[Event]] takes place. May be specified using either [[DayOfWeek]], or alternatively
     * [[Text]] conforming to iCal's syntax for byDay recurrence rules.
     * @var string|\Vnetby\Schemaorg\Types\Thing\Intangible\Enumeration\DayOfWeek\DayOfWeek|\Vnetby\Schemaorg\DataTypes\DataText
     */
    public $byDay;

    /**
     * Defines a [[Date]] or [[DateTime]] during which a scheduled [[Event]] will not take place. The property allows exceptions to a [[Schedule]]
     * to be specified. If an exception is specified as a [[DateTime]] then only the event that would have started at that
     * specific date and time should be excluded from the schedule. If an exception is specified as a [[Date]] then any event
     * that is scheduled for that 24 hour period should be excluded from the schedule. This allows a whole day to be
     * excluded from the schedule without having to itemise every scheduled event.
     * @var string|\Vnetby\Schemaorg\DataTypes\DataDateTime|\Vnetby\Schemaorg\DataTypes\DataDate
     */
    public $exceptDate;

    /**
     * The end date and time of the item (in [ISO 8601 date format](http://en.wikipedia.org/wiki/ISO_8601)).
     * @var string|\Vnetby\Schemaorg\DataTypes\DataDateTime|\Vnetby\Schemaorg\DataTypes\DataDate
     */
    public $endDate;

    /**
     * The endTime of something. For a reserved event or service (e.g. FoodEstablishmentReservation), the time that it is expected to end. For
     * actions that span a period of time, when the action was performed. E.g. John wrote a book from January to *December*.
     * For media, including audio and video, it's the time offset of the end of a clip within a larger file.\n\nNote that
     * Event uses startDate/endDate instead of startTime/endTime, even when describing dates with times. This situation may be clarified in future revisions.
     * @var string|\Vnetby\Schemaorg\DataTypes\DataDateTime|\Vnetby\Schemaorg\DataTypes\DataTime
     */
    public $endTime;

    /**
     * Defines the day(s) of the month on which a recurring [[Event]] takes place. Specified as an [[Integer]] between 1-31.
     * @param string|int|\Vnetby\Schemaorg\DataTypes\DataInteger $value
     * @return static
     */
    function setByMonthDay($value)
    {
        return $this->setProp('byMonthDay', $value);
    }

    /**
     * The start date and time of the item (in [ISO 8601 date format](http://en.wikipedia.org/wiki/ISO_8601)).
     * @param string|\Vnetby\Schemaorg\DataTypes\DataDateTime|\Vnetby\Schemaorg\DataTypes\DataDate $value
     * @return static
     */
    function setStartDate($value)
    {
        return $this->setProp('startDate', $value);
    }

    /**
     * Defines the month(s) of the year on which a recurring [[Event]] takes place. Specified as an [[Integer]] between 1-12. January is
     * 1.
     * @param string|int|\Vnetby\Schemaorg\DataTypes\DataInteger $value
     * @return static
     */
    function setByMonth($value)
    {
        return $this->setProp('byMonth', $value);
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
     * The startTime of something. For a reserved event or service (e.g. FoodEstablishmentReservation), the time that it is expected to start. For
     * actions that span a period of time, when the action was performed. E.g. John wrote a book from *January* to December.
     * For media, including audio and video, it's the time offset of the start of a clip within a larger file.\n\nNote that
     * Event uses startDate/endDate instead of startTime/endTime, even when describing dates with times. This situation may be clarified in future revisions.
     * @param string|\Vnetby\Schemaorg\DataTypes\DataDateTime|\Vnetby\Schemaorg\DataTypes\DataTime $value
     * @return static
     */
    function setStartTime($value)
    {
        return $this->setProp('startTime', $value);
    }

    /**
     * Indicates the timezone for which the time(s) indicated in the [[Schedule]] are given. The value provided should be among those listed
     * in the IANA Time Zone Database.
     * @param string|\Vnetby\Schemaorg\DataTypes\DataText $value
     * @return static
     */
    function setScheduleTimezone($value)
    {
        return $this->setProp('scheduleTimezone', $value);
    }

    /**
     * Defines the number of times a recurring [[Event]] will take place.
     * @param string|int|\Vnetby\Schemaorg\DataTypes\DataInteger $value
     * @return static
     */
    function setRepeatCount($value)
    {
        return $this->setProp('repeatCount', $value);
    }

    /**
     * Defines the frequency at which [[Event]]s will occur according to a schedule [[Schedule]]. The intervals between events should be defined as
     * a [[Duration]] of time.
     * @param string|\Vnetby\Schemaorg\Types\Thing\Intangible\Quantity\Duration|\Vnetby\Schemaorg\DataTypes\DataText $value
     * @return static
     */
    function setRepeatFrequency($value)
    {
        return $this->setProp('repeatFrequency', $value);
    }

    /**
     * Defines the week(s) of the month on which a recurring Event takes place. Specified as an Integer between 1-5. For clarity,
     * byMonthWeek is best used in conjunction with byDay to indicate concepts like the first and third Mondays of a month.
     * @param string|int|\Vnetby\Schemaorg\DataTypes\DataInteger $value
     * @return static
     */
    function setByMonthWeek($value)
    {
        return $this->setProp('byMonthWeek', $value);
    }

    /**
     * Defines the day(s) of the week on which a recurring [[Event]] takes place. May be specified using either [[DayOfWeek]], or alternatively
     * [[Text]] conforming to iCal's syntax for byDay recurrence rules.
     * @param string|\Vnetby\Schemaorg\Types\Thing\Intangible\Enumeration\DayOfWeek\DayOfWeek|\Vnetby\Schemaorg\DataTypes\DataText $value
     * @return static
     */
    function setByDay($value)
    {
        return $this->setProp('byDay', $value);
    }

    /**
     * Defines a [[Date]] or [[DateTime]] during which a scheduled [[Event]] will not take place. The property allows exceptions to a [[Schedule]]
     * to be specified. If an exception is specified as a [[DateTime]] then only the event that would have started at that
     * specific date and time should be excluded from the schedule. If an exception is specified as a [[Date]] then any event
     * that is scheduled for that 24 hour period should be excluded from the schedule. This allows a whole day to be
     * excluded from the schedule without having to itemise every scheduled event.
     * @param string|\Vnetby\Schemaorg\DataTypes\DataDateTime|\Vnetby\Schemaorg\DataTypes\DataDate $value
     * @return static
     */
    function setExceptDate($value)
    {
        return $this->setProp('exceptDate', $value);
    }

    /**
     * The end date and time of the item (in [ISO 8601 date format](http://en.wikipedia.org/wiki/ISO_8601)).
     * @param string|\Vnetby\Schemaorg\DataTypes\DataDateTime|\Vnetby\Schemaorg\DataTypes\DataDate $value
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
     * @param string|\Vnetby\Schemaorg\DataTypes\DataDateTime|\Vnetby\Schemaorg\DataTypes\DataTime $value
     * @return static
     */
    function setEndTime($value)
    {
        return $this->setProp('endTime', $value);
    }

    /**
     * Defines the day(s) of the month on which a recurring [[Event]] takes place. Specified as an [[Integer]] between 1-31.
     * @return string|int|\Vnetby\Schemaorg\DataTypes\DataInteger|null
     */
    function getByMonthDay()
    {
        return $this->getProp('byMonthDay');
    }

    /**
     * The start date and time of the item (in [ISO 8601 date format](http://en.wikipedia.org/wiki/ISO_8601)).
     * @return string|\Vnetby\Schemaorg\DataTypes\DataDateTime|\Vnetby\Schemaorg\DataTypes\DataDate|null
     */
    function getStartDate()
    {
        return $this->getProp('startDate');
    }

    /**
     * Defines the month(s) of the year on which a recurring [[Event]] takes place. Specified as an [[Integer]] between 1-12. January is
     * 1.
     * @return string|int|\Vnetby\Schemaorg\DataTypes\DataInteger|null
     */
    function getByMonth()
    {
        return $this->getProp('byMonth');
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
     * The startTime of something. For a reserved event or service (e.g. FoodEstablishmentReservation), the time that it is expected to start. For
     * actions that span a period of time, when the action was performed. E.g. John wrote a book from *January* to December.
     * For media, including audio and video, it's the time offset of the start of a clip within a larger file.\n\nNote that
     * Event uses startDate/endDate instead of startTime/endTime, even when describing dates with times. This situation may be clarified in future revisions.
     * @return string|\Vnetby\Schemaorg\DataTypes\DataDateTime|\Vnetby\Schemaorg\DataTypes\DataTime|null
     */
    function getStartTime()
    {
        return $this->getProp('startTime');
    }

    /**
     * Indicates the timezone for which the time(s) indicated in the [[Schedule]] are given. The value provided should be among those listed
     * in the IANA Time Zone Database.
     * @return string|\Vnetby\Schemaorg\DataTypes\DataText|null
     */
    function getScheduleTimezone()
    {
        return $this->getProp('scheduleTimezone');
    }

    /**
     * Defines the number of times a recurring [[Event]] will take place.
     * @return string|int|\Vnetby\Schemaorg\DataTypes\DataInteger|null
     */
    function getRepeatCount()
    {
        return $this->getProp('repeatCount');
    }

    /**
     * Defines the frequency at which [[Event]]s will occur according to a schedule [[Schedule]]. The intervals between events should be defined as
     * a [[Duration]] of time.
     * @return string|\Vnetby\Schemaorg\Types\Thing\Intangible\Quantity\Duration|\Vnetby\Schemaorg\DataTypes\DataText|null
     */
    function getRepeatFrequency()
    {
        return $this->getProp('repeatFrequency');
    }

    /**
     * Defines the week(s) of the month on which a recurring Event takes place. Specified as an Integer between 1-5. For clarity,
     * byMonthWeek is best used in conjunction with byDay to indicate concepts like the first and third Mondays of a month.
     * @return string|int|\Vnetby\Schemaorg\DataTypes\DataInteger|null
     */
    function getByMonthWeek()
    {
        return $this->getProp('byMonthWeek');
    }

    /**
     * Defines the day(s) of the week on which a recurring [[Event]] takes place. May be specified using either [[DayOfWeek]], or alternatively
     * [[Text]] conforming to iCal's syntax for byDay recurrence rules.
     * @return string|\Vnetby\Schemaorg\Types\Thing\Intangible\Enumeration\DayOfWeek\DayOfWeek|\Vnetby\Schemaorg\DataTypes\DataText|null
     */
    function getByDay()
    {
        return $this->getProp('byDay');
    }

    /**
     * Defines a [[Date]] or [[DateTime]] during which a scheduled [[Event]] will not take place. The property allows exceptions to a [[Schedule]]
     * to be specified. If an exception is specified as a [[DateTime]] then only the event that would have started at that
     * specific date and time should be excluded from the schedule. If an exception is specified as a [[Date]] then any event
     * that is scheduled for that 24 hour period should be excluded from the schedule. This allows a whole day to be
     * excluded from the schedule without having to itemise every scheduled event.
     * @return string|\Vnetby\Schemaorg\DataTypes\DataDateTime|\Vnetby\Schemaorg\DataTypes\DataDate|null
     */
    function getExceptDate()
    {
        return $this->getProp('exceptDate');
    }

    /**
     * The end date and time of the item (in [ISO 8601 date format](http://en.wikipedia.org/wiki/ISO_8601)).
     * @return string|\Vnetby\Schemaorg\DataTypes\DataDateTime|\Vnetby\Schemaorg\DataTypes\DataDate|null
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
     * @return string|\Vnetby\Schemaorg\DataTypes\DataDateTime|\Vnetby\Schemaorg\DataTypes\DataTime|null
     */
    function getEndTime()
    {
        return $this->getProp('endTime');
    }
}
