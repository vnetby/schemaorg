<?php

/**
* @see https://schema.org/Action
 * An action performed by a direct agent and indirect participants upon a direct object. Optionally happens at a location with the
 * help of an inanimate instrument. The execution of the action may produce a result. Specific action sub-type documentation specifies the exact
 * expectation of each argument/role.\n\nSee also [blog post](http://blog.schema.org/2014/04/announcing-schemaorg-actions.html) and [Actions overview document](https://schema.org/docs/actions.html).
*/

namespace Vnetby\Schemaorg\Types\Thing\Action;

class Action extends \Vnetby\Schemaorg\Types\Thing\Thing
{
   const TYPE = 'Action';

   /**
     * The object that helped the agent perform the action. E.g. John wrote a book with *a pen*.
    * @var \Vnetby\Schemaorg\Types\Thing\Thing
    */
   protected $prop_instrument;

   /**
     * Other co-agents that participated in the action indirectly. E.g. John wrote a book with *Steve*.
    * @var \Vnetby\Schemaorg\Types\Thing\Organization\Organization|\Vnetby\Schemaorg\Types\Thing\Person\Person
    */
   protected $prop_participant;

   /**
     * The service provider, service operator, or service performer; the goods producer. Another party (a seller) may offer those services or goods
     * on behalf of the provider. A provider may also serve as the seller.
    * @var \Vnetby\Schemaorg\Types\Thing\Organization\Organization|\Vnetby\Schemaorg\Types\Thing\Person\Person
    */
   protected $prop_provider;

   /**
     * The startTime of something. For a reserved event or service (e.g. FoodEstablishmentReservation), the time that it is expected to start. For
     * actions that span a period of time, when the action was performed. E.g. John wrote a book from *January* to December.
     * For media, including audio and video, it's the time offset of the start of a clip within a larger file.\n\nNote that
     * Event uses startDate/endDate instead of startTime/endTime, even when describing dates with times. This situation may be clarified in future revisions.
    * @var \Vnetby\Schemaorg\DataTypes\DataTime|\Vnetby\Schemaorg\DataTypes\DataDateTime
    */
   protected $prop_startTime;

   /**
     * The object upon which the action is carried out, whose state is kept intact or changed. Also known as the semantic
     * roles patient, affected or undergoer (which change their state) or theme (which doesn't). E.g. John read *a book*.
    * @var \Vnetby\Schemaorg\Types\Thing\Thing
    */
   protected $prop_object;

   /**
     * Indicates a target EntryPoint, or url, for an Action.
    * @var \Vnetby\Schemaorg\DataTypes\DataURL|\Vnetby\Schemaorg\Types\Thing\Intangible\EntryPoint
    */
   protected $prop_target;

   /**
     * The result produced in the action. E.g. John wrote *a book*.
    * @var \Vnetby\Schemaorg\Types\Thing\Thing
    */
   protected $prop_result;

   /**
     * The location of, for example, where an event is happening, where an organization is located, or where an action takes place.
    * @var \Vnetby\Schemaorg\Types\Thing\Intangible\VirtualLocation|\Vnetby\Schemaorg\DataTypes\DataText|\Vnetby\Schemaorg\Types\Thing\Intangible\StructuredValue\ContactPoint\PostalAddress|\Vnetby\Schemaorg\Types\Thing\Place\Place
    */
   protected $prop_location;

   /**
     * Indicates the current disposition of the Action.
    * @var \Vnetby\Schemaorg\Types\Thing\Intangible\Enumeration\StatusEnumeration\ActionStatusType\ActionStatusType
    */
   protected $prop_actionStatus;

   /**
     * The direct performer or driver of the action (animate or inanimate). E.g. *John* wrote a book.
    * @var \Vnetby\Schemaorg\Types\Thing\Person\Person|\Vnetby\Schemaorg\Types\Thing\Organization\Organization
    */
   protected $prop_agent;

   /**
     * The endTime of something. For a reserved event or service (e.g. FoodEstablishmentReservation), the time that it is expected to end. For
     * actions that span a period of time, when the action was performed. E.g. John wrote a book from January to *December*.
     * For media, including audio and video, it's the time offset of the end of a clip within a larger file.\n\nNote that
     * Event uses startDate/endDate instead of startTime/endTime, even when describing dates with times. This situation may be clarified in future revisions.
    * @var \Vnetby\Schemaorg\DataTypes\DataTime|\Vnetby\Schemaorg\DataTypes\DataDateTime
    */
   protected $prop_endTime;

   /**
     * For failed actions, more information on the cause of the failure.
    * @var \Vnetby\Schemaorg\Types\Thing\Thing
    */
   protected $prop_error;

   /**
     * The object that helped the agent perform the action. E.g. John wrote a book with *a pen*.
    * @param \Vnetby\Schemaorg\Types\Thing\Thing $value
    * @return static
    */
   function setInstrument($value)
   {
       return $this->setProp('instrument', $value);
   }

