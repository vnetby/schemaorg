<?php

/**
* @see https://schema.org/MedicalTherapy
 * Any medical intervention designed to prevent, treat, and cure human diseases and medical conditions, including both curative and palliative therapies. Medical
 * therapies are typically processes of care relying upon pharmacotherapy, behavioral therapy, supportive therapy (with fluid or nutrition for example), or detoxification
 * (e.g. hemodialysis) aimed at improving or preventing a health condition.
*/

namespace Vnetby\Schemaorg\Types\Thing\MedicalEntity\MedicalProcedure\TherapeuticProcedure\MedicalTherapy;

class MedicalTherapy extends \Vnetby\Schemaorg\Types\Thing\MedicalEntity\MedicalProcedure\TherapeuticProcedure\TherapeuticProcedure
{
   const TYPE = 'MedicalTherapy';

   /**
     * A contraindication for this therapy.
    * @var \Vnetby\Schemaorg\Types\Thing\MedicalEntity\MedicalContraindication|\Vnetby\Schemaorg\DataTypes\DataText
    */
   protected $prop_contraindication;

   /**
     * A therapy that duplicates or overlaps this one.
    * @var \Vnetby\Schemaorg\Types\Thing\MedicalEntity\MedicalProcedure\TherapeuticProcedure\MedicalTherapy\MedicalTherapy
    */
   protected $prop_duplicateTherapy;

   /**
     * A possible serious complication and/or serious side effect of this therapy. Serious adverse outcomes include those that are life-threatening; result in
     * death, disability, or permanent damage; require hospitalization or prolong existing hospitalization; cause congenital anomalies or birth defects; or jeopardize the patient
     * and may require medical or surgical intervention to prevent one of the outcomes in this definition.
    * @var \Vnetby\Schemaorg\Types\Thing\MedicalEntity\MedicalEntity
    */
   protected $prop_seriousAdverseOutcome;

   /**
     * A contraindication for this therapy.
    * @param \Vnetby\Schemaorg\Types\Thing\MedicalEntity\MedicalContraindication|\Vnetby\Schemaorg\DataTypes\DataText $value
    * @return static
    */
   function setContraindication($value)
   {
       return $this->setProp('contraindication', $value);
   }

   /**
     * A therapy that duplicates or overlaps this one.
    * @param \Vnetby\Schemaorg\Types\Thing\MedicalEntity\MedicalProcedure\TherapeuticProcedure\MedicalTherapy\MedicalTherapy $value
    * @return static
    */
   function setDuplicateTherapy($value)
   {
       return $this->setProp('duplicateTherapy', $value);
   }

   /**
     * A possible serious complication and/or serious side effect of this therapy. Serious adverse outcomes include those that are life-threatening; result in
     * death, disability, or permanent damage; require hospitalization or prolong existing hospitalization; cause congenital anomalies or birth defects; or jeopardize the patient
     * and may require medical or surgical intervention to prevent one of the outcomes in this definition.
    * @param \Vnetby\Schemaorg\Types\Thing\MedicalEntity\MedicalEntity $value
    * @return static
    */
   function setSeriousAdverseOutcome($value)
   {
       return $this->setProp('seriousAdverseOutcome', $value);
   }

   /**
     * A contraindication for this therapy.
    * @return \Vnetby\Schemaorg\Types\Thing\MedicalEntity\MedicalContraindication|\Vnetby\Schemaorg\DataTypes\DataText|null
    */
   function getContraindication()
   {
       return $this->getProp('contraindication');
   }

   /**
     * A therapy that duplicates or overlaps this one.
    * @return \Vnetby\Schemaorg\Types\Thing\MedicalEntity\MedicalProcedure\TherapeuticProcedure\MedicalTherapy\MedicalTherapy|null
    */
   function getDuplicateTherapy()
   {
       return $this->getProp('duplicateTherapy');
   }

   /**
     * A possible serious complication and/or serious side effect of this therapy. Serious adverse outcomes include those that are life-threatening; result in
     * death, disability, or permanent damage; require hospitalization or prolong existing hospitalization; cause congenital anomalies or birth defects; or jeopardize the patient
     * and may require medical or surgical intervention to prevent one of the outcomes in this definition.
    * @return \Vnetby\Schemaorg\Types\Thing\MedicalEntity\MedicalEntity|null
    */
   function getSeriousAdverseOutcome()
   {
       return $this->getProp('seriousAdverseOutcome');
   }
}
