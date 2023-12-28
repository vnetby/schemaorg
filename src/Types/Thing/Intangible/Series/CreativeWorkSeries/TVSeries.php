<?php

/**
* @see https://schema.org/TVSeries
 * CreativeWorkSeries dedicated to TV broadcast and associated online delivery.
*/

namespace Vnetby\Schemaorg\Types\Thing\Intangible\Series\CreativeWorkSeries;

class TVSeries extends \Vnetby\Schemaorg\Types\Thing\Intangible\Series\CreativeWorkSeries\CreativeWorkSeries
{
   const TYPE = 'TVSeries';

   /**
     * The composer of the soundtrack.
    * @var \Vnetby\Schemaorg\Types\Thing\Organization\PerformingGroup\MusicGroup|\Vnetby\Schemaorg\Types\Thing\Person\Person
    */
   protected $prop_musicBy;

   /**
     * A director of e.g. TV, radio, movie, video gaming etc. content, or of an event. Directors can be associated with individual
     * items or with a series, episode, clip.
    * @var \Vnetby\Schemaorg\Types\Thing\Person\Person
    */
   protected $prop_director;

   /**
     * An [EIDR](https://eidr.org/) (Entertainment Identifier Registry) [[identifier]] representing at the most general/abstract level, a work of film or television. For example, the
     * motion picture known as "Ghostbusters" has a titleEIDR of "10.5240/7EC7-228A-510A-053E-CBB8-J". This title (or work) may have several variants, which EIDR calls
     * "edits". See [[editEIDR]]. Since schema.org types like [[Movie]], [[TVEpisode]], [[TVSeason]], and [[TVSeries]] can be used for both works and their multiple
     * expressions, it is possible to use [[titleEIDR]] alone (for a general description), or alongside [[editEIDR]] for a more edit-specific description. 
    * @var \Vnetby\Schemaorg\DataTypes\DataText|\Vnetby\Schemaorg\DataTypes\DataURL
    */
   protected $prop_titleEIDR;

   /**
     * The country of origin of something, including products as well as creative works such as movie and TV content. In the
     * case of TV and movie, this would be the country of the principle offices of the production company or individual responsible
     * for the movie. For other kinds of [[CreativeWork]] it is difficult to provide fully general guidance, and properties such as [[contentLocation]]
     * and [[locationCreated]] may be more applicable. In the case of products, the country of origin of the product. The exact interpretation
     * of this may vary by context and product type, and cannot be fully enumerated here.
    * @var \Vnetby\Schemaorg\Types\Thing\Place\AdministrativeArea\Country
    */
   protected $prop_countryOfOrigin;

   /**
     * The trailer of a movie or TV/radio series, season, episode, etc.
    * @var \Vnetby\Schemaorg\Types\Thing\CreativeWork\MediaObject\VideoObject\VideoObject
    */
   protected $prop_trailer;

   /**
     * The number of episodes in this season or series.
    * @var \Vnetby\Schemaorg\DataTypes\DataInteger
    */
   protected $prop_numberOfEpisodes;

   /**
     * An actor, e.g. in TV, radio, movie, video games etc., or in an event. Actors can be associated with individual items
     * or with a series, episode, clip.
    * @var \Vnetby\Schemaorg\Types\Thing\Person\Person
    */
   protected $prop_actor;

   /**
     * The production company or studio responsible for the item, e.g. series, video game, episode etc.
    * @var \Vnetby\Schemaorg\Types\Thing\Organization\Organization
    */
   protected $prop_productionCompany;

   /**
     * An episode of a TV, radio or game media within a series or season.
    * @var \Vnetby\Schemaorg\Types\Thing\CreativeWork\Episode\Episode
    */
   protected $prop_episode;

   /**
     * The number of seasons in this series.
    * @var \Vnetby\Schemaorg\DataTypes\DataInteger
    */
   protected $prop_numberOfSeasons;

   /**
     * A season that is part of the media series.
    * @var \Vnetby\Schemaorg\Types\Thing\CreativeWork\CreativeWorkSeason\CreativeWorkSeason
    */
   protected $prop_containsSeason;

