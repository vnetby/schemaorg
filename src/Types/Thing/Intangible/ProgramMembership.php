<?php

/**
 * @see https://schema.org/ProgramMembership
 * Used to describe membership in a loyalty programs (e.g. "StarAliance"), traveler clubs (e.g. "AAA"), purchase clubs ("Safeway Club"), etc.
 */

namespace Vnetby\Schemaorg\Types\Thing\Intangible;

class ProgramMembership extends \Vnetby\Schemaorg\Types\Thing\Intangible\Intangible
{
    const TYPE = 'ProgramMembership';

    /**
     * The number of membership points earned by the member. If necessary, the unitText can be used to express the units the
     * points are issued in. (E.g. stars, miles, etc.)
     * @var string|int|float|\Vnetby\Schemaorg\Types\Thing\Intangible\StructuredValue\QuantitativeValue\QuantitativeValue|\Vnetby\Schemaorg\DataTypes\DataNumber
     */
    public $membershipPointsEarned;

    /**
     * The organization (airline, travelers' club, etc.) the membership is made with.
     * @var \Vnetby\Schemaorg\Types\Thing\Organization\Organization
     */
    public $hostingOrganization;

    /**
     * A member of an Organization or a ProgramMembership. Organizations can be members of organizations; ProgramMembership is typically for individuals.
     * @var \Vnetby\Schemaorg\Types\Thing\Person\Person|\Vnetby\Schemaorg\Types\Thing\Organization\Organization
     */
    public $member;

    /**
     * A unique identifier for the membership.
     * @var string|\Vnetby\Schemaorg\DataTypes\DataText
     */
    public $membershipNumber;

    /**
     * The program providing the membership.
     * @var string|\Vnetby\Schemaorg\DataTypes\DataText
     */
    public $programName;

    /**
     * The number of membership points earned by the member. If necessary, the unitText can be used to express the units the
     * points are issued in. (E.g. stars, miles, etc.)
     * @param string|int|float|\Vnetby\Schemaorg\Types\Thing\Intangible\StructuredValue\QuantitativeValue\QuantitativeValue|\Vnetby\Schemaorg\DataTypes\DataNumber $value
     * @return static
     */
    function setMembershipPointsEarned($value)
    {
        return $this->setProp('membershipPointsEarned', $value);
    }

    /**
     * The organization (airline, travelers' club, etc.) the membership is made with.
     * @param \Vnetby\Schemaorg\Types\Thing\Organization\Organization $value
     * @return static
     */
    function setHostingOrganization($value)
    {
        return $this->setProp('hostingOrganization', $value);
    }

    /**
     * A member of an Organization or a ProgramMembership. Organizations can be members of organizations; ProgramMembership is typically for individuals.
     * @param \Vnetby\Schemaorg\Types\Thing\Person\Person|\Vnetby\Schemaorg\Types\Thing\Organization\Organization $value
     * @return static
     */
    function setMember($value)
    {
        return $this->setProp('member', $value);
    }

    /**
     * A unique identifier for the membership.
     * @param string|\Vnetby\Schemaorg\DataTypes\DataText $value
     * @return static
     */
    function setMembershipNumber($value)
    {
        return $this->setProp('membershipNumber', $value);
    }

    /**
     * The program providing the membership.
     * @param string|\Vnetby\Schemaorg\DataTypes\DataText $value
     * @return static
     */
    function setProgramName($value)
    {
        return $this->setProp('programName', $value);
    }

    /**
     * The number of membership points earned by the member. If necessary, the unitText can be used to express the units the
     * points are issued in. (E.g. stars, miles, etc.)
     * @return string|int|float|\Vnetby\Schemaorg\Types\Thing\Intangible\StructuredValue\QuantitativeValue\QuantitativeValue|\Vnetby\Schemaorg\DataTypes\DataNumber|null
     */
    function getMembershipPointsEarned()
    {
        return $this->getProp('membershipPointsEarned');
    }

    /**
     * The organization (airline, travelers' club, etc.) the membership is made with.
     * @return \Vnetby\Schemaorg\Types\Thing\Organization\Organization|null
     */
    function getHostingOrganization()
    {
        return $this->getProp('hostingOrganization');
    }

    /**
     * A member of an Organization or a ProgramMembership. Organizations can be members of organizations; ProgramMembership is typically for individuals.
     * @return \Vnetby\Schemaorg\Types\Thing\Person\Person|\Vnetby\Schemaorg\Types\Thing\Organization\Organization|null
     */
    function getMember()
    {
        return $this->getProp('member');
    }

    /**
     * A unique identifier for the membership.
     * @return string|\Vnetby\Schemaorg\DataTypes\DataText|null
     */
    function getMembershipNumber()
    {
        return $this->getProp('membershipNumber');
    }

    /**
     * The program providing the membership.
     * @return string|\Vnetby\Schemaorg\DataTypes\DataText|null
     */
    function getProgramName()
    {
        return $this->getProp('programName');
    }
}
