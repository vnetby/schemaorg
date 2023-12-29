<?php

/**
 * @see https://schema.org/Vehicle
 * A vehicle is a device that is designed or used to transport people or cargo over land, water, air, or through
 * space.
 */

namespace Vnetby\Schemaorg\Types\Thing\Product\Vehicle;

class Vehicle extends \Vnetby\Schemaorg\Types\Thing\Product\Product
{
    const TYPE = 'Vehicle';

    /**
     * The time needed to accelerate the vehicle from a given start velocity to a given target velocity.\n\nTypical unit code(s): SEC for
     * seconds\n\n* Note: There are unfortunately no standard unit codes for seconds/0..100 km/h or seconds/0..60 mph. Simply use "SEC" for seconds and
     * indicate the velocities in the [[name]] of the [[QuantitativeValue]], or use [[valueReference]] with a [[QuantitativeValue]] of 0..60 mph or 0..100 km/h
     * to specify the reference speeds.
     * @var \Vnetby\Schemaorg\Types\Thing\Intangible\StructuredValue\QuantitativeValue\QuantitativeValue
     */
    public $accelerationTime;

    /**
     * Indicates whether the vehicle has been used for special purposes, like commercial rental, driving school, or as a taxi. The legislation
     * in many countries requires this information to be revealed when offering a car for sale.
     * @var string|\Vnetby\Schemaorg\Types\Thing\Intangible\Enumeration\CarUsageType\CarUsageType|\Vnetby\Schemaorg\DataTypes\DataText
     */
    public $vehicleSpecialUsage;

    /**
     * The number of owners of the vehicle, including the current one.\n\nTypical unit code(s): C62.
     * @var string|int|float|\Vnetby\Schemaorg\Types\Thing\Intangible\StructuredValue\QuantitativeValue\QuantitativeValue|\Vnetby\Schemaorg\DataTypes\DataNumber
     */
    public $numberOfPreviousOwners;

    /**
     * The number or type of airbags in the vehicle.
     * @var string|int|float|\Vnetby\Schemaorg\DataTypes\DataText|\Vnetby\Schemaorg\DataTypes\DataNumber
     */
    public $numberOfAirbags;

    /**
     * The distance traveled per unit of fuel used; most commonly miles per gallon (mpg) or kilometers per liter (km/L).\n\n* Note 1:
     * There are unfortunately no standard unit codes for miles per gallon or kilometers per liter. Use [[unitText]] to indicate the unit
     * of measurement, e.g. mpg or km/L.\n* Note 2: There are two ways of indicating the fuel consumption, [[fuelConsumption]] (e.g. 8 liters
     * per 100 km) and [[fuelEfficiency]] (e.g. 30 miles per gallon). They are reciprocal.\n* Note 3: Often, the absolute value is useful
     * only when related to driving speed ("at 80 km/h") or usage pattern ("city traffic"). You can use [[valueReference]] to link the
     * value for the fuel economy to another value.
     * @var \Vnetby\Schemaorg\Types\Thing\Intangible\StructuredValue\QuantitativeValue\QuantitativeValue
     */
    public $fuelEfficiency;

    /**
     * The permitted total weight of the loaded vehicle, including passengers and cargo and the weight of the empty vehicle.\n\nTypical unit code(s):
     * KGM for kilogram, LBR for pound\n\n* Note 1: You can indicate additional information in the [[name]] of the [[QuantitativeValue]] node.\n* Note
     * 2: You may also link to a [[QualitativeValue]] node that provides additional information using [[valueReference]].\n* Note 3: Note that you can
     * use [[minValue]] and [[maxValue]] to indicate ranges.
     * @var \Vnetby\Schemaorg\Types\Thing\Intangible\StructuredValue\QuantitativeValue\QuantitativeValue
     */
    public $weightTotal;

    /**
     * The total number of forward gears available for the transmission system of the vehicle.\n\nTypical unit code(s): C62.
     * @var string|int|float|\Vnetby\Schemaorg\DataTypes\DataNumber|\Vnetby\Schemaorg\Types\Thing\Intangible\StructuredValue\QuantitativeValue\QuantitativeValue
     */
    public $numberOfForwardGears;

    /**
     * The release date of a vehicle model (often used to differentiate versions of the same make and model).
     * @var string|\Vnetby\Schemaorg\DataTypes\DataDate
     */
    public $modelDate;

    /**
     * The speed range of the vehicle. If the vehicle is powered by an engine, the upper limit of the speed range
     * (indicated by [[maxValue]]) should be the maximum speed achievable under regular conditions.\n\nTypical unit code(s): KMH for km/h, HM for mile per
     * hour (0.447 04 m/s), KNT for knot\n\n*Note 1: Use [[minValue]] and [[maxValue]] to indicate the range. Typically, the minimal value is
     * zero.\n* Note 2: There are many different ways of measuring the speed range. You can link to information about how the
     * given value has been determined using the [[valueReference]] property.
     * @var \Vnetby\Schemaorg\Types\Thing\Intangible\StructuredValue\QuantitativeValue\QuantitativeValue
     */
    public $speed;

    /**
     * The color or color combination of the interior of the vehicle.
     * @var string|\Vnetby\Schemaorg\DataTypes\DataText
     */
    public $vehicleInteriorColor;

    /**
     * Indicates that the vehicle meets the respective emission standard.
     * @var string|\Vnetby\Schemaorg\Types\Thing\Intangible\Enumeration\QualitativeValue\QualitativeValue|\Vnetby\Schemaorg\DataTypes\DataURL|\Vnetby\Schemaorg\DataTypes\DataText
     */
    public $meetsEmissionStandard;

    /**
     * The permitted vertical load (TWR) of a trailer attached to the vehicle. Also referred to as Tongue Load Rating (TLR) or
     * Vertical Load Rating (VLR).\n\nTypical unit code(s): KGM for kilogram, LBR for pound\n\n* Note 1: You can indicate additional information in the
     * [[name]] of the [[QuantitativeValue]] node.\n* Note 2: You may also link to a [[QualitativeValue]] node that provides additional information using [[valueReference]].\n*
     * Note 3: Note that you can use [[minValue]] and [[maxValue]] to indicate ranges.
     * @var \Vnetby\Schemaorg\Types\Thing\Intangible\StructuredValue\QuantitativeValue\QuantitativeValue
     */
    public $tongueWeight;

    /**
     * The permitted weight of a trailer attached to the vehicle.\n\nTypical unit code(s): KGM for kilogram, LBR for pound\n* Note 1: You
     * can indicate additional information in the [[name]] of the [[QuantitativeValue]] node.\n* Note 2: You may also link to a [[QualitativeValue]] node
     * that provides additional information using [[valueReference]].\n* Note 3: Note that you can use [[minValue]] and [[maxValue]] to indicate ranges.
     * @var \Vnetby\Schemaorg\Types\Thing\Intangible\StructuredValue\QuantitativeValue\QuantitativeValue
     */
    public $trailerWeight;

