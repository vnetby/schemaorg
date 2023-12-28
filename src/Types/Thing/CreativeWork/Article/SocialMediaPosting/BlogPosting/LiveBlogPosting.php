<?php

/**
 * @see https://schema.org/LiveBlogPosting
 * A [[LiveBlogPosting]] is a [[BlogPosting]] intended to provide a rolling textual coverage of an ongoing event through continuous updates.
 */

namespace Vnetby\Schemaorg\Types\Thing\CreativeWork\Article\SocialMediaPosting\BlogPosting;

class LiveBlogPosting extends \Vnetby\Schemaorg\Types\Thing\CreativeWork\Article\SocialMediaPosting\BlogPosting\BlogPosting
{
    const TYPE = 'LiveBlogPosting';

    /**
     * The time when the live blog will begin covering the Event. Note that coverage may begin before the Event's start time.
     * The LiveBlogPosting may also be created before coverage begins.
     * @var \Vnetby\Schemaorg\DataTypes\DataDateTime
     */
    protected $prop_coverageStartTime;

    /**
     * An update to the LiveBlog.
     * @var \Vnetby\Schemaorg\Types\Thing\CreativeWork\Article\SocialMediaPosting\BlogPosting\BlogPosting
     */
    protected $prop_liveBlogUpdate;

    /**
     * The time when the live blog will stop covering the Event. Note that coverage may continue after the Event concludes.
     * @var \Vnetby\Schemaorg\DataTypes\DataDateTime
     */
    protected $prop_coverageEndTime;

    /**
     * The time when the live blog will begin covering the Event. Note that coverage may begin before the Event's start time.
     * The LiveBlogPosting may also be created before coverage begins.
     * @param \Vnetby\Schemaorg\DataTypes\DataDateTime $value
     * @return static
     */
    function setCoverageStartTime($value)
    {
        return $this->setProp('coverageStartTime', $value);
    }

    /**
     * An update to the LiveBlog.
     * @param \Vnetby\Schemaorg\Types\Thing\CreativeWork\Article\SocialMediaPosting\BlogPosting\BlogPosting $value
     * @return static
     */
    function setLiveBlogUpdate($value)
    {
        return $this->setProp('liveBlogUpdate', $value);
    }

    /**
     * The time when the live blog will stop covering the Event. Note that coverage may continue after the Event concludes.
     * @param \Vnetby\Schemaorg\DataTypes\DataDateTime $value
     * @return static
     */
    function setCoverageEndTime($value)
    {
        return $this->setProp('coverageEndTime', $value);
    }

    /**
     * The time when the live blog will begin covering the Event. Note that coverage may begin before the Event's start time.
     * The LiveBlogPosting may also be created before coverage begins.
     * @return \Vnetby\Schemaorg\DataTypes\DataDateTime|null
     */
    function getCoverageStartTime()
    {
        return $this->getProp('coverageStartTime');
    }

    /**
     * An update to the LiveBlog.
     * @return \Vnetby\Schemaorg\Types\Thing\CreativeWork\Article\SocialMediaPosting\BlogPosting\BlogPosting|null
     */
    function getLiveBlogUpdate()
    {
        return $this->getProp('liveBlogUpdate');
    }

    /**
     * The time when the live blog will stop covering the Event. Note that coverage may continue after the Event concludes.
     * @return \Vnetby\Schemaorg\DataTypes\DataDateTime|null
     */
    function getCoverageEndTime()
    {
        return $this->getProp('coverageEndTime');
    }
}
