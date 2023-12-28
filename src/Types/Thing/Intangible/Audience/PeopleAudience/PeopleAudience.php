<?php

/**
* @see https://schema.org/PeopleAudience
 * A set of characteristics belonging to people, e.g. who compose an item's target audience.
*/

namespace Vnetby\Schemaorg\Types\Thing\Intangible\Audience\PeopleAudience;

class PeopleAudience extends \Vnetby\Schemaorg\Types\Thing\Intangible\Audience\Audience
{
   const TYPE = 'PeopleAudience';

   /**
     * Maximum recommended age in years for the audience or user.
    * @var \Vnetby\Schemaorg\DataTypes\DataNumber
    */
   protected $prop_suggestedMaxAge;

   /**
     * Audiences defined by a person's minimum age.
    * @var \Vnetby\Schemaorg\DataTypes\DataInteger
    */
   protected $prop_requiredMinAge;

   /**
     * Audiences defined by a person's gender.
    * @var \Vnetby\Schemaorg\DataTypes\DataText
    */
   protected $prop_requiredGender;

   /**
     * Specifying the health condition(s) of a patient, medical study, or other target audience.
    * @var \Vnetby\Schemaorg\Types\Thing\MedicalEntity\MedicalCondition\MedicalCondition
    */
   protected $prop_healthCondition;

   /**
     * A suggested range of body measurements for the intended audience or person, for example inseam between 32 and 34 inches or
     * height between 170 and 190 cm. Typically found on a size chart for wearable products.
    * @var \Vnetby\Schemaorg\Types\Thing\Intangible\StructuredValue\QuantitativeValue\QuantitativeValue
    */
   protected $prop_suggestedMeasurement;

   /**
     * Minimum recommended age in years for the audience or user.
    * @var \Vnetby\Schemaorg\DataTypes\DataNumber
    */
   protected $prop_suggestedMinAge;

   /**
     * The suggested gender of the intended person or audience, for example "male", "female", or "unisex".
    * @var \Vnetby\Schemaorg\Types\Thing\Intangible\Enumeration\GenderType\GenderType|\Vnetby\Schemaorg\DataTypes\DataText
    */
   protected $prop_suggestedGender;

   /**
     * The age or age range for the intended audience or person, for example 3-12 months for infants, 1-5 years for toddlers.
    * @var \Vnetby\Schemaorg\Types\Thing\Intangible\StructuredValue\QuantitativeValue\QuantitativeValue
    */
   protected $prop_suggestedAge;

   /**
     * Audiences defined by a person's maximum age.
    * @var \Vnetby\Schemaorg\DataTypes\DataInteger
    */
   protected $prop_requiredMaxAge;

   /**
     * Maximum recommended age in years for the audience or user.
    * @param \Vnetby\Schemaorg\DataTypes\DataNumber $value
    * @return static
    */
   function setSuggestedMaxAge($value)
   {
       return $this->setProp('suggestedMaxAge', $value);
   }

   /**
     * Audiences defined by a person's minimum age.
    * @param \Vnetby\Schemaorg\DataTypes\DataInteger $value
    * @return static
    */
   function setRequiredMinAge($value)
   {
       return $this->setProp('requiredMinAge', $value);
   }

   /**
     * Audiences defined by a person's gender.
    * @param \Vnetby\Schemaorg\DataTypes\DataText $value
    * @return static
    */
   function setRequiredGender($value)
   {
       return $this->setProp('requiredGender', $value);
   }

   /**
     * Specifying the health condition(s) of a patient, medical study, or other target audience.
    * @param \Vnetby\Schemaorg\Types\Thing\MedicalEntity\MedicalCondition\MedicalCondition $value
    * @return static
    */
   function setHealthCondition($value)
   {
       return $this->setProp('healthCondition', $value);
   }

   /**
     * A suggested range of body measurements for the intended audience or person, for example inseam between 32 and 34 inches or
     * height between 170 and 190 cm. Typically found on a size chart for wearable products.
    * @param \Vnetby\Schemaorg\Types\Thing\Intangible\StructuredValue\QuantitativeValue\QuantitativeValue $value
    * @return static
    */
   function setSuggestedMeasurement($value)
   {
       return $this->setProp('suggestedMeasurement', $value);
   }

