<?php

/**
 * @see https://schema.org/Drug
 * A chemical or biologic substance, used as a medical therapy, that has a physiological effect on an organism. Here the term
 * drug is used interchangeably with the term medicine although clinical knowledge makes a clear difference between them.
 */

namespace Vnetby\Schemaorg\Types\Thing\Product;

class Drug extends \Vnetby\Schemaorg\Types\Thing\Product\Product
{
    const TYPE = 'Drug';

    /**
     * Another drug that is known to interact with this drug in a way that impacts the effect of this drug or
     * causes a risk to the patient. Note: disease interactions are typically captured as contraindications.
     * @var \Vnetby\Schemaorg\Types\Thing\MedicalEntity\Substance\Drug
     */
    public $interactingDrug;

    /**
     * Any precaution, guidance, contraindication, etc. related to consumption of specific foods while taking this drug.
     * @var string|\Vnetby\Schemaorg\DataTypes\DataText
     */
    public $foodWarning;

    /**
     * The specific biochemical interaction through which this drug or supplement produces its pharmacological effect.
     * @var string|\Vnetby\Schemaorg\DataTypes\DataText
     */
    public $mechanismOfAction;

    /**
     * A route by which this drug may be administered, e.g. 'oral'.
     * @var string|\Vnetby\Schemaorg\DataTypes\DataText
     */
    public $administrationRoute;

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
     * A dosing schedule for the drug for a given population, either observed, recommended, or maximum dose based on the type used.
     * @var \Vnetby\Schemaorg\Types\Thing\MedicalEntity\MedicalIntangible\DoseSchedule\DoseSchedule
     */
    public $doseSchedule;

    /**
     * Proprietary name given to the diet plan, typically by its originator or creator.
     * @var string|\Vnetby\Schemaorg\DataTypes\DataText
     */
    public $proprietaryName;

    /**
     * Any information related to overdose on a drug, including signs or symptoms, treatments, contact information for emergency response.
     * @var string|\Vnetby\Schemaorg\DataTypes\DataText
     */
    public $overdosage;

    /**
     * The unit in which the drug is measured, e.g. '5 mg tablet'.
     * @var string|\Vnetby\Schemaorg\DataTypes\DataText
     */
    public $drugUnit;

    /**
     * The insurance plans that cover this drug.
     * @var \Vnetby\Schemaorg\Types\Thing\Intangible\HealthInsurancePlan
     */
    public $includedInHealthInsurancePlan;

    /**
     * Indicates the status of drug prescription, e.g. local catalogs classifications or whether the drug is available by prescription or over-the-counter, etc.
     * @var string|\Vnetby\Schemaorg\Types\Thing\Intangible\Enumeration\MedicalEnumeration\DrugPrescriptionStatus\DrugPrescriptionStatus|\Vnetby\Schemaorg\DataTypes\DataText
     */
    public $prescriptionStatus;

    /**
     * A dosage form in which this drug/supplement is available, e.g. 'tablet', 'suspension', 'injection'.
     * @var string|\Vnetby\Schemaorg\DataTypes\DataText
     */
    public $dosageForm;

    /**
     * Pregnancy category of this drug.
     * @var \Vnetby\Schemaorg\Types\Thing\Intangible\Enumeration\MedicalEnumeration\DrugPregnancyCategory\DrugPregnancyCategory
     */
    public $pregnancyCategory;

    /**
     * Any precaution, guidance, contraindication, etc. related to this drug's use during pregnancy.
     * @var string|\Vnetby\Schemaorg\DataTypes\DataText
     */
    public $pregnancyWarning;

    /**
     * The class of drug this belongs to (e.g., statins).
     * @var \Vnetby\Schemaorg\Types\Thing\MedicalEntity\DrugClass
     */
    public $drugClass;

    /**
     * Any FDA or other warnings about the drug (text or URL).
     * @var string|\Vnetby\Schemaorg\DataTypes\DataText|\Vnetby\Schemaorg\DataTypes\DataURL
     */
    public $warning;

