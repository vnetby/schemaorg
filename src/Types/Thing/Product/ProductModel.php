<?php

/**
 * @see https://schema.org/ProductModel
 * A datasheet or vendor specification of a product (in the sense of a prototypical description).
 */

namespace Vnetby\Schemaorg\Types\Thing\Product;

class ProductModel extends \Vnetby\Schemaorg\Types\Thing\Product\Product
{
    const TYPE = 'ProductModel';

    /**
     * Indicates the kind of product that this is a variant of. In the case of [[ProductModel]], this is a pointer (from
     * a ProductModel) to a base product from which this product is a variant. It is safe to infer that the variant
     * inherits all product features from the base model, unless defined locally. This is not transitive. In the case of a [[ProductGroup]],
     * the group description also serves as a template, representing a set of Products that vary on explicitly defined, specific dimensions only
     * (so it defines both a set of variants, as well as which values distinguish amongst those variants). When used with [[ProductGroup]],
     * this property can apply to any [[Product]] included in the group.
     * @var \Vnetby\Schemaorg\Types\Thing\Product\ProductModel|\Vnetby\Schemaorg\Types\Thing\Product\ProductGroup
     */
    public $isVariantOf;

    /**
     * A pointer from a newer variant of a product to its previous, often discontinued predecessor.
     * @var \Vnetby\Schemaorg\Types\Thing\Product\ProductModel
     */
    public $successorOf;

    /**
     * A pointer from a previous, often discontinued variant of the product to its newer variant.
     * @var \Vnetby\Schemaorg\Types\Thing\Product\ProductModel
     */
    public $predecessorOf;

    /**
     * Indicates the kind of product that this is a variant of. In the case of [[ProductModel]], this is a pointer (from
     * a ProductModel) to a base product from which this product is a variant. It is safe to infer that the variant
     * inherits all product features from the base model, unless defined locally. This is not transitive. In the case of a [[ProductGroup]],
     * the group description also serves as a template, representing a set of Products that vary on explicitly defined, specific dimensions only
     * (so it defines both a set of variants, as well as which values distinguish amongst those variants). When used with [[ProductGroup]],
     * this property can apply to any [[Product]] included in the group.
     * @param \Vnetby\Schemaorg\Types\Thing\Product\ProductModel|\Vnetby\Schemaorg\Types\Thing\Product\ProductGroup $value
     * @return static
     */
    function setIsVariantOf($value)
    {
        return $this->setProp('isVariantOf', $value);
    }

    /**
     * A pointer from a newer variant of a product to its previous, often discontinued predecessor.
     * @param \Vnetby\Schemaorg\Types\Thing\Product\ProductModel $value
     * @return static
     */
    function setSuccessorOf($value)
    {
        return $this->setProp('successorOf', $value);
    }

    /**
     * A pointer from a previous, often discontinued variant of the product to its newer variant.
     * @param \Vnetby\Schemaorg\Types\Thing\Product\ProductModel $value
     * @return static
     */
    function setPredecessorOf($value)
    {
        return $this->setProp('predecessorOf', $value);
    }

    /**
     * Indicates the kind of product that this is a variant of. In the case of [[ProductModel]], this is a pointer (from
     * a ProductModel) to a base product from which this product is a variant. It is safe to infer that the variant
     * inherits all product features from the base model, unless defined locally. This is not transitive. In the case of a [[ProductGroup]],
     * the group description also serves as a template, representing a set of Products that vary on explicitly defined, specific dimensions only
     * (so it defines both a set of variants, as well as which values distinguish amongst those variants). When used with [[ProductGroup]],
     * this property can apply to any [[Product]] included in the group.
     * @return \Vnetby\Schemaorg\Types\Thing\Product\ProductModel|\Vnetby\Schemaorg\Types\Thing\Product\ProductGroup|null
     */
    function getIsVariantOf()
    {
        return $this->getProp('isVariantOf');
    }

    /**
     * A pointer from a newer variant of a product to its previous, often discontinued predecessor.
     * @return \Vnetby\Schemaorg\Types\Thing\Product\ProductModel|null
     */
    function getSuccessorOf()
    {
        return $this->getProp('successorOf');
    }

    /**
     * A pointer from a previous, often discontinued variant of the product to its newer variant.
     * @return \Vnetby\Schemaorg\Types\Thing\Product\ProductModel|null
     */
    function getPredecessorOf()
    {
        return $this->getProp('predecessorOf');
    }
}
