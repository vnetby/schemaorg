<?php

/**
 * @see https://schema.org/MedicalCode
 * A code for a medical entity.
 */

namespace Vnetby\Schemaorg\Types\Thing\MedicalEntity\MedicalIntangible;

class MedicalCode extends \Vnetby\Schemaorg\Types\Thing\MedicalEntity\MedicalIntangible\MedicalIntangible
{
    const TYPE = 'MedicalCode';

    /**
     * The coding system, e.g. 'ICD-10'.
     * @var string|\Vnetby\Schemaorg\DataTypes\DataText
     */
    public $codingSystem;

    /**
     * A short textual code that uniquely identifies the value.
     * @var string|\Vnetby\Schemaorg\DataTypes\DataText
     */
    public $codeValue;

    /**
     * The coding system, e.g. 'ICD-10'.
     * @param string|\Vnetby\Schemaorg\DataTypes\DataText $value
     * @return static
     */
    function setCodingSystem($value)
    {
        return $this->setProp('codingSystem', $value);
    }

    /**
     * A short textual code that uniquely identifies the value.
     * @param string|\Vnetby\Schemaorg\DataTypes\DataText $value
     * @return static
     */
    function setCodeValue($value)
    {
        return $this->setProp('codeValue', $value);
    }

    /**
     * The coding system, e.g. 'ICD-10'.
     * @return string|\Vnetby\Schemaorg\DataTypes\DataText|null
     */
    function getCodingSystem()
    {
        return $this->getProp('codingSystem');
    }

    /**
     * A short textual code that uniquely identifies the value.
     * @return string|\Vnetby\Schemaorg\DataTypes\DataText|null
     */
    function getCodeValue()
    {
        return $this->getProp('codeValue');
    }
}
