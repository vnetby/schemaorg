<?php

/**
* @see https://schema.org/DonateAction
 * The act of providing goods, services, or money without compensation, often for philanthropic reasons.
*/

namespace Vnetby\Schemaorg\Types\Thing\Action\TradeAction;

class DonateAction extends \Vnetby\Schemaorg\Types\Thing\Action\TradeAction\TradeAction
{
   const TYPE = 'DonateAction';

   /**
     * A sub property of participant. The participant who is at the receiving end of the action.
    * @var \Vnetby\Schemaorg\Types\Thing\Person\Person|\Vnetby\Schemaorg\Types\Thing\Intangible\StructuredValue\ContactPoint\ContactPoint|\Vnetby\Schemaorg\Types\Thing\Organization\Organization|\Vnetby\Schemaorg\Types\Thing\Intangible\Audience\Audience
    */
   protected $prop_recipient;

   /**
     * A sub property of participant. The participant who is at the receiving end of the action.
    * @param \Vnetby\Schemaorg\Types\Thing\Person\Person|\Vnetby\Schemaorg\Types\Thing\Intangible\StructuredValue\ContactPoint\ContactPoint|\Vnetby\Schemaorg\Types\Thing\Organization\Organization|\Vnetby\Schemaorg\Types\Thing\Intangible\Audience\Audience $value
    * @return static
    */
   function setRecipient($value)
   {
       return $this->setProp('recipient', $value);
   }

   /**
     * A sub property of participant. The participant who is at the receiving end of the action.
    * @return \Vnetby\Schemaorg\Types\Thing\Person\Person|\Vnetby\Schemaorg\Types\Thing\Intangible\StructuredValue\ContactPoint\ContactPoint|\Vnetby\Schemaorg\Types\Thing\Organization\Organization|\Vnetby\Schemaorg\Types\Thing\Intangible\Audience\Audience|null
    */
   function getRecipient()
   {
       return $this->getProp('recipient');
   }
}
