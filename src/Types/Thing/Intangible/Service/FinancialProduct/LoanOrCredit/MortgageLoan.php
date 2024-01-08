<?php

/**
 * @see https://schema.org/MortgageLoan
 * A loan in which property or real estate is used as collateral. (A loan securitized against some real estate.)
 */

namespace Vnetby\Schemaorg\Types\Thing\Intangible\Service\FinancialProduct\LoanOrCredit;

class MortgageLoan extends \Vnetby\Schemaorg\Types\Thing\Intangible\Service\FinancialProduct\LoanOrCredit\LoanOrCredit
{
    const TYPE = 'MortgageLoan';

    /**
     * Amount of mortgage mandate that can be converted into a proper mortgage at a later stage.
     * @var \Vnetby\Schemaorg\Types\Thing\Intangible\StructuredValue\MonetaryAmount
     */
    public $loanMortgageMandateAmount;

    /**
     * Whether borrower is a resident of the jurisdiction where the property is located.
     * @var bool|\Vnetby\Schemaorg\DataTypes\DataBoolean
     */
    public $domiciledMortgage;

    /**
     * Amount of mortgage mandate that can be converted into a proper mortgage at a later stage.
     * @param \Vnetby\Schemaorg\Types\Thing\Intangible\StructuredValue\MonetaryAmount $value
     * @return static
     */
    function setLoanMortgageMandateAmount($value)
    {
        return $this->setProp('loanMortgageMandateAmount', $value);
    }

    /**
     * Whether borrower is a resident of the jurisdiction where the property is located.
     * @param bool|\Vnetby\Schemaorg\DataTypes\DataBoolean $value
     * @return static
     */
    function setDomiciledMortgage($value)
    {
        return $this->setProp('domiciledMortgage', $value);
    }

    /**
     * Amount of mortgage mandate that can be converted into a proper mortgage at a later stage.
     * @return \Vnetby\Schemaorg\Types\Thing\Intangible\StructuredValue\MonetaryAmount|null
     */
    function getLoanMortgageMandateAmount()
    {
        return $this->getProp('loanMortgageMandateAmount');
    }

    /**
     * Whether borrower is a resident of the jurisdiction where the property is located.
     * @return bool|\Vnetby\Schemaorg\DataTypes\DataBoolean|null
     */
    function getDomiciledMortgage()
    {
        return $this->getProp('domiciledMortgage');
    }
}
