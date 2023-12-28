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
     * Tracking url for the parcel delivery.
     * @var \Vnetby\Schemaorg\DataTypes\DataURL
     */
    protected $prop_trackingUrl;

    /**
     * New entry added as the package passes through each leg of its journey (from shipment to final delivery).
     * @var \Vnetby\Schemaorg\Types\Thing\Event\DeliveryEvent
     */
    protected $prop_deliveryStatus;

    /**
     * Shipper tracking number.
     * @var \Vnetby\Schemaorg\DataTypes\DataText
     */
    protected $prop_trackingNumber;

    /**
     * Method used for delivery or shipping.
     * @var \Vnetby\Schemaorg\Types\Thing\Intangible\Enumeration\DeliveryMethod\DeliveryMethod
     */
    protected $prop_hasDeliveryMethod;

    /**
     * The service provider, service operator, or service performer; the goods producer. Another party (a seller) may offer those services or goods
     * on behalf of the provider. A provider may also serve as the seller.
     * @var \Vnetby\Schemaorg\Types\Thing\Organization\Organization|\Vnetby\Schemaorg\Types\Thing\Person\Person
     */
    protected $prop_provider;

    /**
     * Shipper's address.
     * @var \Vnetby\Schemaorg\Types\Thing\Intangible\StructuredValue\ContactPoint\PostalAddress
     */
    protected $prop_originAddress;

    /**
     * Item(s) being shipped.
     * @var \Vnetby\Schemaorg\Types\Thing\Product\Product
     */
    protected $prop_itemShipped;

    /**
     * Destination address.
     * @var \Vnetby\Schemaorg\Types\Thing\Intangible\StructuredValue\ContactPoint\PostalAddress
     */
    protected $prop_deliveryAddress;

    /**
     * The latest date the package may arrive.
     * @var \Vnetby\Schemaorg\DataTypes\DataDateTime|\Vnetby\Schemaorg\DataTypes\DataDate
     */
    protected $prop_expectedArrivalUntil;

    /**
     * The earliest date the package may arrive.
     * @var \Vnetby\Schemaorg\DataTypes\DataDate|\Vnetby\Schemaorg\DataTypes\DataDateTime
     */
    protected $prop_expectedArrivalFrom;

    /**
     * The overall order the items in this delivery were included in.
     * @var \Vnetby\Schemaorg\Types\Thing\Intangible\Order
     */
    protected $prop_partOfOrder;

    /**
     * Tracking url for the parcel delivery.
     * @param \Vnetby\Schemaorg\DataTypes\DataURL $value
     * @return static
     */
    function setTrackingUrl($value)
    {
        return $this->setProp('trackingUrl', $value);
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
     * Shipper tracking number.
     * @param \Vnetby\Schemaorg\DataTypes\DataText $value
     * @return static
     */
    function setTrackingNumber($value)
    {
        return $this->setProp('trackingNumber', $value);
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
     * Shipper's address.
     * @param \Vnetby\Schemaorg\Types\Thing\Intangible\StructuredValue\ContactPoint\PostalAddress $value
     * @return static
     */
    function setOriginAddress($value)
    {
        return $this->setProp('originAddress', $value);
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
     * Destination address.
     * @param \Vnetby\Schemaorg\Types\Thing\Intangible\StructuredValue\ContactPoint\PostalAddress $value
     * @return static
     */
    function setDeliveryAddress($value)
    {
        return $this->setProp('deliveryAddress', $value);
    }

    /**
     * The latest date the package may arrive.
     * @param \Vnetby\Schemaorg\DataTypes\DataDateTime|\Vnetby\Schemaorg\DataTypes\DataDate $value
     * @return static
     */
    function setExpectedArrivalUntil($value)
    {
        return $this->setProp('expectedArrivalUntil', $value);
    }

    /**
     * The earliest date the package may arrive.
     * @param \Vnetby\Schemaorg\DataTypes\DataDate|\Vnetby\Schemaorg\DataTypes\DataDateTime $value
     * @return static
     */
    function setExpectedArrivalFrom($value)
    {
        return $this->setProp('expectedArrivalFrom', $value);
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
     * Tracking url for the parcel delivery.
     * @return \Vnetby\Schemaorg\DataTypes\DataURL|null
     */
    function getTrackingUrl()
    {
        return $this->getProp('trackingUrl');
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
     * Shipper tracking number.
     * @return \Vnetby\Schemaorg\DataTypes\DataText|null
     */
    function getTrackingNumber()
    {
        return $this->getProp('trackingNumber');
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
     * The service provider, service operator, or service performer; the goods producer. Another party (a seller) may offer those services or goods
     * on behalf of the provider. A provider may also serve as the seller.
     * @return \Vnetby\Schemaorg\Types\Thing\Organization\Organization|\Vnetby\Schemaorg\Types\Thing\Person\Person|null
     */
    function getProvider()
    {
        return $this->getProp('provider');
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
     * Item(s) being shipped.
     * @return \Vnetby\Schemaorg\Types\Thing\Product\Product|null
     */
    function getItemShipped()
    {
        return $this->getProp('itemShipped');
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
     * The latest date the package may arrive.
     * @return \Vnetby\Schemaorg\DataTypes\DataDateTime|\Vnetby\Schemaorg\DataTypes\DataDate|null
     */
    function getExpectedArrivalUntil()
    {
        return $this->getProp('expectedArrivalUntil');
    }

    /**
     * The earliest date the package may arrive.
     * @return \Vnetby\Schemaorg\DataTypes\DataDate|\Vnetby\Schemaorg\DataTypes\DataDateTime|null
     */
    function getExpectedArrivalFrom()
    {
        return $this->getProp('expectedArrivalFrom');
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
