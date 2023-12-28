<?php

/**
* @see https://schema.org/PublicationIssue
 * A part of a successively published publication such as a periodical or publication volume, often numbered, usually containing a grouping of
 * works such as articles.\n\nSee also [blog post](http://blog.schema.org/2014/09/schemaorg-support-for-bibliographic_2.html).
*/

namespace Vnetby\Schemaorg\Types\Thing\CreativeWork\PublicationIssue;

class PublicationIssue extends \Vnetby\Schemaorg\Types\Thing\CreativeWork\CreativeWork
{
   const TYPE = 'PublicationIssue';

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
     * Identifies the issue of publication; for example, "iii" or "2".
    * @var \Vnetby\Schemaorg\DataTypes\DataText|\Vnetby\Schemaorg\DataTypes\DataInteger
    */
   protected $prop_issueNumber;

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
     * Identifies the issue of publication; for example, "iii" or "2".
    * @param \Vnetby\Schemaorg\DataTypes\DataText|\Vnetby\Schemaorg\DataTypes\DataInteger $value
    * @return static
    */
   function setIssueNumber($value)
   {
       return $this->setProp('issueNumber', $value);
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

   /**
     * Identifies the issue of publication; for example, "iii" or "2".
    * @return \Vnetby\Schemaorg\DataTypes\DataText|\Vnetby\Schemaorg\DataTypes\DataInteger|null
    */
   function getIssueNumber()
   {
       return $this->getProp('issueNumber');
   }
}
