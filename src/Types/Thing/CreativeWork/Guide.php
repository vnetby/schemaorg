<?php

/**
 * @see https://schema.org/Guide
 * [[Guide]] is a page or article that recommends specific products or services, or aspects of a thing for a user to
 * consider. A [[Guide]] may represent a Buying Guide and detail aspects of products or services for a user to consider. A
 * [[Guide]] may represent a Product Guide and recommend specific products or services. A [[Guide]] may represent a Ranked List and recommend
 * specific products or services with ranking.
 */

namespace Vnetby\Schemaorg\Types\Thing\CreativeWork;

class Guide extends \Vnetby\Schemaorg\Types\Thing\CreativeWork\CreativeWork
{
    const TYPE = 'Guide';

    /**
     * This Review or Rating is relevant to this part or facet of the itemReviewed.
     * @var string|\Vnetby\Schemaorg\DataTypes\DataText
     */
    public $reviewAspect;

    /**
     * This Review or Rating is relevant to this part or facet of the itemReviewed.
     * @param string|\Vnetby\Schemaorg\DataTypes\DataText $value
     * @return static
     */
    function setReviewAspect($value)
    {
        return $this->setProp('reviewAspect', $value);
    }

    /**
     * This Review or Rating is relevant to this part or facet of the itemReviewed.
     * @return string|\Vnetby\Schemaorg\DataTypes\DataText|null
     */
    function getReviewAspect()
    {
        return $this->getProp('reviewAspect');
    }
}
