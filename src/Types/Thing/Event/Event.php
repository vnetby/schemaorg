<?php

/**
 * @see https://schema.org/Event
 * An event happening at a certain time and location, such as a concert, lecture, or festival. Ticketing information may be added
 * via the [[offers]] property. Repeated events may be structured as separate Event objects.
 */

namespace Vnetby\Schemaorg\Types\Thing\Event;

class Event extends \Vnetby\Schemaorg\Types\Thing\Thing
{
    const TYPE = 'Event';

    /**
     * An event that this event is a part of. For example, a collection of individual music performances might each have a
     * music festival as their superEvent.
     * @var \Vnetby\Schemaorg\Types\Thing\Event\Event
     */
    public $superEvent;

    /**
     * A [[Grant]] that directly or indirectly provide funding or sponsorship for this item. See also [[ownershipFundingInfo]].
     * @var \Vnetby\Schemaorg\Types\Thing\Intangible\Grant\Grant
     */
    public $funding;

    /**
     * A flag to signal that the item, event, or place is accessible for free.
     * @var bool|\Vnetby\Schemaorg\DataTypes\DataBoolean
     */
    public $isAccessibleForFree;

    /**
     * The subject matter of the content.
     * @var \Vnetby\Schemaorg\Types\Thing\Thing
     */
    public $about;

    /**
     * A director of e.g. TV, radio, movie, video gaming etc. content, or of an event. Directors can be associated with individual
     * items or with a series, episode, clip.
     * @var \Vnetby\Schemaorg\Types\Thing\Person\Person
     */
    public $director;

    /**
     * A person or organization that supports a thing through a pledge, promise, or financial contribution. E.g. a sponsor of a Medical
     * Study or a corporate sponsor of an event.
     * @var \Vnetby\Schemaorg\Types\Thing\Person\Person|\Vnetby\Schemaorg\Types\Thing\Organization\Organization
     */
    public $sponsor;

    /**
     * The time admission will commence.
     * @var string|\Vnetby\Schemaorg\DataTypes\DataDateTime|\Vnetby\Schemaorg\DataTypes\DataTime
     */
    public $doorTime;

    /**
     * The language of the content or performance or used in an action. Please use one of the language codes from the
     * [IETF BCP 47 standard](http://tools.ietf.org/html/bcp47). See also [[availableLanguage]].
     * @var string|\Vnetby\Schemaorg\DataTypes\DataText|\Vnetby\Schemaorg\Types\Thing\Intangible\Language
     */
    public $inLanguage;

    /**
     * An offer to provide this item&#x2014;for example, an offer to sell a product, rent the DVD of a movie, perform a
     * service, or give away tickets to an event. Use [[businessFunction]] to indicate the kind of transaction offered, i.e. sell, lease, etc.
     * This property can also be used to describe a [[Demand]]. While this property is listed as expected on a number of
     * common types, it can be used in others. In that case, using a second type, such as Product or a subtype
     * of Product, can clarify the nature of the offer. 
     * @var \Vnetby\Schemaorg\Types\Thing\Intangible\Demand|\Vnetby\Schemaorg\Types\Thing\Intangible\Offer\Offer
     */
    public $offers;

    /**
     * The total number of individuals that may attend an event or venue.
     * @var string|int|\Vnetby\Schemaorg\DataTypes\DataInteger
     */
    public $maximumAttendeeCapacity;

    /**
     * An intended audience, i.e. a group for whom something was created.
     * @var \Vnetby\Schemaorg\Types\Thing\Intangible\Audience\Audience
     */
    public $audience;

    /**
     * Associates an [[Event]] with a [[Schedule]]. There are circumstances where it is preferable to share a schedule for a series of
     * repeating events rather than data on the individual events themselves. For example, a website or application might prefer to publish a
     * schedule for a weekly gym class rather than provide data on every event. A schedule could be processed by applications to
     * add forthcoming events to a calendar. An [[Event]] that is associated with a [[Schedule]] using this property should not have [[startDate]]
     * or [[endDate]] properties. These are instead defined within the associated [[Schedule]], this avoids any ambiguity for clients using the data. The
     * property might have repeated values to specify different schedules, e.g. for different months or seasons.
     * @var \Vnetby\Schemaorg\Types\Thing\Intangible\Schedule
     */
    public $eventSchedule;

    /**
     * An Event that is part of this event. For example, a conference event includes many presentations, each of which is a
     * subEvent of the conference.
     * @var \Vnetby\Schemaorg\Types\Thing\Event\Event
     */
    public $subEvent;

    /**
     * An actor, e.g. in TV, radio, movie, video games etc., or in an event. Actors can be associated with individual items
     * or with a series, episode, clip.
     * @var \Vnetby\Schemaorg\Types\Thing\Person\Person
     */
    public $actor;

