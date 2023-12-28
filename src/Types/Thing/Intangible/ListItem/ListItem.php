<?php

/**
* @see https://schema.org/ListItem
 * An list item, e.g. a step in a checklist or how-to description.
*/

namespace Vnetby\Schemaorg\Types\Thing\Intangible\ListItem;

class ListItem extends \Vnetby\Schemaorg\Types\Thing\Intangible\Intangible
{
   const TYPE = 'ListItem';

   /**
     * An entity represented by an entry in a list or data feed (e.g. an 'artist' in a list of 'artists').
    * @var \Vnetby\Schemaorg\Types\Thing\Thing
    */
   protected $prop_item;

   /**
     * A link to the ListItem that precedes the current one.
    * @var \Vnetby\Schemaorg\Types\Thing\Intangible\ListItem\ListItem
    */
   protected $prop_previousItem;

   /**
     * The position of an item in a series or sequence of items.
    * @var \Vnetby\Schemaorg\DataTypes\DataText|\Vnetby\Schemaorg\DataTypes\DataInteger
    */
   protected $prop_position;

   /**
     * A link to the ListItem that follows the current one.
    * @var \Vnetby\Schemaorg\Types\Thing\Intangible\ListItem\ListItem
    */
   protected $prop_nextItem;

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
     * A link to the ListItem that precedes the current one.
    * @param \Vnetby\Schemaorg\Types\Thing\Intangible\ListItem\ListItem $value
    * @return static
    */
   function setPreviousItem($value)
   {
       return $this->setProp('previousItem', $value);
   }

   /**
     * The position of an item in a series or sequence of items.
    * @param \Vnetby\Schemaorg\DataTypes\DataText|\Vnetby\Schemaorg\DataTypes\DataInteger $value
    * @return static
    */
   function setPosition($value)
   {
       return $this->setProp('position', $value);
   }

   /**
     * A link to the ListItem that follows the current one.
    * @param \Vnetby\Schemaorg\Types\Thing\Intangible\ListItem\ListItem $value
    * @return static
    */
   function setNextItem($value)
   {
       return $this->setProp('nextItem', $value);
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
     * A link to the ListItem that precedes the current one.
    * @return \Vnetby\Schemaorg\Types\Thing\Intangible\ListItem\ListItem|null
    */
   function getPreviousItem()
   {
       return $this->getProp('previousItem');
   }

   /**
     * The position of an item in a series or sequence of items.
    * @return \Vnetby\Schemaorg\DataTypes\DataText|\Vnetby\Schemaorg\DataTypes\DataInteger|null
    */
   function getPosition()
   {
       return $this->getProp('position');
   }

   /**
     * A link to the ListItem that follows the current one.
    * @return \Vnetby\Schemaorg\Types\Thing\Intangible\ListItem\ListItem|null
    */
   function getNextItem()
   {
       return $this->getProp('nextItem');
   }
}
