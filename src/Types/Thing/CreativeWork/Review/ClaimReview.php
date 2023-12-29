<?php

/**
 * @see https://schema.org/ClaimReview
 * A fact-checking review of claims made (or reported) in some creative work (referenced via itemReviewed).
 */

namespace Vnetby\Schemaorg\Types\Thing\CreativeWork\Review;

class ClaimReview extends \Vnetby\Schemaorg\Types\Thing\CreativeWork\Review\Review
{
    const TYPE = 'ClaimReview';

    /**
     * A short summary of the specific claims reviewed in a ClaimReview.
     * @var string|\Vnetby\Schemaorg\DataTypes\DataText
     */
    public $claimReviewed;

    /**
     * A short summary of the specific claims reviewed in a ClaimReview.
     * @param string|\Vnetby\Schemaorg\DataTypes\DataText $value
     * @return static
     */
    function setClaimReviewed($value)
    {
        return $this->setProp('claimReviewed', $value);
    }

    /**
     * A short summary of the specific claims reviewed in a ClaimReview.
     * @return string|\Vnetby\Schemaorg\DataTypes\DataText|null
     */
    function getClaimReviewed()
    {
        return $this->getProp('claimReviewed');
    }
}
