<?php

/**
 * @see https://schema.org/PriceSpecification
 * A structured value representing a price or price range. Typically, only the subclasses of this type are used for markup. It
 * is recommended to use [[MonetaryAmount]] to describe independent amounts of money such as a salary, credit card limits, etc.
 */

namespace Vnetby\Schemaorg\Types\Thing\Intangible\StructuredValue\PriceSpecification;

class PriceSpecification extends \Vnetby\Schemaorg\Types\Thing\Intangible\StructuredValue\StructuredValue
{
    const TYPE = 'PriceSpecification';

    /**
     * The highest price if the price is a range.
     * @var string|int|float|\Vnetby\Schemaorg\DataTypes\DataNumber
     */
    public $maxPrice;

    /**
     * The transaction volume, in a monetary unit, for which the offer or price specification is valid, e.g. for indicating a minimal
     * purchasing volume, to express free shipping above a certain order volume, or to limit the acceptance of credit cards to purchases
     * to a certain minimal amount.
     * @var \Vnetby\Schemaorg\Types\Thing\Intangible\StructuredValue\PriceSpecification\PriceSpecification
     */
    public $eligibleTransactionVolume;

    /**
     * The interval and unit of measurement of ordering quantities for which the offer or price specification is valid. This allows e.g.
     * specifying that a certain freight charge is valid only for a certain quantity.
     * @var \Vnetby\Schemaorg\Types\Thing\Intangible\StructuredValue\QuantitativeValue\QuantitativeValue
     */
    public $eligibleQuantity;

    /**
     * The currency of the price, or a price component when attached to [[PriceSpecification]] and its subtypes.\n\nUse standard formats: [ISO 4217 currency
     * format](http://en.wikipedia.org/wiki/ISO_4217), e.g. "USD"; [Ticker symbol](https://en.wikipedia.org/wiki/List_of_cryptocurrencies) for cryptocurrencies, e.g. "BTC"; well known names for [Local Exchange Trading Systems](https://en.wikipedia.org/wiki/Local_exchange_trading_system) (LETS) and other currency
     * types, e.g. "Ithaca HOUR".
     * @var string|\Vnetby\Schemaorg\DataTypes\DataText
     */
    public $priceCurrency;

    /**
     * The lowest price if the price is a range.
     * @var string|int|float|\Vnetby\Schemaorg\DataTypes\DataNumber
     */
    public $minPrice;

    /**
     * Specifies whether the applicable value-added tax (VAT) is included in the price specification or not.
     * @var bool|\Vnetby\Schemaorg\DataTypes\DataBoolean
     */
    public $valueAddedTaxIncluded;

    /**
     * The date after when the item is not valid. For example the end of an offer, salary period, or a period
     * of opening hours.
     * @var string|\Vnetby\Schemaorg\DataTypes\DataDateTime|\Vnetby\Schemaorg\DataTypes\DataDate
     */
    public $validThrough;

    /**
     * The date when the item becomes valid.
     * @var string|\Vnetby\Schemaorg\DataTypes\DataDateTime|\Vnetby\Schemaorg\DataTypes\DataDate
     */
    public $validFrom;

    /**
     * The offer price of a product, or of a price component when attached to PriceSpecification and its subtypes.\n\nUsage guidelines:\n\n* Use the
     * [[priceCurrency]] property (with standard formats: [ISO 4217 currency format](http://en.wikipedia.org/wiki/ISO_4217), e.g. "USD"; [Ticker symbol](https://en.wikipedia.org/wiki/List_of_cryptocurrencies) for cryptocurrencies, e.g. "BTC"; well known names for
     * [Local Exchange Trading Systems](https://en.wikipedia.org/wiki/Local_exchange_trading_system) (LETS) and other currency types, e.g. "Ithaca HOUR") instead of including [ambiguous symbols](http://en.wikipedia.org/wiki/Dollar_sign#Currencies_that_use_the_dollar_or_peso_sign) such as '$' in
     * the value.\n* Use '.' (Unicode 'FULL STOP' (U+002E)) rather than ',' to indicate a decimal point. Avoid using these symbols as
     * a readability separator.\n* Note that both [RDFa](http://www.w3.org/TR/xhtml-rdfa-primer/#using-the-content-attribute) and Microdata syntax allow the use of a "content=" attribute for publishing simple machine-readable
     * values alongside more human-friendly formatting.\n* Use values from 0123456789 (Unicode 'DIGIT ZERO' (U+0030) to 'DIGIT NINE' (U+0039)) rather than superficially similar
     * Unicode symbols. 
     * @var string|int|float|\Vnetby\Schemaorg\DataTypes\DataNumber|\Vnetby\Schemaorg\DataTypes\DataText
     */
    public $price;

