<?php

/**
* @see https://schema.org/PerformAction
 * The act of participating in performance arts.
*/

namespace Vnetby\Schemaorg\Types\Thing\Action\PlayAction;

class PerformAction extends \Vnetby\Schemaorg\Types\Thing\Action\PlayAction\PlayAction
{
   const TYPE = 'PerformAction';

   /**
     * A sub property of location. The entertainment business where the action occurred.
    * @var \Vnetby\Schemaorg\Types\Thing\Organization\LocalBusiness\EntertainmentBusiness\EntertainmentBusiness
    */
   protected $prop_entertainmentBusiness;

   /**
     * A sub property of location. The entertainment business where the action occurred.
    * @param \Vnetby\Schemaorg\Types\Thing\Organization\LocalBusiness\EntertainmentBusiness\EntertainmentBusiness $value
    * @return static
    */
   function setEntertainmentBusiness($value)
   {
       return $this->setProp('entertainmentBusiness', $value);
   }

   /**
     * A sub property of location. The entertainment business where the action occurred.
    * @return \Vnetby\Schemaorg\Types\Thing\Organization\LocalBusiness\EntertainmentBusiness\EntertainmentBusiness|null
    */
   function getEntertainmentBusiness()
   {
       return $this->getProp('entertainmentBusiness');
   }
}
