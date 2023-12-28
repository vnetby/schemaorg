<?php

/**
 * @see https://schema.org/MonetaryAmount
 * A monetary value or range. This type can be used to describe an amount of money such as $50 USD, or
 * a range as in describing a bank account being suitable for a balance between £1,000 and £1,000,000 GBP, or the value
 * of a salary, etc. It is recommended to use [[PriceSpecification]] Types to describe the price of an Offer, Invoice, etc.
 */

namespace Vnetby\Schemaorg\Types\Thing\Intangible\StructuredValue;

class MonetaryAmount extends \Vnetby\Schemaorg\Types\Thing\Intangible\StructuredValue\StructuredValue
{
    const TYPE = 'MonetaryAmount';

    /**
     * The date when the item becomes valid.
     * @var \Vnetby\Schemaorg\DataTypes\DataDateTime|\Vnetby\Schemaorg\DataTypes\DataDate
     */
    protected $prop_validFrom;

    /**
     * The currency in which the monetary amount is expressed.\n\nUse standard formats: [ISO 4217 currency format](http://en.wikipedia.org/wiki/ISO_4217), e.g. "USD"; [Ticker symbol](https://en.wikipedia.org/wiki/List_of_cryptocurrencies) for cryptocurrencies,
     * e.g. "BTC"; well known names for [Local Exchange Trading Systems](https://en.wikipedia.org/wiki/Local_exchange_trading_system) (LETS) and other currency types, e.g. "Ithaca HOUR".
     * @var \Vnetby\Schemaorg\DataTypes\DataText
     */
    protected $prop_currency;

    /**
     * The value of a [[QuantitativeValue]] (including [[Observation]]) or property value node.\n\n* For [[QuantitativeValue]] and [[MonetaryAmount]], the recommended type for values is
     * 'Number'.\n* For [[PropertyValue]], it can be 'Text', 'Number', 'Boolean', or 'StructuredValue'.\n* Use values from 0123456789 (Unicode 'DIGIT ZERO' (U+0030) to 'DIGIT
     * NINE' (U+0039)) rather than superficially similar Unicode symbols.\n* Use '.' (Unicode 'FULL STOP' (U+002E)) rather than ',' to indicate a decimal
     * point. Avoid using these symbols as a readability separator.
     * @var \Vnetby\Schemaorg\DataTypes\DataNumber|\Vnetby\Schemaorg\Types\Thing\Intangible\StructuredValue\StructuredValue|\Vnetby\Schemaorg\DataTypes\DataBoolean|\Vnetby\Schemaorg\DataTypes\DataText
     */
    protected $prop_value;

    /**
     * The lower value of some characteristic or property.
     * @var \Vnetby\Schemaorg\DataTypes\DataNumber
     */
    protected $prop_minValue;

    /**
     * The upper value of some characteristic or property.
     * @var \Vnetby\Schemaorg\DataTypes\DataNumber
     */
    protected $prop_maxValue;

    /**
     * The date after when the item is not valid. For example the end of an offer, salary period, or a period
     * of opening hours.
     * @var \Vnetby\Schemaorg\DataTypes\DataDateTime|\Vnetby\Schemaorg\DataTypes\DataDate
     */
    protected $prop_validThrough;

    /**
     * The date when the item becomes valid.
     * @param \Vnetby\Schemaorg\DataTypes\DataDateTime|\Vnetby\Schemaorg\DataTypes\DataDate $value
     * @return static
     */
    function setValidFrom($value)
    {
        return $this->setProp('validFrom', $value);
    }

    /**
     * The currency in which the monetary amount is expressed.\n\nUse standard formats: [ISO 4217 currency format](http://en.wikipedia.org/wiki/ISO_4217), e.g. "USD"; [Ticker symbol](https://en.wikipedia.org/wiki/List_of_cryptocurrencies) for cryptocurrencies,
     * e.g. "BTC"; well known names for [Local Exchange Trading Systems](https://en.wikipedia.org/wiki/Local_exchange_trading_system) (LETS) and other currency types, e.g. "Ithaca HOUR".
     * @param \Vnetby\Schemaorg\DataTypes\DataText $value
     * @return static
     */
    function setCurrency($value)
    {
        return $this->setProp('currency', $value);
    }

