<?php

/**
 * @see https://schema.org/Quotation
 * A quotation. Often but not necessarily from some written work, attributable to a real world author and - if associated with
 * a fictional character - to any fictional Person. Use [[isBasedOn]] to link to source/origin. The [[recordedIn]] property can be used to
 * reference a Quotation from an [[Event]].
 */

namespace Vnetby\Schemaorg\Types\Thing\CreativeWork;

class Quotation extends \Vnetby\Schemaorg\Types\Thing\CreativeWork\CreativeWork
{
    const TYPE = 'Quotation';

    /**
     * The (e.g. fictional) character, Person or Organization to whom the quotation is attributed within the containing CreativeWork.
     * @var \Vnetby\Schemaorg\Types\Thing\Person\Person|\Vnetby\Schemaorg\Types\Thing\Organization\Organization
     */
    protected $prop_spokenByCharacter;

    /**
     * The (e.g. fictional) character, Person or Organization to whom the quotation is attributed within the containing CreativeWork.
     * @param \Vnetby\Schemaorg\Types\Thing\Person\Person|\Vnetby\Schemaorg\Types\Thing\Organization\Organization $value
     * @return static
     */
    function setSpokenByCharacter($value)
    {
        return $this->setProp('spokenByCharacter', $value);
    }

    /**
     * The (e.g. fictional) character, Person or Organization to whom the quotation is attributed within the containing CreativeWork.
     * @return \Vnetby\Schemaorg\Types\Thing\Person\Person|\Vnetby\Schemaorg\Types\Thing\Organization\Organization|null
     */
    function getSpokenByCharacter()
    {
        return $this->getProp('spokenByCharacter');
    }
}
