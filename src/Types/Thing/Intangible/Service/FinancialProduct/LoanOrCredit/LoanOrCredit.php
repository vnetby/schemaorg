<?php

/**
* @see https://schema.org/LoanOrCredit
 * A financial product for the loaning of an amount of money, or line of credit, under agreed terms and charges.
*/

namespace Vnetby\Schemaorg\Types\Thing\Intangible\Service\FinancialProduct\LoanOrCredit;

class LoanOrCredit extends \Vnetby\Schemaorg\Types\Thing\Intangible\Service\FinancialProduct\FinancialProduct
{
   const TYPE = 'LoanOrCredit';

   /**
     * Whether the terms for payment of interest can be renegotiated during the life of the loan.
    * @var \Vnetby\Schemaorg\DataTypes\DataBoolean
    */
   protected $prop_renegotiableLoan;

   /**
     * The type of a loan or credit.
    * @var \Vnetby\Schemaorg\DataTypes\DataText|\Vnetby\Schemaorg\DataTypes\DataURL
    */
   protected $prop_loanType;

   /**
     * The period of time after any due date that the borrower has to fulfil its obligations before a default (failure to
     * pay) is deemed to have occurred.
    * @var \Vnetby\Schemaorg\Types\Thing\Intangible\Quantity\Duration
    */
   protected $prop_gracePeriod;

   /**
     * The currency in which the monetary amount is expressed.\n\nUse standard formats: [ISO 4217 currency format](http://en.wikipedia.org/wiki/ISO_4217), e.g. "USD"; [Ticker symbol](https://en.wikipedia.org/wiki/List_of_cryptocurrencies) for cryptocurrencies,
     * e.g. "BTC"; well known names for [Local Exchange Trading Systems](https://en.wikipedia.org/wiki/Local_exchange_trading_system) (LETS) and other currency types, e.g. "Ithaca HOUR".
    * @var \Vnetby\Schemaorg\DataTypes\DataText
    */
   protected $prop_currency;

   /**
     * A form of paying back money previously borrowed from a lender. Repayment usually takes the form of periodic payments that normally
     * include part principal plus interest in each payment.
    * @var \Vnetby\Schemaorg\Types\Thing\Intangible\StructuredValue\RepaymentSpecification
    */
   protected $prop_loanRepaymentForm;

   /**
     * The duration of the loan or credit agreement.
    * @var \Vnetby\Schemaorg\Types\Thing\Intangible\StructuredValue\QuantitativeValue\QuantitativeValue
    */
   protected $prop_loanTerm;

   /**
     * The only way you get the money back in the event of default is the security. Recourse is where you still
     * have the opportunity to go back to the borrower for the rest of the money.
    * @var \Vnetby\Schemaorg\DataTypes\DataBoolean
    */
   protected $prop_recourseLoan;

   /**
     * The amount of money.
    * @var \Vnetby\Schemaorg\Types\Thing\Intangible\StructuredValue\MonetaryAmount|\Vnetby\Schemaorg\DataTypes\DataNumber
    */
   protected $prop_amount;

   /**
     * Assets required to secure loan or credit repayments. It may take form of third party pledge, goods, financial instruments (cash, securities,
     * etc.)
    * @var \Vnetby\Schemaorg\Types\Thing\Thing|\Vnetby\Schemaorg\DataTypes\DataText
    */
   protected $prop_requiredCollateral;

   /**
     * Whether the terms for payment of interest can be renegotiated during the life of the loan.
    * @param \Vnetby\Schemaorg\DataTypes\DataBoolean $value
    * @return static
    */
   function setRenegotiableLoan($value)
   {
       return $this->setProp('renegotiableLoan', $value);
   }

   /**
     * The type of a loan or credit.
    * @param \Vnetby\Schemaorg\DataTypes\DataText|\Vnetby\Schemaorg\DataTypes\DataURL $value
    * @return static
    */
   function setLoanType($value)
   {
       return $this->setProp('loanType', $value);
   }

   /**
     * The period of time after any due date that the borrower has to fulfil its obligations before a default (failure to
     * pay) is deemed to have occurred.
    * @param \Vnetby\Schemaorg\Types\Thing\Intangible\Quantity\Duration $value
    * @return static
    */
   function setGracePeriod($value)
   {
       return $this->setProp('gracePeriod', $value);
   }

   /**
     * The currency in which the monetary amount is expressed.\n\nUse standard formats: [ISO 4217 currency format](http://en.wikipedia.org/wiki/ISO_4217), e.g. "USD"; [Ticker symbol](https://en.wikipedia.org/wiki/List_of_cryptocurrencies) for cryptocurrencies,
     * e.g. "BTC"; well known names for [Local Exchange Trading Systems](https://en.wikipedia.org/wiki/Local_exchange_trading_system) (LETS) and other currency types, e.g. "Ithaca HOUR".
    * @param \Vnetby\Schemaorg\DataTypes\DataText $value
    * @return static
    */
   function setCurrency($value)
   {
       return $this->setProp('currency', $value);
   }

