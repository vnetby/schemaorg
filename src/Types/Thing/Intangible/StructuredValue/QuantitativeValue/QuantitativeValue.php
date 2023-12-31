<?php

/**
 * @see https://schema.org/QuantitativeValue
 *  A point value or interval for product characteristics and other purposes.
 */

namespace Vnetby\Schemaorg\Types\Thing\Intangible\StructuredValue\QuantitativeValue;

class QuantitativeValue extends \Vnetby\Schemaorg\Types\Thing\Intangible\StructuredValue\StructuredValue
{
    const TYPE = 'QuantitativeValue';

    /**
     * The upper value of some characteristic or property.
     * @var string|int|float|\Vnetby\Schemaorg\DataTypes\DataNumber
     */
    public $maxValue;

    /**
     * The value of a [[QuantitativeValue]] (including [[Observation]]) or property value node.\n\n* For [[QuantitativeValue]] and [[MonetaryAmount]], the recommended type for values is
     * 'Number'.\n* For [[PropertyValue]], it can be 'Text', 'Number', 'Boolean', or 'StructuredValue'.\n* Use values from 0123456789 (Unicode 'DIGIT ZERO' (U+0030) to 'DIGIT
     * NINE' (U+0039)) rather than superficially similar Unicode symbols.\n* Use '.' (Unicode 'FULL STOP' (U+002E)) rather than ',' to indicate a decimal
     * point. Avoid using these symbols as a readability separator.
     * @var string|int|float|bool|\Vnetby\Schemaorg\DataTypes\DataNumber|\Vnetby\Schemaorg\DataTypes\DataBoolean|\Vnetby\Schemaorg\DataTypes\DataText|\Vnetby\Schemaorg\Types\Thing\Intangible\StructuredValue\StructuredValue
     */
    public $value;

    /**
     * A secondary value that provides additional information on the original value, e.g. a reference temperature or a type of measurement.
     * @var string|\Vnetby\Schemaorg\Types\Thing\Intangible\StructuredValue\StructuredValue|\Vnetby\Schemaorg\Types\Thing\Intangible\DefinedTerm\DefinedTerm|\Vnetby\Schemaorg\Types\Thing\Intangible\StructuredValue\QuantitativeValue\QuantitativeValue|\Vnetby\Schemaorg\DataTypes\DataText|\Vnetby\Schemaorg\Types\Thing\Intangible\Enumeration\Enumeration|\Vnetby\Schemaorg\Types\Thing\Intangible\Enumeration\MeasurementTypeEnumeration\MeasurementTypeEnumeration|\Vnetby\Schemaorg\Types\Thing\Intangible\StructuredValue\PropertyValue\PropertyValue|\Vnetby\Schemaorg\Types\Thing\Intangible\Enumeration\QualitativeValue\QualitativeValue
     */
    public $valueReference;

    /**
     * A string or text indicating the unit of measurement. Useful if you cannot provide a standard unit code for <a href='unitCode'>unitCode</a>.
     * @var string|\Vnetby\Schemaorg\DataTypes\DataText
     */
    public $unitText;

    /**
     * A property-value pair representing an additional characteristic of the entity, e.g. a product feature or another characteristic for which there is
     * no matching property in schema.org.\n\nNote: Publishers should be aware that applications designed to use specific schema.org properties (e.g. https://schema.org/width, https://schema.org/color, https://schema.org/gtin13,
     * ...) will typically expect such data to be provided using those properties, rather than using the generic property/value mechanism. 
     * @var \Vnetby\Schemaorg\Types\Thing\Intangible\StructuredValue\PropertyValue\PropertyValue
     */
    public $additionalProperty;

    /**
     * The lower value of some characteristic or property.
     * @var string|int|float|\Vnetby\Schemaorg\DataTypes\DataNumber
     */
    public $minValue;

    /**
     * The unit of measurement given using the UN/CEFACT Common Code (3 characters) or a URL. Other codes than the UN/CEFACT Common
     * Code may be used with a prefix followed by a colon.
     * @var string|\Vnetby\Schemaorg\DataTypes\DataText|\Vnetby\Schemaorg\DataTypes\DataURL
     */
    public $unitCode;

