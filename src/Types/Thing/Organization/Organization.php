<?php

/**
 * @see https://schema.org/Organization
 * An organization such as a school, NGO, corporation, club, etc.
 */

namespace Vnetby\Schemaorg\Types\Thing\Organization;

class Organization extends \Vnetby\Schemaorg\Types\Thing\Thing
{
    const TYPE = 'Organization';

    /**
     * For a [[NewsMediaOrganization]] or other news-related [[Organization]], a statement about public engagement activities (for news media, the newsroom’s), including involving the
     * public - digitally or otherwise -- in coverage decisions, reporting and activities after publication.
     * @var \Vnetby\Schemaorg\DataTypes\DataURL|\Vnetby\Schemaorg\Types\Thing\CreativeWork\CreativeWork
     */
    protected $prop_actionableFeedbackPolicy;

    /**
     * The date that this organization was dissolved.
     * @var \Vnetby\Schemaorg\DataTypes\DataDate
     */
    protected $prop_dissolutionDate;

    /**
     * A [[Grant]] that directly or indirectly provide funding or sponsorship for this item. See also [[ownershipFundingInfo]].
     * @var \Vnetby\Schemaorg\Types\Thing\Intangible\Grant\Grant
     */
    protected $prop_funding;

    /**
     * An Organization (or ProgramMembership) to which this Person or Organization belongs.
     * @var \Vnetby\Schemaorg\Types\Thing\Organization\Organization|\Vnetby\Schemaorg\Types\Thing\Intangible\ProgramMembership
     */
    protected $prop_memberOf;

    /**
     * Upcoming or past event associated with this place, organization, or action.
     * @var \Vnetby\Schemaorg\Types\Thing\Event\Event
     */
    protected $prop_event;

    /**
     * The date that this organization was founded.
     * @var \Vnetby\Schemaorg\DataTypes\DataDate
     */
    protected $prop_foundingDate;

    /**
     * The place where the Organization was founded.
     * @var \Vnetby\Schemaorg\Types\Thing\Place\Place
     */
    protected $prop_foundingLocation;

    /**
     * A person who founded this organization.
     * @var \Vnetby\Schemaorg\Types\Thing\Person\Person
     */
    protected $prop_founder;

    /**
     * A pointer to products or services offered by the organization or person.
     * @var \Vnetby\Schemaorg\Types\Thing\Intangible\Offer\Offer
     */
    protected $prop_makesOffer;

    /**
     * Specifies a MerchantReturnPolicy that may be applicable.
     * @var \Vnetby\Schemaorg\Types\Thing\Intangible\MerchantReturnPolicy
     */
    protected $prop_hasMerchantReturnPolicy;

    /**
     * The telephone number.
     * @var \Vnetby\Schemaorg\DataTypes\DataText
     */
    protected $prop_telephone;

    /**
     * A person or organization that supports a thing through a pledge, promise, or financial contribution. E.g. a sponsor of a Medical
     * Study or a corporate sponsor of an event.
     * @var \Vnetby\Schemaorg\Types\Thing\Person\Person|\Vnetby\Schemaorg\Types\Thing\Organization\Organization
     */
    protected $prop_sponsor;

    /**
     * For an [[Organization]] (often but not necessarily a [[NewsMediaOrganization]]), a report on staffing diversity issues. In a news context this might
     * be for example ASNE or RTDNA (US) reports, or self-reported.
     * @var \Vnetby\Schemaorg\Types\Thing\CreativeWork\Article\Article|\Vnetby\Schemaorg\DataTypes\DataURL
     */
    protected $prop_diversityStaffingReport;

    /**
     * The number of employees in an organization, e.g. business.
     * @var \Vnetby\Schemaorg\Types\Thing\Intangible\StructuredValue\QuantitativeValue\QuantitativeValue
     */
    protected $prop_numberOfEmployees;

    /**
     * Products owned by the organization or person.
     * @var \Vnetby\Schemaorg\Types\Thing\Intangible\StructuredValue\OwnershipInfo|\Vnetby\Schemaorg\Types\Thing\Product\Product
     */
    protected $prop_owns;

    /**
     * Indicates an OfferCatalog listing for this Organization, Person, or Service.
     * @var \Vnetby\Schemaorg\Types\Thing\Intangible\ItemList\OfferCatalog
     */
    protected $prop_hasOfferCatalog;

    /**
     * Statement on diversity policy by an [[Organization]] e.g. a [[NewsMediaOrganization]]. For a [[NewsMediaOrganization]], a statement describing the newsroom’s diversity policy on
     * both staffing and sources, typically providing staffing data.
     * @var \Vnetby\Schemaorg\DataTypes\DataURL|\Vnetby\Schemaorg\Types\Thing\CreativeWork\CreativeWork
     */
    protected $prop_diversityPolicy;

    /**
     * nonprofitStatus indicates the legal status of a non-profit organization in its primary place of business.
     * @var \Vnetby\Schemaorg\Types\Thing\Intangible\Enumeration\NonprofitType\NonprofitType
     */
    protected $prop_nonprofitStatus;

    /**
     * A member of an Organization or a ProgramMembership. Organizations can be members of organizations; ProgramMembership is typically for individuals.
     * @var \Vnetby\Schemaorg\Types\Thing\Person\Person|\Vnetby\Schemaorg\Types\Thing\Organization\Organization
     */
    protected $prop_member;

    /**
     * The official name of the organization, e.g. the registered company name.
     * @var \Vnetby\Schemaorg\DataTypes\DataText
     */
    protected $prop_legalName;

    /**
     * The [Global Location Number](http://www.gs1.org/gln) (GLN, sometimes also referred to as International Location Number or ILN) of the respective organization, person, or
     * place. The GLN is a 13-digit number used to identify parties and physical locations.
     * @var \Vnetby\Schemaorg\DataTypes\DataText
     */
    protected $prop_globalLocationNumber;

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
     * The North American Industry Classification System (NAICS) code for a particular organization or business person.
     * @var \Vnetby\Schemaorg\DataTypes\DataText
     */
    protected $prop_naics;

    /**
     * Email address.
     * @var \Vnetby\Schemaorg\DataTypes\DataText
     */
    protected $prop_email;

