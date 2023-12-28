<?php

/**
 * @see https://schema.org/Legislation
 * A legal document such as an act, decree, bill, etc. (enforceable or not) or a component of a legal act (like
 * an article).
 */

namespace Vnetby\Schemaorg\Types\Thing\CreativeWork\Legislation;

class Legislation extends \Vnetby\Schemaorg\Types\Thing\CreativeWork\CreativeWork
{
    const TYPE = 'Legislation';

    /**
     * Whether the legislation is currently in force, not in force, or partially in force.
     * @var \Vnetby\Schemaorg\Types\Thing\Intangible\Enumeration\StatusEnumeration\LegalForceStatus\LegalForceStatus
     */
    protected $prop_legislationLegalForce;

    /**
     * The point-in-time at which the provided description of the legislation is valid (e.g.: when looking at the law on the 2016-04-07
     * (= dateVersion), I get the consolidation of 2015-04-12 of the "National Insurance Contributions Act 2015")
     * @var \Vnetby\Schemaorg\DataTypes\DataDate
     */
    protected $prop_legislationDateVersion;

    /**
     * The person or organization that originally passed or made the law: typically parliament (for primary legislation) or government (for secondary legislation).
     * This indicates the "legal author" of the law, as opposed to its physical author.
     * @var \Vnetby\Schemaorg\Types\Thing\Organization\Organization|\Vnetby\Schemaorg\Types\Thing\Person\Person
     */
    protected $prop_legislationPassedBy;

    /**
     * Another legislation that this legislation changes. This encompasses the notions of amendment, replacement, correction, repeal, or other types of change. This
     * may be a direct change (textual or non-textual amendment) or a consequential or indirect change. The property is to be used
     * to express the existence of a change relationship between two acts rather than the existence of a consolidated version of the
     * text that shows the result of the change. For consolidation relationships, use the <a href="/legislationConsolidates">legislationConsolidates</a> property.
     * @var \Vnetby\Schemaorg\Types\Thing\CreativeWork\Legislation\Legislation
     */
    protected $prop_legislationChanges;

    /**
     * The jurisdiction from which the legislation originates.
     * @var \Vnetby\Schemaorg\DataTypes\DataText|\Vnetby\Schemaorg\Types\Thing\Place\AdministrativeArea\AdministrativeArea
     */
    protected $prop_legislationJurisdiction;

    /**
     * Indicates another legislation taken into account in this consolidated legislation (which is usually the product of an editorial process that revises
     * the legislation). This property should be used multiple times to refer to both the original version or the previous consolidated version,
     * and to the legislations making the change.
     * @var \Vnetby\Schemaorg\Types\Thing\CreativeWork\Legislation\Legislation
     */
    protected $prop_legislationConsolidates;

    /**
     * Indicates a legal jurisdiction, e.g. of some legislation, or where some government service is based.
     * @var \Vnetby\Schemaorg\Types\Thing\Place\AdministrativeArea\AdministrativeArea|\Vnetby\Schemaorg\DataTypes\DataText
     */
    protected $prop_jurisdiction;

    /**
     * Indicates that this legislation (or part of legislation) fulfills the objectives set by another legislation, by passing appropriate implementation measures. Typically,
     * some legislations of European Union's member states or regions transpose European Directives. This indicates a legally binding link between the 2
     * legislations.
     * @var \Vnetby\Schemaorg\Types\Thing\CreativeWork\Legislation\Legislation
     */
    protected $prop_legislationTransposes;

    /**
     * The date of adoption or signature of the legislation. This is the date at which the text is officially aknowledged to
     * be a legislation, even though it might not even be published or in force.
     * @var \Vnetby\Schemaorg\DataTypes\DataDate
     */
    protected $prop_legislationDate;

    /**
     * An identifier for the legislation. This can be either a string-based identifier, like the CELEX at EU level or the NOR
     * in France, or a web-based, URL/URI identifier, like an ELI (European Legislation Identifier) or an URN-Lex.
     * @var \Vnetby\Schemaorg\DataTypes\DataText|\Vnetby\Schemaorg\DataTypes\DataURL
     */
    protected $prop_legislationIdentifier;

