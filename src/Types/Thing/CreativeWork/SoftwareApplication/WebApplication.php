<?php

/**
* @see https://schema.org/WebApplication
 * Web applications.
*/

namespace Vnetby\Schemaorg\Types\Thing\CreativeWork\SoftwareApplication;

class WebApplication extends \Vnetby\Schemaorg\Types\Thing\CreativeWork\SoftwareApplication\SoftwareApplication
{
   const TYPE = 'WebApplication';

   /**
     * Specifies browser requirements in human-readable text. For example, 'requires HTML5 support'.
    * @var \Vnetby\Schemaorg\DataTypes\DataText
    */
   protected $prop_browserRequirements;

   /**
     * Specifies browser requirements in human-readable text. For example, 'requires HTML5 support'.
    * @param \Vnetby\Schemaorg\DataTypes\DataText $value
    * @return static
    */
   function setBrowserRequirements($value)
   {
       return $this->setProp('browserRequirements', $value);
   }

   /**
     * Specifies browser requirements in human-readable text. For example, 'requires HTML5 support'.
    * @return \Vnetby\Schemaorg\DataTypes\DataText|null
    */
   function getBrowserRequirements()
   {
       return $this->getProp('browserRequirements');
   }
}
