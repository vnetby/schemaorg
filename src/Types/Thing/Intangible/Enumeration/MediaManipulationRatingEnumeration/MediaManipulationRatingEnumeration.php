<?php

/**
 * @see https://schema.org/MediaManipulationRatingEnumeration
 *  Codes for use with the [[mediaAuthenticityCategory]] property, indicating the authenticity of a media object (in the context of how it
 * was published or shared). In general these codes are not mutually exclusive, although some combinations (such as 'original' versus 'transformed', 'edited'
 * and 'staged') would be contradictory if applied in the same [[MediaReview]]. Note that the application of these codes is with regard
 * to a piece of media shared or published in a particular context.
 */

namespace Vnetby\Schemaorg\Types\Thing\Intangible\Enumeration\MediaManipulationRatingEnumeration;

class MediaManipulationRatingEnumeration extends \Vnetby\Schemaorg\Types\Thing\Intangible\Enumeration\Enumeration
{
    const TYPE = 'MediaManipulationRatingEnumeration';
}
