<?php

/**
 * @see https://schema.org/MediaReview
 * A [[MediaReview]] is a more specialized form of Review dedicated to the evaluation of media content online, typically in the context
 * of fact-checking and misinformation. For more general reviews of media in the broader sense, use [[UserReview]], [[CriticReview]] or other [[Review]] types.
 * This definition is a work in progress. While the [[MediaManipulationRatingEnumeration]] list reflects significant community review amongst fact-checkers and others working to
 * combat misinformation, the specific structures for representing media objects, their versions and publication context, are still evolving. Similarly, best practices for
 * the relationship between [[MediaReview]] and [[ClaimReview]] markup have not yet been finalized.
 */

namespace Vnetby\Schemaorg\Types\Thing\CreativeWork\Review;

class MediaReview extends \Vnetby\Schemaorg\Types\Thing\CreativeWork\Review\Review
{
    const TYPE = 'MediaReview';

    /**
     * Describes, in a [[MediaReview]] when dealing with [[DecontextualizedContent]], background information that can contribute to better interpretation of the [[MediaObject]].
     * @var string|\Vnetby\Schemaorg\DataTypes\DataText
     */
    public $originalMediaContextDescription;

    /**
     * Link to the page containing an original version of the content, or directly to an online copy of the original [[MediaObject]]
     * content, e.g. video file.
     * @var string|\Vnetby\Schemaorg\DataTypes\DataURL|\Vnetby\Schemaorg\Types\Thing\CreativeWork\WebPage\WebPage|\Vnetby\Schemaorg\Types\Thing\CreativeWork\MediaObject\MediaObject
     */
    public $originalMediaLink;

    /**
     * Indicates a MediaManipulationRatingEnumeration classification of a media object (in the context of how it was published or shared).
     * @var \Vnetby\Schemaorg\Types\Thing\Intangible\Enumeration\MediaManipulationRatingEnumeration\MediaManipulationRatingEnumeration
     */
    public $mediaAuthenticityCategory;

    /**
     * Describes, in a [[MediaReview]] when dealing with [[DecontextualizedContent]], background information that can contribute to better interpretation of the [[MediaObject]].
     * @param string|\Vnetby\Schemaorg\DataTypes\DataText $value
     * @return static
     */
    function setOriginalMediaContextDescription($value)
    {
        return $this->setProp('originalMediaContextDescription', $value);
    }

    /**
     * Link to the page containing an original version of the content, or directly to an online copy of the original [[MediaObject]]
     * content, e.g. video file.
     * @param string|\Vnetby\Schemaorg\DataTypes\DataURL|\Vnetby\Schemaorg\Types\Thing\CreativeWork\WebPage\WebPage|\Vnetby\Schemaorg\Types\Thing\CreativeWork\MediaObject\MediaObject $value
     * @return static
     */
    function setOriginalMediaLink($value)
    {
        return $this->setProp('originalMediaLink', $value);
    }

    /**
     * Indicates a MediaManipulationRatingEnumeration classification of a media object (in the context of how it was published or shared).
     * @param \Vnetby\Schemaorg\Types\Thing\Intangible\Enumeration\MediaManipulationRatingEnumeration\MediaManipulationRatingEnumeration $value
     * @return static
     */
    function setMediaAuthenticityCategory($value)
    {
        return $this->setProp('mediaAuthenticityCategory', $value);
    }

    /**
     * Describes, in a [[MediaReview]] when dealing with [[DecontextualizedContent]], background information that can contribute to better interpretation of the [[MediaObject]].
     * @return string|\Vnetby\Schemaorg\DataTypes\DataText|null
     */
    function getOriginalMediaContextDescription()
    {
        return $this->getProp('originalMediaContextDescription');
    }

    /**
     * Link to the page containing an original version of the content, or directly to an online copy of the original [[MediaObject]]
     * content, e.g. video file.
     * @return string|\Vnetby\Schemaorg\DataTypes\DataURL|\Vnetby\Schemaorg\Types\Thing\CreativeWork\WebPage\WebPage|\Vnetby\Schemaorg\Types\Thing\CreativeWork\MediaObject\MediaObject|null
     */
    function getOriginalMediaLink()
    {
        return $this->getProp('originalMediaLink');
    }

    /**
     * Indicates a MediaManipulationRatingEnumeration classification of a media object (in the context of how it was published or shared).
     * @return \Vnetby\Schemaorg\Types\Thing\Intangible\Enumeration\MediaManipulationRatingEnumeration\MediaManipulationRatingEnumeration|null
     */
    function getMediaAuthenticityCategory()
    {
        return $this->getProp('mediaAuthenticityCategory');
    }
}