   /**
     * A form of paying back money previously borrowed from a lender. Repayment usually takes the form of periodic payments that normally
     * include part principal plus interest in each payment.
    * @param \Vnetby\Schemaorg\Types\Thing\Intangible\StructuredValue\RepaymentSpecification $value
    * @return static
    */
   function setLoanRepaymentForm($value)
   {
       return $this->setProp('loanRepaymentForm', $value);
   }

   /**
     * The duration of the loan or credit agreement.
    * @param \Vnetby\Schemaorg\Types\Thing\Intangible\StructuredValue\QuantitativeValue\QuantitativeValue $value
    * @return static
    */
   function setLoanTerm($value)
   {
       return $this->setProp('loanTerm', $value);
   }

   /**
     * The only way you get the money back in the event of default is the security. Recourse is where you still
     * have the opportunity to go back to the borrower for the rest of the money.
    * @param \Vnetby\Schemaorg\DataTypes\DataBoolean $value
    * @return static
    */
   function setRecourseLoan($value)
   {
       return $this->setProp('recourseLoan', $value);
   }

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
     * Assets required to secure loan or credit repayments. It may take form of third party pledge, goods, financial instruments (cash, securities,
     * etc.)
    * @param \Vnetby\Schemaorg\Types\Thing\Thing|\Vnetby\Schemaorg\DataTypes\DataText $value
    * @return static
    */
   function setRequiredCollateral($value)
   {
       return $this->setProp('requiredCollateral', $value);
   }

   /**
     * Whether the terms for payment of interest can be renegotiated during the life of the loan.
    * @return \Vnetby\Schemaorg\DataTypes\DataBoolean|null
    */
   function getRenegotiableLoan()
   {
       return $this->getProp('renegotiableLoan');
   }

   /**
     * The type of a loan or credit.
    * @return \Vnetby\Schemaorg\DataTypes\DataText|\Vnetby\Schemaorg\DataTypes\DataURL|null
    */
   function getLoanType()
   {
       return $this->getProp('loanType');
   }

   /**
     * The period of time after any due date that the borrower has to fulfil its obligations before a default (failure to
     * pay) is deemed to have occurred.
    * @return \Vnetby\Schemaorg\Types\Thing\Intangible\Quantity\Duration|null
    */
   function getGracePeriod()
   {
       return $this->getProp('gracePeriod');
   }

   /**
     * The currency in which the monetary amount is expressed.\n\nUse standard formats: [ISO 4217 currency format](http://en.wikipedia.org/wiki/ISO_4217), e.g. "USD"; [Ticker symbol](https://en.wikipedia.org/wiki/List_of_cryptocurrencies) for cryptocurrencies,
     * e.g. "BTC"; well known names for [Local Exchange Trading Systems](https://en.wikipedia.org/wiki/Local_exchange_trading_system) (LETS) and other currency types, e.g. "Ithaca HOUR".
    * @return \Vnetby\Schemaorg\DataTypes\DataText|null
    */
   function getCurrency()
   {
       return $this->getProp('currency');
   }

   /**
     * A form of paying back money previously borrowed from a lender. Repayment usually takes the form of periodic payments that normally
     * include part principal plus interest in each payment.
    * @return \Vnetby\Schemaorg\Types\Thing\Intangible\StructuredValue\RepaymentSpecification|null
    */
   function getLoanRepaymentForm()
   {
       return $this->getProp('loanRepaymentForm');
   }

   /**
     * The duration of the loan or credit agreement.
    * @return \Vnetby\Schemaorg\Types\Thing\Intangible\StructuredValue\QuantitativeValue\QuantitativeValue|null
    */
   function getLoanTerm()
   {
       return $this->getProp('loanTerm');
   }

   /**
     * The only way you get the money back in the event of default is the security. Recourse is where you still
     * have the opportunity to go back to the borrower for the rest of the money.
    * @return \Vnetby\Schemaorg\DataTypes\DataBoolean|null
    */
   function getRecourseLoan()
   {
       return $this->getProp('recourseLoan');
   }

   /**
     * The amount of money.
    * @return \Vnetby\Schemaorg\Types\Thing\Intangible\StructuredValue\MonetaryAmount|\Vnetby\Schemaorg\DataTypes\DataNumber|null
    */
   function getAmount()
   {
       return $this->getProp('amount');
   }

   /**
     * Assets required to secure loan or credit repayments. It may take form of third party pledge, goods, financial instruments (cash, securities,
     * etc.)
    * @return \Vnetby\Schemaorg\Types\Thing\Thing|\Vnetby\Schemaorg\DataTypes\DataText|null
    */
   function getRequiredCollateral()
   {
       return $this->getProp('requiredCollateral');
   }
}
