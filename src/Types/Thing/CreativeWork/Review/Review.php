<?php

/**
 * @see https://schema.org/Review
 * A review of an item - for example, of a restaurant, movie, or store.
 */

namespace Vnetby\Schemaorg\Types\Thing\CreativeWork\Review;

class Review extends \Vnetby\Schemaorg\Types\Thing\CreativeWork\CreativeWork
{
    const TYPE = 'Review';

    /**
     * The item that is being reviewed/rated.
     * @var \Vnetby\Schemaorg\Types\Thing\Thing
     */
    public $itemReviewed;

    /**
     * An associated [[ClaimReview]], related by specific common content, topic or claim. The expectation is that this property would be most typically
     * used in cases where a single activity is conducting both claim reviews and media reviews, in which case [[relatedMediaReview]] would commonly
     * be used on a [[ClaimReview]], while [[relatedClaimReview]] would be used on [[MediaReview]].
     * @var \Vnetby\Schemaorg\Types\Thing\CreativeWork\Review\Review
     */
    public $associatedClaimReview;

    /**
     * Provides positive considerations regarding something, for example product highlights or (alongside [[negativeNotes]]) pro/con lists for reviews. In the case of a
     * [[Review]], the property describes the [[itemReviewed]] from the perspective of the review; in the case of a [[Product]], the product itself
     * is being described. The property values can be expressed either as unstructured text (repeated as necessary), or if ordered, as a
     * list (in which case the most positive is at the beginning of the list).
     * @var string|\Vnetby\Schemaorg\Types\Thing\CreativeWork\WebContent\WebContent|\Vnetby\Schemaorg\Types\Thing\Intangible\ItemList\ItemList|\Vnetby\Schemaorg\DataTypes\DataText|\Vnetby\Schemaorg\Types\Thing\Intangible\ListItem\ListItem
     */
    public $positiveNotes;

    /**
     * This Review or Rating is relevant to this part or facet of the itemReviewed.
     * @var string|\Vnetby\Schemaorg\DataTypes\DataText
     */
    public $reviewAspect;

    /**
     * An associated [[Review]].
     * @var \Vnetby\Schemaorg\Types\Thing\CreativeWork\Review\Review
     */
    public $associatedReview;

    /**
     * The rating given in this review. Note that reviews can themselves be rated. The ```reviewRating``` applies to rating given by the
     * review. The [[aggregateRating]] property applies to the review itself, as a creative work.
     * @var \Vnetby\Schemaorg\Types\Thing\Intangible\Rating\Rating
     */
    public $reviewRating;

    /**
     * An associated [[MediaReview]], related by specific common content, topic or claim. The expectation is that this property would be most typically
     * used in cases where a single activity is conducting both claim reviews and media reviews, in which case [[relatedMediaReview]] would commonly
     * be used on a [[ClaimReview]], while [[relatedClaimReview]] would be used on [[MediaReview]].
     * @var \Vnetby\Schemaorg\Types\Thing\CreativeWork\Review\Review
     */
    public $associatedMediaReview;

    /**
     * The actual body of the review.
     * @var string|\Vnetby\Schemaorg\DataTypes\DataText
     */
    public $reviewBody;

    /**
     * Provides negative considerations regarding something, most typically in pro/con lists for reviews (alongside [[positiveNotes]]). For symmetry In the case of a
     * [[Review]], the property describes the [[itemReviewed]] from the perspective of the review; in the case of a [[Product]], the product itself
     * is being described. Since product descriptions tend to emphasise positive claims, it may be relatively unusual to find [[negativeNotes]] used in
     * this way. Nevertheless for the sake of symmetry, [[negativeNotes]] can be used on [[Product]]. The property values can be expressed either
     * as unstructured text (repeated as necessary), or if ordered, as a list (in which case the most negative is at the
     * beginning of the list).
     * @var string|\Vnetby\Schemaorg\DataTypes\DataText|\Vnetby\Schemaorg\Types\Thing\Intangible\ListItem\ListItem|\Vnetby\Schemaorg\Types\Thing\CreativeWork\WebContent\WebContent|\Vnetby\Schemaorg\Types\Thing\Intangible\ItemList\ItemList
     */
    public $negativeNotes;

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
     * An associated [[ClaimReview]], related by specific common content, topic or claim. The expectation is that this property would be most typically
     * used in cases where a single activity is conducting both claim reviews and media reviews, in which case [[relatedMediaReview]] would commonly
     * be used on a [[ClaimReview]], while [[relatedClaimReview]] would be used on [[MediaReview]].
     * @param \Vnetby\Schemaorg\Types\Thing\CreativeWork\Review\Review $value
     * @return static
     */
    function setAssociatedClaimReview($value)
    {
        return $this->setProp('associatedClaimReview', $value);
    }

