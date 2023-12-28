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
     * The address for accessing the service by mail.
    * @var \Vnetby\Schemaorg\Types\Thing\Intangible\StructuredValue\ContactPoint\PostalAddress
    */
   protected $prop_servicePostalAddress;

   /**
     * A language someone may use with or at the item, service or place. Please use one of the language codes from
     * the [IETF BCP 47 standard](http://tools.ietf.org/html/bcp47). See also [[inLanguage]].
    * @var \Vnetby\Schemaorg\DataTypes\DataText|\Vnetby\Schemaorg\Types\Thing\Intangible\Language
    */
   protected $prop_availableLanguage;

   /**
     * The service provided by this channel.
    * @var \Vnetby\Schemaorg\Types\Thing\Intangible\Service\Service
    */
   protected $prop_providesService;

   /**
     * The phone number to use to access the service.
    * @var \Vnetby\Schemaorg\Types\Thing\Intangible\StructuredValue\ContactPoint\ContactPoint
    */
   protected $prop_servicePhone;

   /**
     * Estimated processing time for the service using this channel.
    * @var \Vnetby\Schemaorg\Types\Thing\Intangible\Quantity\Duration
    */
   protected $prop_processingTime;

   /**
     * The number to access the service by text message.
    * @var \Vnetby\Schemaorg\Types\Thing\Intangible\StructuredValue\ContactPoint\ContactPoint
    */
   protected $prop_serviceSmsNumber;

   /**
     * The website to access the service.
    * @var \Vnetby\Schemaorg\DataTypes\DataURL
    */
   protected $prop_serviceUrl;

   /**
     * The location (e.g. civic structure, local business, etc.) where a person can go to access the service.
    * @var \Vnetby\Schemaorg\Types\Thing\Place\Place
    */
   protected $prop_serviceLocation;

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
     * A language someone may use with or at the item, service or place. Please use one of the language codes from
     * the [IETF BCP 47 standard](http://tools.ietf.org/html/bcp47). See also [[inLanguage]].
    * @param \Vnetby\Schemaorg\DataTypes\DataText|\Vnetby\Schemaorg\Types\Thing\Intangible\Language $value
    * @return static
    */
   function setAvailableLanguage($value)
   {
       return $this->setProp('availableLanguage', $value);
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
     * The phone number to use to access the service.
    * @param \Vnetby\Schemaorg\Types\Thing\Intangible\StructuredValue\ContactPoint\ContactPoint $value
    * @return static
    */
   function setServicePhone($value)
   {
       return $this->setProp('servicePhone', $value);
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
     * The number to access the service by text message.
    * @param \Vnetby\Schemaorg\Types\Thing\Intangible\StructuredValue\ContactPoint\ContactPoint $value
    * @return static
    */
   function setServiceSmsNumber($value)
   {
       return $this->setProp('serviceSmsNumber', $value);
   }

   /**
     * The website to access the service.
    * @param \Vnetby\Schemaorg\DataTypes\DataURL $value
    * @return static
    */
   function setServiceUrl($value)
   {
       return $this->setProp('serviceUrl', $value);
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
     * The address for accessing the service by mail.
    * @return \Vnetby\Schemaorg\Types\Thing\Intangible\StructuredValue\ContactPoint\PostalAddress|null
    */
   function getServicePostalAddress()
   {
       return $this->getProp('servicePostalAddress');
   }

   /**
     * A language someone may use with or at the item, service or place. Please use one of the language codes from
     * the [IETF BCP 47 standard](http://tools.ietf.org/html/bcp47). See also [[inLanguage]].
    * @return \Vnetby\Schemaorg\DataTypes\DataText|\Vnetby\Schemaorg\Types\Thing\Intangible\Language|null
    */
   function getAvailableLanguage()
   {
       return $this->getProp('availableLanguage');
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
     * The phone number to use to access the service.
    * @return \Vnetby\Schemaorg\Types\Thing\Intangible\StructuredValue\ContactPoint\ContactPoint|null
    */
   function getServicePhone()
   {
       return $this->getProp('servicePhone');
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
     * The number to access the service by text message.
    * @return \Vnetby\Schemaorg\Types\Thing\Intangible\StructuredValue\ContactPoint\ContactPoint|null
    */
   function getServiceSmsNumber()
   {
       return $this->getProp('serviceSmsNumber');
   }

   /**
     * The website to access the service.
    * @return \Vnetby\Schemaorg\DataTypes\DataURL|null
    */
   function getServiceUrl()
   {
       return $this->getProp('serviceUrl');
   }

   /**
     * The location (e.g. civic structure, local business, etc.) where a person can go to access the service.
    * @return \Vnetby\Schemaorg\Types\Thing\Place\Place|null
    */
   function getServiceLocation()
   {
       return $this->getProp('serviceLocation');
   }
}
