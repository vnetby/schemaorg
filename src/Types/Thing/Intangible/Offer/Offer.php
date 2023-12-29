<?php

/**
 * @see https://schema.org/Offer
 * An offer to transfer some rights to an item or to provide a service — for example, an offer to sell
 * tickets to an event, to rent the DVD of a movie, to stream a TV show over the internet, to repair
 * a motorcycle, or to loan a book.\n\nNote: As the [[businessFunction]] property, which identifies the form of offer (e.g. sell, lease, repair,
 * dispose), defaults to http://purl.org/goodrelations/v1#Sell; an Offer without a defined businessFunction value can be assumed to be an offer to sell.\n\nFor [GTIN](http://www.gs1.org/barcodes/technical/idkeys/gtin)-related
 * fields, see [Check Digit calculator](http://www.gs1.org/barcodes/support/check_digit_calculator) and [validation guide](http://www.gs1us.org/resources/standards/gtin-validation-guide) from [GS1](http://www.gs1.org/).
 */

namespace Vnetby\Schemaorg\Types\Thing\Intangible\Offer;

class Offer extends \Vnetby\Schemaorg\Types\Thing\Intangible\Intangible
{
    const TYPE = 'Offer';

    /**
     * The type(s) of customers for which the given offer is valid.
     * @var \Vnetby\Schemaorg\Types\Thing\Intangible\Enumeration\BusinessEntityType
     */
    public $eligibleCustomerType;

    /**
     * The duration for which the given offer is valid.
     * @var \Vnetby\Schemaorg\Types\Thing\Intangible\StructuredValue\QuantitativeValue\QuantitativeValue
     */
    public $eligibleDuration;

    /**
     * The ISO 3166-1 (ISO 3166-1 alpha-2) or ISO 3166-2 code, the place, or the GeoShape for the geo-political region(s) for which
     * the offer or delivery charge specification is valid.\n\nSee also [[ineligibleRegion]]. 
     * @var string|\Vnetby\Schemaorg\Types\Thing\Place\Place|\Vnetby\Schemaorg\DataTypes\DataText|\Vnetby\Schemaorg\Types\Thing\Intangible\StructuredValue\GeoShape\GeoShape
     */
    public $eligibleRegion;

    /**
     * The GTIN-12 code of the product, or the product to which the offer refers. The GTIN-12 is the 12-digit GS1 Identification
     * Key composed of a U.P.C. Company Prefix, Item Reference, and Check Digit used to identify trade items. See [GS1 GTIN Summary](http://www.gs1.org/barcodes/technical/idkeys/gtin)
     * for more details.
     * @var string|\Vnetby\Schemaorg\DataTypes\DataText
     */
    public $gtin12;

    /**
     * Length of the lease for some [[Accommodation]], either particular to some [[Offer]] or in some cases intrinsic to the property.
     * @var \Vnetby\Schemaorg\Types\Thing\Intangible\Quantity\Duration|\Vnetby\Schemaorg\Types\Thing\Intangible\StructuredValue\QuantitativeValue\QuantitativeValue
     */
    public $leaseLength;

    /**
     * The [[mobileUrl]] property is provided for specific situations in which data consumers need to determine whether one of several provided URLs
     * is a dedicated 'mobile site'. To discourage over-use, and reflecting intial usecases, the property is expected only on [[Product]] and [[Offer]],
     * rather than [[Thing]]. The general trend in web technology is towards [responsive design](https://en.wikipedia.org/wiki/Responsive_web_design) in which content can be flexibly adapted to
     * a wide range of browsing environments. Pages and sites referenced with the long-established [[url]] property should ideally also be usable on
     * a wide variety of devices, including mobile phones. In most cases, it would be pointless and counter productive to attempt to
     * update all [[url]] markup to use [[mobileUrl]] for more mobile-oriented pages. The property is intended for the case when items (primarily
     * [[Product]] and [[Offer]]) have extra URLs hosted on an additional "mobile site" alongside the main one. It should not be taken
     * as an endorsement of this publication style. 
     * @var string|\Vnetby\Schemaorg\DataTypes\DataText
     */
    public $mobileUrl;

    /**
     * The transaction volume, in a monetary unit, for which the offer or price specification is valid, e.g. for indicating a minimal
     * purchasing volume, to express free shipping above a certain order volume, or to limit the acceptance of credit cards to purchases
     * to a certain minimal amount.
     * @var \Vnetby\Schemaorg\Types\Thing\Intangible\StructuredValue\PriceSpecification\PriceSpecification
     */
    public $eligibleTransactionVolume;

    /**
     * The date when the item becomes valid.
     * @var string|\Vnetby\Schemaorg\DataTypes\DataDateTime|\Vnetby\Schemaorg\DataTypes\DataDate
     */
    public $validFrom;

    /**
     * The amount of time that is required between accepting the offer and the actual usage of the resource or service.
     * @var \Vnetby\Schemaorg\Types\Thing\Intangible\StructuredValue\QuantitativeValue\QuantitativeValue
     */
    public $advanceBookingRequirement;

    /**
     * The currency of the price, or a price component when attached to [[PriceSpecification]] and its subtypes.\n\nUse standard formats: [ISO 4217 currency
     * format](http://en.wikipedia.org/wiki/ISO_4217), e.g. "USD"; [Ticker symbol](https://en.wikipedia.org/wiki/List_of_cryptocurrencies) for cryptocurrencies, e.g. "BTC"; well known names for [Local Exchange Trading Systems](https://en.wikipedia.org/wiki/Local_exchange_trading_system) (LETS) and other currency
     * types, e.g. "Ithaca HOUR".
     * @var string|\Vnetby\Schemaorg\DataTypes\DataText
     */
    public $priceCurrency;

    /**
     * An item being offered (or demanded). The transactional nature of the offer or demand is documented using [[businessFunction]], e.g. sell, lease
     * etc. While several common expected types are listed explicitly in this definition, others can be used. Using a second type, such
     * as Product or a subtype of Product, can clarify the nature of the offer.
     * @var \Vnetby\Schemaorg\Types\Thing\Intangible\Offer\AggregateOffer|\Vnetby\Schemaorg\Types\Thing\Intangible\Trip\Trip|\Vnetby\Schemaorg\Types\Thing\CreativeWork\CreativeWork|\Vnetby\Schemaorg\Types\Thing\Intangible\Service\Service|\Vnetby\Schemaorg\Types\Thing\Product\Product|\Vnetby\Schemaorg\Types\Thing\Intangible\MenuItem|\Vnetby\Schemaorg\Types\Thing\Event\Event
     */
    public $itemOffered;

    /**
     * The offer price of a product, or of a price component when attached to PriceSpecification and its subtypes.\n\nUsage guidelines:\n\n* Use the
     * [[priceCurrency]] property (with standard formats: [ISO 4217 currency format](http://en.wikipedia.org/wiki/ISO_4217), e.g. "USD"; [Ticker symbol](https://en.wikipedia.org/wiki/List_of_cryptocurrencies) for cryptocurrencies, e.g. "BTC"; well known names for
     * [Local Exchange Trading Systems](https://en.wikipedia.org/wiki/Local_exchange_trading_system) (LETS) and other currency types, e.g. "Ithaca HOUR") instead of including [ambiguous symbols](http://en.wikipedia.org/wiki/Dollar_sign#Currencies_that_use_the_dollar_or_peso_sign) such as '$' in
     * the value.\n* Use '.' (Unicode 'FULL STOP' (U+002E)) rather than ',' to indicate a decimal point. Avoid using these symbols as
     * a readability separator.\n* Note that both [RDFa](http://www.w3.org/TR/xhtml-rdfa-primer/#using-the-content-attribute) and Microdata syntax allow the use of a "content=" attribute for publishing simple machine-readable
     * values alongside more human-friendly formatting.\n* Use values from 0123456789 (Unicode 'DIGIT ZERO' (U+0030) to 'DIGIT NINE' (U+0039)) rather than superficially similar
     * Unicode symbols. 
     * @var string|int|float|\Vnetby\Schemaorg\DataTypes\DataNumber|\Vnetby\Schemaorg\DataTypes\DataText
     */
    public $price;

