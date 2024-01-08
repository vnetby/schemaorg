<?php

/**
 * @see https://schema.org/TVEpisode
 * A TV episode which can be part of a series or season.
 */

namespace Vnetby\Schemaorg\Types\Thing\CreativeWork\Episode;

class TVEpisode extends \Vnetby\Schemaorg\Types\Thing\CreativeWork\Episode\Episode
{
    const TYPE = 'TVEpisode';

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
}
