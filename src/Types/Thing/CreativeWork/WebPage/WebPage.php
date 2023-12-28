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
     * People or organizations that have reviewed the content on this web page for accuracy and/or completeness.
    * @var \Vnetby\Schemaorg\Types\Thing\Person\Person|\Vnetby\Schemaorg\Types\Thing\Organization\Organization
    */
   protected $prop_reviewedBy;

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
    * @var \Vnetby\Schemaorg\Types\Thing\Intangible\SpeakableSpecification|\Vnetby\Schemaorg\DataTypes\DataURL
    */
   protected $prop_speakable;

   /**
     * Indicates the main image on the page.
    * @var \Vnetby\Schemaorg\Types\Thing\CreativeWork\MediaObject\ImageObject\ImageObject
    */
   protected $prop_primaryImageOfPage;

   /**
     * A link related to this web page, for example to other related web pages.
    * @var \Vnetby\Schemaorg\DataTypes\DataURL
    */
   protected $prop_relatedLink;

   /**
     * Indicates if this web page element is the main subject of the page.
    * @var \Vnetby\Schemaorg\Types\Thing\CreativeWork\WebPageElement\WebPageElement
    */
   protected $prop_mainContentOfPage;

   /**
     * One of the domain specialities to which this web page's content applies.
    * @var \Vnetby\Schemaorg\Types\Thing\Intangible\Enumeration\Specialty\Specialty
    */
   protected $prop_specialty;

   /**
     * One of the more significant URLs on the page. Typically, these are the non-navigation links that are clicked on the most.
    * @var \Vnetby\Schemaorg\DataTypes\DataURL
    */
   protected $prop_significantLink;

   /**
     * A set of links that can help a user understand and navigate a website hierarchy.
    * @var \Vnetby\Schemaorg\DataTypes\DataText|\Vnetby\Schemaorg\Types\Thing\Intangible\ItemList\BreadcrumbList
    */
   protected $prop_breadcrumb;

   /**
     * Date on which the content on this web page was last reviewed for accuracy and/or completeness.
    * @var \Vnetby\Schemaorg\DataTypes\DataDate
    */
   protected $prop_lastReviewed;

   /**
     * People or organizations that have reviewed the content on this web page for accuracy and/or completeness.
    * @param \Vnetby\Schemaorg\Types\Thing\Person\Person|\Vnetby\Schemaorg\Types\Thing\Organization\Organization $value
    * @return static
    */
   function setReviewedBy($value)
   {
       return $this->setProp('reviewedBy', $value);
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
    * @param \Vnetby\Schemaorg\Types\Thing\Intangible\SpeakableSpecification|\Vnetby\Schemaorg\DataTypes\DataURL $value
    * @return static
    */
   function setSpeakable($value)
   {
       return $this->setProp('speakable', $value);
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
     * A link related to this web page, for example to other related web pages.
    * @param \Vnetby\Schemaorg\DataTypes\DataURL $value
    * @return static
    */
   function setRelatedLink($value)
   {
       return $this->setProp('relatedLink', $value);
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
     * One of the domain specialities to which this web page's content applies.
    * @param \Vnetby\Schemaorg\Types\Thing\Intangible\Enumeration\Specialty\Specialty $value
    * @return static
    */
   function setSpecialty($value)
   {
       return $this->setProp('specialty', $value);
   }

   /**
     * One of the more significant URLs on the page. Typically, these are the non-navigation links that are clicked on the most.
    * @param \Vnetby\Schemaorg\DataTypes\DataURL $value
    * @return static
    */
   function setSignificantLink($value)
   {
       return $this->setProp('significantLink', $value);
   }

   /**
     * A set of links that can help a user understand and navigate a website hierarchy.
    * @param \Vnetby\Schemaorg\DataTypes\DataText|\Vnetby\Schemaorg\Types\Thing\Intangible\ItemList\BreadcrumbList $value
    * @return static
    */
   function setBreadcrumb($value)
   {
       return $this->setProp('breadcrumb', $value);
   }

   /**
     * Date on which the content on this web page was last reviewed for accuracy and/or completeness.
    * @param \Vnetby\Schemaorg\DataTypes\DataDate $value
    * @return static
    */
   function setLastReviewed($value)
   {
       return $this->setProp('lastReviewed', $value);
   }

   /**
     * People or organizations that have reviewed the content on this web page for accuracy and/or completeness.
    * @return \Vnetby\Schemaorg\Types\Thing\Person\Person|\Vnetby\Schemaorg\Types\Thing\Organization\Organization|null
    */
   function getReviewedBy()
   {
       return $this->getProp('reviewedBy');
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
    * @return \Vnetby\Schemaorg\Types\Thing\Intangible\SpeakableSpecification|\Vnetby\Schemaorg\DataTypes\DataURL|null
    */
   function getSpeakable()
   {
       return $this->getProp('speakable');
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
     * A link related to this web page, for example to other related web pages.
    * @return \Vnetby\Schemaorg\DataTypes\DataURL|null
    */
   function getRelatedLink()
   {
       return $this->getProp('relatedLink');
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
     * One of the domain specialities to which this web page's content applies.
    * @return \Vnetby\Schemaorg\Types\Thing\Intangible\Enumeration\Specialty\Specialty|null
    */
   function getSpecialty()
   {
       return $this->getProp('specialty');
   }

   /**
     * One of the more significant URLs on the page. Typically, these are the non-navigation links that are clicked on the most.
    * @return \Vnetby\Schemaorg\DataTypes\DataURL|null
    */
   function getSignificantLink()
   {
       return $this->getProp('significantLink');
   }

   /**
     * A set of links that can help a user understand and navigate a website hierarchy.
    * @return \Vnetby\Schemaorg\DataTypes\DataText|\Vnetby\Schemaorg\Types\Thing\Intangible\ItemList\BreadcrumbList|null
    */
   function getBreadcrumb()
   {
       return $this->getProp('breadcrumb');
   }

   /**
     * Date on which the content on this web page was last reviewed for accuracy and/or completeness.
    * @return \Vnetby\Schemaorg\DataTypes\DataDate|null
    */
   function getLastReviewed()
   {
       return $this->getProp('lastReviewed');
   }
}
