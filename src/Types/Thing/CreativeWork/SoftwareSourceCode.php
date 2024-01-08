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
     * Target Operating System / Product to which the code applies. If applies to several versions, just the product name can be
     * used.
     * @var \Vnetby\Schemaorg\Types\Thing\CreativeWork\SoftwareApplication\SoftwareApplication
     */
    public $targetProduct;

    /**
     * What type of code sample: full (compile ready) solution, code snippet, inline code, scripts, template.
     * @var string|\Vnetby\Schemaorg\DataTypes\DataText
     */
    public $codeSampleType;

    /**
     * Runtime platform or script interpreter dependencies (example: Java v1, Python 2.3, .NET Framework 3.0).
     * @var string|\Vnetby\Schemaorg\DataTypes\DataText
     */
    public $runtimePlatform;

    /**
     * The computer programming language.
     * @var string|\Vnetby\Schemaorg\DataTypes\DataText|\Vnetby\Schemaorg\Types\Thing\Intangible\ComputerLanguage
     */
    public $programmingLanguage;

    /**
     * Link to the repository where the un-compiled, human readable code and related code is located (SVN, GitHub, CodePlex).
     * @var string|\Vnetby\Schemaorg\DataTypes\DataURL
     */
    public $codeRepository;

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
     * What type of code sample: full (compile ready) solution, code snippet, inline code, scripts, template.
     * @param string|\Vnetby\Schemaorg\DataTypes\DataText $value
     * @return static
     */
    function setCodeSampleType($value)
    {
        return $this->setProp('codeSampleType', $value);
    }

    /**
     * Runtime platform or script interpreter dependencies (example: Java v1, Python 2.3, .NET Framework 3.0).
     * @param string|\Vnetby\Schemaorg\DataTypes\DataText $value
     * @return static
     */
    function setRuntimePlatform($value)
    {
        return $this->setProp('runtimePlatform', $value);
    }

    /**
     * The computer programming language.
     * @param string|\Vnetby\Schemaorg\DataTypes\DataText|\Vnetby\Schemaorg\Types\Thing\Intangible\ComputerLanguage $value
     * @return static
     */
    function setProgrammingLanguage($value)
    {
        return $this->setProp('programmingLanguage', $value);
    }

    /**
     * Link to the repository where the un-compiled, human readable code and related code is located (SVN, GitHub, CodePlex).
     * @param string|\Vnetby\Schemaorg\DataTypes\DataURL $value
     * @return static
     */
    function setCodeRepository($value)
    {
        return $this->setProp('codeRepository', $value);
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
     * What type of code sample: full (compile ready) solution, code snippet, inline code, scripts, template.
     * @return string|\Vnetby\Schemaorg\DataTypes\DataText|null
     */
    function getCodeSampleType()
    {
        return $this->getProp('codeSampleType');
    }

    /**
     * Runtime platform or script interpreter dependencies (example: Java v1, Python 2.3, .NET Framework 3.0).
     * @return string|\Vnetby\Schemaorg\DataTypes\DataText|null
     */
    function getRuntimePlatform()
    {
        return $this->getProp('runtimePlatform');
    }

    /**
     * The computer programming language.
     * @return string|\Vnetby\Schemaorg\DataTypes\DataText|\Vnetby\Schemaorg\Types\Thing\Intangible\ComputerLanguage|null
     */
    function getProgrammingLanguage()
    {
        return $this->getProp('programmingLanguage');
    }

    /**
     * Link to the repository where the un-compiled, human readable code and related code is located (SVN, GitHub, CodePlex).
     * @return string|\Vnetby\Schemaorg\DataTypes\DataURL|null
     */
    function getCodeRepository()
    {
        return $this->getProp('codeRepository');
    }
}