    /**
     * The upper value of some characteristic or property.
     * @param string|int|float|\Vnetby\Schemaorg\DataTypes\DataNumber $value
     * @return static
     */
    function setMaxValue($value)
    {
        return $this->setProp('maxValue', $value);
    }

    /**
     * The value of a [[QuantitativeValue]] (including [[Observation]]) or property value node.\n\n* For [[QuantitativeValue]] and [[MonetaryAmount]], the recommended type for values is
     * 'Number'.\n* For [[PropertyValue]], it can be 'Text', 'Number', 'Boolean', or 'StructuredValue'.\n* Use values from 0123456789 (Unicode 'DIGIT ZERO' (U+0030) to 'DIGIT
     * NINE' (U+0039)) rather than superficially similar Unicode symbols.\n* Use '.' (Unicode 'FULL STOP' (U+002E)) rather than ',' to indicate a decimal
     * point. Avoid using these symbols as a readability separator.
     * @param string|int|float|bool|\Vnetby\Schemaorg\DataTypes\DataNumber|\Vnetby\Schemaorg\DataTypes\DataBoolean|\Vnetby\Schemaorg\DataTypes\DataText|\Vnetby\Schemaorg\Types\Thing\Intangible\StructuredValue\StructuredValue $value
     * @return static
     */
    function setValue($value)
    {
        return $this->setProp('value', $value);
    }

    /**
     * A secondary value that provides additional information on the original value, e.g. a reference temperature or a type of measurement.
     * @param string|\Vnetby\Schemaorg\Types\Thing\Intangible\StructuredValue\StructuredValue|\Vnetby\Schemaorg\Types\Thing\Intangible\DefinedTerm\DefinedTerm|\Vnetby\Schemaorg\Types\Thing\Intangible\StructuredValue\QuantitativeValue\QuantitativeValue|\Vnetby\Schemaorg\DataTypes\DataText|\Vnetby\Schemaorg\Types\Thing\Intangible\Enumeration\Enumeration|\Vnetby\Schemaorg\Types\Thing\Intangible\Enumeration\MeasurementTypeEnumeration\MeasurementTypeEnumeration|\Vnetby\Schemaorg\Types\Thing\Intangible\StructuredValue\PropertyValue\PropertyValue|\Vnetby\Schemaorg\Types\Thing\Intangible\Enumeration\QualitativeValue\QualitativeValue $value
     * @return static
     */
    function setValueReference($value)
    {
        return $this->setProp('valueReference', $value);
    }

    /**
     * A string or text indicating the unit of measurement. Useful if you cannot provide a standard unit code for <a href='unitCode'>unitCode</a>.
     * @param string|\Vnetby\Schemaorg\DataTypes\DataText $value
     * @return static
     */
    function setUnitText($value)
    {
        return $this->setProp('unitText', $value);
    }

    /**
     * A property-value pair representing an additional characteristic of the entity, e.g. a product feature or another characteristic for which there is
     * no matching property in schema.org.\n\nNote: Publishers should be aware that applications designed to use specific schema.org properties (e.g. https://schema.org/width, https://schema.org/color, https://schema.org/gtin13,
     * ...) will typically expect such data to be provided using those properties, rather than using the generic property/value mechanism. 
     * @param \Vnetby\Schemaorg\Types\Thing\Intangible\StructuredValue\PropertyValue\PropertyValue $value
     * @return static
     */
    function setAdditionalProperty($value)
    {
        return $this->setProp('additionalProperty', $value);
    }

    /**
     * The lower value of some characteristic or property.
     * @param string|int|float|\Vnetby\Schemaorg\DataTypes\DataNumber $value
     * @return static
     */
    function setMinValue($value)
    {
        return $this->setProp('minValue', $value);
    }

    /**
     * The unit of measurement given using the UN/CEFACT Common Code (3 characters) or a URL. Other codes than the UN/CEFACT Common
     * Code may be used with a prefix followed by a colon.
     * @param string|\Vnetby\Schemaorg\DataTypes\DataText|\Vnetby\Schemaorg\DataTypes\DataURL $value
     * @return static
     */
    function setUnitCode($value)
    {
        return $this->setProp('unitCode', $value);
    }