    /**
     * The generic name of this drug or supplement.
     * @var string|\Vnetby\Schemaorg\DataTypes\DataText
     */
    public $nonProprietaryName;

    /**
     * An available dosage strength for the drug.
     * @var \Vnetby\Schemaorg\Types\Thing\MedicalEntity\MedicalIntangible\DrugStrength
     */
    public $availableStrength;

    /**
     * Recommended intake of this supplement for a given population as defined by a specific recommending authority.
     * @var \Vnetby\Schemaorg\Types\Thing\MedicalEntity\MedicalIntangible\DoseSchedule\MaximumDoseSchedule
     */
    public $maximumIntake;

    /**
     * Link to the drug's label details.
     * @var string|\Vnetby\Schemaorg\DataTypes\DataURL
     */
    public $labelDetails;

    /**
     * Any precaution, guidance, contraindication, etc. related to consumption of alcohol while taking this drug.
     * @var string|\Vnetby\Schemaorg\DataTypes\DataText
     */
    public $alcoholWarning;

    /**
     * True if this item's name is a proprietary/brand name (vs. generic name).
     * @var bool|\Vnetby\Schemaorg\DataTypes\DataBoolean
     */
    public $isProprietary;

    /**
     * The RxCUI drug identifier from RXNORM.
     * @var string|\Vnetby\Schemaorg\DataTypes\DataText
     */
    public $rxcui;

    /**
     * Any other drug related to this one, for example commonly-prescribed alternatives.
     * @var \Vnetby\Schemaorg\Types\Thing\MedicalEntity\Substance\Drug
     */
    public $relatedDrug;

    /**
     * Link to prescribing information for the drug.
     * @var string|\Vnetby\Schemaorg\DataTypes\DataURL
     */
    public $prescribingInfo;

    /**
     * Description of the absorption and elimination of drugs, including their concentration (pharmacokinetics, pK) and biological effects (pharmacodynamics, pD).
     * @var string|\Vnetby\Schemaorg\DataTypes\DataText
     */
    public $clinicalPharmacology;

    /**
     * True if the drug is available in a generic form (regardless of name).
     * @var bool|\Vnetby\Schemaorg\DataTypes\DataBoolean
     */
    public $isAvailableGenerically;

    /**
     * Any precaution, guidance, contraindication, etc. related to this drug's use by breastfeeding mothers.
     * @var string|\Vnetby\Schemaorg\DataTypes\DataText
     */
    public $breastfeedingWarning;

    /**
     * Another drug that is known to interact with this drug in a way that impacts the effect of this drug or
     * causes a risk to the patient. Note: disease interactions are typically captured as contraindications.
     * @param \Vnetby\Schemaorg\Types\Thing\MedicalEntity\Substance\Drug $value
     * @return static
     */
    function setInteractingDrug($value)
    {
        return $this->setProp('interactingDrug', $value);
    }

