<?php

/**
* @see https://schema.org/PropertyValue
 * A property-value pair, e.g. representing a feature of a product or place. Use the 'name' property for the name of the
 * property. If there is an additional human-readable version of the value, put that into the 'description' property.\n\n Always use specific schema.org
 * properties when a) they exist and b) you can populate them. Using PropertyValue as a substitute will typically not trigger the
 * same effect as using the original, specific property. 
*/

namespace Vnetby\Schemaorg\Types\Thing\Intangible\StructuredValue\PropertyValue;

class PropertyValue extends \Vnetby\Schemaorg\Types\Thing\Intangible\StructuredValue\StructuredValue
{
   const TYPE = 'PropertyValue';

   /**
     * A string or text indicating the unit of measurement. Useful if you cannot provide a standard unit code for <a href='unitCode'>unitCode</a>.
    * @var \Vnetby\Schemaorg\DataTypes\DataText
    */
   protected $prop_unitText;

   /**
     * The unit of measurement given using the UN/CEFACT Common Code (3 characters) or a URL. Other codes than the UN/CEFACT Common
     * Code may be used with a prefix followed by a colon.
    * @var \Vnetby\Schemaorg\DataTypes\DataURL|\Vnetby\Schemaorg\DataTypes\DataText
    */
   protected $prop_unitCode;

   /**
     * A subproperty of [[measurementTechnique]] that can be used for specifying specific methods, in particular via [[MeasurementMethodEnum]].
    * @var \Vnetby\Schemaorg\DataTypes\DataText|\Vnetby\Schemaorg\Types\Thing\Intangible\DefinedTerm\DefinedTerm|\Vnetby\Schemaorg\Types\Thing\Intangible\Enumeration\MeasurementMethodEnum\MeasurementMethodEnum|\Vnetby\Schemaorg\DataTypes\DataURL
    */
   protected $prop_measurementMethod;

   /**
     * A technique, method or technology used in an [[Observation]], [[StatisticalVariable]] or [[Dataset]] (or [[DataDownload]], [[DataCatalog]]), corresponding to the method used for
     * measuring the corresponding variable(s) (for datasets, described using [[variableMeasured]]; for [[Observation]], a [[StatisticalVariable]]). Often but not necessarily each [[variableMeasured]] will have
     * an explicit representation as (or mapping to) an property such as those defined in Schema.org, or other RDF vocabularies and "knowledge
     * graphs". In that case the subproperty of [[variableMeasured]] called [[measuredProperty]] is applicable. The [[measurementTechnique]] property helps when extra clarification is needed
     * about how a [[measuredProperty]] was measured. This is oriented towards scientific and scholarly dataset publication but may have broader applicability; it
     * is not intended as a full representation of measurement, but can often serve as a high level summary for dataset discovery.
     * For example, if [[variableMeasured]] is: molecule concentration, [[measurementTechnique]] could be: "mass spectrometry" or "nmr spectroscopy" or "colorimetry" or "immunofluorescence". If the
     * [[variableMeasured]] is "depression rating", the [[measurementTechnique]] could be "Zung Scale" or "HAM-D" or "Beck Depression Inventory". If there are several [[variableMeasured]]
     * properties recorded for some given data object, use a [[PropertyValue]] for each [[variableMeasured]] and attach the corresponding [[measurementTechnique]]. The value can
     * also be from an enumeration, organized as a [[MeasurementMetholdEnumeration]].
    * @var \Vnetby\Schemaorg\DataTypes\DataURL|\Vnetby\Schemaorg\Types\Thing\Intangible\Enumeration\MeasurementMethodEnum\MeasurementMethodEnum|\Vnetby\Schemaorg\DataTypes\DataText|\Vnetby\Schemaorg\Types\Thing\Intangible\DefinedTerm\DefinedTerm
    */
   protected $prop_measurementTechnique;

   /**
     * The value of a [[QuantitativeValue]] (including [[Observation]]) or property value node.\n\n* For [[QuantitativeValue]] and [[MonetaryAmount]], the recommended type for values is
     * 'Number'.\n* For [[PropertyValue]], it can be 'Text', 'Number', 'Boolean', or 'StructuredValue'.\n* Use values from 0123456789 (Unicode 'DIGIT ZERO' (U+0030) to 'DIGIT
     * NINE' (U+0039)) rather than superficially similar Unicode symbols.\n* Use '.' (Unicode 'FULL STOP' (U+002E)) rather than ',' to indicate a decimal
     * point. Avoid using these symbols as a readability separator.
    * @var \Vnetby\Schemaorg\DataTypes\DataNumber|\Vnetby\Schemaorg\Types\Thing\Intangible\StructuredValue\StructuredValue|\Vnetby\Schemaorg\DataTypes\DataBoolean|\Vnetby\Schemaorg\DataTypes\DataText
    */
   protected $prop_value;