    /**
     * For an [[Organization]] (typically a [[NewsMediaOrganization]]), a statement about policy on use of unnamed sources and the decision process required.
     * @var \Vnetby\Schemaorg\DataTypes\DataURL|\Vnetby\Schemaorg\Types\Thing\CreativeWork\CreativeWork
     */
    protected $prop_unnamedSourcesPolicy;

    /**
     * A relationship between an organization and a department of that organization, also described as an organization (allowing different urls, logos, opening
     * hours). For example: a store with a pharmacy, or a bakery with a cafe.
     * @var \Vnetby\Schemaorg\Types\Thing\Organization\Organization
     */
    protected $prop_department;

    /**
     * The Value-added Tax ID of the organization or person.
     * @var \Vnetby\Schemaorg\DataTypes\DataText
     */
    protected $prop_vatID;

    /**
     * The larger organization that this organization is a [[subOrganization]] of, if any.
     * @var \Vnetby\Schemaorg\Types\Thing\Organization\Organization
     */
    protected $prop_parentOrganization;

    /**
     * The Tax / Fiscal ID of the organization or person, e.g. the TIN in the US or the CIF/NIF in Spain.
     * @var \Vnetby\Schemaorg\DataTypes\DataText
     */
    protected $prop_taxID;

    /**
     * The fax number.
     * @var \Vnetby\Schemaorg\DataTypes\DataText
     */
    protected $prop_faxNumber;

    /**
     * Of a [[Person]], and less typically of an [[Organization]], to indicate a topic that is known about - suggesting possible expertise
     * but not implying it. We do not distinguish skill levels here, or relate this to educational content, events, objectives or [[JobPosting]]
     * descriptions.
     * @var \Vnetby\Schemaorg\DataTypes\DataURL|\Vnetby\Schemaorg\Types\Thing\Thing|\Vnetby\Schemaorg\DataTypes\DataText
     */
    protected $prop_knowsAbout;

    /**
     * The brand(s) associated with a product or service, or the brand(s) maintained by an organization or business person.
     * @var \Vnetby\Schemaorg\Types\Thing\Intangible\Brand|\Vnetby\Schemaorg\Types\Thing\Organization\Organization
     */
    protected $prop_brand;

    /**
     * The overall rating, based on a collection of reviews or ratings, of the item.
     * @var \Vnetby\Schemaorg\Types\Thing\Intangible\Rating\AggregateRating\AggregateRating
     */
    protected $prop_aggregateRating;

    /**
     * The number of interactions for the CreativeWork using the WebSite or SoftwareApplication. The most specific child type of InteractionCounter should be
     * used.
     * @var \Vnetby\Schemaorg\Types\Thing\Intangible\StructuredValue\InteractionCounter
     */
    protected $prop_interactionStatistic;

    /**
     * For an [[Organization]] (often but not necessarily a [[NewsMediaOrganization]]), a description of organizational ownership structure; funding and grants. In a news/media
     * setting, this is with particular reference to editorial independence. Note that the [[funder]] is also available and can be used to
     * make basic funder information machine-readable.
     * @var \Vnetby\Schemaorg\DataTypes\DataURL|\Vnetby\Schemaorg\Types\Thing\CreativeWork\CreativeWork|\Vnetby\Schemaorg\DataTypes\DataText|\Vnetby\Schemaorg\Types\Thing\CreativeWork\WebPage\AboutPage
     */
    protected $prop_ownershipFundingInfo;

    /**
     * A person or organization that supports (sponsors) something through some kind of financial contribution.
     * @var \Vnetby\Schemaorg\Types\Thing\Person\Person|\Vnetby\Schemaorg\Types\Thing\Organization\Organization
     */
    protected $prop_funder;

    /**
     * An organization identifier that uniquely identifies a legal entity as defined in ISO 17442.
     * @var \Vnetby\Schemaorg\DataTypes\DataText
     */
    protected $prop_leiCode;

    /**
     * Keywords or tags used to describe some item. Multiple textual entries in a keywords list are typically delimited by commas, or
     * by repeating the property.
     * @var \Vnetby\Schemaorg\DataTypes\DataURL|\Vnetby\Schemaorg\DataTypes\DataText|\Vnetby\Schemaorg\Types\Thing\Intangible\DefinedTerm\DefinedTerm
     */
    protected $prop_keywords;

    /**
     * The location of, for example, where an event is happening, where an organization is located, or where an action takes place.
     * @var \Vnetby\Schemaorg\Types\Thing\Intangible\VirtualLocation|\Vnetby\Schemaorg\DataTypes\DataText|\Vnetby\Schemaorg\Types\Thing\Intangible\StructuredValue\ContactPoint\PostalAddress|\Vnetby\Schemaorg\Types\Thing\Place\Place
     */
    protected $prop_location;

    /**
     * A review of the item.
     * @var \Vnetby\Schemaorg\Types\Thing\CreativeWork\Review\Review
     */
    protected $prop_review;

    /**
     * The number of completed interactions for this entity, in a particular role (the 'agent'), in a particular action (indicated in the
     * statistic), and in a particular context (i.e. interactionService).
     * @var \Vnetby\Schemaorg\Types\Thing\Intangible\StructuredValue\InteractionCounter
     */
    protected $prop_agentInteractionStatistic;

    /**
     * A relationship between two organizations where the first includes the second, e.g., as a subsidiary. See also: the more specific 'department'
     * property.
     * @var \Vnetby\Schemaorg\Types\Thing\Organization\Organization
     */
    protected $prop_subOrganization;

    /**
     * A pointer to products or services sought by the organization or person (demand).
     * @var \Vnetby\Schemaorg\Types\Thing\Intangible\Demand
     */
    protected $prop_seeks;

    /**
     * A credential awarded to the Person or Organization.
     * @var \Vnetby\Schemaorg\Types\Thing\CreativeWork\EducationalOccupationalCredential
     */
    protected $prop_hasCredential;

    /**
     * Physical address of the item.
     * @var \Vnetby\Schemaorg\Types\Thing\Intangible\StructuredValue\ContactPoint\PostalAddress|\Vnetby\Schemaorg\DataTypes\DataText
     */
    protected $prop_address;

