<?php

/**
 * @see https://schema.org/DeliveryEvent
 * An event involving the delivery of an item.
 */

namespace Vnetby\Schemaorg\Types\Thing\Event;

class DeliveryEvent extends \Vnetby\Schemaorg\Types\Thing\Event\Event
{
    const TYPE = 'DeliveryEvent';

    /**
     * After this date, the item will no longer be available for pickup.
     * @var string|\Vnetby\Schemaorg\DataTypes\DataDateTime
     */
    public $availableThrough;

    /**
     * Method used for delivery or shipping.
     * @var \Vnetby\Schemaorg\Types\Thing\Intangible\Enumeration\DeliveryMethod\DeliveryMethod
     */
    public $hasDeliveryMethod;

    /**
     * Password, PIN, or access code needed for delivery (e.g. from a locker).
     * @var string|\Vnetby\Schemaorg\DataTypes\DataText
     */
    public $accessCode;

    /**
     * When the item is available for pickup from the store, locker, etc.
     * @var string|\Vnetby\Schemaorg\DataTypes\DataDateTime
     */
    public $availableFrom;

    /**
     * After this date, the item will no longer be available for pickup.
     * @param string|\Vnetby\Schemaorg\DataTypes\DataDateTime $value
     * @return static
     */
    function setAvailableThrough($value)
    {
        return $this->setProp('availableThrough', $value);
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
     * Password, PIN, or access code needed for delivery (e.g. from a locker).
     * @param string|\Vnetby\Schemaorg\DataTypes\DataText $value
     * @return static
     */
    function setAccessCode($value)
    {
        return $this->setProp('accessCode', $value);
    }

    /**
     * When the item is available for pickup from the store, locker, etc.
     * @param string|\Vnetby\Schemaorg\DataTypes\DataDateTime $value
     * @return static
     */
    function setAvailableFrom($value)
    {
        return $this->setProp('availableFrom', $value);
    }

    /**
     * After this date, the item will no longer be available for pickup.
     * @return string|\Vnetby\Schemaorg\DataTypes\DataDateTime|null
     */
    function getAvailableThrough()
    {
        return $this->getProp('availableThrough');
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
     * Password, PIN, or access code needed for delivery (e.g. from a locker).
     * @return string|\Vnetby\Schemaorg\DataTypes\DataText|null
     */
    function getAccessCode()
    {
        return $this->getProp('accessCode');
    }

    /**
     * When the item is available for pickup from the store, locker, etc.
     * @return string|\Vnetby\Schemaorg\DataTypes\DataDateTime|null
     */
    function getAvailableFrom()
    {
        return $this->getProp('availableFrom');
    }
}
