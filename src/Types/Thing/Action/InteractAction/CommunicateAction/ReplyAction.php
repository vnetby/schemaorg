<?php

/**
* @see https://schema.org/ReplyAction
 * The act of responding to a question/message asked/sent by the object. Related to [[AskAction]].\n\nRelated actions:\n\n* [[AskAction]]: Appears generally as an origin
 * of a ReplyAction.
*/

namespace Vnetby\Schemaorg\Types\Thing\Action\InteractAction\CommunicateAction;

class ReplyAction extends \Vnetby\Schemaorg\Types\Thing\Action\InteractAction\CommunicateAction\CommunicateAction
{
   const TYPE = 'ReplyAction';

   /**
     * A sub property of result. The Comment created or sent as a result of this action.
    * @var \Vnetby\Schemaorg\Types\Thing\CreativeWork\Comment\Comment
    */
   protected $prop_resultComment;

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
