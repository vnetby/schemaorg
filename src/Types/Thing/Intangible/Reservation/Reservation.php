<?php

/**
 * @see https://schema.org/Reservation
 * Describes a reservation for travel, dining or an event. Some reservations require tickets. \n\nNote: This type is for information about actual
 * reservations, e.g. in confirmation emails or HTML pages with individual confirmations of reservations. For offers of tickets, restaurant reservations, flights, or
 * rental cars, use [[Offer]].
 */

namespace Vnetby\Schemaorg\Types\Thing\Intangible\Reservation;

class Reservation extends \Vnetby\Schemaorg\Types\Thing\Intangible\Intangible
{
    const TYPE = 'Reservation';

    /**
     * The thing -- flight, event, restaurant, etc. being reserved.
     * @var \Vnetby\Schemaorg\Types\Thing\Thing
     */
    public $reservationFor;

    /**
     * Any membership in a frequent flyer, hotel loyalty program, etc. being applied to the reservation.
     * @var \Vnetby\Schemaorg\Types\Thing\Intangible\ProgramMembership
     */
    public $programMembershipUsed;

    /**
     * The service provider, service operator, or service performer; the goods producer. Another party (a seller) may offer those services or goods
     * on behalf of the provider. A provider may also serve as the seller.
     * @var \Vnetby\Schemaorg\Types\Thing\Organization\Organization|\Vnetby\Schemaorg\Types\Thing\Person\Person
     */
    public $provider;

    /**
     * The date and time the reservation was booked.
     * @var string|\Vnetby\Schemaorg\DataTypes\DataDateTime
     */
    public $bookingTime;

    /**
     * The date and time the reservation was modified.
     * @var string|\Vnetby\Schemaorg\DataTypes\DataDateTime
     */
    public $modifiedTime;

    /**
     * A unique identifier for the reservation.
     * @var string|\Vnetby\Schemaorg\DataTypes\DataText
     */
    public $reservationId;

    /**
     * The person or organization the reservation or ticket is for.
     * @var \Vnetby\Schemaorg\Types\Thing\Person\Person|\Vnetby\Schemaorg\Types\Thing\Organization\Organization
     */
    public $underName;

    /**
     * The currency of the price, or a price component when attached to [[PriceSpecification]] and its subtypes.\n\nUse standard formats: [ISO 4217 currency
     * format](http://en.wikipedia.org/wiki/ISO_4217), e.g. "USD"; [Ticker symbol](https://en.wikipedia.org/wiki/List_of_cryptocurrencies) for cryptocurrencies, e.g. "BTC"; well known names for [Local Exchange Trading Systems](https://en.wikipedia.org/wiki/Local_exchange_trading_system) (LETS) and other currency
     * types, e.g. "Ithaca HOUR".
     * @var string|\Vnetby\Schemaorg\DataTypes\DataText
     */
    public $priceCurrency;

    /**
     * A ticket associated with the reservation.
     * @var \Vnetby\Schemaorg\Types\Thing\Intangible\Ticket
     */
    public $reservedTicket;

    /**
     * The current status of the reservation.
     * @var \Vnetby\Schemaorg\Types\Thing\Intangible\Enumeration\StatusEnumeration\ReservationStatusType\ReservationStatusType
     */
    public $reservationStatus;

    /**
     * An entity that arranges for an exchange between a buyer and a seller. In most cases a broker never acquires or
     * releases ownership of a product or service involved in an exchange. If it is not clear whether an entity is a
     * broker, seller, or buyer, the latter two terms are preferred.
     * @var \Vnetby\Schemaorg\Types\Thing\Person\Person|\Vnetby\Schemaorg\Types\Thing\Organization\Organization
     */
    public $broker;

    /**
     * The total price for the reservation or ticket, including applicable taxes, shipping, etc.\n\nUsage guidelines:\n\n* Use values from 0123456789 (Unicode 'DIGIT ZERO'
     * (U+0030) to 'DIGIT NINE' (U+0039)) rather than superficially similar Unicode symbols.\n* Use '.' (Unicode 'FULL STOP' (U+002E)) rather than ',' to
     * indicate a decimal point. Avoid using these symbols as a readability separator.
     * @var string|int|float|\Vnetby\Schemaorg\Types\Thing\Intangible\StructuredValue\PriceSpecification\PriceSpecification|\Vnetby\Schemaorg\DataTypes\DataText|\Vnetby\Schemaorg\DataTypes\DataNumber
     */
    public $totalPrice;

