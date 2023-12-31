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
     * For a [[NewsMediaOrganization]], a statement on coverage priorities, including any public agenda or stance on issues.
     * @var string|\Vnetby\Schemaorg\DataTypes\DataURL|\Vnetby\Schemaorg\Types\Thing\CreativeWork\CreativeWork
     */
    public $missionCoveragePrioritiesPolicy;

    /**
     * For an [[Organization]] (often but not necessarily a [[NewsMediaOrganization]]), a description of organizational ownership structure; funding and grants. In a news/media
     * setting, this is with particular reference to editorial independence. Note that the [[funder]] is also available and can be used to
     * make basic funder information machine-readable.
     * @var string|\Vnetby\Schemaorg\DataTypes\DataText|\Vnetby\Schemaorg\DataTypes\DataURL|\Vnetby\Schemaorg\Types\Thing\CreativeWork\CreativeWork|\Vnetby\Schemaorg\Types\Thing\CreativeWork\WebPage\AboutPage
     */
    public $ownershipFundingInfo;

    /**
     * For an [[Organization]] (typically a [[NewsMediaOrganization]]), a statement about policy on use of unnamed sources and the decision process required.
     * @var string|\Vnetby\Schemaorg\DataTypes\DataURL|\Vnetby\Schemaorg\Types\Thing\CreativeWork\CreativeWork
     */
    public $unnamedSourcesPolicy;

    /**
     * For an [[Organization]] (often but not necessarily a [[NewsMediaOrganization]]), a report on staffing diversity issues. In a news context this might
     * be for example ASNE or RTDNA (US) reports, or self-reported.
     * @var string|\Vnetby\Schemaorg\Types\Thing\CreativeWork\Article\Article|\Vnetby\Schemaorg\DataTypes\DataURL
     */
    public $diversityStaffingReport;

    /**
     * For a [[NewsMediaOrganization]] or other news-related [[Organization]], a statement about public engagement activities (for news media, the newsroom’s), including involving the
     * public - digitally or otherwise -- in coverage decisions, reporting and activities after publication.
     * @var string|\Vnetby\Schemaorg\DataTypes\DataURL|\Vnetby\Schemaorg\Types\Thing\CreativeWork\CreativeWork
     */
    public $actionableFeedbackPolicy;

    /**
     * Statement on diversity policy by an [[Organization]] e.g. a [[NewsMediaOrganization]]. For a [[NewsMediaOrganization]], a statement describing the newsroom’s diversity policy on
     * both staffing and sources, typically providing staffing data.
     * @var string|\Vnetby\Schemaorg\DataTypes\DataURL|\Vnetby\Schemaorg\Types\Thing\CreativeWork\CreativeWork
     */
    public $diversityPolicy;

    /**
     * For an [[Organization]] (e.g. [[NewsMediaOrganization]]), a statement describing (in news media, the newsroom’s) disclosure and correction policy for errors.
     * @var string|\Vnetby\Schemaorg\DataTypes\DataURL|\Vnetby\Schemaorg\Types\Thing\CreativeWork\CreativeWork
     */
    public $correctionsPolicy;

    /**
     * For a [[NewsMediaOrganization]] or other news-related [[Organization]], a statement explaining when authors of articles are not named in bylines.
     * @var string|\Vnetby\Schemaorg\Types\Thing\CreativeWork\CreativeWork|\Vnetby\Schemaorg\DataTypes\DataURL
     */
    public $noBylinesPolicy;

    /**
     * Statement about ethics policy, e.g. of a [[NewsMediaOrganization]] regarding journalistic and publishing practices, or of a [[Restaurant]], a page describing food
     * source policies. In the case of a [[NewsMediaOrganization]], an ethicsPolicy is typically a statement describing the personal, organizational, and corporate standards
     * of behavior expected by the organization.
     * @var string|\Vnetby\Schemaorg\Types\Thing\CreativeWork\CreativeWork|\Vnetby\Schemaorg\DataTypes\DataURL
     */
    public $ethicsPolicy;

    /**
     * Disclosure about verification and fact-checking processes for a [[NewsMediaOrganization]] or other fact-checking [[Organization]].
     * @var string|\Vnetby\Schemaorg\DataTypes\DataURL|\Vnetby\Schemaorg\Types\Thing\CreativeWork\CreativeWork
     */
    public $verificationFactCheckingPolicy;

    /**
     * For a [[NewsMediaOrganization]], a link to the masthead page or a page listing top editorial management.
     * @var string|\Vnetby\Schemaorg\DataTypes\DataURL|\Vnetby\Schemaorg\Types\Thing\CreativeWork\CreativeWork
     */
    public $masthead;

    /**
     * For a [[NewsMediaOrganization]], a statement on coverage priorities, including any public agenda or stance on issues.
     * @param string|\Vnetby\Schemaorg\DataTypes\DataURL|\Vnetby\Schemaorg\Types\Thing\CreativeWork\CreativeWork $value
     * @return static
     */
    function setMissionCoveragePrioritiesPolicy($value)
    {
        return $this->setProp('missionCoveragePrioritiesPolicy', $value);
    }

    /**
     * For an [[Organization]] (often but not necessarily a [[NewsMediaOrganization]]), a description of organizational ownership structure; funding and grants. In a news/media
     * setting, this is with particular reference to editorial independence. Note that the [[funder]] is also available and can be used to
     * make basic funder information machine-readable.
     * @param string|\Vnetby\Schemaorg\DataTypes\DataText|\Vnetby\Schemaorg\DataTypes\DataURL|\Vnetby\Schemaorg\Types\Thing\CreativeWork\CreativeWork|\Vnetby\Schemaorg\Types\Thing\CreativeWork\WebPage\AboutPage $value
     * @return static
     */
    function setOwnershipFundingInfo($value)
    {
        return $this->setProp('ownershipFundingInfo', $value);
    }

    /**
     * For an [[Organization]] (typically a [[NewsMediaOrganization]]), a statement about policy on use of unnamed sources and the decision process required.
     * @param string|\Vnetby\Schemaorg\DataTypes\DataURL|\Vnetby\Schemaorg\Types\Thing\CreativeWork\CreativeWork $value
     * @return static
     */
    function setUnnamedSourcesPolicy($value)
    {
        return $this->setProp('unnamedSourcesPolicy', $value);
    }

    /**
     * For an [[Organization]] (often but not necessarily a [[NewsMediaOrganization]]), a report on staffing diversity issues. In a news context this might
     * be for example ASNE or RTDNA (US) reports, or self-reported.
     * @param string|\Vnetby\Schemaorg\Types\Thing\CreativeWork\Article\Article|\Vnetby\Schemaorg\DataTypes\DataURL $value
     * @return static
     */
    function setDiversityStaffingReport($value)
    {
        return $this->setProp('diversityStaffingReport', $value);
    }

    /**
     * For a [[NewsMediaOrganization]] or other news-related [[Organization]], a statement about public engagement activities (for news media, the newsroom’s), including involving the
     * public - digitally or otherwise -- in coverage decisions, reporting and activities after publication.
     * @param string|\Vnetby\Schemaorg\DataTypes\DataURL|\Vnetby\Schemaorg\Types\Thing\CreativeWork\CreativeWork $value
     * @return static
     */
    function setActionableFeedbackPolicy($value)
    {
        return $this->setProp('actionableFeedbackPolicy', $value);
    }

    /**
     * Statement on diversity policy by an [[Organization]] e.g. a [[NewsMediaOrganization]]. For a [[NewsMediaOrganization]], a statement describing the newsroom’s diversity policy on
     * both staffing and sources, typically providing staffing data.
     * @param string|\Vnetby\Schemaorg\DataTypes\DataURL|\Vnetby\Schemaorg\Types\Thing\CreativeWork\CreativeWork $value
     * @return static
     */
    function setDiversityPolicy($value)
    {
        return $this->setProp('diversityPolicy', $value);
    }

    /**
     * For an [[Organization]] (e.g. [[NewsMediaOrganization]]), a statement describing (in news media, the newsroom’s) disclosure and correction policy for errors.
     * @param string|\Vnetby\Schemaorg\DataTypes\DataURL|\Vnetby\Schemaorg\Types\Thing\CreativeWork\CreativeWork $value
     * @return static
     */
    function setCorrectionsPolicy($value)
    {
        return $this->setProp('correctionsPolicy', $value);
    }

    /**
     * For a [[NewsMediaOrganization]] or other news-related [[Organization]], a statement explaining when authors of articles are not named in bylines.
     * @param string|\Vnetby\Schemaorg\Types\Thing\CreativeWork\CreativeWork|\Vnetby\Schemaorg\DataTypes\DataURL $value
     * @return static
     */
    function setNoBylinesPolicy($value)
    {
        return $this->setProp('noBylinesPolicy', $value);
    }

    /**
     * Statement about ethics policy, e.g. of a [[NewsMediaOrganization]] regarding journalistic and publishing practices, or of a [[Restaurant]], a page describing food
     * source policies. In the case of a [[NewsMediaOrganization]], an ethicsPolicy is typically a statement describing the personal, organizational, and corporate standards
     * of behavior expected by the organization.
     * @param string|\Vnetby\Schemaorg\Types\Thing\CreativeWork\CreativeWork|\Vnetby\Schemaorg\DataTypes\DataURL $value
     * @return static
     */
    function setEthicsPolicy($value)
    {
        return $this->setProp('ethicsPolicy', $value);
    }

    /**
     * Disclosure about verification and fact-checking processes for a [[NewsMediaOrganization]] or other fact-checking [[Organization]].
     * @param string|\Vnetby\Schemaorg\DataTypes\DataURL|\Vnetby\Schemaorg\Types\Thing\CreativeWork\CreativeWork $value
     * @return static
     */
    function setVerificationFactCheckingPolicy($value)
    {
        return $this->setProp('verificationFactCheckingPolicy', $value);
    }

    /**
     * For a [[NewsMediaOrganization]], a link to the masthead page or a page listing top editorial management.
     * @param string|\Vnetby\Schemaorg\DataTypes\DataURL|\Vnetby\Schemaorg\Types\Thing\CreativeWork\CreativeWork $value
     * @return static
     */
    function setMasthead($value)
    {
        return $this->setProp('masthead', $value);
    }

    /**
     * For a [[NewsMediaOrganization]], a statement on coverage priorities, including any public agenda or stance on issues.
     * @return string|\Vnetby\Schemaorg\DataTypes\DataURL|\Vnetby\Schemaorg\Types\Thing\CreativeWork\CreativeWork|null
     */
    function getMissionCoveragePrioritiesPolicy()
    {
        return $this->getProp('missionCoveragePrioritiesPolicy');
    }

    /**
     * For an [[Organization]] (often but not necessarily a [[NewsMediaOrganization]]), a description of organizational ownership structure; funding and grants. In a news/media
     * setting, this is with particular reference to editorial independence. Note that the [[funder]] is also available and can be used to
     * make basic funder information machine-readable.
     * @return string|\Vnetby\Schemaorg\DataTypes\DataText|\Vnetby\Schemaorg\DataTypes\DataURL|\Vnetby\Schemaorg\Types\Thing\CreativeWork\CreativeWork|\Vnetby\Schemaorg\Types\Thing\CreativeWork\WebPage\AboutPage|null
     */
    function getOwnershipFundingInfo()
    {
        return $this->getProp('ownershipFundingInfo');
    }

    /**
     * For an [[Organization]] (typically a [[NewsMediaOrganization]]), a statement about policy on use of unnamed sources and the decision process required.
     * @return string|\Vnetby\Schemaorg\DataTypes\DataURL|\Vnetby\Schemaorg\Types\Thing\CreativeWork\CreativeWork|null
     */
    function getUnnamedSourcesPolicy()
    {
        return $this->getProp('unnamedSourcesPolicy');
    }

    /**
     * For an [[Organization]] (often but not necessarily a [[NewsMediaOrganization]]), a report on staffing diversity issues. In a news context this might
     * be for example ASNE or RTDNA (US) reports, or self-reported.
     * @return string|\Vnetby\Schemaorg\Types\Thing\CreativeWork\Article\Article|\Vnetby\Schemaorg\DataTypes\DataURL|null
     */
    function getDiversityStaffingReport()
    {
        return $this->getProp('diversityStaffingReport');
    }

    /**
     * For a [[NewsMediaOrganization]] or other news-related [[Organization]], a statement about public engagement activities (for news media, the newsroom’s), including involving the
     * public - digitally or otherwise -- in coverage decisions, reporting and activities after publication.
     * @return string|\Vnetby\Schemaorg\DataTypes\DataURL|\Vnetby\Schemaorg\Types\Thing\CreativeWork\CreativeWork|null
     */
    function getActionableFeedbackPolicy()
    {
        return $this->getProp('actionableFeedbackPolicy');
    }

    /**
     * Statement on diversity policy by an [[Organization]] e.g. a [[NewsMediaOrganization]]. For a [[NewsMediaOrganization]], a statement describing the newsroom’s diversity policy on
     * both staffing and sources, typically providing staffing data.
     * @return string|\Vnetby\Schemaorg\DataTypes\DataURL|\Vnetby\Schemaorg\Types\Thing\CreativeWork\CreativeWork|null
     */
    function getDiversityPolicy()
    {
        return $this->getProp('diversityPolicy');
    }

    /**
     * For an [[Organization]] (e.g. [[NewsMediaOrganization]]), a statement describing (in news media, the newsroom’s) disclosure and correction policy for errors.
     * @return string|\Vnetby\Schemaorg\DataTypes\DataURL|\Vnetby\Schemaorg\Types\Thing\CreativeWork\CreativeWork|null
     */
    function getCorrectionsPolicy()
    {
        return $this->getProp('correctionsPolicy');
    }

    /**
     * For a [[NewsMediaOrganization]] or other news-related [[Organization]], a statement explaining when authors of articles are not named in bylines.
     * @return string|\Vnetby\Schemaorg\Types\Thing\CreativeWork\CreativeWork|\Vnetby\Schemaorg\DataTypes\DataURL|null
     */
    function getNoBylinesPolicy()
    {
        return $this->getProp('noBylinesPolicy');
    }

    /**
     * Statement about ethics policy, e.g. of a [[NewsMediaOrganization]] regarding journalistic and publishing practices, or of a [[Restaurant]], a page describing food
     * source policies. In the case of a [[NewsMediaOrganization]], an ethicsPolicy is typically a statement describing the personal, organizational, and corporate standards
     * of behavior expected by the organization.
     * @return string|\Vnetby\Schemaorg\Types\Thing\CreativeWork\CreativeWork|\Vnetby\Schemaorg\DataTypes\DataURL|null
     */
    function getEthicsPolicy()
    {
        return $this->getProp('ethicsPolicy');
    }

    /**
     * Disclosure about verification and fact-checking processes for a [[NewsMediaOrganization]] or other fact-checking [[Organization]].
     * @return string|\Vnetby\Schemaorg\DataTypes\DataURL|\Vnetby\Schemaorg\Types\Thing\CreativeWork\CreativeWork|null
     */
    function getVerificationFactCheckingPolicy()
    {
        return $this->getProp('verificationFactCheckingPolicy');
    }

    /**
     * For a [[NewsMediaOrganization]], a link to the masthead page or a page listing top editorial management.
     * @return string|\Vnetby\Schemaorg\DataTypes\DataURL|\Vnetby\Schemaorg\Types\Thing\CreativeWork\CreativeWork|null
     */
    function getMasthead()
    {
        return $this->getProp('masthead');
    }
}
