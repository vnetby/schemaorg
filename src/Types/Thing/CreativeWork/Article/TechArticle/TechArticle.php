<?php

/**
 * @see https://schema.org/TechArticle
 * A technical article - Example: How-to (task) topics, step-by-step, procedural troubleshooting, specifications, etc.
 */

namespace Vnetby\Schemaorg\Types\Thing\CreativeWork\Article\TechArticle;

class TechArticle extends \Vnetby\Schemaorg\Types\Thing\CreativeWork\Article\Article
{
    const TYPE = 'TechArticle';

    /**
     * Proficiency needed for this content; expected values: 'Beginner', 'Expert'.
     * @var string|\Vnetby\Schemaorg\DataTypes\DataText
     */
    public $proficiencyLevel;

    /**
     * Prerequisites needed to fulfill steps in article.
     * @var string|\Vnetby\Schemaorg\DataTypes\DataText
     */
    public $dependencies;

    /**
     * Proficiency needed for this content; expected values: 'Beginner', 'Expert'.
     * @param string|\Vnetby\Schemaorg\DataTypes\DataText $value
     * @return static
     */
    function setProficiencyLevel($value)
    {
        return $this->setProp('proficiencyLevel', $value);
    }

    /**
     * Prerequisites needed to fulfill steps in article.
     * @param string|\Vnetby\Schemaorg\DataTypes\DataText $value
     * @return static
     */
    function setDependencies($value)
    {
        return $this->setProp('dependencies', $value);
    }

    /**
     * Proficiency needed for this content; expected values: 'Beginner', 'Expert'.
     * @return string|\Vnetby\Schemaorg\DataTypes\DataText|null
     */
    function getProficiencyLevel()
    {
        return $this->getProp('proficiencyLevel');
    }

    /**
     * Prerequisites needed to fulfill steps in article.
     * @return string|\Vnetby\Schemaorg\DataTypes\DataText|null
     */
    function getDependencies()
    {
        return $this->getProp('dependencies');
    }
}
