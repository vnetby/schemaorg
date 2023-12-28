<?php

/**
 * @see https://schema.org/Blog
 * A [blog](https://en.wikipedia.org/wiki/Blog), sometimes known as a "weblog". Note that the individual posts ([[BlogPosting]]s) in a [[Blog]] are often colloquially referred to
 * by the same term.
 */

namespace Vnetby\Schemaorg\Types\Thing\CreativeWork;

class Blog extends \Vnetby\Schemaorg\Types\Thing\CreativeWork\CreativeWork
{
    const TYPE = 'Blog';

    /**
     * A posting that is part of this blog.
     * @var \Vnetby\Schemaorg\Types\Thing\CreativeWork\Article\SocialMediaPosting\BlogPosting\BlogPosting
     */
    protected $prop_blogPost;

    /**
     * The International Standard Serial Number (ISSN) that identifies this serial publication. You can repeat this property to identify different formats of,
     * or the linking ISSN (ISSN-L) for, this serial publication.
     * @var \Vnetby\Schemaorg\DataTypes\DataText
     */
    protected $prop_issn;

    /**
     * A posting that is part of this blog.
     * @param \Vnetby\Schemaorg\Types\Thing\CreativeWork\Article\SocialMediaPosting\BlogPosting\BlogPosting $value
     * @return static
     */
    function setBlogPost($value)
    {
        return $this->setProp('blogPost', $value);
    }

    /**
     * The International Standard Serial Number (ISSN) that identifies this serial publication. You can repeat this property to identify different formats of,
     * or the linking ISSN (ISSN-L) for, this serial publication.
     * @param \Vnetby\Schemaorg\DataTypes\DataText $value
     * @return static
     */
    function setIssn($value)
    {
        return $this->setProp('issn', $value);
    }

    /**
     * A posting that is part of this blog.
     * @return \Vnetby\Schemaorg\Types\Thing\CreativeWork\Article\SocialMediaPosting\BlogPosting\BlogPosting|null
     */
    function getBlogPost()
    {
        return $this->getProp('blogPost');
    }

    /**
     * The International Standard Serial Number (ISSN) that identifies this serial publication. You can repeat this property to identify different formats of,
     * or the linking ISSN (ISSN-L) for, this serial publication.
     * @return \Vnetby\Schemaorg\DataTypes\DataText|null
     */
    function getIssn()
    {
        return $this->getProp('issn');
    }
}
