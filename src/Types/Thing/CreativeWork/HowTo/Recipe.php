<?php

/**
 * @see https://schema.org/Recipe
 * A recipe. For dietary restrictions covered by the recipe, a few common restrictions are enumerated via [[suitableForDiet]]. The [[keywords]] property can
 * also be used to add more detail.
 */

namespace Vnetby\Schemaorg\Types\Thing\CreativeWork\HowTo;

class Recipe extends \Vnetby\Schemaorg\Types\Thing\CreativeWork\HowTo\HowTo
{
    const TYPE = 'Recipe';

    /**
     * The category of the recipe—for example, appetizer, entree, etc.
     * @var string|\Vnetby\Schemaorg\DataTypes\DataText
     */
    public $recipeCategory;

    /**
     * A step in making the recipe, in the form of a single item (document, video, etc.) or an ordered list with
     * HowToStep and/or HowToSection items.
     * @var string|\Vnetby\Schemaorg\DataTypes\DataText|\Vnetby\Schemaorg\Types\Thing\CreativeWork\CreativeWork|\Vnetby\Schemaorg\Types\Thing\Intangible\ItemList\ItemList
     */
    public $recipeInstructions;

    /**
     * The method of cooking, such as Frying, Steaming, ...
     * @var string|\Vnetby\Schemaorg\DataTypes\DataText
     */
    public $cookingMethod;

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
     * The quantity produced by the recipe (for example, number of people served, number of servings, etc).
     * @var string|\Vnetby\Schemaorg\Types\Thing\Intangible\StructuredValue\QuantitativeValue\QuantitativeValue|\Vnetby\Schemaorg\DataTypes\DataText
     */
    public $recipeYield;

    /**
     * The time it takes to actually cook the dish, in [ISO 8601 duration format](http://en.wikipedia.org/wiki/ISO_8601).
     * @var \Vnetby\Schemaorg\Types\Thing\Intangible\Quantity\Duration
     */
    public $cookTime;

    /**
     * The cuisine of the recipe (for example, French or Ethiopian).
     * @var string|\Vnetby\Schemaorg\DataTypes\DataText
     */
    public $recipeCuisine;

    /**
     * A single ingredient used in the recipe, e.g. sugar, flour or garlic.
     * @var string|\Vnetby\Schemaorg\DataTypes\DataText
     */
    public $recipeIngredient;

    /**
     * The category of the recipe—for example, appetizer, entree, etc.
     * @param string|\Vnetby\Schemaorg\DataTypes\DataText $value
     * @return static
     */
    function setRecipeCategory($value)
    {
        return $this->setProp('recipeCategory', $value);
    }

    /**
     * A step in making the recipe, in the form of a single item (document, video, etc.) or an ordered list with
     * HowToStep and/or HowToSection items.
     * @param string|\Vnetby\Schemaorg\DataTypes\DataText|\Vnetby\Schemaorg\Types\Thing\CreativeWork\CreativeWork|\Vnetby\Schemaorg\Types\Thing\Intangible\ItemList\ItemList $value
     * @return static
     */
    function setRecipeInstructions($value)
    {
        return $this->setProp('recipeInstructions', $value);
    }

    /**
     * The method of cooking, such as Frying, Steaming, ...
     * @param string|\Vnetby\Schemaorg\DataTypes\DataText $value
     * @return static
     */
    function setCookingMethod($value)
    {
        return $this->setProp('cookingMethod', $value);
    }

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
     * The quantity produced by the recipe (for example, number of people served, number of servings, etc).
     * @param string|\Vnetby\Schemaorg\Types\Thing\Intangible\StructuredValue\QuantitativeValue\QuantitativeValue|\Vnetby\Schemaorg\DataTypes\DataText $value
     * @return static
     */
    function setRecipeYield($value)
    {
        return $this->setProp('recipeYield', $value);
    }

    /**
     * The time it takes to actually cook the dish, in [ISO 8601 duration format](http://en.wikipedia.org/wiki/ISO_8601).
     * @param \Vnetby\Schemaorg\Types\Thing\Intangible\Quantity\Duration $value
     * @return static
     */
    function setCookTime($value)
    {
        return $this->setProp('cookTime', $value);
    }

    /**
     * The cuisine of the recipe (for example, French or Ethiopian).
     * @param string|\Vnetby\Schemaorg\DataTypes\DataText $value
     * @return static
     */
    function setRecipeCuisine($value)
    {
        return $this->setProp('recipeCuisine', $value);
    }

    /**
     * A single ingredient used in the recipe, e.g. sugar, flour or garlic.
     * @param string|\Vnetby\Schemaorg\DataTypes\DataText $value
     * @return static
     */
    function setRecipeIngredient($value)
    {
        return $this->setProp('recipeIngredient', $value);
    }

    /**
     * The category of the recipe—for example, appetizer, entree, etc.
     * @return string|\Vnetby\Schemaorg\DataTypes\DataText|null
     */
    function getRecipeCategory()
    {
        return $this->getProp('recipeCategory');
    }

    /**
     * A step in making the recipe, in the form of a single item (document, video, etc.) or an ordered list with
     * HowToStep and/or HowToSection items.
     * @return string|\Vnetby\Schemaorg\DataTypes\DataText|\Vnetby\Schemaorg\Types\Thing\CreativeWork\CreativeWork|\Vnetby\Schemaorg\Types\Thing\Intangible\ItemList\ItemList|null
     */
    function getRecipeInstructions()
    {
        return $this->getProp('recipeInstructions');
    }

    /**
     * The method of cooking, such as Frying, Steaming, ...
     * @return string|\Vnetby\Schemaorg\DataTypes\DataText|null
     */
    function getCookingMethod()
    {
        return $this->getProp('cookingMethod');
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
     * The quantity produced by the recipe (for example, number of people served, number of servings, etc).
     * @return string|\Vnetby\Schemaorg\Types\Thing\Intangible\StructuredValue\QuantitativeValue\QuantitativeValue|\Vnetby\Schemaorg\DataTypes\DataText|null
     */
    function getRecipeYield()
    {
        return $this->getProp('recipeYield');
    }

    /**
     * The time it takes to actually cook the dish, in [ISO 8601 duration format](http://en.wikipedia.org/wiki/ISO_8601).
     * @return \Vnetby\Schemaorg\Types\Thing\Intangible\Quantity\Duration|null
     */
    function getCookTime()
    {
        return $this->getProp('cookTime');
    }

    /**
     * The cuisine of the recipe (for example, French or Ethiopian).
     * @return string|\Vnetby\Schemaorg\DataTypes\DataText|null
     */
    function getRecipeCuisine()
    {
        return $this->getProp('recipeCuisine');
    }

    /**
     * A single ingredient used in the recipe, e.g. sugar, flour or garlic.
     * @return string|\Vnetby\Schemaorg\DataTypes\DataText|null
     */
    function getRecipeIngredient()
    {
        return $this->getProp('recipeIngredient');
    }
}
