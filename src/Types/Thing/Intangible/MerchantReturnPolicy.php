<?php

/**
 * @see https://schema.org/MerchantReturnPolicy
 * A MerchantReturnPolicy provides information about product return policies associated with an [[Organization]], [[Product]], or [[Offer]].
 */

namespace Vnetby\Schemaorg\Types\Thing\Intangible;

class MerchantReturnPolicy extends \Vnetby\Schemaorg\Types\Thing\Intangible\Intangible
{
    const TYPE = 'MerchantReturnPolicy';

    /**
     * The method (from an enumeration) by which the customer obtains a return shipping label for a product returned due to customer
     * remorse.
     * @var \Vnetby\Schemaorg\Types\Thing\Intangible\Enumeration\ReturnLabelSourceEnumeration\ReturnLabelSourceEnumeration
     */
    protected $prop_customerRemorseReturnLabelSource;

    /**
     * Are in-store returns offered? (For more advanced return methods use the [[returnMethod]] property.)
     * @var \Vnetby\Schemaorg\DataTypes\DataBoolean
     */
    protected $prop_inStoreReturnsOffered;

    /**
     * Use [[MonetaryAmount]] to specify a fixed restocking fee for product returns, or use [[Number]] to specify a percentage of the product
     * price paid by the customer.
     * @var \Vnetby\Schemaorg\Types\Thing\Intangible\StructuredValue\MonetaryAmount|\Vnetby\Schemaorg\DataTypes\DataNumber
     */
    protected $prop_restockingFee;

    /**
     * A refund type, from an enumerated list.
     * @var \Vnetby\Schemaorg\Types\Thing\Intangible\Enumeration\RefundTypeEnumeration\RefundTypeEnumeration
     */
    protected $prop_refundType;

    /**
     * The type of return method offered, specified from an enumeration.
     * @var \Vnetby\Schemaorg\Types\Thing\Intangible\Enumeration\ReturnMethodEnumeration\ReturnMethodEnumeration
     */
    protected $prop_returnMethod;

    /**
     * A country where a particular merchant return policy applies to, for example the two-letter ISO 3166-1 alpha-2 country code.
     * @var \Vnetby\Schemaorg\Types\Thing\Place\AdministrativeArea\Country|\Vnetby\Schemaorg\DataTypes\DataText
     */
    protected $prop_applicableCountry;

    /**
     * The method (from an enumeration) by which the customer obtains a return shipping label for a defect product.
     * @var \Vnetby\Schemaorg\Types\Thing\Intangible\Enumeration\ReturnLabelSourceEnumeration\ReturnLabelSourceEnumeration
     */
    protected $prop_itemDefectReturnLabelSource;

    /**
     * Specifies either a fixed return date or the number of days (from the delivery date) that a product can be returned.
     * Used when the [[returnPolicyCategory]] property is specified as [[MerchantReturnFiniteReturnWindow]].
     * @var \Vnetby\Schemaorg\DataTypes\DataDateTime|\Vnetby\Schemaorg\DataTypes\DataDate|\Vnetby\Schemaorg\DataTypes\DataInteger
     */
    protected $prop_merchantReturnDays;

    /**
     * The type of return fees if the product is returned due to customer remorse.
     * @var \Vnetby\Schemaorg\Types\Thing\Intangible\Enumeration\ReturnFeesEnumeration\ReturnFeesEnumeration
     */
    protected $prop_customerRemorseReturnFees;

    /**
     * The type of return fees for purchased products (for any return reason).
     * @var \Vnetby\Schemaorg\Types\Thing\Intangible\Enumeration\ReturnFeesEnumeration\ReturnFeesEnumeration
     */
    protected $prop_returnFees;

    /**
     * A property-value pair representing an additional characteristic of the entity, e.g. a product feature or another characteristic for which there is
     * no matching property in schema.org.\n\nNote: Publishers should be aware that applications designed to use specific schema.org properties (e.g. https://schema.org/width, https://schema.org/color, https://schema.org/gtin13,
     * ...) will typically expect such data to be provided using those properties, rather than using the generic property/value mechanism. 
     * @var \Vnetby\Schemaorg\Types\Thing\Intangible\StructuredValue\PropertyValue\PropertyValue
     */
    protected $prop_additionalProperty;

    /**
     * A predefined value from OfferItemCondition specifying the condition of the product or service, or the products or services included in the
     * offer. Also used for product return policies to specify the condition of products accepted for returns.
     * @var \Vnetby\Schemaorg\Types\Thing\Intangible\Enumeration\OfferItemCondition\OfferItemCondition
     */
    protected $prop_itemCondition;