    /**
     * The typical expected age range, e.g. '7-9', '11-'.
     * @var string|\Vnetby\Schemaorg\DataTypes\DataText
     */
    public $typicalAgeRange;

    /**
     * The overall rating, based on a collection of reviews or ratings, of the item.
     * @var \Vnetby\Schemaorg\Types\Thing\Intangible\Rating\AggregateRating\AggregateRating
     */
    public $aggregateRating;

    /**
     * The duration of the item (movie, audio recording, event, etc.) in [ISO 8601 date format](http://en.wikipedia.org/wiki/ISO_8601).
     * @var \Vnetby\Schemaorg\Types\Thing\Intangible\Quantity\Duration
     */
    public $duration;

    /**
     * The maximum physical attendee capacity of an [[Event]] whose [[eventAttendanceMode]] is [[OfflineEventAttendanceMode]] (or the offline aspects, in the case of a
     * [[MixedEventAttendanceMode]]). 
     * @var string|int|\Vnetby\Schemaorg\DataTypes\DataInteger
     */
    public $maximumPhysicalAttendeeCapacity;

    /**
     * A person or organization that supports (sponsors) something through some kind of financial contribution.
     * @var \Vnetby\Schemaorg\Types\Thing\Person\Person|\Vnetby\Schemaorg\Types\Thing\Organization\Organization
     */
    public $funder;

    /**
     * The eventAttendanceMode of an event indicates whether it occurs online, offline, or a mix.
     * @var \Vnetby\Schemaorg\Types\Thing\Intangible\Enumeration\EventAttendanceModeEnumeration\EventAttendanceModeEnumeration
     */
    public $eventAttendanceMode;

    /**
     * The maximum virtual attendee capacity of an [[Event]] whose [[eventAttendanceMode]] is [[OnlineEventAttendanceMode]] (or the online aspects, in the case of a
     * [[MixedEventAttendanceMode]]). 
     * @var string|int|\Vnetby\Schemaorg\DataTypes\DataInteger
     */
    public $maximumVirtualAttendeeCapacity;

    /**
     * A person or organization attending the event.
     * @var \Vnetby\Schemaorg\Types\Thing\Organization\Organization|\Vnetby\Schemaorg\Types\Thing\Person\Person
     */
    public $attendee;

    /**
     * The start date and time of the item (in [ISO 8601 date format](http://en.wikipedia.org/wiki/ISO_8601)).
     * @var string|\Vnetby\Schemaorg\DataTypes\DataDate|\Vnetby\Schemaorg\DataTypes\DataDateTime
     */
    public $startDate;

    /**
     * Keywords or tags used to describe some item. Multiple textual entries in a keywords list are typically delimited by commas, or
     * by repeating the property.
     * @var string|\Vnetby\Schemaorg\DataTypes\DataURL|\Vnetby\Schemaorg\DataTypes\DataText|\Vnetby\Schemaorg\Types\Thing\Intangible\DefinedTerm\DefinedTerm
     */
    public $keywords;

    /**
     * The location of, for example, where an event is happening, where an organization is located, or where an action takes place.
     * @var string|\Vnetby\Schemaorg\Types\Thing\Intangible\VirtualLocation|\Vnetby\Schemaorg\DataTypes\DataText|\Vnetby\Schemaorg\Types\Thing\Intangible\StructuredValue\ContactPoint\PostalAddress|\Vnetby\Schemaorg\Types\Thing\Place\Place
     */
    public $location;

    /**
     * A review of the item.
     * @var \Vnetby\Schemaorg\Types\Thing\CreativeWork\Review\Review
     */
    public $review;

    /**
     * The person or organization who wrote a composition, or who is the composer of a work performed at some event.
     * @var \Vnetby\Schemaorg\Types\Thing\Organization\Organization|\Vnetby\Schemaorg\Types\Thing\Person\Person
     */
    public $composer;

    /**
     * Used in conjunction with eventStatus for rescheduled or cancelled events. This property contains the previously scheduled start date. For rescheduled events,
     * the startDate property should be used for the newly scheduled start date. In the (rare) case of an event that has
     * been postponed and rescheduled multiple times, this field may be repeated.
     * @var string|\Vnetby\Schemaorg\DataTypes\DataDate
     */
    public $previousStartDate;

    /**
     * The CreativeWork that captured all or part of this Event.
     * @var \Vnetby\Schemaorg\Types\Thing\CreativeWork\CreativeWork
     */
    public $recordedIn;

    /**
     * A performer at the event&#x2014;for example, a presenter, musician, musical group or actor.
     * @var \Vnetby\Schemaorg\Types\Thing\Organization\Organization|\Vnetby\Schemaorg\Types\Thing\Person\Person
     */
    public $performer;

