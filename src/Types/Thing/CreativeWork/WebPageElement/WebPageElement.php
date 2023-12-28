<?php

/**
* @see https://schema.org/WebPageElement
 * A web page element, like a table or an image.
*/

namespace Vnetby\Schemaorg\Types\Thing\CreativeWork\WebPageElement;

class WebPageElement extends \Vnetby\Schemaorg\Types\Thing\CreativeWork\CreativeWork
{
   const TYPE = 'WebPageElement';

   /**
     * An XPath, e.g. of a [[SpeakableSpecification]] or [[WebPageElement]]. In the latter case, multiple matches within a page can constitute a single
     * conceptual "Web page element".
    * @var \Vnetby\Schemaorg\DataTypes\DataXPathType
    */
   protected $prop_xpath;

   /**
     * A CSS selector, e.g. of a [[SpeakableSpecification]] or [[WebPageElement]]. In the latter case, multiple matches within a page can constitute a
     * single conceptual "Web page element".
    * @var \Vnetby\Schemaorg\DataTypes\DataCssSelectorType
    */
   protected $prop_cssSelector;

   /**
     * An XPath, e.g. of a [[SpeakableSpecification]] or [[WebPageElement]]. In the latter case, multiple matches within a page can constitute a single
     * conceptual "Web page element".
    * @param \Vnetby\Schemaorg\DataTypes\DataXPathType $value
    * @return static
    */
   function setXpath($value)
   {
       return $this->setProp('xpath', $value);
   }

   /**
     * A CSS selector, e.g. of a [[SpeakableSpecification]] or [[WebPageElement]]. In the latter case, multiple matches within a page can constitute a
     * single conceptual "Web page element".
    * @param \Vnetby\Schemaorg\DataTypes\DataCssSelectorType $value
    * @return static
    */
   function setCssSelector($value)
   {
       return $this->setProp('cssSelector', $value);
   }

   /**
     * An XPath, e.g. of a [[SpeakableSpecification]] or [[WebPageElement]]. In the latter case, multiple matches within a page can constitute a single
     * conceptual "Web page element".
    * @return \Vnetby\Schemaorg\DataTypes\DataXPathType|null
    */
   function getXpath()
   {
       return $this->getProp('xpath');
   }

   /**
     * A CSS selector, e.g. of a [[SpeakableSpecification]] or [[WebPageElement]]. In the latter case, multiple matches within a page can constitute a
     * single conceptual "Web page element".
    * @return \Vnetby\Schemaorg\DataTypes\DataCssSelectorType|null
    */
   function getCssSelector()
   {
       return $this->getProp('cssSelector');
   }
}
