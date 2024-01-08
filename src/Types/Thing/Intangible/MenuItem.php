<?php

/**
 * @see https://schema.org/MenuItem
 * A food or drink item listed in a menu or menu section.
 */

namespace Vnetby\Schemaorg\Types\Thing\Intangible;

class MenuItem extends \Vnetby\Schemaorg\Types\Thing\Intangible\Intangible
{
    const TYPE = 'MenuItem';

    /**
     * Indicates a dietary restriction or guideline for which this recipe or menu item is suitable, e.g. diabetic, halal etc.
     * @var \Vnetby\Schemaorg\Types\Thing\Intangible\Enumeration\RestrictedDiet\RestrictedDiet
     */
    public $suitableForDiet;

    /**
     * Nutrition information about the recipe or menu item.
     * @var \Vnetby\Schemaorg\Types\Thing\Intangible\StructuredValue\NutritionInformation
     */
    public $nutrition;

    /**
     * An offer to provide this item&#x2014;for example, an offer to sell a product, rent the DVD of a movie, perform a
     * service, or give away tickets to an event. Use [[businessFunction]] to indicate the kind of transaction offered, i.e. sell, lease, etc.
     * This property can also be used to describe a [[Demand]]. While this property is listed as expected on a number of
     * common types, it can be used in others. In that case, using a second type, such as Product or a subtype
     * of Product, can clarify the nature of the offer. 
     * @var \Vnetby\Schemaorg\Types\Thing\Intangible\Offer\Offer|\Vnetby\Schemaorg\Types\Thing\Intangible\Demand
     */
    public $offers;

    /**
     * Additional menu item(s) such as a side dish of salad or side order of fries that can be added to this
     * menu item. Additionally it can be a menu section containing allowed add-on menu items for this menu item.
     * @var \Vnetby\Schemaorg\Types\Thing\CreativeWork\MenuSection|\Vnetby\Schemaorg\Types\Thing\Intangible\MenuItem
     */
    public $menuAddOn;

    /**
     * Indicates a dietary restriction or guideline for which this recipe or menu item is suitable, e.g. diabetic, halal etc.
     * @param \Vnetby\Schemaorg\Types\Thing\Intangible\Enumeration\RestrictedDiet\RestrictedDiet $value
     * @return static
     */
    function setSuitableForDiet($value)
    {
        return $this->setProp('suitableForDiet', $value);
    }

    /**
     * Nutrition information about the recipe or menu item.
     * @param \Vnetby\Schemaorg\Types\Thing\Intangible\StructuredValue\NutritionInformation $value
     * @return static
     */
    function setNutrition($value)
    {
        return $this->setProp('nutrition', $value);
    }

    /**
     * An offer to provide this item&#x2014;for example, an offer to sell a product, rent the DVD of a movie, perform a
     * service, or give away tickets to an event. Use [[businessFunction]] to indicate the kind of transaction offered, i.e. sell, lease, etc.
     * This property can also be used to describe a [[Demand]]. While this property is listed as expected on a number of
     * common types, it can be used in others. In that case, using a second type, such as Product or a subtype
     * of Product, can clarify the nature of the offer. 
     * @param \Vnetby\Schemaorg\Types\Thing\Intangible\Offer\Offer|\Vnetby\Schemaorg\Types\Thing\Intangible\Demand $value
     * @return static
     */
    function setOffers($value)
    {
        return $this->setProp('offers', $value);
    }

    /**
     * Additional menu item(s) such as a side dish of salad or side order of fries that can be added to this
     * menu item. Additionally it can be a menu section containing allowed add-on menu items for this menu item.
     * @param \Vnetby\Schemaorg\Types\Thing\CreativeWork\MenuSection|\Vnetby\Schemaorg\Types\Thing\Intangible\MenuItem $value
     * @return static
     */
    function setMenuAddOn($value)
    {
        return $this->setProp('menuAddOn', $value);
    }

    /**
     * Indicates a dietary restriction or guideline for which this recipe or menu item is suitable, e.g. diabetic, halal etc.
     * @return \Vnetby\Schemaorg\Types\Thing\Intangible\Enumeration\RestrictedDiet\RestrictedDiet|null
     */
    function getSuitableForDiet()
    {
        return $this->getProp('suitableForDiet');
    }

    /**
     * Nutrition information about the recipe or menu item.
     * @return \Vnetby\Schemaorg\Types\Thing\Intangible\StructuredValue\NutritionInformation|null
     */
    function getNutrition()
    {
        return $this->getProp('nutrition');
    }

    /**
     * An offer to provide this item&#x2014;for example, an offer to sell a product, rent the DVD of a movie, perform a
     * service, or give away tickets to an event. Use [[businessFunction]] to indicate the kind of transaction offered, i.e. sell, lease, etc.
     * This property can also be used to describe a [[Demand]]. While this property is listed as expected on a number of
     * common types, it can be used in others. In that case, using a second type, such as Product or a subtype
     * of Product, can clarify the nature of the offer. 
     * @return \Vnetby\Schemaorg\Types\Thing\Intangible\Offer\Offer|\Vnetby\Schemaorg\Types\Thing\Intangible\Demand|null
     */
    function getOffers()
    {
        return $this->getProp('offers');
    }

    /**
     * Additional menu item(s) such as a side dish of salad or side order of fries that can be added to this
     * menu item. Additionally it can be a menu section containing allowed add-on menu items for this menu item.
     * @return \Vnetby\Schemaorg\Types\Thing\CreativeWork\MenuSection|\Vnetby\Schemaorg\Types\Thing\Intangible\MenuItem|null
     */
    function getMenuAddOn()
    {
        return $this->getProp('menuAddOn');
    }
}
