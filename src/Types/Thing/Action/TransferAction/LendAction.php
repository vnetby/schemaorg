<?php

/**
* @see https://schema.org/LendAction
 * The act of providing an object under an agreement that it will be returned at a later date. Reciprocal of BorrowAction.\n\nRelated
 * actions:\n\n* [[BorrowAction]]: Reciprocal of LendAction.
*/

namespace Vnetby\Schemaorg\Types\Thing\Action\TransferAction;

class LendAction extends \Vnetby\Schemaorg\Types\Thing\Action\TransferAction\TransferAction
{
   const TYPE = 'LendAction';

   /**
     * A sub property of participant. The person that borrows the object being lent.
    * @var \Vnetby\Schemaorg\Types\Thing\Person\Person
    */
   protected $prop_borrower;

   /**
     * A sub property of participant. The person that borrows the object being lent.
    * @param \Vnetby\Schemaorg\Types\Thing\Person\Person $value
    * @return static
    */
   function setBorrower($value)
   {
       return $this->setProp('borrower', $value);
   }

   /**
     * A sub property of participant. The person that borrows the object being lent.
    * @return \Vnetby\Schemaorg\Types\Thing\Person\Person|null
    */
   function getBorrower()
   {
       return $this->getProp('borrower');
   }
}
