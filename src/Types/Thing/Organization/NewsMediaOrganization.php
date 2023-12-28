<?php

/**
 * @see https://schema.org/NewsMediaOrganization
 * A News/Media organization such as a newspaper or TV station.
 */

namespace Vnetby\Schemaorg\Types\Thing\Organization;

class NewsMediaOrganization extends \Vnetby\Schemaorg\Types\Thing\Organization\Organization
{
    const TYPE = 'NewsMediaOrganization';

    /**
     * For a [[NewsMediaOrganization]] or other news-related [[Organization]], a statement about public engagement activities (for news media, the newsroom’s), including involving the
     * public - digitally or otherwise -- in coverage decisions, reporting and activities after publication.
     * @var \Vnetby\Schemaorg\DataTypes\DataURL|\Vnetby\Schemaorg\Types\Thing\CreativeWork\CreativeWork
     */
    protected $prop_actionableFeedbackPolicy;

    /**
     * For a [[NewsMediaOrganization]] or other news-related [[Organization]], a statement explaining when authors of articles are not named in bylines.
     * @var \Vnetby\Schemaorg\DataTypes\DataURL|\Vnetby\Schemaorg\Types\Thing\CreativeWork\CreativeWork
     */
    protected $prop_noBylinesPolicy;

    /**
     * For an [[Organization]] (often but not necessarily a [[NewsMediaOrganization]]), a report on staffing diversity issues. In a news context this might
     * be for example ASNE or RTDNA (US) reports, or self-reported.
     * @var \Vnetby\Schemaorg\Types\Thing\CreativeWork\Article\Article|\Vnetby\Schemaorg\DataTypes\DataURL
     */
    protected $prop_diversityStaffingReport;

    /**
     * Statement on diversity policy by an [[Organization]] e.g. a [[NewsMediaOrganization]]. For a [[NewsMediaOrganization]], a statement describing the newsroom’s diversity policy on
     * both staffing and sources, typically providing staffing data.
     * @var \Vnetby\Schemaorg\DataTypes\DataURL|\Vnetby\Schemaorg\Types\Thing\CreativeWork\CreativeWork
     */
    protected $prop_diversityPolicy;

    /**
     * For an [[Organization]] (e.g. [[NewsMediaOrganization]]), a statement describing (in news media, the newsroom’s) disclosure and correction policy for errors.
     * @var \Vnetby\Schemaorg\DataTypes\DataURL|\Vnetby\Schemaorg\Types\Thing\CreativeWork\CreativeWork
     */
    protected $prop_correctionsPolicy;

    /**
     * Statement about ethics policy, e.g. of a [[NewsMediaOrganization]] regarding journalistic and publishing practices, or of a [[Restaurant]], a page describing food
     * source policies. In the case of a [[NewsMediaOrganization]], an ethicsPolicy is typically a statement describing the personal, organizational, and corporate standards
     * of behavior expected by the organization.
     * @var \Vnetby\Schemaorg\DataTypes\DataURL|\Vnetby\Schemaorg\Types\Thing\CreativeWork\CreativeWork
     */
    protected $prop_ethicsPolicy;

    /**
     * For an [[Organization]] (typically a [[NewsMediaOrganization]]), a statement about policy on use of unnamed sources and the decision process required.
     * @var \Vnetby\Schemaorg\DataTypes\DataURL|\Vnetby\Schemaorg\Types\Thing\CreativeWork\CreativeWork
     */
    protected $prop_unnamedSourcesPolicy;

    /**
     * For an [[Organization]] (often but not necessarily a [[NewsMediaOrganization]]), a description of organizational ownership structure; funding and grants. In a news/media
     * setting, this is with particular reference to editorial independence. Note that the [[funder]] is also available and can be used to
     * make basic funder information machine-readable.
     * @var \Vnetby\Schemaorg\DataTypes\DataURL|\Vnetby\Schemaorg\Types\Thing\CreativeWork\CreativeWork|\Vnetby\Schemaorg\DataTypes\DataText|\Vnetby\Schemaorg\Types\Thing\CreativeWork\WebPage\AboutPage
     */
    protected $prop_ownershipFundingInfo;

