<?php

/**
 * @see https://schema.org/CookAction
 * The act of producing/preparing food.
 */

namespace Vnetby\Schemaorg\Types\Thing\Action\CreateAction;

class CookAction extends \Vnetby\Schemaorg\Types\Thing\Action\CreateAction\CreateAction
{
    const TYPE = 'CookAction';

    /**
     * A sub property of location. The specific food establishment where the action occurred.
     * @var \Vnetby\Schemaorg\Types\Thing\Place\Place|\Vnetby\Schemaorg\Types\Thing\Organization\LocalBusiness\FoodEstablishment\FoodEstablishment
     */
    public $foodEstablishment;

    /**
     * A sub property of location. The specific food event where the action occurred.
     * @var \Vnetby\Schemaorg\Types\Thing\Event\FoodEvent
     */
    public $foodEvent;

    /**
     * A sub property of instrument. The recipe/instructions used to perform the action.
     * @var \Vnetby\Schemaorg\Types\Thing\CreativeWork\HowTo\Recipe
     */
    public $recipe;

    /**
     * A sub property of location. The specific food establishment where the action occurred.
     * @param \Vnetby\Schemaorg\Types\Thing\Place\Place|\Vnetby\Schemaorg\Types\Thing\Organization\LocalBusiness\FoodEstablishment\FoodEstablishment $value
     * @return static
     */
    function setFoodEstablishment($value)
    {
        return $this->setProp('foodEstablishment', $value);
    }

    /**
     * A sub property of location. The specific food event where the action occurred.
     * @param \Vnetby\Schemaorg\Types\Thing\Event\FoodEvent $value
     * @return static
     */
    function setFoodEvent($value)
    {
        return $this->setProp('foodEvent', $value);
    }

    /**
     * A sub property of instrument. The recipe/instructions used to perform the action.
     * @param \Vnetby\Schemaorg\Types\Thing\CreativeWork\HowTo\Recipe $value
     * @return static
     */
    function setRecipe($value)
    {
        return $this->setProp('recipe', $value);
    }

    /**
     * A sub property of location. The specific food establishment where the action occurred.
     * @return \Vnetby\Schemaorg\Types\Thing\Place\Place|\Vnetby\Schemaorg\Types\Thing\Organization\LocalBusiness\FoodEstablishment\FoodEstablishment|null
     */
    function getFoodEstablishment()
    {
        return $this->getProp('foodEstablishment');
    }

    /**
     * A sub property of location. The specific food event where the action occurred.
     * @return \Vnetby\Schemaorg\Types\Thing\Event\FoodEvent|null
     */
    function getFoodEvent()
    {
        return $this->getProp('foodEvent');
    }

    /**
     * A sub property of instrument. The recipe/instructions used to perform the action.
     * @return \Vnetby\Schemaorg\Types\Thing\CreativeWork\HowTo\Recipe|null
     */
    function getRecipe()
    {
        return $this->getProp('recipe');
    }
}
