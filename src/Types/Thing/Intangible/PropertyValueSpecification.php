<?php

/**
 * @see https://schema.org/PropertyValueSpecification
 * A Property value specification.
 */

namespace Vnetby\Schemaorg\Types\Thing\Intangible;

class PropertyValueSpecification extends \Vnetby\Schemaorg\Types\Thing\Intangible\Intangible
{
    const TYPE = 'PropertyValueSpecification';

    /**
     * The upper value of some characteristic or property.
     * @var string|int|float|\Vnetby\Schemaorg\DataTypes\DataNumber
     */
    public $maxValue;

    /**
     * The stepValue attribute indicates the granularity that is expected (and required) of the value in a PropertyValueSpecification.
     * @var string|int|float|\Vnetby\Schemaorg\DataTypes\DataNumber
     */
    public $stepValue;

    /**
     * The default value of the input. For properties that expect a literal, the default is a literal value, for properties that
     * expect an object, it's an ID reference to one of the current values.
     * @var string|\Vnetby\Schemaorg\DataTypes\DataText|\Vnetby\Schemaorg\Types\Thing\Thing
     */
    public $defaultValue;

    /**
     * Whether the property must be filled in to complete the action. Default is false.
     * @var bool|\Vnetby\Schemaorg\DataTypes\DataBoolean
     */
    public $valueRequired;

    /**
     * The lower value of some characteristic or property.
     * @var string|int|float|\Vnetby\Schemaorg\DataTypes\DataNumber
     */
    public $minValue;

    /**
     * Specifies the allowed range for number of characters in a literal value.
     * @var string|int|float|\Vnetby\Schemaorg\DataTypes\DataNumber
     */
    public $valueMaxLength;

    /**
     * Whether multiple values are allowed for the property. Default is false.
     * @var bool|\Vnetby\Schemaorg\DataTypes\DataBoolean
     */
    public $multipleValues;

    /**
     * Specifies a regular expression for testing literal values according to the HTML spec.
     * @var string|\Vnetby\Schemaorg\DataTypes\DataText
     */
    public $valuePattern;

    /**
     * Whether or not a property is mutable. Default is false. Specifying this for a property that also has a value makes
     * it act similar to a "hidden" input in an HTML form.
     * @var bool|\Vnetby\Schemaorg\DataTypes\DataBoolean
     */
    public $readonlyValue;

    /**
     * Specifies the minimum allowed range for number of characters in a literal value.
     * @var string|int|float|\Vnetby\Schemaorg\DataTypes\DataNumber
     */
    public $valueMinLength;

    /**
     * Indicates the name of the PropertyValueSpecification to be used in URL templates and form encoding in a manner analogous to HTML's
     * input@name.
     * @var string|\Vnetby\Schemaorg\DataTypes\DataText
     */
    public $valueName;

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
     * The stepValue attribute indicates the granularity that is expected (and required) of the value in a PropertyValueSpecification.
     * @param string|int|float|\Vnetby\Schemaorg\DataTypes\DataNumber $value
     * @return static
     */
    function setStepValue($value)
    {
        return $this->setProp('stepValue', $value);
    }

    /**
     * The default value of the input. For properties that expect a literal, the default is a literal value, for properties that
     * expect an object, it's an ID reference to one of the current values.
     * @param string|\Vnetby\Schemaorg\DataTypes\DataText|\Vnetby\Schemaorg\Types\Thing\Thing $value
     * @return static
     */
    function setDefaultValue($value)
    {
        return $this->setProp('defaultValue', $value);
    }

