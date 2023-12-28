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
     * @var \Vnetby\Schemaorg\DataTypes\DataText
     */
    protected $prop_transcript;

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
     * If this MediaObject is an AudioObject or VideoObject, the transcript of that object.
     * @param \Vnetby\Schemaorg\DataTypes\DataText $value
     * @return static
     */
    function setTranscript($value)
    {
        return $this->setProp('transcript', $value);
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
     * If this MediaObject is an AudioObject or VideoObject, the transcript of that object.
     * @return \Vnetby\Schemaorg\DataTypes\DataText|null
     */
    function getTranscript()
    {
        return $this->getProp('transcript');
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
