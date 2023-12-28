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
     * Indicates the status of drug prescription, e.g. local catalogs classifications or whether the drug is available by prescription or over-the-counter, etc.
    * @var \Vnetby\Schemaorg\DataTypes\DataText|\Vnetby\Schemaorg\Types\Thing\Intangible\Enumeration\MedicalEnumeration\DrugPrescriptionStatus\DrugPrescriptionStatus
    */
   protected $prop_prescriptionStatus;

   /**
     * Any precaution, guidance, contraindication, etc. related to consumption of specific foods while taking this drug.
    * @var \Vnetby\Schemaorg\DataTypes\DataText
    */
   protected $prop_foodWarning;

   /**
     * The insurance plans that cover this drug.
    * @var \Vnetby\Schemaorg\Types\Thing\Intangible\HealthInsurancePlan
    */
   protected $prop_includedInHealthInsurancePlan;

   /**
     * The unit in which the drug is measured, e.g. '5 mg tablet'.
    * @var \Vnetby\Schemaorg\DataTypes\DataText
    */
   protected $prop_drugUnit;

   /**
     * Any precaution, guidance, contraindication, etc. related to this drug's use during pregnancy.
    * @var \Vnetby\Schemaorg\DataTypes\DataText
    */
   protected $prop_pregnancyWarning;

   /**
     * Proprietary name given to the diet plan, typically by its originator or creator.
    * @var \Vnetby\Schemaorg\DataTypes\DataText
    */
   protected $prop_proprietaryName;

   /**
     * A dosing schedule for the drug for a given population, either observed, recommended, or maximum dose based on the type used.
    * @var \Vnetby\Schemaorg\Types\Thing\MedicalEntity\MedicalIntangible\DoseSchedule\DoseSchedule
    */
   protected $prop_doseSchedule;

   /**
     * Description of the absorption and elimination of drugs, including their concentration (pharmacokinetics, pK) and biological effects (pharmacodynamics, pD).
    * @var \Vnetby\Schemaorg\DataTypes\DataText
    */
   protected $prop_clinicalPharmacology;

   /**
     * Any information related to overdose on a drug, including signs or symptoms, treatments, contact information for emergency response.
    * @var \Vnetby\Schemaorg\DataTypes\DataText
    */
   protected $prop_overdosage;

   /**
     * True if this item's name is a proprietary/brand name (vs. generic name).
    * @var \Vnetby\Schemaorg\DataTypes\DataBoolean
    */
   protected $prop_isProprietary;

   /**
     * Any precaution, guidance, contraindication, etc. related to consumption of alcohol while taking this drug.
    * @var \Vnetby\Schemaorg\DataTypes\DataText
    */
   protected $prop_alcoholWarning;

   /**
     * A route by which this drug may be administered, e.g. 'oral'.
    * @var \Vnetby\Schemaorg\DataTypes\DataText
    */
   protected $prop_administrationRoute;

   /**
     * Link to prescribing information for the drug.
    * @var \Vnetby\Schemaorg\DataTypes\DataURL
    */
   protected $prop_prescribingInfo;

   /**
     * Any FDA or other warnings about the drug (text or URL).
    * @var \Vnetby\Schemaorg\DataTypes\DataURL|\Vnetby\Schemaorg\DataTypes\DataText
    */
   protected $prop_warning;

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
     * Pregnancy category of this drug.
    * @var \Vnetby\Schemaorg\Types\Thing\Intangible\Enumeration\MedicalEnumeration\DrugPregnancyCategory\DrugPregnancyCategory
    */
   protected $prop_pregnancyCategory;

   /**
     * Recommended intake of this supplement for a given population as defined by a specific recommending authority.
    * @var \Vnetby\Schemaorg\Types\Thing\MedicalEntity\MedicalIntangible\DoseSchedule\MaximumDoseSchedule
    */
   protected $prop_maximumIntake;

   /**
     * The RxCUI drug identifier from RXNORM.
    * @var \Vnetby\Schemaorg\DataTypes\DataText
    */
   protected $prop_rxcui;

   /**
     * Another drug that is known to interact with this drug in a way that impacts the effect of this drug or
     * causes a risk to the patient. Note: disease interactions are typically captured as contraindications.
    * @var \Vnetby\Schemaorg\Types\Thing\Product\Drug
    */
   protected $prop_interactingDrug;

   /**
     * The class of drug this belongs to (e.g., statins).
    * @var \Vnetby\Schemaorg\Types\Thing\MedicalEntity\DrugClass
    */
   protected $prop_drugClass;

   /**
     * A dosage form in which this drug/supplement is available, e.g. 'tablet', 'suspension', 'injection'.
    * @var \Vnetby\Schemaorg\DataTypes\DataText
    */
   protected $prop_dosageForm;

   /**
     * Any other drug related to this one, for example commonly-prescribed alternatives.
    * @var \Vnetby\Schemaorg\Types\Thing\Product\Drug
    */
   protected $prop_relatedDrug;

   /**
     * An available dosage strength for the drug.
    * @var \Vnetby\Schemaorg\Types\Thing\MedicalEntity\MedicalIntangible\DrugStrength
    */
   protected $prop_availableStrength;

   /**
     * True if the drug is available in a generic form (regardless of name).
    * @var \Vnetby\Schemaorg\DataTypes\DataBoolean
    */
   protected $prop_isAvailableGenerically;

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
     * Any precaution, guidance, contraindication, etc. related to this drug's use by breastfeeding mothers.
    * @var \Vnetby\Schemaorg\DataTypes\DataText
    */
   protected $prop_breastfeedingWarning;

   /**
     * Link to the drug's label details.
    * @var \Vnetby\Schemaorg\DataTypes\DataURL
    */
   protected $prop_labelDetails;

   /**
     * Indicates the status of drug prescription, e.g. local catalogs classifications or whether the drug is available by prescription or over-the-counter, etc.
    * @param \Vnetby\Schemaorg\DataTypes\DataText|\Vnetby\Schemaorg\Types\Thing\Intangible\Enumeration\MedicalEnumeration\DrugPrescriptionStatus\DrugPrescriptionStatus $value
    * @return static
    */
   function setPrescriptionStatus($value)
   {
       return $this->setProp('prescriptionStatus', $value);
   }

   /**
     * Any precaution, guidance, contraindication, etc. related to consumption of specific foods while taking this drug.
    * @param \Vnetby\Schemaorg\DataTypes\DataText $value
    * @return static
    */
   function setFoodWarning($value)
   {
       return $this->setProp('foodWarning', $value);
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
     * The unit in which the drug is measured, e.g. '5 mg tablet'.
    * @param \Vnetby\Schemaorg\DataTypes\DataText $value
    * @return static
    */
   function setDrugUnit($value)
   {
       return $this->setProp('drugUnit', $value);
   }

   /**
     * Any precaution, guidance, contraindication, etc. related to this drug's use during pregnancy.
    * @param \Vnetby\Schemaorg\DataTypes\DataText $value
    * @return static
    */
   function setPregnancyWarning($value)
   {
       return $this->setProp('pregnancyWarning', $value);
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
     * A dosing schedule for the drug for a given population, either observed, recommended, or maximum dose based on the type used.
    * @param \Vnetby\Schemaorg\Types\Thing\MedicalEntity\MedicalIntangible\DoseSchedule\DoseSchedule $value
    * @return static
    */
   function setDoseSchedule($value)
   {
       return $this->setProp('doseSchedule', $value);
   }

   /**
     * Description of the absorption and elimination of drugs, including their concentration (pharmacokinetics, pK) and biological effects (pharmacodynamics, pD).
    * @param \Vnetby\Schemaorg\DataTypes\DataText $value
    * @return static
    */
   function setClinicalPharmacology($value)
   {
       return $this->setProp('clinicalPharmacology', $value);
   }

   /**
     * Any information related to overdose on a drug, including signs or symptoms, treatments, contact information for emergency response.
    * @param \Vnetby\Schemaorg\DataTypes\DataText $value
    * @return static
    */
   function setOverdosage($value)
   {
       return $this->setProp('overdosage', $value);
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
     * Any precaution, guidance, contraindication, etc. related to consumption of alcohol while taking this drug.
    * @param \Vnetby\Schemaorg\DataTypes\DataText $value
    * @return static
    */
   function setAlcoholWarning($value)
   {
       return $this->setProp('alcoholWarning', $value);
   }

   /**
     * A route by which this drug may be administered, e.g. 'oral'.
    * @param \Vnetby\Schemaorg\DataTypes\DataText $value
    * @return static
    */
   function setAdministrationRoute($value)
   {
       return $this->setProp('administrationRoute', $value);
   }

   /**
     * Link to prescribing information for the drug.
    * @param \Vnetby\Schemaorg\DataTypes\DataURL $value
    * @return static
    */
   function setPrescribingInfo($value)
   {
       return $this->setProp('prescribingInfo', $value);
   }

   /**
     * Any FDA or other warnings about the drug (text or URL).
    * @param \Vnetby\Schemaorg\DataTypes\DataURL|\Vnetby\Schemaorg\DataTypes\DataText $value
    * @return static
    */
   function setWarning($value)
   {
       return $this->setProp('warning', $value);
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
     * Pregnancy category of this drug.
    * @param \Vnetby\Schemaorg\Types\Thing\Intangible\Enumeration\MedicalEnumeration\DrugPregnancyCategory\DrugPregnancyCategory $value
    * @return static
    */
   function setPregnancyCategory($value)
   {
       return $this->setProp('pregnancyCategory', $value);
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
     * The RxCUI drug identifier from RXNORM.
    * @param \Vnetby\Schemaorg\DataTypes\DataText $value
    * @return static
    */
   function setRxcui($value)
   {
       return $this->setProp('rxcui', $value);
   }

   /**
     * Another drug that is known to interact with this drug in a way that impacts the effect of this drug or
     * causes a risk to the patient. Note: disease interactions are typically captured as contraindications.
    * @param \Vnetby\Schemaorg\Types\Thing\Product\Drug $value
    * @return static
    */
   function setInteractingDrug($value)
   {
       return $this->setProp('interactingDrug', $value);
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
     * A dosage form in which this drug/supplement is available, e.g. 'tablet', 'suspension', 'injection'.
    * @param \Vnetby\Schemaorg\DataTypes\DataText $value
    * @return static
    */
   function setDosageForm($value)
   {
       return $this->setProp('dosageForm', $value);
   }

   /**
     * Any other drug related to this one, for example commonly-prescribed alternatives.
    * @param \Vnetby\Schemaorg\Types\Thing\Product\Drug $value
    * @return static
    */
   function setRelatedDrug($value)
   {
       return $this->setProp('relatedDrug', $value);
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
     * True if the drug is available in a generic form (regardless of name).
    * @param \Vnetby\Schemaorg\DataTypes\DataBoolean $value
    * @return static
    */
   function setIsAvailableGenerically($value)
   {
       return $this->setProp('isAvailableGenerically', $value);
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
     * Any precaution, guidance, contraindication, etc. related to this drug's use by breastfeeding mothers.
    * @param \Vnetby\Schemaorg\DataTypes\DataText $value
    * @return static
    */
   function setBreastfeedingWarning($value)
   {
       return $this->setProp('breastfeedingWarning', $value);
   }

   /**
     * Link to the drug's label details.
    * @param \Vnetby\Schemaorg\DataTypes\DataURL $value
    * @return static
    */
   function setLabelDetails($value)
   {
       return $this->setProp('labelDetails', $value);
   }

   /**
     * Indicates the status of drug prescription, e.g. local catalogs classifications or whether the drug is available by prescription or over-the-counter, etc.
    * @return \Vnetby\Schemaorg\DataTypes\DataText|\Vnetby\Schemaorg\Types\Thing\Intangible\Enumeration\MedicalEnumeration\DrugPrescriptionStatus\DrugPrescriptionStatus|null
    */
   function getPrescriptionStatus()
   {
       return $this->getProp('prescriptionStatus');
   }

   /**
     * Any precaution, guidance, contraindication, etc. related to consumption of specific foods while taking this drug.
    * @return \Vnetby\Schemaorg\DataTypes\DataText|null
    */
   function getFoodWarning()
   {
       return $this->getProp('foodWarning');
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
     * The unit in which the drug is measured, e.g. '5 mg tablet'.
    * @return \Vnetby\Schemaorg\DataTypes\DataText|null
    */
   function getDrugUnit()
   {
       return $this->getProp('drugUnit');
   }

   /**
     * Any precaution, guidance, contraindication, etc. related to this drug's use during pregnancy.
    * @return \Vnetby\Schemaorg\DataTypes\DataText|null
    */
   function getPregnancyWarning()
   {
       return $this->getProp('pregnancyWarning');
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
     * A dosing schedule for the drug for a given population, either observed, recommended, or maximum dose based on the type used.
    * @return \Vnetby\Schemaorg\Types\Thing\MedicalEntity\MedicalIntangible\DoseSchedule\DoseSchedule|null
    */
   function getDoseSchedule()
   {
       return $this->getProp('doseSchedule');
   }

   /**
     * Description of the absorption and elimination of drugs, including their concentration (pharmacokinetics, pK) and biological effects (pharmacodynamics, pD).
    * @return \Vnetby\Schemaorg\DataTypes\DataText|null
    */
   function getClinicalPharmacology()
   {
       return $this->getProp('clinicalPharmacology');
   }

   /**
     * Any information related to overdose on a drug, including signs or symptoms, treatments, contact information for emergency response.
    * @return \Vnetby\Schemaorg\DataTypes\DataText|null
    */
   function getOverdosage()
   {
       return $this->getProp('overdosage');
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
     * Any precaution, guidance, contraindication, etc. related to consumption of alcohol while taking this drug.
    * @return \Vnetby\Schemaorg\DataTypes\DataText|null
    */
   function getAlcoholWarning()
   {
       return $this->getProp('alcoholWarning');
   }

   /**
     * A route by which this drug may be administered, e.g. 'oral'.
    * @return \Vnetby\Schemaorg\DataTypes\DataText|null
    */
   function getAdministrationRoute()
   {
       return $this->getProp('administrationRoute');
   }

   /**
     * Link to prescribing information for the drug.
    * @return \Vnetby\Schemaorg\DataTypes\DataURL|null
    */
   function getPrescribingInfo()
   {
       return $this->getProp('prescribingInfo');
   }

   /**
     * Any FDA or other warnings about the drug (text or URL).
    * @return \Vnetby\Schemaorg\DataTypes\DataURL|\Vnetby\Schemaorg\DataTypes\DataText|null
    */
   function getWarning()
   {
       return $this->getProp('warning');
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
     * Pregnancy category of this drug.
    * @return \Vnetby\Schemaorg\Types\Thing\Intangible\Enumeration\MedicalEnumeration\DrugPregnancyCategory\DrugPregnancyCategory|null
    */
   function getPregnancyCategory()
   {
       return $this->getProp('pregnancyCategory');
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
     * The RxCUI drug identifier from RXNORM.
    * @return \Vnetby\Schemaorg\DataTypes\DataText|null
    */
   function getRxcui()
   {
       return $this->getProp('rxcui');
   }

   /**
     * Another drug that is known to interact with this drug in a way that impacts the effect of this drug or
     * causes a risk to the patient. Note: disease interactions are typically captured as contraindications.
    * @return \Vnetby\Schemaorg\Types\Thing\Product\Drug|null
    */
   function getInteractingDrug()
   {
       return $this->getProp('interactingDrug');
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
     * A dosage form in which this drug/supplement is available, e.g. 'tablet', 'suspension', 'injection'.
    * @return \Vnetby\Schemaorg\DataTypes\DataText|null
    */
   function getDosageForm()
   {
       return $this->getProp('dosageForm');
   }

   /**
     * Any other drug related to this one, for example commonly-prescribed alternatives.
    * @return \Vnetby\Schemaorg\Types\Thing\Product\Drug|null
    */
   function getRelatedDrug()
   {
       return $this->getProp('relatedDrug');
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
     * True if the drug is available in a generic form (regardless of name).
    * @return \Vnetby\Schemaorg\DataTypes\DataBoolean|null
    */
   function getIsAvailableGenerically()
   {
       return $this->getProp('isAvailableGenerically');
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
     * Any precaution, guidance, contraindication, etc. related to this drug's use by breastfeeding mothers.
    * @return \Vnetby\Schemaorg\DataTypes\DataText|null
    */
   function getBreastfeedingWarning()
   {
       return $this->getProp('breastfeedingWarning');
   }

   /**
     * Link to the drug's label details.
    * @return \Vnetby\Schemaorg\DataTypes\DataURL|null
    */
   function getLabelDetails()
   {
       return $this->getProp('labelDetails');
   }
}
