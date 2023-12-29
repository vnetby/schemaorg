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
     * @var string|\Vnetby\Schemaorg\DataTypes\DataText|\Vnetby\Schemaorg\DataTypes\DataURL
     */
    public $feesAndCommissionsSpecification;

    /**
     * Description of fees, commissions, and other terms applied either to a class of financial product, or by a financial service organization.
     * @param string|\Vnetby\Schemaorg\DataTypes\DataText|\Vnetby\Schemaorg\DataTypes\DataURL $value
     * @return static
     */
    function setFeesAndCommissionsSpecification($value)
    {
        return $this->setProp('feesAndCommissionsSpecification', $value);
    }

    /**
     * Description of fees, commissions, and other terms applied either to a class of financial product, or by a financial service organization.
     * @return string|\Vnetby\Schemaorg\DataTypes\DataText|\Vnetby\Schemaorg\DataTypes\DataURL|null
     */
    function getFeesAndCommissionsSpecification()
    {
        return $this->getProp('feesAndCommissionsSpecification');
    }
}
