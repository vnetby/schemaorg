<?php

/**
* @see https://schema.org/AskAction
 * The act of posing a question / favor to someone.\n\nRelated actions:\n\n* [[ReplyAction]]: Appears generally as a response to AskAction.
*/

namespace Vnetby\Schemaorg\Types\Thing\Action\InteractAction\CommunicateAction;

class AskAction extends \Vnetby\Schemaorg\Types\Thing\Action\InteractAction\CommunicateAction\CommunicateAction
{
   const TYPE = 'AskAction';

   /**
     * A sub property of object. A question.
    * @var \Vnetby\Schemaorg\Types\Thing\CreativeWork\Comment\Question
    */
   protected $prop_question;

   /**
     * A sub property of object. A question.
    * @param \Vnetby\Schemaorg\Types\Thing\CreativeWork\Comment\Question $value
    * @return static
    */
   function setQuestion($value)
   {
       return $this->setProp('question', $value);
   }

   /**
     * A sub property of object. A question.
    * @return \Vnetby\Schemaorg\Types\Thing\CreativeWork\Comment\Question|null
    */
   function getQuestion()
   {
       return $this->getProp('question');
   }
}