    /**
     * The end of the availability of the product or service included in the offer.
     * @var string|\Vnetby\Schemaorg\DataTypes\DataTime|\Vnetby\Schemaorg\DataTypes\DataDate|\Vnetby\Schemaorg\DataTypes\DataDateTime
     */
    public $availabilityEnds;

    /**
     * An additional offer that can only be obtained in combination with the first base offer (e.g. supplements and extensions that are
     * available for a surcharge).
     * @var \Vnetby\Schemaorg\Types\Thing\Intangible\Offer\Offer
     */
    public $addOn;

    /**
     * Specifies a MerchantReturnPolicy that may be applicable.
     * @var \Vnetby\Schemaorg\Types\Thing\Intangible\MerchantReturnPolicy
     */
    public $hasMerchantReturnPolicy;

    /**
     * A category for the item. Greater signs or slashes can be used to informally indicate a category hierarchy.
     * @var string|\Vnetby\Schemaorg\DataTypes\DataText|\Vnetby\Schemaorg\Types\Thing\Intangible\Enumeration\PhysicalActivityCategory\PhysicalActivityCategory|\Vnetby\Schemaorg\DataTypes\DataURL|\Vnetby\Schemaorg\Types\Thing\Intangible\DefinedTerm\CategoryCode\CategoryCode|\Vnetby\Schemaorg\Types\Thing\Thing
     */
    public $category;

    /**
     * The Manufacturer Part Number (MPN) of the product, or the product to which the offer refers.
     * @var string|\Vnetby\Schemaorg\DataTypes\DataText
     */
    public $mpn;

    /**
     * The beginning of the availability of the product or service included in the offer.
     * @var string|\Vnetby\Schemaorg\DataTypes\DataDateTime|\Vnetby\Schemaorg\DataTypes\DataTime|\Vnetby\Schemaorg\DataTypes\DataDate
     */
    public $availabilityStarts;

    /**
     * The interval and unit of measurement of ordering quantities for which the offer or price specification is valid. This allows e.g.
     * specifying that a certain freight charge is valid only for a certain quantity.
     * @var \Vnetby\Schemaorg\Types\Thing\Intangible\StructuredValue\QuantitativeValue\QuantitativeValue
     */
    public $eligibleQuantity;

    /**
     * The place(s) from which the offer can be obtained (e.g. store locations).
     * @var \Vnetby\Schemaorg\Types\Thing\Place\Place
     */
    public $availableAtOrFrom;

    /**
     * Indicates whether this content is family friendly.
     * @var bool|\Vnetby\Schemaorg\DataTypes\DataBoolean
     */
    public $isFamilyFriendly;

    /**
     * The Stock Keeping Unit (SKU), i.e. a merchant-specific identifier for a product or service, or the product to which the offer
     * refers.
     * @var string|\Vnetby\Schemaorg\DataTypes\DataText
     */
    public $sku;

    /**
     * An entity which offers (sells / leases / lends / loans) the services / goods. A seller may also be a
     * provider.
     * @var \Vnetby\Schemaorg\Types\Thing\Person\Person|\Vnetby\Schemaorg\Types\Thing\Organization\Organization
     */
    public $seller;

    /**
     * The serial number or any alphanumeric identifier of a particular product. When attached to an offer, it is a shortcut for
     * the serial number of the product included in the offer.
     * @var string|\Vnetby\Schemaorg\DataTypes\DataText
     */
    public $serialNumber;

    /**
     * The GTIN-14 code of the product, or the product to which the offer refers. See [GS1 GTIN Summary](http://www.gs1.org/barcodes/technical/idkeys/gtin) for more details.
     * @var string|\Vnetby\Schemaorg\DataTypes\DataText
     */
    public $gtin14;

    /**
     * One or more detailed price specifications, indicating the unit price and delivery or payment charges.
     * @var \Vnetby\Schemaorg\Types\Thing\Intangible\StructuredValue\PriceSpecification\PriceSpecification
     */
    public $priceSpecification;

    /**
     * The typical delay between the receipt of the order and the goods either leaving the warehouse or being prepared for pickup,
     * in case the delivery method is on site pickup.
     * @var \Vnetby\Schemaorg\Types\Thing\Intangible\StructuredValue\QuantitativeValue\QuantitativeValue
     */
    public $deliveryLeadTime;

    /**
     * The overall rating, based on a collection of reviews or ratings, of the item.
     * @var \Vnetby\Schemaorg\Types\Thing\Intangible\Rating\AggregateRating\AggregateRating
     */
    public $aggregateRating;

    /**
     * The ISO 3166-1 (ISO 3166-1 alpha-2) or ISO 3166-2 code, the place, or the GeoShape for the geo-political region(s) for which
     * the offer or delivery charge specification is not valid, e.g. a region where the transaction is not allowed.\n\nSee also [[eligibleRegion]]. 
     * @var string|\Vnetby\Schemaorg\Types\Thing\Intangible\StructuredValue\GeoShape\GeoShape|\Vnetby\Schemaorg\Types\Thing\Place\Place|\Vnetby\Schemaorg\DataTypes\DataText
     */
    public $ineligibleRegion;

    /**
     * A URL template (RFC 6570) for a checkout page for an offer. This approach allows merchants to specify a URL for
     * online checkout of the offered product, by interpolating parameters such as the logged in user ID, product ID, quantity, discount code
     * etc. Parameter naming and standardization are not specified here.
     * @var string|\Vnetby\Schemaorg\DataTypes\DataText
     */
    public $checkoutPageURLTemplate;

    /**
     * A predefined value from OfferItemCondition specifying the condition of the product or service, or the products or services included in the
     * offer. Also used for product return policies to specify the condition of products accepted for returns.
     * @var \Vnetby\Schemaorg\Types\Thing\Intangible\Enumeration\OfferItemCondition\OfferItemCondition
     */
    public $itemCondition;

    /**
     * Indicates information about the shipping policies and options associated with an [[Offer]].
     * @var \Vnetby\Schemaorg\Types\Thing\Intangible\StructuredValue\OfferShippingDetails
     */
    public $shippingDetails;

    /**
     * The delivery method(s) available for this offer.
     * @var \Vnetby\Schemaorg\Types\Thing\Intangible\Enumeration\DeliveryMethod\DeliveryMethod
     */
    public $availableDeliveryMethod;

    /**
     * The GTIN-8 code of the product, or the product to which the offer refers. This code is also known as EAN/UCC-8
     * or 8-digit EAN. See [GS1 GTIN Summary](http://www.gs1.org/barcodes/technical/idkeys/gtin) for more details.
     * @var string|\Vnetby\Schemaorg\DataTypes\DataText
     */
    public $gtin8;

    /**
     * The current approximate inventory level for the item or items.
     * @var \Vnetby\Schemaorg\Types\Thing\Intangible\StructuredValue\QuantitativeValue\QuantitativeValue
     */
    public $inventoryLevel;

    /**
     * A review of the item.
     * @var \Vnetby\Schemaorg\Types\Thing\CreativeWork\Review\Review
     */
    public $review;

    /**
     * A product measurement, for example the inseam of pants, the wheel size of a bicycle, or the gauge of a screw.
     * Usually an exact measurement, but can also be a range of measurements for adjustable products, for example belts and ski bindings.
     * @var \Vnetby\Schemaorg\Types\Thing\Intangible\StructuredValue\QuantitativeValue\QuantitativeValue
     */
    public $hasMeasurement;

    /**
     * A Global Trade Item Number ([GTIN](https://www.gs1.org/standards/id-keys/gtin)). GTINs identify trade items, including products and services, using numeric identification codes. The GS1 [digital
     * link specifications](https://www.gs1.org/standards/Digital-Link/) express GTINs as URLs (URIs, IRIs, etc.). Details including regular expression examples can be found in, Section 6 of
     * the GS1 URI Syntax specification; see also [schema.org tracking issue](https://github.com/schemaorg/schemaorg/issues/3156#issuecomment-1209522809) for schema.org-specific discussion. A correct [[gtin]] value should be a valid
     * GTIN, which means that it should be an all-numeric string of either 8, 12, 13 or 14 digits, or a "GS1
     * Digital Link" URL based on such a string. The numeric component should also have a [valid GS1 check digit](https://www.gs1.org/services/check-digit-calculator) and meet
     * the other rules for valid GTINs. See also [GS1's GTIN Summary](http://www.gs1.org/barcodes/technical/idkeys/gtin) and [Wikipedia](https://en.wikipedia.org/wiki/Global_Trade_Item_Number) for more details. Left-padding of the gtin values
     * is not required or encouraged. The [[gtin]] property generalizes the earlier [[gtin8]], [[gtin12]], [[gtin13]], and [[gtin14]] properties. Note also that this
     * is a definition for how to include GTINs in Schema.org data, and not a definition of GTINs in general - see
     * the GS1 documentation for authoritative details.
     * @var string|\Vnetby\Schemaorg\DataTypes\DataText|\Vnetby\Schemaorg\DataTypes\DataURL
     */
    public $gtin;