    /**
     * A short text indicating the configuration of the vehicle, e.g. '5dr hatchback ST 2.5 MT 225 hp' or 'limited edition'.
     * @var string|\Vnetby\Schemaorg\DataTypes\DataText
     */
    public $vehicleConfiguration;

    /**
     * The number of axles.\n\nTypical unit code(s): C62.
     * @var string|int|float|\Vnetby\Schemaorg\DataTypes\DataNumber|\Vnetby\Schemaorg\Types\Thing\Intangible\StructuredValue\QuantitativeValue\QuantitativeValue
     */
    public $numberOfAxles;

    /**
     * The position of the steering wheel or similar device (mostly for cars).
     * @var \Vnetby\Schemaorg\Types\Thing\Intangible\Enumeration\QualitativeValue\SteeringPositionValue\SteeringPositionValue
     */
    public $steeringPosition;

    /**
     * Indicates the design and body style of the vehicle (e.g. station wagon, hatchback, etc.).
     * @var string|\Vnetby\Schemaorg\DataTypes\DataURL|\Vnetby\Schemaorg\DataTypes\DataText|\Vnetby\Schemaorg\Types\Thing\Intangible\Enumeration\QualitativeValue\QualitativeValue
     */
    public $bodyType;

    /**
     * The CO2 emissions in g/km. When used in combination with a QuantitativeValue, put "g/km" into the unitText property of that value,
     * since there is no UN/CEFACT Common Code for "g/km".
     * @var string|int|float|\Vnetby\Schemaorg\DataTypes\DataNumber
     */
    public $emissionsCO2;

    /**
     * The number of persons that can be seated (e.g. in a vehicle), both in terms of the physical space available, and
     * in terms of limitations set by law.\n\nTypical unit code(s): C62 for persons.
     * @var string|int|float|\Vnetby\Schemaorg\DataTypes\DataNumber|\Vnetby\Schemaorg\Types\Thing\Intangible\StructuredValue\QuantitativeValue\QuantitativeValue
     */
    public $seatingCapacity;

    /**
     * The capacity of the fuel tank or in the case of electric cars, the battery. If there are multiple components for
     * storage, this should indicate the total of all storage of the same type.\n\nTypical unit code(s): LTR for liters, GLL of US
     * gallons, GLI for UK / imperial gallons, AMH for ampere-hours (for electrical vehicles).
     * @var \Vnetby\Schemaorg\Types\Thing\Intangible\StructuredValue\QuantitativeValue\QuantitativeValue
     */
    public $fuelCapacity;

    /**
     * The Vehicle Identification Number (VIN) is a unique serial number used by the automotive industry to identify individual motor vehicles.
     * @var string|\Vnetby\Schemaorg\DataTypes\DataText
     */
    public $vehicleIdentificationNumber;

    /**
     * The total distance travelled by the particular vehicle since its initial production, as read from its odometer.\n\nTypical unit code(s): KMT for
     * kilometers, SMI for statute miles.
     * @var \Vnetby\Schemaorg\Types\Thing\Intangible\StructuredValue\QuantitativeValue\QuantitativeValue
     */
    public $mileageFromOdometer;

    /**
     * A textual description of known damages, both repaired and unrepaired.
     * @var string|\Vnetby\Schemaorg\DataTypes\DataText
     */
    public $knownVehicleDamages;

    /**
     * The release date of a vehicle model (often used to differentiate versions of the same make and model).
     * @var string|\Vnetby\Schemaorg\DataTypes\DataDate
     */
    public $vehicleModelDate;

    /**
     * The type of fuel suitable for the engine or engines of the vehicle. If the vehicle has only one engine, this
     * property can be attached directly to the vehicle.
     * @var string|\Vnetby\Schemaorg\DataTypes\DataURL|\Vnetby\Schemaorg\DataTypes\DataText|\Vnetby\Schemaorg\Types\Thing\Intangible\Enumeration\QualitativeValue\QualitativeValue
     */
    public $fuelType;

    /**
     * The amount of fuel consumed for traveling a particular distance or temporal duration with the given vehicle (e.g. liters per 100
     * km).\n\n* Note 1: There are unfortunately no standard unit codes for liters per 100 km. Use [[unitText]] to indicate the unit
     * of measurement, e.g. L/100 km.\n* Note 2: There are two ways of indicating the fuel consumption, [[fuelConsumption]] (e.g. 8 liters per
     * 100 km) and [[fuelEfficiency]] (e.g. 30 miles per gallon). They are reciprocal.\n* Note 3: Often, the absolute value is useful only
     * when related to driving speed ("at 80 km/h") or usage pattern ("city traffic"). You can use [[valueReference]] to link the value
     * for the fuel consumption to another value.
     * @var \Vnetby\Schemaorg\Types\Thing\Intangible\StructuredValue\QuantitativeValue\QuantitativeValue
     */
    public $fuelConsumption;

    /**
     * The number of passengers that can be seated in the vehicle, both in terms of the physical space available, and in
     * terms of limitations set by law.\n\nTypical unit code(s): C62 for persons.
     * @var string|int|float|\Vnetby\Schemaorg\DataTypes\DataNumber|\Vnetby\Schemaorg\Types\Thing\Intangible\StructuredValue\QuantitativeValue\QuantitativeValue
     */
    public $vehicleSeatingCapacity;

    /**
     * The available volume for cargo or luggage. For automobiles, this is usually the trunk volume.\n\nTypical unit code(s): LTR for liters, FTQ
     * for cubic foot/feet\n\nNote: You can use [[minValue]] and [[maxValue]] to indicate ranges.
     * @var \Vnetby\Schemaorg\Types\Thing\Intangible\StructuredValue\QuantitativeValue\QuantitativeValue
     */
    public $cargoVolume;

    /**
     * The date the item, e.g. vehicle, was purchased by the current owner.
     * @var string|\Vnetby\Schemaorg\DataTypes\DataDate
     */
    public $purchaseDate;

    /**
     * The drive wheel configuration, i.e. which roadwheels will receive torque from the vehicle's engine via the drivetrain.
     * @var string|\Vnetby\Schemaorg\DataTypes\DataText|\Vnetby\Schemaorg\Types\Thing\Intangible\Enumeration\QualitativeValue\DriveWheelConfigurationValue\DriveWheelConfigurationValue
     */
    public $driveWheelConfiguration;

    /**
     * A [callsign](https://en.wikipedia.org/wiki/Call_sign), as used in broadcasting and radio communications to identify people, radio and TV stations, or vehicles.
     * @var string|\Vnetby\Schemaorg\DataTypes\DataText
     */
    public $callSign;

