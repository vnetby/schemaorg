<?php

/**
 * @see https://schema.org/Article
 * An article, such as a news article or piece of investigative report. Newspapers and magazines have articles of many different types
 * and this is intended to cover them all.\n\nSee also [blog post](http://blog.schema.org/2014/09/schemaorg-support-for-bibliographic_2.html).
 */

namespace Vnetby\Schemaorg\Types\Thing\CreativeWork\Article;

class Article extends \Vnetby\Schemaorg\Types\Thing\CreativeWork\CreativeWork
{
    const TYPE = 'Article';

    /**
     * The number of words in the text of the Article.
     * @var string|int|\Vnetby\Schemaorg\DataTypes\DataInteger
     */
    public $wordCount;

    /**
     * Articles may belong to one or more 'sections' in a magazine or newspaper, such as Sports, Lifestyle, etc.
     * @var string|\Vnetby\Schemaorg\DataTypes\DataText
     */
    public $articleSection;

    /**
     * For an [[Article]], typically a [[NewsArticle]], the backstory property provides a textual summary giving a brief explanation of why and how
     * an article was created. In a journalistic setting this could include information about reporting process, methods, interviews, data sources, etc.
     * @var string|\Vnetby\Schemaorg\DataTypes\DataText|\Vnetby\Schemaorg\Types\Thing\CreativeWork\CreativeWork
     */
    public $backstory;

    /**
     * Any description of pages that is not separated into pageStart and pageEnd; for example, "1-6, 9, 55" or "10-12, 46-49".
     * @var string|\Vnetby\Schemaorg\DataTypes\DataText
     */
    public $pagination;

    /**
     * The page on which the work starts; for example "135" or "xiii".
     * @var string|int|\Vnetby\Schemaorg\DataTypes\DataText|\Vnetby\Schemaorg\DataTypes\DataInteger
     */
    public $pageStart;

    /**
     * The actual body of the article.
     * @var string|\Vnetby\Schemaorg\DataTypes\DataText
     */
    public $articleBody;

    /**
     * The page on which the work ends; for example "138" or "xvi".
     * @var string|int|\Vnetby\Schemaorg\DataTypes\DataInteger|\Vnetby\Schemaorg\DataTypes\DataText
     */
    public $pageEnd;

    /**
     * Indicates sections of a Web page that are particularly 'speakable' in the sense of being highlighted as being especially appropriate for
     * text-to-speech conversion. Other sections of a page may also be usefully spoken in particular circumstances; the 'speakable' property serves to indicate
     * the parts most likely to be generally useful for speech. The *speakable* property can be repeated an arbitrary number of times,
     * with three kinds of possible 'content-locator' values: 1.) *id-value* URL references - uses *id-value* of an element in the page being
     * annotated. The simplest use of *speakable* has (potentially relative) URL values, referencing identified sections of the document concerned. 2.) CSS Selectors
     * - addresses content in the annotated page, e.g. via class attribute. Use the [[cssSelector]] property. 3.) XPaths - addresses content via
     * XPaths (assuming an XML view of the content). Use the [[xpath]] property. For more sophisticated markup of speakable sections beyond simple
     * ID references, either CSS selectors or XPath expressions to pick out document section(s) as speakable. For this we define a supporting
     * type, [[SpeakableSpecification]] which is defined to be a possible value of the *speakable* property. 
     * @var string|\Vnetby\Schemaorg\Types\Thing\Intangible\SpeakableSpecification|\Vnetby\Schemaorg\DataTypes\DataURL
     */
    public $speakable;

    /**
     * The number of words in the text of the Article.
     * @param string|int|\Vnetby\Schemaorg\DataTypes\DataInteger $value
     * @return static
     */
    function setWordCount($value)
    {
        return $this->setProp('wordCount', $value);
    }

    /**
     * Articles may belong to one or more 'sections' in a magazine or newspaper, such as Sports, Lifestyle, etc.
     * @param string|\Vnetby\Schemaorg\DataTypes\DataText $value
     * @return static
     */
    function setArticleSection($value)
    {
        return $this->setProp('articleSection', $value);
    }

    /**
     * For an [[Article]], typically a [[NewsArticle]], the backstory property provides a textual summary giving a brief explanation of why and how
     * an article was created. In a journalistic setting this could include information about reporting process, methods, interviews, data sources, etc.
     * @param string|\Vnetby\Schemaorg\DataTypes\DataText|\Vnetby\Schemaorg\Types\Thing\CreativeWork\CreativeWork $value
     * @return static
     */
    function setBackstory($value)
    {
        return $this->setProp('backstory', $value);
    }

    /**
     * Any description of pages that is not separated into pageStart and pageEnd; for example, "1-6, 9, 55" or "10-12, 46-49".
     * @param string|\Vnetby\Schemaorg\DataTypes\DataText $value
     * @return static
     */
    function setPagination($value)
    {
        return $this->setProp('pagination', $value);
    }

    /**
     * The page on which the work starts; for example "135" or "xiii".
     * @param string|int|\Vnetby\Schemaorg\DataTypes\DataText|\Vnetby\Schemaorg\DataTypes\DataInteger $value
     * @return static
     */
    function setPageStart($value)
    {
        return $this->setProp('pageStart', $value);
    }

