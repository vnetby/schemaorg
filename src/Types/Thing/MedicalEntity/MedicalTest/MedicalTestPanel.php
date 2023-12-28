<?php

/**
 * @see https://schema.org/MedicalTestPanel
 * Any collection of tests commonly ordered together.
 */

namespace Vnetby\Schemaorg\Types\Thing\MedicalEntity\MedicalTest;

class MedicalTestPanel extends \Vnetby\Schemaorg\Types\Thing\MedicalEntity\MedicalTest\MedicalTest
{
    const TYPE = 'MedicalTestPanel';

    /**
     * A component test of the panel.
     * @var \Vnetby\Schemaorg\Types\Thing\MedicalEntity\MedicalTest\MedicalTest
     */
    protected $prop_subTest;

    /**
     * A component test of the panel.
     * @param \Vnetby\Schemaorg\Types\Thing\MedicalEntity\MedicalTest\MedicalTest $value
     * @return static
     */
    function setSubTest($value)
    {
        return $this->setProp('subTest', $value);
    }

    /**
     * A component test of the panel.
     * @return \Vnetby\Schemaorg\Types\Thing\MedicalEntity\MedicalTest\MedicalTest|null
     */
    function getSubTest()
    {
        return $this->getProp('subTest');
    }
}
