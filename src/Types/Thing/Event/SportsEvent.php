<?php

/**
 * @see https://schema.org/SportsEvent
 * Event type: Sports event.
 */

namespace Vnetby\Schemaorg\Types\Thing\Event;

class SportsEvent extends \Vnetby\Schemaorg\Types\Thing\Event\Event
{
    const TYPE = 'SportsEvent';

    /**
     * The home team in a sports event.
     * @var \Vnetby\Schemaorg\Types\Thing\Organization\SportsOrganization\SportsTeam|\Vnetby\Schemaorg\Types\Thing\Person\Person
     */
    public $homeTeam;

    /**
     * A type of sport (e.g. Baseball).
     * @var string|\Vnetby\Schemaorg\DataTypes\DataURL|\Vnetby\Schemaorg\DataTypes\DataText
     */
    public $sport;

    /**
     * A competitor in a sports event.
     * @var \Vnetby\Schemaorg\Types\Thing\Person\Person|\Vnetby\Schemaorg\Types\Thing\Organization\SportsOrganization\SportsTeam
     */
    public $competitor;

    /**
     * The away team in a sports event.
     * @var \Vnetby\Schemaorg\Types\Thing\Person\Person|\Vnetby\Schemaorg\Types\Thing\Organization\SportsOrganization\SportsTeam
     */
    public $awayTeam;

    /**
     * The home team in a sports event.
     * @param \Vnetby\Schemaorg\Types\Thing\Organization\SportsOrganization\SportsTeam|\Vnetby\Schemaorg\Types\Thing\Person\Person $value
     * @return static
     */
    function setHomeTeam($value)
    {
        return $this->setProp('homeTeam', $value);
    }

    /**
     * A type of sport (e.g. Baseball).
     * @param string|\Vnetby\Schemaorg\DataTypes\DataURL|\Vnetby\Schemaorg\DataTypes\DataText $value
     * @return static
     */
    function setSport($value)
    {
        return $this->setProp('sport', $value);
    }

    /**
     * A competitor in a sports event.
     * @param \Vnetby\Schemaorg\Types\Thing\Person\Person|\Vnetby\Schemaorg\Types\Thing\Organization\SportsOrganization\SportsTeam $value
     * @return static
     */
    function setCompetitor($value)
    {
        return $this->setProp('competitor', $value);
    }

    /**
     * The away team in a sports event.
     * @param \Vnetby\Schemaorg\Types\Thing\Person\Person|\Vnetby\Schemaorg\Types\Thing\Organization\SportsOrganization\SportsTeam $value
     * @return static
     */
    function setAwayTeam($value)
    {
        return $this->setProp('awayTeam', $value);
    }

    /**
     * The home team in a sports event.
     * @return \Vnetby\Schemaorg\Types\Thing\Organization\SportsOrganization\SportsTeam|\Vnetby\Schemaorg\Types\Thing\Person\Person|null
     */
    function getHomeTeam()
    {
        return $this->getProp('homeTeam');
    }

    /**
     * A type of sport (e.g. Baseball).
     * @return string|\Vnetby\Schemaorg\DataTypes\DataURL|\Vnetby\Schemaorg\DataTypes\DataText|null
     */
    function getSport()
    {
        return $this->getProp('sport');
    }

    /**
     * A competitor in a sports event.
     * @return \Vnetby\Schemaorg\Types\Thing\Person\Person|\Vnetby\Schemaorg\Types\Thing\Organization\SportsOrganization\SportsTeam|null
     */
    function getCompetitor()
    {
        return $this->getProp('competitor');
    }

    /**
     * The away team in a sports event.
     * @return \Vnetby\Schemaorg\Types\Thing\Person\Person|\Vnetby\Schemaorg\Types\Thing\Organization\SportsOrganization\SportsTeam|null
     */
    function getAwayTeam()
    {
        return $this->getProp('awayTeam');
    }
}
