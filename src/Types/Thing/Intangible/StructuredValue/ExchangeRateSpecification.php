<?php

/**
 * @see https://schema.org/ExchangeRateSpecification
 * A structured value representing exchange rate.
 */

namespace Vnetby\Schemaorg\Types\Thing\Intangible\StructuredValue;

class ExchangeRateSpecification extends \Vnetby\Schemaorg\Types\Thing\Intangible\StructuredValue\StructuredValue
{
    const TYPE = 'ExchangeRateSpecification';

    /**
     * The currency in which the monetary amount is expressed.\n\nUse standard formats: [ISO 4217 currency format](http://en.wikipedia.org/wiki/ISO_4217), e.g. "USD"; [Ticker symbol](https://en.wikipedia.org/wiki/List_of_cryptocurrencies) for cryptocurrencies,
     * e.g. "BTC"; well known names for [Local Exchange Trading Systems](https://en.wikipedia.org/wiki/Local_exchange_trading_system) (LETS) and other currency types, e.g. "Ithaca HOUR".
     * @var string|\Vnetby\Schemaorg\DataTypes\DataText
     */
    public $currency;

    /**
     * The current price of a currency.
     * @var \Vnetby\Schemaorg\Types\Thing\Intangible\StructuredValue\PriceSpecification\UnitPriceSpecification
     */
    public $currentExchangeRate;

    /**
     * The difference between the price at which a broker or other intermediary buys and sells foreign currency.
     * @var string|int|float|\Vnetby\Schemaorg\DataTypes\DataNumber|\Vnetby\Schemaorg\Types\Thing\Intangible\StructuredValue\MonetaryAmount
     */
    public $exchangeRateSpread;

    /**
     * The currency in which the monetary amount is expressed.\n\nUse standard formats: [ISO 4217 currency format](http://en.wikipedia.org/wiki/ISO_4217), e.g. "USD"; [Ticker symbol](https://en.wikipedia.org/wiki/List_of_cryptocurrencies) for cryptocurrencies,
     * e.g. "BTC"; well known names for [Local Exchange Trading Systems](https://en.wikipedia.org/wiki/Local_exchange_trading_system) (LETS) and other currency types, e.g. "Ithaca HOUR".
     * @param string|\Vnetby\Schemaorg\DataTypes\DataText $value
     * @return static
     */
    function setCurrency($value)
    {
        return $this->setProp('currency', $value);
    }

    /**
     * The current price of a currency.
     * @param \Vnetby\Schemaorg\Types\Thing\Intangible\StructuredValue\PriceSpecification\UnitPriceSpecification $value
     * @return static
     */
    function setCurrentExchangeRate($value)
    {
        return $this->setProp('currentExchangeRate', $value);
    }

    /**
     * The difference between the price at which a broker or other intermediary buys and sells foreign currency.
     * @param string|int|float|\Vnetby\Schemaorg\DataTypes\DataNumber|\Vnetby\Schemaorg\Types\Thing\Intangible\StructuredValue\MonetaryAmount $value
     * @return static
     */
    function setExchangeRateSpread($value)
    {
        return $this->setProp('exchangeRateSpread', $value);
    }

    /**
     * The currency in which the monetary amount is expressed.\n\nUse standard formats: [ISO 4217 currency format](http://en.wikipedia.org/wiki/ISO_4217), e.g. "USD"; [Ticker symbol](https://en.wikipedia.org/wiki/List_of_cryptocurrencies) for cryptocurrencies,
     * e.g. "BTC"; well known names for [Local Exchange Trading Systems](https://en.wikipedia.org/wiki/Local_exchange_trading_system) (LETS) and other currency types, e.g. "Ithaca HOUR".
     * @return string|\Vnetby\Schemaorg\DataTypes\DataText|null
     */
    function getCurrency()
    {
        return $this->getProp('currency');
    }

    /**
     * The current price of a currency.
     * @return \Vnetby\Schemaorg\Types\Thing\Intangible\StructuredValue\PriceSpecification\UnitPriceSpecification|null
     */
    function getCurrentExchangeRate()
    {
        return $this->getProp('currentExchangeRate');
    }

    /**
     * The difference between the price at which a broker or other intermediary buys and sells foreign currency.
     * @return string|int|float|\Vnetby\Schemaorg\DataTypes\DataNumber|\Vnetby\Schemaorg\Types\Thing\Intangible\StructuredValue\MonetaryAmount|null
     */
    function getExchangeRateSpread()
    {
        return $this->getProp('exchangeRateSpread');
    }
}
