<?php

/**
 * @see https://schema.org/PublicationVolume
 * A part of a successively published publication such as a periodical or multi-volume work, often numbered. It may represent a time
 * span, such as a year.\n\nSee also [blog post](http://blog.schema.org/2014/09/schemaorg-support-for-bibliographic_2.html).
 */

namespace Vnetby\Schemaorg\Types\Thing\CreativeWork;

class PublicationVolume extends \Vnetby\Schemaorg\Types\Thing\CreativeWork\CreativeWork
{
    const TYPE = 'PublicationVolume';

    /**
     * Any description of pages that is not separated into pageStart and pageEnd; for example, "1-6, 9, 55" or "10-12, 46-49".
     * @var string|\Vnetby\Schemaorg\DataTypes\DataText
     */
    public $pagination;

    /**
     * The page on which the work starts; for example "135" or "xiii".
     * @var string|int|\Vnetby\Schemaorg\DataTypes\DataText|\Vnetby\Schemaorg\DataTypes\DataInteger
     */
    public $pageStart;

    /**
     * Identifies the volume of publication or multi-part work; for example, "iii" or "2".
     * @var string|int|\Vnetby\Schemaorg\DataTypes\DataText|\Vnetby\Schemaorg\DataTypes\DataInteger
     */
    public $volumeNumber;

    /**
     * The page on which the work ends; for example "138" or "xvi".
     * @var string|int|\Vnetby\Schemaorg\DataTypes\DataInteger|\Vnetby\Schemaorg\DataTypes\DataText
     */
    public $pageEnd;

    /**
     * Any description of pages that is not separated into pageStart and pageEnd; for example, "1-6, 9, 55" or "10-12, 46-49".
     * @param string|\Vnetby\Schemaorg\DataTypes\DataText $value
     * @return static
     */
    function setPagination($value)
    {
        return $this->setProp('pagination', $value);
    }

    /**
     * The page on which the work starts; for example "135" or "xiii".
     * @param string|int|\Vnetby\Schemaorg\DataTypes\DataText|\Vnetby\Schemaorg\DataTypes\DataInteger $value
     * @return static
     */
    function setPageStart($value)
    {
        return $this->setProp('pageStart', $value);
    }

    /**
     * Identifies the volume of publication or multi-part work; for example, "iii" or "2".
     * @param string|int|\Vnetby\Schemaorg\DataTypes\DataText|\Vnetby\Schemaorg\DataTypes\DataInteger $value
     * @return static
     */
    function setVolumeNumber($value)
    {
        return $this->setProp('volumeNumber', $value);
    }

    /**
     * The page on which the work ends; for example "138" or "xvi".
     * @param string|int|\Vnetby\Schemaorg\DataTypes\DataInteger|\Vnetby\Schemaorg\DataTypes\DataText $value
     * @return static
     */
    function setPageEnd($value)
    {
        return $this->setProp('pageEnd', $value);
    }

    /**
     * Any description of pages that is not separated into pageStart and pageEnd; for example, "1-6, 9, 55" or "10-12, 46-49".
     * @return string|\Vnetby\Schemaorg\DataTypes\DataText|null
     */
    function getPagination()
    {
        return $this->getProp('pagination');
    }

    /**
     * The page on which the work starts; for example "135" or "xiii".
     * @return string|int|\Vnetby\Schemaorg\DataTypes\DataText|\Vnetby\Schemaorg\DataTypes\DataInteger|null
     */
    function getPageStart()
    {
        return $this->getProp('pageStart');
    }

    /**
     * Identifies the volume of publication or multi-part work; for example, "iii" or "2".
     * @return string|int|\Vnetby\Schemaorg\DataTypes\DataText|\Vnetby\Schemaorg\DataTypes\DataInteger|null
     */
    function getVolumeNumber()
    {
        return $this->getProp('volumeNumber');
    }

    /**
     * The page on which the work ends; for example "138" or "xvi".
     * @return string|int|\Vnetby\Schemaorg\DataTypes\DataInteger|\Vnetby\Schemaorg\DataTypes\DataText|null
     */
    function getPageEnd()
    {
        return $this->getProp('pageEnd');
    }
}
