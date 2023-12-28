<?php

/**
* @see https://schema.org/LinkRole
 * A Role that represents a Web link, e.g. as expressed via the 'url' property. Its linkRelationship property can indicate URL-based and
 * plain textual link types, e.g. those in IANA link registry or others such as 'amphtml'. This structure provides a placeholder where
 * details from HTML's link element can be represented outside of HTML, e.g. in JSON-LD feeds.
*/

namespace Vnetby\Schemaorg\Types\Thing\Intangible\Role;

class LinkRole extends \Vnetby\Schemaorg\Types\Thing\Intangible\Role\Role
{
   const TYPE = 'LinkRole';

   /**
     * Indicates the relationship type of a Web link. 
    * @var \Vnetby\Schemaorg\DataTypes\DataText
    */
   protected $prop_linkRelationship;

   /**
     * The language of the content or performance or used in an action. Please use one of the language codes from the
     * [IETF BCP 47 standard](http://tools.ietf.org/html/bcp47). See also [[availableLanguage]].
    * @var \Vnetby\Schemaorg\DataTypes\DataText|\Vnetby\Schemaorg\Types\Thing\Intangible\Language
    */
   protected $prop_inLanguage;

   /**
     * Indicates the relationship type of a Web link. 
    * @param \Vnetby\Schemaorg\DataTypes\DataText $value
    * @return static
    */
   function setLinkRelationship($value)
   {
       return $this->setProp('linkRelationship', $value);
   }

   /**
     * The language of the content or performance or used in an action. Please use one of the language codes from the
     * [IETF BCP 47 standard](http://tools.ietf.org/html/bcp47). See also [[availableLanguage]].
    * @param \Vnetby\Schemaorg\DataTypes\DataText|\Vnetby\Schemaorg\Types\Thing\Intangible\Language $value
    * @return static
    */
   function setInLanguage($value)
   {
       return $this->setProp('inLanguage', $value);
   }

   /**
     * Indicates the relationship type of a Web link. 
    * @return \Vnetby\Schemaorg\DataTypes\DataText|null
    */
   function getLinkRelationship()
   {
       return $this->getProp('linkRelationship');
   }

   /**
     * The language of the content or performance or used in an action. Please use one of the language codes from the
     * [IETF BCP 47 standard](http://tools.ietf.org/html/bcp47). See also [[availableLanguage]].
    * @return \Vnetby\Schemaorg\DataTypes\DataText|\Vnetby\Schemaorg\Types\Thing\Intangible\Language|null
    */
   function getInLanguage()
   {
       return $this->getProp('inLanguage');
   }
}
