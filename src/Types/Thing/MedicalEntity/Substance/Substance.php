<?php

/**
* @see https://schema.org/Substance
 * Any matter of defined composition that has discrete existence, whose origin may be biological, mineral or chemical.
*/

namespace Vnetby\Schemaorg\Types\Thing\MedicalEntity\Substance;

class Substance extends \Vnetby\Schemaorg\Types\Thing\MedicalEntity\MedicalEntity
{
   const TYPE = 'Substance';

   /**
     * An active ingredient, typically chemical compounds and/or biologic substances.
    * @var \Vnetby\Schemaorg\DataTypes\DataText
    */
   protected $prop_activeIngredient;

   /**
     * Recommended intake of this supplement for a given population as defined by a specific recommending authority.
    * @var \Vnetby\Schemaorg\Types\Thing\MedicalEntity\MedicalIntangible\DoseSchedule\MaximumDoseSchedule
    */
   protected $prop_maximumIntake;

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
     * Recommended intake of this supplement for a given population as defined by a specific recommending authority.
    * @param \Vnetby\Schemaorg\Types\Thing\MedicalEntity\MedicalIntangible\DoseSchedule\MaximumDoseSchedule $value
    * @return static
    */
   function setMaximumIntake($value)
   {
       return $this->setProp('maximumIntake', $value);
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
     * Recommended intake of this supplement for a given population as defined by a specific recommending authority.
    * @return \Vnetby\Schemaorg\Types\Thing\MedicalEntity\MedicalIntangible\DoseSchedule\MaximumDoseSchedule|null
    */
   function getMaximumIntake()
   {
       return $this->getProp('maximumIntake');
   }
}
