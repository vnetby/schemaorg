<?php

/**
 * @see https://schema.org/VideoObject
 * A video file.
 */

namespace Vnetby\Schemaorg\Types\Thing\CreativeWork\MediaObject\VideoObject;

class VideoObject extends \Vnetby\Schemaorg\Types\Thing\CreativeWork\MediaObject\MediaObject
{
    const TYPE = 'VideoObject';

    /**
     * The composer of the soundtrack.
     * @var \Vnetby\Schemaorg\Types\Thing\Organization\PerformingGroup\MusicGroup|\Vnetby\Schemaorg\Types\Thing\Person\Person
     */
    public $musicBy;

    /**
     * A director of e.g. TV, radio, movie, video gaming etc. content, or of an event. Directors can be associated with individual
     * items or with a series, episode, clip.
     * @var \Vnetby\Schemaorg\Types\Thing\Person\Person
     */
    public $director;

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
     * The frame size of the video.
     * @var string|\Vnetby\Schemaorg\DataTypes\DataText
     */
    public $videoFrameSize;

    /**
     * An actor, e.g. in TV, radio, movie, video games etc., or in an event. Actors can be associated with individual items
     * or with a series, episode, clip.
     * @var \Vnetby\Schemaorg\Types\Thing\Person\Person
     */
    public $actor;

    /**
     * The caption for this object. For downloadable machine formats (closed caption, subtitles etc.) use MediaObject and indicate the [[encodingFormat]].
     * @var string|\Vnetby\Schemaorg\DataTypes\DataText|\Vnetby\Schemaorg\Types\Thing\CreativeWork\MediaObject\MediaObject
     */
    public $caption;

    /**
     * The quality of the video.
     * @var string|\Vnetby\Schemaorg\DataTypes\DataText
     */
    public $videoQuality;

    /**
     * The composer of the soundtrack.
     * @param \Vnetby\Schemaorg\Types\Thing\Organization\PerformingGroup\MusicGroup|\Vnetby\Schemaorg\Types\Thing\Person\Person $value
     * @return static
     */
    function setMusicBy($value)
    {
        return $this->setProp('musicBy', $value);
    }

    /**
     * A director of e.g. TV, radio, movie, video gaming etc. content, or of an event. Directors can be associated with individual
     * items or with a series, episode, clip.
     * @param \Vnetby\Schemaorg\Types\Thing\Person\Person $value
     * @return static
     */
    function setDirector($value)
    {
        return $this->setProp('director', $value);
    }

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
     * The frame size of the video.
     * @param string|\Vnetby\Schemaorg\DataTypes\DataText $value
     * @return static
     */
    function setVideoFrameSize($value)
    {
        return $this->setProp('videoFrameSize', $value);
    }

    /**
     * An actor, e.g. in TV, radio, movie, video games etc., or in an event. Actors can be associated with individual items
     * or with a series, episode, clip.
     * @param \Vnetby\Schemaorg\Types\Thing\Person\Person $value
     * @return static
     */
    function setActor($value)
    {
        return $this->setProp('actor', $value);
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
     * The quality of the video.
     * @param string|\Vnetby\Schemaorg\DataTypes\DataText $value
     * @return static
     */
    function setVideoQuality($value)
    {
        return $this->setProp('videoQuality', $value);
    }

    /**
     * The composer of the soundtrack.
     * @return \Vnetby\Schemaorg\Types\Thing\Organization\PerformingGroup\MusicGroup|\Vnetby\Schemaorg\Types\Thing\Person\Person|null
     */
    function getMusicBy()
    {
        return $this->getProp('musicBy');
    }

    /**
     * A director of e.g. TV, radio, movie, video gaming etc. content, or of an event. Directors can be associated with individual
     * items or with a series, episode, clip.
     * @return \Vnetby\Schemaorg\Types\Thing\Person\Person|null
     */
    function getDirector()
    {
        return $this->getProp('director');
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
     * The frame size of the video.
     * @return string|\Vnetby\Schemaorg\DataTypes\DataText|null
     */
    function getVideoFrameSize()
    {
        return $this->getProp('videoFrameSize');
    }

    /**
     * An actor, e.g. in TV, radio, movie, video games etc., or in an event. Actors can be associated with individual items
     * or with a series, episode, clip.
     * @return \Vnetby\Schemaorg\Types\Thing\Person\Person|null
     */
    function getActor()
    {
        return $this->getProp('actor');
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
     * The quality of the video.
     * @return string|\Vnetby\Schemaorg\DataTypes\DataText|null
     */
    function getVideoQuality()
    {
        return $this->getProp('videoQuality');
    }
}