    /**
     * Indicates that this legislation (or part of a legislation) somehow transfers another legislation in a different legislative context. This is an
     * informative link, and it has no legal value. For legally-binding links of transposition, use the <a href="/legislationTransposes">legislationTransposes</a> property. For example an
     * informative consolidated law of a European Union's member state "applies" the consolidated version of the European Directive implemented in it.
     * @var \Vnetby\Schemaorg\Types\Thing\CreativeWork\Legislation\Legislation
     */
    protected $prop_legislationApplies;

    /**
     * The type of the legislation. Examples of values are "law", "act", "directive", "decree", "regulation", "statutory instrument", "loi organique", "règlement grand-ducal", etc.,
     * depending on the country.
     * @var \Vnetby\Schemaorg\Types\Thing\Intangible\DefinedTerm\CategoryCode\CategoryCode|\Vnetby\Schemaorg\DataTypes\DataText
     */
    protected $prop_legislationType;

    /**
     * An individual or organization that has some kind of responsibility for the legislation. Typically the ministry who is/was in charge of
     * elaborating the legislation, or the adressee for potential questions about the legislation once it is published.
     * @var \Vnetby\Schemaorg\Types\Thing\Person\Person|\Vnetby\Schemaorg\Types\Thing\Organization\Organization
     */
    protected $prop_legislationResponsible;

    /**
     * Whether the legislation is currently in force, not in force, or partially in force.
     * @param \Vnetby\Schemaorg\Types\Thing\Intangible\Enumeration\StatusEnumeration\LegalForceStatus\LegalForceStatus $value
     * @return static
     */
    function setLegislationLegalForce($value)
    {
        return $this->setProp('legislationLegalForce', $value);
    }

    /**
     * The point-in-time at which the provided description of the legislation is valid (e.g.: when looking at the law on the 2016-04-07
     * (= dateVersion), I get the consolidation of 2015-04-12 of the "National Insurance Contributions Act 2015")
     * @param \Vnetby\Schemaorg\DataTypes\DataDate $value
     * @return static
     */
    function setLegislationDateVersion($value)
    {
        return $this->setProp('legislationDateVersion', $value);
    }

    /**
     * The person or organization that originally passed or made the law: typically parliament (for primary legislation) or government (for secondary legislation).
     * This indicates the "legal author" of the law, as opposed to its physical author.
     * @param \Vnetby\Schemaorg\Types\Thing\Organization\Organization|\Vnetby\Schemaorg\Types\Thing\Person\Person $value
     * @return static
     */
    function setLegislationPassedBy($value)
    {
        return $this->setProp('legislationPassedBy', $value);
    }

    /**
     * Another legislation that this legislation changes. This encompasses the notions of amendment, replacement, correction, repeal, or other types of change. This
     * may be a direct change (textual or non-textual amendment) or a consequential or indirect change. The property is to be used
     * to express the existence of a change relationship between two acts rather than the existence of a consolidated version of the
     * text that shows the result of the change. For consolidation relationships, use the <a href="/legislationConsolidates">legislationConsolidates</a> property.
     * @param \Vnetby\Schemaorg\Types\Thing\CreativeWork\Legislation\Legislation $value
     * @return static
     */
    function setLegislationChanges($value)
    {
        return $this->setProp('legislationChanges', $value);
    }

    /**
     * The jurisdiction from which the legislation originates.
     * @param \Vnetby\Schemaorg\DataTypes\DataText|\Vnetby\Schemaorg\Types\Thing\Place\AdministrativeArea\AdministrativeArea $value
     * @return static
     */
    function setLegislationJurisdiction($value)
    {
        return $this->setProp('legislationJurisdiction', $value);
    }

    /**
     * Indicates another legislation taken into account in this consolidated legislation (which is usually the product of an editorial process that revises
     * the legislation). This property should be used multiple times to refer to both the original version or the previous consolidated version,
     * and to the legislations making the change.
     * @param \Vnetby\Schemaorg\Types\Thing\CreativeWork\Legislation\Legislation $value
     * @return static
     */
    function setLegislationConsolidates($value)
    {
        return $this->setProp('legislationConsolidates', $value);
    }

    /**
     * Indicates a legal jurisdiction, e.g. of some legislation, or where some government service is based.
     * @param \Vnetby\Schemaorg\Types\Thing\Place\AdministrativeArea\AdministrativeArea|\Vnetby\Schemaorg\DataTypes\DataText $value
     * @return static
     */
    function setJurisdiction($value)
    {
        return $this->setProp('jurisdiction', $value);
    }

