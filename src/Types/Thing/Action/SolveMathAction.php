<?php

/**
 * @see https://schema.org/SolveMathAction
 * The action that takes in a math expression and directs users to a page potentially capable of solving/simplifying that expression.
 */

namespace Vnetby\Schemaorg\Types\Thing\Action;

class SolveMathAction extends \Vnetby\Schemaorg\Types\Thing\Action\Action
{
    const TYPE = 'SolveMathAction';

    /**
     * For questions that are part of learning resources (e.g. Quiz), eduQuestionType indicates the format of question being given. Example: "Multiple choice",
     * "Open ended", "Flashcard".
     * @var \Vnetby\Schemaorg\DataTypes\DataText
     */
    protected $prop_eduQuestionType;

    /**
     * For questions that are part of learning resources (e.g. Quiz), eduQuestionType indicates the format of question being given. Example: "Multiple choice",
     * "Open ended", "Flashcard".
     * @param \Vnetby\Schemaorg\DataTypes\DataText $value
     * @return static
     */
    function setEduQuestionType($value)
    {
        return $this->setProp('eduQuestionType', $value);
    }

    /**
     * For questions that are part of learning resources (e.g. Quiz), eduQuestionType indicates the format of question being given. Example: "Multiple choice",
     * "Open ended", "Flashcard".
     * @return \Vnetby\Schemaorg\DataTypes\DataText|null
     */
    function getEduQuestionType()
    {
        return $this->getProp('eduQuestionType');
    }
}