   /**
     * Other co-agents that participated in the action indirectly. E.g. John wrote a book with *Steve*.
    * @param \Vnetby\Schemaorg\Types\Thing\Organization\Organization|\Vnetby\Schemaorg\Types\Thing\Person\Person $value
    * @return static
    */
   function setParticipant($value)
   {
       return $this->setProp('participant', $value);
   }

   /**
     * The service provider, service operator, or service performer; the goods producer. Another party (a seller) may offer those services or goods
     * on behalf of the provider. A provider may also serve as the seller.
    * @param \Vnetby\Schemaorg\Types\Thing\Organization\Organization|\Vnetby\Schemaorg\Types\Thing\Person\Person $value
    * @return static
    */
   function setProvider($value)
   {
       return $this->setProp('provider', $value);
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
     * The object upon which the action is carried out, whose state is kept intact or changed. Also known as the semantic
     * roles patient, affected or undergoer (which change their state) or theme (which doesn't). E.g. John read *a book*.
    * @param \Vnetby\Schemaorg\Types\Thing\Thing $value
    * @return static
    */
   function setObject($value)
   {
       return $this->setProp('object', $value);
   }

   /**
     * Indicates a target EntryPoint, or url, for an Action.
    * @param \Vnetby\Schemaorg\DataTypes\DataURL|\Vnetby\Schemaorg\Types\Thing\Intangible\EntryPoint $value
    * @return static
    */
   function setTarget($value)
   {
       return $this->setProp('target', $value);
   }

   /**
     * The result produced in the action. E.g. John wrote *a book*.
    * @param \Vnetby\Schemaorg\Types\Thing\Thing $value
    * @return static
    */
   function setResult($value)
   {
       return $this->setProp('result', $value);
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
     * Indicates the current disposition of the Action.
    * @param \Vnetby\Schemaorg\Types\Thing\Intangible\Enumeration\StatusEnumeration\ActionStatusType\ActionStatusType $value
    * @return static
    */
   function setActionStatus($value)
   {
       return $this->setProp('actionStatus', $value);
   }

   /**
     * The direct performer or driver of the action (animate or inanimate). E.g. *John* wrote a book.
    * @param \Vnetby\Schemaorg\Types\Thing\Person\Person|\Vnetby\Schemaorg\Types\Thing\Organization\Organization $value
    * @return static
    */
   function setAgent($value)
   {
       return $this->setProp('agent', $value);
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
     * For failed actions, more information on the cause of the failure.
    * @param \Vnetby\Schemaorg\Types\Thing\Thing $value
    * @return static
    */
   function setError($value)
   {
       return $this->setProp('error', $value);
   }

   /**
     * The object that helped the agent perform the action. E.g. John wrote a book with *a pen*.
    * @return \Vnetby\Schemaorg\Types\Thing\Thing|null
    */
   function getInstrument()
   {
       return $this->getProp('instrument');
   }

   /**
     * Other co-agents that participated in the action indirectly. E.g. John wrote a book with *Steve*.
    * @return \Vnetby\Schemaorg\Types\Thing\Organization\Organization|\Vnetby\Schemaorg\Types\Thing\Person\Person|null
    */
   function getParticipant()
   {
       return $this->getProp('participant');
   }

   /**
     * The service provider, service operator, or service performer; the goods producer. Another party (a seller) may offer those services or goods
     * on behalf of the provider. A provider may also serve as the seller.
    * @return \Vnetby\Schemaorg\Types\Thing\Organization\Organization|\Vnetby\Schemaorg\Types\Thing\Person\Person|null
    */
   function getProvider()
   {
       return $this->getProp('provider');
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
     * The object upon which the action is carried out, whose state is kept intact or changed. Also known as the semantic
     * roles patient, affected or undergoer (which change their state) or theme (which doesn't). E.g. John read *a book*.
    * @return \Vnetby\Schemaorg\Types\Thing\Thing|null
    */
   function getObject()
   {
       return $this->getProp('object');
   }

   /**
     * Indicates a target EntryPoint, or url, for an Action.
    * @return \Vnetby\Schemaorg\DataTypes\DataURL|\Vnetby\Schemaorg\Types\Thing\Intangible\EntryPoint|null
    */
   function getTarget()
   {
       return $this->getProp('target');
   }

   /**
     * The result produced in the action. E.g. John wrote *a book*.
    * @return \Vnetby\Schemaorg\Types\Thing\Thing|null
    */
   function getResult()
   {
       return $this->getProp('result');
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
     * Indicates the current disposition of the Action.
    * @return \Vnetby\Schemaorg\Types\Thing\Intangible\Enumeration\StatusEnumeration\ActionStatusType\ActionStatusType|null
    */
   function getActionStatus()
   {
       return $this->getProp('actionStatus');
   }

   /**
     * The direct performer or driver of the action (animate or inanimate). E.g. *John* wrote a book.
    * @return \Vnetby\Schemaorg\Types\Thing\Person\Person|\Vnetby\Schemaorg\Types\Thing\Organization\Organization|null
    */
   function getAgent()
   {
       return $this->getProp('agent');
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
     * For failed actions, more information on the cause of the failure.
    * @return \Vnetby\Schemaorg\Types\Thing\Thing|null
    */
   function getError()
   {
       return $this->getProp('error');
   }
}
