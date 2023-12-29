<?php

/**
 * @see https://schema.org/InfectiousDisease
 * An infectious disease is a clinically evident human disease resulting from the presence of pathogenic microbial agents, like pathogenic viruses, pathogenic
 * bacteria, fungi, protozoa, multicellular parasites, and prions. To be considered an infectious disease, such pathogens are known to be able to
 * cause this disease.
 */

namespace Vnetby\Schemaorg\Types\Thing\MedicalEntity\MedicalCondition;

class InfectiousDisease extends \Vnetby\Schemaorg\Types\Thing\MedicalEntity\MedicalCondition\MedicalCondition
{
    const TYPE = 'InfectiousDisease';

    /**
     * The actual infectious agent, such as a specific bacterium.
     * @var string|\Vnetby\Schemaorg\DataTypes\DataText
     */
    public $infectiousAgent;

    /**
     * The class of infectious agent (bacteria, prion, etc.) that causes the disease.
     * @var \Vnetby\Schemaorg\Types\Thing\Intangible\Enumeration\MedicalEnumeration\InfectiousAgentClass\InfectiousAgentClass
     */
    public $infectiousAgentClass;

    /**
     * How the disease spreads, either as a route or vector, for example 'direct contact', 'Aedes aegypti', etc.
     * @var string|\Vnetby\Schemaorg\DataTypes\DataText
     */
    public $transmissionMethod;

    /**
     * The actual infectious agent, such as a specific bacterium.
     * @param string|\Vnetby\Schemaorg\DataTypes\DataText $value
     * @return static
     */
    function setInfectiousAgent($value)
    {
        return $this->setProp('infectiousAgent', $value);
    }

    /**
     * The class of infectious agent (bacteria, prion, etc.) that causes the disease.
     * @param \Vnetby\Schemaorg\Types\Thing\Intangible\Enumeration\MedicalEnumeration\InfectiousAgentClass\InfectiousAgentClass $value
     * @return static
     */
    function setInfectiousAgentClass($value)
    {
        return $this->setProp('infectiousAgentClass', $value);
    }

    /**
     * How the disease spreads, either as a route or vector, for example 'direct contact', 'Aedes aegypti', etc.
     * @param string|\Vnetby\Schemaorg\DataTypes\DataText $value
     * @return static
     */
    function setTransmissionMethod($value)
    {
        return $this->setProp('transmissionMethod', $value);
    }

    /**
     * The actual infectious agent, such as a specific bacterium.
     * @return string|\Vnetby\Schemaorg\DataTypes\DataText|null
     */
    function getInfectiousAgent()
    {
        return $this->getProp('infectiousAgent');
    }

    /**
     * The class of infectious agent (bacteria, prion, etc.) that causes the disease.
     * @return \Vnetby\Schemaorg\Types\Thing\Intangible\Enumeration\MedicalEnumeration\InfectiousAgentClass\InfectiousAgentClass|null
     */
    function getInfectiousAgentClass()
    {
        return $this->getProp('infectiousAgentClass');
    }

    /**
     * How the disease spreads, either as a route or vector, for example 'direct contact', 'Aedes aegypti', etc.
     * @return string|\Vnetby\Schemaorg\DataTypes\DataText|null
     */
    function getTransmissionMethod()
    {
        return $this->getProp('transmissionMethod');
    }
}
