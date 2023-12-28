<?php

/**
* @see https://schema.org/HyperToc
 * A HyperToc represents a hypertext table of contents for complex media objects, such as [[VideoObject]], [[AudioObject]]. Items in the table of
 * contents are indicated using the [[tocEntry]] property, and typed [[HyperTocEntry]]. For cases where the same larger work is split into multiple
 * files, [[associatedMedia]] can be used on individual [[HyperTocEntry]] items.
*/

namespace Vnetby\Schemaorg\Types\Thing\CreativeWork;

class HyperToc extends \Vnetby\Schemaorg\Types\Thing\CreativeWork\CreativeWork
{
   const TYPE = 'HyperToc';

   /**
     * Indicates a [[HyperTocEntry]] in a [[HyperToc]].
    * @var \Vnetby\Schemaorg\Types\Thing\CreativeWork\HyperTocEntry
    */
   protected $prop_tocEntry;

   /**
     * A media object that encodes this CreativeWork. This property is a synonym for encoding.
    * @var \Vnetby\Schemaorg\Types\Thing\CreativeWork\MediaObject\MediaObject
    */
   protected $prop_associatedMedia;

   /**
     * Indicates a [[HyperTocEntry]] in a [[HyperToc]].
    * @param \Vnetby\Schemaorg\Types\Thing\CreativeWork\HyperTocEntry $value
    * @return static
    */
   function setTocEntry($value)
   {
       return $this->setProp('tocEntry', $value);
   }

   /**
     * A media object that encodes this CreativeWork. This property is a synonym for encoding.
    * @param \Vnetby\Schemaorg\Types\Thing\CreativeWork\MediaObject\MediaObject $value
    * @return static
    */
   function setAssociatedMedia($value)
   {
       return $this->setProp('associatedMedia', $value);
   }

   /**
     * Indicates a [[HyperTocEntry]] in a [[HyperToc]].
    * @return \Vnetby\Schemaorg\Types\Thing\CreativeWork\HyperTocEntry|null
    */
   function getTocEntry()
   {
       return $this->getProp('tocEntry');
   }

   /**
     * A media object that encodes this CreativeWork. This property is a synonym for encoding.
    * @return \Vnetby\Schemaorg\Types\Thing\CreativeWork\MediaObject\MediaObject|null
    */
   function getAssociatedMedia()
   {
       return $this->getProp('associatedMedia');
   }
}
