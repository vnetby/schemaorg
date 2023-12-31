<?php

/**
 * @see https://schema.org/PathologyTest
 * A medical test performed by a laboratory that typically involves examination of a tissue sample by a pathologist.
 */

namespace Vnetby\Schemaorg\Types\Thing\MedicalEntity\MedicalTest;

class PathologyTest extends \Vnetby\Schemaorg\Types\Thing\MedicalEntity\MedicalTest\MedicalTest
{
    const TYPE = 'PathologyTest';

    /**
     * The type of tissue sample required for the test.
     * @var string|\Vnetby\Schemaorg\DataTypes\DataText
     */
    public $tissueSample;

    /**
     * The type of tissue sample required for the test.
     * @param string|\Vnetby\Schemaorg\DataTypes\DataText $value
     * @return static
     */
    function setTissueSample($value)
    {
        return $this->setProp('tissueSample', $value);
    }

    /**
     * The type of tissue sample required for the test.
     * @return string|\Vnetby\Schemaorg\DataTypes\DataText|null
     */
    function getTissueSample()
    {
        return $this->getProp('tissueSample');
    }
}
