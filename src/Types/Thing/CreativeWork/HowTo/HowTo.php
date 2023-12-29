<?php

/**
 * @see https://schema.org/HowTo
 * Instructions that explain how to achieve a result by performing a sequence of steps.
 */

namespace Vnetby\Schemaorg\Types\Thing\CreativeWork\HowTo;

class HowTo extends \Vnetby\Schemaorg\Types\Thing\CreativeWork\CreativeWork
{
    const TYPE = 'HowTo';

    /**
     * A sub-property of instrument. A supply consumed when performing instructions or a direction.
     * @var string|\Vnetby\Schemaorg\Types\Thing\Intangible\ListItem\HowToItem\HowToSupply|\Vnetby\Schemaorg\DataTypes\DataText
     */
    public $supply;

    /**
     * The total time required to perform instructions or a direction (including time to prepare the supplies), in [ISO 8601 duration format](http://en.wikipedia.org/wiki/ISO_8601).
     * @var \Vnetby\Schemaorg\Types\Thing\Intangible\Quantity\Duration
     */
    public $totalTime;

    /**
     * A sub property of instrument. An object used (but not consumed) when performing instructions or a direction.
     * @var string|\Vnetby\Schemaorg\Types\Thing\Intangible\ListItem\HowToItem\HowToTool|\Vnetby\Schemaorg\DataTypes\DataText
     */
    public $tool;

    /**
     * The quantity that results by performing instructions. For example, a paper airplane, 10 personalized candles.
     * @var string|\Vnetby\Schemaorg\Types\Thing\Intangible\StructuredValue\QuantitativeValue\QuantitativeValue|\Vnetby\Schemaorg\DataTypes\DataText
     */
    public $yield;

    /**
     * The length of time it takes to perform instructions or a direction (not including time to prepare the supplies), in [ISO
     * 8601 duration format](http://en.wikipedia.org/wiki/ISO_8601).
     * @var \Vnetby\Schemaorg\Types\Thing\Intangible\Quantity\Duration
     */
    public $performTime;

    /**
     * A single step item (as HowToStep, text, document, video, etc.) or a HowToSection.
     * @var string|\Vnetby\Schemaorg\Types\Thing\Intangible\ListItem\HowToSection|\Vnetby\Schemaorg\Types\Thing\Intangible\ListItem\HowToStep|\Vnetby\Schemaorg\Types\Thing\CreativeWork\CreativeWork|\Vnetby\Schemaorg\DataTypes\DataText
     */
    public $step;

    /**
     * The estimated cost of the supply or supplies consumed when performing instructions.
     * @var string|\Vnetby\Schemaorg\DataTypes\DataText|\Vnetby\Schemaorg\Types\Thing\Intangible\StructuredValue\MonetaryAmount
     */
    public $estimatedCost;

    /**
     * The length of time it takes to prepare the items to be used in instructions or a direction, in [ISO 8601
     * duration format](http://en.wikipedia.org/wiki/ISO_8601).
     * @var \Vnetby\Schemaorg\Types\Thing\Intangible\Quantity\Duration
     */
    public $prepTime;

    /**
     * A sub-property of instrument. A supply consumed when performing instructions or a direction.
     * @param string|\Vnetby\Schemaorg\Types\Thing\Intangible\ListItem\HowToItem\HowToSupply|\Vnetby\Schemaorg\DataTypes\DataText $value
     * @return static
     */
    function setSupply($value)
    {
        return $this->setProp('supply', $value);
    }

    /**
     * The total time required to perform instructions or a direction (including time to prepare the supplies), in [ISO 8601 duration format](http://en.wikipedia.org/wiki/ISO_8601).
     * @param \Vnetby\Schemaorg\Types\Thing\Intangible\Quantity\Duration $value
     * @return static
     */
    function setTotalTime($value)
    {
        return $this->setProp('totalTime', $value);
    }

    /**
     * A sub property of instrument. An object used (but not consumed) when performing instructions or a direction.
     * @param string|\Vnetby\Schemaorg\Types\Thing\Intangible\ListItem\HowToItem\HowToTool|\Vnetby\Schemaorg\DataTypes\DataText $value
     * @return static
     */
    function setTool($value)
    {
        return $this->setProp('tool', $value);
    }

    /**
     * The quantity that results by performing instructions. For example, a paper airplane, 10 personalized candles.
     * @param string|\Vnetby\Schemaorg\Types\Thing\Intangible\StructuredValue\QuantitativeValue\QuantitativeValue|\Vnetby\Schemaorg\DataTypes\DataText $value
     * @return static
     */
    function setYield($value)
    {
        return $this->setProp('yield', $value);
    }

