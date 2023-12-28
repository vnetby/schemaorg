<?php

/**
 * @see https://schema.org/[object Object]
 * An organization with archival holdings. An organization which keeps and preserves archival material and typically makes it accessible to the public.
 */

namespace Vnetby\Schemaorg\Types\Thing\Organization\LocalBusiness;

class [object Object] extends \Vnetby\Schemaorg\Types\Thing\Organization\LocalBusiness\LocalBusiness
{
    const TYPE = '[object Object]';

    /**
     * Collection, [fonds](https://en.wikipedia.org/wiki/Fonds), or item held, kept or maintained by an [[ArchiveOrganization]].
     * @var \Vnetby\Schemaorg\Types\Thing\CreativeWork\[object Object]
     */
    protected $prop_[object Object];

    /**
     * Collection, [fonds](https://en.wikipedia.org/wiki/Fonds), or item held, kept or maintained by an [[ArchiveOrganization]].
     * @param \Vnetby\Schemaorg\Types\Thing\CreativeWork\[object Object] $value
     * @return static
     */
    function setArchiveHeld($value)
    {
        return $this->setProp('[object Object]', $value);
    }

    /**
     * Collection, [fonds](https://en.wikipedia.org/wiki/Fonds), or item held, kept or maintained by an [[ArchiveOrganization]].
     * @return \Vnetby\Schemaorg\Types\Thing\CreativeWork\[object Object]|null
     */
    function getArchiveHeld()
    {
        return $this->getProp('[object Object]');
    }
}