    /**
     * The date of production of the item, e.g. vehicle.
     * @var string|\Vnetby\Schemaorg\DataTypes\DataDate
     */
    public $productionDate;

    /**
     * The permitted weight of passengers and cargo, EXCLUDING the weight of the empty vehicle.\n\nTypical unit code(s): KGM for kilogram, LBR for
     * pound\n\n* Note 1: Many databases specify the permitted TOTAL weight instead, which is the sum of [[weight]] and [[payload]]\n* Note 2:
     * You can indicate additional information in the [[name]] of the [[QuantitativeValue]] node.\n* Note 3: You may also link to a [[QualitativeValue]]
     * node that provides additional information using [[valueReference]].\n* Note 4: Note that you can use [[minValue]] and [[maxValue]] to indicate ranges.
     * @var \Vnetby\Schemaorg\Types\Thing\Intangible\StructuredValue\QuantitativeValue\QuantitativeValue
     */
    public $payload;

    /**
     * The type of component used for transmitting the power from a rotating power source to the wheels or other relevant component(s)
     * ("gearbox" for cars).
     * @var string|\Vnetby\Schemaorg\DataTypes\DataText|\Vnetby\Schemaorg\Types\Thing\Intangible\Enumeration\QualitativeValue\QualitativeValue|\Vnetby\Schemaorg\DataTypes\DataURL
     */
    public $vehicleTransmission;

    /**
     * The distance between the centers of the front and rear wheels.\n\nTypical unit code(s): CMT for centimeters, MTR for meters, INH for
     * inches, FOT for foot/feet.
     * @var \Vnetby\Schemaorg\Types\Thing\Intangible\StructuredValue\QuantitativeValue\QuantitativeValue
     */
    public $wheelbase;

    /**
     * Information about the engine or engines of the vehicle.
     * @var \Vnetby\Schemaorg\Types\Thing\Intangible\StructuredValue\EngineSpecification
     */
    public $vehicleEngine;

    /**
     * The date of the first registration of the vehicle with the respective public authorities.
     * @var string|\Vnetby\Schemaorg\DataTypes\DataDate
     */
    public $dateVehicleFirstRegistered;

    /**
     * The number of doors.\n\nTypical unit code(s): C62.
     * @var string|int|float|\Vnetby\Schemaorg\DataTypes\DataNumber|\Vnetby\Schemaorg\Types\Thing\Intangible\StructuredValue\QuantitativeValue\QuantitativeValue
     */
    public $numberOfDoors;

    /**
     * The type or material of the interior of the vehicle (e.g. synthetic fabric, leather, wood, etc.). While most interior types are
     * characterized by the material used, an interior type can also be based on vehicle usage or target audience.
     * @var string|\Vnetby\Schemaorg\DataTypes\DataText
     */
    public $vehicleInteriorType;

    /**
     * The time needed to accelerate the vehicle from a given start velocity to a given target velocity.\n\nTypical unit code(s): SEC for
     * seconds\n\n* Note: There are unfortunately no standard unit codes for seconds/0..100 km/h or seconds/0..60 mph. Simply use "SEC" for seconds and
     * indicate the velocities in the [[name]] of the [[QuantitativeValue]], or use [[valueReference]] with a [[QuantitativeValue]] of 0..60 mph or 0..100 km/h
     * to specify the reference speeds.
     * @param \Vnetby\Schemaorg\Types\Thing\Intangible\StructuredValue\QuantitativeValue\QuantitativeValue $value
     * @return static
     */
    function setAccelerationTime($value)
    {
        return $this->setProp('accelerationTime', $value);
    }

    /**
     * Indicates whether the vehicle has been used for special purposes, like commercial rental, driving school, or as a taxi. The legislation
     * in many countries requires this information to be revealed when offering a car for sale.
     * @param string|\Vnetby\Schemaorg\Types\Thing\Intangible\Enumeration\CarUsageType\CarUsageType|\Vnetby\Schemaorg\DataTypes\DataText $value
     * @return static
     */
    function setVehicleSpecialUsage($value)
    {
        return $this->setProp('vehicleSpecialUsage', $value);
    }

    /**
     * The number of owners of the vehicle, including the current one.\n\nTypical unit code(s): C62.
     * @param string|int|float|\Vnetby\Schemaorg\Types\Thing\Intangible\StructuredValue\QuantitativeValue\QuantitativeValue|\Vnetby\Schemaorg\DataTypes\DataNumber $value
     * @return static
     */
    function setNumberOfPreviousOwners($value)
    {
        return $this->setProp('numberOfPreviousOwners', $value);
    }

    /**
     * The number or type of airbags in the vehicle.
     * @param string|int|float|\Vnetby\Schemaorg\DataTypes\DataText|\Vnetby\Schemaorg\DataTypes\DataNumber $value
     * @return static
     */
    function setNumberOfAirbags($value)
    {
        return $this->setProp('numberOfAirbags', $value);
    }

    /**
     * The distance traveled per unit of fuel used; most commonly miles per gallon (mpg) or kilometers per liter (km/L).\n\n* Note 1:
     * There are unfortunately no standard unit codes for miles per gallon or kilometers per liter. Use [[unitText]] to indicate the unit
     * of measurement, e.g. mpg or km/L.\n* Note 2: There are two ways of indicating the fuel consumption, [[fuelConsumption]] (e.g. 8 liters
     * per 100 km) and [[fuelEfficiency]] (e.g. 30 miles per gallon). They are reciprocal.\n* Note 3: Often, the absolute value is useful
     * only when related to driving speed ("at 80 km/h") or usage pattern ("city traffic"). You can use [[valueReference]] to link the
     * value for the fuel economy to another value.
     * @param \Vnetby\Schemaorg\Types\Thing\Intangible\StructuredValue\QuantitativeValue\QuantitativeValue $value
     * @return static
     */
    function setFuelEfficiency($value)
    {
        return $this->setProp('fuelEfficiency', $value);
    }

    /**
     * The permitted total weight of the loaded vehicle, including passengers and cargo and the weight of the empty vehicle.\n\nTypical unit code(s):
     * KGM for kilogram, LBR for pound\n\n* Note 1: You can indicate additional information in the [[name]] of the [[QuantitativeValue]] node.\n* Note
     * 2: You may also link to a [[QualitativeValue]] node that provides additional information using [[valueReference]].\n* Note 3: Note that you can
     * use [[minValue]] and [[maxValue]] to indicate ranges.
     * @param \Vnetby\Schemaorg\Types\Thing\Intangible\StructuredValue\QuantitativeValue\QuantitativeValue $value
     * @return static
     */
    function setWeightTotal($value)
    {
        return $this->setProp('weightTotal', $value);
    }

