<?php

/**
 * @see https://schema.org/UnitPriceSpecification
 * The price asked for a given offer by the respective organization or person.
 */

namespace Vnetby\Schemaorg\Types\Thing\Intangible\StructuredValue\PriceSpecification;

class UnitPriceSpecification extends \Vnetby\Schemaorg\Types\Thing\Intangible\StructuredValue\PriceSpecification\PriceSpecification
{
    const TYPE = 'UnitPriceSpecification';

    /**
     * A string or text indicating the unit of measurement. Useful if you cannot provide a standard unit code for <a href='unitCode'>unitCode</a>.
     * @var string|\Vnetby\Schemaorg\DataTypes\DataText
     */
    public $unitText;

    /**
     * The unit of measurement given using the UN/CEFACT Common Code (3 characters) or a URL. Other codes than the UN/CEFACT Common
     * Code may be used with a prefix followed by a colon.
     * @var string|\Vnetby\Schemaorg\DataTypes\DataURL|\Vnetby\Schemaorg\DataTypes\DataText
     */
    public $unitCode;

    /**
     * Defines the type of a price specified for an offered product, for example a list price, a (temporary) sale price or
     * a manufacturer suggested retail price. If multiple prices are specified for an offer the [[priceType]] property can be used to identify
     * the type of each such specified price. The value of priceType can be specified as a value from enumeration PriceTypeEnumeration or
     * as a free form text string for price types that are not already predefined in PriceTypeEnumeration.
     * @var string|\Vnetby\Schemaorg\Types\Thing\Intangible\Enumeration\PriceTypeEnumeration\PriceTypeEnumeration|\Vnetby\Schemaorg\DataTypes\DataText
     */
    public $priceType;

    /**
     * Specifies after how much time this price (or price component) becomes valid and billing starts. Can be used, for example, to
     * model a price increase after the first year of a subscription. The unit of measurement is specified by the unitCode property.
     * @var string|int|float|\Vnetby\Schemaorg\DataTypes\DataNumber
     */
    public $billingStart;

    /**
     * Specifies for how long this price (or price component) will be billed. Can be used, for example, to model the contractual
     * duration of a subscription or payment plan. Type can be either a Duration or a Number (in which case the unit
     * of measurement, for example month, is specified by the unitCode property).
     * @var string|int|float|\Vnetby\Schemaorg\DataTypes\DataNumber|\Vnetby\Schemaorg\Types\Thing\Intangible\StructuredValue\QuantitativeValue\QuantitativeValue|\Vnetby\Schemaorg\Types\Thing\Intangible\Quantity\Duration
     */
    public $billingDuration;

    /**
     * The reference quantity for which a certain price applies, e.g. 1 EUR per 4 kWh of electricity. This property is a
     * replacement for unitOfMeasurement for the advanced cases where the price does not relate to a standard unit.
     * @var \Vnetby\Schemaorg\Types\Thing\Intangible\StructuredValue\QuantitativeValue\QuantitativeValue
     */
    public $referenceQuantity;

    /**
     * Identifies a price component (for example, a line item on an invoice), part of the total price for an offer.
     * @var \Vnetby\Schemaorg\Types\Thing\Intangible\Enumeration\PriceComponentTypeEnumeration\PriceComponentTypeEnumeration
     */
    public $priceComponentType;

    /**
     * This property specifies the minimal quantity and rounding increment that will be the basis for the billing. The unit of measurement
     * is specified by the unitCode property.
     * @var string|int|float|\Vnetby\Schemaorg\DataTypes\DataNumber
     */
    public $billingIncrement;

    /**
     * A string or text indicating the unit of measurement. Useful if you cannot provide a standard unit code for <a href='unitCode'>unitCode</a>.
     * @param string|\Vnetby\Schemaorg\DataTypes\DataText $value
     * @return static
     */
    function setUnitText($value)
    {
        return $this->setProp('unitText', $value);
    }

    /**
     * The unit of measurement given using the UN/CEFACT Common Code (3 characters) or a URL. Other codes than the UN/CEFACT Common
     * Code may be used with a prefix followed by a colon.
     * @param string|\Vnetby\Schemaorg\DataTypes\DataURL|\Vnetby\Schemaorg\DataTypes\DataText $value
     * @return static
     */
    function setUnitCode($value)
    {
        return $this->setProp('unitCode', $value);
    }

    /**
     * Defines the type of a price specified for an offered product, for example a list price, a (temporary) sale price or
     * a manufacturer suggested retail price. If multiple prices are specified for an offer the [[priceType]] property can be used to identify
     * the type of each such specified price. The value of priceType can be specified as a value from enumeration PriceTypeEnumeration or
     * as a free form text string for price types that are not already predefined in PriceTypeEnumeration.
     * @param string|\Vnetby\Schemaorg\Types\Thing\Intangible\Enumeration\PriceTypeEnumeration\PriceTypeEnumeration|\Vnetby\Schemaorg\DataTypes\DataText $value
     * @return static
     */
    function setPriceType($value)
    {
        return $this->setProp('priceType', $value);
    }

    /**
     * Specifies after how much time this price (or price component) becomes valid and billing starts. Can be used, for example, to
     * model a price increase after the first year of a subscription. The unit of measurement is specified by the unitCode property.
     * @param string|int|float|\Vnetby\Schemaorg\DataTypes\DataNumber $value
     * @return static
     */
    function setBillingStart($value)
    {
        return $this->setProp('billingStart', $value);
    }