    /**
     * The end date and time of the item (in [ISO 8601 date format](http://en.wikipedia.org/wiki/ISO_8601)).
     * @var string|\Vnetby\Schemaorg\DataTypes\DataDateTime|\Vnetby\Schemaorg\DataTypes\DataDate
     */
    public $endDate;

    /**
     * Organization or person who adapts a creative work to different languages, regional differences and technical requirements of a target market, or
     * that translates during some event.
     * @var \Vnetby\Schemaorg\Types\Thing\Person\Person|\Vnetby\Schemaorg\Types\Thing\Organization\Organization
     */
    public $translator;

    /**
     * A secondary contributor to the CreativeWork or Event.
     * @var \Vnetby\Schemaorg\Types\Thing\Person\Person|\Vnetby\Schemaorg\Types\Thing\Organization\Organization
     */
    public $contributor;

    /**
     * The number of attendee places for an event that remain unallocated.
     * @var string|int|\Vnetby\Schemaorg\DataTypes\DataInteger
     */
    public $remainingAttendeeCapacity;

    /**
     * A work featured in some event, e.g. exhibited in an ExhibitionEvent. Specific subproperties are available for workPerformed (e.g. a play), or
     * a workPresented (a Movie at a ScreeningEvent).
     * @var \Vnetby\Schemaorg\Types\Thing\CreativeWork\CreativeWork
     */
    public $workFeatured;

    /**
     * A work performed in some event, for example a play performed in a TheaterEvent.
     * @var \Vnetby\Schemaorg\Types\Thing\CreativeWork\CreativeWork
     */
    public $workPerformed;

    /**
     * An organizer of an Event.
     * @var \Vnetby\Schemaorg\Types\Thing\Organization\Organization|\Vnetby\Schemaorg\Types\Thing\Person\Person
     */
    public $organizer;

    /**
     * An eventStatus of an event represents its status; particularly useful when an event is cancelled or rescheduled.
     * @var \Vnetby\Schemaorg\Types\Thing\Intangible\Enumeration\StatusEnumeration\EventStatusType\EventStatusType
     */
    public $eventStatus;

    /**
     * An event that this event is a part of. For example, a collection of individual music performances might each have a
     * music festival as their superEvent.
     * @param \Vnetby\Schemaorg\Types\Thing\Event\Event $value
     * @return static
     */
    function setSuperEvent($value)
    {
        return $this->setProp('superEvent', $value);
    }

    /**
     * A [[Grant]] that directly or indirectly provide funding or sponsorship for this item. See also [[ownershipFundingInfo]].
     * @param \Vnetby\Schemaorg\Types\Thing\Intangible\Grant\Grant $value
     * @return static
     */
    function setFunding($value)
    {
        return $this->setProp('funding', $value);
    }

    /**
     * A flag to signal that the item, event, or place is accessible for free.
     * @param bool|\Vnetby\Schemaorg\DataTypes\DataBoolean $value
     * @return static
     */
    function setIsAccessibleForFree($value)
    {
        return $this->setProp('isAccessibleForFree', $value);
    }

    /**
     * The subject matter of the content.
     * @param \Vnetby\Schemaorg\Types\Thing\Thing $value
     * @return static
     */
    function setAbout($value)
    {
        return $this->setProp('about', $value);
    }

    /**
     * A director of e.g. TV, radio, movie, video gaming etc. content, or of an event. Directors can be associated with individual
     * items or with a series, episode, clip.
     * @param \Vnetby\Schemaorg\Types\Thing\Person\Person $value
     * @return static
     */
    function setDirector($value)
    {
        return $this->setProp('director', $value);
    }

    /**
     * A person or organization that supports a thing through a pledge, promise, or financial contribution. E.g. a sponsor of a Medical
     * Study or a corporate sponsor of an event.
     * @param \Vnetby\Schemaorg\Types\Thing\Person\Person|\Vnetby\Schemaorg\Types\Thing\Organization\Organization $value
     * @return static
     */
    function setSponsor($value)
    {
        return $this->setProp('sponsor', $value);
    }

    /**
     * The time admission will commence.
     * @param string|\Vnetby\Schemaorg\DataTypes\DataDateTime|\Vnetby\Schemaorg\DataTypes\DataTime $value
     * @return static
     */
    function setDoorTime($value)
    {
        return $this->setProp('doorTime', $value);
    }

    /**
     * The language of the content or performance or used in an action. Please use one of the language codes from the
     * [IETF BCP 47 standard](http://tools.ietf.org/html/bcp47). See also [[availableLanguage]].
     * @param string|\Vnetby\Schemaorg\DataTypes\DataText|\Vnetby\Schemaorg\Types\Thing\Intangible\Language $value
     * @return static
     */
    function setInLanguage($value)
    {
        return $this->setProp('inLanguage', $value);
    }

