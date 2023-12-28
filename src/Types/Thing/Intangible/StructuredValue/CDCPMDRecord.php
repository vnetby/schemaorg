<?php

/**
* @see https://schema.org/CDCPMDRecord
 * A CDCPMDRecord is a data structure representing a record in a CDC tabular data format used for hospital data reporting. See
 * [documentation](/docs/cdc-covid.html) for details, and the linked CDC materials for authoritative definitions used as the source here. 
*/

namespace Vnetby\Schemaorg\Types\Thing\Intangible\StructuredValue;

class CDCPMDRecord extends \Vnetby\Schemaorg\Types\Thing\Intangible\StructuredValue\StructuredValue
{
   const TYPE = 'CDCPMDRecord';

   /**
     * numc19died - DEATHS: Patients with suspected or confirmed COVID-19 who died in the hospital, ED, or any overflow location.
    * @var \Vnetby\Schemaorg\DataTypes\DataNumber
    */
   protected $prop_cvdNumC19Died;

   /**
     * numventuse - MECHANICAL VENTILATORS IN USE: Total number of ventilators in use.
    * @var \Vnetby\Schemaorg\DataTypes\DataNumber
    */
   protected $prop_cvdNumVentUse;

   /**
     * numc19ofmechventpats - ED/OVERFLOW and VENTILATED: Patients with suspected or confirmed COVID-19 who are in the ED or any overflow location awaiting
     * an inpatient bed and on a mechanical ventilator.
    * @var \Vnetby\Schemaorg\DataTypes\DataNumber
    */
   protected $prop_cvdNumC19OFMechVentPats;

   /**
     * numc19mechventpats - HOSPITALIZED and VENTILATED: Patients hospitalized in an NHSN inpatient care location who have suspected or confirmed COVID-19 and are
     * on a mechanical ventilator.
    * @var \Vnetby\Schemaorg\DataTypes\DataNumber
    */
   protected $prop_cvdNumC19MechVentPats;

   /**
     * numc19hopats - HOSPITAL ONSET: Patients hospitalized in an NHSN inpatient care location with onset of suspected or confirmed COVID-19 14 or
     * more days after hospitalization.
    * @var \Vnetby\Schemaorg\DataTypes\DataNumber
    */
   protected $prop_cvdNumC19HOPats;

   /**
     * numicubeds - ICU BEDS: Total number of staffed inpatient intensive care unit (ICU) beds.
    * @var \Vnetby\Schemaorg\DataTypes\DataNumber
    */
   protected $prop_cvdNumICUBeds;

   /**
     * numbedsocc - HOSPITAL INPATIENT BED OCCUPANCY: Total number of staffed inpatient beds that are occupied.
    * @var \Vnetby\Schemaorg\DataTypes\DataNumber
    */
   protected $prop_cvdNumBedsOcc;

   /**
     * numc19hosppats - HOSPITALIZED: Patients currently hospitalized in an inpatient care location who have suspected or confirmed COVID-19.
    * @var \Vnetby\Schemaorg\DataTypes\DataNumber
    */
   protected $prop_cvdNumC19HospPats;

   /**
     * numtotbeds - ALL HOSPITAL BEDS: Total number of all inpatient and outpatient beds, including all staffed, ICU, licensed, and overflow (surge)
     * beds used for inpatients or outpatients.
    * @var \Vnetby\Schemaorg\DataTypes\DataNumber
    */
   protected $prop_cvdNumTotBeds;

   /**
     * numvent - MECHANICAL VENTILATORS: Total number of ventilators available.
    * @var \Vnetby\Schemaorg\DataTypes\DataNumber
    */
   protected $prop_cvdNumVent;

   /**
     * collectiondate - Date for which patient counts are reported.
    * @var \Vnetby\Schemaorg\DataTypes\DataDateTime|\Vnetby\Schemaorg\DataTypes\DataText
    */
   protected $prop_cvdCollectionDate;

   /**
     * numc19overflowpats - ED/OVERFLOW: Patients with suspected or confirmed COVID-19 who are in the ED or any overflow location awaiting an inpatient
     * bed.
    * @var \Vnetby\Schemaorg\DataTypes\DataNumber
    */
   protected $prop_cvdNumC19OverflowPats;

   /**
     * numbeds - HOSPITAL INPATIENT BEDS: Inpatient beds, including all staffed, licensed, and overflow (surge) beds used for inpatients.
    * @var \Vnetby\Schemaorg\DataTypes\DataNumber
    */
   protected $prop_cvdNumBeds;

