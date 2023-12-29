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
     * @var string|\Vnetby\Schemaorg\DataTypes\DataText
     */
    public $educationalRole;

    /**
     * An educationalRole of an EducationalAudience.
     * @param string|\Vnetby\Schemaorg\DataTypes\DataText $value
     * @return static
     */
    function setEducationalRole($value)
    {
        return $this->setProp('educationalRole', $value);
    }

    /**
     * An educationalRole of an EducationalAudience.
     * @return string|\Vnetby\Schemaorg\DataTypes\DataText|null
     */
    function getEducationalRole()
    {
        return $this->getProp('educationalRole');
    }
}
