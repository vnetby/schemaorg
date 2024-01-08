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
     * @var string|\Vnetby\Schemaorg\DataTypes\DataText|\Vnetby\Schemaorg\DataTypes\DataURL
     */
    public $sport;

    /**
     * A type of sport (e.g. Baseball).
     * @param string|\Vnetby\Schemaorg\DataTypes\DataText|\Vnetby\Schemaorg\DataTypes\DataURL $value
     * @return static
     */
    function setSport($value)
    {
        return $this->setProp('sport', $value);
    }

    /**
     * A type of sport (e.g. Baseball).
     * @return string|\Vnetby\Schemaorg\DataTypes\DataText|\Vnetby\Schemaorg\DataTypes\DataURL|null
     */
    function getSport()
    {
        return $this->getProp('sport');
    }
}
