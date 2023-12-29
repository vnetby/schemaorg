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
     * @var string|int|float|\Vnetby\Schemaorg\Types\Thing\CreativeWork\HyperTocEntry|\Vnetby\Schemaorg\DataTypes\DataNumber
     */
    public $startOffset;

    /**
     * The start time of the clip expressed as the number of seconds from the beginning of the work.
     * @param string|int|float|\Vnetby\Schemaorg\Types\Thing\CreativeWork\HyperTocEntry|\Vnetby\Schemaorg\DataTypes\DataNumber $value
     * @return static
     */
    function setStartOffset($value)
    {
        return $this->setProp('startOffset', $value);
    }

    /**
     * The start time of the clip expressed as the number of seconds from the beginning of the work.
     * @return string|int|float|\Vnetby\Schemaorg\Types\Thing\CreativeWork\HyperTocEntry|\Vnetby\Schemaorg\DataTypes\DataNumber|null
     */
    function getStartOffset()
    {
        return $this->getProp('startOffset');
    }
}
