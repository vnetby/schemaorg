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
     * The type of procedure, for example Surgical, Noninvasive, or Percutaneous.
     * @var \Vnetby\Schemaorg\Types\Thing\Intangible\Enumeration\MedicalEnumeration\MedicalProcedureType\MedicalProcedureType
     */
    public $procedureType;

    /**
     * Typical or recommended followup care after the procedure is performed.
     * @var string|\Vnetby\Schemaorg\DataTypes\DataText
     */
    public $followup;

    /**
     * Location in the body of the anatomical structure.
     * @var string|\Vnetby\Schemaorg\DataTypes\DataText
     */
    public $bodyLocation;

    /**
     * The status of the study (enumerated).
     * @var string|\Vnetby\Schemaorg\Types\Thing\Intangible\Enumeration\StatusEnumeration\EventStatusType\EventStatusType|\Vnetby\Schemaorg\DataTypes\DataText|\Vnetby\Schemaorg\Types\Thing\Intangible\Enumeration\MedicalEnumeration\MedicalStudyStatus\MedicalStudyStatus
     */
    public $status;

    /**
     * How the procedure is performed.
     * @var string|\Vnetby\Schemaorg\DataTypes\DataText
     */
    public $howPerformed;

    /**
     * Typical preparation that a patient must undergo before having the procedure performed.
     * @var string|\Vnetby\Schemaorg\DataTypes\DataText|\Vnetby\Schemaorg\Types\Thing\MedicalEntity\MedicalEntity
     */
    public $preparation;

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
     * Typical or recommended followup care after the procedure is performed.
     * @param string|\Vnetby\Schemaorg\DataTypes\DataText $value
     * @return static
     */
    function setFollowup($value)
    {
        return $this->setProp('followup', $value);
    }

    /**
     * Location in the body of the anatomical structure.
     * @param string|\Vnetby\Schemaorg\DataTypes\DataText $value
     * @return static
     */
    function setBodyLocation($value)
    {
        return $this->setProp('bodyLocation', $value);
    }

    /**
     * The status of the study (enumerated).
     * @param string|\Vnetby\Schemaorg\Types\Thing\Intangible\Enumeration\StatusEnumeration\EventStatusType\EventStatusType|\Vnetby\Schemaorg\DataTypes\DataText|\Vnetby\Schemaorg\Types\Thing\Intangible\Enumeration\MedicalEnumeration\MedicalStudyStatus\MedicalStudyStatus $value
     * @return static
     */
    function setStatus($value)
    {
        return $this->setProp('status', $value);
    }

    /**
     * How the procedure is performed.
     * @param string|\Vnetby\Schemaorg\DataTypes\DataText $value
     * @return static
     */
    function setHowPerformed($value)
    {
        return $this->setProp('howPerformed', $value);
    }

    /**
     * Typical preparation that a patient must undergo before having the procedure performed.
     * @param string|\Vnetby\Schemaorg\DataTypes\DataText|\Vnetby\Schemaorg\Types\Thing\MedicalEntity\MedicalEntity $value
     * @return static
     */
    function setPreparation($value)
    {
        return $this->setProp('preparation', $value);
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
     * Typical or recommended followup care after the procedure is performed.
     * @return string|\Vnetby\Schemaorg\DataTypes\DataText|null
     */
    function getFollowup()
    {
        return $this->getProp('followup');
    }

    /**
     * Location in the body of the anatomical structure.
     * @return string|\Vnetby\Schemaorg\DataTypes\DataText|null
     */
    function getBodyLocation()
    {
        return $this->getProp('bodyLocation');
    }

    /**
     * The status of the study (enumerated).
     * @return string|\Vnetby\Schemaorg\Types\Thing\Intangible\Enumeration\StatusEnumeration\EventStatusType\EventStatusType|\Vnetby\Schemaorg\DataTypes\DataText|\Vnetby\Schemaorg\Types\Thing\Intangible\Enumeration\MedicalEnumeration\MedicalStudyStatus\MedicalStudyStatus|null
     */
    function getStatus()
    {
        return $this->getProp('status');
    }

    /**
     * How the procedure is performed.
     * @return string|\Vnetby\Schemaorg\DataTypes\DataText|null
     */
    function getHowPerformed()
    {
        return $this->getProp('howPerformed');
    }

    /**
     * Typical preparation that a patient must undergo before having the procedure performed.
     * @return string|\Vnetby\Schemaorg\DataTypes\DataText|\Vnetby\Schemaorg\Types\Thing\MedicalEntity\MedicalEntity|null
     */
    function getPreparation()
    {
        return $this->getProp('preparation');
    }
}
