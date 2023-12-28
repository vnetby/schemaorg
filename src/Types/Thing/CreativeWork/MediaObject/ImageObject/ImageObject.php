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
     * Indicates whether this image is representative of the content of the page.
     * @var \Vnetby\Schemaorg\DataTypes\DataBoolean
     */
    protected $prop_representativeOfPage;

    /**
     * exif data for this object.
     * @var \Vnetby\Schemaorg\Types\Thing\Intangible\StructuredValue\PropertyValue\PropertyValue|\Vnetby\Schemaorg\DataTypes\DataText
     */
    protected $prop_exifData;

    /**
     * Represents textual captioning from a [[MediaObject]], e.g. text of a 'meme'.
     * @var \Vnetby\Schemaorg\DataTypes\DataText
     */
    protected $prop_embeddedTextCaption;

    /**
     * The caption for this object. For downloadable machine formats (closed caption, subtitles etc.) use MediaObject and indicate the [[encodingFormat]].
     * @var \Vnetby\Schemaorg\DataTypes\DataText|\Vnetby\Schemaorg\Types\Thing\CreativeWork\MediaObject\MediaObject
     */
    protected $prop_caption;

    /**
     * Indicates whether this image is representative of the content of the page.
     * @param \Vnetby\Schemaorg\DataTypes\DataBoolean $value
     * @return static
     */
    function setRepresentativeOfPage($value)
    {
        return $this->setProp('representativeOfPage', $value);
    }

    /**
     * exif data for this object.
     * @param \Vnetby\Schemaorg\Types\Thing\Intangible\StructuredValue\PropertyValue\PropertyValue|\Vnetby\Schemaorg\DataTypes\DataText $value
     * @return static
     */
    function setExifData($value)
    {
        return $this->setProp('exifData', $value);
    }

    /**
     * Represents textual captioning from a [[MediaObject]], e.g. text of a 'meme'.
     * @param \Vnetby\Schemaorg\DataTypes\DataText $value
     * @return static
     */
    function setEmbeddedTextCaption($value)
    {
        return $this->setProp('embeddedTextCaption', $value);
    }

    /**
     * The caption for this object. For downloadable machine formats (closed caption, subtitles etc.) use MediaObject and indicate the [[encodingFormat]].
     * @param \Vnetby\Schemaorg\DataTypes\DataText|\Vnetby\Schemaorg\Types\Thing\CreativeWork\MediaObject\MediaObject $value
     * @return static
     */
    function setCaption($value)
    {
        return $this->setProp('caption', $value);
    }

    /**
     * Indicates whether this image is representative of the content of the page.
     * @return \Vnetby\Schemaorg\DataTypes\DataBoolean|null
     */
    function getRepresentativeOfPage()
    {
        return $this->getProp('representativeOfPage');
    }

    /**
     * exif data for this object.
     * @return \Vnetby\Schemaorg\Types\Thing\Intangible\StructuredValue\PropertyValue\PropertyValue|\Vnetby\Schemaorg\DataTypes\DataText|null
     */
    function getExifData()
    {
        return $this->getProp('exifData');
    }

    /**
     * Represents textual captioning from a [[MediaObject]], e.g. text of a 'meme'.
     * @return \Vnetby\Schemaorg\DataTypes\DataText|null
     */
    function getEmbeddedTextCaption()
    {
        return $this->getProp('embeddedTextCaption');
    }

    /**
     * The caption for this object. For downloadable machine formats (closed caption, subtitles etc.) use MediaObject and indicate the [[encodingFormat]].
     * @return \Vnetby\Schemaorg\DataTypes\DataText|\Vnetby\Schemaorg\Types\Thing\CreativeWork\MediaObject\MediaObject|null
     */
    function getCaption()
    {
        return $this->getProp('caption');
    }
}