    /**
     * Indicates that this legislation (or part of legislation) fulfills the objectives set by another legislation, by passing appropriate implementation measures. Typically,
     * some legislations of European Union's member states or regions transpose European Directives. This indicates a legally binding link between the 2
     * legislations.
     * @param \Vnetby\Schemaorg\Types\Thing\CreativeWork\Legislation\Legislation $value
     * @return static
     */
    function setLegislationTransposes($value)
    {
        return $this->setProp('legislationTransposes', $value);
    }

    /**
     * The date of adoption or signature of the legislation. This is the date at which the text is officially aknowledged to
     * be a legislation, even though it might not even be published or in force.
     * @param \Vnetby\Schemaorg\DataTypes\DataDate $value
     * @return static
     */
    function setLegislationDate($value)
    {
        return $this->setProp('legislationDate', $value);
    }

    /**
     * An identifier for the legislation. This can be either a string-based identifier, like the CELEX at EU level or the NOR
     * in France, or a web-based, URL/URI identifier, like an ELI (European Legislation Identifier) or an URN-Lex.
     * @param \Vnetby\Schemaorg\DataTypes\DataText|\Vnetby\Schemaorg\DataTypes\DataURL $value
     * @return static
     */
    function setLegislationIdentifier($value)
    {
        return $this->setProp('legislationIdentifier', $value);
    }

    /**
     * Indicates that this legislation (or part of a legislation) somehow transfers another legislation in a different legislative context. This is an
     * informative link, and it has no legal value. For legally-binding links of transposition, use the <a href="/legislationTransposes">legislationTransposes</a> property. For example an
     * informative consolidated law of a European Union's member state "applies" the consolidated version of the European Directive implemented in it.
     * @param \Vnetby\Schemaorg\Types\Thing\CreativeWork\Legislation\Legislation $value
     * @return static
     */
    function setLegislationApplies($value)
    {
        return $this->setProp('legislationApplies', $value);
    }

    /**
     * The type of the legislation. Examples of values are "law", "act", "directive", "decree", "regulation", "statutory instrument", "loi organique", "règlement grand-ducal", etc.,
     * depending on the country.
     * @param \Vnetby\Schemaorg\Types\Thing\Intangible\DefinedTerm\CategoryCode\CategoryCode|\Vnetby\Schemaorg\DataTypes\DataText $value
     * @return static
     */
    function setLegislationType($value)
    {
        return $this->setProp('legislationType', $value);
    }

    /**
     * An individual or organization that has some kind of responsibility for the legislation. Typically the ministry who is/was in charge of
     * elaborating the legislation, or the adressee for potential questions about the legislation once it is published.
     * @param \Vnetby\Schemaorg\Types\Thing\Person\Person|\Vnetby\Schemaorg\Types\Thing\Organization\Organization $value
     * @return static
     */
    function setLegislationResponsible($value)
    {
        return $this->setProp('legislationResponsible', $value);
    }

    /**
     * Whether the legislation is currently in force, not in force, or partially in force.
     * @return \Vnetby\Schemaorg\Types\Thing\Intangible\Enumeration\StatusEnumeration\LegalForceStatus\LegalForceStatus|null
     */
    function getLegislationLegalForce()
    {
        return $this->getProp('legislationLegalForce');
    }

    /**
     * The point-in-time at which the provided description of the legislation is valid (e.g.: when looking at the law on the 2016-04-07
     * (= dateVersion), I get the consolidation of 2015-04-12 of the "National Insurance Contributions Act 2015")
     * @return \Vnetby\Schemaorg\DataTypes\DataDate|null
     */
    function getLegislationDateVersion()
    {
        return $this->getProp('legislationDateVersion');
    }

    /**
     * The person or organization that originally passed or made the law: typically parliament (for primary legislation) or government (for secondary legislation).
     * This indicates the "legal author" of the law, as opposed to its physical author.
     * @return \Vnetby\Schemaorg\Types\Thing\Organization\Organization|\Vnetby\Schemaorg\Types\Thing\Person\Person|null
     */
    function getLegislationPassedBy()
    {
        return $this->getProp('legislationPassedBy');
    }