    /**
     * The highest price if the price is a range.
     * @param string|int|float|\Vnetby\Schemaorg\DataTypes\DataNumber $value
     * @return static
     */
    function setMaxPrice($value)
    {
        return $this->setProp('maxPrice', $value);
    }

    /**
     * The transaction volume, in a monetary unit, for which the offer or price specification is valid, e.g. for indicating a minimal
     * purchasing volume, to express free shipping above a certain order volume, or to limit the acceptance of credit cards to purchases
     * to a certain minimal amount.
     * @param \Vnetby\Schemaorg\Types\Thing\Intangible\StructuredValue\PriceSpecification\PriceSpecification $value
     * @return static
     */
    function setEligibleTransactionVolume($value)
    {
        return $this->setProp('eligibleTransactionVolume', $value);
    }

    /**
     * The interval and unit of measurement of ordering quantities for which the offer or price specification is valid. This allows e.g.
     * specifying that a certain freight charge is valid only for a certain quantity.
     * @param \Vnetby\Schemaorg\Types\Thing\Intangible\StructuredValue\QuantitativeValue\QuantitativeValue $value
     * @return static
     */
    function setEligibleQuantity($value)
    {
        return $this->setProp('eligibleQuantity', $value);
    }

    /**
     * The currency of the price, or a price component when attached to [[PriceSpecification]] and its subtypes.\n\nUse standard formats: [ISO 4217 currency
     * format](http://en.wikipedia.org/wiki/ISO_4217), e.g. "USD"; [Ticker symbol](https://en.wikipedia.org/wiki/List_of_cryptocurrencies) for cryptocurrencies, e.g. "BTC"; well known names for [Local Exchange Trading Systems](https://en.wikipedia.org/wiki/Local_exchange_trading_system) (LETS) and other currency
     * types, e.g. "Ithaca HOUR".
     * @param string|\Vnetby\Schemaorg\DataTypes\DataText $value
     * @return static
     */
    function setPriceCurrency($value)
    {
        return $this->setProp('priceCurrency', $value);
    }

    /**
     * The lowest price if the price is a range.
     * @param string|int|float|\Vnetby\Schemaorg\DataTypes\DataNumber $value
     * @return static
     */
    function setMinPrice($value)
    {
        return $this->setProp('minPrice', $value);
    }

    /**
     * Specifies whether the applicable value-added tax (VAT) is included in the price specification or not.
     * @param bool|\Vnetby\Schemaorg\DataTypes\DataBoolean $value
     * @return static
     */
    function setValueAddedTaxIncluded($value)
    {
        return $this->setProp('valueAddedTaxIncluded', $value);
    }

    /**
     * The date after when the item is not valid. For example the end of an offer, salary period, or a period
     * of opening hours.
     * @param string|\Vnetby\Schemaorg\DataTypes\DataDateTime|\Vnetby\Schemaorg\DataTypes\DataDate $value
     * @return static
     */
    function setValidThrough($value)
    {
        return $this->setProp('validThrough', $value);
    }

    /**
     * The date when the item becomes valid.
     * @param string|\Vnetby\Schemaorg\DataTypes\DataDateTime|\Vnetby\Schemaorg\DataTypes\DataDate $value
     * @return static
     */
    function setValidFrom($value)
    {
        return $this->setProp('validFrom', $value);
    }

    /**
     * The offer price of a product, or of a price component when attached to PriceSpecification and its subtypes.\n\nUsage guidelines:\n\n* Use the
     * [[priceCurrency]] property (with standard formats: [ISO 4217 currency format](http://en.wikipedia.org/wiki/ISO_4217), e.g. "USD"; [Ticker symbol](https://en.wikipedia.org/wiki/List_of_cryptocurrencies) for cryptocurrencies, e.g. "BTC"; well known names for
     * [Local Exchange Trading Systems](https://en.wikipedia.org/wiki/Local_exchange_trading_system) (LETS) and other currency types, e.g. "Ithaca HOUR") instead of including [ambiguous symbols](http://en.wikipedia.org/wiki/Dollar_sign#Currencies_that_use_the_dollar_or_peso_sign) such as '$' in
     * the value.\n* Use '.' (Unicode 'FULL STOP' (U+002E)) rather than ',' to indicate a decimal point. Avoid using these symbols as
     * a readability separator.\n* Note that both [RDFa](http://www.w3.org/TR/xhtml-rdfa-primer/#using-the-content-attribute) and Microdata syntax allow the use of a "content=" attribute for publishing simple machine-readable
     * values alongside more human-friendly formatting.\n* Use values from 0123456789 (Unicode 'DIGIT ZERO' (U+0030) to 'DIGIT NINE' (U+0039)) rather than superficially similar
     * Unicode symbols. 
     * @param string|int|float|\Vnetby\Schemaorg\DataTypes\DataNumber|\Vnetby\Schemaorg\DataTypes\DataText $value
     * @return static
     */
    function setPrice($value)
    {
        return $this->setProp('price', $value);
    }

