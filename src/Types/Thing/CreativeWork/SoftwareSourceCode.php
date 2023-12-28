<?php

/**
* @see https://schema.org/SoftwareSourceCode
 * Computer programming source code. Example: Full (compile ready) solutions, code snippet samples, scripts, templates.
*/

namespace Vnetby\Schemaorg\Types\Thing\CreativeWork;

class SoftwareSourceCode extends \Vnetby\Schemaorg\Types\Thing\CreativeWork\CreativeWork
{
   const TYPE = 'SoftwareSourceCode';

   /**
     * What type of code sample: full (compile ready) solution, code snippet, inline code, scripts, template.
    * @var \Vnetby\Schemaorg\DataTypes\DataText
    */
   protected $prop_codeSampleType;

   /**
     * Runtime platform or script interpreter dependencies (example: Java v1, Python 2.3, .NET Framework 3.0).
    * @var \Vnetby\Schemaorg\DataTypes\DataText
    */
   protected $prop_runtimePlatform;

   /**
     * Target Operating System / Product to which the code applies. If applies to several versions, just the product name can be
     * used.
    * @var \Vnetby\Schemaorg\Types\Thing\CreativeWork\SoftwareApplication\SoftwareApplication
    */
   protected $prop_targetProduct;

   /**
     * The computer programming language.
    * @var \Vnetby\Schemaorg\DataTypes\DataText|\Vnetby\Schemaorg\Types\Thing\Intangible\ComputerLanguage
    */
   protected $prop_programmingLanguage;

   /**
     * Link to the repository where the un-compiled, human readable code and related code is located (SVN, GitHub, CodePlex).
    * @var \Vnetby\Schemaorg\DataTypes\DataURL
    */
   protected $prop_codeRepository;

   /**
     * What type of code sample: full (compile ready) solution, code snippet, inline code, scripts, template.
    * @param \Vnetby\Schemaorg\DataTypes\DataText $value
    * @return static
    */
   function setCodeSampleType($value)
   {
       return $this->setProp('codeSampleType', $value);
   }

   /**
     * Runtime platform or script interpreter dependencies (example: Java v1, Python 2.3, .NET Framework 3.0).
    * @param \Vnetby\Schemaorg\DataTypes\DataText $value
    * @return static
    */
   function setRuntimePlatform($value)
   {
       return $this->setProp('runtimePlatform', $value);
   }

   /**
     * Target Operating System / Product to which the code applies. If applies to several versions, just the product name can be
     * used.
    * @param \Vnetby\Schemaorg\Types\Thing\CreativeWork\SoftwareApplication\SoftwareApplication $value
    * @return static
    */
   function setTargetProduct($value)
   {
       return $this->setProp('targetProduct', $value);
   }

   /**
     * The computer programming language.
    * @param \Vnetby\Schemaorg\DataTypes\DataText|\Vnetby\Schemaorg\Types\Thing\Intangible\ComputerLanguage $value
    * @return static
    */
   function setProgrammingLanguage($value)
   {
       return $this->setProp('programmingLanguage', $value);
   }

   /**
     * Link to the repository where the un-compiled, human readable code and related code is located (SVN, GitHub, CodePlex).
    * @param \Vnetby\Schemaorg\DataTypes\DataURL $value
    * @return static
    */
   function setCodeRepository($value)
   {
       return $this->setProp('codeRepository', $value);
   }

   /**
     * What type of code sample: full (compile ready) solution, code snippet, inline code, scripts, template.
    * @return \Vnetby\Schemaorg\DataTypes\DataText|null
    */
   function getCodeSampleType()
   {
       return $this->getProp('codeSampleType');
   }

   /**
     * Runtime platform or script interpreter dependencies (example: Java v1, Python 2.3, .NET Framework 3.0).
    * @return \Vnetby\Schemaorg\DataTypes\DataText|null
    */
   function getRuntimePlatform()
   {
       return $this->getProp('runtimePlatform');
   }

   /**
     * Target Operating System / Product to which the code applies. If applies to several versions, just the product name can be
     * used.
    * @return \Vnetby\Schemaorg\Types\Thing\CreativeWork\SoftwareApplication\SoftwareApplication|null
    */
   function getTargetProduct()
   {
       return $this->getProp('targetProduct');
   }

   /**
     * The computer programming language.
    * @return \Vnetby\Schemaorg\DataTypes\DataText|\Vnetby\Schemaorg\Types\Thing\Intangible\ComputerLanguage|null
    */
   function getProgrammingLanguage()
   {
       return $this->getProp('programmingLanguage');
   }

   /**
     * Link to the repository where the un-compiled, human readable code and related code is located (SVN, GitHub, CodePlex).
    * @return \Vnetby\Schemaorg\DataTypes\DataURL|null
    */
   function getCodeRepository()
   {
       return $this->getProp('codeRepository');
   }
}
