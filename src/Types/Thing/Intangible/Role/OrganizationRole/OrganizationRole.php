<?php

/**
 * @see https://schema.org/OrganizationRole
 * A subclass of Role used to describe roles within organizations.
 */

namespace Vnetby\Schemaorg\Types\Thing\Intangible\Role\OrganizationRole;

class OrganizationRole extends \Vnetby\Schemaorg\Types\Thing\Intangible\Role\Role
{
    const TYPE = 'OrganizationRole';

    /**
     * A number associated with a role in an organization, for example, the number on an athlete's jersey.
     * @var \Vnetby\Schemaorg\DataTypes\DataNumber
     */
    protected $prop_numberedPosition;

    /**
     * A number associated with a role in an organization, for example, the number on an athlete's jersey.
     * @param \Vnetby\Schemaorg\DataTypes\DataNumber $value
     * @return static
     */
    function setNumberedPosition($value)
    {
        return $this->setProp('numberedPosition', $value);
    }

    /**
     * A number associated with a role in an organization, for example, the number on an athlete's jersey.
     * @return \Vnetby\Schemaorg\DataTypes\DataNumber|null
     */
    function getNumberedPosition()
    {
        return $this->getProp('numberedPosition');
    }
}