    /**
     * The total number of forward gears available for the transmission system of the vehicle.\n\nTypical unit code(s): C62.
     * @param string|int|float|\Vnetby\Schemaorg\DataTypes\DataNumber|\Vnetby\Schemaorg\Types\Thing\Intangible\StructuredValue\QuantitativeValue\QuantitativeValue $value
     * @return static
     */
    function setNumberOfForwardGears($value)
    {
        return $this->setProp('numberOfForwardGears', $value);
    }

    /**
     * The release date of a vehicle model (often used to differentiate versions of the same make and model).
     * @param string|\Vnetby\Schemaorg\DataTypes\DataDate $value
     * @return static
     */
    function setModelDate($value)
    {
        return $this->setProp('modelDate', $value);
    }

    /**
     * The speed range of the vehicle. If the vehicle is powered by an engine, the upper limit of the speed range
     * (indicated by [[maxValue]]) should be the maximum speed achievable under regular conditions.\n\nTypical unit code(s): KMH for km/h, HM for mile per
     * hour (0.447 04 m/s), KNT for knot\n\n*Note 1: Use [[minValue]] and [[maxValue]] to indicate the range. Typically, the minimal value is
     * zero.\n* Note 2: There are many different ways of measuring the speed range. You can link to information about how the
     * given value has been determined using the [[valueReference]] property.
     * @param \Vnetby\Schemaorg\Types\Thing\Intangible\StructuredValue\QuantitativeValue\QuantitativeValue $value
     * @return static
     */
    function setSpeed($value)
    {
        return $this->setProp('speed', $value);
    }

    /**
     * The color or color combination of the interior of the vehicle.
     * @param string|\Vnetby\Schemaorg\DataTypes\DataText $value
     * @return static
     */
    function setVehicleInteriorColor($value)
    {
        return $this->setProp('vehicleInteriorColor', $value);
    }

    /**
     * Indicates that the vehicle meets the respective emission standard.
     * @param string|\Vnetby\Schemaorg\Types\Thing\Intangible\Enumeration\QualitativeValue\QualitativeValue|\Vnetby\Schemaorg\DataTypes\DataURL|\Vnetby\Schemaorg\DataTypes\DataText $value
     * @return static
     */
    function setMeetsEmissionStandard($value)
    {
        return $this->setProp('meetsEmissionStandard', $value);
    }

    /**
     * The permitted vertical load (TWR) of a trailer attached to the vehicle. Also referred to as Tongue Load Rating (TLR) or
     * Vertical Load Rating (VLR).\n\nTypical unit code(s): KGM for kilogram, LBR for pound\n\n* Note 1: You can indicate additional information in the
     * [[name]] of the [[QuantitativeValue]] node.\n* Note 2: You may also link to a [[QualitativeValue]] node that provides additional information using [[valueReference]].\n*
     * Note 3: Note that you can use [[minValue]] and [[maxValue]] to indicate ranges.
     * @param \Vnetby\Schemaorg\Types\Thing\Intangible\StructuredValue\QuantitativeValue\QuantitativeValue $value
     * @return static
     */
    function setTongueWeight($value)
    {
        return $this->setProp('tongueWeight', $value);
    }

    /**
     * The permitted weight of a trailer attached to the vehicle.\n\nTypical unit code(s): KGM for kilogram, LBR for pound\n* Note 1: You
     * can indicate additional information in the [[name]] of the [[QuantitativeValue]] node.\n* Note 2: You may also link to a [[QualitativeValue]] node
     * that provides additional information using [[valueReference]].\n* Note 3: Note that you can use [[minValue]] and [[maxValue]] to indicate ranges.
     * @param \Vnetby\Schemaorg\Types\Thing\Intangible\StructuredValue\QuantitativeValue\QuantitativeValue $value
     * @return static
     */
    function setTrailerWeight($value)
    {
        return $this->setProp('trailerWeight', $value);
    }

    /**
     * A short text indicating the configuration of the vehicle, e.g. '5dr hatchback ST 2.5 MT 225 hp' or 'limited edition'.
     * @param string|\Vnetby\Schemaorg\DataTypes\DataText $value
     * @return static
     */
    function setVehicleConfiguration($value)
    {
        return $this->setProp('vehicleConfiguration', $value);
    }

    /**
     * The number of axles.\n\nTypical unit code(s): C62.
     * @param string|int|float|\Vnetby\Schemaorg\DataTypes\DataNumber|\Vnetby\Schemaorg\Types\Thing\Intangible\StructuredValue\QuantitativeValue\QuantitativeValue $value
     * @return static
     */
    function setNumberOfAxles($value)
    {
        return $this->setProp('numberOfAxles', $value);
    }

    /**
     * The position of the steering wheel or similar device (mostly for cars).
     * @param \Vnetby\Schemaorg\Types\Thing\Intangible\Enumeration\QualitativeValue\SteeringPositionValue\SteeringPositionValue $value
     * @return static
     */
    function setSteeringPosition($value)
    {
        return $this->setProp('steeringPosition', $value);
    }

    /**
     * Indicates the design and body style of the vehicle (e.g. station wagon, hatchback, etc.).
     * @param string|\Vnetby\Schemaorg\DataTypes\DataURL|\Vnetby\Schemaorg\DataTypes\DataText|\Vnetby\Schemaorg\Types\Thing\Intangible\Enumeration\QualitativeValue\QualitativeValue $value
     * @return static
     */
    function setBodyType($value)
    {
        return $this->setProp('bodyType', $value);
    }

    /**
     * The CO2 emissions in g/km. When used in combination with a QuantitativeValue, put "g/km" into the unitText property of that value,
     * since there is no UN/CEFACT Common Code for "g/km".
     * @param string|int|float|\Vnetby\Schemaorg\DataTypes\DataNumber $value
     * @return static
     */
    function setEmissionsCO2($value)
    {
        return $this->setProp('emissionsCO2', $value);
    }

    /**
     * The number of persons that can be seated (e.g. in a vehicle), both in terms of the physical space available, and
     * in terms of limitations set by law.\n\nTypical unit code(s): C62 for persons.
     * @param string|int|float|\Vnetby\Schemaorg\DataTypes\DataNumber|\Vnetby\Schemaorg\Types\Thing\Intangible\StructuredValue\QuantitativeValue\QuantitativeValue $value
     * @return static
     */
    function setSeatingCapacity($value)
    {
        return $this->setProp('seatingCapacity', $value);
    }

    /**
     * The capacity of the fuel tank or in the case of electric cars, the battery. If there are multiple components for
     * storage, this should indicate the total of all storage of the same type.\n\nTypical unit code(s): LTR for liters, GLL of US
     * gallons, GLI for UK / imperial gallons, AMH for ampere-hours (for electrical vehicles).
     * @param \Vnetby\Schemaorg\Types\Thing\Intangible\StructuredValue\QuantitativeValue\QuantitativeValue $value
     * @return static
     */
    function setFuelCapacity($value)
    {
        return $this->setProp('fuelCapacity', $value);
    }

