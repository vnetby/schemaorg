<?php

/**
 * @see https://schema.org/BroadcastFrequencySpecification
 * The frequency in MHz and the modulation used for a particular BroadcastService.
 */

namespace Vnetby\Schemaorg\Types\Thing\Intangible;

class BroadcastFrequencySpecification extends \Vnetby\Schemaorg\Types\Thing\Intangible\Intangible
{
    const TYPE = 'BroadcastFrequencySpecification';

    /**
     * The frequency in MHz for a particular broadcast.
     * @var string|int|float|\Vnetby\Schemaorg\Types\Thing\Intangible\StructuredValue\QuantitativeValue\QuantitativeValue|\Vnetby\Schemaorg\DataTypes\DataNumber
     */
    public $broadcastFrequencyValue;

    /**
     * The subchannel used for the broadcast.
     * @var string|\Vnetby\Schemaorg\DataTypes\DataText
     */
    public $broadcastSubChannel;

    /**
     * The modulation (e.g. FM, AM, etc) used by a particular broadcast service.
     * @var string|\Vnetby\Schemaorg\DataTypes\DataText|\Vnetby\Schemaorg\Types\Thing\Intangible\Enumeration\QualitativeValue\QualitativeValue
     */
    public $broadcastSignalModulation;

    /**
     * The frequency in MHz for a particular broadcast.
     * @param string|int|float|\Vnetby\Schemaorg\Types\Thing\Intangible\StructuredValue\QuantitativeValue\QuantitativeValue|\Vnetby\Schemaorg\DataTypes\DataNumber $value
     * @return static
     */
    function setBroadcastFrequencyValue($value)
    {
        return $this->setProp('broadcastFrequencyValue', $value);
    }

    /**
     * The subchannel used for the broadcast.
     * @param string|\Vnetby\Schemaorg\DataTypes\DataText $value
     * @return static
     */
    function setBroadcastSubChannel($value)
    {
        return $this->setProp('broadcastSubChannel', $value);
    }

    /**
     * The modulation (e.g. FM, AM, etc) used by a particular broadcast service.
     * @param string|\Vnetby\Schemaorg\DataTypes\DataText|\Vnetby\Schemaorg\Types\Thing\Intangible\Enumeration\QualitativeValue\QualitativeValue $value
     * @return static
     */
    function setBroadcastSignalModulation($value)
    {
        return $this->setProp('broadcastSignalModulation', $value);
    }

    /**
     * The frequency in MHz for a particular broadcast.
     * @return string|int|float|\Vnetby\Schemaorg\Types\Thing\Intangible\StructuredValue\QuantitativeValue\QuantitativeValue|\Vnetby\Schemaorg\DataTypes\DataNumber|null
     */
    function getBroadcastFrequencyValue()
    {
        return $this->getProp('broadcastFrequencyValue');
    }

    /**
     * The subchannel used for the broadcast.
     * @return string|\Vnetby\Schemaorg\DataTypes\DataText|null
     */
    function getBroadcastSubChannel()
    {
        return $this->getProp('broadcastSubChannel');
    }

    /**
     * The modulation (e.g. FM, AM, etc) used by a particular broadcast service.
     * @return string|\Vnetby\Schemaorg\DataTypes\DataText|\Vnetby\Schemaorg\Types\Thing\Intangible\Enumeration\QualitativeValue\QualitativeValue|null
     */
    function getBroadcastSignalModulation()
    {
        return $this->getProp('broadcastSignalModulation');
    }
}