    /**
     * The thing -- flight, event, restaurant, etc. being reserved.
     * @param \Vnetby\Schemaorg\Types\Thing\Thing $value
     * @return static
     */
    function setReservationFor($value)
    {
        return $this->setProp('reservationFor', $value);
    }

    /**
     * Any membership in a frequent flyer, hotel loyalty program, etc. being applied to the reservation.
     * @param \Vnetby\Schemaorg\Types\Thing\Intangible\ProgramMembership $value
     * @return static
     */
    function setProgramMembershipUsed($value)
    {
        return $this->setProp('programMembershipUsed', $value);
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
     * The date and time the reservation was booked.
     * @param string|\Vnetby\Schemaorg\DataTypes\DataDateTime $value
     * @return static
     */
    function setBookingTime($value)
    {
        return $this->setProp('bookingTime', $value);
    }

    /**
     * The date and time the reservation was modified.
     * @param string|\Vnetby\Schemaorg\DataTypes\DataDateTime $value
     * @return static
     */
    function setModifiedTime($value)
    {
        return $this->setProp('modifiedTime', $value);
    }

    /**
     * A unique identifier for the reservation.
     * @param string|\Vnetby\Schemaorg\DataTypes\DataText $value
     * @return static
     */
    function setReservationId($value)
    {
        return $this->setProp('reservationId', $value);
    }

    /**
     * The person or organization the reservation or ticket is for.
     * @param \Vnetby\Schemaorg\Types\Thing\Person\Person|\Vnetby\Schemaorg\Types\Thing\Organization\Organization $value
     * @return static
     */
    function setUnderName($value)
    {
        return $this->setProp('underName', $value);
    }

    /**
     * The currency of the price, or a price component when attached to [[PriceSpecification]] and its subtypes.\n\nUse standard formats: [ISO 4217 currency
     * format](http://en.wikipedia.org/wiki/ISO_4217), e.g. "USD"; [Ticker symbol](https://en.wikipedia.org/wiki/List_of_cryptocurrencies) for cryptocurrencies, e.g. "BTC"; well known names for [Local Exchange Trading Systems](https://en.wikipedia.org/wiki/Local_exchange_trading_system) (LETS) and other currency
     * types, e.g. "Ithaca HOUR".
     * @param string|\Vnetby\Schemaorg\DataTypes\DataText $value
     * @return static
     */
    function setPriceCurrency($value)
    {
        return $this->setProp('priceCurrency', $value);
    }

    /**
     * A ticket associated with the reservation.
     * @param \Vnetby\Schemaorg\Types\Thing\Intangible\Ticket $value
     * @return static
     */
    function setReservedTicket($value)
    {
        return $this->setProp('reservedTicket', $value);
    }

    /**
     * The current status of the reservation.
     * @param \Vnetby\Schemaorg\Types\Thing\Intangible\Enumeration\StatusEnumeration\ReservationStatusType\ReservationStatusType $value
     * @return static
     */
    function setReservationStatus($value)
    {
        return $this->setProp('reservationStatus', $value);
    }

    /**
     * An entity that arranges for an exchange between a buyer and a seller. In most cases a broker never acquires or
     * releases ownership of a product or service involved in an exchange. If it is not clear whether an entity is a
     * broker, seller, or buyer, the latter two terms are preferred.
     * @param \Vnetby\Schemaorg\Types\Thing\Person\Person|\Vnetby\Schemaorg\Types\Thing\Organization\Organization $value
     * @return static
     */
    function setBroker($value)
    {
        return $this->setProp('broker', $value);
    }

    /**
     * The total price for the reservation or ticket, including applicable taxes, shipping, etc.\n\nUsage guidelines:\n\n* Use values from 0123456789 (Unicode 'DIGIT ZERO'
     * (U+0030) to 'DIGIT NINE' (U+0039)) rather than superficially similar Unicode symbols.\n* Use '.' (Unicode 'FULL STOP' (U+002E)) rather than ',' to
     * indicate a decimal point. Avoid using these symbols as a readability separator.
     * @param string|int|float|\Vnetby\Schemaorg\Types\Thing\Intangible\StructuredValue\PriceSpecification\PriceSpecification|\Vnetby\Schemaorg\DataTypes\DataText|\Vnetby\Schemaorg\DataTypes\DataNumber $value
     * @return static
     */
    function setTotalPrice($value)
    {
        return $this->setProp('totalPrice', $value);
    }

    /**
     * The thing -- flight, event, restaurant, etc. being reserved.
     * @return \Vnetby\Schemaorg\Types\Thing\Thing|null
     */
    function getReservationFor()
    {
        return $this->getProp('reservationFor');
    }

    /**
     * Any membership in a frequent flyer, hotel loyalty program, etc. being applied to the reservation.
     * @return \Vnetby\Schemaorg\Types\Thing\Intangible\ProgramMembership|null
     */
    function getProgramMembershipUsed()
    {
        return $this->getProp('programMembershipUsed');
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
     * The date and time the reservation was booked.
     * @return string|\Vnetby\Schemaorg\DataTypes\DataDateTime|null
     */
    function getBookingTime()
    {
        return $this->getProp('bookingTime');
    }

    /**
     * The date and time the reservation was modified.
     * @return string|\Vnetby\Schemaorg\DataTypes\DataDateTime|null
     */
    function getModifiedTime()
    {
        return $this->getProp('modifiedTime');
    }

    /**
     * A unique identifier for the reservation.
     * @return string|\Vnetby\Schemaorg\DataTypes\DataText|null
     */
    function getReservationId()
    {
        return $this->getProp('reservationId');
    }

    /**
     * The person or organization the reservation or ticket is for.
     * @return \Vnetby\Schemaorg\Types\Thing\Person\Person|\Vnetby\Schemaorg\Types\Thing\Organization\Organization|null
     */
    function getUnderName()
    {
        return $this->getProp('underName');
    }

    /**
     * The currency of the price, or a price component when attached to [[PriceSpecification]] and its subtypes.\n\nUse standard formats: [ISO 4217 currency
     * format](http://en.wikipedia.org/wiki/ISO_4217), e.g. "USD"; [Ticker symbol](https://en.wikipedia.org/wiki/List_of_cryptocurrencies) for cryptocurrencies, e.g. "BTC"; well known names for [Local Exchange Trading Systems](https://en.wikipedia.org/wiki/Local_exchange_trading_system) (LETS) and other currency
     * types, e.g. "Ithaca HOUR".
     * @return string|\Vnetby\Schemaorg\DataTypes\DataText|null
     */
    function getPriceCurrency()
    {
        return $this->getProp('priceCurrency');
    }

    /**
     * A ticket associated with the reservation.
     * @return \Vnetby\Schemaorg\Types\Thing\Intangible\Ticket|null
     */
    function getReservedTicket()
    {
        return $this->getProp('reservedTicket');
    }

    /**
     * The current status of the reservation.
     * @return \Vnetby\Schemaorg\Types\Thing\Intangible\Enumeration\StatusEnumeration\ReservationStatusType\ReservationStatusType|null
     */
    function getReservationStatus()
    {
        return $this->getProp('reservationStatus');
    }

    /**
     * An entity that arranges for an exchange between a buyer and a seller. In most cases a broker never acquires or
     * releases ownership of a product or service involved in an exchange. If it is not clear whether an entity is a
     * broker, seller, or buyer, the latter two terms are preferred.
     * @return \Vnetby\Schemaorg\Types\Thing\Person\Person|\Vnetby\Schemaorg\Types\Thing\Organization\Organization|null
     */
    function getBroker()
    {
        return $this->getProp('broker');
    }

    /**
     * The total price for the reservation or ticket, including applicable taxes, shipping, etc.\n\nUsage guidelines:\n\n* Use values from 0123456789 (Unicode 'DIGIT ZERO'
     * (U+0030) to 'DIGIT NINE' (U+0039)) rather than superficially similar Unicode symbols.\n* Use '.' (Unicode 'FULL STOP' (U+002E)) rather than ',' to
     * indicate a decimal point. Avoid using these symbols as a readability separator.
     * @return string|int|float|\Vnetby\Schemaorg\Types\Thing\Intangible\StructuredValue\PriceSpecification\PriceSpecification|\Vnetby\Schemaorg\DataTypes\DataText|\Vnetby\Schemaorg\DataTypes\DataNumber|null
     */
    function getTotalPrice()
    {
        return $this->getProp('totalPrice');
    }
}
