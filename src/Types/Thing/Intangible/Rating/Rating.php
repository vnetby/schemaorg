<?php

/**
 * @see https://schema.org/Rating
 * A rating is an evaluation on a numeric scale, such as 1 to 5 stars.
 */

namespace Vnetby\Schemaorg\Types\Thing\Intangible\Rating;

class Rating extends \Vnetby\Schemaorg\Types\Thing\Intangible\Intangible
{
    const TYPE = 'Rating';

    /**
     * The author of this content or rating. Please note that author is special in that HTML 5 provides a special mechanism
     * for indicating authorship via the rel tag. That is equivalent to this and may be used interchangeably.
     * @var \Vnetby\Schemaorg\Types\Thing\Organization\Organization|\Vnetby\Schemaorg\Types\Thing\Person\Person
     */
    public $author;

    /**
     * This Review or Rating is relevant to this part or facet of the itemReviewed.
     * @var string|\Vnetby\Schemaorg\DataTypes\DataText
     */
    public $reviewAspect;

    /**
     * The lowest value allowed in this rating system. If worstRating is omitted, 1 is assumed.
     * @var string|int|float|\Vnetby\Schemaorg\DataTypes\DataText|\Vnetby\Schemaorg\DataTypes\DataNumber
     */
    public $worstRating;

    /**
     * A short explanation (e.g. one to two sentences) providing background context and other information that led to the conclusion expressed in
     * the rating. This is particularly applicable to ratings associated with "fact check" markup using [[ClaimReview]].
     * @var string|\Vnetby\Schemaorg\DataTypes\DataText
     */
    public $ratingExplanation;

    /**
     * The rating for the content.\n\nUsage guidelines:\n\n* Use values from 0123456789 (Unicode 'DIGIT ZERO' (U+0030) to 'DIGIT NINE' (U+0039)) rather than superficially
     * similar Unicode symbols.\n* Use '.' (Unicode 'FULL STOP' (U+002E)) rather than ',' to indicate a decimal point. Avoid using these symbols
     * as a readability separator.
     * @var string|int|float|\Vnetby\Schemaorg\DataTypes\DataNumber|\Vnetby\Schemaorg\DataTypes\DataText
     */
    public $ratingValue;

    /**
     * The highest value allowed in this rating system. If bestRating is omitted, 5 is assumed.
     * @var string|int|float|\Vnetby\Schemaorg\DataTypes\DataText|\Vnetby\Schemaorg\DataTypes\DataNumber
     */
    public $bestRating;

    /**
     * The author of this content or rating. Please note that author is special in that HTML 5 provides a special mechanism
     * for indicating authorship via the rel tag. That is equivalent to this and may be used interchangeably.
     * @param \Vnetby\Schemaorg\Types\Thing\Organization\Organization|\Vnetby\Schemaorg\Types\Thing\Person\Person $value
     * @return static
     */
    function setAuthor($value)
    {
        return $this->setProp('author', $value);
    }

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
     * The lowest value allowed in this rating system. If worstRating is omitted, 1 is assumed.
     * @param string|int|float|\Vnetby\Schemaorg\DataTypes\DataText|\Vnetby\Schemaorg\DataTypes\DataNumber $value
     * @return static
     */
    function setWorstRating($value)
    {
        return $this->setProp('worstRating', $value);
    }

    /**
     * A short explanation (e.g. one to two sentences) providing background context and other information that led to the conclusion expressed in
     * the rating. This is particularly applicable to ratings associated with "fact check" markup using [[ClaimReview]].
     * @param string|\Vnetby\Schemaorg\DataTypes\DataText $value
     * @return static
     */
    function setRatingExplanation($value)
    {
        return $this->setProp('ratingExplanation', $value);
    }

    /**
     * The rating for the content.\n\nUsage guidelines:\n\n* Use values from 0123456789 (Unicode 'DIGIT ZERO' (U+0030) to 'DIGIT NINE' (U+0039)) rather than superficially
     * similar Unicode symbols.\n* Use '.' (Unicode 'FULL STOP' (U+002E)) rather than ',' to indicate a decimal point. Avoid using these symbols
     * as a readability separator.
     * @param string|int|float|\Vnetby\Schemaorg\DataTypes\DataNumber|\Vnetby\Schemaorg\DataTypes\DataText $value
     * @return static
     */
    function setRatingValue($value)
    {
        return $this->setProp('ratingValue', $value);
    }

    /**
     * The highest value allowed in this rating system. If bestRating is omitted, 5 is assumed.
     * @param string|int|float|\Vnetby\Schemaorg\DataTypes\DataText|\Vnetby\Schemaorg\DataTypes\DataNumber $value
     * @return static
     */
    function setBestRating($value)
    {
        return $this->setProp('bestRating', $value);
    }

    /**
     * The author of this content or rating. Please note that author is special in that HTML 5 provides a special mechanism
     * for indicating authorship via the rel tag. That is equivalent to this and may be used interchangeably.
     * @return \Vnetby\Schemaorg\Types\Thing\Organization\Organization|\Vnetby\Schemaorg\Types\Thing\Person\Person|null
     */
    function getAuthor()
    {
        return $this->getProp('author');
    }

    /**
     * This Review or Rating is relevant to this part or facet of the itemReviewed.
     * @return string|\Vnetby\Schemaorg\DataTypes\DataText|null
     */
    function getReviewAspect()
    {
        return $this->getProp('reviewAspect');
    }

    /**
     * The lowest value allowed in this rating system. If worstRating is omitted, 1 is assumed.
     * @return string|int|float|\Vnetby\Schemaorg\DataTypes\DataText|\Vnetby\Schemaorg\DataTypes\DataNumber|null
     */
    function getWorstRating()
    {
        return $this->getProp('worstRating');
    }

    /**
     * A short explanation (e.g. one to two sentences) providing background context and other information that led to the conclusion expressed in
     * the rating. This is particularly applicable to ratings associated with "fact check" markup using [[ClaimReview]].
     * @return string|\Vnetby\Schemaorg\DataTypes\DataText|null
     */
    function getRatingExplanation()
    {
        return $this->getProp('ratingExplanation');
    }

    /**
     * The rating for the content.\n\nUsage guidelines:\n\n* Use values from 0123456789 (Unicode 'DIGIT ZERO' (U+0030) to 'DIGIT NINE' (U+0039)) rather than superficially
     * similar Unicode symbols.\n* Use '.' (Unicode 'FULL STOP' (U+002E)) rather than ',' to indicate a decimal point. Avoid using these symbols
     * as a readability separator.
     * @return string|int|float|\Vnetby\Schemaorg\DataTypes\DataNumber|\Vnetby\Schemaorg\DataTypes\DataText|null
     */
    function getRatingValue()
    {
        return $this->getProp('ratingValue');
    }

    /**
     * The highest value allowed in this rating system. If bestRating is omitted, 5 is assumed.
     * @return string|int|float|\Vnetby\Schemaorg\DataTypes\DataText|\Vnetby\Schemaorg\DataTypes\DataNumber|null
     */
    function getBestRating()
    {
        return $this->getProp('bestRating');
    }
}
