<?php

/**
 * @see https://schema.org/Menu
 * A structured representation of food or drink items available from a FoodEstablishment.
 */

namespace Vnetby\Schemaorg\Types\Thing\CreativeWork;

class Menu extends \Vnetby\Schemaorg\Types\Thing\CreativeWork\CreativeWork
{
    const TYPE = 'Menu';

    /**
     * A food or drink item contained in a menu or menu section.
     * @var \Vnetby\Schemaorg\Types\Thing\Intangible\MenuItem
     */
    public $hasMenuItem;

    /**
     * A subgrouping of the menu (by dishes, course, serving time period, etc.).
     * @var \Vnetby\Schemaorg\Types\Thing\CreativeWork\MenuSection
     */
    public $hasMenuSection;

    /**
     * A food or drink item contained in a menu or menu section.
     * @param \Vnetby\Schemaorg\Types\Thing\Intangible\MenuItem $value
     * @return static
     */
    function setHasMenuItem($value)
    {
        return $this->setProp('hasMenuItem', $value);
    }

    /**
     * A subgrouping of the menu (by dishes, course, serving time period, etc.).
     * @param \Vnetby\Schemaorg\Types\Thing\CreativeWork\MenuSection $value
     * @return static
     */
    function setHasMenuSection($value)
    {
        return $this->setProp('hasMenuSection', $value);
    }

    /**
     * A food or drink item contained in a menu or menu section.
     * @return \Vnetby\Schemaorg\Types\Thing\Intangible\MenuItem|null
     */
    function getHasMenuItem()
    {
        return $this->getProp('hasMenuItem');
    }

    /**
     * A subgrouping of the menu (by dishes, course, serving time period, etc.).
     * @return \Vnetby\Schemaorg\Types\Thing\CreativeWork\MenuSection|null
     */
    function getHasMenuSection()
    {
        return $this->getProp('hasMenuSection');
    }
}
