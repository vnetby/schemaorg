<?php

/**
 * @see https://schema.org/Service
 * A service provided by an organization, e.g. delivery service, print services, etc.
 */

namespace Vnetby\Schemaorg\Types\Thing\Intangible\Service;

class Service extends \Vnetby\Schemaorg\Types\Thing\Intangible\Intangible
{
    const TYPE = 'Service';

    /**
     * A category for the item. Greater signs or slashes can be used to informally indicate a category hierarchy.
     * @var string|\Vnetby\Schemaorg\DataTypes\DataText|\Vnetby\Schemaorg\Types\Thing\Intangible\Enumeration\PhysicalActivityCategory\PhysicalActivityCategory|\Vnetby\Schemaorg\DataTypes\DataURL|\Vnetby\Schemaorg\Types\Thing\Intangible\DefinedTerm\CategoryCode\CategoryCode|\Vnetby\Schemaorg\Types\Thing\Thing
     */
    public $category;

    /**
     * Indicates an OfferCatalog listing for this Organization, Person, or Service.
     * @var \Vnetby\Schemaorg\Types\Thing\Intangible\ItemList\OfferCatalog
     */
    public $hasOfferCatalog;

    /**
     * An offer to provide this item&#x2014;for example, an offer to sell a product, rent the DVD of a movie, perform a
     * service, or give away tickets to an event. Use [[businessFunction]] to indicate the kind of transaction offered, i.e. sell, lease, etc.
     * This property can also be used to describe a [[Demand]]. While this property is listed as expected on a number of
     * common types, it can be used in others. In that case, using a second type, such as Product or a subtype
     * of Product, can clarify the nature of the offer. 
     * @var \Vnetby\Schemaorg\Types\Thing\Intangible\Demand|\Vnetby\Schemaorg\Types\Thing\Intangible\Offer\Offer
     */
    public $offers;

    /**
     * An intended audience, i.e. a group for whom something was created.
     * @var \Vnetby\Schemaorg\Types\Thing\Intangible\Audience\Audience
     */
    public $audience;

    /**
     * The tangible thing generated by the service, e.g. a passport, permit, etc.
     * @var \Vnetby\Schemaorg\Types\Thing\Thing
     */
    public $serviceOutput;

    /**
     * The service provider, service operator, or service performer; the goods producer. Another party (a seller) may offer those services or goods
     * on behalf of the provider. A provider may also serve as the seller.
     * @var \Vnetby\Schemaorg\Types\Thing\Organization\Organization|\Vnetby\Schemaorg\Types\Thing\Person\Person
     */
    public $provider;

    /**
     * The brand(s) associated with a product or service, or the brand(s) maintained by an organization or business person.
     * @var \Vnetby\Schemaorg\Types\Thing\Intangible\Brand|\Vnetby\Schemaorg\Types\Thing\Organization\Organization
     */
    public $brand;

    /**
     * A pointer to another, somehow related product (or multiple products).
     * @var \Vnetby\Schemaorg\Types\Thing\Product\Product|\Vnetby\Schemaorg\Types\Thing\Intangible\Service\Service
     */
    public $isRelatedTo;

    /**
     * The overall rating, based on a collection of reviews or ratings, of the item.
     * @var \Vnetby\Schemaorg\Types\Thing\Intangible\Rating\AggregateRating\AggregateRating
     */
    public $aggregateRating;

    /**
     * The type of service being offered, e.g. veterans' benefits, emergency relief, etc.
     * @var string|\Vnetby\Schemaorg\Types\Thing\Intangible\Enumeration\GovernmentBenefitsType\GovernmentBenefitsType|\Vnetby\Schemaorg\DataTypes\DataText
     */
    public $serviceType;

    /**
     * Indicates the mobility of a provided service (e.g. 'static', 'dynamic').
     * @var string|\Vnetby\Schemaorg\DataTypes\DataText
     */
    public $providerMobility;

    /**
     * A review of the item.
     * @var \Vnetby\Schemaorg\Types\Thing\CreativeWork\Review\Review
     */
    public $review;

