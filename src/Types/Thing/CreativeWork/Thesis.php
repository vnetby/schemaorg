<?php

/**
 * @see https://schema.org/Thesis
 * A thesis or dissertation document submitted in support of candidature for an academic degree or professional qualification.
 */

namespace Vnetby\Schemaorg\Types\Thing\CreativeWork;

class Thesis extends \Vnetby\Schemaorg\Types\Thing\CreativeWork\CreativeWork
{
    const TYPE = 'Thesis';

    /**
     * Qualification, candidature, degree, application that Thesis supports.
     * @var string|\Vnetby\Schemaorg\DataTypes\DataText
     */
    public $inSupportOf;

    /**
     * Qualification, candidature, degree, application that Thesis supports.
     * @param string|\Vnetby\Schemaorg\DataTypes\DataText $value
     * @return static
     */
    function setInSupportOf($value)
    {
        return $this->setProp('inSupportOf', $value);
    }

    /**
     * Qualification, candidature, degree, application that Thesis supports.
     * @return string|\Vnetby\Schemaorg\DataTypes\DataText|null
     */
    function getInSupportOf()
    {
        return $this->getProp('inSupportOf');
    }
}
