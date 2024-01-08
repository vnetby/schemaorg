<?php

/**
 * @see https://schema.org/QuantitativeValueDistribution
 * A statistical distribution of values.
 */

namespace Vnetby\Schemaorg\Types\Thing\Intangible\StructuredValue\QuantitativeValueDistribution;

class QuantitativeValueDistribution extends \Vnetby\Schemaorg\Types\Thing\Intangible\StructuredValue\StructuredValue
{
    const TYPE = 'QuantitativeValueDistribution';

    /**
     * The duration of the item (movie, audio recording, event, etc.) in [ISO 8601 date format](http://en.wikipedia.org/wiki/ISO_8601).
     * @var \Vnetby\Schemaorg\Types\Thing\Intangible\Quantity\Duration
     */
    public $duration;

    /**
     * The 90th percentile value.
     * @var string|int|float|\Vnetby\Schemaorg\DataTypes\DataNumber
     */
    public $percentile90;

    /**
     * The 75th percentile value.
     * @var string|int|float|\Vnetby\Schemaorg\DataTypes\DataNumber
     */
    public $percentile75;

    /**
     * The 10th percentile value.
     * @var string|int|float|\Vnetby\Schemaorg\DataTypes\DataNumber
     */
    public $percentile10;

    /**
     * The median value.
     * @var string|int|float|\Vnetby\Schemaorg\DataTypes\DataNumber
     */
    public $median;

    /**
     * The 25th percentile value.
     * @var string|int|float|\Vnetby\Schemaorg\DataTypes\DataNumber
     */
    public $percentile25;

    /**
     * The duration of the item (movie, audio recording, event, etc.) in [ISO 8601 date format](http://en.wikipedia.org/wiki/ISO_8601).
     * @param \Vnetby\Schemaorg\Types\Thing\Intangible\Quantity\Duration $value
     * @return static
     */
    function setDuration($value)
    {
        return $this->setProp('duration', $value);
    }

    /**
     * The 90th percentile value.
     * @param string|int|float|\Vnetby\Schemaorg\DataTypes\DataNumber $value
     * @return static
     */
    function setPercentile90($value)
    {
        return $this->setProp('percentile90', $value);
    }

    /**
     * The 75th percentile value.
     * @param string|int|float|\Vnetby\Schemaorg\DataTypes\DataNumber $value
     * @return static
     */
    function setPercentile75($value)
    {
        return $this->setProp('percentile75', $value);
    }

    /**
     * The 10th percentile value.
     * @param string|int|float|\Vnetby\Schemaorg\DataTypes\DataNumber $value
     * @return static
     */
    function setPercentile10($value)
    {
        return $this->setProp('percentile10', $value);
    }

    /**
     * The median value.
     * @param string|int|float|\Vnetby\Schemaorg\DataTypes\DataNumber $value
     * @return static
     */
    function setMedian($value)
    {
        return $this->setProp('median', $value);
    }

    /**
     * The 25th percentile value.
     * @param string|int|float|\Vnetby\Schemaorg\DataTypes\DataNumber $value
     * @return static
     */
    function setPercentile25($value)
    {
        return $this->setProp('percentile25', $value);
    }

    /**
     * The duration of the item (movie, audio recording, event, etc.) in [ISO 8601 date format](http://en.wikipedia.org/wiki/ISO_8601).
     * @return \Vnetby\Schemaorg\Types\Thing\Intangible\Quantity\Duration|null
     */
    function getDuration()
    {
        return $this->getProp('duration');
    }

    /**
     * The 90th percentile value.
     * @return string|int|float|\Vnetby\Schemaorg\DataTypes\DataNumber|null
     */
    function getPercentile90()
    {
        return $this->getProp('percentile90');
    }

    /**
     * The 75th percentile value.
     * @return string|int|float|\Vnetby\Schemaorg\DataTypes\DataNumber|null
     */
    function getPercentile75()
    {
        return $this->getProp('percentile75');
    }

    /**
     * The 10th percentile value.
     * @return string|int|float|\Vnetby\Schemaorg\DataTypes\DataNumber|null
     */
    function getPercentile10()
    {
        return $this->getProp('percentile10');
    }

    /**
     * The median value.
     * @return string|int|float|\Vnetby\Schemaorg\DataTypes\DataNumber|null
     */
    function getMedian()
    {
        return $this->getProp('median');
    }

    /**
     * The 25th percentile value.
     * @return string|int|float|\Vnetby\Schemaorg\DataTypes\DataNumber|null
     */
    function getPercentile25()
    {
        return $this->getProp('percentile25');
    }
}
