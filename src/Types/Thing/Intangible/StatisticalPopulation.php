<?php

/**
* @see https://schema.org/StatisticalPopulation
 * A StatisticalPopulation is a set of instances of a certain given type that satisfy some set of constraints. The property [[populationType]]
 * is used to specify the type. Any property that can be used on instances of that type can appear on the
 * statistical population. For example, a [[StatisticalPopulation]] representing all [[Person]]s with a [[homeLocation]] of East Podunk California would be described by applying
 * the appropriate [[homeLocation]] and [[populationType]] properties to a [[StatisticalPopulation]] item that stands for that set of people. The properties [[numConstraints]] and
 * [[constraintProperty]] are used to specify which of the populations properties are used to specify the population. Note that the sense of
 * "population" used here is the general sense of a statistical population, and does not imply that the population consists of people.
 * For example, a [[populationType]] of [[Event]] or [[NewsArticle]] could be used. See also [[Observation]], where a [[populationType]] such as [[Person]] or
 * [[Event]] can be indicated directly. In most cases it may be better to use [[StatisticalVariable]] instead of [[StatisticalPopulation]].
*/

namespace Vnetby\Schemaorg\Types\Thing\Intangible;

class StatisticalPopulation extends \Vnetby\Schemaorg\Types\Thing\Intangible\Intangible
{
   const TYPE = 'StatisticalPopulation';

   /**
     * Indicates the populationType common to all members of a [[StatisticalPopulation]] or all cases within the scope of a [[StatisticalVariable]].
    * @var \Vnetby\Schemaorg\Types\Thing\Intangible\Class
    */
   protected $prop_populationType;

   /**
     * Indicates the populationType common to all members of a [[StatisticalPopulation]] or all cases within the scope of a [[StatisticalVariable]].
    * @param \Vnetby\Schemaorg\Types\Thing\Intangible\Class $value
    * @return static
    */
   function setPopulationType($value)
   {
       return $this->setProp('populationType', $value);
   }

   /**
     * Indicates the populationType common to all members of a [[StatisticalPopulation]] or all cases within the scope of a [[StatisticalVariable]].
    * @return \Vnetby\Schemaorg\Types\Thing\Intangible\Class|null
    */
   function getPopulationType()
   {
       return $this->getProp('populationType');
   }
}
