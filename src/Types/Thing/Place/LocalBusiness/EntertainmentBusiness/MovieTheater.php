<?php

/**
* @see https://schema.org/MovieTheater
 * A movie theater.
*/

namespace Vnetby\Schemaorg\Types\Thing\Place\LocalBusiness\EntertainmentBusiness;

class MovieTheater extends \Vnetby\Schemaorg\Types\Thing\Place\LocalBusiness\EntertainmentBusiness\EntertainmentBusiness
{
   const TYPE = 'MovieTheater';

   /**
     * The number of screens in the movie theater.
    * @var \Vnetby\Schemaorg\DataTypes\DataNumber
    */
   protected $prop_screenCount;

   /**
     * The number of screens in the movie theater.
    * @param \Vnetby\Schemaorg\DataTypes\DataNumber $value
    * @return static
    */
   function setScreenCount($value)
   {
       return $this->setProp('screenCount', $value);
   }

   /**
     * The number of screens in the movie theater.
    * @return \Vnetby\Schemaorg\DataTypes\DataNumber|null
    */
   function getScreenCount()
   {
       return $this->getProp('screenCount');
   }
}
