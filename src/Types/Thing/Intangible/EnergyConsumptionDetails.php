<?php

/**
 * @see https://schema.org/EnergyConsumptionDetails
 * EnergyConsumptionDetails represents information related to the energy efficiency of a product that consumes energy. The information that can be provided is
 * based on international regulations such as for example [EU directive 2017/1369](https://eur-lex.europa.eu/eli/reg/2017/1369/oj) for energy labeling and the [Energy labeling rule](https://www.ftc.gov/enforcement/rules/rulemaking-regulatory-reform-proceedings/energy-water-use-labeling-consumer) under the
 * Energy Policy and Conservation Act (EPCA) in the US.
 */

namespace Vnetby\Schemaorg\Types\Thing\Intangible;

class EnergyConsumptionDetails extends \Vnetby\Schemaorg\Types\Thing\Intangible\Intangible
{
    const TYPE = 'EnergyConsumptionDetails';

    /**
     * Specifies the most energy efficient class on the regulated EU energy consumption scale for the product category a product belongs to.
     * For example, energy consumption for televisions placed on the market after January 1, 2020 is scaled from D to A+++.
     * @var \Vnetby\Schemaorg\Types\Thing\Intangible\Enumeration\EnergyEfficiencyEnumeration\EUEnergyEfficiencyEnumeration\EUEnergyEfficiencyEnumeration
     */
    public $energyEfficiencyScaleMax;

    /**
     * Defines the energy efficiency Category (which could be either a rating out of range of values or a yes/no certification) for
     * a product according to an international energy efficiency standard.
     * @var \Vnetby\Schemaorg\Types\Thing\Intangible\Enumeration\EnergyEfficiencyEnumeration\EnergyEfficiencyEnumeration
     */
    public $hasEnergyEfficiencyCategory;

    /**
     * Specifies the least energy efficient class on the regulated EU energy consumption scale for the product category a product belongs to.
     * For example, energy consumption for televisions placed on the market after January 1, 2020 is scaled from D to A+++.
     * @var \Vnetby\Schemaorg\Types\Thing\Intangible\Enumeration\EnergyEfficiencyEnumeration\EUEnergyEfficiencyEnumeration\EUEnergyEfficiencyEnumeration
     */
    public $energyEfficiencyScaleMin;

    /**
     * Specifies the most energy efficient class on the regulated EU energy consumption scale for the product category a product belongs to.
     * For example, energy consumption for televisions placed on the market after January 1, 2020 is scaled from D to A+++.
     * @param \Vnetby\Schemaorg\Types\Thing\Intangible\Enumeration\EnergyEfficiencyEnumeration\EUEnergyEfficiencyEnumeration\EUEnergyEfficiencyEnumeration $value
     * @return static
     */
    function setEnergyEfficiencyScaleMax($value)
    {
        return $this->setProp('energyEfficiencyScaleMax', $value);
    }

    /**
     * Defines the energy efficiency Category (which could be either a rating out of range of values or a yes/no certification) for
     * a product according to an international energy efficiency standard.
     * @param \Vnetby\Schemaorg\Types\Thing\Intangible\Enumeration\EnergyEfficiencyEnumeration\EnergyEfficiencyEnumeration $value
     * @return static
     */
    function setHasEnergyEfficiencyCategory($value)
    {
        return $this->setProp('hasEnergyEfficiencyCategory', $value);
    }

    /**
     * Specifies the least energy efficient class on the regulated EU energy consumption scale for the product category a product belongs to.
     * For example, energy consumption for televisions placed on the market after January 1, 2020 is scaled from D to A+++.
     * @param \Vnetby\Schemaorg\Types\Thing\Intangible\Enumeration\EnergyEfficiencyEnumeration\EUEnergyEfficiencyEnumeration\EUEnergyEfficiencyEnumeration $value
     * @return static
     */
    function setEnergyEfficiencyScaleMin($value)
    {
        return $this->setProp('energyEfficiencyScaleMin', $value);
    }

    /**
     * Specifies the most energy efficient class on the regulated EU energy consumption scale for the product category a product belongs to.
     * For example, energy consumption for televisions placed on the market after January 1, 2020 is scaled from D to A+++.
     * @return \Vnetby\Schemaorg\Types\Thing\Intangible\Enumeration\EnergyEfficiencyEnumeration\EUEnergyEfficiencyEnumeration\EUEnergyEfficiencyEnumeration|null
     */
    function getEnergyEfficiencyScaleMax()
    {
        return $this->getProp('energyEfficiencyScaleMax');
    }

    /**
     * Defines the energy efficiency Category (which could be either a rating out of range of values or a yes/no certification) for
     * a product according to an international energy efficiency standard.
     * @return \Vnetby\Schemaorg\Types\Thing\Intangible\Enumeration\EnergyEfficiencyEnumeration\EnergyEfficiencyEnumeration|null
     */
    function getHasEnergyEfficiencyCategory()
    {
        return $this->getProp('hasEnergyEfficiencyCategory');
    }

    /**
     * Specifies the least energy efficient class on the regulated EU energy consumption scale for the product category a product belongs to.
     * For example, energy consumption for televisions placed on the market after January 1, 2020 is scaled from D to A+++.
     * @return \Vnetby\Schemaorg\Types\Thing\Intangible\Enumeration\EnergyEfficiencyEnumeration\EUEnergyEfficiencyEnumeration\EUEnergyEfficiencyEnumeration|null
     */
    function getEnergyEfficiencyScaleMin()
    {
        return $this->getProp('energyEfficiencyScaleMin');
    }
}
