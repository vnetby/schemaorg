<?php

/**
* @see https://schema.org/PerformanceRole
 * A PerformanceRole is a Role that some entity places with regard to a theatrical performance, e.g. in a Movie, TVSeries etc.
*/

namespace Vnetby\Schemaorg\Types\Thing\Intangible\Role;

class PerformanceRole extends \Vnetby\Schemaorg\Types\Thing\Intangible\Role\Role
{
   const TYPE = 'PerformanceRole';

   /**
     * The name of a character played in some acting or performing role, i.e. in a PerformanceRole.
    * @var \Vnetby\Schemaorg\DataTypes\DataText
    */
   protected $prop_characterName;

   /**
     * The name of a character played in some acting or performing role, i.e. in a PerformanceRole.
    * @param \Vnetby\Schemaorg\DataTypes\DataText $value
    * @return static
    */
   function setCharacterName($value)
   {
       return $this->setProp('characterName', $value);
   }

   /**
     * The name of a character played in some acting or performing role, i.e. in a PerformanceRole.
    * @return \Vnetby\Schemaorg\DataTypes\DataText|null
    */
   function getCharacterName()
   {
       return $this->getProp('characterName');
   }
}
