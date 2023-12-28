<?php

/**
* @see https://schema.org/DigitalDocument
 * An electronic file or document.
*/

namespace Vnetby\Schemaorg\Types\Thing\CreativeWork\DigitalDocument;

class DigitalDocument extends \Vnetby\Schemaorg\Types\Thing\CreativeWork\CreativeWork
{
   const TYPE = 'DigitalDocument';

   /**
     * A permission related to the access to this document (e.g. permission to read or write an electronic document). For a public
     * document, specify a grantee with an Audience with audienceType equal to "public".
    * @var \Vnetby\Schemaorg\Types\Thing\Intangible\DigitalDocumentPermission
    */
   protected $prop_hasDigitalDocumentPermission;

   /**
     * A permission related to the access to this document (e.g. permission to read or write an electronic document). For a public
     * document, specify a grantee with an Audience with audienceType equal to "public".
    * @param \Vnetby\Schemaorg\Types\Thing\Intangible\DigitalDocumentPermission $value
    * @return static
    */
   function setHasDigitalDocumentPermission($value)
   {
       return $this->setProp('hasDigitalDocumentPermission', $value);
   }

   /**
     * A permission related to the access to this document (e.g. permission to read or write an electronic document). For a public
     * document, specify a grantee with an Audience with audienceType equal to "public".
    * @return \Vnetby\Schemaorg\Types\Thing\Intangible\DigitalDocumentPermission|null
    */
   function getHasDigitalDocumentPermission()
   {
       return $this->getProp('hasDigitalDocumentPermission');
   }
}
