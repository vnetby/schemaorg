<?php

/**
 * @see https://schema.org/MedicalStudy
 * A medical study is an umbrella type covering all kinds of research studies relating to human medicine or health, including observational
 * studies and interventional trials and registries, randomized, controlled or not. When the specific type of study is known, use one of
 * the extensions of this type, such as MedicalTrial or MedicalObservationalStudy. Also, note that this type should be used to mark up
 * data that describes the study itself; to tag an article that publishes the results of a study, use MedicalScholarlyArticle. Note: use
 * the code property of MedicalEntity to store study IDs, e.g. clinicaltrials.gov ID.
 */

namespace Vnetby\Schemaorg\Types\Thing\MedicalEntity\MedicalStudy;

class MedicalStudy extends \Vnetby\Schemaorg\Types\Thing\MedicalEntity\MedicalEntity
{
    const TYPE = 'MedicalStudy';

    /**
     * A person or organization that supports a thing through a pledge, promise, or financial contribution. E.g. a sponsor of a Medical
     * Study or a corporate sponsor of an event.
     * @var \Vnetby\Schemaorg\Types\Thing\Person\Person|\Vnetby\Schemaorg\Types\Thing\Organization\Organization
     */
    public $sponsor;

    /**
     * A subject of the study, i.e. one of the medical conditions, therapies, devices, drugs, etc. investigated by the study.
     * @var \Vnetby\Schemaorg\Types\Thing\MedicalEntity\MedicalEntity
     */
    public $studySubject;

    /**
     * Specifying the health condition(s) of a patient, medical study, or other target audience.
     * @var \Vnetby\Schemaorg\Types\Thing\MedicalEntity\MedicalCondition\MedicalCondition
     */
    public $healthCondition;

    /**
     * The status of the study (enumerated).
     * @var string|\Vnetby\Schemaorg\Types\Thing\Intangible\Enumeration\MedicalEnumeration\MedicalStudyStatus\MedicalStudyStatus|\Vnetby\Schemaorg\DataTypes\DataText|\Vnetby\Schemaorg\Types\Thing\Intangible\Enumeration\StatusEnumeration\EventStatusType\EventStatusType
     */
    public $status;

    /**
     * The location in which the study is taking/took place.
     * @var \Vnetby\Schemaorg\Types\Thing\Place\AdministrativeArea\AdministrativeArea
     */
    public $studyLocation;

    /**
     * A person or organization that supports a thing through a pledge, promise, or financial contribution. E.g. a sponsor of a Medical
     * Study or a corporate sponsor of an event.
     * @param \Vnetby\Schemaorg\Types\Thing\Person\Person|\Vnetby\Schemaorg\Types\Thing\Organization\Organization $value
     * @return static
     */
    function setSponsor($value)
    {
        return $this->setProp('sponsor', $value);
    }

    /**
     * A subject of the study, i.e. one of the medical conditions, therapies, devices, drugs, etc. investigated by the study.
     * @param \Vnetby\Schemaorg\Types\Thing\MedicalEntity\MedicalEntity $value
     * @return static
     */
    function setStudySubject($value)
    {
        return $this->setProp('studySubject', $value);
    }

    /**
     * Specifying the health condition(s) of a patient, medical study, or other target audience.
     * @param \Vnetby\Schemaorg\Types\Thing\MedicalEntity\MedicalCondition\MedicalCondition $value
     * @return static
     */
    function setHealthCondition($value)
    {
        return $this->setProp('healthCondition', $value);
    }

    /**
     * The status of the study (enumerated).
     * @param string|\Vnetby\Schemaorg\Types\Thing\Intangible\Enumeration\MedicalEnumeration\MedicalStudyStatus\MedicalStudyStatus|\Vnetby\Schemaorg\DataTypes\DataText|\Vnetby\Schemaorg\Types\Thing\Intangible\Enumeration\StatusEnumeration\EventStatusType\EventStatusType $value
     * @return static
     */
    function setStatus($value)
    {
        return $this->setProp('status', $value);
    }

    /**
     * The location in which the study is taking/took place.
     * @param \Vnetby\Schemaorg\Types\Thing\Place\AdministrativeArea\AdministrativeArea $value
     * @return static
     */
    function setStudyLocation($value)
    {
        return $this->setProp('studyLocation', $value);
    }

    /**
     * A person or organization that supports a thing through a pledge, promise, or financial contribution. E.g. a sponsor of a Medical
     * Study or a corporate sponsor of an event.
     * @return \Vnetby\Schemaorg\Types\Thing\Person\Person|\Vnetby\Schemaorg\Types\Thing\Organization\Organization|null
     */
    function getSponsor()
    {
        return $this->getProp('sponsor');
    }

    /**
     * A subject of the study, i.e. one of the medical conditions, therapies, devices, drugs, etc. investigated by the study.
     * @return \Vnetby\Schemaorg\Types\Thing\MedicalEntity\MedicalEntity|null
     */
    function getStudySubject()
    {
        return $this->getProp('studySubject');
    }

    /**
     * Specifying the health condition(s) of a patient, medical study, or other target audience.
     * @return \Vnetby\Schemaorg\Types\Thing\MedicalEntity\MedicalCondition\MedicalCondition|null
     */
    function getHealthCondition()
    {
        return $this->getProp('healthCondition');
    }

    /**
     * The status of the study (enumerated).
     * @return string|\Vnetby\Schemaorg\Types\Thing\Intangible\Enumeration\MedicalEnumeration\MedicalStudyStatus\MedicalStudyStatus|\Vnetby\Schemaorg\DataTypes\DataText|\Vnetby\Schemaorg\Types\Thing\Intangible\Enumeration\StatusEnumeration\EventStatusType\EventStatusType|null
     */
    function getStatus()
    {
        return $this->getProp('status');
    }

    /**
     * The location in which the study is taking/took place.
     * @return \Vnetby\Schemaorg\Types\Thing\Place\AdministrativeArea\AdministrativeArea|null
     */
    function getStudyLocation()
    {
        return $this->getProp('studyLocation');
    }
}
