<?php

/**
 * @see https://schema.org/AggregateOffer
 * When a single product is associated with multiple offers (for example, the same pair of shoes is offered by different merchants),
 * then AggregateOffer can be used.\n\nNote: AggregateOffers are normally expected to associate multiple offers that all share the same defined [[businessFunction]] value,
 * or default to http://purl.org/goodrelations/v1#Sell if businessFunction is not explicitly defined.
 */

namespace Vnetby\Schemaorg\Types\Thing\Intangible\Offer;

class AggregateOffer extends \Vnetby\Schemaorg\Types\Thing\Intangible\Offer\Offer
{
    const TYPE = 'AggregateOffer';

    /**
     * The number of offers for the product.
     * @var string|int|\Vnetby\Schemaorg\DataTypes\DataInteger
     */
    public $offerCount;

    /**
     * The lowest price of all offers available.\n\nUsage guidelines:\n\n* Use values from 0123456789 (Unicode 'DIGIT ZERO' (U+0030) to 'DIGIT NINE' (U+0039)) rather
     * than superficially similar Unicode symbols.\n* Use '.' (Unicode 'FULL STOP' (U+002E)) rather than ',' to indicate a decimal point. Avoid using
     * these symbols as a readability separator.
     * @var string|int|float|\Vnetby\Schemaorg\DataTypes\DataText|\Vnetby\Schemaorg\DataTypes\DataNumber
     */
    public $lowPrice;

    /**
     * The highest price of all offers available.\n\nUsage guidelines:\n\n* Use values from 0123456789 (Unicode 'DIGIT ZERO' (U+0030) to 'DIGIT NINE' (U+0039)) rather
     * than superficially similar Unicode symbols.\n* Use '.' (Unicode 'FULL STOP' (U+002E)) rather than ',' to indicate a decimal point. Avoid using
     * these symbols as a readability separator.
     * @var string|int|float|\Vnetby\Schemaorg\DataTypes\DataNumber|\Vnetby\Schemaorg\DataTypes\DataText
     */
    public $highPrice;

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
     * The number of offers for the product.
     * @param string|int|\Vnetby\Schemaorg\DataTypes\DataInteger $value
     * @return static
     */
    function setOfferCount($value)
    {
        return $this->setProp('offerCount', $value);
    }

    /**
     * The lowest price of all offers available.\n\nUsage guidelines:\n\n* Use values from 0123456789 (Unicode 'DIGIT ZERO' (U+0030) to 'DIGIT NINE' (U+0039)) rather
     * than superficially similar Unicode symbols.\n* Use '.' (Unicode 'FULL STOP' (U+002E)) rather than ',' to indicate a decimal point. Avoid using
     * these symbols as a readability separator.
     * @param string|int|float|\Vnetby\Schemaorg\DataTypes\DataText|\Vnetby\Schemaorg\DataTypes\DataNumber $value
     * @return static
     */
    function setLowPrice($value)
    {
        return $this->setProp('lowPrice', $value);
    }

    /**
     * The highest price of all offers available.\n\nUsage guidelines:\n\n* Use values from 0123456789 (Unicode 'DIGIT ZERO' (U+0030) to 'DIGIT NINE' (U+0039)) rather
     * than superficially similar Unicode symbols.\n* Use '.' (Unicode 'FULL STOP' (U+002E)) rather than ',' to indicate a decimal point. Avoid using
     * these symbols as a readability separator.
     * @param string|int|float|\Vnetby\Schemaorg\DataTypes\DataNumber|\Vnetby\Schemaorg\DataTypes\DataText $value
     * @return static
     */
    function setHighPrice($value)
    {
        return $this->setProp('highPrice', $value);
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
     * The number of offers for the product.
     * @return string|int|\Vnetby\Schemaorg\DataTypes\DataInteger|null
     */
    function getOfferCount()
    {
        return $this->getProp('offerCount');
    }

    /**
     * The lowest price of all offers available.\n\nUsage guidelines:\n\n* Use values from 0123456789 (Unicode 'DIGIT ZERO' (U+0030) to 'DIGIT NINE' (U+0039)) rather
     * than superficially similar Unicode symbols.\n* Use '.' (Unicode 'FULL STOP' (U+002E)) rather than ',' to indicate a decimal point. Avoid using
     * these symbols as a readability separator.
     * @return string|int|float|\Vnetby\Schemaorg\DataTypes\DataText|\Vnetby\Schemaorg\DataTypes\DataNumber|null
     */
    function getLowPrice()
    {
        return $this->getProp('lowPrice');
    }

    /**
     * The highest price of all offers available.\n\nUsage guidelines:\n\n* Use values from 0123456789 (Unicode 'DIGIT ZERO' (U+0030) to 'DIGIT NINE' (U+0039)) rather
     * than superficially similar Unicode symbols.\n* Use '.' (Unicode 'FULL STOP' (U+002E)) rather than ',' to indicate a decimal point. Avoid using
     * these symbols as a readability separator.
     * @return string|int|float|\Vnetby\Schemaorg\DataTypes\DataNumber|\Vnetby\Schemaorg\DataTypes\DataText|null
     */
    function getHighPrice()
    {
        return $this->getProp('highPrice');
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
}
