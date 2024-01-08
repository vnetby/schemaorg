<?php

/**
 * @see https://schema.org/MedicalOrganization
 * A medical organization (physical or not), such as hospital, institution or clinic.
 */

namespace Vnetby\Schemaorg\Types\Thing\Organization\MedicalOrganization;

class MedicalOrganization extends \Vnetby\Schemaorg\Types\Thing\Organization\Organization
{
    const TYPE = 'MedicalOrganization';

    /**
     * A medical specialty of the provider.
     * @var \Vnetby\Schemaorg\Types\Thing\Intangible\Enumeration\Specialty\MedicalSpecialty\MedicalSpecialty
     */
    public $medicalSpecialty;

    /**
     * Whether the provider is accepting new patients.
     * @var bool|\Vnetby\Schemaorg\DataTypes\DataBoolean
     */
    public $isAcceptingNewPatients;

    /**
     * Name or unique ID of network. (Networks are often reused across different insurance plans.)
     * @var string|\Vnetby\Schemaorg\DataTypes\DataText
     */
    public $healthPlanNetworkId;

    /**
     * A medical specialty of the provider.
     * @param \Vnetby\Schemaorg\Types\Thing\Intangible\Enumeration\Specialty\MedicalSpecialty\MedicalSpecialty $value
     * @return static
     */
    function setMedicalSpecialty($value)
    {
        return $this->setProp('medicalSpecialty', $value);
    }

    /**
     * Whether the provider is accepting new patients.
     * @param bool|\Vnetby\Schemaorg\DataTypes\DataBoolean $value
     * @return static
     */
    function setIsAcceptingNewPatients($value)
    {
        return $this->setProp('isAcceptingNewPatients', $value);
    }

    /**
     * Name or unique ID of network. (Networks are often reused across different insurance plans.)
     * @param string|\Vnetby\Schemaorg\DataTypes\DataText $value
     * @return static
     */
    function setHealthPlanNetworkId($value)
    {
        return $this->setProp('healthPlanNetworkId', $value);
    }

    /**
     * A medical specialty of the provider.
     * @return \Vnetby\Schemaorg\Types\Thing\Intangible\Enumeration\Specialty\MedicalSpecialty\MedicalSpecialty|null
     */
    function getMedicalSpecialty()
    {
        return $this->getProp('medicalSpecialty');
    }

    /**
     * Whether the provider is accepting new patients.
     * @return bool|\Vnetby\Schemaorg\DataTypes\DataBoolean|null
     */
    function getIsAcceptingNewPatients()
    {
        return $this->getProp('isAcceptingNewPatients');
    }

    /**
     * Name or unique ID of network. (Networks are often reused across different insurance plans.)
     * @return string|\Vnetby\Schemaorg\DataTypes\DataText|null
     */
    function getHealthPlanNetworkId()
    {
        return $this->getProp('healthPlanNetworkId');
    }
}
