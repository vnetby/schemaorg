<?php

/**
 * @see https://schema.org/OrderItem
 * An order item is a line of an order. It includes the quantity and shipping details of a bought offer.
 */

namespace Vnetby\Schemaorg\Types\Thing\Intangible;

class OrderItem extends \Vnetby\Schemaorg\Types\Thing\Intangible\Intangible
{
    const TYPE = 'OrderItem';

    /**
     * The delivery of the parcel related to this order or order item.
     * @var \Vnetby\Schemaorg\Types\Thing\Intangible\ParcelDelivery
     */
    public $orderDelivery;

    /**
     * The number of the item ordered. If the property is not set, assume the quantity is one.
     * @var string|int|float|\Vnetby\Schemaorg\DataTypes\DataNumber
     */
    public $orderQuantity;

    /**
     * The identifier of the order item.
     * @var string|\Vnetby\Schemaorg\DataTypes\DataText
     */
    public $orderItemNumber;

    /**
     * The item ordered.
     * @var \Vnetby\Schemaorg\Types\Thing\Intangible\OrderItem|\Vnetby\Schemaorg\Types\Thing\Intangible\Service\Service|\Vnetby\Schemaorg\Types\Thing\Product\Product
     */
    public $orderedItem;

    /**
     * The current status of the order item.
     * @var \Vnetby\Schemaorg\Types\Thing\Intangible\Enumeration\StatusEnumeration\OrderStatus\OrderStatus
     */
    public $orderItemStatus;

    /**
     * The delivery of the parcel related to this order or order item.
     * @param \Vnetby\Schemaorg\Types\Thing\Intangible\ParcelDelivery $value
     * @return static
     */
    function setOrderDelivery($value)
    {
        return $this->setProp('orderDelivery', $value);
    }

    /**
     * The number of the item ordered. If the property is not set, assume the quantity is one.
     * @param string|int|float|\Vnetby\Schemaorg\DataTypes\DataNumber $value
     * @return static
     */
    function setOrderQuantity($value)
    {
        return $this->setProp('orderQuantity', $value);
    }

    /**
     * The identifier of the order item.
     * @param string|\Vnetby\Schemaorg\DataTypes\DataText $value
     * @return static
     */
    function setOrderItemNumber($value)
    {
        return $this->setProp('orderItemNumber', $value);
    }

    /**
     * The item ordered.
     * @param \Vnetby\Schemaorg\Types\Thing\Intangible\OrderItem|\Vnetby\Schemaorg\Types\Thing\Intangible\Service\Service|\Vnetby\Schemaorg\Types\Thing\Product\Product $value
     * @return static
     */
    function setOrderedItem($value)
    {
        return $this->setProp('orderedItem', $value);
    }

    /**
     * The current status of the order item.
     * @param \Vnetby\Schemaorg\Types\Thing\Intangible\Enumeration\StatusEnumeration\OrderStatus\OrderStatus $value
     * @return static
     */
    function setOrderItemStatus($value)
    {
        return $this->setProp('orderItemStatus', $value);
    }

    /**
     * The delivery of the parcel related to this order or order item.
     * @return \Vnetby\Schemaorg\Types\Thing\Intangible\ParcelDelivery|null
     */
    function getOrderDelivery()
    {
        return $this->getProp('orderDelivery');
    }

    /**
     * The number of the item ordered. If the property is not set, assume the quantity is one.
     * @return string|int|float|\Vnetby\Schemaorg\DataTypes\DataNumber|null
     */
    function getOrderQuantity()
    {
        return $this->getProp('orderQuantity');
    }

    /**
     * The identifier of the order item.
     * @return string|\Vnetby\Schemaorg\DataTypes\DataText|null
     */
    function getOrderItemNumber()
    {
        return $this->getProp('orderItemNumber');
    }

    /**
     * The item ordered.
     * @return \Vnetby\Schemaorg\Types\Thing\Intangible\OrderItem|\Vnetby\Schemaorg\Types\Thing\Intangible\Service\Service|\Vnetby\Schemaorg\Types\Thing\Product\Product|null
     */
    function getOrderedItem()
    {
        return $this->getProp('orderedItem');
    }

    /**
     * The current status of the order item.
     * @return \Vnetby\Schemaorg\Types\Thing\Intangible\Enumeration\StatusEnumeration\OrderStatus\OrderStatus|null
     */
    function getOrderItemStatus()
    {
        return $this->getProp('orderItemStatus');
    }
}
