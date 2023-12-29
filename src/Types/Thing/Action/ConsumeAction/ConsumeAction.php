<?php

/**
 * @see https://schema.org/ConsumeAction
 * The act of ingesting information/resources/food.
 */

namespace Vnetby\Schemaorg\Types\Thing\Action\ConsumeAction;

class ConsumeAction extends \Vnetby\Schemaorg\Types\Thing\Action\Action
{
    const TYPE = 'ConsumeAction';

    /**
     * A set of requirements that must be fulfilled in order to perform an Action. If more than one value is specified,
     * fulfilling one set of requirements will allow the Action to be performed.
     * @var \Vnetby\Schemaorg\Types\Thing\Intangible\ActionAccessSpecification
     */
    public $actionAccessibilityRequirement;

    /**
     * An Offer which must be accepted before the user can perform the Action. For example, the user may need to buy
     * a movie before being able to watch it.
     * @var \Vnetby\Schemaorg\Types\Thing\Intangible\Offer\Offer
     */
    public $expectsAcceptanceOf;

    /**
     * A set of requirements that must be fulfilled in order to perform an Action. If more than one value is specified,
     * fulfilling one set of requirements will allow the Action to be performed.
     * @param \Vnetby\Schemaorg\Types\Thing\Intangible\ActionAccessSpecification $value
     * @return static
     */
    function setActionAccessibilityRequirement($value)
    {
        return $this->setProp('actionAccessibilityRequirement', $value);
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
     * A set of requirements that must be fulfilled in order to perform an Action. If more than one value is specified,
     * fulfilling one set of requirements will allow the Action to be performed.
     * @return \Vnetby\Schemaorg\Types\Thing\Intangible\ActionAccessSpecification|null
     */
    function getActionAccessibilityRequirement()
    {
        return $this->getProp('actionAccessibilityRequirement');
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
