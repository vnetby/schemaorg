<?php

/**
 * @see https://schema.org/SeekToAction
 * This is the [[Action]] of navigating to a specific [[startOffset]] timestamp within a [[VideoObject]], typically represented with a URL template structure.
 */

namespace Vnetby\Schemaorg\Types\Thing\Action;

class SeekToAction extends \Vnetby\Schemaorg\Types\Thing\Action\Action
{
    const TYPE = 'SeekToAction';

    /**
     * The start time of the clip expressed as the number of seconds from the beginning of the work.
     * @var \Vnetby\Schemaorg\Types\Thing\CreativeWork\HyperTocEntry|\Vnetby\Schemaorg\DataTypes\DataNumber
     */
    protected $prop_startOffset;

    /**
     * The start time of the clip expressed as the number of seconds from the beginning of the work.
     * @param \Vnetby\Schemaorg\Types\Thing\CreativeWork\HyperTocEntry|\Vnetby\Schemaorg\DataTypes\DataNumber $value
     * @return static
     */
    function setStartOffset($value)
    {
        return $this->setProp('startOffset', $value);
    }

    /**
     * The start time of the clip expressed as the number of seconds from the beginning of the work.
     * @return \Vnetby\Schemaorg\Types\Thing\CreativeWork\HyperTocEntry|\Vnetby\Schemaorg\DataTypes\DataNumber|null
     */
    function getStartOffset()
    {
        return $this->getProp('startOffset');
    }
}
