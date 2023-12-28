<?php

/**
 * @see https://schema.org/Order
 * An order is a confirmation of a transaction (a receipt), which can contain multiple line items, each represented by an Offer
 * that has been accepted by the customer.
 */

namespace Vnetby\Schemaorg\Types\Thing\Intangible;

class Order extends \Vnetby\Schemaorg\Types\Thing\Intangible\Intangible
{
    const TYPE = 'Order';

    /**
     * The currency of the discount.\n\nUse standard formats: [ISO 4217 currency format](http://en.wikipedia.org/wiki/ISO_4217), e.g. "USD"; [Ticker symbol](https://en.wikipedia.org/wiki/List_of_cryptocurrencies) for cryptocurrencies, e.g. "BTC"; well known
     * names for [Local Exchange Trading Systems](https://en.wikipedia.org/wiki/Local_exchange_trading_system) (LETS) and other currency types, e.g. "Ithaca HOUR".
     * @var \Vnetby\Schemaorg\DataTypes\DataText
     */
    protected $prop_discountCurrency;

    /**
     * The delivery of the parcel related to this order or order item.
     * @var \Vnetby\Schemaorg\Types\Thing\Intangible\ParcelDelivery
     */
    protected $prop_orderDelivery;

    /**
     * The identifier of the transaction.
     * @var \Vnetby\Schemaorg\DataTypes\DataText
     */
    protected $prop_orderNumber;

    /**
     * A number that confirms the given order or payment has been received.
     * @var \Vnetby\Schemaorg\DataTypes\DataText
     */
    protected $prop_confirmationNumber;

    /**
     * The URL for sending a payment.
     * @var \Vnetby\Schemaorg\DataTypes\DataURL
     */
    protected $prop_paymentUrl;

    /**
     * The date that payment is due.
     * @var \Vnetby\Schemaorg\DataTypes\DataDateTime|\Vnetby\Schemaorg\DataTypes\DataDate
     */
    protected $prop_paymentDueDate;

    /**
     * Date order was placed.
     * @var \Vnetby\Schemaorg\DataTypes\DataDate|\Vnetby\Schemaorg\DataTypes\DataDateTime
     */
    protected $prop_orderDate;

    /**
     * An entity which offers (sells / leases / lends / loans) the services / goods. A seller may also be a
     * provider.
     * @var \Vnetby\Schemaorg\Types\Thing\Person\Person|\Vnetby\Schemaorg\Types\Thing\Organization\Organization
     */
    protected $prop_seller;

    /**
     * The offer(s) -- e.g., product, quantity and price combinations -- included in the order.
     * @var \Vnetby\Schemaorg\Types\Thing\Intangible\Offer\Offer
     */
    protected $prop_acceptedOffer;

    /**
     * Any discount applied (to an Order).
     * @var \Vnetby\Schemaorg\DataTypes\DataNumber|\Vnetby\Schemaorg\DataTypes\DataText
     */
    protected $prop_discount;

    /**
     * An identifier for the method of payment used (e.g. the last 4 digits of the credit card).
     * @var \Vnetby\Schemaorg\DataTypes\DataText
     */
    protected $prop_paymentMethodId;

    /**
     * The item ordered.
     * @var \Vnetby\Schemaorg\Types\Thing\Intangible\OrderItem|\Vnetby\Schemaorg\Types\Thing\Intangible\Service\Service|\Vnetby\Schemaorg\Types\Thing\Product\Product
     */
    protected $prop_orderedItem;

    /**
     * The name of the credit card or other method of payment for the order.
     * @var \Vnetby\Schemaorg\Types\Thing\Intangible\Enumeration\PaymentMethod\PaymentMethod
     */
    protected $prop_paymentMethod;

    /**
     * The billing address for the order.
     * @var \Vnetby\Schemaorg\Types\Thing\Intangible\StructuredValue\ContactPoint\PostalAddress
     */
    protected $prop_billingAddress;

    /**
     * An entity that arranges for an exchange between a buyer and a seller. In most cases a broker never acquires or
     * releases ownership of a product or service involved in an exchange. If it is not clear whether an entity is a
     * broker, seller, or buyer, the latter two terms are preferred.
     * @var \Vnetby\Schemaorg\Types\Thing\Person\Person|\Vnetby\Schemaorg\Types\Thing\Organization\Organization
     */
    protected $prop_broker;

