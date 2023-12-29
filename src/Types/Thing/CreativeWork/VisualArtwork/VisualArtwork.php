<?php

/**
 * @see https://schema.org/VisualArtwork
 * A work of art that is primarily visual in character.
 */

namespace Vnetby\Schemaorg\Types\Thing\CreativeWork\VisualArtwork;

class VisualArtwork extends \Vnetby\Schemaorg\Types\Thing\CreativeWork\CreativeWork
{
    const TYPE = 'VisualArtwork';

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
     * The number of copies when multiple copies of a piece of artwork are produced - e.g. for a limited edition of
     * 20 prints, 'artEdition' refers to the total number of copies (in this example "20").
     * @var string|int|\Vnetby\Schemaorg\DataTypes\DataText|\Vnetby\Schemaorg\DataTypes\DataInteger
     */
    public $artEdition;

    /**
     * The primary artist for a work in a medium other than pencils or digital line art--for example, if the primary artwork
     * is done in watercolors or digital paints.
     * @var \Vnetby\Schemaorg\Types\Thing\Person\Person
     */
    public $artist;

    /**
     * The height of the item.
     * @var \Vnetby\Schemaorg\Types\Thing\Intangible\StructuredValue\QuantitativeValue\QuantitativeValue|\Vnetby\Schemaorg\Types\Thing\Intangible\Quantity\Distance
     */
    public $height;

    /**
     * e.g. Painting, Drawing, Sculpture, Print, Photograph, Assemblage, Collage, etc.
     * @var string|\Vnetby\Schemaorg\DataTypes\DataURL|\Vnetby\Schemaorg\DataTypes\DataText
     */
    public $artform;

    /**
     * The width of the item.
     * @var \Vnetby\Schemaorg\Types\Thing\Intangible\Quantity\Distance|\Vnetby\Schemaorg\Types\Thing\Intangible\StructuredValue\QuantitativeValue\QuantitativeValue
     */
    public $width;

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
     * The material used. (E.g. Oil, Watercolour, Acrylic, Linoprint, Marble, Cyanotype, Digital, Lithograph, DryPoint, Intaglio, Pastel, Woodcut, Pencil, Mixed Media, etc.)
     * @var string|\Vnetby\Schemaorg\DataTypes\DataText|\Vnetby\Schemaorg\DataTypes\DataURL
     */
    public $artMedium;

    /**
     * The depth of the item.
     * @var \Vnetby\Schemaorg\Types\Thing\Intangible\StructuredValue\QuantitativeValue\QuantitativeValue|\Vnetby\Schemaorg\Types\Thing\Intangible\Quantity\Distance
     */
    public $depth;