    /**
     * A contact point for a person or organization.
     * @var \Vnetby\Schemaorg\Types\Thing\Intangible\StructuredValue\ContactPoint\ContactPoint
     */
    protected $prop_contactPoint;

    /**
     * Of a [[Person]], and less typically of an [[Organization]], to indicate a known language. We do not distinguish skill levels or
     * reading/writing/speaking/signing here. Use language codes from the [IETF BCP 47 standard](http://tools.ietf.org/html/bcp47).
     * @var \Vnetby\Schemaorg\DataTypes\DataText|\Vnetby\Schemaorg\Types\Thing\Intangible\Language
     */
    protected $prop_knowsLanguage;

    /**
     * Alumni of an organization.
     * @var \Vnetby\Schemaorg\Types\Thing\Person\Person
     */
    protected $prop_alumni;

    /**
     * Points-of-Sales operated by the organization or person.
     * @var \Vnetby\Schemaorg\Types\Thing\Place\Place
     */
    protected $prop_hasPOS;

    /**
     * The geographic area where a service or offered item is provided.
     * @var \Vnetby\Schemaorg\Types\Thing\Intangible\StructuredValue\GeoShape\GeoShape|\Vnetby\Schemaorg\Types\Thing\Place\Place|\Vnetby\Schemaorg\Types\Thing\Place\AdministrativeArea\AdministrativeArea|\Vnetby\Schemaorg\DataTypes\DataText
     */
    protected $prop_areaServed;

    /**
     * The International Standard of Industrial Classification of All Economic Activities (ISIC), Revision 4 code for a particular organization, business person, or
     * place.
     * @var \Vnetby\Schemaorg\DataTypes\DataText
     */
    protected $prop_isicV4;

    /**
     * Someone working for this organization.
     * @var \Vnetby\Schemaorg\Types\Thing\Person\Person
     */
    protected $prop_employee;

    /**
     * The Dun & Bradstreet DUNS number for identifying an organization or business person.
     * @var \Vnetby\Schemaorg\DataTypes\DataText
     */
    protected $prop_duns;

    /**
     * An award won by or for this item.
     * @var \Vnetby\Schemaorg\DataTypes\DataText
     */
    protected $prop_award;

    /**
     * The publishingPrinciples property indicates (typically via [[URL]]) a document describing the editorial principles of an [[Organization]] (or individual, e.g. a [[Person]]
     * writing a blog) that relate to their activities as a publisher, e.g. ethics or diversity policies. When applied to a [[CreativeWork]]
     * (e.g. [[NewsArticle]]) the principles are those of the party primarily responsible for the creation of the [[CreativeWork]]. While such policies are
     * most typically expressed in natural language, sometimes related information (e.g. indicating a [[funder]]) can be expressed using schema.org terminology. 
     * @var \Vnetby\Schemaorg\Types\Thing\CreativeWork\CreativeWork|\Vnetby\Schemaorg\DataTypes\DataURL
     */
    protected $prop_publishingPrinciples;

    /**
     * A slogan or motto associated with the item.
     * @var \Vnetby\Schemaorg\DataTypes\DataText
     */
    protected $prop_slogan;

    /**
     * An organization identifier as defined in ISO 6523(-1). Note that many existing organization identifiers such as [leiCode](https://schema.org/leiCode), [duns](https://schema.org/duns) and [vatID](https://schema.org/vatID) can
     * be expressed as an ISO 6523 identifier by setting the ICD part of the ISO 6523 identifier accordingly. 
     * @var \Vnetby\Schemaorg\DataTypes\DataText
     */
    protected $prop_iso6523Code;

    /**
     * An associated logo.
     * @var \Vnetby\Schemaorg\Types\Thing\CreativeWork\MediaObject\ImageObject\ImageObject|\Vnetby\Schemaorg\DataTypes\DataURL
     */
    protected $prop_logo;

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
     * The date that this organization was dissolved.
     * @param \Vnetby\Schemaorg\DataTypes\DataDate $value
     * @return static
     */
    function setDissolutionDate($value)
    {
        return $this->setProp('dissolutionDate', $value);
    }

    /**
     * A [[Grant]] that directly or indirectly provide funding or sponsorship for this item. See also [[ownershipFundingInfo]].
     * @param \Vnetby\Schemaorg\Types\Thing\Intangible\Grant\Grant $value
     * @return static
     */
    function setFunding($value)
    {
        return $this->setProp('funding', $value);
    }

    /**
     * An Organization (or ProgramMembership) to which this Person or Organization belongs.
     * @param \Vnetby\Schemaorg\Types\Thing\Organization\Organization|\Vnetby\Schemaorg\Types\Thing\Intangible\ProgramMembership $value
     * @return static
     */
    function setMemberOf($value)
    {
        return $this->setProp('memberOf', $value);
    }

    /**
     * Upcoming or past event associated with this place, organization, or action.
     * @param \Vnetby\Schemaorg\Types\Thing\Event\Event $value
     * @return static
     */
    function setEvent($value)
    {
        return $this->setProp('event', $value);
    }

    /**
     * The date that this organization was founded.
     * @param \Vnetby\Schemaorg\DataTypes\DataDate $value
     * @return static
     */
    function setFoundingDate($value)
    {
        return $this->setProp('foundingDate', $value);
    }

    /**
     * The place where the Organization was founded.
     * @param \Vnetby\Schemaorg\Types\Thing\Place\Place $value
     * @return static
     */
    function setFoundingLocation($value)
    {
        return $this->setProp('foundingLocation', $value);
    }

    /**
     * A person who founded this organization.
     * @param \Vnetby\Schemaorg\Types\Thing\Person\Person $value
     * @return static
     */
    function setFounder($value)
    {
        return $this->setProp('founder', $value);
    }

    /**
     * A pointer to products or services offered by the organization or person.
     * @param \Vnetby\Schemaorg\Types\Thing\Intangible\Offer\Offer $value
     * @return static
     */
    function setMakesOffer($value)
    {
        return $this->setProp('makesOffer', $value);
    }

    /**
     * Specifies a MerchantReturnPolicy that may be applicable.
     * @param \Vnetby\Schemaorg\Types\Thing\Intangible\MerchantReturnPolicy $value
     * @return static
     */
    function setHasMerchantReturnPolicy($value)
    {
        return $this->setProp('hasMerchantReturnPolicy', $value);
    }

