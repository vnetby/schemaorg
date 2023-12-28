<?php

/**
* @see https://schema.org/Observation
 * Instances of the class [[Observation]] are used to specify observations about an entity at a particular time. The principal properties of
 * an [[Observation]] are [[observationAbout]], [[measuredProperty]], [[statType]], [[value] and [[observationDate]] and [[measuredProperty]]. Some but not all Observations represent a [[QuantitativeValue]]. Quantitative observations
 * can be about a [[StatisticalVariable]], which is an abstract specification about which we can make observations that are grounded at a
 * particular location and time. Observations can also encode a subset of simple RDF-like statements (its observationAbout, a StatisticalVariable, defining the measuredPoperty;
 * its observationAbout property indicating the entity the statement is about, and [[value]] ) In the context of a quantitative knowledge graph,
 * typical properties could include [[measuredProperty]], [[observationAbout]], [[observationDate]], [[value]], [[unitCode]], [[unitText]], [[measurementMethod]]. 
*/

namespace Vnetby\Schemaorg\Types\Thing\Intangible\StructuredValue\QuantitativeValue;

class Observation extends \Vnetby\Schemaorg\Types\Thing\Intangible\StructuredValue\QuantitativeValue\QuantitativeValue
{
   const TYPE = 'Observation';

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
     * The [[observationAbout]] property identifies an entity, often a [[Place]], associated with an [[Observation]].
    * @var \Vnetby\Schemaorg\Types\Thing\Thing|\Vnetby\Schemaorg\Types\Thing\Place\Place
    */
   protected $prop_observationAbout;

   /**
     * The length of time an Observation took place over. The format follows `P[0-9]*[Y|M|D|h|m|s]`. For example, P1Y is Period 1 Year, P3M
     * is Period 3 Months, P3h is Period 3 hours.
    * @var \Vnetby\Schemaorg\DataTypes\DataText
    */
   protected $prop_observationPeriod;

   /**
     * The variableMeasured property can indicate (repeated as necessary) the variables that are measured in some dataset, either described as text or
     * as pairs of identifier and description using PropertyValue, or more explicitly as a [[StatisticalVariable]].
    * @var \Vnetby\Schemaorg\Types\Thing\Intangible\StructuredValue\PropertyValue\PropertyValue|\Vnetby\Schemaorg\Types\Thing\Intangible\Property|\Vnetby\Schemaorg\DataTypes\DataText|\Vnetby\Schemaorg\Types\Thing\Intangible\ConstraintNode\StatisticalVariable
    */
   protected $prop_variableMeasured;

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
     * The observationDate of an [[Observation]].
    * @var \Vnetby\Schemaorg\DataTypes\DataDateTime
    */
   protected $prop_observationDate;

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
     * A [[marginOfError]] for an [[Observation]].
    * @var \Vnetby\Schemaorg\Types\Thing\Intangible\StructuredValue\QuantitativeValue\QuantitativeValue
    */
   protected $prop_marginOfError;

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
     * The [[observationAbout]] property identifies an entity, often a [[Place]], associated with an [[Observation]].
    * @param \Vnetby\Schemaorg\Types\Thing\Thing|\Vnetby\Schemaorg\Types\Thing\Place\Place $value
    * @return static
    */
   function setObservationAbout($value)
   {
       return $this->setProp('observationAbout', $value);
   }

   /**
     * The length of time an Observation took place over. The format follows `P[0-9]*[Y|M|D|h|m|s]`. For example, P1Y is Period 1 Year, P3M
     * is Period 3 Months, P3h is Period 3 hours.
    * @param \Vnetby\Schemaorg\DataTypes\DataText $value
    * @return static
    */
   function setObservationPeriod($value)
   {
       return $this->setProp('observationPeriod', $value);
   }

   /**
     * The variableMeasured property can indicate (repeated as necessary) the variables that are measured in some dataset, either described as text or
     * as pairs of identifier and description using PropertyValue, or more explicitly as a [[StatisticalVariable]].
    * @param \Vnetby\Schemaorg\Types\Thing\Intangible\StructuredValue\PropertyValue\PropertyValue|\Vnetby\Schemaorg\Types\Thing\Intangible\Property|\Vnetby\Schemaorg\DataTypes\DataText|\Vnetby\Schemaorg\Types\Thing\Intangible\ConstraintNode\StatisticalVariable $value
    * @return static
    */
   function setVariableMeasured($value)
   {
       return $this->setProp('variableMeasured', $value);
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
     * The observationDate of an [[Observation]].
    * @param \Vnetby\Schemaorg\DataTypes\DataDateTime $value
    * @return static
    */
   function setObservationDate($value)
   {
       return $this->setProp('observationDate', $value);
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
     * A [[marginOfError]] for an [[Observation]].
    * @param \Vnetby\Schemaorg\Types\Thing\Intangible\StructuredValue\QuantitativeValue\QuantitativeValue $value
    * @return static
    */
   function setMarginOfError($value)
   {
       return $this->setProp('marginOfError', $value);
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
     * The [[observationAbout]] property identifies an entity, often a [[Place]], associated with an [[Observation]].
    * @return \Vnetby\Schemaorg\Types\Thing\Thing|\Vnetby\Schemaorg\Types\Thing\Place\Place|null
    */
   function getObservationAbout()
   {
       return $this->getProp('observationAbout');
   }

   /**
     * The length of time an Observation took place over. The format follows `P[0-9]*[Y|M|D|h|m|s]`. For example, P1Y is Period 1 Year, P3M
     * is Period 3 Months, P3h is Period 3 hours.
    * @return \Vnetby\Schemaorg\DataTypes\DataText|null
    */
   function getObservationPeriod()
   {
       return $this->getProp('observationPeriod');
   }

   /**
     * The variableMeasured property can indicate (repeated as necessary) the variables that are measured in some dataset, either described as text or
     * as pairs of identifier and description using PropertyValue, or more explicitly as a [[StatisticalVariable]].
    * @return \Vnetby\Schemaorg\Types\Thing\Intangible\StructuredValue\PropertyValue\PropertyValue|\Vnetby\Schemaorg\Types\Thing\Intangible\Property|\Vnetby\Schemaorg\DataTypes\DataText|\Vnetby\Schemaorg\Types\Thing\Intangible\ConstraintNode\StatisticalVariable|null
    */
   function getVariableMeasured()
   {
       return $this->getProp('variableMeasured');
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
     * The observationDate of an [[Observation]].
    * @return \Vnetby\Schemaorg\DataTypes\DataDateTime|null
    */
   function getObservationDate()
   {
       return $this->getProp('observationDate');
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
     * A [[marginOfError]] for an [[Observation]].
    * @return \Vnetby\Schemaorg\Types\Thing\Intangible\StructuredValue\QuantitativeValue\QuantitativeValue|null
    */
   function getMarginOfError()
   {
       return $this->getProp('marginOfError');
   }
}
