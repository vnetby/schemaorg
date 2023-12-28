<?php

/**
* @see https://schema.org/Product
 * Any offered product or service. For example: a pair of shoes; a concert ticket; the rental of a car; a haircut;
 * or an episode of a TV show streamed online.
*/

namespace Vnetby\Schemaorg\Types\Thing\Product;

class Product extends \Vnetby\Schemaorg\Types\Thing\Thing
{
   const TYPE = 'Product';

   /**
     * The manufacturer of the product.
    * @var \Vnetby\Schemaorg\Types\Thing\Organization\Organization
    */
   protected $prop_manufacturer;

   /**
     * The GTIN-12 code of the product, or the product to which the offer refers. The GTIN-12 is the 12-digit GS1 Identification
     * Key composed of a U.P.C. Company Prefix, Item Reference, and Check Digit used to identify trade items. See [GS1 GTIN Summary](http://www.gs1.org/barcodes/technical/idkeys/gtin)
     * for more details.
    * @var \Vnetby\Schemaorg\DataTypes\DataText
    */
   protected $prop_gtin12;

   /**
     * The release date of a product or product model. This can be used to distinguish the exact variant of a product.
    * @var \Vnetby\Schemaorg\DataTypes\DataDate
    */
   protected $prop_releaseDate;

   /**
     * A pattern that something has, for example 'polka dot', 'striped', 'Canadian flag'. Values are typically expressed as text, although links to
     * controlled value schemes are also supported.
    * @var \Vnetby\Schemaorg\DataTypes\DataText|\Vnetby\Schemaorg\Types\Thing\Intangible\DefinedTerm\DefinedTerm
    */
   protected $prop_pattern;

   /**
     * The [[mobileUrl]] property is provided for specific situations in which data consumers need to determine whether one of several provided URLs
     * is a dedicated 'mobile site'. To discourage over-use, and reflecting intial usecases, the property is expected only on [[Product]] and [[Offer]],
     * rather than [[Thing]]. The general trend in web technology is towards [responsive design](https://en.wikipedia.org/wiki/Responsive_web_design) in which content can be flexibly adapted to
     * a wide range of browsing environments. Pages and sites referenced with the long-established [[url]] property should ideally also be usable on
     * a wide variety of devices, including mobile phones. In most cases, it would be pointless and counter productive to attempt to
     * update all [[url]] markup to use [[mobileUrl]] for more mobile-oriented pages. The property is intended for the case when items (primarily
     * [[Product]] and [[Offer]]) have extra URLs hosted on an additional "mobile site" alongside the main one. It should not be taken
     * as an endorsement of this publication style. 
    * @var \Vnetby\Schemaorg\DataTypes\DataText
    */
   protected $prop_mobileUrl;

   /**
     * A [[Grant]] that directly or indirectly provide funding or sponsorship for this item. See also [[ownershipFundingInfo]].
    * @var \Vnetby\Schemaorg\Types\Thing\Intangible\Grant\Grant
    */
   protected $prop_funding;

   /**
     * A standardized size of a product or creative work, specified either through a simple textual string (for example 'XL', '32Wx34L'), a
     * QuantitativeValue with a unitCode, or a comprehensive and structured [[SizeSpecification]]; in other cases, the [[width]], [[height]], [[depth]] and [[weight]] properties may
     * be more applicable. 
    * @var \Vnetby\Schemaorg\Types\Thing\Intangible\StructuredValue\QuantitativeValue\QuantitativeValue|\Vnetby\Schemaorg\DataTypes\DataText|\Vnetby\Schemaorg\Types\Thing\Intangible\DefinedTerm\DefinedTerm|\Vnetby\Schemaorg\Types\Thing\Intangible\Enumeration\QualitativeValue\SizeSpecification
    */
   protected $prop_size;

   /**
     * The place where the product was assembled.
    * @var \Vnetby\Schemaorg\DataTypes\DataText
    */
   protected $prop_countryOfAssembly;

   /**
     * The product identifier, such as ISBN. For example: ``` meta itemprop="productID" content="isbn:123-456-789" ```.
    * @var \Vnetby\Schemaorg\DataTypes\DataText
    */
   protected $prop_productID;

   /**
     * The height of the item.
    * @var \Vnetby\Schemaorg\Types\Thing\Intangible\StructuredValue\QuantitativeValue\QuantitativeValue|\Vnetby\Schemaorg\Types\Thing\Intangible\Quantity\Distance
    */
   protected $prop_height;

   /**
     * Specifies a MerchantReturnPolicy that may be applicable.
    * @var \Vnetby\Schemaorg\Types\Thing\Intangible\MerchantReturnPolicy
    */
   protected $prop_hasMerchantReturnPolicy;

   /**
     * A category for the item. Greater signs or slashes can be used to informally indicate a category hierarchy.
    * @var \Vnetby\Schemaorg\DataTypes\DataText|\Vnetby\Schemaorg\Types\Thing\Intangible\Enumeration\PhysicalActivityCategory\PhysicalActivityCategory|\Vnetby\Schemaorg\DataTypes\DataURL|\Vnetby\Schemaorg\Types\Thing\Intangible\DefinedTerm\CategoryCode\CategoryCode|\Vnetby\Schemaorg\Types\Thing\Thing
    */
   protected $prop_category;

   /**
     * The Manufacturer Part Number (MPN) of the product, or the product to which the offer refers.
    * @var \Vnetby\Schemaorg\DataTypes\DataText
    */
   protected $prop_mpn;

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
     * A pointer to another product (or multiple products) for which this product is an accessory or spare part.
    * @var \Vnetby\Schemaorg\Types\Thing\Product\Product
    */
   protected $prop_isAccessoryOrSparePartFor;

   /**
     * An intended audience, i.e. a group for whom something was created.
    * @var \Vnetby\Schemaorg\Types\Thing\Intangible\Audience\Audience
    */
   protected $prop_audience;

