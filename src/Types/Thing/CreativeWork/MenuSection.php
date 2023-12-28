<?php

/**
* @see https://schema.org/MenuSection
 * A sub-grouping of food or drink items in a menu. E.g. courses (such as 'Dinner', 'Breakfast', etc.), specific type of dishes
 * (such as 'Meat', 'Vegan', 'Drinks', etc.), or some other classification made by the menu provider.
*/

namespace Vnetby\Schemaorg\Types\Thing\CreativeWork;

class MenuSection extends \Vnetby\Schemaorg\Types\Thing\CreativeWork\CreativeWork
{
   const TYPE = 'MenuSection';

   /**
     * A subgrouping of the menu (by dishes, course, serving time period, etc.).
    * @var \Vnetby\Schemaorg\Types\Thing\CreativeWork\MenuSection
    */
   protected $prop_hasMenuSection;

   /**
     * A food or drink item contained in a menu or menu section.
    * @var \Vnetby\Schemaorg\Types\Thing\Intangible\MenuItem
    */
   protected $prop_hasMenuItem;

   /**
     * A subgrouping of the menu (by dishes, course, serving time period, etc.).
    * @param \Vnetby\Schemaorg\Types\Thing\CreativeWork\MenuSection $value
    * @return static
    */
   function setHasMenuSection($value)
   {
       return $this->setProp('hasMenuSection', $value);
   }

   /**
     * A food or drink item contained in a menu or menu section.
    * @param \Vnetby\Schemaorg\Types\Thing\Intangible\MenuItem $value
    * @return static
    */
   function setHasMenuItem($value)
   {
       return $this->setProp('hasMenuItem', $value);
   }

   /**
     * A subgrouping of the menu (by dishes, course, serving time period, etc.).
    * @return \Vnetby\Schemaorg\Types\Thing\CreativeWork\MenuSection|null
    */
   function getHasMenuSection()
   {
       return $this->getProp('hasMenuSection');
   }

   /**
     * A food or drink item contained in a menu or menu section.
    * @return \Vnetby\Schemaorg\Types\Thing\Intangible\MenuItem|null
    */
   function getHasMenuItem()
   {
       return $this->getProp('hasMenuItem');
   }
}
