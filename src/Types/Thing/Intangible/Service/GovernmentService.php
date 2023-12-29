<?php

/**
 * @see https://schema.org/GovernmentService
 * A service provided by a government organization, e.g. food stamps, veterans benefits, etc.
 */

namespace Vnetby\Schemaorg\Types\Thing\Intangible\Service;

class GovernmentService extends \Vnetby\Schemaorg\Types\Thing\Intangible\Service\Service
{
    const TYPE = 'GovernmentService';

    /**
     * Indicates a legal jurisdiction, e.g. of some legislation, or where some government service is based.
     * @var string|\Vnetby\Schemaorg\Types\Thing\Place\AdministrativeArea\AdministrativeArea|\Vnetby\Schemaorg\DataTypes\DataText
     */
    public $jurisdiction;

    /**
     * The operating organization, if different from the provider. This enables the representation of services that are provided by an organization, but
     * operated by another organization like a subcontractor.
     * @var \Vnetby\Schemaorg\Types\Thing\Organization\Organization
     */
    public $serviceOperator;

    /**
     * Indicates a legal jurisdiction, e.g. of some legislation, or where some government service is based.
     * @param string|\Vnetby\Schemaorg\Types\Thing\Place\AdministrativeArea\AdministrativeArea|\Vnetby\Schemaorg\DataTypes\DataText $value
     * @return static
     */
    function setJurisdiction($value)
    {
        return $this->setProp('jurisdiction', $value);
    }

    /**
     * The operating organization, if different from the provider. This enables the representation of services that are provided by an organization, but
     * operated by another organization like a subcontractor.
     * @param \Vnetby\Schemaorg\Types\Thing\Organization\Organization $value
     * @return static
     */
    function setServiceOperator($value)
    {
        return $this->setProp('serviceOperator', $value);
    }

    /**
     * Indicates a legal jurisdiction, e.g. of some legislation, or where some government service is based.
     * @return string|\Vnetby\Schemaorg\Types\Thing\Place\AdministrativeArea\AdministrativeArea|\Vnetby\Schemaorg\DataTypes\DataText|null
     */
    function getJurisdiction()
    {
        return $this->getProp('jurisdiction');
    }

    /**
     * The operating organization, if different from the provider. This enables the representation of services that are provided by an organization, but
     * operated by another organization like a subcontractor.
     * @return \Vnetby\Schemaorg\Types\Thing\Organization\Organization|null
     */
    function getServiceOperator()
    {
        return $this->getProp('serviceOperator');
    }
}
