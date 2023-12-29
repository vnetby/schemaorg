<?php

/**
 * @see https://schema.org/RepaymentSpecification
 * A structured value representing repayment.
 */

namespace Vnetby\Schemaorg\Types\Thing\Intangible\StructuredValue;

class RepaymentSpecification extends \Vnetby\Schemaorg\Types\Thing\Intangible\StructuredValue\StructuredValue
{
    const TYPE = 'RepaymentSpecification';

    /**
     * The number of payments contractually required at origination to repay the loan. For monthly paying loans this is the number of
     * months from the contractual first payment date to the maturity date.
     * @var string|int|float|\Vnetby\Schemaorg\DataTypes\DataNumber
     */
    public $numberOfLoanPayments;

    /**
     * The amount to be paid as a penalty in the event of early payment of the loan.
     * @var \Vnetby\Schemaorg\Types\Thing\Intangible\StructuredValue\MonetaryAmount
     */
    public $earlyPrepaymentPenalty;

    /**
     * a type of payment made in cash during the onset of the purchase of an expensive good/service. The payment typically represents
     * only a percentage of the full purchase price.
     * @var string|int|float|\Vnetby\Schemaorg\Types\Thing\Intangible\StructuredValue\MonetaryAmount|\Vnetby\Schemaorg\DataTypes\DataNumber
     */
    public $downPayment;

    /**
     * Frequency of payments due, i.e. number of months between payments. This is defined as a frequency, i.e. the reciprocal of a
     * period of time.
     * @var string|int|float|\Vnetby\Schemaorg\DataTypes\DataNumber
     */
    public $loanPaymentFrequency;

    /**
     * The amount of money to pay in a single payment.
     * @var \Vnetby\Schemaorg\Types\Thing\Intangible\StructuredValue\MonetaryAmount
     */
    public $loanPaymentAmount;

    /**
     * The number of payments contractually required at origination to repay the loan. For monthly paying loans this is the number of
     * months from the contractual first payment date to the maturity date.
     * @param string|int|float|\Vnetby\Schemaorg\DataTypes\DataNumber $value
     * @return static
     */
    function setNumberOfLoanPayments($value)
    {
        return $this->setProp('numberOfLoanPayments', $value);
    }

    /**
     * The amount to be paid as a penalty in the event of early payment of the loan.
     * @param \Vnetby\Schemaorg\Types\Thing\Intangible\StructuredValue\MonetaryAmount $value
     * @return static
     */
    function setEarlyPrepaymentPenalty($value)
    {
        return $this->setProp('earlyPrepaymentPenalty', $value);
    }

    /**
     * a type of payment made in cash during the onset of the purchase of an expensive good/service. The payment typically represents
     * only a percentage of the full purchase price.
     * @param string|int|float|\Vnetby\Schemaorg\Types\Thing\Intangible\StructuredValue\MonetaryAmount|\Vnetby\Schemaorg\DataTypes\DataNumber $value
     * @return static
     */
    function setDownPayment($value)
    {
        return $this->setProp('downPayment', $value);
    }

    /**
     * Frequency of payments due, i.e. number of months between payments. This is defined as a frequency, i.e. the reciprocal of a
     * period of time.
     * @param string|int|float|\Vnetby\Schemaorg\DataTypes\DataNumber $value
     * @return static
     */
    function setLoanPaymentFrequency($value)
    {
        return $this->setProp('loanPaymentFrequency', $value);
    }

    /**
     * The amount of money to pay in a single payment.
     * @param \Vnetby\Schemaorg\Types\Thing\Intangible\StructuredValue\MonetaryAmount $value
     * @return static
     */
    function setLoanPaymentAmount($value)
    {
        return $this->setProp('loanPaymentAmount', $value);
    }

    /**
     * The number of payments contractually required at origination to repay the loan. For monthly paying loans this is the number of
     * months from the contractual first payment date to the maturity date.
     * @return string|int|float|\Vnetby\Schemaorg\DataTypes\DataNumber|null
     */
    function getNumberOfLoanPayments()
    {
        return $this->getProp('numberOfLoanPayments');
    }

    /**
     * The amount to be paid as a penalty in the event of early payment of the loan.
     * @return \Vnetby\Schemaorg\Types\Thing\Intangible\StructuredValue\MonetaryAmount|null
     */
    function getEarlyPrepaymentPenalty()
    {
        return $this->getProp('earlyPrepaymentPenalty');
    }

    /**
     * a type of payment made in cash during the onset of the purchase of an expensive good/service. The payment typically represents
     * only a percentage of the full purchase price.
     * @return string|int|float|\Vnetby\Schemaorg\Types\Thing\Intangible\StructuredValue\MonetaryAmount|\Vnetby\Schemaorg\DataTypes\DataNumber|null
     */
    function getDownPayment()
    {
        return $this->getProp('downPayment');
    }

    /**
     * Frequency of payments due, i.e. number of months between payments. This is defined as a frequency, i.e. the reciprocal of a
     * period of time.
     * @return string|int|float|\Vnetby\Schemaorg\DataTypes\DataNumber|null
     */
    function getLoanPaymentFrequency()
    {
        return $this->getProp('loanPaymentFrequency');
    }

    /**
     * The amount of money to pay in a single payment.
     * @return \Vnetby\Schemaorg\Types\Thing\Intangible\StructuredValue\MonetaryAmount|null
     */
    function getLoanPaymentAmount()
    {
        return $this->getProp('loanPaymentAmount');
    }
}
