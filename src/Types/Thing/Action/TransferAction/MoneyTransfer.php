<?php

/**
 * @see https://schema.org/MoneyTransfer
 * The act of transferring money from one place to another place. This may occur electronically or physically.
 */

namespace Vnetby\Schemaorg\Types\Thing\Action\TransferAction;

class MoneyTransfer extends \Vnetby\Schemaorg\Types\Thing\Action\TransferAction\TransferAction
{
    const TYPE = 'MoneyTransfer';

    /**
     * The amount of money.
     * @var string|int|float|\Vnetby\Schemaorg\Types\Thing\Intangible\StructuredValue\MonetaryAmount|\Vnetby\Schemaorg\DataTypes\DataNumber
     */
    public $amount;

    /**
     * A bank or bank’s branch, financial institution or international financial institution operating the beneficiary’s bank account or releasing funds for the
     * beneficiary.
     * @var string|\Vnetby\Schemaorg\DataTypes\DataText|\Vnetby\Schemaorg\Types\Thing\Organization\LocalBusiness\FinancialService\BankOrCreditUnion
     */
    public $beneficiaryBank;

    /**
     * The amount of money.
     * @param string|int|float|\Vnetby\Schemaorg\Types\Thing\Intangible\StructuredValue\MonetaryAmount|\Vnetby\Schemaorg\DataTypes\DataNumber $value
     * @return static
     */
    function setAmount($value)
    {
        return $this->setProp('amount', $value);
    }

    /**
     * A bank or bank’s branch, financial institution or international financial institution operating the beneficiary’s bank account or releasing funds for the
     * beneficiary.
     * @param string|\Vnetby\Schemaorg\DataTypes\DataText|\Vnetby\Schemaorg\Types\Thing\Organization\LocalBusiness\FinancialService\BankOrCreditUnion $value
     * @return static
     */
    function setBeneficiaryBank($value)
    {
        return $this->setProp('beneficiaryBank', $value);
    }

    /**
     * The amount of money.
     * @return string|int|float|\Vnetby\Schemaorg\Types\Thing\Intangible\StructuredValue\MonetaryAmount|\Vnetby\Schemaorg\DataTypes\DataNumber|null
     */
    function getAmount()
    {
        return $this->getProp('amount');
    }

    /**
     * A bank or bank’s branch, financial institution or international financial institution operating the beneficiary’s bank account or releasing funds for the
     * beneficiary.
     * @return string|\Vnetby\Schemaorg\DataTypes\DataText|\Vnetby\Schemaorg\Types\Thing\Organization\LocalBusiness\FinancialService\BankOrCreditUnion|null
     */
    function getBeneficiaryBank()
    {
        return $this->getProp('beneficiaryBank');
    }
}
