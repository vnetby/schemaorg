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
     * @var \Vnetby\Schemaorg\Types\Thing\Intangible\Enumeration\MedicalEnumeration\MedicalAudienceType\MedicalAudienceType|\Vnetby\Schemaorg\Types\Thing\Intangible\Audience\MedicalAudience\MedicalAudience
     */
    protected $prop_medicalAudience;

    /**
     * Medical audience for page.
     * @param \Vnetby\Schemaorg\Types\Thing\Intangible\Enumeration\MedicalEnumeration\MedicalAudienceType\MedicalAudienceType|\Vnetby\Schemaorg\Types\Thing\Intangible\Audience\MedicalAudience\MedicalAudience $value
     * @return static
     */
    function setMedicalAudience($value)
    {
        return $this->setProp('medicalAudience', $value);
    }

    /**
     * Medical audience for page.
     * @return \Vnetby\Schemaorg\Types\Thing\Intangible\Enumeration\MedicalEnumeration\MedicalAudienceType\MedicalAudienceType|\Vnetby\Schemaorg\Types\Thing\Intangible\Audience\MedicalAudience\MedicalAudience|null
     */
    function getMedicalAudience()
    {
        return $this->getProp('medicalAudience');
    }
}