    /**
     * The telephone number.
     * @param \Vnetby\Schemaorg\DataTypes\DataText $value
     * @return static
     */
    function setTelephone($value)
    {
        return $this->setProp('telephone', $value);
    }

    /**
     * A person or organization that supports a thing through a pledge, promise, or financial contribution. E.g. a sponsor of a Medical
     * Study or a corporate sponsor of an event.
     * @param \Vnetby\Schemaorg\Types\Thing\Person\Person|\Vnetby\Schemaorg\Types\Thing\Organization\Organization $value
     * @return static
     */
    function setSponsor($value)
    {
        return $this->setProp('sponsor', $value);
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
     * The number of employees in an organization, e.g. business.
     * @param \Vnetby\Schemaorg\Types\Thing\Intangible\StructuredValue\QuantitativeValue\QuantitativeValue $value
     * @return static
     */
    function setNumberOfEmployees($value)
    {
        return $this->setProp('numberOfEmployees', $value);
    }

    /**
     * Products owned by the organization or person.
     * @param \Vnetby\Schemaorg\Types\Thing\Intangible\StructuredValue\OwnershipInfo|\Vnetby\Schemaorg\Types\Thing\Product\Product $value
     * @return static
     */
    function setOwns($value)
    {
        return $this->setProp('owns', $value);
    }

    /**
     * Indicates an OfferCatalog listing for this Organization, Person, or Service.
     * @param \Vnetby\Schemaorg\Types\Thing\Intangible\ItemList\OfferCatalog $value
     * @return static
     */
    function setHasOfferCatalog($value)
    {
        return $this->setProp('hasOfferCatalog', $value);
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
     * nonprofitStatus indicates the legal status of a non-profit organization in its primary place of business.
     * @param \Vnetby\Schemaorg\Types\Thing\Intangible\Enumeration\NonprofitType\NonprofitType $value
     * @return static
     */
    function setNonprofitStatus($value)
    {
        return $this->setProp('nonprofitStatus', $value);
    }

    /**
     * A member of an Organization or a ProgramMembership. Organizations can be members of organizations; ProgramMembership is typically for individuals.
     * @param \Vnetby\Schemaorg\Types\Thing\Person\Person|\Vnetby\Schemaorg\Types\Thing\Organization\Organization $value
     * @return static
     */
    function setMember($value)
    {
        return $this->setProp('member', $value);
    }

    /**
     * The official name of the organization, e.g. the registered company name.
     * @param \Vnetby\Schemaorg\DataTypes\DataText $value
     * @return static
     */
    function setLegalName($value)
    {
        return $this->setProp('legalName', $value);
    }

    /**
     * The [Global Location Number](http://www.gs1.org/gln) (GLN, sometimes also referred to as International Location Number or ILN) of the respective organization, person, or
     * place. The GLN is a 13-digit number used to identify parties and physical locations.
     * @param \Vnetby\Schemaorg\DataTypes\DataText $value
     * @return static
     */
    function setGlobalLocationNumber($value)
    {
        return $this->setProp('globalLocationNumber', $value);
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
     * The North American Industry Classification System (NAICS) code for a particular organization or business person.
     * @param \Vnetby\Schemaorg\DataTypes\DataText $value
     * @return static
     */
    function setNaics($value)
    {
        return $this->setProp('naics', $value);
    }

    /**
     * Email address.
     * @param \Vnetby\Schemaorg\DataTypes\DataText $value
     * @return static
     */
    function setEmail($value)
    {
        return $this->setProp('email', $value);
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
     * A relationship between an organization and a department of that organization, also described as an organization (allowing different urls, logos, opening
     * hours). For example: a store with a pharmacy, or a bakery with a cafe.
     * @param \Vnetby\Schemaorg\Types\Thing\Organization\Organization $value
     * @return static
     */
    function setDepartment($value)
    {
        return $this->setProp('department', $value);
    }

    /**
     * The Value-added Tax ID of the organization or person.
     * @param \Vnetby\Schemaorg\DataTypes\DataText $value
     * @return static
     */
    function setVatID($value)
    {
        return $this->setProp('vatID', $value);
    }

    /**
     * The larger organization that this organization is a [[subOrganization]] of, if any.
     * @param \Vnetby\Schemaorg\Types\Thing\Organization\Organization $value
     * @return static
     */
    function setParentOrganization($value)
    {
        return $this->setProp('parentOrganization', $value);
    }

    /**
     * The Tax / Fiscal ID of the organization or person, e.g. the TIN in the US or the CIF/NIF in Spain.
     * @param \Vnetby\Schemaorg\DataTypes\DataText $value
     * @return static
     */
    function setTaxID($value)
    {
        return $this->setProp('taxID', $value);
    }

    /**
     * The fax number.
     * @param \Vnetby\Schemaorg\DataTypes\DataText $value
     * @return static
     */
    function setFaxNumber($value)
    {
        return $this->setProp('faxNumber', $value);
    }

    /**
     * Of a [[Person]], and less typically of an [[Organization]], to indicate a topic that is known about - suggesting possible expertise
     * but not implying it. We do not distinguish skill levels here, or relate this to educational content, events, objectives or [[JobPosting]]
     * descriptions.
     * @param \Vnetby\Schemaorg\DataTypes\DataURL|\Vnetby\Schemaorg\Types\Thing\Thing|\Vnetby\Schemaorg\DataTypes\DataText $value
     * @return static
     */
    function setKnowsAbout($value)
    {
        return $this->setProp('knowsAbout', $value);
    }

    /**
     * The brand(s) associated with a product or service, or the brand(s) maintained by an organization or business person.
     * @param \Vnetby\Schemaorg\Types\Thing\Intangible\Brand|\Vnetby\Schemaorg\Types\Thing\Organization\Organization $value
     * @return static
     */
    function setBrand($value)
    {
        return $this->setProp('brand', $value);
    }

    /**
     * The overall rating, based on a collection of reviews or ratings, of the item.
     * @param \Vnetby\Schemaorg\Types\Thing\Intangible\Rating\AggregateRating\AggregateRating $value
     * @return static
     */
    function setAggregateRating($value)
    {
        return $this->setProp('aggregateRating', $value);
    }

    /**
     * The number of interactions for the CreativeWork using the WebSite or SoftwareApplication. The most specific child type of InteractionCounter should be
     * used.
     * @param \Vnetby\Schemaorg\Types\Thing\Intangible\StructuredValue\InteractionCounter $value
     * @return static
     */
    function setInteractionStatistic($value)
    {
        return $this->setProp('interactionStatistic', $value);
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
     * A person or organization that supports (sponsors) something through some kind of financial contribution.
     * @param \Vnetby\Schemaorg\Types\Thing\Person\Person|\Vnetby\Schemaorg\Types\Thing\Organization\Organization $value
     * @return static
     */
    function setFunder($value)
    {
        return $this->setProp('funder', $value);
    }

    /**
     * An organization identifier that uniquely identifies a legal entity as defined in ISO 17442.
     * @param \Vnetby\Schemaorg\DataTypes\DataText $value
     * @return static
     */
    function setLeiCode($value)
    {
        return $this->setProp('leiCode', $value);
    }

    /**
     * Keywords or tags used to describe some item. Multiple textual entries in a keywords list are typically delimited by commas, or
     * by repeating the property.
     * @param \Vnetby\Schemaorg\DataTypes\DataURL|\Vnetby\Schemaorg\DataTypes\DataText|\Vnetby\Schemaorg\Types\Thing\Intangible\DefinedTerm\DefinedTerm $value
     * @return static
     */
    function setKeywords($value)
    {
        return $this->setProp('keywords', $value);
    }

    /**
     * The location of, for example, where an event is happening, where an organization is located, or where an action takes place.
     * @param \Vnetby\Schemaorg\Types\Thing\Intangible\VirtualLocation|\Vnetby\Schemaorg\DataTypes\DataText|\Vnetby\Schemaorg\Types\Thing\Intangible\StructuredValue\ContactPoint\PostalAddress|\Vnetby\Schemaorg\Types\Thing\Place\Place $value
     * @return static
     */
    function setLocation($value)
    {
        return $this->setProp('location', $value);
    }

    /**
     * A review of the item.
     * @param \Vnetby\Schemaorg\Types\Thing\CreativeWork\Review\Review $value
     * @return static
     */
    function setReview($value)
    {
        return $this->setProp('review', $value);
    }

    /**
     * The number of completed interactions for this entity, in a particular role (the 'agent'), in a particular action (indicated in the
     * statistic), and in a particular context (i.e. interactionService).
     * @param \Vnetby\Schemaorg\Types\Thing\Intangible\StructuredValue\InteractionCounter $value
     * @return static
     */
    function setAgentInteractionStatistic($value)
    {
        return $this->setProp('agentInteractionStatistic', $value);
    }

    /**
     * A relationship between two organizations where the first includes the second, e.g., as a subsidiary. See also: the more specific 'department'
     * property.
     * @param \Vnetby\Schemaorg\Types\Thing\Organization\Organization $value
     * @return static
     */
    function setSubOrganization($value)
    {
        return $this->setProp('subOrganization', $value);
    }

    /**
     * A pointer to products or services sought by the organization or person (demand).
     * @param \Vnetby\Schemaorg\Types\Thing\Intangible\Demand $value
     * @return static
     */
    function setSeeks($value)
    {
        return $this->setProp('seeks', $value);
    }

    /**
     * A credential awarded to the Person or Organization.
     * @param \Vnetby\Schemaorg\Types\Thing\CreativeWork\EducationalOccupationalCredential $value
     * @return static
     */
    function setHasCredential($value)
    {
        return $this->setProp('hasCredential', $value);
    }

    /**
     * Physical address of the item.
     * @param \Vnetby\Schemaorg\Types\Thing\Intangible\StructuredValue\ContactPoint\PostalAddress|\Vnetby\Schemaorg\DataTypes\DataText $value
     * @return static
     */
    function setAddress($value)
    {
        return $this->setProp('address', $value);
    }

    /**
     * A contact point for a person or organization.
     * @param \Vnetby\Schemaorg\Types\Thing\Intangible\StructuredValue\ContactPoint\ContactPoint $value
     * @return static
     */
    function setContactPoint($value)
    {
        return $this->setProp('contactPoint', $value);
    }

    /**
     * Of a [[Person]], and less typically of an [[Organization]], to indicate a known language. We do not distinguish skill levels or
     * reading/writing/speaking/signing here. Use language codes from the [IETF BCP 47 standard](http://tools.ietf.org/html/bcp47).
     * @param \Vnetby\Schemaorg\DataTypes\DataText|\Vnetby\Schemaorg\Types\Thing\Intangible\Language $value
     * @return static
     */
    function setKnowsLanguage($value)
    {
        return $this->setProp('knowsLanguage', $value);
    }

    /**
     * Alumni of an organization.
     * @param \Vnetby\Schemaorg\Types\Thing\Person\Person $value
     * @return static
     */
    function setAlumni($value)
    {
        return $this->setProp('alumni', $value);
    }

    /**
     * Points-of-Sales operated by the organization or person.
     * @param \Vnetby\Schemaorg\Types\Thing\Place\Place $value
     * @return static
     */
    function setHasPOS($value)
    {
        return $this->setProp('hasPOS', $value);
    }

    /**
     * The geographic area where a service or offered item is provided.
     * @param \Vnetby\Schemaorg\Types\Thing\Intangible\StructuredValue\GeoShape\GeoShape|\Vnetby\Schemaorg\Types\Thing\Place\Place|\Vnetby\Schemaorg\Types\Thing\Place\AdministrativeArea\AdministrativeArea|\Vnetby\Schemaorg\DataTypes\DataText $value
     * @return static
     */
    function setAreaServed($value)
    {
        return $this->setProp('areaServed', $value);
    }

    /**
     * The International Standard of Industrial Classification of All Economic Activities (ISIC), Revision 4 code for a particular organization, business person, or
     * place.
     * @param \Vnetby\Schemaorg\DataTypes\DataText $value
     * @return static
     */
    function setIsicV4($value)
    {
        return $this->setProp('isicV4', $value);
    }

    /**
     * Someone working for this organization.
     * @param \Vnetby\Schemaorg\Types\Thing\Person\Person $value
     * @return static
     */
    function setEmployee($value)
    {
        return $this->setProp('employee', $value);
    }

    /**
     * The Dun & Bradstreet DUNS number for identifying an organization or business person.
     * @param \Vnetby\Schemaorg\DataTypes\DataText $value
     * @return static
     */
    function setDuns($value)
    {
        return $this->setProp('duns', $value);
    }

    /**
     * An award won by or for this item.
     * @param \Vnetby\Schemaorg\DataTypes\DataText $value
     * @return static
     */
    function setAward($value)
    {
        return $this->setProp('award', $value);
    }

    /**
     * The publishingPrinciples property indicates (typically via [[URL]]) a document describing the editorial principles of an [[Organization]] (or individual, e.g. a [[Person]]
     * writing a blog) that relate to their activities as a publisher, e.g. ethics or diversity policies. When applied to a [[CreativeWork]]
     * (e.g. [[NewsArticle]]) the principles are those of the party primarily responsible for the creation of the [[CreativeWork]]. While such policies are
     * most typically expressed in natural language, sometimes related information (e.g. indicating a [[funder]]) can be expressed using schema.org terminology. 
     * @param \Vnetby\Schemaorg\Types\Thing\CreativeWork\CreativeWork|\Vnetby\Schemaorg\DataTypes\DataURL $value
     * @return static
     */
    function setPublishingPrinciples($value)
    {
        return $this->setProp('publishingPrinciples', $value);
    }

    /**
     * A slogan or motto associated with the item.
     * @param \Vnetby\Schemaorg\DataTypes\DataText $value
     * @return static
     */
    function setSlogan($value)
    {
        return $this->setProp('slogan', $value);
    }

    /**
     * An organization identifier as defined in ISO 6523(-1). Note that many existing organization identifiers such as [leiCode](https://schema.org/leiCode), [duns](https://schema.org/duns) and [vatID](https://schema.org/vatID) can
     * be expressed as an ISO 6523 identifier by setting the ICD part of the ISO 6523 identifier accordingly. 
     * @param \Vnetby\Schemaorg\DataTypes\DataText $value
     * @return static
     */
    function setIso6523Code($value)
    {
        return $this->setProp('iso6523Code', $value);
    }

    /**
     * An associated logo.
     * @param \Vnetby\Schemaorg\Types\Thing\CreativeWork\MediaObject\ImageObject\ImageObject|\Vnetby\Schemaorg\DataTypes\DataURL $value
     * @return static
     */
    function setLogo($value)
    {
        return $this->setProp('logo', $value);
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
     * The date that this organization was dissolved.
     * @return \Vnetby\Schemaorg\DataTypes\DataDate|null
     */
    function getDissolutionDate()
    {
        return $this->getProp('dissolutionDate');
    }

    /**
     * A [[Grant]] that directly or indirectly provide funding or sponsorship for this item. See also [[ownershipFundingInfo]].
     * @return \Vnetby\Schemaorg\Types\Thing\Intangible\Grant\Grant|null
     */
    function getFunding()
    {
        return $this->getProp('funding');
    }

    /**
     * An Organization (or ProgramMembership) to which this Person or Organization belongs.
     * @return \Vnetby\Schemaorg\Types\Thing\Organization\Organization|\Vnetby\Schemaorg\Types\Thing\Intangible\ProgramMembership|null
     */
    function getMemberOf()
    {
        return $this->getProp('memberOf');
    }

    /**
     * Upcoming or past event associated with this place, organization, or action.
     * @return \Vnetby\Schemaorg\Types\Thing\Event\Event|null
     */
    function getEvent()
    {
        return $this->getProp('event');
    }

    /**
     * The date that this organization was founded.
     * @return \Vnetby\Schemaorg\DataTypes\DataDate|null
     */
    function getFoundingDate()
    {
        return $this->getProp('foundingDate');
    }

    /**
     * The place where the Organization was founded.
     * @return \Vnetby\Schemaorg\Types\Thing\Place\Place|null
     */
    function getFoundingLocation()
    {
        return $this->getProp('foundingLocation');
    }

    /**
     * A person who founded this organization.
     * @return \Vnetby\Schemaorg\Types\Thing\Person\Person|null
     */
    function getFounder()
    {
        return $this->getProp('founder');
    }

    /**
     * A pointer to products or services offered by the organization or person.
     * @return \Vnetby\Schemaorg\Types\Thing\Intangible\Offer\Offer|null
     */
    function getMakesOffer()
    {
        return $this->getProp('makesOffer');
    }

    /**
     * Specifies a MerchantReturnPolicy that may be applicable.
     * @return \Vnetby\Schemaorg\Types\Thing\Intangible\MerchantReturnPolicy|null
     */
    function getHasMerchantReturnPolicy()
    {
        return $this->getProp('hasMerchantReturnPolicy');
    }

    /**
     * The telephone number.
     * @return \Vnetby\Schemaorg\DataTypes\DataText|null
     */
    function getTelephone()
    {
        return $this->getProp('telephone');
    }

    /**
     * A person or organization that supports a thing through a pledge, promise, or financial contribution. E.g. a sponsor of a Medical
     * Study or a corporate sponsor of an event.
     * @return \Vnetby\Schemaorg\Types\Thing\Person\Person|\Vnetby\Schemaorg\Types\Thing\Organization\Organization|null
     */
    function getSponsor()
    {
        return $this->getProp('sponsor');
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
     * The number of employees in an organization, e.g. business.
     * @return \Vnetby\Schemaorg\Types\Thing\Intangible\StructuredValue\QuantitativeValue\QuantitativeValue|null
     */
    function getNumberOfEmployees()
    {
        return $this->getProp('numberOfEmployees');
    }

    /**
     * Products owned by the organization or person.
     * @return \Vnetby\Schemaorg\Types\Thing\Intangible\StructuredValue\OwnershipInfo|\Vnetby\Schemaorg\Types\Thing\Product\Product|null
     */
    function getOwns()
    {
        return $this->getProp('owns');
    }

    /**
     * Indicates an OfferCatalog listing for this Organization, Person, or Service.
     * @return \Vnetby\Schemaorg\Types\Thing\Intangible\ItemList\OfferCatalog|null
     */
    function getHasOfferCatalog()
    {
        return $this->getProp('hasOfferCatalog');
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
     * nonprofitStatus indicates the legal status of a non-profit organization in its primary place of business.
     * @return \Vnetby\Schemaorg\Types\Thing\Intangible\Enumeration\NonprofitType\NonprofitType|null
     */
    function getNonprofitStatus()
    {
        return $this->getProp('nonprofitStatus');
    }

    /**
     * A member of an Organization or a ProgramMembership. Organizations can be members of organizations; ProgramMembership is typically for individuals.
     * @return \Vnetby\Schemaorg\Types\Thing\Person\Person|\Vnetby\Schemaorg\Types\Thing\Organization\Organization|null
     */
    function getMember()
    {
        return $this->getProp('member');
    }

    /**
     * The official name of the organization, e.g. the registered company name.
     * @return \Vnetby\Schemaorg\DataTypes\DataText|null
     */
    function getLegalName()
    {
        return $this->getProp('legalName');
    }

    /**
     * The [Global Location Number](http://www.gs1.org/gln) (GLN, sometimes also referred to as International Location Number or ILN) of the respective organization, person, or
     * place. The GLN is a 13-digit number used to identify parties and physical locations.
     * @return \Vnetby\Schemaorg\DataTypes\DataText|null
     */
    function getGlobalLocationNumber()
    {
        return $this->getProp('globalLocationNumber');
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
     * The North American Industry Classification System (NAICS) code for a particular organization or business person.
     * @return \Vnetby\Schemaorg\DataTypes\DataText|null
     */
    function getNaics()
    {
        return $this->getProp('naics');
    }

    /**
     * Email address.
     * @return \Vnetby\Schemaorg\DataTypes\DataText|null
     */
    function getEmail()
    {
        return $this->getProp('email');
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
     * A relationship between an organization and a department of that organization, also described as an organization (allowing different urls, logos, opening
     * hours). For example: a store with a pharmacy, or a bakery with a cafe.
     * @return \Vnetby\Schemaorg\Types\Thing\Organization\Organization|null
     */
    function getDepartment()
    {
        return $this->getProp('department');
    }

    /**
     * The Value-added Tax ID of the organization or person.
     * @return \Vnetby\Schemaorg\DataTypes\DataText|null
     */
    function getVatID()
    {
        return $this->getProp('vatID');
    }

    /**
     * The larger organization that this organization is a [[subOrganization]] of, if any.
     * @return \Vnetby\Schemaorg\Types\Thing\Organization\Organization|null
     */
    function getParentOrganization()
    {
        return $this->getProp('parentOrganization');
    }

    /**
     * The Tax / Fiscal ID of the organization or person, e.g. the TIN in the US or the CIF/NIF in Spain.
     * @return \Vnetby\Schemaorg\DataTypes\DataText|null
     */
    function getTaxID()
    {
        return $this->getProp('taxID');
    }

    /**
     * The fax number.
     * @return \Vnetby\Schemaorg\DataTypes\DataText|null
     */
    function getFaxNumber()
    {
        return $this->getProp('faxNumber');
    }

    /**
     * Of a [[Person]], and less typically of an [[Organization]], to indicate a topic that is known about - suggesting possible expertise
     * but not implying it. We do not distinguish skill levels here, or relate this to educational content, events, objectives or [[JobPosting]]
     * descriptions.
     * @return \Vnetby\Schemaorg\DataTypes\DataURL|\Vnetby\Schemaorg\Types\Thing\Thing|\Vnetby\Schemaorg\DataTypes\DataText|null
     */
    function getKnowsAbout()
    {
        return $this->getProp('knowsAbout');
    }

    /**
     * The brand(s) associated with a product or service, or the brand(s) maintained by an organization or business person.
     * @return \Vnetby\Schemaorg\Types\Thing\Intangible\Brand|\Vnetby\Schemaorg\Types\Thing\Organization\Organization|null
     */
    function getBrand()
    {
        return $this->getProp('brand');
    }

    /**
     * The overall rating, based on a collection of reviews or ratings, of the item.
     * @return \Vnetby\Schemaorg\Types\Thing\Intangible\Rating\AggregateRating\AggregateRating|null
     */
    function getAggregateRating()
    {
        return $this->getProp('aggregateRating');
    }

    /**
     * The number of interactions for the CreativeWork using the WebSite or SoftwareApplication. The most specific child type of InteractionCounter should be
     * used.
     * @return \Vnetby\Schemaorg\Types\Thing\Intangible\StructuredValue\InteractionCounter|null
     */
    function getInteractionStatistic()
    {
        return $this->getProp('interactionStatistic');
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
     * A person or organization that supports (sponsors) something through some kind of financial contribution.
     * @return \Vnetby\Schemaorg\Types\Thing\Person\Person|\Vnetby\Schemaorg\Types\Thing\Organization\Organization|null
     */
    function getFunder()
    {
        return $this->getProp('funder');
    }

    /**
     * An organization identifier that uniquely identifies a legal entity as defined in ISO 17442.
     * @return \Vnetby\Schemaorg\DataTypes\DataText|null
     */
    function getLeiCode()
    {
        return $this->getProp('leiCode');
    }

    /**
     * Keywords or tags used to describe some item. Multiple textual entries in a keywords list are typically delimited by commas, or
     * by repeating the property.
     * @return \Vnetby\Schemaorg\DataTypes\DataURL|\Vnetby\Schemaorg\DataTypes\DataText|\Vnetby\Schemaorg\Types\Thing\Intangible\DefinedTerm\DefinedTerm|null
     */
    function getKeywords()
    {
        return $this->getProp('keywords');
    }

    /**
     * The location of, for example, where an event is happening, where an organization is located, or where an action takes place.
     * @return \Vnetby\Schemaorg\Types\Thing\Intangible\VirtualLocation|\Vnetby\Schemaorg\DataTypes\DataText|\Vnetby\Schemaorg\Types\Thing\Intangible\StructuredValue\ContactPoint\PostalAddress|\Vnetby\Schemaorg\Types\Thing\Place\Place|null
     */
    function getLocation()
    {
        return $this->getProp('location');
    }

    /**
     * A review of the item.
     * @return \Vnetby\Schemaorg\Types\Thing\CreativeWork\Review\Review|null
     */
    function getReview()
    {
        return $this->getProp('review');
    }

    /**
     * The number of completed interactions for this entity, in a particular role (the 'agent'), in a particular action (indicated in the
     * statistic), and in a particular context (i.e. interactionService).
     * @return \Vnetby\Schemaorg\Types\Thing\Intangible\StructuredValue\InteractionCounter|null
     */
    function getAgentInteractionStatistic()
    {
        return $this->getProp('agentInteractionStatistic');
    }

    /**
     * A relationship between two organizations where the first includes the second, e.g., as a subsidiary. See also: the more specific 'department'
     * property.
     * @return \Vnetby\Schemaorg\Types\Thing\Organization\Organization|null
     */
    function getSubOrganization()
    {
        return $this->getProp('subOrganization');
    }

    /**
     * A pointer to products or services sought by the organization or person (demand).
     * @return \Vnetby\Schemaorg\Types\Thing\Intangible\Demand|null
     */
    function getSeeks()
    {
        return $this->getProp('seeks');
    }

    /**
     * A credential awarded to the Person or Organization.
     * @return \Vnetby\Schemaorg\Types\Thing\CreativeWork\EducationalOccupationalCredential|null
     */
    function getHasCredential()
    {
        return $this->getProp('hasCredential');
    }

    /**
     * Physical address of the item.
     * @return \Vnetby\Schemaorg\Types\Thing\Intangible\StructuredValue\ContactPoint\PostalAddress|\Vnetby\Schemaorg\DataTypes\DataText|null
     */
    function getAddress()
    {
        return $this->getProp('address');
    }

    /**
     * A contact point for a person or organization.
     * @return \Vnetby\Schemaorg\Types\Thing\Intangible\StructuredValue\ContactPoint\ContactPoint|null
     */
    function getContactPoint()
    {
        return $this->getProp('contactPoint');
    }

    /**
     * Of a [[Person]], and less typically of an [[Organization]], to indicate a known language. We do not distinguish skill levels or
     * reading/writing/speaking/signing here. Use language codes from the [IETF BCP 47 standard](http://tools.ietf.org/html/bcp47).
     * @return \Vnetby\Schemaorg\DataTypes\DataText|\Vnetby\Schemaorg\Types\Thing\Intangible\Language|null
     */
    function getKnowsLanguage()
    {
        return $this->getProp('knowsLanguage');
    }

    /**
     * Alumni of an organization.
     * @return \Vnetby\Schemaorg\Types\Thing\Person\Person|null
     */
    function getAlumni()
    {
        return $this->getProp('alumni');
    }

    /**
     * Points-of-Sales operated by the organization or person.
     * @return \Vnetby\Schemaorg\Types\Thing\Place\Place|null
     */
    function getHasPOS()
    {
        return $this->getProp('hasPOS');
    }

    /**
     * The geographic area where a service or offered item is provided.
     * @return \Vnetby\Schemaorg\Types\Thing\Intangible\StructuredValue\GeoShape\GeoShape|\Vnetby\Schemaorg\Types\Thing\Place\Place|\Vnetby\Schemaorg\Types\Thing\Place\AdministrativeArea\AdministrativeArea|\Vnetby\Schemaorg\DataTypes\DataText|null
     */
    function getAreaServed()
    {
        return $this->getProp('areaServed');
    }

    /**
     * The International Standard of Industrial Classification of All Economic Activities (ISIC), Revision 4 code for a particular organization, business person, or
     * place.
     * @return \Vnetby\Schemaorg\DataTypes\DataText|null
     */
    function getIsicV4()
    {
        return $this->getProp('isicV4');
    }

    /**
     * Someone working for this organization.
     * @return \Vnetby\Schemaorg\Types\Thing\Person\Person|null
     */
    function getEmployee()
    {
        return $this->getProp('employee');
    }

    /**
     * The Dun & Bradstreet DUNS number for identifying an organization or business person.
     * @return \Vnetby\Schemaorg\DataTypes\DataText|null
     */
    function getDuns()
    {
        return $this->getProp('duns');
    }

    /**
     * An award won by or for this item.
     * @return \Vnetby\Schemaorg\DataTypes\DataText|null
     */
    function getAward()
    {
        return $this->getProp('award');
    }

    /**
     * The publishingPrinciples property indicates (typically via [[URL]]) a document describing the editorial principles of an [[Organization]] (or individual, e.g. a [[Person]]
     * writing a blog) that relate to their activities as a publisher, e.g. ethics or diversity policies. When applied to a [[CreativeWork]]
     * (e.g. [[NewsArticle]]) the principles are those of the party primarily responsible for the creation of the [[CreativeWork]]. While such policies are
     * most typically expressed in natural language, sometimes related information (e.g. indicating a [[funder]]) can be expressed using schema.org terminology. 
     * @return \Vnetby\Schemaorg\Types\Thing\CreativeWork\CreativeWork|\Vnetby\Schemaorg\DataTypes\DataURL|null
     */
    function getPublishingPrinciples()
    {
        return $this->getProp('publishingPrinciples');
    }

    /**
     * A slogan or motto associated with the item.
     * @return \Vnetby\Schemaorg\DataTypes\DataText|null
     */
    function getSlogan()
    {
        return $this->getProp('slogan');
    }

    /**
     * An organization identifier as defined in ISO 6523(-1). Note that many existing organization identifiers such as [leiCode](https://schema.org/leiCode), [duns](https://schema.org/duns) and [vatID](https://schema.org/vatID) can
     * be expressed as an ISO 6523 identifier by setting the ICD part of the ISO 6523 identifier accordingly. 
     * @return \Vnetby\Schemaorg\DataTypes\DataText|null
     */
    function getIso6523Code()
    {
        return $this->getProp('iso6523Code');
    }

    /**
     * An associated logo.
     * @return \Vnetby\Schemaorg\Types\Thing\CreativeWork\MediaObject\ImageObject\ImageObject|\Vnetby\Schemaorg\DataTypes\DataURL|null
     */
    function getLogo()
    {
        return $this->getProp('logo');
    }
}