    /**
     * The value of a [[QuantitativeValue]] (including [[Observation]]) or property value node.\n\n* For [[QuantitativeValue]] and [[MonetaryAmount]], the recommended type for values is
     * 'Number'.\n* For [[PropertyValue]], it can be 'Text', 'Number', 'Boolean', or 'StructuredValue'.\n* Use values from 0123456789 (Unicode 'DIGIT ZERO' (U+0030) to 'DIGIT
     * NINE' (U+0039)) rather than superficially similar Unicode symbols.\n* Use '.' (Unicode 'FULL STOP' (U+002E)) rather than ',' to indicate a decimal
     * point. Avoid using these symbols as a readability separator.
     * @param \Vnetby\Schemaorg\DataTypes\DataNumber|\Vnetby\Schemaorg\Types\Thing\Intangible\StructuredValue\StructuredValue|\Vnetby\Schemaorg\DataTypes\DataBoolean|\Vnetby\Schemaorg\DataTypes\DataText $value
     * @return static
     */
    function setValue($value)
    {
        return $this->setProp('value', $value);
    }

    /**
     * The lower value of some characteristic or property.
     * @param \Vnetby\Schemaorg\DataTypes\DataNumber $value
     * @return static
     */
    function setMinValue($value)
    {
        return $this->setProp('minValue', $value);
    }

    /**
     * The upper value of some characteristic or property.
     * @param \Vnetby\Schemaorg\DataTypes\DataNumber $value
     * @return static
     */
    function setMaxValue($value)
    {
        return $this->setProp('maxValue', $value);
    }

    /**
     * The date after when the item is not valid. For example the end of an offer, salary period, or a period
     * of opening hours.
     * @param \Vnetby\Schemaorg\DataTypes\DataDateTime|\Vnetby\Schemaorg\DataTypes\DataDate $value
     * @return static
     */
    function setValidThrough($value)
    {
        return $this->setProp('validThrough', $value);
    }

    /**
     * The date when the item becomes valid.
     * @return \Vnetby\Schemaorg\DataTypes\DataDateTime|\Vnetby\Schemaorg\DataTypes\DataDate|null
     */
    function getValidFrom()
    {
        return $this->getProp('validFrom');
    }

    /**
     * The currency in which the monetary amount is expressed.\n\nUse standard formats: [ISO 4217 currency format](http://en.wikipedia.org/wiki/ISO_4217), e.g. "USD"; [Ticker symbol](https://en.wikipedia.org/wiki/List_of_cryptocurrencies) for cryptocurrencies,
     * e.g. "BTC"; well known names for [Local Exchange Trading Systems](https://en.wikipedia.org/wiki/Local_exchange_trading_system) (LETS) and other currency types, e.g. "Ithaca HOUR".
     * @return \Vnetby\Schemaorg\DataTypes\DataText|null
     */
    function getCurrency()
    {
        return $this->getProp('currency');
    }

    /**
     * The value of a [[QuantitativeValue]] (including [[Observation]]) or property value node.\n\n* For [[QuantitativeValue]] and [[MonetaryAmount]], the recommended type for values is
     * 'Number'.\n* For [[PropertyValue]], it can be 'Text', 'Number', 'Boolean', or 'StructuredValue'.\n* Use values from 0123456789 (Unicode 'DIGIT ZERO' (U+0030) to 'DIGIT
     * NINE' (U+0039)) rather than superficially similar Unicode symbols.\n* Use '.' (Unicode 'FULL STOP' (U+002E)) rather than ',' to indicate a decimal
     * point. Avoid using these symbols as a readability separator.
     * @return \Vnetby\Schemaorg\DataTypes\DataNumber|\Vnetby\Schemaorg\Types\Thing\Intangible\StructuredValue\StructuredValue|\Vnetby\Schemaorg\DataTypes\DataBoolean|\Vnetby\Schemaorg\DataTypes\DataText|null
     */
    function getValue()
    {
        return $this->getProp('value');
    }

    /**
     * The lower value of some characteristic or property.
     * @return \Vnetby\Schemaorg\DataTypes\DataNumber|null
     */
    function getMinValue()
    {
        return $this->getProp('minValue');
    }

    /**
     * The upper value of some characteristic or property.
     * @return \Vnetby\Schemaorg\DataTypes\DataNumber|null
     */
    function getMaxValue()
    {
        return $this->getProp('maxValue');
    }

    /**
     * The date after when the item is not valid. For example the end of an offer, salary period, or a period
     * of opening hours.
     * @return \Vnetby\Schemaorg\DataTypes\DataDateTime|\Vnetby\Schemaorg\DataTypes\DataDate|null
     */
    function getValidThrough()
    {
        return $this->getProp('validThrough');
    }
}