   /**
     * A secondary value that provides additional information on the original value, e.g. a reference temperature or a type of measurement.
    * @var \Vnetby\Schemaorg\Types\Thing\Intangible\StructuredValue\QuantitativeValue\QuantitativeValue|\Vnetby\Schemaorg\Types\Thing\Intangible\StructuredValue\PropertyValue\PropertyValue|\Vnetby\Schemaorg\Types\Thing\Intangible\StructuredValue\StructuredValue|\Vnetby\Schemaorg\DataTypes\DataText|\Vnetby\Schemaorg\Types\Thing\Intangible\DefinedTerm\DefinedTerm|\Vnetby\Schemaorg\Types\Thing\Intangible\Enumeration\Enumeration|\Vnetby\Schemaorg\Types\Thing\Intangible\Enumeration\QualitativeValue\QualitativeValue|\Vnetby\Schemaorg\Types\Thing\Intangible\Enumeration\MeasurementTypeEnumeration\MeasurementTypeEnumeration
    */
   protected $prop_valueReference;

   /**
     * The lower value of some characteristic or property.
    * @var \Vnetby\Schemaorg\DataTypes\DataNumber
    */
   protected $prop_minValue;

   /**
     * The upper value of some characteristic or property.
    * @var \Vnetby\Schemaorg\DataTypes\DataNumber
    */
   protected $prop_maxValue;

   /**
     * A commonly used identifier for the characteristic represented by the property, e.g. a manufacturer or a standard code for a property.
     * propertyID can be (1) a prefixed string, mainly meant to be used with standards for product properties; (2) a site-specific, non-prefixed
     * string (e.g. the primary key of the property or the vendor-specific ID of the property), or (3) a URL indicating the
     * type of the property, either pointing to an external vocabulary, or a Web resource that describes the property (e.g. a glossary
     * entry). Standards bodies should promote a standard prefix for the identifiers of properties from their standards.
    * @var \Vnetby\Schemaorg\DataTypes\DataURL|\Vnetby\Schemaorg\DataTypes\DataText
    */
   protected $prop_propertyID;

   /**
     * A string or text indicating the unit of measurement. Useful if you cannot provide a standard unit code for <a href='unitCode'>unitCode</a>.
    * @param \Vnetby\Schemaorg\DataTypes\DataText $value
    * @return static
    */
   function setUnitText($value)
   {
       return $this->setProp('unitText', $value);
   }

   /**
     * The unit of measurement given using the UN/CEFACT Common Code (3 characters) or a URL. Other codes than the UN/CEFACT Common
     * Code may be used with a prefix followed by a colon.
    * @param \Vnetby\Schemaorg\DataTypes\DataURL|\Vnetby\Schemaorg\DataTypes\DataText $value
    * @return static
    */
   function setUnitCode($value)
   {
       return $this->setProp('unitCode', $value);
   }

   /**
     * A subproperty of [[measurementTechnique]] that can be used for specifying specific methods, in particular via [[MeasurementMethodEnum]].
    * @param \Vnetby\Schemaorg\DataTypes\DataText|\Vnetby\Schemaorg\Types\Thing\Intangible\DefinedTerm\DefinedTerm|\Vnetby\Schemaorg\Types\Thing\Intangible\Enumeration\MeasurementMethodEnum\MeasurementMethodEnum|\Vnetby\Schemaorg\DataTypes\DataURL $value
    * @return static
    */
   function setMeasurementMethod($value)
   {
       return $this->setProp('measurementMethod', $value);
   }

