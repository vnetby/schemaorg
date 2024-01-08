<?php

/**
 * @see https://schema.org/ExercisePlan
 * Fitness-related activity designed for a specific health-related purpose, including defined exercise routines as well as activity prescribed by a clinician.
 */

namespace Vnetby\Schemaorg\Types\Thing\CreativeWork;

class ExercisePlan extends \Vnetby\Schemaorg\Types\Thing\CreativeWork\CreativeWork
{
    const TYPE = 'ExercisePlan';

    /**
     * Length of time to engage in the activity.
     * @var \Vnetby\Schemaorg\Types\Thing\Intangible\StructuredValue\QuantitativeValue\QuantitativeValue|\Vnetby\Schemaorg\Types\Thing\Intangible\Quantity\Duration
     */
    public $activityDuration;

    /**
     * How often one should engage in the activity.
     * @var string|\Vnetby\Schemaorg\DataTypes\DataText|\Vnetby\Schemaorg\Types\Thing\Intangible\StructuredValue\QuantitativeValue\QuantitativeValue
     */
    public $activityFrequency;

    /**
     * Number of times one should repeat the activity.
     * @var string|int|float|\Vnetby\Schemaorg\Types\Thing\Intangible\StructuredValue\QuantitativeValue\QuantitativeValue|\Vnetby\Schemaorg\DataTypes\DataNumber
     */
    public $repetitions;

    /**
     * Type(s) of exercise or activity, such as strength training, flexibility training, aerobics, cardiac rehabilitation, etc.
     * @var string|\Vnetby\Schemaorg\DataTypes\DataText
     */
    public $exerciseType;

    /**
     * Quantitative measure gauging the degree of force involved in the exercise, for example, heartbeats per minute. May include the velocity of
     * the movement.
     * @var string|\Vnetby\Schemaorg\Types\Thing\Intangible\StructuredValue\QuantitativeValue\QuantitativeValue|\Vnetby\Schemaorg\DataTypes\DataText
     */
    public $intensity;

    /**
     * Any additional component of the exercise prescription that may need to be articulated to the patient. This may include the order
     * of exercises, the number of repetitions of movement, quantitative distance, progressions over time, etc.
     * @var string|\Vnetby\Schemaorg\DataTypes\DataText
     */
    public $additionalVariable;

    /**
     * Quantitative measure of the physiologic output of the exercise; also referred to as energy expenditure.
     * @var \Vnetby\Schemaorg\Types\Thing\Intangible\Quantity\Energy|\Vnetby\Schemaorg\Types\Thing\Intangible\StructuredValue\QuantitativeValue\QuantitativeValue
     */
    public $workload;

    /**
     * How often one should break from the activity.
     * @var string|\Vnetby\Schemaorg\Types\Thing\Intangible\StructuredValue\QuantitativeValue\QuantitativeValue|\Vnetby\Schemaorg\DataTypes\DataText
     */
    public $restPeriods;

    /**
     * Length of time to engage in the activity.
     * @param \Vnetby\Schemaorg\Types\Thing\Intangible\StructuredValue\QuantitativeValue\QuantitativeValue|\Vnetby\Schemaorg\Types\Thing\Intangible\Quantity\Duration $value
     * @return static
     */
    function setActivityDuration($value)
    {
        return $this->setProp('activityDuration', $value);
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
     * Number of times one should repeat the activity.
     * @param string|int|float|\Vnetby\Schemaorg\Types\Thing\Intangible\StructuredValue\QuantitativeValue\QuantitativeValue|\Vnetby\Schemaorg\DataTypes\DataNumber $value
     * @return static
     */
    function setRepetitions($value)
    {
        return $this->setProp('repetitions', $value);
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
     * Quantitative measure gauging the degree of force involved in the exercise, for example, heartbeats per minute. May include the velocity of
     * the movement.
     * @param string|\Vnetby\Schemaorg\Types\Thing\Intangible\StructuredValue\QuantitativeValue\QuantitativeValue|\Vnetby\Schemaorg\DataTypes\DataText $value
     * @return static
     */
    function setIntensity($value)
    {
        return $this->setProp('intensity', $value);
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
     * Quantitative measure of the physiologic output of the exercise; also referred to as energy expenditure.
     * @param \Vnetby\Schemaorg\Types\Thing\Intangible\Quantity\Energy|\Vnetby\Schemaorg\Types\Thing\Intangible\StructuredValue\QuantitativeValue\QuantitativeValue $value
     * @return static
     */
    function setWorkload($value)
    {
        return $this->setProp('workload', $value);
    }

    /**
     * How often one should break from the activity.
     * @param string|\Vnetby\Schemaorg\Types\Thing\Intangible\StructuredValue\QuantitativeValue\QuantitativeValue|\Vnetby\Schemaorg\DataTypes\DataText $value
     * @return static
     */
    function setRestPeriods($value)
    {
        return $this->setProp('restPeriods', $value);
    }

    /**
     * Length of time to engage in the activity.
     * @return \Vnetby\Schemaorg\Types\Thing\Intangible\StructuredValue\QuantitativeValue\QuantitativeValue|\Vnetby\Schemaorg\Types\Thing\Intangible\Quantity\Duration|null
     */
    function getActivityDuration()
    {
        return $this->getProp('activityDuration');
    }

    /**
     * How often one should engage in the activity.
     * @return string|\Vnetby\Schemaorg\DataTypes\DataText|\Vnetby\Schemaorg\Types\Thing\Intangible\StructuredValue\QuantitativeValue\QuantitativeValue|null
     */
    function getActivityFrequency()
    {
        return $this->getProp('activityFrequency');
    }

    /**
     * Number of times one should repeat the activity.
     * @return string|int|float|\Vnetby\Schemaorg\Types\Thing\Intangible\StructuredValue\QuantitativeValue\QuantitativeValue|\Vnetby\Schemaorg\DataTypes\DataNumber|null
     */
    function getRepetitions()
    {
        return $this->getProp('repetitions');
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
     * Quantitative measure gauging the degree of force involved in the exercise, for example, heartbeats per minute. May include the velocity of
     * the movement.
     * @return string|\Vnetby\Schemaorg\Types\Thing\Intangible\StructuredValue\QuantitativeValue\QuantitativeValue|\Vnetby\Schemaorg\DataTypes\DataText|null
     */
    function getIntensity()
    {
        return $this->getProp('intensity');
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
     * Quantitative measure of the physiologic output of the exercise; also referred to as energy expenditure.
     * @return \Vnetby\Schemaorg\Types\Thing\Intangible\Quantity\Energy|\Vnetby\Schemaorg\Types\Thing\Intangible\StructuredValue\QuantitativeValue\QuantitativeValue|null
     */
    function getWorkload()
    {
        return $this->getProp('workload');
    }

    /**
     * How often one should break from the activity.
     * @return string|\Vnetby\Schemaorg\Types\Thing\Intangible\StructuredValue\QuantitativeValue\QuantitativeValue|\Vnetby\Schemaorg\DataTypes\DataText|null
     */
    function getRestPeriods()
    {
        return $this->getProp('restPeriods');
    }
}