    /**
     * The highest price if the price is a range.
     * @return string|int|float|\Vnetby\Schemaorg\DataTypes\DataNumber|null
     */
    function getMaxPrice()
    {
        return $this->getProp('maxPrice');
    }

    /**
     * The transaction volume, in a monetary unit, for which the offer or price specification is valid, e.g. for indicating a minimal
     * purchasing volume, to express free shipping above a certain order volume, or to limit the acceptance of credit cards to purchases
     * to a certain minimal amount.
     * @return \Vnetby\Schemaorg\Types\Thing\Intangible\StructuredValue\PriceSpecification\PriceSpecification|null
     */
    function getEligibleTransactionVolume()
    {
        return $this->getProp('eligibleTransactionVolume');
    }

    /**
     * The interval and unit of measurement of ordering quantities for which the offer or price specification is valid. This allows e.g.
     * specifying that a certain freight charge is valid only for a certain quantity.
     * @return \Vnetby\Schemaorg\Types\Thing\Intangible\StructuredValue\QuantitativeValue\QuantitativeValue|null
     */
    function getEligibleQuantity()
    {
        return $this->getProp('eligibleQuantity');
    }

    /**
     * The currency of the price, or a price component when attached to [[PriceSpecification]] and its subtypes.\n\nUse standard formats: [ISO 4217 currency
     * format](http://en.wikipedia.org/wiki/ISO_4217), e.g. "USD"; [Ticker symbol](https://en.wikipedia.org/wiki/List_of_cryptocurrencies) for cryptocurrencies, e.g. "BTC"; well known names for [Local Exchange Trading Systems](https://en.wikipedia.org/wiki/Local_exchange_trading_system) (LETS) and other currency
     * types, e.g. "Ithaca HOUR".
     * @return string|\Vnetby\Schemaorg\DataTypes\DataText|null
     */
    function getPriceCurrency()
    {
        return $this->getProp('priceCurrency');
    }

    /**
     * The lowest price if the price is a range.
     * @return string|int|float|\Vnetby\Schemaorg\DataTypes\DataNumber|null
     */
    function getMinPrice()
    {
        return $this->getProp('minPrice');
    }

    /**
     * Specifies whether the applicable value-added tax (VAT) is included in the price specification or not.
     * @return bool|\Vnetby\Schemaorg\DataTypes\DataBoolean|null
     */
    function getValueAddedTaxIncluded()
    {
        return $this->getProp('valueAddedTaxIncluded');
    }

    /**
     * The date after when the item is not valid. For example the end of an offer, salary period, or a period
     * of opening hours.
     * @return string|\Vnetby\Schemaorg\DataTypes\DataDateTime|\Vnetby\Schemaorg\DataTypes\DataDate|null
     */
    function getValidThrough()
    {
        return $this->getProp('validThrough');
    }

    /**
     * The date when the item becomes valid.
     * @return string|\Vnetby\Schemaorg\DataTypes\DataDateTime|\Vnetby\Schemaorg\DataTypes\DataDate|null
     */
    function getValidFrom()
    {
        return $this->getProp('validFrom');
    }

    /**
     * The offer price of a product, or of a price component when attached to PriceSpecification and its subtypes.\n\nUsage guidelines:\n\n* Use the
     * [[priceCurrency]] property (with standard formats: [ISO 4217 currency format](http://en.wikipedia.org/wiki/ISO_4217), e.g. "USD"; [Ticker symbol](https://en.wikipedia.org/wiki/List_of_cryptocurrencies) for cryptocurrencies, e.g. "BTC"; well known names for
     * [Local Exchange Trading Systems](https://en.wikipedia.org/wiki/Local_exchange_trading_system) (LETS) and other currency types, e.g. "Ithaca HOUR") instead of including [ambiguous symbols](http://en.wikipedia.org/wiki/Dollar_sign#Currencies_that_use_the_dollar_or_peso_sign) such as '$' in
     * the value.\n* Use '.' (Unicode 'FULL STOP' (U+002E)) rather than ',' to indicate a decimal point. Avoid using these symbols as
     * a readability separator.\n* Note that both [RDFa](http://www.w3.org/TR/xhtml-rdfa-primer/#using-the-content-attribute) and Microdata syntax allow the use of a "content=" attribute for publishing simple machine-readable
     * values alongside more human-friendly formatting.\n* Use values from 0123456789 (Unicode 'DIGIT ZERO' (U+0030) to 'DIGIT NINE' (U+0039)) rather than superficially similar
     * Unicode symbols. 
     * @return string|int|float|\Vnetby\Schemaorg\DataTypes\DataNumber|\Vnetby\Schemaorg\DataTypes\DataText|null
     */
    function getPrice()
    {
        return $this->getProp('price');
    }
}