    /**
     * A pointer to the organization or person making the offer.
     * @var \Vnetby\Schemaorg\Types\Thing\Person\Person|\Vnetby\Schemaorg\Types\Thing\Organization\Organization
     */
    public $offeredBy;

    /**
     * This links to a node or nodes indicating the exact quantity of the products included in an [[Offer]] or [[ProductCollection]].
     * @var \Vnetby\Schemaorg\Types\Thing\Intangible\StructuredValue\TypeAndQuantityNode
     */
    public $includesObject;

    /**
     * The payment method(s) accepted by seller for this offer.
     * @var \Vnetby\Schemaorg\Types\Thing\Intangible\Enumeration\PaymentMethod\PaymentMethod|\Vnetby\Schemaorg\Types\Thing\Intangible\Service\FinancialProduct\LoanOrCredit\LoanOrCredit
     */
    public $acceptedPaymentMethod;

    /**
     * The GTIN-13 code of the product, or the product to which the offer refers. This is equivalent to 13-digit ISBN codes
     * and EAN UCC-13. Former 12-digit UPC codes can be converted into a GTIN-13 code by simply adding a preceding zero. See
     * [GS1 GTIN Summary](http://www.gs1.org/barcodes/technical/idkeys/gtin) for more details.
     * @var string|\Vnetby\Schemaorg\DataTypes\DataText
     */
    public $gtin13;

    /**
     * The business function (e.g. sell, lease, repair, dispose) of the offer or component of a bundle (TypeAndQuantityNode). The default is http://purl.org/goodrelations/v1#Sell.
     * @var \Vnetby\Schemaorg\Types\Thing\Intangible\Enumeration\BusinessFunction
     */
    public $businessFunction;

    /**
     * The geographic area where a service or offered item is provided.
     * @var string|\Vnetby\Schemaorg\Types\Thing\Intangible\StructuredValue\GeoShape\GeoShape|\Vnetby\Schemaorg\Types\Thing\Place\Place|\Vnetby\Schemaorg\Types\Thing\Place\AdministrativeArea\AdministrativeArea|\Vnetby\Schemaorg\DataTypes\DataText
     */
    public $areaServed;

    /**
     * The date after which the price is no longer available.
     * @var string|\Vnetby\Schemaorg\DataTypes\DataDate
     */
    public $priceValidUntil;

    /**
     * Used to tag an item to be intended or suitable for consumption or use by adults only.
     * @var \Vnetby\Schemaorg\Types\Thing\Intangible\Enumeration\AdultOrientedEnumeration\AdultOrientedEnumeration
     */
    public $hasAdultConsideration;

    /**
     * The warranty promise(s) included in the offer.
     * @var \Vnetby\Schemaorg\Types\Thing\Intangible\StructuredValue\WarrantyPromise
     */
    public $warranty;

    /**
     * An Amazon Standard Identification Number (ASIN) is a 10-character alphanumeric unique identifier assigned by Amazon.com and its partners for product identification
     * within the Amazon organization (summary from [Wikipedia](https://en.wikipedia.org/wiki/Amazon_Standard_Identification_Number)'s article). Note also that this is a definition for how to include ASINs in
     * Schema.org data, and not a definition of ASINs in general - see documentation from Amazon for authoritative details. ASINs are most
     * commonly encoded as text strings, but the [asin] property supports URL/URI as potential values too.
     * @var string|\Vnetby\Schemaorg\DataTypes\DataURL|\Vnetby\Schemaorg\DataTypes\DataText
     */
    public $asin;

    /**
     * The date after when the item is not valid. For example the end of an offer, salary period, or a period
     * of opening hours.
     * @var string|\Vnetby\Schemaorg\DataTypes\DataDateTime|\Vnetby\Schemaorg\DataTypes\DataDate
     */
    public $validThrough;

    /**
     * The availability of this item&#x2014;for example In stock, Out of stock, Pre-order, etc.
     * @var \Vnetby\Schemaorg\Types\Thing\Intangible\Enumeration\ItemAvailability\ItemAvailability
     */
    public $availability;

    /**
     * The type(s) of customers for which the given offer is valid.
     * @param \Vnetby\Schemaorg\Types\Thing\Intangible\Enumeration\BusinessEntityType $value
     * @return static
     */
    function setEligibleCustomerType($value)
    {
        return $this->setProp('eligibleCustomerType', $value);
    }

    /**
     * The duration for which the given offer is valid.
     * @param \Vnetby\Schemaorg\Types\Thing\Intangible\StructuredValue\QuantitativeValue\QuantitativeValue $value
     * @return static
     */
    function setEligibleDuration($value)
    {
        return $this->setProp('eligibleDuration', $value);
    }

    /**
     * The ISO 3166-1 (ISO 3166-1 alpha-2) or ISO 3166-2 code, the place, or the GeoShape for the geo-political region(s) for which
     * the offer or delivery charge specification is valid.\n\nSee also [[ineligibleRegion]]. 
     * @param string|\Vnetby\Schemaorg\Types\Thing\Place\Place|\Vnetby\Schemaorg\DataTypes\DataText|\Vnetby\Schemaorg\Types\Thing\Intangible\StructuredValue\GeoShape\GeoShape $value
     * @return static
     */
    function setEligibleRegion($value)
    {
        return $this->setProp('eligibleRegion', $value);
    }

    /**
     * The GTIN-12 code of the product, or the product to which the offer refers. The GTIN-12 is the 12-digit GS1 Identification
     * Key composed of a U.P.C. Company Prefix, Item Reference, and Check Digit used to identify trade items. See [GS1 GTIN Summary](http://www.gs1.org/barcodes/technical/idkeys/gtin)
     * for more details.
     * @param string|\Vnetby\Schemaorg\DataTypes\DataText $value
     * @return static
     */
    function setGtin12($value)
    {
        return $this->setProp('gtin12', $value);
    }

    /**
     * Length of the lease for some [[Accommodation]], either particular to some [[Offer]] or in some cases intrinsic to the property.
     * @param \Vnetby\Schemaorg\Types\Thing\Intangible\Quantity\Duration|\Vnetby\Schemaorg\Types\Thing\Intangible\StructuredValue\QuantitativeValue\QuantitativeValue $value
     * @return static
     */
    function setLeaseLength($value)
    {
        return $this->setProp('leaseLength', $value);
    }

    /**
     * The [[mobileUrl]] property is provided for specific situations in which data consumers need to determine whether one of several provided URLs
     * is a dedicated 'mobile site'. To discourage over-use, and reflecting intial usecases, the property is expected only on [[Product]] and [[Offer]],
     * rather than [[Thing]]. The general trend in web technology is towards [responsive design](https://en.wikipedia.org/wiki/Responsive_web_design) in which content can be flexibly adapted to
     * a wide range of browsing environments. Pages and sites referenced with the long-established [[url]] property should ideally also be usable on
     * a wide variety of devices, including mobile phones. In most cases, it would be pointless and counter productive to attempt to
     * update all [[url]] markup to use [[mobileUrl]] for more mobile-oriented pages. The property is intended for the case when items (primarily
     * [[Product]] and [[Offer]]) have extra URLs hosted on an additional "mobile site" alongside the main one. It should not be taken
     * as an endorsement of this publication style. 
     * @param string|\Vnetby\Schemaorg\DataTypes\DataText $value
     * @return static
     */
    function setMobileUrl($value)
    {
        return $this->setProp('mobileUrl', $value);
    }

