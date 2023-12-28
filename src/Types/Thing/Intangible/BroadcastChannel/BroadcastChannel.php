<?php

/**
* @see https://schema.org/BroadcastChannel
 * A unique instance of a BroadcastService on a CableOrSatelliteService lineup.
*/

namespace Vnetby\Schemaorg\Types\Thing\Intangible\BroadcastChannel;

class BroadcastChannel extends \Vnetby\Schemaorg\Types\Thing\Intangible\Intangible
{
   const TYPE = 'BroadcastChannel';

   /**
     * The frequency used for over-the-air broadcasts. Numeric values or simple ranges, e.g. 87-99. In addition a shortcut idiom is supported for
     * frequences of AM and FM radio channels, e.g. "87 FM".
    * @var \Vnetby\Schemaorg\Types\Thing\Intangible\BroadcastFrequencySpecification|\Vnetby\Schemaorg\DataTypes\DataText
    */
   protected $prop_broadcastFrequency;

   /**
     * The unique address by which the BroadcastService can be identified in a provider lineup. In US, this is typically a number.
    * @var \Vnetby\Schemaorg\DataTypes\DataText
    */
   protected $prop_broadcastChannelId;

   /**
     * The BroadcastService offered on this channel.
    * @var \Vnetby\Schemaorg\Types\Thing\Intangible\Service\BroadcastService\BroadcastService
    */
   protected $prop_providesBroadcastService;

   /**
     * The type of service required to have access to the channel (e.g. Standard or Premium).
    * @var \Vnetby\Schemaorg\DataTypes\DataText
    */
   protected $prop_broadcastServiceTier;

   /**
     * The CableOrSatelliteService offering the channel.
    * @var \Vnetby\Schemaorg\Types\Thing\Intangible\Service\CableOrSatelliteService
    */
   protected $prop_inBroadcastLineup;

   /**
     * Genre of the creative work, broadcast channel or group.
    * @var \Vnetby\Schemaorg\DataTypes\DataText|\Vnetby\Schemaorg\DataTypes\DataURL
    */
   protected $prop_genre;

   /**
     * The frequency used for over-the-air broadcasts. Numeric values or simple ranges, e.g. 87-99. In addition a shortcut idiom is supported for
     * frequences of AM and FM radio channels, e.g. "87 FM".
    * @param \Vnetby\Schemaorg\Types\Thing\Intangible\BroadcastFrequencySpecification|\Vnetby\Schemaorg\DataTypes\DataText $value
    * @return static
    */
   function setBroadcastFrequency($value)
   {
       return $this->setProp('broadcastFrequency', $value);
   }

   /**
     * The unique address by which the BroadcastService can be identified in a provider lineup. In US, this is typically a number.
    * @param \Vnetby\Schemaorg\DataTypes\DataText $value
    * @return static
    */
   function setBroadcastChannelId($value)
   {
       return $this->setProp('broadcastChannelId', $value);
   }

   /**
     * The BroadcastService offered on this channel.
    * @param \Vnetby\Schemaorg\Types\Thing\Intangible\Service\BroadcastService\BroadcastService $value
    * @return static
    */
   function setProvidesBroadcastService($value)
   {
       return $this->setProp('providesBroadcastService', $value);
   }

   /**
     * The type of service required to have access to the channel (e.g. Standard or Premium).
    * @param \Vnetby\Schemaorg\DataTypes\DataText $value
    * @return static
    */
   function setBroadcastServiceTier($value)
   {
       return $this->setProp('broadcastServiceTier', $value);
   }

   /**
     * The CableOrSatelliteService offering the channel.
    * @param \Vnetby\Schemaorg\Types\Thing\Intangible\Service\CableOrSatelliteService $value
    * @return static
    */
   function setInBroadcastLineup($value)
   {
       return $this->setProp('inBroadcastLineup', $value);
   }

   /**
     * Genre of the creative work, broadcast channel or group.
    * @param \Vnetby\Schemaorg\DataTypes\DataText|\Vnetby\Schemaorg\DataTypes\DataURL $value
    * @return static
    */
   function setGenre($value)
   {
       return $this->setProp('genre', $value);
   }

   /**
     * The frequency used for over-the-air broadcasts. Numeric values or simple ranges, e.g. 87-99. In addition a shortcut idiom is supported for
     * frequences of AM and FM radio channels, e.g. "87 FM".
    * @return \Vnetby\Schemaorg\Types\Thing\Intangible\BroadcastFrequencySpecification|\Vnetby\Schemaorg\DataTypes\DataText|null
    */
   function getBroadcastFrequency()
   {
       return $this->getProp('broadcastFrequency');
   }

   /**
     * The unique address by which the BroadcastService can be identified in a provider lineup. In US, this is typically a number.
    * @return \Vnetby\Schemaorg\DataTypes\DataText|null
    */
   function getBroadcastChannelId()
   {
       return $this->getProp('broadcastChannelId');
   }

   /**
     * The BroadcastService offered on this channel.
    * @return \Vnetby\Schemaorg\Types\Thing\Intangible\Service\BroadcastService\BroadcastService|null
    */
   function getProvidesBroadcastService()
   {
       return $this->getProp('providesBroadcastService');
   }

   /**
     * The type of service required to have access to the channel (e.g. Standard or Premium).
    * @return \Vnetby\Schemaorg\DataTypes\DataText|null
    */
   function getBroadcastServiceTier()
   {
       return $this->getProp('broadcastServiceTier');
   }

   /**
     * The CableOrSatelliteService offering the channel.
    * @return \Vnetby\Schemaorg\Types\Thing\Intangible\Service\CableOrSatelliteService|null
    */
   function getInBroadcastLineup()
   {
       return $this->getProp('inBroadcastLineup');
   }

   /**
     * Genre of the creative work, broadcast channel or group.
    * @return \Vnetby\Schemaorg\DataTypes\DataText|\Vnetby\Schemaorg\DataTypes\DataURL|null
    */
   function getGenre()
   {
       return $this->getProp('genre');
   }
}