   /**
     * A technique, method or technology used in an [[Observation]], [[StatisticalVariable]] or [[Dataset]] (or [[DataDownload]], [[DataCatalog]]), corresponding to the method used for
     * measuring the corresponding variable(s) (for datasets, described using [[variableMeasured]]; for [[Observation]], a [[StatisticalVariable]]). Often but not necessarily each [[variableMeasured]] will have
     * an explicit representation as (or mapping to) an property such as those defined in Schema.org, or other RDF vocabularies and "knowledge
     * graphs". In that case the subproperty of [[variableMeasured]] called [[measuredProperty]] is applicable. The [[measurementTechnique]] property helps when extra clarification is needed
     * about how a [[measuredProperty]] was measured. This is oriented towards scientific and scholarly dataset publication but may have broader applicability; it
     * is not intended as a full representation of measurement, but can often serve as a high level summary for dataset discovery.
     * For example, if [[variableMeasured]] is: molecule concentration, [[measurementTechnique]] could be: "mass spectrometry" or "nmr spectroscopy" or "colorimetry" or "immunofluorescence". If the
     * [[variableMeasured]] is "depression rating", the [[measurementTechnique]] could be "Zung Scale" or "HAM-D" or "Beck Depression Inventory". If there are several [[variableMeasured]]
     * properties recorded for some given data object, use a [[PropertyValue]] for each [[variableMeasured]] and attach the corresponding [[measurementTechnique]]. The value can
     * also be from an enumeration, organized as a [[MeasurementMetholdEnumeration]].
    * @param \Vnetby\Schemaorg\DataTypes\DataURL|\Vnetby\Schemaorg\Types\Thing\Intangible\Enumeration\MeasurementMethodEnum\MeasurementMethodEnum|\Vnetby\Schemaorg\DataTypes\DataText|\Vnetby\Schemaorg\Types\Thing\Intangible\DefinedTerm\DefinedTerm $value
    * @return static
    */
   function setMeasurementTechnique($value)
   {
       return $this->setProp('measurementTechnique', $value);
   }

