<?php

/**
 * @see https://schema.org/WebApplication
 * Web applications.
 */

namespace Vnetby\Schemaorg\Types\Thing\CreativeWork\SoftwareApplication;

class WebApplication extends \Vnetby\Schemaorg\Types\Thing\CreativeWork\SoftwareApplication\SoftwareApplication
{
    const TYPE = 'WebApplication';

    /**
     * Specifies browser requirements in human-readable text. For example, 'requires HTML5 support'.
     * @var string|\Vnetby\Schemaorg\DataTypes\DataText
     */
    public $browserRequirements;

    /**
     * Specifies browser requirements in human-readable text. For example, 'requires HTML5 support'.
     * @param string|\Vnetby\Schemaorg\DataTypes\DataText $value
     * @return static
     */
    function setBrowserRequirements($value)
    {
        return $this->setProp('browserRequirements', $value);
    }

    /**
     * Specifies browser requirements in human-readable text. For example, 'requires HTML5 support'.
     * @return string|\Vnetby\Schemaorg\DataTypes\DataText|null
     */
    function getBrowserRequirements()
    {
        return $this->getProp('browserRequirements');
    }
}