   /**
     * Indicates whether this content is family friendly.
    * @var \Vnetby\Schemaorg\DataTypes\DataBoolean
    */
   protected $prop_isFamilyFriendly;

   /**
     * The Stock Keeping Unit (SKU), i.e. a merchant-specific identifier for a product or service, or the product to which the offer
     * refers.
    * @var \Vnetby\Schemaorg\DataTypes\DataText
    */
   protected $prop_sku;

   /**
     * The weight of the product or person.
    * @var \Vnetby\Schemaorg\Types\Thing\Intangible\StructuredValue\QuantitativeValue\QuantitativeValue
    */
   protected $prop_weight;

   /**
     * The width of the item.
    * @var \Vnetby\Schemaorg\Types\Thing\Intangible\Quantity\Distance|\Vnetby\Schemaorg\Types\Thing\Intangible\StructuredValue\QuantitativeValue\QuantitativeValue
    */
   protected $prop_width;

   /**
     * The GTIN-14 code of the product, or the product to which the offer refers. See [GS1 GTIN Summary](http://www.gs1.org/barcodes/technical/idkeys/gtin) for more details.
    * @var \Vnetby\Schemaorg\DataTypes\DataText
    */
   protected $prop_gtin14;

   /**
     * Provides positive considerations regarding something, for example product highlights or (alongside [[negativeNotes]]) pro/con lists for reviews. In the case of a
     * [[Review]], the property describes the [[itemReviewed]] from the perspective of the review; in the case of a [[Product]], the product itself
     * is being described. The property values can be expressed either as unstructured text (repeated as necessary), or if ordered, as a
     * list (in which case the most positive is at the beginning of the list).
    * @var \Vnetby\Schemaorg\Types\Thing\CreativeWork\WebContent\WebContent|\Vnetby\Schemaorg\Types\Thing\Intangible\ItemList\ItemList|\Vnetby\Schemaorg\DataTypes\DataText|\Vnetby\Schemaorg\Types\Thing\Intangible\ListItem\ListItem
    */
   protected $prop_positiveNotes;

   /**
     * The brand(s) associated with a product or service, or the brand(s) maintained by an organization or business person.
    * @var \Vnetby\Schemaorg\Types\Thing\Intangible\Brand|\Vnetby\Schemaorg\Types\Thing\Organization\Organization
    */
   protected $prop_brand;

   /**
     * A pointer to another, somehow related product (or multiple products).
    * @var \Vnetby\Schemaorg\Types\Thing\Product\Product|\Vnetby\Schemaorg\Types\Thing\Intangible\Service\Service
    */
   protected $prop_isRelatedTo;

   /**
     * The overall rating, based on a collection of reviews or ratings, of the item.
    * @var \Vnetby\Schemaorg\Types\Thing\Intangible\Rating\AggregateRating\AggregateRating
    */
   protected $prop_aggregateRating;

   /**
     * Indicates the [[productGroupID]] for a [[ProductGroup]] that this product [[isVariantOf]]. 
    * @var \Vnetby\Schemaorg\DataTypes\DataText
    */
   protected $prop_inProductGroupWithID;

   /**
     * Indicates the kind of product that this is a variant of. In the case of [[ProductModel]], this is a pointer (from
     * a ProductModel) to a base product from which this product is a variant. It is safe to infer that the variant
     * inherits all product features from the base model, unless defined locally. This is not transitive. In the case of a [[ProductGroup]],
     * the group description also serves as a template, representing a set of Products that vary on explicitly defined, specific dimensions only
     * (so it defines both a set of variants, as well as which values distinguish amongst those variants). When used with [[ProductGroup]],
     * this property can apply to any [[Product]] included in the group.
    * @var \Vnetby\Schemaorg\Types\Thing\Product\ProductModel|\Vnetby\Schemaorg\Types\Thing\Product\ProductGroup
    */
   protected $prop_isVariantOf;

   /**
     * The model of the product. Use with the URL of a ProductModel or a textual representation of the model identifier. The
     * URL of the ProductModel can be from an external source. It is recommended to additionally provide strong product identifiers via the
     * gtin8/gtin13/gtin14 and mpn properties.
    * @var \Vnetby\Schemaorg\Types\Thing\Product\ProductModel|\Vnetby\Schemaorg\DataTypes\DataText
    */
   protected $prop_model;

   /**
     * A property-value pair representing an additional characteristic of the entity, e.g. a product feature or another characteristic for which there is
     * no matching property in schema.org.\n\nNote: Publishers should be aware that applications designed to use specific schema.org properties (e.g. https://schema.org/width, https://schema.org/color, https://schema.org/gtin13,
     * ...) will typically expect such data to be provided using those properties, rather than using the generic property/value mechanism. 
    * @var \Vnetby\Schemaorg\Types\Thing\Intangible\StructuredValue\PropertyValue\PropertyValue
    */
   protected $prop_additionalProperty;

   /**
     * Defines the energy efficiency Category (also known as "class" or "rating") for a product according to an international energy efficiency standard.
    * @var \Vnetby\Schemaorg\Types\Thing\Intangible\EnergyConsumptionDetails
    */
   protected $prop_hasEnergyConsumptionDetails;

   /**
     * A predefined value from OfferItemCondition specifying the condition of the product or service, or the products or services included in the
     * offer. Also used for product return policies to specify the condition of products accepted for returns.
    * @var \Vnetby\Schemaorg\Types\Thing\Intangible\Enumeration\OfferItemCondition\OfferItemCondition
    */
   protected $prop_itemCondition;

   /**
     * The color of the product.
    * @var \Vnetby\Schemaorg\DataTypes\DataText
    */
   protected $prop_color;

   /**
     * Keywords or tags used to describe some item. Multiple textual entries in a keywords list are typically delimited by commas, or
     * by repeating the property.
    * @var \Vnetby\Schemaorg\DataTypes\DataURL|\Vnetby\Schemaorg\DataTypes\DataText|\Vnetby\Schemaorg\Types\Thing\Intangible\DefinedTerm\DefinedTerm
    */
   protected $prop_keywords;

