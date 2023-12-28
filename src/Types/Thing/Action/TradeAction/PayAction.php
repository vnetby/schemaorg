<?php

/**
* @see https://schema.org/PayAction
 * An agent pays a price to a participant.
*/

namespace Vnetby\Schemaorg\Types\Thing\Action\TradeAction;

class PayAction extends \Vnetby\Schemaorg\Types\Thing\Action\TradeAction\TradeAction
{
   const TYPE = 'PayAction';

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
