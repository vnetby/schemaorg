<?php

/**
 * @see https://schema.org/MedicalGuideline
 * Any recommendation made by a standard society (e.g. ACC/AHA) or consensus statement that denotes how to diagnose and treat a particular
 * condition. Note: this type should be used to tag the actual guideline recommendation; if the guideline recommendation occurs in a larger
 * scholarly article, use MedicalScholarlyArticle to tag the overall article, not this type. Note also: the organization making the recommendation should be
 * captured in the recognizingAuthority base property of MedicalEntity.
 */

namespace Vnetby\Schemaorg\Types\Thing\MedicalEntity\MedicalGuideline;

class MedicalGuideline extends \Vnetby\Schemaorg\Types\Thing\MedicalEntity\MedicalEntity
{
    const TYPE = 'MedicalGuideline';

    /**
     * Strength of evidence of the data used to formulate the guideline (enumerated).
     * @var \Vnetby\Schemaorg\Types\Thing\Intangible\Enumeration\MedicalEnumeration\MedicalEvidenceLevel\MedicalEvidenceLevel
     */
    public $evidenceLevel;

    /**
     * The medical conditions, treatments, etc. that are the subject of the guideline.
     * @var \Vnetby\Schemaorg\Types\Thing\MedicalEntity\MedicalEntity
     */
    public $guidelineSubject;

    /**
     * Source of the data used to formulate the guidance, e.g. RCT, consensus opinion, etc.
     * @var string|\Vnetby\Schemaorg\DataTypes\DataText
     */
    public $evidenceOrigin;

    /**
     * Date on which this guideline's recommendation was made.
     * @var string|\Vnetby\Schemaorg\DataTypes\DataDate
     */
    public $guidelineDate;

    /**
     * Strength of evidence of the data used to formulate the guideline (enumerated).
     * @param \Vnetby\Schemaorg\Types\Thing\Intangible\Enumeration\MedicalEnumeration\MedicalEvidenceLevel\MedicalEvidenceLevel $value
     * @return static
     */
    function setEvidenceLevel($value)
    {
        return $this->setProp('evidenceLevel', $value);
    }

    /**
     * The medical conditions, treatments, etc. that are the subject of the guideline.
     * @param \Vnetby\Schemaorg\Types\Thing\MedicalEntity\MedicalEntity $value
     * @return static
     */
    function setGuidelineSubject($value)
    {
        return $this->setProp('guidelineSubject', $value);
    }

    /**
     * Source of the data used to formulate the guidance, e.g. RCT, consensus opinion, etc.
     * @param string|\Vnetby\Schemaorg\DataTypes\DataText $value
     * @return static
     */
    function setEvidenceOrigin($value)
    {
        return $this->setProp('evidenceOrigin', $value);
    }

    /**
     * Date on which this guideline's recommendation was made.
     * @param string|\Vnetby\Schemaorg\DataTypes\DataDate $value
     * @return static
     */
    function setGuidelineDate($value)
    {
        return $this->setProp('guidelineDate', $value);
    }

    /**
     * Strength of evidence of the data used to formulate the guideline (enumerated).
     * @return \Vnetby\Schemaorg\Types\Thing\Intangible\Enumeration\MedicalEnumeration\MedicalEvidenceLevel\MedicalEvidenceLevel|null
     */
    function getEvidenceLevel()
    {
        return $this->getProp('evidenceLevel');
    }

    /**
     * The medical conditions, treatments, etc. that are the subject of the guideline.
     * @return \Vnetby\Schemaorg\Types\Thing\MedicalEntity\MedicalEntity|null
     */
    function getGuidelineSubject()
    {
        return $this->getProp('guidelineSubject');
    }

    /**
     * Source of the data used to formulate the guidance, e.g. RCT, consensus opinion, etc.
     * @return string|\Vnetby\Schemaorg\DataTypes\DataText|null
     */
    function getEvidenceOrigin()
    {
        return $this->getProp('evidenceOrigin');
    }

    /**
     * Date on which this guideline's recommendation was made.
     * @return string|\Vnetby\Schemaorg\DataTypes\DataDate|null
     */
    function getGuidelineDate()
    {
        return $this->getProp('guidelineDate');
    }
}