    /**
     * Another legislation that this legislation changes. This encompasses the notions of amendment, replacement, correction, repeal, or other types of change. This
     * may be a direct change (textual or non-textual amendment) or a consequential or indirect change. The property is to be used
     * to express the existence of a change relationship between two acts rather than the existence of a consolidated version of the
     * text that shows the result of the change. For consolidation relationships, use the <a href="/legislationConsolidates">legislationConsolidates</a> property.
     * @return \Vnetby\Schemaorg\Types\Thing\CreativeWork\Legislation\Legislation|null
     */
    function getLegislationChanges()
    {
        return $this->getProp('legislationChanges');
    }

    /**
     * The jurisdiction from which the legislation originates.
     * @return \Vnetby\Schemaorg\DataTypes\DataText|\Vnetby\Schemaorg\Types\Thing\Place\AdministrativeArea\AdministrativeArea|null
     */
    function getLegislationJurisdiction()
    {
        return $this->getProp('legislationJurisdiction');
    }

    /**
     * Indicates another legislation taken into account in this consolidated legislation (which is usually the product of an editorial process that revises
     * the legislation). This property should be used multiple times to refer to both the original version or the previous consolidated version,
     * and to the legislations making the change.
     * @return \Vnetby\Schemaorg\Types\Thing\CreativeWork\Legislation\Legislation|null
     */
    function getLegislationConsolidates()
    {
        return $this->getProp('legislationConsolidates');
    }

    /**
     * Indicates a legal jurisdiction, e.g. of some legislation, or where some government service is based.
     * @return \Vnetby\Schemaorg\Types\Thing\Place\AdministrativeArea\AdministrativeArea|\Vnetby\Schemaorg\DataTypes\DataText|null
     */
    function getJurisdiction()
    {
        return $this->getProp('jurisdiction');
    }

    /**
     * Indicates that this legislation (or part of legislation) fulfills the objectives set by another legislation, by passing appropriate implementation measures. Typically,
     * some legislations of European Union's member states or regions transpose European Directives. This indicates a legally binding link between the 2
     * legislations.
     * @return \Vnetby\Schemaorg\Types\Thing\CreativeWork\Legislation\Legislation|null
     */
    function getLegislationTransposes()
    {
        return $this->getProp('legislationTransposes');
    }

    /**
     * The date of adoption or signature of the legislation. This is the date at which the text is officially aknowledged to
     * be a legislation, even though it might not even be published or in force.
     * @return \Vnetby\Schemaorg\DataTypes\DataDate|null
     */
    function getLegislationDate()
    {
        return $this->getProp('legislationDate');
    }

    /**
     * An identifier for the legislation. This can be either a string-based identifier, like the CELEX at EU level or the NOR
     * in France, or a web-based, URL/URI identifier, like an ELI (European Legislation Identifier) or an URN-Lex.
     * @return \Vnetby\Schemaorg\DataTypes\DataText|\Vnetby\Schemaorg\DataTypes\DataURL|null
     */
    function getLegislationIdentifier()
    {
        return $this->getProp('legislationIdentifier');
    }

    /**
     * Indicates that this legislation (or part of a legislation) somehow transfers another legislation in a different legislative context. This is an
     * informative link, and it has no legal value. For legally-binding links of transposition, use the <a href="/legislationTransposes">legislationTransposes</a> property. For example an
     * informative consolidated law of a European Union's member state "applies" the consolidated version of the European Directive implemented in it.
     * @return \Vnetby\Schemaorg\Types\Thing\CreativeWork\Legislation\Legislation|null
     */
    function getLegislationApplies()
    {
        return $this->getProp('legislationApplies');
    }

    /**
     * The type of the legislation. Examples of values are "law", "act", "directive", "decree", "regulation", "statutory instrument", "loi organique", "règlement grand-ducal", etc.,
     * depending on the country.
     * @return \Vnetby\Schemaorg\Types\Thing\Intangible\DefinedTerm\CategoryCode\CategoryCode|\Vnetby\Schemaorg\DataTypes\DataText|null
     */
    function getLegislationType()
    {
        return $this->getProp('legislationType');
    }

    /**
     * An individual or organization that has some kind of responsibility for the legislation. Typically the ministry who is/was in charge of
     * elaborating the legislation, or the adressee for potential questions about the legislation once it is published.
     * @return \Vnetby\Schemaorg\Types\Thing\Person\Person|\Vnetby\Schemaorg\Types\Thing\Organization\Organization|null
     */
    function getLegislationResponsible()
    {
        return $this->getProp('legislationResponsible');
    }
}