    /**
     * The upper value of some characteristic or property.
     * @return string|int|float|\Vnetby\Schemaorg\DataTypes\DataNumber|null
     */
    function getMaxValue()
    {
        return $this->getProp('maxValue');
    }

    /**
     * The value of a [[QuantitativeValue]] (including [[Observation]]) or property value node.\n\n* For [[QuantitativeValue]] and [[MonetaryAmount]], the recommended type for values is
     * 'Number'.\n* For [[PropertyValue]], it can be 'Text', 'Number', 'Boolean', or 'StructuredValue'.\n* Use values from 0123456789 (Unicode 'DIGIT ZERO' (U+0030) to 'DIGIT
     * NINE' (U+0039)) rather than superficially similar Unicode symbols.\n* Use '.' (Unicode 'FULL STOP' (U+002E)) rather than ',' to indicate a decimal
     * point. Avoid using these symbols as a readability separator.
     * @return string|int|float|bool|\Vnetby\Schemaorg\DataTypes\DataNumber|\Vnetby\Schemaorg\DataTypes\DataBoolean|\Vnetby\Schemaorg\DataTypes\DataText|\Vnetby\Schemaorg\Types\Thing\Intangible\StructuredValue\StructuredValue|null
     */
    function getValue()
    {
        return $this->getProp('value');
    }

    /**
     * A secondary value that provides additional information on the original value, e.g. a reference temperature or a type of measurement.
     * @return string|\Vnetby\Schemaorg\Types\Thing\Intangible\StructuredValue\StructuredValue|\Vnetby\Schemaorg\Types\Thing\Intangible\DefinedTerm\DefinedTerm|\Vnetby\Schemaorg\Types\Thing\Intangible\StructuredValue\QuantitativeValue\QuantitativeValue|\Vnetby\Schemaorg\DataTypes\DataText|\Vnetby\Schemaorg\Types\Thing\Intangible\Enumeration\Enumeration|\Vnetby\Schemaorg\Types\Thing\Intangible\Enumeration\MeasurementTypeEnumeration\MeasurementTypeEnumeration|\Vnetby\Schemaorg\Types\Thing\Intangible\StructuredValue\PropertyValue\PropertyValue|\Vnetby\Schemaorg\Types\Thing\Intangible\Enumeration\QualitativeValue\QualitativeValue|null
     */
    function getValueReference()
    {
        return $this->getProp('valueReference');
    }

    /**
     * A string or text indicating the unit of measurement. Useful if you cannot provide a standard unit code for <a href='unitCode'>unitCode</a>.
     * @return string|\Vnetby\Schemaorg\DataTypes\DataText|null
     */
    function getUnitText()
    {
        return $this->getProp('unitText');
    }

    /**
     * A property-value pair representing an additional characteristic of the entity, e.g. a product feature or another characteristic for which there is
     * no matching property in schema.org.\n\nNote: Publishers should be aware that applications designed to use specific schema.org properties (e.g. https://schema.org/width, https://schema.org/color, https://schema.org/gtin13,
     * ...) will typically expect such data to be provided using those properties, rather than using the generic property/value mechanism. 
     * @return \Vnetby\Schemaorg\Types\Thing\Intangible\StructuredValue\PropertyValue\PropertyValue|null
     */
    function getAdditionalProperty()
    {
        return $this->getProp('additionalProperty');
    }

    /**
     * The lower value of some characteristic or property.
     * @return string|int|float|\Vnetby\Schemaorg\DataTypes\DataNumber|null
     */
    function getMinValue()
    {
        return $this->getProp('minValue');
    }

    /**
     * The unit of measurement given using the UN/CEFACT Common Code (3 characters) or a URL. Other codes than the UN/CEFACT Common
     * Code may be used with a prefix followed by a colon.
     * @return string|\Vnetby\Schemaorg\DataTypes\DataText|\Vnetby\Schemaorg\DataTypes\DataURL|null
     */
    function getUnitCode()
    {
        return $this->getProp('unitCode');
    }
}
