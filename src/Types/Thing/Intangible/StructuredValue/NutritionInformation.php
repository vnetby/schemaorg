<?php

/**
* @see https://schema.org/NutritionInformation
 * Nutritional information about the recipe.
*/

namespace Vnetby\Schemaorg\Types\Thing\Intangible\StructuredValue;

class NutritionInformation extends \Vnetby\Schemaorg\Types\Thing\Intangible\StructuredValue\StructuredValue
{
   const TYPE = 'NutritionInformation';

   /**
     * The number of grams of fiber.
    * @var \Vnetby\Schemaorg\Types\Thing\Intangible\Quantity\Mass
    */
   protected $prop_fiberContent;

   /**
     * The serving size, in terms of the number of volume or mass.
    * @var \Vnetby\Schemaorg\DataTypes\DataText
    */
   protected $prop_servingSize;

   /**
     * The number of milligrams of sodium.
    * @var \Vnetby\Schemaorg\Types\Thing\Intangible\Quantity\Mass
    */
   protected $prop_sodiumContent;

   /**
     * The number of calories.
    * @var \Vnetby\Schemaorg\Types\Thing\Intangible\Quantity\Energy
    */
   protected $prop_calories;

   /**
     * The number of grams of protein.
    * @var \Vnetby\Schemaorg\Types\Thing\Intangible\Quantity\Mass
    */
   protected $prop_proteinContent;

   /**
     * The number of grams of trans fat.
    * @var \Vnetby\Schemaorg\Types\Thing\Intangible\Quantity\Mass
    */
   protected $prop_transFatContent;

   /**
     * The number of grams of carbohydrates.
    * @var \Vnetby\Schemaorg\Types\Thing\Intangible\Quantity\Mass
    */
   protected $prop_carbohydrateContent;

   /**
     * The number of grams of sugar.
    * @var \Vnetby\Schemaorg\Types\Thing\Intangible\Quantity\Mass
    */
   protected $prop_sugarContent;

   /**
     * The number of grams of saturated fat.
    * @var \Vnetby\Schemaorg\Types\Thing\Intangible\Quantity\Mass
    */
   protected $prop_saturatedFatContent;

   /**
     * The number of milligrams of cholesterol.
    * @var \Vnetby\Schemaorg\Types\Thing\Intangible\Quantity\Mass
    */
   protected $prop_cholesterolContent;

   /**
     * The number of grams of fat.
    * @var \Vnetby\Schemaorg\Types\Thing\Intangible\Quantity\Mass
    */
   protected $prop_fatContent;

   /**
     * The number of grams of unsaturated fat.
    * @var \Vnetby\Schemaorg\Types\Thing\Intangible\Quantity\Mass
    */
   protected $prop_unsaturatedFatContent;

   /**
     * The number of grams of fiber.
    * @param \Vnetby\Schemaorg\Types\Thing\Intangible\Quantity\Mass $value
    * @return static
    */
   function setFiberContent($value)
   {
       return $this->setProp('fiberContent', $value);
   }

   /**
     * The serving size, in terms of the number of volume or mass.
    * @param \Vnetby\Schemaorg\DataTypes\DataText $value
    * @return static
    */
   function setServingSize($value)
   {
       return $this->setProp('servingSize', $value);
   }

   /**
     * The number of milligrams of sodium.
    * @param \Vnetby\Schemaorg\Types\Thing\Intangible\Quantity\Mass $value
    * @return static
    */
   function setSodiumContent($value)
   {
       return $this->setProp('sodiumContent', $value);
   }

   /**
     * The number of calories.
    * @param \Vnetby\Schemaorg\Types\Thing\Intangible\Quantity\Energy $value
    * @return static
    */
   function setCalories($value)
   {
       return $this->setProp('calories', $value);
   }

   /**
     * The number of grams of protein.
    * @param \Vnetby\Schemaorg\Types\Thing\Intangible\Quantity\Mass $value
    * @return static
    */
   function setProteinContent($value)
   {
       return $this->setProp('proteinContent', $value);
   }

   /**
     * The number of grams of trans fat.
    * @param \Vnetby\Schemaorg\Types\Thing\Intangible\Quantity\Mass $value
    * @return static
    */
   function setTransFatContent($value)
   {
       return $this->setProp('transFatContent', $value);
   }