    /**
     * Party placing the order or paying the invoice.
     * @var \Vnetby\Schemaorg\Types\Thing\Person\Person|\Vnetby\Schemaorg\Types\Thing\Organization\Organization
     */
    protected $prop_customer;

    /**
     * Indicates whether the offer was accepted as a gift for someone other than the buyer.
     * @var \Vnetby\Schemaorg\DataTypes\DataBoolean
     */
    protected $prop_isGift;

    /**
     * The current status of the order.
     * @var \Vnetby\Schemaorg\Types\Thing\Intangible\Enumeration\StatusEnumeration\OrderStatus\OrderStatus
     */
    protected $prop_orderStatus;

    /**
     * The order is being paid as part of the referenced Invoice.
     * @var \Vnetby\Schemaorg\Types\Thing\Intangible\Invoice
     */
    protected $prop_partOfInvoice;

    /**
     * Code used to redeem a discount.
     * @var \Vnetby\Schemaorg\DataTypes\DataText
     */
    protected $prop_discountCode;

    /**
     * The currency of the discount.\n\nUse standard formats: [ISO 4217 currency format](http://en.wikipedia.org/wiki/ISO_4217), e.g. "USD"; [Ticker symbol](https://en.wikipedia.org/wiki/List_of_cryptocurrencies) for cryptocurrencies, e.g. "BTC"; well known
     * names for [Local Exchange Trading Systems](https://en.wikipedia.org/wiki/Local_exchange_trading_system) (LETS) and other currency types, e.g. "Ithaca HOUR".
     * @param \Vnetby\Schemaorg\DataTypes\DataText $value
     * @return static
     */
    function setDiscountCurrency($value)
    {
        return $this->setProp('discountCurrency', $value);
    }

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
     * The identifier of the transaction.
     * @param \Vnetby\Schemaorg\DataTypes\DataText $value
     * @return static
     */
    function setOrderNumber($value)
    {
        return $this->setProp('orderNumber', $value);
    }

    /**
     * A number that confirms the given order or payment has been received.
     * @param \Vnetby\Schemaorg\DataTypes\DataText $value
     * @return static
     */
    function setConfirmationNumber($value)
    {
        return $this->setProp('confirmationNumber', $value);
    }

    /**
     * The URL for sending a payment.
     * @param \Vnetby\Schemaorg\DataTypes\DataURL $value
     * @return static
     */
    function setPaymentUrl($value)
    {
        return $this->setProp('paymentUrl', $value);
    }

    /**
     * The date that payment is due.
     * @param \Vnetby\Schemaorg\DataTypes\DataDateTime|\Vnetby\Schemaorg\DataTypes\DataDate $value
     * @return static
     */
    function setPaymentDueDate($value)
    {
        return $this->setProp('paymentDueDate', $value);
    }

    /**
     * Date order was placed.
     * @param \Vnetby\Schemaorg\DataTypes\DataDate|\Vnetby\Schemaorg\DataTypes\DataDateTime $value
     * @return static
     */
    function setOrderDate($value)
    {
        return $this->setProp('orderDate', $value);
    }

    /**
     * An entity which offers (sells / leases / lends / loans) the services / goods. A seller may also be a
     * provider.
     * @param \Vnetby\Schemaorg\Types\Thing\Person\Person|\Vnetby\Schemaorg\Types\Thing\Organization\Organization $value
     * @return static
     */
    function setSeller($value)
    {
        return $this->setProp('seller', $value);
    }

    /**
     * The offer(s) -- e.g., product, quantity and price combinations -- included in the order.
     * @param \Vnetby\Schemaorg\Types\Thing\Intangible\Offer\Offer $value
     * @return static
     */
    function setAcceptedOffer($value)
    {
        return $this->setProp('acceptedOffer', $value);
    }

    /**
     * Any discount applied (to an Order).
     * @param \Vnetby\Schemaorg\DataTypes\DataNumber|\Vnetby\Schemaorg\DataTypes\DataText $value
     * @return static
     */
    function setDiscount($value)
    {
        return $this->setProp('discount', $value);
    }

