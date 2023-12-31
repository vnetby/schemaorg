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
     * Indicates (by URL or string) a particular version of a schema used in some CreativeWork. This property was created primarily to
     * indicate the use of a specific schema.org release, e.g. ```10.0``` as a simple string, or more explicitly via URL, ```https://schema.org/docs/releases.html#v10.0```. There
     * may be situations in which other schemas might usefully be referenced this way, e.g. ```http://dublincore.org/specifications/dublin-core/dces/1999-07-02/``` but this has not been carefully
     * explored in the community.
     * @var string|\Vnetby\Schemaorg\DataTypes\DataText|\Vnetby\Schemaorg\DataTypes\DataURL
     */
    public $schemaVersion;

    /**
     * The overall rating, based on a collection of reviews or ratings, of the item.
     * @var \Vnetby\Schemaorg\Types\Thing\Intangible\Rating\AggregateRating\AggregateRating
     */
    public $aggregateRating;

    /**
     * An intended audience, i.e. a group for whom something was created.
     * @var \Vnetby\Schemaorg\Types\Thing\Intangible\Audience\Audience
     */
    public $audience;

    /**
     * Indicates an IPTCDigitalSourceEnumeration code indicating the nature of the digital source(s) for some [[CreativeWork]].
     * @var \Vnetby\Schemaorg\Types\Thing\Intangible\Enumeration\MediaEnumeration\IPTCDigitalSourceEnumeration\IPTCDigitalSourceEnumeration
     */
    public $digitalSourceType;

    /**
     * The version of the CreativeWork embodied by a specified resource.
     * @var string|int|float|\Vnetby\Schemaorg\DataTypes\DataText|\Vnetby\Schemaorg\DataTypes\DataNumber
     */
    public $version;

    /**
     * Indicates the date on which the current structured data was generated / published. Typically used alongside [[sdPublisher]].
     * @var string|\Vnetby\Schemaorg\DataTypes\DataDate
     */
    public $sdDatePublished;

    /**
     * The service provider, service operator, or service performer; the goods producer. Another party (a seller) may offer those services or goods
     * on behalf of the provider. A provider may also serve as the seller.
     * @var \Vnetby\Schemaorg\Types\Thing\Organization\Organization|\Vnetby\Schemaorg\Types\Thing\Person\Person
     */
    public $provider;

    /**
     * The country of origin of something, including products as well as creative works such as movie and TV content. In the
     * case of TV and movie, this would be the country of the principle offices of the production company or individual responsible
     * for the movie. For other kinds of [[CreativeWork]] it is difficult to provide fully general guidance, and properties such as [[contentLocation]]
     * and [[locationCreated]] may be more applicable. In the case of products, the country of origin of the product. The exact interpretation
     * of this may vary by context and product type, and cannot be fully enumerated here.
     * @var \Vnetby\Schemaorg\Types\Thing\Place\AdministrativeArea\Country
     */
    public $countryOfOrigin;

    /**
     * Keywords or tags used to describe some item. Multiple textual entries in a keywords list are typically delimited by commas, or
     * by repeating the property.
     * @var string|\Vnetby\Schemaorg\DataTypes\DataURL|\Vnetby\Schemaorg\Types\Thing\Intangible\DefinedTerm\DefinedTerm|\Vnetby\Schemaorg\DataTypes\DataText
     */
    public $keywords;

    /**
     * Indicates a correction to a [[CreativeWork]], either via a [[CorrectionComment]], textually or in another document.
     * @var string|\Vnetby\Schemaorg\Types\Thing\CreativeWork\Comment\CorrectionComment|\Vnetby\Schemaorg\DataTypes\DataText|\Vnetby\Schemaorg\DataTypes\DataURL
     */
    public $correction;

    /**
     * The Organization on whose behalf the creator was working.
     * @var \Vnetby\Schemaorg\Types\Thing\Organization\Organization
     */
    public $sourceOrganization;

    /**
     * The language of the content or performance or used in an action. Please use one of the language codes from the
     * [IETF BCP 47 standard](http://tools.ietf.org/html/bcp47). See also [[availableLanguage]].
     * @var string|\Vnetby\Schemaorg\Types\Thing\Intangible\Language|\Vnetby\Schemaorg\DataTypes\DataText
     */
    public $inLanguage;

    /**
     * Official rating of a piece of content&#x2014;for example, 'MPAA PG-13'.
     * @var string|\Vnetby\Schemaorg\DataTypes\DataText|\Vnetby\Schemaorg\Types\Thing\Intangible\Rating\Rating
     */
    public $contentRating;

    /**
     * Specifies the Person that is legally accountable for the CreativeWork.
     * @var \Vnetby\Schemaorg\Types\Thing\Person\Person
     */
    public $accountablePerson;

    /**
     * The year during which the claimed copyright for the CreativeWork was first asserted.
     * @var string|int|float|\Vnetby\Schemaorg\DataTypes\DataNumber
     */
    public $copyrightYear;

    /**
     * The date on which the CreativeWork was most recently modified or when the item's entry was modified within a DataFeed.
     * @var string|\Vnetby\Schemaorg\DataTypes\DataDateTime|\Vnetby\Schemaorg\DataTypes\DataDate
     */
    public $dateModified;

    /**
     * The location depicted or described in the content. For example, the location in a photograph or painting.
     * @var \Vnetby\Schemaorg\Types\Thing\Place\Place
     */
    public $contentLocation;

    /**
     * The level in terms of progression through an educational or training context. Examples of educational levels include 'beginner', 'intermediate' or 'advanced',
     * and formal sets of level indicators.
     * @var string|\Vnetby\Schemaorg\DataTypes\DataURL|\Vnetby\Schemaorg\Types\Thing\Intangible\DefinedTerm\DefinedTerm|\Vnetby\Schemaorg\DataTypes\DataText
     */
    public $educationalLevel;

    /**
     * The textual content of this CreativeWork.
     * @var string|\Vnetby\Schemaorg\DataTypes\DataText
     */
    public $text;

    /**
     * Indicates that the resource is compatible with the referenced accessibility API. Values should be drawn from the [approved vocabulary](https://www.w3.org/2021/a11y-discov-vocab/latest/#accessibilityAPI-vocabulary).
     * @var string|\Vnetby\Schemaorg\DataTypes\DataText
     */
    public $accessibilityAPI;

    /**
     * The spatialCoverage of a CreativeWork indicates the place(s) which are the focus of the content. It is a subproperty of contentLocation
     * intended primarily for more technical and detailed materials. For example with a Dataset, it indicates areas that the dataset describes: a
     * dataset of New York weather would have spatialCoverage which was the place: the state of New York.
     * @var \Vnetby\Schemaorg\Types\Thing\Place\Place
     */
    public $spatialCoverage;

    /**
     * Approximate or typical time it usually takes to work with or through the content of this work for the typical or
     * target audience.
     * @var \Vnetby\Schemaorg\Types\Thing\Intangible\Quantity\Duration
     */
    public $timeRequired;

    /**
     * A person or organization that supports (sponsors) something through some kind of financial contribution.
     * @var \Vnetby\Schemaorg\Types\Thing\Organization\Organization|\Vnetby\Schemaorg\Types\Thing\Person\Person
     */
    public $funder;

    /**
     * A person or organization that supports a thing through a pledge, promise, or financial contribution. E.g. a sponsor of a Medical
     * Study or a corporate sponsor of an event.
     * @var \Vnetby\Schemaorg\Types\Thing\Organization\Organization|\Vnetby\Schemaorg\Types\Thing\Person\Person
     */
    public $sponsor;

    /**
     * The specific time described by a creative work, for works (e.g. articles, video objects etc.) that emphasise a particular moment within
     * an Event.
     * @var string|\Vnetby\Schemaorg\DataTypes\DataDateTime
     */
    public $contentReferenceTime;

    /**
     * The party holding the legal copyright to the CreativeWork.
     * @var \Vnetby\Schemaorg\Types\Thing\Person\Person|\Vnetby\Schemaorg\Types\Thing\Organization\Organization
     */
    public $copyrightHolder;

    /**
     * The Event where the CreativeWork was recorded. The CreativeWork may capture all or part of the event.
     * @var \Vnetby\Schemaorg\Types\Thing\Event\Event
     */
    public $recordedAt;

    /**
     * Genre of the creative work, broadcast channel or group.
     * @var string|\Vnetby\Schemaorg\DataTypes\DataURL|\Vnetby\Schemaorg\DataTypes\DataText
     */
    public $genre;

    /**
     * Conditions that affect the availability of, or method(s) of access to, an item. Typically used for real world items such as
     * an [[ArchiveComponent]] held by an [[ArchiveOrganization]]. This property is not suitable for use as a general Web access control mechanism. It
     * is expressed only in natural language.\n\nFor example "Available by appointment from the Reading Room" or "Accessible only from logged-in accounts ".
     * 
     * @var string|\Vnetby\Schemaorg\DataTypes\DataText
     */
    public $conditionsOfAccess;

    /**
     * The predominant type or kind characterizing the learning resource. For example, 'presentation', 'handout'.
     * @var string|\Vnetby\Schemaorg\Types\Thing\Intangible\DefinedTerm\DefinedTerm|\Vnetby\Schemaorg\DataTypes\DataText
     */
    public $learningResourceType;

    /**
     * Indicates a page or other link involved in archival of a [[CreativeWork]]. In the case of [[MediaReview]], the items in a
     * [[MediaReviewItem]] may often become inaccessible, but be archived by archival, journalistic, activist, or law enforcement organizations. In such cases, the referenced
     * page may not directly publish the content.
     * @var string|\Vnetby\Schemaorg\DataTypes\DataURL|\Vnetby\Schemaorg\Types\Thing\CreativeWork\WebPage\WebPage
     */
    public $archivedAt;

    /**
     * Example/instance/realization/derivation of the concept of this creative work. E.g. the paperback edition, first edition, or e-book.
     * @var \Vnetby\Schemaorg\Types\Thing\CreativeWork\CreativeWork
     */
    public $workExample;

    /**
     * A standardized size of a product or creative work, specified either through a simple textual string (for example 'XL', '32Wx34L'), a
     * QuantitativeValue with a unitCode, or a comprehensive and structured [[SizeSpecification]]; in other cases, the [[width]], [[height]], [[depth]] and [[weight]] properties may
     * be more applicable. 
     * @var string|\Vnetby\Schemaorg\Types\Thing\Intangible\DefinedTerm\DefinedTerm|\Vnetby\Schemaorg\Types\Thing\Intangible\StructuredValue\QuantitativeValue\QuantitativeValue|\Vnetby\Schemaorg\DataTypes\DataText|\Vnetby\Schemaorg\Types\Thing\Intangible\Enumeration\QualitativeValue\SizeSpecification
     */
    public $size;

    /**
     * Indicates that the CreativeWork contains a reference to, but is not necessarily about a concept.
     * @var \Vnetby\Schemaorg\Types\Thing\Thing
     */
    public $mentions;

    /**
     * Identifies input methods that are sufficient to fully control the described resource. Values should be drawn from the [approved vocabulary](https://www.w3.org/2021/a11y-discov-vocab/latest/#accessibilityControl-vocabulary).
     * @var string|\Vnetby\Schemaorg\DataTypes\DataText
     */
    public $accessibilityControl;

    /**
     * Headline of the article.
     * @var string|\Vnetby\Schemaorg\DataTypes\DataText
     */
    public $headline;

    /**
     * Indicates a page documenting how licenses can be purchased or otherwise acquired, for the current item.
     * @var string|\Vnetby\Schemaorg\DataTypes\DataURL|\Vnetby\Schemaorg\Types\Thing\CreativeWork\CreativeWork
     */
    public $acquireLicensePage;

    /**
     * An abstract is a short description that summarizes a [[CreativeWork]].
     * @var string|\Vnetby\Schemaorg\DataTypes\DataText
     */
    public $abstract;

    /**
     * The number of comments this CreativeWork (e.g. Article, Question or Answer) has received. This is most applicable to works published in
     * Web sites with commenting system; additional comments may exist elsewhere.
     * @var string|int|\Vnetby\Schemaorg\DataTypes\DataInteger
     */
    public $commentCount;

    /**
     * The item being described is intended to assess the competency or learning outcome defined by the referenced term.
     * @var string|\Vnetby\Schemaorg\Types\Thing\Intangible\DefinedTerm\DefinedTerm|\Vnetby\Schemaorg\DataTypes\DataText
     */
    public $assesses;

    /**
     * The date on which the CreativeWork was created or the item was added to a DataFeed.
     * @var string|\Vnetby\Schemaorg\DataTypes\DataDateTime|\Vnetby\Schemaorg\DataTypes\DataDate
     */
    public $dateCreated;

    /**
     * Date of first broadcast/publication.
     * @var string|\Vnetby\Schemaorg\DataTypes\DataDate|\Vnetby\Schemaorg\DataTypes\DataDateTime
     */
    public $datePublished;

    /**
     * Indicates the primary entity described in some page or other CreativeWork.
     * @var \Vnetby\Schemaorg\Types\Thing\Thing
     */
    public $mainEntity;

    /**
     * Indicates an item or CreativeWork that is part of this item, or CreativeWork (in some sense).
     * @var \Vnetby\Schemaorg\Types\Thing\CreativeWork\CreativeWork
     */
    public $hasPart;

    /**
     * A human-readable summary of specific accessibility features or deficiencies, consistent with the other accessibility metadata but expressing subtleties such as "short
     * descriptions are present but long descriptions will be needed for non-visual users" or "short descriptions are present and no long descriptions
     * are needed".
     * @var string|\Vnetby\Schemaorg\DataTypes\DataText
     */
    public $accessibilitySummary;

    /**
     * A license document that applies to this structured data, typically indicated by URL.
     * @var string|\Vnetby\Schemaorg\DataTypes\DataURL|\Vnetby\Schemaorg\Types\Thing\CreativeWork\CreativeWork
     */
    public $sdLicense;

    /**
     * A work that is a translation of the content of this work. E.g. 西遊記 has an English workTranslation “Journey to the
     * West”, a German workTranslation “Monkeys Pilgerfahrt” and a Vietnamese translation Tây du ký bình khảo.
     * @var \Vnetby\Schemaorg\Types\Thing\CreativeWork\CreativeWork
     */
    public $workTranslation;

    /**
     * Text of a notice appropriate for describing the copyright aspects of this Creative Work, ideally indicating the owner of the copyright
     * for the Work.
     * @var string|\Vnetby\Schemaorg\DataTypes\DataText
     */
    public $copyrightNotice;

    /**
     * The "spatial" property can be used in cases when more specific properties (e.g. [[locationCreated]], [[spatialCoverage]], [[contentLocation]]) are not known to be
     * appropriate.
     * @var \Vnetby\Schemaorg\Types\Thing\Place\Place
     */
    public $spatial;

    /**
     * Fictional person connected with a creative work.
     * @var \Vnetby\Schemaorg\Types\Thing\Person\Person
     */
    public $character;

    /**
     * A review of the item.
     * @var \Vnetby\Schemaorg\Types\Thing\CreativeWork\Review\Review
     */
    public $review;

    /**
     * The predominant mode of learning supported by the learning resource. Acceptable values are 'active', 'expositive', or 'mixed'.
     * @var string|\Vnetby\Schemaorg\DataTypes\DataText
     */
    public $interactivityType;

    /**
     * Media type typically expressed using a MIME format (see [IANA site](http://www.iana.org/assignments/media-types/media-types.xhtml) and [MDN reference](https://developer.mozilla.org/en-US/docs/Web/HTTP/Basics_of_HTTP/MIME_types)), e.g. application/zip for a SoftwareApplication binary, audio/mpeg
     * for .mp3 etc. In cases where a [[CreativeWork]] has several media type representations, [[encoding]] can be used to indicate each [[MediaObject]]
     * alongside particular [[encodingFormat]] information. Unregistered or niche encoding and file formats can be indicated instead via the most appropriate URL, e.g.
     * defining Web page or a Wikipedia/Wikidata entry.
     * @var string|\Vnetby\Schemaorg\DataTypes\DataURL|\Vnetby\Schemaorg\DataTypes\DataText
     */
    public $encodingFormat;

    /**
     * An alignment to an established educational framework. This property should not be used where the nature of the alignment can be
     * described using a simple property, for example to express that a resource [[teaches]] or [[assesses]] a competency.
     * @var \Vnetby\Schemaorg\Types\Thing\Intangible\AlignmentObject
     */
    public $educationalAlignment;

    /**
     * The purpose of a work in the context of education; for example, 'assignment', 'group work'.
     * @var string|\Vnetby\Schemaorg\Types\Thing\Intangible\DefinedTerm\DefinedTerm|\Vnetby\Schemaorg\DataTypes\DataText
     */
    public $educationalUse;

    /**
     * The number of interactions for the CreativeWork using the WebSite or SoftwareApplication. The most specific child type of InteractionCounter should be
     * used.
     * @var \Vnetby\Schemaorg\Types\Thing\Intangible\StructuredValue\InteractionCounter
     */
    public $interactionStatistic;

    /**
     * Indicates whether this content is family friendly.
     * @var bool|\Vnetby\Schemaorg\DataTypes\DataBoolean
     */
    public $isFamilyFriendly;

    /**
     * The creator/author of this CreativeWork. This is the same as the Author property for CreativeWork.
     * @var \Vnetby\Schemaorg\Types\Thing\Organization\Organization|\Vnetby\Schemaorg\Types\Thing\Person\Person
     */
    public $creator;

    /**
     * An award won by or for this item.
     * @var string|\Vnetby\Schemaorg\DataTypes\DataText
     */
    public $award;

    /**
     * Thumbnail image for an image or video.
     * @var \Vnetby\Schemaorg\Types\Thing\CreativeWork\MediaObject\ImageObject\ImageObject
     */
    public $thumbnail;

    /**
     * Indicates the party responsible for generating and publishing the current structured data markup, typically in cases where the structured data is
     * derived automatically from existing published content but published on a different site. For example, student projects and open data initiatives often
     * re-publish existing content with more explicitly structured metadata. The [[sdPublisher]] property helps make such practices more explicit.
     * @var \Vnetby\Schemaorg\Types\Thing\Person\Person|\Vnetby\Schemaorg\Types\Thing\Organization\Organization
     */
    public $sdPublisher;

    /**
     * A characteristic of the described resource that is physiologically dangerous to some users. Related to WCAG 2.0 guideline 2.3. Values should
     * be drawn from the [approved vocabulary](https://www.w3.org/2021/a11y-discov-vocab/latest/#accessibilityHazard-vocabulary).
     * @var string|\Vnetby\Schemaorg\DataTypes\DataText
     */
    public $accessibilityHazard;

    /**
     * A [[Grant]] that directly or indirectly provide funding or sponsorship for this item. See also [[ownershipFundingInfo]].
     * @var \Vnetby\Schemaorg\Types\Thing\Intangible\Grant\Grant
     */
    public $funding;

    /**
     * A thumbnail image relevant to the Thing.
     * @var string|\Vnetby\Schemaorg\DataTypes\DataURL
     */
    public $thumbnailUrl;

    /**
     * A list of single or combined accessModes that are sufficient to understand all the intellectual content of a resource. Values should
     * be drawn from the [approved vocabulary](https://www.w3.org/2021/a11y-discov-vocab/latest/#accessModeSufficient-vocabulary).
     * @var \Vnetby\Schemaorg\Types\Thing\Intangible\ItemList\ItemList
     */
    public $accessModeSufficient;

    /**
     * A license document that applies to this content, typically indicated by URL.
     * @var string|\Vnetby\Schemaorg\DataTypes\DataURL|\Vnetby\Schemaorg\Types\Thing\CreativeWork\CreativeWork
     */
    public $license;

    /**
     * The human sensory perceptual system or cognitive faculty through which a person may process or perceive information. Values should be drawn
     * from the [approved vocabulary](https://www.w3.org/2021/a11y-discov-vocab/latest/#accessMode-vocabulary).
     * @var string|\Vnetby\Schemaorg\DataTypes\DataText
     */
    public $accessMode;

    /**
     * The place and time the release was issued, expressed as a PublicationEvent.
     * @var \Vnetby\Schemaorg\Types\Thing\Event\PublicationEvent\PublicationEvent
     */
    public $releasedEvent;

    /**
     * An embedded video object.
     * @var \Vnetby\Schemaorg\Types\Thing\CreativeWork\MediaObject\VideoObject\VideoObject|\Vnetby\Schemaorg\Types\Thing\CreativeWork\Clip\Clip
     */
    public $video;

    /**
     * The temporalCoverage of a CreativeWork indicates the period that the content applies to, i.e. that it describes, either as a DateTime
     * or as a textual string indicating a time period in [ISO 8601 time interval format](https://en.wikipedia.org/wiki/ISO_8601#Time_intervals). In the case of a Dataset
     * it will typically indicate the relevant time period in a precise notation (e.g. for a 2011 census dataset, the year 2011
     * would be written "2011/2012"). Other forms of content, e.g. ScholarlyArticle, Book, TVSeries or TVEpisode, may indicate their temporalCoverage in broader terms
     * - textually or via well-known URL. Written works such as books may sometimes have precise temporal coverage too, e.g. a work
     * set in 1939 - 1945 can be indicated in ISO 8601 interval format format via "1939/1945". Open-ended date ranges can be
     * written with ".." in place of the end date. For example, "2015-11/.." indicates a range beginning in November 2015 and with
     * no specified final date. This is tentative and might be updated in future when ISO 8601 is officially updated.
     * @var string|\Vnetby\Schemaorg\DataTypes\DataText|\Vnetby\Schemaorg\DataTypes\DataURL|\Vnetby\Schemaorg\DataTypes\DataDateTime
     */
    public $temporalCoverage;

    /**
     * A media object that encodes this CreativeWork. This property is a synonym for associatedMedia.
     * @var \Vnetby\Schemaorg\Types\Thing\CreativeWork\MediaObject\MediaObject
     */
    public $encoding;

    /**
     * An offer to provide this item&#x2014;for example, an offer to sell a product, rent the DVD of a movie, perform a
     * service, or give away tickets to an event. Use [[businessFunction]] to indicate the kind of transaction offered, i.e. sell, lease, etc.
     * This property can also be used to describe a [[Demand]]. While this property is listed as expected on a number of
     * common types, it can be used in others. In that case, using a second type, such as Product or a subtype
     * of Product, can clarify the nature of the offer. 
     * @var \Vnetby\Schemaorg\Types\Thing\Intangible\Offer\Offer|\Vnetby\Schemaorg\Types\Thing\Intangible\Demand
     */
    public $offers;

    /**
     * A pattern that something has, for example 'polka dot', 'striped', 'Canadian flag'. Values are typically expressed as text, although links to
     * controlled value schemes are also supported.
     * @var string|\Vnetby\Schemaorg\Types\Thing\Intangible\DefinedTerm\DefinedTerm|\Vnetby\Schemaorg\DataTypes\DataText
     */
    public $pattern;

    /**
     * Text that can be used to credit person(s) and/or organization(s) associated with a published Creative Work.
     * @var string|\Vnetby\Schemaorg\DataTypes\DataText
     */
    public $creditText;

    /**
     * The position of an item in a series or sequence of items.
     * @var string|int|\Vnetby\Schemaorg\DataTypes\DataInteger|\Vnetby\Schemaorg\DataTypes\DataText
     */
    public $position;

    /**
     * Organization or person who adapts a creative work to different languages, regional differences and technical requirements of a target market, or
     * that translates during some event.
     * @var \Vnetby\Schemaorg\Types\Thing\Organization\Organization|\Vnetby\Schemaorg\Types\Thing\Person\Person
     */
    public $translator;

    /**
     * The schema.org [[usageInfo]] property indicates further information about a [[CreativeWork]]. This property is applicable both to works that are freely available
     * and to those that require payment or other transactions. It can reference additional information, e.g. community expectations on preferred linking and
     * citation conventions, as well as purchasing details. For something that can be commercially licensed, usageInfo can provide detailed, resource-specific information about
     * licensing options. This property can be used alongside the license property which indicates license(s) applicable to some piece of content. The
     * usageInfo property can provide information about other licensing options, e.g. acquiring commercial usage rights for an image that is also available
     * under non-commercial creative commons licenses.
     * @var string|\Vnetby\Schemaorg\DataTypes\DataURL|\Vnetby\Schemaorg\Types\Thing\CreativeWork\CreativeWork
     */
    public $usageInfo;

    /**
     * The publisher of the creative work.
     * @var \Vnetby\Schemaorg\Types\Thing\Person\Person|\Vnetby\Schemaorg\Types\Thing\Organization\Organization
     */
    public $publisher;

    /**
     * A maintainer of a [[Dataset]], software package ([[SoftwareApplication]]), or other [[Project]]. A maintainer is a [[Person]] or [[Organization]] that manages contributions
     * to, and/or publication of, some (typically complex) artifact. It is common for distributions of software and data to be based on
     * "upstream" sources. When [[maintainer]] is applied to a specific version of something e.g. a particular version or packaging of a [[Dataset]],
     * it is always possible that the upstream source has a different maintainer. The [[isBasedOn]] property can be used to indicate such
     * relationships between datasets to make the different maintenance roles clear. Similarly in the case of software, a package may have dedicated
     * maintainers working on integration into software distributions such as Ubuntu, as well as upstream maintainers of the underlying work. 
     * @var \Vnetby\Schemaorg\Types\Thing\Person\Person|\Vnetby\Schemaorg\Types\Thing\Organization\Organization
     */
    public $maintainer;

    /**
     * A material that something is made from, e.g. leather, wool, cotton, paper.
     * @var string|\Vnetby\Schemaorg\DataTypes\DataText|\Vnetby\Schemaorg\DataTypes\DataURL|\Vnetby\Schemaorg\Types\Thing\Product\Product
     */
    public $material;

    /**
     * The "temporal" property can be used in cases where more specific properties (e.g. [[temporalCoverage]], [[dateCreated]], [[dateModified]], [[datePublished]]) are not known to
     * be appropriate.
     * @var string|\Vnetby\Schemaorg\DataTypes\DataText|\Vnetby\Schemaorg\DataTypes\DataDateTime
     */
    public $temporal;

    /**
     * Comments, typically from users.
     * @var \Vnetby\Schemaorg\Types\Thing\CreativeWork\Comment\Comment
     */
    public $comment;

    /**
     * The typical expected age range, e.g. '7-9', '11-'.
     * @var string|\Vnetby\Schemaorg\DataTypes\DataText
     */
    public $typicalAgeRange;

    /**
     * The subject matter of the content.
     * @var \Vnetby\Schemaorg\Types\Thing\Thing
     */
    public $about;

    /**
     * Date the content expires and is no longer useful or available. For example a [[VideoObject]] or [[NewsArticle]] whose availability or relevance
     * is time-limited, or a [[ClaimReview]] fact check whose publisher wants to indicate that it may no longer be relevant (or helpful
     * to highlight) after some date.
     * @var string|\Vnetby\Schemaorg\DataTypes\DataDateTime|\Vnetby\Schemaorg\DataTypes\DataDate
     */
    public $expires;

    /**
     * Used to indicate a specific claim contained, implied, translated or refined from the content of a [[MediaObject]] or other [[CreativeWork]]. The
     * interpreting party can be indicated using [[claimInterpreter]].
     * @var \Vnetby\Schemaorg\Types\Thing\CreativeWork\Claim
     */
    public $interpretedAsClaim;

    /**
     * The work that this work has been translated from. E.g. 物种起源 is a translationOf “On the Origin of Species”.
     * @var \Vnetby\Schemaorg\Types\Thing\CreativeWork\CreativeWork
     */
    public $translationOfWork;

    /**
     * A resource from which this work is derived or from which it is a modification or adaptation.
     * @var string|\Vnetby\Schemaorg\Types\Thing\Product\Product|\Vnetby\Schemaorg\DataTypes\DataURL|\Vnetby\Schemaorg\Types\Thing\CreativeWork\CreativeWork
     */
    public $isBasedOn;

    /**
     * A link to the page containing the comments of the CreativeWork.
     * @var string|\Vnetby\Schemaorg\DataTypes\DataURL
     */
    public $discussionUrl;

    /**
     * The quantity of the materials being described or an expression of the physical space they occupy.
     * @var string|\Vnetby\Schemaorg\Types\Thing\Intangible\StructuredValue\QuantitativeValue\QuantitativeValue|\Vnetby\Schemaorg\DataTypes\DataText
     */
    public $materialExtent;

    /**
     * Specifies the Person who edited the CreativeWork.
     * @var \Vnetby\Schemaorg\Types\Thing\Person\Person
     */
    public $editor;

    /**
     * A secondary title of the CreativeWork.
     * @var string|\Vnetby\Schemaorg\DataTypes\DataText
     */
    public $alternativeHeadline;

    /**
     * An embedded audio object.
     * @var \Vnetby\Schemaorg\Types\Thing\CreativeWork\Clip\Clip|\Vnetby\Schemaorg\Types\Thing\CreativeWork\MusicRecording|\Vnetby\Schemaorg\Types\Thing\CreativeWork\MediaObject\AudioObject\AudioObject
     */
    public $audio;

    /**
     * The status of a creative work in terms of its stage in a lifecycle. Example terms include Incomplete, Draft, Published, Obsolete.
     * Some organizations define a set of terms for the stages of their publication lifecycle.
     * @var string|\Vnetby\Schemaorg\Types\Thing\Intangible\DefinedTerm\DefinedTerm|\Vnetby\Schemaorg\DataTypes\DataText
     */
    public $creativeWorkStatus;

    /**
     * The publishingPrinciples property indicates (typically via [[URL]]) a document describing the editorial principles of an [[Organization]] (or individual, e.g. a [[Person]]
     * writing a blog) that relate to their activities as a publisher, e.g. ethics or diversity policies. When applied to a [[CreativeWork]]
     * (e.g. [[NewsArticle]]) the principles are those of the party primarily responsible for the creation of the [[CreativeWork]]. While such policies are
     * most typically expressed in natural language, sometimes related information (e.g. indicating a [[funder]]) can be expressed using schema.org terminology. 
     * @var string|\Vnetby\Schemaorg\DataTypes\DataURL|\Vnetby\Schemaorg\Types\Thing\CreativeWork\CreativeWork
     */
    public $publishingPrinciples;

    /**
     * An [EIDR](https://eidr.org/) (Entertainment Identifier Registry) [[identifier]] representing a specific edit / edition for a work of film or television. For example,
     * the motion picture known as "Ghostbusters" whose [[titleEIDR]] is "10.5240/7EC7-228A-510A-053E-CBB8-J" has several edits, e.g. "10.5240/1F2A-E1C5-680A-14C6-E76B-I" and "10.5240/8A35-3BEE-6497-5D12-9E4F-3". Since schema.org types like
     * [[Movie]] and [[TVEpisode]] can be used for both works and their multiple expressions, it is possible to use [[titleEIDR]] alone (for
     * a general description), or alongside [[editEIDR]] for a more edit-specific description. 
     * @var string|\Vnetby\Schemaorg\DataTypes\DataText|\Vnetby\Schemaorg\DataTypes\DataURL
     */
    public $editEIDR;

    /**
     * Indicates an item or CreativeWork that this item, or CreativeWork (in some sense), is part of.
     * @var string|\Vnetby\Schemaorg\DataTypes\DataURL|\Vnetby\Schemaorg\Types\Thing\CreativeWork\CreativeWork
     */
    public $isPartOf;

    /**
     * A citation or reference to another creative work, such as another publication, web page, scholarly article, etc.
     * @var string|\Vnetby\Schemaorg\DataTypes\DataText|\Vnetby\Schemaorg\Types\Thing\CreativeWork\CreativeWork
     */
    public $citation;

    /**
     * The publishing division which published the comic.
     * @var \Vnetby\Schemaorg\Types\Thing\Organization\Organization
     */
    public $publisherImprint;

    /**
     * A secondary contributor to the CreativeWork or Event.
     * @var \Vnetby\Schemaorg\Types\Thing\Person\Person|\Vnetby\Schemaorg\Types\Thing\Organization\Organization
     */
    public $contributor;

    /**
     * The author of this content or rating. Please note that author is special in that HTML 5 provides a special mechanism
     * for indicating authorship via the rel tag. That is equivalent to this and may be used interchangeably.
     * @var \Vnetby\Schemaorg\Types\Thing\Person\Person|\Vnetby\Schemaorg\Types\Thing\Organization\Organization
     */
    public $author;

    /**
     * A flag to signal that the item, event, or place is accessible for free.
     * @var bool|\Vnetby\Schemaorg\DataTypes\DataBoolean
     */
    public $isAccessibleForFree;

    /**
     * A creative work that this work is an example/instance/realization/derivation of.
     * @var \Vnetby\Schemaorg\Types\Thing\CreativeWork\CreativeWork
     */
    public $exampleOfWork;

    /**
     * A media object that encodes this CreativeWork. This property is a synonym for encoding.
     * @var \Vnetby\Schemaorg\Types\Thing\CreativeWork\MediaObject\MediaObject
     */
    public $associatedMedia;

    /**
     * A publication event associated with the item.
     * @var \Vnetby\Schemaorg\Types\Thing\Event\PublicationEvent\PublicationEvent
     */
    public $publication;

    /**
     * The item being described is intended to help a person learn the competency or learning outcome defined by the referenced term.
     * @var string|\Vnetby\Schemaorg\Types\Thing\Intangible\DefinedTerm\DefinedTerm|\Vnetby\Schemaorg\DataTypes\DataText
     */
    public $teaches;

    /**
     * The location where the CreativeWork was created, which may not be the same as the location depicted in the CreativeWork.
     * @var \Vnetby\Schemaorg\Types\Thing\Place\Place
     */
    public $locationCreated;

    /**
     * The person or organization who produced the work (e.g. music album, movie, TV/radio series etc.).
     * @var \Vnetby\Schemaorg\Types\Thing\Person\Person|\Vnetby\Schemaorg\Types\Thing\Organization\Organization
     */
    public $producer;

    /**
     * Content features of the resource, such as accessible media, alternatives and supported enhancements for accessibility. Values should be drawn from the
     * [approved vocabulary](https://www.w3.org/2021/a11y-discov-vocab/latest/#accessibilityFeature-vocabulary).
     * @var string|\Vnetby\Schemaorg\DataTypes\DataText
     */
    public $accessibilityFeature;

    /**
     * Indicates (by URL or string) a particular version of a schema used in some CreativeWork. This property was created primarily to
     * indicate the use of a specific schema.org release, e.g. ```10.0``` as a simple string, or more explicitly via URL, ```https://schema.org/docs/releases.html#v10.0```. There
     * may be situations in which other schemas might usefully be referenced this way, e.g. ```http://dublincore.org/specifications/dublin-core/dces/1999-07-02/``` but this has not been carefully
     * explored in the community.
     * @param string|\Vnetby\Schemaorg\DataTypes\DataText|\Vnetby\Schemaorg\DataTypes\DataURL $value
     * @return static
     */
    function setSchemaVersion($value)
    {
        return $this->setProp('schemaVersion', $value);
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
     * An intended audience, i.e. a group for whom something was created.
     * @param \Vnetby\Schemaorg\Types\Thing\Intangible\Audience\Audience $value
     * @return static
     */
    function setAudience($value)
    {
        return $this->setProp('audience', $value);
    }

    /**
     * Indicates an IPTCDigitalSourceEnumeration code indicating the nature of the digital source(s) for some [[CreativeWork]].
     * @param \Vnetby\Schemaorg\Types\Thing\Intangible\Enumeration\MediaEnumeration\IPTCDigitalSourceEnumeration\IPTCDigitalSourceEnumeration $value
     * @return static
     */
    function setDigitalSourceType($value)
    {
        return $this->setProp('digitalSourceType', $value);
    }

    /**
     * The version of the CreativeWork embodied by a specified resource.
     * @param string|int|float|\Vnetby\Schemaorg\DataTypes\DataText|\Vnetby\Schemaorg\DataTypes\DataNumber $value
     * @return static
     */
    function setVersion($value)
    {
        return $this->setProp('version', $value);
    }

    /**
     * Indicates the date on which the current structured data was generated / published. Typically used alongside [[sdPublisher]].
     * @param string|\Vnetby\Schemaorg\DataTypes\DataDate $value
     * @return static
     */
    function setSdDatePublished($value)
    {
        return $this->setProp('sdDatePublished', $value);
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
     * Keywords or tags used to describe some item. Multiple textual entries in a keywords list are typically delimited by commas, or
     * by repeating the property.
     * @param string|\Vnetby\Schemaorg\DataTypes\DataURL|\Vnetby\Schemaorg\Types\Thing\Intangible\DefinedTerm\DefinedTerm|\Vnetby\Schemaorg\DataTypes\DataText $value
     * @return static
     */
    function setKeywords($value)
    {
        return $this->setProp('keywords', $value);
    }

    /**
     * Indicates a correction to a [[CreativeWork]], either via a [[CorrectionComment]], textually or in another document.
     * @param string|\Vnetby\Schemaorg\Types\Thing\CreativeWork\Comment\CorrectionComment|\Vnetby\Schemaorg\DataTypes\DataText|\Vnetby\Schemaorg\DataTypes\DataURL $value
     * @return static
     */
    function setCorrection($value)
    {
        return $this->setProp('correction', $value);
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
     * The language of the content or performance or used in an action. Please use one of the language codes from the
     * [IETF BCP 47 standard](http://tools.ietf.org/html/bcp47). See also [[availableLanguage]].
     * @param string|\Vnetby\Schemaorg\Types\Thing\Intangible\Language|\Vnetby\Schemaorg\DataTypes\DataText $value
     * @return static
     */
    function setInLanguage($value)
    {
        return $this->setProp('inLanguage', $value);
    }

    /**
     * Official rating of a piece of content&#x2014;for example, 'MPAA PG-13'.
     * @param string|\Vnetby\Schemaorg\DataTypes\DataText|\Vnetby\Schemaorg\Types\Thing\Intangible\Rating\Rating $value
     * @return static
     */
    function setContentRating($value)
    {
        return $this->setProp('contentRating', $value);
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
     * The year during which the claimed copyright for the CreativeWork was first asserted.
     * @param string|int|float|\Vnetby\Schemaorg\DataTypes\DataNumber $value
     * @return static
     */
    function setCopyrightYear($value)
    {
        return $this->setProp('copyrightYear', $value);
    }

    /**
     * The date on which the CreativeWork was most recently modified or when the item's entry was modified within a DataFeed.
     * @param string|\Vnetby\Schemaorg\DataTypes\DataDateTime|\Vnetby\Schemaorg\DataTypes\DataDate $value
     * @return static
     */
    function setDateModified($value)
    {
        return $this->setProp('dateModified', $value);
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
     * The level in terms of progression through an educational or training context. Examples of educational levels include 'beginner', 'intermediate' or 'advanced',
     * and formal sets of level indicators.
     * @param string|\Vnetby\Schemaorg\DataTypes\DataURL|\Vnetby\Schemaorg\Types\Thing\Intangible\DefinedTerm\DefinedTerm|\Vnetby\Schemaorg\DataTypes\DataText $value
     * @return static
     */
    function setEducationalLevel($value)
    {
        return $this->setProp('educationalLevel', $value);
    }

    /**
     * The textual content of this CreativeWork.
     * @param string|\Vnetby\Schemaorg\DataTypes\DataText $value
     * @return static
     */
    function setText($value)
    {
        return $this->setProp('text', $value);
    }

    /**
     * Indicates that the resource is compatible with the referenced accessibility API. Values should be drawn from the [approved vocabulary](https://www.w3.org/2021/a11y-discov-vocab/latest/#accessibilityAPI-vocabulary).
     * @param string|\Vnetby\Schemaorg\DataTypes\DataText $value
     * @return static
     */
    function setAccessibilityAPI($value)
    {
        return $this->setProp('accessibilityAPI', $value);
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
     * A person or organization that supports (sponsors) something through some kind of financial contribution.
     * @param \Vnetby\Schemaorg\Types\Thing\Organization\Organization|\Vnetby\Schemaorg\Types\Thing\Person\Person $value
     * @return static
     */
    function setFunder($value)
    {
        return $this->setProp('funder', $value);
    }

    /**
     * A person or organization that supports a thing through a pledge, promise, or financial contribution. E.g. a sponsor of a Medical
     * Study or a corporate sponsor of an event.
     * @param \Vnetby\Schemaorg\Types\Thing\Organization\Organization|\Vnetby\Schemaorg\Types\Thing\Person\Person $value
     * @return static
     */
    function setSponsor($value)
    {
        return $this->setProp('sponsor', $value);
    }

    /**
     * The specific time described by a creative work, for works (e.g. articles, video objects etc.) that emphasise a particular moment within
     * an Event.
     * @param string|\Vnetby\Schemaorg\DataTypes\DataDateTime $value
     * @return static
     */
    function setContentReferenceTime($value)
    {
        return $this->setProp('contentReferenceTime', $value);
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
     * The Event where the CreativeWork was recorded. The CreativeWork may capture all or part of the event.
     * @param \Vnetby\Schemaorg\Types\Thing\Event\Event $value
     * @return static
     */
    function setRecordedAt($value)
    {
        return $this->setProp('recordedAt', $value);
    }

    /**
     * Genre of the creative work, broadcast channel or group.
     * @param string|\Vnetby\Schemaorg\DataTypes\DataURL|\Vnetby\Schemaorg\DataTypes\DataText $value
     * @return static
     */
    function setGenre($value)
    {
        return $this->setProp('genre', $value);
    }

    /**
     * Conditions that affect the availability of, or method(s) of access to, an item. Typically used for real world items such as
     * an [[ArchiveComponent]] held by an [[ArchiveOrganization]]. This property is not suitable for use as a general Web access control mechanism. It
     * is expressed only in natural language.\n\nFor example "Available by appointment from the Reading Room" or "Accessible only from logged-in accounts ".
     * 
     * @param string|\Vnetby\Schemaorg\DataTypes\DataText $value
     * @return static
     */
    function setConditionsOfAccess($value)
    {
        return $this->setProp('conditionsOfAccess', $value);
    }

    /**
     * The predominant type or kind characterizing the learning resource. For example, 'presentation', 'handout'.
     * @param string|\Vnetby\Schemaorg\Types\Thing\Intangible\DefinedTerm\DefinedTerm|\Vnetby\Schemaorg\DataTypes\DataText $value
     * @return static
     */
    function setLearningResourceType($value)
    {
        return $this->setProp('learningResourceType', $value);
    }

    /**
     * Indicates a page or other link involved in archival of a [[CreativeWork]]. In the case of [[MediaReview]], the items in a
     * [[MediaReviewItem]] may often become inaccessible, but be archived by archival, journalistic, activist, or law enforcement organizations. In such cases, the referenced
     * page may not directly publish the content.
     * @param string|\Vnetby\Schemaorg\DataTypes\DataURL|\Vnetby\Schemaorg\Types\Thing\CreativeWork\WebPage\WebPage $value
     * @return static
     */
    function setArchivedAt($value)
    {
        return $this->setProp('archivedAt', $value);
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
     * A standardized size of a product or creative work, specified either through a simple textual string (for example 'XL', '32Wx34L'), a
     * QuantitativeValue with a unitCode, or a comprehensive and structured [[SizeSpecification]]; in other cases, the [[width]], [[height]], [[depth]] and [[weight]] properties may
     * be more applicable. 
     * @param string|\Vnetby\Schemaorg\Types\Thing\Intangible\DefinedTerm\DefinedTerm|\Vnetby\Schemaorg\Types\Thing\Intangible\StructuredValue\QuantitativeValue\QuantitativeValue|\Vnetby\Schemaorg\DataTypes\DataText|\Vnetby\Schemaorg\Types\Thing\Intangible\Enumeration\QualitativeValue\SizeSpecification $value
     * @return static
     */
    function setSize($value)
    {
        return $this->setProp('size', $value);
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
     * Identifies input methods that are sufficient to fully control the described resource. Values should be drawn from the [approved vocabulary](https://www.w3.org/2021/a11y-discov-vocab/latest/#accessibilityControl-vocabulary).
     * @param string|\Vnetby\Schemaorg\DataTypes\DataText $value
     * @return static
     */
    function setAccessibilityControl($value)
    {
        return $this->setProp('accessibilityControl', $value);
    }

    /**
     * Headline of the article.
     * @param string|\Vnetby\Schemaorg\DataTypes\DataText $value
     * @return static
     */
    function setHeadline($value)
    {
        return $this->setProp('headline', $value);
    }

    /**
     * Indicates a page documenting how licenses can be purchased or otherwise acquired, for the current item.
     * @param string|\Vnetby\Schemaorg\DataTypes\DataURL|\Vnetby\Schemaorg\Types\Thing\CreativeWork\CreativeWork $value
     * @return static
     */
    function setAcquireLicensePage($value)
    {
        return $this->setProp('acquireLicensePage', $value);
    }

    /**
     * An abstract is a short description that summarizes a [[CreativeWork]].
     * @param string|\Vnetby\Schemaorg\DataTypes\DataText $value
     * @return static
     */
    function setAbstract($value)
    {
        return $this->setProp('abstract', $value);
    }

    /**
     * The number of comments this CreativeWork (e.g. Article, Question or Answer) has received. This is most applicable to works published in
     * Web sites with commenting system; additional comments may exist elsewhere.
     * @param string|int|\Vnetby\Schemaorg\DataTypes\DataInteger $value
     * @return static
     */
    function setCommentCount($value)
    {
        return $this->setProp('commentCount', $value);
    }

    /**
     * The item being described is intended to assess the competency or learning outcome defined by the referenced term.
     * @param string|\Vnetby\Schemaorg\Types\Thing\Intangible\DefinedTerm\DefinedTerm|\Vnetby\Schemaorg\DataTypes\DataText $value
     * @return static
     */
    function setAssesses($value)
    {
        return $this->setProp('assesses', $value);
    }

    /**
     * The date on which the CreativeWork was created or the item was added to a DataFeed.
     * @param string|\Vnetby\Schemaorg\DataTypes\DataDateTime|\Vnetby\Schemaorg\DataTypes\DataDate $value
     * @return static
     */
    function setDateCreated($value)
    {
        return $this->setProp('dateCreated', $value);
    }

    /**
     * Date of first broadcast/publication.
     * @param string|\Vnetby\Schemaorg\DataTypes\DataDate|\Vnetby\Schemaorg\DataTypes\DataDateTime $value
     * @return static
     */
    function setDatePublished($value)
    {
        return $this->setProp('datePublished', $value);
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
     * Indicates an item or CreativeWork that is part of this item, or CreativeWork (in some sense).
     * @param \Vnetby\Schemaorg\Types\Thing\CreativeWork\CreativeWork $value
     * @return static
     */
    function setHasPart($value)
    {
        return $this->setProp('hasPart', $value);
    }

    /**
     * A human-readable summary of specific accessibility features or deficiencies, consistent with the other accessibility metadata but expressing subtleties such as "short
     * descriptions are present but long descriptions will be needed for non-visual users" or "short descriptions are present and no long descriptions
     * are needed".
     * @param string|\Vnetby\Schemaorg\DataTypes\DataText $value
     * @return static
     */
    function setAccessibilitySummary($value)
    {
        return $this->setProp('accessibilitySummary', $value);
    }

    /**
     * A license document that applies to this structured data, typically indicated by URL.
     * @param string|\Vnetby\Schemaorg\DataTypes\DataURL|\Vnetby\Schemaorg\Types\Thing\CreativeWork\CreativeWork $value
     * @return static
     */
    function setSdLicense($value)
    {
        return $this->setProp('sdLicense', $value);
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
     * Text of a notice appropriate for describing the copyright aspects of this Creative Work, ideally indicating the owner of the copyright
     * for the Work.
     * @param string|\Vnetby\Schemaorg\DataTypes\DataText $value
     * @return static
     */
    function setCopyrightNotice($value)
    {
        return $this->setProp('copyrightNotice', $value);
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
     * Fictional person connected with a creative work.
     * @param \Vnetby\Schemaorg\Types\Thing\Person\Person $value
     * @return static
     */
    function setCharacter($value)
    {
        return $this->setProp('character', $value);
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
     * The predominant mode of learning supported by the learning resource. Acceptable values are 'active', 'expositive', or 'mixed'.
     * @param string|\Vnetby\Schemaorg\DataTypes\DataText $value
     * @return static
     */
    function setInteractivityType($value)
    {
        return $this->setProp('interactivityType', $value);
    }

    /**
     * Media type typically expressed using a MIME format (see [IANA site](http://www.iana.org/assignments/media-types/media-types.xhtml) and [MDN reference](https://developer.mozilla.org/en-US/docs/Web/HTTP/Basics_of_HTTP/MIME_types)), e.g. application/zip for a SoftwareApplication binary, audio/mpeg
     * for .mp3 etc. In cases where a [[CreativeWork]] has several media type representations, [[encoding]] can be used to indicate each [[MediaObject]]
     * alongside particular [[encodingFormat]] information. Unregistered or niche encoding and file formats can be indicated instead via the most appropriate URL, e.g.
     * defining Web page or a Wikipedia/Wikidata entry.
     * @param string|\Vnetby\Schemaorg\DataTypes\DataURL|\Vnetby\Schemaorg\DataTypes\DataText $value
     * @return static
     */
    function setEncodingFormat($value)
    {
        return $this->setProp('encodingFormat', $value);
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
     * The purpose of a work in the context of education; for example, 'assignment', 'group work'.
     * @param string|\Vnetby\Schemaorg\Types\Thing\Intangible\DefinedTerm\DefinedTerm|\Vnetby\Schemaorg\DataTypes\DataText $value
     * @return static
     */
    function setEducationalUse($value)
    {
        return $this->setProp('educationalUse', $value);
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
     * Indicates whether this content is family friendly.
     * @param bool|\Vnetby\Schemaorg\DataTypes\DataBoolean $value
     * @return static
     */
    function setIsFamilyFriendly($value)
    {
        return $this->setProp('isFamilyFriendly', $value);
    }

    /**
     * The creator/author of this CreativeWork. This is the same as the Author property for CreativeWork.
     * @param \Vnetby\Schemaorg\Types\Thing\Organization\Organization|\Vnetby\Schemaorg\Types\Thing\Person\Person $value
     * @return static
     */
    function setCreator($value)
    {
        return $this->setProp('creator', $value);
    }

    /**
     * An award won by or for this item.
     * @param string|\Vnetby\Schemaorg\DataTypes\DataText $value
     * @return static
     */
    function setAward($value)
    {
        return $this->setProp('award', $value);
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
     * Indicates the party responsible for generating and publishing the current structured data markup, typically in cases where the structured data is
     * derived automatically from existing published content but published on a different site. For example, student projects and open data initiatives often
     * re-publish existing content with more explicitly structured metadata. The [[sdPublisher]] property helps make such practices more explicit.
     * @param \Vnetby\Schemaorg\Types\Thing\Person\Person|\Vnetby\Schemaorg\Types\Thing\Organization\Organization $value
     * @return static
     */
    function setSdPublisher($value)
    {
        return $this->setProp('sdPublisher', $value);
    }

    /**
     * A characteristic of the described resource that is physiologically dangerous to some users. Related to WCAG 2.0 guideline 2.3. Values should
     * be drawn from the [approved vocabulary](https://www.w3.org/2021/a11y-discov-vocab/latest/#accessibilityHazard-vocabulary).
     * @param string|\Vnetby\Schemaorg\DataTypes\DataText $value
     * @return static
     */
    function setAccessibilityHazard($value)
    {
        return $this->setProp('accessibilityHazard', $value);
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
     * A thumbnail image relevant to the Thing.
     * @param string|\Vnetby\Schemaorg\DataTypes\DataURL $value
     * @return static
     */
    function setThumbnailUrl($value)
    {
        return $this->setProp('thumbnailUrl', $value);
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
     * A license document that applies to this content, typically indicated by URL.
     * @param string|\Vnetby\Schemaorg\DataTypes\DataURL|\Vnetby\Schemaorg\Types\Thing\CreativeWork\CreativeWork $value
     * @return static
     */
    function setLicense($value)
    {
        return $this->setProp('license', $value);
    }

    /**
     * The human sensory perceptual system or cognitive faculty through which a person may process or perceive information. Values should be drawn
     * from the [approved vocabulary](https://www.w3.org/2021/a11y-discov-vocab/latest/#accessMode-vocabulary).
     * @param string|\Vnetby\Schemaorg\DataTypes\DataText $value
     * @return static
     */
    function setAccessMode($value)
    {
        return $this->setProp('accessMode', $value);
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
     * An embedded video object.
     * @param \Vnetby\Schemaorg\Types\Thing\CreativeWork\MediaObject\VideoObject\VideoObject|\Vnetby\Schemaorg\Types\Thing\CreativeWork\Clip\Clip $value
     * @return static
     */
    function setVideo($value)
    {
        return $this->setProp('video', $value);
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
     * @param string|\Vnetby\Schemaorg\DataTypes\DataText|\Vnetby\Schemaorg\DataTypes\DataURL|\Vnetby\Schemaorg\DataTypes\DataDateTime $value
     * @return static
     */
    function setTemporalCoverage($value)
    {
        return $this->setProp('temporalCoverage', $value);
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
     * An offer to provide this item&#x2014;for example, an offer to sell a product, rent the DVD of a movie, perform a
     * service, or give away tickets to an event. Use [[businessFunction]] to indicate the kind of transaction offered, i.e. sell, lease, etc.
     * This property can also be used to describe a [[Demand]]. While this property is listed as expected on a number of
     * common types, it can be used in others. In that case, using a second type, such as Product or a subtype
     * of Product, can clarify the nature of the offer. 
     * @param \Vnetby\Schemaorg\Types\Thing\Intangible\Offer\Offer|\Vnetby\Schemaorg\Types\Thing\Intangible\Demand $value
     * @return static
     */
    function setOffers($value)
    {
        return $this->setProp('offers', $value);
    }

    /**
     * A pattern that something has, for example 'polka dot', 'striped', 'Canadian flag'. Values are typically expressed as text, although links to
     * controlled value schemes are also supported.
     * @param string|\Vnetby\Schemaorg\Types\Thing\Intangible\DefinedTerm\DefinedTerm|\Vnetby\Schemaorg\DataTypes\DataText $value
     * @return static
     */
    function setPattern($value)
    {
        return $this->setProp('pattern', $value);
    }

    /**
     * Text that can be used to credit person(s) and/or organization(s) associated with a published Creative Work.
     * @param string|\Vnetby\Schemaorg\DataTypes\DataText $value
     * @return static
     */
    function setCreditText($value)
    {
        return $this->setProp('creditText', $value);
    }

    /**
     * The position of an item in a series or sequence of items.
     * @param string|int|\Vnetby\Schemaorg\DataTypes\DataInteger|\Vnetby\Schemaorg\DataTypes\DataText $value
     * @return static
     */
    function setPosition($value)
    {
        return $this->setProp('position', $value);
    }

    /**
     * Organization or person who adapts a creative work to different languages, regional differences and technical requirements of a target market, or
     * that translates during some event.
     * @param \Vnetby\Schemaorg\Types\Thing\Organization\Organization|\Vnetby\Schemaorg\Types\Thing\Person\Person $value
     * @return static
     */
    function setTranslator($value)
    {
        return $this->setProp('translator', $value);
    }

    /**
     * The schema.org [[usageInfo]] property indicates further information about a [[CreativeWork]]. This property is applicable both to works that are freely available
     * and to those that require payment or other transactions. It can reference additional information, e.g. community expectations on preferred linking and
     * citation conventions, as well as purchasing details. For something that can be commercially licensed, usageInfo can provide detailed, resource-specific information about
     * licensing options. This property can be used alongside the license property which indicates license(s) applicable to some piece of content. The
     * usageInfo property can provide information about other licensing options, e.g. acquiring commercial usage rights for an image that is also available
     * under non-commercial creative commons licenses.
     * @param string|\Vnetby\Schemaorg\DataTypes\DataURL|\Vnetby\Schemaorg\Types\Thing\CreativeWork\CreativeWork $value
     * @return static
     */
    function setUsageInfo($value)
    {
        return $this->setProp('usageInfo', $value);
    }

    /**
     * The publisher of the creative work.
     * @param \Vnetby\Schemaorg\Types\Thing\Person\Person|\Vnetby\Schemaorg\Types\Thing\Organization\Organization $value
     * @return static
     */
    function setPublisher($value)
    {
        return $this->setProp('publisher', $value);
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
     * A material that something is made from, e.g. leather, wool, cotton, paper.
     * @param string|\Vnetby\Schemaorg\DataTypes\DataText|\Vnetby\Schemaorg\DataTypes\DataURL|\Vnetby\Schemaorg\Types\Thing\Product\Product $value
     * @return static
     */
    function setMaterial($value)
    {
        return $this->setProp('material', $value);
    }

    /**
     * The "temporal" property can be used in cases where more specific properties (e.g. [[temporalCoverage]], [[dateCreated]], [[dateModified]], [[datePublished]]) are not known to
     * be appropriate.
     * @param string|\Vnetby\Schemaorg\DataTypes\DataText|\Vnetby\Schemaorg\DataTypes\DataDateTime $value
     * @return static
     */
    function setTemporal($value)
    {
        return $this->setProp('temporal', $value);
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
     * The typical expected age range, e.g. '7-9', '11-'.
     * @param string|\Vnetby\Schemaorg\DataTypes\DataText $value
     * @return static
     */
    function setTypicalAgeRange($value)
    {
        return $this->setProp('typicalAgeRange', $value);
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
     * Date the content expires and is no longer useful or available. For example a [[VideoObject]] or [[NewsArticle]] whose availability or relevance
     * is time-limited, or a [[ClaimReview]] fact check whose publisher wants to indicate that it may no longer be relevant (or helpful
     * to highlight) after some date.
     * @param string|\Vnetby\Schemaorg\DataTypes\DataDateTime|\Vnetby\Schemaorg\DataTypes\DataDate $value
     * @return static
     */
    function setExpires($value)
    {
        return $this->setProp('expires', $value);
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
     * The work that this work has been translated from. E.g. 物种起源 is a translationOf “On the Origin of Species”.
     * @param \Vnetby\Schemaorg\Types\Thing\CreativeWork\CreativeWork $value
     * @return static
     */
    function setTranslationOfWork($value)
    {
        return $this->setProp('translationOfWork', $value);
    }

    /**
     * A resource from which this work is derived or from which it is a modification or adaptation.
     * @param string|\Vnetby\Schemaorg\Types\Thing\Product\Product|\Vnetby\Schemaorg\DataTypes\DataURL|\Vnetby\Schemaorg\Types\Thing\CreativeWork\CreativeWork $value
     * @return static
     */
    function setIsBasedOn($value)
    {
        return $this->setProp('isBasedOn', $value);
    }

    /**
     * A link to the page containing the comments of the CreativeWork.
     * @param string|\Vnetby\Schemaorg\DataTypes\DataURL $value
     * @return static
     */
    function setDiscussionUrl($value)
    {
        return $this->setProp('discussionUrl', $value);
    }

    /**
     * The quantity of the materials being described or an expression of the physical space they occupy.
     * @param string|\Vnetby\Schemaorg\Types\Thing\Intangible\StructuredValue\QuantitativeValue\QuantitativeValue|\Vnetby\Schemaorg\DataTypes\DataText $value
     * @return static
     */
    function setMaterialExtent($value)
    {
        return $this->setProp('materialExtent', $value);
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
     * A secondary title of the CreativeWork.
     * @param string|\Vnetby\Schemaorg\DataTypes\DataText $value
     * @return static
     */
    function setAlternativeHeadline($value)
    {
        return $this->setProp('alternativeHeadline', $value);
    }

    /**
     * An embedded audio object.
     * @param \Vnetby\Schemaorg\Types\Thing\CreativeWork\Clip\Clip|\Vnetby\Schemaorg\Types\Thing\CreativeWork\MusicRecording|\Vnetby\Schemaorg\Types\Thing\CreativeWork\MediaObject\AudioObject\AudioObject $value
     * @return static
     */
    function setAudio($value)
    {
        return $this->setProp('audio', $value);
    }

    /**
     * The status of a creative work in terms of its stage in a lifecycle. Example terms include Incomplete, Draft, Published, Obsolete.
     * Some organizations define a set of terms for the stages of their publication lifecycle.
     * @param string|\Vnetby\Schemaorg\Types\Thing\Intangible\DefinedTerm\DefinedTerm|\Vnetby\Schemaorg\DataTypes\DataText $value
     * @return static
     */
    function setCreativeWorkStatus($value)
    {
        return $this->setProp('creativeWorkStatus', $value);
    }

    /**
     * The publishingPrinciples property indicates (typically via [[URL]]) a document describing the editorial principles of an [[Organization]] (or individual, e.g. a [[Person]]
     * writing a blog) that relate to their activities as a publisher, e.g. ethics or diversity policies. When applied to a [[CreativeWork]]
     * (e.g. [[NewsArticle]]) the principles are those of the party primarily responsible for the creation of the [[CreativeWork]]. While such policies are
     * most typically expressed in natural language, sometimes related information (e.g. indicating a [[funder]]) can be expressed using schema.org terminology. 
     * @param string|\Vnetby\Schemaorg\DataTypes\DataURL|\Vnetby\Schemaorg\Types\Thing\CreativeWork\CreativeWork $value
     * @return static
     */
    function setPublishingPrinciples($value)
    {
        return $this->setProp('publishingPrinciples', $value);
    }

    /**
     * An [EIDR](https://eidr.org/) (Entertainment Identifier Registry) [[identifier]] representing a specific edit / edition for a work of film or television. For example,
     * the motion picture known as "Ghostbusters" whose [[titleEIDR]] is "10.5240/7EC7-228A-510A-053E-CBB8-J" has several edits, e.g. "10.5240/1F2A-E1C5-680A-14C6-E76B-I" and "10.5240/8A35-3BEE-6497-5D12-9E4F-3". Since schema.org types like
     * [[Movie]] and [[TVEpisode]] can be used for both works and their multiple expressions, it is possible to use [[titleEIDR]] alone (for
     * a general description), or alongside [[editEIDR]] for a more edit-specific description. 
     * @param string|\Vnetby\Schemaorg\DataTypes\DataText|\Vnetby\Schemaorg\DataTypes\DataURL $value
     * @return static
     */
    function setEditEIDR($value)
    {
        return $this->setProp('editEIDR', $value);
    }

    /**
     * Indicates an item or CreativeWork that this item, or CreativeWork (in some sense), is part of.
     * @param string|\Vnetby\Schemaorg\DataTypes\DataURL|\Vnetby\Schemaorg\Types\Thing\CreativeWork\CreativeWork $value
     * @return static
     */
    function setIsPartOf($value)
    {
        return $this->setProp('isPartOf', $value);
    }

    /**
     * A citation or reference to another creative work, such as another publication, web page, scholarly article, etc.
     * @param string|\Vnetby\Schemaorg\DataTypes\DataText|\Vnetby\Schemaorg\Types\Thing\CreativeWork\CreativeWork $value
     * @return static
     */
    function setCitation($value)
    {
        return $this->setProp('citation', $value);
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
     * A secondary contributor to the CreativeWork or Event.
     * @param \Vnetby\Schemaorg\Types\Thing\Person\Person|\Vnetby\Schemaorg\Types\Thing\Organization\Organization $value
     * @return static
     */
    function setContributor($value)
    {
        return $this->setProp('contributor', $value);
    }

    /**
     * The author of this content or rating. Please note that author is special in that HTML 5 provides a special mechanism
     * for indicating authorship via the rel tag. That is equivalent to this and may be used interchangeably.
     * @param \Vnetby\Schemaorg\Types\Thing\Person\Person|\Vnetby\Schemaorg\Types\Thing\Organization\Organization $value
     * @return static
     */
    function setAuthor($value)
    {
        return $this->setProp('author', $value);
    }

    /**
     * A flag to signal that the item, event, or place is accessible for free.
     * @param bool|\Vnetby\Schemaorg\DataTypes\DataBoolean $value
     * @return static
     */
    function setIsAccessibleForFree($value)
    {
        return $this->setProp('isAccessibleForFree', $value);
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
     * A media object that encodes this CreativeWork. This property is a synonym for encoding.
     * @param \Vnetby\Schemaorg\Types\Thing\CreativeWork\MediaObject\MediaObject $value
     * @return static
     */
    function setAssociatedMedia($value)
    {
        return $this->setProp('associatedMedia', $value);
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
     * The item being described is intended to help a person learn the competency or learning outcome defined by the referenced term.
     * @param string|\Vnetby\Schemaorg\Types\Thing\Intangible\DefinedTerm\DefinedTerm|\Vnetby\Schemaorg\DataTypes\DataText $value
     * @return static
     */
    function setTeaches($value)
    {
        return $this->setProp('teaches', $value);
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
     * The person or organization who produced the work (e.g. music album, movie, TV/radio series etc.).
     * @param \Vnetby\Schemaorg\Types\Thing\Person\Person|\Vnetby\Schemaorg\Types\Thing\Organization\Organization $value
     * @return static
     */
    function setProducer($value)
    {
        return $this->setProp('producer', $value);
    }

    /**
     * Content features of the resource, such as accessible media, alternatives and supported enhancements for accessibility. Values should be drawn from the
     * [approved vocabulary](https://www.w3.org/2021/a11y-discov-vocab/latest/#accessibilityFeature-vocabulary).
     * @param string|\Vnetby\Schemaorg\DataTypes\DataText $value
     * @return static
     */
    function setAccessibilityFeature($value)
    {
        return $this->setProp('accessibilityFeature', $value);
    }

    /**
     * Indicates (by URL or string) a particular version of a schema used in some CreativeWork. This property was created primarily to
     * indicate the use of a specific schema.org release, e.g. ```10.0``` as a simple string, or more explicitly via URL, ```https://schema.org/docs/releases.html#v10.0```. There
     * may be situations in which other schemas might usefully be referenced this way, e.g. ```http://dublincore.org/specifications/dublin-core/dces/1999-07-02/``` but this has not been carefully
     * explored in the community.
     * @return string|\Vnetby\Schemaorg\DataTypes\DataText|\Vnetby\Schemaorg\DataTypes\DataURL|null
     */
    function getSchemaVersion()
    {
        return $this->getProp('schemaVersion');
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
     * An intended audience, i.e. a group for whom something was created.
     * @return \Vnetby\Schemaorg\Types\Thing\Intangible\Audience\Audience|null
     */
    function getAudience()
    {
        return $this->getProp('audience');
    }

    /**
     * Indicates an IPTCDigitalSourceEnumeration code indicating the nature of the digital source(s) for some [[CreativeWork]].
     * @return \Vnetby\Schemaorg\Types\Thing\Intangible\Enumeration\MediaEnumeration\IPTCDigitalSourceEnumeration\IPTCDigitalSourceEnumeration|null
     */
    function getDigitalSourceType()
    {
        return $this->getProp('digitalSourceType');
    }

    /**
     * The version of the CreativeWork embodied by a specified resource.
     * @return string|int|float|\Vnetby\Schemaorg\DataTypes\DataText|\Vnetby\Schemaorg\DataTypes\DataNumber|null
     */
    function getVersion()
    {
        return $this->getProp('version');
    }

    /**
     * Indicates the date on which the current structured data was generated / published. Typically used alongside [[sdPublisher]].
     * @return string|\Vnetby\Schemaorg\DataTypes\DataDate|null
     */
    function getSdDatePublished()
    {
        return $this->getProp('sdDatePublished');
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
     * Keywords or tags used to describe some item. Multiple textual entries in a keywords list are typically delimited by commas, or
     * by repeating the property.
     * @return string|\Vnetby\Schemaorg\DataTypes\DataURL|\Vnetby\Schemaorg\Types\Thing\Intangible\DefinedTerm\DefinedTerm|\Vnetby\Schemaorg\DataTypes\DataText|null
     */
    function getKeywords()
    {
        return $this->getProp('keywords');
    }

    /**
     * Indicates a correction to a [[CreativeWork]], either via a [[CorrectionComment]], textually or in another document.
     * @return string|\Vnetby\Schemaorg\Types\Thing\CreativeWork\Comment\CorrectionComment|\Vnetby\Schemaorg\DataTypes\DataText|\Vnetby\Schemaorg\DataTypes\DataURL|null
     */
    function getCorrection()
    {
        return $this->getProp('correction');
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
     * The language of the content or performance or used in an action. Please use one of the language codes from the
     * [IETF BCP 47 standard](http://tools.ietf.org/html/bcp47). See also [[availableLanguage]].
     * @return string|\Vnetby\Schemaorg\Types\Thing\Intangible\Language|\Vnetby\Schemaorg\DataTypes\DataText|null
     */
    function getInLanguage()
    {
        return $this->getProp('inLanguage');
    }

    /**
     * Official rating of a piece of content&#x2014;for example, 'MPAA PG-13'.
     * @return string|\Vnetby\Schemaorg\DataTypes\DataText|\Vnetby\Schemaorg\Types\Thing\Intangible\Rating\Rating|null
     */
    function getContentRating()
    {
        return $this->getProp('contentRating');
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
     * The year during which the claimed copyright for the CreativeWork was first asserted.
     * @return string|int|float|\Vnetby\Schemaorg\DataTypes\DataNumber|null
     */
    function getCopyrightYear()
    {
        return $this->getProp('copyrightYear');
    }

    /**
     * The date on which the CreativeWork was most recently modified or when the item's entry was modified within a DataFeed.
     * @return string|\Vnetby\Schemaorg\DataTypes\DataDateTime|\Vnetby\Schemaorg\DataTypes\DataDate|null
     */
    function getDateModified()
    {
        return $this->getProp('dateModified');
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
     * The level in terms of progression through an educational or training context. Examples of educational levels include 'beginner', 'intermediate' or 'advanced',
     * and formal sets of level indicators.
     * @return string|\Vnetby\Schemaorg\DataTypes\DataURL|\Vnetby\Schemaorg\Types\Thing\Intangible\DefinedTerm\DefinedTerm|\Vnetby\Schemaorg\DataTypes\DataText|null
     */
    function getEducationalLevel()
    {
        return $this->getProp('educationalLevel');
    }

    /**
     * The textual content of this CreativeWork.
     * @return string|\Vnetby\Schemaorg\DataTypes\DataText|null
     */
    function getText()
    {
        return $this->getProp('text');
    }

    /**
     * Indicates that the resource is compatible with the referenced accessibility API. Values should be drawn from the [approved vocabulary](https://www.w3.org/2021/a11y-discov-vocab/latest/#accessibilityAPI-vocabulary).
     * @return string|\Vnetby\Schemaorg\DataTypes\DataText|null
     */
    function getAccessibilityAPI()
    {
        return $this->getProp('accessibilityAPI');
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
     * Approximate or typical time it usually takes to work with or through the content of this work for the typical or
     * target audience.
     * @return \Vnetby\Schemaorg\Types\Thing\Intangible\Quantity\Duration|null
     */
    function getTimeRequired()
    {
        return $this->getProp('timeRequired');
    }

    /**
     * A person or organization that supports (sponsors) something through some kind of financial contribution.
     * @return \Vnetby\Schemaorg\Types\Thing\Organization\Organization|\Vnetby\Schemaorg\Types\Thing\Person\Person|null
     */
    function getFunder()
    {
        return $this->getProp('funder');
    }

    /**
     * A person or organization that supports a thing through a pledge, promise, or financial contribution. E.g. a sponsor of a Medical
     * Study or a corporate sponsor of an event.
     * @return \Vnetby\Schemaorg\Types\Thing\Organization\Organization|\Vnetby\Schemaorg\Types\Thing\Person\Person|null
     */
    function getSponsor()
    {
        return $this->getProp('sponsor');
    }

    /**
     * The specific time described by a creative work, for works (e.g. articles, video objects etc.) that emphasise a particular moment within
     * an Event.
     * @return string|\Vnetby\Schemaorg\DataTypes\DataDateTime|null
     */
    function getContentReferenceTime()
    {
        return $this->getProp('contentReferenceTime');
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
     * The Event where the CreativeWork was recorded. The CreativeWork may capture all or part of the event.
     * @return \Vnetby\Schemaorg\Types\Thing\Event\Event|null
     */
    function getRecordedAt()
    {
        return $this->getProp('recordedAt');
    }

    /**
     * Genre of the creative work, broadcast channel or group.
     * @return string|\Vnetby\Schemaorg\DataTypes\DataURL|\Vnetby\Schemaorg\DataTypes\DataText|null
     */
    function getGenre()
    {
        return $this->getProp('genre');
    }

    /**
     * Conditions that affect the availability of, or method(s) of access to, an item. Typically used for real world items such as
     * an [[ArchiveComponent]] held by an [[ArchiveOrganization]]. This property is not suitable for use as a general Web access control mechanism. It
     * is expressed only in natural language.\n\nFor example "Available by appointment from the Reading Room" or "Accessible only from logged-in accounts ".
     * 
     * @return string|\Vnetby\Schemaorg\DataTypes\DataText|null
     */
    function getConditionsOfAccess()
    {
        return $this->getProp('conditionsOfAccess');
    }

    /**
     * The predominant type or kind characterizing the learning resource. For example, 'presentation', 'handout'.
     * @return string|\Vnetby\Schemaorg\Types\Thing\Intangible\DefinedTerm\DefinedTerm|\Vnetby\Schemaorg\DataTypes\DataText|null
     */
    function getLearningResourceType()
    {
        return $this->getProp('learningResourceType');
    }

    /**
     * Indicates a page or other link involved in archival of a [[CreativeWork]]. In the case of [[MediaReview]], the items in a
     * [[MediaReviewItem]] may often become inaccessible, but be archived by archival, journalistic, activist, or law enforcement organizations. In such cases, the referenced
     * page may not directly publish the content.
     * @return string|\Vnetby\Schemaorg\DataTypes\DataURL|\Vnetby\Schemaorg\Types\Thing\CreativeWork\WebPage\WebPage|null
     */
    function getArchivedAt()
    {
        return $this->getProp('archivedAt');
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
     * A standardized size of a product or creative work, specified either through a simple textual string (for example 'XL', '32Wx34L'), a
     * QuantitativeValue with a unitCode, or a comprehensive and structured [[SizeSpecification]]; in other cases, the [[width]], [[height]], [[depth]] and [[weight]] properties may
     * be more applicable. 
     * @return string|\Vnetby\Schemaorg\Types\Thing\Intangible\DefinedTerm\DefinedTerm|\Vnetby\Schemaorg\Types\Thing\Intangible\StructuredValue\QuantitativeValue\QuantitativeValue|\Vnetby\Schemaorg\DataTypes\DataText|\Vnetby\Schemaorg\Types\Thing\Intangible\Enumeration\QualitativeValue\SizeSpecification|null
     */
    function getSize()
    {
        return $this->getProp('size');
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
     * Identifies input methods that are sufficient to fully control the described resource. Values should be drawn from the [approved vocabulary](https://www.w3.org/2021/a11y-discov-vocab/latest/#accessibilityControl-vocabulary).
     * @return string|\Vnetby\Schemaorg\DataTypes\DataText|null
     */
    function getAccessibilityControl()
    {
        return $this->getProp('accessibilityControl');
    }

    /**
     * Headline of the article.
     * @return string|\Vnetby\Schemaorg\DataTypes\DataText|null
     */
    function getHeadline()
    {
        return $this->getProp('headline');
    }

    /**
     * Indicates a page documenting how licenses can be purchased or otherwise acquired, for the current item.
     * @return string|\Vnetby\Schemaorg\DataTypes\DataURL|\Vnetby\Schemaorg\Types\Thing\CreativeWork\CreativeWork|null
     */
    function getAcquireLicensePage()
    {
        return $this->getProp('acquireLicensePage');
    }

    /**
     * An abstract is a short description that summarizes a [[CreativeWork]].
     * @return string|\Vnetby\Schemaorg\DataTypes\DataText|null
     */
    function getAbstract()
    {
        return $this->getProp('abstract');
    }

    /**
     * The number of comments this CreativeWork (e.g. Article, Question or Answer) has received. This is most applicable to works published in
     * Web sites with commenting system; additional comments may exist elsewhere.
     * @return string|int|\Vnetby\Schemaorg\DataTypes\DataInteger|null
     */
    function getCommentCount()
    {
        return $this->getProp('commentCount');
    }

    /**
     * The item being described is intended to assess the competency or learning outcome defined by the referenced term.
     * @return string|\Vnetby\Schemaorg\Types\Thing\Intangible\DefinedTerm\DefinedTerm|\Vnetby\Schemaorg\DataTypes\DataText|null
     */
    function getAssesses()
    {
        return $this->getProp('assesses');
    }

    /**
     * The date on which the CreativeWork was created or the item was added to a DataFeed.
     * @return string|\Vnetby\Schemaorg\DataTypes\DataDateTime|\Vnetby\Schemaorg\DataTypes\DataDate|null
     */
    function getDateCreated()
    {
        return $this->getProp('dateCreated');
    }

    /**
     * Date of first broadcast/publication.
     * @return string|\Vnetby\Schemaorg\DataTypes\DataDate|\Vnetby\Schemaorg\DataTypes\DataDateTime|null
     */
    function getDatePublished()
    {
        return $this->getProp('datePublished');
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
     * Indicates an item or CreativeWork that is part of this item, or CreativeWork (in some sense).
     * @return \Vnetby\Schemaorg\Types\Thing\CreativeWork\CreativeWork|null
     */
    function getHasPart()
    {
        return $this->getProp('hasPart');
    }

    /**
     * A human-readable summary of specific accessibility features or deficiencies, consistent with the other accessibility metadata but expressing subtleties such as "short
     * descriptions are present but long descriptions will be needed for non-visual users" or "short descriptions are present and no long descriptions
     * are needed".
     * @return string|\Vnetby\Schemaorg\DataTypes\DataText|null
     */
    function getAccessibilitySummary()
    {
        return $this->getProp('accessibilitySummary');
    }

    /**
     * A license document that applies to this structured data, typically indicated by URL.
     * @return string|\Vnetby\Schemaorg\DataTypes\DataURL|\Vnetby\Schemaorg\Types\Thing\CreativeWork\CreativeWork|null
     */
    function getSdLicense()
    {
        return $this->getProp('sdLicense');
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
     * Text of a notice appropriate for describing the copyright aspects of this Creative Work, ideally indicating the owner of the copyright
     * for the Work.
     * @return string|\Vnetby\Schemaorg\DataTypes\DataText|null
     */
    function getCopyrightNotice()
    {
        return $this->getProp('copyrightNotice');
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
     * Fictional person connected with a creative work.
     * @return \Vnetby\Schemaorg\Types\Thing\Person\Person|null
     */
    function getCharacter()
    {
        return $this->getProp('character');
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
     * The predominant mode of learning supported by the learning resource. Acceptable values are 'active', 'expositive', or 'mixed'.
     * @return string|\Vnetby\Schemaorg\DataTypes\DataText|null
     */
    function getInteractivityType()
    {
        return $this->getProp('interactivityType');
    }

    /**
     * Media type typically expressed using a MIME format (see [IANA site](http://www.iana.org/assignments/media-types/media-types.xhtml) and [MDN reference](https://developer.mozilla.org/en-US/docs/Web/HTTP/Basics_of_HTTP/MIME_types)), e.g. application/zip for a SoftwareApplication binary, audio/mpeg
     * for .mp3 etc. In cases where a [[CreativeWork]] has several media type representations, [[encoding]] can be used to indicate each [[MediaObject]]
     * alongside particular [[encodingFormat]] information. Unregistered or niche encoding and file formats can be indicated instead via the most appropriate URL, e.g.
     * defining Web page or a Wikipedia/Wikidata entry.
     * @return string|\Vnetby\Schemaorg\DataTypes\DataURL|\Vnetby\Schemaorg\DataTypes\DataText|null
     */
    function getEncodingFormat()
    {
        return $this->getProp('encodingFormat');
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
     * The purpose of a work in the context of education; for example, 'assignment', 'group work'.
     * @return string|\Vnetby\Schemaorg\Types\Thing\Intangible\DefinedTerm\DefinedTerm|\Vnetby\Schemaorg\DataTypes\DataText|null
     */
    function getEducationalUse()
    {
        return $this->getProp('educationalUse');
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
     * Indicates whether this content is family friendly.
     * @return bool|\Vnetby\Schemaorg\DataTypes\DataBoolean|null
     */
    function getIsFamilyFriendly()
    {
        return $this->getProp('isFamilyFriendly');
    }

    /**
     * The creator/author of this CreativeWork. This is the same as the Author property for CreativeWork.
     * @return \Vnetby\Schemaorg\Types\Thing\Organization\Organization|\Vnetby\Schemaorg\Types\Thing\Person\Person|null
     */
    function getCreator()
    {
        return $this->getProp('creator');
    }

    /**
     * An award won by or for this item.
     * @return string|\Vnetby\Schemaorg\DataTypes\DataText|null
     */
    function getAward()
    {
        return $this->getProp('award');
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
     * Indicates the party responsible for generating and publishing the current structured data markup, typically in cases where the structured data is
     * derived automatically from existing published content but published on a different site. For example, student projects and open data initiatives often
     * re-publish existing content with more explicitly structured metadata. The [[sdPublisher]] property helps make such practices more explicit.
     * @return \Vnetby\Schemaorg\Types\Thing\Person\Person|\Vnetby\Schemaorg\Types\Thing\Organization\Organization|null
     */
    function getSdPublisher()
    {
        return $this->getProp('sdPublisher');
    }

    /**
     * A characteristic of the described resource that is physiologically dangerous to some users. Related to WCAG 2.0 guideline 2.3. Values should
     * be drawn from the [approved vocabulary](https://www.w3.org/2021/a11y-discov-vocab/latest/#accessibilityHazard-vocabulary).
     * @return string|\Vnetby\Schemaorg\DataTypes\DataText|null
     */
    function getAccessibilityHazard()
    {
        return $this->getProp('accessibilityHazard');
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
     * A thumbnail image relevant to the Thing.
     * @return string|\Vnetby\Schemaorg\DataTypes\DataURL|null
     */
    function getThumbnailUrl()
    {
        return $this->getProp('thumbnailUrl');
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
     * A license document that applies to this content, typically indicated by URL.
     * @return string|\Vnetby\Schemaorg\DataTypes\DataURL|\Vnetby\Schemaorg\Types\Thing\CreativeWork\CreativeWork|null
     */
    function getLicense()
    {
        return $this->getProp('license');
    }

    /**
     * The human sensory perceptual system or cognitive faculty through which a person may process or perceive information. Values should be drawn
     * from the [approved vocabulary](https://www.w3.org/2021/a11y-discov-vocab/latest/#accessMode-vocabulary).
     * @return string|\Vnetby\Schemaorg\DataTypes\DataText|null
     */
    function getAccessMode()
    {
        return $this->getProp('accessMode');
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
     * An embedded video object.
     * @return \Vnetby\Schemaorg\Types\Thing\CreativeWork\MediaObject\VideoObject\VideoObject|\Vnetby\Schemaorg\Types\Thing\CreativeWork\Clip\Clip|null
     */
    function getVideo()
    {
        return $this->getProp('video');
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
     * @return string|\Vnetby\Schemaorg\DataTypes\DataText|\Vnetby\Schemaorg\DataTypes\DataURL|\Vnetby\Schemaorg\DataTypes\DataDateTime|null
     */
    function getTemporalCoverage()
    {
        return $this->getProp('temporalCoverage');
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
     * An offer to provide this item&#x2014;for example, an offer to sell a product, rent the DVD of a movie, perform a
     * service, or give away tickets to an event. Use [[businessFunction]] to indicate the kind of transaction offered, i.e. sell, lease, etc.
     * This property can also be used to describe a [[Demand]]. While this property is listed as expected on a number of
     * common types, it can be used in others. In that case, using a second type, such as Product or a subtype
     * of Product, can clarify the nature of the offer. 
     * @return \Vnetby\Schemaorg\Types\Thing\Intangible\Offer\Offer|\Vnetby\Schemaorg\Types\Thing\Intangible\Demand|null
     */
    function getOffers()
    {
        return $this->getProp('offers');
    }

    /**
     * A pattern that something has, for example 'polka dot', 'striped', 'Canadian flag'. Values are typically expressed as text, although links to
     * controlled value schemes are also supported.
     * @return string|\Vnetby\Schemaorg\Types\Thing\Intangible\DefinedTerm\DefinedTerm|\Vnetby\Schemaorg\DataTypes\DataText|null
     */
    function getPattern()
    {
        return $this->getProp('pattern');
    }

    /**
     * Text that can be used to credit person(s) and/or organization(s) associated with a published Creative Work.
     * @return string|\Vnetby\Schemaorg\DataTypes\DataText|null
     */
    function getCreditText()
    {
        return $this->getProp('creditText');
    }

    /**
     * The position of an item in a series or sequence of items.
     * @return string|int|\Vnetby\Schemaorg\DataTypes\DataInteger|\Vnetby\Schemaorg\DataTypes\DataText|null
     */
    function getPosition()
    {
        return $this->getProp('position');
    }

    /**
     * Organization or person who adapts a creative work to different languages, regional differences and technical requirements of a target market, or
     * that translates during some event.
     * @return \Vnetby\Schemaorg\Types\Thing\Organization\Organization|\Vnetby\Schemaorg\Types\Thing\Person\Person|null
     */
    function getTranslator()
    {
        return $this->getProp('translator');
    }

    /**
     * The schema.org [[usageInfo]] property indicates further information about a [[CreativeWork]]. This property is applicable both to works that are freely available
     * and to those that require payment or other transactions. It can reference additional information, e.g. community expectations on preferred linking and
     * citation conventions, as well as purchasing details. For something that can be commercially licensed, usageInfo can provide detailed, resource-specific information about
     * licensing options. This property can be used alongside the license property which indicates license(s) applicable to some piece of content. The
     * usageInfo property can provide information about other licensing options, e.g. acquiring commercial usage rights for an image that is also available
     * under non-commercial creative commons licenses.
     * @return string|\Vnetby\Schemaorg\DataTypes\DataURL|\Vnetby\Schemaorg\Types\Thing\CreativeWork\CreativeWork|null
     */
    function getUsageInfo()
    {
        return $this->getProp('usageInfo');
    }

    /**
     * The publisher of the creative work.
     * @return \Vnetby\Schemaorg\Types\Thing\Person\Person|\Vnetby\Schemaorg\Types\Thing\Organization\Organization|null
     */
    function getPublisher()
    {
        return $this->getProp('publisher');
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
     * A material that something is made from, e.g. leather, wool, cotton, paper.
     * @return string|\Vnetby\Schemaorg\DataTypes\DataText|\Vnetby\Schemaorg\DataTypes\DataURL|\Vnetby\Schemaorg\Types\Thing\Product\Product|null
     */
    function getMaterial()
    {
        return $this->getProp('material');
    }

    /**
     * The "temporal" property can be used in cases where more specific properties (e.g. [[temporalCoverage]], [[dateCreated]], [[dateModified]], [[datePublished]]) are not known to
     * be appropriate.
     * @return string|\Vnetby\Schemaorg\DataTypes\DataText|\Vnetby\Schemaorg\DataTypes\DataDateTime|null
     */
    function getTemporal()
    {
        return $this->getProp('temporal');
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
     * The typical expected age range, e.g. '7-9', '11-'.
     * @return string|\Vnetby\Schemaorg\DataTypes\DataText|null
     */
    function getTypicalAgeRange()
    {
        return $this->getProp('typicalAgeRange');
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
     * Date the content expires and is no longer useful or available. For example a [[VideoObject]] or [[NewsArticle]] whose availability or relevance
     * is time-limited, or a [[ClaimReview]] fact check whose publisher wants to indicate that it may no longer be relevant (or helpful
     * to highlight) after some date.
     * @return string|\Vnetby\Schemaorg\DataTypes\DataDateTime|\Vnetby\Schemaorg\DataTypes\DataDate|null
     */
    function getExpires()
    {
        return $this->getProp('expires');
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
     * The work that this work has been translated from. E.g. 物种起源 is a translationOf “On the Origin of Species”.
     * @return \Vnetby\Schemaorg\Types\Thing\CreativeWork\CreativeWork|null
     */
    function getTranslationOfWork()
    {
        return $this->getProp('translationOfWork');
    }

    /**
     * A resource from which this work is derived or from which it is a modification or adaptation.
     * @return string|\Vnetby\Schemaorg\Types\Thing\Product\Product|\Vnetby\Schemaorg\DataTypes\DataURL|\Vnetby\Schemaorg\Types\Thing\CreativeWork\CreativeWork|null
     */
    function getIsBasedOn()
    {
        return $this->getProp('isBasedOn');
    }

    /**
     * A link to the page containing the comments of the CreativeWork.
     * @return string|\Vnetby\Schemaorg\DataTypes\DataURL|null
     */
    function getDiscussionUrl()
    {
        return $this->getProp('discussionUrl');
    }

    /**
     * The quantity of the materials being described or an expression of the physical space they occupy.
     * @return string|\Vnetby\Schemaorg\Types\Thing\Intangible\StructuredValue\QuantitativeValue\QuantitativeValue|\Vnetby\Schemaorg\DataTypes\DataText|null
     */
    function getMaterialExtent()
    {
        return $this->getProp('materialExtent');
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
     * A secondary title of the CreativeWork.
     * @return string|\Vnetby\Schemaorg\DataTypes\DataText|null
     */
    function getAlternativeHeadline()
    {
        return $this->getProp('alternativeHeadline');
    }

    /**
     * An embedded audio object.
     * @return \Vnetby\Schemaorg\Types\Thing\CreativeWork\Clip\Clip|\Vnetby\Schemaorg\Types\Thing\CreativeWork\MusicRecording|\Vnetby\Schemaorg\Types\Thing\CreativeWork\MediaObject\AudioObject\AudioObject|null
     */
    function getAudio()
    {
        return $this->getProp('audio');
    }

    /**
     * The status of a creative work in terms of its stage in a lifecycle. Example terms include Incomplete, Draft, Published, Obsolete.
     * Some organizations define a set of terms for the stages of their publication lifecycle.
     * @return string|\Vnetby\Schemaorg\Types\Thing\Intangible\DefinedTerm\DefinedTerm|\Vnetby\Schemaorg\DataTypes\DataText|null
     */
    function getCreativeWorkStatus()
    {
        return $this->getProp('creativeWorkStatus');
    }

    /**
     * The publishingPrinciples property indicates (typically via [[URL]]) a document describing the editorial principles of an [[Organization]] (or individual, e.g. a [[Person]]
     * writing a blog) that relate to their activities as a publisher, e.g. ethics or diversity policies. When applied to a [[CreativeWork]]
     * (e.g. [[NewsArticle]]) the principles are those of the party primarily responsible for the creation of the [[CreativeWork]]. While such policies are
     * most typically expressed in natural language, sometimes related information (e.g. indicating a [[funder]]) can be expressed using schema.org terminology. 
     * @return string|\Vnetby\Schemaorg\DataTypes\DataURL|\Vnetby\Schemaorg\Types\Thing\CreativeWork\CreativeWork|null
     */
    function getPublishingPrinciples()
    {
        return $this->getProp('publishingPrinciples');
    }

    /**
     * An [EIDR](https://eidr.org/) (Entertainment Identifier Registry) [[identifier]] representing a specific edit / edition for a work of film or television. For example,
     * the motion picture known as "Ghostbusters" whose [[titleEIDR]] is "10.5240/7EC7-228A-510A-053E-CBB8-J" has several edits, e.g. "10.5240/1F2A-E1C5-680A-14C6-E76B-I" and "10.5240/8A35-3BEE-6497-5D12-9E4F-3". Since schema.org types like
     * [[Movie]] and [[TVEpisode]] can be used for both works and their multiple expressions, it is possible to use [[titleEIDR]] alone (for
     * a general description), or alongside [[editEIDR]] for a more edit-specific description. 
     * @return string|\Vnetby\Schemaorg\DataTypes\DataText|\Vnetby\Schemaorg\DataTypes\DataURL|null
     */
    function getEditEIDR()
    {
        return $this->getProp('editEIDR');
    }

    /**
     * Indicates an item or CreativeWork that this item, or CreativeWork (in some sense), is part of.
     * @return string|\Vnetby\Schemaorg\DataTypes\DataURL|\Vnetby\Schemaorg\Types\Thing\CreativeWork\CreativeWork|null
     */
    function getIsPartOf()
    {
        return $this->getProp('isPartOf');
    }

    /**
     * A citation or reference to another creative work, such as another publication, web page, scholarly article, etc.
     * @return string|\Vnetby\Schemaorg\DataTypes\DataText|\Vnetby\Schemaorg\Types\Thing\CreativeWork\CreativeWork|null
     */
    function getCitation()
    {
        return $this->getProp('citation');
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
     * A secondary contributor to the CreativeWork or Event.
     * @return \Vnetby\Schemaorg\Types\Thing\Person\Person|\Vnetby\Schemaorg\Types\Thing\Organization\Organization|null
     */
    function getContributor()
    {
        return $this->getProp('contributor');
    }

    /**
     * The author of this content or rating. Please note that author is special in that HTML 5 provides a special mechanism
     * for indicating authorship via the rel tag. That is equivalent to this and may be used interchangeably.
     * @return \Vnetby\Schemaorg\Types\Thing\Person\Person|\Vnetby\Schemaorg\Types\Thing\Organization\Organization|null
     */
    function getAuthor()
    {
        return $this->getProp('author');
    }

    /**
     * A flag to signal that the item, event, or place is accessible for free.
     * @return bool|\Vnetby\Schemaorg\DataTypes\DataBoolean|null
     */
    function getIsAccessibleForFree()
    {
        return $this->getProp('isAccessibleForFree');
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
     * A media object that encodes this CreativeWork. This property is a synonym for encoding.
     * @return \Vnetby\Schemaorg\Types\Thing\CreativeWork\MediaObject\MediaObject|null
     */
    function getAssociatedMedia()
    {
        return $this->getProp('associatedMedia');
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
     * The item being described is intended to help a person learn the competency or learning outcome defined by the referenced term.
     * @return string|\Vnetby\Schemaorg\Types\Thing\Intangible\DefinedTerm\DefinedTerm|\Vnetby\Schemaorg\DataTypes\DataText|null
     */
    function getTeaches()
    {
        return $this->getProp('teaches');
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
     * The person or organization who produced the work (e.g. music album, movie, TV/radio series etc.).
     * @return \Vnetby\Schemaorg\Types\Thing\Person\Person|\Vnetby\Schemaorg\Types\Thing\Organization\Organization|null
     */
    function getProducer()
    {
        return $this->getProp('producer');
    }

    /**
     * Content features of the resource, such as accessible media, alternatives and supported enhancements for accessibility. Values should be drawn from the
     * [approved vocabulary](https://www.w3.org/2021/a11y-discov-vocab/latest/#accessibilityFeature-vocabulary).
     * @return string|\Vnetby\Schemaorg\DataTypes\DataText|null
     */
    function getAccessibilityFeature()
    {
        return $this->getProp('accessibilityFeature');
    }
}