    /**
     * The transaction volume, in a monetary unit, for which the offer or price specification is valid, e.g. for indicating a minimal
     * purchasing volume, to express free shipping above a certain order volume, or to limit the acceptance of credit cards to purchases
     * to a certain minimal amount.
     * @param \Vnetby\Schemaorg\Types\Thing\Intangible\StructuredValue\PriceSpecification\PriceSpecification $value
     * @return static
     */
    function setEligibleTransactionVolume($value)
    {
        return $this->setProp('eligibleTransactionVolume', $value);
    }

    /**
     * The date when the item becomes valid.
     * @param string|\Vnetby\Schemaorg\DataTypes\DataDateTime|\Vnetby\Schemaorg\DataTypes\DataDate $value
     * @return static
     */
    function setValidFrom($value)
    {
        return $this->setProp('validFrom', $value);
    }

    /**
     * The amount of time that is required between accepting the offer and the actual usage of the resource or service.
     * @param \Vnetby\Schemaorg\Types\Thing\Intangible\StructuredValue\QuantitativeValue\QuantitativeValue $value
     * @return static
     */
    function setAdvanceBookingRequirement($value)
    {
        return $this->setProp('advanceBookingRequirement', $value);
    }

    /**
     * The currency of the price, or a price component when attached to [[PriceSpecification]] and its subtypes.\n\nUse standard formats: [ISO 4217 currency
     * format](http://en.wikipedia.org/wiki/ISO_4217), e.g. "USD"; [Ticker symbol](https://en.wikipedia.org/wiki/List_of_cryptocurrencies) for cryptocurrencies, e.g. "BTC"; well known names for [Local Exchange Trading Systems](https://en.wikipedia.org/wiki/Local_exchange_trading_system) (LETS) and other currency
     * types, e.g. "Ithaca HOUR".
     * @param string|\Vnetby\Schemaorg\DataTypes\DataText $value
     * @return static
     */
    function setPriceCurrency($value)
    {
        return $this->setProp('priceCurrency', $value);
    }

    /**
     * An item being offered (or demanded). The transactional nature of the offer or demand is documented using [[businessFunction]], e.g. sell, lease
     * etc. While several common expected types are listed explicitly in this definition, others can be used. Using a second type, such
     * as Product or a subtype of Product, can clarify the nature of the offer.
     * @param \Vnetby\Schemaorg\Types\Thing\Intangible\Offer\AggregateOffer|\Vnetby\Schemaorg\Types\Thing\Intangible\Trip\Trip|\Vnetby\Schemaorg\Types\Thing\CreativeWork\CreativeWork|\Vnetby\Schemaorg\Types\Thing\Intangible\Service\Service|\Vnetby\Schemaorg\Types\Thing\Product\Product|\Vnetby\Schemaorg\Types\Thing\Intangible\MenuItem|\Vnetby\Schemaorg\Types\Thing\Event\Event $value
     * @return static
     */
    function setItemOffered($value)
    {
        return $this->setProp('itemOffered', $value);
    }

    /**
     * The offer price of a product, or of a price component when attached to PriceSpecification and its subtypes.\n\nUsage guidelines:\n\n* Use the
     * [[priceCurrency]] property (with standard formats: [ISO 4217 currency format](http://en.wikipedia.org/wiki/ISO_4217), e.g. "USD"; [Ticker symbol](https://en.wikipedia.org/wiki/List_of_cryptocurrencies) for cryptocurrencies, e.g. "BTC"; well known names for
     * [Local Exchange Trading Systems](https://en.wikipedia.org/wiki/Local_exchange_trading_system) (LETS) and other currency types, e.g. "Ithaca HOUR") instead of including [ambiguous symbols](http://en.wikipedia.org/wiki/Dollar_sign#Currencies_that_use_the_dollar_or_peso_sign) such as '$' in
     * the value.\n* Use '.' (Unicode 'FULL STOP' (U+002E)) rather than ',' to indicate a decimal point. Avoid using these symbols as
     * a readability separator.\n* Note that both [RDFa](http://www.w3.org/TR/xhtml-rdfa-primer/#using-the-content-attribute) and Microdata syntax allow the use of a "content=" attribute for publishing simple machine-readable
     * values alongside more human-friendly formatting.\n* Use values from 0123456789 (Unicode 'DIGIT ZERO' (U+0030) to 'DIGIT NINE' (U+0039)) rather than superficially similar
     * Unicode symbols. 
     * @param string|int|float|\Vnetby\Schemaorg\DataTypes\DataNumber|\Vnetby\Schemaorg\DataTypes\DataText $value
     * @return static
     */
    function setPrice($value)
    {
        return $this->setProp('price', $value);
    }

    /**
     * The end of the availability of the product or service included in the offer.
     * @param string|\Vnetby\Schemaorg\DataTypes\DataTime|\Vnetby\Schemaorg\DataTypes\DataDate|\Vnetby\Schemaorg\DataTypes\DataDateTime $value
     * @return static
     */
    function setAvailabilityEnds($value)
    {
        return $this->setProp('availabilityEnds', $value);
    }

