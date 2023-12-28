<?php

/**
* @see https://schema.org/ScreeningEvent
 * A screening of a movie or other video.
*/

namespace Vnetby\Schemaorg\Types\Thing\Event;

class ScreeningEvent extends \Vnetby\Schemaorg\Types\Thing\Event\Event
{
   const TYPE = 'ScreeningEvent';

   /**
     * The type of screening or video broadcast used (e.g. IMAX, 3D, SD, HD, etc.).
    * @var \Vnetby\Schemaorg\DataTypes\DataText
    */
   protected $prop_videoFormat;

   /**
     * Languages in which subtitles/captions are available, in [IETF BCP 47 standard format](http://tools.ietf.org/html/bcp47).
    * @var \Vnetby\Schemaorg\Types\Thing\Intangible\Language|\Vnetby\Schemaorg\DataTypes\DataText
    */
   protected $prop_subtitleLanguage;

   /**
     * The movie presented during this event.
    * @var \Vnetby\Schemaorg\Types\Thing\CreativeWork\Movie
    */
   protected $prop_workPresented;

   /**
     * The type of screening or video broadcast used (e.g. IMAX, 3D, SD, HD, etc.).
    * @param \Vnetby\Schemaorg\DataTypes\DataText $value
    * @return static
    */
   function setVideoFormat($value)
   {
       return $this->setProp('videoFormat', $value);
   }

   /**
     * Languages in which subtitles/captions are available, in [IETF BCP 47 standard format](http://tools.ietf.org/html/bcp47).
    * @param \Vnetby\Schemaorg\Types\Thing\Intangible\Language|\Vnetby\Schemaorg\DataTypes\DataText $value
    * @return static
    */
   function setSubtitleLanguage($value)
   {
       return $this->setProp('subtitleLanguage', $value);
   }

   /**
     * The movie presented during this event.
    * @param \Vnetby\Schemaorg\Types\Thing\CreativeWork\Movie $value
    * @return static
    */
   function setWorkPresented($value)
   {
       return $this->setProp('workPresented', $value);
   }

   /**
     * The type of screening or video broadcast used (e.g. IMAX, 3D, SD, HD, etc.).
    * @return \Vnetby\Schemaorg\DataTypes\DataText|null
    */
   function getVideoFormat()
   {
       return $this->getProp('videoFormat');
   }

   /**
     * Languages in which subtitles/captions are available, in [IETF BCP 47 standard format](http://tools.ietf.org/html/bcp47).
    * @return \Vnetby\Schemaorg\Types\Thing\Intangible\Language|\Vnetby\Schemaorg\DataTypes\DataText|null
    */
   function getSubtitleLanguage()
   {
       return $this->getProp('subtitleLanguage');
   }

   /**
     * The movie presented during this event.
    * @return \Vnetby\Schemaorg\Types\Thing\CreativeWork\Movie|null
    */
   function getWorkPresented()
   {
       return $this->getProp('workPresented');
   }
}
