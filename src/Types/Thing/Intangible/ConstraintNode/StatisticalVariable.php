<?php

/**
* @see https://schema.org/StatisticalVariable
 * [[StatisticalVariable]] represents any type of statistical metric that can be measured at a place and time. The usage pattern for [[StatisticalVariable]]
 * is typically expressed using [[Observation]] with an explicit [[populationType]], which is a type, typically drawn from Schema.org. Each [[StatisticalVariable]] is marked
 * as a [[ConstraintNode]], meaning that some properties (those listed using [[constraintProperty]]) serve in this setting solely to define the statistical variable
 * rather than literally describe a specific person, place or thing. For example, a [[StatisticalVariable]] Median_Height_Person_Female representing the median height of women,
 * could be written as follows: the population type is [[Person]]; the measuredProperty [[height]]; the [[statType]] [[median]]; the [[gender]] [[Female]]. It is
 * important to note that there are many kinds of scientific quantitative observation which are not fully, perfectly or unambiguously described following
 * this pattern, or with solely Schema.org terminology. The approach taken here is designed to allow partial, incremental or minimal description of
 * [[StatisticalVariable]]s, and the use of detailed sets of entity and property IDs from external repositories. The [[measurementMethod]], [[unitCode]] and [[unitText]] properties
 * can also be used to clarify the specific nature and notation of an observed measurement. 
*/

namespace Vnetby\Schemaorg\Types\Thing\Intangible\ConstraintNode;

class StatisticalVariable extends \Vnetby\Schemaorg\Types\Thing\Intangible\ConstraintNode\ConstraintNode
{
   const TYPE = 'StatisticalVariable';

   /**
     * Provides additional qualification to an observation. For example, a GDP observation measures the Nominal value.
    * @var \Vnetby\Schemaorg\Types\Thing\Intangible\Enumeration\Enumeration
    */
   protected $prop_measurementQualifier;

   /**
     * A subproperty of [[measurementTechnique]] that can be used for specifying specific methods, in particular via [[MeasurementMethodEnum]].
    * @var \Vnetby\Schemaorg\DataTypes\DataText|\Vnetby\Schemaorg\Types\Thing\Intangible\DefinedTerm\DefinedTerm|\Vnetby\Schemaorg\Types\Thing\Intangible\Enumeration\MeasurementMethodEnum\MeasurementMethodEnum|\Vnetby\Schemaorg\DataTypes\DataURL
    */
   protected $prop_measurementMethod;

