<?php

/**
 * @see https://schema.org/ActionAccessSpecification
 * A set of requirements that must be fulfilled in order to perform an Action.
 */

namespace Vnetby\Schemaorg\Types\Thing\Intangible;

class ActionAccessSpecification extends \Vnetby\Schemaorg\Types\Thing\Intangible\Intangible
{
    const TYPE = 'ActionAccessSpecification';

    /**
     * The ISO 3166-1 (ISO 3166-1 alpha-2) or ISO 3166-2 code, the place, or the GeoShape for the geo-political region(s) for which
     * the offer or delivery charge specification is valid.\n\nSee also [[ineligibleRegion]]. 
     * @var string|\Vnetby\Schemaorg\Types\Thing\Place\Place|\Vnetby\Schemaorg\DataTypes\DataText|\Vnetby\Schemaorg\Types\Thing\Intangible\StructuredValue\GeoShape\GeoShape
     */
    public $eligibleRegion;

    /**
     * The end of the availability of the product or service included in the offer.
     * @var string|\Vnetby\Schemaorg\DataTypes\DataTime|\Vnetby\Schemaorg\DataTypes\DataDate|\Vnetby\Schemaorg\DataTypes\DataDateTime
     */
    public $availabilityEnds;

    /**
     * A category for the item. Greater signs or slashes can be used to informally indicate a category hierarchy.
     * @var string|\Vnetby\Schemaorg\DataTypes\DataText|\Vnetby\Schemaorg\Types\Thing\Intangible\Enumeration\PhysicalActivityCategory\PhysicalActivityCategory|\Vnetby\Schemaorg\DataTypes\DataURL|\Vnetby\Schemaorg\Types\Thing\Intangible\DefinedTerm\CategoryCode\CategoryCode|\Vnetby\Schemaorg\Types\Thing\Thing
     */
    public $category;

    /**
     * The beginning of the availability of the product or service included in the offer.
     * @var string|\Vnetby\Schemaorg\DataTypes\DataDateTime|\Vnetby\Schemaorg\DataTypes\DataTime|\Vnetby\Schemaorg\DataTypes\DataDate
     */
    public $availabilityStarts;

    /**
     * Indicates if use of the media require a subscription (either paid or free). Allowed values are ```true``` or ```false``` (note that
     * an earlier version had 'yes', 'no').
     * @var bool|\Vnetby\Schemaorg\DataTypes\DataBoolean|\Vnetby\Schemaorg\Types\Thing\Intangible\MediaSubscription
     */
    public $requiresSubscription;

    /**
     * The ISO 3166-1 (ISO 3166-1 alpha-2) or ISO 3166-2 code, the place, or the GeoShape for the geo-political region(s) for which
     * the offer or delivery charge specification is not valid, e.g. a region where the transaction is not allowed.\n\nSee also [[eligibleRegion]]. 
     * @var string|\Vnetby\Schemaorg\Types\Thing\Intangible\StructuredValue\GeoShape\GeoShape|\Vnetby\Schemaorg\Types\Thing\Place\Place|\Vnetby\Schemaorg\DataTypes\DataText
     */
    public $ineligibleRegion;

    /**
     * An Offer which must be accepted before the user can perform the Action. For example, the user may need to buy
     * a movie before being able to watch it.
     * @var \Vnetby\Schemaorg\Types\Thing\Intangible\Offer\Offer
     */
    public $expectsAcceptanceOf;

    /**
     * The ISO 3166-1 (ISO 3166-1 alpha-2) or ISO 3166-2 code, the place, or the GeoShape for the geo-political region(s) for which
     * the offer or delivery charge specification is valid.\n\nSee also [[ineligibleRegion]]. 
     * @param string|\Vnetby\Schemaorg\Types\Thing\Place\Place|\Vnetby\Schemaorg\DataTypes\DataText|\Vnetby\Schemaorg\Types\Thing\Intangible\StructuredValue\GeoShape\GeoShape $value
     * @return static
     */
    function setEligibleRegion($value)
    {
        return $this->setProp('eligibleRegion', $value);
    }

    /**
     * The end of the availability of the product or service included in the offer.
     * @param string|\Vnetby\Schemaorg\DataTypes\DataTime|\Vnetby\Schemaorg\DataTypes\DataDate|\Vnetby\Schemaorg\DataTypes\DataDateTime $value
     * @return static
     */
    function setAvailabilityEnds($value)
    {
        return $this->setProp('availabilityEnds', $value);
    }

    /**
     * A category for the item. Greater signs or slashes can be used to informally indicate a category hierarchy.
     * @param string|\Vnetby\Schemaorg\DataTypes\DataText|\Vnetby\Schemaorg\Types\Thing\Intangible\Enumeration\PhysicalActivityCategory\PhysicalActivityCategory|\Vnetby\Schemaorg\DataTypes\DataURL|\Vnetby\Schemaorg\Types\Thing\Intangible\DefinedTerm\CategoryCode\CategoryCode|\Vnetby\Schemaorg\Types\Thing\Thing $value
     * @return static
     */
    function setCategory($value)
    {
        return $this->setProp('category', $value);
    }

