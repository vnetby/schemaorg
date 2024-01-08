<?php

/**
 * @see https://schema.org/Movie
 * A movie.
 */

namespace Vnetby\Schemaorg\Types\Thing\CreativeWork;

class Movie extends \Vnetby\Schemaorg\Types\Thing\CreativeWork\CreativeWork
{
    const TYPE = 'Movie';

    /**
     * The composer of the soundtrack.
     * @var \Vnetby\Schemaorg\Types\Thing\Organization\PerformingGroup\MusicGroup|\Vnetby\Schemaorg\Types\Thing\Person\Person
     */
    public $musicBy;

    /**
     * The country of origin of something, including products as well as creative works such as movie and TV content. In the
     * case of TV and movie, this would be the country of the principle offices of the production company or individual responsible
     * for the movie. For other kinds of [[CreativeWork]] it is difficult to provide fully general guidance, and properties such as [[contentLocation]]
     * and [[locationCreated]] may be more applicable. In the case of products, the country of origin of the product. The exact interpretation
     * of this may vary by context and product type, and cannot be fully enumerated here.
     * @var \Vnetby\Schemaorg\Types\Thing\Place\AdministrativeArea\Country
     */
    public $countryOfOrigin;

    /**
     * The duration of the item (movie, audio recording, event, etc.) in [ISO 8601 date format](http://en.wikipedia.org/wiki/ISO_8601).
     * @var \Vnetby\Schemaorg\Types\Thing\Intangible\Quantity\Duration
     */
    public $duration;

    /**
     * The production company or studio responsible for the item, e.g. series, video game, episode etc.
     * @var \Vnetby\Schemaorg\Types\Thing\Organization\Organization
     */
    public $productionCompany;

    /**
     * An actor, e.g. in TV, radio, movie, video games etc., or in an event. Actors can be associated with individual items
     * or with a series, episode, clip.
     * @var \Vnetby\Schemaorg\Types\Thing\Person\Person
     */
    public $actor;

    /**
     * Languages in which subtitles/captions are available, in [IETF BCP 47 standard format](http://tools.ietf.org/html/bcp47).
     * @var string|\Vnetby\Schemaorg\DataTypes\DataText|\Vnetby\Schemaorg\Types\Thing\Intangible\Language
     */
    public $subtitleLanguage;

    /**
     * An [EIDR](https://eidr.org/) (Entertainment Identifier Registry) [[identifier]] representing at the most general/abstract level, a work of film or television. For example, the
     * motion picture known as "Ghostbusters" has a titleEIDR of "10.5240/7EC7-228A-510A-053E-CBB8-J". This title (or work) may have several variants, which EIDR calls
     * "edits". See [[editEIDR]]. Since schema.org types like [[Movie]], [[TVEpisode]], [[TVSeason]], and [[TVSeries]] can be used for both works and their multiple
     * expressions, it is possible to use [[titleEIDR]] alone (for a general description), or alongside [[editEIDR]] for a more edit-specific description. 
     * @var string|\Vnetby\Schemaorg\DataTypes\DataText|\Vnetby\Schemaorg\DataTypes\DataURL
     */
    public $titleEIDR;

    /**
     * A director of e.g. TV, radio, movie, video gaming etc. content, or of an event. Directors can be associated with individual
     * items or with a series, episode, clip.
     * @var \Vnetby\Schemaorg\Types\Thing\Person\Person
     */
    public $director;

