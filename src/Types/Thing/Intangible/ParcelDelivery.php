<?php

/**
 * @see https://schema.org/ParcelDelivery
 * The delivery of a parcel either via the postal service or a commercial service.
 */

namespace Vnetby\Schemaorg\Types\Thing\Intangible;

class ParcelDelivery extends \Vnetby\Schemaorg\Types\Thing\Intangible\Intangible
{
    const TYPE = 'ParcelDelivery';

    /**
     * The service provider, service operator, or service performer; the goods producer. Another party (a seller) may offer those services or goods
     * on behalf of the provider. A provider may also serve as the seller.
     * @var \Vnetby\Schemaorg\Types\Thing\Organization\Organization|\Vnetby\Schemaorg\Types\Thing\Person\Person
     */
    public $provider;

    /**
     * Shipper tracking number.
     * @var string|\Vnetby\Schemaorg\DataTypes\DataText
     */
    public $trackingNumber;

    /**
     * New entry added as the package passes through each leg of its journey (from shipment to final delivery).
     * @var \Vnetby\Schemaorg\Types\Thing\Event\DeliveryEvent
     */
    public $deliveryStatus;

    /**
     * Destination address.
     * @var \Vnetby\Schemaorg\Types\Thing\Intangible\StructuredValue\ContactPoint\PostalAddress
     */
    public $deliveryAddress;

    /**
     * Item(s) being shipped.
     * @var \Vnetby\Schemaorg\Types\Thing\Product\Product
     */
    public $itemShipped;

    /**
     * Shipper's address.
     * @var \Vnetby\Schemaorg\Types\Thing\Intangible\StructuredValue\ContactPoint\PostalAddress
     */
    public $originAddress;

    /**
     * The earliest date the package may arrive.
     * @var string|\Vnetby\Schemaorg\DataTypes\DataDateTime|\Vnetby\Schemaorg\DataTypes\DataDate
     */
    public $expectedArrivalFrom;

    /**
     * Method used for delivery or shipping.
     * @var \Vnetby\Schemaorg\Types\Thing\Intangible\Enumeration\DeliveryMethod\DeliveryMethod
     */
    public $hasDeliveryMethod;

    /**
     * Tracking url for the parcel delivery.
     * @var string|\Vnetby\Schemaorg\DataTypes\DataURL
     */
    public $trackingUrl;

    /**
     * The latest date the package may arrive.
     * @var string|\Vnetby\Schemaorg\DataTypes\DataDateTime|\Vnetby\Schemaorg\DataTypes\DataDate
     */
    public $expectedArrivalUntil;

    /**
     * The overall order the items in this delivery were included in.
     * @var \Vnetby\Schemaorg\Types\Thing\Intangible\Order
     */
    public $partOfOrder;

    /**
     * The service provider, service operator, or service performer; the goods producer. Another party (a seller) may offer those services or goods
     * on behalf of the provider. A provider may also serve as the seller.
     * @param \Vnetby\Schemaorg\Types\Thing\Organization\Organization|\Vnetby\Schemaorg\Types\Thing\Person\Person $value
     * @return static
     */
    function setProvider($value)
    {
        return $this->setProp('provider', $value);
    }

    /**
     * Shipper tracking number.
     * @param string|\Vnetby\Schemaorg\DataTypes\DataText $value
     * @return static
     */
    function setTrackingNumber($value)
    {
        return $this->setProp('trackingNumber', $value);
    }

    /**
     * New entry added as the package passes through each leg of its journey (from shipment to final delivery).
     * @param \Vnetby\Schemaorg\Types\Thing\Event\DeliveryEvent $value
     * @return static
     */
    function setDeliveryStatus($value)
    {
        return $this->setProp('deliveryStatus', $value);
    }

    /**
     * Destination address.
     * @param \Vnetby\Schemaorg\Types\Thing\Intangible\StructuredValue\ContactPoint\PostalAddress $value
     * @return static
     */
    function setDeliveryAddress($value)
    {
        return $this->setProp('deliveryAddress', $value);
    }

    /**
     * Item(s) being shipped.
     * @param \Vnetby\Schemaorg\Types\Thing\Product\Product $value
     * @return static
     */
    function setItemShipped($value)
    {
        return $this->setProp('itemShipped', $value);
    }

    /**
     * Shipper's address.
     * @param \Vnetby\Schemaorg\Types\Thing\Intangible\StructuredValue\ContactPoint\PostalAddress $value
     * @return static
     */
    function setOriginAddress($value)
    {
        return $this->setProp('originAddress', $value);
    }

