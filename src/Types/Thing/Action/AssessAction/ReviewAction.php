<?php

/**
 * @see https://schema.org/ReviewAction
 * The act of producing a balanced opinion about the object for an audience. An agent reviews an object with participants resulting
 * in a review.
 */

namespace Vnetby\Schemaorg\Types\Thing\Action\AssessAction;

class ReviewAction extends \Vnetby\Schemaorg\Types\Thing\Action\AssessAction\AssessAction
{
    const TYPE = 'ReviewAction';

    /**
     * A sub property of result. The review that resulted in the performing of the action.
     * @var \Vnetby\Schemaorg\Types\Thing\CreativeWork\Review\Review
     */
    public $resultReview;

    /**
     * A sub property of result. The review that resulted in the performing of the action.
     * @param \Vnetby\Schemaorg\Types\Thing\CreativeWork\Review\Review $value
     * @return static
     */
    function setResultReview($value)
    {
        return $this->setProp('resultReview', $value);
    }

    /**
     * A sub property of result. The review that resulted in the performing of the action.
     * @return \Vnetby\Schemaorg\Types\Thing\CreativeWork\Review\Review|null
     */
    function getResultReview()
    {
        return $this->getProp('resultReview');
    }
}
