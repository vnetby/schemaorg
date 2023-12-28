<?php

/**
 * @see https://schema.org/MedicalCondition
 * Any condition of the human body that affects the normal functioning of a person, whether physically or mentally. Includes diseases, injuries,
 * disabilities, disorders, syndromes, etc.
 */

namespace Vnetby\Schemaorg\Types\Thing\MedicalEntity\MedicalCondition;

class MedicalCondition extends \Vnetby\Schemaorg\Types\Thing\MedicalEntity\MedicalEntity
{
    const TYPE = 'MedicalCondition';

    /**
     * A medical test typically performed given this condition.
     * @var \Vnetby\Schemaorg\Types\Thing\MedicalEntity\MedicalTest\MedicalTest
     */
    protected $prop_typicalTest;

    /**
     * One of a set of differential diagnoses for the condition. Specifically, a closely-related or competing diagnosis typically considered later in the
     * cognitive process whereby this medical condition is distinguished from others most likely responsible for a similar collection of signs and symptoms
     * to reach the most parsimonious diagnosis or diagnoses in a patient.
     * @var \Vnetby\Schemaorg\Types\Thing\MedicalEntity\MedicalIntangible\DDxElement
     */
    protected $prop_differentialDiagnosis;

    /**
     * A preventative therapy used to prevent reoccurrence of the medical condition after an initial episode of the condition.
     * @var \Vnetby\Schemaorg\Types\Thing\MedicalEntity\MedicalProcedure\TherapeuticProcedure\MedicalTherapy\MedicalTherapy
     */
    protected $prop_secondaryPrevention;

    /**
     * The likely outcome in either the short term or long term of the medical condition.
     * @var \Vnetby\Schemaorg\DataTypes\DataText
     */
    protected $prop_expectedPrognosis;

    /**
     * The stage of the condition, if applicable.
     * @var \Vnetby\Schemaorg\Types\Thing\MedicalEntity\MedicalIntangible\MedicalConditionStage
     */
    protected $prop_stage;

    /**
     * A possible treatment to address this condition, sign or symptom.
     * @var \Vnetby\Schemaorg\Types\Thing\MedicalEntity\MedicalProcedure\TherapeuticProcedure\MedicalTherapy\MedicalTherapy
     */
    protected $prop_possibleTreatment;

    /**
     * A preventative therapy used to prevent an initial occurrence of the medical condition, such as vaccination.
     * @var \Vnetby\Schemaorg\Types\Thing\MedicalEntity\MedicalProcedure\TherapeuticProcedure\MedicalTherapy\MedicalTherapy
     */
    protected $prop_primaryPrevention;

    /**
     * The status of the study (enumerated).
     * @var \Vnetby\Schemaorg\Types\Thing\Intangible\Enumeration\MedicalEnumeration\MedicalStudyStatus\MedicalStudyStatus|\Vnetby\Schemaorg\DataTypes\DataText|\Vnetby\Schemaorg\Types\Thing\Intangible\Enumeration\StatusEnumeration\EventStatusType\EventStatusType
     */
    protected $prop_status;

    /**
     * Specifying a drug or medicine used in a medication procedure.
     * @var \Vnetby\Schemaorg\Types\Thing\Product\Drug
     */
    protected $prop_drug;

    /**
     * The anatomy of the underlying organ system or structures associated with this entity.
     * @var \Vnetby\Schemaorg\Types\Thing\MedicalEntity\AnatomicalSystem|\Vnetby\Schemaorg\Types\Thing\MedicalEntity\SuperficialAnatomy|\Vnetby\Schemaorg\Types\Thing\MedicalEntity\AnatomicalStructure\AnatomicalStructure
     */
    protected $prop_associatedAnatomy;

    /**
     * A possible unexpected and unfavorable evolution of a medical condition. Complications may include worsening of the signs or symptoms of the
     * disease, extension of the condition to other organ systems, etc.
     * @var \Vnetby\Schemaorg\DataTypes\DataText
     */
    protected $prop_possibleComplication;

