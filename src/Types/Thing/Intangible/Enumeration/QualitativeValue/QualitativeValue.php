<?php

/**
* @see https://schema.org/QualitativeValue
 * A predefined value for a product characteristic, e.g. the power cord plug type 'US' or the garment sizes 'S', 'M', 'L',
 * and 'XL'.
*/

namespace Vnetby\Schemaorg\Types\Thing\Intangible\Enumeration\QualitativeValue;

class QualitativeValue extends \Vnetby\Schemaorg\Types\Thing\Intangible\Enumeration\Enumeration
{
   const TYPE = 'QualitativeValue';

   /**
     * This ordering relation for qualitative values indicates that the subject is greater than the object.
    * @var \Vnetby\Schemaorg\Types\Thing\Intangible\Enumeration\QualitativeValue\QualitativeValue
    */
   protected $prop_greater;

   /**
     * This ordering relation for qualitative values indicates that the subject is greater than or equal to the object.
    * @var \Vnetby\Schemaorg\Types\Thing\Intangible\Enumeration\QualitativeValue\QualitativeValue
    */
   protected $prop_greaterOrEqual;

   /**
     * This ordering relation for qualitative values indicates that the subject is lesser than the object.
    * @var \Vnetby\Schemaorg\Types\Thing\Intangible\Enumeration\QualitativeValue\QualitativeValue
    */
   protected $prop_lesser;

   /**
     * This ordering relation for qualitative values indicates that the subject is lesser than or equal to the object.
    * @var \Vnetby\Schemaorg\Types\Thing\Intangible\Enumeration\QualitativeValue\QualitativeValue
    */
   protected $prop_lesserOrEqual;

   /**
     * This ordering relation for qualitative values indicates that the subject is equal to the object.
    * @var \Vnetby\Schemaorg\Types\Thing\Intangible\Enumeration\QualitativeValue\QualitativeValue
    */
   protected $prop_equal;

   /**
     * A property-value pair representing an additional characteristic of the entity, e.g. a product feature or another characteristic for which there is
     * no matching property in schema.org.\n\nNote: Publishers should be aware that applications designed to use specific schema.org properties (e.g. https://schema.org/width, https://schema.org/color, https://schema.org/gtin13,
     * ...) will typically expect such data to be provided using those properties, rather than using the generic property/value mechanism. 
    * @var \Vnetby\Schemaorg\Types\Thing\Intangible\StructuredValue\PropertyValue\PropertyValue
    */
   protected $prop_additionalProperty;

   /**
     * A secondary value that provides additional information on the original value, e.g. a reference temperature or a type of measurement.
    * @var \Vnetby\Schemaorg\Types\Thing\Intangible\StructuredValue\QuantitativeValue\QuantitativeValue|\Vnetby\Schemaorg\Types\Thing\Intangible\StructuredValue\PropertyValue\PropertyValue|\Vnetby\Schemaorg\Types\Thing\Intangible\StructuredValue\StructuredValue|\Vnetby\Schemaorg\DataTypes\DataText|\Vnetby\Schemaorg\Types\Thing\Intangible\DefinedTerm\DefinedTerm|\Vnetby\Schemaorg\Types\Thing\Intangible\Enumeration\Enumeration|\Vnetby\Schemaorg\Types\Thing\Intangible\Enumeration\QualitativeValue\QualitativeValue|\Vnetby\Schemaorg\Types\Thing\Intangible\Enumeration\MeasurementTypeEnumeration\MeasurementTypeEnumeration
    */
   protected $prop_valueReference;

   /**
     * This ordering relation for qualitative values indicates that the subject is not equal to the object.
    * @var \Vnetby\Schemaorg\Types\Thing\Intangible\Enumeration\QualitativeValue\QualitativeValue
    */
   protected $prop_nonEqual;

   /**
     * This ordering relation for qualitative values indicates that the subject is greater than the object.
    * @param \Vnetby\Schemaorg\Types\Thing\Intangible\Enumeration\QualitativeValue\QualitativeValue $value
    * @return static
    */
   function setGreater($value)
   {
       return $this->setProp('greater', $value);
   }

   /**
     * This ordering relation for qualitative values indicates that the subject is greater than or equal to the object.
    * @param \Vnetby\Schemaorg\Types\Thing\Intangible\Enumeration\QualitativeValue\QualitativeValue $value
    * @return static
    */
   function setGreaterOrEqual($value)
   {
       return $this->setProp('greaterOrEqual', $value);
   }

   /**
     * This ordering relation for qualitative values indicates that the subject is lesser than the object.
    * @param \Vnetby\Schemaorg\Types\Thing\Intangible\Enumeration\QualitativeValue\QualitativeValue $value
    * @return static
    */
   function setLesser($value)
   {
       return $this->setProp('lesser', $value);
   }

