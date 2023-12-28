<?php

/**
* @see https://schema.org/ExerciseAction
 * The act of participating in exertive activity for the purposes of improving health and fitness.
*/

namespace Vnetby\Schemaorg\Types\Thing\Action\PlayAction;

class ExerciseAction extends \Vnetby\Schemaorg\Types\Thing\Action\PlayAction\PlayAction
{
   const TYPE = 'ExerciseAction';

   /**
     * A sub property of participant. The sports team that participated on this action.
    * @var \Vnetby\Schemaorg\Types\Thing\Organization\SportsOrganization\SportsTeam
    */
   protected $prop_sportsTeam;

   /**
     * A sub property of location. The final location of the object or the agent after the action.
    * @var \Vnetby\Schemaorg\Types\Thing\Place\Place
    */
   protected $prop_toLocation;

   /**
     * A sub property of participant. The opponent on this action.
    * @var \Vnetby\Schemaorg\Types\Thing\Person\Person
    */
   protected $prop_opponent;

   /**
     * A sub property of location. The sports activity location where this action occurred.
    * @var \Vnetby\Schemaorg\Types\Thing\Organization\LocalBusiness\SportsActivityLocation\SportsActivityLocation
    */
   protected $prop_sportsActivityLocation;

   /**
     * A sub property of location. The original location of the object or the agent before the action.
    * @var \Vnetby\Schemaorg\Types\Thing\Place\Place
    */
   protected $prop_fromLocation;

   /**
     * Type(s) of exercise or activity, such as strength training, flexibility training, aerobics, cardiac rehabilitation, etc.
    * @var \Vnetby\Schemaorg\DataTypes\DataText
    */
   protected $prop_exerciseType;

   /**
     * A sub property of instrument. The diet used in this action.
    * @var \Vnetby\Schemaorg\Types\Thing\MedicalEntity\LifestyleModification\Diet
    */
   protected $prop_exerciseRelatedDiet;

   /**
     * A sub property of location. The course where this action was taken.
    * @var \Vnetby\Schemaorg\Types\Thing\Place\Place
    */
   protected $prop_exerciseCourse;

   /**
     * A sub property of instrument. The exercise plan used on this action.
    * @var \Vnetby\Schemaorg\Types\Thing\MedicalEntity\LifestyleModification\PhysicalActivity\ExercisePlan
    */
   protected $prop_exercisePlan;

   /**
     * The distance travelled, e.g. exercising or travelling.
    * @var \Vnetby\Schemaorg\Types\Thing\Intangible\Quantity\Distance
    */
   protected $prop_distance;

   /**
     * A sub property of instrument. The diet used in this action.
    * @var \Vnetby\Schemaorg\Types\Thing\MedicalEntity\LifestyleModification\Diet
    */
   protected $prop_diet;

   /**
     * A sub property of location. The sports event where this action occurred.
    * @var \Vnetby\Schemaorg\Types\Thing\Event\SportsEvent
    */
   protected $prop_sportsEvent;

   /**
     * A sub property of participant. The sports team that participated on this action.
    * @param \Vnetby\Schemaorg\Types\Thing\Organization\SportsOrganization\SportsTeam $value
    * @return static
    */
   function setSportsTeam($value)
   {
       return $this->setProp('sportsTeam', $value);
   }

   /**
     * A sub property of location. The final location of the object or the agent after the action.
    * @param \Vnetby\Schemaorg\Types\Thing\Place\Place $value
    * @return static
    */
   function setToLocation($value)
   {
       return $this->setProp('toLocation', $value);
   }

   /**
     * A sub property of participant. The opponent on this action.
    * @param \Vnetby\Schemaorg\Types\Thing\Person\Person $value
    * @return static
    */
   function setOpponent($value)
   {
       return $this->setProp('opponent', $value);
   }

   /**
     * A sub property of location. The sports activity location where this action occurred.
    * @param \Vnetby\Schemaorg\Types\Thing\Organization\LocalBusiness\SportsActivityLocation\SportsActivityLocation $value
    * @return static
    */
   function setSportsActivityLocation($value)
   {
       return $this->setProp('sportsActivityLocation', $value);
   }

   /**
     * A sub property of location. The original location of the object or the agent before the action.
    * @param \Vnetby\Schemaorg\Types\Thing\Place\Place $value
    * @return static
    */
   function setFromLocation($value)
   {
       return $this->setProp('fromLocation', $value);
   }

   /**
     * Type(s) of exercise or activity, such as strength training, flexibility training, aerobics, cardiac rehabilitation, etc.
    * @param \Vnetby\Schemaorg\DataTypes\DataText $value
    * @return static
    */
   function setExerciseType($value)
   {
       return $this->setProp('exerciseType', $value);
   }

