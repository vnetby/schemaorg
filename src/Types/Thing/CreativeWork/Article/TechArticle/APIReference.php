<?php

/**
* @see https://schema.org/APIReference
 * Reference documentation for application programming interfaces (APIs).
*/

namespace Vnetby\Schemaorg\Types\Thing\CreativeWork\Article\TechArticle;

class APIReference extends \Vnetby\Schemaorg\Types\Thing\CreativeWork\Article\TechArticle\TechArticle
{
   const TYPE = 'APIReference';

   /**
     * Type of app development: phone, Metro style, desktop, XBox, etc.
    * @var \Vnetby\Schemaorg\DataTypes\DataText
    */
   protected $prop_targetPlatform;

   /**
     * Indicates whether API is managed or unmanaged.
    * @var \Vnetby\Schemaorg\DataTypes\DataText
    */
   protected $prop_programmingModel;

   /**
     * Associated product/technology version. E.g., .NET Framework 4.5.
    * @var \Vnetby\Schemaorg\DataTypes\DataText
    */
   protected $prop_assemblyVersion;

   /**
     * Library file name, e.g., mscorlib.dll, system.web.dll.
    * @var \Vnetby\Schemaorg\DataTypes\DataText
    */
   protected $prop_executableLibraryName;

   /**
     * Type of app development: phone, Metro style, desktop, XBox, etc.
    * @param \Vnetby\Schemaorg\DataTypes\DataText $value
    * @return static
    */
   function setTargetPlatform($value)
   {
       return $this->setProp('targetPlatform', $value);
   }

   /**
     * Indicates whether API is managed or unmanaged.
    * @param \Vnetby\Schemaorg\DataTypes\DataText $value
    * @return static
    */
   function setProgrammingModel($value)
   {
       return $this->setProp('programmingModel', $value);
   }

   /**
     * Associated product/technology version. E.g., .NET Framework 4.5.
    * @param \Vnetby\Schemaorg\DataTypes\DataText $value
    * @return static
    */
   function setAssemblyVersion($value)
   {
       return $this->setProp('assemblyVersion', $value);
   }

   /**
     * Library file name, e.g., mscorlib.dll, system.web.dll.
    * @param \Vnetby\Schemaorg\DataTypes\DataText $value
    * @return static
    */
   function setExecutableLibraryName($value)
   {
       return $this->setProp('executableLibraryName', $value);
   }

   /**
     * Type of app development: phone, Metro style, desktop, XBox, etc.
    * @return \Vnetby\Schemaorg\DataTypes\DataText|null
    */
   function getTargetPlatform()
   {
       return $this->getProp('targetPlatform');
   }

   /**
     * Indicates whether API is managed or unmanaged.
    * @return \Vnetby\Schemaorg\DataTypes\DataText|null
    */
   function getProgrammingModel()
   {
       return $this->getProp('programmingModel');
   }

   /**
     * Associated product/technology version. E.g., .NET Framework 4.5.
    * @return \Vnetby\Schemaorg\DataTypes\DataText|null
    */
   function getAssemblyVersion()
   {
       return $this->getProp('assemblyVersion');
   }

   /**
     * Library file name, e.g., mscorlib.dll, system.web.dll.
    * @return \Vnetby\Schemaorg\DataTypes\DataText|null
    */
   function getExecutableLibraryName()
   {
       return $this->getProp('executableLibraryName');
   }
}