    /**
     * Disclosure about verification and fact-checking processes for a [[NewsMediaOrganization]] or other fact-checking [[Organization]].
     * @var \Vnetby\Schemaorg\DataTypes\DataURL|\Vnetby\Schemaorg\Types\Thing\CreativeWork\CreativeWork
     */
    protected $prop_verificationFactCheckingPolicy;

    /**
     * For a [[NewsMediaOrganization]], a link to the masthead page or a page listing top editorial management.
     * @var \Vnetby\Schemaorg\DataTypes\DataURL|\Vnetby\Schemaorg\Types\Thing\CreativeWork\CreativeWork
     */
    protected $prop_masthead;

    /**
     * For a [[NewsMediaOrganization]], a statement on coverage priorities, including any public agenda or stance on issues.
     * @var \Vnetby\Schemaorg\DataTypes\DataURL|\Vnetby\Schemaorg\Types\Thing\CreativeWork\CreativeWork
     */
    protected $prop_missionCoveragePrioritiesPolicy;

    /**
     * For a [[NewsMediaOrganization]] or other news-related [[Organization]], a statement about public engagement activities (for news media, the newsroom’s), including involving the
     * public - digitally or otherwise -- in coverage decisions, reporting and activities after publication.
     * @param \Vnetby\Schemaorg\DataTypes\DataURL|\Vnetby\Schemaorg\Types\Thing\CreativeWork\CreativeWork $value
     * @return static
     */
    function setActionableFeedbackPolicy($value)
    {
        return $this->setProp('actionableFeedbackPolicy', $value);
    }

    /**
     * For a [[NewsMediaOrganization]] or other news-related [[Organization]], a statement explaining when authors of articles are not named in bylines.
     * @param \Vnetby\Schemaorg\DataTypes\DataURL|\Vnetby\Schemaorg\Types\Thing\CreativeWork\CreativeWork $value
     * @return static
     */
    function setNoBylinesPolicy($value)
    {
        return $this->setProp('noBylinesPolicy', $value);
    }

    /**
     * For an [[Organization]] (often but not necessarily a [[NewsMediaOrganization]]), a report on staffing diversity issues. In a news context this might
     * be for example ASNE or RTDNA (US) reports, or self-reported.
     * @param \Vnetby\Schemaorg\Types\Thing\CreativeWork\Article\Article|\Vnetby\Schemaorg\DataTypes\DataURL $value
     * @return static
     */
    function setDiversityStaffingReport($value)
    {
        return $this->setProp('diversityStaffingReport', $value);
    }

    /**
     * Statement on diversity policy by an [[Organization]] e.g. a [[NewsMediaOrganization]]. For a [[NewsMediaOrganization]], a statement describing the newsroom’s diversity policy on
     * both staffing and sources, typically providing staffing data.
     * @param \Vnetby\Schemaorg\DataTypes\DataURL|\Vnetby\Schemaorg\Types\Thing\CreativeWork\CreativeWork $value
     * @return static
     */
    function setDiversityPolicy($value)
    {
        return $this->setProp('diversityPolicy', $value);
    }

    /**
     * For an [[Organization]] (e.g. [[NewsMediaOrganization]]), a statement describing (in news media, the newsroom’s) disclosure and correction policy for errors.
     * @param \Vnetby\Schemaorg\DataTypes\DataURL|\Vnetby\Schemaorg\Types\Thing\CreativeWork\CreativeWork $value
     * @return static
     */
    function setCorrectionsPolicy($value)
    {
        return $this->setProp('correctionsPolicy', $value);
    }

    /**
     * Statement about ethics policy, e.g. of a [[NewsMediaOrganization]] regarding journalistic and publishing practices, or of a [[Restaurant]], a page describing food
     * source policies. In the case of a [[NewsMediaOrganization]], an ethicsPolicy is typically a statement describing the personal, organizational, and corporate standards
     * of behavior expected by the organization.
     * @param \Vnetby\Schemaorg\DataTypes\DataURL|\Vnetby\Schemaorg\Types\Thing\CreativeWork\CreativeWork $value
     * @return static
     */
    function setEthicsPolicy($value)
    {
        return $this->setProp('ethicsPolicy', $value);
    }