    /**
     * The Vehicle Identification Number (VIN) is a unique serial number used by the automotive industry to identify individual motor vehicles.
     * @param string|\Vnetby\Schemaorg\DataTypes\DataText $value
     * @return static
     */
    function setVehicleIdentificationNumber($value)
    {
        return $this->setProp('vehicleIdentificationNumber', $value);
    }

    /**
     * The total distance travelled by the particular vehicle since its initial production, as read from its odometer.\n\nTypical unit code(s): KMT for
     * kilometers, SMI for statute miles.
     * @param \Vnetby\Schemaorg\Types\Thing\Intangible\StructuredValue\QuantitativeValue\QuantitativeValue $value
     * @return static
     */
    function setMileageFromOdometer($value)
    {
        return $this->setProp('mileageFromOdometer', $value);
    }

    /**
     * A textual description of known damages, both repaired and unrepaired.
     * @param string|\Vnetby\Schemaorg\DataTypes\DataText $value
     * @return static
     */
    function setKnownVehicleDamages($value)
    {
        return $this->setProp('knownVehicleDamages', $value);
    }

    /**
     * The release date of a vehicle model (often used to differentiate versions of the same make and model).
     * @param string|\Vnetby\Schemaorg\DataTypes\DataDate $value
     * @return static
     */
    function setVehicleModelDate($value)
    {
        return $this->setProp('vehicleModelDate', $value);
    }

    /**
     * The type of fuel suitable for the engine or engines of the vehicle. If the vehicle has only one engine, this
     * property can be attached directly to the vehicle.
     * @param string|\Vnetby\Schemaorg\DataTypes\DataURL|\Vnetby\Schemaorg\DataTypes\DataText|\Vnetby\Schemaorg\Types\Thing\Intangible\Enumeration\QualitativeValue\QualitativeValue $value
     * @return static
     */
    function setFuelType($value)
    {
        return $this->setProp('fuelType', $value);
    }

    /**
     * The amount of fuel consumed for traveling a particular distance or temporal duration with the given vehicle (e.g. liters per 100
     * km).\n\n* Note 1: There are unfortunately no standard unit codes for liters per 100 km. Use [[unitText]] to indicate the unit
     * of measurement, e.g. L/100 km.\n* Note 2: There are two ways of indicating the fuel consumption, [[fuelConsumption]] (e.g. 8 liters per
     * 100 km) and [[fuelEfficiency]] (e.g. 30 miles per gallon). They are reciprocal.\n* Note 3: Often, the absolute value is useful only
     * when related to driving speed ("at 80 km/h") or usage pattern ("city traffic"). You can use [[valueReference]] to link the value
     * for the fuel consumption to another value.
     * @param \Vnetby\Schemaorg\Types\Thing\Intangible\StructuredValue\QuantitativeValue\QuantitativeValue $value
     * @return static
     */
    function setFuelConsumption($value)
    {
        return $this->setProp('fuelConsumption', $value);
    }

    /**
     * The number of passengers that can be seated in the vehicle, both in terms of the physical space available, and in
     * terms of limitations set by law.\n\nTypical unit code(s): C62 for persons.
     * @param string|int|float|\Vnetby\Schemaorg\DataTypes\DataNumber|\Vnetby\Schemaorg\Types\Thing\Intangible\StructuredValue\QuantitativeValue\QuantitativeValue $value
     * @return static
     */
    function setVehicleSeatingCapacity($value)
    {
        return $this->setProp('vehicleSeatingCapacity', $value);
    }

    /**
     * The available volume for cargo or luggage. For automobiles, this is usually the trunk volume.\n\nTypical unit code(s): LTR for liters, FTQ
     * for cubic foot/feet\n\nNote: You can use [[minValue]] and [[maxValue]] to indicate ranges.
     * @param \Vnetby\Schemaorg\Types\Thing\Intangible\StructuredValue\QuantitativeValue\QuantitativeValue $value
     * @return static
     */
    function setCargoVolume($value)
    {
        return $this->setProp('cargoVolume', $value);
    }

    /**
     * The date the item, e.g. vehicle, was purchased by the current owner.
     * @param string|\Vnetby\Schemaorg\DataTypes\DataDate $value
     * @return static
     */
    function setPurchaseDate($value)
    {
        return $this->setProp('purchaseDate', $value);
    }

    /**
     * The drive wheel configuration, i.e. which roadwheels will receive torque from the vehicle's engine via the drivetrain.
     * @param string|\Vnetby\Schemaorg\DataTypes\DataText|\Vnetby\Schemaorg\Types\Thing\Intangible\Enumeration\QualitativeValue\DriveWheelConfigurationValue\DriveWheelConfigurationValue $value
     * @return static
     */
    function setDriveWheelConfiguration($value)
    {
        return $this->setProp('driveWheelConfiguration', $value);
    }

    /**
     * A [callsign](https://en.wikipedia.org/wiki/Call_sign), as used in broadcasting and radio communications to identify people, radio and TV stations, or vehicles.
     * @param string|\Vnetby\Schemaorg\DataTypes\DataText $value
     * @return static
     */
    function setCallSign($value)
    {
        return $this->setProp('callSign', $value);
    }

    /**
     * The date of production of the item, e.g. vehicle.
     * @param string|\Vnetby\Schemaorg\DataTypes\DataDate $value
     * @return static
     */
    function setProductionDate($value)
    {
        return $this->setProp('productionDate', $value);
    }

    /**
     * The permitted weight of passengers and cargo, EXCLUDING the weight of the empty vehicle.\n\nTypical unit code(s): KGM for kilogram, LBR for
     * pound\n\n* Note 1: Many databases specify the permitted TOTAL weight instead, which is the sum of [[weight]] and [[payload]]\n* Note 2:
     * You can indicate additional information in the [[name]] of the [[QuantitativeValue]] node.\n* Note 3: You may also link to a [[QualitativeValue]]
     * node that provides additional information using [[valueReference]].\n* Note 4: Note that you can use [[minValue]] and [[maxValue]] to indicate ranges.
     * @param \Vnetby\Schemaorg\Types\Thing\Intangible\StructuredValue\QuantitativeValue\QuantitativeValue $value
     * @return static
     */
    function setPayload($value)
    {
        return $this->setProp('payload', $value);
    }

    /**
     * The type of component used for transmitting the power from a rotating power source to the wheels or other relevant component(s)
     * ("gearbox" for cars).
     * @param string|\Vnetby\Schemaorg\DataTypes\DataText|\Vnetby\Schemaorg\Types\Thing\Intangible\Enumeration\QualitativeValue\QualitativeValue|\Vnetby\Schemaorg\DataTypes\DataURL $value
     * @return static
     */
    function setVehicleTransmission($value)
    {
        return $this->setProp('vehicleTransmission', $value);
    }

