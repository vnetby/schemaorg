<?php

/**
 * @see https://schema.org/DietarySupplement
 * A product taken by mouth that contains a dietary ingredient intended to supplement the diet. Dietary ingredients may include vitamins, minerals,
 * herbs or other botanicals, amino acids, and substances such as enzymes, organ tissues, glandulars and metabolites.
 */

namespace Vnetby\Schemaorg\Types\Thing\Product;

class DietarySupplement extends \Vnetby\Schemaorg\Types\Thing\Product\Product
{
    const TYPE = 'DietarySupplement';

    /**
     * Recommended intake of this supplement for a given population as defined by a specific recommending authority.
     * @var \Vnetby\Schemaorg\Types\Thing\MedicalEntity\MedicalIntangible\DoseSchedule\RecommendedDoseSchedule
     */
    protected $prop_recommendedIntake;

    /**
     * Proprietary name given to the diet plan, typically by its originator or creator.
     * @var \Vnetby\Schemaorg\DataTypes\DataText
     */
    protected $prop_proprietaryName;

    /**
     * Any potential safety concern associated with the supplement. May include interactions with other drugs and foods, pregnancy, breastfeeding, known adverse reactions,
     * and documented efficacy of the supplement.
     * @var \Vnetby\Schemaorg\DataTypes\DataText
     */
    protected $prop_safetyConsideration;

    /**
     * True if this item's name is a proprietary/brand name (vs. generic name).
     * @var \Vnetby\Schemaorg\DataTypes\DataBoolean
     */
    protected $prop_isProprietary;

    /**
     * An active ingredient, typically chemical compounds and/or biologic substances.
     * @var \Vnetby\Schemaorg\DataTypes\DataText
     */
    protected $prop_activeIngredient;

    /**
     * The generic name of this drug or supplement.
     * @var \Vnetby\Schemaorg\DataTypes\DataText
     */
    protected $prop_nonProprietaryName;

    /**
     * Recommended intake of this supplement for a given population as defined by a specific recommending authority.
     * @var \Vnetby\Schemaorg\Types\Thing\MedicalEntity\MedicalIntangible\DoseSchedule\MaximumDoseSchedule
     */
    protected $prop_maximumIntake;

    /**
     * The drug or supplement's legal status, including any controlled substance schedules that apply.
     * @var \Vnetby\Schemaorg\Types\Thing\Intangible\Enumeration\MedicalEnumeration\MedicalEnumeration|\Vnetby\Schemaorg\Types\Thing\MedicalEntity\MedicalIntangible\DrugLegalStatus|\Vnetby\Schemaorg\DataTypes\DataText
     */
    protected $prop_legalStatus;

    /**
     * The specific biochemical interaction through which this drug or supplement produces its pharmacological effect.
     * @var \Vnetby\Schemaorg\DataTypes\DataText
     */
    protected $prop_mechanismOfAction;

    /**
     * Characteristics of the population for which this is intended, or which typically uses it, e.g. 'adults'.
     * @var \Vnetby\Schemaorg\DataTypes\DataText
     */
    protected $prop_targetPopulation;

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
     * Proprietary name given to the diet plan, typically by its originator or creator.
     * @param \Vnetby\Schemaorg\DataTypes\DataText $value
     * @return static
     */
    function setProprietaryName($value)
    {
        return $this->setProp('proprietaryName', $value);
    }

    /**
     * Any potential safety concern associated with the supplement. May include interactions with other drugs and foods, pregnancy, breastfeeding, known adverse reactions,
     * and documented efficacy of the supplement.
     * @param \Vnetby\Schemaorg\DataTypes\DataText $value
     * @return static
     */
    function setSafetyConsideration($value)
    {
        return $this->setProp('safetyConsideration', $value);
    }

    /**
     * True if this item's name is a proprietary/brand name (vs. generic name).
     * @param \Vnetby\Schemaorg\DataTypes\DataBoolean $value
     * @return static
     */
    function setIsProprietary($value)
    {
        return $this->setProp('isProprietary', $value);
    }

