<?php

/**
 * @see https://schema.org/PaymentCard
 * A payment method using a credit, debit, store or other card to associate the payment with an account.
 */

namespace Vnetby\Schemaorg\Types\Thing\Intangible\Service\FinancialProduct\PaymentCard;

class PaymentCard extends \Vnetby\Schemaorg\Types\Thing\Intangible\Service\FinancialProduct\FinancialProduct
{
    const TYPE = 'PaymentCard';

    /**
     * A floor limit is the amount of money above which credit card transactions must be authorized.
     * @var \Vnetby\Schemaorg\Types\Thing\Intangible\StructuredValue\MonetaryAmount
     */
    public $floorLimit;

    /**
     * The minimum payment is the lowest amount of money that one is required to pay on a credit card statement each
     * month.
     * @var string|int|float|\Vnetby\Schemaorg\DataTypes\DataNumber|\Vnetby\Schemaorg\Types\Thing\Intangible\StructuredValue\MonetaryAmount
     */
    public $monthlyMinimumRepaymentAmount;

    /**
     * A cardholder benefit that pays the cardholder a small percentage of their net expenditures.
     * @var string|int|float|bool|\Vnetby\Schemaorg\DataTypes\DataNumber|\Vnetby\Schemaorg\DataTypes\DataBoolean
     */
    public $cashBack;

    /**
     * A secure method for consumers to purchase products or services via debit, credit or smartcards by using RFID or NFC technology.
     * @var bool|\Vnetby\Schemaorg\DataTypes\DataBoolean
     */
    public $contactlessPayment;

    /**
     * A floor limit is the amount of money above which credit card transactions must be authorized.
     * @param \Vnetby\Schemaorg\Types\Thing\Intangible\StructuredValue\MonetaryAmount $value
     * @return static
     */
    function setFloorLimit($value)
    {
        return $this->setProp('floorLimit', $value);
    }

    /**
     * The minimum payment is the lowest amount of money that one is required to pay on a credit card statement each
     * month.
     * @param string|int|float|\Vnetby\Schemaorg\DataTypes\DataNumber|\Vnetby\Schemaorg\Types\Thing\Intangible\StructuredValue\MonetaryAmount $value
     * @return static
     */
    function setMonthlyMinimumRepaymentAmount($value)
    {
        return $this->setProp('monthlyMinimumRepaymentAmount', $value);
    }

    /**
     * A cardholder benefit that pays the cardholder a small percentage of their net expenditures.
     * @param string|int|float|bool|\Vnetby\Schemaorg\DataTypes\DataNumber|\Vnetby\Schemaorg\DataTypes\DataBoolean $value
     * @return static
     */
    function setCashBack($value)
    {
        return $this->setProp('cashBack', $value);
    }

    /**
     * A secure method for consumers to purchase products or services via debit, credit or smartcards by using RFID or NFC technology.
     * @param bool|\Vnetby\Schemaorg\DataTypes\DataBoolean $value
     * @return static
     */
    function setContactlessPayment($value)
    {
        return $this->setProp('contactlessPayment', $value);
    }

    /**
     * A floor limit is the amount of money above which credit card transactions must be authorized.
     * @return \Vnetby\Schemaorg\Types\Thing\Intangible\StructuredValue\MonetaryAmount|null
     */
    function getFloorLimit()
    {
        return $this->getProp('floorLimit');
    }

    /**
     * The minimum payment is the lowest amount of money that one is required to pay on a credit card statement each
     * month.
     * @return string|int|float|\Vnetby\Schemaorg\DataTypes\DataNumber|\Vnetby\Schemaorg\Types\Thing\Intangible\StructuredValue\MonetaryAmount|null
     */
    function getMonthlyMinimumRepaymentAmount()
    {
        return $this->getProp('monthlyMinimumRepaymentAmount');
    }

    /**
     * A cardholder benefit that pays the cardholder a small percentage of their net expenditures.
     * @return string|int|float|bool|\Vnetby\Schemaorg\DataTypes\DataNumber|\Vnetby\Schemaorg\DataTypes\DataBoolean|null
     */
    function getCashBack()
    {
        return $this->getProp('cashBack');
    }

    /**
     * A secure method for consumers to purchase products or services via debit, credit or smartcards by using RFID or NFC technology.
     * @return bool|\Vnetby\Schemaorg\DataTypes\DataBoolean|null
     */
    function getContactlessPayment()
    {
        return $this->getProp('contactlessPayment');
    }
}
