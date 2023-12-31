<?php

/**
 * @see https://schema.org/MusicComposition
 * A musical composition.
 */

namespace Vnetby\Schemaorg\Types\Thing\CreativeWork;

class MusicComposition extends \Vnetby\Schemaorg\Types\Thing\CreativeWork\CreativeWork
{
    const TYPE = 'MusicComposition';

    /**
     * The type of composition (e.g. overture, sonata, symphony, etc.).
     * @var string|\Vnetby\Schemaorg\DataTypes\DataText
     */
    public $musicCompositionForm;

    /**
     * Smaller compositions included in this work (e.g. a movement in a symphony).
     * @var \Vnetby\Schemaorg\Types\Thing\CreativeWork\MusicComposition
     */
    public $includedComposition;

    /**
     * The person or organization who wrote a composition, or who is the composer of a work performed at some event.
     * @var \Vnetby\Schemaorg\Types\Thing\Organization\Organization|\Vnetby\Schemaorg\Types\Thing\Person\Person
     */
    public $composer;

    /**
     * The International Standard Musical Work Code for the composition.
     * @var string|\Vnetby\Schemaorg\DataTypes\DataText
     */
    public $iswcCode;

    /**
     * The words in the song.
     * @var \Vnetby\Schemaorg\Types\Thing\CreativeWork\CreativeWork
     */
    public $lyrics;

    /**
     * The date and place the work was first performed.
     * @var \Vnetby\Schemaorg\Types\Thing\Event\Event
     */
    public $firstPerformance;

    /**
     * An arrangement derived from the composition.
     * @var \Vnetby\Schemaorg\Types\Thing\CreativeWork\MusicComposition
     */
    public $musicArrangement;

    /**
     * The person who wrote the words.
     * @var \Vnetby\Schemaorg\Types\Thing\Person\Person
     */
    public $lyricist;

    /**
     * The key, mode, or scale this composition uses.
     * @var string|\Vnetby\Schemaorg\DataTypes\DataText
     */
    public $musicalKey;

    /**
     * An audio recording of the work.
     * @var \Vnetby\Schemaorg\Types\Thing\CreativeWork\MusicRecording
     */
    public $recordedAs;

    /**
     * The type of composition (e.g. overture, sonata, symphony, etc.).
     * @param string|\Vnetby\Schemaorg\DataTypes\DataText $value
     * @return static
     */
    function setMusicCompositionForm($value)
    {
        return $this->setProp('musicCompositionForm', $value);
    }

    /**
     * Smaller compositions included in this work (e.g. a movement in a symphony).
     * @param \Vnetby\Schemaorg\Types\Thing\CreativeWork\MusicComposition $value
     * @return static
     */
    function setIncludedComposition($value)
    {
        return $this->setProp('includedComposition', $value);
    }

    /**
     * The person or organization who wrote a composition, or who is the composer of a work performed at some event.
     * @param \Vnetby\Schemaorg\Types\Thing\Organization\Organization|\Vnetby\Schemaorg\Types\Thing\Person\Person $value
     * @return static
     */
    function setComposer($value)
    {
        return $this->setProp('composer', $value);
    }

    /**
     * The International Standard Musical Work Code for the composition.
     * @param string|\Vnetby\Schemaorg\DataTypes\DataText $value
     * @return static
     */
    function setIswcCode($value)
    {
        return $this->setProp('iswcCode', $value);
    }

    /**
     * The words in the song.
     * @param \Vnetby\Schemaorg\Types\Thing\CreativeWork\CreativeWork $value
     * @return static
     */
    function setLyrics($value)
    {
        return $this->setProp('lyrics', $value);
    }

    /**
     * The date and place the work was first performed.
     * @param \Vnetby\Schemaorg\Types\Thing\Event\Event $value
     * @return static
     */
    function setFirstPerformance($value)
    {
        return $this->setProp('firstPerformance', $value);
    }

    /**
     * An arrangement derived from the composition.
     * @param \Vnetby\Schemaorg\Types\Thing\CreativeWork\MusicComposition $value
     * @return static
     */
    function setMusicArrangement($value)
    {
        return $this->setProp('musicArrangement', $value);
    }

    /**
     * The person who wrote the words.
     * @param \Vnetby\Schemaorg\Types\Thing\Person\Person $value
     * @return static
     */
    function setLyricist($value)
    {
        return $this->setProp('lyricist', $value);
    }

    /**
     * The key, mode, or scale this composition uses.
     * @param string|\Vnetby\Schemaorg\DataTypes\DataText $value
     * @return static
     */
    function setMusicalKey($value)
    {
        return $this->setProp('musicalKey', $value);
    }

    /**
     * An audio recording of the work.
     * @param \Vnetby\Schemaorg\Types\Thing\CreativeWork\MusicRecording $value
     * @return static
     */
    function setRecordedAs($value)
    {
        return $this->setProp('recordedAs', $value);
    }

    /**
     * The type of composition (e.g. overture, sonata, symphony, etc.).
     * @return string|\Vnetby\Schemaorg\DataTypes\DataText|null
     */
    function getMusicCompositionForm()
    {
        return $this->getProp('musicCompositionForm');
    }

    /**
     * Smaller compositions included in this work (e.g. a movement in a symphony).
     * @return \Vnetby\Schemaorg\Types\Thing\CreativeWork\MusicComposition|null
     */
    function getIncludedComposition()
    {
        return $this->getProp('includedComposition');
    }

    /**
     * The person or organization who wrote a composition, or who is the composer of a work performed at some event.
     * @return \Vnetby\Schemaorg\Types\Thing\Organization\Organization|\Vnetby\Schemaorg\Types\Thing\Person\Person|null
     */
    function getComposer()
    {
        return $this->getProp('composer');
    }

    /**
     * The International Standard Musical Work Code for the composition.
     * @return string|\Vnetby\Schemaorg\DataTypes\DataText|null
     */
    function getIswcCode()
    {
        return $this->getProp('iswcCode');
    }

    /**
     * The words in the song.
     * @return \Vnetby\Schemaorg\Types\Thing\CreativeWork\CreativeWork|null
     */
    function getLyrics()
    {
        return $this->getProp('lyrics');
    }

    /**
     * The date and place the work was first performed.
     * @return \Vnetby\Schemaorg\Types\Thing\Event\Event|null
     */
    function getFirstPerformance()
    {
        return $this->getProp('firstPerformance');
    }

    /**
     * An arrangement derived from the composition.
     * @return \Vnetby\Schemaorg\Types\Thing\CreativeWork\MusicComposition|null
     */
    function getMusicArrangement()
    {
        return $this->getProp('musicArrangement');
    }

    /**
     * The person who wrote the words.
     * @return \Vnetby\Schemaorg\Types\Thing\Person\Person|null
     */
    function getLyricist()
    {
        return $this->getProp('lyricist');
    }

    /**
     * The key, mode, or scale this composition uses.
     * @return string|\Vnetby\Schemaorg\DataTypes\DataText|null
     */
    function getMusicalKey()
    {
        return $this->getProp('musicalKey');
    }

    /**
     * An audio recording of the work.
     * @return \Vnetby\Schemaorg\Types\Thing\CreativeWork\MusicRecording|null
     */
    function getRecordedAs()
    {
        return $this->getProp('recordedAs');
    }
}
