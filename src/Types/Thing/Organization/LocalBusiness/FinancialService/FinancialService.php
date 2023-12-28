<?php

/**
* @see https://schema.org/FinancialService
 * Financial services business.
*/

namespace Vnetby\Schemaorg\Types\Thing\Organization\LocalBusiness\FinancialService;

class FinancialService extends \Vnetby\Schemaorg\Types\Thing\Organization\LocalBusiness\LocalBusiness
{
   const TYPE = 'FinancialService';

   /**
     * Description of fees, commissions, and other terms applied either to a class of financial product, or by a financial service organization.
    * @var \Vnetby\Schemaorg\DataTypes\DataText|\Vnetby\Schemaorg\DataTypes\DataURL
    */
   protected $prop_feesAndCommissionsSpecification;

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
     * Description of fees, commissions, and other terms applied either to a class of financial product, or by a financial service organization.
    * @return \Vnetby\Schemaorg\DataTypes\DataText|\Vnetby\Schemaorg\DataTypes\DataURL|null
    */
   function getFeesAndCommissionsSpecification()
   {
       return $this->getProp('feesAndCommissionsSpecification');
   }
}
