<?php

/**
 * @see https://schema.org/Brand
 * A brand is a name used by an organization or business person for labeling a product, product group, or similar.
 */

namespace Vnetby\Schemaorg\Types\Thing\Intangible;

class Brand extends \Vnetby\Schemaorg\Types\Thing\Intangible\Intangible
{
    const TYPE = 'Brand';

    /**
     * The overall rating, based on a collection of reviews or ratings, of the item.
     * @var \Vnetby\Schemaorg\Types\Thing\Intangible\Rating\AggregateRating\AggregateRating
     */
    public $aggregateRating;

    /**
     * An associated logo.
     * @var string|\Vnetby\Schemaorg\Types\Thing\CreativeWork\MediaObject\ImageObject\ImageObject|\Vnetby\Schemaorg\DataTypes\DataURL
     */
    public $logo;

    /**
     * A slogan or motto associated with the item.
     * @var string|\Vnetby\Schemaorg\DataTypes\DataText
     */
    public $slogan;

    /**
     * A review of the item.
     * @var \Vnetby\Schemaorg\Types\Thing\CreativeWork\Review\Review
     */
    public $review;

    /**
     * The overall rating, based on a collection of reviews or ratings, of the item.
     * @param \Vnetby\Schemaorg\Types\Thing\Intangible\Rating\AggregateRating\AggregateRating $value
     * @return static
     */
    function setAggregateRating($value)
    {
        return $this->setProp('aggregateRating', $value);
    }

    /**
     * An associated logo.
     * @param string|\Vnetby\Schemaorg\Types\Thing\CreativeWork\MediaObject\ImageObject\ImageObject|\Vnetby\Schemaorg\DataTypes\DataURL $value
     * @return static
     */
    function setLogo($value)
    {
        return $this->setProp('logo', $value);
    }

    /**
     * A slogan or motto associated with the item.
     * @param string|\Vnetby\Schemaorg\DataTypes\DataText $value
     * @return static
     */
    function setSlogan($value)
    {
        return $this->setProp('slogan', $value);
    }

    /**
     * A review of the item.
     * @param \Vnetby\Schemaorg\Types\Thing\CreativeWork\Review\Review $value
     * @return static
     */
    function setReview($value)
    {
        return $this->setProp('review', $value);
    }

    /**
     * The overall rating, based on a collection of reviews or ratings, of the item.
     * @return \Vnetby\Schemaorg\Types\Thing\Intangible\Rating\AggregateRating\AggregateRating|null
     */
    function getAggregateRating()
    {
        return $this->getProp('aggregateRating');
    }

    /**
     * An associated logo.
     * @return string|\Vnetby\Schemaorg\Types\Thing\CreativeWork\MediaObject\ImageObject\ImageObject|\Vnetby\Schemaorg\DataTypes\DataURL|null
     */
    function getLogo()
    {
        return $this->getProp('logo');
    }

    /**
     * A slogan or motto associated with the item.
     * @return string|\Vnetby\Schemaorg\DataTypes\DataText|null
     */
    function getSlogan()
    {
        return $this->getProp('slogan');
    }

    /**
     * A review of the item.
     * @return \Vnetby\Schemaorg\Types\Thing\CreativeWork\Review\Review|null
     */
    function getReview()
    {
        return $this->getProp('review');
    }
}
