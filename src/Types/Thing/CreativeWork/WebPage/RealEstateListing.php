<?php

/**
 * @see https://schema.org/RealEstateListing
 * A [[RealEstateListing]] is a listing that describes one or more real-estate [[Offer]]s (whose [[businessFunction]] is typically to lease out, or to
 * sell). The [[RealEstateListing]] type itself represents the overall listing, as manifested in some [[WebPage]]. 
 */

namespace Vnetby\Schemaorg\Types\Thing\CreativeWork\WebPage;

class RealEstateListing extends \Vnetby\Schemaorg\Types\Thing\CreativeWork\WebPage\WebPage
{
    const TYPE = 'RealEstateListing';

    /**
     * Length of the lease for some [[Accommodation]], either particular to some [[Offer]] or in some cases intrinsic to the property.
     * @var \Vnetby\Schemaorg\Types\Thing\Intangible\Quantity\Duration|\Vnetby\Schemaorg\Types\Thing\Intangible\StructuredValue\QuantitativeValue\QuantitativeValue
     */
    public $leaseLength;

    /**
     * Publication date of an online listing.
     * @var string|\Vnetby\Schemaorg\DataTypes\DataDateTime|\Vnetby\Schemaorg\DataTypes\DataDate
     */
    public $datePosted;

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
     * Publication date of an online listing.
     * @param string|\Vnetby\Schemaorg\DataTypes\DataDateTime|\Vnetby\Schemaorg\DataTypes\DataDate $value
     * @return static
     */
    function setDatePosted($value)
    {
        return $this->setProp('datePosted', $value);
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
     * Publication date of an online listing.
     * @return string|\Vnetby\Schemaorg\DataTypes\DataDateTime|\Vnetby\Schemaorg\DataTypes\DataDate|null
     */
    function getDatePosted()
    {
        return $this->getProp('datePosted');
    }
}
