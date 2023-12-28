<?php

/**
* @see https://schema.org/ChooseAction
 * The act of expressing a preference from a set of options or a large or unbounded set of choices/options.
*/

namespace Vnetby\Schemaorg\Types\Thing\Action\AssessAction\ChooseAction;

class ChooseAction extends \Vnetby\Schemaorg\Types\Thing\Action\AssessAction\AssessAction
{
   const TYPE = 'ChooseAction';

   /**
     * A sub property of object. The options subject to this action.
    * @var \Vnetby\Schemaorg\Types\Thing\Thing|\Vnetby\Schemaorg\DataTypes\DataText
    */
   protected $prop_actionOption;

   /**
     * A sub property of object. The options subject to this action.
    * @param \Vnetby\Schemaorg\Types\Thing\Thing|\Vnetby\Schemaorg\DataTypes\DataText $value
    * @return static
    */
   function setActionOption($value)
   {
       return $this->setProp('actionOption', $value);
   }

   /**
     * A sub property of object. The options subject to this action.
    * @return \Vnetby\Schemaorg\Types\Thing\Thing|\Vnetby\Schemaorg\DataTypes\DataText|null
    */
   function getActionOption()
   {
       return $this->getProp('actionOption');
   }
}
