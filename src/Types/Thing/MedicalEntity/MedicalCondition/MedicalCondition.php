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
    public $typicalTest;

    /**
     * The expected progression of the condition if it is not treated and allowed to progress naturally.
     * @var string|\Vnetby\Schemaorg\DataTypes\DataText
     */
    public $naturalProgression;

    /**
     * A possible treatment to address this condition, sign or symptom.
     * @var \Vnetby\Schemaorg\Types\Thing\MedicalEntity\MedicalProcedure\TherapeuticProcedure\MedicalTherapy\MedicalTherapy
     */
    public $possibleTreatment;

    /**
     * A possible unexpected and unfavorable evolution of a medical condition. Complications may include worsening of the signs or symptoms of the
     * disease, extension of the condition to other organ systems, etc.
     * @var string|\Vnetby\Schemaorg\DataTypes\DataText
     */
    public $possibleComplication;

    /**
     * The anatomy of the underlying organ system or structures associated with this entity.
     * @var \Vnetby\Schemaorg\Types\Thing\MedicalEntity\AnatomicalSystem|\Vnetby\Schemaorg\Types\Thing\MedicalEntity\AnatomicalStructure\AnatomicalStructure|\Vnetby\Schemaorg\Types\Thing\MedicalEntity\SuperficialAnatomy
     */
    public $associatedAnatomy;

    /**
     * Specifying a drug or medicine used in a medication procedure.
     * @var \Vnetby\Schemaorg\Types\Thing\MedicalEntity\Substance\Drug
     */
    public $drug;

    /**
     * A preventative therapy used to prevent reoccurrence of the medical condition after an initial episode of the condition.
     * @var \Vnetby\Schemaorg\Types\Thing\MedicalEntity\MedicalProcedure\TherapeuticProcedure\MedicalTherapy\MedicalTherapy
     */
    public $secondaryPrevention;

    /**
     * The status of the study (enumerated).
     * @var string|\Vnetby\Schemaorg\Types\Thing\Intangible\Enumeration\StatusEnumeration\EventStatusType\EventStatusType|\Vnetby\Schemaorg\DataTypes\DataText|\Vnetby\Schemaorg\Types\Thing\Intangible\Enumeration\MedicalEnumeration\MedicalStudyStatus\MedicalStudyStatus
     */
    public $status;

    /**
     * Changes in the normal mechanical, physical, and biochemical functions that are associated with this activity or condition.
     * @var string|\Vnetby\Schemaorg\DataTypes\DataText
     */
    public $pathophysiology;

    /**
     * One of a set of differential diagnoses for the condition. Specifically, a closely-related or competing diagnosis typically considered later in the
     * cognitive process whereby this medical condition is distinguished from others most likely responsible for a similar collection of signs and symptoms
     * to reach the most parsimonious diagnosis or diagnoses in a patient.
     * @var \Vnetby\Schemaorg\Types\Thing\MedicalEntity\MedicalIntangible\DDxElement
     */
    public $differentialDiagnosis;

    /**
     * A modifiable or non-modifiable factor that increases the risk of a patient contracting this condition, e.g. age, coexisting condition.
     * @var \Vnetby\Schemaorg\Types\Thing\MedicalEntity\MedicalRiskFactor
     */
    public $riskFactor;

    /**
     * A sign or symptom of this condition. Signs are objective or physically observable manifestations of the medical condition while symptoms are
     * the subjective experience of the medical condition.
     * @var \Vnetby\Schemaorg\Types\Thing\MedicalEntity\MedicalCondition\MedicalSignOrSymptom\MedicalSignOrSymptom
     */
    public $signOrSymptom;

    /**
     * The stage of the condition, if applicable.
     * @var \Vnetby\Schemaorg\Types\Thing\MedicalEntity\MedicalIntangible\MedicalConditionStage
     */
    public $stage;

    /**
     * The likely outcome in either the short term or long term of the medical condition.
     * @var string|\Vnetby\Schemaorg\DataTypes\DataText
     */
    public $expectedPrognosis;

    /**
     * The characteristics of associated patients, such as age, gender, race etc.
     * @var string|\Vnetby\Schemaorg\DataTypes\DataText
     */
    public $epidemiology;

    /**
     * A preventative therapy used to prevent an initial occurrence of the medical condition, such as vaccination.
     * @var \Vnetby\Schemaorg\Types\Thing\MedicalEntity\MedicalProcedure\TherapeuticProcedure\MedicalTherapy\MedicalTherapy
     */
    public $primaryPrevention;

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
     * The expected progression of the condition if it is not treated and allowed to progress naturally.
     * @param string|\Vnetby\Schemaorg\DataTypes\DataText $value
     * @return static
     */
    function setNaturalProgression($value)
    {
        return $this->setProp('naturalProgression', $value);
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
     * A possible unexpected and unfavorable evolution of a medical condition. Complications may include worsening of the signs or symptoms of the
     * disease, extension of the condition to other organ systems, etc.
     * @param string|\Vnetby\Schemaorg\DataTypes\DataText $value
     * @return static
     */
    function setPossibleComplication($value)
    {
        return $this->setProp('possibleComplication', $value);
    }

    /**
     * The anatomy of the underlying organ system or structures associated with this entity.
     * @param \Vnetby\Schemaorg\Types\Thing\MedicalEntity\AnatomicalSystem|\Vnetby\Schemaorg\Types\Thing\MedicalEntity\AnatomicalStructure\AnatomicalStructure|\Vnetby\Schemaorg\Types\Thing\MedicalEntity\SuperficialAnatomy $value
     * @return static
     */
    function setAssociatedAnatomy($value)
    {
        return $this->setProp('associatedAnatomy', $value);
    }

    /**
     * Specifying a drug or medicine used in a medication procedure.
     * @param \Vnetby\Schemaorg\Types\Thing\MedicalEntity\Substance\Drug $value
     * @return static
     */
    function setDrug($value)
    {
        return $this->setProp('drug', $value);
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
     * The status of the study (enumerated).
     * @param string|\Vnetby\Schemaorg\Types\Thing\Intangible\Enumeration\StatusEnumeration\EventStatusType\EventStatusType|\Vnetby\Schemaorg\DataTypes\DataText|\Vnetby\Schemaorg\Types\Thing\Intangible\Enumeration\MedicalEnumeration\MedicalStudyStatus\MedicalStudyStatus $value
     * @return static
     */
    function setStatus($value)
    {
        return $this->setProp('status', $value);
    }

    /**
     * Changes in the normal mechanical, physical, and biochemical functions that are associated with this activity or condition.
     * @param string|\Vnetby\Schemaorg\DataTypes\DataText $value
     * @return static
     */
    function setPathophysiology($value)
    {
        return $this->setProp('pathophysiology', $value);
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
     * The stage of the condition, if applicable.
     * @param \Vnetby\Schemaorg\Types\Thing\MedicalEntity\MedicalIntangible\MedicalConditionStage $value
     * @return static
     */
    function setStage($value)
    {
        return $this->setProp('stage', $value);
    }

    /**
     * The likely outcome in either the short term or long term of the medical condition.
     * @param string|\Vnetby\Schemaorg\DataTypes\DataText $value
     * @return static
     */
    function setExpectedPrognosis($value)
    {
        return $this->setProp('expectedPrognosis', $value);
    }

    /**
     * The characteristics of associated patients, such as age, gender, race etc.
     * @param string|\Vnetby\Schemaorg\DataTypes\DataText $value
     * @return static
     */
    function setEpidemiology($value)
    {
        return $this->setProp('epidemiology', $value);
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
     * A medical test typically performed given this condition.
     * @return \Vnetby\Schemaorg\Types\Thing\MedicalEntity\MedicalTest\MedicalTest|null
     */
    function getTypicalTest()
    {
        return $this->getProp('typicalTest');
    }

    /**
     * The expected progression of the condition if it is not treated and allowed to progress naturally.
     * @return string|\Vnetby\Schemaorg\DataTypes\DataText|null
     */
    function getNaturalProgression()
    {
        return $this->getProp('naturalProgression');
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
     * A possible unexpected and unfavorable evolution of a medical condition. Complications may include worsening of the signs or symptoms of the
     * disease, extension of the condition to other organ systems, etc.
     * @return string|\Vnetby\Schemaorg\DataTypes\DataText|null
     */
    function getPossibleComplication()
    {
        return $this->getProp('possibleComplication');
    }

    /**
     * The anatomy of the underlying organ system or structures associated with this entity.
     * @return \Vnetby\Schemaorg\Types\Thing\MedicalEntity\AnatomicalSystem|\Vnetby\Schemaorg\Types\Thing\MedicalEntity\AnatomicalStructure\AnatomicalStructure|\Vnetby\Schemaorg\Types\Thing\MedicalEntity\SuperficialAnatomy|null
     */
    function getAssociatedAnatomy()
    {
        return $this->getProp('associatedAnatomy');
    }

    /**
     * Specifying a drug or medicine used in a medication procedure.
     * @return \Vnetby\Schemaorg\Types\Thing\MedicalEntity\Substance\Drug|null
     */
    function getDrug()
    {
        return $this->getProp('drug');
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
     * The status of the study (enumerated).
     * @return string|\Vnetby\Schemaorg\Types\Thing\Intangible\Enumeration\StatusEnumeration\EventStatusType\EventStatusType|\Vnetby\Schemaorg\DataTypes\DataText|\Vnetby\Schemaorg\Types\Thing\Intangible\Enumeration\MedicalEnumeration\MedicalStudyStatus\MedicalStudyStatus|null
     */
    function getStatus()
    {
        return $this->getProp('status');
    }

    /**
     * Changes in the normal mechanical, physical, and biochemical functions that are associated with this activity or condition.
     * @return string|\Vnetby\Schemaorg\DataTypes\DataText|null
     */
    function getPathophysiology()
    {
        return $this->getProp('pathophysiology');
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
     * The stage of the condition, if applicable.
     * @return \Vnetby\Schemaorg\Types\Thing\MedicalEntity\MedicalIntangible\MedicalConditionStage|null
     */
    function getStage()
    {
        return $this->getProp('stage');
    }

    /**
     * The likely outcome in either the short term or long term of the medical condition.
     * @return string|\Vnetby\Schemaorg\DataTypes\DataText|null
     */
    function getExpectedPrognosis()
    {
        return $this->getProp('expectedPrognosis');
    }

    /**
     * The characteristics of associated patients, such as age, gender, race etc.
     * @return string|\Vnetby\Schemaorg\DataTypes\DataText|null
     */
    function getEpidemiology()
    {
        return $this->getProp('epidemiology');
    }

    /**
     * A preventative therapy used to prevent an initial occurrence of the medical condition, such as vaccination.
     * @return \Vnetby\Schemaorg\Types\Thing\MedicalEntity\MedicalProcedure\TherapeuticProcedure\MedicalTherapy\MedicalTherapy|null
     */
    function getPrimaryPrevention()
    {
        return $this->getProp('primaryPrevention');
    }
}