    /**
     * A modifiable or non-modifiable factor that increases the risk of a patient contracting this condition, e.g. age, coexisting condition.
     * @var \Vnetby\Schemaorg\Types\Thing\MedicalEntity\MedicalRiskFactor
     */
    protected $prop_riskFactor;

    /**
     * A sign or symptom of this condition. Signs are objective or physically observable manifestations of the medical condition while symptoms are
     * the subjective experience of the medical condition.
     * @var \Vnetby\Schemaorg\Types\Thing\MedicalEntity\MedicalCondition\MedicalSignOrSymptom\MedicalSignOrSymptom
     */
    protected $prop_signOrSymptom;

    /**
     * Changes in the normal mechanical, physical, and biochemical functions that are associated with this activity or condition.
     * @var \Vnetby\Schemaorg\DataTypes\DataText
     */
    protected $prop_pathophysiology;

    /**
     * The expected progression of the condition if it is not treated and allowed to progress naturally.
     * @var \Vnetby\Schemaorg\DataTypes\DataText
     */
    protected $prop_naturalProgression;

    /**
     * The characteristics of associated patients, such as age, gender, race etc.
     * @var \Vnetby\Schemaorg\DataTypes\DataText
     */
    protected $prop_epidemiology;

    /**
     * A medical test typically performed given this condition.
     * @param \Vnetby\Schemaorg\Types\Thing\MedicalEntity\MedicalTest\MedicalTest $value
     * @return static
     */
    function setTypicalTest($value)
    {
        return $this->setProp('typicalTest', $value);
    }

    /**
     * One of a set of differential diagnoses for the condition. Specifically, a closely-related or competing diagnosis typically considered later in the
     * cognitive process whereby this medical condition is distinguished from others most likely responsible for a similar collection of signs and symptoms
     * to reach the most parsimonious diagnosis or diagnoses in a patient.
     * @param \Vnetby\Schemaorg\Types\Thing\MedicalEntity\MedicalIntangible\DDxElement $value
     * @return static
     */
    function setDifferentialDiagnosis($value)
    {
        return $this->setProp('differentialDiagnosis', $value);
    }

    /**
     * A preventative therapy used to prevent reoccurrence of the medical condition after an initial episode of the condition.
     * @param \Vnetby\Schemaorg\Types\Thing\MedicalEntity\MedicalProcedure\TherapeuticProcedure\MedicalTherapy\MedicalTherapy $value
     * @return static
     */
    function setSecondaryPrevention($value)
    {
        return $this->setProp('secondaryPrevention', $value);
    }

    /**
     * The likely outcome in either the short term or long term of the medical condition.
     * @param \Vnetby\Schemaorg\DataTypes\DataText $value
     * @return static
     */
    function setExpectedPrognosis($value)
    {
        return $this->setProp('expectedPrognosis', $value);
    }

    /**
     * The stage of the condition, if applicable.
     * @param \Vnetby\Schemaorg\Types\Thing\MedicalEntity\MedicalIntangible\MedicalConditionStage $value
     * @return static
     */
    function setStage($value)
    {
        return $this->setProp('stage', $value);
    }

    /**
     * A possible treatment to address this condition, sign or symptom.
     * @param \Vnetby\Schemaorg\Types\Thing\MedicalEntity\MedicalProcedure\TherapeuticProcedure\MedicalTherapy\MedicalTherapy $value
     * @return static
     */
    function setPossibleTreatment($value)
    {
        return $this->setProp('possibleTreatment', $value);
    }

