<?php

/**
* @see https://schema.org/WorkBasedProgram
 * A program with both an educational and employment component. Typically based at a workplace and structured around work-based learning, with the
 * aim of instilling competencies related to an occupation. WorkBasedProgram is used to distinguish programs such as apprenticeships from school, college or
 * other classroom based educational programs.
*/

namespace Vnetby\Schemaorg\Types\Thing\Intangible\EducationalOccupationalProgram;

class WorkBasedProgram extends \Vnetby\Schemaorg\Types\Thing\Intangible\EducationalOccupationalProgram\EducationalOccupationalProgram
{
   const TYPE = 'WorkBasedProgram';

   /**
     * A category describing the job, preferably using a term from a taxonomy such as [BLS O*NET-SOC](http://www.onetcenter.org/taxonomy.html), [ISCO-08](https://www.ilo.org/public/english/bureau/stat/isco/isco08/) or similar, with the
     * property repeated for each applicable value. Ideally the taxonomy should be identified, and both the textual label and formal code for
     * the category should be provided.\n Note: for historical reasons, any textual label and formal code provided as a literal may be
     * assumed to be from O*NET-SOC.
    * @var \Vnetby\Schemaorg\Types\Thing\Intangible\DefinedTerm\CategoryCode\CategoryCode|\Vnetby\Schemaorg\DataTypes\DataText
    */
   protected $prop_occupationalCategory;

   /**
     * The estimated salary earned while in the program.
    * @var \Vnetby\Schemaorg\Types\Thing\Intangible\StructuredValue\QuantitativeValueDistribution\MonetaryAmountDistribution
    */
   protected $prop_trainingSalary;

   /**
     * A category describing the job, preferably using a term from a taxonomy such as [BLS O*NET-SOC](http://www.onetcenter.org/taxonomy.html), [ISCO-08](https://www.ilo.org/public/english/bureau/stat/isco/isco08/) or similar, with the
     * property repeated for each applicable value. Ideally the taxonomy should be identified, and both the textual label and formal code for
     * the category should be provided.\n Note: for historical reasons, any textual label and formal code provided as a literal may be
     * assumed to be from O*NET-SOC.
    * @param \Vnetby\Schemaorg\Types\Thing\Intangible\DefinedTerm\CategoryCode\CategoryCode|\Vnetby\Schemaorg\DataTypes\DataText $value
    * @return static
    */
   function setOccupationalCategory($value)
   {
       return $this->setProp('occupationalCategory', $value);
   }

   /**
     * The estimated salary earned while in the program.
    * @param \Vnetby\Schemaorg\Types\Thing\Intangible\StructuredValue\QuantitativeValueDistribution\MonetaryAmountDistribution $value
    * @return static
    */
   function setTrainingSalary($value)
   {
       return $this->setProp('trainingSalary', $value);
   }

   /**
     * A category describing the job, preferably using a term from a taxonomy such as [BLS O*NET-SOC](http://www.onetcenter.org/taxonomy.html), [ISCO-08](https://www.ilo.org/public/english/bureau/stat/isco/isco08/) or similar, with the
     * property repeated for each applicable value. Ideally the taxonomy should be identified, and both the textual label and formal code for
     * the category should be provided.\n Note: for historical reasons, any textual label and formal code provided as a literal may be
     * assumed to be from O*NET-SOC.
    * @return \Vnetby\Schemaorg\Types\Thing\Intangible\DefinedTerm\CategoryCode\CategoryCode|\Vnetby\Schemaorg\DataTypes\DataText|null
    */
   function getOccupationalCategory()
   {
       return $this->getProp('occupationalCategory');
   }

   /**
     * The estimated salary earned while in the program.
    * @return \Vnetby\Schemaorg\Types\Thing\Intangible\StructuredValue\QuantitativeValueDistribution\MonetaryAmountDistribution|null
    */
   function getTrainingSalary()
   {
       return $this->getProp('trainingSalary');
   }
}