    /**
     * The length of time it takes to perform instructions or a direction (not including time to prepare the supplies), in [ISO
     * 8601 duration format](http://en.wikipedia.org/wiki/ISO_8601).
     * @param \Vnetby\Schemaorg\Types\Thing\Intangible\Quantity\Duration $value
     * @return static
     */
    function setPerformTime($value)
    {
        return $this->setProp('performTime', $value);
    }

    /**
     * A single step item (as HowToStep, text, document, video, etc.) or a HowToSection.
     * @param string|\Vnetby\Schemaorg\Types\Thing\Intangible\ListItem\HowToSection|\Vnetby\Schemaorg\Types\Thing\Intangible\ListItem\HowToStep|\Vnetby\Schemaorg\Types\Thing\CreativeWork\CreativeWork|\Vnetby\Schemaorg\DataTypes\DataText $value
     * @return static
     */
    function setStep($value)
    {
        return $this->setProp('step', $value);
    }

    /**
     * The estimated cost of the supply or supplies consumed when performing instructions.
     * @param string|\Vnetby\Schemaorg\DataTypes\DataText|\Vnetby\Schemaorg\Types\Thing\Intangible\StructuredValue\MonetaryAmount $value
     * @return static
     */
    function setEstimatedCost($value)
    {
        return $this->setProp('estimatedCost', $value);
    }

    /**
     * The length of time it takes to prepare the items to be used in instructions or a direction, in [ISO 8601
     * duration format](http://en.wikipedia.org/wiki/ISO_8601).
     * @param \Vnetby\Schemaorg\Types\Thing\Intangible\Quantity\Duration $value
     * @return static
     */
    function setPrepTime($value)
    {
        return $this->setProp('prepTime', $value);
    }

    /**
     * A sub-property of instrument. A supply consumed when performing instructions or a direction.
     * @return string|\Vnetby\Schemaorg\Types\Thing\Intangible\ListItem\HowToItem\HowToSupply|\Vnetby\Schemaorg\DataTypes\DataText|null
     */
    function getSupply()
    {
        return $this->getProp('supply');
    }

    /**
     * The total time required to perform instructions or a direction (including time to prepare the supplies), in [ISO 8601 duration format](http://en.wikipedia.org/wiki/ISO_8601).
     * @return \Vnetby\Schemaorg\Types\Thing\Intangible\Quantity\Duration|null
     */
    function getTotalTime()
    {
        return $this->getProp('totalTime');
    }

    /**
     * A sub property of instrument. An object used (but not consumed) when performing instructions or a direction.
     * @return string|\Vnetby\Schemaorg\Types\Thing\Intangible\ListItem\HowToItem\HowToTool|\Vnetby\Schemaorg\DataTypes\DataText|null
     */
    function getTool()
    {
        return $this->getProp('tool');
    }

    /**
     * The quantity that results by performing instructions. For example, a paper airplane, 10 personalized candles.
     * @return string|\Vnetby\Schemaorg\Types\Thing\Intangible\StructuredValue\QuantitativeValue\QuantitativeValue|\Vnetby\Schemaorg\DataTypes\DataText|null
     */
    function getYield()
    {
        return $this->getProp('yield');
    }

    /**
     * The length of time it takes to perform instructions or a direction (not including time to prepare the supplies), in [ISO
     * 8601 duration format](http://en.wikipedia.org/wiki/ISO_8601).
     * @return \Vnetby\Schemaorg\Types\Thing\Intangible\Quantity\Duration|null
     */
    function getPerformTime()
    {
        return $this->getProp('performTime');
    }

    /**
     * A single step item (as HowToStep, text, document, video, etc.) or a HowToSection.
     * @return string|\Vnetby\Schemaorg\Types\Thing\Intangible\ListItem\HowToSection|\Vnetby\Schemaorg\Types\Thing\Intangible\ListItem\HowToStep|\Vnetby\Schemaorg\Types\Thing\CreativeWork\CreativeWork|\Vnetby\Schemaorg\DataTypes\DataText|null
     */
    function getStep()
    {
        return $this->getProp('step');
    }

    /**
     * The estimated cost of the supply or supplies consumed when performing instructions.
     * @return string|\Vnetby\Schemaorg\DataTypes\DataText|\Vnetby\Schemaorg\Types\Thing\Intangible\StructuredValue\MonetaryAmount|null
     */
    function getEstimatedCost()
    {
        return $this->getProp('estimatedCost');
    }

    /**
     * The length of time it takes to prepare the items to be used in instructions or a direction, in [ISO 8601
     * duration format](http://en.wikipedia.org/wiki/ISO_8601).
     * @return \Vnetby\Schemaorg\Types\Thing\Intangible\Quantity\Duration|null
     */
    function getPrepTime()
    {
        return $this->getProp('prepTime');
    }
}