    /**
     * The supporting materials for the artwork, e.g. Canvas, Paper, Wood, Board, etc.
     * @var string|\Vnetby\Schemaorg\DataTypes\DataURL|\Vnetby\Schemaorg\DataTypes\DataText
     */
    public $artworkSurface;

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
     * The number of copies when multiple copies of a piece of artwork are produced - e.g. for a limited edition of
     * 20 prints, 'artEdition' refers to the total number of copies (in this example "20").
     * @param string|int|\Vnetby\Schemaorg\DataTypes\DataText|\Vnetby\Schemaorg\DataTypes\DataInteger $value
     * @return static
     */
    function setArtEdition($value)
    {
        return $this->setProp('artEdition', $value);
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
     * The height of the item.
     * @param \Vnetby\Schemaorg\Types\Thing\Intangible\StructuredValue\QuantitativeValue\QuantitativeValue|\Vnetby\Schemaorg\Types\Thing\Intangible\Quantity\Distance $value
     * @return static
     */
    function setHeight($value)
    {
        return $this->setProp('height', $value);
    }

    /**
     * e.g. Painting, Drawing, Sculpture, Print, Photograph, Assemblage, Collage, etc.
     * @param string|\Vnetby\Schemaorg\DataTypes\DataURL|\Vnetby\Schemaorg\DataTypes\DataText $value
     * @return static
     */
    function setArtform($value)
    {
        return $this->setProp('artform', $value);
    }

    /**
     * The width of the item.
     * @param \Vnetby\Schemaorg\Types\Thing\Intangible\Quantity\Distance|\Vnetby\Schemaorg\Types\Thing\Intangible\StructuredValue\QuantitativeValue\QuantitativeValue $value
     * @return static
     */
    function setWidth($value)
    {
        return $this->setProp('width', $value);
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
     * The material used. (E.g. Oil, Watercolour, Acrylic, Linoprint, Marble, Cyanotype, Digital, Lithograph, DryPoint, Intaglio, Pastel, Woodcut, Pencil, Mixed Media, etc.)
     * @param string|\Vnetby\Schemaorg\DataTypes\DataText|\Vnetby\Schemaorg\DataTypes\DataURL $value
     * @return static
     */
    function setArtMedium($value)
    {
        return $this->setProp('artMedium', $value);
    }

    /**
     * The depth of the item.
     * @param \Vnetby\Schemaorg\Types\Thing\Intangible\StructuredValue\QuantitativeValue\QuantitativeValue|\Vnetby\Schemaorg\Types\Thing\Intangible\Quantity\Distance $value
     * @return static
     */
    function setDepth($value)
    {
        return $this->setProp('depth', $value);
    }

    /**
     * The supporting materials for the artwork, e.g. Canvas, Paper, Wood, Board, etc.
     * @param string|\Vnetby\Schemaorg\DataTypes\DataURL|\Vnetby\Schemaorg\DataTypes\DataText $value
     * @return static
     */
    function setArtworkSurface($value)
    {
        return $this->setProp('artworkSurface', $value);
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
     * The number of copies when multiple copies of a piece of artwork are produced - e.g. for a limited edition of
     * 20 prints, 'artEdition' refers to the total number of copies (in this example "20").
     * @return string|int|\Vnetby\Schemaorg\DataTypes\DataText|\Vnetby\Schemaorg\DataTypes\DataInteger|null
     */
    function getArtEdition()
    {
        return $this->getProp('artEdition');
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
     * The height of the item.
     * @return \Vnetby\Schemaorg\Types\Thing\Intangible\StructuredValue\QuantitativeValue\QuantitativeValue|\Vnetby\Schemaorg\Types\Thing\Intangible\Quantity\Distance|null
     */
    function getHeight()
    {
        return $this->getProp('height');
    }

    /**
     * e.g. Painting, Drawing, Sculpture, Print, Photograph, Assemblage, Collage, etc.
     * @return string|\Vnetby\Schemaorg\DataTypes\DataURL|\Vnetby\Schemaorg\DataTypes\DataText|null
     */
    function getArtform()
    {
        return $this->getProp('artform');
    }

    /**
     * The width of the item.
     * @return \Vnetby\Schemaorg\Types\Thing\Intangible\Quantity\Distance|\Vnetby\Schemaorg\Types\Thing\Intangible\StructuredValue\QuantitativeValue\QuantitativeValue|null
     */
    function getWidth()
    {
        return $this->getProp('width');
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

    /**
     * The material used. (E.g. Oil, Watercolour, Acrylic, Linoprint, Marble, Cyanotype, Digital, Lithograph, DryPoint, Intaglio, Pastel, Woodcut, Pencil, Mixed Media, etc.)
     * @return string|\Vnetby\Schemaorg\DataTypes\DataText|\Vnetby\Schemaorg\DataTypes\DataURL|null
     */
    function getArtMedium()
    {
        return $this->getProp('artMedium');
    }

    /**
     * The depth of the item.
     * @return \Vnetby\Schemaorg\Types\Thing\Intangible\StructuredValue\QuantitativeValue\QuantitativeValue|\Vnetby\Schemaorg\Types\Thing\Intangible\Quantity\Distance|null
     */
    function getDepth()
    {
        return $this->getProp('depth');
    }

    /**
     * The supporting materials for the artwork, e.g. Canvas, Paper, Wood, Board, etc.
     * @return string|\Vnetby\Schemaorg\DataTypes\DataURL|\Vnetby\Schemaorg\DataTypes\DataText|null
     */
    function getArtworkSurface()
    {
        return $this->getProp('artworkSurface');
    }
}
