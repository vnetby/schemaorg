<?php

/**
 * @see https://schema.org/BusOrCoach
 * A bus (also omnibus or autobus) is a road vehicle designed to carry passengers. Coaches are luxury busses, usually in service
 * for long distance travel.
 */

namespace Vnetby\Schemaorg\Types\Thing\Product\Vehicle;

class BusOrCoach extends \Vnetby\Schemaorg\Types\Thing\Product\Vehicle\Vehicle
{
    const TYPE = 'BusOrCoach';

    /**
     * The permitted total weight of cargo and installations (e.g. a roof rack) on top of the vehicle.\n\nTypical unit code(s): KGM for
     * kilogram, LBR for pound\n\n* Note 1: You can indicate additional information in the [[name]] of the [[QuantitativeValue]] node.\n* Note 2: You
     * may also link to a [[QualitativeValue]] node that provides additional information using [[valueReference]]\n* Note 3: Note that you can use [[minValue]]
     * and [[maxValue]] to indicate ranges.
     * @var \Vnetby\Schemaorg\Types\Thing\Intangible\StructuredValue\QuantitativeValue\QuantitativeValue
     */
    protected $prop_roofLoad;

    /**
     * The ACRISS Car Classification Code is a code used by many car rental companies, for classifying vehicles. ACRISS stands for Association
     * of Car Rental Industry Systems and Standards.
     * @var \Vnetby\Schemaorg\DataTypes\DataText
     */
    protected $prop_acrissCode;

    /**
     * The permitted total weight of cargo and installations (e.g. a roof rack) on top of the vehicle.\n\nTypical unit code(s): KGM for
     * kilogram, LBR for pound\n\n* Note 1: You can indicate additional information in the [[name]] of the [[QuantitativeValue]] node.\n* Note 2: You
     * may also link to a [[QualitativeValue]] node that provides additional information using [[valueReference]]\n* Note 3: Note that you can use [[minValue]]
     * and [[maxValue]] to indicate ranges.
     * @param \Vnetby\Schemaorg\Types\Thing\Intangible\StructuredValue\QuantitativeValue\QuantitativeValue $value
     * @return static
     */
    function setRoofLoad($value)
    {
        return $this->setProp('roofLoad', $value);
    }

    /**
     * The ACRISS Car Classification Code is a code used by many car rental companies, for classifying vehicles. ACRISS stands for Association
     * of Car Rental Industry Systems and Standards.
     * @param \Vnetby\Schemaorg\DataTypes\DataText $value
     * @return static
     */
    function setAcrissCode($value)
    {
        return $this->setProp('acrissCode', $value);
    }

    /**
     * The permitted total weight of cargo and installations (e.g. a roof rack) on top of the vehicle.\n\nTypical unit code(s): KGM for
     * kilogram, LBR for pound\n\n* Note 1: You can indicate additional information in the [[name]] of the [[QuantitativeValue]] node.\n* Note 2: You
     * may also link to a [[QualitativeValue]] node that provides additional information using [[valueReference]]\n* Note 3: Note that you can use [[minValue]]
     * and [[maxValue]] to indicate ranges.
     * @return \Vnetby\Schemaorg\Types\Thing\Intangible\StructuredValue\QuantitativeValue\QuantitativeValue|null
     */
    function getRoofLoad()
    {
        return $this->getProp('roofLoad');
    }

    /**
     * The ACRISS Car Classification Code is a code used by many car rental companies, for classifying vehicles. ACRISS stands for Association
     * of Car Rental Industry Systems and Standards.
     * @return \Vnetby\Schemaorg\DataTypes\DataText|null
     */
    function getAcrissCode()
    {
        return $this->getProp('acrissCode');
    }
}
