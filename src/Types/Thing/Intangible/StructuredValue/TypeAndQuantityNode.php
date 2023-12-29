<?php

/**
 * @see https://schema.org/TypeAndQuantityNode
 * A structured value indicating the quantity, unit of measurement, and business function of goods included in a bundle offer.
 */

namespace Vnetby\Schemaorg\Types\Thing\Intangible\StructuredValue;

class TypeAndQuantityNode extends \Vnetby\Schemaorg\Types\Thing\Intangible\StructuredValue\StructuredValue
{
    const TYPE = 'TypeAndQuantityNode';

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
     * The quantity of the goods included in the offer.
     * @var string|int|float|\Vnetby\Schemaorg\DataTypes\DataNumber
     */
    public $amountOfThisGood;

    /**
     * The business function (e.g. sell, lease, repair, dispose) of the offer or component of a bundle (TypeAndQuantityNode). The default is http://purl.org/goodrelations/v1#Sell.
     * @var \Vnetby\Schemaorg\Types\Thing\Intangible\Enumeration\BusinessFunction
     */
    public $businessFunction;

    /**
     * The product that this structured value is referring to.
     * @var \Vnetby\Schemaorg\Types\Thing\Intangible\Service\Service|\Vnetby\Schemaorg\Types\Thing\Product\Product
     */
    public $typeOfGood;

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
     * The quantity of the goods included in the offer.
     * @param string|int|float|\Vnetby\Schemaorg\DataTypes\DataNumber $value
     * @return static
     */
    function setAmountOfThisGood($value)
    {
        return $this->setProp('amountOfThisGood', $value);
    }

    /**
     * The business function (e.g. sell, lease, repair, dispose) of the offer or component of a bundle (TypeAndQuantityNode). The default is http://purl.org/goodrelations/v1#Sell.
     * @param \Vnetby\Schemaorg\Types\Thing\Intangible\Enumeration\BusinessFunction $value
     * @return static
     */
    function setBusinessFunction($value)
    {
        return $this->setProp('businessFunction', $value);
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
     * The quantity of the goods included in the offer.
     * @return string|int|float|\Vnetby\Schemaorg\DataTypes\DataNumber|null
     */
    function getAmountOfThisGood()
    {
        return $this->getProp('amountOfThisGood');
    }

    /**
     * The business function (e.g. sell, lease, repair, dispose) of the offer or component of a bundle (TypeAndQuantityNode). The default is http://purl.org/goodrelations/v1#Sell.
     * @return \Vnetby\Schemaorg\Types\Thing\Intangible\Enumeration\BusinessFunction|null
     */
    function getBusinessFunction()
    {
        return $this->getProp('businessFunction');
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