   /**
     * A sub property of instrument. The diet used in this action.
    * @param \Vnetby\Schemaorg\Types\Thing\MedicalEntity\LifestyleModification\Diet $value
    * @return static
    */
   function setExerciseRelatedDiet($value)
   {
       return $this->setProp('exerciseRelatedDiet', $value);
   }

   /**
     * A sub property of location. The course where this action was taken.
    * @param \Vnetby\Schemaorg\Types\Thing\Place\Place $value
    * @return static
    */
   function setExerciseCourse($value)
   {
       return $this->setProp('exerciseCourse', $value);
   }

   /**
     * A sub property of instrument. The exercise plan used on this action.
    * @param \Vnetby\Schemaorg\Types\Thing\MedicalEntity\LifestyleModification\PhysicalActivity\ExercisePlan $value
    * @return static
    */
   function setExercisePlan($value)
   {
       return $this->setProp('exercisePlan', $value);
   }

   /**
     * The distance travelled, e.g. exercising or travelling.
    * @param \Vnetby\Schemaorg\Types\Thing\Intangible\Quantity\Distance $value
    * @return static
    */
   function setDistance($value)
   {
       return $this->setProp('distance', $value);
   }

   /**
     * A sub property of instrument. The diet used in this action.
    * @param \Vnetby\Schemaorg\Types\Thing\MedicalEntity\LifestyleModification\Diet $value
    * @return static
    */
   function setDiet($value)
   {
       return $this->setProp('diet', $value);
   }

   /**
     * A sub property of location. The sports event where this action occurred.
    * @param \Vnetby\Schemaorg\Types\Thing\Event\SportsEvent $value
    * @return static
    */
   function setSportsEvent($value)
   {
       return $this->setProp('sportsEvent', $value);
   }

   /**
     * A sub property of participant. The sports team that participated on this action.
    * @return \Vnetby\Schemaorg\Types\Thing\Organization\SportsOrganization\SportsTeam|null
    */
   function getSportsTeam()
   {
       return $this->getProp('sportsTeam');
   }

   /**
     * A sub property of location. The final location of the object or the agent after the action.
    * @return \Vnetby\Schemaorg\Types\Thing\Place\Place|null
    */
   function getToLocation()
   {
       return $this->getProp('toLocation');
   }

   /**
     * A sub property of participant. The opponent on this action.
    * @return \Vnetby\Schemaorg\Types\Thing\Person\Person|null
    */
   function getOpponent()
   {
       return $this->getProp('opponent');
   }

   /**
     * A sub property of location. The sports activity location where this action occurred.
    * @return \Vnetby\Schemaorg\Types\Thing\Organization\LocalBusiness\SportsActivityLocation\SportsActivityLocation|null
    */
   function getSportsActivityLocation()
   {
       return $this->getProp('sportsActivityLocation');
   }

   /**
     * A sub property of location. The original location of the object or the agent before the action.
    * @return \Vnetby\Schemaorg\Types\Thing\Place\Place|null
    */
   function getFromLocation()
   {
       return $this->getProp('fromLocation');
   }

   /**
     * Type(s) of exercise or activity, such as strength training, flexibility training, aerobics, cardiac rehabilitation, etc.
    * @return \Vnetby\Schemaorg\DataTypes\DataText|null
    */
   function getExerciseType()
   {
       return $this->getProp('exerciseType');
   }

   /**
     * A sub property of instrument. The diet used in this action.
    * @return \Vnetby\Schemaorg\Types\Thing\MedicalEntity\LifestyleModification\Diet|null
    */
   function getExerciseRelatedDiet()
   {
       return $this->getProp('exerciseRelatedDiet');
   }

   /**
     * A sub property of location. The course where this action was taken.
    * @return \Vnetby\Schemaorg\Types\Thing\Place\Place|null
    */
   function getExerciseCourse()
   {
       return $this->getProp('exerciseCourse');
   }

   /**
     * A sub property of instrument. The exercise plan used on this action.
    * @return \Vnetby\Schemaorg\Types\Thing\MedicalEntity\LifestyleModification\PhysicalActivity\ExercisePlan|null
    */
   function getExercisePlan()
   {
       return $this->getProp('exercisePlan');
   }

   /**
     * The distance travelled, e.g. exercising or travelling.
    * @return \Vnetby\Schemaorg\Types\Thing\Intangible\Quantity\Distance|null
    */
   function getDistance()
   {
       return $this->getProp('distance');
   }

   /**
     * A sub property of instrument. The diet used in this action.
    * @return \Vnetby\Schemaorg\Types\Thing\MedicalEntity\LifestyleModification\Diet|null
    */
   function getDiet()
   {
       return $this->getProp('diet');
   }

   /**
     * A sub property of location. The sports event where this action occurred.
    * @return \Vnetby\Schemaorg\Types\Thing\Event\SportsEvent|null
    */
   function getSportsEvent()
   {
       return $this->getProp('sportsEvent');
   }
}