   /**
     * Identifier of the NHSN facility that this data record applies to. Use [[cvdFacilityCounty]] to indicate the county. To provide other details,
     * [[healthcareReportingData]] can be used on a [[Hospital]] entry.
    * @var \Vnetby\Schemaorg\DataTypes\DataText
    */
   protected $prop_cvdFacilityId;

   /**
     * Publication date of an online listing.
    * @var \Vnetby\Schemaorg\DataTypes\DataDateTime|\Vnetby\Schemaorg\DataTypes\DataDate
    */
   protected $prop_datePosted;

   /**
     * numicubedsocc - ICU BED OCCUPANCY: Total number of staffed inpatient ICU beds that are occupied.
    * @var \Vnetby\Schemaorg\DataTypes\DataNumber
    */
   protected $prop_cvdNumICUBedsOcc;

   /**
     * Name of the County of the NHSN facility that this data record applies to. Use [[cvdFacilityId]] to identify the facility. To
     * provide other details, [[healthcareReportingData]] can be used on a [[Hospital]] entry.
    * @var \Vnetby\Schemaorg\DataTypes\DataText
    */
   protected $prop_cvdFacilityCounty;

   /**
     * numc19died - DEATHS: Patients with suspected or confirmed COVID-19 who died in the hospital, ED, or any overflow location.
    * @param \Vnetby\Schemaorg\DataTypes\DataNumber $value
    * @return static
    */
   function setCvdNumC19Died($value)
   {
       return $this->setProp('cvdNumC19Died', $value);
   }

   /**
     * numventuse - MECHANICAL VENTILATORS IN USE: Total number of ventilators in use.
    * @param \Vnetby\Schemaorg\DataTypes\DataNumber $value
    * @return static
    */
   function setCvdNumVentUse($value)
   {
       return $this->setProp('cvdNumVentUse', $value);
   }

   /**
     * numc19ofmechventpats - ED/OVERFLOW and VENTILATED: Patients with suspected or confirmed COVID-19 who are in the ED or any overflow location awaiting
     * an inpatient bed and on a mechanical ventilator.
    * @param \Vnetby\Schemaorg\DataTypes\DataNumber $value
    * @return static
    */
   function setCvdNumC19OFMechVentPats($value)
   {
       return $this->setProp('cvdNumC19OFMechVentPats', $value);
   }

   /**
     * numc19mechventpats - HOSPITALIZED and VENTILATED: Patients hospitalized in an NHSN inpatient care location who have suspected or confirmed COVID-19 and are
     * on a mechanical ventilator.
    * @param \Vnetby\Schemaorg\DataTypes\DataNumber $value
    * @return static
    */
   function setCvdNumC19MechVentPats($value)
   {
       return $this->setProp('cvdNumC19MechVentPats', $value);
   }

   /**
     * numc19hopats - HOSPITAL ONSET: Patients hospitalized in an NHSN inpatient care location with onset of suspected or confirmed COVID-19 14 or
     * more days after hospitalization.
    * @param \Vnetby\Schemaorg\DataTypes\DataNumber $value
    * @return static
    */
   function setCvdNumC19HOPats($value)
   {
       return $this->setProp('cvdNumC19HOPats', $value);
   }

   /**
     * numicubeds - ICU BEDS: Total number of staffed inpatient intensive care unit (ICU) beds.
    * @param \Vnetby\Schemaorg\DataTypes\DataNumber $value
    * @return static
    */
   function setCvdNumICUBeds($value)
   {
       return $this->setProp('cvdNumICUBeds', $value);
   }

   /**
     * numbedsocc - HOSPITAL INPATIENT BED OCCUPANCY: Total number of staffed inpatient beds that are occupied.
    * @param \Vnetby\Schemaorg\DataTypes\DataNumber $value
    * @return static
    */
   function setCvdNumBedsOcc($value)
   {
       return $this->setProp('cvdNumBedsOcc', $value);
   }

   /**
     * numc19hosppats - HOSPITALIZED: Patients currently hospitalized in an inpatient care location who have suspected or confirmed COVID-19.
    * @param \Vnetby\Schemaorg\DataTypes\DataNumber $value
    * @return static
    */
   function setCvdNumC19HospPats($value)
   {
       return $this->setProp('cvdNumC19HospPats', $value);
   }

   /**
     * numtotbeds - ALL HOSPITAL BEDS: Total number of all inpatient and outpatient beds, including all staffed, ICU, licensed, and overflow (surge)
     * beds used for inpatients or outpatients.
    * @param \Vnetby\Schemaorg\DataTypes\DataNumber $value
    * @return static
    */
   function setCvdNumTotBeds($value)
   {
       return $this->setProp('cvdNumTotBeds', $value);
   }

