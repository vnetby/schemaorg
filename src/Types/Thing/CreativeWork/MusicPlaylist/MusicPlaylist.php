<?php

/**
* @see https://schema.org/MusicPlaylist
 * A collection of music tracks in playlist form.
*/

namespace Vnetby\Schemaorg\Types\Thing\CreativeWork\MusicPlaylist;

class MusicPlaylist extends \Vnetby\Schemaorg\Types\Thing\CreativeWork\CreativeWork
{
   const TYPE = 'MusicPlaylist';

   /**
     * The number of tracks in this album or playlist.
    * @var \Vnetby\Schemaorg\DataTypes\DataInteger
    */
   protected $prop_numTracks;

   /**
     * A music recording (track)&#x2014;usually a single song. If an ItemList is given, the list should contain items of type MusicRecording.
    * @var \Vnetby\Schemaorg\Types\Thing\Intangible\ItemList\ItemList|\Vnetby\Schemaorg\Types\Thing\CreativeWork\MusicRecording
    */
   protected $prop_track;

   /**
     * The number of tracks in this album or playlist.
    * @param \Vnetby\Schemaorg\DataTypes\DataInteger $value
    * @return static
    */
   function setNumTracks($value)
   {
       return $this->setProp('numTracks', $value);
   }

   /**
     * A music recording (track)&#x2014;usually a single song. If an ItemList is given, the list should contain items of type MusicRecording.
    * @param \Vnetby\Schemaorg\Types\Thing\Intangible\ItemList\ItemList|\Vnetby\Schemaorg\Types\Thing\CreativeWork\MusicRecording $value
    * @return static
    */
   function setTrack($value)
   {
       return $this->setProp('track', $value);
   }

   /**
     * The number of tracks in this album or playlist.
    * @return \Vnetby\Schemaorg\DataTypes\DataInteger|null
    */
   function getNumTracks()
   {
       return $this->getProp('numTracks');
   }

   /**
     * A music recording (track)&#x2014;usually a single song. If an ItemList is given, the list should contain items of type MusicRecording.
    * @return \Vnetby\Schemaorg\Types\Thing\Intangible\ItemList\ItemList|\Vnetby\Schemaorg\Types\Thing\CreativeWork\MusicRecording|null
    */
   function getTrack()
   {
       return $this->getProp('track');
   }
}
