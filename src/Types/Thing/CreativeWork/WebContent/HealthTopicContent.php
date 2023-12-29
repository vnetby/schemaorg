<?php

/**
 * @see https://schema.org/HealthTopicContent
 * [[HealthTopicContent]] is [[WebContent]] that is about some aspect of a health topic, e.g. a condition, its symptoms or treatments. Such content
 * may be comprised of several parts or sections and use different types of media. Multiple instances of [[WebContent]] (and hence [[HealthTopicContent]])
 * can be related using [[hasPart]] / [[isPartOf]] where there is some kind of content hierarchy, and their content described with [[about]]
 * and [[mentions]] e.g. building upon the existing [[MedicalCondition]] vocabulary. 
 */

namespace Vnetby\Schemaorg\Types\Thing\CreativeWork\WebContent;

class HealthTopicContent extends \Vnetby\Schemaorg\Types\Thing\CreativeWork\WebContent\WebContent
{
    const TYPE = 'HealthTopicContent';

    /**
     * Indicates the aspect or aspects specifically addressed in some [[HealthTopicContent]]. For example, that the content is an overview, or that it
     * talks about treatment, self-care, treatments or their side-effects.
     * @var \Vnetby\Schemaorg\Types\Thing\Intangible\Enumeration\HealthAspectEnumeration\HealthAspectEnumeration
     */
    public $hasHealthAspect;

    /**
     * Indicates the aspect or aspects specifically addressed in some [[HealthTopicContent]]. For example, that the content is an overview, or that it
     * talks about treatment, self-care, treatments or their side-effects.
     * @param \Vnetby\Schemaorg\Types\Thing\Intangible\Enumeration\HealthAspectEnumeration\HealthAspectEnumeration $value
     * @return static
     */
    function setHasHealthAspect($value)
    {
        return $this->setProp('hasHealthAspect', $value);
    }

    /**
     * Indicates the aspect or aspects specifically addressed in some [[HealthTopicContent]]. For example, that the content is an overview, or that it
     * talks about treatment, self-care, treatments or their side-effects.
     * @return \Vnetby\Schemaorg\Types\Thing\Intangible\Enumeration\HealthAspectEnumeration\HealthAspectEnumeration|null
     */
    function getHasHealthAspect()
    {
        return $this->getProp('hasHealthAspect');
    }
}
