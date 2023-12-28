<?php

/**
* @see https://schema.org/EducationEvent
 * Event type: Education event.
*/

namespace Vnetby\Schemaorg\Types\Thing\Event;

class EducationEvent extends \Vnetby\Schemaorg\Types\Thing\Event\Event
{
   const TYPE = 'EducationEvent';

   /**
     * The item being described is intended to help a person learn the competency or learning outcome defined by the referenced term.
    * @var \Vnetby\Schemaorg\DataTypes\DataText|\Vnetby\Schemaorg\Types\Thing\Intangible\DefinedTerm\DefinedTerm
    */
   protected $prop_teaches;

   /**
     * The item being described is intended to assess the competency or learning outcome defined by the referenced term.
    * @var \Vnetby\Schemaorg\DataTypes\DataText|\Vnetby\Schemaorg\Types\Thing\Intangible\DefinedTerm\DefinedTerm
    */
   protected $prop_assesses;

   /**
     * The level in terms of progression through an educational or training context. Examples of educational levels include 'beginner', 'intermediate' or 'advanced',
     * and formal sets of level indicators.
    * @var \Vnetby\Schemaorg\DataTypes\DataURL|\Vnetby\Schemaorg\DataTypes\DataText|\Vnetby\Schemaorg\Types\Thing\Intangible\DefinedTerm\DefinedTerm
    */
   protected $prop_educationalLevel;

   /**
     * The item being described is intended to help a person learn the competency or learning outcome defined by the referenced term.
    * @param \Vnetby\Schemaorg\DataTypes\DataText|\Vnetby\Schemaorg\Types\Thing\Intangible\DefinedTerm\DefinedTerm $value
    * @return static
    */
   function setTeaches($value)
   {
       return $this->setProp('teaches', $value);
   }

   /**
     * The item being described is intended to assess the competency or learning outcome defined by the referenced term.
    * @param \Vnetby\Schemaorg\DataTypes\DataText|\Vnetby\Schemaorg\Types\Thing\Intangible\DefinedTerm\DefinedTerm $value
    * @return static
    */
   function setAssesses($value)
   {
       return $this->setProp('assesses', $value);
   }

   /**
     * The level in terms of progression through an educational or training context. Examples of educational levels include 'beginner', 'intermediate' or 'advanced',
     * and formal sets of level indicators.
    * @param \Vnetby\Schemaorg\DataTypes\DataURL|\Vnetby\Schemaorg\DataTypes\DataText|\Vnetby\Schemaorg\Types\Thing\Intangible\DefinedTerm\DefinedTerm $value
    * @return static
    */
   function setEducationalLevel($value)
   {
       return $this->setProp('educationalLevel', $value);
   }

   /**
     * The item being described is intended to help a person learn the competency or learning outcome defined by the referenced term.
    * @return \Vnetby\Schemaorg\DataTypes\DataText|\Vnetby\Schemaorg\Types\Thing\Intangible\DefinedTerm\DefinedTerm|null
    */
   function getTeaches()
   {
       return $this->getProp('teaches');
   }

   /**
     * The item being described is intended to assess the competency or learning outcome defined by the referenced term.
    * @return \Vnetby\Schemaorg\DataTypes\DataText|\Vnetby\Schemaorg\Types\Thing\Intangible\DefinedTerm\DefinedTerm|null
    */
   function getAssesses()
   {
       return $this->getProp('assesses');
   }

   /**
     * The level in terms of progression through an educational or training context. Examples of educational levels include 'beginner', 'intermediate' or 'advanced',
     * and formal sets of level indicators.
    * @return \Vnetby\Schemaorg\DataTypes\DataURL|\Vnetby\Schemaorg\DataTypes\DataText|\Vnetby\Schemaorg\Types\Thing\Intangible\DefinedTerm\DefinedTerm|null
    */
   function getEducationalLevel()
   {
       return $this->getProp('educationalLevel');
   }
}