   /**
     * The number of grams of carbohydrates.
    * @param \Vnetby\Schemaorg\Types\Thing\Intangible\Quantity\Mass $value
    * @return static
    */
   function setCarbohydrateContent($value)
   {
       return $this->setProp('carbohydrateContent', $value);
   }

   /**
     * The number of grams of sugar.
    * @param \Vnetby\Schemaorg\Types\Thing\Intangible\Quantity\Mass $value
    * @return static
    */
   function setSugarContent($value)
   {
       return $this->setProp('sugarContent', $value);
   }

   /**
     * The number of grams of saturated fat.
    * @param \Vnetby\Schemaorg\Types\Thing\Intangible\Quantity\Mass $value
    * @return static
    */
   function setSaturatedFatContent($value)
   {
       return $this->setProp('saturatedFatContent', $value);
   }

   /**
     * The number of milligrams of cholesterol.
    * @param \Vnetby\Schemaorg\Types\Thing\Intangible\Quantity\Mass $value
    * @return static
    */
   function setCholesterolContent($value)
   {
       return $this->setProp('cholesterolContent', $value);
   }

   /**
     * The number of grams of fat.
    * @param \Vnetby\Schemaorg\Types\Thing\Intangible\Quantity\Mass $value
    * @return static
    */
   function setFatContent($value)
   {
       return $this->setProp('fatContent', $value);
   }

   /**
     * The number of grams of unsaturated fat.
    * @param \Vnetby\Schemaorg\Types\Thing\Intangible\Quantity\Mass $value
    * @return static
    */
   function setUnsaturatedFatContent($value)
   {
       return $this->setProp('unsaturatedFatContent', $value);
   }

   /**
     * The number of grams of fiber.
    * @return \Vnetby\Schemaorg\Types\Thing\Intangible\Quantity\Mass|null
    */
   function getFiberContent()
   {
       return $this->getProp('fiberContent');
   }

   /**
     * The serving size, in terms of the number of volume or mass.
    * @return \Vnetby\Schemaorg\DataTypes\DataText|null
    */
   function getServingSize()
   {
       return $this->getProp('servingSize');
   }

   /**
     * The number of milligrams of sodium.
    * @return \Vnetby\Schemaorg\Types\Thing\Intangible\Quantity\Mass|null
    */
   function getSodiumContent()
   {
       return $this->getProp('sodiumContent');
   }

   /**
     * The number of calories.
    * @return \Vnetby\Schemaorg\Types\Thing\Intangible\Quantity\Energy|null
    */
   function getCalories()
   {
       return $this->getProp('calories');
   }

   /**
     * The number of grams of protein.
    * @return \Vnetby\Schemaorg\Types\Thing\Intangible\Quantity\Mass|null
    */
   function getProteinContent()
   {
       return $this->getProp('proteinContent');
   }

   /**
     * The number of grams of trans fat.
    * @return \Vnetby\Schemaorg\Types\Thing\Intangible\Quantity\Mass|null
    */
   function getTransFatContent()
   {
       return $this->getProp('transFatContent');
   }

   /**
     * The number of grams of carbohydrates.
    * @return \Vnetby\Schemaorg\Types\Thing\Intangible\Quantity\Mass|null
    */
   function getCarbohydrateContent()
   {
       return $this->getProp('carbohydrateContent');
   }

   /**
     * The number of grams of sugar.
    * @return \Vnetby\Schemaorg\Types\Thing\Intangible\Quantity\Mass|null
    */
   function getSugarContent()
   {
       return $this->getProp('sugarContent');
   }

   /**
     * The number of grams of saturated fat.
    * @return \Vnetby\Schemaorg\Types\Thing\Intangible\Quantity\Mass|null
    */
   function getSaturatedFatContent()
   {
       return $this->getProp('saturatedFatContent');
   }

   /**
     * The number of milligrams of cholesterol.
    * @return \Vnetby\Schemaorg\Types\Thing\Intangible\Quantity\Mass|null
    */
   function getCholesterolContent()
   {
       return $this->getProp('cholesterolContent');
   }

   /**
     * The number of grams of fat.
    * @return \Vnetby\Schemaorg\Types\Thing\Intangible\Quantity\Mass|null
    */
   function getFatContent()
   {
       return $this->getProp('fatContent');
   }

   /**
     * The number of grams of unsaturated fat.
    * @return \Vnetby\Schemaorg\Types\Thing\Intangible\Quantity\Mass|null
    */
   function getUnsaturatedFatContent()
   {
       return $this->getProp('unsaturatedFatContent');
   }
}