    /**
     * The amount of shipping costs if a product is returned due to customer remorse. Applicable when property [[customerRemorseReturnFees]] equals [[ReturnShippingFees]].
     * @var \Vnetby\Schemaorg\Types\Thing\Intangible\StructuredValue\MonetaryAmount
     */
    protected $prop_customerRemorseReturnShippingFeesAmount;

    /**
     * Specifies an applicable return policy (from an enumeration).
     * @var \Vnetby\Schemaorg\Types\Thing\Intangible\Enumeration\MerchantReturnEnumeration\MerchantReturnEnumeration
     */
    protected $prop_returnPolicyCategory;

    /**
     * The method (from an enumeration) by which the customer obtains a return shipping label for a product returned for any reason.
     * @var \Vnetby\Schemaorg\Types\Thing\Intangible\Enumeration\ReturnLabelSourceEnumeration\ReturnLabelSourceEnumeration
     */
    protected $prop_returnLabelSource;

    /**
     * Specifies a Web page or service by URL, for product returns.
     * @var \Vnetby\Schemaorg\DataTypes\DataURL
     */
    protected $prop_merchantReturnLink;

    /**
     * The type of return fees for returns of defect products.
     * @var \Vnetby\Schemaorg\Types\Thing\Intangible\Enumeration\ReturnFeesEnumeration\ReturnFeesEnumeration
     */
    protected $prop_itemDefectReturnFees;

    /**
     * Amount of shipping costs for defect product returns. Applicable when property [[itemDefectReturnFees]] equals [[ReturnShippingFees]].
     * @var \Vnetby\Schemaorg\Types\Thing\Intangible\StructuredValue\MonetaryAmount
     */
    protected $prop_itemDefectReturnShippingFeesAmount;

    /**
     * Seasonal override of a return policy.
     * @var \Vnetby\Schemaorg\Types\Thing\Intangible\MerchantReturnPolicySeasonalOverride
     */
    protected $prop_returnPolicySeasonalOverride;

    /**
     * Amount of shipping costs for product returns (for any reason). Applicable when property [[returnFees]] equals [[ReturnShippingFees]].
     * @var \Vnetby\Schemaorg\Types\Thing\Intangible\StructuredValue\MonetaryAmount
     */
    protected $prop_returnShippingFeesAmount;

    /**
     * The country where the product has to be sent to for returns, for example "Ireland" using the [[name]] property of [[Country]].
     * You can also provide the two-letter [ISO 3166-1 alpha-2 country code](http://en.wikipedia.org/wiki/ISO_3166-1). Note that this can be different from the country where
     * the product was originally shipped from or sent to.
     * @var \Vnetby\Schemaorg\Types\Thing\Place\AdministrativeArea\Country|\Vnetby\Schemaorg\DataTypes\DataText
     */
    protected $prop_returnPolicyCountry;

    /**
     * The method (from an enumeration) by which the customer obtains a return shipping label for a product returned due to customer
     * remorse.
     * @param \Vnetby\Schemaorg\Types\Thing\Intangible\Enumeration\ReturnLabelSourceEnumeration\ReturnLabelSourceEnumeration $value
     * @return static
     */
    function setCustomerRemorseReturnLabelSource($value)
    {
        return $this->setProp('customerRemorseReturnLabelSource', $value);
    }

    /**
     * Are in-store returns offered? (For more advanced return methods use the [[returnMethod]] property.)
     * @param \Vnetby\Schemaorg\DataTypes\DataBoolean $value
     * @return static
     */
    function setInStoreReturnsOffered($value)
    {
        return $this->setProp('inStoreReturnsOffered', $value);
    }

    /**
     * Use [[MonetaryAmount]] to specify a fixed restocking fee for product returns, or use [[Number]] to specify a percentage of the product
     * price paid by the customer.
     * @param \Vnetby\Schemaorg\Types\Thing\Intangible\StructuredValue\MonetaryAmount|\Vnetby\Schemaorg\DataTypes\DataNumber $value
     * @return static
     */
    function setRestockingFee($value)
    {
        return $this->setProp('restockingFee', $value);
    }

    /**
     * A refund type, from an enumerated list.
     * @param \Vnetby\Schemaorg\Types\Thing\Intangible\Enumeration\RefundTypeEnumeration\RefundTypeEnumeration $value
     * @return static
     */
    function setRefundType($value)
    {
        return $this->setProp('refundType', $value);
    }

