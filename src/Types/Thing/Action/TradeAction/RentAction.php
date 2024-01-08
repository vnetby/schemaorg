<?php

/**
 * @see https://schema.org/RentAction
 * The act of giving money in return for temporary use, but not ownership, of an object such as a vehicle or
 * property. For example, an agent rents a property from a landlord in exchange for a periodic payment.
 */

namespace Vnetby\Schemaorg\Types\Thing\Action\TradeAction;

class RentAction extends \Vnetby\Schemaorg\Types\Thing\Action\TradeAction\TradeAction
{
    const TYPE = 'RentAction';

    /**
     * A sub property of participant. The owner of the real estate property.
     * @var \Vnetby\Schemaorg\Types\Thing\Organization\Organization|\Vnetby\Schemaorg\Types\Thing\Person\Person
     */
    public $landlord;

    /**
     * A sub property of participant. The real estate agent involved in the action.
     * @var \Vnetby\Schemaorg\Types\Thing\Organization\LocalBusiness\RealEstateAgent
     */
    public $realEstateAgent;

    /**
     * A sub property of participant. The owner of the real estate property.
     * @param \Vnetby\Schemaorg\Types\Thing\Organization\Organization|\Vnetby\Schemaorg\Types\Thing\Person\Person $value
     * @return static
     */
    function setLandlord($value)
    {
        return $this->setProp('landlord', $value);
    }

    /**
     * A sub property of participant. The real estate agent involved in the action.
     * @param \Vnetby\Schemaorg\Types\Thing\Organization\LocalBusiness\RealEstateAgent $value
     * @return static
     */
    function setRealEstateAgent($value)
    {
        return $this->setProp('realEstateAgent', $value);
    }

    /**
     * A sub property of participant. The owner of the real estate property.
     * @return \Vnetby\Schemaorg\Types\Thing\Organization\Organization|\Vnetby\Schemaorg\Types\Thing\Person\Person|null
     */
    function getLandlord()
    {
        return $this->getProp('landlord');
    }

    /**
     * A sub property of participant. The real estate agent involved in the action.
     * @return \Vnetby\Schemaorg\Types\Thing\Organization\LocalBusiness\RealEstateAgent|null
     */
    function getRealEstateAgent()
    {
        return $this->getProp('realEstateAgent');
    }
}