    /**
     * Any precaution, guidance, contraindication, etc. related to consumption of specific foods while taking this drug.
     * @param string|\Vnetby\Schemaorg\DataTypes\DataText $value
     * @return static
     */
    function setFoodWarning($value)
    {
        return $this->setProp('foodWarning', $value);
    }

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
     * A route by which this drug may be administered, e.g. 'oral'.
     * @param string|\Vnetby\Schemaorg\DataTypes\DataText $value
     * @return static
     */
    function setAdministrationRoute($value)
    {
        return $this->setProp('administrationRoute', $value);
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
     * A dosing schedule for the drug for a given population, either observed, recommended, or maximum dose based on the type used.
     * @param \Vnetby\Schemaorg\Types\Thing\MedicalEntity\MedicalIntangible\DoseSchedule\DoseSchedule $value
     * @return static
     */
    function setDoseSchedule($value)
    {
        return $this->setProp('doseSchedule', $value);
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
     * Any information related to overdose on a drug, including signs or symptoms, treatments, contact information for emergency response.
     * @param string|\Vnetby\Schemaorg\DataTypes\DataText $value
     * @return static
     */
    function setOverdosage($value)
    {
        return $this->setProp('overdosage', $value);
    }

    /**
     * The unit in which the drug is measured, e.g. '5 mg tablet'.
     * @param string|\Vnetby\Schemaorg\DataTypes\DataText $value
     * @return static
     */
    function setDrugUnit($value)
    {
        return $this->setProp('drugUnit', $value);
    }

    /**
     * The insurance plans that cover this drug.
     * @param \Vnetby\Schemaorg\Types\Thing\Intangible\HealthInsurancePlan $value
     * @return static
     */
    function setIncludedInHealthInsurancePlan($value)
    {
        return $this->setProp('includedInHealthInsurancePlan', $value);
    }

    /**
     * Indicates the status of drug prescription, e.g. local catalogs classifications or whether the drug is available by prescription or over-the-counter, etc.
     * @param string|\Vnetby\Schemaorg\Types\Thing\Intangible\Enumeration\MedicalEnumeration\DrugPrescriptionStatus\DrugPrescriptionStatus|\Vnetby\Schemaorg\DataTypes\DataText $value
     * @return static
     */
    function setPrescriptionStatus($value)
    {
        return $this->setProp('prescriptionStatus', $value);
    }

    /**
     * A dosage form in which this drug/supplement is available, e.g. 'tablet', 'suspension', 'injection'.
     * @param string|\Vnetby\Schemaorg\DataTypes\DataText $value
     * @return static
     */
    function setDosageForm($value)
    {
        return $this->setProp('dosageForm', $value);
    }

    /**
     * Pregnancy category of this drug.
     * @param \Vnetby\Schemaorg\Types\Thing\Intangible\Enumeration\MedicalEnumeration\DrugPregnancyCategory\DrugPregnancyCategory $value
     * @return static
     */
    function setPregnancyCategory($value)
    {
        return $this->setProp('pregnancyCategory', $value);
    }

    /**
     * Any precaution, guidance, contraindication, etc. related to this drug's use during pregnancy.
     * @param string|\Vnetby\Schemaorg\DataTypes\DataText $value
     * @return static
     */
    function setPregnancyWarning($value)
    {
        return $this->setProp('pregnancyWarning', $value);
    }

    /**
     * The class of drug this belongs to (e.g., statins).
     * @param \Vnetby\Schemaorg\Types\Thing\MedicalEntity\DrugClass $value
     * @return static
     */
    function setDrugClass($value)
    {
        return $this->setProp('drugClass', $value);
    }

    /**
     * Any FDA or other warnings about the drug (text or URL).
     * @param string|\Vnetby\Schemaorg\DataTypes\DataText|\Vnetby\Schemaorg\DataTypes\DataURL $value
     * @return static
     */
    function setWarning($value)
    {
        return $this->setProp('warning', $value);
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
     * An available dosage strength for the drug.
     * @param \Vnetby\Schemaorg\Types\Thing\MedicalEntity\MedicalIntangible\DrugStrength $value
     * @return static
     */
    function setAvailableStrength($value)
    {
        return $this->setProp('availableStrength', $value);
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
     * Link to the drug's label details.
     * @param string|\Vnetby\Schemaorg\DataTypes\DataURL $value
     * @return static
     */
    function setLabelDetails($value)
    {
        return $this->setProp('labelDetails', $value);
    }

    /**
     * Any precaution, guidance, contraindication, etc. related to consumption of alcohol while taking this drug.
     * @param string|\Vnetby\Schemaorg\DataTypes\DataText $value
     * @return static
     */
    function setAlcoholWarning($value)
    {
        return $this->setProp('alcoholWarning', $value);
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
     * The RxCUI drug identifier from RXNORM.
     * @param string|\Vnetby\Schemaorg\DataTypes\DataText $value
     * @return static
     */
    function setRxcui($value)
    {
        return $this->setProp('rxcui', $value);
    }

    /**
     * Any other drug related to this one, for example commonly-prescribed alternatives.
     * @param \Vnetby\Schemaorg\Types\Thing\MedicalEntity\Substance\Drug $value
     * @return static
     */
    function setRelatedDrug($value)
    {
        return $this->setProp('relatedDrug', $value);
    }

    /**
     * Link to prescribing information for the drug.
     * @param string|\Vnetby\Schemaorg\DataTypes\DataURL $value
     * @return static
     */
    function setPrescribingInfo($value)
    {
        return $this->setProp('prescribingInfo', $value);
    }

    /**
     * Description of the absorption and elimination of drugs, including their concentration (pharmacokinetics, pK) and biological effects (pharmacodynamics, pD).
     * @param string|\Vnetby\Schemaorg\DataTypes\DataText $value
     * @return static
     */
    function setClinicalPharmacology($value)
    {
        return $this->setProp('clinicalPharmacology', $value);
    }

    /**
     * True if the drug is available in a generic form (regardless of name).
     * @param bool|\Vnetby\Schemaorg\DataTypes\DataBoolean $value
     * @return static
     */
    function setIsAvailableGenerically($value)
    {
        return $this->setProp('isAvailableGenerically', $value);
    }

    /**
     * Any precaution, guidance, contraindication, etc. related to this drug's use by breastfeeding mothers.
     * @param string|\Vnetby\Schemaorg\DataTypes\DataText $value
     * @return static
     */
    function setBreastfeedingWarning($value)
    {
        return $this->setProp('breastfeedingWarning', $value);
    }

    /**
     * Another drug that is known to interact with this drug in a way that impacts the effect of this drug or
     * causes a risk to the patient. Note: disease interactions are typically captured as contraindications.
     * @return \Vnetby\Schemaorg\Types\Thing\MedicalEntity\Substance\Drug|null
     */
    function getInteractingDrug()
    {
        return $this->getProp('interactingDrug');
    }

    /**
     * Any precaution, guidance, contraindication, etc. related to consumption of specific foods while taking this drug.
     * @return string|\Vnetby\Schemaorg\DataTypes\DataText|null
     */
    function getFoodWarning()
    {
        return $this->getProp('foodWarning');
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
     * A route by which this drug may be administered, e.g. 'oral'.
     * @return string|\Vnetby\Schemaorg\DataTypes\DataText|null
     */
    function getAdministrationRoute()
    {
        return $this->getProp('administrationRoute');
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
     * A dosing schedule for the drug for a given population, either observed, recommended, or maximum dose based on the type used.
     * @return \Vnetby\Schemaorg\Types\Thing\MedicalEntity\MedicalIntangible\DoseSchedule\DoseSchedule|null
     */
    function getDoseSchedule()
    {
        return $this->getProp('doseSchedule');
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
     * Any information related to overdose on a drug, including signs or symptoms, treatments, contact information for emergency response.
     * @return string|\Vnetby\Schemaorg\DataTypes\DataText|null
     */
    function getOverdosage()
    {
        return $this->getProp('overdosage');
    }

    /**
     * The unit in which the drug is measured, e.g. '5 mg tablet'.
     * @return string|\Vnetby\Schemaorg\DataTypes\DataText|null
     */
    function getDrugUnit()
    {
        return $this->getProp('drugUnit');
    }

    /**
     * The insurance plans that cover this drug.
     * @return \Vnetby\Schemaorg\Types\Thing\Intangible\HealthInsurancePlan|null
     */
    function getIncludedInHealthInsurancePlan()
    {
        return $this->getProp('includedInHealthInsurancePlan');
    }

    /**
     * Indicates the status of drug prescription, e.g. local catalogs classifications or whether the drug is available by prescription or over-the-counter, etc.
     * @return string|\Vnetby\Schemaorg\Types\Thing\Intangible\Enumeration\MedicalEnumeration\DrugPrescriptionStatus\DrugPrescriptionStatus|\Vnetby\Schemaorg\DataTypes\DataText|null
     */
    function getPrescriptionStatus()
    {
        return $this->getProp('prescriptionStatus');
    }

    /**
     * A dosage form in which this drug/supplement is available, e.g. 'tablet', 'suspension', 'injection'.
     * @return string|\Vnetby\Schemaorg\DataTypes\DataText|null
     */
    function getDosageForm()
    {
        return $this->getProp('dosageForm');
    }

    /**
     * Pregnancy category of this drug.
     * @return \Vnetby\Schemaorg\Types\Thing\Intangible\Enumeration\MedicalEnumeration\DrugPregnancyCategory\DrugPregnancyCategory|null
     */
    function getPregnancyCategory()
    {
        return $this->getProp('pregnancyCategory');
    }

    /**
     * Any precaution, guidance, contraindication, etc. related to this drug's use during pregnancy.
     * @return string|\Vnetby\Schemaorg\DataTypes\DataText|null
     */
    function getPregnancyWarning()
    {
        return $this->getProp('pregnancyWarning');
    }

    /**
     * The class of drug this belongs to (e.g., statins).
     * @return \Vnetby\Schemaorg\Types\Thing\MedicalEntity\DrugClass|null
     */
    function getDrugClass()
    {
        return $this->getProp('drugClass');
    }

    /**
     * Any FDA or other warnings about the drug (text or URL).
     * @return string|\Vnetby\Schemaorg\DataTypes\DataText|\Vnetby\Schemaorg\DataTypes\DataURL|null
     */
    function getWarning()
    {
        return $this->getProp('warning');
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
     * An available dosage strength for the drug.
     * @return \Vnetby\Schemaorg\Types\Thing\MedicalEntity\MedicalIntangible\DrugStrength|null
     */
    function getAvailableStrength()
    {
        return $this->getProp('availableStrength');
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
     * Link to the drug's label details.
     * @return string|\Vnetby\Schemaorg\DataTypes\DataURL|null
     */
    function getLabelDetails()
    {
        return $this->getProp('labelDetails');
    }

    /**
     * Any precaution, guidance, contraindication, etc. related to consumption of alcohol while taking this drug.
     * @return string|\Vnetby\Schemaorg\DataTypes\DataText|null
     */
    function getAlcoholWarning()
    {
        return $this->getProp('alcoholWarning');
    }

    /**
     * True if this item's name is a proprietary/brand name (vs. generic name).
     * @return bool|\Vnetby\Schemaorg\DataTypes\DataBoolean|null
     */
    function getIsProprietary()
    {
        return $this->getProp('isProprietary');
    }

    /**
     * The RxCUI drug identifier from RXNORM.
     * @return string|\Vnetby\Schemaorg\DataTypes\DataText|null
     */
    function getRxcui()
    {
        return $this->getProp('rxcui');
    }

    /**
     * Any other drug related to this one, for example commonly-prescribed alternatives.
     * @return \Vnetby\Schemaorg\Types\Thing\MedicalEntity\Substance\Drug|null
     */
    function getRelatedDrug()
    {
        return $this->getProp('relatedDrug');
    }

    /**
     * Link to prescribing information for the drug.
     * @return string|\Vnetby\Schemaorg\DataTypes\DataURL|null
     */
    function getPrescribingInfo()
    {
        return $this->getProp('prescribingInfo');
    }

    /**
     * Description of the absorption and elimination of drugs, including their concentration (pharmacokinetics, pK) and biological effects (pharmacodynamics, pD).
     * @return string|\Vnetby\Schemaorg\DataTypes\DataText|null
     */
    function getClinicalPharmacology()
    {
        return $this->getProp('clinicalPharmacology');
    }

    /**
     * True if the drug is available in a generic form (regardless of name).
     * @return bool|\Vnetby\Schemaorg\DataTypes\DataBoolean|null
     */
    function getIsAvailableGenerically()
    {
        return $this->getProp('isAvailableGenerically');
    }

    /**
     * Any precaution, guidance, contraindication, etc. related to this drug's use by breastfeeding mothers.
     * @return string|\Vnetby\Schemaorg\DataTypes\DataText|null
     */
    function getBreastfeedingWarning()
    {
        return $this->getProp('breastfeedingWarning');
    }
}