    /**
     * An offer to provide this item&#x2014;for example, an offer to sell a product, rent the DVD of a movie, perform a
     * service, or give away tickets to an event. Use [[businessFunction]] to indicate the kind of transaction offered, i.e. sell, lease, etc.
     * This property can also be used to describe a [[Demand]]. While this property is listed as expected on a number of
     * common types, it can be used in others. In that case, using a second type, such as Product or a subtype
     * of Product, can clarify the nature of the offer. 
     * @param \Vnetby\Schemaorg\Types\Thing\Intangible\Demand|\Vnetby\Schemaorg\Types\Thing\Intangible\Offer\Offer $value
     * @return static
     */
    function setOffers($value)
    {
        return $this->setProp('offers', $value);
    }

    /**
     * The total number of individuals that may attend an event or venue.
     * @param string|int|\Vnetby\Schemaorg\DataTypes\DataInteger $value
     * @return static
     */
    function setMaximumAttendeeCapacity($value)
    {
        return $this->setProp('maximumAttendeeCapacity', $value);
    }

    /**
     * An intended audience, i.e. a group for whom something was created.
     * @param \Vnetby\Schemaorg\Types\Thing\Intangible\Audience\Audience $value
     * @return static
     */
    function setAudience($value)
    {
        return $this->setProp('audience', $value);
    }

    /**
     * Associates an [[Event]] with a [[Schedule]]. There are circumstances where it is preferable to share a schedule for a series of
     * repeating events rather than data on the individual events themselves. For example, a website or application might prefer to publish a
     * schedule for a weekly gym class rather than provide data on every event. A schedule could be processed by applications to
     * add forthcoming events to a calendar. An [[Event]] that is associated with a [[Schedule]] using this property should not have [[startDate]]
     * or [[endDate]] properties. These are instead defined within the associated [[Schedule]], this avoids any ambiguity for clients using the data. The
     * property might have repeated values to specify different schedules, e.g. for different months or seasons.
     * @param \Vnetby\Schemaorg\Types\Thing\Intangible\Schedule $value
     * @return static
     */
    function setEventSchedule($value)
    {
        return $this->setProp('eventSchedule', $value);
    }

    /**
     * An Event that is part of this event. For example, a conference event includes many presentations, each of which is a
     * subEvent of the conference.
     * @param \Vnetby\Schemaorg\Types\Thing\Event\Event $value
     * @return static
     */
    function setSubEvent($value)
    {
        return $this->setProp('subEvent', $value);
    }

    /**
     * An actor, e.g. in TV, radio, movie, video games etc., or in an event. Actors can be associated with individual items
     * or with a series, episode, clip.
     * @param \Vnetby\Schemaorg\Types\Thing\Person\Person $value
     * @return static
     */
    function setActor($value)
    {
        return $this->setProp('actor', $value);
    }

    /**
     * The typical expected age range, e.g. '7-9', '11-'.
     * @param string|\Vnetby\Schemaorg\DataTypes\DataText $value
     * @return static
     */
    function setTypicalAgeRange($value)
    {
        return $this->setProp('typicalAgeRange', $value);
    }

