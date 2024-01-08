<?php

/**
 * @see https://schema.org/Trip
 * A trip or journey. An itinerary of visits to one or more places.
 */

namespace Vnetby\Schemaorg\Types\Thing\Intangible\Trip;

class Trip extends \Vnetby\Schemaorg\Types\Thing\Intangible\Intangible
{
    const TYPE = 'Trip';

    /**
     * The service provider, service operator, or service performer; the goods producer. Another party (a seller) may offer those services or goods
     * on behalf of the provider. A provider may also serve as the seller.
     * @var \Vnetby\Schemaorg\Types\Thing\Organization\Organization|\Vnetby\Schemaorg\Types\Thing\Person\Person
     */
    public $provider;

    /**
     * The expected arrival time.
     * @var string|\Vnetby\Schemaorg\DataTypes\DataDateTime|\Vnetby\Schemaorg\DataTypes\DataTime
     */
    public $arrivalTime;

    /**
     * Destination(s) ( [[Place]] ) that make up a trip. For a trip where destination order is important use [[ItemList]] to specify
     * that order (see examples).
     * @var \Vnetby\Schemaorg\Types\Thing\Intangible\ItemList\ItemList|\Vnetby\Schemaorg\Types\Thing\Place\Place
     */
    public $itinerary;

    /**
     * The location of origin of the trip, prior to any destination(s).
     * @var \Vnetby\Schemaorg\Types\Thing\Place\Place
     */
    public $tripOrigin;

    /**
     * An offer to provide this item&#x2014;for example, an offer to sell a product, rent the DVD of a movie, perform a
     * service, or give away tickets to an event. Use [[businessFunction]] to indicate the kind of transaction offered, i.e. sell, lease, etc.
     * This property can also be used to describe a [[Demand]]. While this property is listed as expected on a number of
     * common types, it can be used in others. In that case, using a second type, such as Product or a subtype
     * of Product, can clarify the nature of the offer. 
     * @var \Vnetby\Schemaorg\Types\Thing\Intangible\Offer\Offer|\Vnetby\Schemaorg\Types\Thing\Intangible\Demand
     */
    public $offers;

    /**
     * Identifies a [[Trip]] that is a subTrip of this Trip. For example Day 1, Day 2, etc. of a multi-day trip.
     * @var \Vnetby\Schemaorg\Types\Thing\Intangible\Trip\Trip
     */
    public $subTrip;

    /**
     * The expected departure time.
     * @var string|\Vnetby\Schemaorg\DataTypes\DataDateTime|\Vnetby\Schemaorg\DataTypes\DataTime
     */
    public $departureTime;

    /**
     * Identifies that this [[Trip]] is a subTrip of another Trip. For example Day 1, Day 2, etc. of a multi-day trip.
     * @var \Vnetby\Schemaorg\Types\Thing\Intangible\Trip\Trip
     */
    public $partOfTrip;

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
     * The expected arrival time.
     * @param string|\Vnetby\Schemaorg\DataTypes\DataDateTime|\Vnetby\Schemaorg\DataTypes\DataTime $value
     * @return static
     */
    function setArrivalTime($value)
    {
        return $this->setProp('arrivalTime', $value);
    }

    /**
     * Destination(s) ( [[Place]] ) that make up a trip. For a trip where destination order is important use [[ItemList]] to specify
     * that order (see examples).
     * @param \Vnetby\Schemaorg\Types\Thing\Intangible\ItemList\ItemList|\Vnetby\Schemaorg\Types\Thing\Place\Place $value
     * @return static
     */
    function setItinerary($value)
    {
        return $this->setProp('itinerary', $value);
    }

    /**
     * The location of origin of the trip, prior to any destination(s).
     * @param \Vnetby\Schemaorg\Types\Thing\Place\Place $value
     * @return static
     */
    function setTripOrigin($value)
    {
        return $this->setProp('tripOrigin', $value);
    }

