<?php

/**
 * @see https://schema.org/DietarySupplement
 * A product taken by mouth that contains a dietary ingredient intended to supplement the diet. Dietary ingredients may include vitamins, minerals,
 * herbs or other botanicals, amino acids, and substances such as enzymes, organ tissues, glandulars and metabolites.
 */

namespace Vnetby\Schemaorg\Types\Thing\MedicalEntity\Substance;

class DietarySupplement extends \Vnetby\Schemaorg\Types\Thing\MedicalEntity\Substance\Substance
{
    const TYPE = 'DietarySupplement';

    /**
     * The specific biochemical interaction through which this drug or supplement produces its pharmacological effect.
     * @var string|\Vnetby\Schemaorg\DataTypes\DataText
     */
    public $mechanismOfAction;

    /**
     * The drug or supplement's legal status, including any controlled substance schedules that apply.
     * @var string|\Vnetby\Schemaorg\Types\Thing\MedicalEntity\MedicalIntangible\DrugLegalStatus|\Vnetby\Schemaorg\Types\Thing\Intangible\Enumeration\MedicalEnumeration\MedicalEnumeration|\Vnetby\Schemaorg\DataTypes\DataText
     */
    public $legalStatus;

    /**
     * An active ingredient, typically chemical compounds and/or biologic substances.
     * @var string|\Vnetby\Schemaorg\DataTypes\DataText
     */
    public $activeIngredient;

    /**
     * Proprietary name given to the diet plan, typically by its originator or creator.
     * @var string|\Vnetby\Schemaorg\DataTypes\DataText
     */
    public $proprietaryName;

    /**
     * Characteristics of the population for which this is intended, or which typically uses it, e.g. 'adults'.
     * @var string|\Vnetby\Schemaorg\DataTypes\DataText
     */
    public $targetPopulation;

    /**
     * Any potential safety concern associated with the supplement. May include interactions with other drugs and foods, pregnancy, breastfeeding, known adverse reactions,
     * and documented efficacy of the supplement.
     * @var string|\Vnetby\Schemaorg\DataTypes\DataText
     */
    public $safetyConsideration;

    /**
     * Recommended intake of this supplement for a given population as defined by a specific recommending authority.
     * @var \Vnetby\Schemaorg\Types\Thing\MedicalEntity\MedicalIntangible\DoseSchedule\RecommendedDoseSchedule
     */
    public $recommendedIntake;

    /**
     * The generic name of this drug or supplement.
     * @var string|\Vnetby\Schemaorg\DataTypes\DataText
     */
    public $nonProprietaryName;

    /**
     * Recommended intake of this supplement for a given population as defined by a specific recommending authority.
     * @var \Vnetby\Schemaorg\Types\Thing\MedicalEntity\MedicalIntangible\DoseSchedule\MaximumDoseSchedule
     */
    public $maximumIntake;

    /**
     * True if this item's name is a proprietary/brand name (vs. generic name).
     * @var bool|\Vnetby\Schemaorg\DataTypes\DataBoolean
     */
    public $isProprietary;

    /**
     * The specific biochemical interaction through which this drug or supplement produces its pharmacological effect.
     * @param string|\Vnetby\Schemaorg\DataTypes\DataText $value
     * @return static
     */
    function setMechanismOfAction($value)
    {
        return $this->setProp('mechanismOfAction', $value);
    }

    /**
     * The drug or supplement's legal status, including any controlled substance schedules that apply.
     * @param string|\Vnetby\Schemaorg\Types\Thing\MedicalEntity\MedicalIntangible\DrugLegalStatus|\Vnetby\Schemaorg\Types\Thing\Intangible\Enumeration\MedicalEnumeration\MedicalEnumeration|\Vnetby\Schemaorg\DataTypes\DataText $value
     * @return static
     */
    function setLegalStatus($value)
    {
        return $this->setProp('legalStatus', $value);
    }

    /**
     * An active ingredient, typically chemical compounds and/or biologic substances.
     * @param string|\Vnetby\Schemaorg\DataTypes\DataText $value
     * @return static
     */
    function setActiveIngredient($value)
    {
        return $this->setProp('activeIngredient', $value);
    }

    /**
     * Proprietary name given to the diet plan, typically by its originator or creator.
     * @param string|\Vnetby\Schemaorg\DataTypes\DataText $value
     * @return static
     */
    function setProprietaryName($value)
    {
        return $this->setProp('proprietaryName', $value);
    }

    /**
     * Characteristics of the population for which this is intended, or which typically uses it, e.g. 'adults'.
     * @param string|\Vnetby\Schemaorg\DataTypes\DataText $value
     * @return static
     */
    function setTargetPopulation($value)
    {
        return $this->setProp('targetPopulation', $value);
    }