    /**
     * The trailer of a movie or TV/radio series, season, episode, etc.
     * @var \Vnetby\Schemaorg\Types\Thing\CreativeWork\MediaObject\VideoObject\VideoObject
     */
    public $trailer;

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
     * The duration of the item (movie, audio recording, event, etc.) in [ISO 8601 date format](http://en.wikipedia.org/wiki/ISO_8601).
     * @param \Vnetby\Schemaorg\Types\Thing\Intangible\Quantity\Duration $value
     * @return static
     */
    function setDuration($value)
    {
        return $this->setProp('duration', $value);
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
     * Languages in which subtitles/captions are available, in [IETF BCP 47 standard format](http://tools.ietf.org/html/bcp47).
     * @param string|\Vnetby\Schemaorg\DataTypes\DataText|\Vnetby\Schemaorg\Types\Thing\Intangible\Language $value
     * @return static
     */
    function setSubtitleLanguage($value)
    {
        return $this->setProp('subtitleLanguage', $value);
    }

    /**
     * An [EIDR](https://eidr.org/) (Entertainment Identifier Registry) [[identifier]] representing at the most general/abstract level, a work of film or television. For example, the
     * motion picture known as "Ghostbusters" has a titleEIDR of "10.5240/7EC7-228A-510A-053E-CBB8-J". This title (or work) may have several variants, which EIDR calls
     * "edits". See [[editEIDR]]. Since schema.org types like [[Movie]], [[TVEpisode]], [[TVSeason]], and [[TVSeries]] can be used for both works and their multiple
     * expressions, it is possible to use [[titleEIDR]] alone (for a general description), or alongside [[editEIDR]] for a more edit-specific description. 
     * @param string|\Vnetby\Schemaorg\DataTypes\DataText|\Vnetby\Schemaorg\DataTypes\DataURL $value
     * @return static
     */
    function setTitleEIDR($value)
    {
        return $this->setProp('titleEIDR', $value);
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
     * The trailer of a movie or TV/radio series, season, episode, etc.
     * @param \Vnetby\Schemaorg\Types\Thing\CreativeWork\MediaObject\VideoObject\VideoObject $value
     * @return static
     */
    function setTrailer($value)
    {
        return $this->setProp('trailer', $value);
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
     * The duration of the item (movie, audio recording, event, etc.) in [ISO 8601 date format](http://en.wikipedia.org/wiki/ISO_8601).
     * @return \Vnetby\Schemaorg\Types\Thing\Intangible\Quantity\Duration|null
     */
    function getDuration()
    {
        return $this->getProp('duration');
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
     * An actor, e.g. in TV, radio, movie, video games etc., or in an event. Actors can be associated with individual items
     * or with a series, episode, clip.
     * @return \Vnetby\Schemaorg\Types\Thing\Person\Person|null
     */
    function getActor()
    {
        return $this->getProp('actor');
    }

    /**
     * Languages in which subtitles/captions are available, in [IETF BCP 47 standard format](http://tools.ietf.org/html/bcp47).
     * @return string|\Vnetby\Schemaorg\DataTypes\DataText|\Vnetby\Schemaorg\Types\Thing\Intangible\Language|null
     */
    function getSubtitleLanguage()
    {
        return $this->getProp('subtitleLanguage');
    }

    /**
     * An [EIDR](https://eidr.org/) (Entertainment Identifier Registry) [[identifier]] representing at the most general/abstract level, a work of film or television. For example, the
     * motion picture known as "Ghostbusters" has a titleEIDR of "10.5240/7EC7-228A-510A-053E-CBB8-J". This title (or work) may have several variants, which EIDR calls
     * "edits". See [[editEIDR]]. Since schema.org types like [[Movie]], [[TVEpisode]], [[TVSeason]], and [[TVSeries]] can be used for both works and their multiple
     * expressions, it is possible to use [[titleEIDR]] alone (for a general description), or alongside [[editEIDR]] for a more edit-specific description. 
     * @return string|\Vnetby\Schemaorg\DataTypes\DataText|\Vnetby\Schemaorg\DataTypes\DataURL|null
     */
    function getTitleEIDR()
    {
        return $this->getProp('titleEIDR');
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
     * The trailer of a movie or TV/radio series, season, episode, etc.
     * @return \Vnetby\Schemaorg\Types\Thing\CreativeWork\MediaObject\VideoObject\VideoObject|null
     */
    function getTrailer()
    {
        return $this->getProp('trailer');
    }
}
