<?php

/**
 * @see https://schema.org/PodcastSeries
 * A podcast is an episodic series of digital audio or video files which a user can download and listen to.
 */

namespace Vnetby\Schemaorg\Types\Thing\CreativeWork\CreativeWorkSeries;

class PodcastSeries extends \Vnetby\Schemaorg\Types\Thing\CreativeWork\CreativeWorkSeries\CreativeWorkSeries
{
    const TYPE = 'PodcastSeries';

    /**
     * An actor, e.g. in TV, radio, movie, video games etc., or in an event. Actors can be associated with individual items
     * or with a series, episode, clip.
     * @var \Vnetby\Schemaorg\Types\Thing\Person\Person
     */
    public $actor;

    /**
     * The URL for a feed, e.g. associated with a podcast series, blog, or series of date-stamped updates. This is usually RSS
     * or Atom.
     * @var string|\Vnetby\Schemaorg\DataTypes\DataURL|\Vnetby\Schemaorg\Types\Thing\CreativeWork\Dataset\DataFeed\DataFeed
     */
    public $webFeed;

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
     * The URL for a feed, e.g. associated with a podcast series, blog, or series of date-stamped updates. This is usually RSS
     * or Atom.
     * @param string|\Vnetby\Schemaorg\DataTypes\DataURL|\Vnetby\Schemaorg\Types\Thing\CreativeWork\Dataset\DataFeed\DataFeed $value
     * @return static
     */
    function setWebFeed($value)
    {
        return $this->setProp('webFeed', $value);
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
     * The URL for a feed, e.g. associated with a podcast series, blog, or series of date-stamped updates. This is usually RSS
     * or Atom.
     * @return string|\Vnetby\Schemaorg\DataTypes\DataURL|\Vnetby\Schemaorg\Types\Thing\CreativeWork\Dataset\DataFeed\DataFeed|null
     */
    function getWebFeed()
    {
        return $this->getProp('webFeed');
    }
}
