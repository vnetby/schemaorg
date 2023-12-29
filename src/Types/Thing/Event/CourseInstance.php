<?php

/**
 * @see https://schema.org/CourseInstance
 * An instance of a [[Course]] which is distinct from other instances because it is offered at a different time or location
 * or through different media or modes of study or to a specific section of students.
 */

namespace Vnetby\Schemaorg\Types\Thing\Event;

class CourseInstance extends \Vnetby\Schemaorg\Types\Thing\Event\Event
{
    const TYPE = 'CourseInstance';

    /**
     * The medium or means of delivery of the course instance or the mode of study, either as a text label (e.g.
     * "online", "onsite" or "blended"; "synchronous" or "asynchronous"; "full-time" or "part-time") or as a URL reference to a term from a controlled
     * vocabulary (e.g. https://ceds.ed.gov/element/001311#Asynchronous).
     * @var string|\Vnetby\Schemaorg\DataTypes\DataText|\Vnetby\Schemaorg\DataTypes\DataURL
     */
    public $courseMode;

    /**
     * Represents the length and pace of a course, expressed as a [[Schedule]].
     * @var \Vnetby\Schemaorg\Types\Thing\Intangible\Schedule
     */
    public $courseSchedule;

    /**
     * The amount of work expected of students taking the course, often provided as a figure per week or per month, and
     * may be broken down by type. For example, "2 hours of lectures, 1 hour of lab work and 3 hours of
     * independent study per week".
     * @var string|\Vnetby\Schemaorg\DataTypes\DataText
     */
    public $courseWorkload;

    /**
     * A person assigned to instruct or provide instructional assistance for the [[CourseInstance]].
     * @var \Vnetby\Schemaorg\Types\Thing\Person\Person
     */
    public $instructor;

    /**
     * The medium or means of delivery of the course instance or the mode of study, either as a text label (e.g.
     * "online", "onsite" or "blended"; "synchronous" or "asynchronous"; "full-time" or "part-time") or as a URL reference to a term from a controlled
     * vocabulary (e.g. https://ceds.ed.gov/element/001311#Asynchronous).
     * @param string|\Vnetby\Schemaorg\DataTypes\DataText|\Vnetby\Schemaorg\DataTypes\DataURL $value
     * @return static
     */
    function setCourseMode($value)
    {
        return $this->setProp('courseMode', $value);
    }

    /**
     * Represents the length and pace of a course, expressed as a [[Schedule]].
     * @param \Vnetby\Schemaorg\Types\Thing\Intangible\Schedule $value
     * @return static
     */
    function setCourseSchedule($value)
    {
        return $this->setProp('courseSchedule', $value);
    }

    /**
     * The amount of work expected of students taking the course, often provided as a figure per week or per month, and
     * may be broken down by type. For example, "2 hours of lectures, 1 hour of lab work and 3 hours of
     * independent study per week".
     * @param string|\Vnetby\Schemaorg\DataTypes\DataText $value
     * @return static
     */
    function setCourseWorkload($value)
    {
        return $this->setProp('courseWorkload', $value);
    }

    /**
     * A person assigned to instruct or provide instructional assistance for the [[CourseInstance]].
     * @param \Vnetby\Schemaorg\Types\Thing\Person\Person $value
     * @return static
     */
    function setInstructor($value)
    {
        return $this->setProp('instructor', $value);
    }

    /**
     * The medium or means of delivery of the course instance or the mode of study, either as a text label (e.g.
     * "online", "onsite" or "blended"; "synchronous" or "asynchronous"; "full-time" or "part-time") or as a URL reference to a term from a controlled
     * vocabulary (e.g. https://ceds.ed.gov/element/001311#Asynchronous).
     * @return string|\Vnetby\Schemaorg\DataTypes\DataText|\Vnetby\Schemaorg\DataTypes\DataURL|null
     */
    function getCourseMode()
    {
        return $this->getProp('courseMode');
    }

    /**
     * Represents the length and pace of a course, expressed as a [[Schedule]].
     * @return \Vnetby\Schemaorg\Types\Thing\Intangible\Schedule|null
     */
    function getCourseSchedule()
    {
        return $this->getProp('courseSchedule');
    }

    /**
     * The amount of work expected of students taking the course, often provided as a figure per week or per month, and
     * may be broken down by type. For example, "2 hours of lectures, 1 hour of lab work and 3 hours of
     * independent study per week".
     * @return string|\Vnetby\Schemaorg\DataTypes\DataText|null
     */
    function getCourseWorkload()
    {
        return $this->getProp('courseWorkload');
    }

    /**
     * A person assigned to instruct or provide instructional assistance for the [[CourseInstance]].
     * @return \Vnetby\Schemaorg\Types\Thing\Person\Person|null
     */
    function getInstructor()
    {
        return $this->getProp('instructor');
    }
}
