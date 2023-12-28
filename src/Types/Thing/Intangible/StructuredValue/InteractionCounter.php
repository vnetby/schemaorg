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
     * The number of interactions for the CreativeWork using the WebSite or SoftwareApplication.
    * @var \Vnetby\Schemaorg\DataTypes\DataInteger
    */
   protected $prop_userInteractionCount;

   /**
     * The WebSite or SoftwareApplication where the interactions took place.
    * @var \Vnetby\Schemaorg\Types\Thing\CreativeWork\SoftwareApplication\SoftwareApplication|\Vnetby\Schemaorg\Types\Thing\CreativeWork\WebSite
    */
   protected $prop_interactionService;

   /**
     * The startTime of something. For a reserved event or service (e.g. FoodEstablishmentReservation), the time that it is expected to start. For
     * actions that span a period of time, when the action was performed. E.g. John wrote a book from *January* to December.
     * For media, including audio and video, it's the time offset of the start of a clip within a larger file.\n\nNote that
     * Event uses startDate/endDate instead of startTime/endTime, even when describing dates with times. This situation may be clarified in future revisions.
    * @var \Vnetby\Schemaorg\DataTypes\DataTime|\Vnetby\Schemaorg\DataTypes\DataDateTime
    */
   protected $prop_startTime;

   /**
     * The location of, for example, where an event is happening, where an organization is located, or where an action takes place.
    * @var \Vnetby\Schemaorg\Types\Thing\Intangible\VirtualLocation|\Vnetby\Schemaorg\DataTypes\DataText|\Vnetby\Schemaorg\Types\Thing\Intangible\StructuredValue\ContactPoint\PostalAddress|\Vnetby\Schemaorg\Types\Thing\Place\Place
    */
   protected $prop_location;

   /**
     * The endTime of something. For a reserved event or service (e.g. FoodEstablishmentReservation), the time that it is expected to end. For
     * actions that span a period of time, when the action was performed. E.g. John wrote a book from January to *December*.
     * For media, including audio and video, it's the time offset of the end of a clip within a larger file.\n\nNote that
     * Event uses startDate/endDate instead of startTime/endTime, even when describing dates with times. This situation may be clarified in future revisions.
    * @var \Vnetby\Schemaorg\DataTypes\DataTime|\Vnetby\Schemaorg\DataTypes\DataDateTime
    */
   protected $prop_endTime;

   /**
     * The Action representing the type of interaction. For up votes, +1s, etc. use [[LikeAction]]. For down votes use [[DislikeAction]]. Otherwise, use
     * the most specific Action.
    * @var \Vnetby\Schemaorg\Types\Thing\Action\Action
    */
   protected $prop_interactionType;

   /**
     * The number of interactions for the CreativeWork using the WebSite or SoftwareApplication.
    * @param \Vnetby\Schemaorg\DataTypes\DataInteger $value
    * @return static
    */
   function setUserInteractionCount($value)
   {
       return $this->setProp('userInteractionCount', $value);
   }

   /**
     * The WebSite or SoftwareApplication where the interactions took place.
    * @param \Vnetby\Schemaorg\Types\Thing\CreativeWork\SoftwareApplication\SoftwareApplication|\Vnetby\Schemaorg\Types\Thing\CreativeWork\WebSite $value
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
    * @param \Vnetby\Schemaorg\DataTypes\DataTime|\Vnetby\Schemaorg\DataTypes\DataDateTime $value
    * @return static
    */
   function setStartTime($value)
   {
       return $this->setProp('startTime', $value);
   }

   /**
     * The location of, for example, where an event is happening, where an organization is located, or where an action takes place.
    * @param \Vnetby\Schemaorg\Types\Thing\Intangible\VirtualLocation|\Vnetby\Schemaorg\DataTypes\DataText|\Vnetby\Schemaorg\Types\Thing\Intangible\StructuredValue\ContactPoint\PostalAddress|\Vnetby\Schemaorg\Types\Thing\Place\Place $value
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
    * @param \Vnetby\Schemaorg\DataTypes\DataTime|\Vnetby\Schemaorg\DataTypes\DataDateTime $value
    * @return static
    */
   function setEndTime($value)
   {
       return $this->setProp('endTime', $value);
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
    * @return \Vnetby\Schemaorg\DataTypes\DataInteger|null
    */
   function getUserInteractionCount()
   {
       return $this->getProp('userInteractionCount');
   }

   /**
     * The WebSite or SoftwareApplication where the interactions took place.
    * @return \Vnetby\Schemaorg\Types\Thing\CreativeWork\SoftwareApplication\SoftwareApplication|\Vnetby\Schemaorg\Types\Thing\CreativeWork\WebSite|null
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
    * @return \Vnetby\Schemaorg\DataTypes\DataTime|\Vnetby\Schemaorg\DataTypes\DataDateTime|null
    */
   function getStartTime()
   {
       return $this->getProp('startTime');
   }

   /**
     * The location of, for example, where an event is happening, where an organization is located, or where an action takes place.
    * @return \Vnetby\Schemaorg\Types\Thing\Intangible\VirtualLocation|\Vnetby\Schemaorg\DataTypes\DataText|\Vnetby\Schemaorg\Types\Thing\Intangible\StructuredValue\ContactPoint\PostalAddress|\Vnetby\Schemaorg\Types\Thing\Place\Place|null
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
    * @return \Vnetby\Schemaorg\DataTypes\DataTime|\Vnetby\Schemaorg\DataTypes\DataDateTime|null
    */
   function getEndTime()
   {
       return $this->getProp('endTime');
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
}
