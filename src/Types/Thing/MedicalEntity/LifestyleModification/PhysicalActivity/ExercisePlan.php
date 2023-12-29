<?php

/**
 * @see https://schema.org/ExercisePlan
 * Fitness-related activity designed for a specific health-related purpose, including defined exercise routines as well as activity prescribed by a clinician.
 */

namespace Vnetby\Schemaorg\Types\Thing\MedicalEntity\LifestyleModification\PhysicalActivity;

class ExercisePlan extends \Vnetby\Schemaorg\Types\Thing\MedicalEntity\LifestyleModification\PhysicalActivity\PhysicalActivity
{
    const TYPE = 'ExercisePlan';

    /**
     * Quantitative measure of the physiologic output of the exercise; also referred to as energy expenditure.
     * @var \Vnetby\Schemaorg\Types\Thing\Intangible\Quantity\Energy|\Vnetby\Schemaorg\Types\Thing\Intangible\StructuredValue\QuantitativeValue\QuantitativeValue
     */
    public $workload;

    /**
     * Type(s) of exercise or activity, such as strength training, flexibility training, aerobics, cardiac rehabilitation, etc.
     * @var string|\Vnetby\Schemaorg\DataTypes\DataText
     */
    public $exerciseType;

    /**
     * Length of time to engage in the activity.
     * @var \Vnetby\Schemaorg\Types\Thing\Intangible\Quantity\Duration|\Vnetby\Schemaorg\Types\Thing\Intangible\StructuredValue\QuantitativeValue\QuantitativeValue
     */
    public $activityDuration;

    /**
     * Any additional component of the exercise prescription that may need to be articulated to the patient. This may include the order
     * of exercises, the number of repetitions of movement, quantitative distance, progressions over time, etc.
     * @var string|\Vnetby\Schemaorg\DataTypes\DataText
     */
    public $additionalVariable;

    /**
     * Quantitative measure gauging the degree of force involved in the exercise, for example, heartbeats per minute. May include the velocity of
     * the movement.
     * @var string|\Vnetby\Schemaorg\DataTypes\DataText|\Vnetby\Schemaorg\Types\Thing\Intangible\StructuredValue\QuantitativeValue\QuantitativeValue
     */
    public $intensity;

    /**
     * How often one should break from the activity.
     * @var string|\Vnetby\Schemaorg\DataTypes\DataText|\Vnetby\Schemaorg\Types\Thing\Intangible\StructuredValue\QuantitativeValue\QuantitativeValue
     */
    public $restPeriods;

    /**
     * Number of times one should repeat the activity.
     * @var string|int|float|\Vnetby\Schemaorg\DataTypes\DataNumber|\Vnetby\Schemaorg\Types\Thing\Intangible\StructuredValue\QuantitativeValue\QuantitativeValue
     */
    public $repetitions;

    /**
     * How often one should engage in the activity.
     * @var string|\Vnetby\Schemaorg\DataTypes\DataText|\Vnetby\Schemaorg\Types\Thing\Intangible\StructuredValue\QuantitativeValue\QuantitativeValue
     */
    public $activityFrequency;

    /**
     * Quantitative measure of the physiologic output of the exercise; also referred to as energy expenditure.
     * @param \Vnetby\Schemaorg\Types\Thing\Intangible\Quantity\Energy|\Vnetby\Schemaorg\Types\Thing\Intangible\StructuredValue\QuantitativeValue\QuantitativeValue $value
     * @return static
     */
    function setWorkload($value)
    {
        return $this->setProp('workload', $value);
    }

    /**
     * Type(s) of exercise or activity, such as strength training, flexibility training, aerobics, cardiac rehabilitation, etc.
     * @param string|\Vnetby\Schemaorg\DataTypes\DataText $value
     * @return static
     */
    function setExerciseType($value)
    {
        return $this->setProp('exerciseType', $value);
    }

    /**
     * Length of time to engage in the activity.
     * @param \Vnetby\Schemaorg\Types\Thing\Intangible\Quantity\Duration|\Vnetby\Schemaorg\Types\Thing\Intangible\StructuredValue\QuantitativeValue\QuantitativeValue $value
     * @return static
     */
    function setActivityDuration($value)
    {
        return $this->setProp('activityDuration', $value);
    }

    /**
     * Any additional component of the exercise prescription that may need to be articulated to the patient. This may include the order
     * of exercises, the number of repetitions of movement, quantitative distance, progressions over time, etc.
     * @param string|\Vnetby\Schemaorg\DataTypes\DataText $value
     * @return static
     */
    function setAdditionalVariable($value)
    {
        return $this->setProp('additionalVariable', $value);
    }

