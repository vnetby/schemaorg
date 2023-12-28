<?php

/**
 * @see https://schema.org/PublicHolidays
 * This stands for any day that is a public holiday; it is a placeholder for all official public holidays in some
 * particular location. While not technically a "day of the week", it can be used with [[OpeningHoursSpecification]]. In the context of an
 * opening hours specification it can be used to indicate opening hours on public holidays, overriding general opening hours for the day
 * of the week on which a public holiday occurs.
 */

namespace Vnetby\Schemaorg\Types\Thing\Intangible\Enumeration\DayOfWeek;

class PublicHolidays extends \Vnetby\Schemaorg\Types\Thing\Intangible\Enumeration\DayOfWeek\DayOfWeek
{
    const TYPE = 'PublicHolidays';
}