    /**
     * The type of return method offered, specified from an enumeration.
     * @param \Vnetby\Schemaorg\Types\Thing\Intangible\Enumeration\ReturnMethodEnumeration\ReturnMethodEnumeration $value
     * @return static
     */
    function setReturnMethod($value)
    {
        return $this->setProp('returnMethod', $value);
    }

    /**
     * A country where a particular merchant return policy applies to, for example the two-letter ISO 3166-1 alpha-2 country code.
     * @param \Vnetby\Schemaorg\Types\Thing\Place\AdministrativeArea\Country|\Vnetby\Schemaorg\DataTypes\DataText $value
     * @return static
     */
    function setApplicableCountry($value)
    {
        return $this->setProp('applicableCountry', $value);
    }

    /**
     * The method (from an enumeration) by which the customer obtains a return shipping label for a defect product.
     * @param \Vnetby\Schemaorg\Types\Thing\Intangible\Enumeration\ReturnLabelSourceEnumeration\ReturnLabelSourceEnumeration $value
     * @return static
     */
    function setItemDefectReturnLabelSource($value)
    {
        return $this->setProp('itemDefectReturnLabelSource', $value);
    }

    /**
     * Specifies either a fixed return date or the number of days (from the delivery date) that a product can be returned.
     * Used when the [[returnPolicyCategory]] property is specified as [[MerchantReturnFiniteReturnWindow]].
     * @param \Vnetby\Schemaorg\DataTypes\DataDateTime|\Vnetby\Schemaorg\DataTypes\DataDate|\Vnetby\Schemaorg\DataTypes\DataInteger $value
     * @return static
     */
    function setMerchantReturnDays($value)
    {
        return $this->setProp('merchantReturnDays', $value);
    }

    /**
     * The type of return fees if the product is returned due to customer remorse.
     * @param \Vnetby\Schemaorg\Types\Thing\Intangible\Enumeration\ReturnFeesEnumeration\ReturnFeesEnumeration $value
     * @return static
     */
    function setCustomerRemorseReturnFees($value)
    {
        return $this->setProp('customerRemorseReturnFees', $value);
    }

