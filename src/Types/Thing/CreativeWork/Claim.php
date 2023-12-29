<?php

/**
 * @see https://schema.org/Claim
 * A [[Claim]] in Schema.org represents a specific, factually-oriented claim that could be the [[itemReviewed]] in a [[ClaimReview]]. The content of a
 * claim can be summarized with the [[text]] property. Variations on well known claims can have their common identity indicated via [[sameAs]]
 * links, and summarized with a [[name]]. Ideally, a [[Claim]] description includes enough contextual information to minimize the risk of ambiguity or
 * inclarity. In practice, many claims are better understood in the context in which they appear or the interpretations provided by claim
 * reviews. Beyond [[ClaimReview]], the Claim type can be associated with related creative works - for example a [[ScholarlyArticle]] or [[Question]] might
 * be [[about]] some [[Claim]]. At this time, Schema.org does not define any types of relationship between claims. This is a natural
 * area for future exploration. 
 */

namespace Vnetby\Schemaorg\Types\Thing\CreativeWork;

class Claim extends \Vnetby\Schemaorg\Types\Thing\CreativeWork\CreativeWork
{
    const TYPE = 'Claim';

    /**
     * Indicates an occurrence of a [[Claim]] in some [[CreativeWork]].
     * @var \Vnetby\Schemaorg\Types\Thing\CreativeWork\CreativeWork
     */
    public $appearance;

    /**
     * For a [[Claim]] interpreted from [[MediaObject]] content sed to indicate a claim contained, implied or refined from the content of a
     * [[MediaObject]].
     * @var \Vnetby\Schemaorg\Types\Thing\Person\Person|\Vnetby\Schemaorg\Types\Thing\Organization\Organization
     */
    public $claimInterpreter;

    /**
     * Indicates the first known occurrence of a [[Claim]] in some [[CreativeWork]].
     * @var \Vnetby\Schemaorg\Types\Thing\CreativeWork\CreativeWork
     */
    public $firstAppearance;

    /**
     * Indicates an occurrence of a [[Claim]] in some [[CreativeWork]].
     * @param \Vnetby\Schemaorg\Types\Thing\CreativeWork\CreativeWork $value
     * @return static
     */
    function setAppearance($value)
    {
        return $this->setProp('appearance', $value);
    }

    /**
     * For a [[Claim]] interpreted from [[MediaObject]] content sed to indicate a claim contained, implied or refined from the content of a
     * [[MediaObject]].
     * @param \Vnetby\Schemaorg\Types\Thing\Person\Person|\Vnetby\Schemaorg\Types\Thing\Organization\Organization $value
     * @return static
     */
    function setClaimInterpreter($value)
    {
        return $this->setProp('claimInterpreter', $value);
    }

    /**
     * Indicates the first known occurrence of a [[Claim]] in some [[CreativeWork]].
     * @param \Vnetby\Schemaorg\Types\Thing\CreativeWork\CreativeWork $value
     * @return static
     */
    function setFirstAppearance($value)
    {
        return $this->setProp('firstAppearance', $value);
    }

    /**
     * Indicates an occurrence of a [[Claim]] in some [[CreativeWork]].
     * @return \Vnetby\Schemaorg\Types\Thing\CreativeWork\CreativeWork|null
     */
    function getAppearance()
    {
        return $this->getProp('appearance');
    }

    /**
     * For a [[Claim]] interpreted from [[MediaObject]] content sed to indicate a claim contained, implied or refined from the content of a
     * [[MediaObject]].
     * @return \Vnetby\Schemaorg\Types\Thing\Person\Person|\Vnetby\Schemaorg\Types\Thing\Organization\Organization|null
     */
    function getClaimInterpreter()
    {
        return $this->getProp('claimInterpreter');
    }

    /**
     * Indicates the first known occurrence of a [[Claim]] in some [[CreativeWork]].
     * @return \Vnetby\Schemaorg\Types\Thing\CreativeWork\CreativeWork|null
     */
    function getFirstAppearance()
    {
        return $this->getProp('firstAppearance');
    }
}