    /**
     * Whether the property must be filled in to complete the action. Default is false.
     * @param bool|\Vnetby\Schemaorg\DataTypes\DataBoolean $value
     * @return static
     */
    function setValueRequired($value)
    {
        return $this->setProp('valueRequired', $value);
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
     * Specifies the allowed range for number of characters in a literal value.
     * @param string|int|float|\Vnetby\Schemaorg\DataTypes\DataNumber $value
     * @return static
     */
    function setValueMaxLength($value)
    {
        return $this->setProp('valueMaxLength', $value);
    }

    /**
     * Whether multiple values are allowed for the property. Default is false.
     * @param bool|\Vnetby\Schemaorg\DataTypes\DataBoolean $value
     * @return static
     */
    function setMultipleValues($value)
    {
        return $this->setProp('multipleValues', $value);
    }

    /**
     * Specifies a regular expression for testing literal values according to the HTML spec.
     * @param string|\Vnetby\Schemaorg\DataTypes\DataText $value
     * @return static
     */
    function setValuePattern($value)
    {
        return $this->setProp('valuePattern', $value);
    }

    /**
     * Whether or not a property is mutable. Default is false. Specifying this for a property that also has a value makes
     * it act similar to a "hidden" input in an HTML form.
     * @param bool|\Vnetby\Schemaorg\DataTypes\DataBoolean $value
     * @return static
     */
    function setReadonlyValue($value)
    {
        return $this->setProp('readonlyValue', $value);
    }

    /**
     * Specifies the minimum allowed range for number of characters in a literal value.
     * @param string|int|float|\Vnetby\Schemaorg\DataTypes\DataNumber $value
     * @return static
     */
    function setValueMinLength($value)
    {
        return $this->setProp('valueMinLength', $value);
    }

    /**
     * Indicates the name of the PropertyValueSpecification to be used in URL templates and form encoding in a manner analogous to HTML's
     * input@name.
     * @param string|\Vnetby\Schemaorg\DataTypes\DataText $value
     * @return static
     */
    function setValueName($value)
    {
        return $this->setProp('valueName', $value);
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
     * The stepValue attribute indicates the granularity that is expected (and required) of the value in a PropertyValueSpecification.
     * @return string|int|float|\Vnetby\Schemaorg\DataTypes\DataNumber|null
     */
    function getStepValue()
    {
        return $this->getProp('stepValue');
    }

    /**
     * The default value of the input. For properties that expect a literal, the default is a literal value, for properties that
     * expect an object, it's an ID reference to one of the current values.
     * @return string|\Vnetby\Schemaorg\DataTypes\DataText|\Vnetby\Schemaorg\Types\Thing\Thing|null
     */
    function getDefaultValue()
    {
        return $this->getProp('defaultValue');
    }

    /**
     * Whether the property must be filled in to complete the action. Default is false.
     * @return bool|\Vnetby\Schemaorg\DataTypes\DataBoolean|null
     */
    function getValueRequired()
    {
        return $this->getProp('valueRequired');
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
     * Specifies the allowed range for number of characters in a literal value.
     * @return string|int|float|\Vnetby\Schemaorg\DataTypes\DataNumber|null
     */
    function getValueMaxLength()
    {
        return $this->getProp('valueMaxLength');
    }

    /**
     * Whether multiple values are allowed for the property. Default is false.
     * @return bool|\Vnetby\Schemaorg\DataTypes\DataBoolean|null
     */
    function getMultipleValues()
    {
        return $this->getProp('multipleValues');
    }

    /**
     * Specifies a regular expression for testing literal values according to the HTML spec.
     * @return string|\Vnetby\Schemaorg\DataTypes\DataText|null
     */
    function getValuePattern()
    {
        return $this->getProp('valuePattern');
    }

    /**
     * Whether or not a property is mutable. Default is false. Specifying this for a property that also has a value makes
     * it act similar to a "hidden" input in an HTML form.
     * @return bool|\Vnetby\Schemaorg\DataTypes\DataBoolean|null
     */
    function getReadonlyValue()
    {
        return $this->getProp('readonlyValue');
    }

    /**
     * Specifies the minimum allowed range for number of characters in a literal value.
     * @return string|int|float|\Vnetby\Schemaorg\DataTypes\DataNumber|null
     */
    function getValueMinLength()
    {
        return $this->getProp('valueMinLength');
    }

    /**
     * Indicates the name of the PropertyValueSpecification to be used in URL templates and form encoding in a manner analogous to HTML's
     * input@name.
     * @return string|\Vnetby\Schemaorg\DataTypes\DataText|null
     */
    function getValueName()
    {
        return $this->getProp('valueName');
    }
}