   /**
     * numvent - MECHANICAL VENTILATORS: Total number of ventilators available.
    * @param \Vnetby\Schemaorg\DataTypes\DataNumber $value
    * @return static
    */
   function setCvdNumVent($value)
   {
       return $this->setProp('cvdNumVent', $value);
   }

   /**
     * collectiondate - Date for which patient counts are reported.
    * @param \Vnetby\Schemaorg\DataTypes\DataDateTime|\Vnetby\Schemaorg\DataTypes\DataText $value
    * @return static
    */
   function setCvdCollectionDate($value)
   {
       return $this->setProp('cvdCollectionDate', $value);
   }

   /**
     * numc19overflowpats - ED/OVERFLOW: Patients with suspected or confirmed COVID-19 who are in the ED or any overflow location awaiting an inpatient
     * bed.
    * @param \Vnetby\Schemaorg\DataTypes\DataNumber $value
    * @return static
    */
   function setCvdNumC19OverflowPats($value)
   {
       return $this->setProp('cvdNumC19OverflowPats', $value);
   }

   /**
     * numbeds - HOSPITAL INPATIENT BEDS: Inpatient beds, including all staffed, licensed, and overflow (surge) beds used for inpatients.
    * @param \Vnetby\Schemaorg\DataTypes\DataNumber $value
    * @return static
    */
   function setCvdNumBeds($value)
   {
       return $this->setProp('cvdNumBeds', $value);
   }

   /**
     * Identifier of the NHSN facility that this data record applies to. Use [[cvdFacilityCounty]] to indicate the county. To provide other details,
     * [[healthcareReportingData]] can be used on a [[Hospital]] entry.
    * @param \Vnetby\Schemaorg\DataTypes\DataText $value
    * @return static
    */
   function setCvdFacilityId($value)
   {
       return $this->setProp('cvdFacilityId', $value);
   }

   /**
     * Publication date of an online listing.
    * @param \Vnetby\Schemaorg\DataTypes\DataDateTime|\Vnetby\Schemaorg\DataTypes\DataDate $value
    * @return static
    */
   function setDatePosted($value)
   {
       return $this->setProp('datePosted', $value);
   }

   /**
     * numicubedsocc - ICU BED OCCUPANCY: Total number of staffed inpatient ICU beds that are occupied.
    * @param \Vnetby\Schemaorg\DataTypes\DataNumber $value
    * @return static
    */
   function setCvdNumICUBedsOcc($value)
   {
       return $this->setProp('cvdNumICUBedsOcc', $value);
   }

   /**
     * Name of the County of the NHSN facility that this data record applies to. Use [[cvdFacilityId]] to identify the facility. To
     * provide other details, [[healthcareReportingData]] can be used on a [[Hospital]] entry.
    * @param \Vnetby\Schemaorg\DataTypes\DataText $value
    * @return static
    */
   function setCvdFacilityCounty($value)
   {
       return $this->setProp('cvdFacilityCounty', $value);
   }

   /**
     * numc19died - DEATHS: Patients with suspected or confirmed COVID-19 who died in the hospital, ED, or any overflow location.
    * @return \Vnetby\Schemaorg\DataTypes\DataNumber|null
    */
   function getCvdNumC19Died()
   {
       return $this->getProp('cvdNumC19Died');
   }

   /**
     * numventuse - MECHANICAL VENTILATORS IN USE: Total number of ventilators in use.
    * @return \Vnetby\Schemaorg\DataTypes\DataNumber|null
    */
   function getCvdNumVentUse()
   {
       return $this->getProp('cvdNumVentUse');
   }

   /**
     * numc19ofmechventpats - ED/OVERFLOW and VENTILATED: Patients with suspected or confirmed COVID-19 who are in the ED or any overflow location awaiting
     * an inpatient bed and on a mechanical ventilator.
    * @return \Vnetby\Schemaorg\DataTypes\DataNumber|null
    */
   function getCvdNumC19OFMechVentPats()
   {
       return $this->getProp('cvdNumC19OFMechVentPats');
   }

   /**
     * numc19mechventpats - HOSPITALIZED and VENTILATED: Patients hospitalized in an NHSN inpatient care location who have suspected or confirmed COVID-19 and are
     * on a mechanical ventilator.
    * @return \Vnetby\Schemaorg\DataTypes\DataNumber|null
    */
   function getCvdNumC19MechVentPats()
   {
       return $this->getProp('cvdNumC19MechVentPats');
   }

