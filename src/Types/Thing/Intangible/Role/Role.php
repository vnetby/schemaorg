<?php

/**
 * @see https://schema.org/Role
 * Represents additional information about a relationship or property. For example a Role can be used to say that a 'member' role
 * linking some SportsTeam to a player occurred during a particular time period. Or that a Person's 'actor' role in a Movie
 * was for some particular characterName. Such properties can be attached to a Role entity, which is then associated with the main
 * entities using ordinary properties like 'member' or 'actor'.\n\nSee also [blog post](http://blog.schema.org/2014/06/introducing-role.html).
 */

namespace Vnetby\Schemaorg\Types\Thing\Intangible\Role;

class Role extends \Vnetby\Schemaorg\Types\Thing\Intangible\Intangible
{
    const TYPE = 'Role';

    /**
     * The start date and time of the item (in [ISO 8601 date format](http://en.wikipedia.org/wiki/ISO_8601)).
     * @var string|\Vnetby\Schemaorg\DataTypes\DataDateTime|\Vnetby\Schemaorg\DataTypes\DataDate
     */
    public $startDate;

    /**
     * A role played, performed or filled by a person or organization. For example, the team of creators for a comic book
     * might fill the roles named 'inker', 'penciller', and 'letterer'; or an athlete in a SportsTeam might play in the position named
     * 'Quarterback'.
     * @var string|\Vnetby\Schemaorg\DataTypes\DataText|\Vnetby\Schemaorg\DataTypes\DataURL
     */
    public $roleName;

    /**
     * The end date and time of the item (in [ISO 8601 date format](http://en.wikipedia.org/wiki/ISO_8601)).
     * @var string|\Vnetby\Schemaorg\DataTypes\DataDateTime|\Vnetby\Schemaorg\DataTypes\DataDate
     */
    public $endDate;

    /**
     * The start date and time of the item (in [ISO 8601 date format](http://en.wikipedia.org/wiki/ISO_8601)).
     * @param string|\Vnetby\Schemaorg\DataTypes\DataDateTime|\Vnetby\Schemaorg\DataTypes\DataDate $value
     * @return static
     */
    function setStartDate($value)
    {
        return $this->setProp('startDate', $value);
    }

    /**
     * A role played, performed or filled by a person or organization. For example, the team of creators for a comic book
     * might fill the roles named 'inker', 'penciller', and 'letterer'; or an athlete in a SportsTeam might play in the position named
     * 'Quarterback'.
     * @param string|\Vnetby\Schemaorg\DataTypes\DataText|\Vnetby\Schemaorg\DataTypes\DataURL $value
     * @return static
     */
    function setRoleName($value)
    {
        return $this->setProp('roleName', $value);
    }

    /**
     * The end date and time of the item (in [ISO 8601 date format](http://en.wikipedia.org/wiki/ISO_8601)).
     * @param string|\Vnetby\Schemaorg\DataTypes\DataDateTime|\Vnetby\Schemaorg\DataTypes\DataDate $value
     * @return static
     */
    function setEndDate($value)
    {
        return $this->setProp('endDate', $value);
    }

    /**
     * The start date and time of the item (in [ISO 8601 date format](http://en.wikipedia.org/wiki/ISO_8601)).
     * @return string|\Vnetby\Schemaorg\DataTypes\DataDateTime|\Vnetby\Schemaorg\DataTypes\DataDate|null
     */
    function getStartDate()
    {
        return $this->getProp('startDate');
    }

    /**
     * A role played, performed or filled by a person or organization. For example, the team of creators for a comic book
     * might fill the roles named 'inker', 'penciller', and 'letterer'; or an athlete in a SportsTeam might play in the position named
     * 'Quarterback'.
     * @return string|\Vnetby\Schemaorg\DataTypes\DataText|\Vnetby\Schemaorg\DataTypes\DataURL|null
     */
    function getRoleName()
    {
        return $this->getProp('roleName');
    }

    /**
     * The end date and time of the item (in [ISO 8601 date format](http://en.wikipedia.org/wiki/ISO_8601)).
     * @return string|\Vnetby\Schemaorg\DataTypes\DataDateTime|\Vnetby\Schemaorg\DataTypes\DataDate|null
     */
    function getEndDate()
    {
        return $this->getProp('endDate');
    }
}
