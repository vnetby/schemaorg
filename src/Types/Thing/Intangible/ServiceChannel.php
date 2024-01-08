<?php

/**
 * @see https://schema.org/ServiceChannel
 * A means for accessing a service, e.g. a government office location, web site, or phone number.
 */

namespace Vnetby\Schemaorg\Types\Thing\Intangible;

class ServiceChannel extends \Vnetby\Schemaorg\Types\Thing\Intangible\Intangible
{
    const TYPE = 'ServiceChannel';

    /**
     * A language someone may use with or at the item, service or place. Please use one of the language codes from
     * the [IETF BCP 47 standard](http://tools.ietf.org/html/bcp47). See also [[inLanguage]].
     * @var string|\Vnetby\Schemaorg\DataTypes\DataText|\Vnetby\Schemaorg\Types\Thing\Intangible\Language
     */
    public $availableLanguage;

    /**
     * Estimated processing time for the service using this channel.
     * @var \Vnetby\Schemaorg\Types\Thing\Intangible\Quantity\Duration
     */
    public $processingTime;

    /**
     * The website to access the service.
     * @var string|\Vnetby\Schemaorg\DataTypes\DataURL
     */
    public $serviceUrl;

    /**
     * The service provided by this channel.
     * @var \Vnetby\Schemaorg\Types\Thing\Intangible\Service\Service
     */
    public $providesService;

    /**
     * The address for accessing the service by mail.
     * @var \Vnetby\Schemaorg\Types\Thing\Intangible\StructuredValue\ContactPoint\PostalAddress
     */
    public $servicePostalAddress;

    /**
     * The location (e.g. civic structure, local business, etc.) where a person can go to access the service.
     * @var \Vnetby\Schemaorg\Types\Thing\Place\Place
     */
    public $serviceLocation;

    /**
     * The phone number to use to access the service.
     * @var \Vnetby\Schemaorg\Types\Thing\Intangible\StructuredValue\ContactPoint\ContactPoint
     */
    public $servicePhone;

    /**
     * The number to access the service by text message.
     * @var \Vnetby\Schemaorg\Types\Thing\Intangible\StructuredValue\ContactPoint\ContactPoint
     */
    public $serviceSmsNumber;

    /**
     * A language someone may use with or at the item, service or place. Please use one of the language codes from
     * the [IETF BCP 47 standard](http://tools.ietf.org/html/bcp47). See also [[inLanguage]].
     * @param string|\Vnetby\Schemaorg\DataTypes\DataText|\Vnetby\Schemaorg\Types\Thing\Intangible\Language $value
     * @return static
     */
    function setAvailableLanguage($value)
    {
        return $this->setProp('availableLanguage', $value);
    }

    /**
     * Estimated processing time for the service using this channel.
     * @param \Vnetby\Schemaorg\Types\Thing\Intangible\Quantity\Duration $value
     * @return static
     */
    function setProcessingTime($value)
    {
        return $this->setProp('processingTime', $value);
    }

    /**
     * The website to access the service.
     * @param string|\Vnetby\Schemaorg\DataTypes\DataURL $value
     * @return static
     */
    function setServiceUrl($value)
    {
        return $this->setProp('serviceUrl', $value);
    }

    /**
     * The service provided by this channel.
     * @param \Vnetby\Schemaorg\Types\Thing\Intangible\Service\Service $value
     * @return static
     */
    function setProvidesService($value)
    {
        return $this->setProp('providesService', $value);
    }

    /**
     * The address for accessing the service by mail.
     * @param \Vnetby\Schemaorg\Types\Thing\Intangible\StructuredValue\ContactPoint\PostalAddress $value
     * @return static
     */
    function setServicePostalAddress($value)
    {
        return $this->setProp('servicePostalAddress', $value);
    }

    /**
     * The location (e.g. civic structure, local business, etc.) where a person can go to access the service.
     * @param \Vnetby\Schemaorg\Types\Thing\Place\Place $value
     * @return static
     */
    function setServiceLocation($value)
    {
        return $this->setProp('serviceLocation', $value);
    }

    /**
     * The phone number to use to access the service.
     * @param \Vnetby\Schemaorg\Types\Thing\Intangible\StructuredValue\ContactPoint\ContactPoint $value
     * @return static
     */
    function setServicePhone($value)
    {
        return $this->setProp('servicePhone', $value);
    }

    /**
     * The number to access the service by text message.
     * @param \Vnetby\Schemaorg\Types\Thing\Intangible\StructuredValue\ContactPoint\ContactPoint $value
     * @return static
     */
    function setServiceSmsNumber($value)
    {
        return $this->setProp('serviceSmsNumber', $value);
    }

    /**
     * A language someone may use with or at the item, service or place. Please use one of the language codes from
     * the [IETF BCP 47 standard](http://tools.ietf.org/html/bcp47). See also [[inLanguage]].
     * @return string|\Vnetby\Schemaorg\DataTypes\DataText|\Vnetby\Schemaorg\Types\Thing\Intangible\Language|null
     */
    function getAvailableLanguage()
    {
        return $this->getProp('availableLanguage');
    }

    /**
     * Estimated processing time for the service using this channel.
     * @return \Vnetby\Schemaorg\Types\Thing\Intangible\Quantity\Duration|null
     */
    function getProcessingTime()
    {
        return $this->getProp('processingTime');
    }

    /**
     * The website to access the service.
     * @return string|\Vnetby\Schemaorg\DataTypes\DataURL|null
     */
    function getServiceUrl()
    {
        return $this->getProp('serviceUrl');
    }

    /**
     * The service provided by this channel.
     * @return \Vnetby\Schemaorg\Types\Thing\Intangible\Service\Service|null
     */
    function getProvidesService()
    {
        return $this->getProp('providesService');
    }

    /**
     * The address for accessing the service by mail.
     * @return \Vnetby\Schemaorg\Types\Thing\Intangible\StructuredValue\ContactPoint\PostalAddress|null
     */
    function getServicePostalAddress()
    {
        return $this->getProp('servicePostalAddress');
    }

    /**
     * The location (e.g. civic structure, local business, etc.) where a person can go to access the service.
     * @return \Vnetby\Schemaorg\Types\Thing\Place\Place|null
     */
    function getServiceLocation()
    {
        return $this->getProp('serviceLocation');
    }

    /**
     * The phone number to use to access the service.
     * @return \Vnetby\Schemaorg\Types\Thing\Intangible\StructuredValue\ContactPoint\ContactPoint|null
     */
    function getServicePhone()
    {
        return $this->getProp('servicePhone');
    }

    /**
     * The number to access the service by text message.
     * @return \Vnetby\Schemaorg\Types\Thing\Intangible\StructuredValue\ContactPoint\ContactPoint|null
     */
    function getServiceSmsNumber()
    {
        return $this->getProp('serviceSmsNumber');
    }
}
