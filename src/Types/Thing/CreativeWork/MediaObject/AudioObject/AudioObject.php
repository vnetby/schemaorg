<?php

/**
 * @see https://schema.org/AudioObject
 * An audio file.
 */

namespace Vnetby\Schemaorg\Types\Thing\CreativeWork\MediaObject\AudioObject;

class AudioObject extends \Vnetby\Schemaorg\Types\Thing\CreativeWork\MediaObject\MediaObject
{
    const TYPE = 'AudioObject';

    /**
     * If this MediaObject is an AudioObject or VideoObject, the transcript of that object.
     * @var string|\Vnetby\Schemaorg\DataTypes\DataText
     */
    public $transcript;

    /**
     * Represents textual captioning from a [[MediaObject]], e.g. text of a 'meme'.
     * @var string|\Vnetby\Schemaorg\DataTypes\DataText
     */
    public $embeddedTextCaption;

    /**
     * The caption for this object. For downloadable machine formats (closed caption, subtitles etc.) use MediaObject and indicate the [[encodingFormat]].
     * @var string|\Vnetby\Schemaorg\DataTypes\DataText|\Vnetby\Schemaorg\Types\Thing\CreativeWork\MediaObject\MediaObject
     */
    public $caption;

    /**
     * If this MediaObject is an AudioObject or VideoObject, the transcript of that object.
     * @param string|\Vnetby\Schemaorg\DataTypes\DataText $value
     * @return static
     */
    function setTranscript($value)
    {
        return $this->setProp('transcript', $value);
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
     * The caption for this object. For downloadable machine formats (closed caption, subtitles etc.) use MediaObject and indicate the [[encodingFormat]].
     * @param string|\Vnetby\Schemaorg\DataTypes\DataText|\Vnetby\Schemaorg\Types\Thing\CreativeWork\MediaObject\MediaObject $value
     * @return static
     */
    function setCaption($value)
    {
        return $this->setProp('caption', $value);
    }

    /**
     * If this MediaObject is an AudioObject or VideoObject, the transcript of that object.
     * @return string|\Vnetby\Schemaorg\DataTypes\DataText|null
     */
    function getTranscript()
    {
        return $this->getProp('transcript');
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
     * The caption for this object. For downloadable machine formats (closed caption, subtitles etc.) use MediaObject and indicate the [[encodingFormat]].
     * @return string|\Vnetby\Schemaorg\DataTypes\DataText|\Vnetby\Schemaorg\Types\Thing\CreativeWork\MediaObject\MediaObject|null
     */
    function getCaption()
    {
        return $this->getProp('caption');
    }
}
