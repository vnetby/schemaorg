<?php

/**
 * @see https://schema.org/DayOfWeek
 * The day of the week, e.g. used to specify to which day the opening hours of an OpeningHoursSpecification refer. Originally, URLs
 * from [GoodRelations](http://purl.org/goodrelations/v1) were used (for [[Monday]], [[Tuesday]], [[Wednesday]], [[Thursday]], [[Friday]], [[Saturday]], [[Sunday]] plus a special entry for [[PublicHolidays]]); these have now
 * been integrated directly into schema.org. 
 */

namespace Vnetby\Schemaorg\Types\Thing\Intangible\Enumeration\DayOfWeek;

class DayOfWeek extends \Vnetby\Schemaorg\Types\Thing\Intangible\Enumeration\Enumeration
{
    const TYPE = 'DayOfWeek';
}
