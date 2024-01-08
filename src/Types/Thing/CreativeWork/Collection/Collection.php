<?php

/**
 * @see https://schema.org/Collection
 * A collection of items, e.g. creative works or products.
 */

namespace Vnetby\Schemaorg\Types\Thing\CreativeWork\Collection;

class Collection extends \Vnetby\Schemaorg\Types\Thing\CreativeWork\CreativeWork
{
    const TYPE = 'Collection';

    /**
     * The number of items in the [[Collection]].
     * @var string|int|\Vnetby\Schemaorg\DataTypes\DataInteger
     */
    public $collectionSize;

    /**
     * The number of items in the [[Collection]].
     * @param string|int|\Vnetby\Schemaorg\DataTypes\DataInteger $value
     * @return static
     */
    function setCollectionSize($value)
    {
        return $this->setProp('collectionSize', $value);
    }

    /**
     * The number of items in the [[Collection]].
     * @return string|int|\Vnetby\Schemaorg\DataTypes\DataInteger|null
     */
    function getCollectionSize()
    {
        return $this->getProp('collectionSize');
    }
}
