<?php

/**
 * @see https://schema.org/EngineSpecification
 * Information about the engine of the vehicle. A vehicle can have multiple engines represented by multiple engine specification entities.
 */

namespace Vnetby\Schemaorg\Types\Thing\Intangible\StructuredValue;

class EngineSpecification extends \Vnetby\Schemaorg\Types\Thing\Intangible\StructuredValue\StructuredValue
{
    const TYPE = 'EngineSpecification';

    /**
     * The type of fuel suitable for the engine or engines of the vehicle. If the vehicle has only one engine, this
     * property can be attached directly to the vehicle.
     * @var string|\Vnetby\Schemaorg\DataTypes\DataText|\Vnetby\Schemaorg\DataTypes\DataURL|\Vnetby\Schemaorg\Types\Thing\Intangible\Enumeration\QualitativeValue\QualitativeValue
     */
    public $fuelType;

    /**
     * The power of the vehicle's engine. Typical unit code(s): KWT for kilowatt, BHP for brake horsepower, N12 for metric horsepower (PS,
     * with 1 PS = 735,49875 W)\n\n* Note 1: There are many different ways of measuring an engine's power. For an overview,
     * see [http://en.wikipedia.org/wiki/Horsepower#Engine\_power\_test\_codes](http://en.wikipedia.org/wiki/Horsepower#Engine_power_test_codes).\n* Note 2: You can link to information about how the given value has been determined using the [[valueReference]] property.\n*
     * Note 3: You can use [[minValue]] and [[maxValue]] to indicate ranges.
     * @var \Vnetby\Schemaorg\Types\Thing\Intangible\StructuredValue\QuantitativeValue\QuantitativeValue
     */
    public $enginePower;

    /**
     * The volume swept by all of the pistons inside the cylinders of an internal combustion engine in a single movement. \n\nTypical
     * unit code(s): CMQ for cubic centimeter, LTR for liters, INQ for cubic inches\n* Note 1: You can link to information about
     * how the given value has been determined using the [[valueReference]] property.\n* Note 2: You can use [[minValue]] and [[maxValue]] to indicate
     * ranges.
     * @var \Vnetby\Schemaorg\Types\Thing\Intangible\StructuredValue\QuantitativeValue\QuantitativeValue
     */
    public $engineDisplacement;

    /**
     * The type of engine or engines powering the vehicle.
     * @var string|\Vnetby\Schemaorg\DataTypes\DataText|\Vnetby\Schemaorg\DataTypes\DataURL|\Vnetby\Schemaorg\Types\Thing\Intangible\Enumeration\QualitativeValue\QualitativeValue
     */
    public $engineType;

    /**
     * The torque (turning force) of the vehicle's engine.\n\nTypical unit code(s): NU for newton metre (N m), F17 for pound-force per foot,
     * or F48 for pound-force per inch\n\n* Note 1: You can link to information about how the given value has been determined
     * (e.g. reference RPM) using the [[valueReference]] property.\n* Note 2: You can use [[minValue]] and [[maxValue]] to indicate ranges.
     * @var \Vnetby\Schemaorg\Types\Thing\Intangible\StructuredValue\QuantitativeValue\QuantitativeValue
     */
    public $torque;

    /**
     * The type of fuel suitable for the engine or engines of the vehicle. If the vehicle has only one engine, this
     * property can be attached directly to the vehicle.
     * @param string|\Vnetby\Schemaorg\DataTypes\DataText|\Vnetby\Schemaorg\DataTypes\DataURL|\Vnetby\Schemaorg\Types\Thing\Intangible\Enumeration\QualitativeValue\QualitativeValue $value
     * @return static
     */
    function setFuelType($value)
    {
        return $this->setProp('fuelType', $value);
    }

    /**
     * The power of the vehicle's engine. Typical unit code(s): KWT for kilowatt, BHP for brake horsepower, N12 for metric horsepower (PS,
     * with 1 PS = 735,49875 W)\n\n* Note 1: There are many different ways of measuring an engine's power. For an overview,
     * see [http://en.wikipedia.org/wiki/Horsepower#Engine\_power\_test\_codes](http://en.wikipedia.org/wiki/Horsepower#Engine_power_test_codes).\n* Note 2: You can link to information about how the given value has been determined using the [[valueReference]] property.\n*
     * Note 3: You can use [[minValue]] and [[maxValue]] to indicate ranges.
     * @param \Vnetby\Schemaorg\Types\Thing\Intangible\StructuredValue\QuantitativeValue\QuantitativeValue $value
     * @return static
     */
    function setEnginePower($value)
    {
        return $this->setProp('enginePower', $value);
    }

