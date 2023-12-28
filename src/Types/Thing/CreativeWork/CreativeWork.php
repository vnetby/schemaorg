<?php

/**
 * @see https://schema.org/CreativeWork
 * The most generic kind of creative work, including books, movies, photographs, software programs, etc.
 */

namespace Vnetby\Schemaorg\Types\Thing\CreativeWork;

class CreativeWork extends \Vnetby\Schemaorg\Types\Thing\Thing
{
    const TYPE = 'CreativeWork';

    /**
     * Indicates a page or other link involved in archival of a [[CreativeWork]]. In the case of [[MediaReview]], the items in a
     * [[MediaReviewItem]] may often become inaccessible, but be archived by archival, journalistic, activist, or law enforcement organizations. In such cases, the referenced
     * page may not directly publish the content.
     * @var \Vnetby\Schemaorg\Types\Thing\CreativeWork\WebPage\WebPage|\Vnetby\Schemaorg\DataTypes\DataURL
     */
    protected $prop_archivedAt;

    /**
     * A pattern that something has, for example 'polka dot', 'striped', 'Canadian flag'. Values are typically expressed as text, although links to
     * controlled value schemes are also supported.
     * @var \Vnetby\Schemaorg\DataTypes\DataText|\Vnetby\Schemaorg\Types\Thing\Intangible\DefinedTerm\DefinedTerm
     */
    protected $prop_pattern;

    /**
     * An embedded audio object.
     * @var \Vnetby\Schemaorg\Types\Thing\CreativeWork\Clip\Clip|\Vnetby\Schemaorg\Types\Thing\CreativeWork\MediaObject\AudioObject\AudioObject|\Vnetby\Schemaorg\Types\Thing\CreativeWork\MusicRecording
     */
    protected $prop_audio;

    /**
     * Date the content expires and is no longer useful or available. For example a [[VideoObject]] or [[NewsArticle]] whose availability or relevance
     * is time-limited, or a [[ClaimReview]] fact check whose publisher wants to indicate that it may no longer be relevant (or helpful
     * to highlight) after some date.
     * @var \Vnetby\Schemaorg\DataTypes\DataDateTime|\Vnetby\Schemaorg\DataTypes\DataDate
     */
    protected $prop_expires;

    /**
     * A [[Grant]] that directly or indirectly provide funding or sponsorship for this item. See also [[ownershipFundingInfo]].
     * @var \Vnetby\Schemaorg\Types\Thing\Intangible\Grant\Grant
     */
    protected $prop_funding;

    /**
     * The textual content of this CreativeWork.
     * @var \Vnetby\Schemaorg\DataTypes\DataText
     */
    protected $prop_text;

    /**
     * A flag to signal that the item, event, or place is accessible for free.
     * @var \Vnetby\Schemaorg\DataTypes\DataBoolean
     */
    protected $prop_isAccessibleForFree;

    /**
     * A publication event associated with the item.
     * @var \Vnetby\Schemaorg\Types\Thing\Event\PublicationEvent\PublicationEvent
     */
    protected $prop_publication;

    /**
     * A human-readable summary of specific accessibility features or deficiencies, consistent with the other accessibility metadata but expressing subtleties such as "short
     * descriptions are present but long descriptions will be needed for non-visual users" or "short descriptions are present and no long descriptions
     * are needed".
     * @var \Vnetby\Schemaorg\DataTypes\DataText
     */
    protected $prop_accessibilitySummary;

    /**
     * The item being described is intended to help a person learn the competency or learning outcome defined by the referenced term.
     * @var \Vnetby\Schemaorg\DataTypes\DataText|\Vnetby\Schemaorg\Types\Thing\Intangible\DefinedTerm\DefinedTerm
     */
    protected $prop_teaches;

    /**
     * Specifies the Person that is legally accountable for the CreativeWork.
     * @var \Vnetby\Schemaorg\Types\Thing\Person\Person
     */
    protected $prop_accountablePerson;

    /**
     * The "temporal" property can be used in cases where more specific properties (e.g. [[temporalCoverage]], [[dateCreated]], [[dateModified]], [[datePublished]]) are not known to
     * be appropriate.
     * @var \Vnetby\Schemaorg\DataTypes\DataDateTime|\Vnetby\Schemaorg\DataTypes\DataText
     */
    protected $prop_temporal;

    /**
     * A standardized size of a product or creative work, specified either through a simple textual string (for example 'XL', '32Wx34L'), a
     * QuantitativeValue with a unitCode, or a comprehensive and structured [[SizeSpecification]]; in other cases, the [[width]], [[height]], [[depth]] and [[weight]] properties may
     * be more applicable. 
     * @var \Vnetby\Schemaorg\Types\Thing\Intangible\StructuredValue\QuantitativeValue\QuantitativeValue|\Vnetby\Schemaorg\DataTypes\DataText|\Vnetby\Schemaorg\Types\Thing\Intangible\DefinedTerm\DefinedTerm|\Vnetby\Schemaorg\Types\Thing\Intangible\Enumeration\QualitativeValue\SizeSpecification
     */
    protected $prop_size;

    /**
     * The subject matter of the content.
     * @var \Vnetby\Schemaorg\Types\Thing\Thing
     */
    protected $prop_about;

    /**
     * A creative work that this work is an example/instance/realization/derivation of.
     * @var \Vnetby\Schemaorg\Types\Thing\CreativeWork\CreativeWork
     */
    protected $prop_exampleOfWork;

    /**
     * The work that this work has been translated from. E.g. 物种起源 is a translationOf “On the Origin of Species”.
     * @var \Vnetby\Schemaorg\Types\Thing\CreativeWork\CreativeWork
     */
    protected $prop_translationOfWork;

    /**
     * The location where the CreativeWork was created, which may not be the same as the location depicted in the CreativeWork.
     * @var \Vnetby\Schemaorg\Types\Thing\Place\Place
     */
    protected $prop_locationCreated;

    /**
     * Indicates the party responsible for generating and publishing the current structured data markup, typically in cases where the structured data is
     * derived automatically from existing published content but published on a different site. For example, student projects and open data initiatives often
     * re-publish existing content with more explicitly structured metadata. The [[sdPublisher]] property helps make such practices more explicit.
     * @var \Vnetby\Schemaorg\Types\Thing\Organization\Organization|\Vnetby\Schemaorg\Types\Thing\Person\Person
     */
    protected $prop_sdPublisher;

    /**
     * A person or organization that supports a thing through a pledge, promise, or financial contribution. E.g. a sponsor of a Medical
     * Study or a corporate sponsor of an event.
     * @var \Vnetby\Schemaorg\Types\Thing\Person\Person|\Vnetby\Schemaorg\Types\Thing\Organization\Organization
     */
    protected $prop_sponsor;

    /**
     * An abstract is a short description that summarizes a [[CreativeWork]].
     * @var \Vnetby\Schemaorg\DataTypes\DataText
     */
    protected $prop_abstract;

    /**
     * Indicates (by URL or string) a particular version of a schema used in some CreativeWork. This property was created primarily to
     * indicate the use of a specific schema.org release, e.g. ```10.0``` as a simple string, or more explicitly via URL, ```https://schema.org/docs/releases.html#v10.0```. There
     * may be situations in which other schemas might usefully be referenced this way, e.g. ```http://dublincore.org/specifications/dublin-core/dces/1999-07-02/``` but this has not been carefully
     * explored in the community.
     * @var \Vnetby\Schemaorg\DataTypes\DataURL|\Vnetby\Schemaorg\DataTypes\DataText
     */
    protected $prop_schemaVersion;

    /**
     * A work that is a translation of the content of this work. E.g. 西遊記 has an English workTranslation “Journey to the
     * West”, a German workTranslation “Monkeys Pilgerfahrt” and a Vietnamese translation Tây du ký bình khảo.
     * @var \Vnetby\Schemaorg\Types\Thing\CreativeWork\CreativeWork
     */
    protected $prop_workTranslation;

    /**
     * Text that can be used to credit person(s) and/or organization(s) associated with a published Creative Work.
     * @var \Vnetby\Schemaorg\DataTypes\DataText
     */
    protected $prop_creditText;

    /**
     * The purpose of a work in the context of education; for example, 'assignment', 'group work'.
     * @var \Vnetby\Schemaorg\DataTypes\DataText|\Vnetby\Schemaorg\Types\Thing\Intangible\DefinedTerm\DefinedTerm
     */
    protected $prop_educationalUse;

    /**
     * The item being described is intended to assess the competency or learning outcome defined by the referenced term.
     * @var \Vnetby\Schemaorg\DataTypes\DataText|\Vnetby\Schemaorg\Types\Thing\Intangible\DefinedTerm\DefinedTerm
     */
    protected $prop_assesses;

    /**
     * A link to the page containing the comments of the CreativeWork.
     * @var \Vnetby\Schemaorg\DataTypes\DataURL
     */
    protected $prop_discussionUrl;

    /**
     * A characteristic of the described resource that is physiologically dangerous to some users. Related to WCAG 2.0 guideline 2.3. Values should
     * be drawn from the [approved vocabulary](https://www.w3.org/2021/a11y-discov-vocab/latest/#accessibilityHazard-vocabulary).
     * @var \Vnetby\Schemaorg\DataTypes\DataText
     */
    protected $prop_accessibilityHazard;

    /**
     * Example/instance/realization/derivation of the concept of this creative work. E.g. the paperback edition, first edition, or e-book.
     * @var \Vnetby\Schemaorg\Types\Thing\CreativeWork\CreativeWork
     */
    protected $prop_workExample;

    /**
     * The schema.org [[usageInfo]] property indicates further information about a [[CreativeWork]]. This property is applicable both to works that are freely available
     * and to those that require payment or other transactions. It can reference additional information, e.g. community expectations on preferred linking and
     * citation conventions, as well as purchasing details. For something that can be commercially licensed, usageInfo can provide detailed, resource-specific information about
     * licensing options. This property can be used alongside the license property which indicates license(s) applicable to some piece of content. The
     * usageInfo property can provide information about other licensing options, e.g. acquiring commercial usage rights for an image that is also available
     * under non-commercial creative commons licenses.
     * @var \Vnetby\Schemaorg\DataTypes\DataURL|\Vnetby\Schemaorg\Types\Thing\CreativeWork\CreativeWork
     */
    protected $prop_usageInfo;

    /**
     * A license document that applies to this content, typically indicated by URL.
     * @var \Vnetby\Schemaorg\DataTypes\DataURL|\Vnetby\Schemaorg\Types\Thing\CreativeWork\CreativeWork
     */
    protected $prop_license;

    /**
     * The language of the content or performance or used in an action. Please use one of the language codes from the
     * [IETF BCP 47 standard](http://tools.ietf.org/html/bcp47). See also [[availableLanguage]].
     * @var \Vnetby\Schemaorg\DataTypes\DataText|\Vnetby\Schemaorg\Types\Thing\Intangible\Language
     */
    protected $prop_inLanguage;

    /**
     * An offer to provide this item&#x2014;for example, an offer to sell a product, rent the DVD of a movie, perform a
     * service, or give away tickets to an event. Use [[businessFunction]] to indicate the kind of transaction offered, i.e. sell, lease, etc.
     * This property can also be used to describe a [[Demand]]. While this property is listed as expected on a number of
     * common types, it can be used in others. In that case, using a second type, such as Product or a subtype
     * of Product, can clarify the nature of the offer. 
     * @var \Vnetby\Schemaorg\Types\Thing\Intangible\Demand|\Vnetby\Schemaorg\Types\Thing\Intangible\Offer\Offer
     */
    protected $prop_offers;

    /**
     * The country of origin of something, including products as well as creative works such as movie and TV content. In the
     * case of TV and movie, this would be the country of the principle offices of the production company or individual responsible
     * for the movie. For other kinds of [[CreativeWork]] it is difficult to provide fully general guidance, and properties such as [[contentLocation]]
     * and [[locationCreated]] may be more applicable. In the case of products, the country of origin of the product. The exact interpretation
     * of this may vary by context and product type, and cannot be fully enumerated here.
     * @var \Vnetby\Schemaorg\Types\Thing\Place\AdministrativeArea\Country
     */
    protected $prop_countryOfOrigin;

    /**
     * Indicates that the CreativeWork contains a reference to, but is not necessarily about a concept.
     * @var \Vnetby\Schemaorg\Types\Thing\Thing
     */
    protected $prop_mentions;

    /**
     * The person or organization who produced the work (e.g. music album, movie, TV/radio series etc.).
     * @var \Vnetby\Schemaorg\Types\Thing\Organization\Organization|\Vnetby\Schemaorg\Types\Thing\Person\Person
     */
    protected $prop_producer;

    /**
     * The publishing division which published the comic.
     * @var \Vnetby\Schemaorg\Types\Thing\Organization\Organization
     */
    protected $prop_publisherImprint;

    /**
     * The predominant type or kind characterizing the learning resource. For example, 'presentation', 'handout'.
     * @var \Vnetby\Schemaorg\DataTypes\DataText|\Vnetby\Schemaorg\Types\Thing\Intangible\DefinedTerm\DefinedTerm
     */
    protected $prop_learningResourceType;

    /**
     * The author of this content or rating. Please note that author is special in that HTML 5 provides a special mechanism
     * for indicating authorship via the rel tag. That is equivalent to this and may be used interchangeably.
     * @var \Vnetby\Schemaorg\Types\Thing\Organization\Organization|\Vnetby\Schemaorg\Types\Thing\Person\Person
     */
    protected $prop_author;

    /**
     * The date on which the CreativeWork was created or the item was added to a DataFeed.
     * @var \Vnetby\Schemaorg\DataTypes\DataDate|\Vnetby\Schemaorg\DataTypes\DataDateTime
     */
    protected $prop_dateCreated;

    /**
     * Indicates an item or CreativeWork that this item, or CreativeWork (in some sense), is part of.
     * @var \Vnetby\Schemaorg\DataTypes\DataURL|\Vnetby\Schemaorg\Types\Thing\CreativeWork\CreativeWork
     */
    protected $prop_isPartOf;

