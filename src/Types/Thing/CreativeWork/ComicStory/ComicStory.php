<?php

/**
 * @see https://schema.org/ComicStory
 * The term "story" is any indivisible, re-printable unit of a comic, including the interior stories, covers, and backmatter. Most comics have
 * at least two stories: a cover (ComicCoverArt) and an interior story.
 */

namespace Vnetby\Schemaorg\Types\Thing\CreativeWork\ComicStory;

class ComicStory extends \Vnetby\Schemaorg\Types\Thing\CreativeWork\CreativeWork
{
    const TYPE = 'ComicStory';

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
