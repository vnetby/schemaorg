<?php

/**
 * @see https://schema.org/MobileApplication
 * A software application designed specifically to work well on a mobile device such as a telephone.
 */

namespace Vnetby\Schemaorg\Types\Thing\CreativeWork\SoftwareApplication;

class MobileApplication extends \Vnetby\Schemaorg\Types\Thing\CreativeWork\SoftwareApplication\SoftwareApplication
{
    const TYPE = 'MobileApplication';

    /**
     * Specifies specific carrier(s) requirements for the application (e.g. an application may only work on a specific carrier network).
     * @var string|\Vnetby\Schemaorg\DataTypes\DataText
     */
    public $carrierRequirements;

    /**
     * Specifies specific carrier(s) requirements for the application (e.g. an application may only work on a specific carrier network).
     * @param string|\Vnetby\Schemaorg\DataTypes\DataText $value
     * @return static
     */
    function setCarrierRequirements($value)
    {
        return $this->setProp('carrierRequirements', $value);
    }

    /**
     * Specifies specific carrier(s) requirements for the application (e.g. an application may only work on a specific carrier network).
     * @return string|\Vnetby\Schemaorg\DataTypes\DataText|null
     */
    function getCarrierRequirements()
    {
        return $this->getProp('carrierRequirements');
    }
}