    /**
     * For an [[Organization]] (typically a [[NewsMediaOrganization]]), a statement about policy on use of unnamed sources and the decision process required.
     * @param \Vnetby\Schemaorg\DataTypes\DataURL|\Vnetby\Schemaorg\Types\Thing\CreativeWork\CreativeWork $value
     * @return static
     */
    function setUnnamedSourcesPolicy($value)
    {
        return $this->setProp('unnamedSourcesPolicy', $value);
    }

    /**
     * For an [[Organization]] (often but not necessarily a [[NewsMediaOrganization]]), a description of organizational ownership structure; funding and grants. In a news/media
     * setting, this is with particular reference to editorial independence. Note that the [[funder]] is also available and can be used to
     * make basic funder information machine-readable.
     * @param \Vnetby\Schemaorg\DataTypes\DataURL|\Vnetby\Schemaorg\Types\Thing\CreativeWork\CreativeWork|\Vnetby\Schemaorg\DataTypes\DataText|\Vnetby\Schemaorg\Types\Thing\CreativeWork\WebPage\AboutPage $value
     * @return static
     */
    function setOwnershipFundingInfo($value)
    {
        return $this->setProp('ownershipFundingInfo', $value);
    }

    /**
     * Disclosure about verification and fact-checking processes for a [[NewsMediaOrganization]] or other fact-checking [[Organization]].
     * @param \Vnetby\Schemaorg\DataTypes\DataURL|\Vnetby\Schemaorg\Types\Thing\CreativeWork\CreativeWork $value
     * @return static
     */
    function setVerificationFactCheckingPolicy($value)
    {
        return $this->setProp('verificationFactCheckingPolicy', $value);
    }

    /**
     * For a [[NewsMediaOrganization]], a link to the masthead page or a page listing top editorial management.
     * @param \Vnetby\Schemaorg\DataTypes\DataURL|\Vnetby\Schemaorg\Types\Thing\CreativeWork\CreativeWork $value
     * @return static
     */
    function setMasthead($value)
    {
        return $this->setProp('masthead', $value);
    }

    /**
     * For a [[NewsMediaOrganization]], a statement on coverage priorities, including any public agenda or stance on issues.
     * @param \Vnetby\Schemaorg\DataTypes\DataURL|\Vnetby\Schemaorg\Types\Thing\CreativeWork\CreativeWork $value
     * @return static
     */
    function setMissionCoveragePrioritiesPolicy($value)
    {
        return $this->setProp('missionCoveragePrioritiesPolicy', $value);
    }

    /**
     * For a [[NewsMediaOrganization]] or other news-related [[Organization]], a statement about public engagement activities (for news media, the newsroom’s), including involving the
     * public - digitally or otherwise -- in coverage decisions, reporting and activities after publication.
     * @return \Vnetby\Schemaorg\DataTypes\DataURL|\Vnetby\Schemaorg\Types\Thing\CreativeWork\CreativeWork|null
     */
    function getActionableFeedbackPolicy()
    {
        return $this->getProp('actionableFeedbackPolicy');
    }

    /**
     * For a [[NewsMediaOrganization]] or other news-related [[Organization]], a statement explaining when authors of articles are not named in bylines.
     * @return \Vnetby\Schemaorg\DataTypes\DataURL|\Vnetby\Schemaorg\Types\Thing\CreativeWork\CreativeWork|null
     */
    function getNoBylinesPolicy()
    {
        return $this->getProp('noBylinesPolicy');
    }

    /**
     * For an [[Organization]] (often but not necessarily a [[NewsMediaOrganization]]), a report on staffing diversity issues. In a news context this might
     * be for example ASNE or RTDNA (US) reports, or self-reported.
     * @return \Vnetby\Schemaorg\Types\Thing\CreativeWork\Article\Article|\Vnetby\Schemaorg\DataTypes\DataURL|null
     */
    function getDiversityStaffingReport()
    {
        return $this->getProp('diversityStaffingReport');
    }

