<?php

/**
 * @see https://schema.org/Comment
 * A comment on an item - for example, a comment on a blog post. The comment's content is expressed via the
 * [[text]] property, and its topic via [[about]], properties shared with all CreativeWorks.
 */

namespace Vnetby\Schemaorg\Types\Thing\CreativeWork\Comment;

class Comment extends \Vnetby\Schemaorg\Types\Thing\CreativeWork\CreativeWork
{
    const TYPE = 'Comment';

    /**
     * The number of downvotes this question, answer or comment has received from the community.
     * @var string|int|\Vnetby\Schemaorg\DataTypes\DataInteger
     */
    public $downvoteCount;

    /**
     * The number of upvotes this question, answer or comment has received from the community.
     * @var string|int|\Vnetby\Schemaorg\DataTypes\DataInteger
     */
    public $upvoteCount;

    /**
     * The parent of a question, answer or item in general. Typically used for Q/A discussion threads e.g. a chain of comments
     * with the first comment being an [[Article]] or other [[CreativeWork]]. See also [[comment]] which points from something to a comment about
     * it.
     * @var \Vnetby\Schemaorg\Types\Thing\CreativeWork\Comment\Comment|\Vnetby\Schemaorg\Types\Thing\CreativeWork\CreativeWork
     */
    public $parentItem;

    /**
     * A CreativeWork such as an image, video, or audio clip shared as part of this posting.
     * @var \Vnetby\Schemaorg\Types\Thing\CreativeWork\CreativeWork
     */
    public $sharedContent;

    /**
     * The number of downvotes this question, answer or comment has received from the community.
     * @param string|int|\Vnetby\Schemaorg\DataTypes\DataInteger $value
     * @return static
     */
    function setDownvoteCount($value)
    {
        return $this->setProp('downvoteCount', $value);
    }

    /**
     * The number of upvotes this question, answer or comment has received from the community.
     * @param string|int|\Vnetby\Schemaorg\DataTypes\DataInteger $value
     * @return static
     */
    function setUpvoteCount($value)
    {
        return $this->setProp('upvoteCount', $value);
    }

    /**
     * The parent of a question, answer or item in general. Typically used for Q/A discussion threads e.g. a chain of comments
     * with the first comment being an [[Article]] or other [[CreativeWork]]. See also [[comment]] which points from something to a comment about
     * it.
     * @param \Vnetby\Schemaorg\Types\Thing\CreativeWork\Comment\Comment|\Vnetby\Schemaorg\Types\Thing\CreativeWork\CreativeWork $value
     * @return static
     */
    function setParentItem($value)
    {
        return $this->setProp('parentItem', $value);
    }

    /**
     * A CreativeWork such as an image, video, or audio clip shared as part of this posting.
     * @param \Vnetby\Schemaorg\Types\Thing\CreativeWork\CreativeWork $value
     * @return static
     */
    function setSharedContent($value)
    {
        return $this->setProp('sharedContent', $value);
    }

    /**
     * The number of downvotes this question, answer or comment has received from the community.
     * @return string|int|\Vnetby\Schemaorg\DataTypes\DataInteger|null
     */
    function getDownvoteCount()
    {
        return $this->getProp('downvoteCount');
    }

    /**
     * The number of upvotes this question, answer or comment has received from the community.
     * @return string|int|\Vnetby\Schemaorg\DataTypes\DataInteger|null
     */
    function getUpvoteCount()
    {
        return $this->getProp('upvoteCount');
    }

    /**
     * The parent of a question, answer or item in general. Typically used for Q/A discussion threads e.g. a chain of comments
     * with the first comment being an [[Article]] or other [[CreativeWork]]. See also [[comment]] which points from something to a comment about
     * it.
     * @return \Vnetby\Schemaorg\Types\Thing\CreativeWork\Comment\Comment|\Vnetby\Schemaorg\Types\Thing\CreativeWork\CreativeWork|null
     */
    function getParentItem()
    {
        return $this->getProp('parentItem');
    }

    /**
     * A CreativeWork such as an image, video, or audio clip shared as part of this posting.
     * @return \Vnetby\Schemaorg\Types\Thing\CreativeWork\CreativeWork|null
     */
    function getSharedContent()
    {
        return $this->getProp('sharedContent');
    }
}