   /**
     * The value of a [[QuantitativeValue]] (including [[Observation]]) or property value node.\n\n* For [[QuantitativeValue]] and [[MonetaryAmount]], the recommended type for values is
     * 'Number'.\n* For [[PropertyValue]], it can be 'Text', 'Number', 'Boolean', or 'StructuredValue'.\n* Use values from 0123456789 (Unicode 'DIGIT ZERO' (U+0030) to 'DIGIT
     * NINE' (U+0039)) rather than superficially similar Unicode symbols.\n* Use '.' (Unicode 'FULL STOP' (U+002E)) rather than ',' to indicate a decimal
     * point. Avoid using these symbols as a readability separator.
    * @param \Vnetby\Schemaorg\DataTypes\DataNumber|\Vnetby\Schemaorg\Types\Thing\Intangible\StructuredValue\StructuredValue|\Vnetby\Schemaorg\DataTypes\DataBoolean|\Vnetby\Schemaorg\DataTypes\DataText $value
    * @return static
    */
   function setValue($value)
   {
       return $this->setProp('value', $value);
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
     * The lower value of some characteristic or property.
    * @param \Vnetby\Schemaorg\DataTypes\DataNumber $value
    * @return static
    */
   function setMinValue($value)
   {
       return $this->setProp('minValue', $value);
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
     * A commonly used identifier for the characteristic represented by the property, e.g. a manufacturer or a standard code for a property.
     * propertyID can be (1) a prefixed string, mainly meant to be used with standards for product properties; (2) a site-specific, non-prefixed
     * string (e.g. the primary key of the property or the vendor-specific ID of the property), or (3) a URL indicating the
     * type of the property, either pointing to an external vocabulary, or a Web resource that describes the property (e.g. a glossary
     * entry). Standards bodies should promote a standard prefix for the identifiers of properties from their standards.
    * @param \Vnetby\Schemaorg\DataTypes\DataURL|\Vnetby\Schemaorg\DataTypes\DataText $value
    * @return static
    */
   function setPropertyID($value)
   {
       return $this->setProp('propertyID', $value);
   }

   /**
     * A string or text indicating the unit of measurement. Useful if you cannot provide a standard unit code for <a href='unitCode'>unitCode</a>.
    * @return \Vnetby\Schemaorg\DataTypes\DataText|null
    */
   function getUnitText()
   {
       return $this->getProp('unitText');
   }

   /**
     * The unit of measurement given using the UN/CEFACT Common Code (3 characters) or a URL. Other codes than the UN/CEFACT Common
     * Code may be used with a prefix followed by a colon.
    * @return \Vnetby\Schemaorg\DataTypes\DataURL|\Vnetby\Schemaorg\DataTypes\DataText|null
    */
   function getUnitCode()
   {
       return $this->getProp('unitCode');
   }

   /**
     * A subproperty of [[measurementTechnique]] that can be used for specifying specific methods, in particular via [[MeasurementMethodEnum]].
    * @return \Vnetby\Schemaorg\DataTypes\DataText|\Vnetby\Schemaorg\Types\Thing\Intangible\DefinedTerm\DefinedTerm|\Vnetby\Schemaorg\Types\Thing\Intangible\Enumeration\MeasurementMethodEnum\MeasurementMethodEnum|\Vnetby\Schemaorg\DataTypes\DataURL|null
    */
   function getMeasurementMethod()
   {
       return $this->getProp('measurementMethod');
   }

   /**
     * A technique, method or technology used in an [[Observation]], [[StatisticalVariable]] or [[Dataset]] (or [[DataDownload]], [[DataCatalog]]), corresponding to the method used for
     * measuring the corresponding variable(s) (for datasets, described using [[variableMeasured]]; for [[Observation]], a [[StatisticalVariable]]). Often but not necessarily each [[variableMeasured]] will have
     * an explicit representation as (or mapping to) an property such as those defined in Schema.org, or other RDF vocabularies and "knowledge
     * graphs". In that case the subproperty of [[variableMeasured]] called [[measuredProperty]] is applicable. The [[measurementTechnique]] property helps when extra clarification is needed
     * about how a [[measuredProperty]] was measured. This is oriented towards scientific and scholarly dataset publication but may have broader applicability; it
     * is not intended as a full representation of measurement, but can often serve as a high level summary for dataset discovery.
     * For example, if [[variableMeasured]] is: molecule concentration, [[measurementTechnique]] could be: "mass spectrometry" or "nmr spectroscopy" or "colorimetry" or "immunofluorescence". If the
     * [[variableMeasured]] is "depression rating", the [[measurementTechnique]] could be "Zung Scale" or "HAM-D" or "Beck Depression Inventory". If there are several [[variableMeasured]]
     * properties recorded for some given data object, use a [[PropertyValue]] for each [[variableMeasured]] and attach the corresponding [[measurementTechnique]]. The value can
     * also be from an enumeration, organized as a [[MeasurementMetholdEnumeration]].
    * @return \Vnetby\Schemaorg\DataTypes\DataURL|\Vnetby\Schemaorg\Types\Thing\Intangible\Enumeration\MeasurementMethodEnum\MeasurementMethodEnum|\Vnetby\Schemaorg\DataTypes\DataText|\Vnetby\Schemaorg\Types\Thing\Intangible\DefinedTerm\DefinedTerm|null
    */
   function getMeasurementTechnique()
   {
       return $this->getProp('measurementTechnique');
   }

   /**
     * The value of a [[QuantitativeValue]] (including [[Observation]]) or property value node.\n\n* For [[QuantitativeValue]] and [[MonetaryAmount]], the recommended type for values is
     * 'Number'.\n* For [[PropertyValue]], it can be 'Text', 'Number', 'Boolean', or 'StructuredValue'.\n* Use values from 0123456789 (Unicode 'DIGIT ZERO' (U+0030) to 'DIGIT
     * NINE' (U+0039)) rather than superficially similar Unicode symbols.\n* Use '.' (Unicode 'FULL STOP' (U+002E)) rather than ',' to indicate a decimal
     * point. Avoid using these symbols as a readability separator.
    * @return \Vnetby\Schemaorg\DataTypes\DataNumber|\Vnetby\Schemaorg\Types\Thing\Intangible\StructuredValue\StructuredValue|\Vnetby\Schemaorg\DataTypes\DataBoolean|\Vnetby\Schemaorg\DataTypes\DataText|null
    */
   function getValue()
   {
       return $this->getProp('value');
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
     * The lower value of some characteristic or property.
    * @return \Vnetby\Schemaorg\DataTypes\DataNumber|null
    */
   function getMinValue()
   {
       return $this->getProp('minValue');
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
     * A commonly used identifier for the characteristic represented by the property, e.g. a manufacturer or a standard code for a property.
     * propertyID can be (1) a prefixed string, mainly meant to be used with standards for product properties; (2) a site-specific, non-prefixed
     * string (e.g. the primary key of the property or the vendor-specific ID of the property), or (3) a URL indicating the
     * type of the property, either pointing to an external vocabulary, or a Web resource that describes the property (e.g. a glossary
     * entry). Standards bodies should promote a standard prefix for the identifiers of properties from their standards.
    * @return \Vnetby\Schemaorg\DataTypes\DataURL|\Vnetby\Schemaorg\DataTypes\DataText|null
    */
   function getPropertyID()
   {
       return $this->getProp('propertyID');
   }
}
