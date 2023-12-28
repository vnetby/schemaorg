<?php

/**
* @see https://schema.org/CategoryCode
 * A Category Code.
*/

namespace Vnetby\Schemaorg\Types\Thing\Intangible\DefinedTerm\CategoryCode;

class CategoryCode extends \Vnetby\Schemaorg\Types\Thing\Intangible\DefinedTerm\DefinedTerm
{
   const TYPE = 'CategoryCode';

   /**
     * A short textual code that uniquely identifies the value.
    * @var \Vnetby\Schemaorg\DataTypes\DataText
    */
   protected $prop_codeValue;

   /**
     * A [[CategoryCodeSet]] that contains this category code.
    * @var \Vnetby\Schemaorg\Types\Thing\CreativeWork\DefinedTermSet\CategoryCodeSet|\Vnetby\Schemaorg\DataTypes\DataURL
    */
   protected $prop_inCodeSet;

   /**
     * A short textual code that uniquely identifies the value.
    * @param \Vnetby\Schemaorg\DataTypes\DataText $value
    * @return static
    */
   function setCodeValue($value)
   {
       return $this->setProp('codeValue', $value);
   }

   /**
     * A [[CategoryCodeSet]] that contains this category code.
    * @param \Vnetby\Schemaorg\Types\Thing\CreativeWork\DefinedTermSet\CategoryCodeSet|\Vnetby\Schemaorg\DataTypes\DataURL $value
    * @return static
    */
   function setInCodeSet($value)
   {
       return $this->setProp('inCodeSet', $value);
   }

   /**
     * A short textual code that uniquely identifies the value.
    * @return \Vnetby\Schemaorg\DataTypes\DataText|null
    */
   function getCodeValue()
   {
       return $this->getProp('codeValue');
   }

   /**
     * A [[CategoryCodeSet]] that contains this category code.
    * @return \Vnetby\Schemaorg\Types\Thing\CreativeWork\DefinedTermSet\CategoryCodeSet|\Vnetby\Schemaorg\DataTypes\DataURL|null
    */
   function getInCodeSet()
   {
       return $this->getProp('inCodeSet');
   }
}
