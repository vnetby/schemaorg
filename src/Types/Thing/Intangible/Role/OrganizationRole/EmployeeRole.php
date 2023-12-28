<?php

/**
 * @see https://schema.org/EmployeeRole
 * A subclass of OrganizationRole used to describe employee relationships.
 */

namespace Vnetby\Schemaorg\Types\Thing\Intangible\Role\OrganizationRole;

class EmployeeRole extends \Vnetby\Schemaorg\Types\Thing\Intangible\Role\OrganizationRole\OrganizationRole
{
    const TYPE = 'EmployeeRole';

    /**
     * The base salary of the job or of an employee in an EmployeeRole.
     * @var \Vnetby\Schemaorg\DataTypes\DataNumber|\Vnetby\Schemaorg\Types\Thing\Intangible\StructuredValue\PriceSpecification\PriceSpecification|\Vnetby\Schemaorg\Types\Thing\Intangible\StructuredValue\MonetaryAmount
     */
    protected $prop_baseSalary;

    /**
     * The currency (coded using [ISO 4217](http://en.wikipedia.org/wiki/ISO_4217)) used for the main salary information in this job posting or for this employee.
     * @var \Vnetby\Schemaorg\DataTypes\DataText
     */
    protected $prop_salaryCurrency;

    /**
     * The base salary of the job or of an employee in an EmployeeRole.
     * @param \Vnetby\Schemaorg\DataTypes\DataNumber|\Vnetby\Schemaorg\Types\Thing\Intangible\StructuredValue\PriceSpecification\PriceSpecification|\Vnetby\Schemaorg\Types\Thing\Intangible\StructuredValue\MonetaryAmount $value
     * @return static
     */
    function setBaseSalary($value)
    {
        return $this->setProp('baseSalary', $value);
    }

    /**
     * The currency (coded using [ISO 4217](http://en.wikipedia.org/wiki/ISO_4217)) used for the main salary information in this job posting or for this employee.
     * @param \Vnetby\Schemaorg\DataTypes\DataText $value
     * @return static
     */
    function setSalaryCurrency($value)
    {
        return $this->setProp('salaryCurrency', $value);
    }

    /**
     * The base salary of the job or of an employee in an EmployeeRole.
     * @return \Vnetby\Schemaorg\DataTypes\DataNumber|\Vnetby\Schemaorg\Types\Thing\Intangible\StructuredValue\PriceSpecification\PriceSpecification|\Vnetby\Schemaorg\Types\Thing\Intangible\StructuredValue\MonetaryAmount|null
     */
    function getBaseSalary()
    {
        return $this->getProp('baseSalary');
    }

    /**
     * The currency (coded using [ISO 4217](http://en.wikipedia.org/wiki/ISO_4217)) used for the main salary information in this job posting or for this employee.
     * @return \Vnetby\Schemaorg\DataTypes\DataText|null
     */
    function getSalaryCurrency()
    {
        return $this->getProp('salaryCurrency');
    }
}