    /**
     * The earliest date the package may arrive.
     * @param string|\Vnetby\Schemaorg\DataTypes\DataDateTime|\Vnetby\Schemaorg\DataTypes\DataDate $value
     * @return static
     */
    function setExpectedArrivalFrom($value)
    {
        return $this->setProp('expectedArrivalFrom', $value);
    }

    /**
     * Method used for delivery or shipping.
     * @param \Vnetby\Schemaorg\Types\Thing\Intangible\Enumeration\DeliveryMethod\DeliveryMethod $value
     * @return static
     */
    function setHasDeliveryMethod($value)
    {
        return $this->setProp('hasDeliveryMethod', $value);
    }

    /**
     * Tracking url for the parcel delivery.
     * @param string|\Vnetby\Schemaorg\DataTypes\DataURL $value
     * @return static
     */
    function setTrackingUrl($value)
    {
        return $this->setProp('trackingUrl', $value);
    }

    /**
     * The latest date the package may arrive.
     * @param string|\Vnetby\Schemaorg\DataTypes\DataDateTime|\Vnetby\Schemaorg\DataTypes\DataDate $value
     * @return static
     */
    function setExpectedArrivalUntil($value)
    {
        return $this->setProp('expectedArrivalUntil', $value);
    }

    /**
     * The overall order the items in this delivery were included in.
     * @param \Vnetby\Schemaorg\Types\Thing\Intangible\Order $value
     * @return static
     */
    function setPartOfOrder($value)
    {
        return $this->setProp('partOfOrder', $value);
    }

    /**
     * The service provider, service operator, or service performer; the goods producer. Another party (a seller) may offer those services or goods
     * on behalf of the provider. A provider may also serve as the seller.
     * @return \Vnetby\Schemaorg\Types\Thing\Organization\Organization|\Vnetby\Schemaorg\Types\Thing\Person\Person|null
     */
    function getProvider()
    {
        return $this->getProp('provider');
    }

    /**
     * Shipper tracking number.
     * @return string|\Vnetby\Schemaorg\DataTypes\DataText|null
     */
    function getTrackingNumber()
    {
        return $this->getProp('trackingNumber');
    }

    /**
     * New entry added as the package passes through each leg of its journey (from shipment to final delivery).
     * @return \Vnetby\Schemaorg\Types\Thing\Event\DeliveryEvent|null
     */
    function getDeliveryStatus()
    {
        return $this->getProp('deliveryStatus');
    }

    /**
     * Destination address.
     * @return \Vnetby\Schemaorg\Types\Thing\Intangible\StructuredValue\ContactPoint\PostalAddress|null
     */
    function getDeliveryAddress()
    {
        return $this->getProp('deliveryAddress');
    }

    /**
     * Item(s) being shipped.
     * @return \Vnetby\Schemaorg\Types\Thing\Product\Product|null
     */
    function getItemShipped()
    {
        return $this->getProp('itemShipped');
    }

    /**
     * Shipper's address.
     * @return \Vnetby\Schemaorg\Types\Thing\Intangible\StructuredValue\ContactPoint\PostalAddress|null
     */
    function getOriginAddress()
    {
        return $this->getProp('originAddress');
    }

    /**
     * The earliest date the package may arrive.
     * @return string|\Vnetby\Schemaorg\DataTypes\DataDateTime|\Vnetby\Schemaorg\DataTypes\DataDate|null
     */
    function getExpectedArrivalFrom()
    {
        return $this->getProp('expectedArrivalFrom');
    }

    /**
     * Method used for delivery or shipping.
     * @return \Vnetby\Schemaorg\Types\Thing\Intangible\Enumeration\DeliveryMethod\DeliveryMethod|null
     */
    function getHasDeliveryMethod()
    {
        return $this->getProp('hasDeliveryMethod');
    }

    /**
     * Tracking url for the parcel delivery.
     * @return string|\Vnetby\Schemaorg\DataTypes\DataURL|null
     */
    function getTrackingUrl()
    {
        return $this->getProp('trackingUrl');
    }

    /**
     * The latest date the package may arrive.
     * @return string|\Vnetby\Schemaorg\DataTypes\DataDateTime|\Vnetby\Schemaorg\DataTypes\DataDate|null
     */
    function getExpectedArrivalUntil()
    {
        return $this->getProp('expectedArrivalUntil');
    }

    /**
     * The overall order the items in this delivery were included in.
     * @return \Vnetby\Schemaorg\Types\Thing\Intangible\Order|null
     */
    function getPartOfOrder()
    {
        return $this->getProp('partOfOrder');
    }
}
