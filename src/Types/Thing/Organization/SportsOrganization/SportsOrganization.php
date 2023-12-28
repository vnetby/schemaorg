<?php

/**
 * @see https://schema.org/SportsOrganization
 * Represents the collection of all sports organizations, including sports teams, governing bodies, and sports associations.
 */

namespace Vnetby\Schemaorg\Types\Thing\Organization\SportsOrganization;

class SportsOrganization extends \Vnetby\Schemaorg\Types\Thing\Organization\Organization
{
    const TYPE = 'SportsOrganization';

    /**
     * A type of sport (e.g. Baseball).
     * @var \Vnetby\Schemaorg\DataTypes\DataURL|\Vnetby\Schemaorg\DataTypes\DataText
     */
    protected $prop_sport;

    /**
     * A type of sport (e.g. Baseball).
     * @param \Vnetby\Schemaorg\DataTypes\DataURL|\Vnetby\Schemaorg\DataTypes\DataText $value
     * @return static
     */
    function setSport($value)
    {
        return $this->setProp('sport', $value);
    }

    /**
     * A type of sport (e.g. Baseball).
     * @return \Vnetby\Schemaorg\DataTypes\DataURL|\Vnetby\Schemaorg\DataTypes\DataText|null
     */
    function getSport()
    {
        return $this->getProp('sport');
    }
}
