<?php

/**
 * @see https://schema.org/CreativeWorkSeries
 * A CreativeWorkSeries in schema.org is a group of related items, typically but not necessarily of the same kind. CreativeWorkSeries are usually
 * organized into some order, often chronological. Unlike [[ItemList]] which is a general purpose data structure for lists of things, the emphasis
 * with CreativeWorkSeries is on published materials (written e.g. books and periodicals, or media such as TV, radio and games).\n\nSpecific subtypes are
 * available for describing [[TVSeries]], [[RadioSeries]], [[MovieSeries]], [[BookSeries]], [[Periodical]] and [[VideoGameSeries]]. In each case, the [[hasPart]] / [[isPartOf]] properties can be used
 * to relate the CreativeWorkSeries to its parts. The general CreativeWorkSeries type serves largely just to organize these more specific and practical
 * subtypes.\n\nIt is common for properties applicable to an item from the series to be usefully applied to the containing group. Schema.org
 * attempts to anticipate some of these cases, but publishers should be free to apply properties of the series parts to the
 * series as a whole wherever they seem appropriate. 
 */

namespace Vnetby\Schemaorg\Types\Thing\Intangible\Series\CreativeWorkSeries;

class CreativeWorkSeries extends \Vnetby\Schemaorg\Types\Thing\Intangible\Series\Series
{
    const TYPE = 'CreativeWorkSeries';

    /**
     * The International Standard Serial Number (ISSN) that identifies this serial publication. You can repeat this property to identify different formats of,
     * or the linking ISSN (ISSN-L) for, this serial publication.
     * @var \Vnetby\Schemaorg\DataTypes\DataText
     */
    protected $prop_issn;

    /**
     * The start date and time of the item (in [ISO 8601 date format](http://en.wikipedia.org/wiki/ISO_8601)).
     * @var \Vnetby\Schemaorg\DataTypes\DataDate|\Vnetby\Schemaorg\DataTypes\DataDateTime
     */
    protected $prop_startDate;

    /**
     * The end date and time of the item (in [ISO 8601 date format](http://en.wikipedia.org/wiki/ISO_8601)).
     * @var \Vnetby\Schemaorg\DataTypes\DataDateTime|\Vnetby\Schemaorg\DataTypes\DataDate
     */
    protected $prop_endDate;

    /**
     * The International Standard Serial Number (ISSN) that identifies this serial publication. You can repeat this property to identify different formats of,
     * or the linking ISSN (ISSN-L) for, this serial publication.
     * @param \Vnetby\Schemaorg\DataTypes\DataText $value
     * @return static
     */
    function setIssn($value)
    {
        return $this->setProp('issn', $value);
    }

    /**
     * The start date and time of the item (in [ISO 8601 date format](http://en.wikipedia.org/wiki/ISO_8601)).
     * @param \Vnetby\Schemaorg\DataTypes\DataDate|\Vnetby\Schemaorg\DataTypes\DataDateTime $value
     * @return static
     */
    function setStartDate($value)
    {
        return $this->setProp('startDate', $value);
    }

    /**
     * The end date and time of the item (in [ISO 8601 date format](http://en.wikipedia.org/wiki/ISO_8601)).
     * @param \Vnetby\Schemaorg\DataTypes\DataDateTime|\Vnetby\Schemaorg\DataTypes\DataDate $value
     * @return static
     */
    function setEndDate($value)
    {
        return $this->setProp('endDate', $value);
    }

    /**
     * The International Standard Serial Number (ISSN) that identifies this serial publication. You can repeat this property to identify different formats of,
     * or the linking ISSN (ISSN-L) for, this serial publication.
     * @return \Vnetby\Schemaorg\DataTypes\DataText|null
     */
    function getIssn()
    {
        return $this->getProp('issn');
    }

    /**
     * The start date and time of the item (in [ISO 8601 date format](http://en.wikipedia.org/wiki/ISO_8601)).
     * @return \Vnetby\Schemaorg\DataTypes\DataDate|\Vnetby\Schemaorg\DataTypes\DataDateTime|null
     */
    function getStartDate()
    {
        return $this->getProp('startDate');
    }

    /**
     * The end date and time of the item (in [ISO 8601 date format](http://en.wikipedia.org/wiki/ISO_8601)).
     * @return \Vnetby\Schemaorg\DataTypes\DataDateTime|\Vnetby\Schemaorg\DataTypes\DataDate|null
     */
    function getEndDate()
    {
        return $this->getProp('endDate');
    }
}
