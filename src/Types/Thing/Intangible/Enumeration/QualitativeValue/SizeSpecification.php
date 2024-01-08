<?php

/**
 * @see https://schema.org/SizeSpecification
 * Size related properties of a product, typically a size code ([[name]]) and optionally a [[sizeSystem]], [[sizeGroup]], and product measurements ([[hasMeasurement]]). In
 * addition, the intended audience can be defined through [[suggestedAge]], [[suggestedGender]], and suggested body measurements ([[suggestedMeasurement]]).
 */

namespace Vnetby\Schemaorg\Types\Thing\Intangible\Enumeration\QualitativeValue;

class SizeSpecification extends \Vnetby\Schemaorg\Types\Thing\Intangible\Enumeration\QualitativeValue\QualitativeValue
{
    const TYPE = 'SizeSpecification';

    /**
     * A suggested range of body measurements for the intended audience or person, for example inseam between 32 and 34 inches or
     * height between 170 and 190 cm. Typically found on a size chart for wearable products.
     * @var \Vnetby\Schemaorg\Types\Thing\Intangible\StructuredValue\QuantitativeValue\QuantitativeValue
     */
    public $suggestedMeasurement;

    /**
     * The size system used to identify a product's size. Typically either a standard (for example, "GS1" or "ISO-EN13402"), country code (for
     * example "US" or "JP"), or a measuring system (for example "Metric" or "Imperial").
     * @var string|\Vnetby\Schemaorg\Types\Thing\Intangible\Enumeration\SizeSystemEnumeration\SizeSystemEnumeration|\Vnetby\Schemaorg\DataTypes\DataText
     */
    public $sizeSystem;

    /**
     * A product measurement, for example the inseam of pants, the wheel size of a bicycle, or the gauge of a screw.
     * Usually an exact measurement, but can also be a range of measurements for adjustable products, for example belts and ski bindings.
     * @var \Vnetby\Schemaorg\Types\Thing\Intangible\StructuredValue\QuantitativeValue\QuantitativeValue
     */
    public $hasMeasurement;

    /**
     * The size group (also known as "size type") for a product's size. Size groups are common in the fashion industry to
     * define size segments and suggested audiences for wearable products. Multiple values can be combined, for example "men's big and tall", "petite
     * maternity" or "regular".
     * @var string|\Vnetby\Schemaorg\Types\Thing\Intangible\Enumeration\SizeGroupEnumeration\SizeGroupEnumeration|\Vnetby\Schemaorg\DataTypes\DataText
     */
    public $sizeGroup;

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
     * The size system used to identify a product's size. Typically either a standard (for example, "GS1" or "ISO-EN13402"), country code (for
     * example "US" or "JP"), or a measuring system (for example "Metric" or "Imperial").
     * @param string|\Vnetby\Schemaorg\Types\Thing\Intangible\Enumeration\SizeSystemEnumeration\SizeSystemEnumeration|\Vnetby\Schemaorg\DataTypes\DataText $value
     * @return static
     */
    function setSizeSystem($value)
    {
        return $this->setProp('sizeSystem', $value);
    }

    /**
     * A product measurement, for example the inseam of pants, the wheel size of a bicycle, or the gauge of a screw.
     * Usually an exact measurement, but can also be a range of measurements for adjustable products, for example belts and ski bindings.
     * @param \Vnetby\Schemaorg\Types\Thing\Intangible\StructuredValue\QuantitativeValue\QuantitativeValue $value
     * @return static
     */
    function setHasMeasurement($value)
    {
        return $this->setProp('hasMeasurement', $value);
    }

    /**
     * The size group (also known as "size type") for a product's size. Size groups are common in the fashion industry to
     * define size segments and suggested audiences for wearable products. Multiple values can be combined, for example "men's big and tall", "petite
     * maternity" or "regular".
     * @param string|\Vnetby\Schemaorg\Types\Thing\Intangible\Enumeration\SizeGroupEnumeration\SizeGroupEnumeration|\Vnetby\Schemaorg\DataTypes\DataText $value
     * @return static
     */
    function setSizeGroup($value)
    {
        return $this->setProp('sizeGroup', $value);
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
     * A suggested range of body measurements for the intended audience or person, for example inseam between 32 and 34 inches or
     * height between 170 and 190 cm. Typically found on a size chart for wearable products.
     * @return \Vnetby\Schemaorg\Types\Thing\Intangible\StructuredValue\QuantitativeValue\QuantitativeValue|null
     */
    function getSuggestedMeasurement()
    {
        return $this->getProp('suggestedMeasurement');
    }

    /**
     * The size system used to identify a product's size. Typically either a standard (for example, "GS1" or "ISO-EN13402"), country code (for
     * example "US" or "JP"), or a measuring system (for example "Metric" or "Imperial").
     * @return string|\Vnetby\Schemaorg\Types\Thing\Intangible\Enumeration\SizeSystemEnumeration\SizeSystemEnumeration|\Vnetby\Schemaorg\DataTypes\DataText|null
     */
    function getSizeSystem()
    {
        return $this->getProp('sizeSystem');
    }

    /**
     * A product measurement, for example the inseam of pants, the wheel size of a bicycle, or the gauge of a screw.
     * Usually an exact measurement, but can also be a range of measurements for adjustable products, for example belts and ski bindings.
     * @return \Vnetby\Schemaorg\Types\Thing\Intangible\StructuredValue\QuantitativeValue\QuantitativeValue|null
     */
    function getHasMeasurement()
    {
        return $this->getProp('hasMeasurement');
    }

    /**
     * The size group (also known as "size type") for a product's size. Size groups are common in the fashion industry to
     * define size segments and suggested audiences for wearable products. Multiple values can be combined, for example "men's big and tall", "petite
     * maternity" or "regular".
     * @return string|\Vnetby\Schemaorg\Types\Thing\Intangible\Enumeration\SizeGroupEnumeration\SizeGroupEnumeration|\Vnetby\Schemaorg\DataTypes\DataText|null
     */
    function getSizeGroup()
    {
        return $this->getProp('sizeGroup');
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
