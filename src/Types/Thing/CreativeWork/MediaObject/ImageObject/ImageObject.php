<?php

/**
 * @see https://schema.org/ImageObject
 * An image file.
 */

namespace Vnetby\Schemaorg\Types\Thing\CreativeWork\MediaObject\ImageObject;

class ImageObject extends \Vnetby\Schemaorg\Types\Thing\CreativeWork\MediaObject\MediaObject
{
    const TYPE = 'ImageObject';

    /**
     * The caption for this object. For downloadable machine formats (closed caption, subtitles etc.) use MediaObject and indicate the [[encodingFormat]].
     * @var string|\Vnetby\Schemaorg\DataTypes\DataText|\Vnetby\Schemaorg\Types\Thing\CreativeWork\MediaObject\MediaObject
     */
    public $caption;

    /**
     * exif data for this object.
     * @var string|\Vnetby\Schemaorg\DataTypes\DataText|\Vnetby\Schemaorg\Types\Thing\Intangible\StructuredValue\PropertyValue\PropertyValue
     */
    public $exifData;

    /**
     * Represents textual captioning from a [[MediaObject]], e.g. text of a 'meme'.
     * @var string|\Vnetby\Schemaorg\DataTypes\DataText
     */
    public $embeddedTextCaption;

    /**
     * Indicates whether this image is representative of the content of the page.
     * @var bool|\Vnetby\Schemaorg\DataTypes\DataBoolean
     */
    public $representativeOfPage;

    /**
     * The caption for this object. For downloadable machine formats (closed caption, subtitles etc.) use MediaObject and indicate the [[encodingFormat]].
     * @param string|\Vnetby\Schemaorg\DataTypes\DataText|\Vnetby\Schemaorg\Types\Thing\CreativeWork\MediaObject\MediaObject $value
     * @return static
     */
    function setCaption($value)
    {
        return $this->setProp('caption', $value);
    }

    /**
     * exif data for this object.
     * @param string|\Vnetby\Schemaorg\DataTypes\DataText|\Vnetby\Schemaorg\Types\Thing\Intangible\StructuredValue\PropertyValue\PropertyValue $value
     * @return static
     */
    function setExifData($value)
    {
        return $this->setProp('exifData', $value);
    }

    /**
     * Represents textual captioning from a [[MediaObject]], e.g. text of a 'meme'.
     * @param string|\Vnetby\Schemaorg\DataTypes\DataText $value
     * @return static
     */
    function setEmbeddedTextCaption($value)
    {
        return $this->setProp('embeddedTextCaption', $value);
    }

    /**
     * Indicates whether this image is representative of the content of the page.
     * @param bool|\Vnetby\Schemaorg\DataTypes\DataBoolean $value
     * @return static
     */
    function setRepresentativeOfPage($value)
    {
        return $this->setProp('representativeOfPage', $value);
    }

    /**
     * The caption for this object. For downloadable machine formats (closed caption, subtitles etc.) use MediaObject and indicate the [[encodingFormat]].
     * @return string|\Vnetby\Schemaorg\DataTypes\DataText|\Vnetby\Schemaorg\Types\Thing\CreativeWork\MediaObject\MediaObject|null
     */
    function getCaption()
    {
        return $this->getProp('caption');
    }

    /**
     * exif data for this object.
     * @return string|\Vnetby\Schemaorg\DataTypes\DataText|\Vnetby\Schemaorg\Types\Thing\Intangible\StructuredValue\PropertyValue\PropertyValue|null
     */
    function getExifData()
    {
        return $this->getProp('exifData');
    }

    /**
     * Represents textual captioning from a [[MediaObject]], e.g. text of a 'meme'.
     * @return string|\Vnetby\Schemaorg\DataTypes\DataText|null
     */
    function getEmbeddedTextCaption()
    {
        return $this->getProp('embeddedTextCaption');
    }

    /**
     * Indicates whether this image is representative of the content of the page.
     * @return bool|\Vnetby\Schemaorg\DataTypes\DataBoolean|null
     */
    function getRepresentativeOfPage()
    {
        return $this->getProp('representativeOfPage');
    }
}
