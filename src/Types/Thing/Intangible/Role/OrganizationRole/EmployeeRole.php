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
     * @var string|int|float|\Vnetby\Schemaorg\DataTypes\DataNumber|\Vnetby\Schemaorg\Types\Thing\Intangible\StructuredValue\PriceSpecification\PriceSpecification|\Vnetby\Schemaorg\Types\Thing\Intangible\StructuredValue\MonetaryAmount
     */
    public $baseSalary;

    /**
     * The currency (coded using [ISO 4217](http://en.wikipedia.org/wiki/ISO_4217)) used for the main salary information in this job posting or for this employee.
     * @var string|\Vnetby\Schemaorg\DataTypes\DataText
     */
    public $salaryCurrency;

    /**
     * The base salary of the job or of an employee in an EmployeeRole.
     * @param string|int|float|\Vnetby\Schemaorg\DataTypes\DataNumber|\Vnetby\Schemaorg\Types\Thing\Intangible\StructuredValue\PriceSpecification\PriceSpecification|\Vnetby\Schemaorg\Types\Thing\Intangible\StructuredValue\MonetaryAmount $value
     * @return static
     */
    function setBaseSalary($value)
    {
        return $this->setProp('baseSalary', $value);
    }

    /**
     * The currency (coded using [ISO 4217](http://en.wikipedia.org/wiki/ISO_4217)) used for the main salary information in this job posting or for this employee.
     * @param string|\Vnetby\Schemaorg\DataTypes\DataText $value
     * @return static
     */
    function setSalaryCurrency($value)
    {
        return $this->setProp('salaryCurrency', $value);
    }

    /**
     * The base salary of the job or of an employee in an EmployeeRole.
     * @return string|int|float|\Vnetby\Schemaorg\DataTypes\DataNumber|\Vnetby\Schemaorg\Types\Thing\Intangible\StructuredValue\PriceSpecification\PriceSpecification|\Vnetby\Schemaorg\Types\Thing\Intangible\StructuredValue\MonetaryAmount|null
     */
    function getBaseSalary()
    {
        return $this->getProp('baseSalary');
    }

    /**
     * The currency (coded using [ISO 4217](http://en.wikipedia.org/wiki/ISO_4217)) used for the main salary information in this job posting or for this employee.
     * @return string|\Vnetby\Schemaorg\DataTypes\DataText|null
     */
    function getSalaryCurrency()
    {
        return $this->getProp('salaryCurrency');
    }
}
