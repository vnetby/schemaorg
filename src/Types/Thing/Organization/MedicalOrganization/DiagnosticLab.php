<?php

/**
 * @see https://schema.org/DiagnosticLab
 * A medical laboratory that offers on-site or off-site diagnostic services.
 */

namespace Vnetby\Schemaorg\Types\Thing\Organization\MedicalOrganization;

class DiagnosticLab extends \Vnetby\Schemaorg\Types\Thing\Organization\MedicalOrganization\MedicalOrganization
{
    const TYPE = 'DiagnosticLab';

    /**
     * A diagnostic test or procedure offered by this lab.
     * @var \Vnetby\Schemaorg\Types\Thing\MedicalEntity\MedicalTest\MedicalTest
     */
    public $availableTest;

    /**
     * A diagnostic test or procedure offered by this lab.
     * @param \Vnetby\Schemaorg\Types\Thing\MedicalEntity\MedicalTest\MedicalTest $value
     * @return static
     */
    function setAvailableTest($value)
    {
        return $this->setProp('availableTest', $value);
    }

    /**
     * A diagnostic test or procedure offered by this lab.
     * @return \Vnetby\Schemaorg\Types\Thing\MedicalEntity\MedicalTest\MedicalTest|null
     */
    function getAvailableTest()
    {
        return $this->getProp('availableTest');
    }
}