    /**
     * An identifier for the method of payment used (e.g. the last 4 digits of the credit card).
     * @param \Vnetby\Schemaorg\DataTypes\DataText $value
     * @return static
     */
    function setPaymentMethodId($value)
    {
        return $this->setProp('paymentMethodId', $value);
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
     * The name of the credit card or other method of payment for the order.
     * @param \Vnetby\Schemaorg\Types\Thing\Intangible\Enumeration\PaymentMethod\PaymentMethod $value
     * @return static
     */
    function setPaymentMethod($value)
    {
        return $this->setProp('paymentMethod', $value);
    }

    /**
     * The billing address for the order.
     * @param \Vnetby\Schemaorg\Types\Thing\Intangible\StructuredValue\ContactPoint\PostalAddress $value
     * @return static
     */
    function setBillingAddress($value)
    {
        return $this->setProp('billingAddress', $value);
    }

    /**
     * An entity that arranges for an exchange between a buyer and a seller. In most cases a broker never acquires or
     * releases ownership of a product or service involved in an exchange. If it is not clear whether an entity is a
     * broker, seller, or buyer, the latter two terms are preferred.
     * @param \Vnetby\Schemaorg\Types\Thing\Person\Person|\Vnetby\Schemaorg\Types\Thing\Organization\Organization $value
     * @return static
     */
    function setBroker($value)
    {
        return $this->setProp('broker', $value);
    }

    /**
     * Party placing the order or paying the invoice.
     * @param \Vnetby\Schemaorg\Types\Thing\Person\Person|\Vnetby\Schemaorg\Types\Thing\Organization\Organization $value
     * @return static
     */
    function setCustomer($value)
    {
        return $this->setProp('customer', $value);
    }

    /**
     * Indicates whether the offer was accepted as a gift for someone other than the buyer.
     * @param \Vnetby\Schemaorg\DataTypes\DataBoolean $value
     * @return static
     */
    function setIsGift($value)
    {
        return $this->setProp('isGift', $value);
    }

    /**
     * The current status of the order.
     * @param \Vnetby\Schemaorg\Types\Thing\Intangible\Enumeration\StatusEnumeration\OrderStatus\OrderStatus $value
     * @return static
     */
    function setOrderStatus($value)
    {
        return $this->setProp('orderStatus', $value);
    }

    /**
     * The order is being paid as part of the referenced Invoice.
     * @param \Vnetby\Schemaorg\Types\Thing\Intangible\Invoice $value
     * @return static
     */
    function setPartOfInvoice($value)
    {
        return $this->setProp('partOfInvoice', $value);
    }

    /**
     * Code used to redeem a discount.
     * @param \Vnetby\Schemaorg\DataTypes\DataText $value
     * @return static
     */
    function setDiscountCode($value)
    {
        return $this->setProp('discountCode', $value);
    }

    /**
     * The currency of the discount.\n\nUse standard formats: [ISO 4217 currency format](http://en.wikipedia.org/wiki/ISO_4217), e.g. "USD"; [Ticker symbol](https://en.wikipedia.org/wiki/List_of_cryptocurrencies) for cryptocurrencies, e.g. "BTC"; well known
     * names for [Local Exchange Trading Systems](https://en.wikipedia.org/wiki/Local_exchange_trading_system) (LETS) and other currency types, e.g. "Ithaca HOUR".
     * @return \Vnetby\Schemaorg\DataTypes\DataText|null
     */
    function getDiscountCurrency()
    {
        return $this->getProp('discountCurrency');
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
     * The identifier of the transaction.
     * @return \Vnetby\Schemaorg\DataTypes\DataText|null
     */
    function getOrderNumber()
    {
        return $this->getProp('orderNumber');
    }

    /**
     * A number that confirms the given order or payment has been received.
     * @return \Vnetby\Schemaorg\DataTypes\DataText|null
     */
    function getConfirmationNumber()
    {
        return $this->getProp('confirmationNumber');
    }

    /**
     * The URL for sending a payment.
     * @return \Vnetby\Schemaorg\DataTypes\DataURL|null
     */
    function getPaymentUrl()
    {
        return $this->getProp('paymentUrl');
    }

    /**
     * The date that payment is due.
     * @return \Vnetby\Schemaorg\DataTypes\DataDateTime|\Vnetby\Schemaorg\DataTypes\DataDate|null
     */
    function getPaymentDueDate()
    {
        return $this->getProp('paymentDueDate');
    }

    /**
     * Date order was placed.
     * @return \Vnetby\Schemaorg\DataTypes\DataDate|\Vnetby\Schemaorg\DataTypes\DataDateTime|null
     */
    function getOrderDate()
    {
        return $this->getProp('orderDate');
    }

    /**
     * An entity which offers (sells / leases / lends / loans) the services / goods. A seller may also be a
     * provider.
     * @return \Vnetby\Schemaorg\Types\Thing\Person\Person|\Vnetby\Schemaorg\Types\Thing\Organization\Organization|null
     */
    function getSeller()
    {
        return $this->getProp('seller');
    }

    /**
     * The offer(s) -- e.g., product, quantity and price combinations -- included in the order.
     * @return \Vnetby\Schemaorg\Types\Thing\Intangible\Offer\Offer|null
     */
    function getAcceptedOffer()
    {
        return $this->getProp('acceptedOffer');
    }

    /**
     * Any discount applied (to an Order).
     * @return \Vnetby\Schemaorg\DataTypes\DataNumber|\Vnetby\Schemaorg\DataTypes\DataText|null
     */
    function getDiscount()
    {
        return $this->getProp('discount');
    }

    /**
     * An identifier for the method of payment used (e.g. the last 4 digits of the credit card).
     * @return \Vnetby\Schemaorg\DataTypes\DataText|null
     */
    function getPaymentMethodId()
    {
        return $this->getProp('paymentMethodId');
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
     * The name of the credit card or other method of payment for the order.
     * @return \Vnetby\Schemaorg\Types\Thing\Intangible\Enumeration\PaymentMethod\PaymentMethod|null
     */
    function getPaymentMethod()
    {
        return $this->getProp('paymentMethod');
    }

    /**
     * The billing address for the order.
     * @return \Vnetby\Schemaorg\Types\Thing\Intangible\StructuredValue\ContactPoint\PostalAddress|null
     */
    function getBillingAddress()
    {
        return $this->getProp('billingAddress');
    }

    /**
     * An entity that arranges for an exchange between a buyer and a seller. In most cases a broker never acquires or
     * releases ownership of a product or service involved in an exchange. If it is not clear whether an entity is a
     * broker, seller, or buyer, the latter two terms are preferred.
     * @return \Vnetby\Schemaorg\Types\Thing\Person\Person|\Vnetby\Schemaorg\Types\Thing\Organization\Organization|null
     */
    function getBroker()
    {
        return $this->getProp('broker');
    }

    /**
     * Party placing the order or paying the invoice.
     * @return \Vnetby\Schemaorg\Types\Thing\Person\Person|\Vnetby\Schemaorg\Types\Thing\Organization\Organization|null
     */
    function getCustomer()
    {
        return $this->getProp('customer');
    }

    /**
     * Indicates whether the offer was accepted as a gift for someone other than the buyer.
     * @return \Vnetby\Schemaorg\DataTypes\DataBoolean|null
     */
    function getIsGift()
    {
        return $this->getProp('isGift');
    }

    /**
     * The current status of the order.
     * @return \Vnetby\Schemaorg\Types\Thing\Intangible\Enumeration\StatusEnumeration\OrderStatus\OrderStatus|null
     */
    function getOrderStatus()
    {
        return $this->getProp('orderStatus');
    }

    /**
     * The order is being paid as part of the referenced Invoice.
     * @return \Vnetby\Schemaorg\Types\Thing\Intangible\Invoice|null
     */
    function getPartOfInvoice()
    {
        return $this->getProp('partOfInvoice');
    }

    /**
     * Code used to redeem a discount.
     * @return \Vnetby\Schemaorg\DataTypes\DataText|null
     */
    function getDiscountCode()
    {
        return $this->getProp('discountCode');
    }
}
