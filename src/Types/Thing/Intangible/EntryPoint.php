<?php

/**
 * @see https://schema.org/EntryPoint
 * An entry point, within some Web-based protocol.
 */

namespace Vnetby\Schemaorg\Types\Thing\Intangible;

class EntryPoint extends \Vnetby\Schemaorg\Types\Thing\Intangible\Intangible
{
    const TYPE = 'EntryPoint';

    /**
     * An url template (RFC6570) that will be used to construct the target of the execution of the action.
     * @var string|\Vnetby\Schemaorg\DataTypes\DataText
     */
    public $urlTemplate;

    /**
     * The supported encoding type(s) for an EntryPoint request.
     * @var string|\Vnetby\Schemaorg\DataTypes\DataText
     */
    public $encodingType;

    /**
     * An HTTP method that specifies the appropriate HTTP method for a request to an HTTP EntryPoint. Values are capitalized strings as
     * used in HTTP.
     * @var string|\Vnetby\Schemaorg\DataTypes\DataText
     */
    public $httpMethod;

    /**
     * The supported content type(s) for an EntryPoint response.
     * @var string|\Vnetby\Schemaorg\DataTypes\DataText
     */
    public $contentType;

    /**
     * The high level platform(s) where the Action can be performed for the given URL. To specify a specific application or operating
     * system instance, use actionApplication.
     * @var string|\Vnetby\Schemaorg\DataTypes\DataText|\Vnetby\Schemaorg\DataTypes\DataURL|\Vnetby\Schemaorg\Types\Thing\Intangible\Enumeration\DigitalPlatformEnumeration\DigitalPlatformEnumeration
     */
    public $actionPlatform;

    /**
     * An application that can complete the request.
     * @var \Vnetby\Schemaorg\Types\Thing\CreativeWork\SoftwareApplication\SoftwareApplication
     */
    public $actionApplication;

    /**
     * An url template (RFC6570) that will be used to construct the target of the execution of the action.
     * @param string|\Vnetby\Schemaorg\DataTypes\DataText $value
     * @return static
     */
    function setUrlTemplate($value)
    {
        return $this->setProp('urlTemplate', $value);
    }

    /**
     * The supported encoding type(s) for an EntryPoint request.
     * @param string|\Vnetby\Schemaorg\DataTypes\DataText $value
     * @return static
     */
    function setEncodingType($value)
    {
        return $this->setProp('encodingType', $value);
    }

    /**
     * An HTTP method that specifies the appropriate HTTP method for a request to an HTTP EntryPoint. Values are capitalized strings as
     * used in HTTP.
     * @param string|\Vnetby\Schemaorg\DataTypes\DataText $value
     * @return static
     */
    function setHttpMethod($value)
    {
        return $this->setProp('httpMethod', $value);
    }

    /**
     * The supported content type(s) for an EntryPoint response.
     * @param string|\Vnetby\Schemaorg\DataTypes\DataText $value
     * @return static
     */
    function setContentType($value)
    {
        return $this->setProp('contentType', $value);
    }

    /**
     * The high level platform(s) where the Action can be performed for the given URL. To specify a specific application or operating
     * system instance, use actionApplication.
     * @param string|\Vnetby\Schemaorg\DataTypes\DataText|\Vnetby\Schemaorg\DataTypes\DataURL|\Vnetby\Schemaorg\Types\Thing\Intangible\Enumeration\DigitalPlatformEnumeration\DigitalPlatformEnumeration $value
     * @return static
     */
    function setActionPlatform($value)
    {
        return $this->setProp('actionPlatform', $value);
    }

    /**
     * An application that can complete the request.
     * @param \Vnetby\Schemaorg\Types\Thing\CreativeWork\SoftwareApplication\SoftwareApplication $value
     * @return static
     */
    function setActionApplication($value)
    {
        return $this->setProp('actionApplication', $value);
    }

    /**
     * An url template (RFC6570) that will be used to construct the target of the execution of the action.
     * @return string|\Vnetby\Schemaorg\DataTypes\DataText|null
     */
    function getUrlTemplate()
    {
        return $this->getProp('urlTemplate');
    }

    /**
     * The supported encoding type(s) for an EntryPoint request.
     * @return string|\Vnetby\Schemaorg\DataTypes\DataText|null
     */
    function getEncodingType()
    {
        return $this->getProp('encodingType');
    }

    /**
     * An HTTP method that specifies the appropriate HTTP method for a request to an HTTP EntryPoint. Values are capitalized strings as
     * used in HTTP.
     * @return string|\Vnetby\Schemaorg\DataTypes\DataText|null
     */
    function getHttpMethod()
    {
        return $this->getProp('httpMethod');
    }

    /**
     * The supported content type(s) for an EntryPoint response.
     * @return string|\Vnetby\Schemaorg\DataTypes\DataText|null
     */
    function getContentType()
    {
        return $this->getProp('contentType');
    }

    /**
     * The high level platform(s) where the Action can be performed for the given URL. To specify a specific application or operating
     * system instance, use actionApplication.
     * @return string|\Vnetby\Schemaorg\DataTypes\DataText|\Vnetby\Schemaorg\DataTypes\DataURL|\Vnetby\Schemaorg\Types\Thing\Intangible\Enumeration\DigitalPlatformEnumeration\DigitalPlatformEnumeration|null
     */
    function getActionPlatform()
    {
        return $this->getProp('actionPlatform');
    }

    /**
     * An application that can complete the request.
     * @return \Vnetby\Schemaorg\Types\Thing\CreativeWork\SoftwareApplication\SoftwareApplication|null
     */
    function getActionApplication()
    {
        return $this->getProp('actionApplication');
    }
}