    /**
     * Fictional person connected with a creative work.
     * @var \Vnetby\Schemaorg\Types\Thing\Person\Person
     */
    protected $prop_character;

    /**
     * An intended audience, i.e. a group for whom something was created.
     * @var \Vnetby\Schemaorg\Types\Thing\Intangible\Audience\Audience
     */
    protected $prop_audience;

    /**
     * The level in terms of progression through an educational or training context. Examples of educational levels include 'beginner', 'intermediate' or 'advanced',
     * and formal sets of level indicators.
     * @var \Vnetby\Schemaorg\DataTypes\DataURL|\Vnetby\Schemaorg\DataTypes\DataText|\Vnetby\Schemaorg\Types\Thing\Intangible\DefinedTerm\DefinedTerm
     */
    protected $prop_educationalLevel;

    /**
     * Identifies input methods that are sufficient to fully control the described resource. Values should be drawn from the [approved vocabulary](https://www.w3.org/2021/a11y-discov-vocab/latest/#accessibilityControl-vocabulary).
     * @var \Vnetby\Schemaorg\DataTypes\DataText
     */
    protected $prop_accessibilityControl;

    /**
     * Indicates whether this content is family friendly.
     * @var \Vnetby\Schemaorg\DataTypes\DataBoolean
     */
    protected $prop_isFamilyFriendly;

    /**
     * The position of an item in a series or sequence of items.
     * @var \Vnetby\Schemaorg\DataTypes\DataText|\Vnetby\Schemaorg\DataTypes\DataInteger
     */
    protected $prop_position;

    /**
     * Conditions that affect the availability of, or method(s) of access to, an item. Typically used for real world items such as
     * an [[ArchiveComponent]] held by an [[ArchiveOrganization]]. This property is not suitable for use as a general Web access control mechanism. It
     * is expressed only in natural language.\n\nFor example "Available by appointment from the Reading Room" or "Accessible only from logged-in accounts ".
     * 
     * @var \Vnetby\Schemaorg\DataTypes\DataText
     */
    protected $prop_conditionsOfAccess;

    /**
     * Date of first broadcast/publication.
     * @var \Vnetby\Schemaorg\DataTypes\DataDateTime|\Vnetby\Schemaorg\DataTypes\DataDate
     */
    protected $prop_datePublished;

    /**
     * The temporalCoverage of a CreativeWork indicates the period that the content applies to, i.e. that it describes, either as a DateTime
     * or as a textual string indicating a time period in [ISO 8601 time interval format](https://en.wikipedia.org/wiki/ISO_8601#Time_intervals). In the case of a Dataset
     * it will typically indicate the relevant time period in a precise notation (e.g. for a 2011 census dataset, the year 2011
     * would be written "2011/2012"). Other forms of content, e.g. ScholarlyArticle, Book, TVSeries or TVEpisode, may indicate their temporalCoverage in broader terms
     * - textually or via well-known URL. Written works such as books may sometimes have precise temporal coverage too, e.g. a work
     * set in 1939 - 1945 can be indicated in ISO 8601 interval format format via "1939/1945". Open-ended date ranges can be
     * written with ".." in place of the end date. For example, "2015-11/.." indicates a range beginning in November 2015 and with
     * no specified final date. This is tentative and might be updated in future when ISO 8601 is officially updated.
     * @var \Vnetby\Schemaorg\DataTypes\DataDateTime|\Vnetby\Schemaorg\DataTypes\DataURL|\Vnetby\Schemaorg\DataTypes\DataText
     */
    protected $prop_temporalCoverage;

    /**
     * The location depicted or described in the content. For example, the location in a photograph or painting.
     * @var \Vnetby\Schemaorg\Types\Thing\Place\Place
     */
    protected $prop_contentLocation;

    /**
     * The status of a creative work in terms of its stage in a lifecycle. Example terms include Incomplete, Draft, Published, Obsolete.
     * Some organizations define a set of terms for the stages of their publication lifecycle.
     * @var \Vnetby\Schemaorg\DataTypes\DataText|\Vnetby\Schemaorg\Types\Thing\Intangible\DefinedTerm\DefinedTerm
     */
    protected $prop_creativeWorkStatus;

    /**
     * The specific time described by a creative work, for works (e.g. articles, video objects etc.) that emphasise a particular moment within
     * an Event.
     * @var \Vnetby\Schemaorg\DataTypes\DataDateTime
     */
    protected $prop_contentReferenceTime;

    /**
     * The spatialCoverage of a CreativeWork indicates the place(s) which are the focus of the content. It is a subproperty of contentLocation
     * intended primarily for more technical and detailed materials. For example with a Dataset, it indicates areas that the dataset describes: a
     * dataset of New York weather would have spatialCoverage which was the place: the state of New York.
     * @var \Vnetby\Schemaorg\Types\Thing\Place\Place
     */
    protected $prop_spatialCoverage;

    /**
     * A media object that encodes this CreativeWork. This property is a synonym for associatedMedia.
     * @var \Vnetby\Schemaorg\Types\Thing\CreativeWork\MediaObject\MediaObject
     */
    protected $prop_encoding;

    /**
     * An [EIDR](https://eidr.org/) (Entertainment Identifier Registry) [[identifier]] representing a specific edit / edition for a work of film or television. For example,
     * the motion picture known as "Ghostbusters" whose [[titleEIDR]] is "10.5240/7EC7-228A-510A-053E-CBB8-J" has several edits, e.g. "10.5240/1F2A-E1C5-680A-14C6-E76B-I" and "10.5240/8A35-3BEE-6497-5D12-9E4F-3". Since schema.org types like
     * [[Movie]] and [[TVEpisode]] can be used for both works and their multiple expressions, it is possible to use [[titleEIDR]] alone (for
     * a general description), or alongside [[editEIDR]] for a more edit-specific description. 
     * @var \Vnetby\Schemaorg\DataTypes\DataURL|\Vnetby\Schemaorg\DataTypes\DataText
     */
    protected $prop_editEIDR;

    /**
     * The party holding the legal copyright to the CreativeWork.
     * @var \Vnetby\Schemaorg\Types\Thing\Person\Person|\Vnetby\Schemaorg\Types\Thing\Organization\Organization
     */
    protected $prop_copyrightHolder;

    /**
     * The service provider, service operator, or service performer; the goods producer. Another party (a seller) may offer those services or goods
     * on behalf of the provider. A provider may also serve as the seller.
     * @var \Vnetby\Schemaorg\Types\Thing\Organization\Organization|\Vnetby\Schemaorg\Types\Thing\Person\Person
     */
    protected $prop_provider;

    /**
     * The date on which the CreativeWork was most recently modified or when the item's entry was modified within a DataFeed.
     * @var \Vnetby\Schemaorg\DataTypes\DataDate|\Vnetby\Schemaorg\DataTypes\DataDateTime
     */
    protected $prop_dateModified;

    /**
     * A citation or reference to another creative work, such as another publication, web page, scholarly article, etc.
     * @var \Vnetby\Schemaorg\Types\Thing\CreativeWork\CreativeWork|\Vnetby\Schemaorg\DataTypes\DataText
     */
    protected $prop_citation;

    /**
     * Specifies the Person who edited the CreativeWork.
     * @var \Vnetby\Schemaorg\Types\Thing\Person\Person
     */
    protected $prop_editor;

    /**
     * Indicates the primary entity described in some page or other CreativeWork.
     * @var \Vnetby\Schemaorg\Types\Thing\Thing
     */
    protected $prop_mainEntity;

    /**
     * Thumbnail image for an image or video.
     * @var \Vnetby\Schemaorg\Types\Thing\CreativeWork\MediaObject\ImageObject\ImageObject
     */
    protected $prop_thumbnail;

    /**
     * Text of a notice appropriate for describing the copyright aspects of this Creative Work, ideally indicating the owner of the copyright
     * for the Work.
     * @var \Vnetby\Schemaorg\DataTypes\DataText
     */
    protected $prop_copyrightNotice;

    /**
     * Approximate or typical time it usually takes to work with or through the content of this work for the typical or
     * target audience.
     * @var \Vnetby\Schemaorg\Types\Thing\Intangible\Quantity\Duration
     */
    protected $prop_timeRequired;

    /**
     * The typical expected age range, e.g. '7-9', '11-'.
     * @var \Vnetby\Schemaorg\DataTypes\DataText
     */
    protected $prop_typicalAgeRange;

    /**
     * An alignment to an established educational framework. This property should not be used where the nature of the alignment can be
     * described using a simple property, for example to express that a resource [[teaches]] or [[assesses]] a competency.
     * @var \Vnetby\Schemaorg\Types\Thing\Intangible\AlignmentObject
     */
    protected $prop_educationalAlignment;

    /**
     * The overall rating, based on a collection of reviews or ratings, of the item.
     * @var \Vnetby\Schemaorg\Types\Thing\Intangible\Rating\AggregateRating\AggregateRating
     */
    protected $prop_aggregateRating;

    /**
     * Headline of the article.
     * @var \Vnetby\Schemaorg\DataTypes\DataText
     */
    protected $prop_headline;

    /**
     * The number of interactions for the CreativeWork using the WebSite or SoftwareApplication. The most specific child type of InteractionCounter should be
     * used.
     * @var \Vnetby\Schemaorg\Types\Thing\Intangible\StructuredValue\InteractionCounter
     */
    protected $prop_interactionStatistic;

    /**
     * A person or organization that supports (sponsors) something through some kind of financial contribution.
     * @var \Vnetby\Schemaorg\Types\Thing\Person\Person|\Vnetby\Schemaorg\Types\Thing\Organization\Organization
     */
    protected $prop_funder;

    /**
     * The publisher of the creative work.
     * @var \Vnetby\Schemaorg\Types\Thing\Organization\Organization|\Vnetby\Schemaorg\Types\Thing\Person\Person
     */
    protected $prop_publisher;

    /**
     * Indicates a page documenting how licenses can be purchased or otherwise acquired, for the current item.
     * @var \Vnetby\Schemaorg\DataTypes\DataURL|\Vnetby\Schemaorg\Types\Thing\CreativeWork\CreativeWork
     */
    protected $prop_acquireLicensePage;

    /**
     * The number of comments this CreativeWork (e.g. Article, Question or Answer) has received. This is most applicable to works published in
     * Web sites with commenting system; additional comments may exist elsewhere.
     * @var \Vnetby\Schemaorg\DataTypes\DataInteger
     */
    protected $prop_commentCount;

    /**
     * Keywords or tags used to describe some item. Multiple textual entries in a keywords list are typically delimited by commas, or
     * by repeating the property.
     * @var \Vnetby\Schemaorg\DataTypes\DataURL|\Vnetby\Schemaorg\DataTypes\DataText|\Vnetby\Schemaorg\Types\Thing\Intangible\DefinedTerm\DefinedTerm
     */
    protected $prop_keywords;

    /**
     * The year during which the claimed copyright for the CreativeWork was first asserted.
     * @var \Vnetby\Schemaorg\DataTypes\DataNumber
     */
    protected $prop_copyrightYear;

    /**
     * The creator/author of this CreativeWork. This is the same as the Author property for CreativeWork.
     * @var \Vnetby\Schemaorg\Types\Thing\Person\Person|\Vnetby\Schemaorg\Types\Thing\Organization\Organization
     */
    protected $prop_creator;

    /**
     * A media object that encodes this CreativeWork. This property is a synonym for encoding.
     * @var \Vnetby\Schemaorg\Types\Thing\CreativeWork\MediaObject\MediaObject
     */
    protected $prop_associatedMedia;

    /**
     * A material that something is made from, e.g. leather, wool, cotton, paper.
     * @var \Vnetby\Schemaorg\DataTypes\DataURL|\Vnetby\Schemaorg\Types\Thing\Product\Product|\Vnetby\Schemaorg\DataTypes\DataText
     */
    protected $prop_material;

    /**
     * The version of the CreativeWork embodied by a specified resource.
     * @var \Vnetby\Schemaorg\DataTypes\DataText|\Vnetby\Schemaorg\DataTypes\DataNumber
     */
    protected $prop_version;

    /**
     * A review of the item.
     * @var \Vnetby\Schemaorg\Types\Thing\CreativeWork\Review\Review
     */
    protected $prop_review;

    /**
     * A resource from which this work is derived or from which it is a modification or adaptation.
     * @var \Vnetby\Schemaorg\DataTypes\DataURL|\Vnetby\Schemaorg\Types\Thing\Product\Product|\Vnetby\Schemaorg\Types\Thing\CreativeWork\CreativeWork
     */
    protected $prop_isBasedOn;

    /**
     * A list of single or combined accessModes that are sufficient to understand all the intellectual content of a resource. Values should
     * be drawn from the [approved vocabulary](https://www.w3.org/2021/a11y-discov-vocab/latest/#accessModeSufficient-vocabulary).
     * @var \Vnetby\Schemaorg\Types\Thing\Intangible\ItemList\ItemList
     */
    protected $prop_accessModeSufficient;

    /**
     * The human sensory perceptual system or cognitive faculty through which a person may process or perceive information. Values should be drawn
     * from the [approved vocabulary](https://www.w3.org/2021/a11y-discov-vocab/latest/#accessMode-vocabulary).
     * @var \Vnetby\Schemaorg\DataTypes\DataText
     */
    protected $prop_accessMode;

    /**
     * A secondary title of the CreativeWork.
     * @var \Vnetby\Schemaorg\DataTypes\DataText
     */
    protected $prop_alternativeHeadline;

    /**
     * The predominant mode of learning supported by the learning resource. Acceptable values are 'active', 'expositive', or 'mixed'.
     * @var \Vnetby\Schemaorg\DataTypes\DataText
     */
    protected $prop_interactivityType;

    /**
     * Organization or person who adapts a creative work to different languages, regional differences and technical requirements of a target market, or
     * that translates during some event.
     * @var \Vnetby\Schemaorg\Types\Thing\Person\Person|\Vnetby\Schemaorg\Types\Thing\Organization\Organization
     */
    protected $prop_translator;

