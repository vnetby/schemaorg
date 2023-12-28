<?php

/**
* @see https://schema.org/DigitalDocumentPermission
 * A permission for a particular person or group to access a particular file.
*/

namespace Vnetby\Schemaorg\Types\Thing\Intangible;

class DigitalDocumentPermission extends \Vnetby\Schemaorg\Types\Thing\Intangible\Intangible
{
   const TYPE = 'DigitalDocumentPermission';

   /**
     * The person, organization, contact point, or audience that has been granted this permission.
    * @var \Vnetby\Schemaorg\Types\Thing\Intangible\StructuredValue\ContactPoint\ContactPoint|\Vnetby\Schemaorg\Types\Thing\Organization\Organization|\Vnetby\Schemaorg\Types\Thing\Person\Person|\Vnetby\Schemaorg\Types\Thing\Intangible\Audience\Audience
    */
   protected $prop_grantee;

   /**
     * The type of permission granted the person, organization, or audience.
    * @var \Vnetby\Schemaorg\Types\Thing\Intangible\Enumeration\DigitalDocumentPermissionType\DigitalDocumentPermissionType
    */
   protected $prop_permissionType;

   /**
     * The person, organization, contact point, or audience that has been granted this permission.
    * @param \Vnetby\Schemaorg\Types\Thing\Intangible\StructuredValue\ContactPoint\ContactPoint|\Vnetby\Schemaorg\Types\Thing\Organization\Organization|\Vnetby\Schemaorg\Types\Thing\Person\Person|\Vnetby\Schemaorg\Types\Thing\Intangible\Audience\Audience $value
    * @return static
    */
   function setGrantee($value)
   {
       return $this->setProp('grantee', $value);
   }

   /**
     * The type of permission granted the person, organization, or audience.
    * @param \Vnetby\Schemaorg\Types\Thing\Intangible\Enumeration\DigitalDocumentPermissionType\DigitalDocumentPermissionType $value
    * @return static
    */
   function setPermissionType($value)
   {
       return $this->setProp('permissionType', $value);
   }

   /**
     * The person, organization, contact point, or audience that has been granted this permission.
    * @return \Vnetby\Schemaorg\Types\Thing\Intangible\StructuredValue\ContactPoint\ContactPoint|\Vnetby\Schemaorg\Types\Thing\Organization\Organization|\Vnetby\Schemaorg\Types\Thing\Person\Person|\Vnetby\Schemaorg\Types\Thing\Intangible\Audience\Audience|null
    */
   function getGrantee()
   {
       return $this->getProp('grantee');
   }

   /**
     * The type of permission granted the person, organization, or audience.
    * @return \Vnetby\Schemaorg\Types\Thing\Intangible\Enumeration\DigitalDocumentPermissionType\DigitalDocumentPermissionType|null
    */
   function getPermissionType()
   {
       return $this->getProp('permissionType');
   }
}
