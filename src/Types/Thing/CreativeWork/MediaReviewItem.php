<?php

/**
 * @see https://schema.org/MediaReviewItem
 * Represents an item or group of closely related items treated as a unit for the sake of evaluation in a [[MediaReview]].
 * Authorship etc. apply to the items rather than to the curation/grouping or reviewing party.
 */

namespace Vnetby\Schemaorg\Types\Thing\CreativeWork;

class MediaReviewItem extends \Vnetby\Schemaorg\Types\Thing\CreativeWork\CreativeWork
{
    const TYPE = 'MediaReviewItem';

    /**
     * In the context of a [[MediaReview]], indicates specific media item(s) that are grouped using a [[MediaReviewItem]].
     * @var \Vnetby\Schemaorg\Types\Thing\CreativeWork\MediaObject\MediaObject
     */
    protected $prop_mediaItemAppearance;

    /**
     * In the context of a [[MediaReview]], indicates specific media item(s) that are grouped using a [[MediaReviewItem]].
     * @param \Vnetby\Schemaorg\Types\Thing\CreativeWork\MediaObject\MediaObject $value
     * @return static
     */
    function setMediaItemAppearance($value)
    {
        return $this->setProp('mediaItemAppearance', $value);
    }

    /**
     * In the context of a [[MediaReview]], indicates specific media item(s) that are grouped using a [[MediaReviewItem]].
     * @return \Vnetby\Schemaorg\Types\Thing\CreativeWork\MediaObject\MediaObject|null
     */
    function getMediaItemAppearance()
    {
        return $this->getProp('mediaItemAppearance');
    }
}