    /**
     * The overall rating, based on a collection of reviews or ratings, of the item.
     * @param \Vnetby\Schemaorg\Types\Thing\Intangible\Rating\AggregateRating\AggregateRating $value
     * @return static
     */
    function setAggregateRating($value)
    {
        return $this->setProp('aggregateRating', $value);
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
     * The maximum physical attendee capacity of an [[Event]] whose [[eventAttendanceMode]] is [[OfflineEventAttendanceMode]] (or the offline aspects, in the case of a
     * [[MixedEventAttendanceMode]]). 
     * @param string|int|\Vnetby\Schemaorg\DataTypes\DataInteger $value
     * @return static
     */
    function setMaximumPhysicalAttendeeCapacity($value)
    {
        return $this->setProp('maximumPhysicalAttendeeCapacity', $value);
    }

    /**
     * A person or organization that supports (sponsors) something through some kind of financial contribution.
     * @param \Vnetby\Schemaorg\Types\Thing\Person\Person|\Vnetby\Schemaorg\Types\Thing\Organization\Organization $value
     * @return static
     */
    function setFunder($value)
    {
        return $this->setProp('funder', $value);
    }

    /**
     * The eventAttendanceMode of an event indicates whether it occurs online, offline, or a mix.
     * @param \Vnetby\Schemaorg\Types\Thing\Intangible\Enumeration\EventAttendanceModeEnumeration\EventAttendanceModeEnumeration $value
     * @return static
     */
    function setEventAttendanceMode($value)
    {
        return $this->setProp('eventAttendanceMode', $value);
    }

    /**
     * The maximum virtual attendee capacity of an [[Event]] whose [[eventAttendanceMode]] is [[OnlineEventAttendanceMode]] (or the online aspects, in the case of a
     * [[MixedEventAttendanceMode]]). 
     * @param string|int|\Vnetby\Schemaorg\DataTypes\DataInteger $value
     * @return static
     */
    function setMaximumVirtualAttendeeCapacity($value)
    {
        return $this->setProp('maximumVirtualAttendeeCapacity', $value);
    }

    /**
     * A person or organization attending the event.
     * @param \Vnetby\Schemaorg\Types\Thing\Organization\Organization|\Vnetby\Schemaorg\Types\Thing\Person\Person $value
     * @return static
     */
    function setAttendee($value)
    {
        return $this->setProp('attendee', $value);
    }

    /**
     * The start date and time of the item (in [ISO 8601 date format](http://en.wikipedia.org/wiki/ISO_8601)).
     * @param string|\Vnetby\Schemaorg\DataTypes\DataDate|\Vnetby\Schemaorg\DataTypes\DataDateTime $value
     * @return static
     */
    function setStartDate($value)
    {
        return $this->setProp('startDate', $value);
    }

    /**
     * Keywords or tags used to describe some item. Multiple textual entries in a keywords list are typically delimited by commas, or
     * by repeating the property.
     * @param string|\Vnetby\Schemaorg\DataTypes\DataURL|\Vnetby\Schemaorg\DataTypes\DataText|\Vnetby\Schemaorg\Types\Thing\Intangible\DefinedTerm\DefinedTerm $value
     * @return static
     */
    function setKeywords($value)
    {
        return $this->setProp('keywords', $value);
    }

    /**
     * The location of, for example, where an event is happening, where an organization is located, or where an action takes place.
     * @param string|\Vnetby\Schemaorg\Types\Thing\Intangible\VirtualLocation|\Vnetby\Schemaorg\DataTypes\DataText|\Vnetby\Schemaorg\Types\Thing\Intangible\StructuredValue\ContactPoint\PostalAddress|\Vnetby\Schemaorg\Types\Thing\Place\Place $value
     * @return static
     */
    function setLocation($value)
    {
        return $this->setProp('location', $value);
    }

    /**
     * A review of the item.
     * @param \Vnetby\Schemaorg\Types\Thing\CreativeWork\Review\Review $value
     * @return static
     */
    function setReview($value)
    {
        return $this->setProp('review', $value);
    }

    /**
     * The person or organization who wrote a composition, or who is the composer of a work performed at some event.
     * @param \Vnetby\Schemaorg\Types\Thing\Organization\Organization|\Vnetby\Schemaorg\Types\Thing\Person\Person $value
     * @return static
     */
    function setComposer($value)
    {
        return $this->setProp('composer', $value);
    }

    /**
     * Used in conjunction with eventStatus for rescheduled or cancelled events. This property contains the previously scheduled start date. For rescheduled events,
     * the startDate property should be used for the newly scheduled start date. In the (rare) case of an event that has
     * been postponed and rescheduled multiple times, this field may be repeated.
     * @param string|\Vnetby\Schemaorg\DataTypes\DataDate $value
     * @return static
     */
    function setPreviousStartDate($value)
    {
        return $this->setProp('previousStartDate', $value);
    }

    /**
     * The CreativeWork that captured all or part of this Event.
     * @param \Vnetby\Schemaorg\Types\Thing\CreativeWork\CreativeWork $value
     * @return static
     */
    function setRecordedIn($value)
    {
        return $this->setProp('recordedIn', $value);
    }

    /**
     * A performer at the event&#x2014;for example, a presenter, musician, musical group or actor.
     * @param \Vnetby\Schemaorg\Types\Thing\Organization\Organization|\Vnetby\Schemaorg\Types\Thing\Person\Person $value
     * @return static
     */
    function setPerformer($value)
    {
        return $this->setProp('performer', $value);
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
     * Organization or person who adapts a creative work to different languages, regional differences and technical requirements of a target market, or
     * that translates during some event.
     * @param \Vnetby\Schemaorg\Types\Thing\Person\Person|\Vnetby\Schemaorg\Types\Thing\Organization\Organization $value
     * @return static
     */
    function setTranslator($value)
    {
        return $this->setProp('translator', $value);
    }

    /**
     * A secondary contributor to the CreativeWork or Event.
     * @param \Vnetby\Schemaorg\Types\Thing\Person\Person|\Vnetby\Schemaorg\Types\Thing\Organization\Organization $value
     * @return static
     */
    function setContributor($value)
    {
        return $this->setProp('contributor', $value);
    }

    /**
     * The number of attendee places for an event that remain unallocated.
     * @param string|int|\Vnetby\Schemaorg\DataTypes\DataInteger $value
     * @return static
     */
    function setRemainingAttendeeCapacity($value)
    {
        return $this->setProp('remainingAttendeeCapacity', $value);
    }

    /**
     * A work featured in some event, e.g. exhibited in an ExhibitionEvent. Specific subproperties are available for workPerformed (e.g. a play), or
     * a workPresented (a Movie at a ScreeningEvent).
     * @param \Vnetby\Schemaorg\Types\Thing\CreativeWork\CreativeWork $value
     * @return static
     */
    function setWorkFeatured($value)
    {
        return $this->setProp('workFeatured', $value);
    }

    /**
     * A work performed in some event, for example a play performed in a TheaterEvent.
     * @param \Vnetby\Schemaorg\Types\Thing\CreativeWork\CreativeWork $value
     * @return static
     */
    function setWorkPerformed($value)
    {
        return $this->setProp('workPerformed', $value);
    }

    /**
     * An organizer of an Event.
     * @param \Vnetby\Schemaorg\Types\Thing\Organization\Organization|\Vnetby\Schemaorg\Types\Thing\Person\Person $value
     * @return static
     */
    function setOrganizer($value)
    {
        return $this->setProp('organizer', $value);
    }

    /**
     * An eventStatus of an event represents its status; particularly useful when an event is cancelled or rescheduled.
     * @param \Vnetby\Schemaorg\Types\Thing\Intangible\Enumeration\StatusEnumeration\EventStatusType\EventStatusType $value
     * @return static
     */
    function setEventStatus($value)
    {
        return $this->setProp('eventStatus', $value);
    }

    /**
     * An event that this event is a part of. For example, a collection of individual music performances might each have a
     * music festival as their superEvent.
     * @return \Vnetby\Schemaorg\Types\Thing\Event\Event|null
     */
    function getSuperEvent()
    {
        return $this->getProp('superEvent');
    }

    /**
     * A [[Grant]] that directly or indirectly provide funding or sponsorship for this item. See also [[ownershipFundingInfo]].
     * @return \Vnetby\Schemaorg\Types\Thing\Intangible\Grant\Grant|null
     */
    function getFunding()
    {
        return $this->getProp('funding');
    }

    /**
     * A flag to signal that the item, event, or place is accessible for free.
     * @return bool|\Vnetby\Schemaorg\DataTypes\DataBoolean|null
     */
    function getIsAccessibleForFree()
    {
        return $this->getProp('isAccessibleForFree');
    }

    /**
     * The subject matter of the content.
     * @return \Vnetby\Schemaorg\Types\Thing\Thing|null
     */
    function getAbout()
    {
        return $this->getProp('about');
    }

    /**
     * A director of e.g. TV, radio, movie, video gaming etc. content, or of an event. Directors can be associated with individual
     * items or with a series, episode, clip.
     * @return \Vnetby\Schemaorg\Types\Thing\Person\Person|null
     */
    function getDirector()
    {
        return $this->getProp('director');
    }

    /**
     * A person or organization that supports a thing through a pledge, promise, or financial contribution. E.g. a sponsor of a Medical
     * Study or a corporate sponsor of an event.
     * @return \Vnetby\Schemaorg\Types\Thing\Person\Person|\Vnetby\Schemaorg\Types\Thing\Organization\Organization|null
     */
    function getSponsor()
    {
        return $this->getProp('sponsor');
    }

    /**
     * The time admission will commence.
     * @return string|\Vnetby\Schemaorg\DataTypes\DataDateTime|\Vnetby\Schemaorg\DataTypes\DataTime|null
     */
    function getDoorTime()
    {
        return $this->getProp('doorTime');
    }

    /**
     * The language of the content or performance or used in an action. Please use one of the language codes from the
     * [IETF BCP 47 standard](http://tools.ietf.org/html/bcp47). See also [[availableLanguage]].
     * @return string|\Vnetby\Schemaorg\DataTypes\DataText|\Vnetby\Schemaorg\Types\Thing\Intangible\Language|null
     */
    function getInLanguage()
    {
        return $this->getProp('inLanguage');
    }

    /**
     * An offer to provide this item&#x2014;for example, an offer to sell a product, rent the DVD of a movie, perform a
     * service, or give away tickets to an event. Use [[businessFunction]] to indicate the kind of transaction offered, i.e. sell, lease, etc.
     * This property can also be used to describe a [[Demand]]. While this property is listed as expected on a number of
     * common types, it can be used in others. In that case, using a second type, such as Product or a subtype
     * of Product, can clarify the nature of the offer. 
     * @return \Vnetby\Schemaorg\Types\Thing\Intangible\Demand|\Vnetby\Schemaorg\Types\Thing\Intangible\Offer\Offer|null
     */
    function getOffers()
    {
        return $this->getProp('offers');
    }

    /**
     * The total number of individuals that may attend an event or venue.
     * @return string|int|\Vnetby\Schemaorg\DataTypes\DataInteger|null
     */
    function getMaximumAttendeeCapacity()
    {
        return $this->getProp('maximumAttendeeCapacity');
    }

    /**
     * An intended audience, i.e. a group for whom something was created.
     * @return \Vnetby\Schemaorg\Types\Thing\Intangible\Audience\Audience|null
     */
    function getAudience()
    {
        return $this->getProp('audience');
    }

    /**
     * Associates an [[Event]] with a [[Schedule]]. There are circumstances where it is preferable to share a schedule for a series of
     * repeating events rather than data on the individual events themselves. For example, a website or application might prefer to publish a
     * schedule for a weekly gym class rather than provide data on every event. A schedule could be processed by applications to
     * add forthcoming events to a calendar. An [[Event]] that is associated with a [[Schedule]] using this property should not have [[startDate]]
     * or [[endDate]] properties. These are instead defined within the associated [[Schedule]], this avoids any ambiguity for clients using the data. The
     * property might have repeated values to specify different schedules, e.g. for different months or seasons.
     * @return \Vnetby\Schemaorg\Types\Thing\Intangible\Schedule|null
     */
    function getEventSchedule()
    {
        return $this->getProp('eventSchedule');
    }

    /**
     * An Event that is part of this event. For example, a conference event includes many presentations, each of which is a
     * subEvent of the conference.
     * @return \Vnetby\Schemaorg\Types\Thing\Event\Event|null
     */
    function getSubEvent()
    {
        return $this->getProp('subEvent');
    }

    /**
     * An actor, e.g. in TV, radio, movie, video games etc., or in an event. Actors can be associated with individual items
     * or with a series, episode, clip.
     * @return \Vnetby\Schemaorg\Types\Thing\Person\Person|null
     */
    function getActor()
    {
        return $this->getProp('actor');
    }

    /**
     * The typical expected age range, e.g. '7-9', '11-'.
     * @return string|\Vnetby\Schemaorg\DataTypes\DataText|null
     */
    function getTypicalAgeRange()
    {
        return $this->getProp('typicalAgeRange');
    }

    /**
     * The overall rating, based on a collection of reviews or ratings, of the item.
     * @return \Vnetby\Schemaorg\Types\Thing\Intangible\Rating\AggregateRating\AggregateRating|null
     */
    function getAggregateRating()
    {
        return $this->getProp('aggregateRating');
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
     * The maximum physical attendee capacity of an [[Event]] whose [[eventAttendanceMode]] is [[OfflineEventAttendanceMode]] (or the offline aspects, in the case of a
     * [[MixedEventAttendanceMode]]). 
     * @return string|int|\Vnetby\Schemaorg\DataTypes\DataInteger|null
     */
    function getMaximumPhysicalAttendeeCapacity()
    {
        return $this->getProp('maximumPhysicalAttendeeCapacity');
    }

    /**
     * A person or organization that supports (sponsors) something through some kind of financial contribution.
     * @return \Vnetby\Schemaorg\Types\Thing\Person\Person|\Vnetby\Schemaorg\Types\Thing\Organization\Organization|null
     */
    function getFunder()
    {
        return $this->getProp('funder');
    }

    /**
     * The eventAttendanceMode of an event indicates whether it occurs online, offline, or a mix.
     * @return \Vnetby\Schemaorg\Types\Thing\Intangible\Enumeration\EventAttendanceModeEnumeration\EventAttendanceModeEnumeration|null
     */
    function getEventAttendanceMode()
    {
        return $this->getProp('eventAttendanceMode');
    }

    /**
     * The maximum virtual attendee capacity of an [[Event]] whose [[eventAttendanceMode]] is [[OnlineEventAttendanceMode]] (or the online aspects, in the case of a
     * [[MixedEventAttendanceMode]]). 
     * @return string|int|\Vnetby\Schemaorg\DataTypes\DataInteger|null
     */
    function getMaximumVirtualAttendeeCapacity()
    {
        return $this->getProp('maximumVirtualAttendeeCapacity');
    }

    /**
     * A person or organization attending the event.
     * @return \Vnetby\Schemaorg\Types\Thing\Organization\Organization|\Vnetby\Schemaorg\Types\Thing\Person\Person|null
     */
    function getAttendee()
    {
        return $this->getProp('attendee');
    }

    /**
     * The start date and time of the item (in [ISO 8601 date format](http://en.wikipedia.org/wiki/ISO_8601)).
     * @return string|\Vnetby\Schemaorg\DataTypes\DataDate|\Vnetby\Schemaorg\DataTypes\DataDateTime|null
     */
    function getStartDate()
    {
        return $this->getProp('startDate');
    }

    /**
     * Keywords or tags used to describe some item. Multiple textual entries in a keywords list are typically delimited by commas, or
     * by repeating the property.
     * @return string|\Vnetby\Schemaorg\DataTypes\DataURL|\Vnetby\Schemaorg\DataTypes\DataText|\Vnetby\Schemaorg\Types\Thing\Intangible\DefinedTerm\DefinedTerm|null
     */
    function getKeywords()
    {
        return $this->getProp('keywords');
    }

    /**
     * The location of, for example, where an event is happening, where an organization is located, or where an action takes place.
     * @return string|\Vnetby\Schemaorg\Types\Thing\Intangible\VirtualLocation|\Vnetby\Schemaorg\DataTypes\DataText|\Vnetby\Schemaorg\Types\Thing\Intangible\StructuredValue\ContactPoint\PostalAddress|\Vnetby\Schemaorg\Types\Thing\Place\Place|null
     */
    function getLocation()
    {
        return $this->getProp('location');
    }

    /**
     * A review of the item.
     * @return \Vnetby\Schemaorg\Types\Thing\CreativeWork\Review\Review|null
     */
    function getReview()
    {
        return $this->getProp('review');
    }

    /**
     * The person or organization who wrote a composition, or who is the composer of a work performed at some event.
     * @return \Vnetby\Schemaorg\Types\Thing\Organization\Organization|\Vnetby\Schemaorg\Types\Thing\Person\Person|null
     */
    function getComposer()
    {
        return $this->getProp('composer');
    }

    /**
     * Used in conjunction with eventStatus for rescheduled or cancelled events. This property contains the previously scheduled start date. For rescheduled events,
     * the startDate property should be used for the newly scheduled start date. In the (rare) case of an event that has
     * been postponed and rescheduled multiple times, this field may be repeated.
     * @return string|\Vnetby\Schemaorg\DataTypes\DataDate|null
     */
    function getPreviousStartDate()
    {
        return $this->getProp('previousStartDate');
    }

    /**
     * The CreativeWork that captured all or part of this Event.
     * @return \Vnetby\Schemaorg\Types\Thing\CreativeWork\CreativeWork|null
     */
    function getRecordedIn()
    {
        return $this->getProp('recordedIn');
    }

    /**
     * A performer at the event&#x2014;for example, a presenter, musician, musical group or actor.
     * @return \Vnetby\Schemaorg\Types\Thing\Organization\Organization|\Vnetby\Schemaorg\Types\Thing\Person\Person|null
     */
    function getPerformer()
    {
        return $this->getProp('performer');
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
     * Organization or person who adapts a creative work to different languages, regional differences and technical requirements of a target market, or
     * that translates during some event.
     * @return \Vnetby\Schemaorg\Types\Thing\Person\Person|\Vnetby\Schemaorg\Types\Thing\Organization\Organization|null
     */
    function getTranslator()
    {
        return $this->getProp('translator');
    }

    /**
     * A secondary contributor to the CreativeWork or Event.
     * @return \Vnetby\Schemaorg\Types\Thing\Person\Person|\Vnetby\Schemaorg\Types\Thing\Organization\Organization|null
     */
    function getContributor()
    {
        return $this->getProp('contributor');
    }

    /**
     * The number of attendee places for an event that remain unallocated.
     * @return string|int|\Vnetby\Schemaorg\DataTypes\DataInteger|null
     */
    function getRemainingAttendeeCapacity()
    {
        return $this->getProp('remainingAttendeeCapacity');
    }

    /**
     * A work featured in some event, e.g. exhibited in an ExhibitionEvent. Specific subproperties are available for workPerformed (e.g. a play), or
     * a workPresented (a Movie at a ScreeningEvent).
     * @return \Vnetby\Schemaorg\Types\Thing\CreativeWork\CreativeWork|null
     */
    function getWorkFeatured()
    {
        return $this->getProp('workFeatured');
    }

    /**
     * A work performed in some event, for example a play performed in a TheaterEvent.
     * @return \Vnetby\Schemaorg\Types\Thing\CreativeWork\CreativeWork|null
     */
    function getWorkPerformed()
    {
        return $this->getProp('workPerformed');
    }

    /**
     * An organizer of an Event.
     * @return \Vnetby\Schemaorg\Types\Thing\Organization\Organization|\Vnetby\Schemaorg\Types\Thing\Person\Person|null
     */
    function getOrganizer()
    {
        return $this->getProp('organizer');
    }

    /**
     * An eventStatus of an event represents its status; particularly useful when an event is cancelled or rescheduled.
     * @return \Vnetby\Schemaorg\Types\Thing\Intangible\Enumeration\StatusEnumeration\EventStatusType\EventStatusType|null
     */
    function getEventStatus()
    {
        return $this->getProp('eventStatus');
    }
}
