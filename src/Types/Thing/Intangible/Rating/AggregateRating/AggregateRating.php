<?php

/**
 * @see https://schema.org/AggregateRating
 * The average rating based on multiple ratings or reviews.
 */

namespace Vnetby\Schemaorg\Types\Thing\Intangible\Rating\AggregateRating;

class AggregateRating extends \Vnetby\Schemaorg\Types\Thing\Intangible\Rating\Rating
{
    const TYPE = 'AggregateRating';

    /**
     * The item that is being reviewed/rated.
     * @var \Vnetby\Schemaorg\Types\Thing\Thing
     */
    public $itemReviewed;

    /**
     * The count of total number of reviews.
     * @var string|int|\Vnetby\Schemaorg\DataTypes\DataInteger
     */
    public $reviewCount;

    /**
     * The count of total number of ratings.
     * @var string|int|\Vnetby\Schemaorg\DataTypes\DataInteger
     */
    public $ratingCount;

    /**
     * The item that is being reviewed/rated.
     * @param \Vnetby\Schemaorg\Types\Thing\Thing $value
     * @return static
     */
    function setItemReviewed($value)
    {
        return $this->setProp('itemReviewed', $value);
    }

    /**
     * The count of total number of reviews.
     * @param string|int|\Vnetby\Schemaorg\DataTypes\DataInteger $value
     * @return static
     */
    function setReviewCount($value)
    {
        return $this->setProp('reviewCount', $value);
    }

    /**
     * The count of total number of ratings.
     * @param string|int|\Vnetby\Schemaorg\DataTypes\DataInteger $value
     * @return static
     */
    function setRatingCount($value)
    {
        return $this->setProp('ratingCount', $value);
    }

    /**
     * The item that is being reviewed/rated.
     * @return \Vnetby\Schemaorg\Types\Thing\Thing|null
     */
    function getItemReviewed()
    {
        return $this->getProp('itemReviewed');
    }

    /**
     * The count of total number of reviews.
     * @return string|int|\Vnetby\Schemaorg\DataTypes\DataInteger|null
     */
    function getReviewCount()
    {
        return $this->getProp('reviewCount');
    }

    /**
     * The count of total number of ratings.
     * @return string|int|\Vnetby\Schemaorg\DataTypes\DataInteger|null
     */
    function getRatingCount()
    {
        return $this->getProp('ratingCount');
    }
}
