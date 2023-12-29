<?php

/**
 * @see https://schema.org/PlanAction
 * The act of planning the execution of an event/task/action/reservation/plan to a future date.
 */

namespace Vnetby\Schemaorg\Types\Thing\Action\OrganizeAction\PlanAction;

class PlanAction extends \Vnetby\Schemaorg\Types\Thing\Action\OrganizeAction\OrganizeAction
{
    const TYPE = 'PlanAction';

    /**
     * The time the object is scheduled to.
     * @var string|\Vnetby\Schemaorg\DataTypes\DataDate|\Vnetby\Schemaorg\DataTypes\DataDateTime
     */
    public $scheduledTime;

    /**
     * The time the object is scheduled to.
     * @param string|\Vnetby\Schemaorg\DataTypes\DataDate|\Vnetby\Schemaorg\DataTypes\DataDateTime $value
     * @return static
     */
    function setScheduledTime($value)
    {
        return $this->setProp('scheduledTime', $value);
    }

    /**
     * The time the object is scheduled to.
     * @return string|\Vnetby\Schemaorg\DataTypes\DataDate|\Vnetby\Schemaorg\DataTypes\DataDateTime|null
     */
    function getScheduledTime()
    {
        return $this->getProp('scheduledTime');
    }
}
