<?php

/**
 * @see https://schema.org/WebPage
 * A web page. Every web page is implicitly assumed to be declared to be of type WebPage, so the various properties
 * about that webpage, such as <code>breadcrumb</code> may be used. We recommend explicit declaration if these properties are specified, but if they
 * are found outside of an itemscope, they will be assumed to be about the page.
 */

namespace Vnetby\Schemaorg\Types\Thing\CreativeWork\WebPage;

class WebPage extends \Vnetby\Schemaorg\Types\Thing\CreativeWork\CreativeWork
{
    const TYPE = 'WebPage';

    /**
     * Date on which the content on this web page was last reviewed for accuracy and/or completeness.
     * @var string|\Vnetby\Schemaorg\DataTypes\DataDate
     */
    public $lastReviewed;

    /**
     * One of the domain specialities to which this web page's content applies.
     * @var \Vnetby\Schemaorg\Types\Thing\Intangible\Enumeration\Specialty\Specialty
     */
    public $specialty;

    /**
     * Indicates the main image on the page.
     * @var \Vnetby\Schemaorg\Types\Thing\CreativeWork\MediaObject\ImageObject\ImageObject
     */
    public $primaryImageOfPage;

    /**
     * Indicates if this web page element is the main subject of the page.
     * @var \Vnetby\Schemaorg\Types\Thing\CreativeWork\WebPageElement\WebPageElement
     */
    public $mainContentOfPage;

    /**
     * A link related to this web page, for example to other related web pages.
     * @var string|\Vnetby\Schemaorg\DataTypes\DataURL
     */
    public $relatedLink;

    /**
     * People or organizations that have reviewed the content on this web page for accuracy and/or completeness.
     * @var \Vnetby\Schemaorg\Types\Thing\Organization\Organization|\Vnetby\Schemaorg\Types\Thing\Person\Person
     */
    public $reviewedBy;

    /**
     * A set of links that can help a user understand and navigate a website hierarchy.
     * @var string|\Vnetby\Schemaorg\DataTypes\DataText|\Vnetby\Schemaorg\Types\Thing\Intangible\ItemList\BreadcrumbList
     */
    public $breadcrumb;

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
     * One of the more significant URLs on the page. Typically, these are the non-navigation links that are clicked on the most.
     * @var string|\Vnetby\Schemaorg\DataTypes\DataURL
     */
    public $significantLink;

    /**
     * Date on which the content on this web page was last reviewed for accuracy and/or completeness.
     * @param string|\Vnetby\Schemaorg\DataTypes\DataDate $value
     * @return static
     */
    function setLastReviewed($value)
    {
        return $this->setProp('lastReviewed', $value);
    }

    /**
     * One of the domain specialities to which this web page's content applies.
     * @param \Vnetby\Schemaorg\Types\Thing\Intangible\Enumeration\Specialty\Specialty $value
     * @return static
     */
    function setSpecialty($value)
    {
        return $this->setProp('specialty', $value);
    }

    /**
     * Indicates the main image on the page.
     * @param \Vnetby\Schemaorg\Types\Thing\CreativeWork\MediaObject\ImageObject\ImageObject $value
     * @return static
     */
    function setPrimaryImageOfPage($value)
    {
        return $this->setProp('primaryImageOfPage', $value);
    }

    /**
     * Indicates if this web page element is the main subject of the page.
     * @param \Vnetby\Schemaorg\Types\Thing\CreativeWork\WebPageElement\WebPageElement $value
     * @return static
     */
    function setMainContentOfPage($value)
    {
        return $this->setProp('mainContentOfPage', $value);
    }

    /**
     * A link related to this web page, for example to other related web pages.
     * @param string|\Vnetby\Schemaorg\DataTypes\DataURL $value
     * @return static
     */
    function setRelatedLink($value)
    {
        return $this->setProp('relatedLink', $value);
    }

    /**
     * People or organizations that have reviewed the content on this web page for accuracy and/or completeness.
     * @param \Vnetby\Schemaorg\Types\Thing\Organization\Organization|\Vnetby\Schemaorg\Types\Thing\Person\Person $value
     * @return static
     */
    function setReviewedBy($value)
    {
        return $this->setProp('reviewedBy', $value);
    }

    /**
     * A set of links that can help a user understand and navigate a website hierarchy.
     * @param string|\Vnetby\Schemaorg\DataTypes\DataText|\Vnetby\Schemaorg\Types\Thing\Intangible\ItemList\BreadcrumbList $value
     * @return static
     */
    function setBreadcrumb($value)
    {
        return $this->setProp('breadcrumb', $value);
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
     * One of the more significant URLs on the page. Typically, these are the non-navigation links that are clicked on the most.
     * @param string|\Vnetby\Schemaorg\DataTypes\DataURL $value
     * @return static
     */
    function setSignificantLink($value)
    {
        return $this->setProp('significantLink', $value);
    }

    /**
     * Date on which the content on this web page was last reviewed for accuracy and/or completeness.
     * @return string|\Vnetby\Schemaorg\DataTypes\DataDate|null
     */
    function getLastReviewed()
    {
        return $this->getProp('lastReviewed');
    }

    /**
     * One of the domain specialities to which this web page's content applies.
     * @return \Vnetby\Schemaorg\Types\Thing\Intangible\Enumeration\Specialty\Specialty|null
     */
    function getSpecialty()
    {
        return $this->getProp('specialty');
    }

    /**
     * Indicates the main image on the page.
     * @return \Vnetby\Schemaorg\Types\Thing\CreativeWork\MediaObject\ImageObject\ImageObject|null
     */
    function getPrimaryImageOfPage()
    {
        return $this->getProp('primaryImageOfPage');
    }

    /**
     * Indicates if this web page element is the main subject of the page.
     * @return \Vnetby\Schemaorg\Types\Thing\CreativeWork\WebPageElement\WebPageElement|null
     */
    function getMainContentOfPage()
    {
        return $this->getProp('mainContentOfPage');
    }

    /**
     * A link related to this web page, for example to other related web pages.
     * @return string|\Vnetby\Schemaorg\DataTypes\DataURL|null
     */
    function getRelatedLink()
    {
        return $this->getProp('relatedLink');
    }

    /**
     * People or organizations that have reviewed the content on this web page for accuracy and/or completeness.
     * @return \Vnetby\Schemaorg\Types\Thing\Organization\Organization|\Vnetby\Schemaorg\Types\Thing\Person\Person|null
     */
    function getReviewedBy()
    {
        return $this->getProp('reviewedBy');
    }

    /**
     * A set of links that can help a user understand and navigate a website hierarchy.
     * @return string|\Vnetby\Schemaorg\DataTypes\DataText|\Vnetby\Schemaorg\Types\Thing\Intangible\ItemList\BreadcrumbList|null
     */
    function getBreadcrumb()
    {
        return $this->getProp('breadcrumb');
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

    /**
     * One of the more significant URLs on the page. Typically, these are the non-navigation links that are clicked on the most.
     * @return string|\Vnetby\Schemaorg\DataTypes\DataURL|null
     */
    function getSignificantLink()
    {
        return $this->getProp('significantLink');
    }
}
