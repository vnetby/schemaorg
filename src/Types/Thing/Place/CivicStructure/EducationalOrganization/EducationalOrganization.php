<?php

/**
* @see https://schema.org/EducationalOrganization
 * An educational organization.
*/

namespace Vnetby\Schemaorg\Types\Thing\Place\CivicStructure\EducationalOrganization;

class EducationalOrganization extends \Vnetby\Schemaorg\Types\Thing\Place\CivicStructure\CivicStructure
{
   const TYPE = 'EducationalOrganization';

   /**
     * Alumni of an organization.
    * @var \Vnetby\Schemaorg\Types\Thing\Person\Person
    */
   protected $prop_alumni;

   /**
     * Alumni of an organization.
    * @param \Vnetby\Schemaorg\Types\Thing\Person\Person $value
    * @return static
    */
   function setAlumni($value)
   {
       return $this->setProp('alumni', $value);
   }

   /**
     * Alumni of an organization.
    * @return \Vnetby\Schemaorg\Types\Thing\Person\Person|null
    */
   function getAlumni()
   {
       return $this->getProp('alumni');
   }
}