   /**
     * The composer of the soundtrack.
    * @param \Vnetby\Schemaorg\Types\Thing\Organization\PerformingGroup\MusicGroup|\Vnetby\Schemaorg\Types\Thing\Person\Person $value
    * @return static
    */
   function setMusicBy($value)
   {
       return $this->setProp('musicBy', $value);
   }

   /**
     * A director of e.g. TV, radio, movie, video gaming etc. content, or of an event. Directors can be associated with individual
     * items or with a series, episode, clip.
    * @param \Vnetby\Schemaorg\Types\Thing\Person\Person $value
    * @return static
    */
   function setDirector($value)
   {
       return $this->setProp('director', $value);
   }

   /**
     * An [EIDR](https://eidr.org/) (Entertainment Identifier Registry) [[identifier]] representing at the most general/abstract level, a work of film or television. For example, the
     * motion picture known as "Ghostbusters" has a titleEIDR of "10.5240/7EC7-228A-510A-053E-CBB8-J". This title (or work) may have several variants, which EIDR calls
     * "edits". See [[editEIDR]]. Since schema.org types like [[Movie]], [[TVEpisode]], [[TVSeason]], and [[TVSeries]] can be used for both works and their multiple
     * expressions, it is possible to use [[titleEIDR]] alone (for a general description), or alongside [[editEIDR]] for a more edit-specific description. 
    * @param \Vnetby\Schemaorg\DataTypes\DataText|\Vnetby\Schemaorg\DataTypes\DataURL $value
    * @return static
    */
   function setTitleEIDR($value)
   {
       return $this->setProp('titleEIDR', $value);
   }

   /**
     * The country of origin of something, including products as well as creative works such as movie and TV content. In the
     * case of TV and movie, this would be the country of the principle offices of the production company or individual responsible
     * for the movie. For other kinds of [[CreativeWork]] it is difficult to provide fully general guidance, and properties such as [[contentLocation]]
     * and [[locationCreated]] may be more applicable. In the case of products, the country of origin of the product. The exact interpretation
     * of this may vary by context and product type, and cannot be fully enumerated here.
    * @param \Vnetby\Schemaorg\Types\Thing\Place\AdministrativeArea\Country $value
    * @return static
    */
   function setCountryOfOrigin($value)
   {
       return $this->setProp('countryOfOrigin', $value);
   }

   /**
     * The trailer of a movie or TV/radio series, season, episode, etc.
    * @param \Vnetby\Schemaorg\Types\Thing\CreativeWork\MediaObject\VideoObject\VideoObject $value
    * @return static
    */
   function setTrailer($value)
   {
       return $this->setProp('trailer', $value);
   }

   /**
     * The number of episodes in this season or series.
    * @param \Vnetby\Schemaorg\DataTypes\DataInteger $value
    * @return static
    */
   function setNumberOfEpisodes($value)
   {
       return $this->setProp('numberOfEpisodes', $value);
   }

   /**
     * An actor, e.g. in TV, radio, movie, video games etc., or in an event. Actors can be associated with individual items
     * or with a series, episode, clip.
    * @param \Vnetby\Schemaorg\Types\Thing\Person\Person $value
    * @return static
    */
   function setActor($value)
   {
       return $this->setProp('actor', $value);
   }

   /**
     * The production company or studio responsible for the item, e.g. series, video game, episode etc.
    * @param \Vnetby\Schemaorg\Types\Thing\Organization\Organization $value
    * @return static
    */
   function setProductionCompany($value)
   {
       return $this->setProp('productionCompany', $value);
   }

   /**
     * An episode of a TV, radio or game media within a series or season.
    * @param \Vnetby\Schemaorg\Types\Thing\CreativeWork\Episode\Episode $value
    * @return static
    */
   function setEpisode($value)
   {
       return $this->setProp('episode', $value);
   }

   /**
     * The number of seasons in this series.
    * @param \Vnetby\Schemaorg\DataTypes\DataInteger $value
    * @return static
    */
   function setNumberOfSeasons($value)
   {
       return $this->setProp('numberOfSeasons', $value);
   }

   /**
     * A season that is part of the media series.
    * @param \Vnetby\Schemaorg\Types\Thing\CreativeWork\CreativeWorkSeason\CreativeWorkSeason $value
    * @return static
    */
   function setContainsSeason($value)
   {
       return $this->setProp('containsSeason', $value);
   }

