<?php

/**
 * @see https://schema.org/Permit
 * A permit issued by an organization, e.g. a parking pass.
 */

namespace Vnetby\Schemaorg\Types\Thing\Intangible\Permit;

class Permit extends \Vnetby\Schemaorg\Types\Thing\Intangible\Intangible
{
    const TYPE = 'Permit';

    /**
     * The date when the item is no longer valid.
     * @var \Vnetby\Schemaorg\DataTypes\DataDate
     */
    protected $prop_validUntil;

    /**
     * The date when the item becomes valid.
     * @var \Vnetby\Schemaorg\DataTypes\DataDateTime|\Vnetby\Schemaorg\DataTypes\DataDate
     */
    protected $prop_validFrom;

    /**
     * The duration of validity of a permit or similar thing.
     * @var \Vnetby\Schemaorg\Types\Thing\Intangible\Quantity\Duration
     */
    protected $prop_validFor;

    /**
     * The target audience for this permit.
     * @var \Vnetby\Schemaorg\Types\Thing\Intangible\Audience\Audience
     */
    protected $prop_permitAudience;

    /**
     * The organization issuing the ticket or permit.
     * @var \Vnetby\Schemaorg\Types\Thing\Organization\Organization
     */
    protected $prop_issuedBy;

    /**
     * The geographic area where a permit or similar thing is valid.
     * @var \Vnetby\Schemaorg\Types\Thing\Place\AdministrativeArea\AdministrativeArea
     */
    protected $prop_validIn;

    /**
     * The service through which the permit was granted.
     * @var \Vnetby\Schemaorg\Types\Thing\Intangible\Service\Service
     */
    protected $prop_issuedThrough;

    /**
     * The date when the item is no longer valid.
     * @param \Vnetby\Schemaorg\DataTypes\DataDate $value
     * @return static
     */
    function setValidUntil($value)
    {
        return $this->setProp('validUntil', $value);
    }

    /**
     * The date when the item becomes valid.
     * @param \Vnetby\Schemaorg\DataTypes\DataDateTime|\Vnetby\Schemaorg\DataTypes\DataDate $value
     * @return static
     */
    function setValidFrom($value)
    {
        return $this->setProp('validFrom', $value);
    }

    /**
     * The duration of validity of a permit or similar thing.
     * @param \Vnetby\Schemaorg\Types\Thing\Intangible\Quantity\Duration $value
     * @return static
     */
    function setValidFor($value)
    {
        return $this->setProp('validFor', $value);
    }

    /**
     * The target audience for this permit.
     * @param \Vnetby\Schemaorg\Types\Thing\Intangible\Audience\Audience $value
     * @return static
     */
    function setPermitAudience($value)
    {
        return $this->setProp('permitAudience', $value);
    }

    /**
     * The organization issuing the ticket or permit.
     * @param \Vnetby\Schemaorg\Types\Thing\Organization\Organization $value
     * @return static
     */
    function setIssuedBy($value)
    {
        return $this->setProp('issuedBy', $value);
    }

    /**
     * The geographic area where a permit or similar thing is valid.
     * @param \Vnetby\Schemaorg\Types\Thing\Place\AdministrativeArea\AdministrativeArea $value
     * @return static
     */
    function setValidIn($value)
    {
        return $this->setProp('validIn', $value);
    }

    /**
     * The service through which the permit was granted.
     * @param \Vnetby\Schemaorg\Types\Thing\Intangible\Service\Service $value
     * @return static
     */
    function setIssuedThrough($value)
    {
        return $this->setProp('issuedThrough', $value);
    }

    /**
     * The date when the item is no longer valid.
     * @return \Vnetby\Schemaorg\DataTypes\DataDate|null
     */
    function getValidUntil()
    {
        return $this->getProp('validUntil');
    }

    /**
     * The date when the item becomes valid.
     * @return \Vnetby\Schemaorg\DataTypes\DataDateTime|\Vnetby\Schemaorg\DataTypes\DataDate|null
     */
    function getValidFrom()
    {
        return $this->getProp('validFrom');
    }

    /**
     * The duration of validity of a permit or similar thing.
     * @return \Vnetby\Schemaorg\Types\Thing\Intangible\Quantity\Duration|null
     */
    function getValidFor()
    {
        return $this->getProp('validFor');
    }

    /**
     * The target audience for this permit.
     * @return \Vnetby\Schemaorg\Types\Thing\Intangible\Audience\Audience|null
     */
    function getPermitAudience()
    {
        return $this->getProp('permitAudience');
    }

    /**
     * The organization issuing the ticket or permit.
     * @return \Vnetby\Schemaorg\Types\Thing\Organization\Organization|null
     */
    function getIssuedBy()
    {
        return $this->getProp('issuedBy');
    }

    /**
     * The geographic area where a permit or similar thing is valid.
     * @return \Vnetby\Schemaorg\Types\Thing\Place\AdministrativeArea\AdministrativeArea|null
     */
    function getValidIn()
    {
        return $this->getProp('validIn');
    }

    /**
     * The service through which the permit was granted.
     * @return \Vnetby\Schemaorg\Types\Thing\Intangible\Service\Service|null
     */
    function getIssuedThrough()
    {
        return $this->getProp('issuedThrough');
    }
}
