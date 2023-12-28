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
    protected $prop_aggregateRating;

    /**
     * A review of the item.
     * @var \Vnetby\Schemaorg\Types\Thing\CreativeWork\Review\Review
     */
    protected $prop_review;

    /**
     * A slogan or motto associated with the item.
     * @var \Vnetby\Schemaorg\DataTypes\DataText
     */
    protected $prop_slogan;

    /**
     * An associated logo.
     * @var \Vnetby\Schemaorg\Types\Thing\CreativeWork\MediaObject\ImageObject\ImageObject|\Vnetby\Schemaorg\DataTypes\DataURL
     */
    protected $prop_logo;

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
     * A review of the item.
     * @param \Vnetby\Schemaorg\Types\Thing\CreativeWork\Review\Review $value
     * @return static
     */
    function setReview($value)
    {
        return $this->setProp('review', $value);
    }

    /**
     * A slogan or motto associated with the item.
     * @param \Vnetby\Schemaorg\DataTypes\DataText $value
     * @return static
     */
    function setSlogan($value)
    {
        return $this->setProp('slogan', $value);
    }

    /**
     * An associated logo.
     * @param \Vnetby\Schemaorg\Types\Thing\CreativeWork\MediaObject\ImageObject\ImageObject|\Vnetby\Schemaorg\DataTypes\DataURL $value
     * @return static
     */
    function setLogo($value)
    {
        return $this->setProp('logo', $value);
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
     * A review of the item.
     * @return \Vnetby\Schemaorg\Types\Thing\CreativeWork\Review\Review|null
     */
    function getReview()
    {
        return $this->getProp('review');
    }

    /**
     * A slogan or motto associated with the item.
     * @return \Vnetby\Schemaorg\DataTypes\DataText|null
     */
    function getSlogan()
    {
        return $this->getProp('slogan');
    }

    /**
     * An associated logo.
     * @return \Vnetby\Schemaorg\Types\Thing\CreativeWork\MediaObject\ImageObject\ImageObject|\Vnetby\Schemaorg\DataTypes\DataURL|null
     */
    function getLogo()
    {
        return $this->getProp('logo');
    }
}