    /**
     * An entity that arranges for an exchange between a buyer and a seller. In most cases a broker never acquires or
     * releases ownership of a product or service involved in an exchange. If it is not clear whether an entity is a
     * broker, seller, or buyer, the latter two terms are preferred.
     * @var \Vnetby\Schemaorg\Types\Thing\Person\Person|\Vnetby\Schemaorg\Types\Thing\Organization\Organization
     */
    public $broker;

    /**
     * Human-readable terms of service documentation.
     * @var string|\Vnetby\Schemaorg\DataTypes\DataURL|\Vnetby\Schemaorg\DataTypes\DataText
     */
    public $termsOfService;

    /**
     * The hours during which this service or contact is available.
     * @var \Vnetby\Schemaorg\Types\Thing\Intangible\StructuredValue\OpeningHoursSpecification
     */
    public $hoursAvailable;

    /**
     * The geographic area where a service or offered item is provided.
     * @var string|\Vnetby\Schemaorg\Types\Thing\Intangible\StructuredValue\GeoShape\GeoShape|\Vnetby\Schemaorg\Types\Thing\Place\Place|\Vnetby\Schemaorg\Types\Thing\Place\AdministrativeArea\AdministrativeArea|\Vnetby\Schemaorg\DataTypes\DataText
     */
    public $areaServed;

    /**
     * A means of accessing the service (e.g. a phone bank, a web site, a location, etc.).
     * @var \Vnetby\Schemaorg\Types\Thing\Intangible\ServiceChannel
     */
    public $availableChannel;

    /**
     * An award won by or for this item.
     * @var string|\Vnetby\Schemaorg\DataTypes\DataText
     */
    public $award;

    /**
     * A slogan or motto associated with the item.
     * @var string|\Vnetby\Schemaorg\DataTypes\DataText
     */
    public $slogan;

    /**
     * An associated logo.
     * @var string|\Vnetby\Schemaorg\Types\Thing\CreativeWork\MediaObject\ImageObject\ImageObject|\Vnetby\Schemaorg\DataTypes\DataURL
     */
    public $logo;

    /**
     * A pointer to another, functionally similar product (or multiple products).
     * @var \Vnetby\Schemaorg\Types\Thing\Intangible\Service\Service|\Vnetby\Schemaorg\Types\Thing\Product\Product
     */
    public $isSimilarTo;

