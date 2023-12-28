<?php

/**
* @see https://schema.org/DrugStrength
 * A specific strength in which a medical drug is available in a specific country.
*/

namespace Vnetby\Schemaorg\Types\Thing\MedicalEntity\MedicalIntangible;

class DrugStrength extends \Vnetby\Schemaorg\Types\Thing\MedicalEntity\MedicalIntangible\MedicalIntangible
{
   const TYPE = 'DrugStrength';

   /**
     * The location in which the strength is available.
    * @var \Vnetby\Schemaorg\Types\Thing\Place\AdministrativeArea\AdministrativeArea
    */
   protected $prop_availableIn;

   /**
     * The units of an active ingredient's strength, e.g. mg.
    * @var \Vnetby\Schemaorg\DataTypes\DataText
    */
   protected $prop_strengthUnit;

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
     * The value of an active ingredient's strength, e.g. 325.
    * @var \Vnetby\Schemaorg\DataTypes\DataNumber
    */
   protected $prop_strengthValue;

   /**
     * The location in which the strength is available.
    * @param \Vnetby\Schemaorg\Types\Thing\Place\AdministrativeArea\AdministrativeArea $value
    * @return static
    */
   function setAvailableIn($value)
   {
       return $this->setProp('availableIn', $value);
   }

   /**
     * The units of an active ingredient's strength, e.g. mg.
    * @param \Vnetby\Schemaorg\DataTypes\DataText $value
    * @return static
    */
   function setStrengthUnit($value)
   {
       return $this->setProp('strengthUnit', $value);
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
     * Recommended intake of this supplement for a given population as defined by a specific recommending authority.
    * @param \Vnetby\Schemaorg\Types\Thing\MedicalEntity\MedicalIntangible\DoseSchedule\MaximumDoseSchedule $value
    * @return static
    */
   function setMaximumIntake($value)
   {
       return $this->setProp('maximumIntake', $value);
   }

   /**
     * The value of an active ingredient's strength, e.g. 325.
    * @param \Vnetby\Schemaorg\DataTypes\DataNumber $value
    * @return static
    */
   function setStrengthValue($value)
   {
       return $this->setProp('strengthValue', $value);
   }

   /**
     * The location in which the strength is available.
    * @return \Vnetby\Schemaorg\Types\Thing\Place\AdministrativeArea\AdministrativeArea|null
    */
   function getAvailableIn()
   {
       return $this->getProp('availableIn');
   }

   /**
     * The units of an active ingredient's strength, e.g. mg.
    * @return \Vnetby\Schemaorg\DataTypes\DataText|null
    */
   function getStrengthUnit()
   {
       return $this->getProp('strengthUnit');
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

   /**
     * The value of an active ingredient's strength, e.g. 325.
    * @return \Vnetby\Schemaorg\DataTypes\DataNumber|null
    */
   function getStrengthValue()
   {
       return $this->getProp('strengthValue');
   }
}