   /**
     * Minimum recommended age in years for the audience or user.
    * @param \Vnetby\Schemaorg\DataTypes\DataNumber $value
    * @return static
    */
   function setSuggestedMinAge($value)
   {
       return $this->setProp('suggestedMinAge', $value);
   }

   /**
     * The suggested gender of the intended person or audience, for example "male", "female", or "unisex".
    * @param \Vnetby\Schemaorg\Types\Thing\Intangible\Enumeration\GenderType\GenderType|\Vnetby\Schemaorg\DataTypes\DataText $value
    * @return static
    */
   function setSuggestedGender($value)
   {
       return $this->setProp('suggestedGender', $value);
   }

   /**
     * The age or age range for the intended audience or person, for example 3-12 months for infants, 1-5 years for toddlers.
    * @param \Vnetby\Schemaorg\Types\Thing\Intangible\StructuredValue\QuantitativeValue\QuantitativeValue $value
    * @return static
    */
   function setSuggestedAge($value)
   {
       return $this->setProp('suggestedAge', $value);
   }

   /**
     * Audiences defined by a person's maximum age.
    * @param \Vnetby\Schemaorg\DataTypes\DataInteger $value
    * @return static
    */
   function setRequiredMaxAge($value)
   {
       return $this->setProp('requiredMaxAge', $value);
   }

   /**
     * Maximum recommended age in years for the audience or user.
    * @return \Vnetby\Schemaorg\DataTypes\DataNumber|null
    */
   function getSuggestedMaxAge()
   {
       return $this->getProp('suggestedMaxAge');
   }

   /**
     * Audiences defined by a person's minimum age.
    * @return \Vnetby\Schemaorg\DataTypes\DataInteger|null
    */
   function getRequiredMinAge()
   {
       return $this->getProp('requiredMinAge');
   }

   /**
     * Audiences defined by a person's gender.
    * @return \Vnetby\Schemaorg\DataTypes\DataText|null
    */
   function getRequiredGender()
   {
       return $this->getProp('requiredGender');
   }

   /**
     * Specifying the health condition(s) of a patient, medical study, or other target audience.
    * @return \Vnetby\Schemaorg\Types\Thing\MedicalEntity\MedicalCondition\MedicalCondition|null
    */
   function getHealthCondition()
   {
       return $this->getProp('healthCondition');
   }

   /**
     * A suggested range of body measurements for the intended audience or person, for example inseam between 32 and 34 inches or
     * height between 170 and 190 cm. Typically found on a size chart for wearable products.
    * @return \Vnetby\Schemaorg\Types\Thing\Intangible\StructuredValue\QuantitativeValue\QuantitativeValue|null
    */
   function getSuggestedMeasurement()
   {
       return $this->getProp('suggestedMeasurement');
   }

   /**
     * Minimum recommended age in years for the audience or user.
    * @return \Vnetby\Schemaorg\DataTypes\DataNumber|null
    */
   function getSuggestedMinAge()
   {
       return $this->getProp('suggestedMinAge');
   }

   /**
     * The suggested gender of the intended person or audience, for example "male", "female", or "unisex".
    * @return \Vnetby\Schemaorg\Types\Thing\Intangible\Enumeration\GenderType\GenderType|\Vnetby\Schemaorg\DataTypes\DataText|null
    */
   function getSuggestedGender()
   {
       return $this->getProp('suggestedGender');
   }

   /**
     * The age or age range for the intended audience or person, for example 3-12 months for infants, 1-5 years for toddlers.
    * @return \Vnetby\Schemaorg\Types\Thing\Intangible\StructuredValue\QuantitativeValue\QuantitativeValue|null
    */
   function getSuggestedAge()
   {
       return $this->getProp('suggestedAge');
   }

   /**
     * Audiences defined by a person's maximum age.
    * @return \Vnetby\Schemaorg\DataTypes\DataInteger|null
    */
   function getRequiredMaxAge()
   {
       return $this->getProp('requiredMaxAge');
   }
}
