<?php

/**
* @see https://schema.org/OccupationalExperienceRequirements
 * Indicates employment-related experience requirements, e.g. [[monthsOfExperience]].
*/

namespace Vnetby\Schemaorg\Types\Thing\Intangible;

class OccupationalExperienceRequirements extends \Vnetby\Schemaorg\Types\Thing\Intangible\Intangible
{
   const TYPE = 'OccupationalExperienceRequirements';

   /**
     * Indicates the minimal number of months of experience required for a position.
    * @var \Vnetby\Schemaorg\DataTypes\DataNumber
    */
   protected $prop_monthsOfExperience;

   /**
     * Indicates the minimal number of months of experience required for a position.
    * @param \Vnetby\Schemaorg\DataTypes\DataNumber $value
    * @return static
    */
   function setMonthsOfExperience($value)
   {
       return $this->setProp('monthsOfExperience', $value);
   }

   /**
     * Indicates the minimal number of months of experience required for a position.
    * @return \Vnetby\Schemaorg\DataTypes\DataNumber|null
    */
   function getMonthsOfExperience()
   {
       return $this->getProp('monthsOfExperience');
   }
}
