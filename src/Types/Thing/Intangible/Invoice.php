<?php

/**
 * @see https://schema.org/Invoice
 * A statement of the money due for goods or services; a bill.
 */

namespace Vnetby\Schemaorg\Types\Thing\Intangible;

class Invoice extends \Vnetby\Schemaorg\Types\Thing\Intangible\Intangible
{
    const TYPE = 'Invoice';

    /**
     * The total amount due.
     * @var \Vnetby\Schemaorg\Types\Thing\Intangible\StructuredValue\PriceSpecification\PriceSpecification|\Vnetby\Schemaorg\Types\Thing\Intangible\StructuredValue\MonetaryAmount
     */
    public $totalPaymentDue;

    /**
     * The service provider, service operator, or service performer; the goods producer. Another party (a seller) may offer those services or goods
     * on behalf of the provider. A provider may also serve as the seller.
     * @var \Vnetby\Schemaorg\Types\Thing\Organization\Organization|\Vnetby\Schemaorg\Types\Thing\Person\Person
     */
    public $provider;

    /**
     * An identifier for the method of payment used (e.g. the last 4 digits of the credit card).
     * @var string|\Vnetby\Schemaorg\DataTypes\DataText
     */
    public $paymentMethodId;

    /**
     * The date that payment is due.
     * @var string|\Vnetby\Schemaorg\DataTypes\DataDateTime|\Vnetby\Schemaorg\DataTypes\DataDate
     */
    public $paymentDueDate;

    /**
     * The minimum payment required at this time.
     * @var \Vnetby\Schemaorg\Types\Thing\Intangible\StructuredValue\PriceSpecification\PriceSpecification|\Vnetby\Schemaorg\Types\Thing\Intangible\StructuredValue\MonetaryAmount
     */
    public $minimumPaymentDue;

    /**
     * The name of the credit card or other method of payment for the order.
     * @var \Vnetby\Schemaorg\Types\Thing\Intangible\Enumeration\PaymentMethod\PaymentMethod
     */
    public $paymentMethod;

    /**
     * The date the invoice is scheduled to be paid.
     * @var string|\Vnetby\Schemaorg\DataTypes\DataDate
     */
    public $scheduledPaymentDate;

    /**
     * A number that confirms the given order or payment has been received.
     * @var string|\Vnetby\Schemaorg\DataTypes\DataText
     */
    public $confirmationNumber;

    /**
     * The identifier for the account the payment will be applied to.
     * @var string|\Vnetby\Schemaorg\DataTypes\DataText
     */
    public $accountId;

    /**
     * A category for the item. Greater signs or slashes can be used to informally indicate a category hierarchy.
     * @var string|\Vnetby\Schemaorg\Types\Thing\Intangible\DefinedTerm\CategoryCode\CategoryCode|\Vnetby\Schemaorg\Types\Thing\Intangible\Enumeration\PhysicalActivityCategory\PhysicalActivityCategory|\Vnetby\Schemaorg\DataTypes\DataText|\Vnetby\Schemaorg\DataTypes\DataURL|\Vnetby\Schemaorg\Types\Thing\Thing
     */
    public $category;

    /**
     * The status of payment; whether the invoice has been paid or not.
     * @var string|\Vnetby\Schemaorg\DataTypes\DataText|\Vnetby\Schemaorg\Types\Thing\Intangible\Enumeration\StatusEnumeration\PaymentStatusType\PaymentStatusType
     */
    public $paymentStatus;

    /**
     * The time interval used to compute the invoice.
     * @var \Vnetby\Schemaorg\Types\Thing\Intangible\Quantity\Duration
     */
    public $billingPeriod;

    /**
     * The Order(s) related to this Invoice. One or more Orders may be combined into a single Invoice.
     * @var \Vnetby\Schemaorg\Types\Thing\Intangible\Order
     */
    public $referencesOrder;

