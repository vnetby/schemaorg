<?php

/**
 * @see https://schema.org/WebAPI
 * An application programming interface accessible over Web/Internet technologies.
 */

namespace Vnetby\Schemaorg\Types\Thing\Intangible\Service;

class WebAPI extends \Vnetby\Schemaorg\Types\Thing\Intangible\Service\Service
{
    const TYPE = 'WebAPI';

    /**
     * Further documentation describing the Web API in more detail.
     * @var \Vnetby\Schemaorg\DataTypes\DataURL|\Vnetby\Schemaorg\Types\Thing\CreativeWork\CreativeWork
     */
    protected $prop_documentation;

    /**
     * Further documentation describing the Web API in more detail.
     * @param \Vnetby\Schemaorg\DataTypes\DataURL|\Vnetby\Schemaorg\Types\Thing\CreativeWork\CreativeWork $value
     * @return static
     */
    function setDocumentation($value)
    {
        return $this->setProp('documentation', $value);
    }

    /**
     * Further documentation describing the Web API in more detail.
     * @return \Vnetby\Schemaorg\DataTypes\DataURL|\Vnetby\Schemaorg\Types\Thing\CreativeWork\CreativeWork|null
     */
    function getDocumentation()
    {
        return $this->getProp('documentation');
    }
}
