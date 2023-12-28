<?php

/**
* @see https://schema.org/FinancialProduct
 * A product provided to consumers and businesses by financial institutions such as banks, insurance companies, brokerage firms, consumer finance companies, and
 * investment companies which comprise the financial services industry.
*/

namespace Vnetby\Schemaorg\Types\Thing\Intangible\Service\FinancialProduct;

class FinancialProduct extends \Vnetby\Schemaorg\Types\Thing\Intangible\Service\Service
{
   const TYPE = 'FinancialProduct';

   /**
     * The annual rate that is charged for borrowing (or made by investing), expressed as a single percentage number that represents the
     * actual yearly cost of funds over the term of a loan. This includes any fees or additional costs associated with the
     * transaction.
    * @var \Vnetby\Schemaorg\DataTypes\DataNumber|\Vnetby\Schemaorg\Types\Thing\Intangible\StructuredValue\QuantitativeValue\QuantitativeValue
    */
   protected $prop_annualPercentageRate;

   /**
     * Description of fees, commissions, and other terms applied either to a class of financial product, or by a financial service organization.
    * @var \Vnetby\Schemaorg\DataTypes\DataText|\Vnetby\Schemaorg\DataTypes\DataURL
    */
   protected $prop_feesAndCommissionsSpecification;

   /**
     * The interest rate, charged or paid, applicable to the financial product. Note: This is different from the calculated annualPercentageRate.
    * @var \Vnetby\Schemaorg\Types\Thing\Intangible\StructuredValue\QuantitativeValue\QuantitativeValue|\Vnetby\Schemaorg\DataTypes\DataNumber
    */
   protected $prop_interestRate;

   /**
     * The annual rate that is charged for borrowing (or made by investing), expressed as a single percentage number that represents the
     * actual yearly cost of funds over the term of a loan. This includes any fees or additional costs associated with the
     * transaction.
    * @param \Vnetby\Schemaorg\DataTypes\DataNumber|\Vnetby\Schemaorg\Types\Thing\Intangible\StructuredValue\QuantitativeValue\QuantitativeValue $value
    * @return static
    */
   function setAnnualPercentageRate($value)
   {
       return $this->setProp('annualPercentageRate', $value);
   }

   /**
     * Description of fees, commissions, and other terms applied either to a class of financial product, or by a financial service organization.
    * @param \Vnetby\Schemaorg\DataTypes\DataText|\Vnetby\Schemaorg\DataTypes\DataURL $value
    * @return static
    */
   function setFeesAndCommissionsSpecification($value)
   {
       return $this->setProp('feesAndCommissionsSpecification', $value);
   }

   /**
     * The interest rate, charged or paid, applicable to the financial product. Note: This is different from the calculated annualPercentageRate.
    * @param \Vnetby\Schemaorg\Types\Thing\Intangible\StructuredValue\QuantitativeValue\QuantitativeValue|\Vnetby\Schemaorg\DataTypes\DataNumber $value
    * @return static
    */
   function setInterestRate($value)
   {
       return $this->setProp('interestRate', $value);
   }

   /**
     * The annual rate that is charged for borrowing (or made by investing), expressed as a single percentage number that represents the
     * actual yearly cost of funds over the term of a loan. This includes any fees or additional costs associated with the
     * transaction.
    * @return \Vnetby\Schemaorg\DataTypes\DataNumber|\Vnetby\Schemaorg\Types\Thing\Intangible\StructuredValue\QuantitativeValue\QuantitativeValue|null
    */
   function getAnnualPercentageRate()
   {
       return $this->getProp('annualPercentageRate');
   }

   /**
     * Description of fees, commissions, and other terms applied either to a class of financial product, or by a financial service organization.
    * @return \Vnetby\Schemaorg\DataTypes\DataText|\Vnetby\Schemaorg\DataTypes\DataURL|null
    */
   function getFeesAndCommissionsSpecification()
   {
       return $this->getProp('feesAndCommissionsSpecification');
   }

   /**
     * The interest rate, charged or paid, applicable to the financial product. Note: This is different from the calculated annualPercentageRate.
    * @return \Vnetby\Schemaorg\Types\Thing\Intangible\StructuredValue\QuantitativeValue\QuantitativeValue|\Vnetby\Schemaorg\DataTypes\DataNumber|null
    */
   function getInterestRate()
   {
       return $this->getProp('interestRate');
   }
}
