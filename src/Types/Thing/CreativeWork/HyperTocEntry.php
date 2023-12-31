<?php

/**
 * @see https://schema.org/HyperTocEntry
 * A HyperToEntry is an item within a [[HyperToc]], which represents a hypertext table of contents for complex media objects, such as
 * [[VideoObject]], [[AudioObject]]. The media object itself is indicated using [[associatedMedia]]. Each section of interest within that content can be described with
 * a [[HyperTocEntry]], with associated [[startOffset]] and [[endOffset]]. When several entries are all from the same file, [[associatedMedia]] is used on the
 * overarching [[HyperTocEntry]]; if the content has been split into multiple files, they can be referenced using [[associatedMedia]] on each [[HyperTocEntry]].
 */

namespace Vnetby\Schemaorg\Types\Thing\CreativeWork;

class HyperTocEntry extends \Vnetby\Schemaorg\Types\Thing\CreativeWork\CreativeWork
{
    const TYPE = 'HyperTocEntry';

    /**
     * A [[HyperTocEntry]] can have a [[tocContinuation]] indicated, which is another [[HyperTocEntry]] that would be the default next item to play or
     * render.
     * @var \Vnetby\Schemaorg\Types\Thing\CreativeWork\HyperTocEntry
     */
    public $tocContinuation;

    /**
     * A media object that encodes this CreativeWork. This property is a synonym for encoding.
     * @var \Vnetby\Schemaorg\Types\Thing\CreativeWork\MediaObject\MediaObject
     */
    public $associatedMedia;

    /**
     * Text of an utterances (spoken words, lyrics etc.) that occurs at a certain section of a media object, represented as a
     * [[HyperTocEntry]].
     * @var string|\Vnetby\Schemaorg\DataTypes\DataText
     */
    public $utterances;

    /**
     * A [[HyperTocEntry]] can have a [[tocContinuation]] indicated, which is another [[HyperTocEntry]] that would be the default next item to play or
     * render.
     * @param \Vnetby\Schemaorg\Types\Thing\CreativeWork\HyperTocEntry $value
     * @return static
     */
    function setTocContinuation($value)
    {
        return $this->setProp('tocContinuation', $value);
    }

    /**
     * A media object that encodes this CreativeWork. This property is a synonym for encoding.
     * @param \Vnetby\Schemaorg\Types\Thing\CreativeWork\MediaObject\MediaObject $value
     * @return static
     */
    function setAssociatedMedia($value)
    {
        return $this->setProp('associatedMedia', $value);
    }

    /**
     * Text of an utterances (spoken words, lyrics etc.) that occurs at a certain section of a media object, represented as a
     * [[HyperTocEntry]].
     * @param string|\Vnetby\Schemaorg\DataTypes\DataText $value
     * @return static
     */
    function setUtterances($value)
    {
        return $this->setProp('utterances', $value);
    }

    /**
     * A [[HyperTocEntry]] can have a [[tocContinuation]] indicated, which is another [[HyperTocEntry]] that would be the default next item to play or
     * render.
     * @return \Vnetby\Schemaorg\Types\Thing\CreativeWork\HyperTocEntry|null
     */
    function getTocContinuation()
    {
        return $this->getProp('tocContinuation');
    }

    /**
     * A media object that encodes this CreativeWork. This property is a synonym for encoding.
     * @return \Vnetby\Schemaorg\Types\Thing\CreativeWork\MediaObject\MediaObject|null
     */
    function getAssociatedMedia()
    {
        return $this->getProp('associatedMedia');
    }

    /**
     * Text of an utterances (spoken words, lyrics etc.) that occurs at a certain section of a media object, represented as a
     * [[HyperTocEntry]].
     * @return string|\Vnetby\Schemaorg\DataTypes\DataText|null
     */
    function getUtterances()
    {
        return $this->getProp('utterances');
    }
}