    /**
     * Any potential safety concern associated with the supplement. May include interactions with other drugs and foods, pregnancy, breastfeeding, known adverse reactions,
     * and documented efficacy of the supplement.
     * @param string|\Vnetby\Schemaorg\DataTypes\DataText $value
     * @return static
     */
    function setSafetyConsideration($value)
    {
        return $this->setProp('safetyConsideration', $value);
    }

    /**
     * Recommended intake of this supplement for a given population as defined by a specific recommending authority.
     * @param \Vnetby\Schemaorg\Types\Thing\MedicalEntity\MedicalIntangible\DoseSchedule\RecommendedDoseSchedule $value
     * @return static
     */
    function setRecommendedIntake($value)
    {
        return $this->setProp('recommendedIntake', $value);
    }

    /**
     * The generic name of this drug or supplement.
     * @param string|\Vnetby\Schemaorg\DataTypes\DataText $value
     * @return static
     */
    function setNonProprietaryName($value)
    {
        return $this->setProp('nonProprietaryName', $value);
    }

    /**
     * Recommended intake of this supplement for a given population as defined by a specific recommending authority.
     * @param \Vnetby\Schemaorg\Types\Thing\MedicalEntity\MedicalIntangible\DoseSchedule\MaximumDoseSchedule $value
     * @return static
     */
    function setMaximumIntake($value)
    {
        return $this->setProp('maximumIntake', $value);
    }

    /**
     * True if this item's name is a proprietary/brand name (vs. generic name).
     * @param bool|\Vnetby\Schemaorg\DataTypes\DataBoolean $value
     * @return static
     */
    function setIsProprietary($value)
    {
        return $this->setProp('isProprietary', $value);
    }

    /**
     * The specific biochemical interaction through which this drug or supplement produces its pharmacological effect.
     * @return string|\Vnetby\Schemaorg\DataTypes\DataText|null
     */
    function getMechanismOfAction()
    {
        return $this->getProp('mechanismOfAction');
    }

    /**
     * The drug or supplement's legal status, including any controlled substance schedules that apply.
     * @return string|\Vnetby\Schemaorg\Types\Thing\MedicalEntity\MedicalIntangible\DrugLegalStatus|\Vnetby\Schemaorg\Types\Thing\Intangible\Enumeration\MedicalEnumeration\MedicalEnumeration|\Vnetby\Schemaorg\DataTypes\DataText|null
     */
    function getLegalStatus()
    {
        return $this->getProp('legalStatus');
    }

    /**
     * An active ingredient, typically chemical compounds and/or biologic substances.
     * @return string|\Vnetby\Schemaorg\DataTypes\DataText|null
     */
    function getActiveIngredient()
    {
        return $this->getProp('activeIngredient');
    }

    /**
     * Proprietary name given to the diet plan, typically by its originator or creator.
     * @return string|\Vnetby\Schemaorg\DataTypes\DataText|null
     */
    function getProprietaryName()
    {
        return $this->getProp('proprietaryName');
    }

    /**
     * Characteristics of the population for which this is intended, or which typically uses it, e.g. 'adults'.
     * @return string|\Vnetby\Schemaorg\DataTypes\DataText|null
     */
    function getTargetPopulation()
    {
        return $this->getProp('targetPopulation');
    }

    /**
     * Any potential safety concern associated with the supplement. May include interactions with other drugs and foods, pregnancy, breastfeeding, known adverse reactions,
     * and documented efficacy of the supplement.
     * @return string|\Vnetby\Schemaorg\DataTypes\DataText|null
     */
    function getSafetyConsideration()
    {
        return $this->getProp('safetyConsideration');
    }

    /**
     * Recommended intake of this supplement for a given population as defined by a specific recommending authority.
     * @return \Vnetby\Schemaorg\Types\Thing\MedicalEntity\MedicalIntangible\DoseSchedule\RecommendedDoseSchedule|null
     */
    function getRecommendedIntake()
    {
        return $this->getProp('recommendedIntake');
    }

    /**
     * The generic name of this drug or supplement.
     * @return string|\Vnetby\Schemaorg\DataTypes\DataText|null
     */
    function getNonProprietaryName()
    {
        return $this->getProp('nonProprietaryName');
    }

    /**
     * Recommended intake of this supplement for a given population as defined by a specific recommending authority.
     * @return \Vnetby\Schemaorg\Types\Thing\MedicalEntity\MedicalIntangible\DoseSchedule\MaximumDoseSchedule|null
     */
    function getMaximumIntake()
    {
        return $this->getProp('maximumIntake');
    }

    /**
     * True if this item's name is a proprietary/brand name (vs. generic name).
     * @return bool|\Vnetby\Schemaorg\DataTypes\DataBoolean|null
     */
    function getIsProprietary()
    {
        return $this->getProp('isProprietary');
    }
}
