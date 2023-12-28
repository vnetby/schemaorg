<?php

/**
 * @see https://schema.org/EducationalAudience
 * An EducationalAudience.
 */

namespace Vnetby\Schemaorg\Types\Thing\Intangible\Audience;

class EducationalAudience extends \Vnetby\Schemaorg\Types\Thing\Intangible\Audience\Audience
{
    const TYPE = 'EducationalAudience';

    /**
     * An educationalRole of an EducationalAudience.
     * @var \Vnetby\Schemaorg\DataTypes\DataText
     */
    protected $prop_educationalRole;

    /**
     * An educationalRole of an EducationalAudience.
     * @param \Vnetby\Schemaorg\DataTypes\DataText $value
     * @return static
     */
    function setEducationalRole($value)
    {
        return $this->setProp('educationalRole', $value);
    }

    /**
     * An educationalRole of an EducationalAudience.
     * @return \Vnetby\Schemaorg\DataTypes\DataText|null
     */
    function getEducationalRole()
    {
        return $this->getProp('educationalRole');
    }
}