   /**
     * numc19hopats - HOSPITAL ONSET: Patients hospitalized in an NHSN inpatient care location with onset of suspected or confirmed COVID-19 14 or
     * more days after hospitalization.
    * @return \Vnetby\Schemaorg\DataTypes\DataNumber|null
    */
   function getCvdNumC19HOPats()
   {
       return $this->getProp('cvdNumC19HOPats');
   }

   /**
     * numicubeds - ICU BEDS: Total number of staffed inpatient intensive care unit (ICU) beds.
    * @return \Vnetby\Schemaorg\DataTypes\DataNumber|null
    */
   function getCvdNumICUBeds()
   {
       return $this->getProp('cvdNumICUBeds');
   }

   /**
     * numbedsocc - HOSPITAL INPATIENT BED OCCUPANCY: Total number of staffed inpatient beds that are occupied.
    * @return \Vnetby\Schemaorg\DataTypes\DataNumber|null
    */
   function getCvdNumBedsOcc()
   {
       return $this->getProp('cvdNumBedsOcc');
   }

   /**
     * numc19hosppats - HOSPITALIZED: Patients currently hospitalized in an inpatient care location who have suspected or confirmed COVID-19.
    * @return \Vnetby\Schemaorg\DataTypes\DataNumber|null
    */
   function getCvdNumC19HospPats()
   {
       return $this->getProp('cvdNumC19HospPats');
   }

   /**
     * numtotbeds - ALL HOSPITAL BEDS: Total number of all inpatient and outpatient beds, including all staffed, ICU, licensed, and overflow (surge)
     * beds used for inpatients or outpatients.
    * @return \Vnetby\Schemaorg\DataTypes\DataNumber|null
    */
   function getCvdNumTotBeds()
   {
       return $this->getProp('cvdNumTotBeds');
   }

   /**
     * numvent - MECHANICAL VENTILATORS: Total number of ventilators available.
    * @return \Vnetby\Schemaorg\DataTypes\DataNumber|null
    */
   function getCvdNumVent()
   {
       return $this->getProp('cvdNumVent');
   }

   /**
     * collectiondate - Date for which patient counts are reported.
    * @return \Vnetby\Schemaorg\DataTypes\DataDateTime|\Vnetby\Schemaorg\DataTypes\DataText|null
    */
   function getCvdCollectionDate()
   {
       return $this->getProp('cvdCollectionDate');
   }

   /**
     * numc19overflowpats - ED/OVERFLOW: Patients with suspected or confirmed COVID-19 who are in the ED or any overflow location awaiting an inpatient
     * bed.
    * @return \Vnetby\Schemaorg\DataTypes\DataNumber|null
    */
   function getCvdNumC19OverflowPats()
   {
       return $this->getProp('cvdNumC19OverflowPats');
   }

   /**
     * numbeds - HOSPITAL INPATIENT BEDS: Inpatient beds, including all staffed, licensed, and overflow (surge) beds used for inpatients.
    * @return \Vnetby\Schemaorg\DataTypes\DataNumber|null
    */
   function getCvdNumBeds()
   {
       return $this->getProp('cvdNumBeds');
   }

   /**
     * Identifier of the NHSN facility that this data record applies to. Use [[cvdFacilityCounty]] to indicate the county. To provide other details,
     * [[healthcareReportingData]] can be used on a [[Hospital]] entry.
    * @return \Vnetby\Schemaorg\DataTypes\DataText|null
    */
   function getCvdFacilityId()
   {
       return $this->getProp('cvdFacilityId');
   }

   /**
     * Publication date of an online listing.
    * @return \Vnetby\Schemaorg\DataTypes\DataDateTime|\Vnetby\Schemaorg\DataTypes\DataDate|null
    */
   function getDatePosted()
   {
       return $this->getProp('datePosted');
   }

   /**
     * numicubedsocc - ICU BED OCCUPANCY: Total number of staffed inpatient ICU beds that are occupied.
    * @return \Vnetby\Schemaorg\DataTypes\DataNumber|null
    */
   function getCvdNumICUBedsOcc()
   {
       return $this->getProp('cvdNumICUBedsOcc');
   }

   /**
     * Name of the County of the NHSN facility that this data record applies to. Use [[cvdFacilityId]] to identify the facility. To
     * provide other details, [[healthcareReportingData]] can be used on a [[Hospital]] entry.
    * @return \Vnetby\Schemaorg\DataTypes\DataText|null
    */
   function getCvdFacilityCounty()
   {
       return $this->getProp('cvdFacilityCounty');
   }
}
