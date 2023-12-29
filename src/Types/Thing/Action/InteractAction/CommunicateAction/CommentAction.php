<?php

/**
 * @see https://schema.org/CommentAction
 * The act of generating a comment about a subject.
 */

namespace Vnetby\Schemaorg\Types\Thing\Action\InteractAction\CommunicateAction;

class CommentAction extends \Vnetby\Schemaorg\Types\Thing\Action\InteractAction\CommunicateAction\CommunicateAction
{
    const TYPE = 'CommentAction';

    /**
     * A sub property of result. The Comment created or sent as a result of this action.
     * @var \Vnetby\Schemaorg\Types\Thing\CreativeWork\Comment\Comment
     */
    public $resultComment;

    /**
     * A sub property of result. The Comment created or sent as a result of this action.
     * @param \Vnetby\Schemaorg\Types\Thing\CreativeWork\Comment\Comment $value
     * @return static
     */
    function setResultComment($value)
    {
        return $this->setProp('resultComment', $value);
    }

    /**
     * A sub property of result. The Comment created or sent as a result of this action.
     * @return \Vnetby\Schemaorg\Types\Thing\CreativeWork\Comment\Comment|null
     */
    function getResultComment()
    {
        return $this->getProp('resultComment');
    }
}