    /**
     * The beginning of the availability of the product or service included in the offer.
     * @param string|\Vnetby\Schemaorg\DataTypes\DataDateTime|\Vnetby\Schemaorg\DataTypes\DataTime|\Vnetby\Schemaorg\DataTypes\DataDate $value
     * @return static
     */
    function setAvailabilityStarts($value)
    {
        return $this->setProp('availabilityStarts', $value);
    }

    /**
     * Indicates if use of the media require a subscription (either paid or free). Allowed values are ```true``` or ```false``` (note that
     * an earlier version had 'yes', 'no').
     * @param bool|\Vnetby\Schemaorg\DataTypes\DataBoolean|\Vnetby\Schemaorg\Types\Thing\Intangible\MediaSubscription $value
     * @return static
     */
    function setRequiresSubscription($value)
    {
        return $this->setProp('requiresSubscription', $value);
    }

    /**
     * The ISO 3166-1 (ISO 3166-1 alpha-2) or ISO 3166-2 code, the place, or the GeoShape for the geo-political region(s) for which
     * the offer or delivery charge specification is not valid, e.g. a region where the transaction is not allowed.\n\nSee also [[eligibleRegion]]. 
     * @param string|\Vnetby\Schemaorg\Types\Thing\Intangible\StructuredValue\GeoShape\GeoShape|\Vnetby\Schemaorg\Types\Thing\Place\Place|\Vnetby\Schemaorg\DataTypes\DataText $value
     * @return static
     */
    function setIneligibleRegion($value)
    {
        return $this->setProp('ineligibleRegion', $value);
    }

    /**
     * An Offer which must be accepted before the user can perform the Action. For example, the user may need to buy
     * a movie before being able to watch it.
     * @param \Vnetby\Schemaorg\Types\Thing\Intangible\Offer\Offer $value
     * @return static
     */
    function setExpectsAcceptanceOf($value)
    {
        return $this->setProp('expectsAcceptanceOf', $value);
    }

    /**
     * The ISO 3166-1 (ISO 3166-1 alpha-2) or ISO 3166-2 code, the place, or the GeoShape for the geo-political region(s) for which
     * the offer or delivery charge specification is valid.\n\nSee also [[ineligibleRegion]]. 
     * @return string|\Vnetby\Schemaorg\Types\Thing\Place\Place|\Vnetby\Schemaorg\DataTypes\DataText|\Vnetby\Schemaorg\Types\Thing\Intangible\StructuredValue\GeoShape\GeoShape|null
     */
    function getEligibleRegion()
    {
        return $this->getProp('eligibleRegion');
    }

    /**
     * The end of the availability of the product or service included in the offer.
     * @return string|\Vnetby\Schemaorg\DataTypes\DataTime|\Vnetby\Schemaorg\DataTypes\DataDate|\Vnetby\Schemaorg\DataTypes\DataDateTime|null
     */
    function getAvailabilityEnds()
    {
        return $this->getProp('availabilityEnds');
    }

    /**
     * A category for the item. Greater signs or slashes can be used to informally indicate a category hierarchy.
     * @return string|\Vnetby\Schemaorg\DataTypes\DataText|\Vnetby\Schemaorg\Types\Thing\Intangible\Enumeration\PhysicalActivityCategory\PhysicalActivityCategory|\Vnetby\Schemaorg\DataTypes\DataURL|\Vnetby\Schemaorg\Types\Thing\Intangible\DefinedTerm\CategoryCode\CategoryCode|\Vnetby\Schemaorg\Types\Thing\Thing|null
     */
    function getCategory()
    {
        return $this->getProp('category');
    }

    /**
     * The beginning of the availability of the product or service included in the offer.
     * @return string|\Vnetby\Schemaorg\DataTypes\DataDateTime|\Vnetby\Schemaorg\DataTypes\DataTime|\Vnetby\Schemaorg\DataTypes\DataDate|null
     */
    function getAvailabilityStarts()
    {
        return $this->getProp('availabilityStarts');
    }

    /**
     * Indicates if use of the media require a subscription (either paid or free). Allowed values are ```true``` or ```false``` (note that
     * an earlier version had 'yes', 'no').
     * @return bool|\Vnetby\Schemaorg\DataTypes\DataBoolean|\Vnetby\Schemaorg\Types\Thing\Intangible\MediaSubscription|null
     */
    function getRequiresSubscription()
    {
        return $this->getProp('requiresSubscription');
    }

    /**
     * The ISO 3166-1 (ISO 3166-1 alpha-2) or ISO 3166-2 code, the place, or the GeoShape for the geo-political region(s) for which
     * the offer or delivery charge specification is not valid, e.g. a region where the transaction is not allowed.\n\nSee also [[eligibleRegion]]. 
     * @return string|\Vnetby\Schemaorg\Types\Thing\Intangible\StructuredValue\GeoShape\GeoShape|\Vnetby\Schemaorg\Types\Thing\Place\Place|\Vnetby\Schemaorg\DataTypes\DataText|null
     */
    function getIneligibleRegion()
    {
        return $this->getProp('ineligibleRegion');
    }

    /**
     * An Offer which must be accepted before the user can perform the Action. For example, the user may need to buy
     * a movie before being able to watch it.
     * @return \Vnetby\Schemaorg\Types\Thing\Intangible\Offer\Offer|null
     */
    function getExpectsAcceptanceOf()
    {
        return $this->getProp('expectsAcceptanceOf');
    }
}