    /**
     * The volume swept by all of the pistons inside the cylinders of an internal combustion engine in a single movement. \n\nTypical
     * unit code(s): CMQ for cubic centimeter, LTR for liters, INQ for cubic inches\n* Note 1: You can link to information about
     * how the given value has been determined using the [[valueReference]] property.\n* Note 2: You can use [[minValue]] and [[maxValue]] to indicate
     * ranges.
     * @param \Vnetby\Schemaorg\Types\Thing\Intangible\StructuredValue\QuantitativeValue\QuantitativeValue $value
     * @return static
     */
    function setEngineDisplacement($value)
    {
        return $this->setProp('engineDisplacement', $value);
    }

    /**
     * The type of engine or engines powering the vehicle.
     * @param string|\Vnetby\Schemaorg\DataTypes\DataText|\Vnetby\Schemaorg\DataTypes\DataURL|\Vnetby\Schemaorg\Types\Thing\Intangible\Enumeration\QualitativeValue\QualitativeValue $value
     * @return static
     */
    function setEngineType($value)
    {
        return $this->setProp('engineType', $value);
    }

    /**
     * The torque (turning force) of the vehicle's engine.\n\nTypical unit code(s): NU for newton metre (N m), F17 for pound-force per foot,
     * or F48 for pound-force per inch\n\n* Note 1: You can link to information about how the given value has been determined
     * (e.g. reference RPM) using the [[valueReference]] property.\n* Note 2: You can use [[minValue]] and [[maxValue]] to indicate ranges.
     * @param \Vnetby\Schemaorg\Types\Thing\Intangible\StructuredValue\QuantitativeValue\QuantitativeValue $value
     * @return static
     */
    function setTorque($value)
    {
        return $this->setProp('torque', $value);
    }

    /**
     * The type of fuel suitable for the engine or engines of the vehicle. If the vehicle has only one engine, this
     * property can be attached directly to the vehicle.
     * @return string|\Vnetby\Schemaorg\DataTypes\DataText|\Vnetby\Schemaorg\DataTypes\DataURL|\Vnetby\Schemaorg\Types\Thing\Intangible\Enumeration\QualitativeValue\QualitativeValue|null
     */
    function getFuelType()
    {
        return $this->getProp('fuelType');
    }

    /**
     * The power of the vehicle's engine. Typical unit code(s): KWT for kilowatt, BHP for brake horsepower, N12 for metric horsepower (PS,
     * with 1 PS = 735,49875 W)\n\n* Note 1: There are many different ways of measuring an engine's power. For an overview,
     * see [http://en.wikipedia.org/wiki/Horsepower#Engine\_power\_test\_codes](http://en.wikipedia.org/wiki/Horsepower#Engine_power_test_codes).\n* Note 2: You can link to information about how the given value has been determined using the [[valueReference]] property.\n*
     * Note 3: You can use [[minValue]] and [[maxValue]] to indicate ranges.
     * @return \Vnetby\Schemaorg\Types\Thing\Intangible\StructuredValue\QuantitativeValue\QuantitativeValue|null
     */
    function getEnginePower()
    {
        return $this->getProp('enginePower');
    }

    /**
     * The volume swept by all of the pistons inside the cylinders of an internal combustion engine in a single movement. \n\nTypical
     * unit code(s): CMQ for cubic centimeter, LTR for liters, INQ for cubic inches\n* Note 1: You can link to information about
     * how the given value has been determined using the [[valueReference]] property.\n* Note 2: You can use [[minValue]] and [[maxValue]] to indicate
     * ranges.
     * @return \Vnetby\Schemaorg\Types\Thing\Intangible\StructuredValue\QuantitativeValue\QuantitativeValue|null
     */
    function getEngineDisplacement()
    {
        return $this->getProp('engineDisplacement');
    }

    /**
     * The type of engine or engines powering the vehicle.
     * @return string|\Vnetby\Schemaorg\DataTypes\DataText|\Vnetby\Schemaorg\DataTypes\DataURL|\Vnetby\Schemaorg\Types\Thing\Intangible\Enumeration\QualitativeValue\QualitativeValue|null
     */
    function getEngineType()
    {
        return $this->getProp('engineType');
    }

    /**
     * The torque (turning force) of the vehicle's engine.\n\nTypical unit code(s): NU for newton metre (N m), F17 for pound-force per foot,
     * or F48 for pound-force per inch\n\n* Note 1: You can link to information about how the given value has been determined
     * (e.g. reference RPM) using the [[valueReference]] property.\n* Note 2: You can use [[minValue]] and [[maxValue]] to indicate ranges.
     * @return \Vnetby\Schemaorg\Types\Thing\Intangible\StructuredValue\QuantitativeValue\QuantitativeValue|null
     */
    function getTorque()
    {
        return $this->getProp('torque');
    }
}