   /**
     * This ordering relation for qualitative values indicates that the subject is lesser than or equal to the object.
    * @param \Vnetby\Schemaorg\Types\Thing\Intangible\Enumeration\QualitativeValue\QualitativeValue $value
    * @return static
    */
   function setLesserOrEqual($value)
   {
       return $this->setProp('lesserOrEqual', $value);
   }

   /**
     * This ordering relation for qualitative values indicates that the subject is equal to the object.
    * @param \Vnetby\Schemaorg\Types\Thing\Intangible\Enumeration\QualitativeValue\QualitativeValue $value
    * @return static
    */
   function setEqual($value)
   {
       return $this->setProp('equal', $value);
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
     * A secondary value that provides additional information on the original value, e.g. a reference temperature or a type of measurement.
    * @param \Vnetby\Schemaorg\Types\Thing\Intangible\StructuredValue\QuantitativeValue\QuantitativeValue|\Vnetby\Schemaorg\Types\Thing\Intangible\StructuredValue\PropertyValue\PropertyValue|\Vnetby\Schemaorg\Types\Thing\Intangible\StructuredValue\StructuredValue|\Vnetby\Schemaorg\DataTypes\DataText|\Vnetby\Schemaorg\Types\Thing\Intangible\DefinedTerm\DefinedTerm|\Vnetby\Schemaorg\Types\Thing\Intangible\Enumeration\Enumeration|\Vnetby\Schemaorg\Types\Thing\Intangible\Enumeration\QualitativeValue\QualitativeValue|\Vnetby\Schemaorg\Types\Thing\Intangible\Enumeration\MeasurementTypeEnumeration\MeasurementTypeEnumeration $value
    * @return static
    */
   function setValueReference($value)
   {
       return $this->setProp('valueReference', $value);
   }

   /**
     * This ordering relation for qualitative values indicates that the subject is not equal to the object.
    * @param \Vnetby\Schemaorg\Types\Thing\Intangible\Enumeration\QualitativeValue\QualitativeValue $value
    * @return static
    */
   function setNonEqual($value)
   {
       return $this->setProp('nonEqual', $value);
   }

   /**
     * This ordering relation for qualitative values indicates that the subject is greater than the object.
    * @return \Vnetby\Schemaorg\Types\Thing\Intangible\Enumeration\QualitativeValue\QualitativeValue|null
    */
   function getGreater()
   {
       return $this->getProp('greater');
   }

   /**
     * This ordering relation for qualitative values indicates that the subject is greater than or equal to the object.
    * @return \Vnetby\Schemaorg\Types\Thing\Intangible\Enumeration\QualitativeValue\QualitativeValue|null
    */
   function getGreaterOrEqual()
   {
       return $this->getProp('greaterOrEqual');
   }

   /**
     * This ordering relation for qualitative values indicates that the subject is lesser than the object.
    * @return \Vnetby\Schemaorg\Types\Thing\Intangible\Enumeration\QualitativeValue\QualitativeValue|null
    */
   function getLesser()
   {
       return $this->getProp('lesser');
   }

   /**
     * This ordering relation for qualitative values indicates that the subject is lesser than or equal to the object.
    * @return \Vnetby\Schemaorg\Types\Thing\Intangible\Enumeration\QualitativeValue\QualitativeValue|null
    */
   function getLesserOrEqual()
   {
       return $this->getProp('lesserOrEqual');
   }

   /**
     * This ordering relation for qualitative values indicates that the subject is equal to the object.
    * @return \Vnetby\Schemaorg\Types\Thing\Intangible\Enumeration\QualitativeValue\QualitativeValue|null
    */
   function getEqual()
   {
       return $this->getProp('equal');
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
     * A secondary value that provides additional information on the original value, e.g. a reference temperature or a type of measurement.
    * @return \Vnetby\Schemaorg\Types\Thing\Intangible\StructuredValue\QuantitativeValue\QuantitativeValue|\Vnetby\Schemaorg\Types\Thing\Intangible\StructuredValue\PropertyValue\PropertyValue|\Vnetby\Schemaorg\Types\Thing\Intangible\StructuredValue\StructuredValue|\Vnetby\Schemaorg\DataTypes\DataText|\Vnetby\Schemaorg\Types\Thing\Intangible\DefinedTerm\DefinedTerm|\Vnetby\Schemaorg\Types\Thing\Intangible\Enumeration\Enumeration|\Vnetby\Schemaorg\Types\Thing\Intangible\Enumeration\QualitativeValue\QualitativeValue|\Vnetby\Schemaorg\Types\Thing\Intangible\Enumeration\MeasurementTypeEnumeration\MeasurementTypeEnumeration|null
    */
   function getValueReference()
   {
       return $this->getProp('valueReference');
   }

   /**
     * This ordering relation for qualitative values indicates that the subject is not equal to the object.
    * @return \Vnetby\Schemaorg\Types\Thing\Intangible\Enumeration\QualitativeValue\QualitativeValue|null
    */
   function getNonEqual()
   {
       return $this->getProp('nonEqual');
   }
}