    /**
     * The distance between the centers of the front and rear wheels.\n\nTypical unit code(s): CMT for centimeters, MTR for meters, INH for
     * inches, FOT for foot/feet.
     * @param \Vnetby\Schemaorg\Types\Thing\Intangible\StructuredValue\QuantitativeValue\QuantitativeValue $value
     * @return static
     */
    function setWheelbase($value)
    {
        return $this->setProp('wheelbase', $value);
    }

    /**
     * Information about the engine or engines of the vehicle.
     * @param \Vnetby\Schemaorg\Types\Thing\Intangible\StructuredValue\EngineSpecification $value
     * @return static
     */
    function setVehicleEngine($value)
    {
        return $this->setProp('vehicleEngine', $value);
    }

    /**
     * The date of the first registration of the vehicle with the respective public authorities.
     * @param string|\Vnetby\Schemaorg\DataTypes\DataDate $value
     * @return static
     */
    function setDateVehicleFirstRegistered($value)
    {
        return $this->setProp('dateVehicleFirstRegistered', $value);
    }

    /**
     * The number of doors.\n\nTypical unit code(s): C62.
     * @param string|int|float|\Vnetby\Schemaorg\DataTypes\DataNumber|\Vnetby\Schemaorg\Types\Thing\Intangible\StructuredValue\QuantitativeValue\QuantitativeValue $value
     * @return static
     */
    function setNumberOfDoors($value)
    {
        return $this->setProp('numberOfDoors', $value);
    }

    /**
     * The type or material of the interior of the vehicle (e.g. synthetic fabric, leather, wood, etc.). While most interior types are
     * characterized by the material used, an interior type can also be based on vehicle usage or target audience.
     * @param string|\Vnetby\Schemaorg\DataTypes\DataText $value
     * @return static
     */
    function setVehicleInteriorType($value)
    {
        return $this->setProp('vehicleInteriorType', $value);
    }

    /**
     * The time needed to accelerate the vehicle from a given start velocity to a given target velocity.\n\nTypical unit code(s): SEC for
     * seconds\n\n* Note: There are unfortunately no standard unit codes for seconds/0..100 km/h or seconds/0..60 mph. Simply use "SEC" for seconds and
     * indicate the velocities in the [[name]] of the [[QuantitativeValue]], or use [[valueReference]] with a [[QuantitativeValue]] of 0..60 mph or 0..100 km/h
     * to specify the reference speeds.
     * @return \Vnetby\Schemaorg\Types\Thing\Intangible\StructuredValue\QuantitativeValue\QuantitativeValue|null
     */
    function getAccelerationTime()
    {
        return $this->getProp('accelerationTime');
    }

    /**
     * Indicates whether the vehicle has been used for special purposes, like commercial rental, driving school, or as a taxi. The legislation
     * in many countries requires this information to be revealed when offering a car for sale.
     * @return string|\Vnetby\Schemaorg\Types\Thing\Intangible\Enumeration\CarUsageType\CarUsageType|\Vnetby\Schemaorg\DataTypes\DataText|null
     */
    function getVehicleSpecialUsage()
    {
        return $this->getProp('vehicleSpecialUsage');
    }

    /**
     * The number of owners of the vehicle, including the current one.\n\nTypical unit code(s): C62.
     * @return string|int|float|\Vnetby\Schemaorg\Types\Thing\Intangible\StructuredValue\QuantitativeValue\QuantitativeValue|\Vnetby\Schemaorg\DataTypes\DataNumber|null
     */
    function getNumberOfPreviousOwners()
    {
        return $this->getProp('numberOfPreviousOwners');
    }

    /**
     * The number or type of airbags in the vehicle.
     * @return string|int|float|\Vnetby\Schemaorg\DataTypes\DataText|\Vnetby\Schemaorg\DataTypes\DataNumber|null
     */
    function getNumberOfAirbags()
    {
        return $this->getProp('numberOfAirbags');
    }

    /**
     * The distance traveled per unit of fuel used; most commonly miles per gallon (mpg) or kilometers per liter (km/L).\n\n* Note 1:
     * There are unfortunately no standard unit codes for miles per gallon or kilometers per liter. Use [[unitText]] to indicate the unit
     * of measurement, e.g. mpg or km/L.\n* Note 2: There are two ways of indicating the fuel consumption, [[fuelConsumption]] (e.g. 8 liters
     * per 100 km) and [[fuelEfficiency]] (e.g. 30 miles per gallon). They are reciprocal.\n* Note 3: Often, the absolute value is useful
     * only when related to driving speed ("at 80 km/h") or usage pattern ("city traffic"). You can use [[valueReference]] to link the
     * value for the fuel economy to another value.
     * @return \Vnetby\Schemaorg\Types\Thing\Intangible\StructuredValue\QuantitativeValue\QuantitativeValue|null
     */
    function getFuelEfficiency()
    {
        return $this->getProp('fuelEfficiency');
    }

    /**
     * The permitted total weight of the loaded vehicle, including passengers and cargo and the weight of the empty vehicle.\n\nTypical unit code(s):
     * KGM for kilogram, LBR for pound\n\n* Note 1: You can indicate additional information in the [[name]] of the [[QuantitativeValue]] node.\n* Note
     * 2: You may also link to a [[QualitativeValue]] node that provides additional information using [[valueReference]].\n* Note 3: Note that you can
     * use [[minValue]] and [[maxValue]] to indicate ranges.
     * @return \Vnetby\Schemaorg\Types\Thing\Intangible\StructuredValue\QuantitativeValue\QuantitativeValue|null
     */
    function getWeightTotal()
    {
        return $this->getProp('weightTotal');
    }

    /**
     * The total number of forward gears available for the transmission system of the vehicle.\n\nTypical unit code(s): C62.
     * @return string|int|float|\Vnetby\Schemaorg\DataTypes\DataNumber|\Vnetby\Schemaorg\Types\Thing\Intangible\StructuredValue\QuantitativeValue\QuantitativeValue|null
     */
    function getNumberOfForwardGears()
    {
        return $this->getProp('numberOfForwardGears');
    }

    /**
     * The release date of a vehicle model (often used to differentiate versions of the same make and model).
     * @return string|\Vnetby\Schemaorg\DataTypes\DataDate|null
     */
    function getModelDate()
    {
        return $this->getProp('modelDate');
    }

    /**
     * The speed range of the vehicle. If the vehicle is powered by an engine, the upper limit of the speed range
     * (indicated by [[maxValue]]) should be the maximum speed achievable under regular conditions.\n\nTypical unit code(s): KMH for km/h, HM for mile per
     * hour (0.447 04 m/s), KNT for knot\n\n*Note 1: Use [[minValue]] and [[maxValue]] to indicate the range. Typically, the minimal value is
     * zero.\n* Note 2: There are many different ways of measuring the speed range. You can link to information about how the
     * given value has been determined using the [[valueReference]] property.
     * @return \Vnetby\Schemaorg\Types\Thing\Intangible\StructuredValue\QuantitativeValue\QuantitativeValue|null
     */
    function getSpeed()
    {
        return $this->getProp('speed');
    }

