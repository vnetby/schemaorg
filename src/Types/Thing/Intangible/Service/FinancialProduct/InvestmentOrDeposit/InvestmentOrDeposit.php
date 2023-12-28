<?php

/**
 * @see https://schema.org/InvestmentOrDeposit
 * A type of financial product that typically requires the client to transfer funds to a financial service in return for potential
 * beneficial financial return.
 */

namespace Vnetby\Schemaorg\Types\Thing\Intangible\Service\FinancialProduct\InvestmentOrDeposit;

class InvestmentOrDeposit extends \Vnetby\Schemaorg\Types\Thing\Intangible\Service\FinancialProduct\FinancialProduct
{
    const TYPE = 'InvestmentOrDeposit';

    /**
     * The amount of money.
     * @var \Vnetby\Schemaorg\Types\Thing\Intangible\StructuredValue\MonetaryAmount|\Vnetby\Schemaorg\DataTypes\DataNumber
     */
    protected $prop_amount;

    /**
     * The amount of money.
     * @param \Vnetby\Schemaorg\Types\Thing\Intangible\StructuredValue\MonetaryAmount|\Vnetby\Schemaorg\DataTypes\DataNumber $value
     * @return static
     */
    function setAmount($value)
    {
        return $this->setProp('amount', $value);
    }

    /**
     * The amount of money.
     * @return \Vnetby\Schemaorg\Types\Thing\Intangible\StructuredValue\MonetaryAmount|\Vnetby\Schemaorg\DataTypes\DataNumber|null
     */
    function getAmount()
    {
        return $this->getProp('amount');
    }
}
