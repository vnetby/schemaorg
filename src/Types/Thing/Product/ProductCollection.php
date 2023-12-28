<?php

/**
 * @see https://schema.org/ProductCollection
 * A set of products (either [[ProductGroup]]s or specific variants) that are listed together e.g. in an [[Offer]].
 */

namespace Vnetby\Schemaorg\Types\Thing\Product;

class ProductCollection extends \Vnetby\Schemaorg\Types\Thing\Product\Product
{
    const TYPE = 'ProductCollection';

    /**
     * This links to a node or nodes indicating the exact quantity of the products included in an [[Offer]] or [[ProductCollection]].
     * @var \Vnetby\Schemaorg\Types\Thing\Intangible\StructuredValue\TypeAndQuantityNode
     */
    protected $prop_includesObject;

    /**
     * This links to a node or nodes indicating the exact quantity of the products included in an [[Offer]] or [[ProductCollection]].
     * @param \Vnetby\Schemaorg\Types\Thing\Intangible\StructuredValue\TypeAndQuantityNode $value
     * @return static
     */
    function setIncludesObject($value)
    {
        return $this->setProp('includesObject', $value);
    }

    /**
     * This links to a node or nodes indicating the exact quantity of the products included in an [[Offer]] or [[ProductCollection]].
     * @return \Vnetby\Schemaorg\Types\Thing\Intangible\StructuredValue\TypeAndQuantityNode|null
     */
    function getIncludesObject()
    {
        return $this->getProp('includesObject');
    }
}