    /**
     * An additional offer that can only be obtained in combination with the first base offer (e.g. supplements and extensions that are
     * available for a surcharge).
     * @param \Vnetby\Schemaorg\Types\Thing\Intangible\Offer\Offer $value
     * @return static
     */
    function setAddOn($value)
    {
        return $this->setProp('addOn', $value);
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
     * A category for the item. Greater signs or slashes can be used to informally indicate a category hierarchy.
     * @param string|\Vnetby\Schemaorg\DataTypes\DataText|\Vnetby\Schemaorg\Types\Thing\Intangible\Enumeration\PhysicalActivityCategory\PhysicalActivityCategory|\Vnetby\Schemaorg\DataTypes\DataURL|\Vnetby\Schemaorg\Types\Thing\Intangible\DefinedTerm\CategoryCode\CategoryCode|\Vnetby\Schemaorg\Types\Thing\Thing $value
     * @return static
     */
    function setCategory($value)
    {
        return $this->setProp('category', $value);
    }

    /**
     * The Manufacturer Part Number (MPN) of the product, or the product to which the offer refers.
     * @param string|\Vnetby\Schemaorg\DataTypes\DataText $value
     * @return static
     */
    function setMpn($value)
    {
        return $this->setProp('mpn', $value);
    }

    /**
     * The beginning of the availability of the product or service included in the offer.
     * @param string|\Vnetby\Schemaorg\DataTypes\DataDateTime|\Vnetby\Schemaorg\DataTypes\DataTime|\Vnetby\Schemaorg\DataTypes\DataDate $value
     * @return static
     */
    function setAvailabilityStarts($value)
    {
        return $this->setProp('availabilityStarts', $value);
    }

    /**
     * The interval and unit of measurement of ordering quantities for which the offer or price specification is valid. This allows e.g.
     * specifying that a certain freight charge is valid only for a certain quantity.
     * @param \Vnetby\Schemaorg\Types\Thing\Intangible\StructuredValue\QuantitativeValue\QuantitativeValue $value
     * @return static
     */
    function setEligibleQuantity($value)
    {
        return $this->setProp('eligibleQuantity', $value);
    }

    /**
     * The place(s) from which the offer can be obtained (e.g. store locations).
     * @param \Vnetby\Schemaorg\Types\Thing\Place\Place $value
     * @return static
     */
    function setAvailableAtOrFrom($value)
    {
        return $this->setProp('availableAtOrFrom', $value);
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
     * The Stock Keeping Unit (SKU), i.e. a merchant-specific identifier for a product or service, or the product to which the offer
     * refers.
     * @param string|\Vnetby\Schemaorg\DataTypes\DataText $value
     * @return static
     */
    function setSku($value)
    {
        return $this->setProp('sku', $value);
    }

    /**
     * An entity which offers (sells / leases / lends / loans) the services / goods. A seller may also be a
     * provider.
     * @param \Vnetby\Schemaorg\Types\Thing\Person\Person|\Vnetby\Schemaorg\Types\Thing\Organization\Organization $value
     * @return static
     */
    function setSeller($value)
    {
        return $this->setProp('seller', $value);
    }

    /**
     * The serial number or any alphanumeric identifier of a particular product. When attached to an offer, it is a shortcut for
     * the serial number of the product included in the offer.
     * @param string|\Vnetby\Schemaorg\DataTypes\DataText $value
     * @return static
     */
    function setSerialNumber($value)
    {
        return $this->setProp('serialNumber', $value);
    }

    /**
     * The GTIN-14 code of the product, or the product to which the offer refers. See [GS1 GTIN Summary](http://www.gs1.org/barcodes/technical/idkeys/gtin) for more details.
     * @param string|\Vnetby\Schemaorg\DataTypes\DataText $value
     * @return static
     */
    function setGtin14($value)
    {
        return $this->setProp('gtin14', $value);
    }

    /**
     * One or more detailed price specifications, indicating the unit price and delivery or payment charges.
     * @param \Vnetby\Schemaorg\Types\Thing\Intangible\StructuredValue\PriceSpecification\PriceSpecification $value
     * @return static
     */
    function setPriceSpecification($value)
    {
        return $this->setProp('priceSpecification', $value);
    }

    /**
     * The typical delay between the receipt of the order and the goods either leaving the warehouse or being prepared for pickup,
     * in case the delivery method is on site pickup.
     * @param \Vnetby\Schemaorg\Types\Thing\Intangible\StructuredValue\QuantitativeValue\QuantitativeValue $value
     * @return static
     */
    function setDeliveryLeadTime($value)
    {
        return $this->setProp('deliveryLeadTime', $value);
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
     * The ISO 3166-1 (ISO 3166-1 alpha-2) or ISO 3166-2 code, the place, or the GeoShape for the geo-political region(s) for which
     * the offer or delivery charge specification is not valid, e.g. a region where the transaction is not allowed.\n\nSee also [[eligibleRegion]]. 
     * @param string|\Vnetby\Schemaorg\Types\Thing\Intangible\StructuredValue\GeoShape\GeoShape|\Vnetby\Schemaorg\Types\Thing\Place\Place|\Vnetby\Schemaorg\DataTypes\DataText $value
     * @return static
     */
    function setIneligibleRegion($value)
    {
        return $this->setProp('ineligibleRegion', $value);
    }

    /**
     * A URL template (RFC 6570) for a checkout page for an offer. This approach allows merchants to specify a URL for
     * online checkout of the offered product, by interpolating parameters such as the logged in user ID, product ID, quantity, discount code
     * etc. Parameter naming and standardization are not specified here.
     * @param string|\Vnetby\Schemaorg\DataTypes\DataText $value
     * @return static
     */
    function setCheckoutPageURLTemplate($value)
    {
        return $this->setProp('checkoutPageURLTemplate', $value);
    }

    /**
     * A predefined value from OfferItemCondition specifying the condition of the product or service, or the products or services included in the
     * offer. Also used for product return policies to specify the condition of products accepted for returns.
     * @param \Vnetby\Schemaorg\Types\Thing\Intangible\Enumeration\OfferItemCondition\OfferItemCondition $value
     * @return static
     */
    function setItemCondition($value)
    {
        return $this->setProp('itemCondition', $value);
    }

    /**
     * Indicates information about the shipping policies and options associated with an [[Offer]].
     * @param \Vnetby\Schemaorg\Types\Thing\Intangible\StructuredValue\OfferShippingDetails $value
     * @return static
     */
    function setShippingDetails($value)
    {
        return $this->setProp('shippingDetails', $value);
    }

    /**
     * The delivery method(s) available for this offer.
     * @param \Vnetby\Schemaorg\Types\Thing\Intangible\Enumeration\DeliveryMethod\DeliveryMethod $value
     * @return static
     */
    function setAvailableDeliveryMethod($value)
    {
        return $this->setProp('availableDeliveryMethod', $value);
    }

    /**
     * The GTIN-8 code of the product, or the product to which the offer refers. This code is also known as EAN/UCC-8
     * or 8-digit EAN. See [GS1 GTIN Summary](http://www.gs1.org/barcodes/technical/idkeys/gtin) for more details.
     * @param string|\Vnetby\Schemaorg\DataTypes\DataText $value
     * @return static
     */
    function setGtin8($value)
    {
        return $this->setProp('gtin8', $value);
    }

    /**
     * The current approximate inventory level for the item or items.
     * @param \Vnetby\Schemaorg\Types\Thing\Intangible\StructuredValue\QuantitativeValue\QuantitativeValue $value
     * @return static
     */
    function setInventoryLevel($value)
    {
        return $this->setProp('inventoryLevel', $value);
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
     * A product measurement, for example the inseam of pants, the wheel size of a bicycle, or the gauge of a screw.
     * Usually an exact measurement, but can also be a range of measurements for adjustable products, for example belts and ski bindings.
     * @param \Vnetby\Schemaorg\Types\Thing\Intangible\StructuredValue\QuantitativeValue\QuantitativeValue $value
     * @return static
     */
    function setHasMeasurement($value)
    {
        return $this->setProp('hasMeasurement', $value);
    }

    /**
     * A Global Trade Item Number ([GTIN](https://www.gs1.org/standards/id-keys/gtin)). GTINs identify trade items, including products and services, using numeric identification codes. The GS1 [digital
     * link specifications](https://www.gs1.org/standards/Digital-Link/) express GTINs as URLs (URIs, IRIs, etc.). Details including regular expression examples can be found in, Section 6 of
     * the GS1 URI Syntax specification; see also [schema.org tracking issue](https://github.com/schemaorg/schemaorg/issues/3156#issuecomment-1209522809) for schema.org-specific discussion. A correct [[gtin]] value should be a valid
     * GTIN, which means that it should be an all-numeric string of either 8, 12, 13 or 14 digits, or a "GS1
     * Digital Link" URL based on such a string. The numeric component should also have a [valid GS1 check digit](https://www.gs1.org/services/check-digit-calculator) and meet
     * the other rules for valid GTINs. See also [GS1's GTIN Summary](http://www.gs1.org/barcodes/technical/idkeys/gtin) and [Wikipedia](https://en.wikipedia.org/wiki/Global_Trade_Item_Number) for more details. Left-padding of the gtin values
     * is not required or encouraged. The [[gtin]] property generalizes the earlier [[gtin8]], [[gtin12]], [[gtin13]], and [[gtin14]] properties. Note also that this
     * is a definition for how to include GTINs in Schema.org data, and not a definition of GTINs in general - see
     * the GS1 documentation for authoritative details.
     * @param string|\Vnetby\Schemaorg\DataTypes\DataText|\Vnetby\Schemaorg\DataTypes\DataURL $value
     * @return static
     */
    function setGtin($value)
    {
        return $this->setProp('gtin', $value);
    }

    /**
     * A pointer to the organization or person making the offer.
     * @param \Vnetby\Schemaorg\Types\Thing\Person\Person|\Vnetby\Schemaorg\Types\Thing\Organization\Organization $value
     * @return static
     */
    function setOfferedBy($value)
    {
        return $this->setProp('offeredBy', $value);
    }

    /**
     * This links to a node or nodes indicating the exact quantity of the products included in an [[Offer]] or [[ProductCollection]].
     * @param \Vnetby\Schemaorg\Types\Thing\Intangible\StructuredValue\TypeAndQuantityNode $value
     * @return static
     */
    function setIncludesObject($value)
    {
        return $this->setProp('includesObject', $value);
    }

    /**
     * The payment method(s) accepted by seller for this offer.
     * @param \Vnetby\Schemaorg\Types\Thing\Intangible\Enumeration\PaymentMethod\PaymentMethod|\Vnetby\Schemaorg\Types\Thing\Intangible\Service\FinancialProduct\LoanOrCredit\LoanOrCredit $value
     * @return static
     */
    function setAcceptedPaymentMethod($value)
    {
        return $this->setProp('acceptedPaymentMethod', $value);
    }

    /**
     * The GTIN-13 code of the product, or the product to which the offer refers. This is equivalent to 13-digit ISBN codes
     * and EAN UCC-13. Former 12-digit UPC codes can be converted into a GTIN-13 code by simply adding a preceding zero. See
     * [GS1 GTIN Summary](http://www.gs1.org/barcodes/technical/idkeys/gtin) for more details.
     * @param string|\Vnetby\Schemaorg\DataTypes\DataText $value
     * @return static
     */
    function setGtin13($value)
    {
        return $this->setProp('gtin13', $value);
    }

    /**
     * The business function (e.g. sell, lease, repair, dispose) of the offer or component of a bundle (TypeAndQuantityNode). The default is http://purl.org/goodrelations/v1#Sell.
     * @param \Vnetby\Schemaorg\Types\Thing\Intangible\Enumeration\BusinessFunction $value
     * @return static
     */
    function setBusinessFunction($value)
    {
        return $this->setProp('businessFunction', $value);
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
     * The date after which the price is no longer available.
     * @param string|\Vnetby\Schemaorg\DataTypes\DataDate $value
     * @return static
     */
    function setPriceValidUntil($value)
    {
        return $this->setProp('priceValidUntil', $value);
    }

    /**
     * Used to tag an item to be intended or suitable for consumption or use by adults only.
     * @param \Vnetby\Schemaorg\Types\Thing\Intangible\Enumeration\AdultOrientedEnumeration\AdultOrientedEnumeration $value
     * @return static
     */
    function setHasAdultConsideration($value)
    {
        return $this->setProp('hasAdultConsideration', $value);
    }

    /**
     * The warranty promise(s) included in the offer.
     * @param \Vnetby\Schemaorg\Types\Thing\Intangible\StructuredValue\WarrantyPromise $value
     * @return static
     */
    function setWarranty($value)
    {
        return $this->setProp('warranty', $value);
    }

    /**
     * An Amazon Standard Identification Number (ASIN) is a 10-character alphanumeric unique identifier assigned by Amazon.com and its partners for product identification
     * within the Amazon organization (summary from [Wikipedia](https://en.wikipedia.org/wiki/Amazon_Standard_Identification_Number)'s article). Note also that this is a definition for how to include ASINs in
     * Schema.org data, and not a definition of ASINs in general - see documentation from Amazon for authoritative details. ASINs are most
     * commonly encoded as text strings, but the [asin] property supports URL/URI as potential values too.
     * @param string|\Vnetby\Schemaorg\DataTypes\DataURL|\Vnetby\Schemaorg\DataTypes\DataText $value
     * @return static
     */
    function setAsin($value)
    {
        return $this->setProp('asin', $value);
    }

    /**
     * The date after when the item is not valid. For example the end of an offer, salary period, or a period
     * of opening hours.
     * @param string|\Vnetby\Schemaorg\DataTypes\DataDateTime|\Vnetby\Schemaorg\DataTypes\DataDate $value
     * @return static
     */
    function setValidThrough($value)
    {
        return $this->setProp('validThrough', $value);
    }

    /**
     * The availability of this item&#x2014;for example In stock, Out of stock, Pre-order, etc.
     * @param \Vnetby\Schemaorg\Types\Thing\Intangible\Enumeration\ItemAvailability\ItemAvailability $value
     * @return static
     */
    function setAvailability($value)
    {
        return $this->setProp('availability', $value);
    }

    /**
     * The type(s) of customers for which the given offer is valid.
     * @return \Vnetby\Schemaorg\Types\Thing\Intangible\Enumeration\BusinessEntityType|null
     */
    function getEligibleCustomerType()
    {
        return $this->getProp('eligibleCustomerType');
    }

    /**
     * The duration for which the given offer is valid.
     * @return \Vnetby\Schemaorg\Types\Thing\Intangible\StructuredValue\QuantitativeValue\QuantitativeValue|null
     */
    function getEligibleDuration()
    {
        return $this->getProp('eligibleDuration');
    }

    /**
     * The ISO 3166-1 (ISO 3166-1 alpha-2) or ISO 3166-2 code, the place, or the GeoShape for the geo-political region(s) for which
     * the offer or delivery charge specification is valid.\n\nSee also [[ineligibleRegion]]. 
     * @return string|\Vnetby\Schemaorg\Types\Thing\Place\Place|\Vnetby\Schemaorg\DataTypes\DataText|\Vnetby\Schemaorg\Types\Thing\Intangible\StructuredValue\GeoShape\GeoShape|null
     */
    function getEligibleRegion()
    {
        return $this->getProp('eligibleRegion');
    }

    /**
     * The GTIN-12 code of the product, or the product to which the offer refers. The GTIN-12 is the 12-digit GS1 Identification
     * Key composed of a U.P.C. Company Prefix, Item Reference, and Check Digit used to identify trade items. See [GS1 GTIN Summary](http://www.gs1.org/barcodes/technical/idkeys/gtin)
     * for more details.
     * @return string|\Vnetby\Schemaorg\DataTypes\DataText|null
     */
    function getGtin12()
    {
        return $this->getProp('gtin12');
    }

    /**
     * Length of the lease for some [[Accommodation]], either particular to some [[Offer]] or in some cases intrinsic to the property.
     * @return \Vnetby\Schemaorg\Types\Thing\Intangible\Quantity\Duration|\Vnetby\Schemaorg\Types\Thing\Intangible\StructuredValue\QuantitativeValue\QuantitativeValue|null
     */
    function getLeaseLength()
    {
        return $this->getProp('leaseLength');
    }

    /**
     * The [[mobileUrl]] property is provided for specific situations in which data consumers need to determine whether one of several provided URLs
     * is a dedicated 'mobile site'. To discourage over-use, and reflecting intial usecases, the property is expected only on [[Product]] and [[Offer]],
     * rather than [[Thing]]. The general trend in web technology is towards [responsive design](https://en.wikipedia.org/wiki/Responsive_web_design) in which content can be flexibly adapted to
     * a wide range of browsing environments. Pages and sites referenced with the long-established [[url]] property should ideally also be usable on
     * a wide variety of devices, including mobile phones. In most cases, it would be pointless and counter productive to attempt to
     * update all [[url]] markup to use [[mobileUrl]] for more mobile-oriented pages. The property is intended for the case when items (primarily
     * [[Product]] and [[Offer]]) have extra URLs hosted on an additional "mobile site" alongside the main one. It should not be taken
     * as an endorsement of this publication style. 
     * @return string|\Vnetby\Schemaorg\DataTypes\DataText|null
     */
    function getMobileUrl()
    {
        return $this->getProp('mobileUrl');
    }

    /**
     * The transaction volume, in a monetary unit, for which the offer or price specification is valid, e.g. for indicating a minimal
     * purchasing volume, to express free shipping above a certain order volume, or to limit the acceptance of credit cards to purchases
     * to a certain minimal amount.
     * @return \Vnetby\Schemaorg\Types\Thing\Intangible\StructuredValue\PriceSpecification\PriceSpecification|null
     */
    function getEligibleTransactionVolume()
    {
        return $this->getProp('eligibleTransactionVolume');
    }

    /**
     * The date when the item becomes valid.
     * @return string|\Vnetby\Schemaorg\DataTypes\DataDateTime|\Vnetby\Schemaorg\DataTypes\DataDate|null
     */
    function getValidFrom()
    {
        return $this->getProp('validFrom');
    }

    /**
     * The amount of time that is required between accepting the offer and the actual usage of the resource or service.
     * @return \Vnetby\Schemaorg\Types\Thing\Intangible\StructuredValue\QuantitativeValue\QuantitativeValue|null
     */
    function getAdvanceBookingRequirement()
    {
        return $this->getProp('advanceBookingRequirement');
    }

    /**
     * The currency of the price, or a price component when attached to [[PriceSpecification]] and its subtypes.\n\nUse standard formats: [ISO 4217 currency
     * format](http://en.wikipedia.org/wiki/ISO_4217), e.g. "USD"; [Ticker symbol](https://en.wikipedia.org/wiki/List_of_cryptocurrencies) for cryptocurrencies, e.g. "BTC"; well known names for [Local Exchange Trading Systems](https://en.wikipedia.org/wiki/Local_exchange_trading_system) (LETS) and other currency
     * types, e.g. "Ithaca HOUR".
     * @return string|\Vnetby\Schemaorg\DataTypes\DataText|null
     */
    function getPriceCurrency()
    {
        return $this->getProp('priceCurrency');
    }

    /**
     * An item being offered (or demanded). The transactional nature of the offer or demand is documented using [[businessFunction]], e.g. sell, lease
     * etc. While several common expected types are listed explicitly in this definition, others can be used. Using a second type, such
     * as Product or a subtype of Product, can clarify the nature of the offer.
     * @return \Vnetby\Schemaorg\Types\Thing\Intangible\Offer\AggregateOffer|\Vnetby\Schemaorg\Types\Thing\Intangible\Trip\Trip|\Vnetby\Schemaorg\Types\Thing\CreativeWork\CreativeWork|\Vnetby\Schemaorg\Types\Thing\Intangible\Service\Service|\Vnetby\Schemaorg\Types\Thing\Product\Product|\Vnetby\Schemaorg\Types\Thing\Intangible\MenuItem|\Vnetby\Schemaorg\Types\Thing\Event\Event|null
     */
    function getItemOffered()
    {
        return $this->getProp('itemOffered');
    }

    /**
     * The offer price of a product, or of a price component when attached to PriceSpecification and its subtypes.\n\nUsage guidelines:\n\n* Use the
     * [[priceCurrency]] property (with standard formats: [ISO 4217 currency format](http://en.wikipedia.org/wiki/ISO_4217), e.g. "USD"; [Ticker symbol](https://en.wikipedia.org/wiki/List_of_cryptocurrencies) for cryptocurrencies, e.g. "BTC"; well known names for
     * [Local Exchange Trading Systems](https://en.wikipedia.org/wiki/Local_exchange_trading_system) (LETS) and other currency types, e.g. "Ithaca HOUR") instead of including [ambiguous symbols](http://en.wikipedia.org/wiki/Dollar_sign#Currencies_that_use_the_dollar_or_peso_sign) such as '$' in
     * the value.\n* Use '.' (Unicode 'FULL STOP' (U+002E)) rather than ',' to indicate a decimal point. Avoid using these symbols as
     * a readability separator.\n* Note that both [RDFa](http://www.w3.org/TR/xhtml-rdfa-primer/#using-the-content-attribute) and Microdata syntax allow the use of a "content=" attribute for publishing simple machine-readable
     * values alongside more human-friendly formatting.\n* Use values from 0123456789 (Unicode 'DIGIT ZERO' (U+0030) to 'DIGIT NINE' (U+0039)) rather than superficially similar
     * Unicode symbols. 
     * @return string|int|float|\Vnetby\Schemaorg\DataTypes\DataNumber|\Vnetby\Schemaorg\DataTypes\DataText|null
     */
    function getPrice()
    {
        return $this->getProp('price');
    }

    /**
     * The end of the availability of the product or service included in the offer.
     * @return string|\Vnetby\Schemaorg\DataTypes\DataTime|\Vnetby\Schemaorg\DataTypes\DataDate|\Vnetby\Schemaorg\DataTypes\DataDateTime|null
     */
    function getAvailabilityEnds()
    {
        return $this->getProp('availabilityEnds');
    }

    /**
     * An additional offer that can only be obtained in combination with the first base offer (e.g. supplements and extensions that are
     * available for a surcharge).
     * @return \Vnetby\Schemaorg\Types\Thing\Intangible\Offer\Offer|null
     */
    function getAddOn()
    {
        return $this->getProp('addOn');
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
     * A category for the item. Greater signs or slashes can be used to informally indicate a category hierarchy.
     * @return string|\Vnetby\Schemaorg\DataTypes\DataText|\Vnetby\Schemaorg\Types\Thing\Intangible\Enumeration\PhysicalActivityCategory\PhysicalActivityCategory|\Vnetby\Schemaorg\DataTypes\DataURL|\Vnetby\Schemaorg\Types\Thing\Intangible\DefinedTerm\CategoryCode\CategoryCode|\Vnetby\Schemaorg\Types\Thing\Thing|null
     */
    function getCategory()
    {
        return $this->getProp('category');
    }

    /**
     * The Manufacturer Part Number (MPN) of the product, or the product to which the offer refers.
     * @return string|\Vnetby\Schemaorg\DataTypes\DataText|null
     */
    function getMpn()
    {
        return $this->getProp('mpn');
    }

    /**
     * The beginning of the availability of the product or service included in the offer.
     * @return string|\Vnetby\Schemaorg\DataTypes\DataDateTime|\Vnetby\Schemaorg\DataTypes\DataTime|\Vnetby\Schemaorg\DataTypes\DataDate|null
     */
    function getAvailabilityStarts()
    {
        return $this->getProp('availabilityStarts');
    }

    /**
     * The interval and unit of measurement of ordering quantities for which the offer or price specification is valid. This allows e.g.
     * specifying that a certain freight charge is valid only for a certain quantity.
     * @return \Vnetby\Schemaorg\Types\Thing\Intangible\StructuredValue\QuantitativeValue\QuantitativeValue|null
     */
    function getEligibleQuantity()
    {
        return $this->getProp('eligibleQuantity');
    }

    /**
     * The place(s) from which the offer can be obtained (e.g. store locations).
     * @return \Vnetby\Schemaorg\Types\Thing\Place\Place|null
     */
    function getAvailableAtOrFrom()
    {
        return $this->getProp('availableAtOrFrom');
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
     * The Stock Keeping Unit (SKU), i.e. a merchant-specific identifier for a product or service, or the product to which the offer
     * refers.
     * @return string|\Vnetby\Schemaorg\DataTypes\DataText|null
     */
    function getSku()
    {
        return $this->getProp('sku');
    }

    /**
     * An entity which offers (sells / leases / lends / loans) the services / goods. A seller may also be a
     * provider.
     * @return \Vnetby\Schemaorg\Types\Thing\Person\Person|\Vnetby\Schemaorg\Types\Thing\Organization\Organization|null
     */
    function getSeller()
    {
        return $this->getProp('seller');
    }

    /**
     * The serial number or any alphanumeric identifier of a particular product. When attached to an offer, it is a shortcut for
     * the serial number of the product included in the offer.
     * @return string|\Vnetby\Schemaorg\DataTypes\DataText|null
     */
    function getSerialNumber()
    {
        return $this->getProp('serialNumber');
    }

    /**
     * The GTIN-14 code of the product, or the product to which the offer refers. See [GS1 GTIN Summary](http://www.gs1.org/barcodes/technical/idkeys/gtin) for more details.
     * @return string|\Vnetby\Schemaorg\DataTypes\DataText|null
     */
    function getGtin14()
    {
        return $this->getProp('gtin14');
    }

    /**
     * One or more detailed price specifications, indicating the unit price and delivery or payment charges.
     * @return \Vnetby\Schemaorg\Types\Thing\Intangible\StructuredValue\PriceSpecification\PriceSpecification|null
     */
    function getPriceSpecification()
    {
        return $this->getProp('priceSpecification');
    }

    /**
     * The typical delay between the receipt of the order and the goods either leaving the warehouse or being prepared for pickup,
     * in case the delivery method is on site pickup.
     * @return \Vnetby\Schemaorg\Types\Thing\Intangible\StructuredValue\QuantitativeValue\QuantitativeValue|null
     */
    function getDeliveryLeadTime()
    {
        return $this->getProp('deliveryLeadTime');
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
     * The ISO 3166-1 (ISO 3166-1 alpha-2) or ISO 3166-2 code, the place, or the GeoShape for the geo-political region(s) for which
     * the offer or delivery charge specification is not valid, e.g. a region where the transaction is not allowed.\n\nSee also [[eligibleRegion]]. 
     * @return string|\Vnetby\Schemaorg\Types\Thing\Intangible\StructuredValue\GeoShape\GeoShape|\Vnetby\Schemaorg\Types\Thing\Place\Place|\Vnetby\Schemaorg\DataTypes\DataText|null
     */
    function getIneligibleRegion()
    {
        return $this->getProp('ineligibleRegion');
    }

    /**
     * A URL template (RFC 6570) for a checkout page for an offer. This approach allows merchants to specify a URL for
     * online checkout of the offered product, by interpolating parameters such as the logged in user ID, product ID, quantity, discount code
     * etc. Parameter naming and standardization are not specified here.
     * @return string|\Vnetby\Schemaorg\DataTypes\DataText|null
     */
    function getCheckoutPageURLTemplate()
    {
        return $this->getProp('checkoutPageURLTemplate');
    }

    /**
     * A predefined value from OfferItemCondition specifying the condition of the product or service, or the products or services included in the
     * offer. Also used for product return policies to specify the condition of products accepted for returns.
     * @return \Vnetby\Schemaorg\Types\Thing\Intangible\Enumeration\OfferItemCondition\OfferItemCondition|null
     */
    function getItemCondition()
    {
        return $this->getProp('itemCondition');
    }

    /**
     * Indicates information about the shipping policies and options associated with an [[Offer]].
     * @return \Vnetby\Schemaorg\Types\Thing\Intangible\StructuredValue\OfferShippingDetails|null
     */
    function getShippingDetails()
    {
        return $this->getProp('shippingDetails');
    }

    /**
     * The delivery method(s) available for this offer.
     * @return \Vnetby\Schemaorg\Types\Thing\Intangible\Enumeration\DeliveryMethod\DeliveryMethod|null
     */
    function getAvailableDeliveryMethod()
    {
        return $this->getProp('availableDeliveryMethod');
    }

    /**
     * The GTIN-8 code of the product, or the product to which the offer refers. This code is also known as EAN/UCC-8
     * or 8-digit EAN. See [GS1 GTIN Summary](http://www.gs1.org/barcodes/technical/idkeys/gtin) for more details.
     * @return string|\Vnetby\Schemaorg\DataTypes\DataText|null
     */
    function getGtin8()
    {
        return $this->getProp('gtin8');
    }

    /**
     * The current approximate inventory level for the item or items.
     * @return \Vnetby\Schemaorg\Types\Thing\Intangible\StructuredValue\QuantitativeValue\QuantitativeValue|null
     */
    function getInventoryLevel()
    {
        return $this->getProp('inventoryLevel');
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
     * A product measurement, for example the inseam of pants, the wheel size of a bicycle, or the gauge of a screw.
     * Usually an exact measurement, but can also be a range of measurements for adjustable products, for example belts and ski bindings.
     * @return \Vnetby\Schemaorg\Types\Thing\Intangible\StructuredValue\QuantitativeValue\QuantitativeValue|null
     */
    function getHasMeasurement()
    {
        return $this->getProp('hasMeasurement');
    }

    /**
     * A Global Trade Item Number ([GTIN](https://www.gs1.org/standards/id-keys/gtin)). GTINs identify trade items, including products and services, using numeric identification codes. The GS1 [digital
     * link specifications](https://www.gs1.org/standards/Digital-Link/) express GTINs as URLs (URIs, IRIs, etc.). Details including regular expression examples can be found in, Section 6 of
     * the GS1 URI Syntax specification; see also [schema.org tracking issue](https://github.com/schemaorg/schemaorg/issues/3156#issuecomment-1209522809) for schema.org-specific discussion. A correct [[gtin]] value should be a valid
     * GTIN, which means that it should be an all-numeric string of either 8, 12, 13 or 14 digits, or a "GS1
     * Digital Link" URL based on such a string. The numeric component should also have a [valid GS1 check digit](https://www.gs1.org/services/check-digit-calculator) and meet
     * the other rules for valid GTINs. See also [GS1's GTIN Summary](http://www.gs1.org/barcodes/technical/idkeys/gtin) and [Wikipedia](https://en.wikipedia.org/wiki/Global_Trade_Item_Number) for more details. Left-padding of the gtin values
     * is not required or encouraged. The [[gtin]] property generalizes the earlier [[gtin8]], [[gtin12]], [[gtin13]], and [[gtin14]] properties. Note also that this
     * is a definition for how to include GTINs in Schema.org data, and not a definition of GTINs in general - see
     * the GS1 documentation for authoritative details.
     * @return string|\Vnetby\Schemaorg\DataTypes\DataText|\Vnetby\Schemaorg\DataTypes\DataURL|null
     */
    function getGtin()
    {
        return $this->getProp('gtin');
    }

    /**
     * A pointer to the organization or person making the offer.
     * @return \Vnetby\Schemaorg\Types\Thing\Person\Person|\Vnetby\Schemaorg\Types\Thing\Organization\Organization|null
     */
    function getOfferedBy()
    {
        return $this->getProp('offeredBy');
    }

    /**
     * This links to a node or nodes indicating the exact quantity of the products included in an [[Offer]] or [[ProductCollection]].
     * @return \Vnetby\Schemaorg\Types\Thing\Intangible\StructuredValue\TypeAndQuantityNode|null
     */
    function getIncludesObject()
    {
        return $this->getProp('includesObject');
    }

    /**
     * The payment method(s) accepted by seller for this offer.
     * @return \Vnetby\Schemaorg\Types\Thing\Intangible\Enumeration\PaymentMethod\PaymentMethod|\Vnetby\Schemaorg\Types\Thing\Intangible\Service\FinancialProduct\LoanOrCredit\LoanOrCredit|null
     */
    function getAcceptedPaymentMethod()
    {
        return $this->getProp('acceptedPaymentMethod');
    }

    /**
     * The GTIN-13 code of the product, or the product to which the offer refers. This is equivalent to 13-digit ISBN codes
     * and EAN UCC-13. Former 12-digit UPC codes can be converted into a GTIN-13 code by simply adding a preceding zero. See
     * [GS1 GTIN Summary](http://www.gs1.org/barcodes/technical/idkeys/gtin) for more details.
     * @return string|\Vnetby\Schemaorg\DataTypes\DataText|null
     */
    function getGtin13()
    {
        return $this->getProp('gtin13');
    }

    /**
     * The business function (e.g. sell, lease, repair, dispose) of the offer or component of a bundle (TypeAndQuantityNode). The default is http://purl.org/goodrelations/v1#Sell.
     * @return \Vnetby\Schemaorg\Types\Thing\Intangible\Enumeration\BusinessFunction|null
     */
    function getBusinessFunction()
    {
        return $this->getProp('businessFunction');
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
     * The date after which the price is no longer available.
     * @return string|\Vnetby\Schemaorg\DataTypes\DataDate|null
     */
    function getPriceValidUntil()
    {
        return $this->getProp('priceValidUntil');
    }

    /**
     * Used to tag an item to be intended or suitable for consumption or use by adults only.
     * @return \Vnetby\Schemaorg\Types\Thing\Intangible\Enumeration\AdultOrientedEnumeration\AdultOrientedEnumeration|null
     */
    function getHasAdultConsideration()
    {
        return $this->getProp('hasAdultConsideration');
    }

    /**
     * The warranty promise(s) included in the offer.
     * @return \Vnetby\Schemaorg\Types\Thing\Intangible\StructuredValue\WarrantyPromise|null
     */
    function getWarranty()
    {
        return $this->getProp('warranty');
    }

    /**
     * An Amazon Standard Identification Number (ASIN) is a 10-character alphanumeric unique identifier assigned by Amazon.com and its partners for product identification
     * within the Amazon organization (summary from [Wikipedia](https://en.wikipedia.org/wiki/Amazon_Standard_Identification_Number)'s article). Note also that this is a definition for how to include ASINs in
     * Schema.org data, and not a definition of ASINs in general - see documentation from Amazon for authoritative details. ASINs are most
     * commonly encoded as text strings, but the [asin] property supports URL/URI as potential values too.
     * @return string|\Vnetby\Schemaorg\DataTypes\DataURL|\Vnetby\Schemaorg\DataTypes\DataText|null
     */
    function getAsin()
    {
        return $this->getProp('asin');
    }

    /**
     * The date after when the item is not valid. For example the end of an offer, salary period, or a period
     * of opening hours.
     * @return string|\Vnetby\Schemaorg\DataTypes\DataDateTime|\Vnetby\Schemaorg\DataTypes\DataDate|null
     */
    function getValidThrough()
    {
        return $this->getProp('validThrough');
    }

    /**
     * The availability of this item&#x2014;for example In stock, Out of stock, Pre-order, etc.
     * @return \Vnetby\Schemaorg\Types\Thing\Intangible\Enumeration\ItemAvailability\ItemAvailability|null
     */
    function getAvailability()
    {
        return $this->getProp('availability');
    }
}