    /**
     * A category for the item. Greater signs or slashes can be used to informally indicate a category hierarchy.
     * @param string|\Vnetby\Schemaorg\DataTypes\DataText|\Vnetby\Schemaorg\Types\Thing\Intangible\Enumeration\PhysicalActivityCategory\PhysicalActivityCategory|\Vnetby\Schemaorg\DataTypes\DataURL|\Vnetby\Schemaorg\Types\Thing\Intangible\DefinedTerm\CategoryCode\CategoryCode|\Vnetby\Schemaorg\Types\Thing\Thing $value
     * @return static
     */
    function setCategory($value)
    {
        return $this->setProp('category', $value);
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
     * An intended audience, i.e. a group for whom something was created.
     * @param \Vnetby\Schemaorg\Types\Thing\Intangible\Audience\Audience $value
     * @return static
     */
    function setAudience($value)
    {
        return $this->setProp('audience', $value);
    }

    /**
     * The tangible thing generated by the service, e.g. a passport, permit, etc.
     * @param \Vnetby\Schemaorg\Types\Thing\Thing $value
     * @return static
     */
    function setServiceOutput($value)
    {
        return $this->setProp('serviceOutput', $value);
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
     * The brand(s) associated with a product or service, or the brand(s) maintained by an organization or business person.
     * @param \Vnetby\Schemaorg\Types\Thing\Intangible\Brand|\Vnetby\Schemaorg\Types\Thing\Organization\Organization $value
     * @return static
     */
    function setBrand($value)
    {
        return $this->setProp('brand', $value);
    }

    /**
     * A pointer to another, somehow related product (or multiple products).
     * @param \Vnetby\Schemaorg\Types\Thing\Product\Product|\Vnetby\Schemaorg\Types\Thing\Intangible\Service\Service $value
     * @return static
     */
    function setIsRelatedTo($value)
    {
        return $this->setProp('isRelatedTo', $value);
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
     * The type of service being offered, e.g. veterans' benefits, emergency relief, etc.
     * @param string|\Vnetby\Schemaorg\Types\Thing\Intangible\Enumeration\GovernmentBenefitsType\GovernmentBenefitsType|\Vnetby\Schemaorg\DataTypes\DataText $value
     * @return static
     */
    function setServiceType($value)
    {
        return $this->setProp('serviceType', $value);
    }

    /**
     * Indicates the mobility of a provided service (e.g. 'static', 'dynamic').
     * @param string|\Vnetby\Schemaorg\DataTypes\DataText $value
     * @return static
     */
    function setProviderMobility($value)
    {
        return $this->setProp('providerMobility', $value);
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
     * An entity that arranges for an exchange between a buyer and a seller. In most cases a broker never acquires or
     * releases ownership of a product or service involved in an exchange. If it is not clear whether an entity is a
     * broker, seller, or buyer, the latter two terms are preferred.
     * @param \Vnetby\Schemaorg\Types\Thing\Person\Person|\Vnetby\Schemaorg\Types\Thing\Organization\Organization $value
     * @return static
     */
    function setBroker($value)
    {
        return $this->setProp('broker', $value);
    }

    /**
     * Human-readable terms of service documentation.
     * @param string|\Vnetby\Schemaorg\DataTypes\DataURL|\Vnetby\Schemaorg\DataTypes\DataText $value
     * @return static
     */
    function setTermsOfService($value)
    {
        return $this->setProp('termsOfService', $value);
    }

    /**
     * The hours during which this service or contact is available.
     * @param \Vnetby\Schemaorg\Types\Thing\Intangible\StructuredValue\OpeningHoursSpecification $value
     * @return static
     */
    function setHoursAvailable($value)
    {
        return $this->setProp('hoursAvailable', $value);
    }

    /**
     * The geographic area where a service or offered item is provided.
     * @param string|\Vnetby\Schemaorg\Types\Thing\Intangible\StructuredValue\GeoShape\GeoShape|\Vnetby\Schemaorg\Types\Thing\Place\Place|\Vnetby\Schemaorg\Types\Thing\Place\AdministrativeArea\AdministrativeArea|\Vnetby\Schemaorg\DataTypes\DataText $value
     * @return static
     */
    function setAreaServed($value)
    {
        return $this->setProp('areaServed', $value);
    }

    /**
     * A means of accessing the service (e.g. a phone bank, a web site, a location, etc.).
     * @param \Vnetby\Schemaorg\Types\Thing\Intangible\ServiceChannel $value
     * @return static
     */
    function setAvailableChannel($value)
    {
        return $this->setProp('availableChannel', $value);
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
     * A slogan or motto associated with the item.
     * @param string|\Vnetby\Schemaorg\DataTypes\DataText $value
     * @return static
     */
    function setSlogan($value)
    {
        return $this->setProp('slogan', $value);
    }

    /**
     * An associated logo.
     * @param string|\Vnetby\Schemaorg\Types\Thing\CreativeWork\MediaObject\ImageObject\ImageObject|\Vnetby\Schemaorg\DataTypes\DataURL $value
     * @return static
     */
    function setLogo($value)
    {
        return $this->setProp('logo', $value);
    }

    /**
     * A pointer to another, functionally similar product (or multiple products).
     * @param \Vnetby\Schemaorg\Types\Thing\Intangible\Service\Service|\Vnetby\Schemaorg\Types\Thing\Product\Product $value
     * @return static
     */
    function setIsSimilarTo($value)
    {
        return $this->setProp('isSimilarTo', $value);
    }

    /**
     * A category for the item. Greater signs or slashes can be used to informally indicate a category hierarchy.
     * @return string|\Vnetby\Schemaorg\DataTypes\DataText|\Vnetby\Schemaorg\Types\Thing\Intangible\Enumeration\PhysicalActivityCategory\PhysicalActivityCategory|\Vnetby\Schemaorg\DataTypes\DataURL|\Vnetby\Schemaorg\Types\Thing\Intangible\DefinedTerm\CategoryCode\CategoryCode|\Vnetby\Schemaorg\Types\Thing\Thing|null
     */
    function getCategory()
    {
        return $this->getProp('category');
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
     * An intended audience, i.e. a group for whom something was created.
     * @return \Vnetby\Schemaorg\Types\Thing\Intangible\Audience\Audience|null
     */
    function getAudience()
    {
        return $this->getProp('audience');
    }

    /**
     * The tangible thing generated by the service, e.g. a passport, permit, etc.
     * @return \Vnetby\Schemaorg\Types\Thing\Thing|null
     */
    function getServiceOutput()
    {
        return $this->getProp('serviceOutput');
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
     * The brand(s) associated with a product or service, or the brand(s) maintained by an organization or business person.
     * @return \Vnetby\Schemaorg\Types\Thing\Intangible\Brand|\Vnetby\Schemaorg\Types\Thing\Organization\Organization|null
     */
    function getBrand()
    {
        return $this->getProp('brand');
    }

    /**
     * A pointer to another, somehow related product (or multiple products).
     * @return \Vnetby\Schemaorg\Types\Thing\Product\Product|\Vnetby\Schemaorg\Types\Thing\Intangible\Service\Service|null
     */
    function getIsRelatedTo()
    {
        return $this->getProp('isRelatedTo');
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
     * The type of service being offered, e.g. veterans' benefits, emergency relief, etc.
     * @return string|\Vnetby\Schemaorg\Types\Thing\Intangible\Enumeration\GovernmentBenefitsType\GovernmentBenefitsType|\Vnetby\Schemaorg\DataTypes\DataText|null
     */
    function getServiceType()
    {
        return $this->getProp('serviceType');
    }

    /**
     * Indicates the mobility of a provided service (e.g. 'static', 'dynamic').
     * @return string|\Vnetby\Schemaorg\DataTypes\DataText|null
     */
    function getProviderMobility()
    {
        return $this->getProp('providerMobility');
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
     * An entity that arranges for an exchange between a buyer and a seller. In most cases a broker never acquires or
     * releases ownership of a product or service involved in an exchange. If it is not clear whether an entity is a
     * broker, seller, or buyer, the latter two terms are preferred.
     * @return \Vnetby\Schemaorg\Types\Thing\Person\Person|\Vnetby\Schemaorg\Types\Thing\Organization\Organization|null
     */
    function getBroker()
    {
        return $this->getProp('broker');
    }

    /**
     * Human-readable terms of service documentation.
     * @return string|\Vnetby\Schemaorg\DataTypes\DataURL|\Vnetby\Schemaorg\DataTypes\DataText|null
     */
    function getTermsOfService()
    {
        return $this->getProp('termsOfService');
    }

    /**
     * The hours during which this service or contact is available.
     * @return \Vnetby\Schemaorg\Types\Thing\Intangible\StructuredValue\OpeningHoursSpecification|null
     */
    function getHoursAvailable()
    {
        return $this->getProp('hoursAvailable');
    }

    /**
     * The geographic area where a service or offered item is provided.
     * @return string|\Vnetby\Schemaorg\Types\Thing\Intangible\StructuredValue\GeoShape\GeoShape|\Vnetby\Schemaorg\Types\Thing\Place\Place|\Vnetby\Schemaorg\Types\Thing\Place\AdministrativeArea\AdministrativeArea|\Vnetby\Schemaorg\DataTypes\DataText|null
     */
    function getAreaServed()
    {
        return $this->getProp('areaServed');
    }

    /**
     * A means of accessing the service (e.g. a phone bank, a web site, a location, etc.).
     * @return \Vnetby\Schemaorg\Types\Thing\Intangible\ServiceChannel|null
     */
    function getAvailableChannel()
    {
        return $this->getProp('availableChannel');
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
     * A slogan or motto associated with the item.
     * @return string|\Vnetby\Schemaorg\DataTypes\DataText|null
     */
    function getSlogan()
    {
        return $this->getProp('slogan');
    }

    /**
     * An associated logo.
     * @return string|\Vnetby\Schemaorg\Types\Thing\CreativeWork\MediaObject\ImageObject\ImageObject|\Vnetby\Schemaorg\DataTypes\DataURL|null
     */
    function getLogo()
    {
        return $this->getProp('logo');
    }

    /**
     * A pointer to another, functionally similar product (or multiple products).
     * @return \Vnetby\Schemaorg\Types\Thing\Intangible\Service\Service|\Vnetby\Schemaorg\Types\Thing\Product\Product|null
     */
    function getIsSimilarTo()
    {
        return $this->getProp('isSimilarTo');
    }
}