    /**
     * Quantitative measure gauging the degree of force involved in the exercise, for example, heartbeats per minute. May include the velocity of
     * the movement.
     * @param string|\Vnetby\Schemaorg\DataTypes\DataText|\Vnetby\Schemaorg\Types\Thing\Intangible\StructuredValue\QuantitativeValue\QuantitativeValue $value
     * @return static
     */
    function setIntensity($value)
    {
        return $this->setProp('intensity', $value);
    }

    /**
     * How often one should break from the activity.
     * @param string|\Vnetby\Schemaorg\DataTypes\DataText|\Vnetby\Schemaorg\Types\Thing\Intangible\StructuredValue\QuantitativeValue\QuantitativeValue $value
     * @return static
     */
    function setRestPeriods($value)
    {
        return $this->setProp('restPeriods', $value);
    }

    /**
     * Number of times one should repeat the activity.
     * @param string|int|float|\Vnetby\Schemaorg\DataTypes\DataNumber|\Vnetby\Schemaorg\Types\Thing\Intangible\StructuredValue\QuantitativeValue\QuantitativeValue $value
     * @return static
     */
    function setRepetitions($value)
    {
        return $this->setProp('repetitions', $value);
    }

    /**
     * How often one should engage in the activity.
     * @param string|\Vnetby\Schemaorg\DataTypes\DataText|\Vnetby\Schemaorg\Types\Thing\Intangible\StructuredValue\QuantitativeValue\QuantitativeValue $value
     * @return static
     */
    function setActivityFrequency($value)
    {
        return $this->setProp('activityFrequency', $value);
    }

    /**
     * Quantitative measure of the physiologic output of the exercise; also referred to as energy expenditure.
     * @return \Vnetby\Schemaorg\Types\Thing\Intangible\Quantity\Energy|\Vnetby\Schemaorg\Types\Thing\Intangible\StructuredValue\QuantitativeValue\QuantitativeValue|null
     */
    function getWorkload()
    {
        return $this->getProp('workload');
    }

    /**
     * Type(s) of exercise or activity, such as strength training, flexibility training, aerobics, cardiac rehabilitation, etc.
     * @return string|\Vnetby\Schemaorg\DataTypes\DataText|null
     */
    function getExerciseType()
    {
        return $this->getProp('exerciseType');
    }

    /**
     * Length of time to engage in the activity.
     * @return \Vnetby\Schemaorg\Types\Thing\Intangible\Quantity\Duration|\Vnetby\Schemaorg\Types\Thing\Intangible\StructuredValue\QuantitativeValue\QuantitativeValue|null
     */
    function getActivityDuration()
    {
        return $this->getProp('activityDuration');
    }

    /**
     * Any additional component of the exercise prescription that may need to be articulated to the patient. This may include the order
     * of exercises, the number of repetitions of movement, quantitative distance, progressions over time, etc.
     * @return string|\Vnetby\Schemaorg\DataTypes\DataText|null
     */
    function getAdditionalVariable()
    {
        return $this->getProp('additionalVariable');
    }

    /**
     * Quantitative measure gauging the degree of force involved in the exercise, for example, heartbeats per minute. May include the velocity of
     * the movement.
     * @return string|\Vnetby\Schemaorg\DataTypes\DataText|\Vnetby\Schemaorg\Types\Thing\Intangible\StructuredValue\QuantitativeValue\QuantitativeValue|null
     */
    function getIntensity()
    {
        return $this->getProp('intensity');
    }

    /**
     * How often one should break from the activity.
     * @return string|\Vnetby\Schemaorg\DataTypes\DataText|\Vnetby\Schemaorg\Types\Thing\Intangible\StructuredValue\QuantitativeValue\QuantitativeValue|null
     */
    function getRestPeriods()
    {
        return $this->getProp('restPeriods');
    }

    /**
     * Number of times one should repeat the activity.
     * @return string|int|float|\Vnetby\Schemaorg\DataTypes\DataNumber|\Vnetby\Schemaorg\Types\Thing\Intangible\StructuredValue\QuantitativeValue\QuantitativeValue|null
     */
    function getRepetitions()
    {
        return $this->getProp('repetitions');
    }

    /**
     * How often one should engage in the activity.
     * @return string|\Vnetby\Schemaorg\DataTypes\DataText|\Vnetby\Schemaorg\Types\Thing\Intangible\StructuredValue\QuantitativeValue\QuantitativeValue|null
     */
    function getActivityFrequency()
    {
        return $this->getProp('activityFrequency');
    }
}