    /**
     * Provides positive considerations regarding something, for example product highlights or (alongside [[negativeNotes]]) pro/con lists for reviews. In the case of a
     * [[Review]], the property describes the [[itemReviewed]] from the perspective of the review; in the case of a [[Product]], the product itself
     * is being described. The property values can be expressed either as unstructured text (repeated as necessary), or if ordered, as a
     * list (in which case the most positive is at the beginning of the list).
     * @param string|\Vnetby\Schemaorg\Types\Thing\CreativeWork\WebContent\WebContent|\Vnetby\Schemaorg\Types\Thing\Intangible\ItemList\ItemList|\Vnetby\Schemaorg\DataTypes\DataText|\Vnetby\Schemaorg\Types\Thing\Intangible\ListItem\ListItem $value
     * @return static
     */
    function setPositiveNotes($value)
    {
        return $this->setProp('positiveNotes', $value);
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
     * An associated [[Review]].
     * @param \Vnetby\Schemaorg\Types\Thing\CreativeWork\Review\Review $value
     * @return static
     */
    function setAssociatedReview($value)
    {
        return $this->setProp('associatedReview', $value);
    }

    /**
     * The rating given in this review. Note that reviews can themselves be rated. The ```reviewRating``` applies to rating given by the
     * review. The [[aggregateRating]] property applies to the review itself, as a creative work.
     * @param \Vnetby\Schemaorg\Types\Thing\Intangible\Rating\Rating $value
     * @return static
     */
    function setReviewRating($value)
    {
        return $this->setProp('reviewRating', $value);
    }

    /**
     * An associated [[MediaReview]], related by specific common content, topic or claim. The expectation is that this property would be most typically
     * used in cases where a single activity is conducting both claim reviews and media reviews, in which case [[relatedMediaReview]] would commonly
     * be used on a [[ClaimReview]], while [[relatedClaimReview]] would be used on [[MediaReview]].
     * @param \Vnetby\Schemaorg\Types\Thing\CreativeWork\Review\Review $value
     * @return static
     */
    function setAssociatedMediaReview($value)
    {
        return $this->setProp('associatedMediaReview', $value);
    }

    /**
     * The actual body of the review.
     * @param string|\Vnetby\Schemaorg\DataTypes\DataText $value
     * @return static
     */
    function setReviewBody($value)
    {
        return $this->setProp('reviewBody', $value);
    }

    /**
     * Provides negative considerations regarding something, most typically in pro/con lists for reviews (alongside [[positiveNotes]]). For symmetry In the case of a
     * [[Review]], the property describes the [[itemReviewed]] from the perspective of the review; in the case of a [[Product]], the product itself
     * is being described. Since product descriptions tend to emphasise positive claims, it may be relatively unusual to find [[negativeNotes]] used in
     * this way. Nevertheless for the sake of symmetry, [[negativeNotes]] can be used on [[Product]]. The property values can be expressed either
     * as unstructured text (repeated as necessary), or if ordered, as a list (in which case the most negative is at the
     * beginning of the list).
     * @param string|\Vnetby\Schemaorg\DataTypes\DataText|\Vnetby\Schemaorg\Types\Thing\Intangible\ListItem\ListItem|\Vnetby\Schemaorg\Types\Thing\CreativeWork\WebContent\WebContent|\Vnetby\Schemaorg\Types\Thing\Intangible\ItemList\ItemList $value
     * @return static
     */
    function setNegativeNotes($value)
    {
        return $this->setProp('negativeNotes', $value);
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
     * An associated [[ClaimReview]], related by specific common content, topic or claim. The expectation is that this property would be most typically
     * used in cases where a single activity is conducting both claim reviews and media reviews, in which case [[relatedMediaReview]] would commonly
     * be used on a [[ClaimReview]], while [[relatedClaimReview]] would be used on [[MediaReview]].
     * @return \Vnetby\Schemaorg\Types\Thing\CreativeWork\Review\Review|null
     */
    function getAssociatedClaimReview()
    {
        return $this->getProp('associatedClaimReview');
    }

    /**
     * Provides positive considerations regarding something, for example product highlights or (alongside [[negativeNotes]]) pro/con lists for reviews. In the case of a
     * [[Review]], the property describes the [[itemReviewed]] from the perspective of the review; in the case of a [[Product]], the product itself
     * is being described. The property values can be expressed either as unstructured text (repeated as necessary), or if ordered, as a
     * list (in which case the most positive is at the beginning of the list).
     * @return string|\Vnetby\Schemaorg\Types\Thing\CreativeWork\WebContent\WebContent|\Vnetby\Schemaorg\Types\Thing\Intangible\ItemList\ItemList|\Vnetby\Schemaorg\DataTypes\DataText|\Vnetby\Schemaorg\Types\Thing\Intangible\ListItem\ListItem|null
     */
    function getPositiveNotes()
    {
        return $this->getProp('positiveNotes');
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
     * An associated [[Review]].
     * @return \Vnetby\Schemaorg\Types\Thing\CreativeWork\Review\Review|null
     */
    function getAssociatedReview()
    {
        return $this->getProp('associatedReview');
    }

    /**
     * The rating given in this review. Note that reviews can themselves be rated. The ```reviewRating``` applies to rating given by the
     * review. The [[aggregateRating]] property applies to the review itself, as a creative work.
     * @return \Vnetby\Schemaorg\Types\Thing\Intangible\Rating\Rating|null
     */
    function getReviewRating()
    {
        return $this->getProp('reviewRating');
    }

    /**
     * An associated [[MediaReview]], related by specific common content, topic or claim. The expectation is that this property would be most typically
     * used in cases where a single activity is conducting both claim reviews and media reviews, in which case [[relatedMediaReview]] would commonly
     * be used on a [[ClaimReview]], while [[relatedClaimReview]] would be used on [[MediaReview]].
     * @return \Vnetby\Schemaorg\Types\Thing\CreativeWork\Review\Review|null
     */
    function getAssociatedMediaReview()
    {
        return $this->getProp('associatedMediaReview');
    }

    /**
     * The actual body of the review.
     * @return string|\Vnetby\Schemaorg\DataTypes\DataText|null
     */
    function getReviewBody()
    {
        return $this->getProp('reviewBody');
    }

    /**
     * Provides negative considerations regarding something, most typically in pro/con lists for reviews (alongside [[positiveNotes]]). For symmetry In the case of a
     * [[Review]], the property describes the [[itemReviewed]] from the perspective of the review; in the case of a [[Product]], the product itself
     * is being described. Since product descriptions tend to emphasise positive claims, it may be relatively unusual to find [[negativeNotes]] used in
     * this way. Nevertheless for the sake of symmetry, [[negativeNotes]] can be used on [[Product]]. The property values can be expressed either
     * as unstructured text (repeated as necessary), or if ordered, as a list (in which case the most negative is at the
     * beginning of the list).
     * @return string|\Vnetby\Schemaorg\DataTypes\DataText|\Vnetby\Schemaorg\Types\Thing\Intangible\ListItem\ListItem|\Vnetby\Schemaorg\Types\Thing\CreativeWork\WebContent\WebContent|\Vnetby\Schemaorg\Types\Thing\Intangible\ItemList\ItemList|null
     */
    function getNegativeNotes()
    {
        return $this->getProp('negativeNotes');
    }
}
