<?php

/**
 * @see https://schema.org/MerchantReturnPolicySeasonalOverride
 * A seasonal override of a return policy, for example used for holidays.
 */

namespace Vnetby\Schemaorg\Types\Thing\Intangible;

class MerchantReturnPolicySeasonalOverride extends \Vnetby\Schemaorg\Types\Thing\Intangible\Intangible
{
    const TYPE = 'MerchantReturnPolicySeasonalOverride';

    /**
     * Specifies either a fixed return date or the number of days (from the delivery date) that a product can be returned.
     * Used when the [[returnPolicyCategory]] property is specified as [[MerchantReturnFiniteReturnWindow]].
     * @var string|int|\Vnetby\Schemaorg\DataTypes\DataDateTime|\Vnetby\Schemaorg\DataTypes\DataDate|\Vnetby\Schemaorg\DataTypes\DataInteger
     */
    public $merchantReturnDays;

    /**
     * The start date and time of the item (in [ISO 8601 date format](http://en.wikipedia.org/wiki/ISO_8601)).
     * @var string|\Vnetby\Schemaorg\DataTypes\DataDate|\Vnetby\Schemaorg\DataTypes\DataDateTime
     */
    public $startDate;

    /**
     * Specifies an applicable return policy (from an enumeration).
     * @var \Vnetby\Schemaorg\Types\Thing\Intangible\Enumeration\MerchantReturnEnumeration\MerchantReturnEnumeration
     */
    public $returnPolicyCategory;

    /**
     * The end date and time of the item (in [ISO 8601 date format](http://en.wikipedia.org/wiki/ISO_8601)).
     * @var string|\Vnetby\Schemaorg\DataTypes\DataDateTime|\Vnetby\Schemaorg\DataTypes\DataDate
     */
    public $endDate;

    /**
     * Specifies either a fixed return date or the number of days (from the delivery date) that a product can be returned.
     * Used when the [[returnPolicyCategory]] property is specified as [[MerchantReturnFiniteReturnWindow]].
     * @param string|int|\Vnetby\Schemaorg\DataTypes\DataDateTime|\Vnetby\Schemaorg\DataTypes\DataDate|\Vnetby\Schemaorg\DataTypes\DataInteger $value
     * @return static
     */
    function setMerchantReturnDays($value)
    {
        return $this->setProp('merchantReturnDays', $value);
    }

    /**
     * The start date and time of the item (in [ISO 8601 date format](http://en.wikipedia.org/wiki/ISO_8601)).
     * @param string|\Vnetby\Schemaorg\DataTypes\DataDate|\Vnetby\Schemaorg\DataTypes\DataDateTime $value
     * @return static
     */
    function setStartDate($value)
    {
        return $this->setProp('startDate', $value);
    }

    /**
     * Specifies an applicable return policy (from an enumeration).
     * @param \Vnetby\Schemaorg\Types\Thing\Intangible\Enumeration\MerchantReturnEnumeration\MerchantReturnEnumeration $value
     * @return static
     */
    function setReturnPolicyCategory($value)
    {
        return $this->setProp('returnPolicyCategory', $value);
    }

    /**
     * The end date and time of the item (in [ISO 8601 date format](http://en.wikipedia.org/wiki/ISO_8601)).
     * @param string|\Vnetby\Schemaorg\DataTypes\DataDateTime|\Vnetby\Schemaorg\DataTypes\DataDate $value
     * @return static
     */
    function setEndDate($value)
    {
        return $this->setProp('endDate', $value);
    }

    /**
     * Specifies either a fixed return date or the number of days (from the delivery date) that a product can be returned.
     * Used when the [[returnPolicyCategory]] property is specified as [[MerchantReturnFiniteReturnWindow]].
     * @return string|int|\Vnetby\Schemaorg\DataTypes\DataDateTime|\Vnetby\Schemaorg\DataTypes\DataDate|\Vnetby\Schemaorg\DataTypes\DataInteger|null
     */
    function getMerchantReturnDays()
    {
        return $this->getProp('merchantReturnDays');
    }

    /**
     * The start date and time of the item (in [ISO 8601 date format](http://en.wikipedia.org/wiki/ISO_8601)).
     * @return string|\Vnetby\Schemaorg\DataTypes\DataDate|\Vnetby\Schemaorg\DataTypes\DataDateTime|null
     */
    function getStartDate()
    {
        return $this->getProp('startDate');
    }

    /**
     * Specifies an applicable return policy (from an enumeration).
     * @return \Vnetby\Schemaorg\Types\Thing\Intangible\Enumeration\MerchantReturnEnumeration\MerchantReturnEnumeration|null
     */
    function getReturnPolicyCategory()
    {
        return $this->getProp('returnPolicyCategory');
    }

    /**
     * The end date and time of the item (in [ISO 8601 date format](http://en.wikipedia.org/wiki/ISO_8601)).
     * @return string|\Vnetby\Schemaorg\DataTypes\DataDateTime|\Vnetby\Schemaorg\DataTypes\DataDate|null
     */
    function getEndDate()
    {
        return $this->getProp('endDate');
    }
}
