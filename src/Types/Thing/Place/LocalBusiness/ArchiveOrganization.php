<?php

/**
 * @see https://schema.org/ArchiveOrganization
 * An organization with archival holdings. An organization which keeps and preserves archival material and typically makes it accessible to the public.
 */

namespace Vnetby\Schemaorg\Types\Thing\Place\LocalBusiness;

class ArchiveOrganization extends \Vnetby\Schemaorg\Types\Thing\Place\LocalBusiness\LocalBusiness
{
    const TYPE = 'ArchiveOrganization';

    /**
     * Collection, [fonds](https://en.wikipedia.org/wiki/Fonds), or item held, kept or maintained by an [[ArchiveOrganization]].
     * @var \Vnetby\Schemaorg\Types\Thing\CreativeWork\ArchiveComponent
     */
    public $archiveHeld;

    /**
     * Collection, [fonds](https://en.wikipedia.org/wiki/Fonds), or item held, kept or maintained by an [[ArchiveOrganization]].
     * @param \Vnetby\Schemaorg\Types\Thing\CreativeWork\ArchiveComponent $value
     * @return static
     */
    function setArchiveHeld($value)
    {
        return $this->setProp('archiveHeld', $value);
    }

    /**
     * Collection, [fonds](https://en.wikipedia.org/wiki/Fonds), or item held, kept or maintained by an [[ArchiveOrganization]].
     * @return \Vnetby\Schemaorg\Types\Thing\CreativeWork\ArchiveComponent|null
     */
    function getArchiveHeld()
    {
        return $this->getProp('archiveHeld');
    }
}