    /**
     * A preventative therapy used to prevent an initial occurrence of the medical condition, such as vaccination.
     * @param \Vnetby\Schemaorg\Types\Thing\MedicalEntity\MedicalProcedure\TherapeuticProcedure\MedicalTherapy\MedicalTherapy $value
     * @return static
     */
    function setPrimaryPrevention($value)
    {
        return $this->setProp('primaryPrevention', $value);
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
     * Specifying a drug or medicine used in a medication procedure.
     * @param \Vnetby\Schemaorg\Types\Thing\Product\Drug $value
     * @return static
     */
    function setDrug($value)
    {
        return $this->setProp('drug', $value);
    }

    /**
     * The anatomy of the underlying organ system or structures associated with this entity.
     * @param \Vnetby\Schemaorg\Types\Thing\MedicalEntity\AnatomicalSystem|\Vnetby\Schemaorg\Types\Thing\MedicalEntity\SuperficialAnatomy|\Vnetby\Schemaorg\Types\Thing\MedicalEntity\AnatomicalStructure\AnatomicalStructure $value
     * @return static
     */
    function setAssociatedAnatomy($value)
    {
        return $this->setProp('associatedAnatomy', $value);
    }

    /**
     * A possible unexpected and unfavorable evolution of a medical condition. Complications may include worsening of the signs or symptoms of the
     * disease, extension of the condition to other organ systems, etc.
     * @param \Vnetby\Schemaorg\DataTypes\DataText $value
     * @return static
     */
    function setPossibleComplication($value)
    {
        return $this->setProp('possibleComplication', $value);
    }

    /**
     * A modifiable or non-modifiable factor that increases the risk of a patient contracting this condition, e.g. age, coexisting condition.
     * @param \Vnetby\Schemaorg\Types\Thing\MedicalEntity\MedicalRiskFactor $value
     * @return static
     */
    function setRiskFactor($value)
    {
        return $this->setProp('riskFactor', $value);
    }

    /**
     * A sign or symptom of this condition. Signs are objective or physically observable manifestations of the medical condition while symptoms are
     * the subjective experience of the medical condition.
     * @param \Vnetby\Schemaorg\Types\Thing\MedicalEntity\MedicalCondition\MedicalSignOrSymptom\MedicalSignOrSymptom $value
     * @return static
     */
    function setSignOrSymptom($value)
    {
        return $this->setProp('signOrSymptom', $value);
    }

    /**
     * Changes in the normal mechanical, physical, and biochemical functions that are associated with this activity or condition.
     * @param \Vnetby\Schemaorg\DataTypes\DataText $value
     * @return static
     */
    function setPathophysiology($value)
    {
        return $this->setProp('pathophysiology', $value);
    }

    /**
     * The expected progression of the condition if it is not treated and allowed to progress naturally.
     * @param \Vnetby\Schemaorg\DataTypes\DataText $value
     * @return static
     */
    function setNaturalProgression($value)
    {
        return $this->setProp('naturalProgression', $value);
    }

    /**
     * The characteristics of associated patients, such as age, gender, race etc.
     * @param \Vnetby\Schemaorg\DataTypes\DataText $value
     * @return static
     */
    function setEpidemiology($value)
    {
        return $this->setProp('epidemiology', $value);
    }

    /**
     * A medical test typically performed given this condition.
     * @return \Vnetby\Schemaorg\Types\Thing\MedicalEntity\MedicalTest\MedicalTest|null
     */
    function getTypicalTest()
    {
        return $this->getProp('typicalTest');
    }

    /**
     * One of a set of differential diagnoses for the condition. Specifically, a closely-related or competing diagnosis typically considered later in the
     * cognitive process whereby this medical condition is distinguished from others most likely responsible for a similar collection of signs and symptoms
     * to reach the most parsimonious diagnosis or diagnoses in a patient.
     * @return \Vnetby\Schemaorg\Types\Thing\MedicalEntity\MedicalIntangible\DDxElement|null
     */
    function getDifferentialDiagnosis()
    {
        return $this->getProp('differentialDiagnosis');
    }

    /**
     * A preventative therapy used to prevent reoccurrence of the medical condition after an initial episode of the condition.
     * @return \Vnetby\Schemaorg\Types\Thing\MedicalEntity\MedicalProcedure\TherapeuticProcedure\MedicalTherapy\MedicalTherapy|null
     */
    function getSecondaryPrevention()
    {
        return $this->getProp('secondaryPrevention');
    }

    /**
     * The likely outcome in either the short term or long term of the medical condition.
     * @return \Vnetby\Schemaorg\DataTypes\DataText|null
     */
    function getExpectedPrognosis()
    {
        return $this->getProp('expectedPrognosis');
    }

    /**
     * The stage of the condition, if applicable.
     * @return \Vnetby\Schemaorg\Types\Thing\MedicalEntity\MedicalIntangible\MedicalConditionStage|null
     */
    function getStage()
    {
        return $this->getProp('stage');
    }

    /**
     * A possible treatment to address this condition, sign or symptom.
     * @return \Vnetby\Schemaorg\Types\Thing\MedicalEntity\MedicalProcedure\TherapeuticProcedure\MedicalTherapy\MedicalTherapy|null
     */
    function getPossibleTreatment()
    {
        return $this->getProp('possibleTreatment');
    }

    /**
     * A preventative therapy used to prevent an initial occurrence of the medical condition, such as vaccination.
     * @return \Vnetby\Schemaorg\Types\Thing\MedicalEntity\MedicalProcedure\TherapeuticProcedure\MedicalTherapy\MedicalTherapy|null
     */
    function getPrimaryPrevention()
    {
        return $this->getProp('primaryPrevention');
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
     * Specifying a drug or medicine used in a medication procedure.
     * @return \Vnetby\Schemaorg\Types\Thing\Product\Drug|null
     */
    function getDrug()
    {
        return $this->getProp('drug');
    }

    /**
     * The anatomy of the underlying organ system or structures associated with this entity.
     * @return \Vnetby\Schemaorg\Types\Thing\MedicalEntity\AnatomicalSystem|\Vnetby\Schemaorg\Types\Thing\MedicalEntity\SuperficialAnatomy|\Vnetby\Schemaorg\Types\Thing\MedicalEntity\AnatomicalStructure\AnatomicalStructure|null
     */
    function getAssociatedAnatomy()
    {
        return $this->getProp('associatedAnatomy');
    }

    /**
     * A possible unexpected and unfavorable evolution of a medical condition. Complications may include worsening of the signs or symptoms of the
     * disease, extension of the condition to other organ systems, etc.
     * @return \Vnetby\Schemaorg\DataTypes\DataText|null
     */
    function getPossibleComplication()
    {
        return $this->getProp('possibleComplication');
    }

    /**
     * A modifiable or non-modifiable factor that increases the risk of a patient contracting this condition, e.g. age, coexisting condition.
     * @return \Vnetby\Schemaorg\Types\Thing\MedicalEntity\MedicalRiskFactor|null
     */
    function getRiskFactor()
    {
        return $this->getProp('riskFactor');
    }

    /**
     * A sign or symptom of this condition. Signs are objective or physically observable manifestations of the medical condition while symptoms are
     * the subjective experience of the medical condition.
     * @return \Vnetby\Schemaorg\Types\Thing\MedicalEntity\MedicalCondition\MedicalSignOrSymptom\MedicalSignOrSymptom|null
     */
    function getSignOrSymptom()
    {
        return $this->getProp('signOrSymptom');
    }

    /**
     * Changes in the normal mechanical, physical, and biochemical functions that are associated with this activity or condition.
     * @return \Vnetby\Schemaorg\DataTypes\DataText|null
     */
    function getPathophysiology()
    {
        return $this->getProp('pathophysiology');
    }

    /**
     * The expected progression of the condition if it is not treated and allowed to progress naturally.
     * @return \Vnetby\Schemaorg\DataTypes\DataText|null
     */
    function getNaturalProgression()
    {
        return $this->getProp('naturalProgression');
    }

    /**
     * The characteristics of associated patients, such as age, gender, race etc.
     * @return \Vnetby\Schemaorg\DataTypes\DataText|null
     */
    function getEpidemiology()
    {
        return $this->getProp('epidemiology');
    }
}
