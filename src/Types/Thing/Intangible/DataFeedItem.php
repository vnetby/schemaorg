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
     * The date on which the CreativeWork was most recently modified or when the item's entry was modified within a DataFeed.
     * @var string|\Vnetby\Schemaorg\DataTypes\DataDateTime|\Vnetby\Schemaorg\DataTypes\DataDate
     */
    public $dateModified;

    /**
     * The date on which the CreativeWork was created or the item was added to a DataFeed.
     * @var string|\Vnetby\Schemaorg\DataTypes\DataDateTime|\Vnetby\Schemaorg\DataTypes\DataDate
     */
    public $dateCreated;

    /**
     * An entity represented by an entry in a list or data feed (e.g. an 'artist' in a list of 'artists').
     * @var \Vnetby\Schemaorg\Types\Thing\Thing
     */
    public $item;

    /**
     * The datetime the item was removed from the DataFeed.
     * @var string|\Vnetby\Schemaorg\DataTypes\DataDateTime|\Vnetby\Schemaorg\DataTypes\DataDate
     */
    public $dateDeleted;

    /**
     * The date on which the CreativeWork was most recently modified or when the item's entry was modified within a DataFeed.
     * @param string|\Vnetby\Schemaorg\DataTypes\DataDateTime|\Vnetby\Schemaorg\DataTypes\DataDate $value
     * @return static
     */
    function setDateModified($value)
    {
        return $this->setProp('dateModified', $value);
    }

    /**
     * The date on which the CreativeWork was created or the item was added to a DataFeed.
     * @param string|\Vnetby\Schemaorg\DataTypes\DataDateTime|\Vnetby\Schemaorg\DataTypes\DataDate $value
     * @return static
     */
    function setDateCreated($value)
    {
        return $this->setProp('dateCreated', $value);
    }

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
     * The datetime the item was removed from the DataFeed.
     * @param string|\Vnetby\Schemaorg\DataTypes\DataDateTime|\Vnetby\Schemaorg\DataTypes\DataDate $value
     * @return static
     */
    function setDateDeleted($value)
    {
        return $this->setProp('dateDeleted', $value);
    }

    /**
     * The date on which the CreativeWork was most recently modified or when the item's entry was modified within a DataFeed.
     * @return string|\Vnetby\Schemaorg\DataTypes\DataDateTime|\Vnetby\Schemaorg\DataTypes\DataDate|null
     */
    function getDateModified()
    {
        return $this->getProp('dateModified');
    }

    /**
     * The date on which the CreativeWork was created or the item was added to a DataFeed.
     * @return string|\Vnetby\Schemaorg\DataTypes\DataDateTime|\Vnetby\Schemaorg\DataTypes\DataDate|null
     */
    function getDateCreated()
    {
        return $this->getProp('dateCreated');
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
     * The datetime the item was removed from the DataFeed.
     * @return string|\Vnetby\Schemaorg\DataTypes\DataDateTime|\Vnetby\Schemaorg\DataTypes\DataDate|null
     */
    function getDateDeleted()
    {
        return $this->getProp('dateDeleted');
    }
}