   /**
     * The composer of the soundtrack.
    * @return \Vnetby\Schemaorg\Types\Thing\Organization\PerformingGroup\MusicGroup|\Vnetby\Schemaorg\Types\Thing\Person\Person|null
    */
   function getMusicBy()
   {
       return $this->getProp('musicBy');
   }

   /**
     * A director of e.g. TV, radio, movie, video gaming etc. content, or of an event. Directors can be associated with individual
     * items or with a series, episode, clip.
    * @return \Vnetby\Schemaorg\Types\Thing\Person\Person|null
    */
   function getDirector()
   {
       return $this->getProp('director');
   }

   /**
     * An [EIDR](https://eidr.org/) (Entertainment Identifier Registry) [[identifier]] representing at the most general/abstract level, a work of film or television. For example, the
     * motion picture known as "Ghostbusters" has a titleEIDR of "10.5240/7EC7-228A-510A-053E-CBB8-J". This title (or work) may have several variants, which EIDR calls
     * "edits". See [[editEIDR]]. Since schema.org types like [[Movie]], [[TVEpisode]], [[TVSeason]], and [[TVSeries]] can be used for both works and their multiple
     * expressions, it is possible to use [[titleEIDR]] alone (for a general description), or alongside [[editEIDR]] for a more edit-specific description. 
    * @return \Vnetby\Schemaorg\DataTypes\DataText|\Vnetby\Schemaorg\DataTypes\DataURL|null
    */
   function getTitleEIDR()
   {
       return $this->getProp('titleEIDR');
   }

   /**
     * The country of origin of something, including products as well as creative works such as movie and TV content. In the
     * case of TV and movie, this would be the country of the principle offices of the production company or individual responsible
     * for the movie. For other kinds of [[CreativeWork]] it is difficult to provide fully general guidance, and properties such as [[contentLocation]]
     * and [[locationCreated]] may be more applicable. In the case of products, the country of origin of the product. The exact interpretation
     * of this may vary by context and product type, and cannot be fully enumerated here.
    * @return \Vnetby\Schemaorg\Types\Thing\Place\AdministrativeArea\Country|null
    */
   function getCountryOfOrigin()
   {
       return $this->getProp('countryOfOrigin');
   }

   /**
     * The trailer of a movie or TV/radio series, season, episode, etc.
    * @return \Vnetby\Schemaorg\Types\Thing\CreativeWork\MediaObject\VideoObject\VideoObject|null
    */
   function getTrailer()
   {
       return $this->getProp('trailer');
   }

   /**
     * The number of episodes in this season or series.
    * @return \Vnetby\Schemaorg\DataTypes\DataInteger|null
    */
   function getNumberOfEpisodes()
   {
       return $this->getProp('numberOfEpisodes');
   }

   /**
     * An actor, e.g. in TV, radio, movie, video games etc., or in an event. Actors can be associated with individual items
     * or with a series, episode, clip.
    * @return \Vnetby\Schemaorg\Types\Thing\Person\Person|null
    */
   function getActor()
   {
       return $this->getProp('actor');
   }

   /**
     * The production company or studio responsible for the item, e.g. series, video game, episode etc.
    * @return \Vnetby\Schemaorg\Types\Thing\Organization\Organization|null
    */
   function getProductionCompany()
   {
       return $this->getProp('productionCompany');
   }

   /**
     * An episode of a TV, radio or game media within a series or season.
    * @return \Vnetby\Schemaorg\Types\Thing\CreativeWork\Episode\Episode|null
    */
   function getEpisode()
   {
       return $this->getProp('episode');
   }

   /**
     * The number of seasons in this series.
    * @return \Vnetby\Schemaorg\DataTypes\DataInteger|null
    */
   function getNumberOfSeasons()
   {
       return $this->getProp('numberOfSeasons');
   }

   /**
     * A season that is part of the media series.
    * @return \Vnetby\Schemaorg\Types\Thing\CreativeWork\CreativeWorkSeason\CreativeWorkSeason|null
    */
   function getContainsSeason()
   {
       return $this->getProp('containsSeason');
   }
}
