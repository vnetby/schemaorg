<?php

/**
* @see https://schema.org/ProductGroup
 * A ProductGroup represents a group of [[Product]]s that vary only in certain well-described ways, such as by [[size]], [[color]], [[material]] etc.
 * While a ProductGroup itself is not directly offered for sale, the various varying products that it represents can be. The ProductGroup
 * serves as a prototype or template, standing in for all of the products who have an [[isVariantOf]] relationship to it. As
 * such, properties (including additional types) can be applied to the ProductGroup to represent characteristics shared by each of the (possibly very
 * many) variants. Properties that reference a ProductGroup are not included in this mechanism; neither are the following specific properties [[variesBy]], [[hasVariant]],
 * [[url]]. 
*/

namespace Vnetby\Schemaorg\Types\Thing\Product;

class ProductGroup extends \Vnetby\Schemaorg\Types\Thing\Product\Product
{
   const TYPE = 'ProductGroup';

   /**
     * Indicates a [[Product]] that is a member of this [[ProductGroup]] (or [[ProductModel]]).
    * @var \Vnetby\Schemaorg\Types\Thing\Product\Product
    */
   protected $prop_hasVariant;

   /**
     * Indicates a textual identifier for a ProductGroup.
    * @var \Vnetby\Schemaorg\DataTypes\DataText
    */
   protected $prop_productGroupID;

   /**
     * Indicates the property or properties by which the variants in a [[ProductGroup]] vary, e.g. their size, color etc. Schema.org properties can
     * be referenced by their short name e.g. "color"; terms defined elsewhere can be referenced with their URIs.
    * @var \Vnetby\Schemaorg\DataTypes\DataText|\Vnetby\Schemaorg\Types\Thing\Intangible\DefinedTerm\DefinedTerm
    */
   protected $prop_variesBy;

   /**
     * Indicates a [[Product]] that is a member of this [[ProductGroup]] (or [[ProductModel]]).
    * @param \Vnetby\Schemaorg\Types\Thing\Product\Product $value
    * @return static
    */
   function setHasVariant($value)
   {
       return $this->setProp('hasVariant', $value);
   }

   /**
     * Indicates a textual identifier for a ProductGroup.
    * @param \Vnetby\Schemaorg\DataTypes\DataText $value
    * @return static
    */
   function setProductGroupID($value)
   {
       return $this->setProp('productGroupID', $value);
   }

   /**
     * Indicates the property or properties by which the variants in a [[ProductGroup]] vary, e.g. their size, color etc. Schema.org properties can
     * be referenced by their short name e.g. "color"; terms defined elsewhere can be referenced with their URIs.
    * @param \Vnetby\Schemaorg\DataTypes\DataText|\Vnetby\Schemaorg\Types\Thing\Intangible\DefinedTerm\DefinedTerm $value
    * @return static
    */
   function setVariesBy($value)
   {
       return $this->setProp('variesBy', $value);
   }

   /**
     * Indicates a [[Product]] that is a member of this [[ProductGroup]] (or [[ProductModel]]).
    * @return \Vnetby\Schemaorg\Types\Thing\Product\Product|null
    */
   function getHasVariant()
   {
       return $this->getProp('hasVariant');
   }

   /**
     * Indicates a textual identifier for a ProductGroup.
    * @return \Vnetby\Schemaorg\DataTypes\DataText|null
    */
   function getProductGroupID()
   {
       return $this->getProp('productGroupID');
   }

   /**
     * Indicates the property or properties by which the variants in a [[ProductGroup]] vary, e.g. their size, color etc. Schema.org properties can
     * be referenced by their short name e.g. "color"; terms defined elsewhere can be referenced with their URIs.
    * @return \Vnetby\Schemaorg\DataTypes\DataText|\Vnetby\Schemaorg\Types\Thing\Intangible\DefinedTerm\DefinedTerm|null
    */
   function getVariesBy()
   {
       return $this->getProp('variesBy');
   }
}