    /**
     * Specifies for how long this price (or price component) will be billed. Can be used, for example, to model the contractual
     * duration of a subscription or payment plan. Type can be either a Duration or a Number (in which case the unit
     * of measurement, for example month, is specified by the unitCode property).
     * @param string|int|float|\Vnetby\Schemaorg\DataTypes\DataNumber|\Vnetby\Schemaorg\Types\Thing\Intangible\StructuredValue\QuantitativeValue\QuantitativeValue|\Vnetby\Schemaorg\Types\Thing\Intangible\Quantity\Duration $value
     * @return static
     */
    function setBillingDuration($value)
    {
        return $this->setProp('billingDuration', $value);
    }

    /**
     * The reference quantity for which a certain price applies, e.g. 1 EUR per 4 kWh of electricity. This property is a
     * replacement for unitOfMeasurement for the advanced cases where the price does not relate to a standard unit.
     * @param \Vnetby\Schemaorg\Types\Thing\Intangible\StructuredValue\QuantitativeValue\QuantitativeValue $value
     * @return static
     */
    function setReferenceQuantity($value)
    {
        return $this->setProp('referenceQuantity', $value);
    }

    /**
     * Identifies a price component (for example, a line item on an invoice), part of the total price for an offer.
     * @param \Vnetby\Schemaorg\Types\Thing\Intangible\Enumeration\PriceComponentTypeEnumeration\PriceComponentTypeEnumeration $value
     * @return static
     */
    function setPriceComponentType($value)
    {
        return $this->setProp('priceComponentType', $value);
    }

    /**
     * This property specifies the minimal quantity and rounding increment that will be the basis for the billing. The unit of measurement
     * is specified by the unitCode property.
     * @param string|int|float|\Vnetby\Schemaorg\DataTypes\DataNumber $value
     * @return static
     */
    function setBillingIncrement($value)
    {
        return $this->setProp('billingIncrement', $value);
    }

    /**
     * A string or text indicating the unit of measurement. Useful if you cannot provide a standard unit code for <a href='unitCode'>unitCode</a>.
     * @return string|\Vnetby\Schemaorg\DataTypes\DataText|null
     */
    function getUnitText()
    {
        return $this->getProp('unitText');
    }

    /**
     * The unit of measurement given using the UN/CEFACT Common Code (3 characters) or a URL. Other codes than the UN/CEFACT Common
     * Code may be used with a prefix followed by a colon.
     * @return string|\Vnetby\Schemaorg\DataTypes\DataURL|\Vnetby\Schemaorg\DataTypes\DataText|null
     */
    function getUnitCode()
    {
        return $this->getProp('unitCode');
    }

    /**
     * Defines the type of a price specified for an offered product, for example a list price, a (temporary) sale price or
     * a manufacturer suggested retail price. If multiple prices are specified for an offer the [[priceType]] property can be used to identify
     * the type of each such specified price. The value of priceType can be specified as a value from enumeration PriceTypeEnumeration or
     * as a free form text string for price types that are not already predefined in PriceTypeEnumeration.
     * @return string|\Vnetby\Schemaorg\Types\Thing\Intangible\Enumeration\PriceTypeEnumeration\PriceTypeEnumeration|\Vnetby\Schemaorg\DataTypes\DataText|null
     */
    function getPriceType()
    {
        return $this->getProp('priceType');
    }

    /**
     * Specifies after how much time this price (or price component) becomes valid and billing starts. Can be used, for example, to
     * model a price increase after the first year of a subscription. The unit of measurement is specified by the unitCode property.
     * @return string|int|float|\Vnetby\Schemaorg\DataTypes\DataNumber|null
     */
    function getBillingStart()
    {
        return $this->getProp('billingStart');
    }

    /**
     * Specifies for how long this price (or price component) will be billed. Can be used, for example, to model the contractual
     * duration of a subscription or payment plan. Type can be either a Duration or a Number (in which case the unit
     * of measurement, for example month, is specified by the unitCode property).
     * @return string|int|float|\Vnetby\Schemaorg\DataTypes\DataNumber|\Vnetby\Schemaorg\Types\Thing\Intangible\StructuredValue\QuantitativeValue\QuantitativeValue|\Vnetby\Schemaorg\Types\Thing\Intangible\Quantity\Duration|null
     */
    function getBillingDuration()
    {
        return $this->getProp('billingDuration');
    }

    /**
     * The reference quantity for which a certain price applies, e.g. 1 EUR per 4 kWh of electricity. This property is a
     * replacement for unitOfMeasurement for the advanced cases where the price does not relate to a standard unit.
     * @return \Vnetby\Schemaorg\Types\Thing\Intangible\StructuredValue\QuantitativeValue\QuantitativeValue|null
     */
    function getReferenceQuantity()
    {
        return $this->getProp('referenceQuantity');
    }

    /**
     * Identifies a price component (for example, a line item on an invoice), part of the total price for an offer.
     * @return \Vnetby\Schemaorg\Types\Thing\Intangible\Enumeration\PriceComponentTypeEnumeration\PriceComponentTypeEnumeration|null
     */
    function getPriceComponentType()
    {
        return $this->getProp('priceComponentType');
    }

    /**
     * This property specifies the minimal quantity and rounding increment that will be the basis for the billing. The unit of measurement
     * is specified by the unitCode property.
     * @return string|int|float|\Vnetby\Schemaorg\DataTypes\DataNumber|null
     */
    function getBillingIncrement()
    {
        return $this->getProp('billingIncrement');
    }
}