    /**
     * The type of return fees for purchased products (for any return reason).
     * @param \Vnetby\Schemaorg\Types\Thing\Intangible\Enumeration\ReturnFeesEnumeration\ReturnFeesEnumeration $value
     * @return static
     */
    function setReturnFees($value)
    {
        return $this->setProp('returnFees', $value);
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
     * The amount of shipping costs if a product is returned due to customer remorse. Applicable when property [[customerRemorseReturnFees]] equals [[ReturnShippingFees]].
     * @param \Vnetby\Schemaorg\Types\Thing\Intangible\StructuredValue\MonetaryAmount $value
     * @return static
     */
    function setCustomerRemorseReturnShippingFeesAmount($value)
    {
        return $this->setProp('customerRemorseReturnShippingFeesAmount', $value);
    }

    /**
     * Specifies an applicable return policy (from an enumeration).
     * @param \Vnetby\Schemaorg\Types\Thing\Intangible\Enumeration\MerchantReturnEnumeration\MerchantReturnEnumeration $value
     * @return static
     */
    function setReturnPolicyCategory($value)
    {
        return $this->setProp('returnPolicyCategory', $value);
    }

    /**
     * The method (from an enumeration) by which the customer obtains a return shipping label for a product returned for any reason.
     * @param \Vnetby\Schemaorg\Types\Thing\Intangible\Enumeration\ReturnLabelSourceEnumeration\ReturnLabelSourceEnumeration $value
     * @return static
     */
    function setReturnLabelSource($value)
    {
        return $this->setProp('returnLabelSource', $value);
    }

    /**
     * Specifies a Web page or service by URL, for product returns.
     * @param \Vnetby\Schemaorg\DataTypes\DataURL $value
     * @return static
     */
    function setMerchantReturnLink($value)
    {
        return $this->setProp('merchantReturnLink', $value);
    }

    /**
     * The type of return fees for returns of defect products.
     * @param \Vnetby\Schemaorg\Types\Thing\Intangible\Enumeration\ReturnFeesEnumeration\ReturnFeesEnumeration $value
     * @return static
     */
    function setItemDefectReturnFees($value)
    {
        return $this->setProp('itemDefectReturnFees', $value);
    }

    /**
     * Amount of shipping costs for defect product returns. Applicable when property [[itemDefectReturnFees]] equals [[ReturnShippingFees]].
     * @param \Vnetby\Schemaorg\Types\Thing\Intangible\StructuredValue\MonetaryAmount $value
     * @return static
     */
    function setItemDefectReturnShippingFeesAmount($value)
    {
        return $this->setProp('itemDefectReturnShippingFeesAmount', $value);
    }

    /**
     * Seasonal override of a return policy.
     * @param \Vnetby\Schemaorg\Types\Thing\Intangible\MerchantReturnPolicySeasonalOverride $value
     * @return static
     */
    function setReturnPolicySeasonalOverride($value)
    {
        return $this->setProp('returnPolicySeasonalOverride', $value);
    }

    /**
     * Amount of shipping costs for product returns (for any reason). Applicable when property [[returnFees]] equals [[ReturnShippingFees]].
     * @param \Vnetby\Schemaorg\Types\Thing\Intangible\StructuredValue\MonetaryAmount $value
     * @return static
     */
    function setReturnShippingFeesAmount($value)
    {
        return $this->setProp('returnShippingFeesAmount', $value);
    }

    /**
     * The country where the product has to be sent to for returns, for example "Ireland" using the [[name]] property of [[Country]].
     * You can also provide the two-letter [ISO 3166-1 alpha-2 country code](http://en.wikipedia.org/wiki/ISO_3166-1). Note that this can be different from the country where
     * the product was originally shipped from or sent to.
     * @param \Vnetby\Schemaorg\Types\Thing\Place\AdministrativeArea\Country|\Vnetby\Schemaorg\DataTypes\DataText $value
     * @return static
     */
    function setReturnPolicyCountry($value)
    {
        return $this->setProp('returnPolicyCountry', $value);
    }

    /**
     * The method (from an enumeration) by which the customer obtains a return shipping label for a product returned due to customer
     * remorse.
     * @return \Vnetby\Schemaorg\Types\Thing\Intangible\Enumeration\ReturnLabelSourceEnumeration\ReturnLabelSourceEnumeration|null
     */
    function getCustomerRemorseReturnLabelSource()
    {
        return $this->getProp('customerRemorseReturnLabelSource');
    }

    /**
     * Are in-store returns offered? (For more advanced return methods use the [[returnMethod]] property.)
     * @return \Vnetby\Schemaorg\DataTypes\DataBoolean|null
     */
    function getInStoreReturnsOffered()
    {
        return $this->getProp('inStoreReturnsOffered');
    }

    /**
     * Use [[MonetaryAmount]] to specify a fixed restocking fee for product returns, or use [[Number]] to specify a percentage of the product
     * price paid by the customer.
     * @return \Vnetby\Schemaorg\Types\Thing\Intangible\StructuredValue\MonetaryAmount|\Vnetby\Schemaorg\DataTypes\DataNumber|null
     */
    function getRestockingFee()
    {
        return $this->getProp('restockingFee');
    }

    /**
     * A refund type, from an enumerated list.
     * @return \Vnetby\Schemaorg\Types\Thing\Intangible\Enumeration\RefundTypeEnumeration\RefundTypeEnumeration|null
     */
    function getRefundType()
    {
        return $this->getProp('refundType');
    }

    /**
     * The type of return method offered, specified from an enumeration.
     * @return \Vnetby\Schemaorg\Types\Thing\Intangible\Enumeration\ReturnMethodEnumeration\ReturnMethodEnumeration|null
     */
    function getReturnMethod()
    {
        return $this->getProp('returnMethod');
    }

    /**
     * A country where a particular merchant return policy applies to, for example the two-letter ISO 3166-1 alpha-2 country code.
     * @return \Vnetby\Schemaorg\Types\Thing\Place\AdministrativeArea\Country|\Vnetby\Schemaorg\DataTypes\DataText|null
     */
    function getApplicableCountry()
    {
        return $this->getProp('applicableCountry');
    }

    /**
     * The method (from an enumeration) by which the customer obtains a return shipping label for a defect product.
     * @return \Vnetby\Schemaorg\Types\Thing\Intangible\Enumeration\ReturnLabelSourceEnumeration\ReturnLabelSourceEnumeration|null
     */
    function getItemDefectReturnLabelSource()
    {
        return $this->getProp('itemDefectReturnLabelSource');
    }

    /**
     * Specifies either a fixed return date or the number of days (from the delivery date) that a product can be returned.
     * Used when the [[returnPolicyCategory]] property is specified as [[MerchantReturnFiniteReturnWindow]].
     * @return \Vnetby\Schemaorg\DataTypes\DataDateTime|\Vnetby\Schemaorg\DataTypes\DataDate|\Vnetby\Schemaorg\DataTypes\DataInteger|null
     */
    function getMerchantReturnDays()
    {
        return $this->getProp('merchantReturnDays');
    }

    /**
     * The type of return fees if the product is returned due to customer remorse.
     * @return \Vnetby\Schemaorg\Types\Thing\Intangible\Enumeration\ReturnFeesEnumeration\ReturnFeesEnumeration|null
     */
    function getCustomerRemorseReturnFees()
    {
        return $this->getProp('customerRemorseReturnFees');
    }

    /**
     * The type of return fees for purchased products (for any return reason).
     * @return \Vnetby\Schemaorg\Types\Thing\Intangible\Enumeration\ReturnFeesEnumeration\ReturnFeesEnumeration|null
     */
    function getReturnFees()
    {
        return $this->getProp('returnFees');
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
     * A predefined value from OfferItemCondition specifying the condition of the product or service, or the products or services included in the
     * offer. Also used for product return policies to specify the condition of products accepted for returns.
     * @return \Vnetby\Schemaorg\Types\Thing\Intangible\Enumeration\OfferItemCondition\OfferItemCondition|null
     */
    function getItemCondition()
    {
        return $this->getProp('itemCondition');
    }

    /**
     * The amount of shipping costs if a product is returned due to customer remorse. Applicable when property [[customerRemorseReturnFees]] equals [[ReturnShippingFees]].
     * @return \Vnetby\Schemaorg\Types\Thing\Intangible\StructuredValue\MonetaryAmount|null
     */
    function getCustomerRemorseReturnShippingFeesAmount()
    {
        return $this->getProp('customerRemorseReturnShippingFeesAmount');
    }

    /**
     * Specifies an applicable return policy (from an enumeration).
     * @return \Vnetby\Schemaorg\Types\Thing\Intangible\Enumeration\MerchantReturnEnumeration\MerchantReturnEnumeration|null
     */
    function getReturnPolicyCategory()
    {
        return $this->getProp('returnPolicyCategory');
    }

    /**
     * The method (from an enumeration) by which the customer obtains a return shipping label for a product returned for any reason.
     * @return \Vnetby\Schemaorg\Types\Thing\Intangible\Enumeration\ReturnLabelSourceEnumeration\ReturnLabelSourceEnumeration|null
     */
    function getReturnLabelSource()
    {
        return $this->getProp('returnLabelSource');
    }

    /**
     * Specifies a Web page or service by URL, for product returns.
     * @return \Vnetby\Schemaorg\DataTypes\DataURL|null
     */
    function getMerchantReturnLink()
    {
        return $this->getProp('merchantReturnLink');
    }

    /**
     * The type of return fees for returns of defect products.
     * @return \Vnetby\Schemaorg\Types\Thing\Intangible\Enumeration\ReturnFeesEnumeration\ReturnFeesEnumeration|null
     */
    function getItemDefectReturnFees()
    {
        return $this->getProp('itemDefectReturnFees');
    }

    /**
     * Amount of shipping costs for defect product returns. Applicable when property [[itemDefectReturnFees]] equals [[ReturnShippingFees]].
     * @return \Vnetby\Schemaorg\Types\Thing\Intangible\StructuredValue\MonetaryAmount|null
     */
    function getItemDefectReturnShippingFeesAmount()
    {
        return $this->getProp('itemDefectReturnShippingFeesAmount');
    }

    /**
     * Seasonal override of a return policy.
     * @return \Vnetby\Schemaorg\Types\Thing\Intangible\MerchantReturnPolicySeasonalOverride|null
     */
    function getReturnPolicySeasonalOverride()
    {
        return $this->getProp('returnPolicySeasonalOverride');
    }

    /**
     * Amount of shipping costs for product returns (for any reason). Applicable when property [[returnFees]] equals [[ReturnShippingFees]].
     * @return \Vnetby\Schemaorg\Types\Thing\Intangible\StructuredValue\MonetaryAmount|null
     */
    function getReturnShippingFeesAmount()
    {
        return $this->getProp('returnShippingFeesAmount');
    }

    /**
     * The country where the product has to be sent to for returns, for example "Ireland" using the [[name]] property of [[Country]].
     * You can also provide the two-letter [ISO 3166-1 alpha-2 country code](http://en.wikipedia.org/wiki/ISO_3166-1). Note that this can be different from the country where
     * the product was originally shipped from or sent to.
     * @return \Vnetby\Schemaorg\Types\Thing\Place\AdministrativeArea\Country|\Vnetby\Schemaorg\DataTypes\DataText|null
     */
    function getReturnPolicyCountry()
    {
        return $this->getProp('returnPolicyCountry');
    }
}
