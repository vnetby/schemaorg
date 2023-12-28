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
     * Prerequisites needed to fulfill steps in article.
     * @var \Vnetby\Schemaorg\DataTypes\DataText
     */
    protected $prop_dependencies;

    /**
     * Proficiency needed for this content; expected values: 'Beginner', 'Expert'.
     * @var \Vnetby\Schemaorg\DataTypes\DataText
     */
    protected $prop_proficiencyLevel;

    /**
     * Prerequisites needed to fulfill steps in article.
     * @param \Vnetby\Schemaorg\DataTypes\DataText $value
     * @return static
     */
    function setDependencies($value)
    {
        return $this->setProp('dependencies', $value);
    }

    /**
     * Proficiency needed for this content; expected values: 'Beginner', 'Expert'.
     * @param \Vnetby\Schemaorg\DataTypes\DataText $value
     * @return static
     */
    function setProficiencyLevel($value)
    {
        return $this->setProp('proficiencyLevel', $value);
    }

    /**
     * Prerequisites needed to fulfill steps in article.
     * @return \Vnetby\Schemaorg\DataTypes\DataText|null
     */
    function getDependencies()
    {
        return $this->getProp('dependencies');
    }

    /**
     * Proficiency needed for this content; expected values: 'Beginner', 'Expert'.
     * @return \Vnetby\Schemaorg\DataTypes\DataText|null
     */
    function getProficiencyLevel()
    {
        return $this->getProp('proficiencyLevel');
    }
}
