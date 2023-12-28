<?php

/**
* @see https://schema.org/MusicRelease
 * A MusicRelease is a specific release of a music album.
*/

namespace Vnetby\Schemaorg\Types\Thing\CreativeWork\MusicPlaylist;

class MusicRelease extends \Vnetby\Schemaorg\Types\Thing\CreativeWork\MusicPlaylist\MusicPlaylist
{
   const TYPE = 'MusicRelease';

   /**
     * The album this is a release of.
    * @var \Vnetby\Schemaorg\Types\Thing\CreativeWork\MusicPlaylist\MusicAlbum
    */
   protected $prop_releaseOf;

   /**
     * The group the release is credited to if different than the byArtist. For example, Red and Blue is credited to "Stefani
     * Germanotta Band", but by Lady Gaga.
    * @var \Vnetby\Schemaorg\Types\Thing\Person\Person|\Vnetby\Schemaorg\Types\Thing\Organization\Organization
    */
   protected $prop_creditedTo;

   /**
     * The label that issued the release.
    * @var \Vnetby\Schemaorg\Types\Thing\Organization\Organization
    */
   protected $prop_recordLabel;

   /**
     * The catalog number for the release.
    * @var \Vnetby\Schemaorg\DataTypes\DataText
    */
   protected $prop_catalogNumber;

   /**
     * The duration of the item (movie, audio recording, event, etc.) in [ISO 8601 date format](http://en.wikipedia.org/wiki/ISO_8601).
    * @var \Vnetby\Schemaorg\Types\Thing\Intangible\Quantity\Duration
    */
   protected $prop_duration;

   /**
     * Format of this release (the type of recording media used, i.e. compact disc, digital media, LP, etc.).
    * @var \Vnetby\Schemaorg\Types\Thing\Intangible\Enumeration\MusicReleaseFormatType\MusicReleaseFormatType
    */
   protected $prop_musicReleaseFormat;

   /**
     * The album this is a release of.
    * @param \Vnetby\Schemaorg\Types\Thing\CreativeWork\MusicPlaylist\MusicAlbum $value
    * @return static
    */
   function setReleaseOf($value)
   {
       return $this->setProp('releaseOf', $value);
   }

   /**
     * The group the release is credited to if different than the byArtist. For example, Red and Blue is credited to "Stefani
     * Germanotta Band", but by Lady Gaga.
    * @param \Vnetby\Schemaorg\Types\Thing\Person\Person|\Vnetby\Schemaorg\Types\Thing\Organization\Organization $value
    * @return static
    */
   function setCreditedTo($value)
   {
       return $this->setProp('creditedTo', $value);
   }

   /**
     * The label that issued the release.
    * @param \Vnetby\Schemaorg\Types\Thing\Organization\Organization $value
    * @return static
    */
   function setRecordLabel($value)
   {
       return $this->setProp('recordLabel', $value);
   }

   /**
     * The catalog number for the release.
    * @param \Vnetby\Schemaorg\DataTypes\DataText $value
    * @return static
    */
   function setCatalogNumber($value)
   {
       return $this->setProp('catalogNumber', $value);
   }

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
     * Format of this release (the type of recording media used, i.e. compact disc, digital media, LP, etc.).
    * @param \Vnetby\Schemaorg\Types\Thing\Intangible\Enumeration\MusicReleaseFormatType\MusicReleaseFormatType $value
    * @return static
    */
   function setMusicReleaseFormat($value)
   {
       return $this->setProp('musicReleaseFormat', $value);
   }

   /**
     * The album this is a release of.
    * @return \Vnetby\Schemaorg\Types\Thing\CreativeWork\MusicPlaylist\MusicAlbum|null
    */
   function getReleaseOf()
   {
       return $this->getProp('releaseOf');
   }

   /**
     * The group the release is credited to if different than the byArtist. For example, Red and Blue is credited to "Stefani
     * Germanotta Band", but by Lady Gaga.
    * @return \Vnetby\Schemaorg\Types\Thing\Person\Person|\Vnetby\Schemaorg\Types\Thing\Organization\Organization|null
    */
   function getCreditedTo()
   {
       return $this->getProp('creditedTo');
   }

   /**
     * The label that issued the release.
    * @return \Vnetby\Schemaorg\Types\Thing\Organization\Organization|null
    */
   function getRecordLabel()
   {
       return $this->getProp('recordLabel');
   }

   /**
     * The catalog number for the release.
    * @return \Vnetby\Schemaorg\DataTypes\DataText|null
    */
   function getCatalogNumber()
   {
       return $this->getProp('catalogNumber');
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
     * Format of this release (the type of recording media used, i.e. compact disc, digital media, LP, etc.).
    * @return \Vnetby\Schemaorg\Types\Thing\Intangible\Enumeration\MusicReleaseFormatType\MusicReleaseFormatType|null
    */
   function getMusicReleaseFormat()
   {
       return $this->getProp('musicReleaseFormat');
   }
}
