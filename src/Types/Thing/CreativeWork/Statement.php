<?php

/**
 * @see https://schema.org/Statement
 * A statement about something, for example a fun or interesting fact. If known, the main entity this statement is about can
 * be indicated using mainEntity. For more formal claims (e.g. in Fact Checking), consider using [[Claim]] instead. Use the [[text]] property to
 * capture the text of the statement.
 */

namespace Vnetby\Schemaorg\Types\Thing\CreativeWork;

class Statement extends \Vnetby\Schemaorg\Types\Thing\CreativeWork\CreativeWork
{
    const TYPE = 'Statement';
}
