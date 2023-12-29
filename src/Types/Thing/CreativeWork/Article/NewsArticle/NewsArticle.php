<?php

/**
 * @see https://schema.org/NewsArticle
 * A NewsArticle is an article whose content reports news, or provides background context and supporting materials for understanding the news. A
 * more detailed overview of [schema.org News markup](/docs/news.html) is also available. 
 */

namespace Vnetby\Schemaorg\Types\Thing\CreativeWork\Article\NewsArticle;

class NewsArticle extends \Vnetby\Schemaorg\Types\Thing\CreativeWork\Article\Article
{
    const TYPE = 'NewsArticle';

    /**
     * The number of the column in which the NewsArticle appears in the print edition.
     * @var string|\Vnetby\Schemaorg\DataTypes\DataText
     */
    public $printColumn;

    /**
     * A [dateline](https://en.wikipedia.org/wiki/Dateline) is a brief piece of text included in news articles that describes where and when the story was written
     * or filed though the date is often omitted. Sometimes only a placename is provided. Structured representations of dateline-related information can also
     * be expressed more explicitly using [[locationCreated]] (which represents where a work was created, e.g. where a news report was written). For
     * location depicted or described in the content, use [[contentLocation]]. Dateline summaries are oriented more towards human readers than towards automated processing,
     * and can vary substantially. Some examples: "BEIRUT, Lebanon, June 2.", "Paris, France", "December 19, 2017 11:43AM Reporting from Washington", "Beijing/Moscow", "QUEZON
     * CITY, Philippines". 
     * @var string|\Vnetby\Schemaorg\DataTypes\DataText
     */
    public $dateline;

    /**
     * If this NewsArticle appears in print, this field indicates the name of the page on which the article is found. Please
     * note that this field is intended for the exact page name (e.g. A5, B18).
     * @var string|\Vnetby\Schemaorg\DataTypes\DataText
     */
    public $printPage;

    /**
     * The edition of the print product in which the NewsArticle appears.
     * @var string|\Vnetby\Schemaorg\DataTypes\DataText
     */
    public $printEdition;

    /**
     * If this NewsArticle appears in print, this field indicates the print section in which the article appeared.
     * @var string|\Vnetby\Schemaorg\DataTypes\DataText
     */
    public $printSection;

    /**
     * The number of the column in which the NewsArticle appears in the print edition.
     * @param string|\Vnetby\Schemaorg\DataTypes\DataText $value
     * @return static
     */
    function setPrintColumn($value)
    {
        return $this->setProp('printColumn', $value);
    }

    /**
     * A [dateline](https://en.wikipedia.org/wiki/Dateline) is a brief piece of text included in news articles that describes where and when the story was written
     * or filed though the date is often omitted. Sometimes only a placename is provided. Structured representations of dateline-related information can also
     * be expressed more explicitly using [[locationCreated]] (which represents where a work was created, e.g. where a news report was written). For
     * location depicted or described in the content, use [[contentLocation]]. Dateline summaries are oriented more towards human readers than towards automated processing,
     * and can vary substantially. Some examples: "BEIRUT, Lebanon, June 2.", "Paris, France", "December 19, 2017 11:43AM Reporting from Washington", "Beijing/Moscow", "QUEZON
     * CITY, Philippines". 
     * @param string|\Vnetby\Schemaorg\DataTypes\DataText $value
     * @return static
     */
    function setDateline($value)
    {
        return $this->setProp('dateline', $value);
    }

    /**
     * If this NewsArticle appears in print, this field indicates the name of the page on which the article is found. Please
     * note that this field is intended for the exact page name (e.g. A5, B18).
     * @param string|\Vnetby\Schemaorg\DataTypes\DataText $value
     * @return static
     */
    function setPrintPage($value)
    {
        return $this->setProp('printPage', $value);
    }

    /**
     * The edition of the print product in which the NewsArticle appears.
     * @param string|\Vnetby\Schemaorg\DataTypes\DataText $value
     * @return static
     */
    function setPrintEdition($value)
    {
        return $this->setProp('printEdition', $value);
    }

    /**
     * If this NewsArticle appears in print, this field indicates the print section in which the article appeared.
     * @param string|\Vnetby\Schemaorg\DataTypes\DataText $value
     * @return static
     */
    function setPrintSection($value)
    {
        return $this->setProp('printSection', $value);
    }

    /**
     * The number of the column in which the NewsArticle appears in the print edition.
     * @return string|\Vnetby\Schemaorg\DataTypes\DataText|null
     */
    function getPrintColumn()
    {
        return $this->getProp('printColumn');
    }

    /**
     * A [dateline](https://en.wikipedia.org/wiki/Dateline) is a brief piece of text included in news articles that describes where and when the story was written
     * or filed though the date is often omitted. Sometimes only a placename is provided. Structured representations of dateline-related information can also
     * be expressed more explicitly using [[locationCreated]] (which represents where a work was created, e.g. where a news report was written). For
     * location depicted or described in the content, use [[contentLocation]]. Dateline summaries are oriented more towards human readers than towards automated processing,
     * and can vary substantially. Some examples: "BEIRUT, Lebanon, June 2.", "Paris, France", "December 19, 2017 11:43AM Reporting from Washington", "Beijing/Moscow", "QUEZON
     * CITY, Philippines". 
     * @return string|\Vnetby\Schemaorg\DataTypes\DataText|null
     */
    function getDateline()
    {
        return $this->getProp('dateline');
    }

    /**
     * If this NewsArticle appears in print, this field indicates the name of the page on which the article is found. Please
     * note that this field is intended for the exact page name (e.g. A5, B18).
     * @return string|\Vnetby\Schemaorg\DataTypes\DataText|null
     */
    function getPrintPage()
    {
        return $this->getProp('printPage');
    }

    /**
     * The edition of the print product in which the NewsArticle appears.
     * @return string|\Vnetby\Schemaorg\DataTypes\DataText|null
     */
    function getPrintEdition()
    {
        return $this->getProp('printEdition');
    }

    /**
     * If this NewsArticle appears in print, this field indicates the print section in which the article appeared.
     * @return string|\Vnetby\Schemaorg\DataTypes\DataText|null
     */
    function getPrintSection()
    {
        return $this->getProp('printSection');
    }
}
