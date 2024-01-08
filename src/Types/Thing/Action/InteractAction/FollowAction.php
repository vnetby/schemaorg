<?php

/**
 * @see https://schema.org/FollowAction
 * The act of forming a personal connection with someone/something (object) unidirectionally/asymmetrically to get updates polled from.\n\nRelated actions:\n\n* [[BefriendAction]]: Unlike BefriendAction, FollowAction
 * implies that the connection is *not* necessarily reciprocal.\n* [[SubscribeAction]]: Unlike SubscribeAction, FollowAction implies that the follower acts as an active agent
 * constantly/actively polling for updates.\n* [[RegisterAction]]: Unlike RegisterAction, FollowAction implies that the agent is interested in continuing receiving updates from the object.\n*
 * [[JoinAction]]: Unlike JoinAction, FollowAction implies that the agent is interested in getting updates from the object.\n* [[TrackAction]]: Unlike TrackAction, FollowAction refers
 * to the polling of updates of all aspects of animate objects rather than the location of inanimate objects (e.g. you track
 * a package, but you don't follow it).
 */

namespace Vnetby\Schemaorg\Types\Thing\Action\InteractAction;

class FollowAction extends \Vnetby\Schemaorg\Types\Thing\Action\InteractAction\InteractAction
{
    const TYPE = 'FollowAction';

    /**
     * A sub property of object. The person or organization being followed.
     * @var \Vnetby\Schemaorg\Types\Thing\Person\Person|\Vnetby\Schemaorg\Types\Thing\Organization\Organization
     */
    public $followee;

    /**
     * A sub property of object. The person or organization being followed.
     * @param \Vnetby\Schemaorg\Types\Thing\Person\Person|\Vnetby\Schemaorg\Types\Thing\Organization\Organization $value
     * @return static
     */
    function setFollowee($value)
    {
        return $this->setProp('followee', $value);
    }

    /**
     * A sub property of object. The person or organization being followed.
     * @return \Vnetby\Schemaorg\Types\Thing\Person\Person|\Vnetby\Schemaorg\Types\Thing\Organization\Organization|null
     */
    function getFollowee()
    {
        return $this->getProp('followee');
    }
}
