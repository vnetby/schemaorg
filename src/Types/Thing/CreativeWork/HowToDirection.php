<?php

/**
 * @see https://schema.org/HowToDirection
 * A direction indicating a single action to do in the instructions for how to achieve a result.
 */

namespace Vnetby\Schemaorg\Types\Thing\CreativeWork;

class HowToDirection extends \Vnetby\Schemaorg\Types\Thing\CreativeWork\CreativeWork
{
    const TYPE = 'HowToDirection';

    /**
     * A media object representing the circumstances while performing this direction.
     * @var string|\Vnetby\Schemaorg\DataTypes\DataURL|\Vnetby\Schemaorg\Types\Thing\CreativeWork\MediaObject\MediaObject
     */
    public $duringMedia;

    /**
     * The length of time it takes to perform instructions or a direction (not including time to prepare the supplies), in [ISO
     * 8601 duration format](http://en.wikipedia.org/wiki/ISO_8601).
     * @var \Vnetby\Schemaorg\Types\Thing\Intangible\Quantity\Duration
     */
    public $performTime;

    /**
     * A media object representing the circumstances before performing this direction.
     * @var string|\Vnetby\Schemaorg\DataTypes\DataURL|\Vnetby\Schemaorg\Types\Thing\CreativeWork\MediaObject\MediaObject
     */
    public $beforeMedia;

    /**
     * A sub-property of instrument. A supply consumed when performing instructions or a direction.
     * @var string|\Vnetby\Schemaorg\Types\Thing\Intangible\ListItem\HowToItem\HowToSupply|\Vnetby\Schemaorg\DataTypes\DataText
     */
    public $supply;

    /**
     * A media object representing the circumstances after performing this direction.
     * @var string|\Vnetby\Schemaorg\DataTypes\DataURL|\Vnetby\Schemaorg\Types\Thing\CreativeWork\MediaObject\MediaObject
     */
    public $afterMedia;

    /**
     * The total time required to perform instructions or a direction (including time to prepare the supplies), in [ISO 8601 duration format](http://en.wikipedia.org/wiki/ISO_8601).
     * @var \Vnetby\Schemaorg\Types\Thing\Intangible\Quantity\Duration
     */
    public $totalTime;

    /**
     * The length of time it takes to prepare the items to be used in instructions or a direction, in [ISO 8601
     * duration format](http://en.wikipedia.org/wiki/ISO_8601).
     * @var \Vnetby\Schemaorg\Types\Thing\Intangible\Quantity\Duration
     */
    public $prepTime;

    /**
     * A sub property of instrument. An object used (but not consumed) when performing instructions or a direction.
     * @var string|\Vnetby\Schemaorg\DataTypes\DataText|\Vnetby\Schemaorg\Types\Thing\Intangible\ListItem\HowToItem\HowToTool
     */
    public $tool;

    /**
     * A media object representing the circumstances while performing this direction.
     * @param string|\Vnetby\Schemaorg\DataTypes\DataURL|\Vnetby\Schemaorg\Types\Thing\CreativeWork\MediaObject\MediaObject $value
     * @return static
     */
    function setDuringMedia($value)
    {
        return $this->setProp('duringMedia', $value);
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
     * A media object representing the circumstances before performing this direction.
     * @param string|\Vnetby\Schemaorg\DataTypes\DataURL|\Vnetby\Schemaorg\Types\Thing\CreativeWork\MediaObject\MediaObject $value
     * @return static
     */
    function setBeforeMedia($value)
    {
        return $this->setProp('beforeMedia', $value);
    }

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
     * A media object representing the circumstances after performing this direction.
     * @param string|\Vnetby\Schemaorg\DataTypes\DataURL|\Vnetby\Schemaorg\Types\Thing\CreativeWork\MediaObject\MediaObject $value
     * @return static
     */
    function setAfterMedia($value)
    {
        return $this->setProp('afterMedia', $value);
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
     * A sub property of instrument. An object used (but not consumed) when performing instructions or a direction.
     * @param string|\Vnetby\Schemaorg\DataTypes\DataText|\Vnetby\Schemaorg\Types\Thing\Intangible\ListItem\HowToItem\HowToTool $value
     * @return static
     */
    function setTool($value)
    {
        return $this->setProp('tool', $value);
    }

    /**
     * A media object representing the circumstances while performing this direction.
     * @return string|\Vnetby\Schemaorg\DataTypes\DataURL|\Vnetby\Schemaorg\Types\Thing\CreativeWork\MediaObject\MediaObject|null
     */
    function getDuringMedia()
    {
        return $this->getProp('duringMedia');
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
     * A media object representing the circumstances before performing this direction.
     * @return string|\Vnetby\Schemaorg\DataTypes\DataURL|\Vnetby\Schemaorg\Types\Thing\CreativeWork\MediaObject\MediaObject|null
     */
    function getBeforeMedia()
    {
        return $this->getProp('beforeMedia');
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
     * A media object representing the circumstances after performing this direction.
     * @return string|\Vnetby\Schemaorg\DataTypes\DataURL|\Vnetby\Schemaorg\Types\Thing\CreativeWork\MediaObject\MediaObject|null
     */
    function getAfterMedia()
    {
        return $this->getProp('afterMedia');
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
     * The length of time it takes to prepare the items to be used in instructions or a direction, in [ISO 8601
     * duration format](http://en.wikipedia.org/wiki/ISO_8601).
     * @return \Vnetby\Schemaorg\Types\Thing\Intangible\Quantity\Duration|null
     */
    function getPrepTime()
    {
        return $this->getProp('prepTime');
    }

    /**
     * A sub property of instrument. An object used (but not consumed) when performing instructions or a direction.
     * @return string|\Vnetby\Schemaorg\DataTypes\DataText|\Vnetby\Schemaorg\Types\Thing\Intangible\ListItem\HowToItem\HowToTool|null
     */
    function getTool()
    {
        return $this->getProp('tool');
    }
}
