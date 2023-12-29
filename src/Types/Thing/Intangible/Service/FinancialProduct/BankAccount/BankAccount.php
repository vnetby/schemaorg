<?php

/**
 * @see https://schema.org/BankAccount
 * A product or service offered by a bank whereby one may deposit, withdraw or transfer money and in some cases be
 * paid interest.
 */

namespace Vnetby\Schemaorg\Types\Thing\Intangible\Service\FinancialProduct\BankAccount;

class BankAccount extends \Vnetby\Schemaorg\Types\Thing\Intangible\Service\FinancialProduct\FinancialProduct
{
    const TYPE = 'BankAccount';

    /**
     * A minimum amount that has to be paid in every month.
     * @var \Vnetby\Schemaorg\Types\Thing\Intangible\StructuredValue\MonetaryAmount
     */
    public $accountMinimumInflow;

    /**
     * The type of a bank account.
     * @var string|\Vnetby\Schemaorg\DataTypes\DataText|\Vnetby\Schemaorg\DataTypes\DataURL
     */
    public $bankAccountType;

    /**
     * An overdraft is an extension of credit from a lending institution when an account reaches zero. An overdraft allows the individual
     * to continue withdrawing money even if the account has no funds in it. Basically the bank allows people to borrow a
     * set amount of money.
     * @var \Vnetby\Schemaorg\Types\Thing\Intangible\StructuredValue\MonetaryAmount
     */
    public $accountOverdraftLimit;

    /**
     * A minimum amount that has to be paid in every month.
     * @param \Vnetby\Schemaorg\Types\Thing\Intangible\StructuredValue\MonetaryAmount $value
     * @return static
     */
    function setAccountMinimumInflow($value)
    {
        return $this->setProp('accountMinimumInflow', $value);
    }

    /**
     * The type of a bank account.
     * @param string|\Vnetby\Schemaorg\DataTypes\DataText|\Vnetby\Schemaorg\DataTypes\DataURL $value
     * @return static
     */
    function setBankAccountType($value)
    {
        return $this->setProp('bankAccountType', $value);
    }

    /**
     * An overdraft is an extension of credit from a lending institution when an account reaches zero. An overdraft allows the individual
     * to continue withdrawing money even if the account has no funds in it. Basically the bank allows people to borrow a
     * set amount of money.
     * @param \Vnetby\Schemaorg\Types\Thing\Intangible\StructuredValue\MonetaryAmount $value
     * @return static
     */
    function setAccountOverdraftLimit($value)
    {
        return $this->setProp('accountOverdraftLimit', $value);
    }

    /**
     * A minimum amount that has to be paid in every month.
     * @return \Vnetby\Schemaorg\Types\Thing\Intangible\StructuredValue\MonetaryAmount|null
     */
    function getAccountMinimumInflow()
    {
        return $this->getProp('accountMinimumInflow');
    }

    /**
     * The type of a bank account.
     * @return string|\Vnetby\Schemaorg\DataTypes\DataText|\Vnetby\Schemaorg\DataTypes\DataURL|null
     */
    function getBankAccountType()
    {
        return $this->getProp('bankAccountType');
    }

    /**
     * An overdraft is an extension of credit from a lending institution when an account reaches zero. An overdraft allows the individual
     * to continue withdrawing money even if the account has no funds in it. Basically the bank allows people to borrow a
     * set amount of money.
     * @return \Vnetby\Schemaorg\Types\Thing\Intangible\StructuredValue\MonetaryAmount|null
     */
    function getAccountOverdraftLimit()
    {
        return $this->getProp('accountOverdraftLimit');
    }
}
