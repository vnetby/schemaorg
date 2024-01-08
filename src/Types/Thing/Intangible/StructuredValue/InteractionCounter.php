<?php

/**
 * @see https://schema.org/InteractionCounter
 * A summary of how users have interacted with this CreativeWork. In most cases, authors will use a subtype to specify the
 * specific type of interaction.
 */

namespace Vnetby\Schemaorg\Types\Thing\Intangible\StructuredValue;

class InteractionCounter extends \Vnetby\Schemaorg\Types\Thing\Intangible\StructuredValue\StructuredValue
{
    const TYPE = 'InteractionCounter';

    /**
     * The WebSite or SoftwareApplication where the interactions took place.
     * @var \Vnetby\Schemaorg\Types\Thing\CreativeWork\WebSite|\Vnetby\Schemaorg\Types\Thing\CreativeWork\SoftwareApplication\SoftwareApplication
     */
    public $interactionService;

    /**
     * The startTime of something. For a reserved event or service (e.g. FoodEstablishmentReservation), the time that it is expected to start. For
     * actions that span a period of time, when the action was performed. E.g. John wrote a book from *January* to December.
     * For media, including audio and video, it's the time offset of the start of a clip within a larger file.\n\nNote that
     * Event uses startDate/endDate instead of startTime/endTime, even when describing dates with times. This situation may be clarified in future revisions.
     * @var string|\Vnetby\Schemaorg\DataTypes\DataDateTime|\Vnetby\Schemaorg\DataTypes\DataTime
     */
    public $startTime;

    /**
     * The Action representing the type of interaction. For up votes, +1s, etc. use [[LikeAction]]. For down votes use [[DislikeAction]]. Otherwise, use
     * the most specific Action.
     * @var \Vnetby\Schemaorg\Types\Thing\Action\Action
     */
    public $interactionType;

    /**
     * The number of interactions for the CreativeWork using the WebSite or SoftwareApplication.
     * @var string|int|\Vnetby\Schemaorg\DataTypes\DataInteger
     */
    public $userInteractionCount;

    /**
     * The location of, for example, where an event is happening, where an organization is located, or where an action takes place.
     * @var string|\Vnetby\Schemaorg\Types\Thing\Intangible\VirtualLocation|\Vnetby\Schemaorg\Types\Thing\Place\Place|\Vnetby\Schemaorg\Types\Thing\Intangible\StructuredValue\ContactPoint\PostalAddress|\Vnetby\Schemaorg\DataTypes\DataText
     */
    public $location;

    /**
     * The endTime of something. For a reserved event or service (e.g. FoodEstablishmentReservation), the time that it is expected to end. For
     * actions that span a period of time, when the action was performed. E.g. John wrote a book from January to *December*.
     * For media, including audio and video, it's the time offset of the end of a clip within a larger file.\n\nNote that
     * Event uses startDate/endDate instead of startTime/endTime, even when describing dates with times. This situation may be clarified in future revisions.
     * @var string|\Vnetby\Schemaorg\DataTypes\DataDateTime|\Vnetby\Schemaorg\DataTypes\DataTime
     */
    public $endTime;

    /**
     * The WebSite or SoftwareApplication where the interactions took place.
     * @param \Vnetby\Schemaorg\Types\Thing\CreativeWork\WebSite|\Vnetby\Schemaorg\Types\Thing\CreativeWork\SoftwareApplication\SoftwareApplication $value
     * @return static
     */
    function setInteractionService($value)
    {
        return $this->setProp('interactionService', $value);
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
     * The Action representing the type of interaction. For up votes, +1s, etc. use [[LikeAction]]. For down votes use [[DislikeAction]]. Otherwise, use
     * the most specific Action.
     * @param \Vnetby\Schemaorg\Types\Thing\Action\Action $value
     * @return static
     */
    function setInteractionType($value)
    {
        return $this->setProp('interactionType', $value);
    }

    /**
     * The number of interactions for the CreativeWork using the WebSite or SoftwareApplication.
     * @param string|int|\Vnetby\Schemaorg\DataTypes\DataInteger $value
     * @return static
     */
    function setUserInteractionCount($value)
    {
        return $this->setProp('userInteractionCount', $value);
    }

    /**
     * The location of, for example, where an event is happening, where an organization is located, or where an action takes place.
     * @param string|\Vnetby\Schemaorg\Types\Thing\Intangible\VirtualLocation|\Vnetby\Schemaorg\Types\Thing\Place\Place|\Vnetby\Schemaorg\Types\Thing\Intangible\StructuredValue\ContactPoint\PostalAddress|\Vnetby\Schemaorg\DataTypes\DataText $value
     * @return static
     */
    function setLocation($value)
    {
        return $this->setProp('location', $value);
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
     * The WebSite or SoftwareApplication where the interactions took place.
     * @return \Vnetby\Schemaorg\Types\Thing\CreativeWork\WebSite|\Vnetby\Schemaorg\Types\Thing\CreativeWork\SoftwareApplication\SoftwareApplication|null
     */
    function getInteractionService()
    {
        return $this->getProp('interactionService');
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
     * The Action representing the type of interaction. For up votes, +1s, etc. use [[LikeAction]]. For down votes use [[DislikeAction]]. Otherwise, use
     * the most specific Action.
     * @return \Vnetby\Schemaorg\Types\Thing\Action\Action|null
     */
    function getInteractionType()
    {
        return $this->getProp('interactionType');
    }

    /**
     * The number of interactions for the CreativeWork using the WebSite or SoftwareApplication.
     * @return string|int|\Vnetby\Schemaorg\DataTypes\DataInteger|null
     */
    function getUserInteractionCount()
    {
        return $this->getProp('userInteractionCount');
    }

    /**
     * The location of, for example, where an event is happening, where an organization is located, or where an action takes place.
     * @return string|\Vnetby\Schemaorg\Types\Thing\Intangible\VirtualLocation|\Vnetby\Schemaorg\Types\Thing\Place\Place|\Vnetby\Schemaorg\Types\Thing\Intangible\StructuredValue\ContactPoint\PostalAddress|\Vnetby\Schemaorg\DataTypes\DataText|null
     */
    function getLocation()
    {
        return $this->getProp('location');
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