    /**
     * The actual body of the article.
     * @param string|\Vnetby\Schemaorg\DataTypes\DataText $value
     * @return static
     */
    function setArticleBody($value)
    {
        return $this->setProp('articleBody', $value);
    }

    /**
     * The page on which the work ends; for example "138" or "xvi".
     * @param string|int|\Vnetby\Schemaorg\DataTypes\DataInteger|\Vnetby\Schemaorg\DataTypes\DataText $value
     * @return static
     */
    function setPageEnd($value)
    {
        return $this->setProp('pageEnd', $value);
    }

    /**
     * Indicates sections of a Web page that are particularly 'speakable' in the sense of being highlighted as being especially appropriate for
     * text-to-speech conversion. Other sections of a page may also be usefully spoken in particular circumstances; the 'speakable' property serves to indicate
     * the parts most likely to be generally useful for speech. The *speakable* property can be repeated an arbitrary number of times,
     * with three kinds of possible 'content-locator' values: 1.) *id-value* URL references - uses *id-value* of an element in the page being
     * annotated. The simplest use of *speakable* has (potentially relative) URL values, referencing identified sections of the document concerned. 2.) CSS Selectors
     * - addresses content in the annotated page, e.g. via class attribute. Use the [[cssSelector]] property. 3.) XPaths - addresses content via
     * XPaths (assuming an XML view of the content). Use the [[xpath]] property. For more sophisticated markup of speakable sections beyond simple
     * ID references, either CSS selectors or XPath expressions to pick out document section(s) as speakable. For this we define a supporting
     * type, [[SpeakableSpecification]] which is defined to be a possible value of the *speakable* property. 
     * @param string|\Vnetby\Schemaorg\Types\Thing\Intangible\SpeakableSpecification|\Vnetby\Schemaorg\DataTypes\DataURL $value
     * @return static
     */
    function setSpeakable($value)
    {
        return $this->setProp('speakable', $value);
    }

    /**
     * The number of words in the text of the Article.
     * @return string|int|\Vnetby\Schemaorg\DataTypes\DataInteger|null
     */
    function getWordCount()
    {
        return $this->getProp('wordCount');
    }

    /**
     * Articles may belong to one or more 'sections' in a magazine or newspaper, such as Sports, Lifestyle, etc.
     * @return string|\Vnetby\Schemaorg\DataTypes\DataText|null
     */
    function getArticleSection()
    {
        return $this->getProp('articleSection');
    }

    /**
     * For an [[Article]], typically a [[NewsArticle]], the backstory property provides a textual summary giving a brief explanation of why and how
     * an article was created. In a journalistic setting this could include information about reporting process, methods, interviews, data sources, etc.
     * @return string|\Vnetby\Schemaorg\DataTypes\DataText|\Vnetby\Schemaorg\Types\Thing\CreativeWork\CreativeWork|null
     */
    function getBackstory()
    {
        return $this->getProp('backstory');
    }

    /**
     * Any description of pages that is not separated into pageStart and pageEnd; for example, "1-6, 9, 55" or "10-12, 46-49".
     * @return string|\Vnetby\Schemaorg\DataTypes\DataText|null
     */
    function getPagination()
    {
        return $this->getProp('pagination');
    }

    /**
     * The page on which the work starts; for example "135" or "xiii".
     * @return string|int|\Vnetby\Schemaorg\DataTypes\DataText|\Vnetby\Schemaorg\DataTypes\DataInteger|null
     */
    function getPageStart()
    {
        return $this->getProp('pageStart');
    }

    /**
     * The actual body of the article.
     * @return string|\Vnetby\Schemaorg\DataTypes\DataText|null
     */
    function getArticleBody()
    {
        return $this->getProp('articleBody');
    }

    /**
     * The page on which the work ends; for example "138" or "xvi".
     * @return string|int|\Vnetby\Schemaorg\DataTypes\DataInteger|\Vnetby\Schemaorg\DataTypes\DataText|null
     */
    function getPageEnd()
    {
        return $this->getProp('pageEnd');
    }

    /**
     * Indicates sections of a Web page that are particularly 'speakable' in the sense of being highlighted as being especially appropriate for
     * text-to-speech conversion. Other sections of a page may also be usefully spoken in particular circumstances; the 'speakable' property serves to indicate
     * the parts most likely to be generally useful for speech. The *speakable* property can be repeated an arbitrary number of times,
     * with three kinds of possible 'content-locator' values: 1.) *id-value* URL references - uses *id-value* of an element in the page being
     * annotated. The simplest use of *speakable* has (potentially relative) URL values, referencing identified sections of the document concerned. 2.) CSS Selectors
     * - addresses content in the annotated page, e.g. via class attribute. Use the [[cssSelector]] property. 3.) XPaths - addresses content via
     * XPaths (assuming an XML view of the content). Use the [[xpath]] property. For more sophisticated markup of speakable sections beyond simple
     * ID references, either CSS selectors or XPath expressions to pick out document section(s) as speakable. For this we define a supporting
     * type, [[SpeakableSpecification]] which is defined to be a possible value of the *speakable* property. 
     * @return string|\Vnetby\Schemaorg\Types\Thing\Intangible\SpeakableSpecification|\Vnetby\Schemaorg\DataTypes\DataURL|null
     */
    function getSpeakable()
    {
        return $this->getProp('speakable');
    }
}