    /**
     * Statement on diversity policy by an [[Organization]] e.g. a [[NewsMediaOrganization]]. For a [[NewsMediaOrganization]], a statement describing the newsroom’s diversity policy on
     * both staffing and sources, typically providing staffing data.
     * @return \Vnetby\Schemaorg\DataTypes\DataURL|\Vnetby\Schemaorg\Types\Thing\CreativeWork\CreativeWork|null
     */
    function getDiversityPolicy()
    {
        return $this->getProp('diversityPolicy');
    }

    /**
     * For an [[Organization]] (e.g. [[NewsMediaOrganization]]), a statement describing (in news media, the newsroom’s) disclosure and correction policy for errors.
     * @return \Vnetby\Schemaorg\DataTypes\DataURL|\Vnetby\Schemaorg\Types\Thing\CreativeWork\CreativeWork|null
     */
    function getCorrectionsPolicy()
    {
        return $this->getProp('correctionsPolicy');
    }

    /**
     * Statement about ethics policy, e.g. of a [[NewsMediaOrganization]] regarding journalistic and publishing practices, or of a [[Restaurant]], a page describing food
     * source policies. In the case of a [[NewsMediaOrganization]], an ethicsPolicy is typically a statement describing the personal, organizational, and corporate standards
     * of behavior expected by the organization.
     * @return \Vnetby\Schemaorg\DataTypes\DataURL|\Vnetby\Schemaorg\Types\Thing\CreativeWork\CreativeWork|null
     */
    function getEthicsPolicy()
    {
        return $this->getProp('ethicsPolicy');
    }

    /**
     * For an [[Organization]] (typically a [[NewsMediaOrganization]]), a statement about policy on use of unnamed sources and the decision process required.
     * @return \Vnetby\Schemaorg\DataTypes\DataURL|\Vnetby\Schemaorg\Types\Thing\CreativeWork\CreativeWork|null
     */
    function getUnnamedSourcesPolicy()
    {
        return $this->getProp('unnamedSourcesPolicy');
    }

    /**
     * For an [[Organization]] (often but not necessarily a [[NewsMediaOrganization]]), a description of organizational ownership structure; funding and grants. In a news/media
     * setting, this is with particular reference to editorial independence. Note that the [[funder]] is also available and can be used to
     * make basic funder information machine-readable.
     * @return \Vnetby\Schemaorg\DataTypes\DataURL|\Vnetby\Schemaorg\Types\Thing\CreativeWork\CreativeWork|\Vnetby\Schemaorg\DataTypes\DataText|\Vnetby\Schemaorg\Types\Thing\CreativeWork\WebPage\AboutPage|null
     */
    function getOwnershipFundingInfo()
    {
        return $this->getProp('ownershipFundingInfo');
    }

    /**
     * Disclosure about verification and fact-checking processes for a [[NewsMediaOrganization]] or other fact-checking [[Organization]].
     * @return \Vnetby\Schemaorg\DataTypes\DataURL|\Vnetby\Schemaorg\Types\Thing\CreativeWork\CreativeWork|null
     */
    function getVerificationFactCheckingPolicy()
    {
        return $this->getProp('verificationFactCheckingPolicy');
    }

    /**
     * For a [[NewsMediaOrganization]], a link to the masthead page or a page listing top editorial management.
     * @return \Vnetby\Schemaorg\DataTypes\DataURL|\Vnetby\Schemaorg\Types\Thing\CreativeWork\CreativeWork|null
     */
    function getMasthead()
    {
        return $this->getProp('masthead');
    }

    /**
     * For a [[NewsMediaOrganization]], a statement on coverage priorities, including any public agenda or stance on issues.
     * @return \Vnetby\Schemaorg\DataTypes\DataURL|\Vnetby\Schemaorg\Types\Thing\CreativeWork\CreativeWork|null
     */
    function getMissionCoveragePrioritiesPolicy()
    {
        return $this->getProp('missionCoveragePrioritiesPolicy');
    }
}