   /**
     * The GTIN-8 code of the product, or the product to which the offer refers. This code is also known as EAN/UCC-8
     * or 8-digit EAN. See [GS1 GTIN Summary](http://www.gs1.org/barcodes/technical/idkeys/gtin) for more details.
    * @var \Vnetby\Schemaorg\DataTypes\DataText
    */
   protected $prop_gtin8;

   /**
     * Indicates the [NATO stock number](https://en.wikipedia.org/wiki/NATO_Stock_Number) (nsn) of a [[Product]]. 
    * @var \Vnetby\Schemaorg\DataTypes\DataText
    */
   protected $prop_nsn;

   /**
     * A material that something is made from, e.g. leather, wool, cotton, paper.
    * @var \Vnetby\Schemaorg\DataTypes\DataURL|\Vnetby\Schemaorg\Types\Thing\Product\Product|\Vnetby\Schemaorg\DataTypes\DataText
    */
   protected $prop_material;

   /**
     * A review of the item.
    * @var \Vnetby\Schemaorg\Types\Thing\CreativeWork\Review\Review
    */
   protected $prop_review;

   /**
     * The date the item, e.g. vehicle, was purchased by the current owner.
    * @var \Vnetby\Schemaorg\DataTypes\DataDate
    */
   protected $prop_purchaseDate;

   /**
     * A product measurement, for example the inseam of pants, the wheel size of a bicycle, or the gauge of a screw.
     * Usually an exact measurement, but can also be a range of measurements for adjustable products, for example belts and ski bindings.
    * @var \Vnetby\Schemaorg\Types\Thing\Intangible\StructuredValue\QuantitativeValue\QuantitativeValue
    */
   protected $prop_hasMeasurement;

   /**
     * Provides negative considerations regarding something, most typically in pro/con lists for reviews (alongside [[positiveNotes]]). For symmetry In the case of a
     * [[Review]], the property describes the [[itemReviewed]] from the perspective of the review; in the case of a [[Product]], the product itself
     * is being described. Since product descriptions tend to emphasise positive claims, it may be relatively unusual to find [[negativeNotes]] used in
     * this way. Nevertheless for the sake of symmetry, [[negativeNotes]] can be used on [[Product]]. The property values can be expressed either
     * as unstructured text (repeated as necessary), or if ordered, as a list (in which case the most negative is at the
     * beginning of the list).
    * @var \Vnetby\Schemaorg\DataTypes\DataText|\Vnetby\Schemaorg\Types\Thing\Intangible\ListItem\ListItem|\Vnetby\Schemaorg\Types\Thing\CreativeWork\WebContent\WebContent|\Vnetby\Schemaorg\Types\Thing\Intangible\ItemList\ItemList
    */
   protected $prop_negativeNotes;

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
    * @var \Vnetby\Schemaorg\DataTypes\DataText|\Vnetby\Schemaorg\DataTypes\DataURL
    */
   protected $prop_gtin;

   /**
     * A pointer to another product (or multiple products) for which this product is a consumable.
    * @var \Vnetby\Schemaorg\Types\Thing\Product\Product
    */
   protected $prop_isConsumableFor;

   /**
     * The depth of the item.
    * @var \Vnetby\Schemaorg\Types\Thing\Intangible\StructuredValue\QuantitativeValue\QuantitativeValue|\Vnetby\Schemaorg\Types\Thing\Intangible\Quantity\Distance
    */
   protected $prop_depth;

   /**
     * The GTIN-13 code of the product, or the product to which the offer refers. This is equivalent to 13-digit ISBN codes
     * and EAN UCC-13. Former 12-digit UPC codes can be converted into a GTIN-13 code by simply adding a preceding zero. See
     * [GS1 GTIN Summary](http://www.gs1.org/barcodes/technical/idkeys/gtin) for more details.
    * @var \Vnetby\Schemaorg\DataTypes\DataText
    */
   protected $prop_gtin13;

   /**
     * The date of production of the item, e.g. vehicle.
    * @var \Vnetby\Schemaorg\DataTypes\DataDate
    */
   protected $prop_productionDate;

   /**
     * An award won by or for this item.
    * @var \Vnetby\Schemaorg\DataTypes\DataText
    */
   protected $prop_award;

   /**
     * The place where the item (typically [[Product]]) was last processed and tested before importation.
    * @var \Vnetby\Schemaorg\DataTypes\DataText
    */
   protected $prop_countryOfLastProcessing;

   /**
     * Used to tag an item to be intended or suitable for consumption or use by adults only.
    * @var \Vnetby\Schemaorg\Types\Thing\Intangible\Enumeration\AdultOrientedEnumeration\AdultOrientedEnumeration
    */
   protected $prop_hasAdultConsideration;

   /**
     * An Amazon Standard Identification Number (ASIN) is a 10-character alphanumeric unique identifier assigned by Amazon.com and its partners for product identification
     * within the Amazon organization (summary from [Wikipedia](https://en.wikipedia.org/wiki/Amazon_Standard_Identification_Number)'s article). Note also that this is a definition for how to include ASINs in
     * Schema.org data, and not a definition of ASINs in general - see documentation from Amazon for authoritative details. ASINs are most
     * commonly encoded as text strings, but the [asin] property supports URL/URI as potential values too.
    * @var \Vnetby\Schemaorg\DataTypes\DataURL|\Vnetby\Schemaorg\DataTypes\DataText
    */
   protected $prop_asin;

   /**
     * A slogan or motto associated with the item.
    * @var \Vnetby\Schemaorg\DataTypes\DataText
    */
   protected $prop_slogan;

   /**
     * An associated logo.
    * @var \Vnetby\Schemaorg\Types\Thing\CreativeWork\MediaObject\ImageObject\ImageObject|\Vnetby\Schemaorg\DataTypes\DataURL
    */
   protected $prop_logo;

