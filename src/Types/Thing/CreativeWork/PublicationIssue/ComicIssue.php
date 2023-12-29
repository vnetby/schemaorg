<?php

/**
 * @see https://schema.org/ComicIssue
 * Individual comic issues are serially published as part of a larger series. For the sake of consistency, even one-shot issues belong
 * to a series comprised of a single issue. All comic issues can be uniquely identified by: the combination of the name
 * and volume number of the series to which the issue belongs; the issue number; and the variant description of the issue
 * (if any).
 */

namespace Vnetby\Schemaorg\Types\Thing\CreativeWork\PublicationIssue;

class ComicIssue extends \Vnetby\Schemaorg\Types\Thing\CreativeWork\PublicationIssue\PublicationIssue
{
    const TYPE = 'ComicIssue';

    /**
     * The individual who adds lettering, including speech balloons and sound effects, to artwork.
     * @var \Vnetby\Schemaorg\Types\Thing\Person\Person
     */
    public $letterer;

    /**
     * The individual who adds color to inked drawings.
     * @var \Vnetby\Schemaorg\Types\Thing\Person\Person
     */
    public $colorist;

    /**
     * A description of the variant cover for the issue, if the issue is a variant printing. For example, "Bryan Hitch Variant
     * Cover" or "2nd Printing Variant".
     * @var string|\Vnetby\Schemaorg\DataTypes\DataText
     */
    public $variantCover;

    /**
     * The primary artist for a work in a medium other than pencils or digital line art--for example, if the primary artwork
     * is done in watercolors or digital paints.
     * @var \Vnetby\Schemaorg\Types\Thing\Person\Person
     */
    public $artist;

    /**
     * The individual who draws the primary narrative artwork.
     * @var \Vnetby\Schemaorg\Types\Thing\Person\Person
     */
    public $penciler;

    /**
     * The individual who traces over the pencil drawings in ink after pencils are complete.
     * @var \Vnetby\Schemaorg\Types\Thing\Person\Person
     */
    public $inker;

    /**
     * The individual who adds lettering, including speech balloons and sound effects, to artwork.
     * @param \Vnetby\Schemaorg\Types\Thing\Person\Person $value
     * @return static
     */
    function setLetterer($value)
    {
        return $this->setProp('letterer', $value);
    }

    /**
     * The individual who adds color to inked drawings.
     * @param \Vnetby\Schemaorg\Types\Thing\Person\Person $value
     * @return static
     */
    function setColorist($value)
    {
        return $this->setProp('colorist', $value);
    }

    /**
     * A description of the variant cover for the issue, if the issue is a variant printing. For example, "Bryan Hitch Variant
     * Cover" or "2nd Printing Variant".
     * @param string|\Vnetby\Schemaorg\DataTypes\DataText $value
     * @return static
     */
    function setVariantCover($value)
    {
        return $this->setProp('variantCover', $value);
    }

    /**
     * The primary artist for a work in a medium other than pencils or digital line art--for example, if the primary artwork
     * is done in watercolors or digital paints.
     * @param \Vnetby\Schemaorg\Types\Thing\Person\Person $value
     * @return static
     */
    function setArtist($value)
    {
        return $this->setProp('artist', $value);
    }

    /**
     * The individual who draws the primary narrative artwork.
     * @param \Vnetby\Schemaorg\Types\Thing\Person\Person $value
     * @return static
     */
    function setPenciler($value)
    {
        return $this->setProp('penciler', $value);
    }

    /**
     * The individual who traces over the pencil drawings in ink after pencils are complete.
     * @param \Vnetby\Schemaorg\Types\Thing\Person\Person $value
     * @return static
     */
    function setInker($value)
    {
        return $this->setProp('inker', $value);
    }

    /**
     * The individual who adds lettering, including speech balloons and sound effects, to artwork.
     * @return \Vnetby\Schemaorg\Types\Thing\Person\Person|null
     */
    function getLetterer()
    {
        return $this->getProp('letterer');
    }

    /**
     * The individual who adds color to inked drawings.
     * @return \Vnetby\Schemaorg\Types\Thing\Person\Person|null
     */
    function getColorist()
    {
        return $this->getProp('colorist');
    }

    /**
     * A description of the variant cover for the issue, if the issue is a variant printing. For example, "Bryan Hitch Variant
     * Cover" or "2nd Printing Variant".
     * @return string|\Vnetby\Schemaorg\DataTypes\DataText|null
     */
    function getVariantCover()
    {
        return $this->getProp('variantCover');
    }

    /**
     * The primary artist for a work in a medium other than pencils or digital line art--for example, if the primary artwork
     * is done in watercolors or digital paints.
     * @return \Vnetby\Schemaorg\Types\Thing\Person\Person|null
     */
    function getArtist()
    {
        return $this->getProp('artist');
    }

    /**
     * The individual who draws the primary narrative artwork.
     * @return \Vnetby\Schemaorg\Types\Thing\Person\Person|null
     */
    function getPenciler()
    {
        return $this->getProp('penciler');
    }

    /**
     * The individual who traces over the pencil drawings in ink after pencils are complete.
     * @return \Vnetby\Schemaorg\Types\Thing\Person\Person|null
     */
    function getInker()
    {
        return $this->getProp('inker');
    }
}
