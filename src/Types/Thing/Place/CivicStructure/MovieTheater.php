<?php

/**
 * @see https://schema.org/MovieTheater
 * A movie theater.
 */

namespace Vnetby\Schemaorg\Types\Thing\Place\CivicStructure;

class MovieTheater extends \Vnetby\Schemaorg\Types\Thing\Place\CivicStructure\CivicStructure
{
    const TYPE = 'MovieTheater';

    /**
     * The number of screens in the movie theater.
     * @var string|int|float|\Vnetby\Schemaorg\DataTypes\DataNumber
     */
    public $screenCount;

    /**
     * The number of screens in the movie theater.
     * @param string|int|float|\Vnetby\Schemaorg\DataTypes\DataNumber $value
     * @return static
     */
    function setScreenCount($value)
    {
        return $this->setProp('screenCount', $value);
    }

    /**
     * The number of screens in the movie theater.
     * @return string|int|float|\Vnetby\Schemaorg\DataTypes\DataNumber|null
     */
    function getScreenCount()
    {
        return $this->getProp('screenCount');
    }
}