   /**
     * A pointer to another, functionally similar product (or multiple products).
    * @var \Vnetby\Schemaorg\Types\Thing\Intangible\Service\Service|\Vnetby\Schemaorg\Types\Thing\Product\Product
    */
   protected $prop_isSimilarTo;

   /**
     * The manufacturer of the product.
    * @param \Vnetby\Schemaorg\Types\Thing\Organization\Organization $value
    * @return static
    */
   function setManufacturer($value)
   {
       return $this->setProp('manufacturer', $value);
   }

   /**
     * The GTIN-12 code of the product, or the product to which the offer refers. The GTIN-12 is the 12-digit GS1 Identification
     * Key composed of a U.P.C. Company Prefix, Item Reference, and Check Digit used to identify trade items. See [GS1 GTIN Summary](http://www.gs1.org/barcodes/technical/idkeys/gtin)
     * for more details.
    * @param \Vnetby\Schemaorg\DataTypes\DataText $value
    * @return static
    */
   function setGtin12($value)
   {
       return $this->setProp('gtin12', $value);
   }

   /**
     * The release date of a product or product model. This can be used to distinguish the exact variant of a product.
    * @param \Vnetby\Schemaorg\DataTypes\DataDate $value
    * @return static
    */
   function setReleaseDate($value)
   {
       return $this->setProp('releaseDate', $value);
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
     * The [[mobileUrl]] property is provided for specific situations in which data consumers need to determine whether one of several provided URLs
     * is a dedicated 'mobile site'. To discourage over-use, and reflecting intial usecases, the property is expected only on [[Product]] and [[Offer]],
     * rather than [[Thing]]. The general trend in web technology is towards [responsive design](https://en.wikipedia.org/wiki/Responsive_web_design) in which content can be flexibly adapted to
     * a wide range of browsing environments. Pages and sites referenced with the long-established [[url]] property should ideally also be usable on
     * a wide variety of devices, including mobile phones. In most cases, it would be pointless and counter productive to attempt to
     * update all [[url]] markup to use [[mobileUrl]] for more mobile-oriented pages. The property is intended for the case when items (primarily
     * [[Product]] and [[Offer]]) have extra URLs hosted on an additional "mobile site" alongside the main one. It should not be taken
     * as an endorsement of this publication style. 
    * @param \Vnetby\Schemaorg\DataTypes\DataText $value
    * @return static
    */
   function setMobileUrl($value)
   {
       return $this->setProp('mobileUrl', $value);
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
     * The place where the product was assembled.
    * @param \Vnetby\Schemaorg\DataTypes\DataText $value
    * @return static
    */
   function setCountryOfAssembly($value)
   {
       return $this->setProp('countryOfAssembly', $value);
   }

   /**
     * The product identifier, such as ISBN. For example: ``` meta itemprop="productID" content="isbn:123-456-789" ```.
    * @param \Vnetby\Schemaorg\DataTypes\DataText $value
    * @return static
    */
   function setProductID($value)
   {
       return $this->setProp('productID', $value);
   }

   /**
     * The height of the item.
    * @param \Vnetby\Schemaorg\Types\Thing\Intangible\StructuredValue\QuantitativeValue\QuantitativeValue|\Vnetby\Schemaorg\Types\Thing\Intangible\Quantity\Distance $value
    * @return static
    */
   function setHeight($value)
   {
       return $this->setProp('height', $value);
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
    * @param \Vnetby\Schemaorg\DataTypes\DataText|\Vnetby\Schemaorg\Types\Thing\Intangible\Enumeration\PhysicalActivityCategory\PhysicalActivityCategory|\Vnetby\Schemaorg\DataTypes\DataURL|\Vnetby\Schemaorg\Types\Thing\Intangible\DefinedTerm\CategoryCode\CategoryCode|\Vnetby\Schemaorg\Types\Thing\Thing $value
    * @return static
    */
   function setCategory($value)
   {
       return $this->setProp('category', $value);
   }

   /**
     * The Manufacturer Part Number (MPN) of the product, or the product to which the offer refers.
    * @param \Vnetby\Schemaorg\DataTypes\DataText $value
    * @return static
    */
   function setMpn($value)
   {
       return $this->setProp('mpn', $value);
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
     * A pointer to another product (or multiple products) for which this product is an accessory or spare part.
    * @param \Vnetby\Schemaorg\Types\Thing\Product\Product $value
    * @return static
    */
   function setIsAccessoryOrSparePartFor($value)
   {
       return $this->setProp('isAccessoryOrSparePartFor', $value);
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
     * Indicates whether this content is family friendly.
    * @param \Vnetby\Schemaorg\DataTypes\DataBoolean $value
    * @return static
    */
   function setIsFamilyFriendly($value)
   {
       return $this->setProp('isFamilyFriendly', $value);
   }

   /**
     * The Stock Keeping Unit (SKU), i.e. a merchant-specific identifier for a product or service, or the product to which the offer
     * refers.
    * @param \Vnetby\Schemaorg\DataTypes\DataText $value
    * @return static
    */
   function setSku($value)
   {
       return $this->setProp('sku', $value);
   }

   /**
     * The weight of the product or person.
    * @param \Vnetby\Schemaorg\Types\Thing\Intangible\StructuredValue\QuantitativeValue\QuantitativeValue $value
    * @return static
    */
   function setWeight($value)
   {
       return $this->setProp('weight', $value);
   }

   /**
     * The width of the item.
    * @param \Vnetby\Schemaorg\Types\Thing\Intangible\Quantity\Distance|\Vnetby\Schemaorg\Types\Thing\Intangible\StructuredValue\QuantitativeValue\QuantitativeValue $value
    * @return static
    */
   function setWidth($value)
   {
       return $this->setProp('width', $value);
   }

   /**
     * The GTIN-14 code of the product, or the product to which the offer refers. See [GS1 GTIN Summary](http://www.gs1.org/barcodes/technical/idkeys/gtin) for more details.
    * @param \Vnetby\Schemaorg\DataTypes\DataText $value
    * @return static
    */
   function setGtin14($value)
   {
       return $this->setProp('gtin14', $value);
   }

   /**
     * Provides positive considerations regarding something, for example product highlights or (alongside [[negativeNotes]]) pro/con lists for reviews. In the case of a
     * [[Review]], the property describes the [[itemReviewed]] from the perspective of the review; in the case of a [[Product]], the product itself
     * is being described. The property values can be expressed either as unstructured text (repeated as necessary), or if ordered, as a
     * list (in which case the most positive is at the beginning of the list).
    * @param \Vnetby\Schemaorg\Types\Thing\CreativeWork\WebContent\WebContent|\Vnetby\Schemaorg\Types\Thing\Intangible\ItemList\ItemList|\Vnetby\Schemaorg\DataTypes\DataText|\Vnetby\Schemaorg\Types\Thing\Intangible\ListItem\ListItem $value
    * @return static
    */
   function setPositiveNotes($value)
   {
       return $this->setProp('positiveNotes', $value);
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
     * Indicates the [[productGroupID]] for a [[ProductGroup]] that this product [[isVariantOf]]. 
    * @param \Vnetby\Schemaorg\DataTypes\DataText $value
    * @return static
    */
   function setInProductGroupWithID($value)
   {
       return $this->setProp('inProductGroupWithID', $value);
   }

   /**
     * Indicates the kind of product that this is a variant of. In the case of [[ProductModel]], this is a pointer (from
     * a ProductModel) to a base product from which this product is a variant. It is safe to infer that the variant
     * inherits all product features from the base model, unless defined locally. This is not transitive. In the case of a [[ProductGroup]],
     * the group description also serves as a template, representing a set of Products that vary on explicitly defined, specific dimensions only
     * (so it defines both a set of variants, as well as which values distinguish amongst those variants). When used with [[ProductGroup]],
     * this property can apply to any [[Product]] included in the group.
    * @param \Vnetby\Schemaorg\Types\Thing\Product\ProductModel|\Vnetby\Schemaorg\Types\Thing\Product\ProductGroup $value
    * @return static
    */
   function setIsVariantOf($value)
   {
       return $this->setProp('isVariantOf', $value);
   }

   /**
     * The model of the product. Use with the URL of a ProductModel or a textual representation of the model identifier. The
     * URL of the ProductModel can be from an external source. It is recommended to additionally provide strong product identifiers via the
     * gtin8/gtin13/gtin14 and mpn properties.
    * @param \Vnetby\Schemaorg\Types\Thing\Product\ProductModel|\Vnetby\Schemaorg\DataTypes\DataText $value
    * @return static
    */
   function setModel($value)
   {
       return $this->setProp('model', $value);
   }

   /**
     * A property-value pair representing an additional characteristic of the entity, e.g. a product feature or another characteristic for which there is
     * no matching property in schema.org.\n\nNote: Publishers should be aware that applications designed to use specific schema.org properties (e.g. https://schema.org/width, https://schema.org/color, https://schema.org/gtin13,
     * ...) will typically expect such data to be provided using those properties, rather than using the generic property/value mechanism. 
    * @param \Vnetby\Schemaorg\Types\Thing\Intangible\StructuredValue\PropertyValue\PropertyValue $value
    * @return static
    */
   function setAdditionalProperty($value)
   {
       return $this->setProp('additionalProperty', $value);
   }

   /**
     * Defines the energy efficiency Category (also known as "class" or "rating") for a product according to an international energy efficiency standard.
    * @param \Vnetby\Schemaorg\Types\Thing\Intangible\EnergyConsumptionDetails $value
    * @return static
    */
   function setHasEnergyConsumptionDetails($value)
   {
       return $this->setProp('hasEnergyConsumptionDetails', $value);
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
     * The color of the product.
    * @param \Vnetby\Schemaorg\DataTypes\DataText $value
    * @return static
    */
   function setColor($value)
   {
       return $this->setProp('color', $value);
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
     * The GTIN-8 code of the product, or the product to which the offer refers. This code is also known as EAN/UCC-8
     * or 8-digit EAN. See [GS1 GTIN Summary](http://www.gs1.org/barcodes/technical/idkeys/gtin) for more details.
    * @param \Vnetby\Schemaorg\DataTypes\DataText $value
    * @return static
    */
   function setGtin8($value)
   {
       return $this->setProp('gtin8', $value);
   }

   /**
     * Indicates the [NATO stock number](https://en.wikipedia.org/wiki/NATO_Stock_Number) (nsn) of a [[Product]]. 
    * @param \Vnetby\Schemaorg\DataTypes\DataText $value
    * @return static
    */
   function setNsn($value)
   {
       return $this->setProp('nsn', $value);
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
     * A review of the item.
    * @param \Vnetby\Schemaorg\Types\Thing\CreativeWork\Review\Review $value
    * @return static
    */
   function setReview($value)
   {
       return $this->setProp('review', $value);
   }

   /**
     * The date the item, e.g. vehicle, was purchased by the current owner.
    * @param \Vnetby\Schemaorg\DataTypes\DataDate $value
    * @return static
    */
   function setPurchaseDate($value)
   {
       return $this->setProp('purchaseDate', $value);
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
     * Provides negative considerations regarding something, most typically in pro/con lists for reviews (alongside [[positiveNotes]]). For symmetry In the case of a
     * [[Review]], the property describes the [[itemReviewed]] from the perspective of the review; in the case of a [[Product]], the product itself
     * is being described. Since product descriptions tend to emphasise positive claims, it may be relatively unusual to find [[negativeNotes]] used in
     * this way. Nevertheless for the sake of symmetry, [[negativeNotes]] can be used on [[Product]]. The property values can be expressed either
     * as unstructured text (repeated as necessary), or if ordered, as a list (in which case the most negative is at the
     * beginning of the list).
    * @param \Vnetby\Schemaorg\DataTypes\DataText|\Vnetby\Schemaorg\Types\Thing\Intangible\ListItem\ListItem|\Vnetby\Schemaorg\Types\Thing\CreativeWork\WebContent\WebContent|\Vnetby\Schemaorg\Types\Thing\Intangible\ItemList\ItemList $value
    * @return static
    */
   function setNegativeNotes($value)
   {
       return $this->setProp('negativeNotes', $value);
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
    * @param \Vnetby\Schemaorg\DataTypes\DataText|\Vnetby\Schemaorg\DataTypes\DataURL $value
    * @return static
    */
   function setGtin($value)
   {
       return $this->setProp('gtin', $value);
   }

   /**
     * A pointer to another product (or multiple products) for which this product is a consumable.
    * @param \Vnetby\Schemaorg\Types\Thing\Product\Product $value
    * @return static
    */
   function setIsConsumableFor($value)
   {
       return $this->setProp('isConsumableFor', $value);
   }

   /**
     * The depth of the item.
    * @param \Vnetby\Schemaorg\Types\Thing\Intangible\StructuredValue\QuantitativeValue\QuantitativeValue|\Vnetby\Schemaorg\Types\Thing\Intangible\Quantity\Distance $value
    * @return static
    */
   function setDepth($value)
   {
       return $this->setProp('depth', $value);
   }

   /**
     * The GTIN-13 code of the product, or the product to which the offer refers. This is equivalent to 13-digit ISBN codes
     * and EAN UCC-13. Former 12-digit UPC codes can be converted into a GTIN-13 code by simply adding a preceding zero. See
     * [GS1 GTIN Summary](http://www.gs1.org/barcodes/technical/idkeys/gtin) for more details.
    * @param \Vnetby\Schemaorg\DataTypes\DataText $value
    * @return static
    */
   function setGtin13($value)
   {
       return $this->setProp('gtin13', $value);
   }

   /**
     * The date of production of the item, e.g. vehicle.
    * @param \Vnetby\Schemaorg\DataTypes\DataDate $value
    * @return static
    */
   function setProductionDate($value)
   {
       return $this->setProp('productionDate', $value);
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
     * The place where the item (typically [[Product]]) was last processed and tested before importation.
    * @param \Vnetby\Schemaorg\DataTypes\DataText $value
    * @return static
    */
   function setCountryOfLastProcessing($value)
   {
       return $this->setProp('countryOfLastProcessing', $value);
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
     * An Amazon Standard Identification Number (ASIN) is a 10-character alphanumeric unique identifier assigned by Amazon.com and its partners for product identification
     * within the Amazon organization (summary from [Wikipedia](https://en.wikipedia.org/wiki/Amazon_Standard_Identification_Number)'s article). Note also that this is a definition for how to include ASINs in
     * Schema.org data, and not a definition of ASINs in general - see documentation from Amazon for authoritative details. ASINs are most
     * commonly encoded as text strings, but the [asin] property supports URL/URI as potential values too.
    * @param \Vnetby\Schemaorg\DataTypes\DataURL|\Vnetby\Schemaorg\DataTypes\DataText $value
    * @return static
    */
   function setAsin($value)
   {
       return $this->setProp('asin', $value);
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
     * An associated logo.
    * @param \Vnetby\Schemaorg\Types\Thing\CreativeWork\MediaObject\ImageObject\ImageObject|\Vnetby\Schemaorg\DataTypes\DataURL $value
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
     * The manufacturer of the product.
    * @return \Vnetby\Schemaorg\Types\Thing\Organization\Organization|null
    */
   function getManufacturer()
   {
       return $this->getProp('manufacturer');
   }

   /**
     * The GTIN-12 code of the product, or the product to which the offer refers. The GTIN-12 is the 12-digit GS1 Identification
     * Key composed of a U.P.C. Company Prefix, Item Reference, and Check Digit used to identify trade items. See [GS1 GTIN Summary](http://www.gs1.org/barcodes/technical/idkeys/gtin)
     * for more details.
    * @return \Vnetby\Schemaorg\DataTypes\DataText|null
    */
   function getGtin12()
   {
       return $this->getProp('gtin12');
   }

   /**
     * The release date of a product or product model. This can be used to distinguish the exact variant of a product.
    * @return \Vnetby\Schemaorg\DataTypes\DataDate|null
    */
   function getReleaseDate()
   {
       return $this->getProp('releaseDate');
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
     * The [[mobileUrl]] property is provided for specific situations in which data consumers need to determine whether one of several provided URLs
     * is a dedicated 'mobile site'. To discourage over-use, and reflecting intial usecases, the property is expected only on [[Product]] and [[Offer]],
     * rather than [[Thing]]. The general trend in web technology is towards [responsive design](https://en.wikipedia.org/wiki/Responsive_web_design) in which content can be flexibly adapted to
     * a wide range of browsing environments. Pages and sites referenced with the long-established [[url]] property should ideally also be usable on
     * a wide variety of devices, including mobile phones. In most cases, it would be pointless and counter productive to attempt to
     * update all [[url]] markup to use [[mobileUrl]] for more mobile-oriented pages. The property is intended for the case when items (primarily
     * [[Product]] and [[Offer]]) have extra URLs hosted on an additional "mobile site" alongside the main one. It should not be taken
     * as an endorsement of this publication style. 
    * @return \Vnetby\Schemaorg\DataTypes\DataText|null
    */
   function getMobileUrl()
   {
       return $this->getProp('mobileUrl');
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
     * The place where the product was assembled.
    * @return \Vnetby\Schemaorg\DataTypes\DataText|null
    */
   function getCountryOfAssembly()
   {
       return $this->getProp('countryOfAssembly');
   }

   /**
     * The product identifier, such as ISBN. For example: ``` meta itemprop="productID" content="isbn:123-456-789" ```.
    * @return \Vnetby\Schemaorg\DataTypes\DataText|null
    */
   function getProductID()
   {
       return $this->getProp('productID');
   }

   /**
     * The height of the item.
    * @return \Vnetby\Schemaorg\Types\Thing\Intangible\StructuredValue\QuantitativeValue\QuantitativeValue|\Vnetby\Schemaorg\Types\Thing\Intangible\Quantity\Distance|null
    */
   function getHeight()
   {
       return $this->getProp('height');
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
    * @return \Vnetby\Schemaorg\DataTypes\DataText|\Vnetby\Schemaorg\Types\Thing\Intangible\Enumeration\PhysicalActivityCategory\PhysicalActivityCategory|\Vnetby\Schemaorg\DataTypes\DataURL|\Vnetby\Schemaorg\Types\Thing\Intangible\DefinedTerm\CategoryCode\CategoryCode|\Vnetby\Schemaorg\Types\Thing\Thing|null
    */
   function getCategory()
   {
       return $this->getProp('category');
   }

   /**
     * The Manufacturer Part Number (MPN) of the product, or the product to which the offer refers.
    * @return \Vnetby\Schemaorg\DataTypes\DataText|null
    */
   function getMpn()
   {
       return $this->getProp('mpn');
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
     * A pointer to another product (or multiple products) for which this product is an accessory or spare part.
    * @return \Vnetby\Schemaorg\Types\Thing\Product\Product|null
    */
   function getIsAccessoryOrSparePartFor()
   {
       return $this->getProp('isAccessoryOrSparePartFor');
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
     * Indicates whether this content is family friendly.
    * @return \Vnetby\Schemaorg\DataTypes\DataBoolean|null
    */
   function getIsFamilyFriendly()
   {
       return $this->getProp('isFamilyFriendly');
   }

   /**
     * The Stock Keeping Unit (SKU), i.e. a merchant-specific identifier for a product or service, or the product to which the offer
     * refers.
    * @return \Vnetby\Schemaorg\DataTypes\DataText|null
    */
   function getSku()
   {
       return $this->getProp('sku');
   }

   /**
     * The weight of the product or person.
    * @return \Vnetby\Schemaorg\Types\Thing\Intangible\StructuredValue\QuantitativeValue\QuantitativeValue|null
    */
   function getWeight()
   {
       return $this->getProp('weight');
   }

   /**
     * The width of the item.
    * @return \Vnetby\Schemaorg\Types\Thing\Intangible\Quantity\Distance|\Vnetby\Schemaorg\Types\Thing\Intangible\StructuredValue\QuantitativeValue\QuantitativeValue|null
    */
   function getWidth()
   {
       return $this->getProp('width');
   }

   /**
     * The GTIN-14 code of the product, or the product to which the offer refers. See [GS1 GTIN Summary](http://www.gs1.org/barcodes/technical/idkeys/gtin) for more details.
    * @return \Vnetby\Schemaorg\DataTypes\DataText|null
    */
   function getGtin14()
   {
       return $this->getProp('gtin14');
   }

   /**
     * Provides positive considerations regarding something, for example product highlights or (alongside [[negativeNotes]]) pro/con lists for reviews. In the case of a
     * [[Review]], the property describes the [[itemReviewed]] from the perspective of the review; in the case of a [[Product]], the product itself
     * is being described. The property values can be expressed either as unstructured text (repeated as necessary), or if ordered, as a
     * list (in which case the most positive is at the beginning of the list).
    * @return \Vnetby\Schemaorg\Types\Thing\CreativeWork\WebContent\WebContent|\Vnetby\Schemaorg\Types\Thing\Intangible\ItemList\ItemList|\Vnetby\Schemaorg\DataTypes\DataText|\Vnetby\Schemaorg\Types\Thing\Intangible\ListItem\ListItem|null
    */
   function getPositiveNotes()
   {
       return $this->getProp('positiveNotes');
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
     * Indicates the [[productGroupID]] for a [[ProductGroup]] that this product [[isVariantOf]]. 
    * @return \Vnetby\Schemaorg\DataTypes\DataText|null
    */
   function getInProductGroupWithID()
   {
       return $this->getProp('inProductGroupWithID');
   }

   /**
     * Indicates the kind of product that this is a variant of. In the case of [[ProductModel]], this is a pointer (from
     * a ProductModel) to a base product from which this product is a variant. It is safe to infer that the variant
     * inherits all product features from the base model, unless defined locally. This is not transitive. In the case of a [[ProductGroup]],
     * the group description also serves as a template, representing a set of Products that vary on explicitly defined, specific dimensions only
     * (so it defines both a set of variants, as well as which values distinguish amongst those variants). When used with [[ProductGroup]],
     * this property can apply to any [[Product]] included in the group.
    * @return \Vnetby\Schemaorg\Types\Thing\Product\ProductModel|\Vnetby\Schemaorg\Types\Thing\Product\ProductGroup|null
    */
   function getIsVariantOf()
   {
       return $this->getProp('isVariantOf');
   }

   /**
     * The model of the product. Use with the URL of a ProductModel or a textual representation of the model identifier. The
     * URL of the ProductModel can be from an external source. It is recommended to additionally provide strong product identifiers via the
     * gtin8/gtin13/gtin14 and mpn properties.
    * @return \Vnetby\Schemaorg\Types\Thing\Product\ProductModel|\Vnetby\Schemaorg\DataTypes\DataText|null
    */
   function getModel()
   {
       return $this->getProp('model');
   }

   /**
     * A property-value pair representing an additional characteristic of the entity, e.g. a product feature or another characteristic for which there is
     * no matching property in schema.org.\n\nNote: Publishers should be aware that applications designed to use specific schema.org properties (e.g. https://schema.org/width, https://schema.org/color, https://schema.org/gtin13,
     * ...) will typically expect such data to be provided using those properties, rather than using the generic property/value mechanism. 
    * @return \Vnetby\Schemaorg\Types\Thing\Intangible\StructuredValue\PropertyValue\PropertyValue|null
    */
   function getAdditionalProperty()
   {
       return $this->getProp('additionalProperty');
   }

   /**
     * Defines the energy efficiency Category (also known as "class" or "rating") for a product according to an international energy efficiency standard.
    * @return \Vnetby\Schemaorg\Types\Thing\Intangible\EnergyConsumptionDetails|null
    */
   function getHasEnergyConsumptionDetails()
   {
       return $this->getProp('hasEnergyConsumptionDetails');
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
     * The color of the product.
    * @return \Vnetby\Schemaorg\DataTypes\DataText|null
    */
   function getColor()
   {
       return $this->getProp('color');
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
     * The GTIN-8 code of the product, or the product to which the offer refers. This code is also known as EAN/UCC-8
     * or 8-digit EAN. See [GS1 GTIN Summary](http://www.gs1.org/barcodes/technical/idkeys/gtin) for more details.
    * @return \Vnetby\Schemaorg\DataTypes\DataText|null
    */
   function getGtin8()
   {
       return $this->getProp('gtin8');
   }

   /**
     * Indicates the [NATO stock number](https://en.wikipedia.org/wiki/NATO_Stock_Number) (nsn) of a [[Product]]. 
    * @return \Vnetby\Schemaorg\DataTypes\DataText|null
    */
   function getNsn()
   {
       return $this->getProp('nsn');
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
     * A review of the item.
    * @return \Vnetby\Schemaorg\Types\Thing\CreativeWork\Review\Review|null
    */
   function getReview()
   {
       return $this->getProp('review');
   }

   /**
     * The date the item, e.g. vehicle, was purchased by the current owner.
    * @return \Vnetby\Schemaorg\DataTypes\DataDate|null
    */
   function getPurchaseDate()
   {
       return $this->getProp('purchaseDate');
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
     * Provides negative considerations regarding something, most typically in pro/con lists for reviews (alongside [[positiveNotes]]). For symmetry In the case of a
     * [[Review]], the property describes the [[itemReviewed]] from the perspective of the review; in the case of a [[Product]], the product itself
     * is being described. Since product descriptions tend to emphasise positive claims, it may be relatively unusual to find [[negativeNotes]] used in
     * this way. Nevertheless for the sake of symmetry, [[negativeNotes]] can be used on [[Product]]. The property values can be expressed either
     * as unstructured text (repeated as necessary), or if ordered, as a list (in which case the most negative is at the
     * beginning of the list).
    * @return \Vnetby\Schemaorg\DataTypes\DataText|\Vnetby\Schemaorg\Types\Thing\Intangible\ListItem\ListItem|\Vnetby\Schemaorg\Types\Thing\CreativeWork\WebContent\WebContent|\Vnetby\Schemaorg\Types\Thing\Intangible\ItemList\ItemList|null
    */
   function getNegativeNotes()
   {
       return $this->getProp('negativeNotes');
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
    * @return \Vnetby\Schemaorg\DataTypes\DataText|\Vnetby\Schemaorg\DataTypes\DataURL|null
    */
   function getGtin()
   {
       return $this->getProp('gtin');
   }

   /**
     * A pointer to another product (or multiple products) for which this product is a consumable.
    * @return \Vnetby\Schemaorg\Types\Thing\Product\Product|null
    */
   function getIsConsumableFor()
   {
       return $this->getProp('isConsumableFor');
   }

   /**
     * The depth of the item.
    * @return \Vnetby\Schemaorg\Types\Thing\Intangible\StructuredValue\QuantitativeValue\QuantitativeValue|\Vnetby\Schemaorg\Types\Thing\Intangible\Quantity\Distance|null
    */
   function getDepth()
   {
       return $this->getProp('depth');
   }

   /**
     * The GTIN-13 code of the product, or the product to which the offer refers. This is equivalent to 13-digit ISBN codes
     * and EAN UCC-13. Former 12-digit UPC codes can be converted into a GTIN-13 code by simply adding a preceding zero. See
     * [GS1 GTIN Summary](http://www.gs1.org/barcodes/technical/idkeys/gtin) for more details.
    * @return \Vnetby\Schemaorg\DataTypes\DataText|null
    */
   function getGtin13()
   {
       return $this->getProp('gtin13');
   }

   /**
     * The date of production of the item, e.g. vehicle.
    * @return \Vnetby\Schemaorg\DataTypes\DataDate|null
    */
   function getProductionDate()
   {
       return $this->getProp('productionDate');
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
     * The place where the item (typically [[Product]]) was last processed and tested before importation.
    * @return \Vnetby\Schemaorg\DataTypes\DataText|null
    */
   function getCountryOfLastProcessing()
   {
       return $this->getProp('countryOfLastProcessing');
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
     * An Amazon Standard Identification Number (ASIN) is a 10-character alphanumeric unique identifier assigned by Amazon.com and its partners for product identification
     * within the Amazon organization (summary from [Wikipedia](https://en.wikipedia.org/wiki/Amazon_Standard_Identification_Number)'s article). Note also that this is a definition for how to include ASINs in
     * Schema.org data, and not a definition of ASINs in general - see documentation from Amazon for authoritative details. ASINs are most
     * commonly encoded as text strings, but the [asin] property supports URL/URI as potential values too.
    * @return \Vnetby\Schemaorg\DataTypes\DataURL|\Vnetby\Schemaorg\DataTypes\DataText|null
    */
   function getAsin()
   {
       return $this->getProp('asin');
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
     * An associated logo.
    * @return \Vnetby\Schemaorg\Types\Thing\CreativeWork\MediaObject\ImageObject\ImageObject|\Vnetby\Schemaorg\DataTypes\DataURL|null
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
