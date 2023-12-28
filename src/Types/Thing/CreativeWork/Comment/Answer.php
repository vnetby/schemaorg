<?php

/**
* @see https://schema.org/Answer
 * An answer offered to a question; perhaps correct, perhaps opinionated or wrong.
*/

namespace Vnetby\Schemaorg\Types\Thing\CreativeWork\Comment;

class Answer extends \Vnetby\Schemaorg\Types\Thing\CreativeWork\Comment\Comment
{
   const TYPE = 'Answer';

   /**
     * A step-by-step or full explanation about Answer. Can outline how this Answer was achieved or contain more broad clarification or statement
     * about it. 
    * @var \Vnetby\Schemaorg\Types\Thing\CreativeWork\Comment\Comment|\Vnetby\Schemaorg\Types\Thing\CreativeWork\WebContent\WebContent
    */
   protected $prop_answerExplanation;

   /**
     * The parent of a question, answer or item in general. Typically used for Q/A discussion threads e.g. a chain of comments
     * with the first comment being an [[Article]] or other [[CreativeWork]]. See also [[comment]] which points from something to a comment about
     * it.
    * @var \Vnetby\Schemaorg\Types\Thing\CreativeWork\CreativeWork|\Vnetby\Schemaorg\Types\Thing\CreativeWork\Comment\Comment
    */
   protected $prop_parentItem;

   /**
     * A step-by-step or full explanation about Answer. Can outline how this Answer was achieved or contain more broad clarification or statement
     * about it. 
    * @param \Vnetby\Schemaorg\Types\Thing\CreativeWork\Comment\Comment|\Vnetby\Schemaorg\Types\Thing\CreativeWork\WebContent\WebContent $value
    * @return static
    */
   function setAnswerExplanation($value)
   {
       return $this->setProp('answerExplanation', $value);
   }

   /**
     * The parent of a question, answer or item in general. Typically used for Q/A discussion threads e.g. a chain of comments
     * with the first comment being an [[Article]] or other [[CreativeWork]]. See also [[comment]] which points from something to a comment about
     * it.
    * @param \Vnetby\Schemaorg\Types\Thing\CreativeWork\CreativeWork|\Vnetby\Schemaorg\Types\Thing\CreativeWork\Comment\Comment $value
    * @return static
    */
   function setParentItem($value)
   {
       return $this->setProp('parentItem', $value);
   }

   /**
     * A step-by-step or full explanation about Answer. Can outline how this Answer was achieved or contain more broad clarification or statement
     * about it. 
    * @return \Vnetby\Schemaorg\Types\Thing\CreativeWork\Comment\Comment|\Vnetby\Schemaorg\Types\Thing\CreativeWork\WebContent\WebContent|null
    */
   function getAnswerExplanation()
   {
       return $this->getProp('answerExplanation');
   }

   /**
     * The parent of a question, answer or item in general. Typically used for Q/A discussion threads e.g. a chain of comments
     * with the first comment being an [[Article]] or other [[CreativeWork]]. See also [[comment]] which points from something to a comment about
     * it.
    * @return \Vnetby\Schemaorg\Types\Thing\CreativeWork\CreativeWork|\Vnetby\Schemaorg\Types\Thing\CreativeWork\Comment\Comment|null
    */
   function getParentItem()
   {
       return $this->getProp('parentItem');
   }
}
