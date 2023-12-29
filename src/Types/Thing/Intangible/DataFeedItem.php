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
    public $item;

    /**
     * The date on which the CreativeWork was created or the item was added to a DataFeed.
     * @var string|\Vnetby\Schemaorg\DataTypes\DataDate|\Vnetby\Schemaorg\DataTypes\DataDateTime
     */
    public $dateCreated;

    /**
     * The date on which the CreativeWork was most recently modified or when the item's entry was modified within a DataFeed.
     * @var string|\Vnetby\Schemaorg\DataTypes\DataDate|\Vnetby\Schemaorg\DataTypes\DataDateTime
     */
    public $dateModified;

    /**
     * The datetime the item was removed from the DataFeed.
     * @var string|\Vnetby\Schemaorg\DataTypes\DataDate|\Vnetby\Schemaorg\DataTypes\DataDateTime
     */
    public $dateDeleted;

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
     * @param string|\Vnetby\Schemaorg\DataTypes\DataDate|\Vnetby\Schemaorg\DataTypes\DataDateTime $value
     * @return static
     */
    function setDateCreated($value)
    {
        return $this->setProp('dateCreated', $value);
    }

    /**
     * The date on which the CreativeWork was most recently modified or when the item's entry was modified within a DataFeed.
     * @param string|\Vnetby\Schemaorg\DataTypes\DataDate|\Vnetby\Schemaorg\DataTypes\DataDateTime $value
     * @return static
     */
    function setDateModified($value)
    {
        return $this->setProp('dateModified', $value);
    }

    /**
     * The datetime the item was removed from the DataFeed.
     * @param string|\Vnetby\Schemaorg\DataTypes\DataDate|\Vnetby\Schemaorg\DataTypes\DataDateTime $value
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
     * @return string|\Vnetby\Schemaorg\DataTypes\DataDate|\Vnetby\Schemaorg\DataTypes\DataDateTime|null
     */
    function getDateCreated()
    {
        return $this->getProp('dateCreated');
    }

    /**
     * The date on which the CreativeWork was most recently modified or when the item's entry was modified within a DataFeed.
     * @return string|\Vnetby\Schemaorg\DataTypes\DataDate|\Vnetby\Schemaorg\DataTypes\DataDateTime|null
     */
    function getDateModified()
    {
        return $this->getProp('dateModified');
    }

    /**
     * The datetime the item was removed from the DataFeed.
     * @return string|\Vnetby\Schemaorg\DataTypes\DataDate|\Vnetby\Schemaorg\DataTypes\DataDateTime|null
     */
    function getDateDeleted()
    {
        return $this->getProp('dateDeleted');
    }
}
