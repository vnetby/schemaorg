<?php

/**
 * @see https://schema.org/MedicalWebPage
 * A web page that provides medical information.
 */

namespace Vnetby\Schemaorg\Types\Thing\CreativeWork\WebPage;

class MedicalWebPage extends \Vnetby\Schemaorg\Types\Thing\CreativeWork\WebPage\WebPage
{
    const TYPE = 'MedicalWebPage';

    /**
     * Medical audience for page.
     * @var \Vnetby\Schemaorg\Types\Thing\Intangible\Audience\PeopleAudience\MedicalAudience\MedicalAudience|\Vnetby\Schemaorg\Types\Thing\Intangible\Enumeration\MedicalEnumeration\MedicalAudienceType\MedicalAudienceType
     */
    public $medicalAudience;

    /**
     * Medical audience for page.
     * @param \Vnetby\Schemaorg\Types\Thing\Intangible\Audience\PeopleAudience\MedicalAudience\MedicalAudience|\Vnetby\Schemaorg\Types\Thing\Intangible\Enumeration\MedicalEnumeration\MedicalAudienceType\MedicalAudienceType $value
     * @return static
     */
    function setMedicalAudience($value)
    {
        return $this->setProp('medicalAudience', $value);
    }

    /**
     * Medical audience for page.
     * @return \Vnetby\Schemaorg\Types\Thing\Intangible\Audience\PeopleAudience\MedicalAudience\MedicalAudience|\Vnetby\Schemaorg\Types\Thing\Intangible\Enumeration\MedicalEnumeration\MedicalAudienceType\MedicalAudienceType|null
     */
    function getMedicalAudience()
    {
        return $this->getProp('medicalAudience');
    }
}
