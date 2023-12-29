<?php

/**
 * @see https://schema.org/Question
 * A specific question - e.g. from a user seeking answers online, or collected in a Frequently Asked Questions (FAQ) document.
 */

namespace Vnetby\Schemaorg\Types\Thing\CreativeWork\Comment;

class Question extends \Vnetby\Schemaorg\Types\Thing\CreativeWork\Comment\Comment
{
    const TYPE = 'Question';

    /**
     * The number of answers this question has received.
     * @var string|int|\Vnetby\Schemaorg\DataTypes\DataInteger
     */
    public $answerCount;

    /**
     * For questions that are part of learning resources (e.g. Quiz), eduQuestionType indicates the format of question being given. Example: "Multiple choice",
     * "Open ended", "Flashcard".
     * @var string|\Vnetby\Schemaorg\DataTypes\DataText
     */
    public $eduQuestionType;

    /**
     * The answer(s) that has been accepted as best, typically on a Question/Answer site. Sites vary in their selection mechanisms, e.g. drawing
     * on community opinion and/or the view of the Question author.
     * @var \Vnetby\Schemaorg\Types\Thing\CreativeWork\Comment\Answer|\Vnetby\Schemaorg\Types\Thing\Intangible\ItemList\ItemList
     */
    public $acceptedAnswer;

    /**
     * An answer (possibly one of several, possibly incorrect) to a Question, e.g. on a Question/Answer site.
     * @var \Vnetby\Schemaorg\Types\Thing\Intangible\ItemList\ItemList|\Vnetby\Schemaorg\Types\Thing\CreativeWork\Comment\Answer
     */
    public $suggestedAnswer;

    /**
     * The parent of a question, answer or item in general. Typically used for Q/A discussion threads e.g. a chain of comments
     * with the first comment being an [[Article]] or other [[CreativeWork]]. See also [[comment]] which points from something to a comment about
     * it.
     * @var \Vnetby\Schemaorg\Types\Thing\CreativeWork\CreativeWork|\Vnetby\Schemaorg\Types\Thing\CreativeWork\Comment\Comment
     */
    public $parentItem;

    /**
     * The number of answers this question has received.
     * @param string|int|\Vnetby\Schemaorg\DataTypes\DataInteger $value
     * @return static
     */
    function setAnswerCount($value)
    {
        return $this->setProp('answerCount', $value);
    }

    /**
     * For questions that are part of learning resources (e.g. Quiz), eduQuestionType indicates the format of question being given. Example: "Multiple choice",
     * "Open ended", "Flashcard".
     * @param string|\Vnetby\Schemaorg\DataTypes\DataText $value
     * @return static
     */
    function setEduQuestionType($value)
    {
        return $this->setProp('eduQuestionType', $value);
    }

    /**
     * The answer(s) that has been accepted as best, typically on a Question/Answer site. Sites vary in their selection mechanisms, e.g. drawing
     * on community opinion and/or the view of the Question author.
     * @param \Vnetby\Schemaorg\Types\Thing\CreativeWork\Comment\Answer|\Vnetby\Schemaorg\Types\Thing\Intangible\ItemList\ItemList $value
     * @return static
     */
    function setAcceptedAnswer($value)
    {
        return $this->setProp('acceptedAnswer', $value);
    }

    /**
     * An answer (possibly one of several, possibly incorrect) to a Question, e.g. on a Question/Answer site.
     * @param \Vnetby\Schemaorg\Types\Thing\Intangible\ItemList\ItemList|\Vnetby\Schemaorg\Types\Thing\CreativeWork\Comment\Answer $value
     * @return static
     */
    function setSuggestedAnswer($value)
    {
        return $this->setProp('suggestedAnswer', $value);
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
     * The number of answers this question has received.
     * @return string|int|\Vnetby\Schemaorg\DataTypes\DataInteger|null
     */
    function getAnswerCount()
    {
        return $this->getProp('answerCount');
    }

    /**
     * For questions that are part of learning resources (e.g. Quiz), eduQuestionType indicates the format of question being given. Example: "Multiple choice",
     * "Open ended", "Flashcard".
     * @return string|\Vnetby\Schemaorg\DataTypes\DataText|null
     */
    function getEduQuestionType()
    {
        return $this->getProp('eduQuestionType');
    }

    /**
     * The answer(s) that has been accepted as best, typically on a Question/Answer site. Sites vary in their selection mechanisms, e.g. drawing
     * on community opinion and/or the view of the Question author.
     * @return \Vnetby\Schemaorg\Types\Thing\CreativeWork\Comment\Answer|\Vnetby\Schemaorg\Types\Thing\Intangible\ItemList\ItemList|null
     */
    function getAcceptedAnswer()
    {
        return $this->getProp('acceptedAnswer');
    }

    /**
     * An answer (possibly one of several, possibly incorrect) to a Question, e.g. on a Question/Answer site.
     * @return \Vnetby\Schemaorg\Types\Thing\Intangible\ItemList\ItemList|\Vnetby\Schemaorg\Types\Thing\CreativeWork\Comment\Answer|null
     */
    function getSuggestedAnswer()
    {
        return $this->getProp('suggestedAnswer');
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
