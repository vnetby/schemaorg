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
     * @var string|\Vnetby\Schemaorg\DataTypes\DataText
     */
    public $targetPlatform;

    /**
     * Indicates whether API is managed or unmanaged.
     * @var string|\Vnetby\Schemaorg\DataTypes\DataText
     */
    public $programmingModel;

    /**
     * Associated product/technology version. E.g., .NET Framework 4.5.
     * @var string|\Vnetby\Schemaorg\DataTypes\DataText
     */
    public $assemblyVersion;

    /**
     * Library file name, e.g., mscorlib.dll, system.web.dll.
     * @var string|\Vnetby\Schemaorg\DataTypes\DataText
     */
    public $executableLibraryName;

    /**
     * Type of app development: phone, Metro style, desktop, XBox, etc.
     * @param string|\Vnetby\Schemaorg\DataTypes\DataText $value
     * @return static
     */
    function setTargetPlatform($value)
    {
        return $this->setProp('targetPlatform', $value);
    }

    /**
     * Indicates whether API is managed or unmanaged.
     * @param string|\Vnetby\Schemaorg\DataTypes\DataText $value
     * @return static
     */
    function setProgrammingModel($value)
    {
        return $this->setProp('programmingModel', $value);
    }

    /**
     * Associated product/technology version. E.g., .NET Framework 4.5.
     * @param string|\Vnetby\Schemaorg\DataTypes\DataText $value
     * @return static
     */
    function setAssemblyVersion($value)
    {
        return $this->setProp('assemblyVersion', $value);
    }

    /**
     * Library file name, e.g., mscorlib.dll, system.web.dll.
     * @param string|\Vnetby\Schemaorg\DataTypes\DataText $value
     * @return static
     */
    function setExecutableLibraryName($value)
    {
        return $this->setProp('executableLibraryName', $value);
    }

    /**
     * Type of app development: phone, Metro style, desktop, XBox, etc.
     * @return string|\Vnetby\Schemaorg\DataTypes\DataText|null
     */
    function getTargetPlatform()
    {
        return $this->getProp('targetPlatform');
    }

    /**
     * Indicates whether API is managed or unmanaged.
     * @return string|\Vnetby\Schemaorg\DataTypes\DataText|null
     */
    function getProgrammingModel()
    {
        return $this->getProp('programmingModel');
    }

    /**
     * Associated product/technology version. E.g., .NET Framework 4.5.
     * @return string|\Vnetby\Schemaorg\DataTypes\DataText|null
     */
    function getAssemblyVersion()
    {
        return $this->getProp('assemblyVersion');
    }

    /**
     * Library file name, e.g., mscorlib.dll, system.web.dll.
     * @return string|\Vnetby\Schemaorg\DataTypes\DataText|null
     */
    function getExecutableLibraryName()
    {
        return $this->getProp('executableLibraryName');
    }
}