    /**
     * An active ingredient, typically chemical compounds and/or biologic substances.
     * @param \Vnetby\Schemaorg\DataTypes\DataText $value
     * @return static
     */
    function setActiveIngredient($value)
    {
        return $this->setProp('activeIngredient', $value);
    }

    /**
     * The generic name of this drug or supplement.
     * @param \Vnetby\Schemaorg\DataTypes\DataText $value
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
     * The drug or supplement's legal status, including any controlled substance schedules that apply.
     * @param \Vnetby\Schemaorg\Types\Thing\Intangible\Enumeration\MedicalEnumeration\MedicalEnumeration|\Vnetby\Schemaorg\Types\Thing\MedicalEntity\MedicalIntangible\DrugLegalStatus|\Vnetby\Schemaorg\DataTypes\DataText $value
     * @return static
     */
    function setLegalStatus($value)
    {
        return $this->setProp('legalStatus', $value);
    }

    /**
     * The specific biochemical interaction through which this drug or supplement produces its pharmacological effect.
     * @param \Vnetby\Schemaorg\DataTypes\DataText $value
     * @return static
     */
    function setMechanismOfAction($value)
    {
        return $this->setProp('mechanismOfAction', $value);
    }

    /**
     * Characteristics of the population for which this is intended, or which typically uses it, e.g. 'adults'.
     * @param \Vnetby\Schemaorg\DataTypes\DataText $value
     * @return static
     */
    function setTargetPopulation($value)
    {
        return $this->setProp('targetPopulation', $value);
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
     * Proprietary name given to the diet plan, typically by its originator or creator.
     * @return \Vnetby\Schemaorg\DataTypes\DataText|null
     */
    function getProprietaryName()
    {
        return $this->getProp('proprietaryName');
    }

    /**
     * Any potential safety concern associated with the supplement. May include interactions with other drugs and foods, pregnancy, breastfeeding, known adverse reactions,
     * and documented efficacy of the supplement.
     * @return \Vnetby\Schemaorg\DataTypes\DataText|null
     */
    function getSafetyConsideration()
    {
        return $this->getProp('safetyConsideration');
    }

    /**
     * True if this item's name is a proprietary/brand name (vs. generic name).
     * @return \Vnetby\Schemaorg\DataTypes\DataBoolean|null
     */
    function getIsProprietary()
    {
        return $this->getProp('isProprietary');
    }

    /**
     * An active ingredient, typically chemical compounds and/or biologic substances.
     * @return \Vnetby\Schemaorg\DataTypes\DataText|null
     */
    function getActiveIngredient()
    {
        return $this->getProp('activeIngredient');
    }

    /**
     * The generic name of this drug or supplement.
     * @return \Vnetby\Schemaorg\DataTypes\DataText|null
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
     * The drug or supplement's legal status, including any controlled substance schedules that apply.
     * @return \Vnetby\Schemaorg\Types\Thing\Intangible\Enumeration\MedicalEnumeration\MedicalEnumeration|\Vnetby\Schemaorg\Types\Thing\MedicalEntity\MedicalIntangible\DrugLegalStatus|\Vnetby\Schemaorg\DataTypes\DataText|null
     */
    function getLegalStatus()
    {
        return $this->getProp('legalStatus');
    }

    /**
     * The specific biochemical interaction through which this drug or supplement produces its pharmacological effect.
     * @return \Vnetby\Schemaorg\DataTypes\DataText|null
     */
    function getMechanismOfAction()
    {
        return $this->getProp('mechanismOfAction');
    }

    /**
     * Characteristics of the population for which this is intended, or which typically uses it, e.g. 'adults'.
     * @return \Vnetby\Schemaorg\DataTypes\DataText|null
     */
    function getTargetPopulation()
    {
        return $this->getProp('targetPopulation');
    }
}