    /**
     * A secondary contributor to the CreativeWork or Event.
     * @var \Vnetby\Schemaorg\Types\Thing\Person\Person|\Vnetby\Schemaorg\Types\Thing\Organization\Organization
     */
    protected $prop_contributor;

    /**
     * The quantity of the materials being described or an expression of the physical space they occupy.
     * @var \Vnetby\Schemaorg\Types\Thing\Intangible\StructuredValue\QuantitativeValue\QuantitativeValue|\Vnetby\Schemaorg\DataTypes\DataText
     */
    protected $prop_[object Object];

    /**
     * Comments, typically from users.
     * @var \Vnetby\Schemaorg\Types\Thing\CreativeWork\Comment\Comment
     */
    protected $prop_comment;

    /**
     * Indicates an item or CreativeWork that is part of this item, or CreativeWork (in some sense).
     * @var \Vnetby\Schemaorg\Types\Thing\CreativeWork\CreativeWork
     */
    protected $prop_hasPart;

    /**
     * A thumbnail image relevant to the Thing.
     * @var \Vnetby\Schemaorg\DataTypes\DataURL
     */
    protected $prop_thumbnailUrl;

    /**
     * Indicates that the resource is compatible with the referenced accessibility API. Values should be drawn from the [approved vocabulary](https://www.w3.org/2021/a11y-discov-vocab/latest/#accessibilityAPI-vocabulary).
     * @var \Vnetby\Schemaorg\DataTypes\DataText
     */
    protected $prop_accessibilityAPI;

    /**
     * A license document that applies to this structured data, typically indicated by URL.
     * @var \Vnetby\Schemaorg\DataTypes\DataURL|\Vnetby\Schemaorg\Types\Thing\CreativeWork\CreativeWork
     */
    protected $prop_sdLicense;

    /**
     * An embedded video object.
     * @var \Vnetby\Schemaorg\Types\Thing\CreativeWork\MediaObject\VideoObject\VideoObject|\Vnetby\Schemaorg\Types\Thing\CreativeWork\Clip\Clip
     */
    protected $prop_video;

    /**
     * Indicates a correction to a [[CreativeWork]], either via a [[CorrectionComment]], textually or in another document.
     * @var \Vnetby\Schemaorg\Types\Thing\CreativeWork\Comment\CorrectionComment|\Vnetby\Schemaorg\DataTypes\DataURL|\Vnetby\Schemaorg\DataTypes\DataText
     */
    protected $prop_correction;

    /**
     * Used to indicate a specific claim contained, implied, translated or refined from the content of a [[MediaObject]] or other [[CreativeWork]]. The
     * interpreting party can be indicated using [[claimInterpreter]].
     * @var \Vnetby\Schemaorg\Types\Thing\CreativeWork\Claim
     */
    protected $prop_interpretedAsClaim;

    /**
     * The place and time the release was issued, expressed as a PublicationEvent.
     * @var \Vnetby\Schemaorg\Types\Thing\Event\PublicationEvent\PublicationEvent
     */
    protected $prop_releasedEvent;

    /**
     * A maintainer of a [[Dataset]], software package ([[SoftwareApplication]]), or other [[Project]]. A maintainer is a [[Person]] or [[Organization]] that manages contributions
     * to, and/or publication of, some (typically complex) artifact. It is common for distributions of software and data to be based on
     * "upstream" sources. When [[maintainer]] is applied to a specific version of something e.g. a particular version or packaging of a [[Dataset]],
     * it is always possible that the upstream source has a different maintainer. The [[isBasedOn]] property can be used to indicate such
     * relationships between datasets to make the different maintenance roles clear. Similarly in the case of software, a package may have dedicated
     * maintainers working on integration into software distributions such as Ubuntu, as well as upstream maintainers of the underlying work. 
     * @var \Vnetby\Schemaorg\Types\Thing\Person\Person|\Vnetby\Schemaorg\Types\Thing\Organization\Organization
     */
    protected $prop_maintainer;

    /**
     * Indicates the date on which the current structured data was generated / published. Typically used alongside [[sdPublisher]].
     * @var \Vnetby\Schemaorg\DataTypes\DataDate
     */
    protected $prop_sdDatePublished;

    /**
     * Content features of the resource, such as accessible media, alternatives and supported enhancements for accessibility. Values should be drawn from the
     * [approved vocabulary](https://www.w3.org/2021/a11y-discov-vocab/latest/#accessibilityFeature-vocabulary).
     * @var \Vnetby\Schemaorg\DataTypes\DataText
     */
    protected $prop_accessibilityFeature;

    /**
     * Official rating of a piece of content&#x2014;for example, 'MPAA PG-13'.
     * @var \Vnetby\Schemaorg\Types\Thing\Intangible\Rating\Rating|\Vnetby\Schemaorg\DataTypes\DataText
     */
    protected $prop_contentRating;

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
     * Genre of the creative work, broadcast channel or group.
     * @var \Vnetby\Schemaorg\DataTypes\DataText|\Vnetby\Schemaorg\DataTypes\DataURL
     */
    protected $prop_genre;

    /**
     * The "spatial" property can be used in cases when more specific properties (e.g. [[locationCreated]], [[spatialCoverage]], [[contentLocation]]) are not known to be
     * appropriate.
     * @var \Vnetby\Schemaorg\Types\Thing\Place\Place
     */
    protected $prop_spatial;

    /**
     * Media type typically expressed using a MIME format (see [IANA site](http://www.iana.org/assignments/media-types/media-types.xhtml) and [MDN reference](https://developer.mozilla.org/en-US/docs/Web/HTTP/Basics_of_HTTP/MIME_types)), e.g. application/zip for a SoftwareApplication binary, audio/mpeg
     * for .mp3 etc. In cases where a [[CreativeWork]] has several media type representations, [[encoding]] can be used to indicate each [[MediaObject]]
     * alongside particular [[encodingFormat]] information. Unregistered or niche encoding and file formats can be indicated instead via the most appropriate URL, e.g.
     * defining Web page or a Wikipedia/Wikidata entry.
     * @var \Vnetby\Schemaorg\DataTypes\DataText|\Vnetby\Schemaorg\DataTypes\DataURL
     */
    protected $prop_encodingFormat;

    /**
     * The Organization on whose behalf the creator was working.
     * @var \Vnetby\Schemaorg\Types\Thing\Organization\Organization
     */
    protected $prop_sourceOrganization;

    /**
     * The Event where the CreativeWork was recorded. The CreativeWork may capture all or part of the event.
     * @var \Vnetby\Schemaorg\Types\Thing\Event\Event
     */
    protected $prop_recordedAt;

    /**
     * Indicates a page or other link involved in archival of a [[CreativeWork]]. In the case of [[MediaReview]], the items in a
     * [[MediaReviewItem]] may often become inaccessible, but be archived by archival, journalistic, activist, or law enforcement organizations. In such cases, the referenced
     * page may not directly publish the content.
     * @param \Vnetby\Schemaorg\Types\Thing\CreativeWork\WebPage\WebPage|\Vnetby\Schemaorg\DataTypes\DataURL $value
     * @return static
     */
    function setArchivedAt($value)
    {
        return $this->setProp('archivedAt', $value);
    }

    /**
     * A pattern that something has, for example 'polka dot', 'striped', 'Canadian flag'. Values are typically expressed as text, although links to
     * controlled value schemes are also supported.
     * @param \Vnetby\Schemaorg\DataTypes\DataText|\Vnetby\Schemaorg\Types\Thing\Intangible\DefinedTerm\DefinedTerm $value
     * @return static
     */
    function setPattern($value)
    {
        return $this->setProp('pattern', $value);
    }

    /**
     * An embedded audio object.
     * @param \Vnetby\Schemaorg\Types\Thing\CreativeWork\Clip\Clip|\Vnetby\Schemaorg\Types\Thing\CreativeWork\MediaObject\AudioObject\AudioObject|\Vnetby\Schemaorg\Types\Thing\CreativeWork\MusicRecording $value
     * @return static
     */
    function setAudio($value)
    {
        return $this->setProp('audio', $value);
    }