    /**
     * An entity that arranges for an exchange between a buyer and a seller. In most cases a broker never acquires or
     * releases ownership of a product or service involved in an exchange. If it is not clear whether an entity is a
     * broker, seller, or buyer, the latter two terms are preferred.
     * @var \Vnetby\Schemaorg\Types\Thing\Person\Person|\Vnetby\Schemaorg\Types\Thing\Organization\Organization
     */
    public $broker;

    /**
     * Party placing the order or paying the invoice.
     * @var \Vnetby\Schemaorg\Types\Thing\Person\Person|\Vnetby\Schemaorg\Types\Thing\Organization\Organization
     */
    public $customer;

    /**
     * The total amount due.
     * @param \Vnetby\Schemaorg\Types\Thing\Intangible\StructuredValue\PriceSpecification\PriceSpecification|\Vnetby\Schemaorg\Types\Thing\Intangible\StructuredValue\MonetaryAmount $value
     * @return static
     */
    function setTotalPaymentDue($value)
    {
        return $this->setProp('totalPaymentDue', $value);
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
     * An identifier for the method of payment used (e.g. the last 4 digits of the credit card).
     * @param string|\Vnetby\Schemaorg\DataTypes\DataText $value
     * @return static
     */
    function setPaymentMethodId($value)
    {
        return $this->setProp('paymentMethodId', $value);
    }

    /**
     * The date that payment is due.
     * @param string|\Vnetby\Schemaorg\DataTypes\DataDateTime|\Vnetby\Schemaorg\DataTypes\DataDate $value
     * @return static
     */
    function setPaymentDueDate($value)
    {
        return $this->setProp('paymentDueDate', $value);
    }

    /**
     * The minimum payment required at this time.
     * @param \Vnetby\Schemaorg\Types\Thing\Intangible\StructuredValue\PriceSpecification\PriceSpecification|\Vnetby\Schemaorg\Types\Thing\Intangible\StructuredValue\MonetaryAmount $value
     * @return static
     */
    function setMinimumPaymentDue($value)
    {
        return $this->setProp('minimumPaymentDue', $value);
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
     * The date the invoice is scheduled to be paid.
     * @param string|\Vnetby\Schemaorg\DataTypes\DataDate $value
     * @return static
     */
    function setScheduledPaymentDate($value)
    {
        return $this->setProp('scheduledPaymentDate', $value);
    }

    /**
     * A number that confirms the given order or payment has been received.
     * @param string|\Vnetby\Schemaorg\DataTypes\DataText $value
     * @return static
     */
    function setConfirmationNumber($value)
    {
        return $this->setProp('confirmationNumber', $value);
    }

    /**
     * The identifier for the account the payment will be applied to.
     * @param string|\Vnetby\Schemaorg\DataTypes\DataText $value
     * @return static
     */
    function setAccountId($value)
    {
        return $this->setProp('accountId', $value);
    }

    /**
     * A category for the item. Greater signs or slashes can be used to informally indicate a category hierarchy.
     * @param string|\Vnetby\Schemaorg\Types\Thing\Intangible\DefinedTerm\CategoryCode\CategoryCode|\Vnetby\Schemaorg\Types\Thing\Intangible\Enumeration\PhysicalActivityCategory\PhysicalActivityCategory|\Vnetby\Schemaorg\DataTypes\DataText|\Vnetby\Schemaorg\DataTypes\DataURL|\Vnetby\Schemaorg\Types\Thing\Thing $value
     * @return static
     */
    function setCategory($value)
    {
        return $this->setProp('category', $value);
    }

    /**
     * The status of payment; whether the invoice has been paid or not.
     * @param string|\Vnetby\Schemaorg\DataTypes\DataText|\Vnetby\Schemaorg\Types\Thing\Intangible\Enumeration\StatusEnumeration\PaymentStatusType\PaymentStatusType $value
     * @return static
     */
    function setPaymentStatus($value)
    {
        return $this->setProp('paymentStatus', $value);
    }

    /**
     * The time interval used to compute the invoice.
     * @param \Vnetby\Schemaorg\Types\Thing\Intangible\Quantity\Duration $value
     * @return static
     */
    function setBillingPeriod($value)
    {
        return $this->setProp('billingPeriod', $value);
    }

    /**
     * The Order(s) related to this Invoice. One or more Orders may be combined into a single Invoice.
     * @param \Vnetby\Schemaorg\Types\Thing\Intangible\Order $value
     * @return static
     */
    function setReferencesOrder($value)
    {
        return $this->setProp('referencesOrder', $value);
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
     * The total amount due.
     * @return \Vnetby\Schemaorg\Types\Thing\Intangible\StructuredValue\PriceSpecification\PriceSpecification|\Vnetby\Schemaorg\Types\Thing\Intangible\StructuredValue\MonetaryAmount|null
     */
    function getTotalPaymentDue()
    {
        return $this->getProp('totalPaymentDue');
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
     * An identifier for the method of payment used (e.g. the last 4 digits of the credit card).
     * @return string|\Vnetby\Schemaorg\DataTypes\DataText|null
     */
    function getPaymentMethodId()
    {
        return $this->getProp('paymentMethodId');
    }

    /**
     * The date that payment is due.
     * @return string|\Vnetby\Schemaorg\DataTypes\DataDateTime|\Vnetby\Schemaorg\DataTypes\DataDate|null
     */
    function getPaymentDueDate()
    {
        return $this->getProp('paymentDueDate');
    }

    /**
     * The minimum payment required at this time.
     * @return \Vnetby\Schemaorg\Types\Thing\Intangible\StructuredValue\PriceSpecification\PriceSpecification|\Vnetby\Schemaorg\Types\Thing\Intangible\StructuredValue\MonetaryAmount|null
     */
    function getMinimumPaymentDue()
    {
        return $this->getProp('minimumPaymentDue');
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
     * The date the invoice is scheduled to be paid.
     * @return string|\Vnetby\Schemaorg\DataTypes\DataDate|null
     */
    function getScheduledPaymentDate()
    {
        return $this->getProp('scheduledPaymentDate');
    }

    /**
     * A number that confirms the given order or payment has been received.
     * @return string|\Vnetby\Schemaorg\DataTypes\DataText|null
     */
    function getConfirmationNumber()
    {
        return $this->getProp('confirmationNumber');
    }

    /**
     * The identifier for the account the payment will be applied to.
     * @return string|\Vnetby\Schemaorg\DataTypes\DataText|null
     */
    function getAccountId()
    {
        return $this->getProp('accountId');
    }

    /**
     * A category for the item. Greater signs or slashes can be used to informally indicate a category hierarchy.
     * @return string|\Vnetby\Schemaorg\Types\Thing\Intangible\DefinedTerm\CategoryCode\CategoryCode|\Vnetby\Schemaorg\Types\Thing\Intangible\Enumeration\PhysicalActivityCategory\PhysicalActivityCategory|\Vnetby\Schemaorg\DataTypes\DataText|\Vnetby\Schemaorg\DataTypes\DataURL|\Vnetby\Schemaorg\Types\Thing\Thing|null
     */
    function getCategory()
    {
        return $this->getProp('category');
    }

    /**
     * The status of payment; whether the invoice has been paid or not.
     * @return string|\Vnetby\Schemaorg\DataTypes\DataText|\Vnetby\Schemaorg\Types\Thing\Intangible\Enumeration\StatusEnumeration\PaymentStatusType\PaymentStatusType|null
     */
    function getPaymentStatus()
    {
        return $this->getProp('paymentStatus');
    }

    /**
     * The time interval used to compute the invoice.
     * @return \Vnetby\Schemaorg\Types\Thing\Intangible\Quantity\Duration|null
     */
    function getBillingPeriod()
    {
        return $this->getProp('billingPeriod');
    }

    /**
     * The Order(s) related to this Invoice. One or more Orders may be combined into a single Invoice.
     * @return \Vnetby\Schemaorg\Types\Thing\Intangible\Order|null
     */
    function getReferencesOrder()
    {
        return $this->getProp('referencesOrder');
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
}
