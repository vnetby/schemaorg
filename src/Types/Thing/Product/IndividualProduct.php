<?php

/**
 * @see https://schema.org/IndividualProduct
 * A single, identifiable product instance (e.g. a laptop with a particular serial number).
 */

namespace Vnetby\Schemaorg\Types\Thing\Product;

class IndividualProduct extends \Vnetby\Schemaorg\Types\Thing\Product\Product
{
    const TYPE = 'IndividualProduct';

    /**
     * The serial number or any alphanumeric identifier of a particular product. When attached to an offer, it is a shortcut for
     * the serial number of the product included in the offer.
     * @var string|\Vnetby\Schemaorg\DataTypes\DataText
     */
    public $serialNumber;

    /**
     * The serial number or any alphanumeric identifier of a particular product. When attached to an offer, it is a shortcut for
     * the serial number of the product included in the offer.
     * @param string|\Vnetby\Schemaorg\DataTypes\DataText $value
     * @return static
     */
    function setSerialNumber($value)
    {
        return $this->setProp('serialNumber', $value);
    }

    /**
     * The serial number or any alphanumeric identifier of a particular product. When attached to an offer, it is a shortcut for
     * the serial number of the product included in the offer.
     * @return string|\Vnetby\Schemaorg\DataTypes\DataText|null
     */
    function getSerialNumber()
    {
        return $this->getProp('serialNumber');
    }
}
