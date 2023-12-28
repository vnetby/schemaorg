<?php

/**
 * @see https://schema.org/LocalBusiness
 * A particular physical business or branch of an organization. Examples of LocalBusiness include a restaurant, a particular branch of a restaurant
 * chain, a branch of a bank, a medical practice, a club, a bowling alley, etc.
 */

namespace Vnetby\Schemaorg\Types\Thing\Place\LocalBusiness;

class LocalBusiness extends \Vnetby\Schemaorg\Types\Thing\Place\Place
{
    const TYPE = 'LocalBusiness';

    /**
     * The currency accepted.\n\nUse standard formats: [ISO 4217 currency format](http://en.wikipedia.org/wiki/ISO_4217), e.g. "USD"; [Ticker symbol](https://en.wikipedia.org/wiki/List_of_cryptocurrencies) for cryptocurrencies, e.g. "BTC"; well known names for
     * [Local Exchange Trading Systems](https://en.wikipedia.org/wiki/Local_exchange_trading_system) (LETS) and other currency types, e.g. "Ithaca HOUR".
     * @var \Vnetby\Schemaorg\DataTypes\DataText
     */
    protected $prop_currenciesAccepted;

    /**
     * The price range of the business, for example ```$$$```.
     * @var \Vnetby\Schemaorg\DataTypes\DataText
     */
    protected $prop_priceRange;

    /**
     * The general opening hours for a business. Opening hours can be specified as a weekly time range, starting with days, then
     * times per day. Multiple days can be listed with commas ',' separating each day. Day or time ranges are specified using
     * a hyphen '-'.\n\n* Days are specified using the following two-letter combinations: ```Mo```, ```Tu```, ```We```, ```Th```, ```Fr```, ```Sa```, ```Su```.\n* Times are specified
     * using 24:00 format. For example, 3pm is specified as ```15:00```, 10am as ```10:00```. \n* Here is an example: <code>&lt;time itemprop="openingHours" datetime=&quot;Tu,Th
     * 16:00-20:00&quot;&gt;Tuesdays and Thursdays 4-8pm&lt;/time&gt;</code>.\n* If a business is open 7 days a week, then it can be specified as <code>&lt;time itemprop=&quot;openingHours&quot;
     * datetime=&quot;Mo-Su&quot;&gt;Monday through Sunday, all day&lt;/time&gt;</code>.
     * @var \Vnetby\Schemaorg\DataTypes\DataText
     */
    protected $prop_openingHours;

    /**
     * Cash, Credit Card, Cryptocurrency, Local Exchange Tradings System, etc.
     * @var \Vnetby\Schemaorg\DataTypes\DataText
     */
    protected $prop_paymentAccepted;

    /**
     * The currency accepted.\n\nUse standard formats: [ISO 4217 currency format](http://en.wikipedia.org/wiki/ISO_4217), e.g. "USD"; [Ticker symbol](https://en.wikipedia.org/wiki/List_of_cryptocurrencies) for cryptocurrencies, e.g. "BTC"; well known names for
     * [Local Exchange Trading Systems](https://en.wikipedia.org/wiki/Local_exchange_trading_system) (LETS) and other currency types, e.g. "Ithaca HOUR".
     * @param \Vnetby\Schemaorg\DataTypes\DataText $value
     * @return static
     */
    function setCurrenciesAccepted($value)
    {
        return $this->setProp('currenciesAccepted', $value);
    }

    /**
     * The price range of the business, for example ```$$$```.
     * @param \Vnetby\Schemaorg\DataTypes\DataText $value
     * @return static
     */
    function setPriceRange($value)
    {
        return $this->setProp('priceRange', $value);
    }

    /**
     * The general opening hours for a business. Opening hours can be specified as a weekly time range, starting with days, then
     * times per day. Multiple days can be listed with commas ',' separating each day. Day or time ranges are specified using
     * a hyphen '-'.\n\n* Days are specified using the following two-letter combinations: ```Mo```, ```Tu```, ```We```, ```Th```, ```Fr```, ```Sa```, ```Su```.\n* Times are specified
     * using 24:00 format. For example, 3pm is specified as ```15:00```, 10am as ```10:00```. \n* Here is an example: <code>&lt;time itemprop="openingHours" datetime=&quot;Tu,Th
     * 16:00-20:00&quot;&gt;Tuesdays and Thursdays 4-8pm&lt;/time&gt;</code>.\n* If a business is open 7 days a week, then it can be specified as <code>&lt;time itemprop=&quot;openingHours&quot;
     * datetime=&quot;Mo-Su&quot;&gt;Monday through Sunday, all day&lt;/time&gt;</code>.
     * @param \Vnetby\Schemaorg\DataTypes\DataText $value
     * @return static
     */
    function setOpeningHours($value)
    {
        return $this->setProp('openingHours', $value);
    }

    /**
     * Cash, Credit Card, Cryptocurrency, Local Exchange Tradings System, etc.
     * @param \Vnetby\Schemaorg\DataTypes\DataText $value
     * @return static
     */
    function setPaymentAccepted($value)
    {
        return $this->setProp('paymentAccepted', $value);
    }

    /**
     * The currency accepted.\n\nUse standard formats: [ISO 4217 currency format](http://en.wikipedia.org/wiki/ISO_4217), e.g. "USD"; [Ticker symbol](https://en.wikipedia.org/wiki/List_of_cryptocurrencies) for cryptocurrencies, e.g. "BTC"; well known names for
     * [Local Exchange Trading Systems](https://en.wikipedia.org/wiki/Local_exchange_trading_system) (LETS) and other currency types, e.g. "Ithaca HOUR".
     * @return \Vnetby\Schemaorg\DataTypes\DataText|null
     */
    function getCurrenciesAccepted()
    {
        return $this->getProp('currenciesAccepted');
    }

    /**
     * The price range of the business, for example ```$$$```.
     * @return \Vnetby\Schemaorg\DataTypes\DataText|null
     */
    function getPriceRange()
    {
        return $this->getProp('priceRange');
    }

    /**
     * The general opening hours for a business. Opening hours can be specified as a weekly time range, starting with days, then
     * times per day. Multiple days can be listed with commas ',' separating each day. Day or time ranges are specified using
     * a hyphen '-'.\n\n* Days are specified using the following two-letter combinations: ```Mo```, ```Tu```, ```We```, ```Th```, ```Fr```, ```Sa```, ```Su```.\n* Times are specified
     * using 24:00 format. For example, 3pm is specified as ```15:00```, 10am as ```10:00```. \n* Here is an example: <code>&lt;time itemprop="openingHours" datetime=&quot;Tu,Th
     * 16:00-20:00&quot;&gt;Tuesdays and Thursdays 4-8pm&lt;/time&gt;</code>.\n* If a business is open 7 days a week, then it can be specified as <code>&lt;time itemprop=&quot;openingHours&quot;
     * datetime=&quot;Mo-Su&quot;&gt;Monday through Sunday, all day&lt;/time&gt;</code>.
     * @return \Vnetby\Schemaorg\DataTypes\DataText|null
     */
    function getOpeningHours()
    {
        return $this->getProp('openingHours');
    }

    /**
     * Cash, Credit Card, Cryptocurrency, Local Exchange Tradings System, etc.
     * @return \Vnetby\Schemaorg\DataTypes\DataText|null
     */
    function getPaymentAccepted()
    {
        return $this->getProp('paymentAccepted');
    }
}