   /**
     * Indicates the kind of statistic represented by a [[StatisticalVariable]], e.g. mean, count etc. The value of statType is a property, either
     * from within Schema.org (e.g. [[count]], [[median]], [[marginOfError]], [[maxValue]], [[minValue]]) or from other compatible (e.g. RDF) systems such as DataCommons.org or Wikidata.org.
     * 
    * @var \Vnetby\Schemaorg\DataTypes\DataURL|\Vnetby\Schemaorg\Types\Thing\Intangible\Property|\Vnetby\Schemaorg\DataTypes\DataText
    */
   protected $prop_statType;

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
     * The measuredProperty of an [[Observation]], typically via its [[StatisticalVariable]]. There are various kinds of applicable [[Property]]: a schema.org property, a property
     * from other RDF-compatible systems, e.g. W3C RDF Data Cube, Data Commons, Wikidata, or schema.org extensions such as [GS1's](https://www.gs1.org/voc/?show=properties).
    * @var \Vnetby\Schemaorg\Types\Thing\Intangible\Property
    */
   protected $prop_measuredProperty;

   /**
     * Identifies the denominator variable when an observation represents a ratio or percentage.
    * @var \Vnetby\Schemaorg\Types\Thing\Intangible\ConstraintNode\StatisticalVariable
    */
   protected $prop_measurementDenominator;

   /**
     * Indicates the populationType common to all members of a [[StatisticalPopulation]] or all cases within the scope of a [[StatisticalVariable]].
    * @var \Vnetby\Schemaorg\Types\Thing\Intangible\Class
    */
   protected $prop_populationType;

   /**
     * Provides additional qualification to an observation. For example, a GDP observation measures the Nominal value.
    * @param \Vnetby\Schemaorg\Types\Thing\Intangible\Enumeration\Enumeration $value
    * @return static
    */
   function setMeasurementQualifier($value)
   {
       return $this->setProp('measurementQualifier', $value);
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
     * Indicates the kind of statistic represented by a [[StatisticalVariable]], e.g. mean, count etc. The value of statType is a property, either
     * from within Schema.org (e.g. [[count]], [[median]], [[marginOfError]], [[maxValue]], [[minValue]]) or from other compatible (e.g. RDF) systems such as DataCommons.org or Wikidata.org.
     * 
    * @param \Vnetby\Schemaorg\DataTypes\DataURL|\Vnetby\Schemaorg\Types\Thing\Intangible\Property|\Vnetby\Schemaorg\DataTypes\DataText $value
    * @return static
    */
   function setStatType($value)
   {
       return $this->setProp('statType', $value);
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
     * The measuredProperty of an [[Observation]], typically via its [[StatisticalVariable]]. There are various kinds of applicable [[Property]]: a schema.org property, a property
     * from other RDF-compatible systems, e.g. W3C RDF Data Cube, Data Commons, Wikidata, or schema.org extensions such as [GS1's](https://www.gs1.org/voc/?show=properties).
    * @param \Vnetby\Schemaorg\Types\Thing\Intangible\Property $value
    * @return static
    */
   function setMeasuredProperty($value)
   {
       return $this->setProp('measuredProperty', $value);
   }

   /**
     * Identifies the denominator variable when an observation represents a ratio or percentage.
    * @param \Vnetby\Schemaorg\Types\Thing\Intangible\ConstraintNode\StatisticalVariable $value
    * @return static
    */
   function setMeasurementDenominator($value)
   {
       return $this->setProp('measurementDenominator', $value);
   }

   /**
     * Indicates the populationType common to all members of a [[StatisticalPopulation]] or all cases within the scope of a [[StatisticalVariable]].
    * @param \Vnetby\Schemaorg\Types\Thing\Intangible\Class $value
    * @return static
    */
   function setPopulationType($value)
   {
       return $this->setProp('populationType', $value);
   }

   /**
     * Provides additional qualification to an observation. For example, a GDP observation measures the Nominal value.
    * @return \Vnetby\Schemaorg\Types\Thing\Intangible\Enumeration\Enumeration|null
    */
   function getMeasurementQualifier()
   {
       return $this->getProp('measurementQualifier');
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
     * Indicates the kind of statistic represented by a [[StatisticalVariable]], e.g. mean, count etc. The value of statType is a property, either
     * from within Schema.org (e.g. [[count]], [[median]], [[marginOfError]], [[maxValue]], [[minValue]]) or from other compatible (e.g. RDF) systems such as DataCommons.org or Wikidata.org.
     * 
    * @return \Vnetby\Schemaorg\DataTypes\DataURL|\Vnetby\Schemaorg\Types\Thing\Intangible\Property|\Vnetby\Schemaorg\DataTypes\DataText|null
    */
   function getStatType()
   {
       return $this->getProp('statType');
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
     * The measuredProperty of an [[Observation]], typically via its [[StatisticalVariable]]. There are various kinds of applicable [[Property]]: a schema.org property, a property
     * from other RDF-compatible systems, e.g. W3C RDF Data Cube, Data Commons, Wikidata, or schema.org extensions such as [GS1's](https://www.gs1.org/voc/?show=properties).
    * @return \Vnetby\Schemaorg\Types\Thing\Intangible\Property|null
    */
   function getMeasuredProperty()
   {
       return $this->getProp('measuredProperty');
   }

   /**
     * Identifies the denominator variable when an observation represents a ratio or percentage.
    * @return \Vnetby\Schemaorg\Types\Thing\Intangible\ConstraintNode\StatisticalVariable|null
    */
   function getMeasurementDenominator()
   {
       return $this->getProp('measurementDenominator');
   }

   /**
     * Indicates the populationType common to all members of a [[StatisticalPopulation]] or all cases within the scope of a [[StatisticalVariable]].
    * @return \Vnetby\Schemaorg\Types\Thing\Intangible\Class|null
    */
   function getPopulationType()
   {
       return $this->getProp('populationType');
   }
}
