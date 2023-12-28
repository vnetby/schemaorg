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
     * Specifies the minimum allowed range for number of characters in a literal value.
     * @var \Vnetby\Schemaorg\DataTypes\DataNumber
     */
    protected $prop_valueMinLength;

    /**
     * Specifies the allowed range for number of characters in a literal value.
     * @var \Vnetby\Schemaorg\DataTypes\DataNumber
     */
    protected $prop_valueMaxLength;

    /**
     * Specifies a regular expression for testing literal values according to the HTML spec.
     * @var \Vnetby\Schemaorg\DataTypes\DataText
     */
    protected $prop_valuePattern;

    /**
     * Whether the property must be filled in to complete the action. Default is false.
     * @var \Vnetby\Schemaorg\DataTypes\DataBoolean
     */
    protected $prop_valueRequired;

    /**
     * Indicates the name of the PropertyValueSpecification to be used in URL templates and form encoding in a manner analogous to HTML's
     * input@name.
     * @var \Vnetby\Schemaorg\DataTypes\DataText
     */
    protected $prop_valueName;

    /**
     * The lower value of some characteristic or property.
     * @var \Vnetby\Schemaorg\DataTypes\DataNumber
     */
    protected $prop_minValue;

    /**
     * Whether multiple values are allowed for the property. Default is false.
     * @var \Vnetby\Schemaorg\DataTypes\DataBoolean
     */
    protected $prop_multipleValues;

    /**
     * The default value of the input. For properties that expect a literal, the default is a literal value, for properties that
     * expect an object, it's an ID reference to one of the current values.
     * @var \Vnetby\Schemaorg\Types\Thing\Thing|\Vnetby\Schemaorg\DataTypes\DataText
     */
    protected $prop_defaultValue;

    /**
     * The upper value of some characteristic or property.
     * @var \Vnetby\Schemaorg\DataTypes\DataNumber
     */
    protected $prop_maxValue;

    /**
     * Whether or not a property is mutable. Default is false. Specifying this for a property that also has a value makes
     * it act similar to a "hidden" input in an HTML form.
     * @var \Vnetby\Schemaorg\DataTypes\DataBoolean
     */
    protected $prop_readonlyValue;

    /**
     * The stepValue attribute indicates the granularity that is expected (and required) of the value in a PropertyValueSpecification.
     * @var \Vnetby\Schemaorg\DataTypes\DataNumber
     */
    protected $prop_stepValue;

    /**
     * Specifies the minimum allowed range for number of characters in a literal value.
     * @param \Vnetby\Schemaorg\DataTypes\DataNumber $value
     * @return static
     */
    function setValueMinLength($value)
    {
        return $this->setProp('valueMinLength', $value);
    }

    /**
     * Specifies the allowed range for number of characters in a literal value.
     * @param \Vnetby\Schemaorg\DataTypes\DataNumber $value
     * @return static
     */
    function setValueMaxLength($value)
    {
        return $this->setProp('valueMaxLength', $value);
    }

    /**
     * Specifies a regular expression for testing literal values according to the HTML spec.
     * @param \Vnetby\Schemaorg\DataTypes\DataText $value
     * @return static
     */
    function setValuePattern($value)
    {
        return $this->setProp('valuePattern', $value);
    }

    /**
     * Whether the property must be filled in to complete the action. Default is false.
     * @param \Vnetby\Schemaorg\DataTypes\DataBoolean $value
     * @return static
     */
    function setValueRequired($value)
    {
        return $this->setProp('valueRequired', $value);
    }

    /**
     * Indicates the name of the PropertyValueSpecification to be used in URL templates and form encoding in a manner analogous to HTML's
     * input@name.
     * @param \Vnetby\Schemaorg\DataTypes\DataText $value
     * @return static
     */
    function setValueName($value)
    {
        return $this->setProp('valueName', $value);
    }

    /**
     * The lower value of some characteristic or property.
     * @param \Vnetby\Schemaorg\DataTypes\DataNumber $value
     * @return static
     */
    function setMinValue($value)
    {
        return $this->setProp('minValue', $value);
    }

    /**
     * Whether multiple values are allowed for the property. Default is false.
     * @param \Vnetby\Schemaorg\DataTypes\DataBoolean $value
     * @return static
     */
    function setMultipleValues($value)
    {
        return $this->setProp('multipleValues', $value);
    }

    /**
     * The default value of the input. For properties that expect a literal, the default is a literal value, for properties that
     * expect an object, it's an ID reference to one of the current values.
     * @param \Vnetby\Schemaorg\Types\Thing\Thing|\Vnetby\Schemaorg\DataTypes\DataText $value
     * @return static
     */
    function setDefaultValue($value)
    {
        return $this->setProp('defaultValue', $value);
    }

    /**
     * The upper value of some characteristic or property.
     * @param \Vnetby\Schemaorg\DataTypes\DataNumber $value
     * @return static
     */
    function setMaxValue($value)
    {
        return $this->setProp('maxValue', $value);
    }

    /**
     * Whether or not a property is mutable. Default is false. Specifying this for a property that also has a value makes
     * it act similar to a "hidden" input in an HTML form.
     * @param \Vnetby\Schemaorg\DataTypes\DataBoolean $value
     * @return static
     */
    function setReadonlyValue($value)
    {
        return $this->setProp('readonlyValue', $value);
    }

    /**
     * The stepValue attribute indicates the granularity that is expected (and required) of the value in a PropertyValueSpecification.
     * @param \Vnetby\Schemaorg\DataTypes\DataNumber $value
     * @return static
     */
    function setStepValue($value)
    {
        return $this->setProp('stepValue', $value);
    }

    /**
     * Specifies the minimum allowed range for number of characters in a literal value.
     * @return \Vnetby\Schemaorg\DataTypes\DataNumber|null
     */
    function getValueMinLength()
    {
        return $this->getProp('valueMinLength');
    }

    /**
     * Specifies the allowed range for number of characters in a literal value.
     * @return \Vnetby\Schemaorg\DataTypes\DataNumber|null
     */
    function getValueMaxLength()
    {
        return $this->getProp('valueMaxLength');
    }

    /**
     * Specifies a regular expression for testing literal values according to the HTML spec.
     * @return \Vnetby\Schemaorg\DataTypes\DataText|null
     */
    function getValuePattern()
    {
        return $this->getProp('valuePattern');
    }

    /**
     * Whether the property must be filled in to complete the action. Default is false.
     * @return \Vnetby\Schemaorg\DataTypes\DataBoolean|null
     */
    function getValueRequired()
    {
        return $this->getProp('valueRequired');
    }

    /**
     * Indicates the name of the PropertyValueSpecification to be used in URL templates and form encoding in a manner analogous to HTML's
     * input@name.
     * @return \Vnetby\Schemaorg\DataTypes\DataText|null
     */
    function getValueName()
    {
        return $this->getProp('valueName');
    }

    /**
     * The lower value of some characteristic or property.
     * @return \Vnetby\Schemaorg\DataTypes\DataNumber|null
     */
    function getMinValue()
    {
        return $this->getProp('minValue');
    }

    /**
     * Whether multiple values are allowed for the property. Default is false.
     * @return \Vnetby\Schemaorg\DataTypes\DataBoolean|null
     */
    function getMultipleValues()
    {
        return $this->getProp('multipleValues');
    }

    /**
     * The default value of the input. For properties that expect a literal, the default is a literal value, for properties that
     * expect an object, it's an ID reference to one of the current values.
     * @return \Vnetby\Schemaorg\Types\Thing\Thing|\Vnetby\Schemaorg\DataTypes\DataText|null
     */
    function getDefaultValue()
    {
        return $this->getProp('defaultValue');
    }

    /**
     * The upper value of some characteristic or property.
     * @return \Vnetby\Schemaorg\DataTypes\DataNumber|null
     */
    function getMaxValue()
    {
        return $this->getProp('maxValue');
    }

    /**
     * Whether or not a property is mutable. Default is false. Specifying this for a property that also has a value makes
     * it act similar to a "hidden" input in an HTML form.
     * @return \Vnetby\Schemaorg\DataTypes\DataBoolean|null
     */
    function getReadonlyValue()
    {
        return $this->getProp('readonlyValue');
    }

    /**
     * The stepValue attribute indicates the granularity that is expected (and required) of the value in a PropertyValueSpecification.
     * @return \Vnetby\Schemaorg\DataTypes\DataNumber|null
     */
    function getStepValue()
    {
        return $this->getProp('stepValue');
    }
}