    /**
     * An offer to provide this item&#x2014;for example, an offer to sell a product, rent the DVD of a movie, perform a
     * service, or give away tickets to an event. Use [[businessFunction]] to indicate the kind of transaction offered, i.e. sell, lease, etc.
     * This property can also be used to describe a [[Demand]]. While this property is listed as expected on a number of
     * common types, it can be used in others. In that case, using a second type, such as Product or a subtype
     * of Product, can clarify the nature of the offer. 
     * @param \Vnetby\Schemaorg\Types\Thing\Intangible\Offer\Offer|\Vnetby\Schemaorg\Types\Thing\Intangible\Demand $value
     * @return static
     */
    function setOffers($value)
    {
        return $this->setProp('offers', $value);
    }

    /**
     * Identifies a [[Trip]] that is a subTrip of this Trip. For example Day 1, Day 2, etc. of a multi-day trip.
     * @param \Vnetby\Schemaorg\Types\Thing\Intangible\Trip\Trip $value
     * @return static
     */
    function setSubTrip($value)
    {
        return $this->setProp('subTrip', $value);
    }

    /**
     * The expected departure time.
     * @param string|\Vnetby\Schemaorg\DataTypes\DataDateTime|\Vnetby\Schemaorg\DataTypes\DataTime $value
     * @return static
     */
    function setDepartureTime($value)
    {
        return $this->setProp('departureTime', $value);
    }

    /**
     * Identifies that this [[Trip]] is a subTrip of another Trip. For example Day 1, Day 2, etc. of a multi-day trip.
     * @param \Vnetby\Schemaorg\Types\Thing\Intangible\Trip\Trip $value
     * @return static
     */
    function setPartOfTrip($value)
    {
        return $this->setProp('partOfTrip', $value);
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
     * The expected arrival time.
     * @return string|\Vnetby\Schemaorg\DataTypes\DataDateTime|\Vnetby\Schemaorg\DataTypes\DataTime|null
     */
    function getArrivalTime()
    {
        return $this->getProp('arrivalTime');
    }

    /**
     * Destination(s) ( [[Place]] ) that make up a trip. For a trip where destination order is important use [[ItemList]] to specify
     * that order (see examples).
     * @return \Vnetby\Schemaorg\Types\Thing\Intangible\ItemList\ItemList|\Vnetby\Schemaorg\Types\Thing\Place\Place|null
     */
    function getItinerary()
    {
        return $this->getProp('itinerary');
    }

    /**
     * The location of origin of the trip, prior to any destination(s).
     * @return \Vnetby\Schemaorg\Types\Thing\Place\Place|null
     */
    function getTripOrigin()
    {
        return $this->getProp('tripOrigin');
    }

    /**
     * An offer to provide this item&#x2014;for example, an offer to sell a product, rent the DVD of a movie, perform a
     * service, or give away tickets to an event. Use [[businessFunction]] to indicate the kind of transaction offered, i.e. sell, lease, etc.
     * This property can also be used to describe a [[Demand]]. While this property is listed as expected on a number of
     * common types, it can be used in others. In that case, using a second type, such as Product or a subtype
     * of Product, can clarify the nature of the offer. 
     * @return \Vnetby\Schemaorg\Types\Thing\Intangible\Offer\Offer|\Vnetby\Schemaorg\Types\Thing\Intangible\Demand|null
     */
    function getOffers()
    {
        return $this->getProp('offers');
    }

    /**
     * Identifies a [[Trip]] that is a subTrip of this Trip. For example Day 1, Day 2, etc. of a multi-day trip.
     * @return \Vnetby\Schemaorg\Types\Thing\Intangible\Trip\Trip|null
     */
    function getSubTrip()
    {
        return $this->getProp('subTrip');
    }

    /**
     * The expected departure time.
     * @return string|\Vnetby\Schemaorg\DataTypes\DataDateTime|\Vnetby\Schemaorg\DataTypes\DataTime|null
     */
    function getDepartureTime()
    {
        return $this->getProp('departureTime');
    }

    /**
     * Identifies that this [[Trip]] is a subTrip of another Trip. For example Day 1, Day 2, etc. of a multi-day trip.
     * @return \Vnetby\Schemaorg\Types\Thing\Intangible\Trip\Trip|null
     */
    function getPartOfTrip()
    {
        return $this->getProp('partOfTrip');
    }
}
