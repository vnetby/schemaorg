<?php

/**
 * @see https://schema.org/BusinessAudience
 * A set of characteristics belonging to businesses, e.g. who compose an item's target audience.
 */

namespace Vnetby\Schemaorg\Types\Thing\Intangible\Audience;

class BusinessAudience extends \Vnetby\Schemaorg\Types\Thing\Intangible\Audience\Audience
{
    const TYPE = 'BusinessAudience';

    /**
     * The age of the business.
     * @var \Vnetby\Schemaorg\Types\Thing\Intangible\StructuredValue\QuantitativeValue\QuantitativeValue
     */
    public $yearsInOperation;

    /**
     * The number of employees in an organization, e.g. business.
     * @var \Vnetby\Schemaorg\Types\Thing\Intangible\StructuredValue\QuantitativeValue\QuantitativeValue
     */
    public $numberOfEmployees;

    /**
     * The size of the business in annual revenue.
     * @var \Vnetby\Schemaorg\Types\Thing\Intangible\StructuredValue\QuantitativeValue\QuantitativeValue
     */
    public $yearlyRevenue;

    /**
     * The age of the business.
     * @param \Vnetby\Schemaorg\Types\Thing\Intangible\StructuredValue\QuantitativeValue\QuantitativeValue $value
     * @return static
     */
    function setYearsInOperation($value)
    {
        return $this->setProp('yearsInOperation', $value);
    }

    /**
     * The number of employees in an organization, e.g. business.
     * @param \Vnetby\Schemaorg\Types\Thing\Intangible\StructuredValue\QuantitativeValue\QuantitativeValue $value
     * @return static
     */
    function setNumberOfEmployees($value)
    {
        return $this->setProp('numberOfEmployees', $value);
    }

    /**
     * The size of the business in annual revenue.
     * @param \Vnetby\Schemaorg\Types\Thing\Intangible\StructuredValue\QuantitativeValue\QuantitativeValue $value
     * @return static
     */
    function setYearlyRevenue($value)
    {
        return $this->setProp('yearlyRevenue', $value);
    }

    /**
     * The age of the business.
     * @return \Vnetby\Schemaorg\Types\Thing\Intangible\StructuredValue\QuantitativeValue\QuantitativeValue|null
     */
    function getYearsInOperation()
    {
        return $this->getProp('yearsInOperation');
    }

    /**
     * The number of employees in an organization, e.g. business.
     * @return \Vnetby\Schemaorg\Types\Thing\Intangible\StructuredValue\QuantitativeValue\QuantitativeValue|null
     */
    function getNumberOfEmployees()
    {
        return $this->getProp('numberOfEmployees');
    }

    /**
     * The size of the business in annual revenue.
     * @return \Vnetby\Schemaorg\Types\Thing\Intangible\StructuredValue\QuantitativeValue\QuantitativeValue|null
     */
    function getYearlyRevenue()
    {
        return $this->getProp('yearlyRevenue');
    }
}
