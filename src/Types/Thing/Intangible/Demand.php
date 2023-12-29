<?php

/**
 * @see https://schema.org/Demand
 * A demand entity represents the public, not necessarily binding, not necessarily exclusive, announcement by an organization or person to seek a
 * certain type of goods or services. For describing demand using this type, the very same properties used for Offer apply.
 */

namespace Vnetby\Schemaorg\Types\Thing\Intangible;

class Demand extends \Vnetby\Schemaorg\Types\Thing\Intangible\Intangible
{
    const TYPE = 'Demand';

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
     * An item being offered (or demanded). The transactional nature of the offer or demand is documented using [[businessFunction]], e.g. sell, lease
     * etc. While several common expected types are listed explicitly in this definition, others can be used. Using a second type, such
     * as Product or a subtype of Product, can clarify the nature of the offer.
     * @var \Vnetby\Schemaorg\Types\Thing\Intangible\Offer\AggregateOffer|\Vnetby\Schemaorg\Types\Thing\Intangible\Trip\Trip|\Vnetby\Schemaorg\Types\Thing\CreativeWork\CreativeWork|\Vnetby\Schemaorg\Types\Thing\Intangible\Service\Service|\Vnetby\Schemaorg\Types\Thing\Product\Product|\Vnetby\Schemaorg\Types\Thing\Intangible\MenuItem|\Vnetby\Schemaorg\Types\Thing\Event\Event
     */
    public $itemOffered;

    /**
     * The end of the availability of the product or service included in the offer.
     * @var string|\Vnetby\Schemaorg\DataTypes\DataTime|\Vnetby\Schemaorg\DataTypes\DataDate|\Vnetby\Schemaorg\DataTypes\DataDateTime
     */
    public $availabilityEnds;

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
     * The ISO 3166-1 (ISO 3166-1 alpha-2) or ISO 3166-2 code, the place, or the GeoShape for the geo-political region(s) for which
     * the offer or delivery charge specification is not valid, e.g. a region where the transaction is not allowed.\n\nSee also [[eligibleRegion]]. 
     * @var string|\Vnetby\Schemaorg\Types\Thing\Intangible\StructuredValue\GeoShape\GeoShape|\Vnetby\Schemaorg\Types\Thing\Place\Place|\Vnetby\Schemaorg\DataTypes\DataText
     */
    public $ineligibleRegion;

    /**
     * A predefined value from OfferItemCondition specifying the condition of the product or service, or the products or services included in the
     * offer. Also used for product return policies to specify the condition of products accepted for returns.
     * @var \Vnetby\Schemaorg\Types\Thing\Intangible\Enumeration\OfferItemCondition\OfferItemCondition
     */
    public $itemCondition;

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
     * The end of the availability of the product or service included in the offer.
     * @param string|\Vnetby\Schemaorg\DataTypes\DataTime|\Vnetby\Schemaorg\DataTypes\DataDate|\Vnetby\Schemaorg\DataTypes\DataDateTime $value
     * @return static
     */
    function setAvailabilityEnds($value)
    {
        return $this->setProp('availabilityEnds', $value);
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
     * The end of the availability of the product or service included in the offer.
     * @return string|\Vnetby\Schemaorg\DataTypes\DataTime|\Vnetby\Schemaorg\DataTypes\DataDate|\Vnetby\Schemaorg\DataTypes\DataDateTime|null
     */
    function getAvailabilityEnds()
    {
        return $this->getProp('availabilityEnds');
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
     * The ISO 3166-1 (ISO 3166-1 alpha-2) or ISO 3166-2 code, the place, or the GeoShape for the geo-political region(s) for which
     * the offer or delivery charge specification is not valid, e.g. a region where the transaction is not allowed.\n\nSee also [[eligibleRegion]]. 
     * @return string|\Vnetby\Schemaorg\Types\Thing\Intangible\StructuredValue\GeoShape\GeoShape|\Vnetby\Schemaorg\Types\Thing\Place\Place|\Vnetby\Schemaorg\DataTypes\DataText|null
     */
    function getIneligibleRegion()
    {
        return $this->getProp('ineligibleRegion');
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
