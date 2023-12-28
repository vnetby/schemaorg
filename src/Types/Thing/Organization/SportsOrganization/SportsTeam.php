<?php

/**
 * @see https://schema.org/SportsTeam
 * Organization: Sports team.
 */

namespace Vnetby\Schemaorg\Types\Thing\Organization\SportsOrganization;

class SportsTeam extends \Vnetby\Schemaorg\Types\Thing\Organization\SportsOrganization\SportsOrganization
{
    const TYPE = 'SportsTeam';

    /**
     * Gender of something, typically a [[Person]], but possibly also fictional characters, animals, etc. While https://schema.org/Male and https://schema.org/Female may be used, text
     * strings are also acceptable for people who do not identify as a binary gender. The [[gender]] property can also be used
     * in an extended sense to cover e.g. the gender of sports teams. As with the gender of individuals, we do not
     * try to enumerate all possibilities. A mixed-gender [[SportsTeam]] can be indicated with a text value of "Mixed".
     * @var \Vnetby\Schemaorg\DataTypes\DataText|\Vnetby\Schemaorg\Types\Thing\Intangible\Enumeration\GenderType\GenderType
     */
    protected $prop_gender;

    /**
     * A person that acts in a coaching role for a sports team.
     * @var \Vnetby\Schemaorg\Types\Thing\Person\Person
     */
    protected $prop_coach;

    /**
     * A person that acts as performing member of a sports team; a player as opposed to a coach.
     * @var \Vnetby\Schemaorg\Types\Thing\Person\Person
     */
    protected $prop_athlete;

    /**
     * Gender of something, typically a [[Person]], but possibly also fictional characters, animals, etc. While https://schema.org/Male and https://schema.org/Female may be used, text
     * strings are also acceptable for people who do not identify as a binary gender. The [[gender]] property can also be used
     * in an extended sense to cover e.g. the gender of sports teams. As with the gender of individuals, we do not
     * try to enumerate all possibilities. A mixed-gender [[SportsTeam]] can be indicated with a text value of "Mixed".
     * @param \Vnetby\Schemaorg\DataTypes\DataText|\Vnetby\Schemaorg\Types\Thing\Intangible\Enumeration\GenderType\GenderType $value
     * @return static
     */
    function setGender($value)
    {
        return $this->setProp('gender', $value);
    }

    /**
     * A person that acts in a coaching role for a sports team.
     * @param \Vnetby\Schemaorg\Types\Thing\Person\Person $value
     * @return static
     */
    function setCoach($value)
    {
        return $this->setProp('coach', $value);
    }

    /**
     * A person that acts as performing member of a sports team; a player as opposed to a coach.
     * @param \Vnetby\Schemaorg\Types\Thing\Person\Person $value
     * @return static
     */
    function setAthlete($value)
    {
        return $this->setProp('athlete', $value);
    }

    /**
     * Gender of something, typically a [[Person]], but possibly also fictional characters, animals, etc. While https://schema.org/Male and https://schema.org/Female may be used, text
     * strings are also acceptable for people who do not identify as a binary gender. The [[gender]] property can also be used
     * in an extended sense to cover e.g. the gender of sports teams. As with the gender of individuals, we do not
     * try to enumerate all possibilities. A mixed-gender [[SportsTeam]] can be indicated with a text value of "Mixed".
     * @return \Vnetby\Schemaorg\DataTypes\DataText|\Vnetby\Schemaorg\Types\Thing\Intangible\Enumeration\GenderType\GenderType|null
     */
    function getGender()
    {
        return $this->getProp('gender');
    }

    /**
     * A person that acts in a coaching role for a sports team.
     * @return \Vnetby\Schemaorg\Types\Thing\Person\Person|null
     */
    function getCoach()
    {
        return $this->getProp('coach');
    }

    /**
     * A person that acts as performing member of a sports team; a player as opposed to a coach.
     * @return \Vnetby\Schemaorg\Types\Thing\Person\Person|null
     */
    function getAthlete()
    {
        return $this->getProp('athlete');
    }
}
