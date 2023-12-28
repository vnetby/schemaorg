<?php

/**
 * @see https://schema.org/MedicalProcedure
 * A process of care used in either a diagnostic, therapeutic, preventive or palliative capacity that relies on invasive (surgical), non-invasive, or
 * other techniques.
 */

namespace Vnetby\Schemaorg\Types\Thing\MedicalEntity\MedicalProcedure;

class MedicalProcedure extends \Vnetby\Schemaorg\Types\Thing\MedicalEntity\MedicalEntity
{
    const TYPE = 'MedicalProcedure';

    /**
     * Location in the body of the anatomical structure.
     * @var \Vnetby\Schemaorg\DataTypes\DataText
     */
    protected $prop_bodyLocation;

    /**
     * How the procedure is performed.
     * @var \Vnetby\Schemaorg\DataTypes\DataText
     */
    protected $prop_howPerformed;

    /**
     * The type of procedure, for example Surgical, Noninvasive, or Percutaneous.
     * @var \Vnetby\Schemaorg\Types\Thing\Intangible\Enumeration\MedicalEnumeration\MedicalProcedureType\MedicalProcedureType
     */
    protected $prop_procedureType;

    /**
     * The status of the study (enumerated).
     * @var \Vnetby\Schemaorg\Types\Thing\Intangible\Enumeration\MedicalEnumeration\MedicalStudyStatus\MedicalStudyStatus|\Vnetby\Schemaorg\DataTypes\DataText|\Vnetby\Schemaorg\Types\Thing\Intangible\Enumeration\StatusEnumeration\EventStatusType\EventStatusType
     */
    protected $prop_status;

    /**
     * Typical or recommended followup care after the procedure is performed.
     * @var \Vnetby\Schemaorg\DataTypes\DataText
     */
    protected $prop_followup;

    /**
     * Typical preparation that a patient must undergo before having the procedure performed.
     * @var \Vnetby\Schemaorg\DataTypes\DataText|\Vnetby\Schemaorg\Types\Thing\MedicalEntity\MedicalEntity
     */
    protected $prop_preparation;

    /**
     * Location in the body of the anatomical structure.
     * @param \Vnetby\Schemaorg\DataTypes\DataText $value
     * @return static
     */
    function setBodyLocation($value)
    {
        return $this->setProp('bodyLocation', $value);
    }

    /**
     * How the procedure is performed.
     * @param \Vnetby\Schemaorg\DataTypes\DataText $value
     * @return static
     */
    function setHowPerformed($value)
    {
        return $this->setProp('howPerformed', $value);
    }

    /**
     * The type of procedure, for example Surgical, Noninvasive, or Percutaneous.
     * @param \Vnetby\Schemaorg\Types\Thing\Intangible\Enumeration\MedicalEnumeration\MedicalProcedureType\MedicalProcedureType $value
     * @return static
     */
    function setProcedureType($value)
    {
        return $this->setProp('procedureType', $value);
    }

    /**
     * The status of the study (enumerated).
     * @param \Vnetby\Schemaorg\Types\Thing\Intangible\Enumeration\MedicalEnumeration\MedicalStudyStatus\MedicalStudyStatus|\Vnetby\Schemaorg\DataTypes\DataText|\Vnetby\Schemaorg\Types\Thing\Intangible\Enumeration\StatusEnumeration\EventStatusType\EventStatusType $value
     * @return static
     */
    function setStatus($value)
    {
        return $this->setProp('status', $value);
    }

    /**
     * Typical or recommended followup care after the procedure is performed.
     * @param \Vnetby\Schemaorg\DataTypes\DataText $value
     * @return static
     */
    function setFollowup($value)
    {
        return $this->setProp('followup', $value);
    }

    /**
     * Typical preparation that a patient must undergo before having the procedure performed.
     * @param \Vnetby\Schemaorg\DataTypes\DataText|\Vnetby\Schemaorg\Types\Thing\MedicalEntity\MedicalEntity $value
     * @return static
     */
    function setPreparation($value)
    {
        return $this->setProp('preparation', $value);
    }

    /**
     * Location in the body of the anatomical structure.
     * @return \Vnetby\Schemaorg\DataTypes\DataText|null
     */
    function getBodyLocation()
    {
        return $this->getProp('bodyLocation');
    }

    /**
     * How the procedure is performed.
     * @return \Vnetby\Schemaorg\DataTypes\DataText|null
     */
    function getHowPerformed()
    {
        return $this->getProp('howPerformed');
    }

    /**
     * The type of procedure, for example Surgical, Noninvasive, or Percutaneous.
     * @return \Vnetby\Schemaorg\Types\Thing\Intangible\Enumeration\MedicalEnumeration\MedicalProcedureType\MedicalProcedureType|null
     */
    function getProcedureType()
    {
        return $this->getProp('procedureType');
    }

    /**
     * The status of the study (enumerated).
     * @return \Vnetby\Schemaorg\Types\Thing\Intangible\Enumeration\MedicalEnumeration\MedicalStudyStatus\MedicalStudyStatus|\Vnetby\Schemaorg\DataTypes\DataText|\Vnetby\Schemaorg\Types\Thing\Intangible\Enumeration\StatusEnumeration\EventStatusType\EventStatusType|null
     */
    function getStatus()
    {
        return $this->getProp('status');
    }

    /**
     * Typical or recommended followup care after the procedure is performed.
     * @return \Vnetby\Schemaorg\DataTypes\DataText|null
     */
    function getFollowup()
    {
        return $this->getProp('followup');
    }

    /**
     * Typical preparation that a patient must undergo before having the procedure performed.
     * @return \Vnetby\Schemaorg\DataTypes\DataText|\Vnetby\Schemaorg\Types\Thing\MedicalEntity\MedicalEntity|null
     */
    function getPreparation()
    {
        return $this->getProp('preparation');
    }
}
