<?php

/**
 * @see https://schema.org/WarrantyPromise
 * A structured value representing the duration and scope of services that will be provided to a customer free of charge in
 * case of a defect or malfunction of a product.
 */

namespace Vnetby\Schemaorg\Types\Thing\Intangible\StructuredValue;

class WarrantyPromise extends \Vnetby\Schemaorg\Types\Thing\Intangible\StructuredValue\StructuredValue
{
    const TYPE = 'WarrantyPromise';

    /**
     * The scope of the warranty promise.
     * @var \Vnetby\Schemaorg\Types\Thing\Intangible\Enumeration\WarrantyScope
     */
    protected $prop_warrantyScope;

    /**
     * The duration of the warranty promise. Common unitCode values are ANN for year, MON for months, or DAY for days.
     * @var \Vnetby\Schemaorg\Types\Thing\Intangible\StructuredValue\QuantitativeValue\QuantitativeValue
     */
    protected $prop_durationOfWarranty;

    /**
     * The scope of the warranty promise.
     * @param \Vnetby\Schemaorg\Types\Thing\Intangible\Enumeration\WarrantyScope $value
     * @return static
     */
    function setWarrantyScope($value)
    {
        return $this->setProp('warrantyScope', $value);
    }

    /**
     * The duration of the warranty promise. Common unitCode values are ANN for year, MON for months, or DAY for days.
     * @param \Vnetby\Schemaorg\Types\Thing\Intangible\StructuredValue\QuantitativeValue\QuantitativeValue $value
     * @return static
     */
    function setDurationOfWarranty($value)
    {
        return $this->setProp('durationOfWarranty', $value);
    }

    /**
     * The scope of the warranty promise.
     * @return \Vnetby\Schemaorg\Types\Thing\Intangible\Enumeration\WarrantyScope|null
     */
    function getWarrantyScope()
    {
        return $this->getProp('warrantyScope');
    }

    /**
     * The duration of the warranty promise. Common unitCode values are ANN for year, MON for months, or DAY for days.
     * @return \Vnetby\Schemaorg\Types\Thing\Intangible\StructuredValue\QuantitativeValue\QuantitativeValue|null
     */
    function getDurationOfWarranty()
    {
        return $this->getProp('durationOfWarranty');
    }
}
