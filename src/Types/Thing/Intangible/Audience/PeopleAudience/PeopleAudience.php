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
     * Audiences defined by a person's maximum age.
     * @var string|int|\Vnetby\Schemaorg\DataTypes\DataInteger
     */
    public $requiredMaxAge;

    /**
     * A suggested range of body measurements for the intended audience or person, for example inseam between 32 and 34 inches or
     * height between 170 and 190 cm. Typically found on a size chart for wearable products.
     * @var \Vnetby\Schemaorg\Types\Thing\Intangible\StructuredValue\QuantitativeValue\QuantitativeValue
     */
    public $suggestedMeasurement;

    /**
     * Audiences defined by a person's minimum age.
     * @var string|int|\Vnetby\Schemaorg\DataTypes\DataInteger
     */
    public $requiredMinAge;

    /**
     * Maximum recommended age in years for the audience or user.
     * @var string|int|float|\Vnetby\Schemaorg\DataTypes\DataNumber
     */
    public $suggestedMaxAge;

    /**
     * Audiences defined by a person's gender.
     * @var string|\Vnetby\Schemaorg\DataTypes\DataText
     */
    public $requiredGender;

    /**
     * Specifying the health condition(s) of a patient, medical study, or other target audience.
     * @var \Vnetby\Schemaorg\Types\Thing\MedicalEntity\MedicalCondition\MedicalCondition
     */
    public $healthCondition;

    /**
     * Minimum recommended age in years for the audience or user.
     * @var string|int|float|\Vnetby\Schemaorg\DataTypes\DataNumber
     */
    public $suggestedMinAge;

    /**
     * The age or age range for the intended audience or person, for example 3-12 months for infants, 1-5 years for toddlers.
     * @var \Vnetby\Schemaorg\Types\Thing\Intangible\StructuredValue\QuantitativeValue\QuantitativeValue
     */
    public $suggestedAge;

    /**
     * The suggested gender of the intended person or audience, for example "male", "female", or "unisex".
     * @var string|\Vnetby\Schemaorg\DataTypes\DataText|\Vnetby\Schemaorg\Types\Thing\Intangible\Enumeration\GenderType\GenderType
     */
    public $suggestedGender;

    /**
     * Audiences defined by a person's maximum age.
     * @param string|int|\Vnetby\Schemaorg\DataTypes\DataInteger $value
     * @return static
     */
    function setRequiredMaxAge($value)
    {
        return $this->setProp('requiredMaxAge', $value);
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
     * Audiences defined by a person's minimum age.
     * @param string|int|\Vnetby\Schemaorg\DataTypes\DataInteger $value
     * @return static
     */
    function setRequiredMinAge($value)
    {
        return $this->setProp('requiredMinAge', $value);
    }

    /**
     * Maximum recommended age in years for the audience or user.
     * @param string|int|float|\Vnetby\Schemaorg\DataTypes\DataNumber $value
     * @return static
     */
    function setSuggestedMaxAge($value)
    {
        return $this->setProp('suggestedMaxAge', $value);
    }

    /**
     * Audiences defined by a person's gender.
     * @param string|\Vnetby\Schemaorg\DataTypes\DataText $value
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
     * Minimum recommended age in years for the audience or user.
     * @param string|int|float|\Vnetby\Schemaorg\DataTypes\DataNumber $value
     * @return static
     */
    function setSuggestedMinAge($value)
    {
        return $this->setProp('suggestedMinAge', $value);
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
     * The suggested gender of the intended person or audience, for example "male", "female", or "unisex".
     * @param string|\Vnetby\Schemaorg\DataTypes\DataText|\Vnetby\Schemaorg\Types\Thing\Intangible\Enumeration\GenderType\GenderType $value
     * @return static
     */
    function setSuggestedGender($value)
    {
        return $this->setProp('suggestedGender', $value);
    }

    /**
     * Audiences defined by a person's maximum age.
     * @return string|int|\Vnetby\Schemaorg\DataTypes\DataInteger|null
     */
    function getRequiredMaxAge()
    {
        return $this->getProp('requiredMaxAge');
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
     * Audiences defined by a person's minimum age.
     * @return string|int|\Vnetby\Schemaorg\DataTypes\DataInteger|null
     */
    function getRequiredMinAge()
    {
        return $this->getProp('requiredMinAge');
    }

    /**
     * Maximum recommended age in years for the audience or user.
     * @return string|int|float|\Vnetby\Schemaorg\DataTypes\DataNumber|null
     */
    function getSuggestedMaxAge()
    {
        return $this->getProp('suggestedMaxAge');
    }

    /**
     * Audiences defined by a person's gender.
     * @return string|\Vnetby\Schemaorg\DataTypes\DataText|null
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
     * Minimum recommended age in years for the audience or user.
     * @return string|int|float|\Vnetby\Schemaorg\DataTypes\DataNumber|null
     */
    function getSuggestedMinAge()
    {
        return $this->getProp('suggestedMinAge');
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
     * The suggested gender of the intended person or audience, for example "male", "female", or "unisex".
     * @return string|\Vnetby\Schemaorg\DataTypes\DataText|\Vnetby\Schemaorg\Types\Thing\Intangible\Enumeration\GenderType\GenderType|null
     */
    function getSuggestedGender()
    {
        return $this->getProp('suggestedGender');
    }
}
