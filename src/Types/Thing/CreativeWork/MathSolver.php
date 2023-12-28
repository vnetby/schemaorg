<?php

/**
* @see https://schema.org/MathSolver
 * A math solver which is capable of solving a subset of mathematical problems.
*/

namespace Vnetby\Schemaorg\Types\Thing\CreativeWork;

class MathSolver extends \Vnetby\Schemaorg\Types\Thing\CreativeWork\CreativeWork
{
   const TYPE = 'MathSolver';

   /**
     * A mathematical expression (e.g. 'x^2-3x=0') that may be solved for a specific variable, simplified, or transformed. This can take many formats,
     * e.g. LaTeX, Ascii-Math, or math as you would write with a keyboard.
    * @var \Vnetby\Schemaorg\Types\Thing\Action\SolveMathAction|\Vnetby\Schemaorg\DataTypes\DataText
    */
   protected $prop_mathExpression;

   /**
     * A mathematical expression (e.g. 'x^2-3x=0') that may be solved for a specific variable, simplified, or transformed. This can take many formats,
     * e.g. LaTeX, Ascii-Math, or math as you would write with a keyboard.
    * @param \Vnetby\Schemaorg\Types\Thing\Action\SolveMathAction|\Vnetby\Schemaorg\DataTypes\DataText $value
    * @return static
    */
   function setMathExpression($value)
   {
       return $this->setProp('mathExpression', $value);
   }

   /**
     * A mathematical expression (e.g. 'x^2-3x=0') that may be solved for a specific variable, simplified, or transformed. This can take many formats,
     * e.g. LaTeX, Ascii-Math, or math as you would write with a keyboard.
    * @return \Vnetby\Schemaorg\Types\Thing\Action\SolveMathAction|\Vnetby\Schemaorg\DataTypes\DataText|null
    */
   function getMathExpression()
   {
       return $this->getProp('mathExpression');
   }
}
