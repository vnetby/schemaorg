<?php

/**
 * @see https://schema.org/MedicalCode
 * A code for a medical entity.
 */

namespace Vnetby\Schemaorg\Types\Thing\Intangible\DefinedTerm\CategoryCode;

class MedicalCode extends \Vnetby\Schemaorg\Types\Thing\Intangible\DefinedTerm\CategoryCode\CategoryCode
{
    const TYPE = 'MedicalCode';

    /**
     * A short textual code that uniquely identifies the value.
     * @var \Vnetby\Schemaorg\DataTypes\DataText
     */
    protected $prop_codeValue;

    /**
     * The coding system, e.g. 'ICD-10'.
     * @var \Vnetby\Schemaorg\DataTypes\DataText
     */
    protected $prop_codingSystem;

    /**
     * A short textual code that uniquely identifies the value.
     * @param \Vnetby\Schemaorg\DataTypes\DataText $value
     * @return static
     */
    function setCodeValue($value)
    {
        return $this->setProp('codeValue', $value);
    }

    /**
     * The coding system, e.g. 'ICD-10'.
     * @param \Vnetby\Schemaorg\DataTypes\DataText $value
     * @return static
     */
    function setCodingSystem($value)
    {
        return $this->setProp('codingSystem', $value);
    }

    /**
     * A short textual code that uniquely identifies the value.
     * @return \Vnetby\Schemaorg\DataTypes\DataText|null
     */
    function getCodeValue()
    {
        return $this->getProp('codeValue');
    }

    /**
     * The coding system, e.g. 'ICD-10'.
     * @return \Vnetby\Schemaorg\DataTypes\DataText|null
     */
    function getCodingSystem()
    {
        return $this->getProp('codingSystem');
    }
}
