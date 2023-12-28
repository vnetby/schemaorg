<?php

/**
* @see https://schema.org/DataFeedItem
 * A single item within a larger data feed.
*/

namespace Vnetby\Schemaorg\Types\Thing\Intangible;

class DataFeedItem extends \Vnetby\Schemaorg\Types\Thing\Intangible\Intangible
{
   const TYPE = 'DataFeedItem';

   /**
     * An entity represented by an entry in a list or data feed (e.g. an 'artist' in a list of 'artists').
    * @var \Vnetby\Schemaorg\Types\Thing\Thing
    */
   protected $prop_item;

   /**
     * The date on which the CreativeWork was created or the item was added to a DataFeed.
    * @var \Vnetby\Schemaorg\DataTypes\DataDate|\Vnetby\Schemaorg\DataTypes\DataDateTime
    */
   protected $prop_dateCreated;

   /**
     * The date on which the CreativeWork was most recently modified or when the item's entry was modified within a DataFeed.
    * @var \Vnetby\Schemaorg\DataTypes\DataDate|\Vnetby\Schemaorg\DataTypes\DataDateTime
    */
   protected $prop_dateModified;

   /**
     * The datetime the item was removed from the DataFeed.
    * @var \Vnetby\Schemaorg\DataTypes\DataDate|\Vnetby\Schemaorg\DataTypes\DataDateTime
    */
   protected $prop_dateDeleted;

   /**
     * An entity represented by an entry in a list or data feed (e.g. an 'artist' in a list of 'artists').
    * @param \Vnetby\Schemaorg\Types\Thing\Thing $value
    * @return static
    */
   function setItem($value)
   {
       return $this->setProp('item', $value);
   }

   /**
     * The date on which the CreativeWork was created or the item was added to a DataFeed.
    * @param \Vnetby\Schemaorg\DataTypes\DataDate|\Vnetby\Schemaorg\DataTypes\DataDateTime $value
    * @return static
    */
   function setDateCreated($value)
   {
       return $this->setProp('dateCreated', $value);
   }

   /**
     * The date on which the CreativeWork was most recently modified or when the item's entry was modified within a DataFeed.
    * @param \Vnetby\Schemaorg\DataTypes\DataDate|\Vnetby\Schemaorg\DataTypes\DataDateTime $value
    * @return static
    */
   function setDateModified($value)
   {
       return $this->setProp('dateModified', $value);
   }

   /**
     * The datetime the item was removed from the DataFeed.
    * @param \Vnetby\Schemaorg\DataTypes\DataDate|\Vnetby\Schemaorg\DataTypes\DataDateTime $value
    * @return static
    */
   function setDateDeleted($value)
   {
       return $this->setProp('dateDeleted', $value);
   }

   /**
     * An entity represented by an entry in a list or data feed (e.g. an 'artist' in a list of 'artists').
    * @return \Vnetby\Schemaorg\Types\Thing\Thing|null
    */
   function getItem()
   {
       return $this->getProp('item');
   }

   /**
     * The date on which the CreativeWork was created or the item was added to a DataFeed.
    * @return \Vnetby\Schemaorg\DataTypes\DataDate|\Vnetby\Schemaorg\DataTypes\DataDateTime|null
    */
   function getDateCreated()
   {
       return $this->getProp('dateCreated');
   }

   /**
     * The date on which the CreativeWork was most recently modified or when the item's entry was modified within a DataFeed.
    * @return \Vnetby\Schemaorg\DataTypes\DataDate|\Vnetby\Schemaorg\DataTypes\DataDateTime|null
    */
   function getDateModified()
   {
       return $this->getProp('dateModified');
   }

   /**
     * The datetime the item was removed from the DataFeed.
    * @return \Vnetby\Schemaorg\DataTypes\DataDate|\Vnetby\Schemaorg\DataTypes\DataDateTime|null
    */
   function getDateDeleted()
   {
       return $this->getProp('dateDeleted');
   }
}