    /**
     * The color or color combination of the interior of the vehicle.
     * @return string|\Vnetby\Schemaorg\DataTypes\DataText|null
     */
    function getVehicleInteriorColor()
    {
        return $this->getProp('vehicleInteriorColor');
    }

    /**
     * Indicates that the vehicle meets the respective emission standard.
     * @return string|\Vnetby\Schemaorg\Types\Thing\Intangible\Enumeration\QualitativeValue\QualitativeValue|\Vnetby\Schemaorg\DataTypes\DataURL|\Vnetby\Schemaorg\DataTypes\DataText|null
     */
    function getMeetsEmissionStandard()
    {
        return $this->getProp('meetsEmissionStandard');
    }

    /**
     * The permitted vertical load (TWR) of a trailer attached to the vehicle. Also referred to as Tongue Load Rating (TLR) or
     * Vertical Load Rating (VLR).\n\nTypical unit code(s): KGM for kilogram, LBR for pound\n\n* Note 1: You can indicate additional information in the
     * [[name]] of the [[QuantitativeValue]] node.\n* Note 2: You may also link to a [[QualitativeValue]] node that provides additional information using [[valueReference]].\n*
     * Note 3: Note that you can use [[minValue]] and [[maxValue]] to indicate ranges.
     * @return \Vnetby\Schemaorg\Types\Thing\Intangible\StructuredValue\QuantitativeValue\QuantitativeValue|null
     */
    function getTongueWeight()
    {
        return $this->getProp('tongueWeight');
    }

    /**
     * The permitted weight of a trailer attached to the vehicle.\n\nTypical unit code(s): KGM for kilogram, LBR for pound\n* Note 1: You
     * can indicate additional information in the [[name]] of the [[QuantitativeValue]] node.\n* Note 2: You may also link to a [[QualitativeValue]] node
     * that provides additional information using [[valueReference]].\n* Note 3: Note that you can use [[minValue]] and [[maxValue]] to indicate ranges.
     * @return \Vnetby\Schemaorg\Types\Thing\Intangible\StructuredValue\QuantitativeValue\QuantitativeValue|null
     */
    function getTrailerWeight()
    {
        return $this->getProp('trailerWeight');
    }

    /**
     * A short text indicating the configuration of the vehicle, e.g. '5dr hatchback ST 2.5 MT 225 hp' or 'limited edition'.
     * @return string|\Vnetby\Schemaorg\DataTypes\DataText|null
     */
    function getVehicleConfiguration()
    {
        return $this->getProp('vehicleConfiguration');
    }

    /**
     * The number of axles.\n\nTypical unit code(s): C62.
     * @return string|int|float|\Vnetby\Schemaorg\DataTypes\DataNumber|\Vnetby\Schemaorg\Types\Thing\Intangible\StructuredValue\QuantitativeValue\QuantitativeValue|null
     */
    function getNumberOfAxles()
    {
        return $this->getProp('numberOfAxles');
    }

    /**
     * The position of the steering wheel or similar device (mostly for cars).
     * @return \Vnetby\Schemaorg\Types\Thing\Intangible\Enumeration\QualitativeValue\SteeringPositionValue\SteeringPositionValue|null
     */
    function getSteeringPosition()
    {
        return $this->getProp('steeringPosition');
    }

    /**
     * Indicates the design and body style of the vehicle (e.g. station wagon, hatchback, etc.).
     * @return string|\Vnetby\Schemaorg\DataTypes\DataURL|\Vnetby\Schemaorg\DataTypes\DataText|\Vnetby\Schemaorg\Types\Thing\Intangible\Enumeration\QualitativeValue\QualitativeValue|null
     */
    function getBodyType()
    {
        return $this->getProp('bodyType');
    }

    /**
     * The CO2 emissions in g/km. When used in combination with a QuantitativeValue, put "g/km" into the unitText property of that value,
     * since there is no UN/CEFACT Common Code for "g/km".
     * @return string|int|float|\Vnetby\Schemaorg\DataTypes\DataNumber|null
     */
    function getEmissionsCO2()
    {
        return $this->getProp('emissionsCO2');
    }

    /**
     * The number of persons that can be seated (e.g. in a vehicle), both in terms of the physical space available, and
     * in terms of limitations set by law.\n\nTypical unit code(s): C62 for persons.
     * @return string|int|float|\Vnetby\Schemaorg\DataTypes\DataNumber|\Vnetby\Schemaorg\Types\Thing\Intangible\StructuredValue\QuantitativeValue\QuantitativeValue|null
     */
    function getSeatingCapacity()
    {
        return $this->getProp('seatingCapacity');
    }

    /**
     * The capacity of the fuel tank or in the case of electric cars, the battery. If there are multiple components for
     * storage, this should indicate the total of all storage of the same type.\n\nTypical unit code(s): LTR for liters, GLL of US
     * gallons, GLI for UK / imperial gallons, AMH for ampere-hours (for electrical vehicles).
     * @return \Vnetby\Schemaorg\Types\Thing\Intangible\StructuredValue\QuantitativeValue\QuantitativeValue|null
     */
    function getFuelCapacity()
    {
        return $this->getProp('fuelCapacity');
    }

    /**
     * The Vehicle Identification Number (VIN) is a unique serial number used by the automotive industry to identify individual motor vehicles.
     * @return string|\Vnetby\Schemaorg\DataTypes\DataText|null
     */
    function getVehicleIdentificationNumber()
    {
        return $this->getProp('vehicleIdentificationNumber');
    }

    /**
     * The total distance travelled by the particular vehicle since its initial production, as read from its odometer.\n\nTypical unit code(s): KMT for
     * kilometers, SMI for statute miles.
     * @return \Vnetby\Schemaorg\Types\Thing\Intangible\StructuredValue\QuantitativeValue\QuantitativeValue|null
     */
    function getMileageFromOdometer()
    {
        return $this->getProp('mileageFromOdometer');
    }

    /**
     * A textual description of known damages, both repaired and unrepaired.
     * @return string|\Vnetby\Schemaorg\DataTypes\DataText|null
     */
    function getKnownVehicleDamages()
    {
        return $this->getProp('knownVehicleDamages');
    }

    /**
     * The release date of a vehicle model (often used to differentiate versions of the same make and model).
     * @return string|\Vnetby\Schemaorg\DataTypes\DataDate|null
     */
    function getVehicleModelDate()
    {
        return $this->getProp('vehicleModelDate');
    }

