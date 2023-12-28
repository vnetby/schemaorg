<?php

/**
* @see https://schema.org/Chapter
 * One of the sections into which a book is divided. A chapter usually has a section number or a name.
*/

namespace Vnetby\Schemaorg\Types\Thing\CreativeWork;

class Chapter extends \Vnetby\Schemaorg\Types\Thing\CreativeWork\CreativeWork
{
   const TYPE = 'Chapter';

   /**
     * Any description of pages that is not separated into pageStart and pageEnd; for example, "1-6, 9, 55" or "10-12, 46-49".
    * @var \Vnetby\Schemaorg\DataTypes\DataText
    */
   protected $prop_pagination;

   /**
     * The page on which the work starts; for example "135" or "xiii".
    * @var \Vnetby\Schemaorg\DataTypes\DataText|\Vnetby\Schemaorg\DataTypes\DataInteger
    */
   protected $prop_pageStart;

   /**
     * The page on which the work ends; for example "138" or "xvi".
    * @var \Vnetby\Schemaorg\DataTypes\DataText|\Vnetby\Schemaorg\DataTypes\DataInteger
    */
   protected $prop_pageEnd;

   /**
     * Any description of pages that is not separated into pageStart and pageEnd; for example, "1-6, 9, 55" or "10-12, 46-49".
    * @param \Vnetby\Schemaorg\DataTypes\DataText $value
    * @return static
    */
   function setPagination($value)
   {
       return $this->setProp('pagination', $value);
   }

   /**
     * The page on which the work starts; for example "135" or "xiii".
    * @param \Vnetby\Schemaorg\DataTypes\DataText|\Vnetby\Schemaorg\DataTypes\DataInteger $value
    * @return static
    */
   function setPageStart($value)
   {
       return $this->setProp('pageStart', $value);
   }

   /**
     * The page on which the work ends; for example "138" or "xvi".
    * @param \Vnetby\Schemaorg\DataTypes\DataText|\Vnetby\Schemaorg\DataTypes\DataInteger $value
    * @return static
    */
   function setPageEnd($value)
   {
       return $this->setProp('pageEnd', $value);
   }

   /**
     * Any description of pages that is not separated into pageStart and pageEnd; for example, "1-6, 9, 55" or "10-12, 46-49".
    * @return \Vnetby\Schemaorg\DataTypes\DataText|null
    */
   function getPagination()
   {
       return $this->getProp('pagination');
   }

   /**
     * The page on which the work starts; for example "135" or "xiii".
    * @return \Vnetby\Schemaorg\DataTypes\DataText|\Vnetby\Schemaorg\DataTypes\DataInteger|null
    */
   function getPageStart()
   {
       return $this->getProp('pageStart');
   }

   /**
     * The page on which the work ends; for example "138" or "xvi".
    * @return \Vnetby\Schemaorg\DataTypes\DataText|\Vnetby\Schemaorg\DataTypes\DataInteger|null
    */
   function getPageEnd()
   {
       return $this->getProp('pageEnd');
   }
}
