<?php

/**
 * @see https://schema.org/CompoundPriceSpecification
 * A compound price specification is one that bundles multiple prices that all apply in combination for different dimensions of consumption. Use
 * the name property of the attached unit price specification for indicating the dimension of a price component (e.g. "electricity" or "final
 * cleaning").
 */

namespace Vnetby\Schemaorg\Types\Thing\Intangible\StructuredValue\PriceSpecification;

class CompoundPriceSpecification extends \Vnetby\Schemaorg\Types\Thing\Intangible\StructuredValue\PriceSpecification\PriceSpecification
{
    const TYPE = 'CompoundPriceSpecification';

    /**
     * This property links to all [[UnitPriceSpecification]] nodes that apply in parallel for the [[CompoundPriceSpecification]] node.
     * @var \Vnetby\Schemaorg\Types\Thing\Intangible\StructuredValue\PriceSpecification\UnitPriceSpecification
     */
    public $priceComponent;

    /**
     * Defines the type of a price specified for an offered product, for example a list price, a (temporary) sale price or
     * a manufacturer suggested retail price. If multiple prices are specified for an offer the [[priceType]] property can be used to identify
     * the type of each such specified price. The value of priceType can be specified as a value from enumeration PriceTypeEnumeration or
     * as a free form text string for price types that are not already predefined in PriceTypeEnumeration.
     * @var string|\Vnetby\Schemaorg\DataTypes\DataText|\Vnetby\Schemaorg\Types\Thing\Intangible\Enumeration\PriceTypeEnumeration\PriceTypeEnumeration
     */
    public $priceType;

    /**
     * This property links to all [[UnitPriceSpecification]] nodes that apply in parallel for the [[CompoundPriceSpecification]] node.
     * @param \Vnetby\Schemaorg\Types\Thing\Intangible\StructuredValue\PriceSpecification\UnitPriceSpecification $value
     * @return static
     */
    function setPriceComponent($value)
    {
        return $this->setProp('priceComponent', $value);
    }

    /**
     * Defines the type of a price specified for an offered product, for example a list price, a (temporary) sale price or
     * a manufacturer suggested retail price. If multiple prices are specified for an offer the [[priceType]] property can be used to identify
     * the type of each such specified price. The value of priceType can be specified as a value from enumeration PriceTypeEnumeration or
     * as a free form text string for price types that are not already predefined in PriceTypeEnumeration.
     * @param string|\Vnetby\Schemaorg\DataTypes\DataText|\Vnetby\Schemaorg\Types\Thing\Intangible\Enumeration\PriceTypeEnumeration\PriceTypeEnumeration $value
     * @return static
     */
    function setPriceType($value)
    {
        return $this->setProp('priceType', $value);
    }

    /**
     * This property links to all [[UnitPriceSpecification]] nodes that apply in parallel for the [[CompoundPriceSpecification]] node.
     * @return \Vnetby\Schemaorg\Types\Thing\Intangible\StructuredValue\PriceSpecification\UnitPriceSpecification|null
     */
    function getPriceComponent()
    {
        return $this->getProp('priceComponent');
    }

    /**
     * Defines the type of a price specified for an offered product, for example a list price, a (temporary) sale price or
     * a manufacturer suggested retail price. If multiple prices are specified for an offer the [[priceType]] property can be used to identify
     * the type of each such specified price. The value of priceType can be specified as a value from enumeration PriceTypeEnumeration or
     * as a free form text string for price types that are not already predefined in PriceTypeEnumeration.
     * @return string|\Vnetby\Schemaorg\DataTypes\DataText|\Vnetby\Schemaorg\Types\Thing\Intangible\Enumeration\PriceTypeEnumeration\PriceTypeEnumeration|null
     */
    function getPriceType()
    {
        return $this->getProp('priceType');
    }
}