    /**
     * The type of fuel suitable for the engine or engines of the vehicle. If the vehicle has only one engine, this
     * property can be attached directly to the vehicle.
     * @return string|\Vnetby\Schemaorg\DataTypes\DataURL|\Vnetby\Schemaorg\DataTypes\DataText|\Vnetby\Schemaorg\Types\Thing\Intangible\Enumeration\QualitativeValue\QualitativeValue|null
     */
    function getFuelType()
    {
        return $this->getProp('fuelType');
    }

    /**
     * The amount of fuel consumed for traveling a particular distance or temporal duration with the given vehicle (e.g. liters per 100
     * km).\n\n* Note 1: There are unfortunately no standard unit codes for liters per 100 km. Use [[unitText]] to indicate the unit
     * of measurement, e.g. L/100 km.\n* Note 2: There are two ways of indicating the fuel consumption, [[fuelConsumption]] (e.g. 8 liters per
     * 100 km) and [[fuelEfficiency]] (e.g. 30 miles per gallon). They are reciprocal.\n* Note 3: Often, the absolute value is useful only
     * when related to driving speed ("at 80 km/h") or usage pattern ("city traffic"). You can use [[valueReference]] to link the value
     * for the fuel consumption to another value.
     * @return \Vnetby\Schemaorg\Types\Thing\Intangible\StructuredValue\QuantitativeValue\QuantitativeValue|null
     */
    function getFuelConsumption()
    {
        return $this->getProp('fuelConsumption');
    }

    /**
     * The number of passengers that can be seated in the vehicle, both in terms of the physical space available, and in
     * terms of limitations set by law.\n\nTypical unit code(s): C62 for persons.
     * @return string|int|float|\Vnetby\Schemaorg\DataTypes\DataNumber|\Vnetby\Schemaorg\Types\Thing\Intangible\StructuredValue\QuantitativeValue\QuantitativeValue|null
     */
    function getVehicleSeatingCapacity()
    {
        return $this->getProp('vehicleSeatingCapacity');
    }

    /**
     * The available volume for cargo or luggage. For automobiles, this is usually the trunk volume.\n\nTypical unit code(s): LTR for liters, FTQ
     * for cubic foot/feet\n\nNote: You can use [[minValue]] and [[maxValue]] to indicate ranges.
     * @return \Vnetby\Schemaorg\Types\Thing\Intangible\StructuredValue\QuantitativeValue\QuantitativeValue|null
     */
    function getCargoVolume()
    {
        return $this->getProp('cargoVolume');
    }

    /**
     * The date the item, e.g. vehicle, was purchased by the current owner.
     * @return string|\Vnetby\Schemaorg\DataTypes\DataDate|null
     */
    function getPurchaseDate()
    {
        return $this->getProp('purchaseDate');
    }

    /**
     * The drive wheel configuration, i.e. which roadwheels will receive torque from the vehicle's engine via the drivetrain.
     * @return string|\Vnetby\Schemaorg\DataTypes\DataText|\Vnetby\Schemaorg\Types\Thing\Intangible\Enumeration\QualitativeValue\DriveWheelConfigurationValue\DriveWheelConfigurationValue|null
     */
    function getDriveWheelConfiguration()
    {
        return $this->getProp('driveWheelConfiguration');
    }

    /**
     * A [callsign](https://en.wikipedia.org/wiki/Call_sign), as used in broadcasting and radio communications to identify people, radio and TV stations, or vehicles.
     * @return string|\Vnetby\Schemaorg\DataTypes\DataText|null
     */
    function getCallSign()
    {
        return $this->getProp('callSign');
    }

    /**
     * The date of production of the item, e.g. vehicle.
     * @return string|\Vnetby\Schemaorg\DataTypes\DataDate|null
     */
    function getProductionDate()
    {
        return $this->getProp('productionDate');
    }

    /**
     * The permitted weight of passengers and cargo, EXCLUDING the weight of the empty vehicle.\n\nTypical unit code(s): KGM for kilogram, LBR for
     * pound\n\n* Note 1: Many databases specify the permitted TOTAL weight instead, which is the sum of [[weight]] and [[payload]]\n* Note 2:
     * You can indicate additional information in the [[name]] of the [[QuantitativeValue]] node.\n* Note 3: You may also link to a [[QualitativeValue]]
     * node that provides additional information using [[valueReference]].\n* Note 4: Note that you can use [[minValue]] and [[maxValue]] to indicate ranges.
     * @return \Vnetby\Schemaorg\Types\Thing\Intangible\StructuredValue\QuantitativeValue\QuantitativeValue|null
     */
    function getPayload()
    {
        return $this->getProp('payload');
    }

    /**
     * The type of component used for transmitting the power from a rotating power source to the wheels or other relevant component(s)
     * ("gearbox" for cars).
     * @return string|\Vnetby\Schemaorg\DataTypes\DataText|\Vnetby\Schemaorg\Types\Thing\Intangible\Enumeration\QualitativeValue\QualitativeValue|\Vnetby\Schemaorg\DataTypes\DataURL|null
     */
    function getVehicleTransmission()
    {
        return $this->getProp('vehicleTransmission');
    }

    /**
     * The distance between the centers of the front and rear wheels.\n\nTypical unit code(s): CMT for centimeters, MTR for meters, INH for
     * inches, FOT for foot/feet.
     * @return \Vnetby\Schemaorg\Types\Thing\Intangible\StructuredValue\QuantitativeValue\QuantitativeValue|null
     */
    function getWheelbase()
    {
        return $this->getProp('wheelbase');
    }

    /**
     * Information about the engine or engines of the vehicle.
     * @return \Vnetby\Schemaorg\Types\Thing\Intangible\StructuredValue\EngineSpecification|null
     */
    function getVehicleEngine()
    {
        return $this->getProp('vehicleEngine');
    }

    /**
     * The date of the first registration of the vehicle with the respective public authorities.
     * @return string|\Vnetby\Schemaorg\DataTypes\DataDate|null
     */
    function getDateVehicleFirstRegistered()
    {
        return $this->getProp('dateVehicleFirstRegistered');
    }

    /**
     * The number of doors.\n\nTypical unit code(s): C62.
     * @return string|int|float|\Vnetby\Schemaorg\DataTypes\DataNumber|\Vnetby\Schemaorg\Types\Thing\Intangible\StructuredValue\QuantitativeValue\QuantitativeValue|null
     */
    function getNumberOfDoors()
    {
        return $this->getProp('numberOfDoors');
    }

    /**
     * The type or material of the interior of the vehicle (e.g. synthetic fabric, leather, wood, etc.). While most interior types are
     * characterized by the material used, an interior type can also be based on vehicle usage or target audience.
     * @return string|\Vnetby\Schemaorg\DataTypes\DataText|null
     */
    function getVehicleInteriorType()
    {
        return $this->getProp('vehicleInteriorType');
    }
}
