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
     * The subchannel used for the broadcast.
    * @var \Vnetby\Schemaorg\DataTypes\DataText
    */
   protected $prop_broadcastSubChannel;

   /**
     * The frequency in MHz for a particular broadcast.
    * @var \Vnetby\Schemaorg\DataTypes\DataNumber|\Vnetby\Schemaorg\Types\Thing\Intangible\StructuredValue\QuantitativeValue\QuantitativeValue
    */
   protected $prop_broadcastFrequencyValue;

   /**
     * The modulation (e.g. FM, AM, etc) used by a particular broadcast service.
    * @var \Vnetby\Schemaorg\DataTypes\DataText|\Vnetby\Schemaorg\Types\Thing\Intangible\Enumeration\QualitativeValue\QualitativeValue
    */
   protected $prop_broadcastSignalModulation;

   /**
     * The subchannel used for the broadcast.
    * @param \Vnetby\Schemaorg\DataTypes\DataText $value
    * @return static
    */
   function setBroadcastSubChannel($value)
   {
       return $this->setProp('broadcastSubChannel', $value);
   }

   /**
     * The frequency in MHz for a particular broadcast.
    * @param \Vnetby\Schemaorg\DataTypes\DataNumber|\Vnetby\Schemaorg\Types\Thing\Intangible\StructuredValue\QuantitativeValue\QuantitativeValue $value
    * @return static
    */
   function setBroadcastFrequencyValue($value)
   {
       return $this->setProp('broadcastFrequencyValue', $value);
   }

   /**
     * The modulation (e.g. FM, AM, etc) used by a particular broadcast service.
    * @param \Vnetby\Schemaorg\DataTypes\DataText|\Vnetby\Schemaorg\Types\Thing\Intangible\Enumeration\QualitativeValue\QualitativeValue $value
    * @return static
    */
   function setBroadcastSignalModulation($value)
   {
       return $this->setProp('broadcastSignalModulation', $value);
   }

   /**
     * The subchannel used for the broadcast.
    * @return \Vnetby\Schemaorg\DataTypes\DataText|null
    */
   function getBroadcastSubChannel()
   {
       return $this->getProp('broadcastSubChannel');
   }

   /**
     * The frequency in MHz for a particular broadcast.
    * @return \Vnetby\Schemaorg\DataTypes\DataNumber|\Vnetby\Schemaorg\Types\Thing\Intangible\StructuredValue\QuantitativeValue\QuantitativeValue|null
    */
   function getBroadcastFrequencyValue()
   {
       return $this->getProp('broadcastFrequencyValue');
   }

   /**
     * The modulation (e.g. FM, AM, etc) used by a particular broadcast service.
    * @return \Vnetby\Schemaorg\DataTypes\DataText|\Vnetby\Schemaorg\Types\Thing\Intangible\Enumeration\QualitativeValue\QualitativeValue|null
    */
   function getBroadcastSignalModulation()
   {
       return $this->getProp('broadcastSignalModulation');
   }
}
