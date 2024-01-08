<?php

/**
 * @see https://schema.org/ArchiveComponent
 * An intangible type to be applied to any archive content, carrying with it a set of properties required to describe archival
 * items and collections.
 */

namespace Vnetby\Schemaorg\Types\Thing\CreativeWork;

class ArchiveComponent extends \Vnetby\Schemaorg\Types\Thing\CreativeWork\CreativeWork
{
    const TYPE = 'ArchiveComponent';

    /**
     * Current location of the item.
     * @var string|\Vnetby\Schemaorg\Types\Thing\Intangible\StructuredValue\ContactPoint\PostalAddress|\Vnetby\Schemaorg\Types\Thing\Place\Place|\Vnetby\Schemaorg\DataTypes\DataText
     */
    public $itemLocation;

    /**
     * [[ArchiveOrganization]] that holds, keeps or maintains the [[ArchiveComponent]].
     * @var \Vnetby\Schemaorg\Types\Thing\Organization\LocalBusiness\ArchiveOrganization
     */
    public $holdingArchive;

    /**
     * Current location of the item.
     * @param string|\Vnetby\Schemaorg\Types\Thing\Intangible\StructuredValue\ContactPoint\PostalAddress|\Vnetby\Schemaorg\Types\Thing\Place\Place|\Vnetby\Schemaorg\DataTypes\DataText $value
     * @return static
     */
    function setItemLocation($value)
    {
        return $this->setProp('itemLocation', $value);
    }

    /**
     * [[ArchiveOrganization]] that holds, keeps or maintains the [[ArchiveComponent]].
     * @param \Vnetby\Schemaorg\Types\Thing\Organization\LocalBusiness\ArchiveOrganization $value
     * @return static
     */
    function setHoldingArchive($value)
    {
        return $this->setProp('holdingArchive', $value);
    }

    /**
     * Current location of the item.
     * @return string|\Vnetby\Schemaorg\Types\Thing\Intangible\StructuredValue\ContactPoint\PostalAddress|\Vnetby\Schemaorg\Types\Thing\Place\Place|\Vnetby\Schemaorg\DataTypes\DataText|null
     */
    function getItemLocation()
    {
        return $this->getProp('itemLocation');
    }

    /**
     * [[ArchiveOrganization]] that holds, keeps or maintains the [[ArchiveComponent]].
     * @return \Vnetby\Schemaorg\Types\Thing\Organization\LocalBusiness\ArchiveOrganization|null
     */
    function getHoldingArchive()
    {
        return $this->getProp('holdingArchive');
    }
}
