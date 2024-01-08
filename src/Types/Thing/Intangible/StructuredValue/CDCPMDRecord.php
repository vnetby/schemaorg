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
     * numicubeds - ICU BEDS: Total number of staffed inpatient intensive care unit (ICU) beds.
     * @var string|int|float|\Vnetby\Schemaorg\DataTypes\DataNumber
     */
    public $cvdNumICUBeds;

    /**
     * numvent - MECHANICAL VENTILATORS: Total number of ventilators available.
     * @var string|int|float|\Vnetby\Schemaorg\DataTypes\DataNumber
     */
    public $cvdNumVent;

    /**
     * collectiondate - Date for which patient counts are reported.
     * @var string|\Vnetby\Schemaorg\DataTypes\DataText|\Vnetby\Schemaorg\DataTypes\DataDateTime
     */
    public $cvdCollectionDate;

    /**
     * numbedsocc - HOSPITAL INPATIENT BED OCCUPANCY: Total number of staffed inpatient beds that are occupied.
     * @var string|int|float|\Vnetby\Schemaorg\DataTypes\DataNumber
     */
    public $cvdNumBedsOcc;

    /**
     * numicubedsocc - ICU BED OCCUPANCY: Total number of staffed inpatient ICU beds that are occupied.
     * @var string|int|float|\Vnetby\Schemaorg\DataTypes\DataNumber
     */
    public $cvdNumICUBedsOcc;

    /**
     * Identifier of the NHSN facility that this data record applies to. Use [[cvdFacilityCounty]] to indicate the county. To provide other details,
     * [[healthcareReportingData]] can be used on a [[Hospital]] entry.
     * @var string|\Vnetby\Schemaorg\DataTypes\DataText
     */
    public $cvdFacilityId;

    /**
     * numc19hopats - HOSPITAL ONSET: Patients hospitalized in an NHSN inpatient care location with onset of suspected or confirmed COVID-19 14 or
     * more days after hospitalization.
     * @var string|int|float|\Vnetby\Schemaorg\DataTypes\DataNumber
     */
    public $cvdNumC19HOPats;

    /**
     * numtotbeds - ALL HOSPITAL BEDS: Total number of all inpatient and outpatient beds, including all staffed, ICU, licensed, and overflow (surge)
     * beds used for inpatients or outpatients.
     * @var string|int|float|\Vnetby\Schemaorg\DataTypes\DataNumber
     */
    public $cvdNumTotBeds;

    /**
     * Publication date of an online listing.
     * @var string|\Vnetby\Schemaorg\DataTypes\DataDateTime|\Vnetby\Schemaorg\DataTypes\DataDate
     */
    public $datePosted;

    /**
     * numc19died - DEATHS: Patients with suspected or confirmed COVID-19 who died in the hospital, ED, or any overflow location.
     * @var string|int|float|\Vnetby\Schemaorg\DataTypes\DataNumber
     */
    public $cvdNumC19Died;

    /**
     * numbeds - HOSPITAL INPATIENT BEDS: Inpatient beds, including all staffed, licensed, and overflow (surge) beds used for inpatients.
     * @var string|int|float|\Vnetby\Schemaorg\DataTypes\DataNumber
     */
    public $cvdNumBeds;

    /**
     * numc19mechventpats - HOSPITALIZED and VENTILATED: Patients hospitalized in an NHSN inpatient care location who have suspected or confirmed COVID-19 and are
     * on a mechanical ventilator.
     * @var string|int|float|\Vnetby\Schemaorg\DataTypes\DataNumber
     */
    public $cvdNumC19MechVentPats;

    /**
     * numc19overflowpats - ED/OVERFLOW: Patients with suspected or confirmed COVID-19 who are in the ED or any overflow location awaiting an inpatient
     * bed.
     * @var string|int|float|\Vnetby\Schemaorg\DataTypes\DataNumber
     */
    public $cvdNumC19OverflowPats;

    /**
     * Name of the County of the NHSN facility that this data record applies to. Use [[cvdFacilityId]] to identify the facility. To
     * provide other details, [[healthcareReportingData]] can be used on a [[Hospital]] entry.
     * @var string|\Vnetby\Schemaorg\DataTypes\DataText
     */
    public $cvdFacilityCounty;

    /**
     * numc19ofmechventpats - ED/OVERFLOW and VENTILATED: Patients with suspected or confirmed COVID-19 who are in the ED or any overflow location awaiting
     * an inpatient bed and on a mechanical ventilator.
     * @var string|int|float|\Vnetby\Schemaorg\DataTypes\DataNumber
     */
    public $cvdNumC19OFMechVentPats;

    /**
     * numventuse - MECHANICAL VENTILATORS IN USE: Total number of ventilators in use.
     * @var string|int|float|\Vnetby\Schemaorg\DataTypes\DataNumber
     */
    public $cvdNumVentUse;

    /**
     * numc19hosppats - HOSPITALIZED: Patients currently hospitalized in an inpatient care location who have suspected or confirmed COVID-19.
     * @var string|int|float|\Vnetby\Schemaorg\DataTypes\DataNumber
     */
    public $cvdNumC19HospPats;

    /**
     * numicubeds - ICU BEDS: Total number of staffed inpatient intensive care unit (ICU) beds.
     * @param string|int|float|\Vnetby\Schemaorg\DataTypes\DataNumber $value
     * @return static
     */
    function setCvdNumICUBeds($value)
    {
        return $this->setProp('cvdNumICUBeds', $value);
    }

    /**
     * numvent - MECHANICAL VENTILATORS: Total number of ventilators available.
     * @param string|int|float|\Vnetby\Schemaorg\DataTypes\DataNumber $value
     * @return static
     */
    function setCvdNumVent($value)
    {
        return $this->setProp('cvdNumVent', $value);
    }

    /**
     * collectiondate - Date for which patient counts are reported.
     * @param string|\Vnetby\Schemaorg\DataTypes\DataText|\Vnetby\Schemaorg\DataTypes\DataDateTime $value
     * @return static
     */
    function setCvdCollectionDate($value)
    {
        return $this->setProp('cvdCollectionDate', $value);
    }

    /**
     * numbedsocc - HOSPITAL INPATIENT BED OCCUPANCY: Total number of staffed inpatient beds that are occupied.
     * @param string|int|float|\Vnetby\Schemaorg\DataTypes\DataNumber $value
     * @return static
     */
    function setCvdNumBedsOcc($value)
    {
        return $this->setProp('cvdNumBedsOcc', $value);
    }

    /**
     * numicubedsocc - ICU BED OCCUPANCY: Total number of staffed inpatient ICU beds that are occupied.
     * @param string|int|float|\Vnetby\Schemaorg\DataTypes\DataNumber $value
     * @return static
     */
    function setCvdNumICUBedsOcc($value)
    {
        return $this->setProp('cvdNumICUBedsOcc', $value);
    }

    /**
     * Identifier of the NHSN facility that this data record applies to. Use [[cvdFacilityCounty]] to indicate the county. To provide other details,
     * [[healthcareReportingData]] can be used on a [[Hospital]] entry.
     * @param string|\Vnetby\Schemaorg\DataTypes\DataText $value
     * @return static
     */
    function setCvdFacilityId($value)
    {
        return $this->setProp('cvdFacilityId', $value);
    }

    /**
     * numc19hopats - HOSPITAL ONSET: Patients hospitalized in an NHSN inpatient care location with onset of suspected or confirmed COVID-19 14 or
     * more days after hospitalization.
     * @param string|int|float|\Vnetby\Schemaorg\DataTypes\DataNumber $value
     * @return static
     */
    function setCvdNumC19HOPats($value)
    {
        return $this->setProp('cvdNumC19HOPats', $value);
    }

    /**
     * numtotbeds - ALL HOSPITAL BEDS: Total number of all inpatient and outpatient beds, including all staffed, ICU, licensed, and overflow (surge)
     * beds used for inpatients or outpatients.
     * @param string|int|float|\Vnetby\Schemaorg\DataTypes\DataNumber $value
     * @return static
     */
    function setCvdNumTotBeds($value)
    {
        return $this->setProp('cvdNumTotBeds', $value);
    }

    /**
     * Publication date of an online listing.
     * @param string|\Vnetby\Schemaorg\DataTypes\DataDateTime|\Vnetby\Schemaorg\DataTypes\DataDate $value
     * @return static
     */
    function setDatePosted($value)
    {
        return $this->setProp('datePosted', $value);
    }

    /**
     * numc19died - DEATHS: Patients with suspected or confirmed COVID-19 who died in the hospital, ED, or any overflow location.
     * @param string|int|float|\Vnetby\Schemaorg\DataTypes\DataNumber $value
     * @return static
     */
    function setCvdNumC19Died($value)
    {
        return $this->setProp('cvdNumC19Died', $value);
    }

    /**
     * numbeds - HOSPITAL INPATIENT BEDS: Inpatient beds, including all staffed, licensed, and overflow (surge) beds used for inpatients.
     * @param string|int|float|\Vnetby\Schemaorg\DataTypes\DataNumber $value
     * @return static
     */
    function setCvdNumBeds($value)
    {
        return $this->setProp('cvdNumBeds', $value);
    }

    /**
     * numc19mechventpats - HOSPITALIZED and VENTILATED: Patients hospitalized in an NHSN inpatient care location who have suspected or confirmed COVID-19 and are
     * on a mechanical ventilator.
     * @param string|int|float|\Vnetby\Schemaorg\DataTypes\DataNumber $value
     * @return static
     */
    function setCvdNumC19MechVentPats($value)
    {
        return $this->setProp('cvdNumC19MechVentPats', $value);
    }

    /**
     * numc19overflowpats - ED/OVERFLOW: Patients with suspected or confirmed COVID-19 who are in the ED or any overflow location awaiting an inpatient
     * bed.
     * @param string|int|float|\Vnetby\Schemaorg\DataTypes\DataNumber $value
     * @return static
     */
    function setCvdNumC19OverflowPats($value)
    {
        return $this->setProp('cvdNumC19OverflowPats', $value);
    }

    /**
     * Name of the County of the NHSN facility that this data record applies to. Use [[cvdFacilityId]] to identify the facility. To
     * provide other details, [[healthcareReportingData]] can be used on a [[Hospital]] entry.
     * @param string|\Vnetby\Schemaorg\DataTypes\DataText $value
     * @return static
     */
    function setCvdFacilityCounty($value)
    {
        return $this->setProp('cvdFacilityCounty', $value);
    }

    /**
     * numc19ofmechventpats - ED/OVERFLOW and VENTILATED: Patients with suspected or confirmed COVID-19 who are in the ED or any overflow location awaiting
     * an inpatient bed and on a mechanical ventilator.
     * @param string|int|float|\Vnetby\Schemaorg\DataTypes\DataNumber $value
     * @return static
     */
    function setCvdNumC19OFMechVentPats($value)
    {
        return $this->setProp('cvdNumC19OFMechVentPats', $value);
    }

    /**
     * numventuse - MECHANICAL VENTILATORS IN USE: Total number of ventilators in use.
     * @param string|int|float|\Vnetby\Schemaorg\DataTypes\DataNumber $value
     * @return static
     */
    function setCvdNumVentUse($value)
    {
        return $this->setProp('cvdNumVentUse', $value);
    }

    /**
     * numc19hosppats - HOSPITALIZED: Patients currently hospitalized in an inpatient care location who have suspected or confirmed COVID-19.
     * @param string|int|float|\Vnetby\Schemaorg\DataTypes\DataNumber $value
     * @return static
     */
    function setCvdNumC19HospPats($value)
    {
        return $this->setProp('cvdNumC19HospPats', $value);
    }

    /**
     * numicubeds - ICU BEDS: Total number of staffed inpatient intensive care unit (ICU) beds.
     * @return string|int|float|\Vnetby\Schemaorg\DataTypes\DataNumber|null
     */
    function getCvdNumICUBeds()
    {
        return $this->getProp('cvdNumICUBeds');
    }

    /**
     * numvent - MECHANICAL VENTILATORS: Total number of ventilators available.
     * @return string|int|float|\Vnetby\Schemaorg\DataTypes\DataNumber|null
     */
    function getCvdNumVent()
    {
        return $this->getProp('cvdNumVent');
    }

    /**
     * collectiondate - Date for which patient counts are reported.
     * @return string|\Vnetby\Schemaorg\DataTypes\DataText|\Vnetby\Schemaorg\DataTypes\DataDateTime|null
     */
    function getCvdCollectionDate()
    {
        return $this->getProp('cvdCollectionDate');
    }

    /**
     * numbedsocc - HOSPITAL INPATIENT BED OCCUPANCY: Total number of staffed inpatient beds that are occupied.
     * @return string|int|float|\Vnetby\Schemaorg\DataTypes\DataNumber|null
     */
    function getCvdNumBedsOcc()
    {
        return $this->getProp('cvdNumBedsOcc');
    }

    /**
     * numicubedsocc - ICU BED OCCUPANCY: Total number of staffed inpatient ICU beds that are occupied.
     * @return string|int|float|\Vnetby\Schemaorg\DataTypes\DataNumber|null
     */
    function getCvdNumICUBedsOcc()
    {
        return $this->getProp('cvdNumICUBedsOcc');
    }

    /**
     * Identifier of the NHSN facility that this data record applies to. Use [[cvdFacilityCounty]] to indicate the county. To provide other details,
     * [[healthcareReportingData]] can be used on a [[Hospital]] entry.
     * @return string|\Vnetby\Schemaorg\DataTypes\DataText|null
     */
    function getCvdFacilityId()
    {
        return $this->getProp('cvdFacilityId');
    }

    /**
     * numc19hopats - HOSPITAL ONSET: Patients hospitalized in an NHSN inpatient care location with onset of suspected or confirmed COVID-19 14 or
     * more days after hospitalization.
     * @return string|int|float|\Vnetby\Schemaorg\DataTypes\DataNumber|null
     */
    function getCvdNumC19HOPats()
    {
        return $this->getProp('cvdNumC19HOPats');
    }

    /**
     * numtotbeds - ALL HOSPITAL BEDS: Total number of all inpatient and outpatient beds, including all staffed, ICU, licensed, and overflow (surge)
     * beds used for inpatients or outpatients.
     * @return string|int|float|\Vnetby\Schemaorg\DataTypes\DataNumber|null
     */
    function getCvdNumTotBeds()
    {
        return $this->getProp('cvdNumTotBeds');
    }

    /**
     * Publication date of an online listing.
     * @return string|\Vnetby\Schemaorg\DataTypes\DataDateTime|\Vnetby\Schemaorg\DataTypes\DataDate|null
     */
    function getDatePosted()
    {
        return $this->getProp('datePosted');
    }

    /**
     * numc19died - DEATHS: Patients with suspected or confirmed COVID-19 who died in the hospital, ED, or any overflow location.
     * @return string|int|float|\Vnetby\Schemaorg\DataTypes\DataNumber|null
     */
    function getCvdNumC19Died()
    {
        return $this->getProp('cvdNumC19Died');
    }

    /**
     * numbeds - HOSPITAL INPATIENT BEDS: Inpatient beds, including all staffed, licensed, and overflow (surge) beds used for inpatients.
     * @return string|int|float|\Vnetby\Schemaorg\DataTypes\DataNumber|null
     */
    function getCvdNumBeds()
    {
        return $this->getProp('cvdNumBeds');
    }

    /**
     * numc19mechventpats - HOSPITALIZED and VENTILATED: Patients hospitalized in an NHSN inpatient care location who have suspected or confirmed COVID-19 and are
     * on a mechanical ventilator.
     * @return string|int|float|\Vnetby\Schemaorg\DataTypes\DataNumber|null
     */
    function getCvdNumC19MechVentPats()
    {
        return $this->getProp('cvdNumC19MechVentPats');
    }

    /**
     * numc19overflowpats - ED/OVERFLOW: Patients with suspected or confirmed COVID-19 who are in the ED or any overflow location awaiting an inpatient
     * bed.
     * @return string|int|float|\Vnetby\Schemaorg\DataTypes\DataNumber|null
     */
    function getCvdNumC19OverflowPats()
    {
        return $this->getProp('cvdNumC19OverflowPats');
    }

    /**
     * Name of the County of the NHSN facility that this data record applies to. Use [[cvdFacilityId]] to identify the facility. To
     * provide other details, [[healthcareReportingData]] can be used on a [[Hospital]] entry.
     * @return string|\Vnetby\Schemaorg\DataTypes\DataText|null
     */
    function getCvdFacilityCounty()
    {
        return $this->getProp('cvdFacilityCounty');
    }

    /**
     * numc19ofmechventpats - ED/OVERFLOW and VENTILATED: Patients with suspected or confirmed COVID-19 who are in the ED or any overflow location awaiting
     * an inpatient bed and on a mechanical ventilator.
     * @return string|int|float|\Vnetby\Schemaorg\DataTypes\DataNumber|null
     */
    function getCvdNumC19OFMechVentPats()
    {
        return $this->getProp('cvdNumC19OFMechVentPats');
    }

    /**
     * numventuse - MECHANICAL VENTILATORS IN USE: Total number of ventilators in use.
     * @return string|int|float|\Vnetby\Schemaorg\DataTypes\DataNumber|null
     */
    function getCvdNumVentUse()
    {
        return $this->getProp('cvdNumVentUse');
    }

    /**
     * numc19hosppats - HOSPITALIZED: Patients currently hospitalized in an inpatient care location who have suspected or confirmed COVID-19.
     * @return string|int|float|\Vnetby\Schemaorg\DataTypes\DataNumber|null
     */
    function getCvdNumC19HospPats()
    {
        return $this->getProp('cvdNumC19HospPats');
    }
}
