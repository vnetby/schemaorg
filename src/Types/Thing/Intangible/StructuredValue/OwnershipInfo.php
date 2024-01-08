<?php

/**
 * @see https://schema.org/OwnershipInfo
 * A structured value providing information about when a certain organization or person owned a certain product.
 */

namespace Vnetby\Schemaorg\Types\Thing\Intangible\StructuredValue;

class OwnershipInfo extends \Vnetby\Schemaorg\Types\Thing\Intangible\StructuredValue\StructuredValue
{
    const TYPE = 'OwnershipInfo';

    /**
     * The organization or person from which the product was acquired.
     * @var \Vnetby\Schemaorg\Types\Thing\Person\Person|\Vnetby\Schemaorg\Types\Thing\Organization\Organization
     */
    public $acquiredFrom;

    /**
     * The date and time of obtaining the product.
     * @var string|\Vnetby\Schemaorg\DataTypes\DataDateTime
     */
    public $ownedFrom;

    /**
     * The date and time of giving up ownership on the product.
     * @var string|\Vnetby\Schemaorg\DataTypes\DataDateTime
     */
    public $ownedThrough;

    /**
     * The product that this structured value is referring to.
     * @var \Vnetby\Schemaorg\Types\Thing\Intangible\Service\Service|\Vnetby\Schemaorg\Types\Thing\Product\Product
     */
    public $typeOfGood;

    /**
     * The organization or person from which the product was acquired.
     * @param \Vnetby\Schemaorg\Types\Thing\Person\Person|\Vnetby\Schemaorg\Types\Thing\Organization\Organization $value
     * @return static
     */
    function setAcquiredFrom($value)
    {
        return $this->setProp('acquiredFrom', $value);
    }

    /**
     * The date and time of obtaining the product.
     * @param string|\Vnetby\Schemaorg\DataTypes\DataDateTime $value
     * @return static
     */
    function setOwnedFrom($value)
    {
        return $this->setProp('ownedFrom', $value);
    }

    /**
     * The date and time of giving up ownership on the product.
     * @param string|\Vnetby\Schemaorg\DataTypes\DataDateTime $value
     * @return static
     */
    function setOwnedThrough($value)
    {
        return $this->setProp('ownedThrough', $value);
    }

    /**
     * The product that this structured value is referring to.
     * @param \Vnetby\Schemaorg\Types\Thing\Intangible\Service\Service|\Vnetby\Schemaorg\Types\Thing\Product\Product $value
     * @return static
     */
    function setTypeOfGood($value)
    {
        return $this->setProp('typeOfGood', $value);
    }

    /**
     * The organization or person from which the product was acquired.
     * @return \Vnetby\Schemaorg\Types\Thing\Person\Person|\Vnetby\Schemaorg\Types\Thing\Organization\Organization|null
     */
    function getAcquiredFrom()
    {
        return $this->getProp('acquiredFrom');
    }

    /**
     * The date and time of obtaining the product.
     * @return string|\Vnetby\Schemaorg\DataTypes\DataDateTime|null
     */
    function getOwnedFrom()
    {
        return $this->getProp('ownedFrom');
    }

    /**
     * The date and time of giving up ownership on the product.
     * @return string|\Vnetby\Schemaorg\DataTypes\DataDateTime|null
     */
    function getOwnedThrough()
    {
        return $this->getProp('ownedThrough');
    }

    /**
     * The product that this structured value is referring to.
     * @return \Vnetby\Schemaorg\Types\Thing\Intangible\Service\Service|\Vnetby\Schemaorg\Types\Thing\Product\Product|null
     */
    function getTypeOfGood()
    {
        return $this->getProp('typeOfGood');
    }
}