    /**
     * Date the content expires and is no longer useful or available. For example a [[VideoObject]] or [[NewsArticle]] whose availability or relevance
     * is time-limited, or a [[ClaimReview]] fact check whose publisher wants to indicate that it may no longer be relevant (or helpful
     * to highlight) after some date.
     * @param \Vnetby\Schemaorg\DataTypes\DataDateTime|\Vnetby\Schemaorg\DataTypes\DataDate $value
     * @return static
     */
    function setExpires($value)
    {
        return $this->setProp('expires', $value);
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
     * The textual content of this CreativeWork.
     * @param \Vnetby\Schemaorg\DataTypes\DataText $value
     * @return static
     */
    function setText($value)
    {
        return $this->setProp('text', $value);
    }

    /**
     * A flag to signal that the item, event, or place is accessible for free.
     * @param \Vnetby\Schemaorg\DataTypes\DataBoolean $value
     * @return static
     */
    function setIsAccessibleForFree($value)
    {
        return $this->setProp('isAccessibleForFree', $value);
    }

    /**
     * A publication event associated with the item.
     * @param \Vnetby\Schemaorg\Types\Thing\Event\PublicationEvent\PublicationEvent $value
     * @return static
     */
    function setPublication($value)
    {
        return $this->setProp('publication', $value);
    }

    /**
     * A human-readable summary of specific accessibility features or deficiencies, consistent with the other accessibility metadata but expressing subtleties such as "short
     * descriptions are present but long descriptions will be needed for non-visual users" or "short descriptions are present and no long descriptions
     * are needed".
     * @param \Vnetby\Schemaorg\DataTypes\DataText $value
     * @return static
     */
    function setAccessibilitySummary($value)
    {
        return $this->setProp('accessibilitySummary', $value);
    }

    /**
     * The item being described is intended to help a person learn the competency or learning outcome defined by the referenced term.
     * @param \Vnetby\Schemaorg\DataTypes\DataText|\Vnetby\Schemaorg\Types\Thing\Intangible\DefinedTerm\DefinedTerm $value
     * @return static
     */
    function setTeaches($value)
    {
        return $this->setProp('teaches', $value);
    }

    /**
     * Specifies the Person that is legally accountable for the CreativeWork.
     * @param \Vnetby\Schemaorg\Types\Thing\Person\Person $value
     * @return static
     */
    function setAccountablePerson($value)
    {
        return $this->setProp('accountablePerson', $value);
    }

    /**
     * The "temporal" property can be used in cases where more specific properties (e.g. [[temporalCoverage]], [[dateCreated]], [[dateModified]], [[datePublished]]) are not known to
     * be appropriate.
     * @param \Vnetby\Schemaorg\DataTypes\DataDateTime|\Vnetby\Schemaorg\DataTypes\DataText $value
     * @return static
     */
    function setTemporal($value)
    {
        return $this->setProp('temporal', $value);
    }

    /**
     * A standardized size of a product or creative work, specified either through a simple textual string (for example 'XL', '32Wx34L'), a
     * QuantitativeValue with a unitCode, or a comprehensive and structured [[SizeSpecification]]; in other cases, the [[width]], [[height]], [[depth]] and [[weight]] properties may
     * be more applicable. 
     * @param \Vnetby\Schemaorg\Types\Thing\Intangible\StructuredValue\QuantitativeValue\QuantitativeValue|\Vnetby\Schemaorg\DataTypes\DataText|\Vnetby\Schemaorg\Types\Thing\Intangible\DefinedTerm\DefinedTerm|\Vnetby\Schemaorg\Types\Thing\Intangible\Enumeration\QualitativeValue\SizeSpecification $value
     * @return static
     */
    function setSize($value)
    {
        return $this->setProp('size', $value);
    }

    /**
     * The subject matter of the content.
     * @param \Vnetby\Schemaorg\Types\Thing\Thing $value
     * @return static
     */
    function setAbout($value)
    {
        return $this->setProp('about', $value);
    }

    /**
     * A creative work that this work is an example/instance/realization/derivation of.
     * @param \Vnetby\Schemaorg\Types\Thing\CreativeWork\CreativeWork $value
     * @return static
     */
    function setExampleOfWork($value)
    {
        return $this->setProp('exampleOfWork', $value);
    }

    /**
     * The work that this work has been translated from. E.g. 物种起源 is a translationOf “On the Origin of Species”.
     * @param \Vnetby\Schemaorg\Types\Thing\CreativeWork\CreativeWork $value
     * @return static
     */
    function setTranslationOfWork($value)
    {
        return $this->setProp('translationOfWork', $value);
    }

    /**
     * The location where the CreativeWork was created, which may not be the same as the location depicted in the CreativeWork.
     * @param \Vnetby\Schemaorg\Types\Thing\Place\Place $value
     * @return static
     */
    function setLocationCreated($value)
    {
        return $this->setProp('locationCreated', $value);
    }

    /**
     * Indicates the party responsible for generating and publishing the current structured data markup, typically in cases where the structured data is
     * derived automatically from existing published content but published on a different site. For example, student projects and open data initiatives often
     * re-publish existing content with more explicitly structured metadata. The [[sdPublisher]] property helps make such practices more explicit.
     * @param \Vnetby\Schemaorg\Types\Thing\Organization\Organization|\Vnetby\Schemaorg\Types\Thing\Person\Person $value
     * @return static
     */
    function setSdPublisher($value)
    {
        return $this->setProp('sdPublisher', $value);
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
     * An abstract is a short description that summarizes a [[CreativeWork]].
     * @param \Vnetby\Schemaorg\DataTypes\DataText $value
     * @return static
     */
    function setAbstract($value)
    {
        return $this->setProp('abstract', $value);
    }

    /**
     * Indicates (by URL or string) a particular version of a schema used in some CreativeWork. This property was created primarily to
     * indicate the use of a specific schema.org release, e.g. ```10.0``` as a simple string, or more explicitly via URL, ```https://schema.org/docs/releases.html#v10.0```. There
     * may be situations in which other schemas might usefully be referenced this way, e.g. ```http://dublincore.org/specifications/dublin-core/dces/1999-07-02/``` but this has not been carefully
     * explored in the community.
     * @param \Vnetby\Schemaorg\DataTypes\DataURL|\Vnetby\Schemaorg\DataTypes\DataText $value
     * @return static
     */
    function setSchemaVersion($value)
    {
        return $this->setProp('schemaVersion', $value);
    }

    /**
     * A work that is a translation of the content of this work. E.g. 西遊記 has an English workTranslation “Journey to the
     * West”, a German workTranslation “Monkeys Pilgerfahrt” and a Vietnamese translation Tây du ký bình khảo.
     * @param \Vnetby\Schemaorg\Types\Thing\CreativeWork\CreativeWork $value
     * @return static
     */
    function setWorkTranslation($value)
    {
        return $this->setProp('workTranslation', $value);
    }

    /**
     * Text that can be used to credit person(s) and/or organization(s) associated with a published Creative Work.
     * @param \Vnetby\Schemaorg\DataTypes\DataText $value
     * @return static
     */
    function setCreditText($value)
    {
        return $this->setProp('creditText', $value);
    }

    /**
     * The purpose of a work in the context of education; for example, 'assignment', 'group work'.
     * @param \Vnetby\Schemaorg\DataTypes\DataText|\Vnetby\Schemaorg\Types\Thing\Intangible\DefinedTerm\DefinedTerm $value
     * @return static
     */
    function setEducationalUse($value)
    {
        return $this->setProp('educationalUse', $value);
    }

    /**
     * The item being described is intended to assess the competency or learning outcome defined by the referenced term.
     * @param \Vnetby\Schemaorg\DataTypes\DataText|\Vnetby\Schemaorg\Types\Thing\Intangible\DefinedTerm\DefinedTerm $value
     * @return static
     */
    function setAssesses($value)
    {
        return $this->setProp('assesses', $value);
    }

    /**
     * A link to the page containing the comments of the CreativeWork.
     * @param \Vnetby\Schemaorg\DataTypes\DataURL $value
     * @return static
     */
    function setDiscussionUrl($value)
    {
        return $this->setProp('discussionUrl', $value);
    }

    /**
     * A characteristic of the described resource that is physiologically dangerous to some users. Related to WCAG 2.0 guideline 2.3. Values should
     * be drawn from the [approved vocabulary](https://www.w3.org/2021/a11y-discov-vocab/latest/#accessibilityHazard-vocabulary).
     * @param \Vnetby\Schemaorg\DataTypes\DataText $value
     * @return static
     */
    function setAccessibilityHazard($value)
    {
        return $this->setProp('accessibilityHazard', $value);
    }

    /**
     * Example/instance/realization/derivation of the concept of this creative work. E.g. the paperback edition, first edition, or e-book.
     * @param \Vnetby\Schemaorg\Types\Thing\CreativeWork\CreativeWork $value
     * @return static
     */
    function setWorkExample($value)
    {
        return $this->setProp('workExample', $value);
    }

    /**
     * The schema.org [[usageInfo]] property indicates further information about a [[CreativeWork]]. This property is applicable both to works that are freely available
     * and to those that require payment or other transactions. It can reference additional information, e.g. community expectations on preferred linking and
     * citation conventions, as well as purchasing details. For something that can be commercially licensed, usageInfo can provide detailed, resource-specific information about
     * licensing options. This property can be used alongside the license property which indicates license(s) applicable to some piece of content. The
     * usageInfo property can provide information about other licensing options, e.g. acquiring commercial usage rights for an image that is also available
     * under non-commercial creative commons licenses.
     * @param \Vnetby\Schemaorg\DataTypes\DataURL|\Vnetby\Schemaorg\Types\Thing\CreativeWork\CreativeWork $value
     * @return static
     */
    function setUsageInfo($value)
    {
        return $this->setProp('usageInfo', $value);
    }

    /**
     * A license document that applies to this content, typically indicated by URL.
     * @param \Vnetby\Schemaorg\DataTypes\DataURL|\Vnetby\Schemaorg\Types\Thing\CreativeWork\CreativeWork $value
     * @return static
     */
    function setLicense($value)
    {
        return $this->setProp('license', $value);
    }

    /**
     * The language of the content or performance or used in an action. Please use one of the language codes from the
     * [IETF BCP 47 standard](http://tools.ietf.org/html/bcp47). See also [[availableLanguage]].
     * @param \Vnetby\Schemaorg\DataTypes\DataText|\Vnetby\Schemaorg\Types\Thing\Intangible\Language $value
     * @return static
     */
    function setInLanguage($value)
    {
        return $this->setProp('inLanguage', $value);
    }

    /**
     * An offer to provide this item&#x2014;for example, an offer to sell a product, rent the DVD of a movie, perform a
     * service, or give away tickets to an event. Use [[businessFunction]] to indicate the kind of transaction offered, i.e. sell, lease, etc.
     * This property can also be used to describe a [[Demand]]. While this property is listed as expected on a number of
     * common types, it can be used in others. In that case, using a second type, such as Product or a subtype
     * of Product, can clarify the nature of the offer. 
     * @param \Vnetby\Schemaorg\Types\Thing\Intangible\Demand|\Vnetby\Schemaorg\Types\Thing\Intangible\Offer\Offer $value
     * @return static
     */
    function setOffers($value)
    {
        return $this->setProp('offers', $value);
    }

    /**
     * The country of origin of something, including products as well as creative works such as movie and TV content. In the
     * case of TV and movie, this would be the country of the principle offices of the production company or individual responsible
     * for the movie. For other kinds of [[CreativeWork]] it is difficult to provide fully general guidance, and properties such as [[contentLocation]]
     * and [[locationCreated]] may be more applicable. In the case of products, the country of origin of the product. The exact interpretation
     * of this may vary by context and product type, and cannot be fully enumerated here.
     * @param \Vnetby\Schemaorg\Types\Thing\Place\AdministrativeArea\Country $value
     * @return static
     */
    function setCountryOfOrigin($value)
    {
        return $this->setProp('countryOfOrigin', $value);
    }

    /**
     * Indicates that the CreativeWork contains a reference to, but is not necessarily about a concept.
     * @param \Vnetby\Schemaorg\Types\Thing\Thing $value
     * @return static
     */
    function setMentions($value)
    {
        return $this->setProp('mentions', $value);
    }

    /**
     * The person or organization who produced the work (e.g. music album, movie, TV/radio series etc.).
     * @param \Vnetby\Schemaorg\Types\Thing\Organization\Organization|\Vnetby\Schemaorg\Types\Thing\Person\Person $value
     * @return static
     */
    function setProducer($value)
    {
        return $this->setProp('producer', $value);
    }

    /**
     * The publishing division which published the comic.
     * @param \Vnetby\Schemaorg\Types\Thing\Organization\Organization $value
     * @return static
     */
    function setPublisherImprint($value)
    {
        return $this->setProp('publisherImprint', $value);
    }

    /**
     * The predominant type or kind characterizing the learning resource. For example, 'presentation', 'handout'.
     * @param \Vnetby\Schemaorg\DataTypes\DataText|\Vnetby\Schemaorg\Types\Thing\Intangible\DefinedTerm\DefinedTerm $value
     * @return static
     */
    function setLearningResourceType($value)
    {
        return $this->setProp('learningResourceType', $value);
    }

    /**
     * The author of this content or rating. Please note that author is special in that HTML 5 provides a special mechanism
     * for indicating authorship via the rel tag. That is equivalent to this and may be used interchangeably.
     * @param \Vnetby\Schemaorg\Types\Thing\Organization\Organization|\Vnetby\Schemaorg\Types\Thing\Person\Person $value
     * @return static
     */
    function setAuthor($value)
    {
        return $this->setProp('author', $value);
    }

    /**
     * The date on which the CreativeWork was created or the item was added to a DataFeed.
     * @param \Vnetby\Schemaorg\DataTypes\DataDate|\Vnetby\Schemaorg\DataTypes\DataDateTime $value
     * @return static
     */
    function setDateCreated($value)
    {
        return $this->setProp('dateCreated', $value);
    }

    /**
     * Indicates an item or CreativeWork that this item, or CreativeWork (in some sense), is part of.
     * @param \Vnetby\Schemaorg\DataTypes\DataURL|\Vnetby\Schemaorg\Types\Thing\CreativeWork\CreativeWork $value
     * @return static
     */
    function setIsPartOf($value)
    {
        return $this->setProp('isPartOf', $value);
    }

    /**
     * Fictional person connected with a creative work.
     * @param \Vnetby\Schemaorg\Types\Thing\Person\Person $value
     * @return static
     */
    function setCharacter($value)
    {
        return $this->setProp('character', $value);
    }

    /**
     * An intended audience, i.e. a group for whom something was created.
     * @param \Vnetby\Schemaorg\Types\Thing\Intangible\Audience\Audience $value
     * @return static
     */
    function setAudience($value)
    {
        return $this->setProp('audience', $value);
    }

    /**
     * The level in terms of progression through an educational or training context. Examples of educational levels include 'beginner', 'intermediate' or 'advanced',
     * and formal sets of level indicators.
     * @param \Vnetby\Schemaorg\DataTypes\DataURL|\Vnetby\Schemaorg\DataTypes\DataText|\Vnetby\Schemaorg\Types\Thing\Intangible\DefinedTerm\DefinedTerm $value
     * @return static
     */
    function setEducationalLevel($value)
    {
        return $this->setProp('educationalLevel', $value);
    }

    /**
     * Identifies input methods that are sufficient to fully control the described resource. Values should be drawn from the [approved vocabulary](https://www.w3.org/2021/a11y-discov-vocab/latest/#accessibilityControl-vocabulary).
     * @param \Vnetby\Schemaorg\DataTypes\DataText $value
     * @return static
     */
    function setAccessibilityControl($value)
    {
        return $this->setProp('accessibilityControl', $value);
    }

    /**
     * Indicates whether this content is family friendly.
     * @param \Vnetby\Schemaorg\DataTypes\DataBoolean $value
     * @return static
     */
    function setIsFamilyFriendly($value)
    {
        return $this->setProp('isFamilyFriendly', $value);
    }

    /**
     * The position of an item in a series or sequence of items.
     * @param \Vnetby\Schemaorg\DataTypes\DataText|\Vnetby\Schemaorg\DataTypes\DataInteger $value
     * @return static
     */
    function setPosition($value)
    {
        return $this->setProp('position', $value);
    }

    /**
     * Conditions that affect the availability of, or method(s) of access to, an item. Typically used for real world items such as
     * an [[ArchiveComponent]] held by an [[ArchiveOrganization]]. This property is not suitable for use as a general Web access control mechanism. It
     * is expressed only in natural language.\n\nFor example "Available by appointment from the Reading Room" or "Accessible only from logged-in accounts ".
     * 
     * @param \Vnetby\Schemaorg\DataTypes\DataText $value
     * @return static
     */
    function setConditionsOfAccess($value)
    {
        return $this->setProp('conditionsOfAccess', $value);
    }

    /**
     * Date of first broadcast/publication.
     * @param \Vnetby\Schemaorg\DataTypes\DataDateTime|\Vnetby\Schemaorg\DataTypes\DataDate $value
     * @return static
     */
    function setDatePublished($value)
    {
        return $this->setProp('datePublished', $value);
    }

    /**
     * The temporalCoverage of a CreativeWork indicates the period that the content applies to, i.e. that it describes, either as a DateTime
     * or as a textual string indicating a time period in [ISO 8601 time interval format](https://en.wikipedia.org/wiki/ISO_8601#Time_intervals). In the case of a Dataset
     * it will typically indicate the relevant time period in a precise notation (e.g. for a 2011 census dataset, the year 2011
     * would be written "2011/2012"). Other forms of content, e.g. ScholarlyArticle, Book, TVSeries or TVEpisode, may indicate their temporalCoverage in broader terms
     * - textually or via well-known URL. Written works such as books may sometimes have precise temporal coverage too, e.g. a work
     * set in 1939 - 1945 can be indicated in ISO 8601 interval format format via "1939/1945". Open-ended date ranges can be
     * written with ".." in place of the end date. For example, "2015-11/.." indicates a range beginning in November 2015 and with
     * no specified final date. This is tentative and might be updated in future when ISO 8601 is officially updated.
     * @param \Vnetby\Schemaorg\DataTypes\DataDateTime|\Vnetby\Schemaorg\DataTypes\DataURL|\Vnetby\Schemaorg\DataTypes\DataText $value
     * @return static
     */
    function setTemporalCoverage($value)
    {
        return $this->setProp('temporalCoverage', $value);
    }

    /**
     * The location depicted or described in the content. For example, the location in a photograph or painting.
     * @param \Vnetby\Schemaorg\Types\Thing\Place\Place $value
     * @return static
     */
    function setContentLocation($value)
    {
        return $this->setProp('contentLocation', $value);
    }

    /**
     * The status of a creative work in terms of its stage in a lifecycle. Example terms include Incomplete, Draft, Published, Obsolete.
     * Some organizations define a set of terms for the stages of their publication lifecycle.
     * @param \Vnetby\Schemaorg\DataTypes\DataText|\Vnetby\Schemaorg\Types\Thing\Intangible\DefinedTerm\DefinedTerm $value
     * @return static
     */
    function setCreativeWorkStatus($value)
    {
        return $this->setProp('creativeWorkStatus', $value);
    }

    /**
     * The specific time described by a creative work, for works (e.g. articles, video objects etc.) that emphasise a particular moment within
     * an Event.
     * @param \Vnetby\Schemaorg\DataTypes\DataDateTime $value
     * @return static
     */
    function setContentReferenceTime($value)
    {
        return $this->setProp('contentReferenceTime', $value);
    }

    /**
     * The spatialCoverage of a CreativeWork indicates the place(s) which are the focus of the content. It is a subproperty of contentLocation
     * intended primarily for more technical and detailed materials. For example with a Dataset, it indicates areas that the dataset describes: a
     * dataset of New York weather would have spatialCoverage which was the place: the state of New York.
     * @param \Vnetby\Schemaorg\Types\Thing\Place\Place $value
     * @return static
     */
    function setSpatialCoverage($value)
    {
        return $this->setProp('spatialCoverage', $value);
    }

    /**
     * A media object that encodes this CreativeWork. This property is a synonym for associatedMedia.
     * @param \Vnetby\Schemaorg\Types\Thing\CreativeWork\MediaObject\MediaObject $value
     * @return static
     */
    function setEncoding($value)
    {
        return $this->setProp('encoding', $value);
    }

    /**
     * An [EIDR](https://eidr.org/) (Entertainment Identifier Registry) [[identifier]] representing a specific edit / edition for a work of film or television. For example,
     * the motion picture known as "Ghostbusters" whose [[titleEIDR]] is "10.5240/7EC7-228A-510A-053E-CBB8-J" has several edits, e.g. "10.5240/1F2A-E1C5-680A-14C6-E76B-I" and "10.5240/8A35-3BEE-6497-5D12-9E4F-3". Since schema.org types like
     * [[Movie]] and [[TVEpisode]] can be used for both works and their multiple expressions, it is possible to use [[titleEIDR]] alone (for
     * a general description), or alongside [[editEIDR]] for a more edit-specific description. 
     * @param \Vnetby\Schemaorg\DataTypes\DataURL|\Vnetby\Schemaorg\DataTypes\DataText $value
     * @return static
     */
    function setEditEIDR($value)
    {
        return $this->setProp('editEIDR', $value);
    }

    /**
     * The party holding the legal copyright to the CreativeWork.
     * @param \Vnetby\Schemaorg\Types\Thing\Person\Person|\Vnetby\Schemaorg\Types\Thing\Organization\Organization $value
     * @return static
     */
    function setCopyrightHolder($value)
    {
        return $this->setProp('copyrightHolder', $value);
    }

    /**
     * The service provider, service operator, or service performer; the goods producer. Another party (a seller) may offer those services or goods
     * on behalf of the provider. A provider may also serve as the seller.
     * @param \Vnetby\Schemaorg\Types\Thing\Organization\Organization|\Vnetby\Schemaorg\Types\Thing\Person\Person $value
     * @return static
     */
    function setProvider($value)
    {
        return $this->setProp('provider', $value);
    }

    /**
     * The date on which the CreativeWork was most recently modified or when the item's entry was modified within a DataFeed.
     * @param \Vnetby\Schemaorg\DataTypes\DataDate|\Vnetby\Schemaorg\DataTypes\DataDateTime $value
     * @return static
     */
    function setDateModified($value)
    {
        return $this->setProp('dateModified', $value);
    }

    /**
     * A citation or reference to another creative work, such as another publication, web page, scholarly article, etc.
     * @param \Vnetby\Schemaorg\Types\Thing\CreativeWork\CreativeWork|\Vnetby\Schemaorg\DataTypes\DataText $value
     * @return static
     */
    function setCitation($value)
    {
        return $this->setProp('citation', $value);
    }

    /**
     * Specifies the Person who edited the CreativeWork.
     * @param \Vnetby\Schemaorg\Types\Thing\Person\Person $value
     * @return static
     */
    function setEditor($value)
    {
        return $this->setProp('editor', $value);
    }

    /**
     * Indicates the primary entity described in some page or other CreativeWork.
     * @param \Vnetby\Schemaorg\Types\Thing\Thing $value
     * @return static
     */
    function setMainEntity($value)
    {
        return $this->setProp('mainEntity', $value);
    }

    /**
     * Thumbnail image for an image or video.
     * @param \Vnetby\Schemaorg\Types\Thing\CreativeWork\MediaObject\ImageObject\ImageObject $value
     * @return static
     */
    function setThumbnail($value)
    {
        return $this->setProp('thumbnail', $value);
    }

    /**
     * Text of a notice appropriate for describing the copyright aspects of this Creative Work, ideally indicating the owner of the copyright
     * for the Work.
     * @param \Vnetby\Schemaorg\DataTypes\DataText $value
     * @return static
     */
    function setCopyrightNotice($value)
    {
        return $this->setProp('copyrightNotice', $value);
    }

    /**
     * Approximate or typical time it usually takes to work with or through the content of this work for the typical or
     * target audience.
     * @param \Vnetby\Schemaorg\Types\Thing\Intangible\Quantity\Duration $value
     * @return static
     */
    function setTimeRequired($value)
    {
        return $this->setProp('timeRequired', $value);
    }

    /**
     * The typical expected age range, e.g. '7-9', '11-'.
     * @param \Vnetby\Schemaorg\DataTypes\DataText $value
     * @return static
     */
    function setTypicalAgeRange($value)
    {
        return $this->setProp('typicalAgeRange', $value);
    }

    /**
     * An alignment to an established educational framework. This property should not be used where the nature of the alignment can be
     * described using a simple property, for example to express that a resource [[teaches]] or [[assesses]] a competency.
     * @param \Vnetby\Schemaorg\Types\Thing\Intangible\AlignmentObject $value
     * @return static
     */
    function setEducationalAlignment($value)
    {
        return $this->setProp('educationalAlignment', $value);
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
     * Headline of the article.
     * @param \Vnetby\Schemaorg\DataTypes\DataText $value
     * @return static
     */
    function setHeadline($value)
    {
        return $this->setProp('headline', $value);
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
     * A person or organization that supports (sponsors) something through some kind of financial contribution.
     * @param \Vnetby\Schemaorg\Types\Thing\Person\Person|\Vnetby\Schemaorg\Types\Thing\Organization\Organization $value
     * @return static
     */
    function setFunder($value)
    {
        return $this->setProp('funder', $value);
    }

    /**
     * The publisher of the creative work.
     * @param \Vnetby\Schemaorg\Types\Thing\Organization\Organization|\Vnetby\Schemaorg\Types\Thing\Person\Person $value
     * @return static
     */
    function setPublisher($value)
    {
        return $this->setProp('publisher', $value);
    }

    /**
     * Indicates a page documenting how licenses can be purchased or otherwise acquired, for the current item.
     * @param \Vnetby\Schemaorg\DataTypes\DataURL|\Vnetby\Schemaorg\Types\Thing\CreativeWork\CreativeWork $value
     * @return static
     */
    function setAcquireLicensePage($value)
    {
        return $this->setProp('acquireLicensePage', $value);
    }

    /**
     * The number of comments this CreativeWork (e.g. Article, Question or Answer) has received. This is most applicable to works published in
     * Web sites with commenting system; additional comments may exist elsewhere.
     * @param \Vnetby\Schemaorg\DataTypes\DataInteger $value
     * @return static
     */
    function setCommentCount($value)
    {
        return $this->setProp('commentCount', $value);
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
     * The year during which the claimed copyright for the CreativeWork was first asserted.
     * @param \Vnetby\Schemaorg\DataTypes\DataNumber $value
     * @return static
     */
    function setCopyrightYear($value)
    {
        return $this->setProp('copyrightYear', $value);
    }

    /**
     * The creator/author of this CreativeWork. This is the same as the Author property for CreativeWork.
     * @param \Vnetby\Schemaorg\Types\Thing\Person\Person|\Vnetby\Schemaorg\Types\Thing\Organization\Organization $value
     * @return static
     */
    function setCreator($value)
    {
        return $this->setProp('creator', $value);
    }

    /**
     * A media object that encodes this CreativeWork. This property is a synonym for encoding.
     * @param \Vnetby\Schemaorg\Types\Thing\CreativeWork\MediaObject\MediaObject $value
     * @return static
     */
    function setAssociatedMedia($value)
    {
        return $this->setProp('associatedMedia', $value);
    }

    /**
     * A material that something is made from, e.g. leather, wool, cotton, paper.
     * @param \Vnetby\Schemaorg\DataTypes\DataURL|\Vnetby\Schemaorg\Types\Thing\Product\Product|\Vnetby\Schemaorg\DataTypes\DataText $value
     * @return static
     */
    function setMaterial($value)
    {
        return $this->setProp('material', $value);
    }

    /**
     * The version of the CreativeWork embodied by a specified resource.
     * @param \Vnetby\Schemaorg\DataTypes\DataText|\Vnetby\Schemaorg\DataTypes\DataNumber $value
     * @return static
     */
    function setVersion($value)
    {
        return $this->setProp('version', $value);
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
     * A resource from which this work is derived or from which it is a modification or adaptation.
     * @param \Vnetby\Schemaorg\DataTypes\DataURL|\Vnetby\Schemaorg\Types\Thing\Product\Product|\Vnetby\Schemaorg\Types\Thing\CreativeWork\CreativeWork $value
     * @return static
     */
    function setIsBasedOn($value)
    {
        return $this->setProp('isBasedOn', $value);
    }

    /**
     * A list of single or combined accessModes that are sufficient to understand all the intellectual content of a resource. Values should
     * be drawn from the [approved vocabulary](https://www.w3.org/2021/a11y-discov-vocab/latest/#accessModeSufficient-vocabulary).
     * @param \Vnetby\Schemaorg\Types\Thing\Intangible\ItemList\ItemList $value
     * @return static
     */
    function setAccessModeSufficient($value)
    {
        return $this->setProp('accessModeSufficient', $value);
    }

    /**
     * The human sensory perceptual system or cognitive faculty through which a person may process or perceive information. Values should be drawn
     * from the [approved vocabulary](https://www.w3.org/2021/a11y-discov-vocab/latest/#accessMode-vocabulary).
     * @param \Vnetby\Schemaorg\DataTypes\DataText $value
     * @return static
     */
    function setAccessMode($value)
    {
        return $this->setProp('accessMode', $value);
    }

    /**
     * A secondary title of the CreativeWork.
     * @param \Vnetby\Schemaorg\DataTypes\DataText $value
     * @return static
     */
    function setAlternativeHeadline($value)
    {
        return $this->setProp('alternativeHeadline', $value);
    }

    /**
     * The predominant mode of learning supported by the learning resource. Acceptable values are 'active', 'expositive', or 'mixed'.
     * @param \Vnetby\Schemaorg\DataTypes\DataText $value
     * @return static
     */
    function setInteractivityType($value)
    {
        return $this->setProp('interactivityType', $value);
    }

    /**
     * Organization or person who adapts a creative work to different languages, regional differences and technical requirements of a target market, or
     * that translates during some event.
     * @param \Vnetby\Schemaorg\Types\Thing\Person\Person|\Vnetby\Schemaorg\Types\Thing\Organization\Organization $value
     * @return static
     */
    function setTranslator($value)
    {
        return $this->setProp('translator', $value);
    }

    /**
     * A secondary contributor to the CreativeWork or Event.
     * @param \Vnetby\Schemaorg\Types\Thing\Person\Person|\Vnetby\Schemaorg\Types\Thing\Organization\Organization $value
     * @return static
     */
    function setContributor($value)
    {
        return $this->setProp('contributor', $value);
    }

    /**
     * The quantity of the materials being described or an expression of the physical space they occupy.
     * @param \Vnetby\Schemaorg\Types\Thing\Intangible\StructuredValue\QuantitativeValue\QuantitativeValue|\Vnetby\Schemaorg\DataTypes\DataText $value
     * @return static
     */
    function setMaterialExtent($value)
    {
        return $this->setProp('[object Object]', $value);
    }

    /**
     * Comments, typically from users.
     * @param \Vnetby\Schemaorg\Types\Thing\CreativeWork\Comment\Comment $value
     * @return static
     */
    function setComment($value)
    {
        return $this->setProp('comment', $value);
    }

    /**
     * Indicates an item or CreativeWork that is part of this item, or CreativeWork (in some sense).
     * @param \Vnetby\Schemaorg\Types\Thing\CreativeWork\CreativeWork $value
     * @return static
     */
    function setHasPart($value)
    {
        return $this->setProp('hasPart', $value);
    }

    /**
     * A thumbnail image relevant to the Thing.
     * @param \Vnetby\Schemaorg\DataTypes\DataURL $value
     * @return static
     */
    function setThumbnailUrl($value)
    {
        return $this->setProp('thumbnailUrl', $value);
    }

    /**
     * Indicates that the resource is compatible with the referenced accessibility API. Values should be drawn from the [approved vocabulary](https://www.w3.org/2021/a11y-discov-vocab/latest/#accessibilityAPI-vocabulary).
     * @param \Vnetby\Schemaorg\DataTypes\DataText $value
     * @return static
     */
    function setAccessibilityAPI($value)
    {
        return $this->setProp('accessibilityAPI', $value);
    }

    /**
     * A license document that applies to this structured data, typically indicated by URL.
     * @param \Vnetby\Schemaorg\DataTypes\DataURL|\Vnetby\Schemaorg\Types\Thing\CreativeWork\CreativeWork $value
     * @return static
     */
    function setSdLicense($value)
    {
        return $this->setProp('sdLicense', $value);
    }

    /**
     * An embedded video object.
     * @param \Vnetby\Schemaorg\Types\Thing\CreativeWork\MediaObject\VideoObject\VideoObject|\Vnetby\Schemaorg\Types\Thing\CreativeWork\Clip\Clip $value
     * @return static
     */
    function setVideo($value)
    {
        return $this->setProp('video', $value);
    }

    /**
     * Indicates a correction to a [[CreativeWork]], either via a [[CorrectionComment]], textually or in another document.
     * @param \Vnetby\Schemaorg\Types\Thing\CreativeWork\Comment\CorrectionComment|\Vnetby\Schemaorg\DataTypes\DataURL|\Vnetby\Schemaorg\DataTypes\DataText $value
     * @return static
     */
    function setCorrection($value)
    {
        return $this->setProp('correction', $value);
    }

    /**
     * Used to indicate a specific claim contained, implied, translated or refined from the content of a [[MediaObject]] or other [[CreativeWork]]. The
     * interpreting party can be indicated using [[claimInterpreter]].
     * @param \Vnetby\Schemaorg\Types\Thing\CreativeWork\Claim $value
     * @return static
     */
    function setInterpretedAsClaim($value)
    {
        return $this->setProp('interpretedAsClaim', $value);
    }

    /**
     * The place and time the release was issued, expressed as a PublicationEvent.
     * @param \Vnetby\Schemaorg\Types\Thing\Event\PublicationEvent\PublicationEvent $value
     * @return static
     */
    function setReleasedEvent($value)
    {
        return $this->setProp('releasedEvent', $value);
    }

    /**
     * A maintainer of a [[Dataset]], software package ([[SoftwareApplication]]), or other [[Project]]. A maintainer is a [[Person]] or [[Organization]] that manages contributions
     * to, and/or publication of, some (typically complex) artifact. It is common for distributions of software and data to be based on
     * "upstream" sources. When [[maintainer]] is applied to a specific version of something e.g. a particular version or packaging of a [[Dataset]],
     * it is always possible that the upstream source has a different maintainer. The [[isBasedOn]] property can be used to indicate such
     * relationships between datasets to make the different maintenance roles clear. Similarly in the case of software, a package may have dedicated
     * maintainers working on integration into software distributions such as Ubuntu, as well as upstream maintainers of the underlying work. 
     * @param \Vnetby\Schemaorg\Types\Thing\Person\Person|\Vnetby\Schemaorg\Types\Thing\Organization\Organization $value
     * @return static
     */
    function setMaintainer($value)
    {
        return $this->setProp('maintainer', $value);
    }

    /**
     * Indicates the date on which the current structured data was generated / published. Typically used alongside [[sdPublisher]].
     * @param \Vnetby\Schemaorg\DataTypes\DataDate $value
     * @return static
     */
    function setSdDatePublished($value)
    {
        return $this->setProp('sdDatePublished', $value);
    }

    /**
     * Content features of the resource, such as accessible media, alternatives and supported enhancements for accessibility. Values should be drawn from the
     * [approved vocabulary](https://www.w3.org/2021/a11y-discov-vocab/latest/#accessibilityFeature-vocabulary).
     * @param \Vnetby\Schemaorg\DataTypes\DataText $value
     * @return static
     */
    function setAccessibilityFeature($value)
    {
        return $this->setProp('accessibilityFeature', $value);
    }

    /**
     * Official rating of a piece of content&#x2014;for example, 'MPAA PG-13'.
     * @param \Vnetby\Schemaorg\Types\Thing\Intangible\Rating\Rating|\Vnetby\Schemaorg\DataTypes\DataText $value
     * @return static
     */
    function setContentRating($value)
    {
        return $this->setProp('contentRating', $value);
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
     * Genre of the creative work, broadcast channel or group.
     * @param \Vnetby\Schemaorg\DataTypes\DataText|\Vnetby\Schemaorg\DataTypes\DataURL $value
     * @return static
     */
    function setGenre($value)
    {
        return $this->setProp('genre', $value);
    }

    /**
     * The "spatial" property can be used in cases when more specific properties (e.g. [[locationCreated]], [[spatialCoverage]], [[contentLocation]]) are not known to be
     * appropriate.
     * @param \Vnetby\Schemaorg\Types\Thing\Place\Place $value
     * @return static
     */
    function setSpatial($value)
    {
        return $this->setProp('spatial', $value);
    }

    /**
     * Media type typically expressed using a MIME format (see [IANA site](http://www.iana.org/assignments/media-types/media-types.xhtml) and [MDN reference](https://developer.mozilla.org/en-US/docs/Web/HTTP/Basics_of_HTTP/MIME_types)), e.g. application/zip for a SoftwareApplication binary, audio/mpeg
     * for .mp3 etc. In cases where a [[CreativeWork]] has several media type representations, [[encoding]] can be used to indicate each [[MediaObject]]
     * alongside particular [[encodingFormat]] information. Unregistered or niche encoding and file formats can be indicated instead via the most appropriate URL, e.g.
     * defining Web page or a Wikipedia/Wikidata entry.
     * @param \Vnetby\Schemaorg\DataTypes\DataText|\Vnetby\Schemaorg\DataTypes\DataURL $value
     * @return static
     */
    function setEncodingFormat($value)
    {
        return $this->setProp('encodingFormat', $value);
    }

    /**
     * The Organization on whose behalf the creator was working.
     * @param \Vnetby\Schemaorg\Types\Thing\Organization\Organization $value
     * @return static
     */
    function setSourceOrganization($value)
    {
        return $this->setProp('sourceOrganization', $value);
    }

    /**
     * The Event where the CreativeWork was recorded. The CreativeWork may capture all or part of the event.
     * @param \Vnetby\Schemaorg\Types\Thing\Event\Event $value
     * @return static
     */
    function setRecordedAt($value)
    {
        return $this->setProp('recordedAt', $value);
    }

    /**
     * Indicates a page or other link involved in archival of a [[CreativeWork]]. In the case of [[MediaReview]], the items in a
     * [[MediaReviewItem]] may often become inaccessible, but be archived by archival, journalistic, activist, or law enforcement organizations. In such cases, the referenced
     * page may not directly publish the content.
     * @return \Vnetby\Schemaorg\Types\Thing\CreativeWork\WebPage\WebPage|\Vnetby\Schemaorg\DataTypes\DataURL|null
     */
    function getArchivedAt()
    {
        return $this->getProp('archivedAt');
    }

    /**
     * A pattern that something has, for example 'polka dot', 'striped', 'Canadian flag'. Values are typically expressed as text, although links to
     * controlled value schemes are also supported.
     * @return \Vnetby\Schemaorg\DataTypes\DataText|\Vnetby\Schemaorg\Types\Thing\Intangible\DefinedTerm\DefinedTerm|null
     */
    function getPattern()
    {
        return $this->getProp('pattern');
    }

    /**
     * An embedded audio object.
     * @return \Vnetby\Schemaorg\Types\Thing\CreativeWork\Clip\Clip|\Vnetby\Schemaorg\Types\Thing\CreativeWork\MediaObject\AudioObject\AudioObject|\Vnetby\Schemaorg\Types\Thing\CreativeWork\MusicRecording|null
     */
    function getAudio()
    {
        return $this->getProp('audio');
    }

    /**
     * Date the content expires and is no longer useful or available. For example a [[VideoObject]] or [[NewsArticle]] whose availability or relevance
     * is time-limited, or a [[ClaimReview]] fact check whose publisher wants to indicate that it may no longer be relevant (or helpful
     * to highlight) after some date.
     * @return \Vnetby\Schemaorg\DataTypes\DataDateTime|\Vnetby\Schemaorg\DataTypes\DataDate|null
     */
    function getExpires()
    {
        return $this->getProp('expires');
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
     * The textual content of this CreativeWork.
     * @return \Vnetby\Schemaorg\DataTypes\DataText|null
     */
    function getText()
    {
        return $this->getProp('text');
    }

    /**
     * A flag to signal that the item, event, or place is accessible for free.
     * @return \Vnetby\Schemaorg\DataTypes\DataBoolean|null
     */
    function getIsAccessibleForFree()
    {
        return $this->getProp('isAccessibleForFree');
    }

    /**
     * A publication event associated with the item.
     * @return \Vnetby\Schemaorg\Types\Thing\Event\PublicationEvent\PublicationEvent|null
     */
    function getPublication()
    {
        return $this->getProp('publication');
    }

    /**
     * A human-readable summary of specific accessibility features or deficiencies, consistent with the other accessibility metadata but expressing subtleties such as "short
     * descriptions are present but long descriptions will be needed for non-visual users" or "short descriptions are present and no long descriptions
     * are needed".
     * @return \Vnetby\Schemaorg\DataTypes\DataText|null
     */
    function getAccessibilitySummary()
    {
        return $this->getProp('accessibilitySummary');
    }

    /**
     * The item being described is intended to help a person learn the competency or learning outcome defined by the referenced term.
     * @return \Vnetby\Schemaorg\DataTypes\DataText|\Vnetby\Schemaorg\Types\Thing\Intangible\DefinedTerm\DefinedTerm|null
     */
    function getTeaches()
    {
        return $this->getProp('teaches');
    }

    /**
     * Specifies the Person that is legally accountable for the CreativeWork.
     * @return \Vnetby\Schemaorg\Types\Thing\Person\Person|null
     */
    function getAccountablePerson()
    {
        return $this->getProp('accountablePerson');
    }

    /**
     * The "temporal" property can be used in cases where more specific properties (e.g. [[temporalCoverage]], [[dateCreated]], [[dateModified]], [[datePublished]]) are not known to
     * be appropriate.
     * @return \Vnetby\Schemaorg\DataTypes\DataDateTime|\Vnetby\Schemaorg\DataTypes\DataText|null
     */
    function getTemporal()
    {
        return $this->getProp('temporal');
    }

    /**
     * A standardized size of a product or creative work, specified either through a simple textual string (for example 'XL', '32Wx34L'), a
     * QuantitativeValue with a unitCode, or a comprehensive and structured [[SizeSpecification]]; in other cases, the [[width]], [[height]], [[depth]] and [[weight]] properties may
     * be more applicable. 
     * @return \Vnetby\Schemaorg\Types\Thing\Intangible\StructuredValue\QuantitativeValue\QuantitativeValue|\Vnetby\Schemaorg\DataTypes\DataText|\Vnetby\Schemaorg\Types\Thing\Intangible\DefinedTerm\DefinedTerm|\Vnetby\Schemaorg\Types\Thing\Intangible\Enumeration\QualitativeValue\SizeSpecification|null
     */
    function getSize()
    {
        return $this->getProp('size');
    }

    /**
     * The subject matter of the content.
     * @return \Vnetby\Schemaorg\Types\Thing\Thing|null
     */
    function getAbout()
    {
        return $this->getProp('about');
    }

    /**
     * A creative work that this work is an example/instance/realization/derivation of.
     * @return \Vnetby\Schemaorg\Types\Thing\CreativeWork\CreativeWork|null
     */
    function getExampleOfWork()
    {
        return $this->getProp('exampleOfWork');
    }

    /**
     * The work that this work has been translated from. E.g. 物种起源 is a translationOf “On the Origin of Species”.
     * @return \Vnetby\Schemaorg\Types\Thing\CreativeWork\CreativeWork|null
     */
    function getTranslationOfWork()
    {
        return $this->getProp('translationOfWork');
    }

    /**
     * The location where the CreativeWork was created, which may not be the same as the location depicted in the CreativeWork.
     * @return \Vnetby\Schemaorg\Types\Thing\Place\Place|null
     */
    function getLocationCreated()
    {
        return $this->getProp('locationCreated');
    }

    /**
     * Indicates the party responsible for generating and publishing the current structured data markup, typically in cases where the structured data is
     * derived automatically from existing published content but published on a different site. For example, student projects and open data initiatives often
     * re-publish existing content with more explicitly structured metadata. The [[sdPublisher]] property helps make such practices more explicit.
     * @return \Vnetby\Schemaorg\Types\Thing\Organization\Organization|\Vnetby\Schemaorg\Types\Thing\Person\Person|null
     */
    function getSdPublisher()
    {
        return $this->getProp('sdPublisher');
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
     * An abstract is a short description that summarizes a [[CreativeWork]].
     * @return \Vnetby\Schemaorg\DataTypes\DataText|null
     */
    function getAbstract()
    {
        return $this->getProp('abstract');
    }

    /**
     * Indicates (by URL or string) a particular version of a schema used in some CreativeWork. This property was created primarily to
     * indicate the use of a specific schema.org release, e.g. ```10.0``` as a simple string, or more explicitly via URL, ```https://schema.org/docs/releases.html#v10.0```. There
     * may be situations in which other schemas might usefully be referenced this way, e.g. ```http://dublincore.org/specifications/dublin-core/dces/1999-07-02/``` but this has not been carefully
     * explored in the community.
     * @return \Vnetby\Schemaorg\DataTypes\DataURL|\Vnetby\Schemaorg\DataTypes\DataText|null
     */
    function getSchemaVersion()
    {
        return $this->getProp('schemaVersion');
    }

    /**
     * A work that is a translation of the content of this work. E.g. 西遊記 has an English workTranslation “Journey to the
     * West”, a German workTranslation “Monkeys Pilgerfahrt” and a Vietnamese translation Tây du ký bình khảo.
     * @return \Vnetby\Schemaorg\Types\Thing\CreativeWork\CreativeWork|null
     */
    function getWorkTranslation()
    {
        return $this->getProp('workTranslation');
    }

    /**
     * Text that can be used to credit person(s) and/or organization(s) associated with a published Creative Work.
     * @return \Vnetby\Schemaorg\DataTypes\DataText|null
     */
    function getCreditText()
    {
        return $this->getProp('creditText');
    }

    /**
     * The purpose of a work in the context of education; for example, 'assignment', 'group work'.
     * @return \Vnetby\Schemaorg\DataTypes\DataText|\Vnetby\Schemaorg\Types\Thing\Intangible\DefinedTerm\DefinedTerm|null
     */
    function getEducationalUse()
    {
        return $this->getProp('educationalUse');
    }

    /**
     * The item being described is intended to assess the competency or learning outcome defined by the referenced term.
     * @return \Vnetby\Schemaorg\DataTypes\DataText|\Vnetby\Schemaorg\Types\Thing\Intangible\DefinedTerm\DefinedTerm|null
     */
    function getAssesses()
    {
        return $this->getProp('assesses');
    }

    /**
     * A link to the page containing the comments of the CreativeWork.
     * @return \Vnetby\Schemaorg\DataTypes\DataURL|null
     */
    function getDiscussionUrl()
    {
        return $this->getProp('discussionUrl');
    }

    /**
     * A characteristic of the described resource that is physiologically dangerous to some users. Related to WCAG 2.0 guideline 2.3. Values should
     * be drawn from the [approved vocabulary](https://www.w3.org/2021/a11y-discov-vocab/latest/#accessibilityHazard-vocabulary).
     * @return \Vnetby\Schemaorg\DataTypes\DataText|null
     */
    function getAccessibilityHazard()
    {
        return $this->getProp('accessibilityHazard');
    }

    /**
     * Example/instance/realization/derivation of the concept of this creative work. E.g. the paperback edition, first edition, or e-book.
     * @return \Vnetby\Schemaorg\Types\Thing\CreativeWork\CreativeWork|null
     */
    function getWorkExample()
    {
        return $this->getProp('workExample');
    }

    /**
     * The schema.org [[usageInfo]] property indicates further information about a [[CreativeWork]]. This property is applicable both to works that are freely available
     * and to those that require payment or other transactions. It can reference additional information, e.g. community expectations on preferred linking and
     * citation conventions, as well as purchasing details. For something that can be commercially licensed, usageInfo can provide detailed, resource-specific information about
     * licensing options. This property can be used alongside the license property which indicates license(s) applicable to some piece of content. The
     * usageInfo property can provide information about other licensing options, e.g. acquiring commercial usage rights for an image that is also available
     * under non-commercial creative commons licenses.
     * @return \Vnetby\Schemaorg\DataTypes\DataURL|\Vnetby\Schemaorg\Types\Thing\CreativeWork\CreativeWork|null
     */
    function getUsageInfo()
    {
        return $this->getProp('usageInfo');
    }

    /**
     * A license document that applies to this content, typically indicated by URL.
     * @return \Vnetby\Schemaorg\DataTypes\DataURL|\Vnetby\Schemaorg\Types\Thing\CreativeWork\CreativeWork|null
     */
    function getLicense()
    {
        return $this->getProp('license');
    }

    /**
     * The language of the content or performance or used in an action. Please use one of the language codes from the
     * [IETF BCP 47 standard](http://tools.ietf.org/html/bcp47). See also [[availableLanguage]].
     * @return \Vnetby\Schemaorg\DataTypes\DataText|\Vnetby\Schemaorg\Types\Thing\Intangible\Language|null
     */
    function getInLanguage()
    {
        return $this->getProp('inLanguage');
    }

    /**
     * An offer to provide this item&#x2014;for example, an offer to sell a product, rent the DVD of a movie, perform a
     * service, or give away tickets to an event. Use [[businessFunction]] to indicate the kind of transaction offered, i.e. sell, lease, etc.
     * This property can also be used to describe a [[Demand]]. While this property is listed as expected on a number of
     * common types, it can be used in others. In that case, using a second type, such as Product or a subtype
     * of Product, can clarify the nature of the offer. 
     * @return \Vnetby\Schemaorg\Types\Thing\Intangible\Demand|\Vnetby\Schemaorg\Types\Thing\Intangible\Offer\Offer|null
     */
    function getOffers()
    {
        return $this->getProp('offers');
    }

    /**
     * The country of origin of something, including products as well as creative works such as movie and TV content. In the
     * case of TV and movie, this would be the country of the principle offices of the production company or individual responsible
     * for the movie. For other kinds of [[CreativeWork]] it is difficult to provide fully general guidance, and properties such as [[contentLocation]]
     * and [[locationCreated]] may be more applicable. In the case of products, the country of origin of the product. The exact interpretation
     * of this may vary by context and product type, and cannot be fully enumerated here.
     * @return \Vnetby\Schemaorg\Types\Thing\Place\AdministrativeArea\Country|null
     */
    function getCountryOfOrigin()
    {
        return $this->getProp('countryOfOrigin');
    }

    /**
     * Indicates that the CreativeWork contains a reference to, but is not necessarily about a concept.
     * @return \Vnetby\Schemaorg\Types\Thing\Thing|null
     */
    function getMentions()
    {
        return $this->getProp('mentions');
    }

    /**
     * The person or organization who produced the work (e.g. music album, movie, TV/radio series etc.).
     * @return \Vnetby\Schemaorg\Types\Thing\Organization\Organization|\Vnetby\Schemaorg\Types\Thing\Person\Person|null
     */
    function getProducer()
    {
        return $this->getProp('producer');
    }

    /**
     * The publishing division which published the comic.
     * @return \Vnetby\Schemaorg\Types\Thing\Organization\Organization|null
     */
    function getPublisherImprint()
    {
        return $this->getProp('publisherImprint');
    }

    /**
     * The predominant type or kind characterizing the learning resource. For example, 'presentation', 'handout'.
     * @return \Vnetby\Schemaorg\DataTypes\DataText|\Vnetby\Schemaorg\Types\Thing\Intangible\DefinedTerm\DefinedTerm|null
     */
    function getLearningResourceType()
    {
        return $this->getProp('learningResourceType');
    }

    /**
     * The author of this content or rating. Please note that author is special in that HTML 5 provides a special mechanism
     * for indicating authorship via the rel tag. That is equivalent to this and may be used interchangeably.
     * @return \Vnetby\Schemaorg\Types\Thing\Organization\Organization|\Vnetby\Schemaorg\Types\Thing\Person\Person|null
     */
    function getAuthor()
    {
        return $this->getProp('author');
    }

    /**
     * The date on which the CreativeWork was created or the item was added to a DataFeed.
     * @return \Vnetby\Schemaorg\DataTypes\DataDate|\Vnetby\Schemaorg\DataTypes\DataDateTime|null
     */
    function getDateCreated()
    {
        return $this->getProp('dateCreated');
    }

    /**
     * Indicates an item or CreativeWork that this item, or CreativeWork (in some sense), is part of.
     * @return \Vnetby\Schemaorg\DataTypes\DataURL|\Vnetby\Schemaorg\Types\Thing\CreativeWork\CreativeWork|null
     */
    function getIsPartOf()
    {
        return $this->getProp('isPartOf');
    }

    /**
     * Fictional person connected with a creative work.
     * @return \Vnetby\Schemaorg\Types\Thing\Person\Person|null
     */
    function getCharacter()
    {
        return $this->getProp('character');
    }

    /**
     * An intended audience, i.e. a group for whom something was created.
     * @return \Vnetby\Schemaorg\Types\Thing\Intangible\Audience\Audience|null
     */
    function getAudience()
    {
        return $this->getProp('audience');
    }

    /**
     * The level in terms of progression through an educational or training context. Examples of educational levels include 'beginner', 'intermediate' or 'advanced',
     * and formal sets of level indicators.
     * @return \Vnetby\Schemaorg\DataTypes\DataURL|\Vnetby\Schemaorg\DataTypes\DataText|\Vnetby\Schemaorg\Types\Thing\Intangible\DefinedTerm\DefinedTerm|null
     */
    function getEducationalLevel()
    {
        return $this->getProp('educationalLevel');
    }

    /**
     * Identifies input methods that are sufficient to fully control the described resource. Values should be drawn from the [approved vocabulary](https://www.w3.org/2021/a11y-discov-vocab/latest/#accessibilityControl-vocabulary).
     * @return \Vnetby\Schemaorg\DataTypes\DataText|null
     */
    function getAccessibilityControl()
    {
        return $this->getProp('accessibilityControl');
    }

    /**
     * Indicates whether this content is family friendly.
     * @return \Vnetby\Schemaorg\DataTypes\DataBoolean|null
     */
    function getIsFamilyFriendly()
    {
        return $this->getProp('isFamilyFriendly');
    }

    /**
     * The position of an item in a series or sequence of items.
     * @return \Vnetby\Schemaorg\DataTypes\DataText|\Vnetby\Schemaorg\DataTypes\DataInteger|null
     */
    function getPosition()
    {
        return $this->getProp('position');
    }

    /**
     * Conditions that affect the availability of, or method(s) of access to, an item. Typically used for real world items such as
     * an [[ArchiveComponent]] held by an [[ArchiveOrganization]]. This property is not suitable for use as a general Web access control mechanism. It
     * is expressed only in natural language.\n\nFor example "Available by appointment from the Reading Room" or "Accessible only from logged-in accounts ".
     * 
     * @return \Vnetby\Schemaorg\DataTypes\DataText|null
     */
    function getConditionsOfAccess()
    {
        return $this->getProp('conditionsOfAccess');
    }

    /**
     * Date of first broadcast/publication.
     * @return \Vnetby\Schemaorg\DataTypes\DataDateTime|\Vnetby\Schemaorg\DataTypes\DataDate|null
     */
    function getDatePublished()
    {
        return $this->getProp('datePublished');
    }

    /**
     * The temporalCoverage of a CreativeWork indicates the period that the content applies to, i.e. that it describes, either as a DateTime
     * or as a textual string indicating a time period in [ISO 8601 time interval format](https://en.wikipedia.org/wiki/ISO_8601#Time_intervals). In the case of a Dataset
     * it will typically indicate the relevant time period in a precise notation (e.g. for a 2011 census dataset, the year 2011
     * would be written "2011/2012"). Other forms of content, e.g. ScholarlyArticle, Book, TVSeries or TVEpisode, may indicate their temporalCoverage in broader terms
     * - textually or via well-known URL. Written works such as books may sometimes have precise temporal coverage too, e.g. a work
     * set in 1939 - 1945 can be indicated in ISO 8601 interval format format via "1939/1945". Open-ended date ranges can be
     * written with ".." in place of the end date. For example, "2015-11/.." indicates a range beginning in November 2015 and with
     * no specified final date. This is tentative and might be updated in future when ISO 8601 is officially updated.
     * @return \Vnetby\Schemaorg\DataTypes\DataDateTime|\Vnetby\Schemaorg\DataTypes\DataURL|\Vnetby\Schemaorg\DataTypes\DataText|null
     */
    function getTemporalCoverage()
    {
        return $this->getProp('temporalCoverage');
    }

    /**
     * The location depicted or described in the content. For example, the location in a photograph or painting.
     * @return \Vnetby\Schemaorg\Types\Thing\Place\Place|null
     */
    function getContentLocation()
    {
        return $this->getProp('contentLocation');
    }

    /**
     * The status of a creative work in terms of its stage in a lifecycle. Example terms include Incomplete, Draft, Published, Obsolete.
     * Some organizations define a set of terms for the stages of their publication lifecycle.
     * @return \Vnetby\Schemaorg\DataTypes\DataText|\Vnetby\Schemaorg\Types\Thing\Intangible\DefinedTerm\DefinedTerm|null
     */
    function getCreativeWorkStatus()
    {
        return $this->getProp('creativeWorkStatus');
    }

    /**
     * The specific time described by a creative work, for works (e.g. articles, video objects etc.) that emphasise a particular moment within
     * an Event.
     * @return \Vnetby\Schemaorg\DataTypes\DataDateTime|null
     */
    function getContentReferenceTime()
    {
        return $this->getProp('contentReferenceTime');
    }

    /**
     * The spatialCoverage of a CreativeWork indicates the place(s) which are the focus of the content. It is a subproperty of contentLocation
     * intended primarily for more technical and detailed materials. For example with a Dataset, it indicates areas that the dataset describes: a
     * dataset of New York weather would have spatialCoverage which was the place: the state of New York.
     * @return \Vnetby\Schemaorg\Types\Thing\Place\Place|null
     */
    function getSpatialCoverage()
    {
        return $this->getProp('spatialCoverage');
    }

    /**
     * A media object that encodes this CreativeWork. This property is a synonym for associatedMedia.
     * @return \Vnetby\Schemaorg\Types\Thing\CreativeWork\MediaObject\MediaObject|null
     */
    function getEncoding()
    {
        return $this->getProp('encoding');
    }

    /**
     * An [EIDR](https://eidr.org/) (Entertainment Identifier Registry) [[identifier]] representing a specific edit / edition for a work of film or television. For example,
     * the motion picture known as "Ghostbusters" whose [[titleEIDR]] is "10.5240/7EC7-228A-510A-053E-CBB8-J" has several edits, e.g. "10.5240/1F2A-E1C5-680A-14C6-E76B-I" and "10.5240/8A35-3BEE-6497-5D12-9E4F-3". Since schema.org types like
     * [[Movie]] and [[TVEpisode]] can be used for both works and their multiple expressions, it is possible to use [[titleEIDR]] alone (for
     * a general description), or alongside [[editEIDR]] for a more edit-specific description. 
     * @return \Vnetby\Schemaorg\DataTypes\DataURL|\Vnetby\Schemaorg\DataTypes\DataText|null
     */
    function getEditEIDR()
    {
        return $this->getProp('editEIDR');
    }

    /**
     * The party holding the legal copyright to the CreativeWork.
     * @return \Vnetby\Schemaorg\Types\Thing\Person\Person|\Vnetby\Schemaorg\Types\Thing\Organization\Organization|null
     */
    function getCopyrightHolder()
    {
        return $this->getProp('copyrightHolder');
    }

    /**
     * The service provider, service operator, or service performer; the goods producer. Another party (a seller) may offer those services or goods
     * on behalf of the provider. A provider may also serve as the seller.
     * @return \Vnetby\Schemaorg\Types\Thing\Organization\Organization|\Vnetby\Schemaorg\Types\Thing\Person\Person|null
     */
    function getProvider()
    {
        return $this->getProp('provider');
    }

    /**
     * The date on which the CreativeWork was most recently modified or when the item's entry was modified within a DataFeed.
     * @return \Vnetby\Schemaorg\DataTypes\DataDate|\Vnetby\Schemaorg\DataTypes\DataDateTime|null
     */
    function getDateModified()
    {
        return $this->getProp('dateModified');
    }

    /**
     * A citation or reference to another creative work, such as another publication, web page, scholarly article, etc.
     * @return \Vnetby\Schemaorg\Types\Thing\CreativeWork\CreativeWork|\Vnetby\Schemaorg\DataTypes\DataText|null
     */
    function getCitation()
    {
        return $this->getProp('citation');
    }

    /**
     * Specifies the Person who edited the CreativeWork.
     * @return \Vnetby\Schemaorg\Types\Thing\Person\Person|null
     */
    function getEditor()
    {
        return $this->getProp('editor');
    }

    /**
     * Indicates the primary entity described in some page or other CreativeWork.
     * @return \Vnetby\Schemaorg\Types\Thing\Thing|null
     */
    function getMainEntity()
    {
        return $this->getProp('mainEntity');
    }

    /**
     * Thumbnail image for an image or video.
     * @return \Vnetby\Schemaorg\Types\Thing\CreativeWork\MediaObject\ImageObject\ImageObject|null
     */
    function getThumbnail()
    {
        return $this->getProp('thumbnail');
    }

    /**
     * Text of a notice appropriate for describing the copyright aspects of this Creative Work, ideally indicating the owner of the copyright
     * for the Work.
     * @return \Vnetby\Schemaorg\DataTypes\DataText|null
     */
    function getCopyrightNotice()
    {
        return $this->getProp('copyrightNotice');
    }

    /**
     * Approximate or typical time it usually takes to work with or through the content of this work for the typical or
     * target audience.
     * @return \Vnetby\Schemaorg\Types\Thing\Intangible\Quantity\Duration|null
     */
    function getTimeRequired()
    {
        return $this->getProp('timeRequired');
    }

    /**
     * The typical expected age range, e.g. '7-9', '11-'.
     * @return \Vnetby\Schemaorg\DataTypes\DataText|null
     */
    function getTypicalAgeRange()
    {
        return $this->getProp('typicalAgeRange');
    }

    /**
     * An alignment to an established educational framework. This property should not be used where the nature of the alignment can be
     * described using a simple property, for example to express that a resource [[teaches]] or [[assesses]] a competency.
     * @return \Vnetby\Schemaorg\Types\Thing\Intangible\AlignmentObject|null
     */
    function getEducationalAlignment()
    {
        return $this->getProp('educationalAlignment');
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
     * Headline of the article.
     * @return \Vnetby\Schemaorg\DataTypes\DataText|null
     */
    function getHeadline()
    {
        return $this->getProp('headline');
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
     * A person or organization that supports (sponsors) something through some kind of financial contribution.
     * @return \Vnetby\Schemaorg\Types\Thing\Person\Person|\Vnetby\Schemaorg\Types\Thing\Organization\Organization|null
     */
    function getFunder()
    {
        return $this->getProp('funder');
    }

    /**
     * The publisher of the creative work.
     * @return \Vnetby\Schemaorg\Types\Thing\Organization\Organization|\Vnetby\Schemaorg\Types\Thing\Person\Person|null
     */
    function getPublisher()
    {
        return $this->getProp('publisher');
    }

    /**
     * Indicates a page documenting how licenses can be purchased or otherwise acquired, for the current item.
     * @return \Vnetby\Schemaorg\DataTypes\DataURL|\Vnetby\Schemaorg\Types\Thing\CreativeWork\CreativeWork|null
     */
    function getAcquireLicensePage()
    {
        return $this->getProp('acquireLicensePage');
    }

    /**
     * The number of comments this CreativeWork (e.g. Article, Question or Answer) has received. This is most applicable to works published in
     * Web sites with commenting system; additional comments may exist elsewhere.
     * @return \Vnetby\Schemaorg\DataTypes\DataInteger|null
     */
    function getCommentCount()
    {
        return $this->getProp('commentCount');
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
     * The year during which the claimed copyright for the CreativeWork was first asserted.
     * @return \Vnetby\Schemaorg\DataTypes\DataNumber|null
     */
    function getCopyrightYear()
    {
        return $this->getProp('copyrightYear');
    }

    /**
     * The creator/author of this CreativeWork. This is the same as the Author property for CreativeWork.
     * @return \Vnetby\Schemaorg\Types\Thing\Person\Person|\Vnetby\Schemaorg\Types\Thing\Organization\Organization|null
     */
    function getCreator()
    {
        return $this->getProp('creator');
    }

    /**
     * A media object that encodes this CreativeWork. This property is a synonym for encoding.
     * @return \Vnetby\Schemaorg\Types\Thing\CreativeWork\MediaObject\MediaObject|null
     */
    function getAssociatedMedia()
    {
        return $this->getProp('associatedMedia');
    }

    /**
     * A material that something is made from, e.g. leather, wool, cotton, paper.
     * @return \Vnetby\Schemaorg\DataTypes\DataURL|\Vnetby\Schemaorg\Types\Thing\Product\Product|\Vnetby\Schemaorg\DataTypes\DataText|null
     */
    function getMaterial()
    {
        return $this->getProp('material');
    }

    /**
     * The version of the CreativeWork embodied by a specified resource.
     * @return \Vnetby\Schemaorg\DataTypes\DataText|\Vnetby\Schemaorg\DataTypes\DataNumber|null
     */
    function getVersion()
    {
        return $this->getProp('version');
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
     * A resource from which this work is derived or from which it is a modification or adaptation.
     * @return \Vnetby\Schemaorg\DataTypes\DataURL|\Vnetby\Schemaorg\Types\Thing\Product\Product|\Vnetby\Schemaorg\Types\Thing\CreativeWork\CreativeWork|null
     */
    function getIsBasedOn()
    {
        return $this->getProp('isBasedOn');
    }

    /**
     * A list of single or combined accessModes that are sufficient to understand all the intellectual content of a resource. Values should
     * be drawn from the [approved vocabulary](https://www.w3.org/2021/a11y-discov-vocab/latest/#accessModeSufficient-vocabulary).
     * @return \Vnetby\Schemaorg\Types\Thing\Intangible\ItemList\ItemList|null
     */
    function getAccessModeSufficient()
    {
        return $this->getProp('accessModeSufficient');
    }

    /**
     * The human sensory perceptual system or cognitive faculty through which a person may process or perceive information. Values should be drawn
     * from the [approved vocabulary](https://www.w3.org/2021/a11y-discov-vocab/latest/#accessMode-vocabulary).
     * @return \Vnetby\Schemaorg\DataTypes\DataText|null
     */
    function getAccessMode()
    {
        return $this->getProp('accessMode');
    }

    /**
     * A secondary title of the CreativeWork.
     * @return \Vnetby\Schemaorg\DataTypes\DataText|null
     */
    function getAlternativeHeadline()
    {
        return $this->getProp('alternativeHeadline');
    }

    /**
     * The predominant mode of learning supported by the learning resource. Acceptable values are 'active', 'expositive', or 'mixed'.
     * @return \Vnetby\Schemaorg\DataTypes\DataText|null
     */
    function getInteractivityType()
    {
        return $this->getProp('interactivityType');
    }

    /**
     * Organization or person who adapts a creative work to different languages, regional differences and technical requirements of a target market, or
     * that translates during some event.
     * @return \Vnetby\Schemaorg\Types\Thing\Person\Person|\Vnetby\Schemaorg\Types\Thing\Organization\Organization|null
     */
    function getTranslator()
    {
        return $this->getProp('translator');
    }

    /**
     * A secondary contributor to the CreativeWork or Event.
     * @return \Vnetby\Schemaorg\Types\Thing\Person\Person|\Vnetby\Schemaorg\Types\Thing\Organization\Organization|null
     */
    function getContributor()
    {
        return $this->getProp('contributor');
    }

    /**
     * The quantity of the materials being described or an expression of the physical space they occupy.
     * @return \Vnetby\Schemaorg\Types\Thing\Intangible\StructuredValue\QuantitativeValue\QuantitativeValue|\Vnetby\Schemaorg\DataTypes\DataText|null
     */
    function getMaterialExtent()
    {
        return $this->getProp('[object Object]');
    }

    /**
     * Comments, typically from users.
     * @return \Vnetby\Schemaorg\Types\Thing\CreativeWork\Comment\Comment|null
     */
    function getComment()
    {
        return $this->getProp('comment');
    }

    /**
     * Indicates an item or CreativeWork that is part of this item, or CreativeWork (in some sense).
     * @return \Vnetby\Schemaorg\Types\Thing\CreativeWork\CreativeWork|null
     */
    function getHasPart()
    {
        return $this->getProp('hasPart');
    }

    /**
     * A thumbnail image relevant to the Thing.
     * @return \Vnetby\Schemaorg\DataTypes\DataURL|null
     */
    function getThumbnailUrl()
    {
        return $this->getProp('thumbnailUrl');
    }

    /**
     * Indicates that the resource is compatible with the referenced accessibility API. Values should be drawn from the [approved vocabulary](https://www.w3.org/2021/a11y-discov-vocab/latest/#accessibilityAPI-vocabulary).
     * @return \Vnetby\Schemaorg\DataTypes\DataText|null
     */
    function getAccessibilityAPI()
    {
        return $this->getProp('accessibilityAPI');
    }

    /**
     * A license document that applies to this structured data, typically indicated by URL.
     * @return \Vnetby\Schemaorg\DataTypes\DataURL|\Vnetby\Schemaorg\Types\Thing\CreativeWork\CreativeWork|null
     */
    function getSdLicense()
    {
        return $this->getProp('sdLicense');
    }

    /**
     * An embedded video object.
     * @return \Vnetby\Schemaorg\Types\Thing\CreativeWork\MediaObject\VideoObject\VideoObject|\Vnetby\Schemaorg\Types\Thing\CreativeWork\Clip\Clip|null
     */
    function getVideo()
    {
        return $this->getProp('video');
    }

    /**
     * Indicates a correction to a [[CreativeWork]], either via a [[CorrectionComment]], textually or in another document.
     * @return \Vnetby\Schemaorg\Types\Thing\CreativeWork\Comment\CorrectionComment|\Vnetby\Schemaorg\DataTypes\DataURL|\Vnetby\Schemaorg\DataTypes\DataText|null
     */
    function getCorrection()
    {
        return $this->getProp('correction');
    }

    /**
     * Used to indicate a specific claim contained, implied, translated or refined from the content of a [[MediaObject]] or other [[CreativeWork]]. The
     * interpreting party can be indicated using [[claimInterpreter]].
     * @return \Vnetby\Schemaorg\Types\Thing\CreativeWork\Claim|null
     */
    function getInterpretedAsClaim()
    {
        return $this->getProp('interpretedAsClaim');
    }

    /**
     * The place and time the release was issued, expressed as a PublicationEvent.
     * @return \Vnetby\Schemaorg\Types\Thing\Event\PublicationEvent\PublicationEvent|null
     */
    function getReleasedEvent()
    {
        return $this->getProp('releasedEvent');
    }

    /**
     * A maintainer of a [[Dataset]], software package ([[SoftwareApplication]]), or other [[Project]]. A maintainer is a [[Person]] or [[Organization]] that manages contributions
     * to, and/or publication of, some (typically complex) artifact. It is common for distributions of software and data to be based on
     * "upstream" sources. When [[maintainer]] is applied to a specific version of something e.g. a particular version or packaging of a [[Dataset]],
     * it is always possible that the upstream source has a different maintainer. The [[isBasedOn]] property can be used to indicate such
     * relationships between datasets to make the different maintenance roles clear. Similarly in the case of software, a package may have dedicated
     * maintainers working on integration into software distributions such as Ubuntu, as well as upstream maintainers of the underlying work. 
     * @return \Vnetby\Schemaorg\Types\Thing\Person\Person|\Vnetby\Schemaorg\Types\Thing\Organization\Organization|null
     */
    function getMaintainer()
    {
        return $this->getProp('maintainer');
    }

    /**
     * Indicates the date on which the current structured data was generated / published. Typically used alongside [[sdPublisher]].
     * @return \Vnetby\Schemaorg\DataTypes\DataDate|null
     */
    function getSdDatePublished()
    {
        return $this->getProp('sdDatePublished');
    }

    /**
     * Content features of the resource, such as accessible media, alternatives and supported enhancements for accessibility. Values should be drawn from the
     * [approved vocabulary](https://www.w3.org/2021/a11y-discov-vocab/latest/#accessibilityFeature-vocabulary).
     * @return \Vnetby\Schemaorg\DataTypes\DataText|null
     */
    function getAccessibilityFeature()
    {
        return $this->getProp('accessibilityFeature');
    }

    /**
     * Official rating of a piece of content&#x2014;for example, 'MPAA PG-13'.
     * @return \Vnetby\Schemaorg\Types\Thing\Intangible\Rating\Rating|\Vnetby\Schemaorg\DataTypes\DataText|null
     */
    function getContentRating()
    {
        return $this->getProp('contentRating');
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
     * Genre of the creative work, broadcast channel or group.
     * @return \Vnetby\Schemaorg\DataTypes\DataText|\Vnetby\Schemaorg\DataTypes\DataURL|null
     */
    function getGenre()
    {
        return $this->getProp('genre');
    }

    /**
     * The "spatial" property can be used in cases when more specific properties (e.g. [[locationCreated]], [[spatialCoverage]], [[contentLocation]]) are not known to be
     * appropriate.
     * @return \Vnetby\Schemaorg\Types\Thing\Place\Place|null
     */
    function getSpatial()
    {
        return $this->getProp('spatial');
    }

    /**
     * Media type typically expressed using a MIME format (see [IANA site](http://www.iana.org/assignments/media-types/media-types.xhtml) and [MDN reference](https://developer.mozilla.org/en-US/docs/Web/HTTP/Basics_of_HTTP/MIME_types)), e.g. application/zip for a SoftwareApplication binary, audio/mpeg
     * for .mp3 etc. In cases where a [[CreativeWork]] has several media type representations, [[encoding]] can be used to indicate each [[MediaObject]]
     * alongside particular [[encodingFormat]] information. Unregistered or niche encoding and file formats can be indicated instead via the most appropriate URL, e.g.
     * defining Web page or a Wikipedia/Wikidata entry.
     * @return \Vnetby\Schemaorg\DataTypes\DataText|\Vnetby\Schemaorg\DataTypes\DataURL|null
     */
    function getEncodingFormat()
    {
        return $this->getProp('encodingFormat');
    }

    /**
     * The Organization on whose behalf the creator was working.
     * @return \Vnetby\Schemaorg\Types\Thing\Organization\Organization|null
     */
    function getSourceOrganization()
    {
        return $this->getProp('sourceOrganization');
    }

    /**
     * The Event where the CreativeWork was recorded. The CreativeWork may capture all or part of the event.
     * @return \Vnetby\Schemaorg\Types\Thing\Event\Event|null
     */
    function getRecordedAt()
    {
        return $this->getProp('recordedAt');
    }
}
