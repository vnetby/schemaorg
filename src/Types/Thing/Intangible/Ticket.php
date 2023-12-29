<?php

/**
 * @see https://schema.org/Ticket
 * Used to describe a ticket to an event, a flight, a bus ride, etc.
 */

namespace Vnetby\Schemaorg\Types\Thing\Intangible;

class Ticket extends \Vnetby\Schemaorg\Types\Thing\Intangible\Intangible
{
    const TYPE = 'Ticket';

    /**
     * The currency of the price, or a price component when attached to [[PriceSpecification]] and its subtypes.\n\nUse standard formats: [ISO 4217 currency
     * format](http://en.wikipedia.org/wiki/ISO_4217), e.g. "USD"; [Ticker symbol](https://en.wikipedia.org/wiki/List_of_cryptocurrencies) for cryptocurrencies, e.g. "BTC"; well known names for [Local Exchange Trading Systems](https://en.wikipedia.org/wiki/Local_exchange_trading_system) (LETS) and other currency
     * types, e.g. "Ithaca HOUR".
     * @var string|\Vnetby\Schemaorg\DataTypes\DataText
     */
    public $priceCurrency;

    /**
     * Reference to an asset (e.g., Barcode, QR code image or PDF) usable for entrance.
     * @var string|\Vnetby\Schemaorg\DataTypes\DataText|\Vnetby\Schemaorg\DataTypes\DataURL
     */
    public $ticketToken;

    /**
     * The organization issuing the ticket or permit.
     * @var \Vnetby\Schemaorg\Types\Thing\Organization\Organization
     */
    public $issuedBy;

    /**
     * The person or organization the reservation or ticket is for.
     * @var \Vnetby\Schemaorg\Types\Thing\Person\Person|\Vnetby\Schemaorg\Types\Thing\Organization\Organization
     */
    public $underName;

    /**
     * The seat associated with the ticket.
     * @var \Vnetby\Schemaorg\Types\Thing\Intangible\Seat
     */
    public $ticketedSeat;

    /**
     * The unique identifier for the ticket.
     * @var string|\Vnetby\Schemaorg\DataTypes\DataText
     */
    public $ticketNumber;

    /**
     * The date the ticket was issued.
     * @var string|\Vnetby\Schemaorg\DataTypes\DataDateTime|\Vnetby\Schemaorg\DataTypes\DataDate
     */
    public $dateIssued;

    /**
     * The total price for the reservation or ticket, including applicable taxes, shipping, etc.\n\nUsage guidelines:\n\n* Use values from 0123456789 (Unicode 'DIGIT ZERO'
     * (U+0030) to 'DIGIT NINE' (U+0039)) rather than superficially similar Unicode symbols.\n* Use '.' (Unicode 'FULL STOP' (U+002E)) rather than ',' to
     * indicate a decimal point. Avoid using these symbols as a readability separator.
     * @var string|int|float|\Vnetby\Schemaorg\Types\Thing\Intangible\StructuredValue\PriceSpecification\PriceSpecification|\Vnetby\Schemaorg\DataTypes\DataNumber|\Vnetby\Schemaorg\DataTypes\DataText
     */
    public $totalPrice;

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
     * Reference to an asset (e.g., Barcode, QR code image or PDF) usable for entrance.
     * @param string|\Vnetby\Schemaorg\DataTypes\DataText|\Vnetby\Schemaorg\DataTypes\DataURL $value
     * @return static
     */
    function setTicketToken($value)
    {
        return $this->setProp('ticketToken', $value);
    }

    /**
     * The organization issuing the ticket or permit.
     * @param \Vnetby\Schemaorg\Types\Thing\Organization\Organization $value
     * @return static
     */
    function setIssuedBy($value)
    {
        return $this->setProp('issuedBy', $value);
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
     * The seat associated with the ticket.
     * @param \Vnetby\Schemaorg\Types\Thing\Intangible\Seat $value
     * @return static
     */
    function setTicketedSeat($value)
    {
        return $this->setProp('ticketedSeat', $value);
    }

    /**
     * The unique identifier for the ticket.
     * @param string|\Vnetby\Schemaorg\DataTypes\DataText $value
     * @return static
     */
    function setTicketNumber($value)
    {
        return $this->setProp('ticketNumber', $value);
    }

    /**
     * The date the ticket was issued.
     * @param string|\Vnetby\Schemaorg\DataTypes\DataDateTime|\Vnetby\Schemaorg\DataTypes\DataDate $value
     * @return static
     */
    function setDateIssued($value)
    {
        return $this->setProp('dateIssued', $value);
    }

    /**
     * The total price for the reservation or ticket, including applicable taxes, shipping, etc.\n\nUsage guidelines:\n\n* Use values from 0123456789 (Unicode 'DIGIT ZERO'
     * (U+0030) to 'DIGIT NINE' (U+0039)) rather than superficially similar Unicode symbols.\n* Use '.' (Unicode 'FULL STOP' (U+002E)) rather than ',' to
     * indicate a decimal point. Avoid using these symbols as a readability separator.
     * @param string|int|float|\Vnetby\Schemaorg\Types\Thing\Intangible\StructuredValue\PriceSpecification\PriceSpecification|\Vnetby\Schemaorg\DataTypes\DataNumber|\Vnetby\Schemaorg\DataTypes\DataText $value
     * @return static
     */
    function setTotalPrice($value)
    {
        return $this->setProp('totalPrice', $value);
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
     * Reference to an asset (e.g., Barcode, QR code image or PDF) usable for entrance.
     * @return string|\Vnetby\Schemaorg\DataTypes\DataText|\Vnetby\Schemaorg\DataTypes\DataURL|null
     */
    function getTicketToken()
    {
        return $this->getProp('ticketToken');
    }

    /**
     * The organization issuing the ticket or permit.
     * @return \Vnetby\Schemaorg\Types\Thing\Organization\Organization|null
     */
    function getIssuedBy()
    {
        return $this->getProp('issuedBy');
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
     * The seat associated with the ticket.
     * @return \Vnetby\Schemaorg\Types\Thing\Intangible\Seat|null
     */
    function getTicketedSeat()
    {
        return $this->getProp('ticketedSeat');
    }

    /**
     * The unique identifier for the ticket.
     * @return string|\Vnetby\Schemaorg\DataTypes\DataText|null
     */
    function getTicketNumber()
    {
        return $this->getProp('ticketNumber');
    }

    /**
     * The date the ticket was issued.
     * @return string|\Vnetby\Schemaorg\DataTypes\DataDateTime|\Vnetby\Schemaorg\DataTypes\DataDate|null
     */
    function getDateIssued()
    {
        return $this->getProp('dateIssued');
    }

    /**
     * The total price for the reservation or ticket, including applicable taxes, shipping, etc.\n\nUsage guidelines:\n\n* Use values from 0123456789 (Unicode 'DIGIT ZERO'
     * (U+0030) to 'DIGIT NINE' (U+0039)) rather than superficially similar Unicode symbols.\n* Use '.' (Unicode 'FULL STOP' (U+002E)) rather than ',' to
     * indicate a decimal point. Avoid using these symbols as a readability separator.
     * @return string|int|float|\Vnetby\Schemaorg\Types\Thing\Intangible\StructuredValue\PriceSpecification\PriceSpecification|\Vnetby\Schemaorg\DataTypes\DataNumber|\Vnetby\Schemaorg\DataTypes\DataText|null
     */
    function getTotalPrice()
    {
        return $this->getProp('totalPrice');
    }
}
